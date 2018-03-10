<?php

class Model_printeventwise extends CI_Model {
    

    function get_contents($data) { 
       
         
        $this->db->select('*');
        $this->db->from('students_data');
        $this->db->join('colleges_name', 'colleges_name.id = students_data.c_id','left');
        $this->db->join('events', 'events.id = students_data.e_id');
        $this->db->where_in('students_data.e_id',$data);
        $query = $this->db->get();
        return $result = $query->result();
        
    
    } 
}   
 
