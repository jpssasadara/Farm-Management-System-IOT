

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 09:38 AM
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
-- Table structure for table `registeredfarmer`
--

CREATE TABLE `registeredfarmer` (
  `Id` char(20) NOT NULL,
  `First_Name` char(20) NOT NULL,
  `Last_Name` char(20) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Tele_Number` char(20) NOT NULL,
  `Email` char(20) DEFAULT NULL,
  `Address` char(50) NOT NULL,
  `variety` varchar(200) NOT NULL,
  `kind_of_variety` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredfarmer`
--

INSERT INTO `registeredfarmer` (`Id`, `First_Name`, `Last_Name`, `Gender`, `Tele_Number`, `Email`, `Address`, `variety`, `kind_of_variety`, `username`, `password`) VALUES
('', '', '', '', '', '', '', '', 'Pumpkin', '', ''),
('95478562v', 'Anjana Rasadari Isur', '', 'female', '716239954', 'anjanarasadari21@gma', 'No-:175/17,old galle road, walliwala, weligama', 'Fruits', '', 'ra', '147'),
('956020778v', 'Anjana Rasadari Isur', '', 'female', '716239954', 'anjanarasadari21@gma', 'No-:175/17,old galle road, walliwala, weligama', 'Fruits', '', 'Anjana', '123456'),
('956041778v', 'Anjana Rasadari Isur', '', 'female', '716239954', 'anjanarasadari21@gma', 'No-:175/17,old galle road, walliwala, weligama', '', '', 'ra', '123456'),
('farmer1', 'dasun', 'kasun', 'male', '46456546', 'dggchg@emailcom', '23dgfdfdsgfg', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeredfarmer`
--
ALTER TABLE `registeredfarmer`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
