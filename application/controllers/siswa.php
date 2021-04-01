<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('M_siswa');
		//load model
	
		$this->load->library('form_validation');

	}

	 public function index(){
		     $data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			 $data['page_title'] = 'siswa'; 
			 $data['pagename'] = 'halaman siswa'; 

			// if($this->input->post('keyword')){
			//	 $data['storage'] = $this->Model_storage->searchData();
			//}
			
	    	$this->load->view('include/siswa-header',$data);
	    	$this->load->view('siswa/index',$data);
	    	$this->load->view('include/user-footer');
		}

	public function dataSiswa(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'tabel siswa'; 
		$data['pagename'] = 'admin page';

		$data['siswa']=$this->M_siswa->select_siswa()->result();

		
		$this->load->view('include/admin-header',$data);
		$this->load->view('siswa/dataSiswa',$data);
		$this->load->view('include/user-footer');


	}	

	public function create(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('nisn','Nisn','required|trim|is_unique[siswa.nisn]');
		$this->form_validation->set_rules('nis','Nis','required|trim|is_unique[siswa.nis]');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('id_kelas','Id_kelas','required|trim');
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		$this->form_validation->set_rules('no_telp','No_telp','required|trim');
		$this->form_validation->set_rules('id_spp','Id_spp','required|trim');



		$data['page_title'] = 'tambah data siswa'; 
		
		$image = array(

		);

	 if($this->form_validation->run() ==false){
	   $this->load->view('include/admin-header', $data);
	   $this->load->view('siswa/create');
	   $this->load->view('include/user-footer');

   }else{
	   $data =[
		   'nisn' => htmlspecialchars($this->input->post('nisn', TRUE)),
		   'nis' => htmlspecialchars($this->input->post('nis', TRUE)),
		   'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
		   'username' =>htmlspecialchars($this->input->post('username')),
		   'is_active'=> 1,	
		   'nama' =>htmlspecialchars($this->input->post('nama')),
		   'id_kelas' =>htmlspecialchars($this->input->post('id_kelas')),
		   'alamat' =>htmlspecialchars($this->input->post('alamat')),
		   'no_telp' =>htmlspecialchars($this->input->post('no_telp')),
		   'id_spp' =>htmlspecialchars($this->input->post('id_spp')),
		  

	   ];
	   
	   
	   $this->M_siswa->tambah_siswa('siswa', $data);

	   $this->session->set_flashdata('message', "data successfully added");
	   redirect('siswa/dataSiswa');
   }

	}

	public function update($id){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'Update Data siswa'; 

		$data['siswa'] = $this->M_siswa->getSiswaById($id);
		$data['kelas'] = $this->M_siswa->getKelasById($id);
		$data['spp'] = $this->M_siswa->getSppById($id);
		$this->form_validation->set_rules('nisn','Nisn','required|trim');
		$this->form_validation->set_rules('nis','Nis','required|trim');
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('id_kelas','Id_kelas','required|trim');
		$this->form_validation->set_rules('alamat','Alamat','required|trim');
		$this->form_validation->set_rules('no_telp','No_telp','required|trim');
		$this->form_validation->set_rules('id_spp','Id_spp','required|trim');

		 if($this->form_validation->run() ==false){
			$this->load->view('include/admin-header', $data);
			$this->load->view('siswa/update', $data);
			$this->load->view('include/user-footer');
	    }else{
		$this->M_siswa->update_data();
        $this->session->set_flashdata('message', 'data successfully updated');
		redirect('siswa/dataSiswa');

		
		}


	}    

	public function delete($id){

		$this->M_siswa->hapus_data($id);
		$this->session->set_flashdata('message', 'data deleted');
	    redirect('siswa/dataSiswa');

	} 

		
}

?>