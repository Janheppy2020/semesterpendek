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
    $this->load->view('admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php $this->load->view('admin/v_menu'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi Registrasi M.K Semester Pendek
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
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-print"></span> Cetak Bukti Pendaftaran</a><p>&nbsp;</p>
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
                    <th>Dosen Pengampu</th>
                    <th>Status</th>
                    <th style="text-align:right;" width="10%">Aksi</th>
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
					   $stsregis=$i['registrasi_status'];

                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $tglregis;?></td>
				  <td><?php echo $namhas;?></td>
                  <td><?php echo $nmmakul;?></td>
                  <td align="center">Semester <?php echo $sem;?></td>
                  <td align="center"><?php echo $tglmak;?></td>
                  <td align="center"><?php echo $jammak;?></td>
                  <td><?php echo $namdos;?></td>
                  <td align="center"><?php echo $stsregis;?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $registrasi_id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $registrasi_id;?>"><span class="fa fa-trash"></span></a>
                  </td>
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
                        <h4 class="modal-title" id="myModalLabel">Pilih Nama Mahasiswa</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'mahasiswa/laporan_mahasiswa/lap_registrasi'?>" method="post" enctype="multipart/form-data" target="_blank">
                    <div class="modal-body">
                            <div class="form-group">
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
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php foreach ($data->result_array() as $i) :
      	$registrasi_id=$i['registrasi_id'];
   		$tglregis=$i['registrasi_tanggal'];
		$namhas=$i['mahasiswa_nama'];
		$nmmakul=$i['makul_nama'];
		$sem=$i['makulsespek_semester'];
		$tglmak=$i['makulsespek_tanggal'];
		$jammak=$i['makulsespek_jam'];
		$namdos=$i['dosen_nama'];
		$stsregis=$i['registrasi_status'];
		$registrasi_status=$i['registrasi_status'];
    ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $registrasi_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Status Registrasi Setelah Pembayaran Biaya Administrasi</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/registrasi/update_registrasi'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $registrasi_id;?>">
                            <div class="form-group">
                              	<label for="inputUserName" class="col-sm-4 control-label">Status Registrasi</label>
                             	<div class="col-sm-7">
                         			<select class="form-control" name="xstatus_registrasi" required>
                                    	<?php if($registrasi_status=='New'):?>
                                        <option selected>New</option>
                                        <option>Diterima</option>
                                        <option>Ditolak</option>
                                    <?php elseif($registrasi_status=='Diterima'):?>
                                        <option>New</option>
                                        <option selected>Diterima</option>
                                        <option>Selesai Diperbaiki</option>
                                    <?php elseif($registrasi_status=='Ditolak'):?>
                                        <option>New</option>
                                        <option>Diterima</option>
                                        <option selected>Ditolak</option>
                                    <?php endif;?>
                              		</select>
                            	</div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>

	<?php foreach ($data->result_array() as $i) :
     $registrasi_id=$i['registrasi_id'];
   		$tglregis=$i['registrasi_tanggal'];
		$namhas=$i['mahasiswa_nama'];
		$nmmakul=$i['makul_nama'];
		$sem=$i['makulsespek_semester'];
		$tglmak=$i['makulsespek_tanggal'];
		$jammak=$i['makulsespek_jam'];
		$namdos=$i['dosen_nama'];
		$stsregis=$i['registrasi_status'];
		$registrasi_status=$i['registrasi_status'];
	?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $registrasi_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Registrasi Mahasiswa</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/registrasi/hapus_registrasi'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $registrasi_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus registrasi atas nama mahasiswa <b><?php echo $namhas;?></b> ?</p>

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
