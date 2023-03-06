<?php

class Office extends CI_Model
{
  public function __construct()
  {
   parent::__construct(); 
   $this->load->database();
  }

  public function getOffice()
  {
    $sql = "SELECT * FROM offices LIMIT 6";
    return $this->db->query($sql)->result();
  }
}
?>