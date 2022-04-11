-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 11:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mhs` int(50) NOT NULL,
  `nim_mhs` varchar(50) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jurusan_mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mhs`, `nim_mhs`, `nama_mhs`, `jurusan_mhs`) VALUES
(1, '20081000001', 'Rio Khadafi', 'Sistem Informasi'),
(4, '20081000002', 'D.Syidan Irsyadul Ibad Yusuf M', 'Sistem Informasi'),
(5, '20081000003', 'Lucky Ardiansyah', 'Sistem Informasi'),
(6, '20081000004', 'Lalu Widarse', 'Sistem Informasi'),
(7, '20081000006', 'M.Rifqi Aulia Rochman', 'Sistem Informasi'),
(8, '20081000007', 'Heni Susilowati', 'Sistem Informasi'),
(9, '20081000008', 'Rahmadina Tris Tanti', 'Sistem Informasi'),
(10, '20081000010', 'Brillian Kalegus Muzaki', 'Sistem Informasi'),
(11, '20081000011', 'Rizki Aridlo Rivedo', 'Sistem Informasi'),
(12, '20081000012', 'Odila Noura Tisa Salinding', 'Sistem Informasi'),
(13, '20081000014', 'Amelia Cahya Imani', 'Sistem Informasi'),
(14, '20081000019', 'Shinta Tri Andriyani', 'Sistem Informasi'),
(15, '20081000020', 'Bildad Ranti Allu', 'Sistem Informasi'),
(16, '20081000021', 'Dirra Rachma Aulia Fatimah Azzahra', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mhs` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
