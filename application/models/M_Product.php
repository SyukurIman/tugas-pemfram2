<?php 

class M_Product extends CI_Model 
{
  public function __construct()
  {
   parent::__construct();
   $this->load->database(); 
  }

  public function insertData($data)
  {
    $this->db->insert('products', $data);
    return true;
  }

  public function insertDataProductLine($data){
    $this->db->insert('productlines', $data);
    return true;
  }

  public function getProduct()
  {
    $sql = 'SELECT * FROM products';
    return $this->db->query($sql)->result();
  }

  public function getDataByCode($data)
  {
    $sql = "SELECT * FROM products WHERE productCode = '".$data."' ";
    return $this->db->query($sql)->result_object();
  }

  public function editData($data)
  {
    $this->db->replace('products', $data);
    return true;
  }
  public function deleteData($data)
  {
    $this->db->delete('products', array('productCode' => $data));
    return true;
  }
  
}

?>