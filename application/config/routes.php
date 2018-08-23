<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news'] = 'newsController';
// create
$route['news/create'] = 'newsController/create';
$route['news/(:any)'] = 'newsController/view/$1';


								// comtroller and method
$route['default_controller'] = 'halaman/dasboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)'] = 'halaman/dasboard/$1';
