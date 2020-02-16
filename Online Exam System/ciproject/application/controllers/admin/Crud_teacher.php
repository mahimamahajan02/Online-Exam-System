<?php
class Crud_teacher extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();//call CodeIgniter's default Constructor
		$this->load->database();//load database libray manually
		$this->load->model('Crud_model0');//load Model
	}
	public function index(){
		$data['usersData'] = $this->Crud_model0->getUserDetails();
		$this->load->view('admin/manage_teachers',$data);
	}
	public function export_csv(){
		// file name
		$filename = 'users_'.date('Ymd').'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");
	   // get data
		$usersData = $this->Crud_model0->getUserDetails();
		// file creation
		$file = fopen('php://output','w');
		$header = array("firstName","lastName","emailId","regDate");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){
			fputcsv($file,$line);
		}
		fclose($file);
		exit;
	}
}
