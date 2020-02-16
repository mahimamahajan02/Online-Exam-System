<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ManageCourses_Model extends CI_Model{
	public function getcoursesdetails(){
		$query=$this->db->select('courseName,regDate,id')
		              ->get('tblcourses');
		        return $query->result();
	}


	public function getcourses(){
		$query=$this->db->select('courseName,regDate,id')
		              ->get('tblcourses');
		        return $query->result_array();
	}



	public function getcoursename($cid){
	 $ret=$this->db->select('courseName')
								 ->where('id',$cid)
								 ->get('tblcourses');
									 return $ret->row();
	}


//Getting particular user deatials on the basis of id
 public function getcoursedetail($cid){
 	$ret=$this->db->select('courseName,regDate,lastUpdationDate')
 	              ->where('id',$cid)
 	              ->get('tblcourses');
 	                return $ret->row();
 }

 // Function for use deletion
 public function deletecourse($cid){
	 $sql_query=$this->db->where('id', $cid)
                ->delete('tblcourses');
            }



	public function update_profile($coursename,$courseid){
						$data = array(
						               'firstName' =>$coursename

						            );

						$sql_query=$this->db->where('id', $courseid)
						                ->update('tblcourses', $data);


						}

}
