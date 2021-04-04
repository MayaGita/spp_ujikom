<?php
class m_history extends CI_Model{
 
    function __construct()
    {
        parent::__construct();

  }
  
  public function tampilHistory(){
    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('petugas','pembayaran.id_petugas =petugas.id_petugas');      
    $this->db->join('kelas','pembayaran.id_kelas =kelas.id_kelas');      
    $this->db->join('siswa','pembayaran.nisn =siswa.nisn');      
    $this->db->join('spp','pembayaran.id_spp =spp.id_spp');
    $this->db->order_by('tgl_bayar', 'DESC');



    $query = $this->db->get();
    return $query;
   }

 

  
 
}