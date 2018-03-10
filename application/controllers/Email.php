<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $password="abc1223";
		//$this->load->library('email');
		//phpinfo();
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'akshay.kapoor392@gmail.com',
			'smtp_pass' => '(kapoor)',
			'mailtype' => 'html', 
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		// Set to, from, message, etc.

		$this->email->from('akshay.kapoor392@gmail.com', 'Epsilon 2k17');
		$this->email->to('akshay.kapoor392@gmail.com');
		//$this->email->cc('mailme.akshaykapoor@gmail.com');
		//$this->email->bcc('rubalpartal20@gmail.com');
		$this->email->subject('Epsilon Test');
		$this->email->message($password);
		if($this->email->send())
		 {
		  echo 'Email sent.';
		 }
		 else
		{
		 show_error($this->email->print_debugger());
		}
		
		/*
		$this->email->initialize(array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'mail.pu.ac.in',
		  'smtp_user' => 'epsilon',
		  'smtp_pass' => 'B@18GdVr*',
		  'smtp_port' => 25,
		  'crlf' => "\r\n",
		  'newline' => "\r\n"
		));

		$this->email->from('epsilon@pu.ac.in', 'Epsilon 2k17');
		$this->email->to('akshay.kapoor392@gmail.com');
		$this->email->cc('mailme.akshaykapoor@gmail.com');
		$this->email->bcc('einstein.prince@gmail.com');
		$this->email->subject('Epsilon Test');
		$this->email->message('Testing the email class.');
		$this->email->send();
*/
		//echo $this->email->print_debugger();
		
		
		
	}
}
