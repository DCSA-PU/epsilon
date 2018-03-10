<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ep_2k16 extends CI_Controller {
	public function index()
	{
		$data['title']='2k16';
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/view_ep_2k16');
		$this->load->view('frontend/include/footer');
	}
}
?>