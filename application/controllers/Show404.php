<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show404 extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		
		$this->load->view('esential_errors/page_404');
	//	if(NOT(ISBLANK(TEXT(Gender__c))),if(TEXT(Civil_status__c )== 'Single' && Age__c < 25,"A",if(TEXT(Civil_status__c )== 'Single' || TEXT(Civil_status__c)=='Married' && (Age__c >= 25 && Age__c<30),"AA",if( TEXT(Civil_status__c)=='Married' && (Age__c > 30 && Age__c<60),"AAA","NO TYPE ASIGNED"))),"NULL")
	//	Data Type	Formula	 	 
// if(NOT(ISBLANK(TEXT(Gender__c))),if(TEXT(Civil_status__c )== 'Single' && Age__c < 25,"AA",if(TEXT(Civil_status__c )== 'Single' || TEXT(Civil_status__c)=='Married' && (Age__c >= 25 && Age__c<30),"AA",if( TEXT(Civil_status__c)=='Married' && (Age__c > 30 && Age__c<60),"AAA","NO TYPE ASIGNED"))),"NULL")
	}
}
