-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 03:05 AM
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
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `Item_type` varchar(200) NOT NULL,
  `Id` varchar(200) NOT NULL,
  `Item_name` varchar(200) NOT NULL,
  `Item_code` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `Quantity` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`Item_type`, `Id`, `Item_name`, `Item_code`, `Price`, `Quantity`, `Date`, `Location`, `Description`) VALUES
('vegetables', '956020778v', 'carrot', 'C001', 'Rs.500.00', '1kg', '2019-01-11', 'Galle', 'mkskcmlzmclzmxc'),
('vegetables', '956020777v', 'carrot', 'C002', '250', '2kg', '2019-01-15', 'galle', 'vcvxcbxcbcb'),
('fruits', '956020777v', 'mango', 'M001', '200', '2kg', '2019-01-15', 'galle', 'vcvxcbxcbcb'),
('vegetables', '956020778v', 'snak gourd', 'S001', '500', '', '2019-01-09', 'matara', 'bjnjhncjxnckxmkzx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`Item_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
