<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * 
	 */
	public function index()
	{
		$this->load->model('admin_model');
		$data=array();
		$data['job_category']=$this->admin_model->category_info();
		$data['job_details_info']=$this->admin_model->job_details_info();
		$this->load->view('frontend/master',$data);
	}
}
