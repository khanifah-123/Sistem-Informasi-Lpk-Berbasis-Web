-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 08:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taku`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_harga` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id_harga`, `harga`) VALUES
(1, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `bayaran`
--

CREATE TABLE `bayaran` (
  `id_bayar` int(5) NOT NULL,
  `id_siswa` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tanggal_byar` date NOT NULL,
  `nominal` int(23) NOT NULL,
  `penerima` varchar(150) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayaran`
--

INSERT INTO `bayaran` (`id_bayar`, `id_siswa`, `tanggal_byar`, `nominal`, `penerima`) VALUES
(61, 'S-001', '2021-09-21', 1000000, 'Sari'),
(62, 'S-002 ', '2021-10-19', 2000000, 'Sinta'),
(63, 'S-009 ', '2021-10-19', 1000000, 'Sinta'),
(64, 'S-009 ', '2021-10-12', 1000000, 'Sinta');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `fc_ktp` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `fc_kk` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `fc_ijazah` varchar(250) CHARACTER SET utf8 NOT NULL,
  `bukti_pembayaran` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `fc_ktp`, `fc_kk`, `fc_ijazah`, `bukti_pembayaran`) VALUES
(53, 'IMG_20210825_0002-dikonversi2.pdf', 'LEMBAR_PENGESAHAN30.pdf', 'IMG_20210825_0002-dikonversi3.pdf', ''),
(54, 'LEMBAR_PENGESAHAN31.pdf', 'LEMBAR_PENGESAHAN3_22.pdf', 'LEMBAR_PENGESAHAN263.pdf', 'LEMBAR_PENGESAHAN32.pdf'),
(55, '', '', '', ''),
(56, 'LEMBAR_PENGESAHAN33.pdf', '5_62602665187270990801.pdf', 'IMG_20210825_0002-dikonversi4.pdf', ''),
(57, 'LEMBAR_PENGESAHAN34.pdf', '5_62602665187270990802.pdf', '5_62602665187270990803.pdf', '5_62602665187270990804.pdf'),
(58, 'LEMBAR_PENGESAHAN35.pdf', '5_62602665187270990805.pdf', 'IMG_20210825_0002-dikonversi5.pdf', 'IMG_20210825_0002-dikonversi6.pdf'),
(59, 'WhatsApp_Image_2021-08-22_at_22_06_35-dikonversi2.pdf', 'LEMBAR_PENGESAHAN39.pdf', 'IMG_20210825_0002-dikonversi7.pdf', '5_62602665187270990806.pdf'),
(60, 'IMG_20210825_0002-dikonversi8.pdf', 'LEMBAR_PENGESAHAN40.pdf', 'LEMBAR_PENGESAHAN41.pdf', 'IMG_20210825_0002-dikonversi9.pdf'),
(61, 'LEMBAR_PENGESAHAN42.pdf', 'LEMBAR_PENGESAHAN43.pdf', '5_62602665187270990807.pdf', ''),
(62, 'KTP_AGUN_RIZKI.jpg', 'KK_AGUN_RIZKI_001.jpg', 'IJAZAH_AGUN_RIZKI.jpg', 'BUKU_TABUNGAN_AGUN_RISKI_1.jpg'),
(63, 'KTP_BAYU_FADRIAN.jpg', 'kk_bayu_fadriyan_adityana_001.jpg', 'IJAZAH_BAYU_FADRIAN.jpg', 'BUKU_TABUNGAN_BAYU_FADRIAN.jpg'),
(64, 'KTP_DEDI_PRIAWAN.jpg', 'KK_DEDI_PRIAWAN.jpg', 'IJAZAH_DEDI_PRIAWAN.jpg', ''),
(65, 'KTP_EKI_RISADI.jpg', 'KK_EKI_RISADI.jpg', 'IJAZAH_EKI_RISADI.jpg', ''),
(66, 'KTP_MUNIF_FATONI.jpg', 'FORM_UJI_KOM_MUNIF_FATONI_001.jpg', 'IJAZAH-MUNIF_FATONI.jpg', ''),
(67, 'KTP_NUSWANDI_PURNOMO.jpg', 'KK_NUSWANDI_PURNOMO.jpg', 'IJAZAH_NUSWANDI_PURNOMO.jpg', ''),
(68, 'KTP_ORRY_MAHARANI.jpg', 'KK_ORRY_MAHARANI.jpg', 'IJAZAH_ORRY.jpg', ''),
(69, 'KTP_RAFI_JALU_RAHMAN_001.jpg', 'KK_RAFI_JALU_ROHMAN.jpg', 'IJAZAH_RAFI_JALU_ROHMAN.jpg', 'TABUNGAN_RAFI_JALU_RAHMAN.jpg'),
(70, 'KTP_SEPYIYAN_EKO_NUGROHO_001.jpg', 'KK_Septian_Wahyu_Nugroho.jpg', 'IJAZAH_SEPTIYAN_EKO_N.jpg', 'BUKU_TABUNGAN_SEPTIYAN_EKO_N.jpg'),
(71, 'KTP_TOFIK_HIDAYAT.jpg', 'KK_TOFIK_HIDAYAT.jpg', 'IJAZAH_TOFIK_HIDAYAT.jpg', ''),
(72, 'KTP_SEPYIYAN_EKO_NUGROHO_0012.jpg', 'KOMPETENSI_SEPTIAN_EKO_NUGROHO_001.jpg', 'IJAZAH_SEPTIYAN_EKO_N2.jpg', 'BUKU_TABUNGAN_SEPTIYAN_EKO_N1.jpg'),
(73, 'KTP_SEPYIYAN_EKO_NUGROHO_0013.jpg', 'KOMPETENSI_SEPTIAN_EKO_NUGROHO_0011.jpg', 'IJAZAH_SEPTIYAN_EKO_N3.jpg', 'BUKU_TABUNGAN_SEPTIYAN_EKO_N2.jpg'),
(74, 'nilai(2)1.pdf', 'nilai(1)2.pdf', 'Nilai-Khanifah_Lillahi_Rohmah(1)1.pdf', 'nilai(2)2.pdf'),
(75, 'nilai(2)3.pdf', 'nilai(1)3.pdf', 'Nilai-Khanifah_Lillahi_Rohmah(1)2.pdf', 'nilai(2)4.pdf'),
(76, 'nilai(2)5.pdf', 'nilai(1)4.pdf', 'Nilai-Khanifah_Lillahi_Rohmah(1)3.pdf', 'nilai(2)6.pdf'),
(77, 'nilai(2)10.pdf', 'nilai(2)11.pdf', 'nilai(1)5.pdf', 'Nilai-Khanifah_Lillahi_Rohmah(1)6.pdf'),
(78, 'nilai(2)12.pdf', 'nilai(2)13.pdf', 'nilai(1)6.pdf', 'Nilai-Khanifah_Lillahi_Rohmah(1)7.pdf'),
(79, 'IMG-20191123-WA00927.jpg', 'Politeknik_Negeri_Cilacap(3).pdf', 'nilai(3).pdf', 'Nilai-Khanifah_Lillahi_Rohmah(3).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `kd_ruangan` varchar(40) CHARACTER SET utf8mb4 DEFAULT NULL,
  `materi` varchar(150) NOT NULL,
  `modul` varchar(250) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `kd_ruangan`, `materi`, `modul`, `keterangan`) VALUES
(17, 'K-001 ', 'percakapan sehari hari', 'LEMBAR_PENGESAHAN3_2.pdf', 'pelajari bab 1'),
(18, 'K-002 ', 'Percakapan dasar', 'LEMBAR_PENGESAHAN261.pdf', 'Pelajari halaman 3'),
(19, 'K-002 ', 'materi dasar', 'LEMBAR_PENGESAHAN3_21.pdf', 'hai semnagatt'),
(20, 'K-001 ', 'cakap', 'IMG_20210825_0002-dikonversi10.pdf', 'pelari bab 3'),
(21, 'K-001 ', 'satu', 'LEMBAR_PENGESAHAN44.pdf', 'ayo');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `id_siswa` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `keterangan` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_ujian`, `id_siswa`, `nilai`, `keterangan`) VALUES
(24, 20, 'S-008 ', 80, NULL),
(25, 23, 'S-009 ', 90, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `no_registrasi` varchar(11) NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `alamat_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `alamat_email` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `jumlah_saudara` int(5) NOT NULL,
  `pilihan_pekerjaan` varchar(255) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pas_foto` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`no_registrasi`, `id_berkas`, `id`, `username`, `password`, `nama_siswa`, `alamat_lengkap`, `no_hp`, `agama`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `alamat_email`, `nama_ayah`, `nama_ibu`, `jumlah_saudara`, `pilihan_pekerjaan`, `tinggi_badan`, `berat_badan`, `status`, `pas_foto`, `jenis_kelamin`) VALUES
('D-010', 79, 134, 'ifah', '1234', 'khanifah', 'jalan babakan', '08776281899', 'Islam', 'Cilacap', '1984-03-07', '3308928393989128', 'khanifahrohmah4@gmail.com', 'Bambang', 'miskem', 5, 'Manufaktur', 157, 50, '', 'IMG-20191123-WA006778.jpg', 'Perempuan'),
('D-04', 59, 111, 'anisa', 'anis12', 'Anisa Nurul ', 'Jalan Cempaka rt 04 rw 05 Pedasong', '0865839300', 'Islam', 'Cilacap', '1995-06-13', '330189783689893', 'anisa@gmail.com', 'Rohadi', 'Rilah', 3, 'Manufaktur', 161, 54, '', 'WIN_20210831_11_04_07_Pro.jpg', 'Perempuan'),
('D-05', 60, 112, 'raya', 'raya12', 'Soraya Larasati', 'Jalan raya Buntu no 178', '0863838737', 'Islam', 'Banyumas', '1995-05-14', '3301074783937', 'soraya@gmail.com', 'Samsudin', 'Hera', 2, 'Perikanan', 164, 65, '', 'IMG-20191123-WA0101.jpg', 'Perempuan'),
('D-06', 62, 123, 'rizki', '123', 'Agun Rizki', 'Jalan kebon sayur no 9 Kesugihan Kidul', '08758578879', 'Islam', 'Kesugihan Kidul', '1994-09-13', '33010303940004', 'adun@gmail.com', 'kasino ', 'mansem', 6, 'Manufaktur', 176, 76, '', 'FOTO_AGUN_RISKI.JPG', 'Laki-laki'),
('D-07', 63, 124, 'bayu', '123', 'Bayu Fadrina Adityana', 'Jalan Sekolahan Kemojing, Binangun', '08753783793', 'Islam', 'cilacap', '1996-08-12', '3301041609960006', 'bayu@gmail.com', 'Rasiman', 'Supriyanti', 4, 'Manufaktur', 174, 80, '', 'FOTO_BAYU_FADRIAN.jpg', 'Laki-laki'),
('D-08', 69, 125, 'Rafi', '123', 'Rafi Jalu Rahman ', 'Jalan Cokronegoro Pesawahan ', '08579283982', 'Kristen Khatolik', 'Cilacap', '1996-09-17', '330010482960005', 'rafi@gmail.com', 'Bagus', 'Prihatini', 4, 'Manufaktur', 176, 68, '', 'FOTO_RAFI_JALU_RAHMAN.JPG', 'Laki-laki'),
('D-09', 70, 126, 'septian', '123', 'Septian Nugroho ', 'JL. Muria NO. 12 Kroya', '087639892389', 'Islam', 'Cilacap', '1996-03-13', '330010466950005', 'septian@gmail.com', 'Dimas', 'Ratri', 4, 'Manufaktur', 173, 87, '', 'SEPTIAN.jpg', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `kd_ruangan` varchar(40) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_pengajar` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat_email` varchar(25) NOT NULL,
  `alamat_pengajar` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `id`, `kd_ruangan`, `username`, `password`, `nama_pengajar`, `tanggal_lahir`, `no_hp`, `alamat_email`, `alamat_pengajar`, `foto`) VALUES
('P-001', 117, 'K-001', 'pengajar1', 'eko', 'Eko Sri Lestari m', '1994-09-06', '08686839', 'eko@gmail.com', 'jalan Serayu II nO 10 Serayu', 'DSC_01601.JPG'),
('P-002', 118, 'K-002', 'pengajar2', 'hendro', 'Hendro Priyono', '1995-09-20', '08648992749', 'hendro@gmail.com', 'Jl. Mataram no 20 Pekuncen, Kroya', 'FOTO_HENDRO_PRIYONO.JPG'),
('P-003', 119, 'K-003', 'pengajar3', 'nila', 'Nila Nurmaylasari', '1998-07-15', '08657875878', 'nila@gmail.com', 'Jl. Trubus no. 25 Kepudang', 'FOTO_NILA_NURMAYLA_SARI.jpg'),
('P-004', 120, 'K-001', 'pengajar4', 'ari', 'Risnawan Ari Nugroho', '1992-11-18', '08547688876', 'risnawan@gmail.com', 'Karang putat, Nusawungu', '45.jpg'),
('P-005', 121, 'K-005', 'pengajar5', 'jae12', 'Muhammad Jeanudin', '1988-09-27', '0886767867', 'jaenudin@gmai.com', 'jalan merpati desa bangkung', 'foto_pak_slamet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kd_ruangan` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kd_ruangan`, `nama_ruangan`) VALUES
('K-001', 'Ruang A'),
('K-002', 'Ruang B'),
('K-003', 'Ruang C'),
('K-004', 'Ruang D'),
('K-005', 'Ruang E'),
('K-006', 'Ruang F'),
('K-007', 'Ruang I');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nama_siswa` varchar(30) NOT NULL,
  `id_siswa` varchar(40) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_berkas` int(11) NOT NULL,
  `kd_ruangan` varchar(40) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat_email` varchar(255) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `jumlah_saudara` int(3) NOT NULL,
  `pilihan_pekerjaan` enum('Manufaktur','Perikanan') NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `status` enum('Belum Menikah','Menikah') NOT NULL,
  `pas_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nama_siswa`, `id_siswa`, `id`, `id_berkas`, `kd_ruangan`, `jenis_kelamin`, `agama`, `alamat_lengkap`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `no_hp`, `alamat_email`, `nama_ayah`, `nama_ibu`, `jumlah_saudara`, `pilihan_pekerjaan`, `tinggi_badan`, `berat_badan`, `status`, `pas_foto`) VALUES
('Elvia', 'S-001', NULL, 71, NULL, 'Perempuan', 'islam', 'Cilacap', 'Cilacap', '1977-10-12', '330010466950005', '0868968999', 'elvia@gmail.com', 'ratman', 'haniyah', 1, 'Manufaktur', 178, 87, 'Belum Menikah', 'FOTO_TOFIK_HIDAYAT.JPG'),
('Bayu Fadrina Adityana', 'S-0010 ', 124, 63, 'K-005', 'Laki-laki', 'Islam', 'Jalan Sekolahan Kemojing, Binangun', 'cilacap', '1996-08-12', '3301041609960006', '08753783793', 'bayu@gmail.com', 'Rasiman', 'Supriyanti', 4, 'Manufaktur', 174, 80, 'Belum Menikah', 'FOTO_BAYU_FADRIAN.jpg'),
('khanifah', 'S-002 ', 134, 79, 'K-004', 'Perempuan', 'Islam', 'jalan babakan', 'Cilacap', '1984-03-07', '3308928393989128', '08776281899', 'khanifahrohmah17@gmail.com', 'Bambang', 'miskem', 5, 'Manufaktur', 157, 50, 'Belum Menikah', 'IMG-20191123-WA006778.jpg'),
('Dedi Priawan', 'S-003 ', NULL, 64, 'K-004', 'Laki-laki', 'islam', 'Dusun Klumprit Wetan', 'Cilacap', '1994-09-21', '330104010810007', '08736838722', 'dedi@gmail.com', 'Budiman', 'Hera', 3, 'Manufaktur', 167, 59, 'Belum Menikah', 'FOTO_DEDI_PRIAWAN_1.jpg'),
('Eki Risandi', 'S-004 ', NULL, 65, 'K-003', 'Laki-laki', 'islam', 'Jl. Babakan Desa Kepudang', 'Cilacap', '1996-08-13', '33010467010960007', '08737738782', 'Eki@gmail.com', 'Seapuri', 'Lastri', 2, 'Manufaktur', 178, 69, 'Belum Menikah', 'DSC_0129.JPG'),
('Munif Fatoni', 'S-005 ', NULL, 66, 'K-003', 'Laki-laki', 'islam', 'Jl. Masjid Kepudang', 'Cilacap', '1995-07-05', '330104860950005', '0896398493434', 'munif@gmail.com', 'Suratman', 'Fani', 2, 'Manufaktur', 172, 80, 'Belum Menikah', 'foto_munif.jpg'),
('Nuswandi Purnomo', 'S-006 ', NULL, 67, 'K-002', 'Laki-laki', 'islam', 'Jl. Borobudur No.40 Pesanggrahan', 'Cilacap', '1993-12-22', '3301046009930006', '081898493894', 'nuswandi@gmail.com', 'Rahmat', 'Handayani', 2, 'Manufaktur', 168, 64, 'Belum Menikah', 'FOTO_NUSWANDI_PURNOMO.JPG'),
('Orry Maharani', 'S-007 ', NULL, 68, 'K-002', 'Perempuan', 'islam', 'Jl. Mantehan Karangsari Adipala', 'Cilacap', '1999-08-24', '3301049005990001', '08739283922', 'maharani', 'Suratmin', 'Indra', 4, 'Manufaktur', 158, 46, 'Belum Menikah', 'FOTO_ORRY_MAHARANI.JPG'),
('Agun Rizki', 'S-008 ', 123, 62, 'K-001', 'Laki-laki', 'Islam', 'Jalan kebon sayur no 9 Kesugihan Kidul', 'Kesugihan Kidul', '1994-09-13', '33010303940004', '08758578879', 'adun@gmail.com', 'kasino ', 'mansem', 6, 'Manufaktur', 176, 76, 'Belum Menikah', 'FOTO_AGUN_RISKI.JPG'),
('Soraya Larasati', 'S-009 ', 112, 60, 'K-001', 'Perempuan', 'Islam', 'Jalan raya Buntu no 178', 'Banyumas', '1995-05-14', '3301074783937', '0863838737', 'soraya@gmail.com', 'Samsudin', 'Hera', 2, 'Perikanan', 164, 65, 'Belum Menikah', 'IMG-20191123-WA0101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `nama_ujian` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `kd_ruangan` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `nama_ujian`, `kd_ruangan`, `tanggal`) VALUES
(20, 'ujian pre test', 'K-001 ', '2021-09-03'),
(23, 'ujian akhir', 'K-002 ', '2021-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat_email` varchar(123) NOT NULL,
  `level` enum('siswa','admin','pengajar','pendaftar') NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `alamat_email`, `level`, `status`) VALUES
(36, 'khanifah', '$2y$10$GgsKB/1Bm7JJx2wryd7D9erfdgvabG.tbq.xBM6p.og9r9FKT.Ui.', 'khanifahrohmah4@gmail.com', 'admin', '1'),
(99, 'agus', '$2y$10$UkVOcnVu33Di3b1KTHSePeZ29cncCNJQums8roKM.sRnKv9AdKjJa', 'agus@gmail.com', 'siswa', '1'),
(100, 'pengajar1', '$2y$10$4IgWbXTGbHu5Scd42mQnAuLqc0CooKcQNxdFN5SBOnt0MMnG55PLi', 'pengajar1@gmail.com', 'pengajar', '1'),
(101, 'pengajar2', '$2y$10$SRLVe7ZMcYXgP2Q2G.NJGOSsdoBoxK.r0fKdfpAHkh1cfXlUfUaNK', 'ahmad@gmail.com', 'pengajar', '1'),
(102, 'sinta', '$2y$10$49yVDK6uJV03QjrLeH7ZqOio9lk5qtCNbNexjbYiQUy6bgBX/YMSS', 'sinta@gmail.com', 'siswa', '1'),
(103, 'rini', '$2y$10$G/N.dcZSOPXrWpgm/1eVdeOHW1btUHL9jDXGMbSCIbcb1aEypaGWa', 'rini@gmail.com', 'pengajar', '1'),
(104, 'ifah', '$2y$10$9QqsLh5IzJrEiS9.qglxtOTnOQCyAHSBkcSKRNCNL98m3W7.u3Zfa', 'rohman@gmail.com', 'pengajar', '1'),
(105, 'khanifah', '$2y$10$R.9h2zzE9xVNS5e2Z5evte/ByTtWC3/7.HQWf04x8w.1BfQTQmbmK', 'rohman@gmail.com', 'pengajar', '1'),
(106, 'ifah', '$2y$10$cKOXj964ckR/Lgl.kwxWPuRiwNx7D2QMca2Ucz0twPbMhPivm/Zq6', 'sarjito@gmail.com', 'pengajar', '1'),
(109, 'anita', '$2y$10$6yV2Frk55t18Ecl6xqNDIuvO26vhoXuc4ASjT8b.r6r6GlJyHNn8e', 'anita@gmail.com', 'siswa', '1'),
(110, 'klc', '$2y$10$eNV3/dY1a2AG01EIYC.JTeXkwc7FnqeJfS7eg2LMG3TKSnTwOZ7vC', 'kas@gmail.com', 'siswa', ''),
(111, 'anisa', '$2y$10$Iop.ZsXcbY8s0DOXlxO1B.CdUDjoA/QC6fIdGxSEGNZR0JmpPDaqS', 'anisa@gmail.com', 'siswa', '1'),
(112, 'raya', '$2y$10$DNf2zZPmVMJRrd34IxGECer504Bkq5xwIBExkkt2PLan/aMNFuqkG', 'soraya@gmail.com', 'siswa', '1'),
(113, 'khanifah', '$2y$10$skmFtuB9FrOCr3dSMUe81ezrr/7T1ByeiKsw4.qF5CFehHncCf2QW', 'sarjito@gmail.com', 'pengajar', '1'),
(116, 'apri', '$2y$10$d55FBzHzFjKzumm1u1p7YuY4R361Q6jeGSCpx7FCfDn4ID0xuKUSq', 'apriadi@gmail.com', 'pengajar', '1'),
(117, 'pengajar1', '$2y$10$dyIKEFHkQL42a5TanZzxEOowbYD4M5Ztmz1eBOF7Y2PcUtZhaDR.G', 'eko@gmail.com', 'pengajar', '1'),
(118, 'pengajar2', '$2y$10$ktTVZZ9Lp8uA9gLAd6uN..k1sAIxFSKzEWmJrjzCuLI49MIK2fkHG', 'hendro@gmail.com', 'pengajar', '1'),
(119, 'pengajar3', '$2y$10$G1k76RX5mrUAM6gtKeGktOnLpI6BQUVZ7yKQFPYTfBdbM3Y.U3fbu', 'nila@gmail.com', 'pengajar', '1'),
(120, 'pengajar4', '$2y$10$luhr/Oqt5n0Oc3w5VEGRs.9mHh.z1RuCmvydkV6hsbDX1GtrhnK.S', 'risnawan@gmail.com', 'pengajar', '1'),
(121, 'pengajar5', '$2y$10$Yv6OAmuXO7GAM7YsgyDO3.VGL8aA8qQnOBZ3WtVRlf8UtQRsm/aTK', 'jaenudin@gmai.com', 'pengajar', '1'),
(122, 'pengajar6', '$2y$10$7QvKaWitVTfOGT4ZiRycVeRebyjoVymkuSb7vcHSbLzvrLPinDYF2', 'wahidah@gmail.com', 'pengajar', '1'),
(123, 'rizki', '$2y$10$VgPBrpqg8qGFRiTjTgjyWeoY5HYtrPJRLbIrY84wxTGwmyFkX.kJe', 'adun@gmail.com', 'siswa', '1'),
(124, 'bayu', '$2y$10$PictDsHGaAHIYt6GyBrtx.tzCCcCptCnziejGI8pTJetNJ2aIDhEm', 'bayu@gmail.com', 'siswa', '1'),
(125, 'Rafi', '$2y$10$ReXqLR5lh9VSrNp9/Hwbo.nfc3V8vxiGa2OzWNV/Vmqlj6KNfKa7e', 'rafi@gmail.com', 'siswa', ''),
(126, 'septian', '$2y$10$WopO/dQMzmFjj600lMC4.O6wOEOHC3qRZ0c.ApmKu1IR5uaat1F9e', 'septian@gmail.com', 'siswa', ''),
(127, 'khani', '$2y$10$7CIX3DaOpl.HrGdcJklLeOeii0tEzKEGpL0kfaqYVc3iG4iWD/7Ae', 'khanifahrohmah4@gmail.com', 'siswa', '1'),
(128, 'hani', '$2y$10$PaqGrM.2rGAfkyjqlg2uwOeiVUTrIewEZIyhnZ4ACYa97hKlqSTty', 'khanifahrohmah17@gmail.com', 'siswa', ''),
(129, '132', '$2y$10$eagu/6bdvyYrhxX89DnHruHfZ3caQr4JI.z.iJXciBPMzl56m5gJ2', 'khanifah@gmail.com', 'siswa', ''),
(130, '132', '$2y$10$skZ0BULzJh.B3lxKjayzGO7XvT6GYT2AEyK/hCJC9/eUeBapfDV5q', 'khanifah@gmail.com', 'siswa', ''),
(131, '132', '$2y$10$mgn6X83rXxGMhtz4LTKkmuXRVQTutqEOwomkFZH5l96/GgDaRna6a', 'khanifah@gmail.com', 'siswa', ''),
(132, '3j2ke', '$2y$10$CcMFWHMd8G7yfzSp.CXthOied2HshW17e7Ti2fOLF8Fgw.NrOEy2m', 'khanifahrohmah17@gmail.com', 'siswa', ''),
(133, '3j2ke', '$2y$10$ss.ppEDPK1Dq0Py5VvV/COBrhbg7qMimlSCqrH4Npx93QJ1VRkrQy', 'khanifahrohmah17@gmail.com', 'siswa', ''),
(134, 'ifah', '$2y$10$zv2/4E0ctzIa9pdwrEnjWOMxFbZTvFKB63Z2OSF0CaeYMyhq1kvOO', 'khanifahrohmah17@gmail.com', 'siswa', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `bayaran`
--
ALTER TABLE `bayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`),
  ADD KEY `kd_ruangan` (`kd_ruangan`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_ujian` (`id_ujian`,`id_siswa`),
  ADD KEY `nilai_ibfk_2` (`id_siswa`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`no_registrasi`),
  ADD KEY `id_berkas` (`id_berkas`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`),
  ADD KEY `kd_ruangan` (`kd_ruangan`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kd_ruangan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_berkas` (`id_berkas`),
  ADD KEY `kd_ruangan` (`kd_ruangan`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `kd_ruangan` (`kd_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bayaran`
--
ALTER TABLE `bayaran`
  MODIFY `id_bayar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bayaran`
--
ALTER TABLE `bayaran`
  ADD CONSTRAINT `bayaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modul`
--
ALTER TABLE `modul`
  ADD CONSTRAINT `modul_ibfk_1` FOREIGN KEY (`kd_ruangan`) REFERENCES `ruangan` (`kd_ruangan`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_ujian`) REFERENCES `ujian` (`id_ujian`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`),
  ADD CONSTRAINT `pendaftar_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `pengajar_ibfk_1` FOREIGN KEY (`kd_ruangan`) REFERENCES `ruangan` (`kd_ruangan`),
  ADD CONSTRAINT `pengajar_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`kd_ruangan`) REFERENCES `ruangan` (`kd_ruangan`),
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`kd_ruangan`) REFERENCES `ruangan` (`kd_ruangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
