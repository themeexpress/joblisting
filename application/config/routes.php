<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
*/

//Admin Login
$route['admin-login']='admincontroller/login';

//Admin login check
$route['admin-login-check']='admincontroller/admin_login_check';

//Member Login
$route['member-login']='memberController/login';
$route['member-register']='memberController/register';


//default router
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
