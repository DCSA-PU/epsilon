<?php
Class Model_changePass extends CI_Model
{
// Read data using username and password
    public function change($data) 
    {
        $this->db->set('clg_pswd',md5($data['newpass']));
        $this->db->where(array('clg_usr'=>$data['username'],'clg_pswd'=>md5($data['oldpass'])));
        $this->db->update('colleges');
        if ( $this->db->affected_rows()>0) 
        {
            return 1;
        } 
        else
        {
            return 0;
        }
    }
}
?>

