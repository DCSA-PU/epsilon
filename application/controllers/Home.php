<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title']='Home';
		$this->load->view('frontend/include/header',$data);
                
		$this->load->model('frontend/model_home');
		$cdata['result'] = $this->model_home->count();
                $cdata['result1'] = $this->model_home->count2();
                $cdata['result2'] = $this->model_home->count3();
                $this->load->view('frontend/view_home',$cdata);
                //$this->load->view('frontend/include/footer');
		
	}
}