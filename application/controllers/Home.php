<?php

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->view('index');
  }
  public function login()
  {
    $this->load->view('login');
  }

  public function afterLogin()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    if ($username == 'admin' && $password = 'admin') {
      echo "Anda berhasil Login";
    } else {
      echo "Anda gagal Login";
    }
  }
}
