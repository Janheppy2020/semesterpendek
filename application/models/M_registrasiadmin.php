<?php
class M_registrasiadmin extends CI_Model{

	function get_all_registrasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_registrasi,tbl_mahasiswa,tbl_makul_sespek,tbl_makul,tbl_dosen,tbl_ruangan WHERE tbl_registrasi.mahasiswa_id=tbl_mahasiswa.mahasiswa_id AND tbl_registrasi.makulsespek_id=tbl_makul_sespek.makulsespek_id AND tbl_makul_sespek.makul_id=tbl_makul.makul_id AND tbl_makul_sespek.dosen_id=tbl_dosen.dosen_id AND tbl_makul_sespek.ruangan_id=tbl_ruangan.ruangan_id");
		return $hsl;
	}
	function simpan_registrasi($nama_mahasiswa,$nama_makul,$status_registrasi){
		$hsl=$this->db->query("insert into tbl_registrasi(mahasiswa_id,makulsespek_id,registrasi_status) values('$nama_mahasiswa','$nama_makul','$status_registrasi')");
		return $hsl;
	}
	function update_registrasi($kode,$status_registrasi){
		$hsl=$this->db->query("update tbl_registrasi set registrasi_status='$status_registrasi' where registrasi_id='$kode'");
		return $hsl;
	}
	function hapus_registrasi($kode){
		$hsl=$this->db->query("delete from tbl_registrasi where registrasi_id='$kode'");
		return $hsl;
	}
	
	function get_registrasi_byid($registrasi_id){
		$hsl=$this->db->query("select * from tbl_registrasi where registrasi_id='$registrasi_id'");
		return $hsl;
	}

}