<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  function category()
  {
    $this->db->select('*');
    $this->db->from('category');
    $this->db->order_by('category_name', 'ASC');
    $query = $this->db->get();

    return $query->result();
  }

  function sub_category_names()
  {
    $this->db->select('DISTINCT(sub_category_name)');

    $this->db->from('sub_category');
    $this->db->order_by('sub_category_name', 'ASC');
    $query = $this->db->get();

    return $query->result();
  }

  function sub_category()
  {
    $this->db->select('*');
    $this->db->from('sub_category');
    $this->db->order_by('sub_category_name', 'ASC');
    $query = $this->db->get();

    return $query->result();
  }

  function fetch_add_by_get()
  {
    $sub_category_id = $this->input->get('sub_category_id');
    $category_id = $this->input->get('category_id');
    $via_form = $this->input->get('search');
    $min_price = $this->input->get('min_price');

    $this->db->select('*');
    $this->db->from('advertisement');
    $this->db->where('advertisement.product_quantity	 >=', 1);

    $this->db->join('sub_category', 'sub_category.sub_category_id  = advertisement.sub_category_id', 'left');
    $this->db->join('category', 'category.category_id  = advertisement.category_id', 'left');

    if ($sub_category_id) {
      $this->db->where('advertisement.sub_category_id', $sub_category_id);
    }
    if ($category_id) {
      $this->db->where('advertisement.category_id', $category_id);
    }

    if ($via_form) {
      $this->db->like('product_name', $via_form);
    }

    if ($min_price) {
      $this->db->where('product_offer_price	 >=', $min_price);
    }
    
    $this->db->order_by('rand()');

    $query = $this->db->get();
    return $query->result();
  }

  function fetch_add()
  {

    $min_price = $this->input->post('min_price');
    $max_price = $this->input->post('max_price');
    $category_id = $this->input->post('category_id');
    $sorting = $this->input->post('sorting');
    $sub_category_name = $this->input->post('sub_category_name');

    $this->db->select('*');
    $this->db->from('advertisement');
    $this->db->where('advertisement.product_quantity	 >=', 1);

    $this->db->join('sub_category', 'sub_category.sub_category_id  = advertisement.sub_category_id', 'left');
    $this->db->join('category', 'category.category_id  = advertisement.category_id', 'left');


    if ($category_id || $sub_category_name) {

      if (isset($category_id)) {
        $this->db->where_in('advertisement.category_id', $category_id);

        // $this->db->where_in('advertisement.category_id', $link_category_id);
      }

      if (isset($sub_category_name)) {
        // $sub_category_name = implode("','", $sub_category_name);
        $this->db->where_in('sub_category.sub_category_name', $sub_category_name);
      }
    }

    if ($min_price) {
      $this->db->where('advertisement.product_offer_price	 >=', $min_price);
    }

    if ($max_price) {
      $this->db->where('advertisement.product_offer_price	 <=', $max_price);
    }

    if ($sorting == 1) {
      $this->db->order_by('category.category_name', 'ASC');
    }
    if ($sorting == 'low_high') {
      $this->db->order_by('advertisement.product_offer_price', 'ASC');
    }
    if ($sorting == 'high_low') {
      $this->db->order_by('advertisement.product_offer_price', 'DESC');
    }
    if ($sorting == 'date') {
      $this->db->order_by('advertisement.advertisement_date', 'DESC');
    }
    $query = $this->db->get();
    return $query->result();
  }

  function searching()
  {
    $search = $this->input->post('search');

    $this->db->select('*');
    $this->db->from('advertisement');
    $this->db->where('advertisement.product_quantity	 >=', 1);

    $this->db->like('product_name', $search);

    $query = $this->db->get();
    // print_r($query);die;
    return $query->result();
  }


  //...........view products details.................//
  function view_advertisement()
  {
    $advertisement_id = $this->input->get('advertisement_id');
    $this->db->select('*');
    $this->db->from('advertisement');
    $this->db->where('advertisement_id', $advertisement_id);
    $this->db->where('advertisement.product_quantity	 >=', 1);

    $query = $this->db->get()->row_array();
    return $query;
  }

  function view_advertisement_images()
  {
    $advertisement_id = $this->input->get('advertisement_id');
    $this->db->select('*');
    $this->db->from('inside_images');
    $this->db->where('advertisement_id', $advertisement_id);

    $query = $this->db->get();
    return $query->result();
  }

  function view_related_products()
  {
    $advertisement_id = $this->input->get('advertisement_id');
    $this->db->select('*');
    $this->db->from('advertisement');
    $this->db->where('advertisement_id', $advertisement_id);

    $query = $this->db->get();
    $fetch = $query->row();
    if ($fetch) {
      $this->db->select('*');
      $this->db->from('advertisement');
      $this->db->where('product_quantity	 >=', 1);

      $this->db->join('sub_category', 'sub_category.sub_category_id  = advertisement.sub_category_id', 'left');
      $this->db->join('category', 'category.category_id  = advertisement.category_id', 'left');

      $this->db->where_in('advertisement.category_id', $fetch->category_id);
      $this->db->where_not_in('advertisement.advertisement_id', $advertisement_id);
      $this->db->where_in('advertisement.sub_category_id',  $fetch->sub_category_id);

      $this->db->limit(6);
      $query = $this->db->get();
      return $query->result();
    }
  }

  function all_bids()
  {
    $user_details_id = $this->session->userdata('user_details_id');
    $advertisement_id = $this->input->get('advertisement_id');

    $this->db->select('*');
    $this->db->from('all_bids');
    $this->db->where('user_details_id', $user_details_id);
    $this->db->where('add_id', $advertisement_id);

    $query = $this->db->get();
    return $query->result();
  }
  //...........add to cart.................//
  function add_to_cart()
  {
    $user_details_id = $this->session->userdata('user_details_id');
    date_default_timezone_set("Asia/Kolkata");
    $date=date('Y-m-d h:i:sa ');

    extract($this->input->post());
    $formArray = array(
        'bid_date'  => $date,
        'bid_price'  => $bid_price,
        'add_id'  => $add_id,
        'project_delivery'  => $project_delivery,
        'user_details_id'  => $user_details_id,
        'proposal_description'  => $proposal_description,
        'tasker_details_id' => $tasker_details_id
    );
    $this->db->insert('all_bids', $formArray);
  }

  //...........fetch user orders.................//
  function fetch_user_orders()
  {
    $user_id = $this->session->userdata('user_details_id');
    $this->db->select('*');
    $this->db->from('all_bids');
    $this->db->where('user_details_id', $user_id);
    $this->db->join('advertisement', 'advertisement.advertisement_id  = all_bids.add_id', 'left');

    $query = $this->db->get();
    return $query->result();
  }

  //...........fetch feature products.................//
  function fetch_feature_product1()
  {
 
    $this->db->select('*');
    $this->db->from('advertisement');
    $this->db->where('feature_product', 1);
    $this->db->limit(3);

    $query = $this->db->get();
    return $query->result();
  }

  function fetch_feature_product()
  {
 
    $this->db->select('*');
    $this->db->from('advertisement');
    $this->db->where('feature_product', 1);
    $this->db->where('product_quantity	 >=', 1);

    $this->db->join('sub_category', 'sub_category.sub_category_id  = advertisement.sub_category_id', 'left');
    $this->db->join('category', 'category.category_id  = advertisement.category_id', 'left');
    $query = $this->db->get();
    return $query->result();
  }

  function fetch_feature_product2()
  {
 
    $this->db->select('*');
    $this->db->from('advertisement');
    
    $this->db->where('feature_product', 1);
    $this->db->limit(6, 3);

    $query = $this->db->get();
    return $query->result();
  }

  //...........fetch tags.................//
  function fetch_tags()
  {
    $this->db->select('advertisement_id, product_name');
    $this->db->from('advertisement');
    $this->db->order_by('rand()');
    $this->db->limit(15);

    $query = $this->db->get();
    return $query->result();
  }

  //...........about us .................//

  function fetch_members()
  {
      $this->db->select('*');
      $this->db->from('team');
      $this->db->order_by('team_id', 'ASC');

      $query = $this->db->get();
      return $query->result();
  }

  function basic_info()
  {
    $this->db->select('*');
    $this->db->from('basic_info');
    $this->db->where('admin_login_id', 1);
    return $this->db->get()->row_array();

  }

  function contact_us_reviews()
  {
    date_default_timezone_set("Asia/Kolkata");
    $date=date('Y-m-d h:i:sa ');

    extract($this->input->post());
    $formArray = array(
        'contact_review_date'  => $date,
        'contact_email'  => $contact_email,
        'contact_phone'  => $contact_phone,
        'contact_message'  => $contact_message,
        'contact_name'  => $contact_name
    );
    $this->db->insert('contact_us_reviews', $formArray);
  }

  //...................front page ................//
    
  function fetch_main_banner()
  {
      $admin_login_id = 1;

      $this->db->select('*');
      $this->db->from('main_banner');
      $this->db->where('admin_login_id', $admin_login_id);

      $query = $this->db->get()->row_array();
      return $query;
  }



  function accepted_projects()
  {
       $user_details_id = $this->session->userdata('user_details_id');
        $this->db->select('*');
        $this->db->from('all_bids');
        $this->db->where('user_details_id', $user_details_id);
    $this->db->join('advertisement', 'advertisement.advertisement_id  = all_bids.add_id', 'left');

        $query = $this->db->get();
       return $query->result();

  }


}
