<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["login"] = 'welcome/login';

$route['default_controller'] = 'welcome'; //Proceso para log de usuario
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
