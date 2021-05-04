<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Admin extends CI_Controller
{

  function __construct()
    {
        parent::__construct();
        error_reporting(0);

        if ($this->session->userdata('user_email')) {
        } else {
            $this->session->set_flashdata('msg', 'Please Login First');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url().'home');
        }
    }
  //...........view products.................//
  function view_products()
  {
    //...........for header and footer.................//
    $data['fetch_category'] = $this->Admin_model->category();
    $data['fetch_sub_category'] = $this->Admin_model->sub_category();
    $data['accepted_projects'] = $this->Admin_model->accepted_projects();
    $data['fetch_tags'] = $this->Admin_model->fetch_tags();
    $data['basic_info'] = $this->Admin_model->basic_info();
   
    //...........for view page.................//
    $data['fetch_sub_category_names'] = $this->Admin_model->sub_category_names();
    $data['fetch_add_by_get'] = $this->Admin_model->fetch_add_by_get();
    $data['fetch_feature_product1'] = $this->Admin_model->fetch_feature_product1();
    $data['fetch_feature_product2'] = $this->Admin_model->fetch_feature_product2();

    $this->load->view('include/header', $data);
    $this->load->view('view_products', $data);
    $this->load->view('include/footer', $data);
  }

  function fetch_data()
  {
    echo json_encode($this->Admin_model->fetch_add());
  }

  function searching()
  {
    echo json_encode($this->Admin_model->searching());
  }

  //...........view products details.................//

  function view_product_details()
  {
    //...........for header and footer.................//
    $data['fetch_category'] = $this->Admin_model->category();
    $data['fetch_sub_category'] = $this->Admin_model->sub_category();
    $data['accepted_projects'] = $this->Admin_model->accepted_projects();

    $data['fetch_tags'] = $this->Admin_model->fetch_tags();
    $data['basic_info'] = $this->Admin_model->basic_info();

    //...........for view page.................//
    $data['view_advertisement'] = $this->Admin_model->view_advertisement();
    $data['view_advertisement_images'] = $this->Admin_model->view_advertisement_images();
    $data['view_related_products'] = $this->Admin_model->view_related_products();

    $data['all_bids'] = $this->Admin_model->all_bids();
    

    $this->load->view('include/header', $data);
    $this->load->view('view_product_details', $data);
    $this->load->view('include/footer', $data);
  }


  //...........add to cart.................//

  function add_to_cart()
  {
    $add_id = $this->input->post('add_id');
    $this->Admin_model->add_to_cart();
    $this->session->set_flashdata('msg', 'Bid Placed');
    $this->session->set_flashdata('msg_class', 'bg-success text-white');
    redirect(base_url().'view_product_details?advertisement_id='.$add_id);
  }

  


  //...........checkout .................//
  function checkout()
  {
    //...........for header and footer.................//
    $data['fetch_category'] = $this->Admin_model->category();
    $data['fetch_sub_category'] = $this->Admin_model->sub_category();
    $data['accepted_projects'] = $this->Admin_model->accepted_projects();

    $data['fetch_tags'] = $this->Admin_model->fetch_tags();
    $data['basic_info'] = $this->Admin_model->basic_info();


    $this->load->view('include/header', $data);
    $this->load->view('checkout', $data);
    $this->load->view('include/footer', $data);
  }
}
