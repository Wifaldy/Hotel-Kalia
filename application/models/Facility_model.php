<?php

class Facility_model extends CI_Model
{
  public function getRoom()
  {
    return $this->db->get_where('facility', ['type' => 'Room'])->result_array();
  }
  public function getFacility()
  {
    return $this->db->get_where('facility', ['type' => 'Facility'])->result_array();
  }
  public function getDetailRoom($id)
  {
    return $this->db->get_where('facility', ['id' => $id, 'type' => 'Room'])->row_array();
  }
  public function getAvailableRoom($class)
  {
    return $this->db->get_where('room', ['class' => $class, 'status' => 0])->result_array();
  }
  public function insertTransaction($p_booking)
  {
    $id = $this->db->get('transaction')->num_rows() + 1;
    $data = [
      'id' => htmlspecialchars($id),
      'facility_id' => htmlspecialchars($this->input->post('id', true)),
      'check_in' => htmlspecialchars($this->input->post('checkin', true)),
      'check_out' => htmlspecialchars($this->input->post('checkout', true)),
      'transaction_created' => time()
    ];
    $userid = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $book = [
      'user' => $userid['id_user'],
      'transaction' => htmlspecialchars($id),
      'room' => htmlspecialchars($this->input->post('no_kamar')),
      'price_booking' => $p_booking
    ];
    $this->db->insert('transaction', $data);
    $this->db->insert('booking', $book);
  }
  public function updateRoom1()
  {
    $this->db->set('status', 1);
    $this->db->where('no_room', $this->input->post('no_kamar'));
    $this->db->update('room');
  }
  public function getRoomStatus($no_kamar)
  {
    return $this->db->get_where('room', ['no_room' => $no_kamar])->row_array();
  }
  public function updateRoom2()
  {
    $this->db->set('status', 2);
    $this->db->where('no_room', $this->input->post('no_kamar'));
    $this->db->update('room');
  }
}
