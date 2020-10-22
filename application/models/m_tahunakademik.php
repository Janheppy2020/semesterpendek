<?php
class M_tahunakademik extends CI_Model{

	function get_all_tahunakademik(){
		$hsl=$this->db->query("SELECT * FROM tbl_tahunakademik order by tahunakademik_id DESC");
		return $hsl;
	}
	function simpan_tahunakademik($tahunakademik_nama){
		$hsl=$this->db->query("insert into tbl_tahunakademik(tahunakademik_nama) values('$tahunakademik_nama')");
		return $hsl;
	}
	function update_tahunakademik($kode,$tahunakademik_nama){
		$hsl=$this->db->query("update tbl_tahunakademik set tahunakademik_nama='$tahunakademik_nama' where tahunakademik_id='$kode'");
		return $hsl;
	}
	function hapus_tahunakademik($kode){
		$hsl=$this->db->query("delete from tbl_tahunakademik where tahunakademik_id='$kode'");
		return $hsl;
	}
	
	function get_tahunakademik_byid($tahunakademik_id){
		$hsl=$this->db->query("select * from tbl_tahunakademik where tahunakademik_id='$tahunakademik_id'");
		return $hsl;
	}

}