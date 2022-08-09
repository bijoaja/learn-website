-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2022 pada 08.34
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

use uas202410103042;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas202410103042`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `fakultas_name` varchar(30) NOT NULL,
  `animo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id`, `fakultas_name`, `animo`) VALUES
(2, 'Hukum', 3417),
(3, 'FISIP', 7641),
(4, 'Pertanian', 6846),
(5, 'Ekonomi', 12541),
(6, 'FKIP', 1893),
(7, 'SASTRA', 3862),
(8, 'Teknologi Pertanian', 5166),
(9, 'Kedokteran Gigi', 3053),
(10, 'MIPA', 3138),
(11, 'Kedokteran', 4670),
(12, 'Kesehatan Masyarakat', 4662),
(13, 'Teknik', 6069),
(14, 'Farmasi', 3889),
(15, 'Ilmu Keperawatan', 3254),
(16, 'FASILKOM', 2594);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
