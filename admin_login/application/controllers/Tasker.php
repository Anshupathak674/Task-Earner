<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tasker extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);

		if ($this->session->userdata('tasker_email')) {
		} else {
			$this->session->set_flashdata('msg', 'Please Login First');
			$this->session->set_flashdata('msg_class', 'bg-danger text-white');
			redirect(base_url());
		}
	}
	function tasker_dashboard()
	{
		$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
		$data['all_bids'] = $this->Admin_model->all_bids();
		$data['fetch_advertisement'] = $this->Admin_model->view_tasker_advertisement();

		$this->load->view('include/tasker_header', $data);
		$this->load->view('tasker_dashboard', $data);
		$this->load->view('include/tasker_footer', $data);
	}



	//...................add_addvertisement ................//
	function add_advertisement()
	{
		$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
		$data['fetch_category'] = $this->Admin_model->category();

		$this->load->view('include/tasker_header', $data);
		$this->load->view('add_advertisement', $data);
		$this->load->view('include/tasker_footer', $data);

	}

	public function fetch_sub_category()
	{
		echo json_encode($this->Admin_model->fetch_sub_category());
	}

	function check_advertisement()
	{
		extract($this->input->post());
		$config['upload_path']          = 'uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 200000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('front_image')) {
			$this->session->set_flashdata('msg', 'Error');
			$this->session->set_flashdata('msg_class', 'bg-danger text-white');
			redirect(base_url() . 'index.php/add_advertisement');
		} else {
			$data =  $this->upload->data();

			$config['image_library'] = 'GD2';
			$config['source_image'] = './uploads/' . $data['raw_name'] . $data['file_ext'];
			$config['width']         = 272;
			$config['height']       = 228;
			// $config['maintain_ratio'] = TRUE;

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$image = $data['raw_name'] . $data['file_ext'];
			$last_id = $this->Admin_model->add_advertisement($image);

			$filesCount = count($_FILES['all_images']['name']);

			for ($i = 0; $i < $filesCount; $i++) {
				$_FILES['file']['name']     = $_FILES['all_images']['name'][$i];
				$_FILES['file']['type']     = $_FILES['all_images']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['all_images']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['all_images']['error'][$i];
				$_FILES['file']['size']     = $_FILES['all_images']['size'][$i];

				$config['upload_path']          = 'uploads/';
				$config['allowed_types']        = 'jpeg|jpg|png';
				$config['max_size']             = 200000;

				// Load and initialize upload library 
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('file')) {
					// Uploaded file data 
					$fileData = $this->upload->data();
					$uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Admin_model->add_all_image($uploadData[$i]['file_name'], $last_id);
				}
			}
			$this->session->set_flashdata('msg', 'Upload successfull');
			$this->session->set_flashdata('msg_class', 'bg-success text-white');
			redirect(base_url() . 'index.php/add_advertisement');
		}
	}

//...................view tasker advertisement ................//
	function view_tasker_advertisement()
	{
		$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();

		$data['fetch_advertisement'] = $this->Admin_model->view_tasker_advertisement();

		$this->load->view('include/tasker_header', $data);
		$this->load->view('view_tasker_advertisement', $data);
		$this->load->view('include/tasker_footer', $data);
	}

	//...................update main image of advertisement ................//

	function get_advertisement_main_image()
	{
		$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
		$data['fetch_advertisement'] = $this->Admin_model->get_advertisement_front_image();

		$this->load->view('include/tasker_header', $data);
		$this->load->view('edit_advertisement_main_image', $data);
		$this->load->view('include/tasker_footer', $data);
	}
	function edit_advertisement_main_image()
	{
		extract($this->input->post());
		$config['upload_path']          = 'uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 200000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('front_image')) {
			$this->session->set_flashdata('msg', 'Error');
			$this->session->set_flashdata('msg_class', 'bg-danger text-white');
			redirect(base_url() . 'index.php/view_tasker_advertisement');
		} else {
			$data =  $this->upload->data();

			$config['image_library'] = 'GD2';
			$config['source_image'] = './uploads/' . $data['raw_name'] . $data['file_ext'];

			$this->load->library('image_lib', $config);

			$image = $data['raw_name'] . $data['file_ext'];
			$this->Admin_model->edit_advertisement_main_image($image);

			$this->session->set_flashdata('msg', 'Main Image Updated Successfully');
			$this->session->set_flashdata('msg_class', 'bg-success text-white');
			redirect(base_url() . 'index.php/view_tasker_advertisement');
		}
	}


		//...................update inner images of advertisement ................//
		function get_advertisement_images()
		{
		$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
			$data['fetch_advertisement_images'] = $this->Admin_model->get_advertisement_images();
			$this->load->view('include/tasker_header', $data);
			$this->load->view('edit_advertisement_images', $data);
			$this->load->view('include/tasker_footer', $data);
		}
	
		function edit_advertisement_images()
		{
			extract($this->input->post());
			$config['upload_path']          = 'uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 200000;
	
			$this->load->library('upload', $config);
	
			if (!$this->upload->do_upload('inside_images')) {
				$this->session->set_flashdata('msg', 'Error');
				$this->session->set_flashdata('msg_class', 'bg-danger text-white');
				redirect(base_url() . 'index.php/get_advertisement_images?advertisement_id=' . $advertisement_id);
			} else {
				$data =  $this->upload->data();
	
				$config['image_library'] = 'GD2';
				$config['source_image'] = './uploads/' . $data['raw_name'] . $data['file_ext'];
	
				$this->load->library('image_lib', $config);
	
				$image = $data['raw_name'] . $data['file_ext'];
				$this->Admin_model->edit_advertisement_images($image);
	
				$this->session->set_flashdata('msg', 'Image Uploaded');
				$this->session->set_flashdata('msg_class', 'bg-success text-white');
				redirect(base_url() . 'index.php/get_advertisement_images?advertisement_id=' . $advertisement_id);
			}
		}
	
		function delete_inside_image()
		{
			$advertisement_id = $this->input->get('advertisement_id');
			$this->Admin_model->delete_inside_image();
	
			$this->session->set_flashdata('msg', 'Successfully Deleted');
			$this->session->set_flashdata('msg_class', 'bg-danger text-white');
			redirect(base_url() . 'index.php/get_advertisement_images?advertisement_id=' . $advertisement_id);
		}


		function all_details_advertisement()
		{
			$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
			$data['fetch_advertisement'] = $this->Admin_model->all_details_advertisement();

			$this->load->view('include/tasker_header', $data);
			$this->load->view('all_details_advertisement', $data);
			$this->load->view('include/tasker_footer', $data);
			
		}

		function delete_tasker_advertisement()
		{
			$this->Admin_model->delete_advertisement();
		$this->session->set_flashdata('msg', 'Successfully Deleted');
		$this->session->set_flashdata('msg_class', 'bg-danger text-white');
		redirect(base_url() . 'index.php/view_tasker_advertisement');
		}
	

//...................bids stats................//
		function tasker_bids_stats()
		{
			$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
			
			$data['all_bids'] = $this->Admin_model->all_bids();

			$this->load->view('include/tasker_header', $data);
			$this->load->view('tasker_bids_stats', $data);
			$this->load->view('include/tasker_footer', $data);
		}

		function view_proposal_details()
		{
			$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
			
			$data['view_proposal_details'] = $this->Admin_model->view_proposal_details();

			$this->load->view('include/tasker_header', $data);
			$this->load->view('view_proposal_details', $data);
			$this->load->view('include/tasker_footer', $data);
		}

		function accept_bid()
		{
		$this->Admin_model->accept_bid();
		$this->session->set_flashdata('msg', 'Bid Accepted');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url() . 'tasker_bids_stats');
		}

		function reject_bid()
		{
			$this->Admin_model->reject_bid();
		$this->session->set_flashdata('msg', 'Bid Accepted');
		$this->session->set_flashdata('msg_class', 'bg-success text-white');
		redirect(base_url() . 'tasker_bids_stats');
		}


		function tasker_profile()
		{
			$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
			$data['tasker_profile'] = $this->Admin_model->tasker_profile();
			

			$this->load->view('include/tasker_header', $data);
			$this->load->view('tasker_profile', $data);
			$this->load->view('include/tasker_footer', $data);
		}

		function update_tasker_profile()
		{
			$config['upload_path']          = 'uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png|pdf';
			$config['max_size']             = 200000;
	
			$this->load->library('upload', $config);
	
			if ($this->upload->do_upload('tasker_profile_pic')) {
				$data =  $this->upload->data();
				$tasker_profile_pic = $data['raw_name'] . $data['file_ext'];
				$post['tasker_profile_pic'] = $tasker_profile_pic;
			}
			$this->Admin_model->update_tasker_profile($tasker_profile_pic);
			$this->session->set_flashdata('msg', 'Profile Updated');
			$this->session->set_flashdata('msg_class', 'bg-success text-white');
			redirect(base_url() . 'index.php/tasker_profile');
		}



		function payments_tasker()
		{
			$data['fetch_basic_info'] = $this->Admin_model->fetch_basic_info();
			$data['fetch_active_projects'] = $this->Admin_model->fetch_active_projects();
		

			$this->load->view('include/tasker_header', $data);
			$this->load->view('tasker_payments', $data);
			$this->load->view('include/tasker_footer', $data);
		}

		function tasker_do_payment()
		{
			$this->Admin_model->tasker_do_payment();
			$this->session->set_flashdata('msg', 'Payment Successful');
			$this->session->set_flashdata('msg_class', 'bg-success text-white');
			redirect(base_url() . 'index.php/payments_tasker');
		}
}



