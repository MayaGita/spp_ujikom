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
		$data['pagename'] = 'admin ';

        $data['cari'] = $this->M_entry->cariSiswa();
		
		$this->load->view('include/admin-header',$data);
		$this->load->view('entry/index',$data);
		$this->load->view('include/user-footer');


	}
	public function insert(){
		 
		// $data['siswa']=  $this->M_entry->getSiswaById($id);
		$data['petugas'] = $this->db->get_where('petugas',['id_petugas'=> $this->session->userdata('id_petugas')])->row_array();
		$data['petugas2'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
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
		
	   $this->load->view('include/entry-header', $data);
	   $this->load->view('entry/insert' ,$data);
	   $this->load->view('include/user-footer');

	   
   }else{  
	   $nisn = $this->input->post('nisn');
	   $bulan =$this->input->post('bulan_dibayar');
	   $tahun = $this->input->post('tahun_dibayar'); 
     if($this->M_entry->isPembayaranExist($nisn , $bulan , $tahun)) {
		 	

		$this->session->set_flashdata('message2', "Spp sudah dibayar");
		redirect('entry/insert');

	
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
		
			   $this->session->set_flashdata('message', "Pembayaran berhasil");
			   redirect('history/history');

		}

	
   }


 

	}

  
	public function isiLaporan()
    {

		$data['petugas'] = $this->db->get_where('petugas',['username'=> $this->session->userdata('username')])->row_array();
	    $data['page_title'] = 'Laporan pembayaran'; 
	    $data['pagename'] = 'admin ';

	    $bulan = array('januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember');
	
		$search=$this->input->Get('search',TRUE);
		
        $data['info'] = $this->M_entry->select_siswa();

		
	
        $infoSiswa = array();

        foreach ($data['info'] as $info) {
            for ($b = 0; $b < 12; $b++) {
                for ($tahun = 2021; $tahun <= date('Y'); $tahun++) {
					
				

                    $cek = $this->M_entry->cekStatus($info['nisn'], $tahun, $bulan[$b]);

                    if ($cek) {
                        $status = 'Lunas';
                    } else {
                        $status = 'belum lunas';
                    }
				}

                    $infoSiswa[] = array(
						
                        'nisn' => $info['nisn'],
                        'nama' => $info['nama'],
                        'nama_kelas' => $info['nama_kelas'],
                        'tahun' => $tahun,
                        'bulan' => $bulan[$b],
                        'status' => $status,
                    );
                
            }
        }
        $data['info'] = $infoSiswa;
		

        $data['title'] = 'laporan';
        $this->load->view('include/admin-header', $data);
        $this->load->view('entry/isilaporan', $data);
       
    }






		
}

?>