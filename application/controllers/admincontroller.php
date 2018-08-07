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
                    redirect('/admin-dashboard');
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
    	//$data['total_application']=$this->admin_model->total_application();
    	//$data['total_job']=$this->admin_model->total_application();
    	//$data['total_applicant']=$this->admin_model->total_application();
    	$data['admin_header_menu']=$this->load->view('admin/includes/admin_header_menu.php','',TRUE);
    	
    	$data['admin_sidebar_menu']=$this->load->view('admin/includes/admin_sidebar_menu.php','',TRUE);
    	$data['admin_dashboard_content']=$this->load->view('admin/includes/admin_dashboard_content.php','',true); 

    	$this->load->view('admin/admin_dashboard',$data);
    }
    //show job form
    public function add_job_form(){

        $data['admin_header_menu']=$this->load->view('admin/includes/admin_header_menu.php','',TRUE);
        
        $data['admin_sidebar_menu']=$this->load->view('admin/includes/admin_sidebar_menu.php','',TRUE);
        $data['category_info']=$this->admin_model->category_info();
        $data['admin_dashboard_content']=$this->load->view('admin/partials/add_job.php',$data,true); 

        $this->load->view('admin/admin_dashboard',$data);
    }
    //save job
    public function save_job(){
        //validation condition will go here        

        $data = array(
            'category_id' =>$this->input->post('category_id'),
            'job_name' =>$this->input->post('job_name'),
            'company_name' =>$this->input->post('company_name'),
            'job_requirements' =>$this->input->post('job_requirements'),
            'vacancy_amount' =>$this->input->post('vacancy_amount'),
            'last_date' =>$this->input->post('last_date'),
        );
        
        $this->admin_model->save_job_info($data);
        
        redirect('add-job');


    }
    //manage job
    public function manage_job(){
         $data['admin_header_menu']=$this->load->view('admin/includes/admin_header_menu.php','',TRUE);        
        $data['admin_sidebar_menu']=$this->load->view('admin/includes/admin_sidebar_menu.php','',TRUE);
        $data['job_details_info_join']=$this->admin_model->job_details_info_join();
        $data['admin_dashboard_content']=$this->load->view('admin/partials/manage_job.php',$data,true);
        $this->load->view('admin/admin_dashboard',$data);

    }

    //show category input form
     public function add_category_form(){

        $data['admin_header_menu']=$this->load->view('admin/includes/admin_header_menu.php','',TRUE);        
        $data['admin_sidebar_menu']=$this->load->view('admin/includes/admin_sidebar_menu.php','',TRUE);
        $data['admin_dashboard_content']=$this->load->view('admin/partials/add_category.php','',true); 
        $this->load->view('admin/admin_dashboard',$data);
    }
    //save Category
    public function save_category(){     

        $this->load->library('form_validation');
        $this->form_validation->set_rules('category_name', 'Category Name', 'required');
        $this->form_validation->set_rules('category_description','Description','required'
                );                

                if ($this->form_validation->run() == FALSE)
                {
                        redirect('add-category');
                }
                else{
                    $sdata=array();        
                    $this->admin_model->save_category_info();    
                    $sdata['message']="Category Inserted Successfully";
                    redirect('add-category',$sdata);
                   
                }
    }

	
}
