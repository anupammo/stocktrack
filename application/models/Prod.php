<?php
class Prod extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('product', $data);
    return $this->db->insert_id();
  }
}
?>
