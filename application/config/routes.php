<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'auth/login';
$route['(:any)'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
