<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add extends CI_Controller {

public function index(){
$this->form_validation->set_rules('subjectname','subject Name','required');
$this->form_validation->set_rules('coursename','Course Name','required');
$this->form_validation->set_rules('question','question','required');
$this->form_validation->set_rules('option1','option1','required');
$this->form_validation->set_rules('option2','option2','required');
$this->form_validation->set_rules('option3','option3','required');
$this->form_validation->set_rules('correct','correct','required');

if($this->form_validation->run()){
$subjectname=$this->input->post('subjectname');
$coursename=$this->input->post('coursename');
$question=$this->input->post('question');
$option1=$this->input->post('option1');
$option2=$this->input->post('option2');
$option3=$this->input->post('option3');
$correct=$this->input->post('correct');

$this->load->model('Add_Exam_Model');
$this->Add_Exam_Model->insert($subjectname,$coursename,$question,$option1,$option2,$option3,$correct);
} else {





    $this->load->model('ManageCourses_Model');
    $this->load->model('ManageSubjects_Model');
    $this->load->model('ManageExams_Model');

    $course=$this->ManageCourses_Model->getcourses();
    //$data['COURSES'] = null;
    //if($course){
     //$data['COURSES'] =  $course;


    //$this->load->view('user/dashboard',['profile'=>$profiledetails,  'coursedetails'=>$course]);
    //}

    $subject=$this->ManageSubjects_Model->getsubjectsdetails();
    //$data['COURSES'] = null;
    //if($subject){
    //$data['COURSES'] =  $subject;

    //$this->load->view('user/dashboard',['profile'=>$profiledetails,  'subjectdetails'=>$subject]);
    //$this->load->view('subject/add_subject',[  'coursedetails'=>$course ,'subjectdetails'=>$subject]);
    //}

    $exam=$this->ManageExams_Model->getexamsdetails();
  //  $data['EXAMS'] = null;
    //if($exam){
    //$data['EXAMS'] =  $exam;
  //  $course_id = $course->id;
  //  $subject_id = $subject->id;

    //$this->load->view('user/dashboard',['profile'=>$profiledetails,  'subjectdetails'=>$subject]);
  //  $this->load->view('subject/add_subject',[  'coursedetails'=>$course ,'subjectdetails'=>$subject]);
    $this->load->view('exam/add',['coursedetails'=>$course ,'subjectdetails'=>$subject,'examdetails'=>$exam]);
    //}






}

}
}
