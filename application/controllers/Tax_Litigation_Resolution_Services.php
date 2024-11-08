<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tax_Litigation_Resolution_Services extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Tax_Litigation_Resolution_Services');
		$this->load->view('footer');
	}
}
