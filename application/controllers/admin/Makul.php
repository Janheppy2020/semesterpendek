<?php
class Makul extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_makul');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_makul->get_all_makul();
		$data['data']=$this->m_makul->tampil_makul();
		$this->load->view('admin/v_makul',$x);
	}

	function simpan_makul(){
		$kode_makul=strip_tags($this->input->post('xkode_makul'));
		$nama_makul=strip_tags($this->input->post('xnama_makul'));
		$sks_makul=$this->input->post('xsks_makul');

		$this->m_makul->simpan_makul($kode_makul,$nama_makul,$sks_makul);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/makul');
	}

	function update_makul(){
		$kode=strip_tags($this->input->post('kode'));
		$kode_makul=strip_tags($this->input->post('xkode_makul'));
		$nama_makul=strip_tags($this->input->post('xnama_makul'));
		$sks_makul=$this->input->post('xsks_makul');

		$this->m_makul->update_makul($kode,$kode_makul,$nama_makul,$sks_makul);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/makul');
	}
	function hapus_makul(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_makul->hapus_makul($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/makul');
	}

}