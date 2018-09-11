<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('employeeModel');
        } 
    //Employee login form
	public function login($job_id)
	{   
		$data=array();
		$data['job_id']=$job_id;
		$this->load->view('employee/employee_login',$data);
	}

	//login process
	public function employee_login_info(){
		$job_id=$this->input->post('job_id',true);
		$user_email =$this->input->post('user_email',TRUE);
        $password=$this->input->post('password',TRUE);       
        $query=$this->employeeModel->check_employee_login($user_email,$password);       
        $sdata=array();
		if ($query) {
                    $sdata['user_id']=$query->user_id;
                    $sdata['user_name']=$query->user_name;                     
                    $testarray =$this->session->set_userdata($sdata);
                    redirect('/employee-dashboard');
                    //if not available the redirect with error message
		}else{
			$sdata['error_message']='Incorrect Username or Password';
			$this->session->set_userdata($sdata);			
			$this->load->view('employee/employee_login',$sdata);
		}

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
		//$this->load->library('form_validation');
		$this->form_validation->set_rules('user_email','User Email','required|is_unique[users_info.user_email]');
		$this->form_validation->set_rules('user_name','User Name','required');
		$this->form_validation->set_rules('password', 'Password','required');
		if($this->form_validation->run()==true){			
		//$this->load->model('employeeModel');
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
		$this->load->view('employee/employee_register');
	}

	}

	public function emloyee_logout(){
		redirect('/');
	}






}