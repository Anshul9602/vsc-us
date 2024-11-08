<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Retention_Tax_Credit extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Employee_Retention_Tax_Credit');
		$this->load->view('footer');
	}
}
