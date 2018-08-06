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
                    $sdata['username']=$query->username;                     
                    $testarray =$this->session->set_userdata($sdata);
                    redirect('/admin_dashboard');
                    //if not available the redirect with error message
		}else{
			$sdata['error_message']='Incorrect Username or Password';
			$this->session->set_userdata($sdata);			
			$this->load->view('admin/login/login',$sdata);
		}
    }

	public function index()
	{
		$this->load->view('admin/master');
	}
	
}
