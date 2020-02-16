<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Users extends CI_Controller {




// construct
    public function __construct() {
        parent::__construct();
 // load model
      //  $this->load->model('Export', 'export');
				if(! $this->session->userdata('adid'))
				redirect('admin/login');
    }


public function index(){
  $this->load->model('ManageCourses_Model');
  $course=$this->ManageCourses_Model->getcoursesdetails();
  $data['COURSES'] = null;
  if($course){
   $data['COURSES'] =  $course;
$this->load->model('ManageUsers_Model');
$user=$this->ManageUsers_Model->getusersdetails();
$this->load->view('admin/manage_users',['userdetails'=>$user]);
}
}
// For particular Record
public function getuserdetail($uid)
{
$this->load->model('ManageUsers_Model');
$udetail=$this->ManageUsers_Model->getuserdetail($uid);
$this->load->view('admin/getuserdetails',['ud'=>$udetail]);
}


public function change_user_status($uid = NULL)
    {
        $this->ManageUsers_Model->user_status($uid);
    }

public function deleteuser($uid)
{
$this->load->model('ManageUsers_Model');
$this->ManageUsers_Model->deleteuser($uid);
$this->session->set_flashdata('success', 'User data deleted');
redirect('admin/manage_users');
}

public function update_profile(){
$this->load->model('ManageUsers_Model');
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last  Name','required|alpha');
$this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$mnumber=$this->input->post('mobilenumber');
$userid = $this->session->userdata('uid');
$this->ManageUsers_Model->update_profile($fname,$lname,$mnumber,$userid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('admin/edit_user');

} else {
	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
redirect('admin/edit_user');
}

}

}
