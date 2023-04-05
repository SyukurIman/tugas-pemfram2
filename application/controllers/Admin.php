<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Order');
    $this->load->model('M_Customer');
		$this->load->model('M_ProductLine');
		$this->load->model('Office');

		$this->load->model('M_Auth');
		if(!$this->M_Auth->current_user()){
			redirect('login');
		}
	}
	public function index()
	{
		$result['orders'] = $this->Order->getOrderList();
    $result['customer'] = $this->M_Customer->getCustomer();
		$result['office'] = $this->Office->getCountOffice();
		$result['ProductLines'] = $this->M_ProductLine->getProductLine();
		$result['grafikData'] = $this->M_ProductLine->dataCountProduct();

		if (isset($_GET['delete-id'])) {
      $data = $_GET['delete-id'];

			$respon = $this->M_ProductLine->deleteData($data);
			$result['ProductLines'] = $this->M_ProductLine->getProductLine();
      if ($respon == true) {
        $result['message'] = "Delete Data Product Line Successfully";
        $this->template->render('admin', $result);
			}
			else{
        $result['message'] = "Delete Data Product Line error !";
        $this->template->render('admin', $result);
			}
		} else {
			$this->template->render('admin', $result);
		}
		
	}

	public function detailOrder(){
		if (isset($_GET['id'])) {
			$data = $_GET['id'];
			$result['orders'] = $this->Order->getOrderDetail($data);
			
			$this->template->render('product/order', $result);
		}
	}

	public function profile()
	{
		$result = array(
			'nama' => 'Syukur Iman Attaqwa',
			'about' => 'Saya merupakan seorang mahasiswa semester 6 di UPN Veteran Jatim yang memiliki passion dalam pengembangan website. Saya memiliki keterampilan dalam pengembangan front-end dan back-end, dan telah menghasilkan beberapa proyek website yang dapat dilihat di portofolio saya.',
			'passion' => 'Web Developer',
			'descPasion' => 'Saya senang mengikuti perkembangan teknologi terbaru dan selalu berusaha untuk belajar lebih banyak tentang pengembangan web.',
			'birthday' => 'Lamongan, 02 Januari 2002',
			'phone' => '+6282132658861',
			'city' => 'Sidoarjo, Indonesia', 
			'location' => 'JL Nanas Ap14, Kab. Sidoarjo Prov. Jawa Timur',
			'age' => '21',
			'email' => 'ataiman30@gmail.com',
			'tagline' => 'Seorang web developer adalah seseorang yang mampu menciptakan dunia maya dengan coding, tapi lebih dari itu, dia juga mampu menciptakan pengalaman dan solusi yang membantu menghubungkan dunia nyata dan virtual'
		);
		$this->template->render('profile', $result);
	}
}
