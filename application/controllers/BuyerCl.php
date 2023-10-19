<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuyerCl extends CI_Controller {

	public function index()
	{
		$this->load->view('buyer/Dashboard/A_header');
		$this->load->view('buyer/Dashboard/A_body');
		$this->load->view('buyer/Dashboard/A_footer');
	}
}
