<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Signup_Model0 extends CI_Model{

	public function insert($fname,$lname,$emailid,$mnumber,$password,$status){
$data=array(
			'firstName'=>$fname,
			'lastName'=>$lname,
			'emailId'=>$emailid,
			'mobileNumber'=>$mnumber,
			'userPassword'=>$password,
			'isActive'=>$status
		);
$sql_query=$this->db->insert('tblusers',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Registration successfull');
		redirect('user/signup0');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('user/signup0');
	}

	}


}
