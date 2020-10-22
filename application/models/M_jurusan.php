<?php
class M_jurusan extends CI_Model{

	function get_all_jurusan(){
		$hsl=$this->db->query("SELECT * FROM tbl_jurusan");
		return $hsl;
	}
	function simpan_jurusan($kode_jurusan, $nama_jurusan){
		$hsl=$this->db->query("insert into tbl_jurusan(jurusan_kode,jurusan_nama) values('$kode_jurusan','$nama_jurusan')");
		return $hsl;
	}
	function update_jurusan($kode,$kode_jurusan,$nama_jurusan){
		$hsl=$this->db->query("update tbl_jurusan set jurusan_kode='$kode_jurusan', jurusan_nama='$nama_jurusan' where jurusan_id='$kode'");
		return $hsl;
	}
	function hapus_jurusan($kode){
		$hsl=$this->db->query("delete from tbl_jurusan where jurusan_id='$kode'");
		return $hsl;
	}
	
	function get_jurusan_byid($jurusan_id){
		$hsl=$this->db->query("select * from tbl_jurusan where jurusan_id='$jurusan_id'");
		return $hsl;
	}

}