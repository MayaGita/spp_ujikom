<?PHP
 
 class 	M_siswa extends CI_model
 {
 	//fungsi mengambil konfigurasi database
 	function __construct()
 	{
 		parent::__construct();

   }
   
  //  public function cariSiswa()
  //  {
  //        $cari = $this->input->GET('cari', TRUE); 
  //    $data = $this->db->query("SELECT * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where nama like '%$cari%' ");
  //        return $data->result();
  //    }

 	public function select_siswa(){
    $cari = $this->input->GET('cari', TRUE); 
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas','siswa.id_kelas =kelas.id_kelas');      
    $this->db->join('spp','siswa.id_spp =spp.id_spp'); 
    $this->db->like("nama" , $cari);     
    $query = $this->db->get();
    return $query;
   }
 	
   

   public function tambah_siswa($table,$data){
    $this->db->insert($table,$data);
    
  }
//   public function edit_data($where,$table){    
    
//     return $this->db->get_where($table,$where);
// }



  public function getSiswaById($id){
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas','siswa.id_kelas =kelas.id_kelas');      
    $this->db->join('spp','siswa.id_spp =spp.id_spp'); 
    $this->db->where('nisn', $id);
    $query = $this->db->get();
    return $query;
  }  
  



  public function update_data(){
	$data =[
		'nisn' => htmlspecialchars($this->input->post('nisn', TRUE)),
		'nis' => htmlspecialchars($this->input->post('nis', TRUE)),
		'nama' =>htmlspecialchars($this->input->post('nama')),
		'id_kelas' =>htmlspecialchars($this->input->post('id_kelas')),
		'alamat' =>htmlspecialchars($this->input->post('alamat')),
		'no_telp' =>htmlspecialchars($this->input->post('no_telp')),
		'id_spp' =>htmlspecialchars($this->input->post('id_spp')),
	   

	];


  $this->db->where('nisn', $this->input->post('nisn'));
  $this->db->update('siswa',$data);
}

    public function hapus_data($id){
    $this->db->where('nisn',$id);
    $this->db->delete('siswa');
  }
  public function tampilHistory(){
    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('petugas','pembayaran.id_petugas =petugas.id_petugas');      
    $this->db->join('kelas','pembayaran.id_kelas =kelas.id_kelas');      
    $this->db->join('siswa','pembayaran.nisn =siswa.nisn');      
    $this->db->join('spp','pembayaran.id_spp =spp.id_spp');
    $this->db->where('siswa.username' ,$this->session->userdata('username'));
    $this->db->order_by('tgl_bayar', 'DESC');



    $query = $this->db->get();
    return $query;
   }


  



 

}

 

 








?>