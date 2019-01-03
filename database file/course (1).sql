-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 09:41 AM
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Id` char(20) NOT NULL,
  `Course_Image` varchar(200) NOT NULL,
  `Course_Name` char(50) DEFAULT NULL,
  `Course_description` varchar(200) NOT NULL,
  `Course_duration` varchar(200) NOT NULL,
  `Course_type` varchar(200) NOT NULL,
  `Course_fees` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Id`, `Course_Image`, `Course_Name`, `Course_description`, `Course_duration`, `Course_type`, `Course_fees`, `Location`) VALUES
('f001', 'garden.jpg', 'Gardenning', 'Create the perfect front yard and backyard landscapes with our gardening tips. We\'ll tell you about beautiful annual, perennial, bulb, and rose flowers, as well as trees, shrubs, and groundcovers that', 'Lecture Starts : 23rd September ', 'Course Type : Part Time', 'Free', ' Branch :Galle'),
('f002', '\r\nbee.jpg\r\n', 'Bee-keeping', 'This Preliminary Beekeeping course is aimed at those with an interest in, or who may be thinking about keeping bees, but have not yet attended a course.', 'Lecture Starts : 11th January', 'Course Type : Part-Time', 'Free', 'Branch : Galle'),
('f003', 'compost.jpg', 'Compost production', 'This 40-hr, 5-day course focuses on giving you the knowledge you need to run a successful composting facility, whether you’re just getting started or have been composting for a while.', 'Lecture Starts :16th January', 'Course Type :Part Time', 'Free', 'Branch : Galle'),
('f004', 'orchid.jpg', 'Orchid plantation', 'This specialist course is aimed at those that would love to work in the orchid growing sector. Greenhouse growing is covered extensively throughout this very rounded course.', 'Lecture Starts :18th January', 'Course Type :Part Time', 'Rs.700', ' Branch :Galle'),
('f005', 'land.jpg', 'Landscaping', 'If your interest is in all areas of landscaping, design, contracting and construction plus plant selection, plant care and plant identification (all of which are important factors in good garden desig', 'Lecture Starts :19th January', 'Course Type : Full Time ', 'Rs.700', 'Branch :Galle'),
('f006', 'organic.jpg', 'Organic Farming', 'There are 10 lessons in this course: Introduction to Organic Farming. nature. Integrated Farm Management Systems. rotation design. Organic Management Issues. certification. Organic Soil Management and', 'Lecture Start : 30th January', 'Course Type : Full Time', 'Free', 'Branch :Galle'),
('f007', 'mushroom.jpg', 'Mashroom Cultivation', ' These include facilities to conduct training programs on budding, grafting, layering, and other plant propagation techniques using well-trained and skilled staff. ', 'Lecture Start : 1st February', 'Course Type :Part Time', 'Rs.700', 'Branch : Galle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
