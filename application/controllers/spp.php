<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class spp extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('M_spp');
		//load model
	
		$this->load->library('form_validation');

	}


	public function index(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'tabel spp'; 
		$data['pagename'] = 'admin  	';
		$data['spp']=$this->M_spp->select_spp()->result();

		
		$this->load->view('include/admin-header',$data);
		$this->load->view('spp/index',$data);
		$this->load->view('include/user-footer');


	}
	public function create(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('id_spp','Id_spp','required|trim');
		$this->form_validation->set_rules('tahunAjaran','TahunAjaran','required|trim');
		$this->form_validation->set_rules('nominal','Nominal','required|trim');




		$data['page_title'] = 'tambah data spp'; 
		
		$image = array(

		);

	 if($this->form_validation->run() ==false){
		
	   $this->load->view('include/admin-header', $data);
	   $this->load->view('spp/create');
	   $this->load->view('include/user-footer');

	   
   }else{
	   $data =[
		   'id_spp' => htmlspecialchars($this->input->post('id_spp', TRUE)),
		   'tahunAjaran' => htmlspecialchars($this->input->post('tahunAjaran', TRUE)),
		   'nominal' =>htmlspecialchars($this->input->post('nominal')),

	   ];
	   
	   
	   $this->M_spp->tambah_spp('spp', $data);

	   $this->session->set_flashdata('message', "data successfully added");
	   redirect('spp/index');
   }

 

	}

	public function update($id){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'Update Data spp'; 

		$data['spp'] = $this->M_spp->getSppById($id);

		$this->form_validation->set_rules('tahunAjaran','TahunAjaran','required|trim');
		$this->form_validation->set_rules('nominal','Nominal','required|trim');

		 if($this->form_validation->run() ==false){
			$this->load->view('include/admin-header', $data); 
			$this->load->view('spp/update', $data);
			$this->load->view('include/user-footer');
		}else{
		$this->M_spp->update_data();
		$this->session->set_flashdata('message', 'data successfully updated');
		redirect('spp/index');

		
		}


	}    

	public function delete($id){

		$this->M_spp->hapus_data($id);
		$this->session->set_flashdata('message', 'data deleted');
		redirect('spp/index');

	} 



		
}

?>