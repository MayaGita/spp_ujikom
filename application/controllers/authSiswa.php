<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authSiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
        
	}
	public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        //ini contoh input password
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $data['page_title'] = 'Login'; 

        if($this->form_validation->run() ==false){
        $this->load->view('include/auth-head' , $data);
        $this->load->view('authSiswa/login');
        $this->load->view('include/auth-foot');
       }else{
        $this->_login();
       }
    }

    
    private function _login(){

			
			$username = $this->input->post('username');

			$password = $this->input->post('password');
			
			$siswa = $this->db->get_where('siswa', ['username' => $username])->row_array();
			
			if($siswa){
				if($siswa['is_active'] == 1){
			
				//user ditemukan
			
					 if(password_verify($password,$siswa['password'])){
					  //jika password sama
			
					  $data =[
						'username' =>$siswa ['username'],
				
					   ];
						//simpan email dan id_role dalam session 
						$this->session->set_userdata($data);
					
							redirect('siswa/index'); 
					 
			
					//   $this->session->set_userdata($data);
			
			
					//    redirect('UserPage');
			    }else{
							$this->session->set_flashdata('message', 'wrong password');
						 redirect('authSiswa');
			
					 }
				}else{
					$this->session->set_flashdata('message', 'Username not exist');
				 redirect('authSiswa');
			
			}
			}else{
			
				 $this->session->set_flashdata('message', 'username is not registered');
			redirect('authSiswa');
			
			}
	
	}


	


      public function logout(){
        //menghapus data session

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
            $this->session->set_flashdata('message', 'logout success');
        redirect('authSiswa');



    }

}
