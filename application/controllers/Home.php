<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("User_model");
  }

  public function index()
  {
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['is_login'] = $this->session->userdata('is_login');
    $data['style'] = 'index';
    $this->load->view('templates/header', $data);
    $this->load->view('index', $data);
    $this->load->view('templates/footer');
  }

  public function facilities()
  {
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['is_login'] = $this->session->userdata('is_login');
    $data['style'] = 'facilities';
    $this->load->view('templates/header', $data);
    $this->load->view('facilities', $data);
    $this->load->view('templates/footer');
  }

  public function room()
  {
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['is_login'] = $this->session->userdata('is_login');
    $data['style'] = 'room';
    $this->load->view('templates/header', $data);
    $this->load->view('room', $data);
    $this->load->view('templates/footer');
  }
}
