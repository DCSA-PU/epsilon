<?php
    if (isset($this->session->userdata['user_logged_in']))
    {
        $username = ($this->session->userdata['user_logged_in']['username']);
    } 
    else 
    {
        redirect(base_url().'epsilon/user/login');
    }
?> 

        

