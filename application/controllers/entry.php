<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class entry extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//load model
		$this->load->model('M_entry');
		//load model
	
		$this->load->library('form_validation');

	}


	public function index(){
		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
		$data['page_title'] = 'tabel '; 
		$data['pagename'] = 'admin page';

        $data['cari'] = $this->M_entry->cariSiswa();
		
		$this->load->view('include/admin-header',$data);
		$this->load->view('entry/index',$data);
		$this->load->view('include/user-footer');


	}
// 	public function insert(){
	

// 		$data['page_title'] = 'pembayaran'; 
// 		$this->form_validation->set_rules('id_pembayaran','Id_pembayaran','required|trim|is_unique[pembayaran.id_pembayaran]');
// 		$this->form_validation->set_rules('id_petugas','Id_petugas','required|trim');
// 		$this->form_validation->set_rules('nisn','Nisn','required|trim');
// 		$this->form_validation->set_rules('id_kelas','Id_kelas','required|trim');
// 		$this->form_validation->set_rules('tgl_bayar','Tgl_bayar','required|trim');
// 		$this->form_validation->set_rules('bulan_dibayar','bulan_dibayar','required|trim');
// 		$this->form_validation->set_rules('tahun_dibayar','tahun_dibayar','required|trim');
// 		$this->form_validation->set_rules('id_spp','Id_spp','required|trim');
// 		$this->form_validation->set_rules('jumlah_bayar','Jumlah_bayar','required|trim');
  

// 	 if($this->form_validation->run() ==false){
		
// 	   $this->load->view('include/entry-header', $data);
// 	   $this->load->view('entry/index' ,$data);
// 	   $this->load->view('include/user-footer');

	   
//    }else{
	 
	   
	   
//     	$this->M_entry->tambah_data();

// 	   $this->session->set_flashdata('message', "pembayaran sukses");
// 	   redirect('entry/index');
//    }

 

// 	}
  
    public function insert(){
		echo 'oke';
	}






		
}

?>