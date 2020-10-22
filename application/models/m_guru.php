<?php 
class M_guru extends CI_Model{

	function get_all_guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_dosen order by dosen_id DESC");
		return $hsl;
	}

	function simpan_guru($nidn,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$notelp,$alamat,$jurusan,$strata,$password,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_dosen (dosen_nidn,dosen_nama,dosen_jenkel,dosen_tmp_lahir,dosen_tgl_lahir,dosen_notelp,dosen_alamat,dosen_jurusan,dosen_strata,dosen_password,dosen_photo) VALUES ('$nidn','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$notelp','$alamat','$jurusan','$strata','$password','$photo')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nidn,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$notelp,$alamat,$jurusan,$strata,$password){
		$hsl=$this->db->query("INSERT INTO tbl_dosen (dosen_nidn,dosen_nama,dosen_jenkel,dosen_tmp_lahir,dosen_tgl_lahir,dosen_notelp,dosen_alamat,dosen_jurusan,dosen_strata) VALUES ('$nidn','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$notelp','$alamat','$jurusan','$strata','md5('$password')')");
		return $hsl;
	}

	function update_guru($kode,$nidn,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$notelp,$alamat,$jurusan,$strata,$password,$photo){
		$hsl=$this->db->query("UPDATE tbl_dosen SET dosen_nidn='$nidn',dosen_nama='$nama',dosen_jenkel='$jenkel',dosen_tmp_lahir='$tmp_lahir',dosen_tgl_lahir='$tgl_lahir',dosen_notelp='$notelp',dosen_alamat='$alamat', dosen_jurusan='$jurusan', dosen_strata='$strata', dosen_password='$password', dosen_photo='$photo' WHERE dosen_id='$kode'");
		return $hsl;
	}
	function update_guru_tanpa_img($kode,$nidn,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$notelp,$alamat,$jurusan,$strata,$password){
		$hsl=$this->db->query("UPDATE tbl_dosen SET dosen_nidn='$nidn',dosen_nama='$nama',dosen_jenkel='$jenkel',dosen_tmp_lahir='$tmp_lahir',dosen_tgl_lahir='$tgl_lahir',dosen_notelp='$notelp',dosen_alamat='$alamat',dosen_jurusan='$jurusan',dosen_strata='$strata',dosen_password='$password' WHERE dosen_id='$kode'");
		return $hsl;
	}
	function hapus_guru($kode){
		$hsl=$this->db->query("DELETE FROM tbl_dosen WHERE dosen_id='$kode'");
		return $hsl;
	}

	//front-end
	function guru(){
		$hsl=$this->db->query("select * from tbl_dosen order by dosen_id DESC");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("select * from tbl_dosen limit $offset,$limit");
		return $hsl;
	}

}