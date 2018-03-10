<?php
Class Model_coordinators extends CI_Model
{
// Read data from database to show data in of coordinators
    public function get_coordinators_data() 
    {
        $this->db->select('*');
        $this->db->from('coordinators');
        $query = $this->db->get();
        return $query->result();
    }
}
