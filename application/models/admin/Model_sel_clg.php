<?php

class Model_sel_clg extends CI_Model {
    

    function get_contents() {
        $this->db->select('*');
        $this->db->from('colleges_name');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
}   
 
