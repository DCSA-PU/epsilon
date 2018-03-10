<?php
Class Model_register extends CI_Model
{
// Read data from database to show data in of coordinators
    public function get_data() 
    {
        $this->db->select('*');
        $this->db->from('colleges_name');
        //$this->db->where('status',0);
        $query = $this->db->get();
        return $query->result();
    }
    public function sign_up($data,$id) 
    {
        $this->db->insert('colleges',$data);
        
        $this->db->set('status',1); 
        $this->db->where('id',$id); //which row want to upgrade  
        $this->db->update('colleges_name');
    }
    public function get_name($id) 
    {
        $this->db->select('clg_name');
        $this->db->from('colleges_name');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }
}
