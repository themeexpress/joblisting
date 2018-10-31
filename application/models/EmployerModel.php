<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EmployerModel extends CI_model {


	public function check_employer_login($email,$password){
		$this->db->select('*');
    	$this->db->from('employers');
    	$this->db->where('email',$email);
    	$this->db->where('password',md5($password));
    	$query_result=$this->db->get();
    	return $query=$query_result->row();  
		
	}

}