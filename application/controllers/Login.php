<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function loginform()
	{
		print_r($this->input->GET());
	}
}
