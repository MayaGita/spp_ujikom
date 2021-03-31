<?php
class m_auth extends CI_Model{
 
    public function selectAdmin($where=""){
        $data=$this->db->query('select * from petugas '.$where);
        
        return $data;
    }

    function loginAdmin($username, $password){
			
        $user = $this->db->get_where('petugas',array('username'=>$username, 'password'=>$password));
        
        if($user->num_rows()>0){
            return 1;
        }else{
            return 0;
        }
    }
 
  
 
}