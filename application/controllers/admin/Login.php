<?php
   

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        // Load database
        $this->load->model('admin/model_login');
        }
        public function index()
	{
		$data['title']='Admin Login';
        $this->load->view('admin/include/header',$data);
		$this->load->view('admin/view_login');
        }
        public function admin_login_process() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
            redirect(base_url().'admin/dashboard/');
            }
            else{
                    $data['title']='Admin Login';
                    $this->load->view('admin/include/header',$data);
                    $this->load->view('admin/view_login');
                }
            }
        else {
            $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            );
            $result = $this->model_login->login($data);
            if ($result == TRUE) 
                {

                $username = $this->input->post('username');
                $result = $this->model_login->read_user_information($username);
                if ($result != false) {
                $session_data = array(
                'username' => $result[0]->admin_username,
                'id'=>$result[0]->id

                );
                // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);
                redirect(base_url().'admin/dashboard/');
                }
                }
            else 
            {
                $data = array(
                'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('admin/view_login', $data);
            }
        }
    }

            
        }

 ?> 
