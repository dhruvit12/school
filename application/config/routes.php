<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']='welcome/login';
$route['admin']='welcome/admin';
$route['register']='welcome/register';
$route['logout']='welcome/logout';
$route['user_insert']='welcome/user_insert';
$route['school']='welcome/school';