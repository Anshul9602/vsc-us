<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Why extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('why');
		$this->load->view('footer');
	}
}
