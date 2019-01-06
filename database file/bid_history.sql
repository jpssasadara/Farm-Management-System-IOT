-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 03:06 AM
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
-- Table structure for table `bid_history`
--

CREATE TABLE `bid_history` (
  `Bidder` varchar(200) NOT NULL,
  `Item_code` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `confirm` tinyint(1) NOT NULL,
  `reject` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_history`
--

INSERT INTO `bid_history` (`Bidder`, `Item_code`, `Amount`, `Date`, `confirm`, `reject`) VALUES
('956020778v', 'C002', '150', '2019-01-05', 0, 0),
('956020778v', 'C002', '150', '2019-01-05', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid_history`
--
ALTER TABLE `bid_history`
  ADD KEY `Item_code` (`Item_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid_history`
--
ALTER TABLE `bid_history`
  ADD CONSTRAINT `bid_history_ibfk_1` FOREIGN KEY (`Item_code`) REFERENCES `auction` (`Item_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
