-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 02:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sem_pendek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_kategori` varchar(50) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_kategori`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(9, 'Prosedur', 'Prosedur Pendaftaran Semester Pendek', '2019-08-29 20:55:37', '<ul>\r\n	<li>Bagian Akademik terlebih dahulu mengumumkan jadwal pelaksanaan semester pendek dan jenis mata kuliah yang akan dijadwalkan untuk semester pendek</li>\r\n	<li>Mahasiswa yang sudah memiliki akun, melakukan login sebagai mahasiswa/i STMIK IBBI Medan.</li>\r\n	<li>Jika mahasiswa tidak memiliki Akun sebagai mahasiswa di STMIK IBBI Medan, maka silahkan hubungi bagian Akademik untuk mengisi biodata Anda (Perhatian : Akun Anda sudah aktif pada Saat pertama Anda kuliah di kampus STMIK IBBI Medan)</li>\r\n	<li>Setelah memiliki akun, maka silahkan anda daftar untuk mengikuti jadwal pelaksanaan semester pendek. (Jika Anda ingin Mengikuti 3 Mata Kuliah maka silahkan Anda registrasi sebanyak 3 Kali) sehingga bukti pendaftaran nantinya di print out dan diserahkan kepada Akademik untuk pembayaran biaya administrasi semester pendek</li>\r\n	<li>Data registrasi Anda akan sampai ke bagian Akademik.</li>\r\n	<li>Kemudian Cetak bukti pendaftaran dan silahkan dibawa ke bagian Keuangan untuk pembayaran biaya administrasi Semester Pendek.</li>\r\n	<li>Ingat, Biaya semester pendek yaitu per SKS dan biaya silahkan dilihat menu Syarat Pendaftaran</li>\r\n	<li>Setelah dibayar, maka Mahasiswa menyerahkan bukti pembayaran ke bagian Akademik meng-Update data mahasiswa menjadi aktif untuk mengikuti semester pendek.</li>\r\n	<li>Bagian Akademik menginput data jadwal pelaksanaan belajar mengajar mata kuliah semester pendek.</li>\r\n	<li>Mahasiswa memperoleh informasi peserta Semester Pendek</li>\r\n	<li>Dosen Mata Kuliah Melihat informasi daftar mahasiswa peserta semester pendek.</li>\r\n	<li>Dosen melihat informasi untuk pelaksanaan mata kuliah Semester Pendek</li>\r\n	<li>Mahasiswa dan Dosen melakukan proses belajar mengajar untuk mata kuliah semester pendek</li>\r\n	<li>Setelah selesai pelaksanaan belajar mengajar untuk mata kuliah semester pendek, maka Dosen menyerahkan Nilai mahasiswa ke bagian Akademik</li>\r\n	<li>Bagian akademik mengiputkan nilai mahasiswa peserta semester pendek.</li>\r\n	<li>Terakhir, mahasiswa memperoleh informasi Nilai Semester Pendek pada Kartu Hasil Studi yang telah di Update oleh Bagian Akademik per Semester sesuai dengan mata kuliah yang diambil pada waktu semester pendek</li>\r\n</ul>\r\n', '2019-09-01', '2019-09-14', 'STMIK IBBI Medan', '08:00-15:00', 'Prosedur Pendaftaran Semester Pendek', 'Admin Akademik STMIK IBBI Medan'),
(10, 'Syarat', 'Syarat-Syarat Mengikuti Semester Pendek', '2019-08-29 21:00:32', '<p>Diberitahukan kepada seluruh mahasiswa STMIK IBBI Medan, bahwa dalam rangka perbaikan indeks prestasi kumulatif (IPK) dibuka dan diselenggarakan kuliah semester pendek (SP) dengan ketentuan sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Terdaftar sebagai mahasiswa aktif pada semester yang ditempuh.</li>\r\n	<li>Telah menyelesaikan perkuliahan pada semester III dan selanjutnya.</li>\r\n	<li>Telah menyelesaikan perkuliahan yang akan diambil dalam kuliah semester pendek (SP), sebagai bukti Daftar Nilai Akademik(DNA).</li>\r\n	<li>Nilai matakuliah yang diijinkan untuk ditempuh dalam kuliah semester pendek adalah matakuliah dengan nilai &lsquo;C&rsquo; dan atau &lsquo;D&rsquo;.</li>\r\n	<li>Matakuliah dengan nilai E tidak diijinkan untuk ditempuh pada kuliah semester pendek.</li>\r\n	<li>Pengambilan sks maksimum dalam kuliah semester pendek sebanyak 12 sks.</li>\r\n</ul>\r\n\r\n<p>Biaya Kuliah Semester Pendek</p>\r\n\r\n<ul>\r\n	<li>Biaya Pendaftaran Kuliah (BPP)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Rp 200.000</li>\r\n	<li>Biaya per sks sebesar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Rp 200.000</li>\r\n</ul>\r\n\r\n<p>Pendaftaran Perkuliahan Semester Pendek di lakukan di Secara Online dengan mengisi formulir dan membayar sesuai ketentuan diatas.Untuk info nonteknis lainnya bisa ditanyakan langsung admin(online) Ataupun bagian B.A.U.K(ofline).</p>\r\n', '2019-09-01', '2019-09-14', 'STMIK IBBI Medan', '08:00-15:00', 'Syarat-Syarat Mengikuti Semester Pendek', 'Admin Akademik STMIK IBBI Medan'),
(11, 'Jadwal', 'Jadwal Pelaksanaan Kuliah Semester Pendek', '2019-08-29 21:24:43', '<p>Berdasarkan Peraturan Ketua Sekolah Tinggi Manajemen dan Informatika Komputer IBBI Medan Nomor : 798/UN29/SK/PP/2019 Tentang pelaksanaan mata kuliah semester pendek Tahun Akademik 2019/2020, dengan ini disampaikan bahwa jadwal pelaksanaannya sebagai berikut :</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:709px\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Jadwal Semester Pendek</th>\r\n			<th scope=\"col\">Mulai</th>\r\n			<th scope=\"col\">Sampai</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Pendaftaran Peserta Semester Pendek</td>\r\n			<td>22 Agustus 2019</td>\r\n			<td>22 September 2019</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Penawaran Mata Kuliah</td>\r\n			<td>22 Agustus 2019</td>\r\n			<td>22 September 2019</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Masa Perkuliahan</td>\r\n			<td>23 September 2019</td>\r\n			<td>15 Oktober 2019</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ujian Final Semester Pendek</td>\r\n			<td>16 Oktober 2019</td>\r\n			<td>22 Oktober 2019</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pengumuman Hasil Ujian Semester Pendek</td>\r\n			<td>Menunggu</td>\r\n			<td>Menunggu</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Demikian disampaikan atas perhatian dan kerjasamanya diucapkan terimakasih</p>\r\n', '2019-08-22', '2019-10-22', 'STMIK IBBI Medan', '08:00-15:00', 'Jadwal Pelaksanaan Kuliah Semester Pendek', 'Admin Akademik STMIK IBBI Medan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `dosen_id` int(11) NOT NULL,
  `dosen_nidn` varchar(30) DEFAULT NULL,
  `dosen_nama` varchar(70) DEFAULT NULL,
  `dosen_jenkel` varchar(2) DEFAULT NULL,
  `dosen_tmp_lahir` varchar(80) DEFAULT NULL,
  `dosen_tgl_lahir` varchar(80) DEFAULT NULL,
  `dosen_notelp` varchar(12) NOT NULL,
  `dosen_alamat` text NOT NULL,
  `dosen_jurusan` text NOT NULL,
  `dosen_strata` varchar(15) NOT NULL,
  `dosen_password` varchar(25) NOT NULL,
  `dosen_level` varchar(5) NOT NULL DEFAULT '11',
  `dosen_photo` varchar(40) DEFAULT NULL,
  `dosen_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`dosen_id`, `dosen_nidn`, `dosen_nama`, `dosen_jenkel`, `dosen_tmp_lahir`, `dosen_tgl_lahir`, `dosen_notelp`, `dosen_alamat`, `dosen_jurusan`, `dosen_strata`, `dosen_password`, `dosen_level`, `dosen_photo`, `dosen_tgl_input`) VALUES
(11, '0117088202', 'Albert Suwandhi', 'L', 'Medan', '1982-08-17', '085212332533', 'Jln. Abdullah Lubis No.21', 'Pendidikan Matematika', 'S1', 'albert', '11', '8e4327dc0fe79953bffd209ed18918d9.jpg', '2019-08-18 03:12:39'),
(12, '0127117803', 'Siti Nurhalizah', 'L', 'Medan', '1978-11-27', '081264663699', 'Jln. Sei Padang No. 12', 'Akuntansi', 'S1', 'siti', '11', '1a327e068ff8042837a8ccc54d40419d.jpg', '2019-08-18 04:50:28'),
(13, '0117108104', 'Jhone Kenly', 'L', 'Medan', '1981-10-17', '085364443633', 'Jln. Sekip Gang Ramah No. 32', 'Bahasa Inggris', 'S2', 'jhone', '11', 'c94ede438f05fd819847afa6cd13d762.jpg', '2019-08-25 07:02:08'),
(14, '0107107807', 'Ronald Handoko Saragih', 'L', 'Samosir', '1979-04-07', '081265669899', 'Jln. Bunga Law Gang Sakti No. 32B', 'Teknik Informatika', 'S2', 'ronald', '11', '819e45733abafce5bfe0f58deec7167f.jpg', '2019-09-03 00:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(2, 'Dasar-dasar CSS', 'Modul dasar-dasar CSS 3. Modul ini membantu anda untuk memahami struktur dasar CSS', '2017-01-23 04:30:01', 'Drs. Joko', 0, 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(3, '14 Teknik Komunikasi Yang Paling Efektif', 'Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar', '2017-01-23 15:26:06', 'Drs. Joko', 0, 'ab2cb34682bd94f30f2347523112ffb9.pdf'),
(4, 'Bagaimana Membentuk Pola Pikir yang Baru', 'Ebook ini membantu anda membentuk pola pikir baru.', '2017-01-23 15:27:07', 'Drs. Joko', 0, '30f588eb5c55324f8d18213f11651855.pdf'),
(5, '7 Tips Penting mengatasi Kritik', '7 Tips Penting mengatasi Kritik', '2017-01-23 15:27:44', 'Drs. Joko', 0, '329a62b25ad475a148e1546aa3db41de.docx'),
(6, '8 Racun dalam kehidupan kita', '8 Racun dalam kehidupan kita', '2017-01-23 15:28:17', 'Drs. Joko', 0, '8e38ad4948ba13758683dea443fbe6be.docx'),
(7, 'Jurnal Teknolgi Informasi', 'Jurnal Teknolgi Informasi', '2017-01-25 03:18:53', 'Gunawan, S.Pd', 0, '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(8, 'Jurnal Teknolgi Informasi 2', 'Jurnal Teknolgi Informasi', '2017-01-25 03:19:22', 'Gunawan, S.Pd', 0, 'c4e966ba2c6e142155082854dc5b3602.pdf'),
(9, 'Naskah Publikasi IT', 'Naskah Teknolgi Informasi', '2017-01-25 03:21:04', 'Gunawan, S.Pd', 0, '71380b3cf16a17a02382098c028ece9c.pdf'),
(10, 'Modul Teknologi Informasi', 'Modul Teknologi Informasi', '2017-01-25 03:22:08', 'Gunawan, S.Pd', 0, '029143a3980232ab2900d94df36dbb0c.pdf'),
(11, 'Modul Teknologi Informasi Part II', 'Modul Teknologi Informasi', '2017-01-25 03:22:54', 'Gunawan, S.Pd', 0, 'ea8f3f732576083156e509657614f551.pdf'),
(12, 'Modul Teknologi Informasi Part III', 'Modul Teknologi Informasi', '2017-01-25 03:23:21', 'Gunawan, S.Pd', 0, 'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(8, 'Faozy Zebua', 'faozatulozebua139@gmail.com', '085358331587', 'Testing Isi Buku Tamu', '2019-09-02 05:45:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `jurusan_kode` varchar(10) NOT NULL,
  `jurusan_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`jurusan_id`, `jurusan_kode`, `jurusan_nama`) VALUES
(3, 'S1-TI01', 'S1-Teknik Informatika'),
(4, 'S1-SI01', 'S1-Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(2, 'Politik', '2016-09-06 05:50:01'),
(3, 'Sains', '2016-09-06 05:59:39'),
(5, 'Penelitian', '2016-09-06 06:19:26'),
(6, 'Prestasi', '2016-09-07 02:51:09'),
(13, 'Olah Raga', '2017-01-13 13:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`) VALUES
(23, 'TI-17-1'),
(24, 'TI-17-2'),
(25, 'TI-17-3'),
(26, 'TI-18-1'),
(27, 'TI-18-2'),
(28, 'TI-18-3'),
(29, 'TI-19-1'),
(30, 'TI-19-2'),
(31, 'TI-19-3'),
(32, 'SI-17-1'),
(33, 'SI-17-2'),
(34, 'SI-17-3'),
(35, 'SI-18-1'),
(36, 'SI-18-2'),
(37, 'SI-18-3'),
(38, 'SI-19-1'),
(39, 'SI-19-2'),
(40, 'SI-19-3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `mahasiswa_nim` varchar(20) DEFAULT NULL,
  `mahasiswa_nama` varchar(70) DEFAULT NULL,
  `mahasiswa_jenkel` varchar(2) DEFAULT NULL,
  `mahasiswa_tmp_lahir` varchar(50) NOT NULL,
  `mahasiswa_tgl_lahir` date NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `jurusan_id` int(11) NOT NULL,
  `mahasiswa_notelp` varchar(12) NOT NULL,
  `mahasiswa_alamat` text NOT NULL,
  `mahasiswa_password` varchar(35) NOT NULL,
  `mahasiswa_level` varchar(2) NOT NULL DEFAULT '11',
  `mahasiswa_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`mahasiswa_id`, `mahasiswa_nim`, `mahasiswa_nama`, `mahasiswa_jenkel`, `mahasiswa_tmp_lahir`, `mahasiswa_tgl_lahir`, `kelas_id`, `jurusan_id`, `mahasiswa_notelp`, `mahasiswa_alamat`, `mahasiswa_password`, `mahasiswa_level`, `mahasiswa_photo`) VALUES
(17, '1513121454', 'Siti Mardiani Purba', 'P', 'Kalimantan', '1973-08-07', 29, 3, '085369663122', 'Jln. Sei Mencirim Gang Sedulur No.12', 'siti', '11', 'cafc2b1aa7656768259ceaaca3f2cf8d.png'),
(19, '1513121453', 'Fadly Choir', 'L', 'Medan', '1990-12-13', 31, 4, '085212332533', 'Jln. Terompet No. 23 Padang Bulan', 'fadly', '11', 'bc0841dfe4b868abd210734e0cb91ebd.png'),
(20, '1523121476', 'Nurul Utari Lubis', 'P', 'Medan', '1995-04-27', 32, 4, '082355653633', 'Jln. Sadar Amal No.65', 'nurulutari', '11', '3551e0ec1e9f8cac421cc25c6b2ddd49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makul`
--

CREATE TABLE `tbl_makul` (
  `makul_id` int(11) NOT NULL,
  `makul_kode` varchar(15) NOT NULL,
  `makul_nama` varchar(150) NOT NULL,
  `makul_sks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_makul`
--

INSERT INTO `tbl_makul` (`makul_id`, `makul_kode`, `makul_nama`, `makul_sks`) VALUES
(3, 'MPK1201', 'Pendidikan Pancasila dan Kewarganegaraan', '2'),
(5, 'MKK1203', 'Bahasa Inggris I', '2'),
(6, 'MKK1304', 'Matematika Diskrit', '3'),
(7, 'MKK1205', 'Paket Program Niaga I', '2'),
(8, 'MKK1306', 'Pengantar Akuntansi', '3'),
(9, 'MKK1307', 'Algoritma dan Pemrograman I', '3'),
(10, 'MKK1108', 'Praktikum Algoritma dan Pemrograman I', '1'),
(11, 'MKK1209', 'Pengelolaan Installasi Komputer', '2'),
(12, 'MPK2210', 'Pendidikan Agama', '2'),
(13, 'MKK2211', 'Bahasa Inggris II', '2'),
(14, 'MKK2212', 'Paket Program Niaga II', '2'),
(15, 'MKK2213', 'Algoritma dan Pemrograman II', '2'),
(16, 'MKK2114', 'Praktikum Algoritma dan Pemrograman II', '1'),
(17, 'MKB2315', 'Komunikasi Data dan Jaringan Komputer', '3'),
(18, 'MKB2116', 'Praktikum Komunikasi Data dan Jaringan Komputer', '1'),
(19, 'MKB2217', 'Pemrograman Visual I', '2'),
(20, 'MKB2118', 'Praktikum Pemrogram Visua I', '1'),
(21, 'MBB2219', 'Pengembangan Kepribadian Diri', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makul_sespek`
--

CREATE TABLE `tbl_makul_sespek` (
  `makulsespek_id` int(11) NOT NULL,
  `makulsespek_kode` varchar(15) NOT NULL,
  `makul_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `makulsespek_semester` varchar(5) NOT NULL,
  `makulsespek_tanggal` date NOT NULL,
  `makulsespek_jam` time NOT NULL,
  `tahunakademik_id` int(11) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `makulsespek_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_makul_sespek`
--

INSERT INTO `tbl_makul_sespek` (`makulsespek_id`, `makulsespek_kode`, `makul_id`, `dosen_id`, `makulsespek_semester`, `makulsespek_tanggal`, `makulsespek_jam`, `tahunakademik_id`, `ruangan_id`, `makulsespek_status`) VALUES
(5, 'SP001', 3, 11, 'I', '2019-09-30', '09:00:00', 5, 3, 'Active'),
(6, 'SP002', 8, 12, 'III', '2019-09-29', '08:00:00', 5, 3, 'Active'),
(7, 'asfasfa', 9, 12, 'III', '2019-09-28', '10:00:00', 4, 4, 'Active'),
(8, 'asfasfa', 5, 11, 'III', '2019-09-27', '16:00:00', 3, 6, 'Active'),
(9, 'SP011', 18, 13, 'VIII', '2019-09-26', '12:30:00', 5, 5, 'Active'),
(10, 'SP0235', 13, 11, 'IV', '2019-09-19', '20:30:00', 5, 3, 'Active'),
(11, 'SP9835', 20, 13, 'IV', '2019-09-30', '16:30:00', 5, 5, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Admin Akademik STMIK IBBI Medan', 'Just do it', 'L', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'I am a mountainner. to me mountainerring is a life', 'info@stmik.ibbi.ac.id', '081277159401', 'facebook.com/m_fikri_setiadi', 'twitter.com/fiver_fiver', '', '', 1, '1', '2016-09-03 06:07:55', '7cec419f19d5b173b91bf29c4e460e5e.png'),
(6, 'Administrator STMIK IBBI Medan', NULL, 'L', 'administrator', '21232f297a57a5a743894a0e4a801fc3', NULL, 'info@stmik.ibbi.ac.id', '085358331587', NULL, NULL, NULL, NULL, 1, '1', '2019-08-20 15:48:02', '8aa60ab3de0830ccdda7ea5725e31cce.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'Pengumuman Libur Semester Ganjil Tahun Ajaran 2016-2017', 'Libur semester ganjil tahun ajaran 2016-2017 dimulai dari tanggal 3 Maret 2017 sampai dengan tanggal 7 Maret 207.', '2017-01-21 01:17:30', 'Admin Akademik STMIK IBBI Medan'),
(2, 'Pengumuman Pembagian Raport Semester Ganjil Tahun Ajaran 2016-2017', 'Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2016-2017, maka akan diadakan pembagian hasil belajar/raport pada tanggal 4 Maret 2017 pukul 07.30 WIB.\r\nYang bertempat di M-Sekolah. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2017-01-21 01:16:20', 'Admin Akademik STMIK IBBI Medan'),
(3, 'Pengumuman Peresmian dan Launching Website Perdana M-Sekolah', 'Peresmian dan launching website resmi M-Sekolah akan diadakan pada hari 23 Desember 2016 pukul 10.00, bertepatan dengan pembagian raport semester ganjil tahun ajaran 2016-2017', '2017-01-22 07:16:16', 'Admin Akademik STMIK IBBI Medan'),
(4, 'Pengumuman Proses Belajar Mengajar di Semester Genap Tahun Ajaran 2016-2017', 'Setelah libur semester ganjil tahun ajaran 2016-2017, proses belajar mengajar di semester genap tahun ajaran 2016-2017 mulai aktif kembali tanggal 2 Maret 2017.', '2017-01-22 07:15:28', 'Admin Akademik STMIK IBBI Medan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(1, '2016-08-11 23:52:20', '127.0.0.1', 'Firefox'),
(2, '2016-08-12 17:14:20', '127.0.0.1', 'Firefox'),
(3, '2016-08-13 05:23:19', '127.0.0.1', 'Firefox'),
(4, '2016-08-13 05:27:05', '127.0.0.1', 'Firefox'),
(5, '2016-08-13 05:27:37', '127.0.0.1', 'Firefox'),
(6, '2016-08-13 06:54:58', '127.0.0.1', 'Firefox'),
(7, '2016-08-13 06:55:59', '127.0.0.1', 'Firefox'),
(8, '2016-08-13 07:00:06', '127.0.0.1', 'Firefox'),
(9, '2016-08-13 07:00:34', '127.0.0.1', 'Firefox'),
(10, '2016-09-18 20:24:39', '127.0.0.1', 'Firefox'),
(11, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(12, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(13, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(14, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(15, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(16, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(17, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(18, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(19, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(20, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(21, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(22, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(23, '2016-09-18 20:24:43', '127.0.0.1', 'Firefox'),
(24, '2017-02-04 18:06:52', '::1', 'Chrome'),
(25, '2017-02-04 18:07:16', '127.0.0.1', 'Firefox'),
(26, '2017-02-04 18:08:31', '::1', 'Chrome'),
(27, '2017-02-05 19:33:14', '::1', 'Chrome'),
(28, '2017-02-05 20:20:59', '127.0.0.1', 'Firefox'),
(29, '2017-02-06 18:21:08', '::1', 'Chrome'),
(30, '2017-02-09 01:07:51', '::1', 'Chrome'),
(31, '2017-02-10 20:12:05', '::1', 'Chrome'),
(32, '2017-02-20 20:46:21', '::1', 'Chrome'),
(33, '2017-02-22 04:04:16', '::1', 'Chrome'),
(34, '2017-02-27 18:47:25', '::1', 'Chrome'),
(35, '2017-03-02 06:09:25', '::1', 'Chrome'),
(36, '2017-03-04 08:18:51', '::1', 'Chrome'),
(37, '2017-03-12 20:40:32', '::1', 'Chrome'),
(38, '2017-03-13 20:34:32', '::1', 'Chrome'),
(39, '2017-03-23 04:08:15', '::1', 'Firefox'),
(40, '2017-03-25 09:39:02', '::1', 'Firefox'),
(41, '2017-03-25 10:16:45', '::1', 'Firefox'),
(42, '2017-03-28 14:11:23', '::1', 'Firefox'),
(43, '2017-03-29 22:39:17', '::1', 'Firefox'),
(44, '2017-03-30 10:52:11', '::1', 'Firefox'),
(45, '2017-03-31 22:48:46', '::1', 'Firefox'),
(46, '2017-04-06 22:33:58', '::1', 'Firefox'),
(47, '2017-04-08 00:25:37', '::1', 'Firefox'),
(48, '2017-04-08 10:00:14', '::1', 'Firefox'),
(49, '2017-04-09 10:06:03', '::1', 'Firefox'),
(50, '2017-04-10 12:20:50', '::1', 'Firefox'),
(51, '2017-04-11 11:46:50', '117.102.64.98', 'Chrome'),
(52, '2017-04-11 11:46:57', '125.165.129.35', 'Firefox'),
(53, '2017-04-11 12:52:18', '69.171.225.46', 'Other'),
(54, '2017-04-11 12:54:33', '69.171.225.12', 'Other'),
(55, '2017-04-11 12:55:04', '69.171.225.21', 'Other'),
(56, '2017-04-11 12:55:18', '69.171.225.18', 'Other'),
(57, '2017-04-11 13:03:44', '36.83.246.250', 'Chrome'),
(58, '2017-04-11 13:05:55', '202.62.17.121', 'Chrome'),
(59, '2017-04-11 13:06:45', '106.187.46.205', 'Chrome'),
(60, '2017-04-11 13:06:47', '173.252.98.28', 'Other'),
(61, '2017-04-11 13:10:36', '107.167.103.241', 'Opera'),
(62, '2017-04-11 13:16:14', '202.67.41.244', 'Chrome'),
(63, '2017-04-11 13:18:24', '36.72.192.194', 'Chrome'),
(64, '2017-04-11 13:19:40', '112.215.175.62', 'Chrome'),
(65, '2017-04-11 13:20:09', '173.252.102.112', 'Other'),
(66, '2017-04-11 13:20:17', '112.215.154.56', 'Firefox'),
(67, '2017-04-11 13:20:26', '158.140.170.23', 'Chrome'),
(68, '2017-04-11 13:22:33', '36.81.37.52', 'Chrome'),
(69, '2017-04-11 13:23:14', '120.188.65.243', 'Chrome'),
(70, '2017-04-11 13:26:16', '124.153.33.11', 'Chrome'),
(71, '2017-04-11 13:26:21', '112.215.172.240', 'Chrome'),
(72, '2017-04-11 13:27:34', '132.255.240.27', 'Chrome'),
(73, '2017-04-11 13:28:22', '103.213.131.147', 'Chrome'),
(74, '2017-04-11 13:29:38', '36.84.225.114', 'Chrome'),
(75, '2017-04-11 13:29:45', '180.253.158.87', 'Chrome'),
(76, '2017-04-11 13:33:35', '173.252.84.52', 'Other'),
(77, '2017-04-11 13:34:51', '202.67.35.20', 'Chrome'),
(78, '2017-04-11 13:37:02', '202.67.40.210', 'Chrome'),
(79, '2017-04-11 13:39:43', '120.188.76.26', 'Chrome'),
(80, '2017-04-11 13:41:05', '173.252.123.186', 'Other'),
(81, '2017-04-11 13:45:29', '110.139.8.41', 'Mozilla'),
(82, '2017-04-11 13:53:12', '202.80.216.219', 'Chrome'),
(83, '2017-04-11 13:55:16', '223.255.230.13', 'Safari'),
(84, '2017-04-11 13:55:38', '36.78.69.101', 'Chrome'),
(85, '2017-04-11 14:02:53', '180.251.173.137', 'Chrome'),
(86, '2017-04-11 14:03:05', '125.161.185.216', 'Chrome'),
(87, '2017-04-11 14:16:22', '139.192.226.49', 'Chrome'),
(88, '2017-04-11 14:18:10', '107.167.112.88', 'Opera'),
(89, '2017-04-11 14:18:13', '180.247.26.15', 'Chrome'),
(90, '2017-04-11 14:20:04', '204.44.65.210', 'Internet Explorer'),
(91, '2017-04-11 14:22:58', '36.78.96.198', 'Chrome'),
(92, '2017-04-11 14:23:40', '138.197.192.28', 'Chrome'),
(93, '2017-04-11 14:24:07', '112.215.151.61', 'Chrome'),
(94, '2017-04-11 14:25:46', '202.51.104.154', 'Chrome'),
(95, '2017-04-11 14:32:42', '202.67.44.7', 'Firefox'),
(96, '2017-04-11 14:36:53', '118.136.122.84', 'Chrome'),
(97, '2017-04-11 14:39:25', '61.247.21.51', 'Chrome'),
(98, '2017-04-11 14:41:38', '114.124.180.250', 'Chrome'),
(99, '2017-04-11 14:41:55', '120.188.64.226', 'Chrome'),
(100, '2017-04-11 14:43:14', '180.247.204.243', 'Chrome'),
(101, '2017-04-11 14:44:48', '125.161.179.203', 'Chrome'),
(102, '2017-04-11 14:46:06', '114.125.55.58', 'Chrome'),
(103, '2017-04-11 14:50:14', '158.140.182.11', 'Chrome'),
(104, '2017-04-11 14:54:09', '202.67.33.22', 'Chrome'),
(105, '2017-04-11 14:58:44', '120.188.65.30', 'Chrome'),
(106, '2017-04-11 14:59:55', '120.188.77.153', 'Chrome'),
(107, '2017-04-11 15:02:32', '125.167.185.147', 'Mozilla'),
(108, '2017-04-11 15:04:23', '118.136.84.45', 'Chrome'),
(109, '2017-04-11 15:04:41', '110.136.129.138', 'Chrome'),
(110, '2017-04-11 15:04:52', '36.75.108.223', 'Chrome'),
(111, '2017-04-11 15:05:46', '36.72.38.146', 'Chrome'),
(112, '2017-04-11 15:06:31', '120.188.5.85', 'Chrome'),
(113, '2017-04-11 15:09:53', '180.253.90.210', 'Chrome'),
(114, '2017-04-11 15:12:18', '107.167.99.179', 'Opera'),
(115, '2017-04-11 15:12:49', '112.215.171.165', 'Chrome'),
(116, '2017-04-11 15:14:55', '203.166.201.206', 'Chrome'),
(117, '2017-04-11 15:15:21', '107.167.99.208', 'Opera'),
(118, '2017-04-11 15:15:25', '36.73.194.145', 'Mozilla'),
(119, '2017-04-11 15:16:25', '107.167.113.164', 'Opera'),
(120, '2017-04-11 15:16:42', '120.92.32.177', 'Chrome'),
(121, '2017-04-11 15:17:23', '180.245.132.122', 'Chrome'),
(122, '2017-04-11 15:17:56', '120.188.80.236', 'Chrome'),
(123, '2017-04-11 15:17:57', '114.125.89.57', 'Chrome'),
(124, '2017-04-11 15:18:01', '139.0.186.187', 'Chrome'),
(125, '2017-04-11 15:18:25', '125.166.215.131', 'Chrome'),
(126, '2017-04-11 15:18:29', '120.188.6.216', 'Mozilla'),
(127, '2017-04-11 15:19:06', '125.161.98.148', 'Chrome'),
(128, '2017-04-11 15:20:10', '36.73.9.148', 'Chrome'),
(129, '2017-04-11 15:20:15', '114.125.182.65', 'Chrome'),
(130, '2017-04-11 15:21:07', '114.125.40.100', 'Chrome'),
(131, '2017-04-11 15:21:45', '120.188.86.219', 'Chrome'),
(132, '2017-04-11 15:22:35', '118.136.103.194', 'Mozilla'),
(133, '2017-04-11 15:23:47', '36.81.10.230', 'Chrome'),
(134, '2017-04-11 15:23:47', '114.125.164.4', 'Chrome'),
(135, '2017-04-11 15:24:28', '107.167.112.218', 'Chrome'),
(136, '2017-04-11 15:24:50', '107.167.98.132', 'Opera'),
(137, '2017-04-11 15:25:44', '180.246.19.210', 'Chrome'),
(138, '2017-04-11 15:26:12', '120.188.1.85', 'Chrome'),
(139, '2017-04-11 15:27:50', '139.195.66.235', 'Chrome'),
(140, '2017-04-11 15:28:06', '115.178.198.211', 'Chrome'),
(141, '2017-04-11 15:28:17', '115.178.235.88', 'Chrome'),
(142, '2017-04-11 15:28:49', '36.84.87.138', 'Mozilla'),
(143, '2017-04-11 15:29:05', '114.121.232.136', 'Chrome'),
(144, '2017-04-11 15:29:23', '118.96.227.216', 'Chrome'),
(145, '2017-04-11 15:29:45', '36.68.184.231', 'Mozilla'),
(146, '2017-04-11 15:30:18', '120.188.3.198', 'Chrome'),
(147, '2017-04-11 15:32:44', '61.94.133.70', 'Chrome'),
(148, '2017-04-11 15:32:44', '8.37.235.44', 'Safari'),
(149, '2017-04-11 15:33:19', '110.136.254.232', 'Chrome'),
(150, '2017-04-11 15:34:17', '36.83.28.90', 'Chrome'),
(151, '2017-04-11 15:34:25', '120.188.80.239', 'Chrome'),
(152, '2017-04-11 15:34:50', '114.125.72.8', 'Chrome'),
(153, '2017-04-11 15:34:59', '180.247.33.166', 'Safari'),
(154, '2017-04-11 15:35:10', '180.214.232.22', 'Chrome'),
(155, '2017-04-11 15:35:47', '61.5.92.125', 'Chrome'),
(156, '2017-04-11 15:36:22', '36.69.222.51', 'Chrome'),
(157, '2017-04-11 15:36:24', '182.253.139.130', 'Chrome'),
(158, '2017-04-11 15:36:36', '120.188.86.170', 'Chrome'),
(159, '2017-04-11 15:36:56', '139.228.97.115', 'Chrome'),
(160, '2017-04-11 15:37:18', '36.67.61.15', 'Chrome'),
(161, '2017-04-11 15:37:20', '114.4.78.184', 'Chrome'),
(162, '2017-04-11 15:38:09', '202.67.40.221', 'Chrome'),
(163, '2017-04-11 15:39:03', '112.215.172.66', 'Chrome'),
(164, '2017-04-11 15:39:11', '36.74.207.97', 'Chrome'),
(165, '2017-04-11 15:39:36', '64.233.173.4', 'Chrome'),
(166, '2017-04-11 15:40:07', '36.84.136.234', 'Chrome'),
(167, '2017-04-11 15:41:24', '202.62.16.49', 'Chrome'),
(168, '2017-04-11 15:41:28', '125.167.120.95', 'Chrome'),
(169, '2017-04-11 15:41:46', '168.235.207.168', 'Firefox'),
(170, '2017-04-11 15:41:52', '120.188.64.235', 'Chrome'),
(171, '2017-04-11 15:42:10', '120.188.81.204', 'Chrome'),
(172, '2017-04-11 15:42:26', '125.162.245.169', 'Chrome'),
(173, '2017-04-11 15:43:20', '180.242.10.170', 'Chrome'),
(174, '2017-04-11 15:44:03', '64.233.173.6', 'Chrome'),
(175, '2017-04-11 15:44:11', '112.215.174.87', 'Chrome'),
(176, '2017-04-11 15:44:37', '36.71.46.157', 'Chrome'),
(177, '2017-04-11 15:45:07', '103.56.235.74', 'Chrome'),
(178, '2017-04-11 15:45:18', '120.188.66.124', 'Chrome'),
(179, '2017-04-11 15:45:25', '69.171.225.33', 'Other'),
(180, '2017-04-11 15:46:14', '114.125.202.40', 'Chrome'),
(181, '2017-04-11 15:46:45', '120.188.87.93', 'Chrome'),
(182, '2017-04-11 15:46:46', '118.136.85.176', 'Chrome'),
(183, '2017-04-11 15:46:51', '64.233.173.8', 'Chrome'),
(184, '2017-04-11 15:47:32', '36.79.200.132', 'Chrome'),
(185, '2017-04-11 15:48:01', '120.188.35.53', 'Chrome'),
(186, '2017-04-11 15:49:39', '110.138.153.190', 'Chrome'),
(187, '2017-04-11 15:49:44', '114.125.73.228', 'Chrome'),
(188, '2017-04-11 15:49:52', '36.81.119.196', 'Chrome'),
(189, '2017-04-11 15:50:22', '120.188.65.140', 'Chrome'),
(190, '2017-04-11 15:51:05', '125.161.188.27', 'Chrome'),
(191, '2017-04-11 15:51:23', '124.40.251.74', 'Firefox'),
(192, '2017-04-11 15:51:31', '139.228.108.66', 'Chrome'),
(193, '2017-04-11 15:51:33', '180.254.57.164', 'Chrome'),
(194, '2017-04-11 15:53:07', '180.247.95.40', 'Chrome'),
(195, '2017-04-11 15:53:20', '103.205.56.66', 'Chrome'),
(196, '2017-04-11 15:53:20', '103.56.232.196', 'Chrome'),
(197, '2017-04-11 15:53:52', '180.241.167.242', 'Chrome'),
(198, '2017-04-11 15:53:54', '112.215.171.106', 'Chrome'),
(199, '2017-04-11 15:55:12', '114.125.214.65', 'Chrome'),
(200, '2017-04-11 15:55:40', '36.71.48.50', 'Firefox'),
(201, '2017-04-11 15:57:12', '103.9.227.1', 'Chrome'),
(202, '2017-04-11 15:57:16', '202.62.17.134', 'Chrome'),
(203, '2017-04-11 15:57:40', '36.74.110.84', 'Chrome'),
(204, '2017-04-11 15:57:54', '112.215.173.135', 'Chrome'),
(205, '2017-04-11 15:58:17', '36.80.43.86', 'Chrome'),
(206, '2017-04-11 15:59:04', '45.76.207.98', 'Chrome'),
(207, '2017-04-11 15:59:23', '180.214.233.30', 'Chrome'),
(208, '2017-04-11 15:59:28', '36.78.97.242', 'Mozilla'),
(209, '2017-04-11 15:59:58', '61.94.220.130', 'Chrome'),
(210, '2017-04-11 16:00:03', '8.37.230.63', 'Safari'),
(211, '2017-04-11 16:00:20', '125.162.99.169', 'Chrome'),
(212, '2017-04-11 16:00:31', '223.255.227.25', 'Chrome'),
(213, '2017-04-11 16:01:07', '114.121.244.144', 'Chrome'),
(214, '2017-04-11 16:01:24', '114.125.214.143', 'Chrome'),
(215, '2017-04-11 16:01:43', '8.37.235.230', 'Safari'),
(216, '2017-04-11 16:01:49', '120.188.86.129', 'Chrome'),
(217, '2017-04-11 16:02:10', '120.188.74.41', 'Chrome'),
(218, '2017-04-11 16:02:25', '115.178.239.193', 'Chrome'),
(219, '2017-04-11 16:02:49', '202.67.46.8', 'Chrome'),
(220, '2017-04-11 16:02:56', '36.80.211.28', 'Chrome'),
(221, '2017-04-11 16:03:54', '139.195.162.58', 'Chrome'),
(222, '2017-04-11 16:04:16', '202.154.180.10', 'Chrome'),
(223, '2017-04-11 16:04:34', '114.125.184.7', 'Chrome'),
(224, '2017-04-11 16:05:01', '120.188.85.253', 'Chrome'),
(225, '2017-04-11 16:05:32', '139.195.209.21', 'Chrome'),
(226, '2017-04-11 16:05:57', '120.188.33.114', 'Chrome'),
(227, '2017-04-11 16:06:03', '8.37.233.52', 'Safari'),
(228, '2017-04-11 16:06:09', '36.79.130.99', 'Chrome'),
(229, '2017-04-11 16:06:21', '36.74.24.2', 'Chrome'),
(230, '2017-04-11 16:06:43', '114.125.186.131', 'Chrome'),
(231, '2017-04-11 16:06:45', '202.62.17.197', 'Chrome'),
(232, '2017-04-11 16:07:31', '118.96.232.253', 'Chrome'),
(233, '2017-04-11 16:08:05', '36.79.188.51', 'Chrome'),
(234, '2017-04-11 16:08:13', '36.74.122.45', 'Chrome'),
(235, '2017-04-11 16:08:23', '36.84.110.69', 'Chrome'),
(236, '2017-04-11 16:08:23', '112.215.172.153', 'Chrome'),
(237, '2017-04-11 16:08:37', '36.82.30.206', 'Chrome'),
(238, '2017-04-11 16:09:03', '180.214.232.2', 'Chrome'),
(239, '2017-04-11 16:09:38', '107.167.112.128', 'Opera'),
(240, '2017-04-11 16:09:40', '36.70.178.105', 'Chrome'),
(241, '2017-04-11 16:09:55', '139.195.130.19', 'Chrome'),
(242, '2017-04-11 16:10:31', '114.125.57.214', 'Chrome'),
(243, '2017-04-11 16:10:41', '120.188.85.184', 'Chrome'),
(244, '2017-04-11 16:10:52', '125.163.107.41', 'Firefox'),
(245, '2017-04-11 16:11:15', '114.125.41.144', 'Chrome'),
(246, '2017-04-11 16:11:21', '61.94.103.59', 'Chrome'),
(247, '2017-04-11 16:12:08', '36.76.30.210', 'Chrome'),
(248, '2017-04-11 16:12:26', '36.73.134.193', 'Chrome'),
(249, '2017-04-11 16:12:31', '112.215.173.16', 'Chrome'),
(250, '2017-04-11 16:13:18', '120.188.92.195', 'Chrome'),
(251, '2017-04-11 16:13:20', '125.163.92.209', 'Chrome'),
(252, '2017-04-11 16:14:19', '182.253.142.24', 'Chrome'),
(253, '2017-04-11 16:14:28', '120.188.86.148', 'Chrome'),
(254, '2017-04-11 16:14:56', '182.253.163.61', 'Chrome'),
(255, '2017-04-11 16:16:02', '36.74.148.31', 'Chrome'),
(256, '2017-04-11 16:16:57', '8.37.233.156', 'Safari'),
(257, '2017-04-11 16:17:04', '114.125.56.121', 'Firefox'),
(258, '2017-04-11 16:17:12', '158.140.165.20', 'Chrome'),
(259, '2017-04-11 16:17:17', '125.164.97.226', 'Chrome'),
(260, '2017-04-11 16:17:18', '120.188.92.249', 'Chrome'),
(261, '2017-04-11 16:17:26', '118.137.208.31', 'Chrome'),
(262, '2017-04-11 16:17:30', '180.244.71.107', 'Chrome'),
(263, '2017-04-11 16:17:37', '120.188.87.220', 'Chrome'),
(264, '2017-04-11 16:17:57', '112.215.172.199', 'Safari'),
(265, '2017-04-11 16:18:23', '110.138.44.236', 'Chrome'),
(266, '2017-04-11 16:18:35', '168.235.195.254', 'Safari'),
(267, '2017-04-11 16:18:40', '180.245.98.188', 'Chrome'),
(268, '2017-04-11 16:18:58', '114.125.183.102', 'Chrome'),
(269, '2017-04-11 16:19:18', '125.164.38.13', 'Chrome'),
(270, '2017-04-11 16:19:27', '114.121.239.102', 'Chrome'),
(271, '2017-04-11 16:20:03', '168.235.206.137', 'Safari'),
(272, '2017-04-11 16:20:32', '202.80.213.87', 'Chrome'),
(273, '2017-04-11 16:21:18', '180.246.73.3', 'Chrome'),
(274, '2017-04-11 16:22:02', '36.75.32.145', 'Mozilla'),
(275, '2017-04-11 16:22:04', '112.215.154.115', 'Chrome'),
(276, '2017-04-11 16:22:09', '36.73.96.185', 'Mozilla'),
(277, '2017-04-11 16:22:38', '8.37.232.215', 'Safari'),
(278, '2017-04-11 16:22:53', '36.68.233.0', 'Chrome'),
(279, '2017-04-11 16:23:08', '36.84.224.73', 'Chrome'),
(280, '2017-04-11 16:23:29', '66.220.151.86', 'Other'),
(281, '2017-04-11 16:24:01', '120.188.75.121', 'Chrome'),
(282, '2017-04-11 16:24:19', '207.241.226.233', 'Mozilla'),
(283, '2017-04-11 16:24:35', '36.73.181.116', 'Chrome'),
(284, '2017-04-11 16:25:38', '198.186.192.44', 'Other'),
(285, '2017-04-11 16:25:56', '114.4.78.117', 'Chrome'),
(286, '2017-04-11 16:26:38', '36.72.95.85', 'Firefox'),
(287, '2017-04-11 16:27:26', '120.188.81.107', 'Chrome'),
(288, '2017-04-11 16:28:19', '114.124.149.112', 'Chrome'),
(289, '2017-04-11 16:28:29', '114.125.205.41', 'Chrome'),
(290, '2017-04-11 16:28:54', '125.163.78.202', 'Chrome'),
(291, '2017-04-11 16:29:17', '114.125.52.130', 'Firefox'),
(292, '2017-04-11 16:29:45', '114.4.78.150', 'Chrome'),
(293, '2017-04-11 16:29:47', '114.121.156.129', 'Chrome'),
(294, '2017-04-11 16:29:51', '112.215.172.8', 'Chrome'),
(295, '2017-04-11 16:30:30', '114.125.166.163', 'Chrome'),
(296, '2017-04-11 16:30:35', '139.195.187.141', 'Chrome'),
(297, '2017-04-11 16:30:53', '36.72.21.12', 'Chrome'),
(298, '2017-04-11 16:32:34', '8.37.225.108', 'Firefox'),
(299, '2017-04-11 16:32:39', '180.248.6.118', 'Chrome'),
(300, '2017-04-11 16:33:44', '8.37.233.95', 'Safari'),
(301, '2017-04-11 16:34:16', '120.188.80.6', 'Safari'),
(302, '2017-04-11 16:34:52', '211.227.156.112', 'Chrome'),
(303, '2017-04-11 16:34:54', '125.167.187.126', 'Chrome'),
(304, '2017-04-11 16:35:32', '107.167.112.72', 'Chrome'),
(305, '2017-04-11 16:35:57', '112.215.152.98', 'Mozilla'),
(306, '2017-04-11 16:36:06', '180.251.167.150', 'Chrome'),
(307, '2017-04-11 16:36:27', '36.82.76.215', 'Chrome'),
(308, '2017-04-11 16:37:45', '168.235.206.238', 'Safari'),
(309, '2017-04-11 16:38:09', '124.153.33.39', 'Chrome'),
(310, '2017-04-11 16:38:39', '168.235.197.19', 'Firefox'),
(311, '2017-04-11 16:38:44', '36.73.87.46', 'Chrome'),
(312, '2017-04-11 16:38:45', '188.166.218.174', 'Firefox'),
(313, '2017-04-11 16:39:03', '36.78.54.201', 'Firefox'),
(314, '2017-04-11 16:39:24', '139.228.95.10', 'Chrome'),
(315, '2017-04-11 16:39:24', '120.188.80.114', 'Chrome'),
(316, '2017-04-11 16:39:35', '182.253.203.58', 'Chrome'),
(317, '2017-04-11 16:39:54', '36.78.66.34', 'Chrome'),
(318, '2017-04-11 16:40:56', '120.188.79.185', 'Mozilla'),
(319, '2017-04-11 16:41:35', '118.96.235.203', 'Chrome'),
(320, '2017-04-11 16:41:44', '180.253.236.103', 'Chrome'),
(321, '2017-04-11 16:43:18', '125.161.188.207', 'Chrome'),
(322, '2017-04-11 16:44:08', '36.66.72.178', 'Chrome'),
(323, '2017-04-11 16:44:16', '36.84.13.131', 'Chrome'),
(324, '2017-04-11 16:44:46', '112.215.45.240', 'Firefox'),
(325, '2017-04-11 16:45:01', '49.182.76.246', 'Chrome'),
(326, '2017-04-11 16:45:09', '180.247.77.200', 'Chrome'),
(327, '2017-04-11 16:45:19', '36.88.158.84', 'Chrome'),
(328, '2017-04-11 16:45:38', '202.62.17.12', 'Chrome'),
(329, '2017-04-11 16:46:05', '182.253.163.51', 'Firefox'),
(330, '2017-04-11 16:46:11', '139.195.94.117', 'Chrome'),
(331, '2017-04-11 16:46:41', '114.4.83.68', 'Chrome'),
(332, '2017-04-11 16:47:30', '114.125.37.46', 'Safari'),
(333, '2017-04-11 16:47:32', '173.252.74.105', 'Other'),
(334, '2017-04-11 16:49:04', '112.215.200.30', 'Chrome'),
(335, '2017-04-11 16:50:22', '120.188.81.20', 'Chrome'),
(336, '2017-04-11 16:50:32', '120.188.33.140', 'Chrome'),
(337, '2017-04-11 16:51:06', '114.4.79.120', 'Chrome'),
(338, '2017-04-11 16:51:27', '139.194.221.74', 'Chrome'),
(339, '2017-04-11 16:51:29', '120.188.87.99', 'Firefox'),
(340, '2017-04-11 16:51:48', '36.73.62.30', 'Chrome'),
(341, '2017-04-11 16:51:53', '112.215.45.120', 'Firefox'),
(342, '2017-04-11 16:51:54', '112.215.153.184', 'Safari'),
(343, '2017-04-11 16:51:59', '36.78.67.111', 'Chrome'),
(344, '2017-04-11 16:52:31', '120.188.80.165', 'Chrome'),
(345, '2017-04-11 16:52:37', '61.94.100.166', 'Chrome'),
(346, '2017-04-11 16:52:48', '180.252.168.2', 'Chrome'),
(347, '2017-04-11 16:52:50', '36.84.64.22', 'Chrome'),
(348, '2017-04-11 16:52:56', '198.144.107.187', 'Chrome'),
(349, '2017-04-11 16:53:42', '120.188.80.158', 'Chrome'),
(350, '2017-04-11 16:54:47', '180.244.55.126', 'Chrome'),
(351, '2017-04-11 16:55:18', '107.167.112.118', 'Opera'),
(352, '2017-04-11 16:55:43', '36.73.63.156', 'Chrome'),
(353, '2017-04-11 16:56:44', '125.167.92.123', 'Safari'),
(354, '2017-04-11 16:58:15', '180.247.136.78', 'Chrome'),
(355, '2017-04-11 16:59:23', '114.124.148.228', 'Chrome'),
(356, '2017-04-11 16:59:44', '120.188.80.220', 'Chrome'),
(357, '2017-04-11 16:59:50', '180.248.179.126', 'Chrome'),
(358, '2017-04-11 17:00:03', '36.78.194.86', 'Chrome'),
(359, '2017-04-11 17:00:12', '202.67.46.46', 'Chrome'),
(360, '2017-04-11 17:00:34', '113.210.202.42', 'Chrome'),
(361, '2017-04-11 17:01:47', '114.120.233.30', 'Chrome'),
(362, '2017-04-11 17:02:34', '202.182.55.230', 'Chrome'),
(363, '2017-04-11 17:02:44', '180.244.73.72', 'Chrome'),
(364, '2017-04-11 17:03:16', '49.213.16.227', 'Chrome'),
(365, '2017-04-11 17:04:03', '36.73.177.201', 'Chrome'),
(366, '2017-04-11 17:04:12', '112.215.152.124', 'Chrome'),
(367, '2017-04-11 17:08:38', '120.188.0.47', 'Chrome'),
(368, '2017-04-11 17:09:43', '36.84.58.187', 'Chrome'),
(369, '2017-04-11 17:12:18', '111.94.229.133', 'Chrome'),
(370, '2017-04-11 17:12:31', '118.136.18.255', 'Chrome'),
(371, '2017-04-11 17:13:11', '36.74.212.125', 'Chrome'),
(372, '2017-04-11 17:13:20', '103.206.245.142', 'Chrome'),
(373, '2017-04-11 17:14:21', '36.71.129.27', 'Chrome'),
(374, '2017-04-11 17:18:44', '180.252.123.165', 'Chrome'),
(375, '2017-04-11 17:19:01', '180.253.138.223', 'Chrome'),
(376, '2017-04-11 17:19:11', '66.249.79.83', 'Googlebot'),
(377, '2017-04-11 17:19:27', '36.80.242.230', 'Chrome'),
(378, '2017-04-11 17:19:54', '223.255.231.154', 'Chrome'),
(379, '2017-04-11 17:19:55', '114.125.200.74', 'Chrome'),
(380, '2017-04-11 17:21:24', '66.249.79.78', 'Googlebot'),
(381, '2017-04-11 17:21:45', '114.4.83.180', 'Mozilla'),
(382, '2017-04-11 17:23:55', '139.192.11.235', 'Chrome'),
(383, '2017-04-11 17:24:10', '125.160.66.244', 'Firefox'),
(384, '2017-04-11 17:24:17', '112.215.170.139', 'Chrome'),
(385, '2017-04-11 17:25:01', '112.215.153.158', 'Safari'),
(386, '2017-04-11 17:25:29', '110.139.187.176', 'Chrome'),
(387, '2017-04-11 17:25:38', '111.94.122.151', 'Chrome'),
(388, '2017-04-11 17:25:46', '112.215.153.252', 'Chrome'),
(389, '2017-04-11 17:27:24', '112.215.170.48', 'Chrome'),
(390, '2017-04-11 17:28:36', '125.160.51.241', 'Chrome'),
(391, '2017-04-11 17:29:53', '66.249.79.85', 'Googlebot'),
(392, '2017-04-11 17:30:04', '120.188.83.178', 'Chrome'),
(393, '2017-04-11 17:30:26', '112.215.170.170', 'Chrome'),
(394, '2017-04-11 17:30:27', '139.228.17.159', 'Chrome'),
(395, '2017-04-11 17:30:32', '107.167.112.5', 'Opera'),
(396, '2017-04-11 17:31:33', '180.249.17.245', 'Chrome'),
(397, '2017-04-11 17:31:38', '182.253.163.14', 'Chrome'),
(398, '2017-04-11 17:32:08', '202.80.215.217', 'Chrome'),
(399, '2017-04-11 17:32:45', '120.188.95.126', 'Chrome'),
(400, '2017-04-11 17:32:55', '118.136.247.154', 'Firefox'),
(401, '2017-04-11 17:33:04', '66.102.6.211', 'Chrome'),
(402, '2017-04-11 17:33:04', '66.102.6.207', 'Chrome'),
(403, '2017-04-11 17:33:05', '66.102.6.209', 'Chrome'),
(404, '2017-04-11 17:34:10', '36.84.9.122', 'Firefox'),
(405, '2017-04-11 17:34:34', '120.188.94.195', 'Chrome'),
(406, '2017-04-11 17:34:55', '36.84.2.91', 'Chrome'),
(407, '2017-04-11 17:35:12', '125.164.16.170', 'Chrome'),
(408, '2017-04-11 17:35:35', '125.164.15.224', 'Chrome'),
(409, '2017-04-11 17:36:04', '114.125.70.243', 'Chrome'),
(410, '2017-04-11 17:36:29', '180.241.222.250', 'Chrome'),
(411, '2017-04-11 17:36:55', '112.215.44.57', 'Safari'),
(412, '2017-04-11 17:39:53', '114.4.82.125', 'Chrome'),
(413, '2017-04-11 17:39:58', '120.188.5.175', 'Chrome'),
(414, '2017-04-11 17:40:27', '103.233.157.202', 'Chrome'),
(415, '2017-04-11 17:44:13', '37.34.62.205', 'Other'),
(416, '2017-04-11 17:45:37', '120.188.32.191', 'Chrome'),
(417, '2017-04-11 17:46:53', '168.235.198.107', 'Safari'),
(418, '2017-04-11 17:47:00', '36.84.0.75', 'Chrome'),
(419, '2017-04-11 17:47:43', '182.253.163.7', 'Chrome'),
(420, '2017-04-11 17:47:49', '36.68.52.209', 'Safari'),
(421, '2017-04-11 17:48:03', '103.47.132.52', 'Chrome'),
(422, '2017-04-11 17:49:58', '36.66.211.11', 'Chrome'),
(423, '2017-04-11 17:50:12', '112.215.171.166', 'Chrome'),
(424, '2017-04-11 17:51:49', '103.4.167.243', 'Chrome'),
(425, '2017-04-11 17:51:51', '120.188.85.6', 'Chrome'),
(426, '2017-04-11 17:52:02', '120.188.81.83', 'Chrome'),
(427, '2017-04-11 17:52:52', '120.188.83.233', 'Chrome'),
(428, '2017-04-11 17:53:37', '125.165.48.195', 'Firefox'),
(429, '2017-04-11 17:54:20', '203.130.236.249', 'Chrome'),
(430, '2017-04-11 17:54:28', '115.178.238.196', 'Mozilla'),
(431, '2017-04-11 17:54:49', '202.179.189.74', 'Mozilla'),
(432, '2017-04-11 17:56:50', '182.253.62.114', 'Chrome'),
(433, '2017-04-11 17:57:37', '112.215.154.28', 'Chrome'),
(434, '2017-04-11 17:57:53', '110.137.169.204', 'Chrome'),
(435, '2017-04-11 17:57:56', '223.255.227.26', 'Chrome'),
(436, '2017-04-11 17:58:01', '112.215.63.20', 'Chrome'),
(437, '2017-04-11 17:58:46', '139.194.53.216', 'Chrome'),
(438, '2017-04-11 17:59:15', '27.50.17.11', 'Chrome'),
(439, '2017-04-11 17:59:34', '182.253.163.50', 'Firefox'),
(440, '2017-04-11 17:59:47', '36.76.123.254', 'Chrome'),
(441, '2017-04-11 18:00:20', '103.47.132.22', 'Chrome'),
(442, '2017-04-11 18:00:30', '8.37.233.83', 'Safari'),
(443, '2017-04-11 18:00:46', '114.125.180.165', 'Chrome'),
(444, '2017-04-11 18:01:39', '180.252.143.230', 'Chrome'),
(445, '2017-04-11 18:01:45', '163.53.185.146', 'Chrome'),
(446, '2017-04-11 18:02:33', '114.125.207.121', 'Chrome'),
(447, '2017-04-11 18:02:40', '36.72.9.120', 'Chrome'),
(448, '2017-04-11 18:04:44', '61.5.60.185', 'Chrome'),
(449, '2017-04-11 18:04:46', '36.80.153.97', 'Chrome'),
(450, '2017-04-11 18:05:41', '180.252.239.223', 'Chrome'),
(451, '2017-04-11 18:07:10', '120.188.33.120', 'Chrome'),
(452, '2017-04-11 18:07:10', '118.97.50.22', 'Chrome'),
(453, '2017-04-11 18:08:05', '118.97.50.23', 'Chrome'),
(454, '2017-04-11 18:09:09', '36.84.229.118', 'Chrome'),
(455, '2017-04-11 18:09:12', '114.125.11.225', 'Chrome'),
(456, '2017-04-11 18:09:49', '182.23.59.66', 'Firefox'),
(457, '2017-04-11 18:10:16', '118.97.50.24', 'Chrome'),
(458, '2017-04-11 18:10:59', '175.111.91.19', 'Firefox'),
(459, '2017-04-11 18:11:01', '121.101.131.66', 'Chrome'),
(460, '2017-04-11 18:11:16', '2.235.170.197', 'Chrome'),
(461, '2017-04-11 18:11:43', '180.247.185.142', 'Chrome'),
(462, '2017-04-11 18:12:38', '36.80.179.43', 'Firefox'),
(463, '2017-04-11 18:12:53', '36.75.240.166', 'Chrome'),
(464, '2017-04-11 18:13:31', '118.97.241.130', 'Chrome'),
(465, '2017-04-11 18:13:31', '101.128.85.22', 'Chrome'),
(466, '2017-04-11 18:13:48', '182.253.122.110', 'Chrome'),
(467, '2017-04-11 18:14:31', '120.188.65.57', 'Chrome'),
(468, '2017-04-11 18:14:38', '115.164.60.248', 'Chrome'),
(469, '2017-04-11 18:14:42', '180.250.206.226', 'Chrome'),
(470, '2017-04-11 18:15:06', '125.165.103.49', 'Chrome'),
(471, '2017-04-11 18:15:25', '104.237.243.90', 'Firefox'),
(472, '2017-04-11 18:15:30', '180.254.241.158', 'Chrome'),
(473, '2017-04-11 18:15:50', '36.85.5.162', 'Chrome'),
(474, '2017-04-11 18:15:56', '120.188.67.11', 'Chrome'),
(475, '2017-04-11 18:15:58', '38.80.23.2', 'Firefox'),
(476, '2017-04-11 18:16:01', '61.94.194.3', 'Chrome'),
(477, '2017-04-11 18:16:02', '222.124.22.228', 'Chrome'),
(478, '2017-04-11 18:16:07', '180.178.93.249', 'Chrome'),
(479, '2017-04-11 18:16:32', '36.80.213.229', 'Chrome'),
(480, '2017-04-11 18:17:27', '175.184.250.82', 'Chrome'),
(481, '2017-04-11 18:17:56', '103.31.109.2', 'Chrome'),
(482, '2017-04-11 18:18:11', '168.235.202.213', 'Safari'),
(483, '2017-04-11 18:18:43', '120.188.85.102', 'Chrome'),
(484, '2017-04-11 18:18:49', '61.5.84.239', 'Chrome'),
(485, '2017-04-11 18:18:51', '36.73.220.140', 'Chrome'),
(486, '2017-04-11 18:18:57', '180.247.181.120', 'Chrome'),
(487, '2017-04-11 18:19:50', '36.73.22.116', 'Chrome'),
(488, '2017-04-11 18:21:09', '36.84.229.80', 'Chrome'),
(489, '2017-04-11 18:21:23', '120.188.67.170', 'Chrome'),
(490, '2017-04-11 18:21:24', '36.85.13.189', 'Chrome'),
(491, '2017-04-11 18:22:18', '66.96.246.66', 'Chrome'),
(492, '2017-04-11 18:22:48', '111.68.27.251', 'Chrome'),
(493, '2017-04-11 18:23:31', '202.80.212.117', 'Chrome'),
(494, '2017-04-11 18:23:59', '112.215.171.69', 'Mozilla'),
(495, '2017-04-11 18:24:35', '222.124.214.250', 'Chrome'),
(496, '2017-04-11 18:24:53', '140.0.203.15', 'Chrome'),
(497, '2017-04-11 18:24:58', '116.254.126.142', 'Chrome'),
(498, '2017-04-11 18:25:13', '120.188.66.255', 'Chrome'),
(499, '2017-04-11 18:25:33', '168.235.194.213', 'Safari'),
(500, '2017-04-11 18:25:48', '114.125.9.160', 'Safari'),
(501, '2017-04-11 18:25:54', '112.215.201.184', 'Safari'),
(502, '2017-04-11 18:25:57', '125.163.255.80', 'Chrome'),
(503, '2017-04-11 18:26:09', '168.235.200.204', 'Safari'),
(504, '2017-04-11 18:26:37', '128.199.233.142', 'Safari'),
(505, '2017-04-11 18:28:11', '112.215.154.169', 'Firefox'),
(506, '2017-04-11 18:28:25', '168.235.195.242', 'Safari'),
(507, '2017-04-11 18:29:06', '223.25.97.210', 'Chrome'),
(508, '2017-04-11 18:30:24', '203.176.183.20', 'Chrome'),
(509, '2017-04-11 18:30:50', '180.253.126.127', 'Chrome'),
(510, '2017-04-11 18:31:06', '36.78.129.171', 'Chrome'),
(511, '2017-04-11 18:33:51', '14.102.152.234', 'Chrome'),
(512, '2017-04-11 18:34:09', '8.37.230.53', 'Safari'),
(513, '2017-04-11 18:34:27', '112.215.172.183', 'Chrome'),
(514, '2017-04-11 18:35:45', '112.215.65.96', 'Safari'),
(515, '2017-04-11 18:36:42', '110.5.102.56', 'Chrome'),
(516, '2017-04-11 18:37:05', '114.121.246.246', 'Chrome'),
(517, '2017-04-11 18:37:17', '110.139.27.171', 'Chrome'),
(518, '2017-04-11 18:39:05', '120.188.65.207', 'Chrome'),
(519, '2017-04-11 18:39:31', '180.254.64.231', 'Chrome'),
(520, '2017-04-11 18:39:34', '202.133.6.54', 'Chrome'),
(521, '2017-04-11 18:40:40', '36.68.41.249', 'Chrome'),
(522, '2017-04-11 18:43:08', '125.163.57.73', 'Chrome'),
(523, '2017-04-11 18:44:21', '114.121.157.148', 'Chrome'),
(524, '2017-04-11 18:44:46', '140.0.229.214', 'Chrome'),
(525, '2017-04-11 18:46:15', '103.55.216.76', 'Firefox'),
(526, '2017-04-11 18:47:25', '120.188.4.116', 'Chrome'),
(527, '2017-04-11 18:48:03', '202.124.205.203', 'Mozilla'),
(528, '2017-04-11 18:48:11', '202.80.212.84', 'Chrome'),
(529, '2017-04-11 18:48:52', '36.74.26.7', 'Chrome'),
(530, '2017-04-11 18:48:52', '210.57.215.142', 'Chrome'),
(531, '2017-04-11 18:48:56', '202.43.183.130', 'Chrome'),
(532, '2017-04-11 18:49:16', '61.94.50.125', 'Chrome'),
(533, '2017-04-11 18:50:14', '139.192.185.41', 'Chrome'),
(534, '2017-04-11 18:50:46', '36.72.118.174', 'Chrome'),
(535, '2017-04-11 18:51:16', '118.136.225.170', 'Chrome'),
(536, '2017-04-11 18:51:48', '202.67.46.40', 'Chrome'),
(537, '2017-04-11 18:52:04', '182.253.33.51', 'Firefox'),
(538, '2017-04-11 18:52:06', '180.254.26.52', 'Chrome'),
(539, '2017-04-11 18:52:07', '36.66.168.63', 'Chrome'),
(540, '2017-04-11 18:52:24', '112.215.45.116', 'Firefox'),
(541, '2017-04-11 18:52:52', '112.215.172.67', 'Chrome'),
(542, '2017-04-11 18:54:21', '180.245.67.128', 'Chrome'),
(543, '2017-04-11 18:55:01', '36.83.178.178', 'Chrome'),
(544, '2017-04-11 18:55:10', '118.96.213.178', 'Firefox'),
(545, '2017-04-11 18:56:30', '114.125.170.252', 'Chrome'),
(546, '2017-04-11 18:56:43', '124.153.32.100', 'Chrome'),
(547, '2017-04-11 18:57:11', '120.188.74.139', 'Mozilla'),
(548, '2017-04-11 18:57:47', '124.153.33.42', 'Mozilla'),
(549, '2017-04-11 18:58:44', '36.78.128.112', 'Firefox'),
(550, '2017-04-11 18:59:10', '103.228.26.4', 'Chrome'),
(551, '2017-04-11 19:00:17', '36.82.101.17', 'Chrome'),
(552, '2017-04-11 19:01:21', '139.0.54.49', 'Chrome'),
(553, '2017-04-11 19:01:23', '180.252.103.36', 'Mozilla'),
(554, '2017-04-11 19:01:33', '117.102.64.82', 'Firefox'),
(555, '2017-04-11 19:03:59', '202.67.44.8', 'Chrome'),
(556, '2017-04-11 19:04:16', '114.125.26.15', 'Chrome'),
(557, '2017-04-11 19:04:23', '180.246.224.105', 'Chrome'),
(558, '2017-04-11 19:05:05', '112.215.170.35', 'Mozilla'),
(559, '2017-04-11 19:05:33', '180.251.217.107', 'Chrome'),
(560, '2017-04-11 19:06:35', '36.84.39.119', 'Chrome'),
(561, '2017-04-11 19:07:10', '103.241.206.74', 'Chrome'),
(562, '2017-04-11 19:08:18', '203.160.128.8', 'Chrome'),
(563, '2017-04-11 19:09:24', '36.71.230.230', 'Chrome'),
(564, '2017-04-11 19:09:33', '118.136.40.213', 'Chrome'),
(565, '2017-04-11 19:10:26', '8.37.225.146', 'Firefox'),
(566, '2017-04-11 19:10:27', '180.251.6.162', 'Chrome'),
(567, '2017-04-11 19:10:34', '112.215.201.35', 'Chrome'),
(568, '2017-04-11 19:10:40', '120.188.64.132', 'Chrome'),
(569, '2017-04-11 19:11:13', '112.215.151.179', 'Chrome'),
(570, '2017-04-11 19:11:34', '107.167.99.205', 'Opera'),
(571, '2017-04-11 19:11:48', '210.211.18.82', 'Chrome'),
(572, '2017-04-11 19:11:51', '112.215.174.151', 'Chrome'),
(573, '2017-04-11 19:12:02', '120.188.73.159', 'Chrome'),
(574, '2017-04-11 19:13:39', '36.81.46.228', 'Chrome'),
(575, '2017-04-11 19:15:31', '36.77.89.224', 'Chrome'),
(576, '2017-04-11 19:16:10', '107.167.112.144', 'Chrome'),
(577, '2017-04-11 19:16:23', '125.165.178.198', 'Firefox'),
(578, '2017-04-11 19:16:50', '139.192.58.131', 'Chrome'),
(579, '2017-04-11 19:16:54', '36.69.12.48', 'Chrome'),
(580, '2017-04-11 19:17:14', '202.179.190.162', 'Chrome'),
(581, '2017-04-11 19:17:26', '36.78.33.42', 'Chrome'),
(582, '2017-04-11 19:17:48', '103.213.131.160', 'Chrome'),
(583, '2017-04-11 19:17:55', '36.85.24.1', 'Mozilla'),
(584, '2017-04-11 19:18:13', '202.158.89.154', 'Chrome'),
(585, '2017-04-11 19:19:02', '36.70.91.134', 'Firefox'),
(586, '2017-04-11 19:19:15', '114.125.30.235', 'Chrome'),
(587, '2017-04-11 19:19:52', '125.163.174.117', 'Chrome'),
(588, '2017-04-11 19:20:01', '103.17.246.48', 'Firefox'),
(589, '2017-04-11 19:21:22', '36.88.134.156', 'Chrome'),
(590, '2017-04-11 19:22:53', '120.188.5.152', 'Mozilla'),
(591, '2017-04-11 19:23:28', '114.124.33.225', 'Chrome'),
(592, '2017-04-11 19:23:44', '112.215.200.147', 'Chrome'),
(593, '2017-04-11 19:24:23', '180.253.125.143', 'Chrome'),
(594, '2017-04-11 19:24:30', '36.69.83.3', 'Chrome'),
(595, '2017-04-11 19:25:24', '36.68.118.78', 'Firefox'),
(596, '2017-04-11 19:25:36', '180.245.99.108', 'Chrome'),
(597, '2017-04-11 19:26:15', '8.37.225.106', 'Firefox'),
(598, '2017-04-11 19:26:16', '58.10.55.252', 'Chrome'),
(599, '2017-04-11 19:27:07', '36.73.65.61', 'Firefox'),
(600, '2017-04-11 19:27:18', '202.62.18.53', 'Chrome'),
(601, '2017-04-11 19:27:39', '180.243.101.157', 'Chrome'),
(602, '2017-04-11 19:29:40', '180.249.209.233', 'Chrome'),
(603, '2017-04-11 19:31:13', '120.188.7.226', 'Chrome'),
(604, '2017-04-11 19:31:29', '36.85.139.235', 'Firefox'),
(605, '2017-04-11 19:32:43', '203.142.64.87', 'Chrome'),
(606, '2017-04-11 19:33:19', '107.167.112.181', 'Opera'),
(607, '2017-04-11 19:34:05', '182.253.73.4', 'Firefox'),
(608, '2017-04-11 19:34:16', '110.136.57.170', 'Chrome'),
(609, '2017-04-11 19:38:24', '112.215.200.152', 'Mozilla'),
(610, '2017-04-11 19:38:37', '168.235.205.184', 'Safari'),
(611, '2017-04-11 19:39:48', '125.164.109.171', 'Chrome'),
(612, '2017-04-11 19:39:50', '36.73.58.152', 'Chrome'),
(613, '2017-04-11 19:40:16', '202.62.16.15', 'Chrome'),
(614, '2017-04-11 19:41:57', '36.73.54.54', 'Chrome'),
(615, '2017-04-11 19:42:26', '36.80.151.109', 'Firefox'),
(616, '2017-04-11 19:43:14', '202.67.40.199', 'Chrome'),
(617, '2017-04-11 19:43:29', '114.4.83.133', 'Chrome'),
(618, '2017-04-11 19:43:31', '173.193.202.116', 'Firefox'),
(619, '2017-04-11 19:44:18', '202.62.16.181', 'Chrome'),
(620, '2017-04-11 19:45:13', '167.114.233.118', 'Firefox'),
(621, '2017-04-11 19:45:30', '180.241.24.74', 'Chrome'),
(622, '2017-04-11 19:47:01', '125.166.212.190', 'Chrome'),
(623, '2017-04-11 19:47:21', '180.241.179.220', 'Chrome'),
(624, '2017-04-11 19:47:27', '125.167.75.246', 'Chrome'),
(625, '2017-04-11 19:47:48', '168.235.194.226', 'Safari'),
(626, '2017-04-11 19:52:01', '118.97.137.170', 'Chrome'),
(627, '2017-04-11 19:52:53', '180.247.208.196', 'Chrome'),
(628, '2017-04-11 19:54:25', '103.9.124.211', 'Chrome'),
(629, '2017-04-11 19:56:29', '120.188.94.118', 'Chrome'),
(630, '2017-04-11 19:56:33', '36.73.12.186', 'Firefox'),
(631, '2017-04-11 19:56:44', '36.66.254.39', 'Firefox'),
(632, '2017-04-11 19:57:28', '120.188.81.56', 'Chrome'),
(633, '2017-04-11 19:59:02', '36.82.7.245', 'Chrome'),
(634, '2017-04-11 19:59:36', '103.212.43.138', 'Chrome'),
(635, '2017-04-11 20:00:38', '139.193.114.21', 'Chrome'),
(636, '2017-04-11 20:00:50', '112.215.175.249', 'Firefox'),
(637, '2017-04-11 20:01:24', '120.188.33.237', 'Chrome'),
(638, '2017-04-11 20:01:53', '36.80.106.53', 'Chrome'),
(639, '2017-04-11 20:02:10', '36.84.0.88', 'Firefox'),
(640, '2017-04-11 20:03:00', '103.57.192.122', 'Chrome'),
(641, '2017-04-11 20:04:55', '36.72.190.47', 'Firefox'),
(642, '2017-04-11 20:06:41', '125.163.105.25', 'Chrome'),
(643, '2017-04-11 20:07:06', '115.178.234.139', 'Mozilla'),
(644, '2017-04-11 20:07:31', '114.120.234.114', 'Mozilla'),
(645, '2017-04-11 20:08:50', '202.67.46.227', 'Chrome'),
(646, '2017-04-11 20:09:22', '36.77.160.216', 'Chrome'),
(647, '2017-04-11 20:10:14', '139.193.15.145', 'Chrome'),
(648, '2017-04-11 20:10:47', '112.215.172.245', 'Chrome'),
(649, '2017-04-11 20:10:50', '207.241.226.232', 'Mozilla'),
(650, '2017-04-11 20:11:07', '120.188.0.239', 'Chrome'),
(651, '2017-04-11 20:11:09', '180.251.99.141', 'Chrome'),
(652, '2017-04-11 20:11:13', '125.162.56.58', 'Chrome'),
(653, '2017-04-11 20:11:39', '36.72.50.199', 'Chrome'),
(654, '2017-04-11 20:12:20', '139.194.66.128', 'Chrome'),
(655, '2017-04-11 20:12:55', '36.78.127.45', 'Firefox'),
(656, '2017-04-11 20:13:00', '36.74.170.244', 'Chrome'),
(657, '2017-04-11 20:13:59', '36.83.123.80', 'Chrome'),
(658, '2017-04-11 20:14:36', '36.84.13.207', 'Chrome'),
(659, '2017-04-11 20:14:50', '112.198.68.78', 'Chrome'),
(660, '2017-04-11 20:15:20', '180.251.88.168', 'Firefox'),
(661, '2017-04-11 20:15:32', '119.110.69.226', 'Chrome'),
(662, '2017-04-11 20:16:00', '36.85.65.250', 'Chrome'),
(663, '2017-04-11 20:16:43', '112.78.141.82', 'Firefox'),
(664, '2017-04-11 20:16:57', '125.163.59.51', 'Chrome'),
(665, '2017-04-11 20:17:19', '116.197.132.78', 'Firefox'),
(666, '2017-04-11 20:17:39', '120.188.67.180', 'Chrome'),
(667, '2017-04-11 20:18:27', '114.4.83.35', 'Chrome'),
(668, '2017-04-11 20:18:28', '125.162.19.20', 'Firefox'),
(669, '2017-04-11 20:18:29', '182.253.3.140', 'Chrome'),
(670, '2017-04-11 20:21:45', '36.78.130.219', 'Firefox'),
(671, '2017-04-11 20:24:05', '180.246.25.27', 'Firefox'),
(672, '2017-04-11 20:25:03', '202.150.146.82', 'Chrome'),
(673, '2017-04-11 20:25:05', '125.162.222.87', 'Mozilla'),
(674, '2017-04-11 20:25:34', '120.188.86.20', 'Chrome'),
(675, '2017-04-11 20:25:43', '125.163.109.106', 'Chrome'),
(676, '2017-04-11 20:26:12', '120.188.81.160', 'Chrome'),
(677, '2017-04-11 20:29:23', '175.111.89.10', 'Chrome'),
(678, '2017-04-11 20:30:27', '114.121.245.17', 'Mozilla'),
(679, '2017-04-11 20:32:54', '110.139.200.11', 'Chrome'),
(680, '2017-04-11 20:33:00', '114.125.52.89', 'Chrome'),
(681, '2017-04-11 20:33:25', '36.74.177.233', 'Chrome'),
(682, '2017-04-11 20:33:44', '180.254.162.29', 'Firefox'),
(683, '2017-04-11 20:33:53', '125.160.100.4', 'Chrome'),
(684, '2017-04-11 20:34:59', '202.77.111.104', 'Chrome'),
(685, '2017-04-11 20:35:16', '36.69.153.83', 'Chrome'),
(686, '2017-04-11 20:35:19', '180.254.13.225', 'Chrome'),
(687, '2017-04-11 20:35:24', '180.251.214.117', 'Chrome'),
(688, '2017-04-11 20:35:27', '36.74.134.188', 'Chrome'),
(689, '2017-04-11 20:35:41', '107.167.103.167', 'Opera'),
(690, '2017-04-11 20:36:56', '139.193.222.23', 'Chrome'),
(691, '2017-04-11 20:36:59', '182.253.72.87', 'Chrome'),
(692, '2017-04-11 20:37:10', '101.255.64.210', 'Chrome'),
(693, '2017-04-11 20:38:20', '36.69.60.79', 'Chrome'),
(694, '2017-04-11 20:38:34', '36.84.229.27', 'Firefox'),
(695, '2017-04-11 20:41:28', '202.62.16.239', 'Firefox'),
(696, '2017-04-11 20:41:42', '36.81.58.185', 'Chrome'),
(697, '2017-04-11 20:41:44', '112.215.152.52', 'Chrome'),
(698, '2017-04-11 20:42:08', '36.74.224.172', 'Chrome'),
(699, '2017-04-11 20:42:11', '112.215.200.247', 'Mozilla'),
(700, '2017-04-11 20:42:34', '112.215.153.115', 'Chrome'),
(701, '2017-04-11 20:42:58', '223.164.0.178', 'Chrome'),
(702, '2017-04-11 20:42:58', '36.72.62.17', 'Chrome'),
(703, '2017-04-11 20:43:38', '103.209.131.44', 'Firefox'),
(704, '2017-04-11 20:43:43', '139.195.33.29', 'Chrome'),
(705, '2017-04-11 20:44:51', '103.61.248.82', 'Chrome'),
(706, '2017-04-11 20:46:50', '175.103.43.86', 'Chrome'),
(707, '2017-04-11 20:47:49', '120.188.94.79', 'Chrome'),
(708, '2017-04-11 20:47:53', '202.169.46.130', 'Chrome'),
(709, '2017-04-11 20:48:37', '158.140.170.38', 'Chrome'),
(710, '2017-04-11 20:49:55', '180.245.193.140', 'Chrome'),
(711, '2017-04-11 20:50:24', '180.246.157.179', 'Chrome'),
(712, '2017-04-11 20:51:51', '36.76.23.139', 'Chrome'),
(713, '2017-04-11 20:52:06', '202.67.41.213', 'Chrome'),
(714, '2017-04-11 20:52:34', '36.78.163.149', 'Chrome'),
(715, '2017-04-11 20:53:12', '158.140.166.0', 'Chrome'),
(716, '2017-04-11 20:55:36', '207.244.86.209', 'Chrome'),
(717, '2017-04-11 20:56:35', '120.188.79.122', 'Chrome'),
(718, '2017-04-11 20:58:11', '36.73.104.74', 'Chrome'),
(719, '2017-04-11 20:58:21', '222.124.22.251', 'Firefox'),
(720, '2017-04-11 20:58:32', '120.188.93.249', 'Chrome'),
(721, '2017-04-11 21:02:03', '120.188.33.199', 'Chrome'),
(722, '2017-04-11 21:02:06', '125.161.64.96', 'Chrome'),
(723, '2017-04-11 21:03:41', '182.253.122.125', 'Chrome'),
(724, '2017-04-11 21:04:06', '36.68.234.47', 'Chrome'),
(725, '2017-04-11 21:04:33', '36.72.94.211', 'Chrome'),
(726, '2017-04-11 21:04:48', '125.163.125.211', 'Chrome'),
(727, '2017-04-11 21:04:52', '180.248.243.155', 'Chrome'),
(728, '2017-04-11 21:04:58', '182.253.34.175', 'Mozilla'),
(729, '2017-04-11 21:05:28', '103.24.49.225', 'Chrome'),
(730, '2017-04-11 21:06:42', '180.248.250.226', 'Chrome'),
(731, '2017-04-11 21:09:06', '36.84.157.255', 'Chrome'),
(732, '2017-04-11 21:09:09', '202.152.156.210', 'Firefox'),
(733, '2017-04-11 21:09:41', '114.125.53.87', 'Chrome'),
(734, '2017-04-11 21:09:43', '120.188.7.170', 'Chrome'),
(735, '2017-04-11 21:11:29', '152.118.148.226', 'Internet Explorer'),
(736, '2017-04-11 21:11:43', '182.253.188.125', 'Chrome'),
(737, '2017-04-11 21:12:47', '5.254.97.108', 'Chrome'),
(738, '2017-04-11 21:13:23', '120.188.3.109', 'Chrome'),
(739, '2017-04-11 21:14:38', '180.246.199.52', 'Chrome'),
(740, '2017-04-11 21:15:05', '210.211.17.14', 'Chrome'),
(741, '2017-04-11 21:15:59', '36.82.201.211', 'Chrome'),
(742, '2017-04-11 21:16:14', '103.23.102.111', 'Chrome'),
(743, '2017-04-11 21:17:19', '36.81.75.68', 'Chrome'),
(744, '2017-04-11 21:18:59', '114.125.39.153', 'Chrome'),
(745, '2017-04-11 21:20:34', '222.124.52.127', 'Chrome'),
(746, '2017-04-11 21:21:13', '180.248.199.49', 'Chrome'),
(747, '2017-04-11 21:22:00', '125.163.114.139', 'Chrome'),
(748, '2017-04-11 21:25:37', '107.167.99.151', 'Opera'),
(749, '2017-04-11 21:26:05', '114.125.116.95', 'Chrome'),
(750, '2017-04-11 21:26:49', '202.62.18.115', 'Chrome'),
(751, '2017-04-11 21:26:50', '61.8.69.82', 'Chrome'),
(752, '2017-04-11 21:28:31', '113.161.224.83', 'Chrome'),
(753, '2017-04-11 21:28:45', '103.47.132.24', 'Chrome'),
(754, '2017-04-11 21:29:03', '120.188.64.12', 'Chrome'),
(755, '2017-04-11 21:30:03', '103.47.134.26', 'Chrome'),
(756, '2017-04-11 21:30:29', '202.9.85.34', 'Chrome'),
(757, '2017-04-11 21:31:59', '182.253.62.142', 'Chrome'),
(758, '2017-04-11 21:32:07', '36.88.45.251', 'Chrome'),
(759, '2017-04-11 21:32:24', '114.121.133.17', 'Mozilla'),
(760, '2017-04-11 21:33:18', '190.233.193.231', 'Chrome'),
(761, '2017-04-11 21:33:41', '202.80.215.57', 'Chrome'),
(762, '2017-04-11 21:34:18', '115.178.216.124', 'Chrome'),
(763, '2017-04-11 21:37:01', '222.165.226.122', 'Firefox'),
(764, '2017-04-11 21:38:07', '36.82.13.155', 'Chrome'),
(765, '2017-04-11 21:38:30', '202.182.59.185', 'Firefox'),
(766, '2017-04-11 21:38:42', '103.21.206.66', 'Chrome'),
(767, '2017-04-11 21:39:14', '36.69.87.71', 'Chrome'),
(768, '2017-04-11 21:39:42', '43.247.13.202', 'Chrome'),
(769, '2017-04-11 21:40:08', '66.102.7.143', 'Chrome'),
(770, '2017-04-11 21:43:21', '168.235.195.74', 'Safari'),
(771, '2017-04-11 21:44:11', '103.8.12.99', 'Chrome'),
(772, '2017-04-11 21:44:14', '180.252.137.203', 'Chrome'),
(773, '2017-04-11 21:44:27', '36.87.53.20', 'Safari'),
(774, '2017-04-11 21:45:06', '114.125.87.178', 'Chrome'),
(775, '2017-04-11 21:46:04', '158.140.172.34', 'Chrome'),
(776, '2017-04-11 21:46:12', '61.94.132.66', 'Chrome'),
(777, '2017-04-11 21:47:36', '101.255.60.254', 'Chrome'),
(778, '2017-04-11 21:49:09', '36.74.102.19', 'Chrome'),
(779, '2017-04-11 21:49:42', '180.246.244.93', 'Chrome'),
(780, '2017-04-11 21:49:52', '118.97.151.193', 'Firefox'),
(781, '2017-04-11 21:50:01', '117.102.122.242', 'Chrome'),
(782, '2017-04-11 21:50:51', '36.71.249.134', 'Chrome'),
(783, '2017-04-11 21:51:54', '112.215.171.45', 'Chrome'),
(784, '2017-04-11 21:52:18', '103.241.5.116', 'Chrome'),
(785, '2017-04-11 21:52:31', '36.78.103.212', 'Chrome'),
(786, '2017-04-11 21:53:09', '36.72.80.127', 'Chrome'),
(787, '2017-04-11 21:54:12', '36.78.123.228', 'Chrome'),
(788, '2017-04-11 21:54:16', '36.68.235.225', 'Chrome'),
(789, '2017-04-11 21:54:37', '125.161.181.154', 'Firefox'),
(790, '2017-04-11 21:55:13', '36.80.164.131', 'Chrome'),
(791, '2017-04-11 21:56:15', '180.245.211.69', 'Chrome'),
(792, '2017-04-11 21:56:16', '125.167.186.204', 'Chrome'),
(793, '2017-04-11 21:57:34', '114.125.119.153', 'Chrome'),
(794, '2017-04-11 21:59:59', '114.121.234.35', 'Chrome'),
(795, '2017-04-11 22:02:26', '107.167.103.67', 'Opera'),
(796, '2017-04-11 22:02:47', '36.80.9.250', 'Chrome'),
(797, '2017-04-11 22:02:50', '36.88.62.43', 'Chrome'),
(798, '2017-04-11 22:02:57', '114.125.184.105', 'Chrome'),
(799, '2017-04-11 22:03:07', '185.182.81.53', 'Chrome'),
(800, '2017-04-11 22:04:44', '66.102.7.141', 'Chrome'),
(801, '2017-04-11 22:04:57', '36.88.158.219', 'Chrome'),
(802, '2017-04-11 22:06:25', '36.73.34.208', 'Chrome'),
(803, '2017-04-11 22:07:58', '36.74.20.46', 'Chrome'),
(804, '2017-04-11 22:08:28', '36.82.100.128', 'Chrome'),
(805, '2017-04-11 22:09:30', '112.215.65.245', 'Chrome'),
(806, '2017-04-11 22:09:42', '114.4.78.119', 'Chrome'),
(807, '2017-04-11 22:09:46', '110.137.171.177', 'Chrome'),
(808, '2017-04-11 22:09:47', '140.0.198.87', 'Mozilla'),
(809, '2017-04-11 22:10:20', '103.47.134.18', 'Chrome'),
(810, '2017-04-11 22:10:43', '36.66.46.34', 'Chrome'),
(811, '2017-04-11 22:11:32', '180.246.96.230', 'Chrome'),
(812, '2017-04-11 22:13:26', '146.185.31.213', 'Firefox'),
(813, '2017-04-11 22:18:49', '163.53.186.186', 'Firefox'),
(814, '2017-04-11 22:19:24', '202.62.16.98', 'Chrome'),
(815, '2017-04-11 22:21:09', '36.70.200.11', 'Chrome'),
(816, '2017-04-11 22:24:10', '112.215.45.58', 'Chrome'),
(817, '2017-04-11 22:25:14', '66.96.234.91', 'Chrome'),
(818, '2017-04-11 22:25:55', '103.66.199.34', 'Chrome'),
(819, '2017-04-11 22:26:53', '182.253.163.82', 'Chrome'),
(820, '2017-04-11 22:28:37', '103.3.44.1', 'Chrome'),
(821, '2017-04-11 22:29:22', '36.88.90.200', 'Chrome'),
(822, '2017-04-11 22:30:19', '180.254.255.166', 'Chrome'),
(823, '2017-04-11 22:30:24', '115.178.200.226', 'Chrome'),
(824, '2017-04-11 22:30:45', '120.188.1.120', 'Chrome'),
(825, '2017-04-11 22:32:14', '103.195.142.26', 'Chrome'),
(826, '2017-04-11 22:33:33', '120.188.0.9', 'Firefox'),
(827, '2017-04-11 22:35:18', '120.188.81.213', 'Chrome'),
(828, '2017-04-11 22:36:20', '182.253.131.41', 'Mozilla'),
(829, '2017-04-11 22:36:24', '8.37.234.123', 'Chrome'),
(830, '2017-04-11 22:36:27', '36.72.34.63', 'Chrome'),
(831, '2017-04-11 22:36:36', '115.178.239.80', 'Chrome'),
(832, '2017-04-11 22:36:54', '103.58.111.34', 'Chrome'),
(833, '2017-04-11 22:38:16', '8.37.225.224', 'Firefox'),
(834, '2017-04-11 22:38:19', '112.215.200.93', 'Chrome'),
(835, '2017-04-11 22:39:20', '120.188.92.156', 'Chrome'),
(836, '2017-04-11 22:39:27', '114.125.103.119', 'Chrome'),
(837, '2017-04-11 22:40:08', '107.167.112.73', 'Chrome'),
(838, '2017-04-11 22:42:02', '120.188.66.2', 'Chrome'),
(839, '2017-04-11 22:42:44', '36.72.134.144', 'Chrome'),
(840, '2017-04-11 22:43:13', '36.66.215.5', 'Firefox'),
(841, '2017-04-11 22:44:26', '114.125.101.241', 'Chrome'),
(842, '2017-04-11 22:45:36', '182.253.37.186', 'Firefox'),
(843, '2017-04-11 22:46:05', '114.125.117.183', 'Chrome'),
(844, '2017-04-11 22:46:05', '114.125.101.71', 'Chrome'),
(845, '2017-04-11 22:46:05', '114.125.101.255', 'Chrome'),
(846, '2017-04-11 22:47:28', '114.124.34.31', 'Mozilla'),
(847, '2017-04-11 22:48:28', '202.62.17.122', 'Chrome'),
(848, '2017-04-11 22:48:41', '139.192.131.90', 'Chrome'),
(849, '2017-04-11 22:52:52', '120.188.3.158', 'Chrome'),
(850, '2017-04-11 22:53:10', '200.77.128.224', 'Mozilla'),
(851, '2017-04-11 22:54:26', '112.215.151.215', 'Chrome'),
(852, '2017-04-11 22:55:40', '114.4.82.59', 'Chrome'),
(853, '2017-04-11 22:55:50', '36.79.229.121', 'Chrome'),
(854, '2017-04-11 22:57:41', '118.136.224.179', 'Chrome'),
(855, '2017-04-11 23:00:38', '202.67.41.242', 'Chrome'),
(856, '2017-04-11 23:01:11', '36.77.191.150', 'Mozilla'),
(857, '2017-04-11 23:01:26', '125.166.214.129', 'Chrome'),
(858, '2017-04-11 23:03:25', '202.93.231.81', 'Chrome'),
(859, '2017-04-11 23:03:40', '36.68.69.52', 'Chrome'),
(860, '2017-04-11 23:03:59', '112.215.152.222', 'Chrome'),
(861, '2017-04-11 23:04:55', '36.79.42.167', 'Chrome'),
(862, '2017-04-11 23:05:30', '103.47.134.3', 'Chrome'),
(863, '2017-04-11 23:10:29', '139.59.96.104', 'Chrome'),
(864, '2017-04-11 23:11:56', '36.73.101.192', 'Firefox'),
(865, '2017-04-11 23:12:39', '180.252.110.204', 'Chrome'),
(866, '2017-04-11 23:14:25', '36.84.224.105', 'Firefox'),
(867, '2017-04-11 23:15:20', '112.215.172.91', 'Chrome'),
(868, '2017-04-11 23:15:29', '43.252.159.29', 'Chrome'),
(869, '2017-04-11 23:16:19', '114.124.2.201', 'Chrome'),
(870, '2017-04-11 23:16:52', '103.77.50.21', 'Chrome'),
(871, '2017-04-11 23:18:18', '114.125.215.48', 'Mozilla'),
(872, '2017-04-11 23:19:02', '202.62.17.10', 'Chrome'),
(873, '2017-04-11 23:20:03', '202.93.231.70', 'Firefox'),
(874, '2017-04-11 23:20:33', '103.47.134.15', 'Firefox'),
(875, '2017-04-11 23:22:24', '120.188.77.49', 'Firefox'),
(876, '2017-04-11 23:22:51', '120.188.3.239', 'Chrome'),
(877, '2017-04-11 23:24:00', '180.189.162.131', 'Chrome'),
(878, '2017-04-11 23:24:20', '36.83.36.137', 'Chrome'),
(879, '2017-04-11 23:26:02', '175.111.89.42', 'Chrome'),
(880, '2017-04-11 23:26:56', '213.171.207.70', 'Chrome'),
(881, '2017-04-11 23:27:42', '180.252.173.112', 'Chrome'),
(882, '2017-04-11 23:28:22', '115.178.234.185', 'Chrome'),
(883, '2017-04-11 23:28:28', '36.77.83.38', 'Chrome'),
(884, '2017-04-11 23:29:16', '103.248.248.86', 'Chrome'),
(885, '2017-04-11 23:29:32', '180.254.74.221', 'Chrome'),
(886, '2017-04-11 23:29:39', '36.78.55.37', 'Firefox'),
(887, '2017-04-11 23:29:48', '112.78.191.34', 'Chrome'),
(888, '2017-04-11 23:30:04', '120.188.81.161', 'Chrome'),
(889, '2017-04-11 23:30:08', '115.178.201.60', 'Chrome'),
(890, '2017-04-11 23:31:14', '36.72.202.102', 'Chrome'),
(891, '2017-04-11 23:31:58', '120.188.79.93', 'Chrome'),
(892, '2017-04-11 23:33:26', '36.80.202.16', 'Firefox'),
(893, '2017-04-11 23:35:32', '139.194.22.183', 'Chrome'),
(894, '2017-04-11 23:38:11', '120.188.87.248', 'Chrome'),
(895, '2017-04-11 23:38:30', '182.253.163.75', 'Chrome'),
(896, '2017-04-11 23:39:26', '103.213.128.19', 'Chrome'),
(897, '2017-04-11 23:40:11', '202.169.53.3', 'Firefox'),
(898, '2017-04-11 23:41:53', '202.67.40.1', 'Chrome'),
(899, '2017-04-11 23:43:22', '120.188.66.119', 'Chrome'),
(900, '2017-04-11 23:43:42', '36.74.115.169', 'Chrome'),
(901, '2017-04-11 23:46:07', '103.47.132.27', 'Chrome'),
(902, '2017-04-11 23:46:19', '180.241.75.46', 'Mozilla'),
(903, '2017-04-11 23:46:19', '36.84.228.213', 'Chrome'),
(904, '2017-04-11 23:46:44', '118.136.88.249', 'Chrome'),
(905, '2017-04-11 23:49:50', '120.188.83.242', 'Chrome'),
(906, '2017-04-11 23:49:52', '36.77.137.120', 'Chrome');
INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(907, '2017-05-01 12:24:03', '::1', NULL),
(908, '2017-05-01 12:24:53', '::1', NULL),
(909, '2017-05-01 12:25:57', '::1', NULL),
(910, '2017-05-01 17:13:50', '::1', NULL),
(911, '2017-05-01 18:26:09', '::1', NULL),
(912, '2017-05-06 14:43:17', '::1', 'Firefox'),
(913, '2017-05-07 02:18:38', '::1', 'Firefox'),
(914, '2017-05-13 12:19:10', '::1', 'Firefox'),
(915, '2017-05-13 17:08:02', '::1', 'Firefox'),
(916, '2017-05-16 12:30:09', '::1', 'Firefox'),
(917, '2017-05-17 07:46:05', '::1', 'Firefox'),
(918, '2017-05-23 05:01:55', '::1', 'Firefox'),
(919, '2017-06-01 15:37:00', '::1', 'Firefox'),
(920, '2017-06-21 00:48:57', '::1', 'Firefox'),
(921, '2017-06-21 22:58:34', '::1', 'Firefox'),
(922, '2017-06-23 23:00:36', '::1', 'Firefox'),
(923, '2017-06-26 22:25:17', '::1', 'Firefox'),
(924, '2017-07-01 01:10:04', '::1', 'Firefox'),
(925, '2019-07-23 16:08:13', '::1', 'Firefox'),
(926, '2019-07-23 17:46:12', '::1', 'Firefox'),
(927, '2019-07-26 04:30:11', '::1', 'Firefox'),
(928, '2019-07-26 21:39:10', '::1', 'Firefox'),
(929, '2019-08-04 01:43:52', '::1', 'Firefox'),
(930, '2019-08-13 20:53:36', '::1', 'Firefox'),
(931, '2019-08-15 01:12:14', '::1', 'Firefox'),
(932, '2019-08-18 04:58:29', '::1', 'Firefox'),
(933, '2019-08-20 05:54:24', '::1', 'Firefox'),
(934, '2019-08-20 17:03:03', '::1', 'Firefox'),
(935, '2019-08-25 21:44:41', '::1', 'Firefox'),
(936, '2019-08-28 05:28:28', '::1', 'Firefox'),
(937, '2019-08-29 18:14:04', '::1', 'Firefox'),
(938, '2019-09-01 05:20:00', '::1', 'Firefox'),
(939, '2019-09-01 20:13:17', '::1', 'Firefox'),
(940, '2019-09-01 20:13:17', '::1', 'Firefox'),
(941, '2019-09-02 19:03:45', '::1', 'Firefox');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi`
--

CREATE TABLE `tbl_registrasi` (
  `registrasi_id` int(11) NOT NULL,
  `registrasi_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mahasiswa_id` int(11) NOT NULL,
  `makulsespek_id` int(11) NOT NULL,
  `registrasi_status` varchar(15) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi`
--

INSERT INTO `tbl_registrasi` (`registrasi_id`, `registrasi_tanggal`, `mahasiswa_id`, `makulsespek_id`, `registrasi_status`) VALUES
(2, '2019-09-02 20:44:29', 17, 9, 'Diterima'),
(4, '2019-09-02 22:26:03', 19, 5, 'Diterima'),
(5, '2019-09-03 00:10:59', 20, 5, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `ruangan_id` int(11) NOT NULL,
  `ruangan_kode` varchar(10) NOT NULL,
  `ruangan_nama` varchar(50) NOT NULL,
  `ruangan_lantai` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`ruangan_id`, `ruangan_kode`, `ruangan_nama`, `ruangan_lantai`) VALUES
(3, 'R001', 'RL1-001', 'Lantai I'),
(4, 'R002', 'RL2-002', 'Lantai II'),
(5, 'R003', 'RL1-003', 'Lantai I'),
(6, 'R004', 'RL2-004', 'Lantai II');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahunakademik`
--

CREATE TABLE `tbl_tahunakademik` (
  `tahunakademik_id` int(11) NOT NULL,
  `tahunakademik_nama` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahunakademik`
--

INSERT INTO `tbl_tahunakademik` (`tahunakademik_id`, `tahunakademik_nama`) VALUES
(2, '2016/2017'),
(3, '2017/2018'),
(4, '2018/2019'),
(5, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`) VALUES
(18, 'Belajar di luar ruangan merupakan cara yang efektif dalam belajar', '<p>Menjalani aktifitas belajar yang padat, terkadang dapat meningkatkan stres yang tinggi bagi siswa. Setiap siswa memiliki cara yang berbeda untuk mengembalikan semangat mereka dalam belajar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel v Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:15:54', 1, 'Pendidikan', 6, '2dc57557d0e3902753e5e88979119e67.jpg', 1, 'Admin Akademik STMIK IBBI Medan', 1),
(19, 'Cantik, multi talenta. itulah sebuat untuk siswa yang satu ini', '<p>Talenta luar biasa bukan hanya dimiliki oleh kaum pria saja. Nyatanya siswa cantik yang satu ini sangat berakat memainkan alat musik tradisional yaitu seruling. Ini adalah sampel artikel&nbsp; Ini adalah sampel artikel&nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel v Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel vv Ini adalah sampel artikel Ini adalah sampel artikel vvv Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:21:24', 6, 'Prestasi', 7, '2c4b0960f1ca907c24af163b29ae1cec.jpg', 1, 'Admin Akademik STMIK IBBI Medan', 0),
(20, 'STIE–STMIK IBBI Gelar Seminar Revolusi Industri 4.0 dan MoU', '<p>Pembicara pertama Seminar tersebut adalah General Manager HRD PT Proteina Prima Tbk Rudi Sudjadi SE MBA CIMBA memaparkan tentang profil perusahaan sebagai produsen pakan ikan, pakan udang dan benur udang. &ldquo;Pengaruh revolusi industri 4.0 yang membawa kemajuan teknologi memaksa kami mengurangi penggunaan sumber daya manusia, karena peralatan terbaru mampu mengerjakan pengolahaan lebih baik, lebih akurat, lebih cepat. Untuk itu kami terus berbenah mengadopsi dan menghadapi dampak perkembangan teknologi digital ke depan&rdquo;, ujarnya.</p>\r\n\r\n<p>Pembicara kedua, Pimpinan PT Panin Sekuritas Medan, Darmin SE MBA CIMBA, mengatakan revolusi industry 4.0 tidak boleh dilihat hanya dari sis dampak negatifnya yang tentu akan semakin maju dan menyisihkan penggunaan sumber daya manusia, tapi juga harus melihat dampak positif yang ditimbulkannya.</p>\r\n\r\n<p><img alt=\"Peserta Seminar Dr Elvi saat tanya jawab dengan Pembicara Rudi Sudjadi SE MM CIMBA\" src=\"http://cdn2.tstatic.net/medan/foto/bank/images/peserta-seminar-dr-elvi-saat-tanya-jawab-dengan-pembicara-rudi-sudjadi-se-mm-cimba_20180709_100905.jpg\" style=\"height:393px; margin:0px; width:608px\" /></p>\r\n\r\n<p>Peserta Seminar Dr Elvi saat tanya jawab dengan Pembicara Rudi Sudjadi SE MM CIMBA</p>\r\n\r\n<p>Menjawab pertanyaan mahasiswa soal kemungkinan mahasiswa menjadi investor, Darmin mengatakan bahwa perubahan ICT bisa membawa peluang baru bagi mahasiswa, asalkan memiliki passion dan kreatif seperti menghasilkan sesuatu yang bermanfaat bagi banyak orang. Darmin minta mahasiswa untuk professional dan bekerja dengan hati yang melayani, hari yang member nilai kepada banyak orang menghadapi revolusi industri 4.0.</p>\r\n\r\n<p><img alt=\"Ketua STIE IBBI Prof Dr Amrin Fauzi memberikan sertifikat kepada Pembicara Darmin SE MBA CIMBA\" src=\"http://cdn2.tstatic.net/medan/foto/bank/images/ketua-stie-ibbi-prof-dr-amrin-fauzi-memberikan-sertifikat-kepada-pembicara-darmin-se-mba-cimba_20180709_100940.jpg\" style=\"height:393px; margin:0px; width:617px\" /></p>\r\n\r\n<p>Ketua STIE IBBI Prof Dr Amrin Fauzi memberikan sertifikat kepada Pembicara Darmin SE MBA CIMBA&nbsp;</p>\r\n\r\n<p><img alt=\"Ketua STIE IBBI Prof Dr Amrin Fauzi memberikan sertifikat kepada Pembicara Rudi Sudjadi SE MM CIMBA\" src=\"http://cdn2.tstatic.net/medan/foto/bank/images/ketua-stie-ibbi-prof-dr-amrin-fauzi-memberikan-sertifikat-kepada-pembicara-rudi-sudjadi-se-mm-cimba_20180709_101427.jpg\" style=\"height:393px; margin:0px; width:615px\" /></p>\r\n\r\n<p>Ketua STIE IBBI Prof Dr Amrin Fauzi memberikan sertifikat kepada Pembicara Rudi Sudjadi SE MM CIMBA&nbsp;</p>\r\n\r\n<p>Sebelumnya Dr. Andriasan Sudarso SMn MM CMA selaku Kepala Lembaga Sumber Daya Manusia Informasi dan Kerjasama (LeSDIK) mengucapkan terima kasih atas kesediaan PT Central Proteina Prima Tbk dan PT Panin Sekuritas Medan menjalin kerjasama dengan STIE&ndash;STMIK IBBI Medan. Diharapkan kerjasama tersebut dapat dimanfaatkan oleh segenap civitas akademika STIE&ndash;STMIK IBBI Medan.</p>\r\n\r\n<p>Victor Wijaya SE MM , salah satu dosen STIE IBBI Medan mengatakan bahwa acara tersebut sangat bagus dan bermanfaat karena para dosen dan mahasiswa memahami secara langsung strategi yang dilaksanakan oleh perusahaan dalam menghadapi Revolusi Industri 4.0.</p>\r\n\r\n<p><img alt=\"Dosen STIE STMIK IBBI Medan foto bersama kedua pembicara\" src=\"http://cdn2.tstatic.net/medan/foto/bank/images/dosen-stie-stmik-ibbi-medan-foto-bersama-kedua-pembicara_20180709_101058.jpg\" style=\"height:393px; margin:0px; width:635px\" /></p>\r\n\r\n<p>Dosen STIE STMIK IBBI Medan foto bersama kedua pembicara&nbsp;</p>\r\n\r\n<p>Acara tersebut dihadiri oleh Ketua&nbsp;<a href=\"https://medan.tribunnews.com/tag/stie-ibbi\">STIE&nbsp;IBBI</a>&nbsp;Prof. Dr. Amrin Fauzi, Wakil Ketua&nbsp;<a href=\"https://medan.tribunnews.com/tag/stie-ibbi\">STIE&nbsp;IBBI</a>&nbsp;Dr. Lusiah SE MM dan Wakil Ketua&nbsp;<a href=\"https://medan.tribunnews.com/tag/stmik-ibbi\">STMIK&nbsp;IBBI</a>&nbsp;Sukiman ST MT para dosen dan mahasiswa STIE&ndash;STMIK IBBI sebanyak 200 orang.</p>\r\n\r\n<p>Setelah acara Seminar dilanjutkan penandatangan Kerjasama (MOU) yang isinya tentang kesediaan perusahaan melakukan perekrutan dan sebagai tempat riset mahasiswa STIE&ndash;STMIK IBBI, pemberian cenderamata dan sertifikat kepada Pembicara dan ditutup dengan foto bersama.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-05-17 09:24:42', 1, 'Pendidikan', 2, 'f338d213d68f14faf31d279e3226b674.jpg', 1, 'Admin Akademik STMIK IBBI Medan', 1),
(21, 'STIE-STMIK IBBI Seminar Revolusi Industri 4.0 meningkatkan SDM Mahasiswa', '<p><strong>SEKOLAH&nbsp;</strong>Tinggi Ilmu Ekonomi (STIE) dan Sekolah Tinggi Manajemen In&shy;formatika dan Komputer (STMIK) IBBI Me&shy;dan, melaksanakan seminar dengan Topi Strategi Perusahaan Menghadapi Re&shy;vo&shy;lusi Industri 4.0 dan penandatangan Ker&shy;jasama (MOU) dengan PT Central Proteina Pri&shy;ma, Tbk dan PT Panin Sekuritas Cabang Medan, baru-baru ini bertempat di IBBI Hall Kampus Diamond STIE-STMIK IBBI Medan.</p>\r\n\r\n<p>Pembicara pertama Seminar tersebut adalah General Manager HRD PT Proteina Prima Tbk Rudi Sudjadi SE MBA CIMBA, mema&shy;parkan tentang profil perusahaan sebagai produsen pakan ikan, pakan udang dan benur udang. &ldquo;Pengaruh revolusi indus&shy;try 4.0 yang membawa kemajuan tek&shy;no&shy;logi memaksa kami mengurangi peng&shy;gu&shy;naan sumber daya manusia, karena per&shy;alatan terbaru mampu mengerjakan pe&shy;ngo&shy;lahaan lebih baik, lebih akurat, lebih ce&shy;pat. Untuk itu kami terus berbenah meng&shy;adopsi dan menghadapi dampak per&shy;kem&shy;bangan teknologi digital kedepan&rdquo;, ujarnya.</p>\r\n\r\n<p>Pemateri kedua, Pimpinan PT Panin Se&shy;kuritas Medan, Darmin SE MBA CIMBA, me&shy;ngatakan revolusi industry 4.0 tidak bo&shy;leh dilihat hanya dari sis dampak negatifnya yang tentu akan semakin maju dan me&shy;nyi&shy;sihkan penggunaan sumber daya manusia, tapi juga harus melihat dampak positif yang ditimbulkannya.</p>\r\n\r\n<p>Menjawab pertanyaan mahasiswa soal kemungkinan mahasiswa menjadi investor, Darmin mengatakan bahwa perubahan ICT bisa membawa peluang baru bagi mahasiswa, asalkan memiliki passion dan kreatif seperti menghasilkan sesuatu yang bermanfaat bagi banyak orang. Darmin minta mahasiswa untuk professional dan bekerja dengan hati yang melayani, hari yang member nilai kepada banyak orang meng&shy;hadapi revolusi industry 4.0.</p>\r\n\r\n<p>Sebelumnya Dr Andriasan Sudarso SMn MM CMA selaku Kepala Lembaga Sumber Daya Manusia Informasi dan Kerjasama (LeSDIK) mengucapkan terima kasih atas ke&shy;sediaan PT Central Proteina Prima Tbk dan PT Panin Sekuritas Medan menjalin kerja sama dengan STIE-STMIK IBBI Me&shy;dan. Diharapkan kerja sama tersebut dapat dimanfaatkan oleh segenap civitas akade&shy;mika STIE -STMIK IBBI Medan.</p>\r\n\r\n<p>Victor Wijaya SE MM , salah satu dosen STIE IBBI Medan mengatakan, acara terse&shy;but sangat bagus dan bermanfaat karena para dosen dan mahasiswa memahami se&shy;cara langsung strategi yang dilaksanakan oleh perusahaan dalam menghadapi Re&shy;vo&shy;lusi Industri 4.0. Acara tersebut dihadiri oleh Ketua STIE IBBI Prof. Dr. Amrin Fauzi, Wakil Ketua STIE IBBI Dr. Lusiah SE MM dan Wakil Ketua STMIK IBBI Sukiman ST MT para do&shy;sen dan mahasiswa STIE-STMIK IBBI sebanyak 200 orang.</p>\r\n\r\n<p>Setelah acara Seminar dilanjutkan pe&shy;nan&shy;datangan Kerjasama (MOU) yang isi&shy;nya tentang kesediaan perusahaan mela&shy;ku&shy;kan perekrutan dan sebagai tempat riset mahasiswa STIE-STMIK IBBI, pemberian cenderamata dan sertifikat kepada Pem&shy;bi&shy;cara dan ditutup dengan foto bersama.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-05-17 09:34:28', 1, 'Pendidikan', 8, 'c8cf6ae5929478b84b52102bb693da73.jpg', 1, 'Admin Akademik STMIK IBBI Medan', 0),
(22, 'Prestasi membangga dari siswa m-sekolah', '<p>Prestasi dan penghargaan merupakan trigger (pemicu) semangat belajar siswa. Ada banyak prestasi yang telah diraih oleh siswa m-sekolah. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:38:21', 6, 'Prestasi', 9, '2b594ea1f1b782e89f10f572ce193122.jpg', 1, 'Admin Akademik STMIK IBBI Medan', 1),
(23, 'STIE IBBI Adakan Workshop “Grooming and Publik Speaking is Fun”', '<p>Sekolah Tinggi Ilmu Ekonomi (STIE) Medan Mengadakan Workshop bagi Mahasiswa STIE IBBI Semester VIII Program Studi S1 Manajemen dengan Topik&nbsp;<em>&ldquo;Grooming and Public Speaking is Fun&rdquo;</em>, Sabtu (11/8/2018) bertempat di IBBI Hall Kampus Diamond STIE IBBI Medan.</p>\r\n\r\n<p>Acara dibuka oleh Kepala Lembaga Sumber Daya Informasi dan Kerjasama (LeSDIK), Dr. Andriasan Sudarso SMn MM CMA. Dalam Sambutan mengatakan bahwa workshop ini sangat banyak manfaatnya bagi peserta yang hadir dalam hal etiket dan penampilan baik yakni cara berpakaian, duduk serta berjalan serta cara berbicara di hadapan umum yang berguna saat bersosialisasi baik di lingkungan kerja maupun dilingkungan masyarakat. Dan waktu yang dekat ini dapat dipraktekkan saat melaksanakan Ujian Komprehensif serta persentasi yang merupakan salah satu syarat untuk lulus Program S1 Manajemen STIE IBBI Medan.</p>\r\n\r\n<p>Pembicara pertama Seminar tersebut adalah Dr. Emmy Erwina MA mengatakan bahwa pentingnya setiap individu itu memiliki sikap atau etiket yang baik dalam bersosialisasi di lingkungan kampus, perusahaan, maupun di lingkungan masyarakat. Seorang yang professional di bidangnya harus &nbsp;berpenampilan yang baik seperti cara berpakaian yang bersih dan rapi, cara duduk, cara berjalan dan berbicara dengan baik.</p>\r\n\r\n<p>Beliau juga menambahkan bahwa penampilan utama seseorang dapat diukur dari kepribadiannya. Oleh karena itu, seorang karyawan ataupun wanita bisnis sebagai masyarakat sosial hendaknya berperilaku sesuai dengan norma dan etika .</p>\r\n\r\n<p>Kemudian acara dilanjutkan dengan Pembicara kedua Franky Supriyanto BA MA CPS&reg; mengatakan bahwa tips untuk menjadi pembicara yang menyenangkan adalah membangun interaksi dengan audience, jangan terlalu cepat, penampilan menarik, dan menyampaikan dengan bahasa yang teratur, terstruktur dan terukur. Selain itu seorang figur ataupun seorang yang berbicara didepan banyak orang memiliki semangat, banyak memberikan inspirasi, dan juga banyak memotivasi tentunya.</p>\r\n\r\n<p><img alt=\"Pemberian Cenderamata Dr Andriasan Sudarso SMn MM CMA kepada Dr Emmy Erwina MA\" src=\"http://cdn2.tstatic.net/medan/foto/bank/images/pemberian-cenderamata-dr-andriasan-sudarso-smn-mm-cma-kepada-dr-emmy-erwina-ma_20180814_092258.jpg\" style=\"height:auto !important; margin:0px; width:700px\" /></p>\r\n\r\n<p>Pemberian Cenderamata Dr Andriasan Sudarso SMn MM CMA kepada Dr Emmy Erwina MA (Tribun Medan/HO)</p>\r\n\r\n<p><img alt=\"Foto Peserta Workshop Grooming\" src=\"http://cdn2.tstatic.net/medan/foto/bank/images/foto-peserta-workshop-grooming_20180814_092137.jpg\" style=\"height:auto !important; margin:0px; width:700px\" /></p>\r\n\r\n<p>Foto Peserta Workshop Grooming (Tribun Medan/HO)</p>\r\n\r\n<p>Public Speaker bukanlah aktivitas yang didesain hanya untuk kalangan tertentu saja, tetapi aktivitas ini terbuka untuk mereka yang ingin mengubah nasibnya atau mereka yang ingin mendapatkan tempat di perusahaan impiannya, atau bisa mengharumkan nama Indonesia di mata dunia. Kesempatan ini selalu terbuka bagi siapa saja, dan mereka yangmemiliki jiwa optimisme akan mampu meraih impian-impianya.</p>\r\n\r\n<p>Victor Wijaya SE MM, salah satu dosen&nbsp;<a href=\"https://medan.tribunnews.com/tag/stie-ibbi\">STIE&nbsp;IBBI</a>&nbsp;Medan mengatakan bahwa acara tersebut sangat bagus dan bermanfaat karena para dosen dan mahasiswa mendapatkan langsung tips-tips sikap dan kepribadian yang baik serta cara berbicara didepan umum yang sangat berguna saat bersosialisasi di lingkungan yang lebih luas lagi nantinya.</p>\r\n\r\n<p>Acara tersebut dihadiri oleh Ketua&nbsp;<a href=\"https://medan.tribunnews.com/tag/stie-ibbi\">STIE&nbsp;IBBI</a>&nbsp;Prof. Dr. Amrin Fauzi, Wakil Ketua I&nbsp;<a href=\"https://medan.tribunnews.com/tag/stie-ibbi\">STIE&nbsp;IBBI</a>&nbsp;Dr. Lusiah SE MM CMA dan para dosen dan mahasiswa&nbsp;<a href=\"https://medan.tribunnews.com/tag/stie-ibbi\">STIE&nbsp;IBBI</a>&nbsp;sebanyak 200 orang. Acara ditutup dengan pemberian cenderamata dari Kepala LeSDIK Dr. Andriasan Sudarso SMn MM CMA kepada pembicara Dr. Emmy Erwina MA dan Franky Supriyanto BA MA CPS&reg; dan foto bersama.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-05-17 09:41:30', 1, 'Pendidikan', 5, 'd1bcafa02e8a91584dea83df87259b46.jpg', 1, 'Admin Akademik STMIK IBBI Medan', 0),
(24, 'STIE-STMIK IBBI Medan Wisuda 638 Lulusan', '<p>STIE-STMIK IBBI Medan menggelar Wisuda lulusannya untuk Tahun Akademik 2015/2016 di Ballroom Hotel Grand Aston City Hall, Kamis (20/10) dan Jumat (21/10) sebanyak 638. Selain dihadiri wisudawan/ti dan orangtua, acara tersebut juga dihadiri Ketua Pembina Yayasan Pendidikan IBBI Medan Juswan dan Ketua Pengurus Yayasan Pendidikan IBBI Medan, Amrin Susilo Halim, yang diwakili Nicolas Naihongga Halim.</p>\r\n\r\n<p>Ketua Panitia Wisuda, Dr.Andriasan Sudarso, melaporkan bahwa pelaksanaan wisuda tahun ini dibagi dalam dua sesi, yaitu sesi pertama Kamis (20/10), mewisuda lulusan Program Studi Manajemen Strata 1 STIE IBBI Medan sebanyak 284 orang. Kemudian Sesi kedua Jumat (21/10), mewisuda lulusan Program Studi Akuntansi Strata 1 STIE IBBI Medan sebanyak 173 orang, dan lulusan STMIK IBBI Medan sebanyak 181 orang yang terdiri dari Program Studi Sistem Informasi sebanyak 88 orang dan Teknik Informatika sebanyak 93 orang.</p>\r\n\r\n<p>Ketua Sekolah Tinggi Ilmu Ekonomi(STIE) IBBI Medan, Prof Dr Amrin Fauzi, mengatakan hingga saat ini lulusan STIE IBBI Medan sudah mencapai 12.966 orang.Amrin Fauzi memberi nasehat dan semangat kepada lulusan STIE-STMIK IBBI Medan lewat cerita pertemanan elang dan ayam. Lewat moral story elang dan ayam tersebut, Amrin Fauzi meminta lulusan untuk bekerja keras dengan prinsip jadi pemenang.</p>\r\n\r\n<p>STIE IBBI Medan memberikan penghargaan berupa Studi Banding ke Luar Negeri kepada lulusan berprestasi pada acara tersebut, yaitu Lulusan berprestasi dengan Indeks Prestasi(IP) 4, Program Studi Manajemen Lorensia Tasya Halim, Edison, Supenty dan Juara Umum Program Studi Manajemen adalah Supenty. Apresiasi diserahkan Ketua Pengurus Yayasan Pendidikan IBBI yang diwakili oleh Nicolas Naihongga Halim, Ketua Pembina Yayasan Pendikan IBBI, Juswan dan Ketua STIE IBBI Medan Prof Dr Amrin Fauzi.</p>\r\n\r\n<p>Mewakili wisudawan, Lorensia Tasya Halim yang juga memperoleh penghargaan karena menjadi wisudawan berprestasi, mengucapkan terimakasih kepada orangtua yang sudah berjuang membantu pendidikan mereka, juga memberi apresiasi setinggi-tingginya kepada para dosen yang sudah membimbing mereka selama ini.</p>\r\n\r\n<p>&ldquo;Awalnya STIE IBBI bukan pilihan pertama saya untuk melanjutkan pendidikan ke jenjang yang lebih tinggi, tapi akhirnya menjadi kampus terbaik bagi saya dan teman-teman. Terimakasih buat pengurus yayasan, semoga kedepan kampus ini menjadi kampus unggul di Sumatera Utara dan di Indonesia secara umum,&rdquo; ujarnya.</p>\r\n\r\n<p>Nicolas Naihongga memberi arahan kepada wisudawan. &ldquo;Hormati orangtua setulus hati, karena perjuangan merekalah membuat Anda berhasil kuliah tepat waktu di STIE-STMIK IBBI Medan. Hidup itu selalu berpasangan, ada kesedihan dan kegembiraan, ada duka dan suka, butuh kerja keras untuk mencapai sukses. Setiap orang mempunyai kelebihan dan kekurangan, oleh sebab itu terus gali potensi yang anda miliki. Pada hari ini saatnya mengucapkan terimakasih kepada orangtua, apalagi bagi Anda yang mungkin belum pernah mengucapkan terimakasih kepada orangtua anda,&rdquo; jelasnya.</p>\r\n\r\n<p>Ia menambahkan, Setelah tamat dari Strata 1 bukan berarti berakhir perjuangan, ini baru awal perjuangan. &ldquo;Terus kerja keras dan belajar, tunjukkan semangat kerja yang tinggi sebagai pekerja tangguh. Bagi yang berkecimpung di bidang wirausaha, jangan lupa terus tingkatkan network. Kepada seluruh wisuda rajinlah beribadah,&rdquo; jelasnya.</p>\r\n\r\n<p>Ia mengatakan pengurus Yayasan Pendidikan IBBI saat ini semakin serius. Terbutki dengan segera dibangunnya gedung STIE-STMIK IBBI Medan yang megah berlantai 10 pada awal tahun 2017, dilengkapi parkir sepeda motor berkapasitas 600 unit, perpustakaan, ruangan kelas untuk 3.000 mahasiswa, hall berkapasitas 1.000 orang.&rdquo;Terimakasih atas diraihnya Akreditasi Peringkat B untuk semua program studi di STIE-STMIK IBBI Medan. Ini berkat kerja keras dosen, pegawai dan jajaran pimpinan STIE/STMIK IBBI Medan,&rdquo; pungkasnya.</p>\r\n\r\n<p>Ketua Pembina Yayasan IBBI, Juswan mengatakan, sudah ada regenerasi kepengurusan di Yayasan Pendidikan STIE/STMIK IBBI Medan. &ldquo;Ini adalah proses alam, ada penerus kami yang lebih energik. Bersyukurlah kepada orangtua yang sudah membesarkan dan mendukung pendidikan kalian. Memang betul kata orang, berbaktilah kepada bangsa dan negara, tetapi sebelum ke situ, berbakti dulu kepada keluarga,&rdquo; ujarnya.</p>\r\n\r\n<p>Koordinator Kopertis Wilayah I Sumatera Utara Prof. Dian Armanto, yang diwakili oleh Kabag Umum Rahmayati SH MAP, mengatakan bahwa STIE-STMIK IBBI telah terjalin kerjasama yang baik dengan Kopertis Wilayah I selama ini dibidang Tridarma Pendidikan. Terlihat dengan terpilih dosen STMIK IBBI Hartono SKom MKom sebagai Juara 2 Dosen Teladan tingkat Kopertis Wilayah I dan dosen STIE IBBI Hasrul Siregar SE MSi sebagai finalis Dosen Teladan Tingkat Kopertis Wilayah I.</p>\r\n\r\n<p>Prof. Dian mengharapkan para Wisudawan/ti dapat terjun di bidang kewirausahaan, jangan hanya terfokus mencari pekerjaan saja. Dan juga mengharapkan para dosen STIE-STMIK IBBI dapat meningkatkan penelitiannya.</p>\r\n\r\n<p>Pada kesempatan tersebut juga diumumkan Dosen Best of the Best (BOB) Program Studi S1 Manajemen oleh Wakil Ketua 1 Dr. Andriasan Sudarso yakni BOB 1 : Hasrul Siregar SE MSi, BOB 2 : Ahmad Saputra SE MM dan BOB 3 : Maretta Ginting SE MSi. Penghargaan diberikan oleh Ketua Pengurus Yayasan Pendidikan IBBI yang diwakili oleh Nicolas Naihongga Halim, Ketua Pembina, Juswan dan Ketua STIE IBBI Prof. Dr. Amrin Fauzi berupa Studi Banding ke Luar Negeri.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-05-17 09:46:29', 1, 'Pendidikan', 24, 'ef68d1d9cccaa72492eeba2c42d837ad.jpg', 1, 'Admin Akademik STMIK IBBI Medan', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indexes for table `tbl_makul`
--
ALTER TABLE `tbl_makul`
  ADD PRIMARY KEY (`makul_id`);

--
-- Indexes for table `tbl_makul_sespek`
--
ALTER TABLE `tbl_makul_sespek`
  ADD PRIMARY KEY (`makulsespek_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_registrasi`
--
ALTER TABLE `tbl_registrasi`
  ADD PRIMARY KEY (`registrasi_id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`),
  ADD KEY `makulsespek_id` (`makulsespek_id`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`ruangan_id`);

--
-- Indexes for table `tbl_tahunakademik`
--
ALTER TABLE `tbl_tahunakademik`
  ADD PRIMARY KEY (`tahunakademik_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_makul`
--
ALTER TABLE `tbl_makul`
  MODIFY `makul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_makul_sespek`
--
ALTER TABLE `tbl_makul_sespek`
  MODIFY `makulsespek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=942;

--
-- AUTO_INCREMENT for table `tbl_registrasi`
--
ALTER TABLE `tbl_registrasi`
  MODIFY `registrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `ruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_tahunakademik`
--
ALTER TABLE `tbl_tahunakademik`
  MODIFY `tahunakademik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `tbl_kelas` (`kelas_id`),
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_2` FOREIGN KEY (`jurusan_id`) REFERENCES `tbl_jurusan` (`jurusan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
