<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

	public function index()
	{
            if (!isset($this->session->userdata['user_logged_in'])){redirect(base_url().'user/login');}
            $data['title']='Change Password';
            $this->load->view('frontend/include/header',$data);
            $this->load->view('frontend/view_user_changePass');
            $this->load->view('frontend/include/footer');
	}

        public function change()
        {
            if (!isset($this->session->userdata['user_logged_in'])){redirect(base_url().'user/login');}
            
            $pass_data=array(
                'username'=>$this->session->userdata['user_logged_in']['username'],
                'oldpass'=>$this->input->post('cur_pswd'),
                'newpass'=>$this->input->post('new_pswd')
            );
            $this->load->model('frontend/model_changePass');
            
            $data['incorrectPass'] = $this->model_changePass->change($pass_data);
            if($this->input->post('cur_pswd')==''&&$data['incorrectPass']==0)
                {
                    $data['incorrectPass']=2;
                }
            $data['title']='Change Password';
            $this->load->view('frontend/include/header',$data);
            $this->load->view('frontend/view_user_changePass');
            $this->load->view('frontend/include/footer');
        }
}	