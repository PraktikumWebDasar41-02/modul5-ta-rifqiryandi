-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2018 pada 20.35
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `NIM` bigint(11) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` text NOT NULL,
  `jurusan` text NOT NULL,
  `fakultas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`NIM`, `Nama`, `email`, `tgl_lahir`, `jk`, `jurusan`, `fakultas`) VALUES
(1111111115, 'rifqi ryandi', 'rianraka22@gmail.com', '2018-10-10', 'Laki-Laki', 'Manajemen informatika', 'FIT'),
(6701174004, 'rifqi ryandi', 'rianraka22@gmail.com', '2018-10-03', 'Laki-Laki', 'MBTI', 'FKB');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_jurnal1`
--
ALTER TABLE `t_jurnal1`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
