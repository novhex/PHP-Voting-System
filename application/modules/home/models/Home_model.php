<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct(){

		parent::__construct();
		$this->load->database();
	}


	public function auth($email,$password){

		if($this->db->from('voters')->where('voters.email_address',$email)->count_all_results()==1){

		if(password_verify($password,$this->db->select('password')->from('voters')->where('voters.email_address',$email)->get()->row()->password)){

			return TRUE;
		}else{

			return FALSE;
		}

		}else{

			return FALSE;
		}

	}


	public function get_president_list(){

		return $this->db
		->join('party','party.party_id = presidents.pres_party')
		->order_by('party_id','ASC')
		->get('presidents')
		->result_array();

	}

	public function get_partylist(){

		return $this->db->order_by('party_id','ASC')->get('party')->result_array();
	}

	public function get_vp_list(){

		return $this->db
		->join('party','party.party_id = vice_presidents.vp_party')
		->order_by('party_id','ASC')
		->get('vice_presidents')
		->result_array();
	}

	public function get_senator_list(){

		return $this->db
		->join('party','party.party_id = senators.sen_party')
		->order_by('senators.sen_party','ASC')
		->get('senators')
		->result_array();
	}

	public function get_president_voting_result(){

	return	$this->db->select('presidents.pres_name')
			->select('COUNT(*) as gained_votes')
			->from('vote_logs')
			->join('presidents','presidents.pres_id = vote_logs.vote_value')
			->where('vote_logs.vote_type','president')
			->group_by('vote_logs.vote_value')
			->order_by('gained_votes','DESC')
			->get()
			->result_array();
	}


	public function get_vpresident_voting_result(){

	return	$this->db->select('vice_presidents.vp_name')
			->select('COUNT(*) as gained_votes')
			->from('vote_logs')
			->join('vice_presidents','vice_presidents.vp_id = vote_logs.vote_value')
			->where('vote_logs.vote_type','vp_president')
			->group_by('vote_logs.vote_value')
			->order_by('gained_votes','DESC')
			->get()
			->result_array();
	}

	public function get_senator_voting_result(){

 	return 	$this->db->select('senators.sen_name')
			 ->select('COUNT(*) as gained_votes')
			 ->from('vote_logs')
			 ->join('senators','senators.sen_id = vote_logs.vote_value')
			 ->where('vote_logs.vote_type','senator')
			 ->group_by('vote_logs.vote_value')
			 ->order_by('gained_votes','DESC')
			 ->get()
			 ->result_array();
	}

	public function has_voted($email){

		return $this->db->select('has_voted')->from('voters')->where('voters.email_address',$email)->get()->row()->has_voted;
	}


	public function set_voter_status($data,$email){

		return $this->db->where('voters.email_address',$email)->update('voters',$data);
	}

	public function submit_vote($president,$vice_president,$senators){
		


		if(sizeof($president!==0)){

			$pres_batchdata = array();

			if(count($president)>0){

			foreach($president as $pres_voted){

				array_push($pres_batchdata, array('vote_value'=>$pres_voted,'vote_type'=>'president','date_logged'=>date('Y-m-d')));

				}
			}

		 	
		}


		if(sizeof($vice_president!==0)){

			$vp_pres_batchdata = array();

			if(count($vice_president)>0){

			foreach($vice_president as $vp_pres_voted){

				array_push($vp_pres_batchdata, array('vote_value'=>$vp_pres_voted,'vote_type'=>'vp_president','date_logged'=>date('Y-m-d')));

				}
			}

		 	
		}

		if(sizeof($senators>=1)){

				$sen_batchdata = array();

				foreach($senators as $senators_voted){

					array_push($sen_batchdata, array('vote_value'=>$senators_voted,'vote_type'=>'senator','date_logged'=>date('Y-m-d')));

				}

		}

		return $this->db->insert_batch('vote_logs',array_merge($pres_batchdata,$sen_batchdata,$vp_pres_batchdata));
	}

}

/* End of file Home_model.php */
/* Location: ./application/modules/home/models/Home_model.php */