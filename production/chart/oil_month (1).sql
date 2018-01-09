-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 04:12 AM
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
-- Table structure for table `oil_month`
--

CREATE TABLE `oil_month` (
  `jumlah` int(50) NOT NULL,
  `tanggal` int(50) NOT NULL,
  `target` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oil_month`
--

INSERT INTO `oil_month` (`jumlah`, `tanggal`, `target`) VALUES
(2500, 1, 8),
(2500, 2, 6),
(2500, 3, 7),
(2500, 4, 5),
(2500, 5, 5),
(2500, 6, 0),
(2500, 7, 7),
(2500, 8, 7),
(3000, 9, 4),
(3000, 10, 6),
(3000, 11, 4),
(3000, 12, 8),
(3000, 13, 3),
(3000, 14, 8),
(3500, 15, 8),
(3500, 16, 8),
(3500, 17, 8),
(3500, 18, 8),
(3500, 19, 8),
(4000, 20, 8),
(4000, 21, 5),
(4000, 22, 5),
(4000, 23, 5),
(4000, 24, 5),
(4000, 25, 5),
(4500, 26, 5),
(4500, 27, 5),
(4500, 28, 9),
(4500, 29, 9),
(5500, 30, 9),
(2500, 31, 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
