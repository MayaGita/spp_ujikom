<?PHP
 
 class 	M_kelas extends CI_model
 {
 	//fungsi mengambil konfigurasi database
 	function __construct()
 	{
 		parent::__construct();

   }
   
  


   
   public function select_kelas(){
	   $kelas=$this->db->query("select*from kelas ");

	   return $kelas;
   }
 
   public function tambah_kelas($table,$data){
    $this->db->insert($table,$data);
    
  }
   public function getKelasById($id){
    return $this->db->get_where('kelas',['id_kelas'=> $id])->row_array();
  }  

  public function update_data(){
	$data =[

		'nama_kelas' =>htmlspecialchars($this->input->post('nama_kelas')),
		'jurusan' =>htmlspecialchars($this->input->post('jurusan')),

	];


  $this->db->where('id_kelas', $this->input->post('id_kelas'));
  $this->db->update('kelas',$data);
}

    public function hapus_data($id){
    $this->db->where('id_kelas',$id);
    $this->db->delete('kelas');
  }



 

}

 

?>