<?php
class Crud_model extends CI_Model
{
	function getUserDetails(){
 		$response = array();
		$this->db->select('firstName,lastName,emailId,regDate');
		$q = $this->db->get('tblusers');
		$response = $q->result_array();
	 	return $response;
	}

}
