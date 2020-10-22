<?php
class M_makulsespekmahasiswa extends CI_Model{

	function get_all_makulsespek_mahasiswa(){
		$hsl=$this->db->query("SELECT * FROM tbl_makul_sespek,tbl_makul,tbl_dosen,tbl_tahunakademik,tbl_ruangan WHERE makulsespek_status='Active' AND tbl_makul_sespek.makul_id=tbl_makul.makul_id AND tbl_makul_sespek.dosen_id=tbl_dosen.dosen_id AND tbl_makul_sespek.ruangan_id=tbl_ruangan.ruangan_id AND tbl_makul_sespek.tahunakademik_id=tbl_tahunakademik.tahunakademik_id ORDER BY makulsespek_semester ASC");
		return $hsl;
	}
} 