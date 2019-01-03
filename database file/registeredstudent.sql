-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 09:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmsmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeredstudent`
--

CREATE TABLE `registeredstudent` (
  `nic` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `Mobile` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Occupation` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredstudent`
--

INSERT INTO `registeredstudent` (`nic`, `fname`, `lname`, `Mobile`, `Gender`, `Address`, `Occupation`, `email`, `username`, `password`) VALUES
('956020778v', 'Anjana Rasadari Isurundi', 'Galappaththi', '716239954', 'female', 'No-:175/17,old galle road, walliwala, weligama', 'se', 'anjanarasadari21@gmail.com', '', '123'),
('956020778v', 'Anjana Rasadari Isurundi', 'Galappaththi', '716239954', 'female', 'No-:175/17,old galle road, walliwala, weligama', 'se', 'anjanarasadari21@gmail.com', 'Anjana', '1230');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
