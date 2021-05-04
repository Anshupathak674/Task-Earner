<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {


	public function index()
	{
		$this->load->view('admin_login');
	}

	function login_check(){
		$resutl=$this->Login_model->login_check();
		if($resutl) {
			redirect(base_url().'tasker_dashboard');
	   } else {
		$this->session->set_flashdata('msg', 'Invalid Details');
		$this->session->set_flashdata('msg_class', 'bg-danger text-white');
		   redirect(base_url());
	   }
	}

	function admin_logout()
	{
		$this->session->unset_userdata('admin_name');
		$this->session->unset_userdata('admin_username');
		$this->session->unset_userdata('admin_login_id');
		$this->session->set_flashdata('msg', 'Successfully Logged Out');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url().'company_login');
	}

	function tasker_registration()
	{
		$this->load->view('tasker_registration');
		
	}

	function tasker_signup_check()
	{
		$resutl = $this->Login_model->tasker_signup_check();
        if ($resutl == 1) {
            $this->session->set_flashdata('msg', 'Successfully Signed Up!!');
            $this->session->set_flashdata('msg_class', 'bg-info text-white');
            redirect(base_url());
        } elseif ($resutl == 2) {
            $this->session->set_flashdata('msg', 'Email Already Registerd');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
			redirect(base_url() . 'tasker_registration');

        } else {
            $this->session->set_flashdata('msg', 'Password Not Matched!!! Please Try Again..');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url() . 'tasker_registration');
        }
	}


	function tasker_logout()
	{
		$this->session->unset_userdata('tasker_name');
		$this->session->unset_userdata('tasker_profile_pic');
		$this->session->unset_userdata('tasker_email');
		$this->session->unset_userdata('tasker_details_id');
		$this->session->set_flashdata('msg', 'Successfully Logged Out');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url());
	}

	function company_login()
	{
	
		$this->load->view('company_login');
	
	}

	function company_login_check()
	{
		$resutl=$this->Login_model->company_login_check();
		if($resutl) {
			redirect(base_url().'basic_info');
	   } else {
		$this->session->set_flashdata('msg', 'Invalid Details');
		$this->session->set_flashdata('msg_class', 'bg-danger text-white');
		   redirect(base_url().'company_login');
	   }
	}

}
