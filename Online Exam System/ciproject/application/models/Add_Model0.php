<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_Model0 extends CI_Model{

	public function insert($coursename){
$data=array(
			'courseName'=>$coursename

		);
$sql_query=$this->db->insert('tblcourses',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Course added');
		redirect('course/add0');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('course/add0');
	}

	}


}
