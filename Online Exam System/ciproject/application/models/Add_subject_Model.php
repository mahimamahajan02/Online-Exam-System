<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_subject_Model extends CI_Model{

	public function insert($subjectname,$coursename){
$data=array(
			'subjectName'=>$subjectname,
			'courseName' =>$coursename

		);
$sql_query=$this->db->insert('tblsubjects',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Subject added');
		redirect('subject/add_subject');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('subject/add_subject');
	}

	}

public function coursedropdown()
{
	$this->db->select('*,tblcourses.id as course_id,tblsubjects.id as subject_id');
	$this->db->from('tblcourses');
	$this->db->join('tblsubjects','tblcourses.id = tblsubjects.id');
	$query = $this->db->get();
	return $query->result();
}




}
