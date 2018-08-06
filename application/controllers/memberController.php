<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberController extends CI_Controller {

	public function login()
	{
		$this->load->view('frontend/memberlogin');
	}

	//Member Register
	public function register(){
		$this->load->view('frontend/member_register');
	}




}