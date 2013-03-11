<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Success extends CI_Controller {

	public function index()
	{
		$this->load->view('success');
	}


	public function referral(){

		$data = array(
			'voter_email' => $this->input->post('voter_email'),
			'referral_email' => $this->input->post('referral_email'),
		);

		$this->load->library('email');

		$this->email->from($data['voter_email'], 'Vote For My Team');
		$this->email->to($data['referral_email']); 


		$this->email->subject('Vote For My Team');
		$this->email->message('Check out Vote For My Team.');	

		$this->email->send();

		$this->load->helper('url');


		$this->load->view('referralconfirm');
		//redirect('/referralconfirm');
		

	}

	
}
