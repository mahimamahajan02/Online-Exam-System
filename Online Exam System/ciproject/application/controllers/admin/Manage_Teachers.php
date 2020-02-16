<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Teachers extends CI_Controller {





// construct
    public function __construct() {
        parent::__construct();
 // load model
      //$this->load->model('Export', 'export');
				if(! $this->session->userdata('adid'))
				redirect('admin/login');
				$this->load->model('ManageTeachers_Model');
    }


public function index(){
$this->load->model('ManageTeachers_Model');
$teacher=$this->ManageTeachers_Model->getteachersdetails();
$this->load->view('admin/manage_teachers',['teacherdetails'=>$teacher]);


}

// For particular Record
public function getteacherdetail($tid)
{
$this->load->model('ManageTeachers_Model');
$tdetail=$this->ManageTeachers_Model->getteacherdetail($tid);
$this->load->view('admin/getteacherdetails',['td'=>$tdetail]);
}

public function deleteteacher($tid)
{
$this->load->model('ManageTeachers_Model');
$this->ManageTeachers_Model->deleteteacher($tid);
$this->session->set_flashdata('success', 'Teacher data deleted');
redirect('admin/manage_teachers');
}

public function updateprofile($fname,$lname,$mnumber,$teacherid){
$this->load->model('ManageTeachers_Model');
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last  Name','required|alpha');
$this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$mnumber=$this->input->post('mobilenumber');
$teacherid = $this->session->userdata('adid');
$this->ManageTeachers_Model->updateprofile($fname,$lname,$mnumber,$teacherid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('admin/teacher_profile');

} else {
//	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
redirect('admin/teacher_profile');
}

}


}
