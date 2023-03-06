<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Office');
	}
	public function index()
	{
		$result['office'] = $this->Office->getOffice();
		$this->load->view('admin', $result);
	}
}
