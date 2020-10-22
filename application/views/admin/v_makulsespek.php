<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
   // $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
   // $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sekolah Tinggi Manajemen dan Informatika Komputer (STMIK IBBI) Medan | Mata Kuliah Semester Pendek</title>
  <?php
        $b=$data->row_array();
    ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
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
        Data Mata Kuliah Semester Pendek
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mata Kuliah Semester Pendek</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Mata Kuliah Semester Pendek</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:11px;">
                <thead>
                <tr>
					<th style="width:5px;">#</th>
                    <th>Kode</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Nama Dosen</th>
                    <th>T.A</th>
                    <th>Semester</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                    <th>Status</th>
                    <th style="text-align:right;" width="10%">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
					   $makulsespek_id=$i['makulsespek_id'];
					   $makulsespek_kode=$i['makulsespek_kode'];
                       $makulnama=$i['makul_nama'];
                       $makul_sks=$i['makul_sks'];
					   $dosennama=$i['dosen_nama'];
					   $tahunakademiknama=$i['tahunakademik_nama'];
					   $makulsespek_semester=$i['makulsespek_semester'];
					   $makulsespek_tanggal=$i['makulsespek_tanggal'];
					   $makulsespek_jam=$i['makulsespek_jam'];
					   $makulsespek_status=$i['makulsespek_status'];
					   $namruang=$i['ruangan_nama'];
                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $makulsespek_kode;?></td>
                  <td><?php echo $makulnama;?></td>
                  <td><?php echo $makul_sks;?> SKS</td>
                  <td><?php echo $dosennama;?></td>
                  <td><?php echo $tahunakademiknama;?></td>
                  <td>Semester <?php echo $makulsespek_semester;?></td>
                  <td align="center"><?php echo $makulsespek_tanggal;?></td>
                  <td align="center"><?php echo $makulsespek_jam;?> WIB</td>
                  <td align="center"><?php echo $namruang;?></td>
                  <td align="center"><?php echo $makulsespek_status;?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $makulsespek_id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $makulsespek_id;?>"><span class="fa fa-trash"></span></a>
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
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Mata Kuliah Semester Pendek</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/makulsespek/simpan_makulsespek'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Komak. Sem. Pendek</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xkode_makulsespek" class="form-control" id="inputUserName" placeholder="Kode Mata Kuliah Semester Pendek" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Mata Kuliah</label>
                                <div class="col-sm-7">
                                  <select name="xnama_makul" class="form-control select2" required>
                                		<option value="">-Pilih Mata Kuliah-</option>
                                            <?php
                                                foreach ($makul->result_array() as $k) :
                                                  $makul_id=$k['makul_id'];
                                                  $makul_nama=$k['makul_nama'];
												  $makul_kode=$k['makul_kode'];

                                            ?>
                               			<option value="<?php echo $makul_id;?>"><?php echo $makul_kode;?> - <?php echo $makul_nama;?></option>
                                		<?php endforeach;?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Dosen Pengampu</label>
                                <div class="col-sm-7">
                                  <select name="xnama_dosen" class="form-control select2" required>
                                		<option value="">-Pilih Nama Dosen Pengampu-</option>
                                            <?php
                                                foreach ($dosen->result_array() as $k) :
                                                  $dosen_id=$k['dosen_id'];
                                                  $dosen_nama=$k['dosen_nama'];

                                            ?>
                               			<option value="<?php echo $dosen_id;?>"><?php echo $dosen_nama;?></option>
                                		<?php endforeach;?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                              	<label for="inputUserName" class="col-sm-4 control-label">Untuk Semester.?</label>
                             	<div class="col-sm-7">
                         			<select class="form-control select2" name="xsemester_makulsespek" style="width: 100%;" required>
                                      <option value="">-Pilih Semester-</option>
                                      <option value="I">Semester I</option>
                                      <option value="II">Semester II</option>
                                      <option value="III">Semester III</option>
                                      <option value="IV">Semester IV</option>
                                      <option value="V">Semester V</option>
                                      <option value="VI">Semester VI</option>
                                      <option value="VII">Semester VII</option>
                                      <option value="VIII">Semester VIII</option>
                                    </select>
                            	</div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tgl. Pelaksanaan</label>
                                <div class="col-sm-7">
                                  <input type="date" name="xtanggal_makulsespek" class="form-control" id="inputUserName" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jam Pelaksanaan</label>
                                <div class="col-sm-7">
                                  <input type="time" name="xjam_makulsespek" class="form-control" id="inputUserName" placeholder="08:00:PM" required>
                                  <br><small>08:00 AM = Jam 8 Pagi</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tahun Akademik</label>
                                <div class="col-sm-7">
                                  <select name="xnama_tahunakademik" class="form-control select2" required>
                                		<option value="">- Pilih Tahun Akadmeik -</option>
                                            <?php
                                                foreach ($tahunakademik->result_array() as $k) :
                                                  $tahunakademik_id=$k['tahunakademik_id'];
                                                  $tahunakademik_nama=$k['tahunakademik_nama'];

                                            ?>
                               			<option value="<?php echo $tahunakademik_id;?>"><?php echo $tahunakademik_nama;?></option>
                                		<?php endforeach;?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Dosen Pengampu</label>
                                <div class="col-sm-7">
                                  <select name="xnama_ruangan" class="form-control select2" required>
                                		<option value="">-Pilih Nama Ruangan-</option>
                                            <?php
                                                foreach ($ruang->result_array() as $k) :
                                                  $ruangan_id=$k['ruangan_id'];
                                                  $ruangan_nama=$k['ruangan_nama'];

                                            ?>
                               			<option value="<?php echo $ruangan_id;?>"><?php echo $ruangan_nama;?></option>
                                		<?php endforeach;?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Status Tampil</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Active" name="xstatus_makulsespek" checked>
                                                <label for="inlineRadio1"> Tampil </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Non-Active" name="xstatus_makulsespek">
                                                <label for="inlineRadio2"> Tidak Tampil </label>
                                            </div>
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
              	$makulsespek_id=$i['makulsespek_id'];
				$makulsespek_kode=$i['makulsespek_kode'];
				$makulid=$i['makul_id'];
            	$makulnama=$i['makul_nama'];
         		$makul_sks=$i['makul_sks'];
				$dosenid=$i['dosen_id'];
				$dosennama=$i['dosen_nama'];
				$makulsespek_tanggal=$i['makulsespek_tanggal'];
				$makulsespek_jam=$i['makulsespek_jam'];
				$tahunakademikid=$i['tahunakademik_id'];
				$tahunakademiknama=$i['tahunakademik_nama'];
				$makulsespek_semester=$i['makulsespek_semester'];
				$makulsespek_status=$i['makulsespek_status'];
				$ruanganid=$i['ruangan_id'];
				$ruangananama=$i['ruangan_nama'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $makulsespek_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Mata Kuliah Semester Pendek</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/makulsespek/update_makulsespek'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Komak. Sem. Pendek</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $makulsespek_id;?>">
                                  <input type="text" name="xkode_makulsespek" class="form-control" id="inputUserName" value="<?php echo $makulsespek_kode;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Mata Kuliah</label>
                                <div class="col-sm-7">
                                   <select class="form-control select2" name="xnama_makul" style="width: 100%;" required>
                                     	<option value="">-Pilih Nama Mata Kuliah-</option>
                                            <?php
                                                foreach ($makul->result_array() as $k) {
                                                  $makul_id=$k['makul_id'];
                                                  $makul_nama=$k['makul_nama'];
                                            ?>
                               			<?php if($makul_id==$makulid):?>
                                              <option value="<?php echo $makul_id;?>" selected><?php echo $makul_nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $makul_id;?>"><?php echo $makul_nama;?></option>
                                            <?php endif;?>
                                		<?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Dosen Pengampu</label>
                                <div class="col-sm-7">
                                  <select name="xnama_dosen" class="form-control" required>
                                  	<option value="">-Pilih Nama Dosen Pengampu-</option>
                                            <?php
                                                foreach ($dosen->result_array() as $k) {
                                                  $dosen_id=$k['dosen_id'];
                                                  $dosen_nama=$k['dosen_nama'];

                                            ?>
                               			<?php if($dosen_id==$dosenid):?>
                                              <option value="<?php echo $dosen_id;?>" selected><?php echo $dosen_nama;?></option>
                                            <?php else:?>
                                              <option value="<?php echo $dosen_id;?>"><?php echo $dosen_nama;?></option>
                                            <?php endif;?>
                                		<?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                              	<label for="inputUserName" class="col-sm-4 control-label">Untuk Semester.?</label>
                             	<div class="col-sm-7">
                         			<select class="form-control select2" name="xsemester_makulsespek" style="width: 100%;" required>
                                      <?php if($makulsespek_semester=='I'):?>
                                          <option value="">-Pilih Semester-</option>
                                          <option value="I" selected>Semester I</option>
                                          <option value="II">Semester II</option>
                                          <option value="III">Semester III</option>
                                          <option value="IV">Semester IV</option>
                                          <option value="V">Semester V</option>
                                          <option value="VI">Semester VI</option>
                                          <option value="VII">Semester VII</option>
                                          <option value="VIII">Semester VIII</option>
                                      <?php elseif($makulsespek_semester=='II'):?>
                                      	  <option value="">-Pilih Semester-</option>
                                          <option value="I" >Semester I</option>
                                          <option value="II" selected>Semester II</option>
                                          <option value="III">Semester III</option>
                                          <option value="IV">Semester IV</option>
                                          <option value="V">Semester V</option>
                                          <option value="VI">Semester VI</option>
                                          <option value="VII">Semester VII</option>
                                          <option value="VIII">Semester VIII</option>
                                      <?php elseif($makulsespek_semester=='III'):?>
                                      	  <option value="">-Pilih Semester-</option>
                                          <option value="I" >Semester I</option>
                                          <option value="II" >Semester II</option>
                                          <option value="III" selected>Semester III</option>
                                          <option value="IV">Semester IV</option>
                                          <option value="V">Semester V</option>
                                          <option value="VI">Semester VI</option>
                                          <option value="VII">Semester VII</option>
                                          <option value="VIII">Semester VIII</option>
                                      <?php elseif($makulsespek_semester=='IV'):?>
                                      	  <option value="">-Pilih Semester-</option>
                                          <option value="I" >Semester I</option>
                                          <option value="II" >Semester II</option>
                                          <option value="III">Semester III</option>
                                          <option value="IV" selected>Semester IV</option>
                                          <option value="V">Semester V</option>
                                          <option value="VI">Semester VI</option>
                                          <option value="VII">Semester VII</option>
                                          <option value="VIII">Semester VIII</option>
                                       <?php elseif($makulsespek_semester=='V'):?>
                                      	  <option value="">-Pilih Semester-</option>
                                          <option value="I" >Semester I</option>
                                          <option value="II" >Semester II</option>
                                          <option value="III">Semester III</option>
                                          <option value="IV">Semester IV</option>
                                          <option value="V" selected>Semester V</option>
                                          <option value="VI">Semester VI</option>
                                          <option value="VII">Semester VII</option>
                                          <option value="VIII">Semester VIII</option>
                                       <?php elseif($makulsespek_semester=='VI'):?>
                                      	  <option value="">-Pilih Semester-</option>
                                          <option value="I" >Semester I</option>
                                          <option value="II" >Semester II</option>
                                          <option value="III">Semester III</option>
                                          <option value="IV">Semester IV</option>
                                          <option value="V">Semester V</option>
                                          <option value="VI" selected>Semester VI</option>
                                          <option value="VII">Semester VII</option>
                                          <option value="VIII">Semester VIII</option>
                                       <?php elseif($makulsespek_semester=='VII'):?>
                                      	  <option value="">-Pilih Semester-</option>
                                          <option value="I" >Semester I</option>
                                          <option value="II" >Semester II</option>
                                          <option value="III">Semester III</option>
                                          <option value="IV">Semester IV</option>
                                          <option value="V">Semester V</option>
                                          <option value="VI">Semester VI</option>
                                          <option value="VII" selected>Semester VII</option>
                                          <option value="VIII">Semester VIII</option>
                                       <?php elseif($makulsespek_semester=='VIII'):?>
                                      	  <option value="">-Pilih Semester-</option>
                                          <option value="I" >Semester I</option>
                                          <option value="II" >Semester II</option>
                                          <option value="III">Semester III</option>
                                          <option value="IV">Semester IV</option>
                                          <option value="V">Semester V</option>
                                          <option value="VI">Semester VI</option>
                                          <option value="VII">Semester VII</option>
                                          <option value="VIII" selected>Semester VIII</option>
                                          <?php endif;?>
                                    </select>
                            	</div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tgl. Pelaksanaan</label>
                                <div class="col-sm-7">
                                  <input type="date" name="xtanggal_makulsespek" value="<?php echo $makulsespek_tanggal;?>" class="form-control" id="inputUserName" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jam Pelaksanaan</label>
                                <div class="col-sm-7">
                                  <input type="time" name="xjam_makulsespek" class="form-control" value="<?php echo $makulsespek_jam;?>" id="inputUserName" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tahun Akademik</label>
                                <div class="col-sm-7">
                                   <select class="form-control select2" name="xnama_tahunakademik" style="width: 100%;" required>
                                              <option value="">-Pilih Tahun Akademik-</option>
                                              <?php
                                                $no=0;
                                                foreach ($tahunakademik->result_array() as $i) {
                                                   $tahunakademik_id=$i['tahunakademik_id'];
                                                   $tahunakademik_nama=$i['tahunakademik_nama'];
                                              ?>
                                              <?php if($tahunakademik_id==$tahunakademikid):?>
                                              <option value="<?php echo $tahunakademik_id;?>" selected><?php echo $tahunakademik_nama;?></option>
                                              <?php else:?>
                                                <option value="<?php echo $tahunakademik_id;?>"><?php echo $tahunakademik_nama;?></option>
                                              <?php endif;?>
                                              <?php } ?>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Ruangan</label>
                                <div class="col-sm-7">
                                   <select class="form-control select2" name="xnama_ruangan" style="width: 100%;" required>
                                              <option value="">-Pilih Nama Ruangan-</option>
                                              <?php
                                                $no=0;
                                                foreach ($ruang->result_array() as $i) {
                                                   $ruangan_id=$i['ruangan_id'];
                                                   $ruangan_nama=$i['ruangan_nama'];
                                              ?>
                                              <?php if($ruangan_id==$ruanganid):?>
                                              <option value="<?php echo $ruangan_id;?>" selected><?php echo $ruangan_nama;?></option>
                                              <?php else:?>
                                                <option value="<?php echo $ruangan_id;?>"><?php echo $ruangan_nama;?></option>
                                              <?php endif;?>
                                              <?php } ?>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Status Tampil</label>
                                        <div class="col-sm-7">
                                           <?php if($makulsespek_status=='Active'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Active" name="xstatus_makulsespek" checked>
                                                <label for="inlineRadio1"> Tampil </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Non-Activer" name="xstatus_makulsespek">
                                                <label for="inlineRadio2"> Tidak Tampil </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Active" name="xstatus_makulsespek">
                                                <label for="inlineRadio1"> Tampil </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="Non-Activer" name="xstatus_makulsespek" checked>
                                                <label for="inlineRadio2"> Tidak Tampil </label>
                                            </div>
                                          <?php endif;?>
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
              $makulsespek_id=$i['makulsespek_id'];
              $makulsespek_kode=$i['makulsespek_kode'];
              $makul_nama=$i['makul_nama'];
              $makul_sks=$i['makul_sks'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $makulsespek_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Mata Kuliah Semester Pendek</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/makul/hapus_makul'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $makulsespek_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Mata Kuliah Semester Pendek  <b><?php echo $makul_nama;?></b> ?</p>

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
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
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

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
    });

  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Mata Kuliah Berhasil disimpan ke database.",
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
                    text: "Mata Kuliah berhasil di update",
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
                    text: "Mata Kuliah Berhasil dihapus.",
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
