<?php
class M_logindosen extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("select*from tbl_dosen where dosen_nidn='$u' and dosen_password='$p'");
        return $hasil;
    }
  
}
