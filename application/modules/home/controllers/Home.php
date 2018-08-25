<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->library(array('form_validation','session'));
		$this->load->model(array('home_model'));

	}

	public function index(){

		if($this->session->userdata('logged_voter')){


		if($this->home_model->has_voted($this->session->userdata('logged_email'))==0){	

		$this->form_validation->set_rules('radio_pres','President','callback_rb_presidentvalidator');
		$this->form_validation->set_rules('radio_vppres','Vice President','callback_rb_vp_presidentvalidator');
		$this->form_validation->set_rules('cb_senators','Senators','callback_cb_senatorvalidator');
		$this->form_validation->set_error_delimiters("<p style='color:red;'>* ","</p>");

		if($this->form_validation->run()===FALSE){

			$data['pres_list'] = $this->home_model->get_president_list();
			$data['vp_list']   = $this->home_model->get_vp_list();
			$data['sen_list'] = $this->home_model->get_senator_list();
			$data['party_list'] =$this->home_model->get_partylist();
			$this->load->view('home',$data);

		}else{

			if($this->home_model->has_voted($this->session->userdata('logged_email'))==0){

			$vote_status = $this->home_model->submit_vote(
					$this->input->post('radio_pres'),
					$this->input->post('radio_vppres'),
					$this->input->post('cb_senators')
					);

			if($vote_status){

				$set = $this->home_model->set_voter_status(array('has_voted'=>1),$this->session->userdata('logged_email'));

				if($set==1){

				redirect(base_url('voting-results'),'refresh');	
				
				}
				
			}

			}else{

				echo 'Action not allowed!';
			}

			
		}

		}else{

			$this->load->view('voter_hasvoted');
		}


		}else{
			$this->session->set_flashdata('unauthorized','Please login to continue.');
			redirect(base_url('login'.'?next='.urlencode(base_url('/'))));
		}

	}


	public function login(){


		if($this->session->userdata('logged_voter')){

			redirect(base_url('/'));

		}else{

		$this->form_validation->set_rules('voters_email','Voter\'s Email','trim|required|valid_email');
		$this->form_validation->set_rules('voters_password','Voter\'s Password','trim|required');
		$this->form_validation->set_error_delimiters("<p style='color:red'>* ","</p>");

		if($this->form_validation->run()==FALSE){
			$this->load->view('voters_login');	
		}else{


			if($this->home_model->auth($this->input->post('voters_email'),$this->input->post('voters_password'))==1){

				$this->session->set_userdata('logged_voter',TRUE);
				$this->session->set_userdata('logged_email',$this->input->post('voters_email'));

				redirect(urldecode($this->input->get('next')));
			}else{

				$this->session->set_flashdata('auth_failed','Invalid Email or Password');
				redirect(base_url('login'));
			}
		}

	  }
	

	}

	public function logout(){

		$this->session->unset_userdata('logged_voter');
		$this->session->unset_userdata('logged_email');
		redirect(base_url('login'));
	}

	public function vote_result(){

		$data['pres_vote_results'] = $this->home_model->get_president_voting_result();
		$data['vp_vote_results']   = $this->home_model->get_vpresident_voting_result();
		$data['sen_vote_results']= $this->home_model->get_senator_voting_result();
		$this->load->view('vote_results',$data);

	}

	public function cb_senatorvalidator(){

		if($this->input->method()=="post"){

			if($this->input->post('cb_senators')===NULL){

				$this->form_validation->set_message('cb_senatorvalidator','You must select at least 1 senator');

				return FALSE;
			}else if(sizeof($this->input->post('cb_senators'))>12){

				$this->form_validation->set_message('cb_senatorvalidator','You must select  12 senators only');
				return FALSE;
			}
			else{

				return TRUE;
			}
		}else{
			redirect(base_url(''),'refresh');
		}
	}

	public function rb_presidentvalidator(){

		if($this->input->method()=="post"){

			if($this->input->post('radio_pres') === NULL){
				$this->form_validation->set_message('rb_presidentvalidator','You must select a president to vote.');
				return FALSE;
			}else{

				return TRUE;
			}


		}else{

			redirect(base_url(''),'refresh');

		}

	}

	 public function rb_vp_presidentvalidator(){

		if($this->input->method()=="post"){

			if($this->input->post('radio_vppres') === NULL){
				$this->form_validation->set_message('rb_vp_presidentvalidator','You must select a vice president to vote.');
				return FALSE;
			}else{

				return TRUE;
			}


		}else{

			redirect(base_url(''),'refresh');

		}

	}

 

}
