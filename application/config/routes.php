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
//login from
$route['employee-login']='employeeController/login';
//login function
$route['empployee-auth']='employeeController/employee_login_info';
//register from
$route['employee-register']='employeeController/register';
//registration function
$route['save-employee']='employeeController/save_employee_info';
//employee dashboard
$route['employee-dashboard']='employeeController/employee_dashboard';
//employee logout
$route['emp-logout']='employeeController/emloyee_logout';

//Employer Login
$route['employer-login']='employerController/employer_login';


//default router
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
