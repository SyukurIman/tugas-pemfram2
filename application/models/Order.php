<?php 

class Order extends CI_Model
{
  public function __construct()
  {
   parent::__construct();
   $this->load->database(); 
  }

  public function getOrderList()
  {
    $sql = "SELECT * FROM orders";
    return $this->db->query($sql)->result();
  }

  public function getOrderDetail($data){
    $sql = "SELECT orderdetails.orderNumber, products.productName 
            AS Product, orderdetails.quantityOrdered, orderdetails.priceEach 
            FROM orderdetails LEFT JOIN products ON orderdetails.productCode = products.productCode
            WHERE orderdetails.orderNumber = '".$data."'";
    return $this->db->query($sql)->result();
  }
}
?>