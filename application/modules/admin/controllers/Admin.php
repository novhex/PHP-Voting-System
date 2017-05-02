<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $protected_routes = array('dashboard','political-parties','presidential-candidates','vp-presidential-candidates','senatorial-candidates');

	public function __construct(){

		parent::__construct();

		$this->load->helper(array('url'));
		$this->load->library(array('form_validation','session'));
		$this->load->model(array('admin_model'));

 
		

		if(in_array($this->uri->segment(2), $this->protected_routes)){

			if($this->session->userdata('logged_admin')!=''){
				
				// we have current admin logged in
				
			}else{

				$this->session->set_flashdata('admin_unauthorized', 'Please login to continue.');
				redirect(base_url('admin'));

				
			}

		}


	}

	public function index(){


		$this->form_validation->set_rules('admin_email','Admin Email','trim|required|valid_email');
		$this->form_validation->set_rules('admin_password','Admin Password','trim|required');
		$this->form_validation->set_error_delimiters("<p style='color:red;'>* ","</p>");

		if($this->form_validation->run()===FALSE){

			$data['page_title'] = 'Admin Login';
			$this->load->view('admin_login',$data);

		}else{

			if($this->admin_model->auth_admin($this->input->post('admin_email'),$this->input->post('admin_password'))==1){

				$this->session->set_userdata('logged_admin',$this->input->post('admin_email'));
				redirect(base_url('admin/dashboard'));
			}else{
				$this->session->set_flashdata('admin_auth_failed', 'Invalid Email or Password');
				redirect(base_url('admin'));
			}
		}
	}

	public function logout(){

		$this->session->unset_userdata('logged_admin');
		redirect(base_url('admin'));
	}

	public function dashboard(){

		$data['page_title'] = 'Voting System Dashboard - Main';
		$this->load->view('components/head',$data);
		$this->load->view('components/navbar');
		$this->load->view('admin_dashboard',$data);
		$this->load->view('components/footer');

	}

	public function political_parties(){

		$data['page_title'] = 'Voting System Dashboard - Political Parties';
		$data['political_partylist']  = $this->admin_model->get_partylist();
		$this->load->view('components/head',$data);
		$this->load->view('components/navbar');
		$this->load->view('admin_parties',$data);
		$this->load->view('components/footer');

	}


	public function presidential_candidates(){

		$data['page_title'] = 'Voting System Dashboard - Presidential Candidates';
		$data['presidential_candidates'] = $this->admin_model->get_president_list();
		$this->load->view('components/head',$data);
		$this->load->view('components/navbar');
		$this->load->view('admin_prescand',$data);
		$this->load->view('components/footer');

	}


	public function vice_presidential_candidates(){

		$data['page_title'] = 'Voting System Dashboard - Vice Presidential Candidates';
		$data['vp_presidential_candidates'] = $this->admin_model->get_vp_list();
		$this->load->view('components/head',$data);
		$this->load->view('components/navbar');
		$this->load->view('admin_vpprescand',$data);
		$this->load->view('components/footer');

	}

	public function senatorial_candidates(){

		$data['page_title'] = 'Voting System Dashboard - Senatorial Candidates';
		$data['senatorial_candidates'] = $this->admin_model->get_senator_list();
		$this->load->view('components/head',$data);
		$this->load->view('components/navbar');
		$this->load->view('admin_senatorial',$data);
		$this->load->view('components/footer');

	}

}

/* End of file Admin.php */
/* Location: ./application/modules/admin/controllers/Admin.php */