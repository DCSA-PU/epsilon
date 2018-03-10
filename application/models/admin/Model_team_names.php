<?php

class Model_team_names extends CI_Model {
    function editcontent_model(){
        parent::__construct();
    }

    function get_clg_contents() {
        $this->db->select('*');
        $this->db->from('colleges');
        $this->db->join('colleges_name', 'colleges_name.id = colleges.id');
        $query = $this->db->get();
        return $result = $query->result();
    }
    function team_names_update($id,$team_name) {
        $this->db->where('id', $id);
        $this->db->update('colleges', $team_name);
      
	}
}   
 
