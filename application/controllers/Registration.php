<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{
		$this->load->view('buyer/Registration_view');				
	}

	public function RegFormData(){

		$this->form_validation->set_rules('FirstName','First Name','trim|required');
		$this->form_validation->set_rules('LastName','Last Name','trim|required');
		$this->form_validation->set_rules('Email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('PasswordConfirm', 'Confirm Password', 'required|matches[Password]');



		if(!empty($this->input->post('Email'))&&!empty($this->input->post('Password'))){
			echo "<pre>";
			print_r($this->input->post());
			echo "</pre>";
		}else{
			echo "Invalid data";
			echo $this->validation_errors();
		}
	}
}
