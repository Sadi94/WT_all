-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2021 at 12:28 PM
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
-- Table structure for table `paregistration`
--

CREATE TABLE `paregistration` (
  `ID` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `nid` varchar(17) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paregistration`
--

INSERT INTO `paregistration` (`ID`, `fname`, `lname`, `contact`, `nid`, `email`, `password`, `gender`, `Address`) VALUES
(2, 'Sazim', 'Rahman', '+880 1631-80437', '456*******', 'noorefahmida75@gamail.com', 'xyz123', 'Female', 'Jatrabari'),
(3, 'Naymul', 'Islam', 'Array', '147*******', 'Array', '789456', 'Male', 'Array'),
(6, 'kalol', 'jow', '0175859686', '23564987123', 'df@gmail.com', '5412369', 'male', 'uttara'),
(7, 'kal', 'jow', '017589686', '4987123', 'lf@gmail.com', '5412369', 'male', 'uttara'),
(8, 'lol', 'jow', '01758686', '2356423', 'kf@gmail.com', '5412369', 'male', 'uttara'),
(9, 'hasan', 'jow', '4646156519564', '23500023', 'd@gmail.com', '5412369', 'male', 'uttara'),
(10, 'mehedi', 'jow', '845162315684965', '235641230000', 'sd@gmail.com', '5412369', 'male', 'uttara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paregistration`
--
ALTER TABLE `paregistration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paregistration`
--
ALTER TABLE `paregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
