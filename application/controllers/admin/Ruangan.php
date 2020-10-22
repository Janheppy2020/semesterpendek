<?php
class Ruangan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_ruangan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_ruangan->get_all_ruangan();
		$this->load->view('admin/v_ruangan',$x);
	}

	function simpan_ruangan(){
		$kode_ruangan=strip_tags($this->input->post('xkode_ruangan'));
		$nama_ruangan=strip_tags($this->input->post('xnama_ruangan'));
		$lantai_ruangan=$this->input->post('xlantai_ruangan');

		$this->m_ruangan->simpan_ruangan($kode_ruangan,$nama_ruangan,$lantai_ruangan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/ruangan');
	}

	function update_ruangan(){
		$kode=strip_tags($this->input->post('kode'));
		$kode_ruangan=strip_tags($this->input->post('xkode_ruangan'));
		$nama_ruangan=strip_tags($this->input->post('xnama_ruangan'));
		$lantai_ruangan=$this->input->post('xlantai_ruangan');

		$this->m_ruangan->update_ruangan($kode,$kode_ruangan,$nama_ruangan,$lantai_ruangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/ruangan');
	}
	function hapus_ruangan(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_ruangan->hapus_ruangan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/ruangan');
	}

}