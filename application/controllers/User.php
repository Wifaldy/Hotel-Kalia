<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function index()
  {
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['is_login'] = $this->session->userdata('is_login');
    $data['style'] = 'profile';
    if ($data['is_login']) {
      $this->load->view('templates/header', $data);
      $this->load->view('profile', $data);
      $this->load->view('templates/footer');
    } else {
      redirect('home');
    }
  }
  public function detail()
  {
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['is_login'] = $this->session->userdata('is_login');
  }
}
