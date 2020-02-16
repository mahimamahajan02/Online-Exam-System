<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Change_password extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('tid'))
redirect('teacher/login');
}

public function index(){
$this->form_validation->set_rules('currentpassword','Current Password','required|min_length[6]');
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
if($this->form_validation->run()){
$cpassword=$this->input->post('currentpassword');
$newpassword=$this->input->post('password');
$teacherid = $this->session->userdata('tid');
$this->load->model('Teacher_Changepassword_Model');
$cpass=$this->Teacher_Changepassword_Model->getcurrentpassword($teacherid);
echo $dbpass=$cpass->teacherPassword;

 if($dbpass==$cpassword){
if($this->Teacher_Changepassword_Model->updatepassword($teacherid,$newpassword))
{
$this->session->set_flashdata('success', 'Password chnaged successfully');
	redirect('teacher/change_password');
}

} else {
$this->session->set_flashdata('error', 'Current password is wrong. Error!!');
redirect('teacher/change_password');
}
} else {
$this->load->view('teacher/change_password');
}
}




}
