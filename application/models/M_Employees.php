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

  public function getAllEmployeeData(){
    $sql = "SELECT employees.employeeNumber, 
            employees.firstName, employees.lastName, 
            employees.email, offices.city AS locationEmployee, 
            employees.jobTitle FROM employees LEFT JOIN offices 
            ON employees.officeCode = offices.officeCode";
    return $this->db->query($sql)->result();
  }

  public function insertData($data){
    $this->db->insert('employees', $data);
    return true;
  }

  public function editData($data)
  {
    $this->db->replace('employees', $data);
    return true;
  }

  public function getDataById($data){
    return $this->db->where('employeeNumber', $data)
                    ->get('employees')->result();
  }
  
  public function deleteData($data)
  {
    $this->db->delete('employees', array('employeeNumber' => $data));
    return true;
  }
}


?>