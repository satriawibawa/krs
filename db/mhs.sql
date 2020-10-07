-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 11:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id_mhs` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` char(32) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id_mhs`, `nim`, `nama`, `jurusan`, `alamat`, `email`, `username`, `password`) VALUES
(1, 2147483647, 'Sugi', 'ti', 'abc', 'sugi@gmail.com', 'abc', '$2y$10$Jkh3oieUoAsOeedCbTMSLOZKqSqOAXYNSNCOWb1NU.qw8Sl9YG0za');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
