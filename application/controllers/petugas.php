<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class petugas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('M_petugas');
		$this->load->model('M_history');
		$this->load->model('M_entry');
		$this->load->library('pagination');
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
			$config['base_url'] = site_url('petugas/dataPetugas'); //site url
	$config['total_rows'] = $this->db->count_all('petugas'); //total row
	$config['per_page'] = 1;  //show record per halaman
	$config["uri_segment"] = 3;  // uri parameter
	$choice = $config["total_rows"] / $config["per_page"];
	$config["num_links"] = floor($choice);

	// Membuat Style pagination untuk BootStrap v4
	$config['first_link']       = 'First';
	$config['last_link']        = 'Last';
	$config['next_link']        = 'Next';
	$config['prev_link']        = 'Prev';
	$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	$config['full_tag_close']   = '</ul></nav></div>';
	$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	$config['num_tag_close']    = '</span></li>';
	$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	$config['prev_tagl_close']  = '</span>Next</li>';
	$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	$config['first_tagl_close'] = '</span></li>';
	$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	$config['last_tagl_close']  = '</span></li>';

	$this->pagination->initialize($config);
	$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	//panggil function get_kelas_list yang ada pada mmodel kelas_model. 
	$data['data'] = $this->M_petugas->get_petugas_list($config["per_page"], $data['page']);           

	$data['pagination'] = $this->pagination->create_links();

			$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			$data['page_title'] = 'tabel petugas'; 
			$data['pagename'] = 'admin page';
			// $data['dataPetugas']=$this->M_petugas->select_petugas()->result();
	
			
			$this->load->view('include/admin-header',$data);
			$this->load->view('petugas/dataPetugas',$data);
			$this->load->view('include/user-footer');
	
	
		}			
		public function create(){
			$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
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
			$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			$data['page_title'] = 'Update Data petugas'; 
	
			$data['petugas2'] = $this->M_petugas->getPetugasById($id);

			$this->form_validation->set_rules('username','Username','required|trim');
			$this->form_validation->set_rules('nama_petugas','Nama_petugas','required|trim');
			$this->form_validation->set_rules('level','Level','required|trim');
	
			 if($this->form_validation->run() ==false){
				$this->load->view('include/admin-header', $data);
				$this->load->view('petugas/update', $data);
				$this->load->view('include/user-footer');
			}else{
			$this->M_petugas->update_data();
			$this->session->set_flashdata('message', 'data successfully updated');
			redirect('petugas/dataPetugas');
	
			
			}
	
	
		}    
	
		public function delete($id){
	
			$this->M_petugas->hapus_data($id);
			$this->session->set_flashdata('message', 'data deleted');
			redirect('petugas/dataPetugas');
	
		} 

		public function entry(){
			$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			$data['page_title'] = 'tabel '; 
			$data['pagename'] = 'petugas ';
	
			$data['cari'] = $this->M_entry->cariSiswa();
			
			$this->load->view('include/petugas-header',$data);
			$this->load->view('petugas/entry',$data);
			$this->load->view('include/user-footer');
	
	
		}
		
	    public function entryInsert(){
		 
			// $data['siswa']=  $this->M_entry->getSiswaById($id);
			$data['petugas'] = $this->db->get_where('petugas',['id_petugas'=> $this->session->userdata('id_petugas')])->row_array();
			$data['petugas2'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			$data['pagename'] = 'petugas ';
			$data['siswa']=$this->M_entry->getSiswa()->result();
			$data['page_title'] = 'pembayaran'; 
			$this->form_validation->set_rules('id_pembayaran','Id_pembayaran','required|trim');
			$this->form_validation->set_rules('id_petugas','Id_petugas','required|trim');
			$this->form_validation->set_rules('nisn','Nisn','required|trim');
			$this->form_validation->set_rules('id_kelas','Id_kelas','required|trim');
			$this->form_validation->set_rules('tgl_bayar','Tgl_bayar','required|trim');
			$this->form_validation->set_rules('bulan_dibayar','bulan_dibayar','required|trim');
			$this->form_validation->set_rules('tahun_dibayar','tahun_dibayar','required|trim');
			$this->form_validation->set_rules('id_spp','Id_spp','required|trim');
			$this->form_validation->set_rules('jumlah_bayar','Jumlah_bayar','required|trim');
	  
	
		 if($this->form_validation->run() ==false){
			
		   $this->load->view('include/petugas-header', $data);
		   $this->load->view('petugas/insert' ,$data);
		   $this->load->view('include/user-footer');
	
		   
	   }else{   
		$data =[
			'id_pembayaran' => htmlspecialchars($this->input->post('id_pembayaran', TRUE)),
			'id_petugas' => htmlspecialchars($this->input->post('id_petugas',True)),
			'nisn' => htmlspecialchars($this->input->post('nisn')),
			'id_kelas' => htmlspecialchars($this->input->post('id_kelas')),
			'tgl_bayar' => htmlspecialchars($this->input->post('tgl_bayar')),
			'bulan_dibayar' => htmlspecialchars($this->input->post('bulan_dibayar')),
			'tahun_dibayar' => htmlspecialchars($this->input->post('tahun_dibayar')),
			'id_spp' => htmlspecialchars($this->input->post('id_spp')),
			'jumlah_bayar' => htmlspecialchars($this->input->post('jumlah_bayar')),
	 
	 
		  ];
		   
			$this->M_entry->tambah_data('pembayaran', $data);
	
		   $this->session->set_flashdata('message', "pembayaran berhasil");
		   redirect('petugas/history');
	   }
	
	 
	
		}
	  
		public function history(){
			$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
			$data['page_title'] = 'history '; 
			$data['pagename'] = 'petugas';
	
			$data['recent'] = $this->M_history->tampilHistory()->result();
			
			$this->load->view('include/petugas-header',$data);
			$this->load->view('history/history',$data);
			$this->load->view('include/user-footer');
	
	
		}

		
}

?>