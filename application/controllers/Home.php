<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Facility_model");
    $this->load->model("User_model");
  }

  public function index()
  {
    $data['title'] = 'Home';
    $data['room'] = $this->Facility_model->getRoom();
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['style'] = 'index';
    $this->load->view('templates/header', $data);
    $this->load->view('index', $data);
    $this->load->view('templates/footer');
  }

  public function facilities()
  {
    $data['title'] = 'Facility';
    $data['facility'] = $this->Facility_model->getFacility();
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['style'] = 'facilities';
    $this->load->view('templates/header', $data);
    $this->load->view('facilities', $data);
    $this->load->view('templates/footer');
  }

  public function room()
  {
    $data['title'] = 'Room';
    $data['room'] = $this->Facility_model->getRoom();
    $data['user'] = $this->User_model->getEmail($this->session->userdata('email'));
    $data['style'] = 'room';
    $this->load->view('templates/header', $data);
    $this->load->view('room', $data);
    $this->load->view('templates/footer');
  }
}
