<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EconoMag extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{
	
		$data['class']= 'page-product';
		$data['title'] = 'product';
		$this->_initialPage($data);
		$this->load->view('Products/econo_mag_view');
		$this->_finalPage();
	}

}
