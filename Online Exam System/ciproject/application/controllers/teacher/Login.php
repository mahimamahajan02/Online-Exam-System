<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller {


public function index(){
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('password','Password','required');
if($this->form_validation->run()){
$emailid=$this->input->post('emailid');
$password=$this->input->post('password');
$status=1;
$this->load->model('Teacher_Login_Model');
$validate=$this->Teacher_Login_Model->validatelogin($emailid,$password,$status);
if($validate)
{
$this->session->set_userdata('tid',$validate);
return redirect('teacher/dashboard');
} else{
$this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
redirect('teacher/login');

}

} else {
$this->load->view('teacher/login');
}
}

//function for logout
public function logout(){
$this->session->unset_userdata('tid');
$this->session->sess_destroy();
return redirect('teacher/login');
}

}
