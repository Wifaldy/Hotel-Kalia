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
    if ($this->session->userdata('email')) {
      redirect('');
    }
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('login');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $pass = $this->input->post('password');

    $user = $this->User_model->getEmail($email);
    if ($user) {
      if (password_verify($pass, $user['password'])) {
        $data = [
          'email' => $user['email'],
          'ava' => $user['ava']
        ];
        $this->session->set_userdata($data);
        redirect('');
      } else {
        $this->session->set_flashdata('successReg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Wrong password
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('successReg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Your email has not been registered
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
      redirect('auth');
    }
  }

  public function register()
  {
    if ($this->session->userdata('email')) {
      redirect('');
    }
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
  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('no_hp');
    $this->session->unset_userdata('is_login');
    $this->session->sess_destroy();
    redirect('');
  }
}
