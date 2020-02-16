<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Subjects extends CI_Controller {


// construct
    public function __construct() {
        parent::__construct();
 // load model
      //  $this->load->model('Export', 'export');
				if(! $this->session->userdata('adid'))
				redirect('admin/login');
    }





public function index(){
$this->load->model('ManageSubjects_Model');
$subject=$this->ManageSubjects_Model->getsubjectsdetails();
$this->load->view('admin/manage_subjects',['subjectdetails'=>$subject]);
}

// For particular Record
public function getsubjectsdetail($sid)
{
$this->load->model('ManageSubjects_Model');
$sdetail=$this->ManageSubjects_Model->getsubjectsdetail($sid);
$this->load->view('admin/getsubjectdetails',['sd'=>$sdetail]);
}

public function deletesubject($sid)
{
$this->load->model('ManageSubjects_Model');
$this->ManageSubjects_Model->deletesubject($sid);
$this->session->set_flashdata('success', 'Subject data deleted');
redirect('admin/manage_subjects');
}

public function updateprofilesubject(){
$this->load->model('ManageSubjects_Model');
$this->form_validation->set_rules('subjectname','Subject Name','required|alpha');

if($this->form_validation->run()){
$fname=$this->input->post('subjectname');

$subjectid = $this->session->userdata('sid');
$this->ManageSubjects_Model->update_profile($subjectname,$subjectid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('admin/edit_subject');

} else {
	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
redirect('admin/edit_subject');
}

}


}
