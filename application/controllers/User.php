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
  public function order()
  {
    $this->form_validation->set_rules('checkin', 'Check-In', 'required');
    $this->form_validation->set_rules('checkout', 'Check-Out', 'required');
    $now = $this->input->post('id');
    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error1', form_error('checkin', '<small class="text-danger">', '</small>'));
      $this->session->set_flashdata('error2', form_error('checkout', '<small class="text-danger">', '</small>'));
      redirect('detail/' . $now);
    } else {
      $this->Facility_model->insertTransaction();
      $this->Facility_model->updateRoom();
      echo "BERHASIL";
    }
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
