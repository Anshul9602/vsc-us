<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_Accounting_Reporting_Services extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Management_Accounting_Reporting_Services');
		$this->load->view('footer');
	}
}
