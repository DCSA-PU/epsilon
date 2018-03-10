<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    

class Dashboard extends CI_Controller {
	public function index()
	{
            if (!isset($this->session->userdata['user_logged_in'])){redirect(base_url().'user/login');}
            $this->load->model('frontend/model_dashboard');
            $edata['result']['event'] = $this->model_dashboard->get_event_names();
            $edata['result']['student'] = $this->model_dashboard->get_student_data($this->session->userdata['user_logged_in']['id']);
            $data['title']='Dashboard';
            $this->load->view('frontend/include/header',$data);
            $this->load->view('frontend/include/navbar_top',$data);
            $id=$this->session->userdata['user_logged_in']['id'];
            $edata['name']=$this->model_dashboard->college_name($id);
            $this->load->view('frontend/view_user_dashboard',$edata);
            $this->load->view('frontend/include/footer');
	}
    
	//Change password
	/*public function chng_pswd()
	{
		$data['title']='Change Password';
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/include/navbar_top',$data);
		$this->load->view('frontend/view_user_change_pass');
		$this->load->view('frontend/include/footer');
	}*/
        public function footer_feedback()
	{   
                $data = array(
                        'name' => $this->input->post('name'),
                        'feedback' => $this->input->post('feedback'),
                        'email' => $this->input->post('email')
                        );
		$this->load->model('frontend/model_dashboard');
                $this->model_dashboard->feedback($data);
                redirect(base_url().'user/dashboard');
	}
	
        // Logout from user page
    public function logout() 
	{

		// Removing session data
		$sess_array = array(
			'username' => ''
			);
		$this->session->unset_userdata('user_logged_in', $sess_array);
		redirect(base_url().'user/login');
	}
        public function participantsData() 
	{   
            $this->load->helper('array');
            $this->load->model('frontend/Model_participants_data');
            //$min=$this->Model_participants_data->get_event_min();
            
            $operation = substr($this->input->post('sbBtn'),0,1);
            $id=substr($this->input->post('sbBtn'),2);
            $min = $this->input->post('min_'.$id);
            switch ($operation) {
                case 1:
                    $data = array(
                        's_name' => $this->input->post('name_'.$id),
                        's_email' => $this->input->post('email_'.$id),
                        's_phn' => $this->input->post('phn_'.$id),
                        'e_id' => $id,
                        'c_id' => $this->session->userdata['user_logged_in']['id']
                        );
                       $flag=$this->Model_participants_data->check_status($data);
                       if($flag<$min)
                       {
                           
                           $data = array(
                                'error_message' => '*Insertion not possible'
                                );
                           
                       }
                       else{
                          $this->Model_participants_data->insert_participants_data($data); 
                       }
                    break;
                    
                case 2:
                    
                    $count=0;$index=0;
                    $data = array( 
			's_name' => $this->input->post('name_'.$id),
                        's_email' => $this->input->post('email_'.$id),
                        's_phn' => $this->input->post('phn_'.$id),
                        's_id' => $this->input->post('id_'.$id)
			);
                    $flag=$this->Model_participants_data->check_status($data);
                    if($flag<$min)
                    {

                         $data = array(
                    'error_message' => '*Updation not possible'
                    );

                    }
                    else{
                    foreach ($data['s_name'] as $row)
                    {   
                        
                            if(isset($data['s_id'][$index]))
                            {
                               $data_update = array( 
                                's_id'=>$data['s_id'][$index],
                                's_name'=>$data['s_name'][$index],
                                's_email' =>$data['s_email'][$index],
                                's_phn' =>$data['s_phn'][$index]
                                   );
                              
                                $this->Model_participants_data->update_participants_data($data_update);
                            }
                            else
                            {
                                $data_insert=array(
                                's_name' => $data['s_name'][$index],
                                's_email' => $data['s_email'][$index],
                                's_phn' => $data['s_phn'][$index],
                                'e_id' => $id,
                                'c_id' => $this->session->userdata['user_logged_in']['id']
                                ); 
                                $this->Model_participants_data->insert_participants_data1($data_insert);
                            }
                            $count+=1;
                        
                        $index+=1;
                        
                    }
                    }
                    
                    
                    //$this->Model_participants_data->update_participants_data($data_update);
                    //$this->Model_participants_data->insert_participants_data($data_insert);
                    break;
                case 3:
                    $data = array(
                        's_id' => $this->input->post('id_'.$id)
			);
                    print_r($data);
                    $this->Model_participants_data->delete_participants_data($data);
                    break;
                default:
                    break;
            }
            redirect(base_url().'user/dashboard');
	}
}
