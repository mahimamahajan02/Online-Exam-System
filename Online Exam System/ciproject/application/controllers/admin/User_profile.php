<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_profile extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
$this->load->model('User_Profile_Model');
}

public function index(){
$userid = $this->session->userdata('uid');
$profiledetails=$this->User_Profile_Model->getprofile($userid);
$this->load->view('admin/user_profile',['profile'=>$profiledetails]);
}


public function updateprofile(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last  Name','required|alpha');
$this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$mnumber=$this->input->post('mobilenumber');
$userid = $this->session->userdata('uid');
$this->User_Profile_Model->update_profile($fname,$lname,$mnumber,$userid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('admin/user_profile');

} else {

redirect('admin/user_profile');
}

}
}
