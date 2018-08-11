<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EmployeeModel extends CI_model {

public function save_employee_info($data){
	$this->db->insert('users_info',$data); 
	}


}