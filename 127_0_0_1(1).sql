-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengunjung`
--
CREATE DATABASE IF NOT EXISTS `db_pengunjung` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_pengunjung`;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengunjung`
--

CREATE TABLE `tabel_pengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `hobi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pengunjung`
--

INSERT INTO `tabel_pengunjung` (`id`, `nama`, `alamat`, `ttl`, `agama`, `hobi`) VALUES
(1, 'Uut', 'Gedong Tataan air', 'Gedong, 19-10-1999', 'Islam', 'Makan'),
(3, 'Budi', 'Jauh', 'Jauh, 10-11-1112', 'Islam', 'makan'),
(4, 'Udin', 'Jauh', 'Jauh, 10-11-1112', 'Bukan Islam', 'Gak Makan'),
(5, 'Budman', 'Jauh', 'Jauh, 10-11-1112', 'Bukan Islam', 'Gak Makan'),
(6, 'inem', 'jauh', 'Jauh, 10-11-1112', 'islam', 'makan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pengunjung`
--
ALTER TABLE `tabel_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pengunjung`
--
ALTER TABLE `tabel_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
