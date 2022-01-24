-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 12:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `bulan` varchar(8) DEFAULT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `makan` enum('false','true') DEFAULT NULL,
  `listrik` enum('false','true') DEFAULT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan`, `id_spp`, `makan`, `listrik`, `keterangan`) VALUES
(74, NULL, '0129312', NULL, 'Januari', 8, NULL, NULL, ''),
(75, NULL, '0129312', NULL, 'Februari', 8, NULL, NULL, ''),
(76, NULL, '0129312', NULL, 'Maret', 8, NULL, NULL, ''),
(77, NULL, '0129312', NULL, 'April', 8, NULL, NULL, ''),
(78, NULL, '0129312', NULL, 'Mei', 8, NULL, NULL, ''),
(79, NULL, '0129312', NULL, 'Juni', 8, NULL, NULL, ''),
(80, NULL, '0129312', NULL, 'Juli', 8, NULL, NULL, ''),
(81, NULL, '0129312', NULL, 'Agustus', 8, NULL, NULL, ''),
(82, NULL, '0129312', NULL, 'Septembe', 8, NULL, NULL, ''),
(83, NULL, '0129312', NULL, 'Oktober', 8, NULL, NULL, ''),
(84, NULL, '0129312', NULL, 'November', 8, NULL, NULL, ''),
(85, NULL, '0129312', NULL, 'Desember', 8, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_spp` (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
