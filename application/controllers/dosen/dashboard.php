<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('dossen');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
	}
	function index(){
		if($this->session->userdata('akses')=='11'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$this->load->view('dosen/v_dashboard',$x);
		}else{
			redirect('dossen');
		}
	
	}
	
}