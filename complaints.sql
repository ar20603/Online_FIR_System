-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2019 at 07:56 PM
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
  `Password` varchar(300) NOT NULL,
  `Count` bigint(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cops`
--

INSERT INTO `cops` (`id`, `Name`, `Post`, `Category`, `Email`, `Password`, `Count`) VALUES
(1, 'Pradhyuman', 'SI', 'Murder', 'pradh@gmail.com', 'daya', 0),
(3, 'Abhijeet', 'ASI', '', 'abhijeet@gmail.com', 'abhi', 0),
(4, 'Mayank Wadhwani', 'SI', 'Theft & Robbery', 'mayank@gmail.com', 'manku', 0),
(6, 'Anubhav Tyagi', 'SI', 'Domestic Affairs', 'tyagi@gmail.com', 'tyagi', 0),
(7, 'Manan Gupta', 'SI', 'Others', 'gupta@gmail.com', 'man', 0),
(8, 'Piyush Gupta', 'SI', 'Theft & Robbery', 'piyu@gmail.com', 'piyu', 0),
(9, 'Ravi Shankar', 'SI', 'Domestic Affairs', 'shank@gmail.com', 'ravi', 1),
(10, 'Anant Sachan', 'SI', 'Murder', 'sachan@gmail.com', 'anant', 0),
(11, 'Shubham Maurya', 'SI', 'Others', 'maurya@gmail.com', 'maurya', 0),
(12, 'Abhishek Jaiswal', 'ASI', '', 'jaiswal@gmail.com', 'abhi', 0),
(13, 'Aman Raj', 'ASI', '', 'raj@gmail.com', 'aman', 0);

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
(6, 'Abhishek Jaiswal', 20, 'B-316', '2019-05-16 23:56:00.000000', '2019-05-01 21:03:55.000000', 'Attempt to Murder', '344', 'Murder', 1, 1, 'Accused Arrested!'),
(8, 'Ankur Ingale', 23, 'C-112', '2019-05-10 23:55:00.000000', '2019-05-01 22:38:18.000000', 'Others', '999', 'Others', 1, 7, 'Case Closed!'),
(9, 'Mihir Yadav', 35, 'C-116', '2019-05-14 18:56:00.000000', '2019-05-01 22:42:16.000000', 'Domestic Violence', '304', 'Domestic Affairs', 1, 6, 'Case solved!'),
(10, 'Anant Sachan', 56, 'C-112', '2019-05-23 12:23:00.000000', '2019-05-01 22:45:08.000000', 'Theft', '304', 'Theft & Robbery', 0, NULL, NULL),
(11, 'Parvinder', 56, 'C-112', '2019-05-23 12:23:00.000000', '2019-05-01 22:50:31.000000', 'Attempt to Murder', '344', 'Murder', 0, NULL, NULL),
(12, 'Kanishq Agarwal', 45, 'C-111', '2019-05-05 12:23:00.000000', '2019-05-01 22:51:03.000000', 'Others', '999', 'Others', 0, NULL, NULL),
(13, 'Anirudh Agarwal', 45, 'C-178', '2019-05-05 12:23:00.000000', '2019-05-01 22:53:38.000000', 'Domestic Violence', '304', 'Domestic Affairs', 1, 9, NULL),
(14, 'Ashutosh ', 23, 'C-278', '2019-05-06 12:23:00.000000', '2019-05-01 22:59:21.000000', 'Attempt to Murder', '344', 'Murder', 0, NULL, NULL),
(15, 'Kushal', 26, 'C-289', '2019-05-04 12:56:00.000000', '2019-05-01 23:00:03.000000', 'Others', '999', 'Others', 0, NULL, NULL),
(16, 'Ashish', 22, 'C-028', '2019-05-28 12:56:00.000000', '2019-05-01 23:03:59.000000', 'Theft', '304', 'Theft & Robbery', 0, NULL, NULL),
(17, 'Abhishek', 11, 'C114', '2020-02-01 00:01:00.000000', '2019-05-01 23:17:02.000000', 'Attempt to Murder', '344', 'Murder', 1, 1, 'done bro');

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
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `SNo` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
