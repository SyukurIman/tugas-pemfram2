<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['dashboard'] = 'admin';
$route['profile'] = 'admin/profile';
$route['ds-order/detail'] = 'admin/detailOrder';

$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

// Product Route
$route['ds-product'] = 'product';
$route['ds-product/add'] = 'product/addProduct';
$route['ds-product/edit'] = 'product/editProduct';
$route['ds-product/addProductLine'] = 'product/addProductLine';
$route['ds-product/editProductLine'] = 'product/editProductLine';

// Customers Route
$route['ds-customer'] = 'customer';
$route['ds-customer/add'] = 'customer/addCustomer';
$route['ds-customer/edit'] = 'customer/editCustomer';
$route['ds-customer/history-payment'] = 'customer/showPaymentCustomer';

// Employee Route
$route['ds-employee'] = 'employee';
$route['ds-employee/add'] = 'employee/addEmployee';
$route['ds-employee/edit'] = 'employee/editEmployee';
$route['ds-employee/add_office'] = 'employee/addOffice';
$route['ds-employee/office'] = 'employee/dashboardOffice';
$route['ds-employee/office_edit'] = 'employee/editOffices';

$route['translate_uri_dashes'] = FALSE;
