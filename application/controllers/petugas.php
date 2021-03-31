<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class petugas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('M_petugas');
		$this->load->model('M_entry');
		$this->load->library('form_validation');

	}

	 public function index(){
		     $data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			 $data['page_title'] = 'Barang'; 
			 $data['pagename'] = 'petugas'; 

			// if($this->input->post('keyword')){
			//	 $data['storage'] = $this->Model_storage->searchData();
			//}
			
	    	$this->load->view('include/petugas-header',$data);
	    	$this->load->view('petugas/index',$data);
	    	$this->load->view('include/user-footer');
		}

		public function dataPetugas(){
			$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			$data['page_title'] = 'tabel petugas'; 
			$data['pagename'] = 'admin page';
			$data['dataPetugas']=$this->M_petugas->select_petugas()->result();
	
			
			$this->load->view('include/admin-header',$data);
			$this->load->view('petugas/dataPetugas',$data);
			$this->load->view('include/user-footer');
	
	
		}			
		public function create(){
			$this->form_validation->set_rules('id_petugas','Id_petugas','required|trim');
			$this->form_validation->set_rules('username','Username','required|trim');
			$this->form_validation->set_rules('password','Password','required|trim');
			$this->form_validation->set_rules('nama_petugas','Nama_petugas','required|trim');
			$this->form_validation->set_rules('level','Level','required|trim');
	
	
	
			$data['page_title'] = 'tambah data petugas'; 
			
			$image = array(
	
			);
	
		 if($this->form_validation->run() ==false){
			
		   $this->load->view('include/admin-header', $data);
		   $this->load->view('petugas/create');
		   $this->load->view('include/user-footer');
	
		   
	   }else{
		   $data =[
			   'id_petugas' => htmlspecialchars($this->input->post('id_petugas', TRUE)),
			   'username' => htmlspecialchars($this->input->post('username', TRUE)),
			   'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			   'is_active'=> 1,	
			   'nama_petugas' =>htmlspecialchars($this->input->post('nama_petugas')),
			   'level' =>htmlspecialchars($this->input->post('level')),
	
		   ];
		   
		   
		   $this->M_petugas->tambah_petugas('petugas', $data);
	
		   $this->session->set_flashdata('message', "data successfully added");
		   redirect('petugas/dataPetugas');
	   }

	 
	
		}
	
		public function update($id){
			$data['page_title'] = 'Update Data petugas'; 
	
			$data['petugas'] = $this->M_petugas->getPetugasById($id);

			$this->form_validation->set_rules('username','Username','required|trim');
			$this->form_validation->set_rules('nama_petugas','Nama_petugas','required|trim');
			$this->form_validation->set_rules('level','Level','required|trim');
	
			 if($this->form_validation->run() ==false){
				$this->load->view('include/admin-header', $data);
				$this->load->view('petugas/update', $data);
				$this->load->view('include/user-footer');
			}else{
			$this->M_siswa->update_data();
			$this->session->set_flashdata('message', 'data successfully updated');
			redirect('petugas/dataPetugas');
	
			
			}
	
	
		}    
	
		public function delete($id){
	
			$this->M_siswa->hapus_data($id);
			$this->session->set_flashdata('message', 'data deleted');
			redirect('petugas/dataPetugas');
	
		} 

		public function entry(){
			$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			$data['page_title'] = 'tabel '; 
			$data['pagename'] = 'petugas ';
	
			$data['cari'] = $this->M_entry->cariSiswa();
			
			$this->load->view('include/petugas-header',$data);
			$this->load->view('entry/index',$data);
			$this->load->view('include/user-footer');
	
	
		}
	

		
}

?>