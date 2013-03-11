<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vote extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('vote_model');
    }


	public function index()
	{
		$this->firephp->error('flag index controller');

		$data['votesTeamOne'] = $this->vote_model->getVotesTeamOne();
		$data['votesTeamTwo'] = $this->vote_model->getVotesTeamTwo();

		$this->load->view('vote', $data);
	}


	public function recordvote(){

		/*
		$data = array(
			'email' => $this->input->post('payer_email'),

			//'voter_email' => "test",
		);
		*/

		$email = $_POST['payer_email'];

		$data = array(
			//'email' => $this->input->post('payer_email'),
			'email' => $email,
			//'voter_email' => "test",
		);
		

		$this->db->insert('voters', $data);
/*
		$this->load->view('vote');

		*/

	}

	/*
	public function getvotesteamone(){

		$this->firephp->error('flag');

		$this->vote_model->getVotesTeamOne();


		$this->load->view('test/index');

	}

	public function getvotesteamtwo(){

		$this->firephp->error('flag');

		$this->vote_model->getVotesTeamTwo();


		$this->load->view('test/index');

	}
	*/
	
}
