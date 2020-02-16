<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Courses extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('tid'))
redirect('teacher/login');
}

public function index(){
$this->load->model('ManageCourses_Model');
$course=$this->ManageCourses_Model->getcoursesdetails();
$this->load->view('teacher/manage_courses',['coursedetails'=>$course]);
}

// For particular Record
public function getcoursedetail($cid)
{
$this->load->model('ManageCourses_Model');
$tdetail=$this->ManageCourses_Model->getcoursedetail($cid);
$this->load->view('teacher/getcoursedetails',['td'=>$tdetail]);
}

public function deletecourse($cid)
{
$this->load->model('ManageCourses_Model');
$this->ManageCourses_Model->deletecourse($cid);
$this->session->set_flashdata('success', 'Course data deleted');
redirect('teacher/manage_courses');
}

public function updateprofilecourse(){
$this->load->model('ManageCourses_Model');
$this->form_validation->set_rules('coursename','Course Name','required|alpha');

if($this->form_validation->run()){
$fname=$this->input->post('coursename');

$courseid = $this->session->userdata('cid');
$this->ManageCourses_Model->update_profile($coursename,$courseid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('teacher/edit_course');

} else {
	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
redirect('teacher/edit_course');
}

}


}
