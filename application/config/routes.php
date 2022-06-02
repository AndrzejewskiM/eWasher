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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Tabela customer
$route['klienci'] = "customer";
$route['klienci/dodaj']="/customer/create";
$route['klienci/aktualizuj/(:num)'] = "/customer/edit/$1";
$route['klienci/usun/(:num)'] = "/customer/delete/$1";
// Tabela order
$route['zamowienia'] = "order";
$route['zamowienia/dodaj']="/order/create";
$route['zamowienia/aktualizuj/(:num)'] = "/order/edit/$1";
$route['zamowienia/usun/(:num)'] = "/order/delete/$1";
$route['zamowienia/szczegoly/(:num)'] = "/order/details/$1";

// Tabela ordering_product
$route['zamowienia/szczegoly/dodaj/(:num)']="ordering_product/create/$1";
$route['zamowienia/szczegoly/aktualizuj/(:num)'] = "/ordering_product/edit/$1";
$route['zamowienia/szczegoly/usun/(:num)'] = "/ordering_product/delete/$1";

// Tabela calendar
$route['kalendarz'] = "calendar";

// Tabela main
$route['Start'] = "Main";

//Tabela priceList
$route['cennik']="priceList";
$route['cennik/dodaj']="priceList/create";
$route['cennik/aktualizuj/(:num)'] = "/priceList/edit/$1";
$route['cennik/usun/(:num)'] = "/priceList/delete/$1";
// Tabela orderStatus
$route['statusy']="OrderStatus";
$route['statusy/dodaj']="OrderStatus/create";
$route['statusy/aktualizuj/(:num)'] = "/OrderStatus/edit/$1";
$route['statusy/usun/(:num)'] = "/OrderStatus/delete/$1";

// Tabela worker
$route['pracownicy']="Worker";
$route['pracownicy/dodaj']="worker/create";
$route['pracownicy/aktualizuj/(:num)'] = "/worker/edit/$1";
$route['pracownicy/haslo/(:num)'] = "worker/editPassword/$1";
$route['pracownicy/aktywuj/(:num)'] = "/worker/status/$1";
$route['pracownicy/dezaktywuj/(:num)'] = "/worker/status/$1";
$route['pracownicy/usun/(:num)'] = "/worker/delete/$1";


// Tabela Rbac Role
$route['role']="/rbac/Role";
$route['role/dodaj']="/rbac/Role/create";
$route['role/aktualizuj/(:num)'] = "/rbac/Role/edit/$1";
$route['role/usun/(:num)'] = "/rbac/Role/delete/$1";
//Tabela Rbac Permission
$route['uprawnienia']="/rbac/Permision";
$route['uprawnienia/dodaj']="/rbac/permision/create";
$route['uprawnienia/aktualizuj/(:num)'] = "/rbac/permision/edit/$1";
$route['uprawnienia/usun/(:num)'] = "/rbac/permision/delete/$1";


// Ajax
$route['ajax-request'] = 'Main/getDywany';
$route['ajax-requestPost']['post'] = 'Main/getDywany';
