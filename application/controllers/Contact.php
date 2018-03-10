<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
            $this->load->model('frontend/model_coordinators');
            // Load the library 
            $this->load->library('googlemaps');
            // Initialize our map. Here you can also pass in additional parameters for customising the map (see below) 
			$config['center'] = '30.761632,76.768459'; 
			$config['zoom'] = '14';
			$this->googlemaps->initialize($config);
            $marker=array();
            $marker['position'] = '30.761632,76.768459'; 
            $this->googlemaps->add_marker($marker);
            // Create the map. This will return the Javascript to be frontend/included in our pages <head></head> section and the HTML code to be 
            // placed where we want the map to appear. 
            $map_data['map'] = $this->googlemaps->create_map();
            // Load our view, passing the map data that has just been created
            $map_data['result']=$this->model_coordinators->get_coordinators_data();
            $data['title']='Contact Us';
            $this->load->view('frontend/include/header',$data);
            $this->load->view('frontend/view_contact',$map_data);
            $this->load->view('frontend/include/footer');
	}
}
?>