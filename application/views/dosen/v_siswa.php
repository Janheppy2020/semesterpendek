<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sekolah Tinggi Manajemen dan Informatika Komputer (STMIK IBBI) Medan | Data Mahasiswa</title>
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
        Data Mahasiswa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Mahasiswa</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                	<th>Photo</th>
          			<th>NIM</th>
          			<th>Nama</th>
          			<th>Kelamin</th>
                    <th>Tpt/Tgl. Lahir</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th style="text-align:right;" width="10%">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $id=$i['mahasiswa_id'];
          					   $nim=$i['mahasiswa_nim'];
          					   $nama=$i['mahasiswa_nama'];
          					   $jenkel=$i['mahasiswa_jenkel'];
							   $tmp_lahir=$i['mahasiswa_tmp_lahir'];
							   $tgl_lahir=$i['mahasiswa_tgl_lahir'];
          					   $kelas_id=$i['kelas_id'];
                       		   $kelas_nama=$i['kelas_nama'];
							   $jurusan_id=$i['jurusan_id'];
                       		   $jurusan_nama=$i['jurusan_nama'];
							   $notelp=$i['mahasiswa_notelp'];
							   $alamat=$i['mahasiswa_alamat'];
							   $password=$i['mahasiswa_password'];
                       		   $photo=$i['mahasiswa_photo'];

                    ?>
                <tr>
                  <?php if(empty($photo)):?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
                  <?php else:?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$photo;?>"></td>
                  <?php endif;?>
                  <td><?php echo $nim;?></td>
        				  <td><?php echo $nama;?></td>
                  <?php if($jenkel=='L'):?>
                  <td>Laki-Laki</td>
                  <?php else:?>
                  <td>Perempuan</td>
                  <?php endif;?>
                  <td><?php echo $tmp_lahir;?> / <?php echo $tgl_lahir;?></td>
                  <td><?php echo $kelas_nama;?></td>
                  <td><?php echo $jurusan_nama;?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
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
  <?php $this->load->view('admin/v_footer'); ?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

    <!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Mahasiswa STMIK IBBI Medan</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/siswa/simpan_siswa'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">NIM</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnim" class="form-control" id="inputUserName" placeholder="NIM" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Mahasiswa</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmp_lahir" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="xtgl_lahir" class="form-control" id="inputUserName"  required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Kelas</label>
                                        <div class="col-sm-7">
                                          <select name="xkelas" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kelas->result_array() as $k) {
                                                  $id_kelas=$k['kelas_id'];
                                                  $nm_kelas=$k['kelas_nama'];

                                            ?>
                                            <option value="<?php echo $id_kelas;?>"><?php echo $nm_kelas;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Jurusan</label>
                                        <div class="col-sm-7">
                                          <select name="xjurusan" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($jur->result_array() as $k) {
                                                  $jurusan_id=$k['jurusan_id'];
                                                  $jurusan_nama=$k['jurusan_nama'];

                                            ?>
                                            <option value="<?php echo $jurusan_id;?>"><?php echo $jurusan_nama;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">No. Telp/HP</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnotelp" class="form-control" id="inputUserName" placeholder="085358331587" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Alamat Mahasiswa</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Jln. Djamin Ginting Gang Keluarga No. 4B Padang Bulan Medan" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Password Mahasiswa</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="xpassword" class="form-control" id="inputUserName" placeholder="***********" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto" required/>
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

  <!--Modal Edit Album-->
		<?php foreach ($data->result_array() as $i) :
            $id=$i['mahasiswa_id'];
            $nim=$i['mahasiswa_nim'];
            $nama=$i['mahasiswa_nama'];
            $jenkel=$i['mahasiswa_jenkel'];
            $tmp_lahir=$i['mahasiswa_tmp_lahir'];
            $tgl_lahir=$i['mahasiswa_tgl_lahir'];
            $kelas_id=$i['kelas_id'];
            $kelas_nama=$i['kelas_nama'];
            $jurusan_id=$i['jurusan_id'];
            $jurusan_nama=$i['jurusan_nama'];
            $notelp=$i['mahasiswa_notelp'];
            $alamat=$i['mahasiswa_alamat'];
            $password=$i['mahasiswa_password'];
            $photo=$i['mahasiswa_photo'];
        ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data Mahasiswa</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/siswa/update_siswa'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">NIM</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnim" value="<?php echo $nim;?>" class="form-control" id="inputUserName" placeholder="NIM" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Mahasiswa</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                          <?php if($jenkel=='L'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php endif;?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtmp_lahir" value="<?php echo $tmp_lahir;?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="xtgl_lahir" value="<?php echo $tgl_lahir;?>" class="form-control" id="inputUserName"  required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Kelas</label>
                                        <div class="col-sm-7">
                                          <select name="xkelas" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kelas->result_array() as $k) {
                                                  $kelas_id=$k['kelas_id'];
                                                  $kelas_nama=$k['kelas_nama'];

                                            ?>
                                            <?php if($kelas_id==$kelas_id):?>
                                              <option value="<?php echo $kelas_id;?>" selected><?php echo $kelas_nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $kelas_id;?>"><?php echo $kelas_nama;?></option>
                                            <?php endif;?>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Jurusan</label>
                                        <div class="col-sm-7">
                                          <select name="xjurusan" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($jur->result_array() as $k) {
                                                  $jurusan_id=$k['jurusan_id'];
                                                  $jurusan_nama=$k['jurusan_nama'];

                                            ?>
                                            <?php if($jurusan_id==$jurusan_id):?>
                                              <option value="<?php echo $jurusan_id;?>" selected><?php echo $jurusan_nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $jurusan_id;?>"><?php echo $jurusan_nama;?></option>
                                            <?php endif;?>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">No. Telp/HP</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnotelp" value="<?php echo $notelp;?>" class="form-control" id="inputUserName" placeholder="085358331587" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Alamat Mahasiswa</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xalamat" value="<?php echo $alamat;?>" class="form-control" id="inputUserName" placeholder="Jln. Djamin Ginting Gang Keluarga No. 4B Padang Bulan Medan" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Password Mahasiswa</label>
                                        <div class="col-sm-7">
                                            <input type="password" value="<?php echo $password;?>" name="xpassword" class="form-control" id="inputUserName" placeholder="***********" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto" required/>
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
  <?php endforeach;?>
	<!--Modal Edit Album-->

	<?php foreach ($data->result_array() as $i) :
              $id=$i['mahasiswa_id'];
              $nim=$i['mahasiswa_nim'];
              $nama=$i['mahasiswa_nama'];
              $jenkel=$i['mahasiswa_jenkel'];
              $kelas_id=$i['kelas_id'];
              $photo=$i['mahasiswa_photo'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Mahasiswa</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/siswa/hapus_siswa'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                     <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus Mahasiswa <b><?php echo $nama;?></b> ?</p>

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
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Mahasiswa Berhasil disimpan ke database.",
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
                    text: "Data Mahasiswa berhasil di update",
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
                    text: "Data Mahasiswa Berhasil dihapus.",
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
