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
    $sql = "SELECT * FROM offices";
    return $this->db->query($sql)->result();
  }

  public function getNameOffice()
  {
    $sql = "SELECT `city`, `officeCode` FROM offices";
    return $this->db->query($sql)->result();
  }

  public function insertData($data){
    $this->db->insert('offices', $data);
    return true;
  }
  public function getCountOffice(){
    $sql = "SELECT * FROM offices ";
    return $this->db->query($sql)->result();
  }
}
?>