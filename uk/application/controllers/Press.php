<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Press extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('press');
		$this->load->view('footer');
	}
}
