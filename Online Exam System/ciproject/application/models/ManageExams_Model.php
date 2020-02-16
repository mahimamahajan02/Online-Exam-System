<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ManageExams_Model extends CI_Model{
	public function getexamsdetails(){
		//$query=$this->db->select('subjectName,courseName,question,option1,option2,option3,correct,regDate,id')
		        //      ->get('tblexams');
		       // return $query->result();



						$this->db->select('tblexams.id,tblsubjects.subjectName,tblcourses.courseName,tblexams.question,tblexams.option1,tblexams.option2,tblexams.option3,tblexams.correct,tblexams.regDate');
						$this->db->from('tblexams');
						$this->db->join('tblsubjects','tblsubjects.id=tblexams.subjectName');
						$this->db->join('tblcourses','tblcourses.id=tblexams.courseName');
						$query=$this->db->get();
						return $query->result_array();
	}

	public function getexam(){
		$query=$this->db->select('subjectName')
		             ->get('tblexams');
		        return $query->result();
}
//Getting particular user deatials on the basis of id
 public function getexamdetail($eid){
 	$ret=$this->db->select('subjectName,courseName,question,option1,option2,option3,correct,regDate,lastUpdationDate')
 	              ->where('id',$eid)
 	              ->get('tblexams');
 	                return $ret->row();
 }

 // Function for use deletion
 public function deleteexam($eid){
	 $sql_query=$this->db->where('id', $eid)
                ->delete('tblexams');
            }



	public function update_profile($subjectname,$coursename,$examid,$question,$option1,$option2,$option3,$correct){
						$data = array(
						               'firstName' =>$examname

						            );

						$sql_query=$this->db->where('id', $examid)
						                ->update('tblexams', $data);


						}

}
