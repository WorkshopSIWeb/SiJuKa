-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2018 at 06:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `kode_chat` int(100) NOT NULL,
  `nik_kirim` varchar(16) NOT NULL,
  `nik_terima` varchar(16) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`kode_chat`, `nik_kirim`, `nik_terima`, `waktu`, `isi_chat`) VALUES
(1, '12345123', '28376910028845', '2018-12-18 00:31:17', 'Apakah Kayu ini Masih ada?'),
(2, '12345123', '28376910028845', '2018-12-18 09:13:29', 'sdsd'),
(3, '12345123', '28376910028845', '2018-12-18 09:13:55', 'Apakah Kayu ini Masih ada?'),
(4, '12345123', '28376910028845', '2018-12-18 09:22:44', 'dwdwd'),
(5, '3511142801990001', '28376910028845', '2018-12-18 09:39:46', 'apa kurangnya aku didalam hidupmu'),
(6, '28376910028845', '3511142801990001', '2018-12-18 10:44:43', 'masih ada '),
(9, '28376910028845', '3511142801990001', '2018-12-18 20:07:34', 'dwd'),
(10, '28376910028845', '3511142801990001', '2018-12-18 20:08:08', 'Bacot'),
(11, '12345123', '28376910028845', '2018-12-18 20:09:19', 'Apakah Kayu ini Masih ada?'),
(12, '12345123', '28376910028845', '2018-12-18 20:12:29', 'Apakah Kayu ini Masih ada?'),
(13, '28376910028845', '12345123', '2018-12-18 20:13:30', 'Masih ada'),
(14, '12345123', '3509082410980003', '2018-12-19 10:41:56', 'Apakah Kayu ini Masih ada?'),
(15, '3509082410980003', '12345123', '2018-12-19 10:42:04', 'ada mas'),
(16, '12345123', '3509082410980003', '2018-12-19 10:42:15', 'oke saya order ya '),
(17, '3509082410980003', '12345123', '2018-12-19 10:42:35', 'siap mas hubungi langsung saja'),
(18, '3005261728474628', '3509082410980003', '2018-12-19 11:20:51', 'Kayunya masih ada mas?'),
(19, '3509082410980003', '3005261728474628', '2018-12-19 11:21:25', 'masih mas'),
(20, '3005261728474628', '3509082410980003', '2018-12-19 11:22:10', 'Kayunya masih ada mas?'),
(21, '3509082410980003', '3005261728474628', '2018-12-19 11:22:41', 'yuhu'),
(22, '3005261728474628', '3509082410980003', '2018-12-19 11:23:02', 'Oooh'),
(23, '3509082410980003', '3005261728474628', '2018-12-19 11:23:10', 'y'),
(24, '3005261728474628', '3509082410980003', '2018-12-19 11:24:24', 'Kok cuek si'),
(25, '3005261728474628', '3509082410980003', '2018-12-19 11:24:39', 'Jangan cuek lah'),
(26, '3509082410980003', '3005261728474628', '2018-12-19 11:24:50', 'gatau aku males sama kamu'),
(27, '3005261728474628', '3509082410980003', '2018-12-19 11:25:17', 'Hu maaf lah aku mau beli kayunya ini'),
(28, '3509082410980003', '3005261728474628', '2018-12-19 11:25:30', 'langsung aja kerumah'),
(29, '3005261728474628', '3509082410980003', '2018-12-19 11:25:50', 'Meluncur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deal`
--

CREATE TABLE `tbl_deal` (
  `kode_deal` int(11) NOT NULL,
  `nikjual` varchar(16) NOT NULL,
  `nikbeli` varchar(16) NOT NULL,
  `kode_kayu` int(11) NOT NULL,
  `tanggal_deal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_deal`
--

INSERT INTO `tbl_deal` (`kode_deal`, `nikjual`, `nikbeli`, `kode_kayu`, `tanggal_deal`) VALUES
(9, '3509082410980003', '12345123', 16, '2018-12-19 10:43:21'),
(10, '12345432122', '12345123', 21, '2018-12-19 11:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `kode_fb` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`kode_fb`, `nama`, `email`, `isi`, `waktu`) VALUES
(1, 'Munir', 'hel000941@gmail.com', 'Masuk Pak eko', '2018-12-19 08:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_kayu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id_jenis`, `nama_kayu`) VALUES
(1, 'Jati'),
(2, 'Mahoni'),
(3, 'Sandrila'),
(4, 'Kamilina'),
(5, 'Sengon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kayu`
--

CREATE TABLE `tbl_kayu` (
  `kode_kayu` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_kayu` int(11) NOT NULL,
  `jenis_kayu` varchar(30) NOT NULL,
  `alamat_kebun` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto_1` varchar(100) NOT NULL,
  `foto_2` varchar(100) NOT NULL,
  `foto_3` varchar(100) NOT NULL,
  `harga` int(35) NOT NULL,
  `status` enum('laku','belum laku','booked','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kayu`
--

INSERT INTO `tbl_kayu` (`kode_kayu`, `nik`, `nama_kayu`, `jenis_kayu`, `alamat_kebun`, `deskripsi`, `tanggal_upload`, `foto_1`, `foto_2`, `foto_3`, `harga`, `status`) VALUES
(16, '3509082410980003', 1, 'Lokal', 'balung - jeber', 'Luas Kebun 30 x 20 m2', '2018-12-19 03:43:21', '20151201_085137.jpg', 'DSC01746.JPG', 'teak-plantation-289157_960_720.jpg', 4500000, 'laku'),
(17, '3509082410980003', 2, 'Metro', 'Jenggawah - Jember', 'luas kebun 1 : 15x25 m2\r\nluas kebun 2 : 20x20 m2', '2018-12-19 04:00:17', 'mahoni 1.jpg', 'mahoni 2.jpg', 'sengon 3.jpg', 5000000, 'belum laku'),
(18, '3509082410980003', 3, 'Angsana', 'Arjasa - Jember', 'luas kebun 10 x 15 m2', '2018-12-19 04:04:29', 'sandrila 1.jpg', 'sandrila 2.jpg', 'sandrila 3.jpg', 2500000, 'belum laku'),
(19, '3509082410980003', 4, 'Arboria Rox B', 'Sumbrjambe, Kalisat - Jember', 'luas kebun 20 x 27 m2', '2018-12-19 04:07:38', 'kamilina1.JPG', 'kamilina2.jpg', 'kamilina3.jpg', 6000000, 'belum laku'),
(20, '3509082410980003', 5, 'Super', 'Jatioroto - Jember', 'Luas Kebun 15 x 17 m2', '2018-12-19 04:09:57', 'sengon1.jpg', '', 'sengon3.jpg', 2500000, 'belum laku'),
(21, '12345432122', 1, 'anjay', 'Jember', 'Ukuran : 19x20, 18x2\r\nKondisi kayu : sehat walafiat, tidak ada jamur', '2018-12-19 04:39:44', 'jati-putih_20160804_101651.jpg', 'foresta-evid-770x370.jpg', '', 9000000, 'laku'),
(22, '3509312001980001', 1, 'emas', 'jember', 'ukuran kayunya 1 m,luas kebun 50 x 50 m,jumlah kayu 10 ', '2018-12-19 04:39:29', '7jati-crop-u10461.png', 'pemerintah-ditawari-pengklasteran-pengelolaan-hutan-produksi-1v4.jpg', 'hutan-6.png', 50000000, 'belum laku'),
(23, '3509312001980001', 2, 'mahoni bandung', 'probolinggo', 'ukuran batang kayu 80 cm,luas kebun 100 x 50 m,jumlah kayu  50 pohon', '2018-12-19 04:41:08', '18-2.jpg', 'mahoni-pohon.jpg', 'mahoni.jpg', 100000000, 'belum laku');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `kode_kon` int(6) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `line` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporkan`
--

CREATE TABLE `tbl_laporkan` (
  `kode_lapor` int(11) NOT NULL,
  `kode_pelapor` varchar(16) NOT NULL,
  `kode_dilapor` varchar(16) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` text NOT NULL,
  `lampiran1` varchar(100) NOT NULL,
  `lampiran2` varchar(100) NOT NULL,
  `lampiran3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporkan`
--

INSERT INTO `tbl_laporkan` (`kode_lapor`, `kode_pelapor`, `kode_dilapor`, `waktu`, `keterangan`, `lampiran1`, `lampiran2`, `lampiran3`) VALUES
(1, '12345123', '122019927736', '2018-12-17 23:47:02', 'curang', '20181118_040448-01.jpeg', '', ''),
(2, '12345123', '28376910028845', '2018-12-18 16:25:34', 'Penjual ini curang', 'jati-putih_20160804_101651.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `kode_pesan` int(10) NOT NULL,
  `id_pengirim` varchar(16) NOT NULL,
  `id_penerima` varchar(16) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subyek_pesan` varchar(255) NOT NULL,
  `isi_pesan` int(11) NOT NULL,
  `status` enum('belum','sudah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`kode_pesan`, `id_pengirim`, `id_penerima`, `tanggal`, `subyek_pesan`, `isi_pesan`, `status`) VALUES
(9, '12345123', '3509082410980003', '2018-12-19 03:43:21', 'BOOKING KAYU', 16, 'sudah'),
(10, '12345123', '12345432122', '2018-12-19 04:30:26', 'BOOKING KAYU', 21, 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `jabatan` enum('admin','penjual','pembeli','') NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`nik`, `nama_lengkap`, `tgl_lahir`, `alamat`, `no_telepon`, `email`, `username`, `password`, `foto_profil`, `jabatan`, `pekerjaan`, `jenis_kelamin`) VALUES
('122019927736', 'Akhila naisa', '1998-02-02', 'jalan kenangan', '081223665374', 'akhilanaisa@gmail.com', 'akhilanaisa', 'aku12345', 'Chrysanthemum.jpg', 'penjual', ' ', ''),
('123123123123123', 'Ahmad Munir asw', '2016-10-05', 'Bwondwo', '0928912', 'anjay@gmail.com', 'mnr', 'mnr', 'DSC_1376.jpg', 'penjual', ' ', ''),
('123123333', 'anja', '1992-09-02', 'dwdwdwdw', '09289280', 'ajnaj@gmail.com', 'anja', 'anja', 'jati-putih_20160804_101651.jpg', 'pembeli', ' ', ''),
('12345123', 'dian', '1992-09-02', 'asdw', '082928', 'awdwdw', 'dian', 'dian', 'Untitled.jpg', 'pembeli', ' ', 'Laki-laki'),
('12345432122', 'Barrack Antonio Munir', '1992-09-02', 'Dabasah Kota, Bondowoso', '082316285715', 'hel000941@gmail.com', 'Ahmad', 'munir123', 'Untitled.jpg', 'penjual', ' Guru', 'Laki-laki'),
('187987918798', 'Abi', '1999-01-05', 'Banyuwangi', '089298278209', 'abi@gmail.com', 'abi', 'abi', 'jati-putih_20160804_101651.jpg', 'penjual', ' ', ''),
('22323123123', 'Firman', '1992-09-02', 'jember', '08929839', 'firman@gmail.com', 'firman', 'wahtyu', 'Untitled.jpg', 'pembeli', ' ', ''),
('28376910028845', 'Ridi', '1999-01-28', 'Ngasem. Kediri', '089347478372', 'Ridi@gmail.com', 'Ridiuye', 'ridi', 'Untitled.jpg', 'penjual', ' ', ''),
('3005261728474628', 'Ahmad Toher', '1986-08-13', 'Jl. Melati Ali no.172 Silo - Jember', '085937281735', 'Ahmadtoher96@gmail.com', 'toher', '123qwerty', 'IMG-20181206-WA0005.jpg', 'pembeli', ' ', ''),
('3509082410980003', 'Alex Rudi Herlambang', '1998-10-24', 'Jl. Sultan Agung no 50 mlokorejo - puger - jember', '085746816375', 'alexrudiherlambang98@gmail.com', 'alex', '12345', '20180926_102858.jpg', 'penjual', ' ', ''),
('3509312001980001', 'dheni teguh pramono', '1998-02-21', 'jember', '082264587998', 'dhenipramono@gmail.com', 'dheni', 'pramono123', 'index.jpg', 'penjual', ' ', ''),
('3511101506980003', 'Ahmad Munir', '1999-02-14', 'Rt/Rw 009/004, Sukosari Lor, Sukosari, Bondowoso', '082316285715', 'hel000941@gmail.com', 'munir', 'munir', 'Untitled.jpg', 'admin', 'Analis', 'Laki-laki'),
('3511142801990001', 'Yanuar Tegar Pamungkas', '1999-01-28', 'Besuk, Klabang, Bondowoso', '085336528334', 'yanuartegar7@gmail.com', 'yanuartp', '@pamungkas28', 'IMG-20180120-WA0005.jpg', 'pembeli', ' ', ''),
('6728929289', 'M khoiriri', '1998-02-19', 'Sukosari, Bondowoso', '089280920', 'uling@gmail.com', 'uling', 'uling', 'pizap.com14258738424441.jpg', 'penjual', ' ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`kode_chat`);

--
-- Indexes for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  ADD PRIMARY KEY (`kode_deal`),
  ADD UNIQUE KEY `kode_kayu` (`kode_kayu`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`kode_fb`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  ADD PRIMARY KEY (`kode_kayu`),
  ADD KEY `nik` (`nik`),
  ADD KEY `nama_kayu` (`nama_kayu`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`kode_kon`);

--
-- Indexes for table `tbl_laporkan`
--
ALTER TABLE `tbl_laporkan`
  ADD PRIMARY KEY (`kode_lapor`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`kode_pesan`),
  ADD KEY `isi_pesan` (`isi_pesan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `kode_chat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  MODIFY `kode_deal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `kode_fb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  MODIFY `kode_kayu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `kode_kon` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_laporkan`
--
ALTER TABLE `tbl_laporkan`
  MODIFY `kode_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `kode_pesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  ADD CONSTRAINT `tbl_kayu_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbl_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_kayu_ibfk_2` FOREIGN KEY (`nama_kayu`) REFERENCES `tbl_jenis` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD CONSTRAINT `tbl_pesan_ibfk_1` FOREIGN KEY (`isi_pesan`) REFERENCES `tbl_kayu` (`kode_kayu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
