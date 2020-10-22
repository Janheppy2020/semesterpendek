<?php
class Tahunakademik extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_tahunakademik');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_tahunakademik->get_all_tahunakademik();
		$this->load->view('admin/v_tahunakademik',$x);
	}

	function simpan_tahunakademik(){
		$tahunakademik_nama=strip_tags($this->input->post('xtahunakademik_nama'));
		$this->m_tahunakademik->simpan_tahunakademik($tahunakademik_nama);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/tahunakademik');
	}

	function update_tahunakademik(){
		$kode=strip_tags($this->input->post('kode'));
		$tahunakademik_nama=strip_tags($this->input->post('xtahunakademik_nama'));
		$this->m_tahunakademik->update_tahunakademik($kode,$tahunakademik_nama);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/tahunakademik');
	}
	function hapus_tahunakademik(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_tahunakademik->hapus_tahunakademik($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tahunakademik');
	}

}
