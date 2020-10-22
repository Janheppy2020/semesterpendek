<!--Counter Inbox-->
<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sekolah Tinggi Manajemen dan Informatika Komputer (STMIK IBBI) Medan | Registrasi Semester Pendek</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('mahasiswa/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php $this->load->view('mahasiswa/v_menu'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrasi M.K Semester Pendek
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kelas</a></li>
        <li class="active">Registrasi M.K Semester Pendek</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Registrasi</a>
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#ModalEdit"><span class="fa fa-print"></span> Cetak Bukti Pendaftaran</a><p>&nbsp;</p>
              <b><font color="#FF0000">WARNING .... !!!</font></b>
              <br>
              <ul>
              	<li>Sebelum Memilih Mata Kuliah Silahkan Di Lihat Betul-betul daftar mata kuliah semester pendek yang sudah di Keluarkan oleh Pihak Akademik, Lihat <a href="<?php echo base_url().'mahasiswa/makulsespek'?>">Disini</a></li>
                <li>Setelah Melihat Daftar Mata Kuliah baru Anda klik tombol "Add Registrasi"</li>
                <li>Data Yang Anda Kirim Tidak Bisa Anda Edit dan Anda Hapus, Kecuali bagian Akademik yang bisa menghapusnya. Jadi, silahkan pilih mata kuliah semester pendek dengan benar dan sesuai dengan kemampuan Anda</li>
              </ul>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:10px;">
                <thead>
                <tr>
					<th style="width:5px;">#</th>
                    <th>Tgl. Regis</th>
                    <th>Nama Mahasiswa</th>
                    <th>Mata Kuliah</th>
                    <th>Semester</th>
                    <th>Tgl</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                    <th>Dosen Pengampu</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
					foreach ($data->result_array() as $i) :
					   $no++;
                       $registrasi_id=$i['registrasi_id'];
                       $tglregis=$i['registrasi_tanggal'];
					   $namhas=$i['mahasiswa_nama'];
					   $nmmakul=$i['makul_nama'];
					   $sem=$i['makulsespek_semester'];
					   $tglmak=$i['makulsespek_tanggal'];
					   $jammak=$i['makulsespek_jam'];
					   $namdos=$i['dosen_nama'];
					   $ruangnam=$i['ruangan_nama'];

                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $tglregis;?></td>
				  <td><?php echo $namhas;?></td>
                  <td><?php echo $nmmakul;?></td>
                  <td align="center">Semester <?php echo $sem;?></td>
                  <td align="center"><?php echo $tglmak;?></td>
                  <td align="center"><?php echo $jammak;?></td>
                  <td align="center"><?php echo $ruangnam;?></td>
                  <td><?php echo $namdos;?></td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('mahasiswa/v_footer'); ?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Mata Kuliah Yang Ingin di Ambil</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'mahasiswa/registrasi/simpan_registrasi'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                 		<div class="form-group">
                        	<input type="hidden" name="xnama_mahasiswa" value="<?php echo $this->session->userdata('idadmin');?>">
              				<input type="hidden" name="xstatus_registrasi" value="New">
            				<label for="inputUserName" class="col-sm-4 control-label">Nama Mata Kuliah</label>
                       		<div class="col-sm-7">
                   				<select name="xnama_makul" class="form-control" required>
                         			<option value="">-Pilih Mata Kuliah Semester Pendek-</option>
                          			<?php
                              			foreach ($makul_sespek_mahasiswa->result_array() as $k) {
                           				$makulsespek_id=$k['makulsespek_id'];
                                    	$nm_makul=$k['makul_nama'];
										$nm_dosen=$k['dosen_nama'];
										$nm_semester=$k['makulsespek_semester'];
										$tgl_makulsespek=$k['makulsespek_tanggal'];
										$jam_makulsespek=$k['makulsespek_jam'];
                             		?>
                       				<option value="<?php echo $makulsespek_id;?>"><?php echo $nm_makul;?> (<?php echo $nm_dosen;?>- Sem : <?php echo $nm_semester;?>-<?php echo $tgl_makulsespek;?>-<?php echo $jam_makulsespek;?>)</option>
                                  	<?php } ?>
                         		</select>
             				</div>
                 		</div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Pilih Sesuai Dengan Kebutuhan Nama Anda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'mahasiswa/laporan_mahasiswa/lap_registrasi'?>" method="post" enctype="multipart/form-data" target="_blank">
                    <div class="modal-body">

                 		<div class="form-group">
                        	<input type="hidden" name="xnama_mahasiswa" value="<?php echo $this->session->userdata('idadmin');?>">
              				<input type="hidden" name="xstatus_registrasi" value="New">
            				<label for="inputUserName" class="col-sm-4 control-label">Nama Mahasiswa</label>
                       		<div class="col-sm-7">
                   				<select class="form-control select2" name="mahasiswa_id" style="width: 100%;" required>
                                      <option value="">-Pilih Nama Anda Disini-</option>
                                      <?php
                                        foreach ($mahasis->result_array() as $i) :
                                           $no++;
                                           $mahasiswa_id=$i['mahasiswa_id'];
                                           $mahasiswa_nama=$i['mahasiswa_nama'];
                    
                                        ?>
                                      <option value="<?php echo $mahasiswa_id;?>"><?php echo $mahasiswa_nama;?></option>
                                      <?php endforeach;?>
                                    </select>
             				</div>
                 		</div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Cetak</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

	<?php foreach ($data->result_array() as $i) :
              $registrasi_id=$i['registrasi_id'];
              $registrasi_tanggal=$i['registrasi_tanggal'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $registrasi_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/kelas/hapus_kelas'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $registrasi_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Nama Mata Kuliah ini <b><?php echo $registrasi_tanggal;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>




<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Kelas Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Kelas berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Kelas Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>
