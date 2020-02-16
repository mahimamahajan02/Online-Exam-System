<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add0 extends CI_Controller {

public function index(){
$this->form_validation->set_rules('coursename','Course Name','required|alpha');

if($this->form_validation->run()){
$coursename=$this->input->post('coursename');

$this->load->model('Add_Model0');
$this->Add_Model0->insert($coursename);
} else {
$this->load->view('course/add0');
}

}

}
