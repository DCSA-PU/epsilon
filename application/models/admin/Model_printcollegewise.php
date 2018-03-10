<?php

class Model_printcollegewise extends CI_Model {
    

    function get_contents($data) {
        $this->db->select('*');
        $this->db->from('students_data');
        $this->db->join('colleges_name', 'colleges_name.id = students_data.c_id');
        $this->db->join('events', 'events.id =students_data.e_id','left');
        $this->db->join('colleges', 'colleges.id =colleges_name.id','left');
        $this->db->where_in('students_data.c_id',$data);
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    function get_clg_name($data)
    {
        $this->db->select('clg_name');
        $this->db->from('colleges_name');
        $this->db->where('id',$data);
        $query = $this->db->get();
        return $result = $query->result();
    } 
}   
 
