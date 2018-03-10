<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title']='About';
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/view_about');
		$this->load->view('frontend/include/footer');
	}
}
