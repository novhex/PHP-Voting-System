<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}	

	public function add_political_party($political_partyname){

		return $this->db->insert('party',array('party_name'=>$political_partyname));
	}

	public function add_presidential_candidate($assigned_party,$pres_name){



		if($this->db->select('pres_party')->from('presidents')->where('presidents.pres_party',$assigned_party)->count_all_results()==0){

			if($assigned_party!==3){

				return $this->db->insert('presidents',array('pres_name'=>$pres_name,'pres_party'=>$assigned_party));	
			}

		 }else{
		 		if($assigned_party==3){

		 			return $this->db->insert('presidents',array('pres_name'=>$pres_name,'pres_party'=>$assigned_party));	
		 			
		 		}else{

		 			return '<p>* Selected party has already a presidential candidate.</p>';

		 		}
		 }

		
	}


	public function add_vice_presidential_candidate($assigned_party,$vpres_name){



		if($this->db->select('vp_party')->from('vice_presidents')->where('vice_presidents.vp_party',$assigned_party)->count_all_results()==0){

			if($assigned_party!==3){

				return $this->db->insert('vice_presidents',array('vp_name'=>$vpres_name,'vp_party'=>$assigned_party));	
			}

		 }else{
		 		if($assigned_party==3){

		 			return $this->db->insert('vice_presidents',array('vp_name'=>$vpres_name,'vp_party'=>$assigned_party));	
		 			
		 		}else{

		 			return '<p>* Selected party has already a vice presidential candidate.</p>';

		 		}
		 }

		
	}

	public function add_senator($assigned_party,$senator_name){

		return $this->db->insert('senators',array('sen_name'=>$senator_name,'sen_party'=>$assigned_party));
	}


	public function auth_admin($email,$password){

		if($this->db->from('admin')->where('admin.admin_email',$email)->count_all_results()==1){

		if(password_verify($password,$this->db->select('admin_pass')->from('admin')->where('admin.admin_email',$email)->get()->row()->admin_pass)){

			return TRUE;

		}else{

			return FALSE;
		}

		}else{

			return FALSE;
		}
	}


	public function count_senatorlist($party_id){

		return $this->db->from('senators')->where('senators.sen_party',$party_id)->count_all_results();
	}

	public function get_partylist(){

		return $this->db->order_by('party_id','ASC')->get('party')->result_array();
	}



	public function get_president_list(){

		return $this->db
		->join('party','party.party_id = presidents.pres_party')
		->order_by('party_id','ASC')
		->get('presidents')
		->result_array();

	}

	public function get_senator_list(){

		return $this->db
		->join('party','party.party_id = senators.sen_party')
		->order_by('senators.sen_party','ASC')
		->get('senators')
		->result_array();
	}

	public function get_vp_list(){

		return $this->db
		->join('party','party.party_id = vice_presidents.vp_party')
		->order_by('party_id','ASC')
		->get('vice_presidents')
		->result_array();
	}

}

/* End of file Admin_model.php */
/* Location: ./application/modules/admin/models/Admin_model.php */