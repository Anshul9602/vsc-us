<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretarial_Services extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('Secretarial_Services');
		$this->load->view('footer');
	}
}
