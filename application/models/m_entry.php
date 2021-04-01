<?php
class m_entry extends CI_Model{
 
    function __construct()
    {
        parent::__construct();

  }
  
 



	public function cariSiswa()
	{
        $cari = $this->input->GET('cari', TRUE); 
	     	$data = $this->db->query("SELECT * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where nama like '%$cari%' ");
        return $data->result();
    }
    
 	public function select_pembayaran(){
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('petugas','petugas.id_petugas =petugas.id_petugas');      
        $this->db->join('kelas','pembayaran.id_kelas =kelas.id_kelas');      
        $this->db->join('siswa','pembayaran.nisn =siswa.nisn');      
        $this->db->join('spp','pembayaran.id_spp =spp.id_spp');
   
    
        $query = $this->db->get();
        return $query;
       }
       
       public function getSiswa(){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas','siswa.id_kelas =kelas.id_kelas');      
        $this->db->join('spp','siswa.id_spp =spp.id_spp');     

    
        $query = $this->db->get();
        return $query;

         
        // $data = $this->db->query("SELECT * from pembayaran join siswa on pembayaran.nisn=siswa.nisn  where id_pembayaran = '$id' ");
        // return $data->row_array();

      } 
      public function tambah_data($table,$data){
      
        $this->db->insert($table,$data);
      }
  
 
}