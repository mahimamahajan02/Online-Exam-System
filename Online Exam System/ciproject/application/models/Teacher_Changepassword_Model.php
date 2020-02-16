<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Teacher_Changepassword_Model extends CI_Model {

public function getcurrentpassword($teacherid){
$query=$this->db->where(['id'=>$teacherid])
                    ->get('tblteachers');
           if($query->num_rows() > 0)
           {
           	return $query->row();
           }
}

public function updatepassword($teacherid,$newpassword){
$data=array('userPassword' =>$newpassword );
return $this->db->where(['id'=>$teacherid])
                ->update('tblteachers',$data);

	}

}
