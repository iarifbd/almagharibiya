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


$route['ShipmentDashboard'] = 'Shipment_controller/index';
$route['ShipmentForm'] = 'Shipment_controller/shipment_form';
$route['SubmitShipment'] = 'Shipment_controller/submit_form';
$route['DetailsShipment/(:any)'] = 'Shipment_controller/DetailsShipment/$1';

$route['FactoryInventory'] = 'FactorystockInventory/index';
$route['SupplierInventory'] = 'SupplierInventory/index';