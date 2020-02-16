<?php
class Crud_model0 extends CI_Model
{
	function getUserDetails(){
 		$response = array();
		$this->db->select('firstName,lastName,emailId,regDate');
		$q = $this->db->get('tblteachers');
		$response = $q->result_array();
	 	return $response;
	}

}
