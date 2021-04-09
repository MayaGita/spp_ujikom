<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class history extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('M_history');
		//load model
	
		$this->load->library('form_validation');

	}


	public function history(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'history '; 
		$data['pagename'] = 'admin ';

        $data['recent'] = $this->M_history->tampilHistory()->result();

		
		$this->load->view('include/admin-header',$data);
		$this->load->view('history/history',$data);
		$this->load->view('include/user-footer');	


	}






		
}

?>