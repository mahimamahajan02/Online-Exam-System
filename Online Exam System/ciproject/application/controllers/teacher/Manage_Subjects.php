<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Subjects extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('tid'))
redirect('teacher/login');
}

public function index(){
$this->load->model('ManageSubjects_Model');
$subject=$this->ManageSubjects_Model->getsubjectsdetails();


$this->load->view('teacher/manage_subjects',['subjectdetails'=>$subject]);
}

// For particular Record
public function getsubjectsdetail($sid)
{
$this->load->model('ManageSubjects_Model');
$sdetail=$this->ManageSubjects_Model->getsubjectsdetail($sid);
$this->load->view('teacher/getsubjectdetails',['sd'=>$sdetail]);
}

public function deletesubject($sid)
{
$this->load->model('ManageSubjects_Model');
$this->ManageSubjects_Model->deletesubject($sid);
$this->session->set_flashdata('success', 'Subject data deleted');
redirect('teacher/manage_subjects');
}

public function updateprofilesubject(){
$this->load->model('ManageSubjects_Model');
$this->form_validation->set_rules('subjectname','Subject Name','required|alpha');

if($this->form_validation->run()){
$fname=$this->input->post('subjectname');

$subjectid = $this->session->userdata('sid');
$this->ManageSubjects_Model->update_profile($subjectname,$subjectid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('teacher/edit_subject');

} else {
	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
redirect('teacher/edit_subject');
}

}


}
