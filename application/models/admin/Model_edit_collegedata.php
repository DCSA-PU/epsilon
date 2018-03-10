<?php

class Model_edit_collegedata extends CI_Model {
    function editcontent_model(){
        parent::__construct();
    }

    function get_clg_contents() {
        $this->db->select('*');
        $this->db->from('colleges');
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $result = $query->result();
        
    }
    function college_data_update($id,$college_data) {
        $this->db->where('id', $id);
        $this->db->update('colleges', $college_data);
      
}
}

