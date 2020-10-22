<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    //$query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
   // $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<section class="sidebar">
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li class="active">
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fa fa-users"></i> <span>Data Administrator</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Data Informasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i> Kategori Berita</a></li>
            <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-list"></i> List Berita</a></li>
            <li><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
            <li><a href="<?php echo base_url().'admin/agenda'?>"><i class="fa fa-calendar"></i> Data Jadwal Sem. Pendek</a></li>
            <li><a href="<?php echo base_url().'admin/pengumuman'?>"><i class="fa fa-volume-up"></i> Data Pengumuman</a></li>
          </ul>
        </li>
                
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Manajemen Kampus</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/makul'?>"><i class="fa fa-star-o"></i> Data Mata Kuliah</a></li>
            <li><a href="<?php echo base_url().'admin/kelas'?>"><i class="fa fa-star-o"></i> Data Kelas</a></li>
            <li><a href="<?php echo base_url().'admin/jurusan'?>"><i class="fa fa-star-o"></i> Data Jurusan</a></li>
            <li><a href="<?php echo base_url().'admin/tahunakademik'?>"><i class="fa fa-star-o"></i> Data Tahun Akademik</a></li>
            <li><a href="<?php echo base_url().'admin/ruangan'?>"><i class="fa fa-star-o"></i> Data Ruangan Belajar</a></li>            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Man. Dosen & Mahasiswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/guru'?>"><i class="fa fa-user"></i> Data Dosen</a></li>
            <li><a href="<?php echo base_url().'admin/siswa'?>"><i class="fa fa-user"></i> Data Mahasiswa</a></li>
          </ul>
        </li>
        
        <li>
          <!--<a href="<?php echo base_url().'admin/files'?>">-->
          <a href="<?php echo base_url().'admin/makulsespek'?>">
            <i class="fa fa-list"></i> <span>Mata Kuliah Sem. Pendek</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url().'admin/registrasi'?>">
            <i class="fa fa-exchange"></i> <span>Informasi Registrasi</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Buku Tamu</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

         <li>
          <a href="<?php echo base_url().'administrator/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
       
      </ul>
    </section>