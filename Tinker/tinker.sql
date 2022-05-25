-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ser` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `adate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ser`, `fname`, `lname`, `aname`, `nid`, `contact`, `mail`, `password`, `position`, `adate`) VALUES
(1, 'Sadi', 'Mohammad', 'admin', '987654321', 1683596201, 'admin@gmail.com', 'admin@123', 'Admin', '1999-12-21'),
(2, 'Mushfiq', 'Rahim', 'Ra', '456789012', 1681246201, 'mr@info.bd', 'abcd@123', 'Store Owner', '12-21-2020');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `fname`, `lname`, `contact`, `nid`, `email`, `password`, `gender`, `Address`) VALUES
(2, 'Sharmin', 'SDJKASDJ', '01923772873', '127383455', 'shs@gmail.com', 'abcd@123', 'Female', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `ID` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`ID`, `fname`, `lname`, `contact`, `nid`, `email`, `password`, `gender`, `Address`, `sname`) VALUES
(1, 'Shawon', 'FK', '0193723472', '1029371832', 'sk@gmail.com', 'abcd@123', 'Female', 'Dhaka', ''),
(2, 'ab', 'sfghj', '91278931121', '132432536', 'sf@gmail.com', 'abcd@123', 'Male', 'Dhaka', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, 'abc', 'ABC', '01927364364', '1234567389', 'an@info.bd', 'abcd@123', 'Male', 'ABCD,Dhaka', 'PK');

-- --------------------------------------------------------

--
-- Table structure for table `storeowner`
--

CREATE TABLE `storeowner` (
  `ID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storeowner`
--

INSERT INTO `storeowner` (`ID`, `fname`, `lname`, `contact`, `nid`, `email`, `password`, `gender`, `Address`) VALUES
(1, 'Mushfiq', 'rjsnbdf', '0183781623817', '13271723', 'mr@info@bd\r\n', 'abcd@123', 'Male', '20/TA,2Gulshan,Dhaka'),
(2, 'abcd', 'ab', '01928373663', '123456677', 'sm@info.bd', 'abcd@123', 'Male', 'ABCD2kj,DHaka');

-- --------------------------------------------------------

--
-- Table structure for table `tinker`
--

CREATE TABLE `tinker` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Birthday` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tinker`
--

INSERT INTO `tinker` (`Name`, `Email`, `Birthday`, `Username`, `Password`, `Gender`, `Designation`) VALUES
('Sadi', 'admin@gmail.com', '0000-00-00', 'sadi', 'admin@123', 'male', 'Admin'),
('Sadi Mohammad', 'admin@gmail.com', '0000-00-00', 'admin', 'admin@123', 'male', 'Admin'),
('Mushfiq', 'mushfiq@gmail.com', '0000-00-00', 'Mushfiq', 'abcd@1234', 'male', 'Store Owner'),
('Fahmida', 'fk@gmail.com', '0000-00-00', 'Fahmida', 'abcd@1234', 'female', 'Employee'),
('JackFruit', 'asaks@gmail.com', '0000-00-00', 'Dip', 'Sharmin@1212', 'male', 'Customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
