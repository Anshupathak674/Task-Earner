<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    function login_check(){
        $username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('tasker_details');
		$this->db->where('tasker_email',$username);
		$this->db->where('tasker_password',$password);
		$query=$this->db->get();
		$login=$query->row();
        
		if($login){
			$this->session->set_userdata('tasker_name',$login->tasker_name);
			$this->session->set_userdata('tasker_profile_pic',$login->tasker_profile_pic);
			$this->session->set_userdata('tasker_email',$login->tasker_email);
            $this->session->set_userdata('tasker_details_id',$login->tasker_details_id);
            
			return 1;
		} else {
			return 0;
		}
    }

	function company_login_check()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('admin_login');
		$this->db->where('admin_username',$username);
		$this->db->where('admin_password',$password);
		$query=$this->db->get();
		$login=$query->row();
        
		if($login){
			$this->session->set_userdata('admin_username',$login->admin_username);
			$this->session->set_userdata('admin_name',$login->admin_name);
			$this->session->set_userdata('admin_login_id',$login->admin_login_id);
            
			return 1;
		} else {
			return 0;
		}
	}

	function tasker_signup_check()
	{
    extract($this->input->post());
    
    if($tasker_password == $tasker_confirm_password){

        $this->db->select('*');
		$this->db->from('tasker_details');
        $this->db->where('tasker_email',$tasker_email);
        
		$query=$this->db->get();
		$login=$query->row();
        
		if($login){
			return 2;
		} else {
            date_default_timezone_set("Asia/Kolkata");
            $date=date('Y-m-d h:i:sa ');
    
            $formArray = array(
                'tasker_name' => $tasker_name,
                'tasker_email'  => $tasker_email,
                'tasker_password'  => $tasker_password,
                'tasker_date'  => $date
            );
            $this->db->insert('tasker_details', $formArray);
            return 1;
		}
    } else {
        return 0;
    }
	}
	
}
