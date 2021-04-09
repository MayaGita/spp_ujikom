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
		$this->load->library('pagination');
		$this->load->library('form_validation');

	}

	 public function index(){
		$data['siswa'] = $this->db->get_where('siswa',['username'=> $this->session->userdata('username')])->row_array();
			 $data['page_title'] = 'siswa'; 
			 $data['pagename'] = ' Siswa'; 

			// if($this->input->post('keyword')){
			//	 $data['storage'] = $this->Model_storage->searchData();
			//}
			
	    	$this->load->view('include/siswa-header',$data);
	    	$this->load->view('siswa/index',$data);
	    	$this->load->view('include/siswa-footer');
		}

	public function dataSiswa(){	
		$config['base_url'] = site_url('siswa/dataSiswa'); //site url
	$config['total_rows'] = $this->db->count_all('siswa'); //total row
	$config['per_page'] = 5;  //show record per halaman
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

	//panggil function get_siswa_list yang ada pada mmodel siswa_model. 
	$data['siswa'] = $this->M_siswa->get_siswa_list($config["per_page"], $data['page']);           

      	$data['pagination'] = $this->pagination->create_links();	

		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'tabel siswa'; 
		$data['pagename'] = 'admin ';

		
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

		$data['siswa'] = $this->M_siswa->getSiswaById($id)->row_array();
		$data['siswa2'] = $this->M_siswa->getSiswaById($id);
	
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


	public function profile(){
		$data['siswa'] = $this->db->get_where('siswa',['username'=> $this->session->userdata('username')])->row_array();
		$data['nisn'] = $this->db->get_where('siswa',['nisn'=> $this->session->userdata('nisn')])->row_array();
		$data['nis'] = $this->db->get_where('siswa',['nis'=> $this->session->userdata('nis')])->row_array();
		$data['nama'] = $this->db->get_where('siswa',['nama'=> $this->session->userdata('nama')])->row_array();
		$data['id_kelas'] = $this->db->get_where('siswa',['id_kelas'=> $this->session->userdata('id_kelas')])->row_array();
			 $data['page_title'] = 'siswa'; 
			 $data['pagename'] = ' siswa'; 

			// if($this->input->post('keyword')){
			//	 $data['storage'] = $this->Model_storage->searchData();
			//}
			
	    	$this->load->view('include/siswa-header',$data);
	    	$this->load->view('siswa/profile',$data);
	    	$this->load->view('include/siswa-footer');
		}
		public function history(){
			$data['siswa'] = $this->db->get_where('siswa',['username'=> $this->session->userdata('username')])->row_array();
			$data['page_title'] = 'history '; 
			$data['pagename'] = ' siswa';
	
			$data['recent'] = $this->M_siswa->tampilHistory()->result();
	
			
			$this->load->view('include/siswa-header',$data);
			$this->load->view('siswa/history',$data);
			$this->load->view('include/siswa-footer');	
	
	
		}
	

		
}

?>