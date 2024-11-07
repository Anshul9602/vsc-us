<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_valuation extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('business_valuation');
		$this->load->view('footer');
	}
}
