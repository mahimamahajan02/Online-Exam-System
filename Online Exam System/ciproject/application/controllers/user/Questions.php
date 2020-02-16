<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{

		$this->load->model('ManageCourses_Model');
		$this->load->model('ManageSubjects_Model');
		$this->load->model('ManageExams_Model');
		$this->load->model('User_Profile_Model');

		$course=$this->ManageCourses_Model->getcoursesdetails();


	$subject=$this->ManageSubjects_Model->getsubjectsdetails();




	$exam=$this->ManageExams_Model->getexam();

	$this->load->view('user/quiz_game',[  'coursedetails'=>$course ,'subjectdetails'=>$subject,'examdetails'=>$exam]);

	//$this->load->view('user/dashboard',['profile'=>$profiledetails,  'subjectdetails'=>$subject]);
	//$this->load->view('user/dashboard',['profile'=>$profiledetails,  'coursedetails'=>$course ,'subjectdetails'=>$subject]);
	}















	public function quizdisplay($sid)
	{
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestion($sid);
		$this->load->view('user/play_quiz', $this->data);
	}

		public function resultdisplay()
	{
		$this->data['checks'] = array(
		//	'ques' => $this->input->post('quizid')
		     'ques1' => $this->input->post('quizid1'),
		     'ques2' => $this->input->post('quizid2'),
			 'ques3' => $this->input->post('quizid3'),
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
		     'ques9' => $this->input->post('quizid9'),
			 'ques10' => $this->input->post('quizid10'),
			 'ques11' => $this->input->post('quizid11'),
			 'ques12' => $this->input->post('quizid12'),
		 'ques13' => $this->input->post('quizid13'),
		 'ques14' => $this->input->post('quizid14'),
			 'ques15' => $this->input->post('quizid15'),
		 'ques16' => $this->input->post('quizid16'),
		 'ques17' => $this->input->post('quizid17'),
		 'ques18' => $this->input->post('quizid18'),
			 'ques19' => $this->input->post('quizid19'),
		 'ques20' => $this->input->post('quizid20'),
		 'ques21' => $this->input->post('quizid21'),
		 'ques22' => $this->input->post('quizid22'),
	 'ques23' => $this->input->post('quizid23'),
	 'ques24' => $this->input->post('quizid24'),
		 'ques25' => $this->input->post('quizid25'),
	 'ques26' => $this->input->post('quizid26'),
	 'ques27' => $this->input->post('quizid27'),
	 'ques28' => $this->input->post('quizid28'),
		 'ques29' => $this->input->post('quizid29'),
	 'ques30' => $this->input->post('quizid30'),
		);

        $this->load->model('quizmodel');
		$this->data['results'] = $this->quizmodel->getQuestions();
		$this->load->view('user/result_display', $this->data);
	}
}
