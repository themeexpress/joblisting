<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {


	//Login Form
	public function login(){
		$this->load->view('admin/login');
	}

	public function index()
	{
		$this->load->view('admin/master');
	}
	
}
