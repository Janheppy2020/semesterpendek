<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_agenda');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_agenda->get_all_agenda();
		$this->load->view('admin/v_agenda',$x);
	}
	function add_agenda(){
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_add_agenda',$x);
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_agenda->get_agenda_by_kode($kode);
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_edit_agenda',$x);
	}
	function simpan_agenda(){
		$nama_agenda=strip_tags($this->input->post('xnama_agenda'));
		$deskripsi=$this->input->post('xdeskripsi');
		$agenda_kategori=$this->input->post('xagenda_kategori');
		$mulai=$this->input->post('xmulai');
		$selesai=$this->input->post('xselesai');
		$tempat=$this->input->post('xtempat');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_agenda->simpan_agenda($agenda_kategori,$nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/agenda');
	}
	
	function update_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$nama_agenda=strip_tags($this->input->post('xnama_agenda'));
		$deskripsi=$this->input->post('xdeskripsi');
		$agenda_kategori=$this->input->post('xagenda_kategori');
		$mulai=$this->input->post('xmulai');
		$selesai=$this->input->post('xselesai');
		$tempat=$this->input->post('xtempat');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_agenda->update_agenda($kode,$agenda_kategori,$nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/agenda');
	}

	function hapus_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_agenda->hapus_agenda($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/agenda');
	}

}