<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
class Dashboard extends CI_Controller {
	public function index()
	{
		$data['title']='Dashboard';
		$this->load->view('admin/include/header',$data);
                $this->load->view('admin/sidebar');
                $this->load->view('admin/include/navbar_top',$data);
		$this->load->view('admin/view_dashboard');
		$this->load->view('admin/include/footer');
	}
        
	public function studentData()
	{
		$data['title']='View Students';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/include/navbar_top',$data);
		
		$this->load->model('admin/model_edit_studentdata');
		$sdata['result'] = $this->model_edit_studentdata->get_contents();
		$sdata['events'] = $this->model_edit_studentdata->get_events();
		$this->load->view('admin/view_student_data',$sdata);
		$this->load->view('admin/include/footer');
	}
	public function student_data()
	{
		$this->load->model('admin/model_edit_studentdata');
		$id= $this->input->post('id');
		$student_data = array(
			's_name' => $this->input->post('s_name'),
			's_phn' => $this->input->post('s_phn'),
			's_email' => $this->input->post('s_email'),
                        'e_id' => $this->input->post('e_name')
			);
                
		$this->model_edit_studentdata->student_data_update($id,$student_data);
		redirect(base_url().'admin/dashboard/studentData');
	}   
           
     public function collegeData()
	{
		$data['title']='View Colleges';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/include/navbar_top',$data);
		$cdata= array();
		$this->load->model('admin/model_edit_collegedata');
		$cdata['result'] = $this->model_edit_collegedata->get_clg_contents();
		$this->load->view('admin/view_college_data',$cdata);
		$this->load->view('admin/include/footer');
	}
	
    public function college_data()
	{
		$this->load->model('admin/model_edit_collegedata');
		$id= $this->input->post('id');
		$college_data = array(
			'clg_usr' => $this->input->post('clg_usr'),
			'phone' => $this->input->post('phone'),
			'alt_phone' => $this->input->post('alt_phone'),
			'email' => $this->input->post('email'),
			);
		$this->model_edit_collegedata->college_data_update($id,$college_data);
		redirect(base_url().'admin/dashboard/collegeData');
    }   
        
	public function teamNames()
	{
		$data['title']='Team Names';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/include/navbar_top',$data);
		$this->load->model('admin/model_team_names');
		$tdata= array();
		$tdata['result'] = $this->model_team_names->get_clg_contents();
		$this->load->view('admin/view_team_names',$tdata);
		$this->load->view('admin/include/footer');
    }
    public function select_eventwise()
	{       $this->load->helper('array');
                $checkbox_array = $this->input->post('event_sel');
                $this->load->model('admin/model_printeventwise');
                $this->load->helper('string');
                $data['title']='View Eventwise';
		$this->load->view('admin/include/header',$data);
                $this->load->view('admin/sidebar');
                $this->load->view('admin/include/navbar_top',$data);
		$tdata= array();
                
                $tdata['result'] = $this->model_printeventwise->get_contents($checkbox_array);
                //$this->load->view("admin/view_select_event", $data);
		$this->load->view('admin/view_print_eventwise',$tdata);               
        }
        public function select_collegewise()
	{       $this->load->helper('array');
                $checkbox_array = $this->input->post('clg_sel');
                $this->load->model('admin/model_printcollegewise');
                $this->load->helper('string');
                $data['title']='View Collegewise';
		$this->load->view('admin/include/header',$data);
                $this->load->view('admin/sidebar');
                $this->load->view('admin/include/navbar_top',$data);
		$tdata= array();
                $clg_id=0;
                $tdata['result'] = $this->model_printcollegewise->get_contents($checkbox_array);
                //$this->load->view("admin/view_select_event", $data);
		$this->load->view('admin/view_print_collegewise',$tdata,$clg_id);               
        }
         
	public function pdf_collegewise()
	{    
		$this->load->model('admin/model_printcollegewise');
		$tdata= array();       
		$tdata['result'] = $this->model_printcollegewise->get_contents($this->input->post('clg_id'));
		$this->load->view('admin/view_pdf_collegewise',$tdata);
		$data = [];
                //load the view and saved it into $html variable
                $html=$this->load->view('admin/view_pdf_collegewise', $data, true);
 
                //this the the PDF filename that user will get to download
                $filename=$this->input->post($this->input->post('clg_id'));
                $pdfFilePath = $filename.".pdf";
 
                 //load mPDF library
                $this->load->library('m_pdf');
 
                //generate the PDF from the given html
                 $this->m_pdf->pdf->WriteHTML($html);

                 //download it.
                 $this->m_pdf->pdf->Output($pdfFilePath, "D");              
        }
    public function pdf_eventwise()
	{    
                
		$this->load->model('admin/model_printeventwise');
		$tdata= array();       
		$tdata['result'] = $this->model_printeventwise->get_contents($this->input->post('event_id'));
		$this->load->view('admin/view_pdf_eventwise',$tdata);
		$data = [];
                //load the view and saved it into $html variable
                $html=$this->load->view('admin/view_pdf_eventwise', $data, true);
 
                //this the the PDF filename that user will get to download
                $filename=$this->input->post($this->input->post('event_id'));
                $pdfFilePath = $filename.".pdf";
 
                 //load mPDF library
                $this->load->library('m_pdf');
 
                //generate the PDF from the given html
                 $this->m_pdf->pdf->WriteHTML($html);

                 //download it.
                 $this->m_pdf->pdf->Output($pdfFilePath, "D");                     
    }
        
	public function updateteam()
	{
		$this->load->model('admin/model_team_names');
		$id= $this->input->post('id');
		$team_name = array(
			'team_name' => $this->input->post('team_name'),
			);
		$this->model_team_names->team_names_update($id,$team_name);
		redirect(base_url().'admin/dashboard/teamNames');
	}   
        
    public function printCollegewise()
	{
		$data['title']='Print Collegewise';
		$this->load->view('admin/include/header',$data);
                $this->load->view('admin/sidebar');
                $this->load->view('admin/include/navbar_top',$data);
                $this->load->model('admin/model_sel_clg');
                $tdata= array();
		$tdata['result'] = $this->model_sel_clg->get_contents();
		$this->load->view('admin/view_select_clg',$tdata);
	}
        
    public function printEventwise()
	{
		$data['title']='Print Eventwise';
		$this->load->view('admin/include/header',$data);
                $this->load->view('admin/sidebar');
                $this->load->view('admin/include/navbar_top',$data);
                $this->load->model('admin/model_sel_event');
                $tdata= array();
		$tdata['result'] = $this->model_sel_event->get_contents();
		$this->load->view('admin/view_select_event',$tdata);
	}
	
        // Logout from admin page
	public function logout() 
	{
		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		
		redirect(base_url().'admin/login');
	}
	
	public function modal_edit_collegedata() 
	{
		$data['title']='Edit College Data';
		$this->load->view('admin/include/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/include/navbar_top',$data);
		$this->load->view('admin/edit_collegedata');
		$this->load->view('admin/include/footer');
	}
        
}
