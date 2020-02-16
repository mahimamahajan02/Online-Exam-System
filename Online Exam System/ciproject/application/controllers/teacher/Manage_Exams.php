<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Exams extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('tid'))
redirect('teacher/login');
}

public function index(){
$this->load->model('ManageExams_Model');
$exam=$this->ManageExams_Model->getexamsdetails();
$this->load->view('teacher/manage_exams',['examdetails'=>$exam]);
}

// For particular Record
public function getexamdetail($eid)
{
$this->load->model('ManageExams_Model');
$tdetail=$this->ManageExams_Model->getexamdetail($eid);
$this->load->view('teacher/getexamdetails',['td'=>$tdetail]);
}

public function deleteexam($eid)
{
$this->load->model('ManageExams_Model');
$this->ManageExams_Model->deleteexam($eid);
$this->session->set_flashdata('success', 'Exam data deleted');
redirect('teacher/manage_exams');
}

public function updateprofileexam(){
$this->load->model('ManageExams_Model');
$this->form_validation->set_rules('subjectname','Subject Name','required|alpha');

if($this->form_validation->run()){
$fname=$this->input->post('subjectname');

$examid = $this->session->userdata('eid');
$this->ManageExams_Model->update_profile($subjectname,$examid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('teacher/edit_exam');

} else {
	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
redirect('teacher/edit_exam');
}

}


}
