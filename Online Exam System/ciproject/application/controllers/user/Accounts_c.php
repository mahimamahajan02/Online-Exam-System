<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts_c extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('user/accounts_game');
	}

	public function quizdisplay()
	{
		$this->load->model('accounts');
		$this->data['questions'] = $this->accounts->getQuestions();
		$this->load->view('user/play_accounts', $this->data);
	}

		public function resultdisplay()
	{
		$this->data['checks'] = array(
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
		);

        $this->load->model('accounts');
		$this->data['results'] = $this->accounts->getQuestions();
		$this->load->view('user/result_display_accounts', $this->data);
	}
}
