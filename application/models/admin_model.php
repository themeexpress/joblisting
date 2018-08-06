<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_model {

   public function job_details_info(){
     
    $this->db->select('*');
    $this->db->from('job_details');    
    $query_result=$this->db->get();
    return $query_result->result();    
   }


	
}