<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->has_userdata('email')) {
      redirect('');
    }
    $this->load->library('form_validation');
    $this->load->model('User_model');
    $this->load->model("Facility_model");
  }

  public function index()
  {
    $data['title'] = 'Profile';
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['style'] = 'profile';
    $data['history'] = $this->User_model->bookHistory($data['user']['id_user']);
    $this->load->view('templates/header', $data);
    $this->load->view('profile', $data);
    $this->load->view('templates/footer');
  }
  public function detail()
  {
    if (is_null($this->uri->segment(2)) || $this->uri->segment(2) < 1 || $this->uri->segment(2) > 5) {
      redirect('');
    } else {
      $data['title'] = 'Detail';
      $data['detailRoom'] = $this->Facility_model->getDetailRoom($this->uri->segment(2, 0));
      $data['avaiRoom'] = $this->Facility_model->getAvailableRoom($data['detailRoom']['class']);
      $data['facility'] = explode(",", $data['detailRoom']['room_facility']);
      $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
      $data['style'] = 'detail';
      $this->load->view('templates/header', $data);
      $this->load->view('detail');
      $this->load->view('templates/footer');
    }
  }
  public function payment()
  {
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['no_kamar'] = $this->input->post('no_kamar');
    $data['style'] = 'payment';
    $data['title'] = 'Payment';
    $data['checkin'] = strtotime($this->input->post("checkin"));
    $data['checkout'] = strtotime($this->input->post("checkout"));
    $now = $this->input->post('id');
    $data['status'] = $this->Facility_model->getRoomStatus($data['no_kamar']);
    $data['price'] = $this->input->post('price');
    if ($this->session->has_userdata('no_kamar')) {
      $data['no_kamar'] = $this->session->userdata('no_kamar');
      $this->session->unset_userdata('no_kamar');
      $data['status'] = $this->Facility_model->getRoomStatus($data['no_kamar']);
      if ($this->session->has_userdata('price')) {
        $data['price'] = $this->session->userdata('price');
        $this->session->unset_userdata('price');
      } else {
        $data['price'] = $this->input->post('price_booking');
      }
    }
    if ((int)$data['status']['status'] == 1) {
      $this->load->view('payment', $data);
    } else {
      $this->form_validation->set_rules('checkin', 'Check-In', 'required');
      $this->form_validation->set_rules('checkout', 'Check-Out', 'required');
      if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('error1', form_error('checkin', '<small class="text-danger">', '</small>'));
        $this->session->set_flashdata('error2', form_error('checkout', '<small class="text-danger">', '</small>'));
        redirect('detail/' . $now);
      } else {
        $data['get_statroom'] = $this->Facility_model->getRoomStatus($this->input->post('no_kamar'));
        if ($data['get_statroom']['status'] != 1) {
          $data['night'] = ($data['checkout'] - $data['checkin']) / 86400;
          $data['detroom'] = $this->Facility_model->getDetailRoom($now);
          $data['price'] = $this->User_model->getPriceRoom($data['detroom']['class']);
          $this->Facility_model->insertTransaction((int)$data['night'] * (int)$data['price']['price']);
          $this->Facility_model->updateRoom1();
        }
        $this->load->view('payment', $data);
      }
    }
  }

  public function transactionCC()
  {
    $this->form_validation->set_rules('cc_number', 'Credit Number', 'required|max_length[16]|numeric');
    $this->form_validation->set_rules('exp', 'Exp Date', 'required|max_length[4]|numeric');
    $this->form_validation->set_rules('cvv', 'Exp Date', 'required|max_length[3]|numeric');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error_cc', form_error('cc_number', '<small class="text-danger">', '</small>'));
      $this->session->set_flashdata('error_exp', form_error('exp', '<small class="text-danger">', '</small>'));
      $this->session->set_flashdata('error_cvv', form_error('cvv', '<small class="text-danger">', '</small>'));
      $data = [
        'no_kamar' => $this->input->post('no_kamar'),
        'price' => $this->input->post('price')
      ];
      $this->session->set_userdata($data);
      redirect('payment');
    } else {
      $this->Facility_model->updateRoom2();
      redirect('profile');
    }
  }

  public function transactionBT()
  {
    $this->Facility_model->updateRoom2();
    redirect('profile');
  }

  public function updatephoto()
  {
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $upload_image = $_FILES['image']['name'];
    if ($upload_image) {
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['upload_path'] = './assets/img/profile/';
      $this->upload->initialize($config);
      if ($this->upload->do_upload('image')) {
        $old_image = $data['user']['ava'];
        if ($old_image != 'Profile.png') {
          unlink(FCPATH . 'assets/img/profile/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        $this->User_model->updatePict($new_image);
        redirect('profile');
      } else {
        $this->session->set_flashdata('error_display', '<small class="text-danger ps-5">' . $this->upload->display_errors() . '</small>');
        redirect('profile');
      }
    }
  }

  public function editprofile()
  {
    $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
    $this->form_validation->set_rules('no_hp', 'No.HP', 'required|trim|numeric');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error_name', form_error('fullname', '<small class="text-danger">', '</small>'));
      $this->session->set_flashdata('error_nohp', form_error('no_hp', '<small class="text-danger">', '</small>'));
      redirect('profile');
    } else {
      $this->User_model->editProfile($this->input->post('fullname'), $this->input->post('no_hp'));
      redirect('profile');
    }
  }
}
