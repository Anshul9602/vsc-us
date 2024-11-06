<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretarial extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('secretarial');
		$this->load->view('footer');
	}
}
