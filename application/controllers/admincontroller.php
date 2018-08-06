<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        } 


	//Login Form
	public function login(){
		$this->load->view('admin/login');
	}

	//Admin Login Check
	 public function admin_login_check(){
        $user_name =$this->input->post('user_name',TRUE);
        $password=$this->input->post('password',TRUE);       
        $query=$this->admin_model->admin_login_info($user_name,$password);       
        $sdata=array();
		if ($query) {
                    $sdata['user_id']=$query->user_id;
                    $sdata['user_name']=$query->user_name;                     
                    $testarray =$this->session->set_userdata($sdata);
                    $this->load->view('admin/admin_dashboard');
                    //if not available the redirect with error message
		}else{
			$sdata['error_message']='Incorrect Username or Password';
			$this->session->set_userdata($sdata);			
			$this->load->view('admin/login',$sdata);
		}
    }

     // //Admin Dashboard

    public function admin_dashboard(){
    	$data= array();
    	$data['total_application']=$this->admin_model->total_application();
    	$data['total_job']=$this->admin_model->total_application();
    	$data['total_applicant']=$this->admin_model->total_application();
    	$data['admin_header_menu']=$this->load->view();
    	$data['admin_header_menu']=$this->load->view();
    	$data['admin_sidemenu']=$this->load->view();
    	$data['content']=$this->load->view();    	
    	$this->load->view('admin/admin_dashboard',$data);
    }

   

	public function index()
	{
		$this->load->view('admin/master');
	}
	
}
