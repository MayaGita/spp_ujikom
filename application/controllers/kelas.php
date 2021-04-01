<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class kelas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('M_kelas');
		//load model
	
		$this->load->library('form_validation');

	}


	public function index(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'tabel kelas'; 
		$data['pagename'] = 'admin page';
		$data['kelas']=$this->M_kelas->select_kelas()->result();

		
		$this->load->view('include/admin-header',$data);
		$this->load->view('kelas/index',$data);
		$this->load->view('include/user-footer');


	}	
	public function create(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('id_kelas','Id_kelas','required|trim');
		$this->form_validation->set_rules('nama_kelas','Nama_kelas','required|trim');
		$this->form_validation->set_rules('jurusan','jurusan','required|trim');




		$data['page_title'] = 'tambah data kelas'; 
		
		$image = array(

		);

	 if($this->form_validation->run() ==false){
		
	   $this->load->view('include/admin-header', $data);
	   $this->load->view('kelas/create');
	   $this->load->view('include/user-footer');

	   
   }else{
	   $data =[
		   'id_kelas' => htmlspecialchars($this->input->post('id_kelas', TRUE)),
		   'nama_kelas' =>htmlspecialchars($this->input->post('nama_kelas')),
		   'jurusan' =>htmlspecialchars($this->input->post('jurusan')),

	   ];
	   
	   
	   $this->M_kelas->tambah_kelas('kelas', $data);

	   $this->session->set_flashdata('message', "data successfully added");
	   redirect('kelas/index');
   }

 

	}

	public function update($id){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'Update Data kelas'; 

		$data['kelas'] = $this->M_kelas->getKelasById($id);


		$this->form_validation->set_rules('nama_kelas','Nama_kelas','required|trim');
		$this->form_validation->set_rules('jurusan','jurusan','required|trim');

		 if($this->form_validation->run() ==false){
			$this->load->view('include/admin-header', $data);
			$this->load->view('kelas/update', $data);
			$this->load->view('include/user-footer');
		}else{
		$this->M_kelas->update_data();
		$this->session->set_flashdata('message', 'data successfully updated');
		redirect('kelas/index');

		
		}


	}    

	public function delete($id){

		$this->M_kelas->hapus_data($id);
		$this->session->set_flashdata('message', 'data deleted');
		redirect('kelas/index');

	} 


		
}

?>