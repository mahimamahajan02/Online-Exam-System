<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ManageTeachers_Model extends CI_Model{
	public function getteachersdetails(){
		$query=$this->db->select('firstName,lastName,emailId,regDate,id')
		              ->get('tblteachers');
		        return $query->result();
	}
//Getting particular user deatials on the basis of id
 public function getteacherdetail($tid){
 	$ret=$this->db->select('firstName,lastName,emailId,regDate,id,mobileNumber,lastUpdationDate')
 	              ->where('id',$tid)
 	              ->get('tblteachers');
 	                return $ret->row();
 }

 // Function for use deletion
 public function deleteteacher($tid){
	 $sql_query=$this->db->where('id', $tid)
                ->delete('tblteachers');
            }

public function getprofile($teacherid){
							$query=$this->db->select('firstName,lastName,emailId,mobileNumber,regDate')
						                ->where('id',$teacherid)
						                ->from('tblteachers')
						                ->get();
						  return $query->row();
						}

	public function updateprofile($fname,$lname,$mnumber,$teacherid){
						$data = array(
						               'firstName' =>$fname,
						               'lastName' => $lname,
						               'mobileNumber' => $mnumber
						            );

						$sql_query=$this->db->where('id', $teacherid)
						                ->update('tblteachers', $data);


						}

}
