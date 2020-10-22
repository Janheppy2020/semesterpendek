<?php
class Dossen extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_logindosen');
    }
    function index(){
        $this->load->view('dosen/v_login');
    }
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('dosen_nidn')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_logindosen->cekadmin($u,$p);
        if($cadmin->num_rows > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcadmin=$cadmin->row_array();
         if($xcadmin['dosen_level']=='11')
            $this->session->set_userdata('akses','11');
            $idadmin=$xcadmin['dosen_id'];
            $user_nama=$xcadmin['dosen_nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
         if($xcadmin['dosen_level']=='22'){
             $this->session->set_userdata('akses','22');
             $idadmin=$xcadmin['dosen_id'];
             $user_nama=$xcadmin['dosen_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
         } //Front Office
           
         
         
        }
        
        if($this->session->userdata('masuk')==true){
            redirect('dossen/berhasillogin');
        }else{
            redirect('dossen/gagallogin');
        }
    }
        function berhasillogin(){
            redirect('dosen/dashboard');
        }
        function gagallogin(){
            $url=base_url('dossen');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            redirect($url);
        }
        function logout(){
            $this->session->sess_destroy();
            $url=base_url('dossen');
            redirect($url);
        }
}