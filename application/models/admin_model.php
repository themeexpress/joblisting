<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_model {

   public function job_details_info(){
     
    $this->db->select('*');
    $this->db->from('job_details');    
    $query_result=$this->db->get();
    return $query_result->result();    
   }

   public function category_info(){     
    $this->db->select('*');
    $this->db->from('job_category');
    $this->db->where('publication_status',1);    
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
    public function save_job_info($data){   
    $this->db->insert('job_details',$data);    
   }

   //Job details with Join
   public function job_details_info_join(){
      $this->db->select('*');
      $this->db->from('job_details');
      $this->db->join('job_category','job_details.category_id=job_category.category_id');
      $query_result=$this->db->get();      
      return $query_result->result(); 
    }

   public function save_category_info(){
    $data=array();
    $data['category_name']=$this->input->post('category_name',TRUE);
    $data['category_description']=$this->input->post('category_description',TRUE);
    $data['publication_status']=$this->input->post('publication_status',TRUE);
    $this->db->insert('job_category',$data);

   }


	
}