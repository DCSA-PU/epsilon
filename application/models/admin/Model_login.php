<?php

Class Model_login extends CI_Model
{

// Read data using username and password
        public function login($data) 
        {

            $condition = "admin_username =" . "'" . $data['username'] . "' AND " . "admin_password =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) 
            {
            return true;
            } 
            else
            {
            return false;
            }
        }

// Read data from database to show data in admin page
        public function read_user_information($username) 
        {

            $condition = "admin_username =" . "'" . $username . "'";
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) 
            {
                return $query->result();
            } 
            else 
            {
                return false;
            }
        }

    }

?>