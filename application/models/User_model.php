<?php

class User_model extends CI_Model
{
  public function insertUserData()
  {
    $data = [
      'name' => htmlspecialchars($this->input->post('name', true)),
      'email' => htmlspecialchars($this->input->post('email', true)),
      'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'ava' => 'Profile.png'
    ];

    $this->db->insert('user', $data);
  }

  public function getEmail($email)
  {
    return $this->db->get_where('user', ['email' => $email])->row_array();
  }
  public function updatePict($new_image)
  {
    $this->db->set('ava', $new_image);
    $this->db->where('email', $this->session->userdata('email'));
    $this->db->update('user');
  }
  public function editProfile($name, $no_hp)
  {
    $this->db->set('name', $name);
    $this->db->set('no_hp', $no_hp);
    $this->db->where('email', $this->session->userdata('email'));
    $this->db->update('user');
  }
}
