<?php
class Makulsespek extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('dossen');
            redirect($url);
        };
		$this->load->model('M_makulsespekmahasiswa');
		$this->load->model('m_makul');
		$this->load->model('m_guru');
		$this->load->model('m_tahunakademik');
		$this->load->library('upload');
	}


	function index(){
		$data['makul']=$this->m_makul->get_all_makul();
		$data['makul2']=$this->m_makul->get_all_makul();
		$data['dosen']=$this->m_guru->get_all_guru();
		$data['tahunakademik']=$this->m_tahunakademik->get_all_tahunakademik();
		$data['data']=$this->M_makulsespekmahasiswa->get_all_makulsespek_mahasiswa();
		$this->load->view('dosen/v_makulsespek',$data);
		
		
	}

}