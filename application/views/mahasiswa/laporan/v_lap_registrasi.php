<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <link rel="shortcut icon" href="<?php echo base_url().'assets/images/logo3.png'?>">
    <title>STMIK IBBI MEDAN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onLoad="window.print()">
<div id="laporan">
<?php 
    $b=$ruan->row_array();
?>
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<tr>
    <td><img src="<?php echo base_url().'assets/images/kopsurat.png'?> "/></td>
</tr>
</table>
<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
<tr>
<th colspan="11" style="text-align:left;">NIM / NAMA MAHASISWA : <font style="text-transform:uppercase"><?php echo $b['mahasiswa_nim'];?> / <?php echo $b['mahasiswa_nama'];?></font></th>
</tr>
<tr>
<th colspan="11" height="40px" align="center" bgcolor="#CCCCCC">DAFTAR MATA KULIAH YANG DIAMBIL</th>
</tr>
    <tr bgcolor="#669966" height="20px">
        <th style="width:50px;">No</th>
        <th>KODE MAKUL</th>
        <th>NAMA MATA KULIAH</th>
        <th>SEMESTER</th>
        <th>TGL</th>
        <th>JAM</th>
        <th>RUANG</th>
        <th>DOSEN PENGAMPU</th>
        <th>TGL. REGISTRASI</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        $inkode=$i['makul_kode'];
		$barnam=$i['makul_nama'];
		$makusemes=$i['makulsespek_semester'];
		$makutanggal=$i['makulsespek_tanggal'];
		$makujam=$i['makulsespek_jam'];
		$dosenam=$i['dosen_nama'];
		$registang=$i['registrasi_tanggal'];
		$ruangnam=$i['ruangan_nama'];
?>
    <tr>
    	<td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:center;"><?php echo $inkode;?></td>
        <td style="padding-left:5px;"><?php echo $barnam;?></td>
        <td style="text-align:justify;">SEMESTER <?php echo $makusemes;?></td>
        <td style="text-align:center;"><?php echo $makutanggal;?></td>
        <td style="text-align:center;"><?php echo $makujam;?></td>
        <td style="text-align:center;"><?php echo $ruangnam;?></td>
        <td style="text-align:justify;"><?php echo $dosenam;?></td>
        <td style="text-align:center;"><?php echo $registang;?></td>
    </tr>
<?php }?>
</tbody>
</table>
<table align="center" style="width:900px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:900px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right"><h4>Medan, <?php echo date('d-M-Y')?></h4></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="right"><h4>( <?php echo $this->session->userdata('nama');?> )</h4></td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:900px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left">Catatan : <br>Silahkan Dibawa Bukti Pendaftaran Ini Pada Saat Melakukan Pembayaran Biaya Administrasi Mata Kuliah Semester Pendek ke Bagian Keuangan</th>
    </tr>
</table>
</div>
</body>
</html>