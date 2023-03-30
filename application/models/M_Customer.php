<?php 

class M_Customer extends CI_Model
{
  public function __construct()
  {
   parent::__construct(); 
   $this->load->database();
  }

  public function getCustomer()
  {
    $sql = "SELECT * FROM customers";
    return $this->db->query($sql)->result();
  }
  public function getCustomerData()
  {
    $sql = "SELECT customers.customerNumber, 
            customers.customerName, customers.phone, 
            customers.addressLine1, customers.city, customers.postalCode, 
            customers.country, employees.firstName, 
            customers.creditLimit, COUNT( payments.customerNumber) 
            AS countPayment FROM customers LEFT JOIN payments 
            ON payments.customerNumber = customers.customerNumber 
            LEFT JOIN employees ON employees.employeeNumber = customers.salesRepEmployeeNumber
            GROUP BY customers.customerNumber";
    return $this->db->query($sql)->result();
  }
  public function deleteData($data)
  {
    $this->db->delete('customers', array('customerNumber' => $data));
    return true;
  }
  public function insertData($data)
  {
    $this->db->insert('customers', $data);
    return true;
  }
  public function getDataByCode($data)
  {
    $sql = "SELECT * FROM customers WHERE customerNumber = '".$data."' ";
    return $this->db->query($sql)->result_object();
  }
  public function editData($data)
  {
    $this->db->replace('customers', $data);
    return true;
  }

  public function getPaymentById($data)
  {
    $sql = "SELECT * FROM payments WHERE customerNumber = ?";
    return $this->db->where('customerNumber', $data)
                    ->get('payments')->result();
  }
}


?>