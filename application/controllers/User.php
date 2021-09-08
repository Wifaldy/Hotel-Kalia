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
    $this->load->model('User_model');
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
    $data['title'] = 'Detail';
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['style'] = 'detail';
    $this->load->view('templates/header', $data);
    $this->load->view('detail');
    $this->load->view('templates/footer');
  }
}
