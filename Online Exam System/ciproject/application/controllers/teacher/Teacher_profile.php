<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Teacher_profile extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('tid'))
redirect('teacher/login');
$this->load->model('Teacher_Profile_Model');
}

public function index(){
$teacherid = $this->session->userdata('tid');
$profiledetails=$this->Teacher_Profile_Model->getprofile($teacherid);
$this->load->view('teacher/teacher_profile',['profile'=>$profiledetails]);
}


public function updateprofile(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last  Name','required|alpha');
$this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$mnumber=$this->input->post('mobilenumber');
$teacherid = $this->session->userdata('tid');
$this->Teacher_Profile_Model->update_profile($fname,$lname,$mnumber,$teacherid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('teacher/teacher_profile');

} else {
	
redirect('teacher/teacher_profile');
}

}
}
