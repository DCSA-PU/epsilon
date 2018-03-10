<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index()
	{
		$data['title']='Events';
		$this->load->view('frontend/include/header',$data);
                $this->load->model('frontend/model_dashboard');
                $events['result']=$this->model_dashboard->get_event_names();
		$this->load->view('frontend/view_events',$events);
		$this->load->view('frontend/include/footer');
	}
}