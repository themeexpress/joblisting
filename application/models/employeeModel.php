<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EmployeeModel extends CI_model {

public function save_employee_info($data){
	$this->db->insert('users_info',$data); 
	}

	//login check
	public function check_employee_login($user_email,$password)  {

		$this->db->select('*');
    	$this->db->from('users_info');
    	$this->db->where('user_email',$user_email);
    	$this->db->where('password',md5($password));
    	$this->db->where('user_role',3);
    	$query_result=$this->db->get();
    	return $query=$query_result->row();  
		

	}
}