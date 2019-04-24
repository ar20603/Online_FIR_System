-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2019 at 11:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `SNo` bigint(255) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Age` int(150) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `Inc_DateTime` datetime(6) DEFAULT NULL,
  `Reg_DateTime` datetime(6) DEFAULT NULL,
  `Complaint` varchar(500) DEFAULT NULL,
  `Section` varchar(255) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Approved` tinyint(1) NOT NULL DEFAULT '0',
  `SIID` bigint(255) DEFAULT NULL,
  `Status` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
