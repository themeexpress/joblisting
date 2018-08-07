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

	//Register New Employee

	public function register_employee(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_email', 'User Email', 'trim|required|is_unique');
		$this->form_validation->set_rules('user_name', 'User Name','trim|required|min_length[4]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');
		if($this->form_validation->run()==FALSE){
			$this->load->view('employee/employee_register');
		}
		
		else{
			// $data= array(
			// 	'user_email'=>$this->input->post('user_email',TRUE),
			// 	'user_name'=>$this->input->post('user_name',TRUE),
			// 	'password'=>$this->input->post('password',TRUE),
			// );

			echo 'Data will be inserted';
			// print_r($data);
			// echo '</pre>';
			exit();
			//$this->employeeModel->save_employee_info($data);
			//$this->load->view('employee/master');			
		}

	}




}