<?php
class M_loginmahasiswa extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("select*from tbl_mahasiswa where mahasiswa_nim='$u' and mahasiswa_password='$p'");
        return $hasil;
    }
  
}
