<?php
class Mahasisswa extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_loginmahasiswa');
    }
    function index(){
        $this->load->view('mahasiswa/v_login');
    }
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('mahasiswa_nim')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_loginmahasiswa->cekadmin($u,$p);
        if($cadmin->num_rows > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcadmin=$cadmin->row_array();
         if($xcadmin['mahasiswa_level']=='11')
            $this->session->set_userdata('akses','11');
            $idadmin=$xcadmin['mahasiswa_id'];
            $user_nama=$xcadmin['mahasiswa_nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
         if($xcadmin['mahasiswa_level']=='22'){
             $this->session->set_userdata('akses','22');
             $idadmin=$xcadmin['mahasiswa_id'];
             $user_nama=$xcadmin['mahasiswa_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
         } //Front Office
           
         
         
        }
        
        if($this->session->userdata('masuk')==true){
            redirect('mahasisswa/berhasillogin');
        }else{
            redirect('mahasisswa/gagallogin');
        }
    }
        function berhasillogin(){
            redirect('mahasiswa/dashboard');
        }
        function gagallogin(){
            $url=base_url('mahasisswa');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> N I M Atau Password Salah</div>');
            redirect($url);
        }
        function logout(){
            $this->session->sess_destroy();
            $url=base_url('mahasisswa');
            redirect($url);
        }
}