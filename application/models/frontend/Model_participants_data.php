<?php

class Model_participants_data extends CI_Model {
    /*public function get_event_min() 
    {
        $this->db->select('id,min');
        $this->db->from('events');
        $query = $this->db->get();
        return $query->result();
    }*/
    function insert_participants_data($data)
    {
        $count=0;
        
        foreach ($data['s_name'] as $row)
        {
            $insrt=array(
                's_name'=>$data['s_name'][$count],
                's_email'=>$data['s_email'][$count], 
                's_phn'=>$data['s_phn'][$count],
                'e_id' => $data['e_id'],
                'c_id' => $data['c_id']
            );
            
            $this->db->insert('students_data',$insrt);
            $count+=1;
            }
        
        //print_r($data);
        /*foreach ($data as $row)
        {
            foreach($row as $temp)
            $insrt=array(
                
                's_name'=>$temp
                 's_phn'=>$
                );
        }
        $this->db->insert('students_data',$insrt);*/    
        
    }
    function insert_participants_data1($data)
    {
        foreach ($data as $row)
        {
            $insrt=array(
                's_name'=>$data['s_name'],
                's_email'=>$data['s_email'], 
                's_phn'=>$data['s_phn'],
                'e_id' => $data['e_id'],
                'c_id' => $data['c_id']
            );
            
            $this->db->insert('students_data',$insrt);
        }
    }
    function update_participants_data($data)
    {
        
        foreach ($data as $row)
        {
            $this->db->set('s_name',$data['s_name']); 
            $this->db->set('s_email',$data['s_email']); 
            $this->db->set('s_phn',$data['s_phn']); //value that used to update column  
            $this->db->where('s_id', $row); //which row want to upgrade  
            $this->db->update('students_data');
        }
    }
    function delete_participants_data($data)
    {
        foreach ($data['s_id'] as $row)
        { 
            $this->db->where('s_id', $row);  
            $this->db->delete('students_data');
        }
    }
    function check_status($data)
    {
        $count=0;
        foreach ($data['s_name'] as $row)
        {
            if(($data['s_name'][$count]!="")&&($data['s_email'][$count]!="")&&($data['s_phn'][$count]!=""))
            {
                $count+=1;
            }
        }
        return $count;
    } 
    
}


 
