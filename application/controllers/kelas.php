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
		$this->load->library('pagination');
		$this->load->library('form_validation');

	}


 function index(){
	$config['base_url'] = site_url('kelas/index'); //site url
	$config['total_rows'] = $this->db->count_all('kelas'); //total row
	$config['per_page'] = 6;  //show record per halaman
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
	$data['data'] = $this->M_kelas->get_kelas_list($config["per_page"], $data['page']);           

	$data['pagination'] = $this->pagination->create_links();
  
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'tabel kelas'; 
		$data['pagename'] = 'admin page';
		// $data['kelas']=$this->M_kelas->select_kelas($config["per_page"], $data['page'])->result();

		
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