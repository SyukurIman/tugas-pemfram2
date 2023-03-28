<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product');
    $this->load->model('M_ProductLine');
	}
	public function index()
	{
		
    if (isset($_GET['delete_id'])) {
      $data = $_GET['delete_id'];

      $respon = $this->M_Product->deleteData($data);
      $result['M_Product'] = $this->M_Product->getProduct();

      if ($respon == true) {
        $result['message'] = "Delete Data Product Successfully";
        $this->template->render('product/dashboard', $result);
			}
			else{
        $result['message'] = "Delete Data Product error !";
        $this->template->render('product/dashboard', $result);
			}
    } else {
      $result['M_Product'] = $this->M_Product->getProduct();
      $this->template->render('product/dashboard', $result);
    }
	}

  public function addProduct()
  {
    $result['ProductLines'] = $this->M_ProductLine->getProductLine();

    if ($this->input->post()) {
      $data['productCode'] = 'S'.random_int(1, 99).'_'.random_int(999, 9999);
      $data += $this->input->post();
      
      $respon = $this->M_Product->insertData($data);
      if ($respon == true) {
        $result['message'] = "Insert Data Product Successfully";
        $this->template->render('product/add', $result);
			}
			else{
        $result['message'] = "Insert Data Product error !!";
        $this->template->render('product/add', $result);
			}
    } else {
      $this->template->render('product/add', $result);
    }
  }

  public function editProduct()
  {
    if (isset($_GET['id'])) {
      $data = $_GET['id'];
      $result['ProductLines'] = $this->M_ProductLine->getProductLine();
      $result['M_Product'] = $this->M_Product->getDataByCode($data);

      if ($this->input->post()) {
        $dataEdit['productCode'] = $result['M_Product'][0]->productCode;
        $dataEdit += $this->input->post();
  
        $respon = $this->M_Product->editData($dataEdit);
        if ($respon == true) {
          $result['M_Product'] = $this->M_Product->getDataByCode($data);
          $result['message'] = "Update Data Product Successfully";
          $this->template->render('product/edit', $result);
        }else{
          $result['message'] = "Update Data Product error !!";
          $this->template->render('product/edit', $result);
        }
      } else {
        $this->template->render('product/edit', $result);
      }
      
    }
  }

  public function addProductLine()
  {
    if ($this->input->post()) {
      $data = $this->input->post();
      
      $respon = $this->M_Product->insertDataProductLine($data);
      if ($respon == true) {
        $result['message'] = "Insert Data Product Successfully";
        $this->template->render('product/addProductLine', $result);
			}
			else{
        $result['message'] = "Insert Data Product error !!";
        $this->template->render('product/addProductLine', $result);
			}
    } else {
      $this->template->render('product/addProductLine');
    }
  }
}