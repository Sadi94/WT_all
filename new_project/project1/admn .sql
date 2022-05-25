-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2021 at 12:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn`
--

CREATE TABLE `admn` (
  `ser` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `posi` varchar(255) NOT NULL,
  `adate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admn`
--

INSERT INTO `admn` (`ser`, `fname`, `lname`, `aname`, `nid`, `contact`, `mail`, `password`, `posi`, `adate`) VALUES
(1, 'John', 'hasan', 'SK tour', '545635258988', 55133, 'er@gmail.com', '123456', 'manager', '0058-05-05'),
(2, 'John', 'joke', 'sayre', '85214789631', 1718269866, 'we@gmail.com', '123456', 'manager', '0988-05-06'),
(15, 'ret', 'Doeeee', 'JK ee', '654485661655', 2147483647, 'abcd@gmail.com', '54654165', 'manager', '5456-05-06'),
(16, 'ret', 'Doeeee', 'JK ee', '654485661655', 2147483647, 'abcd@gmail.com', '54654165', 'manager', '5456-05-06'),
(17, 'dfsdfd', 'Doe', 'RK Group', '46416541646', 2147483647, 'abcd@gmail.com', '1516554565', 'manager', '0056-05-11'),
(18, 'dasde', 'bfbfbfd', 'RK Group', '545635215556', 2147483647, 'ab@gmail.com', '5544891', 'Other', '0045-12-06'),
(19, 'usdsds', 'ak', 'SK tour', '566154644165', 55132, 'we@gmail.com', '56444', 'manager', '5651-05-15'),
(20, 'usdsds', 'ak', 'SK tour', '566154644165', 55132, 'we@gmail.com', '56444', 'manager', '5651-05-15'),
(21, 'usdsds', 'ak', 'SK tour', '566154644165', 55132, 'we@gmail.com', '56444', 'manager', '5651-05-15'),
(22, 'scscs', 'kooo', 'JK Farm', '534534535353', 2147483647, 'aaa@gmail.com', '48465', 'web developer', '5544-05-06'),
(24, 'kjas', 'kjs', 'fsdfss', '85214796353', 2147483647, 'sd@gmail.com', '4563217', 'manager', '0044-05-05'),
(25, 'kjas', 'kjs', 'fsdfss', '85214796353', 2147483647, 'sd@gmail.com', '4563217', 'manager', '0044-05-05'),
(26, 'John', 'csd', 'sdss', '62165165161', 2147483647, 'we@gmail.com', '456464', 'manager', '0544-04-06'),
(27, 'mehedi', 'hasan', 'lo you', '54123698745', 2147483647, 'ab@gmail.com', '123456', 'manager', '0545-05-06'),
(28, 'jakob', 'ioji', 'dsfd', '8949489498494', 2147483647, 'abcd@gmail.com', '45494984', 'manager', '89489-05-04'),
(29, 'koole', 'frew', 'SK tour', '15146234886210', 2147483647, 'er@gmail.com', '456321', 'web developer', '0048-08-04'),
(30, 'koole', 'frew', 'SK tour', '15146234886210', 2147483647, 'er@gmail.com', '456321', 'web developer', '0048-08-04'),
(31, 'koole', 'frew', 'SK tour', '15146234886210', 2147483647, 'er@gmail.com', '456321', 'web developer', '0048-08-04'),
(33, 'gree', 'egg', 'fbgfb', '644464494944', 2147483647, 'abc@gmail.com', '456321', 'web developer', '89489-05-04'),
(34, 'rew', 'Doe', 'ffdfdsf', '102555545848', 1741556588, 'err@gmail.com', '8444484787', 'manager', '5645-05-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admn`
--
ALTER TABLE `admn`
  ADD PRIMARY KEY (`ser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admn`
--
ALTER TABLE `admn`
  MODIFY `ser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
