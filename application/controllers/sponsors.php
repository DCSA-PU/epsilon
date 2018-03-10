<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponsors extends CI_Controller {
	public function index()
	{
            $this->load->model('frontend/model_sponsors');
            $sponsors['result']=$this->model_sponsors->get_sponsors_data();
            $data['title']='Sponsors';
            $this->load->view('frontend/include/header',$data);
            $this->load->view('frontend/view_sponsors',$sponsors);
            $this->load->view('frontend/include/footer');     
	}
}
?>