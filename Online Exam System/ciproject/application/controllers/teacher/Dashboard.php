<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('tid'))
redirect('teacher/login');
}
public function index(){
	$teacherid = $this->session->userdata('tid');
	$this->load->model('Teacher_Profile_Model');
$profiledetails=$this->Teacher_Profile_Model->getprofile($teacherid);
$this->load->view('teacher/dashboard',['profile'=>$profiledetails]);

}

}
