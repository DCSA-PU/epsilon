<?php
   

class Logout extends CI_Controller
{
    public function __construct()
	{
        parent::__construct();
		
        // Load session library
        $this->load->library('session');

	}
    public function index()
	{
		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		
		redirect(base_url().'admin/login');
    }
}

		