<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model {

	public function getQuestion($sid)
	{
		$this->db->select("id, question,option1,option2,option3, correct");
		$this->db->from("tblexams");
		$this->db->where('subjectName',$sid);
		$query = $this->db->get();

		return $query->result();
		//$this->db->where('subjectName',$sid);
		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();
		}
	}


	public function getQuestions()
	{
		$this->db->select("id, question,option1,option2,option3, correct");
		$this->db->from("tblexams");
	//	$this->db->where('subjectName',$sid);
		$query = $this->db->get();

		return $query->result();
		//$this->db->where('subjectName',$sid);
		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
			echo "There is no data in the database";
			exit();
		}
	}
}
