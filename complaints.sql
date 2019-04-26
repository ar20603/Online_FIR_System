-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 10:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

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
-- Table structure for table `cops`
--

CREATE TABLE `cops` (
  `id` bigint(255) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Post` varchar(300) NOT NULL,
  `Category` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cops`
--

INSERT INTO `cops` (`id`, `Name`, `Post`, `Category`, `Email`, `Password`) VALUES
(1, 'Pradhyuman', 'SI', 'murder', 'acppradhyuman@gmail.com', 'daya'),
(3, 'Abhijeet', 'ASI', '', 'abhijeet@gmail.com', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `SNo` bigint(255) NOT NULL,
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

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`SNo`, `Name`, `Age`, `Address`, `Inc_DateTime`, `Reg_DateTime`, `Complaint`, `Section`, `Category`, `Approved`, `SIID`, `Status`) VALUES
(1, 'Tanya', 20, 'hadh  sialghpis iajegp ', '2018-01-21 23:00:00.000000', '2019-04-24 16:24:26.000000', 'Theft', 'Theft', 'Theft', 0, NULL, NULL),
(2, 'Aman', 20, 'hadh  sialghpis iajegp ', '2018-01-21 23:00:00.000000', '2019-04-24 16:25:42.000000', 'Attempt to murder', 'Attempt to murder', 'Attempt to murder', 0, NULL, NULL),
(5, 'Mihir', 30, 'C116', '2019-04-01 01:01:00.000000', '2019-04-25 02:00:11.000000', 'Domestic Violence', 'Domestic Violence', 'Domestic Violence', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cops`
--
ALTER TABLE `cops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cops`
--
ALTER TABLE `cops`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `SNo` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
