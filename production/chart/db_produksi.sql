-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 04:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `gas_month`
--

CREATE TABLE `gas_month` (
  `jumlah` int(50) NOT NULL,
  `tanggal` int(50) NOT NULL,
  `target` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas_month`
--

INSERT INTO `gas_month` (`jumlah`, `tanggal`, `target`, `id`) VALUES
(1200, 1, 6000, 1),
(1200, 2, 6000, 2),
(1200, 3, 6000, 3),
(1200, 4, 6000, 4),
(1200, 5, 6000, 5),
(1200, 6, 6000, 6),
(1200, 7, 6000, 7),
(1200, 8, 6000, 8),
(1200, 9, 6000, 9),
(1200, 10, 6000, 10),
(1200, 11, 6000, 11),
(1200, 12, 6000, 12),
(1200, 13, 6000, 13),
(1200, 14, 6000, 14),
(1200, 15, 6000, 15),
(1200, 16, 6000, 16),
(1200, 17, 6000, 17),
(1200, 18, 6000, 18),
(1200, 19, 6000, 19),
(1200, 20, 6000, 20),
(1200, 21, 6000, 21),
(1200, 22, 6000, 22),
(1200, 23, 6000, 23),
(1200, 24, 6000, 24),
(1200, 25, 6000, 25),
(1200, 26, 6000, 26),
(1200, 27, 6000, 27),
(1200, 28, 6000, 28),
(1200, 29, 6000, 29),
(1200, 30, 6000, 30),
(1200, 31, 6000, 31);

-- --------------------------------------------------------

--
-- Table structure for table `gas_years`
--

CREATE TABLE `gas_years` (
  `jumlah` int(50) NOT NULL,
  `tahun` int(50) NOT NULL,
  `target` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas_years`
--

INSERT INTO `gas_years` (`jumlah`, `tahun`, `target`, `id`) VALUES
(2, 2014, 1, 1),
(3, 2015, 0, 2),
(4, 2016, 0, 3),
(5, 2017, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `oil_month`
--

CREATE TABLE `oil_month` (
  `jumlah` int(50) NOT NULL,
  `tanggal` int(50) NOT NULL,
  `target` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oil_month`
--

INSERT INTO `oil_month` (`jumlah`, `tanggal`, `target`, `id`) VALUES
(2500, 2, 3200, 2),
(2500, 3, 3200, 3),
(2500, 4, 3200, 4),
(2500, 5, 3200, 5),
(2500, 6, 3200, 6),
(2500, 7, 3200, 7),
(2500, 8, 3200, 8),
(3500, 9, 3200, 9),
(3500, 10, 3200, 10),
(3500, 11, 3200, 11),
(3500, 12, 3200, 12),
(3500, 13, 3200, 13),
(3500, 14, 3200, 14),
(3000, 15, 3200, 15),
(3000, 16, 3200, 16),
(3000, 17, 3200, 17),
(3000, 18, 3200, 18),
(3000, 19, 3200, 19),
(3500, 20, 3200, 20),
(3500, 21, 3200, 21),
(3500, 22, 3200, 22),
(3500, 23, 3200, 23),
(3500, 24, 3200, 24),
(3500, 25, 3200, 25),
(3500, 26, 3200, 26),
(3500, 27, 3200, 27),
(3500, 28, 3200, 28),
(3500, 29, 3200, 29),
(3500, 30, 3200, 30),
(3500, 31, 3200, 31);

-- --------------------------------------------------------

--
-- Table structure for table `oil_years`
--

CREATE TABLE `oil_years` (
  `jumlah` int(50) NOT NULL,
  `tahun` int(50) NOT NULL,
  `target` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oil_years`
--

INSERT INTO `oil_years` (`jumlah`, `tahun`, `target`, `id`) VALUES
(2500, 2014, 3200, 1),
(3000, 2015, 3200, 2),
(3500, 2016, 3200, 3),
(4000, 2017, 3200, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
