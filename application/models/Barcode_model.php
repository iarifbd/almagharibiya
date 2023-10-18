<?php 
/**
 * 
 */
class Barcode_model extends CI_model
{
	
	function create($formArray){			/// insert datsa
		$this->db->insert('barcode',$formArray);
	}

	function all(){							/// view all data
		return $users=$this->db->get('barcode')->result_array();
	}

	function getUser($id){				//// get singal row
		$this->db->where('id',$id);
		return $user=$this->db->get('barcode')->row_array();
	}


	function updateUser($id,$formArray){	//// update data
		$this->db->where('id',$id);
		$this->db->update('barcode',$formArray);

	}


	function deleteUser($id){
		$this->db->where('id',$id);
		$this->db->delete('barcode');
	}


	function doLogin($Description,$Barcode){
		$this->db->where('Description',$Description);
		$this->db->where('Barcode',$Barcode);
		return $userLoginfo=$this->db->get('barcode')->row_array();
	}

}
 ?>