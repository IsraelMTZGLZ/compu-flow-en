<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{
	
		$data['class']= 'page-cms';
		$data['title'] = 'cms';
		$this->_initialPage($data);
		$this->load->view('about_us_view');
		$this->_finalPage();
	}

}
