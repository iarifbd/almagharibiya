<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;


// Get the current domain and IP address
$domain = $_SERVER['HTTP_HOST'];
$ip = $_SERVER['SERVER_ADDR'];

// Compare the domain and IP address to known values
if ($domain === 'localhost' || $ip === '127.0.0.1') {
	$db['default'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'MainApp',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
}else{
	$db['default'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => 'almazmju_HomeApp',	//almazmju_HomeApp | almazmju_barcode
		'password' => '$,ws+)94@hWR',		//$,ws+)94@hWR | 89wEQeD2xDU3Yxf
		'database' => 'almazmju_HomeApp',	//almazmju_HomeApp | almazmju_barcode
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
	$db['barcode'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => 'almazmju_barcode',	//almazmju_HomeApp | almazmju_barcode
		'password' => '89wEQeD2xDU3Yxf',		//$,ws+)94@hWR | 89wEQeD2xDU3Yxf
		'database' => 'almazmju_barcode',	//almazmju_HomeApp | almazmju_barcode
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);

}




