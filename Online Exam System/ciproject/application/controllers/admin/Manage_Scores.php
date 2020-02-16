<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Scores extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
}

public function index(){


	if($this->form_validation->run()){
	$firsttname=$this->input->post('firstname');
	$lastname=$this->input->post('lastname');
	$subjectname=$this->input->post('subjectname');
	$coursename=$this->input->post('coursename');
	$score=$this->input->post('score');

	$this->load->model('Add_Score_Model');
	$this->Add_Score_Model->insert($firstName,$lastName,$subjectname,$coursename,$score);
	} else {

	    $this->load->model('ManageCourses_Model');
	    $this->load->model('ManageSubjects_Model');
	    $this->load->model('ManageExams_Model');

	    $course=$this->ManageCourses_Model->getcourses();


	    $subject=$this->ManageSubjects_Model->getsubjectsdetails();

	    $exam=$this->ManageExams_Model->getexamsdetails();

	   // $this->load->view('exam/add',['coursedetails'=>$course ,'subjectdetails'=>$subject,'examdetails'=>$exam]);

$this->load->model('Add_Score_Model');
$score=$this->Add_Score_Model->getscoresdetails();
$this->load->view('admin/manage_scores',['scoredetails'=>$score,'coursedetails'=>$course ,'subjectdetails'=>$subject,'examdetails'=>$exam]);
}

// For particular Record
///public function getexamdetail($eid)
//{
//$this->load->model('ManageExams_Model');
//$tdetail=$this->ManageExams_Model->getexamdetail($eid);
//$this->load->view('teacher/getexamdetails',['td'=>$tdetail]);
//}
}
//public function deleteexam($eid)
///{
//$this->load->model('ManageExams_Model');
//$this->ManageExams_Model->deleteexam($eid);
//$this->session->set_flashdata('success', 'Exam data deleted');
//redirect('teacher/manage_exams');
//}




}
