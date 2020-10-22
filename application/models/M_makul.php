<?php
class M_makul extends CI_Model{

	function get_all_makul(){
		$hsl=$this->db->query("SELECT * FROM tbl_makul ORDER BY makul_id ASC");
		return $hsl;
	}
	function simpan_makul($kode_makul,$nama_makul,$sks_makul){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_makul(makul_kode,makul_nama,makul_sks) VALUES ('$kode_makul','$nama_makul','$sks_makul')");
		return $hsl;
	}
	function update_makul($kode,$kode_makul,$nama_makul,$sks_makul){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_makul SET makul_kode='$kode_makul',makul_nama='$nama_makul',makul_sks='$sks_makul' where makul_id='$kode'");
		return $hsl;
	}
	function hapus_makul($kode){
		$hsl=$this->db->query("DELETE FROM tbl_makul WHERE makul_id='$kode'");
		return $hsl;
	}
	
	function tampil_makul(){
		$hsl=$this->db->query("select * from tbl_makul order by makul_id desc");
		return $hsl;
	}
	function get_makul_byid($makul_id){
		$hsl=$this->db->query("select * from tbl_makul where makul_id='$makul_id'");
		return $hsl;
	}
} 