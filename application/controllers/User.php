<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  User extends CI_Controller
{


    function user_login()
    {
        $data['fetch_category'] = $this->Admin_model->category();
        $data['fetch_sub_category'] = $this->Admin_model->sub_category();
        $data['fetch_tags'] = $this->Admin_model->fetch_tags();
        $data['basic_info'] = $this->Admin_model->basic_info();
        $data['accepted_projects'] = $this->Admin_model->accepted_projects();

        $this->load->view('include/header', $data);
        $this->load->view('user_login');
        $this->load->view('include/footer', $data);
    }

    function user_login_check_new()
    {
        $resutl = $this->User_model->user_login_check();
        if($resutl){

            $this->session->set_flashdata('msg', 'Successfully Logged In');
            $this->session->set_flashdata('msg_class', 'bg-info text-white');
            redirect(base_url() . 'index.php/home');
        }else{
            
            $this->session->set_flashdata('msg', 'Error Please Try Again');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url() . 'index.php/user_login');
        }
    }

    //...........user signup.................//
    function user_signup()
    {
        $data['fetch_category'] = $this->Admin_model->category();
        $data['fetch_sub_category'] = $this->Admin_model->sub_category();
        $data['fetch_tags'] = $this->Admin_model->fetch_tags();
        $data['basic_info'] = $this->Admin_model->basic_info();
        $data['accepted_projects'] = $this->Admin_model->accepted_projects();

        $this->load->view('include/header', $data);
        $this->load->view('user_signup');
        $this->load->view('include/footer', $data);
    }

    function check_user_signup()
    {
        $resutl = $this->User_model->check_user_signup();
        if ($resutl == 1) {
            $this->session->set_flashdata('msg', 'SignUp Successfull!!! Now Please LogIn');
            $this->session->set_flashdata('msg_class', 'bg-info text-white');
            redirect(base_url() );
        } elseif ($resutl == 2) {
            $this->session->set_flashdata('msg', 'Email Already Registered');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url() . 'index.php/user_signup');
        } else {
            $this->session->set_flashdata('msg', 'Passwords Not Matched!!! Please Try Again..');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url() . 'index.php/user_signup');
        }
    }

    //...........user login.................//
    function user_login_check()
    {
        $resutl = $this->User_model->user_login_check();
        echo $resutl ? 1 : 0;
    }

    function user_logout()
    {
        $this->session->unset_userdata('user_email');
        $this->session->unset_userdata('user_wallet_amount');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_details_id');
        $this->session->unset_userdata('user_profile_pic');

        $this->session->set_flashdata('msg', 'Successfully Logged Out');
        $this->session->set_flashdata('msg_class', 'bg-success text-white');
        redirect(base_url().'index.php/home');
    }
}
