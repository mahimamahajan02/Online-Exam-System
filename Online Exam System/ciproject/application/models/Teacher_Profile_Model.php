<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teacher_Profile_Model extends CI_Model{

public function getprofile($teacherid){
	$query=$this->db->select('firstName,lastName,emailId,mobileNumber,regDate')
                ->where('id',$teacherid)
                ->from('tblteachers')
                ->get();
  return $query->row();
}

public function update_profile($fname,$lname,$mnumber,$teacherid){
$data = array(
               'firstName' =>$fname,
               'lastName' => $lname,
               'mobileNumber' => $mnumber
            );

$sql_query=$this->db->where('id', $teacherid)
                ->update('tblteachers', $data);


}


}
