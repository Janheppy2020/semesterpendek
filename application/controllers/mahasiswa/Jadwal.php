<?php
class Jadwal extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('mahasisswa');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_registrasi');
		$this->load->model('M_makulsespekmahasiswa');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_registrasi->get_all_registrasi_sempek();
		$x['makul_sespek_mahasiswa']=$this->M_makulsespekmahasiswa->get_all_makulsespek_mahasiswa();
		$x['mahasis']=$this->m_siswa->get_all_siswa();
		$this->load->view('mahasiswa/v_jadwal',$x);
	}

	function simpan_registrasi(){
		$nama_mahasiswa=strip_tags($this->input->post('xnama_mahasiswa'));
		$nama_makul=strip_tags($this->input->post('xnama_makul'));
		$status_registrasi=strip_tags($this->input->post('xstatus_registrasi'));
		$this->m_registrasi->simpan_registrasi($nama_mahasiswa,$nama_makul,$status_registrasi);
		echo $this->session->set_flashdata('msg','success');
		redirect('mahasiswa/jadwal');
	}

	function update_registrasi(){
		$kode=strip_tags($this->input->post('kode'));
		$registrasi=strip_tags($this->input->post('xregistrasi'));
		$this->m_registrasi->update_registrasi($kode,$registrasi);
		echo $this->session->set_flashdata('msg','info');
		redirect('mahasiswa/jadwal');
	}
	function hapus_registrasi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_registrasi->hapus_registrasi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('mahasiswa/jadwal');
	}

}
