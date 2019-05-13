-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 05:14 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dtuser`
--

CREATE TABLE `tb_dtuser` (
  `iduser` int(11) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `nomortelfon` varchar(100) NOT NULL,
  `tgldaftaruser` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dtuser`
--

INSERT INTO `tb_dtuser` (`iduser`, `namauser`, `nomortelfon`, `tgldaftaruser`, `alamat`, `status`, `pesan`) VALUES
(1, 'Ahmad M', '+6281939197471', '1 Mei 2019', 'Jl Ciungwanara V no 20', 'Aktif', 'Hello World'),
(2, 'Ku Klux Klan', '+6281936669580', '10 Mei 2019', 'Jl. SMK TI Bali Global', 'Aktif', 'asas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dtuser`
--
ALTER TABLE `tb_dtuser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dtuser`
--
ALTER TABLE `tb_dtuser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
