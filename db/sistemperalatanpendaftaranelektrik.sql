-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2023 at 03:34 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemperalatanpendaftaranelektrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(20) NOT NULL,
  `kata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `kata`) VALUES
(1, '$2y$10$QrK5CXqsin3oGO3lmdNLOekckiL.LCLI9V8WX3yzBeABEysOyM19.');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `idpelajar` int(20) NOT NULL,
  `warden` varchar(30) NOT NULL,
  `namapelajar` varchar(100) NOT NULL,
  `nokppelajar` varchar(12) NOT NULL,
  `kata` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`idpelajar`, `warden`, `namapelajar`, `nokppelajar`, `kata`) VALUES
(1, '1', 'siti', '', '$2y$10$v479xRObTOHjQSJUQcpwteHBI0iOILOn990VxhVwTwCi4x6jDuhqe');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `idperalatan` int(20) NOT NULL,
  `pelajar` varchar(30) NOT NULL,
  `jenisperalatan` varchar(30) NOT NULL,
  `jenama` varchar(25) NOT NULL,
  `nosiri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `idwarden` int(20) NOT NULL,
  `namawarden` varchar(100) NOT NULL,
  `nokpwarden` int(11) NOT NULL,
  `kata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`idwarden`, `namawarden`, `nokpwarden`, `kata`) VALUES
(1, 'ali', 0, '$2y$10$v479xRObTOHjQSJUQcpwteHBI0iOILOn990VxhVwTwCi4x6jDuhqe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`idpelajar`),
  ADD UNIQUE KEY `nokppelajar` (`nokppelajar`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`idperalatan`),
  ADD UNIQUE KEY `nosiri` (`nosiri`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`idwarden`),
  ADD UNIQUE KEY `nokpwarden` (`nokpwarden`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `idpelajar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warden`
--
ALTER TABLE `warden`
  MODIFY `idwarden` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
