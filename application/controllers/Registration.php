<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Reg_model');
    }

	public function index()
	{
		$data['Department']=$this->db->get('departmen')->result_array();
		$this->load->view('buyer/Registration_view',$data);				
	}

	public function RegFormData(){

		$this->form_validation->set_rules('FirstName','First Name','trim|required');
		$this->form_validation->set_rules('LastName','Last Name','trim|required');
		$this->form_validation->set_rules('Email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('PasswordConfirm', 'Confirm Password', 'required|matches[Password]');
		$this->form_validation->set_rules('DepartmentName', 'Department Name', 'trim|required');


		if ($this->form_validation->run()==false) {
				$this->load->view('buyer/Registration_view');//display form
			}else{ 
				// if everything ok then prossed for save db
				$formArray=array();
				$formArray['FName']=$this->input->post('FirstName');
				$formArray['LName']=$this->input->post('LastName');
				$formArray['Email']=$this->input->post('Email');
				$formArray['Password']=$this->input->post('Password');
				$formArray['DepartmentID']=$this->input->post('DepartmentName');

				$this->Reg_model->create($formArray);//pass the value to model for insert to DB
				
				$LogData = array( 
				   'username'  		=> $this->input->post('FirstName'), 
				   'email'     		=> $this->input->post('Email'), 
				   'DepartmentID' 	=> $this->input->post('DepartmentName'), 
				   'Dashboard' 		=> 'Buyer', 
				   'logged_in' 		=> TRUE
				); 

				$this->session->set_userdata('LogData',$LogData);



			$this->session->set_flashdata('success','Record added successfully!');
			redirect(base_url('Login'));
		}
	}
}
