<?php
class Cust extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('customer', $data);
    return $this->db->insert_id();
  }
}
?>
