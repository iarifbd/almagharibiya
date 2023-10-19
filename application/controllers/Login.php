<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			}
		}
			
	}

	public function logout(){
		$this->session->unset_userdata('LogData');
		redirect(base_url('HomePage'));
	}
}
