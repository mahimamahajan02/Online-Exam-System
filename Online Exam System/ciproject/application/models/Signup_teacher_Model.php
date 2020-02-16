<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Signup_teacher_Model extends CI_Model{

	public function insert($fname,$lname,$emailid,$mnumber,$password,$status){
$data=array(
			'firstName'=>$fname,
			'lastName'=>$lname,
			'emailId'=>$emailid,
			'mobileNumber'=>$mnumber,
			'userPassword'=>$password,
			'isActive'=>$status
		);
$sql_query=$this->db->insert('tblteachers',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Registration successfull');
		redirect('teacher/signup_teacher');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('teacher/signup_teacher');
	}

	}


}
