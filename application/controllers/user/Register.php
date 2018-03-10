<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$data['title']='Register';
		$this->load->view('frontend/include/header',$data);
                $this->load->model('frontend/model_register');
                $data_clg['result'] = $this->model_register->get_data();
		$this->load->view('frontend/view_user_register',$data_clg);
		$this->load->view('frontend/include/footer');
	}
        public function signUp()
	{
                $password= substr(md5(rand()),1,8);
                $id=$this->input->post('clg');

		//mail($this->input->post('r_email'),"Epsilon 2K17","Thank you for registering<br><br>Your Password is : <b>".$password."</b>") or die("not send");
                
		$data = ['clg_usr' => $this->input->post('usrname'),
                        'clg_pswd' =>md5($password),
                        'id' => $id,
                        'phone' => $this->input->post('phn_no'),
                        'alt_phone' =>$this->input->post('alt_phn'),
                        'email' => $this->input->post('r_email'),
                        ];
                $this->load->model('frontend/model_register');
                $this->model_register->sign_up($data,$id);
                //echo $password;
                $name=$this->model_register->get_name($id);
                echo $name['clg_name'];
                foreach ($name as $row){
                echo $row;
                }
                
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.gmail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'dcsa.epsilon@gmail.com',
                    'smtp_pass' => 'epsilon123',
                    'mailtype' => 'html', 
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		// Set to, from, message, etc.

		$this->email->from('dcsa.epsilon@gmail.com','Epsilon Team');
		$this->email->to($data['email']);
		$this->email->subject('Epsilon 2k17');
		$this->email->message("Thank you for registering, ".$name."<br><br>Your Username is : <b>".$data[clg_usr]."</b><br>Your Password is : <b>".$password."</b>");
		$this->email->send();
                
                
               	//redirect(base_url().'user/login');
	}
}	