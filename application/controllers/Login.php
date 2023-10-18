<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function loginform()
	{

		if(!empty($this->input->post('email'))&&!empty($this->input->post('password'))){
			echo "<pre>";
			print_r($this->input->post());
			echo "</pre>";
		}else{
			echo "Invalid data";
		}
		
	}
}
