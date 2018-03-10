<?php

Class Model_home extends CI_Model
{

// Read data using username and password
        public function count() 
        {
            $this->db->select('count(*) as clgs');
            $this->db->from('colleges_name');
            $query = $this->db->get();
            return $query->result();
        }
        public function count2() 
        {
            $this->db->select('count(*) as students');
            $this->db->from('students_data');
            $query = $this->db->get();
            return $query->result();
        }
        public function count3() 
        {
            $this->db->select('count(*) as sponsors');
            $this->db->from('sponsors');
            $query = $this->db->get();
            return $query->result();
        }
}        
