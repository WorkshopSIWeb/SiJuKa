-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2018 at 04:11 AM
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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(10) NOT NULL,
  `id_pengirim` varchar(16) NOT NULL,
  `id_penerima` varchar(16) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subyek_pesan` varchar(255) NOT NULL,
  `isi_pesan` longtext NOT NULL,
  `sudah_dibaca` enum('belum','sudah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_pengirim`, `id_penerima`, `tanggal`, `subyek_pesan`, `isi_pesan`, `sudah_dibaca`) VALUES
(1, '3511101506980003', '22323123123', '2018-12-04 17:00:00', 'asdwdwd', 'wdwdwdwwd', 'belum'),
(2, '3511101506980003', '22323123123', '2018-12-05 07:13:29', 'wdwdw', 'man ', 'belum'),
(3, '22323123123', '3511101506980003', '2018-12-05 07:15:36', 'asdw', 'apa nit', 'belum'),
(4, '3511101506980003', '22323123123', '2018-12-05 07:15:56', 'F', 'Kamu Waras ?', 'belum'),
(5, '22323123123', '3511101506980003', '2018-12-05 07:38:09', 'sdwdwdwd', 'waras om\r\n', 'belum'),
(6, '12345123', '3511101506980003', '2018-12-05 12:16:10', 'hay', 'hayy', 'sudah'),
(7, '3511101506980003', '12345123', '2018-12-05 12:16:28', 'iya', 'ada apa', 'belum'),
(8, '3511101506980003', '12345123', '2018-12-05 12:21:21', 'kamu dimana?', 'aku kangen', 'belum'),
(9, '3511101506980003', '12345123', '2018-12-05 15:22:19', 'anjay', 'apa\r\n', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deal`
--

CREATE TABLE `tbl_deal` (
  `kode_up` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kode_kayu` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'Kamilina');

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
  `status` enum('laku','belum laku','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kayu`
--

INSERT INTO `tbl_kayu` (`kode_kayu`, `nik`, `nama_kayu`, `jenis_kayu`, `alamat_kebun`, `deskripsi`, `tanggal_upload`, `foto_1`, `foto_2`, `foto_3`, `harga`, `status`) VALUES
(1, '3511101506980003', 4, 'Super', 'jember', '12x4', '2018-12-17 17:00:00', 'foresta-evid-770x370.jpg', 'IMG_0738.JPG', 'IMG_20170730_095623.jpg', 800000, 'belum laku'),
(3, '3511101506980003', 2, 'Super', 'Jember', 'dwdwdwdw', '2018-12-06 03:02:43', 'bibit sengon.jpg', '', '', 829029, 'belum laku');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporkan`
--

CREATE TABLE `tbl_laporkan` (
  `kode_lapor` int(11) NOT NULL,
  `kode_pelapor` varchar(16) NOT NULL,
  `kode_dilapor` varchar(16) NOT NULL,
  `waktu` int(11) NOT NULL,
  `keterangan` tinytext NOT NULL,
  `lampiran1` varchar(100) NOT NULL,
  `lampiran2` varchar(100) NOT NULL,
  `lampiran3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('12345123', 'dian', '1992-09-02', 'asdw', '082928', 'awdwdw', 'dian', 'dian', 'Untitled.jpg', 'pembeli', ' ', ''),
('22323123123', 'Firman', '1992-09-02', 'jember', '08929839', 'firman@gmail.com', 'firman', 'wahtyu', 'Untitled.jpg', 'pembeli', ' ', ''),
('3511101506980003', 'Ahmad Munir', '1999-02-14', 'Rt/Rw 009/004, Sukosari Lor, Sukosari, Bondowoso', '082316285715', 'hel000941@gmail.com', 'munir', 'munir', 'Untitled.jpg', 'admin', 'Analis', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  ADD PRIMARY KEY (`kode_up`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `kode_kayu` (`kode_kayu`);

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
-- Indexes for table `tbl_laporkan`
--
ALTER TABLE `tbl_laporkan`
  ADD PRIMARY KEY (`kode_lapor`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  MODIFY `kode_up` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  MODIFY `kode_kayu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_laporkan`
--
ALTER TABLE `tbl_laporkan`
  MODIFY `kode_lapor` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  ADD CONSTRAINT `tbl_kayu_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbl_user` (`nik`),
  ADD CONSTRAINT `tbl_kayu_ibfk_2` FOREIGN KEY (`nama_kayu`) REFERENCES `tbl_jenis` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
