<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('User_model');
  }

  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('login');
    } else {
    }
  }

  public function register()
  {
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('no_hp', 'No.HP', 'required|trim|numeric');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'The Password field does not match'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


    if ($this->form_validation->run() == FALSE) {

      $this->load->view('register');
    } else {
      $this->User_model->insertUserData();
      $this->session->set_flashdata('successReg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Your account has been created
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
      redirect('auth');
    }
  }
}
