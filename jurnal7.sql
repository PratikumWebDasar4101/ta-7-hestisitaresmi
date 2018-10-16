-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 06:49 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal7`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jeniskelamin`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
(670117001, 'Hesti Sitaresmi', 'Perempuan', 'D3MI', 'Fakultas Ilmu Terapan', 'Magetan', 'Bismillah'),
(670117002, 'Deksa Titah Prasojo', 'Perempuan', 'D3MI', 'Fakultas Teknik Elektro', 'Magetan', 'Bismillah Ya Allah'),
(670117004, 'Yasa Suryo Atmojo', 'Laki-Laki', 'D3IF', 'Fakultas Industri Kreatif', 'Magetan', 'Iam Fine'),
(670117005, 'Sunarti', 'Perempuan', 'D3KA', 'Fakultas Komunikasi Bisnis', 'Madiun', 'My daughter is everything'),
(670117006, 'Karyono', 'Laki-Laki', 'D3TT', 'Fakultas Teknik Elektro', 'Magetan', 'All to you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
