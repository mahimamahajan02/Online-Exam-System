<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ManageSubjects_Model extends CI_Model{
	public function getsubjectsdetails(){
	//	$query=$this->db->select('subjectName,courseName,regDate,id')
		 //             ->get('tblsubjects');
		 //       return $query->result();


						$this->db->select('tblsubjects.subjectName,tblcourses.courseName,tblsubjects.id,tblsubjects.regDate');
						$this->db->from('tblsubjects');
						$this->db->join('tblcourses','tblcourses.id=tblsubjects.courseName');
						$query=$this->db->get();
						return $query->result_array();

	}





//Getting particular user deatials on the basis of id
 public function getsubjectdetail($sid){
 	$ret=$this->db->select('subjectName,courseName,regDate,lastUpdationDate')
 	              ->where('id',$sid)
 	              ->get('tblsubjects');
 	                return $ret->row();




 }



 public function getcoursename($courseName){
  $ret=$this->db->select('subjectName')
 							 ->where('courseName',$courseName)
 							 ->get('tblsubjects');
 								 return $ret->row();
 }








 // Function for use deletion
 public function deletesubject($sid){
	 $sql_query=$this->db->where('id', $sid)
                ->delete('tblsubjects');
            }



	public function update_profile($subjectname,$coursename,$subjectid){
						$data = array(
						               'firstName' =>$subjectname,
													 'courseName' =>$coursename


						            );

						$sql_query=$this->db->where('id', $subjectid)
						                ->update('tblsubjects', $data);


						}

}
