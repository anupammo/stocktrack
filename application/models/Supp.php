<?php
class Supp extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('supplier', $data);
    return $this->db->insert_id();
  }
}
?>
