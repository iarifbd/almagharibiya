<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomePage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Login']='Login/index';
$route['Logout']='Login/logout';
$route['LCheck']='Login/logcheck';

$route['Registration']='Registration/index';
$route['RegFormData']='Registration/RegFormData';


$route['ShipmentForm'] = 'Shipment_controller/index';
$route['SubmitShipment'] = 'Shipment_controller/submit_form';