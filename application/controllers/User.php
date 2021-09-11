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
}
