<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Customer');
    $this->load->model('M_Employees');
  }

  public function index()
  {
    if (isset($_GET['delete_id'])) {
      $data = $_GET['delete_id'];

      $respon = $this->M_Customer->deleteData($data);
      $result['M_Customer'] = $this->M_Customer->getCustomer();

      if ($respon == true) {
        $result['message'] = "Delete Data Customer Successfully";
        $this->template->render('customer/dashboard', $result);
			}
			else{
        $result['message'] = "Delete Data Customer error !";
        $this->template->render('customer/dashboard', $result);
			}
    } else {
      $result['M_Customer'] = $this->M_Customer->getCustomerData();
      $this->template->render('customer/dashboard', $result);
    }
  }
  public function addCustomer()
  {
    $result['M_Employees'] = $this->M_Employees->getEmployeesName();
    if ($this->input->post()) {
      $data = $this->input->post();
      
      $respon = $this->M_Customer->insertData($data);
      if ($respon == true) {
        $result['message'] = "Insert Data Product Successfully";
        $this->template->render('customer/add', $result);
			}
			else{
        $result['message'] = "Insert Data Product error !!";
        $this->template->render('customer/add', $result);
			}
    } else {
      $this->template->render('customer/add', $result);
    }
  }

  public function editCustomer()
  {
    if (isset($_GET['id'])) {
      $data = $_GET['id'];
      $result['M_Employees'] = $this->M_Employees->getEmployeesName();
      $result['M_Customer'] = $this->M_Customer->getDataByCode($data);

      if ($this->input->post()) {
        $dataEdit['customerNumber'] = $result['M_Customer'][0]->customerNumber;
        $dataEdit += $this->input->post();
  
        $respon = $this->M_Customer->editData($dataEdit);
        if ($respon == true) {
          $result['M_Customer'] = $this->M_Customer->getDataByCode($data);
          $result['message'] = "Update Data customer Successfully";
          $this->template->render('customer/edit', $result);
        }else{
          $result['message'] = "Update Data Customer error !!";
          $this->template->render('customer/edit', $result);
        }
      } else {
        $this->template->render('customer/edit', $result);
      }
      
    }
  }

  public function showPaymentCustomer()
  {
    if (isset($_GET['id'])) {
      $data = $_GET['id'];
      $result['M_Customer'] = $this->M_Customer->getPaymentById($data);

      $this->template->render('customer/payment', $result);
    } 
  }

}


?>