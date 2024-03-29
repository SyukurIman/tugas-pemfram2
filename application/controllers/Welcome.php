<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Office');

		$this->load->model('M_Auth');
		if($this->M_Auth->current_user()){
			redirect('dashboard');
		}
	}
	public function index()
	{
		$result['office'] = $this->Office->getOffice();
		$this->load->view('welcome_message', $result);
	}
}
