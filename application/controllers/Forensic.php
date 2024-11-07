<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forensic extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('forensic');
		$this->load->view('footer');
	}
}
