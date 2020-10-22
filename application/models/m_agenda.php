<?php
class M_agenda extends CI_Model{

	function get_all_agenda(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC");
		return $hsl;
	}
	function simpan_agenda($agenda_kategori,$nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_agenda(agenda_kategori,agenda_nama,agenda_deskripsi,agenda_mulai,agenda_selesai,agenda_tempat,agenda_waktu,agenda_keterangan,agenda_author) VALUES ('$agenda_kategori','$nama_agenda','$deskripsi','$mulai','$selesai','$tempat','$waktu','$keterangan','$author')");
		return $hsl;
	}
	function get_agenda_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_agenda where agenda_id='$kode'");
		return $hsl;
	}
	function update_agenda($kode,$agenda_kategori,$nama_agenda,$deskripsi,$mulai,$selesai,$tempat,$waktu,$keterangan){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_agenda SET agenda_kategori='$agenda_kategori',agenda_nama='$nama_agenda',agenda_deskripsi='$deskripsi',agenda_mulai='$mulai',agenda_selesai='$selesai',agenda_tempat='$tempat',agenda_waktu='$waktu',agenda_keterangan='$keterangan',agenda_author='$author' where agenda_id='$kode'");
		return $hsl;
	}
	function hapus_agenda($kode){
		$hsl=$this->db->query("DELETE FROM tbl_agenda WHERE agenda_id='$kode'");
		return $hsl;
	}

	//front-end
	function get_agenda_home(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC limit 3");
		return $hsl;
	}
	function agenda(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC");
		return $hsl;
	}
	function agenda_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_agenda ORDER BY agenda_id DESC limit $offset,$limit");
		return $hsl;
	}
	
	//Prosedur
	function get_prosedur_agenda_home(){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Prosedur' order by agenda_id DESC");
		return $hsl;
	}
	function agenda_prosedur(){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Prosedur' order by agenda_id DESC");
		return $hsl;
	}
	function agenda_prosedur_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Prosedur' order by agenda_id DESC limit $offset,$limit");
		return $hsl;
	}
	//Syarat
	function get_syarat_agenda_home(){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Syarat' order by agenda_id DESC");
		return $hsl;
	}
	function agenda_syarat(){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Syarat' order by agenda_id DESC");
		return $hsl;
	}
	function agenda_syarat_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Syarat' order by agenda_id DESC limit $offset,$limit");
		return $hsl;
	}
	
	//Jadwal
	function get_jadwal_agenda_home(){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Jadwal' order by agenda_id DESC");
		return $hsl;
	}
	function agenda_jadwal(){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Jadwal' order by agenda_id DESC");
		return $hsl;
	}
	function agenda_jadwal_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * from tbl_agenda where agenda_kategori='Jadwal' order by agenda_id DESC limit $offset,$limit");
		return $hsl;
	}


} 