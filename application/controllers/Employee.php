<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Employees');
    $this->load->model('Office');
	}
  public function index()
  {
    if (isset($_GET['delete_id'])) {
      $data = $_GET['delete_id'];

      $respon = $this->M_Employees->deleteData($data);
      $result['data'] = $this->M_Employees->getAllEmployeeData();
      if ($respon == true) {
        $result['message'] = "Delete Data Employee Successfully";
        $this->template->render('employee/dashboard', $result);
			} else{
        $result['message'] = "Delete Data Employee error !";
        $this->template->render('employee/dashboard', $result);
			}
    } else {
      $result['data'] = $this->M_Employees->getAllEmployeeData();
		  $this->template->render('employee/dashboard', $result);
    }
    
  }

  public function addEmployee(){
    $result['officeData'] = $this->Office->getNameOffice();
    if ($this->input->post()) {
      $data = $this->input->post();
      $respon = $this->M_Employees->insertData($data);
      if ($respon == true) {
        $result['message'] = "Insert Data Employee Successfully";
        $this->template->render('employee/addEmployee', $result);
			}
			else{
        $result['message'] = "Insert Data Employee error !!";
        $this->template->render('employee/addEmployee', $result);
			}
    }else {
      $this->template->render('employee/addEmployee', $result);
    }
  }

  public function editEmployee(){
    if (isset($_GET['id'])) {
      $data = $_GET['id'];
      $result['officeData'] = $this->Office->getNameOffice();
      $result['employeeData'] = $this->M_Employees->getDataById($data);

      if ($this->input->post()) {
        $dataEdit['employeeNumber'] = $result['employeeData'][0]->employeeNumber;
        $dataEdit += $this->input->post();
        $respon = $this->M_Employees->editData($dataEdit);
        if ($respon == true) {
          $result['message'] = "Edit Data Employee Successfully";
          $this->template->render('employee/edit', $result);
        } else{
          $result['message'] = "Edit Data Employee error !!";
          $this->template->render('employee/edit', $result);
        }
      } else {
        $this->template->render('employee/edit', $result);
      }
    }
  }

  public function addOffice(){
    if ($this->input->post()) {
      $data = $this->input->post();
      $respon = $this->Office->insertData($data);
      if ($respon == true) {
        $result['message'] = "Insert Data Office Successfully";
        $this->template->render('employee/addOffice', $result);
			}
			else{
        $result['message'] = "Insert Data Office error !!";
        $this->template->render('employee/addOffice', $result);
			}
    }else {
      $this->template->render('employee/addOffice');
    }
  }
}

?>