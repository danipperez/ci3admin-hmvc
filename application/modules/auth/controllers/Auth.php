<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	// --------------------------------------------------------
	
	public function login()
	{
		$data = array(
			'content' => $this->load->view('login','',TRUE)
		);		
		$this->load->view('auth_base',$data);
	}

	// --------------------------------------------------------

	public function logout()
	{
		echo "logout";
	}

	// --------------------------------------------------------

	public function register()
	{
		$data = array(
			'content' => $this->load->view('register','',TRUE)
		);		
		$this->load->view('auth_base',$data);
	}

	// --------------------------------------------------------
}