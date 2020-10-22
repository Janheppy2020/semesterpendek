<?php
class Makulsespek extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_makulsespek');
		$this->load->model('m_makul');
		$this->load->model('m_guru');
		$this->load->model('m_ruangan');
		$this->load->model('m_tahunakademik');
		$this->load->library('upload');
	}


	function index(){
		$data['makul']=$this->m_makul->get_all_makul();
		$data['makulses']=$this->m_makulsespek->get_all_makul_dosen();
		$data['makul2']=$this->m_makul->get_all_makul();
		$data['ruang']=$this->m_ruangan->get_all_ruangan();
		$data['dosen']=$this->m_guru->get_all_guru();
		$data['tahunakademik']=$this->m_tahunakademik->get_all_tahunakademik();
		$data['data']=$this->m_makulsespek->get_all_makulsespek();
		$this->load->view('admin/v_makulsespek',$data);
		
		
	}

	function simpan_makulsespek(){
		$kode_makulsespek=strip_tags($this->input->post('xkode_makulsespek'));
		$nama_makul=strip_tags($this->input->post('xnama_makul'));
		$nama_dosen=$this->input->post('xnama_dosen');
		$semester_makulsespek=$this->input->post('xsemester_makulsespek');
		$tanggal_makulsespek=$this->input->post('xtanggal_makulsespek');
		$jam_makulsespek=$this->input->post('xjam_makulsespek');
		$nama_tahunakademik=$this->input->post('xnama_tahunakademik');
		$nama_ruangan=$this->input->post('xnama_ruangan');
		$status_makulsespek=$this->input->post('xstatus_makulsespek');

		$this->m_makulsespek->simpan_makulsespek($kode_makulsespek,$nama_makul,$nama_dosen,$semester_makulsespek,$tanggal_makulsespek,$jam_makulsespek,$nama_tahunakademik,$nama_ruangan,$status_makulsespek);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/makulsespek');
	}

	function update_makulsespek(){
		$kode=strip_tags($this->input->post('kode'));
		$kode_makulsespek=strip_tags($this->input->post('xkode_makulsespek'));
		$nama_makul=strip_tags($this->input->post('xnama_makul'));
		$nama_dosen=$this->input->post('xnama_dosen');
		$semester_makulsespek=$this->input->post('xsemester_makulsespek');
		$tanggal_makulsespek=$this->input->post('xtanggal_makulsespek');
		$jam_makulsespek=$this->input->post('xjam_makulsespek');
		$nama_tahunakademik=$this->input->post('xnama_tahunakademik');
		$nama_ruangan=$this->input->post('xnama_ruangan');
		$status_makulsespek=$this->input->post('xstatus_makulsespek');

		$this->m_makulsespek->update_makulsespek($kode,$kode_makulsespek,$nama_makul,$nama_dosen,$semester_makulsespek,$tanggal_makulsespek,$jam_makulsespek,$nama_tahunakademik,$nama_ruangan,$status_makulsespek);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/makulsespek');
	}
	function hapus_makulsespek(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_makulsespek->hapus_makulsespek($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/makulsespek');
	}

}