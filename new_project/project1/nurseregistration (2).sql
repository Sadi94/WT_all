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
-- Table structure for table `nurseregistration`
--

CREATE TABLE `nurseregistration` (
  `name` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `id` varchar(100) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `hid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurseregistration`
--

INSERT INTO `nurseregistration` (`name`, `contact`, `id`, `hname`, `hid`, `email`, `password`, `gender`) VALUES
('too', '014526879', '01254879', 'jakorb', 5697, 'g@gmail.com', '4515561', 'femal'),
('joj', '01485526879', '4879', 'jakorb', 56197, 'ga@gmail.com', '48515561', 'femal'),
('kom', '014587526879', '754879', 'jaorb', 558697, 'de@gmail.com', '04561', 'femal'),
('noo', '0145268579', '0125487229', 'jakorb', 569987, 'cs@gmail.com', '451500561', 'femal'),
('hasan', '0154526879', '098554879', 'fghfdsdf', 5697, 'er@gmail.com', '45015561', 'femal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
