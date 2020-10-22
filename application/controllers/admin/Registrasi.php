<?php
class Registrasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_registrasiadmin');
		$this->load->model('M_makulsespekmahasiswa');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_registrasiadmin->get_all_registrasi();
		$x['makul_sespek_mahasiswa']=$this->M_makulsespekmahasiswa->get_all_makulsespek_mahasiswa();
		$x['mahasis']=$this->m_siswa->get_all_siswa();
		$this->load->view('admin/v_registrasi',$x);
	}

	function simpan_registrasi(){
		$nama_mahasiswa=strip_tags($this->input->post('xnama_mahasiswa'));
		$nama_makul=strip_tags($this->input->post('xnama_makul'));
		$status_registrasi=strip_tags($this->input->post('xstatus_registrasi'));
		$this->m_registrasiadmin->simpan_registrasi($nama_mahasiswa,$nama_makul,$status_registrasi);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/registrasi');
	}

	function update_registrasi(){
		$kode=strip_tags($this->input->post('kode'));
		$registrasi_id=strip_tags($this->input->post('xregistrasi_id'));
		$status_registrasi=strip_tags($this->input->post('xstatus_registrasi'));

		$this->m_registrasiadmin->update_registrasi($kode,$status_registrasi);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/registrasi');
	}
	function hapus_registrasi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_registrasiadmin->hapus_registrasi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/registrasi');
	}

}
