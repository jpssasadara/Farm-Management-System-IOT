-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 09:42 AM
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
-- Table structure for table `courseregistration`
--

CREATE TABLE `courseregistration` (
  `course_name` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseregistration`
--

INSERT INTO `courseregistration` (`course_name`, `full_name`, `email`, `password`) VALUES
('computer science', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '12345'),
('computer science', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '12345'),
('', '', '', ''),
('', '', '', ''),
('IS', '', '', '1234567899'),
('IS', '', '', '1234567899'),
('HJKSDCKAS', 'XMCNZKC', 'JZKXJZLCK@MCXZKMC', '231233'),
('HJKSDCKAS', 'XMCNZKC', 'JZKXJZLCK@MCXZKMC', '231233'),
('computer science', 'Hasini', 'hasi@gmail.com', '123'),
('computer science', 'Hasini', 'hasi@gmail.com', '123'),
('Orchid plantation', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '12'),
('Orchid plantation', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '12'),
('Orchid plantation', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '111'),
('Orchid plantation', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '111'),
('Bee-keeping', 'Roshani', 'roshani@gmail.com', '123456'),
('Bee-keeping', 'Roshani', 'roshani@gmail.com', '123456'),
('Bee-keeping', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '123456'),
('Bee-keeping', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '123456'),
('Gardenning', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '14'),
('Gardenning', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '14'),
('Landscaping', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '12'),
('Landscaping', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '12'),
('Gardenning', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '145'),
('Gardenning', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '145'),
('Bee-keeping', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '145'),
('Bee-keeping', 'Anjana Rasadari Isurundi Daluwatta Galappaththi', 'anjanarasadari21@gmail.com', '145');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
