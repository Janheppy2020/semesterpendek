<?php
class Jurusan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jurusan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_jurusan->get_all_jurusan();
		$this->load->view('admin/v_jurusan',$x);
	}

	function simpan_jurusan(){
		$kode_jurusan=strip_tags($this->input->post('xkode_jurusan'));
		$nama_jurusan=strip_tags($this->input->post('xnama_jurusan'));
		$this->m_jurusan->simpan_jurusan($kode_jurusan,$nama_jurusan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/jurusan');
	}

	function update_jurusan(){
		$kode=strip_tags($this->input->post('kode'));
		$kode_jurusan=strip_tags($this->input->post('xkode_jurusan'));
		$nama_jurusan=strip_tags($this->input->post('xnama_jurusan'));
		$this->m_jurusan->update_jurusan($kode,$kode_jurusan,$nama_jurusan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/jurusan');
	}
	function hapus_jurusan(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jurusan->hapus_jurusan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/jurusan');
	}

}
