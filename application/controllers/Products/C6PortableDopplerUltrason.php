<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C6PortableDopplerUltrason extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{
	
		$data['class']= 'page-product';
		$data['title'] = 'product';
		$this->_initialPage($data);
		$this->load->view('Products/c6_portable_doppler_ultrason_view');
		$this->_finalPage();
	}

}
