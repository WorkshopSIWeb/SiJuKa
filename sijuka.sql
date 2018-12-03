-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2018 at 04:01 PM
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
-- Table structure for table `tbl_kayu`
--

CREATE TABLE `tbl_kayu` (
  `kode_kayu` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_kayu` enum('Jati','Mahoni','Sandrila','Sengon') NOT NULL,
  `jenis_kayu` varchar(30) NOT NULL,
  `alamat_kebun` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_upload` date NOT NULL,
  `foto_1` varchar(100) NOT NULL,
  `foto_2` varchar(100) NOT NULL,
  `foto_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kayu`
--

INSERT INTO `tbl_kayu` (`kode_kayu`, `nik`, `nama_kayu`, `jenis_kayu`, `alamat_kebun`, `deskripsi`, `tanggal_upload`, `foto_1`, `foto_2`, `foto_3`) VALUES
(1, '22323123123', 'Jati', 'sdsd', 'asdadas', 'asdasdasdasda', '0000-00-00', 'asd', 'asdas', 'asdasd'),
(3, '22323123123', 'Mahoni', 'qwewqe', 'qweqwe', 'qweqw', '2018-11-29', 'wqeqwe', 'qwewqe', 'qwewqeqe'),
(4, '3511101506980003', 'Jati', 'anjau', 'kolis', 'asdw', '2018-11-18', '', '2', '3'),
(5, '3511101506980003', 'Jati', 'asdw', 'asdasd', 'wasda', '2018-11-18', '', '2', '3'),
(13, '3511101506980003', 'Mahoni', 'dsad', 'asdas', 'asdas', '2018-11-18', 'Untitled.jpg', '2', '3'),
(14, '3511101506980003', 'Mahoni', 'asdasasd', 'adasddsa', 'asdasdasd', '2018-11-18', 'Untitled.jpg', '2', '3'),
(15, '3511101506980003', 'Jati', 'asdasd', 'sadsadsa', 'sadasd', '2018-11-18', 'Untitled.jpg', 'Untitled.jpg', 'Untitled.jpg'),
(16, '3511101506980003', 'Mahoni', 'firman', 'anying', 'asdwdwdwd', '2018-11-18', 'Untitled1.jpg', 'Untitled.jpg', 'Untitled.jpg'),
(17, '3511101506980003', 'Mahoni', 'destino', 'asdwdw', 'ansjasu', '2018-11-18', 'Untitled1.jpg', 'Untitled1.jpg', 'Untitled1.jpg'),
(18, '3511101506980003', 'Mahoni', 'anjay', 'solor', 'anjay kayunya anjay a en je aye anjay', '2018-11-18', 'DSC_1376.jpg', 'DSC_1376.jpg', 'DSC_1376.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upkayu`
--

CREATE TABLE `tbl_upkayu` (
  `kode_up` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kode_kayu` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL
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
('22323123123', 'Firman', '1992-09-02', 'jember', '08929839', 'firman@gmail.com', 'firman', 'wahtyu', 'Untitled.jpg', 'pembeli', ' ', ''),
('3511101506980003', 'Munir', '1999-02-14', 'Rt/Rw 009/004, Sukosari Lor, Sukosari, Bondowoso', '082316285715', 'hel000941@gmail.com', 'munir', '123qwerty..', 'Untitled.jpg', 'admin', ' Programmer', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  ADD PRIMARY KEY (`kode_kayu`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_upkayu`
--
ALTER TABLE `tbl_upkayu`
  ADD PRIMARY KEY (`kode_up`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `kode_kayu` (`kode_kayu`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  MODIFY `kode_kayu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_upkayu`
--
ALTER TABLE `tbl_upkayu`
  MODIFY `kode_up` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  ADD CONSTRAINT `tbl_kayu_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbl_user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
