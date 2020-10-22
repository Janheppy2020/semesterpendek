<?php 
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT * from tbl_mahasiswa,tbl_kelas,tbl_jurusan where tbl_mahasiswa.kelas_id=tbl_kelas.kelas_id AND tbl_mahasiswa.jurusan_id=tbl_jurusan.jurusan_id");
		return $hsl;
	}

	function simpan_siswa($nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_mahasiswa (mahasiswa_nim,mahasiswa_nama,mahasiswa_jenkel,mahasiswa_tmp_lahir,mahasiswa_tgl_lahir,kelas_id,jurusan_id,mahasiswa_notelp,mahasiswa_alamat,mahasiswa_password,mahasiswa_photo) VALUES ('$nim','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$kelas','$jurusan','$notelp','$alamat','$password','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password){
		$hsl=$this->db->query("INSERT INTO tbl_mahasiswa (mahasiswa_nim,mahasiswa_nama,mahasiswa_jenkel,mahasiswa_tmp_lahir,mahasiswa_tpt_lahir,kelas_id,jurusan_id,mahasiswa_notelp,mahasiswa_alamat,mahasiswa_password) VALUES ('$nim','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$kelas','$jurusan','$notelp','$alamat','$password')");
		return $hsl;
	}

	function update_siswa($kode,$nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password,$photo){
		$hsl=$this->db->query("UPDATE tbl_mahasiswa SET mahasiswa_nim='$nim',mahasiswa_nama='$nama',mahasiswa_jenkel='$jenkel',mahasiswa_tmp_lahir='$tmp_lahir',mahasiswa_tgl_lahir='$tgl_lahir',kelas_id='$kelas',jurusan_id='$jurusan',mahasiswa_notelp='$notelp',mahasiswa_alamat='$alamat',mahasiswa_password='$password',mahasiswa_photo='$photo' WHERE mahasiswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nim,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$kelas,$jurusan,$notelp,$alamat,$password){
		$hsl=$this->db->query("UPDATE tbl_mahasiswa SET mahasiswa_nim='$nim',mahasiswa_nama='$nama',mahasiswa_jenkel='$jenkel',mahasiswa_tmp_lahir='$tmp_lahir',mahasiswa_tgl_lahir='$tgl_lahir',kelas_id='$kelas',jurusan_id='$jurusan',mahasiswa_notelp='$notelp',mahasiswa_alamat='$alamat',mahasiswa_password='$password' WHERE mahasiswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_mahasiswa WHERE mahasiswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT * from tbl_mahasiswa,tbl_kelas,tbl_jurusan where tbl_mahasiswa.kelas_id=tbl_kelas.kelas_id AND tbl_mahasiswa.jurusan_id=tbl_jurusan.jurusan_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * from tbl_mahasiswa,tbl_kelas,tbl_jurusan where tbl_mahasiswa.kelas_id=tbl_kelas.kelas_id AND tbl_mahasiswa.jurusan_id=tbl_jurusan.jurusan_id limit $offset,$limit");
		return $hsl;
	}

}