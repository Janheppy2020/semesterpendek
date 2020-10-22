<?php
class M_makulsespek extends CI_Model{

	function get_all_makulsespek(){
		$hsl=$this->db->query("SELECT * FROM tbl_makul_sespek,tbl_makul,tbl_dosen,tbl_tahunakademik,tbl_ruangan WHERE tbl_makul_sespek.makul_id=tbl_makul.makul_id AND tbl_makul_sespek.dosen_id=tbl_dosen.dosen_id AND tbl_makul_sespek.tahunakademik_id=tbl_tahunakademik.tahunakademik_id AND tbl_makul_sespek.ruangan_id=tbl_ruangan.ruangan_id ORDER BY makulsespek_id DESC");
		return $hsl;
	}
	
	function get_all_makul_dosen(){
		$hsl=$this->db->query("SELECT * FROM tbl_makul_sespek, tbl_makul WHERE tbl_makul_sespek.makul_id=tbl_makul.makul_id ORDER BY makulsespek_id ASC");
		return $hsl;
	}
	function simpan_makulsespek($kode_makulsespek,$nama_makul,$nama_dosen,$semester_makulsespek,$tanggal_makulsespek,$jam_makulsespek,$nama_tahunakademik,$nama_ruangan,$status_makulsespek){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_makul_sespek(makulsespek_kode,makul_id,dosen_id,makulsespek_semester,makulsespek_tanggal,makulsespek_jam,tahunakademik_id,ruangan_id,makulsespek_status) VALUES ('$kode_makulsespek','$nama_makul','$nama_dosen','$semester_makulsespek','$tanggal_makulsespek','$jam_makulsespek','$nama_tahunakademik','$nama_ruangan','$status_makulsespek')");
		return $hsl;
	}
	function update_makulsespek($kode,$kode_makulsespek,$nama_makul,$nama_dosen,$semester_makulsespek,$tanggal_makulsespek,$jam_makulsespek,$nama_tahunakademik,$nama_ruangan,$status_makulsespek){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_makul_sespek SET makulsespek_kode='$kode_makulsespek', makul_id='$nama_makul', dosen_id='$nama_dosen', makulsespek_semester='$semester_makulsespek', makulsespek_tanggal='$tanggal_makulsespek', makulsespek_jam='$jam_makulsespek', tahunakademik_id='$nama_tahunakademik', ruangan_id='$nama_ruangan', makulsespek_status='$status_makulsespek' where makulsespek_id='$kode'");
		return $hsl;
	}
	function hapus_makulsespek($kode){
		$hsl=$this->db->query("DELETE FROM tbl_makul_sespek WHERE makulsespek_id='$kode'");
		return $hsl;
	}
} 