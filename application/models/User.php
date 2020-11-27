<?php
class User extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('user', $data);
    return $this->db->insert_id();
  }
  function userlogin($data)
  {
    $query = $this->db->get('user', $data);
    return $query->result();
  }
  function userdelete($data)
  {
    $this->db->where('userslnos', $data['userslno']);
    $this->db->delete('user');
  }
}
?>
