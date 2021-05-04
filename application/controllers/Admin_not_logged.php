<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Admin_not_logged extends CI_Controller
{
  //...........home page .................//
  function home()
  {
    //...........for header and footer.................//
    $data['fetch_category'] = $this->Admin_model->category();
    $data['fetch_sub_category'] = $this->Admin_model->sub_category();
    $data['accepted_projects'] = $this->Admin_model->accepted_projects();

    $data['fetch_tags'] = $this->Admin_model->fetch_tags();
    $data['basic_info'] = $this->Admin_model->basic_info();
    $data['fetch_main_banner'] = $this->Admin_model->fetch_main_banner();


    //...........for view page.................//
    $data['fetch_feature_product'] = $this->Admin_model->fetch_feature_product();
    $data['fetch_members'] = $this->Admin_model->fetch_members();

    $this->load->view('home', $data);
  }

    //...........about us .................//
    function about_us()
    {
      $data['fetch_category'] = $this->Admin_model->category();
      $data['fetch_sub_category'] = $this->Admin_model->sub_category();
      $data['accepted_projects'] = $this->Admin_model->accepted_projects();

      $data['fetch_tags'] = $this->Admin_model->fetch_tags();
      $data['basic_info'] = $this->Admin_model->basic_info();
  
      //...........for view page.................//
      $data['fetch_members'] = $this->Admin_model->fetch_members();
      
      $this->load->view('include/header', $data);
      $this->load->view('about_us', $data);
      $this->load->view('include/footer', $data);
    }

    //...........contact us .................//
 function contact_us()
 {
   $data['fetch_category'] = $this->Admin_model->category();
   $data['fetch_sub_category'] = $this->Admin_model->sub_category();
   $data['accepted_projects'] = $this->Admin_model->accepted_projects();

   $data['fetch_tags'] = $this->Admin_model->fetch_tags();
   $data['basic_info'] = $this->Admin_model->basic_info();

   //...........for view page.................//
   
   $this->load->view('include/header', $data);
   $this->load->view('contact_us', $data);
   $this->load->view('include/footer', $data);
 }

  function contact_us_reviews()
  {
    $this->Admin_model->contact_us_reviews();

    $this->session->set_flashdata('msg', 'Review Submitted !!!!!');
    $this->session->set_flashdata('msg_class', 'bg-info text-white');
    redirect(base_url() . 'index.php/contact_us');
  }

  function privacy()
  {
    $data['fetch_category'] = $this->Admin_model->category();
    $data['fetch_sub_category'] = $this->Admin_model->sub_category();
    $data['accepted_projects'] = $this->Admin_model->accepted_projects();
    
    $data['fetch_tags'] = $this->Admin_model->fetch_tags();
    $data['basic_info'] = $this->Admin_model->basic_info();
 
    //...........for view page.................//
    $data['fetch_members'] = $this->Admin_model->fetch_members();
    
    $this->load->view('include/header', $data);
    $this->load->view('privacy', $data);
    $this->load->view('include/footer', $data);
  }


}