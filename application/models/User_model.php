<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function check_user_signup()
   {
    $user_password=$this->input->post('user_password');
    $user_confirm=$this->input->post('user_confirm');
    $user_email=$this->input->post('user_email');
    extract($this->input->post());
    
    if($user_password == $user_confirm){

        $this->db->select('*');
		$this->db->from('user_details');
        $this->db->where('user_email',$user_email);
        
		$query=$this->db->get();
		$login=$query->row();
        
		if($login){
			return 2;
		} else {
            date_default_timezone_set("Asia/Kolkata");
            $date=date('Y-m-d h:i:sa ');
    
            $formArray = array(
                'user_password' => $user_password,
                'user_date'  => $date,
                'user_email'  => $user_email,
                'user_name'  => $user_name
            );
            $this->db->insert('user_details', $formArray);
            return 1;
		}
    } else {
        return 0;
    }
   }

   function user_login_check()
   {
    $user_email=$this->input->post('user_email');
    $user_password=$this->input->post('user_password');
    
    $this->db->select('*');
    $this->db->from('user_details');
    $this->db->where('user_email',$user_email);
    $this->db->where('user_password',$user_password);
    $query=$this->db->get();
    $login=$query->row();
    
    if($login){
        $this->session->set_userdata('user_email',$login->user_email);
        $this->session->set_userdata('user_wallet_amount',$login->user_wallet_amount);
        $this->session->set_userdata('user_name',$login->user_name);
        $this->session->set_userdata('user_details_id',$login->user_details_id);
        $this->session->set_userdata('user_profile_pic',$login->user_profile_pic);

        return 1;

    } else {
        return 0;
    }
   }


   function fetch_user_data()
   {
       $user_id = $this->session->userdata('user_details_id');
       $this->db->select('*');
       $this->db->from('user_details');
       $this->db->where('user_details_id',$user_id);
        return $this->db->get()->row_array();
   }

   function change_user_detials()
   {
    $user_email=$this->input->post('user_email');
    $user_name=$this->input->post('user_name');
    $user_password_old=$this->input->post('user_password_old');

    $user_new_password=$this->input->post('user_new_password');
    $user_confirm_password=$this->input->post('user_confirm_password');
    $user_id = $this->session->userdata('user_details_id');


    $this->db->select('*');
    $this->db->from('user_details');
    $this->db->where('user_details_id',$user_id);
    $this->db->where('user_password',$user_password_old);
    $query=$this->db->get();
    $login=$query->row();

    if($login){
        $formArray = array(
            'user_email' => $user_email,
            'user_name'  => $user_name
        );
        $this->db->update('user_details', $formArray);

        if($user_new_password != null && $user_confirm_password != null){

            if($user_new_password == $user_confirm_password){
                $formArray = array(
                    'user_password' => $user_confirm_password
                );
                $this->db->update('user_details', $formArray);
                return 3;
            }else{
                return 2;
            }

        }else{
            return 1;
        }
    }else{
        return 0;
    }   
   }


   function change_user_profile_pic($user_profile_pic)
   {
       $user_details_id = $this->session->userdata('user_details_id');
    $formArray = array(
        'user_profile_pic' => $user_profile_pic,
    );
    $this->db->where('user_details_id', $user_details_id);
    $this->db->update('user_details', $formArray);

   }

}
