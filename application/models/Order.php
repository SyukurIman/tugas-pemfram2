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
}
?>