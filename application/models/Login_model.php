<?php 
/**
 * 
 */
class Login_model extends CI_model
{
	function __construct() {
        parent::__construct();
        $this->table='registration';
    }

	
	function create($formArray){			/// insert datsa
		$this->db->insert($this->table,$formArray);
	}

	function all(){							/// view all data
		return $users=$this->db->get($this->table)->result_array();
	}

	function getData($email,$password,$service){				//// get singal row
		$this->db->where('Email',$email);
		$this->db->where('Password',$password);
		$this->db->where('DepartmentID',$service);
		return $user=$this->db->get($this->table)->row_array();
	}


	function updateData($id,$formArray){	//// update data
		$this->db->where('id',$id);
		$this->db->update($this->table,$formArray);

	}


	function deleteData($id){
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}




}
 ?>