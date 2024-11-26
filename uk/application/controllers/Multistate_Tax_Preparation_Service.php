<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multistate_Tax_Preparation_Service extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Multistate_Tax_Preparation_Service');
		$this->load->view('footer');
	}
}
