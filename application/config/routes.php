<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = 'daftar';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'login';
$route['login_aksi'] = 'login/login_aksi';
$route['register'] = 'Auth/RegisterController';
$route['action_register'] = 'Auth/RegisterController/action_register';
$route['forgot'] = 'forgot';
$route['logout'] = 'login/logout';



//login and Register for User and Admin
$route['new']= 'Auth/RegisterController/register';
$route['dashboard'] = 'dashboard';