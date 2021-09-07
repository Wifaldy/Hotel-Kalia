<?php

class User_model extends CI_Model
{
  public function insertUserData()
  {
    $data = [
      'name' => htmlspecialchars($this->input->post('name', true)),
      'email' => htmlspecialchars($this->input->post('email', true)),
      'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
    ];

    $this->db->insert('user', $data);
  }

  public function getEmail($email)
  {
    return $this->db->get_where('user', ['email' => $email])->row_array();
  }
}
