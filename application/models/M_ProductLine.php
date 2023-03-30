<?php 

class M_ProductLine extends CI_Model 
{
  public function __construct()
  {
   parent::__construct();
   $this->load->database(); 
  }

  public function getProductLine()
  {
    $sql = 'SELECT * FROM productlines';
    return $this->db->query($sql)->result();
  }
  public function dataCountProduct()
  {
    $sql ='SELECT COUNT(products.productLine) AS countdata, products.productLine FROM `products` LEFT JOIN `productlines` ON productlines.productLine = products.productLine GROUP BY products.productLine';
    return $this->db->query($sql)->result();
  }
  public function getProductById($data){
    return $this->db->where('productLine', $data)
                    ->get('productlines')->result();;
  }
  public function deleteData($data){
    $this->db->delete('productlines', array('productLine' => $data));
    return true;
  }
  public function editData($data){
    $this->db->replace('productlines', $data);
    return true;
  }
}

?>