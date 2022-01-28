<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{
		$data['class']= 'page-index';
		$data['title'] = 'index';
		$this->_initialPage($data);
		$this->load->view('inicio_view');
		 $this->_finalPage();
	}

}
