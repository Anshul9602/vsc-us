<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_Valuation_Services extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Business_Valuation_Services');
		$this->load->view('footer');
	}
}
