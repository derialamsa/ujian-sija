-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2026 at 04:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujiann_deri`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kelompok`
--

CREATE TABLE `kategori_kelompok` (
  `no` int(5) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `kompetensi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_kelompok`
--

INSERT INTO `kategori_kelompok` (`no`, `kode`, `kompetensi`) VALUES
(1, 'k01', 'SIJA'),
(2, 'k02', 'TKJ'),
(3, 'k03', 'RPL'),
(4, 'k04', 'DKV');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `no` int(5) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`no`, `user`, `password`, `status`) VALUES
(1, 'admin', 1234, 0),
(2, 'guest', 1234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nama`
--

CREATE TABLE `nama` (
  `no` int(5) NOT NULL,
  `kode` int(10) NOT NULL,
  `kompetensi` int(20) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` int(50) NOT NULL,
  `tahun_angkatan` int(5) NOT NULL,
  `file_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nama_kelas`
--

CREATE TABLE `nama_kelas` (
  `no` int(5) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `kompetensi` varchar(20) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun_angkatan` int(5) NOT NULL,
  `file_foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nama_kelas`
--

INSERT INTO `nama_kelas` (`no`, `kode`, `kompetensi`, `nis`, `nama`, `tahun_angkatan`, `file_foto`) VALUES
(1, 'k01', 'SIJA', 1001001, 'Albert', 2025, 'gb.jpg'),
(2, 'k02', 'TKJ', 1001002, 'Raka', 2024, 'gb1.jpg'),
(3, 'k03', 'RPL', 1002001, 'Dani', 2024, 'gb2.jpg'),
(4, 'k04', 'DKV', 1002001, 'Suhendi', 2024, 'gb3.jpg'),
(5, 'k01', 'SIJA', 1001001, 'adul', 2024, 'logo-sija1-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_kelompok`
--
ALTER TABLE `kategori_kelompok`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `nama`
--
ALTER TABLE `nama`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `nama_kelas`
--
ALTER TABLE `nama_kelas`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_kelompok`
--
ALTER TABLE `kategori_kelompok`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nama`
--
ALTER TABLE `nama`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nama_kelas`
--
ALTER TABLE `nama_kelas`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
