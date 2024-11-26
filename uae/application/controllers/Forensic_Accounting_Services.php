<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forensic_Accounting_Services extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Forensic_Accounting_Services');
		$this->load->view('footer');
	}
}
