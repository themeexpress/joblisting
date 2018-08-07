<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
*/

//Admin Login
$route['admin-login']='admincontroller/login';

//Admin login check
$route['admin-login-check']='admincontroller/admin_login_check';

//Admin Dashboard
$route['admin-dashboard']='admincontroller/admin_dashboard';
//JOb area
$route['add-job']='admincontroller/add_job_form';
$route['save-job']='admincontroller/save_job';
$route['manage-job']='admincontroller/manage_job';

//category section
$route['add-category']='admincontroller/add_category_form';
$route['save-category']='admincontroller/save_category';


//Employee
$route['employee-login']='employeeController/login';
$route['employee-register']='employeeController/register';
$route['register-new-employee']='employeeController/register_employee';

//Employer Login
$route['employer-login']='employerController/employer_login';


//default router
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
