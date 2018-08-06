<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_model {

   public function job_details_info(){
     
    $this->db->select('*');
    $this->db->from('job_details');    
    $query_result=$this->db->get();
    return $query_result->result();    
   }

   public function admin_login_info($user_name,$password){

     
    $this->db->select('*');
    $this->db->from('users_info');
    $this->db->where('user_name',$user_name);
    $this->db->where('password',md5($password));
    $this->db->where('user_role',2);
    $query_result=$this->db->get();
    return $query=$query_result->row();
    
   
   } 


	
}