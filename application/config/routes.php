<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["login"] = 'Welcome_controller/login';   //

$route["home"] = 'Home_controller';

$route['default_controller'] = 'Welcome_controller'; //Proceso para log de usuario
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
