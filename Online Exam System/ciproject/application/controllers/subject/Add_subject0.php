<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_subject0 extends CI_Controller {





  public function index(){
  $this->form_validation->set_rules('subjectname','Subject Name','required|alpha');
  $this->form_validation->set_rules('course','Course','required|alpha');

  if($this->form_validation->run()){
  $subjectname=$this->input->post('subjectname');
  $coursename=$this->input->post('course');

  $this->load->model('Add_subject_Model0');
  $this->Add_subject_Model0->insert($subjectname,$coursename);

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
  //  $data['COURSES'] = null;
  //  if($subject){
  //  $data['COURSES'] =  $subject;

    //$this->load->view('user/dashboard',['profile'=>$profiledetails,  'subjectdetails'=>$subject]);
    $this->load->view('subject/add_subject0',[  'coursedetails'=>$course ,'subjectdetails'=>$subject]);
    }



  }











  }



  //}
