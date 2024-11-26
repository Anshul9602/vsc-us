<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog1 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('blog1');
		$this->load->view('footer');
	}
}
