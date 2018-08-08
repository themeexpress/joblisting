<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('employeeModel');
        } 

	public function login()
	{
		$this->load->view('employee/employee_login');
	}

	//Employee Register
	public function register(){
		$this->load->view('employee/employee_register');
	}
	///Employee Dashboard
	public function employee_dashboard(){
		$data['admin_header_menu']=$this->load->view('employee/includes/employee_header_menu.php','',TRUE);
    	
    	$data['admin_sidebar_menu']=$this->load->view('employee/includes/employee_sidebar_menu.php','',TRUE);
    	$data['admin_dashboard_content']=$this->load->view('employee/includes/employee_dashboard_content.php','',true); 
		$this->load->view('employee/employee_dashboard',$data);
	}

	//Register New Employee

	public function save_employee_info(){		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_email','User Email','required');
		$this->form_validation->set_rules('user_name','User Name','required');
		$this->form_validation->set_rules('password', 'Password','required');
		if($this->form_validation->run()){			
		$this->load->model('employeeModel');
		$data = array(
			'user_email'=>$this->input->post('user_email',TRUE),
			'user_name'=>$this->input->post('user_name',TRUE),
			'password'=>md5($this->input->post('password',TRUE)),
			);
		$this->session->set_userdata($data);
		$this->employeeModel->save_employee_info($data);
		redirect('employee-dashboard');
	}
	else{
		redirect('employee-register');
	}

	}
	public function emloyee_logout(){
		redirect('/');
	}






}