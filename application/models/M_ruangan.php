<?php
class M_ruangan extends CI_Model{

	function get_all_ruangan(){
		$hsl=$this->db->query("SELECT * FROM tbl_ruangan ORDER BY ruangan_id DESC");
		return $hsl;
	}
	function simpan_ruangan($kode_ruangan,$nama_ruangan,$lantai_ruangan){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_ruangan(ruangan_kode,ruangan_nama,ruangan_lantai) VALUES ('$kode_ruangan','$nama_ruangan','$lantai_ruangan')");
		return $hsl;
	}
	function update_ruangan($kode,$kode_ruangan,$nama_ruangan,$lantai_ruangan){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_ruangan SET ruangan_kode='$kode_ruangan',ruangan_nama='$nama_ruangan',ruangan_lantai='$lantai_ruangan' where ruangan_id='$kode'");
		return $hsl;
	}
	function hapus_ruangan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_ruangan WHERE ruangan_id='$kode'");
		return $hsl;
	}
} 