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
  public function insertTransaction()
  {
    $id = $this->db->get('transaction')->num_rows();
    $data = [
      'id' => htmlspecialchars($id),
      'facility_room' => htmlspecialchars($this->input->post('id', true)),
      'check_in' => htmlspecialchars($this->input->post('checkin', true)),
      'check_out' => htmlspecialchars($this->input->post('checkout', true)),
      'transaction_created' => time()
    ];

    $this->db->insert('transaction', $data);
  }
  public function updateRoom()
  {
    $this->db->set('status', 1);
    $this->db->where('no_room', $this->input->post('id'));
    $this->db->update('room');
  }
}
