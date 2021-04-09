<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
	
		$this->load->library('form_validation');

	}

	 public function index(){
		     $data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			 $data['page_title'] = 'halaman admin'; 
			 $data['pagename'] = 'Admin'; 
			 $data['siswa']= $this->db->count_all('siswa');
			 $data['petugas2']= $this->db->count_all('petugas');

			// if($this->input->post('keyword')){
			//	 $data['storage'] = $this->Model_storage->searchData();
			//}
			
	    	$this->load->view('include/admin-header',$data);
	    	$this->load->view('admin/index',$data);
	    	$this->load->view('include/user-footer');
		}

		
}

?>