<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends MY_RootController {

	public function __construct() {
		parent::__construct();
		
        $this->load->helper('url');
	

    }

	public function index()
	{
	
		$data['class']= 'page-contact';
		$data['title'] = 'contact';
		$to = 'israelmg250598@gmail.com';
		//$this->sendEmail($to);
		$this->_initialPage($data);
		$this->load->view('contact_us_view');
		$this->_finalPage();


	}

	function send() {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('from');
        $subject = $this->input->post('id_contact');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

	public function sendEmail($to){
		$this->email->from('israel.mg@construtec.mx', 'Your Name');
		$this->email->to($to);
		$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		if ( ! $this->email->send())
		{
			echo "sended";
		}
		// $this->email->send();
	}

}
