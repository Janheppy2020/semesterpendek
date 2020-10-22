<?php
class M_laporanmahasiswa extends CI_Model{

	function get_data_barang(){
		$hsl=$this->db->query("SELECT kategori_id,barang_id,kategori_nama,barang_nama,barang_satuan,barang_harjul,barang_stok FROM tbl_kategori JOIN tbl_barang ON kategori_id=barang_kategori_id GROUP BY kategori_id,barang_nama");
		return $hsl;
	}

	function get_data_permahasiswa($mahasiswa){
		$hsl = $this->db->query("select * from tbl_registrasi left join tbl_mahasiswa on tbl_registrasi.mahasiswa_id=tbl_mahasiswa.mahasiswa_id join tbl_makul_sespek on tbl_registrasi.makulsespek_id=tbl_makul_sespek.makulsespek_id join tbl_makul on tbl_makul_sespek.makul_id=tbl_makul.makul_id join tbl_dosen on tbl_makul_sespek.dosen_id=tbl_dosen.dosen_id join tbl_ruangan on tbl_makul_sespek.ruangan_id=tbl_ruangan.ruangan_id where tbl_registrasi.mahasiswa_id='$mahasiswa' AND registrasi_status='New'");
		return $hsl;
	}
	
	function get_nama_mahasiswa(){
		$hsl=$this->db->query("SELECT mahasiswa_nama FROM tbl_mahasiswa limit 1");
		return $hsl;
	}
	
	function get_data_per_mahasiswa($mahasiswa){
		$hsl = $this->db->query("select * from tbl_registrasi left join tbl_mahasiswa on tbl_registrasi.mahasiswa_id=tbl_mahasiswa.mahasiswa_id join tbl_makul_sespek on tbl_registrasi.makulsespek_id=tbl_makul_sespek.makulsespek_id join tbl_makul on tbl_makul_sespek.makul_id=tbl_makul.makul_id join tbl_dosen on tbl_makul_sespek.dosen_id=tbl_dosen.dosen_id join tbl_ruangan on tbl_makul_sespek.ruangan_id=tbl_ruangan.ruangan_id where tbl_registrasi.mahasiswa_id='$mahasiswa' AND registrasi_status='New'");
		return $hsl;
	}
}