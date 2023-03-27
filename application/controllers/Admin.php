<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Order');
    $this->load->model('M_Customer');
		$this->load->model('M_ProductLine');
	}
	public function index()
	{
		$result['orders'] = $this->Order->getOrderList();
    $result['customer'] = $this->M_Customer->getCustomer();
		$result['ProductLines'] = $this->M_ProductLine->getProductLine();
		$result['grafikData'] = $this->M_ProductLine->dataCountProduct();
		$this->template->render('admin', $result);
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
