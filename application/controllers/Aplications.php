<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplications extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{

		$data['class']= 'page-cms';
		$data['title'] = 'cms';
		$this->_initialPage($data);
		$this->load->view('aplications_view');
		$this->_finalPage();
	}

}
