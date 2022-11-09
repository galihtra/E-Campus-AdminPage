-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2022 at 12:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(6) NOT NULL,
  `nidn` char(10) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama`, `alamat`, `jabatan`) VALUES
(3, '4342201011', 'Eka Yanto S.Kom', 'Perum GMP 2', 'Kaprodi Informatika'),
(7, '4442201010', 'MUHAMMAD TOPAN S.Pd', 'POLITEKNIK NEGERI BATAM', 'Dosen Pengajar');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(6) NOT NULL,
  `mataKuliah` varchar(100) DEFAULT NULL,
  `ruang` varchar(30) DEFAULT NULL,
  `hari` varchar(30) DEFAULT NULL,
  `jam` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `mataKuliah`, `ruang`, `hari`, `jam`) VALUES
(1, 'Pemrograman Berbasis Web', 'Online', 'Senin', '07:00-09:30'),
(2, 'Pemrograman Berbasis Web', 'TA.11.5', 'Senin', '09:30-12:30'),
(3, 'Analisis Perangkat Lunak', 'Online', 'Senin', '12:50-14:30'),
(4, 'Analisis Perangkat Lunak', 'TA.12.3', 'Selasa', '09:30-12:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(6) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `alamat`, `jurusan`) VALUES
(9, '4342201010', 'Galih Tri Risky Andiko', 'POLITEKNIK NEGERI BATAM', 'Informatika'),
(10, '4342201011', 'MUHAMMAD TOPAN', 'POLITEKNIK NEGERI BATAM', 'TRPL'),
(12, '4342201014', 'Eko Khaneddy', 'Jl.Melati', 'Informatika'),
(13, '4342201014', 'MUHAMMAD RICKY', 'Jl.Melati', 'Rekayasa Keamanan Siber');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(6) NOT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `bagian` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nik`, `nama`, `bagian`) VALUES
(1, '2171020406049001', 'Galih Tri Risky Andiko', 'Staff IT'),
(3, '2171020406049009', 'MUHAMMAD RICKY', 'Staff IT'),
(4, '2171020406049005', 'Eka', 'Staff IT'),
(5, '2171020406049003', 'MUHAMMAD TOPAN', 'Staff IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
