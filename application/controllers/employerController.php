<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployerController extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('EmployerModel');
        } 

    public function employer_login(){
    	$this->load->view('employer/login');

    }

    public function employer_login_info(){
		$email =$this->input->post('email',TRUE);
        $password=$this->input->post('password',TRUE);       
        $query=$this->EmployerModel->check_employer_login($email,$password);       
        $sdata=array();
		if ($query) {
                    $sdata['user_id']=$query->id;
                    $sdata['user_name']=$query->name; 
                    $sdata['user_name']=$query->email;                    
                    $testarray =$this->session->set_userdata($sdata);
                    redirect('/employer-dashboard');
                    //if not available the redirect with error message
		}else{
			$sdata['error_message']='Incorrect Username or Password';
			$this->session->set_userdata($sdata);			
			$this->load->view('employer/login',$sdata);
		}

    }
  
    public function employer_dashboard(){
    	$data=array();
		//$data['admin_header_menu']=$this->load->view('employer/includes/employee_header_menu.php','',TRUE);
    	
    	$data['sidebar']=$this->load->view('Employer/includes/sidebar.php','',TRUE);
    	$data['content']=$this->load->view('Employer/includes/content.php','',true); 
		$this->load->view('employer/employer_dashboard',$data);
	}

}


        