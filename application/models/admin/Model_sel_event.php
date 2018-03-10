<?php

class Model_sel_event extends CI_Model {
    

    function get_contents() {
        $this->db->select('*');
        $this->db->from('events');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
}   
 
