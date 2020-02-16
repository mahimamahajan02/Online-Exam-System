<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_Score_Model extends CI_Model{

public function insert($score){
$data=array(
    'firsttName'=>$firsttname,
    'lastName'=>$lastname,
			'subjectName'=>$subjectname,
			'courseName'=>$coursename,
				'score'=>$score


		);
$sql_query=$this->db->insert('tblscores',$data);


	}


  public function getscoresdetails(){

            $this->db->select('tblscores.id,tblusers.firstName,tblsubjects.subjectName,tblcourses.courseName,tblscores.score');
            $this->db->from('tblscores');
            $this->db->join('tblusers','tblusers.id=tblscores.firstName');
          //  $this->db->join('tblusers','tblusers.id=tblscores.lastName');
            $this->db->join('tblsubjects','tblsubjects.id=tblscores.subjectName');
            $this->db->join('tblcourses','tblcourses.id=tblscores.courseName');
            $query=$this->db->get();
            return $query->result_array();
  }



}
