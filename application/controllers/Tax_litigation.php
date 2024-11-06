<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tax_litigation extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('tax_litigation');
		$this->load->view('footer');
	}
}
