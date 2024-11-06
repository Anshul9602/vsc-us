<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi_tax extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('multi_tax');
		$this->load->view('footer');
	}
}
