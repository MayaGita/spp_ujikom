<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends Ci_controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
	}


	
	public function index()
	{
        

		$this->load->view('include/landing-header');
		$this->load->view('landing/index');

	}



}
