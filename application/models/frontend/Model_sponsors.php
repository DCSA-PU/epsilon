<?php
Class Model_sponsors extends CI_Model
{
// Read data from database to show data in of coordinators
    public function get_sponsors_data() 
    {
        $this->db->select('*');
        $this->db->from('sponsors');
        $query = $this->db->get();
        return $query->result();
    }
}
