<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ManageUsers_Model extends CI_Model{
	public function getusersdetails(){
		$query=$this->db->select('firstName,lastName,emailId,isActive,regDate,id')
		              ->get('tblusers');
		        return $query->result();
	}
//Getting particular user deatials on the basis of id
 public function getuserdetail($uid){
 	$ret=$this->db->select('firstName,lastName,emailId,regDate,id,mobileNumber,lastUpdationDate')
 	              ->where('id',$uid)
 	              ->get('tblusers');
 	                return $ret->row();
 }



 public function user_status($uid)
     {
        if ($uid == "true")
        {
        $this->db
                       ->set('isActive', "1")
                       ->where('id', $uid)
                       ->update('tblusers');
            }
           else
           {
             $this->db
                             ->set('isActive', "0")
                             ->where('id', $uid)
                             ->update('tblusers');
            }
      }


 // Function for use deletion
 public function deleteuser($uid){
	 $sql_query=$this->db->where('id', $uid)
                ->delete('tblusers');
            }

public function update_profile($fname,$lname,$mnumber,$userid){
						$data = array(
						               'firstName' =>$fname,
						               'lastName' => $lname,
						               'mobileNumber' => $mnumber
						            );

						$sql_query=$this->db->where('id', $userid)
						                ->update('tblusers', $data);


						}


}
