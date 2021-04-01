<?PHP
 
 class 	M_petugas extends CI_model
 {
 	//fungsi mengambil konfigurasi database
 	function __construct()
 	{
 		parent::__construct();

   }
   
  

 	public function select_petugas(){
 		$sql=$this->db->query("select *from petugas");

 		return $sql;
   }
   
   public function select_kelas(){
	   $kelas=$this->db->query("select*from kelas ");

	   return $kelas;
   }
   
   public function tambah_petugas($table,$data){
    $this->db->insert($table,$data);
    
  }
   public function getPetugasById($id){
    return $this->db->get_where('petugas',['id_petugas'=> $id])->row_array();
  }  

  public function update_data(){
	$data =[
		'username' => htmlspecialchars($this->input->post('username', TRUE)),
		'nama_petugas' =>htmlspecialchars($this->input->post('nama_petugas')),
		'level' =>htmlspecialchars($this->input->post('level')),

	];


  $this->db->where('id_petugas', $this->input->post('id_petugas'));
  $this->db->update('petugas',$data);
}

    public function hapus_data($id){
    $this->db->where('id_petugas',$id);
    $this->db->delete('petugas');
  }


 
  



 

}

 

 








?>