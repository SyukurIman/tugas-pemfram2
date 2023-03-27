<?php 

class M_Employees extends CI_Model
{
  function __construct()
  {
    parent::__construct(); 
    $this->load->database();
  }

  public function getEmployeesName()
  {
    $sql = "SELECT `employeeNumber`, `firstName` FROM employees";
    return $this->db->query($sql)->result();
  }

}


?>