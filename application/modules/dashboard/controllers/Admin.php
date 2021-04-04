<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	// --------------------------------------------------------

	public function index()
	{	
		$data = array(
			'content' => $this->load->view('admin/index','',TRUE),
		);
		$this->load->view('backend_base',$data);
	}

	// --------------------------------------------------------
	
}