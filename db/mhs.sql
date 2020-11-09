-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 12:23 PM
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
-- Table structure for table `adak`
--

CREATE TABLE `adak` (
  `id_adak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adak`
--

INSERT INTO `adak` (`id_adak`, `nama`, `email`, `username`, `password`, `alamat`) VALUES
(1, 'Sugi', 'sugi@gmail.com', 'abc', '$2y$10$3pBwmapjWh31smKuBmykGe546BYwBD8XqZmAZjkZJJIieDeNVVxke', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` char(32) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama`, `alamat`, `email`, `username`, `password`) VALUES
(3, 'satrio wibowo', 'palembang', 'admin@gmail.com', 'admin', '$2y$10$rdg7W6Z9xHFGIwHpkX433uNo3XJPRJ/mrmC6J7wMQn1AMVR6IDKeG'),
(5, 'abc', 'abc', 'abc@gmail.com', 'abc', '$2y$10$K2q/Xq96v1EUKqQWYbMBA.Ai4R78CMnEUVzjjk/Y7IZInerClI5IS'),
(6, 'Budi', 'Jalan', 'budi@gmail.com', 'budi', '$2y$10$39o1GDwrJQ4WHZd7DChK3ea0LoZB3mUQEDbQYAynQL1EvbDrx9HRG');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `kd_matkul` varchar(9) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` char(10) NOT NULL,
  `ruangan` char(10) NOT NULL,
  `kelas` char(10) NOT NULL,
  `hari` char(10) NOT NULL,
  `jam` char(10) NOT NULL,
  `semester` int(2) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `kd_matkul`, `nama_matkul`, `sks`, `ruangan`, `kelas`, `hari`, `jam`, `semester`, `id_dosen`) VALUES
(9, 'T123', 'BHS Inggris', '3', 'TR21', '3', 'senin', '2:35 pm', 3, 3),
(10, 'S123', 'JAVA', '3', 's21', '2', 'jumat', '1:01 pm', 1, 5),
(11, 'TI-331', 'Pemrogranan Javascript', '3', 'S-21', '1', 'rabu', '5:43 am', 5, 6),
(12, 'TI-31', 'Pemrograman PHP', '3', 'S-33', '2', 'kamis', '5:45 am', 1, 3);

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
(1, 2147483647, 'Sugi', 'ti', 'abc', 'sugi@gmail.com', 'abc', '$2y$10$Jkh3oieUoAsOeedCbTMSLOZKqSqOAXYNSNCOWb1NU.qw8Sl9YG0za'),
(2, 15544211, 'abc', 'si', 'abc', 'abc@gmail.com', 'abc', '$2y$10$MogckmMjhjtpUbVmAVodVuVkBqvGM1y2XZqL1BMVk85OO03a0EY6q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adak`
--
ALTER TABLE `adak`
  ADD PRIMARY KEY (`id_adak`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adak`
--
ALTER TABLE `adak`
  MODIFY `id_adak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `krs_ibfk_3` FOREIGN KEY (`id_mhs`) REFERENCES `mhs` (`id_mhs`);

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `matkul_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
