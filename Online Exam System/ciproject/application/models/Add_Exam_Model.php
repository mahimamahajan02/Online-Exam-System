<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_Exam_Model extends CI_Model{

public function insert($subjectname,$coursename,$question,$option1,$option2,$option3,$correct){
$data=array(
			'subjectName'=>$subjectname,
			'courseName'=>$coursename,
				'question'=>$question,
					'option1'=>$option1,
						'option2'=>$option2,
							'option3'=>$option3,
								'correct'=>$correct

		);
$sql_query=$this->db->insert('tblexams',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Exam added');
		redirect('exam/add');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('exam/add');
	}

	}


}
