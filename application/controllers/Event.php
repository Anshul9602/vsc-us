<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{

		$this->load->model('Admin_model');
		$data['posts'] = $this->Admin_model->get_events_with_images();
		foreach ($data['posts'] as $p) {
			$p['url'] = $p['name'];
			$p['url'] = str_replace(' ', '-', $p['url']); // Replaces all spaces with hyphens.

			$p['url'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['url']); // Removes special chars.
			$p['url'] = strtolower($p['url']);
			$temp[] = $p;
		}
		$data['posts'] = $temp;
// echo "<pre>";
// print_r($data['posts']);
// echo "</pre>";

		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('event',$data);
		$this->load->view('footer');
	}
}
