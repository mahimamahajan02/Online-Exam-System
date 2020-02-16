<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('uid'))
redirect('user/login');
}
public function index(){
	$this->load->model('ManageCourses_Model');
$this->load->model('ManageSubjects_Model');





	$course=$this->ManageCourses_Model->getcoursesdetails();
	$data['COURSES'] = null;
	if($course){
	 $data['COURSES'] =  $course;

	$userid = $this->session->userdata('uid');
	$this->load->model('User_Profile_Model');
$profiledetails=$this->User_Profile_Model->getprofile($userid);
//$this->load->view('user/dashboard',['profile'=>$profiledetails,  'coursedetails'=>$course]);
}

$subject=$this->ManageSubjects_Model->getsubjectsdetails();
$data['COURSES'] = null;
if($subject){
 $data['COURSES'] =  $subject;

$userid = $this->session->userdata('uid');
$this->load->model('User_Profile_Model');
$profiledetails=$this->User_Profile_Model->getprofile($userid);
//$this->load->view('user/dashboard',['profile'=>$profiledetails,  'subjectdetails'=>$subject]);
//$this->load->view('user/dashboard',['profile'=>$profiledetails,  'coursedetails'=>$course ,'subjectdetails'=>$subject]);
}

$this->load->model('ManageExams_Model');
$exam=$this->ManageExams_Model->getexamsdetails();

$this->load->view('user/dashboard',['profile'=>$profiledetails,  'coursedetails'=>$course ,'subjectdetails'=>$subject,'examdetails'=>$exam]);


}






// For particular Record
public function getcoursedetail($cid)
{
$this->load->model('ManageCourses_Model');
$tdetail=$this->ManageCourses_Model->getcoursedetail($cid);
$this->load->view('user/getcoursedetails',['td'=>$tdetail]);
}

public function deletecourse($cid)
{
$this->load->model('ManageCourses_Model');
$this->ManageCourses_Model->deletecourse($cid);
$this->session->set_flashdata('success', 'Course data deleted');
redirect('user/manage_courses');
}

public function updateprofilecourse(){
$this->load->model('ManageCourses_Model');
$this->form_validation->set_rules('coursename','Course Name','required|alpha');

if($this->form_validation->run()){
$fname=$this->input->post('coursename');

$courseid = $this->session->userdata('cid');
$this->ManageCourses_Model->update_profile($coursename,$courseid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('user/edit_course');

} else {
	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
redirect('user/edit_course');
}

}



}
