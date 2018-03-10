<?php

class Model_edit_studentdata extends CI_Model {
    function editcontent_model(){
        parent::__construct();
    }

    function get_contents() {
        $this->db->select('*');
        $this->db->from('students_data');
	$this->db->join('events','events.id=students_data.e_id');
        $query = $this->db->get();
        return $result = $query->result();
        
    }
    function student_data_update($id,$student_data) {
        $this->db->where('s_id', $id);
        $this->db->update('students_data',$student_data);
      
	}
	
	function get_events() {
        $this->db->select('id,name');
        $this->db->from('events');
        $query = $this->db->get();
        return $result = $query->result();
        
    }
}

