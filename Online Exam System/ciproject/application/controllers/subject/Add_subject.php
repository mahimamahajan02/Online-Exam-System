<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_subject extends CI_Controller {





public function index(){
$this->form_validation->set_rules('subjectname','Subject Name','required|alpha');
$this->form_validation->set_rules('coursename','Course','required|alpha');

if($this->form_validation->run()){
$subjectname=$this->input->post('subjectname');
$coursename=$this->input->post('coursename');

$this->load->model('Add_subject_Model');
$this->Add_subject_Model->insert($subjectname,$coursename);

} else {



  $this->load->model('ManageCourses_Model');
  $this->load->model('ManageSubjects_Model');


  $course=$this->ManageCourses_Model->getcourses();
  //$data['COURSES'] = null;
  //if($course){
  // $data['COURSES'] =  $course;


  //$this->load->view('user/dashboard',['profile'=>$profiledetails,  'coursedetails'=>$course]);
  //}

  $subject=$this->ManageSubjects_Model->getsubjectsdetails();
  //$data['COURSES'] = null;
  //if($subject){
  //$data['COURSES'] =  $subject;

  //$this->load->view('user/dashboard',['profile'=>$profiledetails,  'subjectdetails'=>$subject]);
  $this->load->view('subject/add_subject',['coursedetails'=>$course ,'subjectdetails'=>$subject]);
  }



}











}
