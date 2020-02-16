<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add extends CI_Controller {

public function index(){
$this->form_validation->set_rules('coursename','Course Name','required|alpha');

if($this->form_validation->run()){
$coursename=$this->input->post('coursename');

$this->load->model('Add_Model');
$this->Add_Model->insert($coursename);
} else {
$this->load->view('course/add');
}

}

}
