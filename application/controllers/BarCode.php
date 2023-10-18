<?php 

class BarCode extends CI_Controller
{

/// view data
	function index(){
		$this->load->model('Barcode_model');// load model
		$rows=$this->Barcode_model->all();// get the return from sql result
		$data=array();
		$data['BarCode']=$rows;
		$this->load->view('list',$data); // pass data to view from model methord name all

	}


/// add data
	function create(){
		$this->load->model('Barcode_model');// load model

		$this->form_validation->set_rules('Description','Description','required');
		$this->form_validation->set_rules('Barcode','Barcode','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('create');//display form
		}else{ // if everything ok then prossed for save db
			$formArray=array();
			$formArray['Description']=$this->input->post('Description');
			$formArray['Barcode']=$this->input->post('Barcode');
		
		

				$this->Barcode_model->create($formArray);//pass the value to model for insert to DB


			$this->session->set_flashdata('success','Record added successfully!');
			redirect(base_url().'index.php/BarCode/create');
		}

		
	}



///update data
	function edit($id){
		$this->load->model('Barcode_model');// load model
		$rows=$this->Barcode_model->getUser($id);	
		$data=array();
		$data['Barcode']=$rows;



		$this->form_validation->set_rules('Description','Description','required');
		$this->form_validation->set_rules('Barcode','Barcode','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('edit',$data);//display form
		}else{ // if everything ok then prossed for save db
			$formArray=array();
			$formArray['Description']=$this->input->post('Description');
			$formArray['Barcode']=$this->input->post('Barcode');
				

				$this->Barcode_model->updateUser($id,$formArray);//pass the value to model for insert to DB


			$this->session->set_flashdata('success','Record Update successfully!');
			redirect(base_url().'index.php/BarCode/index');
		}



		
	}


	function delete($id){
		$this->load->model('Barcode_model');// load model
		$user=$this->Barcode_model->getUser($id);	

		if (empty($user)) {
			$this->session->set_flashdata('failure','Record not found in database.');
			redirect(base_url().'index.php/user/index');
		}

		$this->Barcode_model->deleteUser($id);

		$this->session->set_flashdata('success','Record deleted successfully!');
			redirect(base_url().'index.php/user/index');

	}


	public function printBarcode($id){
		$this->load->model('Barcode_model');// load model
		$rows=$this->Barcode_model->getUser($id);// get the return from sql result
		$data=array();
		$data['PrintBarCode']=$rows;
		$this->load->view('print',$data); // pass data to view from model methord name all
	}


}
 ?>