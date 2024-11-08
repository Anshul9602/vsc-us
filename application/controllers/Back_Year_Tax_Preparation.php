<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_Year_Tax_Preparation extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Back_Year_Tax_Preparation');
		$this->load->view('footer');
	}
}
