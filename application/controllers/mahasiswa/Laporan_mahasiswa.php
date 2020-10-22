<?php
class Laporan_mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_makul');
		$this->load->model('m_makulsespek');
		$this->load->model('m_laporanmahasiswa');
		$this->load->model('m_registrasi');
	}
	function index(){
	if($this->session->userdata('akses')=='11'){
		$data['mahasiswa_id'] = $this->m_laporanmahasiswa->get_data_permahasiswa();
		$data['mahasiswa_id']=$this->m_laporanmahasiswa->get_nama_mahasiswa();
		$this->load->view('mahasiswa/v_registrasi',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function lap_registrasi(){
		$mahasiswa=$this->input->post('mahasiswa_id');
		$x['ruan']=$this->m_laporanmahasiswa->get_data_per_mahasiswa($mahasiswa);
		$x['data']=$this->m_laporanmahasiswa->get_data_permahasiswa($mahasiswa);
		$this->load->view('mahasiswa/laporan/v_lap_registrasi',$x);
	}


}