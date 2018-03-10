<?php

Class Model_dashboard extends CI_Model
{

// Read data from database to show data in admin page
    public function get_student_data($clg_id) 
    {

        $condition = "c_id =" . "'" . $clg_id . "'";
        $this->db->select('*');
        $this->db->from('students_data');
        $this->db->join('events','events.id = students_data.e_id');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 1) 
        {
                return $query->result();
        } 
        else 
        {
                return false;
        }
    }
public function get_event_names() 
    {
        $this->db->select('*');
        $this->db->from('events');
        $query = $this->db->get();
        return $query->result();
    }
    public function college_name($id)
    {
        $this->db->select('*');
        $this->db->from('colleges_name');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function feedback($data)
    {
        $this->db->insert('feedback',$data);
    }
}

