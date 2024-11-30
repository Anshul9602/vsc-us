<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service7 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('service7');
		$this->load->view('footer');
	}
}
