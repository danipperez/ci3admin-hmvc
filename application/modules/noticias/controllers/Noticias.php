<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends MY_Controller {

	// --------------------------------------------------------

	public function index()
	{
		$data = array(
			'content' => $this->load->view('index','',TRUE),
		);
		$this->load->view('frontend_base', $data);
	}

	// --------------------------------------------------------
	
}
