<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$link = explode('/',(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

if($link[4] == 'admin'){  

  $this->set_directory( "Admin" );

  $request = $this->uri->segment(2);
  if(!empty($request) && strpos($request,'-'))
  { 
    $route['admin/'.$request.''] = str_replace('-','_',$request);
    $route['admin/'.$request.'/(:any)'] = str_replace('-','_',$request).'/$1';
    $route['admin/'.$request.'/(:any)/(:any)'] = str_replace('-','_',$request).'/$1/$2';
  }
  
  $route['admin/logout'] = 'login/logout'; 
  $route['admin/forgot-password'] = 'login/forgot_password'; 
  $route['admin/reset-password/(:any)'] = 'login/reset_password/$1';
  $route['admin/(:any)'] = '$1'; 
  $route['admin/(:any)/(:any)'] = '$1/$2'; 
  $route['admin/(:any)/(:any)/(:any)'] = '$1/$2/$3'; 
  $route['admin/(:any)/(:any)/(:any)/(:any)'] = '$1/$2/$3/$4'; 
  $route['admin'] = 'dashboard/index';
  $route['default_controller'] = 'front';
  $route['404_override'] = '';
  $route['translate_uri_dashes'] = FALSE;
}else{ 
  $this->set_directory( "Front" );

  //-------------------------------------------------Authentication------------------------------------------------------------
  

  //-----------------------------------------------------Defaults-----------------------------------------------------------------
  $route['default_controller'] = 'home';
  $route['end-mills'] = 'end_mills/index';
  $route['about-us'] = 'about_us/index';
  $route['product/(:any)'] = 'product/index/$1';
  $route['services/(:any)'] = 'services_details/index/$1';
  $route['contact-us'] = 'contact_us/index';
  $route['faqs'] = 'faqs/index';
  $route['categories'] = 'Categories/index';
  $route['user-registration'] = 'customer_registration/customer_register';
  $route['customer-login'] = 'customer_login/user_authentication';
  $route['dashboard'] = 'customer_dashboard/trail_access';
  $route['coverletter'] = 'cover';
  $route['manage-job-applications'] = 'job_app';
  $route['apply-for-job'] = 'Apply_job';
  $route['user-logout'] = 'customer_login/logout';
  $route['customer-account-recovery'] = 'customer_login/forgot_password';
  $route['customer-reset-password/(:any)'] = 'customer_login/reset_password/$1';
  $route['customer-dashboard'] = 'customer_dashboard';
  $route['customer-device-status'] = 'customer_dashboard/customer_device_status';
  $route['status-bar/(:any)'] = 'customer_dashboard/status_bar/$1';
  $route['customer-account'] = 'customer_dashboard/account_details';
  $route['customer-register'] = 'customer_registration/customer_register';

  $route['404_override'] = '';
  $route['translate_uri_dashes'] = FALSE;
}






