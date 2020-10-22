<?php
class M_kelas extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas");
		return $hsl;
	}
	function simpan_kelas($kelas){
		$hsl=$this->db->query("insert into tbl_kelas(kelas_nama) values('$kelas')");
		return $hsl;
	}
	function update_kelas($kode,$kelas){
		$hsl=$this->db->query("update tbl_kelas set kelas_nama='$kelas' where kelas_id='$kode'");
		return $hsl;
	}
	function hapus_kelas($kode){
		$hsl=$this->db->query("delete from tbl_kelas where kelas_id='$kode'");
		return $hsl;
	}
	
	function get_kelas_byid($kelas_id){
		$hsl=$this->db->query("select * from tbl_kelas where kelas_id='$kelas_id'");
		return $hsl;
	}

}