-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Nov 2018 pada 09.10
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

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
-- Struktur dari tabel `tbl_kayu`
--

CREATE TABLE `tbl_kayu` (
  `kode_kayu` int(11) NOT NULL,
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
-- Dumping data untuk tabel `tbl_kayu`
--

INSERT INTO `tbl_kayu` (`kode_kayu`, `nama_kayu`, `jenis_kayu`, `alamat_kebun`, `deskripsi`, `tanggal_upload`, `foto_1`, `foto_2`, `foto_3`) VALUES
(1, 'Jati', 'anjay', 'jakarta', 'dwdw', '2018-11-17', '', '', ''),
(2, 'Jati', 'anjay', 'BONDOWOSO', 'jh\r\n', '2018-11-18', '1', '2', '3'),
(3, 'Mahoni', 'super', 'BONDOWOSO', 'ukuran 13x3, 14x 3', '2018-11-18', '1', '2', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_upkayu`
--

CREATE TABLE `tbl_upkayu` (
  `kode_up` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kode_kayu` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
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
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`nik`, `nama_lengkap`, `tgl_lahir`, `alamat`, `no_telepon`, `email`, `username`, `password`, `foto_profil`, `jabatan`, `pekerjaan`, `jenis_kelamin`) VALUES
('28376910028822', 'diana hasim', '2002-06-17', 'BONDOWOSO', '089347478372', 'hel000941@gmail.com', 'alexr', '123qwerty..', 'Untitled.jpg', 'admin', 'Analis Sistem', 'Laki-laki'),
('3511101506980003', 'Munir', '1999-02-14', 'Rt/Rw 009/004, Sukosari Lor, Sukosari, Bondowoso', '082316285715', 'hel000941@gmail.com', 'khalila', '123qwerty..', 'Untitled.jpg', 'admin', ' Programmer', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  ADD PRIMARY KEY (`kode_kayu`);

--
-- Indeks untuk tabel `tbl_upkayu`
--
ALTER TABLE `tbl_upkayu`
  ADD PRIMARY KEY (`kode_up`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `kode_kayu` (`kode_kayu`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kayu`
--
ALTER TABLE `tbl_kayu`
  MODIFY `kode_kayu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_upkayu`
--
ALTER TABLE `tbl_upkayu`
  MODIFY `kode_up` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_upkayu`
--
ALTER TABLE `tbl_upkayu`
  ADD CONSTRAINT `tbl_upkayu_ibfk_2` FOREIGN KEY (`kode_kayu`) REFERENCES `tbl_kayu` (`kode_kayu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
