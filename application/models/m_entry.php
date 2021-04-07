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
    
 	public function select_siswa($cari){
        $bulan=$this->input->get('bulan');
        $this->db->select('*');
        $this->db->from('siswa');     
        $this->db->join('kelas','siswa.id_kelas =kelas.id_kelas');      
        $this->db->join('spp','siswa.id_spp =spp.id_spp'); 
           
        $this->db->like("bulan_dibayar" , $cari); 
        
          
        $query = $this->db->get()->result_array();
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

      public function isPembayaranExist($nisn , $bulan, $tahun){
        $array = array('nisn' => $nisn, 'bulan_dibayar' => $bulan, 'tahun_dibayar' => $tahun);

        $this->db->where($array);

        $query = $this->db->get('pembayaran', $nisn , $bulan, $tahun);
        if ($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
      }

      public function getBulan(){
         $bulan=$this->input->get('bulan');
        $this->db->select('*');
        $this->db->from('pembayaran');   
        $this->db->join('siswa','pembayaran.nisn =siswa.nisn');      
        $this->db->join('kelas','pembayaran.id_kelas =kelas.id_kelas');      
        $this->db->join('spp','pembayaran.id_spp =spp.id_spp'); 
        $this->db->where("bulan_dibayar" , $bulan);     
        $query = $this->db->get()->result_array();
        return $query;
      }

      public function cekStatus($nisn, $tahun, $bulan)
      {
          $this->db->select('*');
          $this->db->from('pembayaran');
          $this->db->join('siswa', 'pembayaran.nisn = siswa.nisn');
          $array = array('siswa.nisn' => $nisn, 'pembayaran.bulan_dibayar' => $bulan, 'pembayaran.tahun_dibayar' => $tahun);
          $this->db->where($array);
          return $this->db->get()->num_rows();
      }

  
       

 
}