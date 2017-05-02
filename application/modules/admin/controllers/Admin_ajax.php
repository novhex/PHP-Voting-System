<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ajax extends CI_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('form_validation','session'));
		$this->load->model(array('admin_model'));


			if($this->session->userdata('logged_admin')!=''){
				
				// we have current admin logged in
				
			}else{

				exit();
				
			}

	}

	public function ajax_popup_addparty(){

		if($this->input->is_ajax_request()){

			$data['political_partylist']  = $this->admin_model->get_partylist();
			$this->load->view('ajax-forms/ajax_add_political_party',$data);

		}
		
	}

	public function ajax_popup_add_pres_candidate(){

		if($this->input->is_ajax_request()){

			$data['political_partylist']  = $this->admin_model->get_partylist();
			$this->load->view('ajax-forms/ajax_add_presidential_candidate',$data);

		}

	}

	public function ajax_popup_add_vppres_candidate(){

		if($this->input->is_ajax_request()){

			$data['political_partylist'] = $this->admin_model->get_partylist();
			$this->load->view('ajax-forms/ajax_add_vppresidential_candidate',$data);
		}
	}


	public function ajax_popup_add_sen_candidate(){

		if($this->input->is_ajax_request()){

			$data['political_partylist']  = $this->admin_model->get_partylist();
			$this->load->view('ajax-forms/ajax_add_senatorial_candidate',$data);

		}

	}

	public function add_party(){

		if($this->input->is_ajax_request()){

			$this->form_validation->set_rules('party_name', 'Political Name', 'is_unique[party.party_name]|trim|required|min_length[5]|max_length[100]');

			if($this->form_validation->run()===FALSE){

				echo json_encode(array('response'=>validation_errors()));

			}else{

				echo json_encode(array('response'=>$this->admin_model->add_political_party($this->input->post('party_name'))));
			}

		}
	}

	public function add_presidential_candidate(){

		if($this->input->is_ajax_request()){

			$this->form_validation->set_rules('pres_name','Presidential Candidate Name','trim|required|min_length[5]|max_length[100]');
			$this->form_validation->set_rules('assigned_party','Party List','trim|required');

			if($this->form_validation->run()===FALSE){

				echo json_encode(array('response'=>validation_errors()));

			}else{

				echo json_encode(array('response'=>$this->admin_model->add_presidential_candidate($this->input->post('assigned_party'),$this->input->post('pres_name'))));
			}

		}

	}

	public function add_vppresidential_candidate(){

		if($this->input->is_ajax_request()){

			$this->form_validation->set_rules('vp_pres_name','Vice Presidential Candidate Name','trim|required|min_length[5]|max_length[100]');
			$this->form_validation->set_rules('assigned_party','Party List','trim|required');

			if($this->form_validation->run()===FALSE){

				echo json_encode(array('response'=>validation_errors()));

			}else{

				echo json_encode(array('response'=>$this->admin_model->add_vice_presidential_candidate($this->input->post('assigned_party'),$this->input->post('vp_pres_name'))));
			}

		}

	}

	public function add_senatorial_candidate(){

		if($this->input->is_ajax_request()){

			$this->form_validation->set_rules('senator_name','Senatorial Candidate Name','trim|required|min_length[5]|max_length[100]');
			$this->form_validation->set_rules('assigned_party','Party List','trim|required');

			if($this->form_validation->run()===FALSE){

				echo json_encode(array('response'=>validation_errors()));

			}else{
					if($this->admin_model->count_senatorlist($this->input->post('assigned_party'))>=12){
						echo json_encode(array('response'=>'<p>* Cannot add more senators for this party.</p>'));
					}else{

						echo json_encode(array('response'=>$this->admin_model->add_senator($this->input->post('assigned_party'),$this->input->post('senator_name'))));
					}
		
			}

		}

	}

}

/* End of file Admin_ajax.php */
/* Location: ./application/modules/admin/controllers/Admin_ajax.php */