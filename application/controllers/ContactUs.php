<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{
	
		$data['class']= 'page-contact';
		$data['title'] = 'contact';
		$this->_initialPage($data);
		$this->load->view('contact_us_view');
		$this->_finalPage();
	}

}
