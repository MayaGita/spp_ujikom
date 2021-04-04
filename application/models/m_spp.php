<?PHP
 
 class 	M_spp extends CI_model
 {
 	//fungsi mengambil konfigurasi database
 	function __construct()
 	{
 		parent::__construct();

   }
   
  


   
   public function select_spp(){
    $cari = $this->input->GET('cari', TRUE); 
    $this->db->select('*');
    $this->db->from('spp');
    $this->db->like("tahunAjaran" , $cari);  
    $query = $this->db->get();
    return $query;
   }
 
   public function tambah_spp($table,$data){
    $this->db->insert($table,$data);
    
  }
   public function getSppById($id){
    return $this->db->get_where('spp',['id_spp'=> $id])->row_array();
  }  

  public function update_data(){
	$data =[
		'tahunAjaran' =>htmlspecialchars($this->input->post('tahunAjaran')),
		'nominal' =>htmlspecialchars($this->input->post('nominal')),

	];


  $this->db->where('id_spp', $this->input->post('id_spp'));
  $this->db->update('spp',$data);
}

    public function hapus_data($id){
    $this->db->where('id_spp',$id);
    $this->db->delete('spp');
  }
 



 

}

 

 








?>