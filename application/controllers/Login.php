<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

	public function index()
	{
		if ($_SESSION['LogData']['logged_in']=='1') {
			switch ($_SESSION['LogData']['Dashboard']) {
				case 'Buyer':
					$this->load->view('buyer/Dashboard');
					break;
				
				default:
					redirect(base_url('HomePage'));
					break;
			};
		}else{
			redirect(base_url('HomePage'));
		};
			
	}

	public function logcheck(){
		 
		$this->form_validation->set_rules('email','email','trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('Service', 'Service', 'trim|required');

		if ($this->form_validation->run()==false) {
				$this->load->view('homepage/homepage_view');//return to display form
			}else{ 
				// if everything ok then prossed for save db

				$email=$this->input->post('email');
				$password=$this->input->post('password');
				$service=$this->input->post('Service');

				$row=$this->Login_model->getData($email,$password,$service);

			
			switch ($row['Status']) {
				case '1':
					//get depertment Name
					$result=$this->db->get_where('department',array('id',$this->input->post('Service')))->row_array();

					$LogData = array( 
					   'username'  		=> $row['FName'], 
					   'email'     		=> $row['Email'], 
					   'DepartmentID' 	=> $row['DepartmentID'], 
					   'Dashboard' 		=> $result['DepartmentName'], 
					   'logged_in' 		=> TRUE
					); 

					$this->session->set_userdata('LogData',$LogData);

					$this->session->set_flashdata('success','Record added successfully!');
					redirect(base_url('Login'));
				break;
				
				default:
					redirect(base_url('HomePage'));
					break;
					
			}
			
		};
	}

	public function logout(){
		$this->session->unset_userdata('LogData');
		redirect(base_url('HomePage'));
	}
		
}
