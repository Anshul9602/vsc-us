<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tax_Preparation_Service extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Tax_Preparation_Service');
		$this->load->view('footer');
	}
}
