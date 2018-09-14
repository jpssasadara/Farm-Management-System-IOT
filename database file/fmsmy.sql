-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 02:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

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
-- Table structure for table `addbillitem`
--

CREATE TABLE `addbillitem` (
  `Bill_Number` char(50) NOT NULL,
  `Item_Code` char(20) NOT NULL,
  `Amount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` varchar(100) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `User_Name`, `Password`) VALUES
('emp1', 'sa', '12'),
('emp3', 'pasan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_Number` char(50) NOT NULL,
  `Date` date NOT NULL,
  `Cashier_Id` char(50) NOT NULL,
  `Total` int(100) NOT NULL,
  `Cashier_Emp_Id` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Id` char(20) NOT NULL,
  `Course_Name` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `Course_Id` char(20) NOT NULL,
  `St_Id` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farm`
--

CREATE TABLE `farm` (
  `Id` char(20) DEFAULT NULL,
  `Name` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmshopemployee`
--

CREATE TABLE `farmshopemployee` (
  `Id` char(20) NOT NULL,
  `First_Name` char(20) NOT NULL,
  `Last_Name` char(20) NOT NULL,
  `Tele_Number` char(20) NOT NULL,
  `Email` char(20) NOT NULL,
  `Address` char(50) NOT NULL,
  `Salary` char(50) NOT NULL,
  `Username` char(20) NOT NULL,
  `Password` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmshopemployee`
--

INSERT INTO `farmshopemployee` (`Id`, `First_Name`, `Last_Name`, `Tele_Number`, `Email`, `Address`, `Salary`, `Username`, `Password`) VALUES
('120', 'Sam', 'Livera', '0711491219', 'htag9320@gmail.com', 'Galle road,Colombo 06', '25000', 'sam123', '123'),
('fgfht', 'gkjgk', 'kdfkj', 'dfogj', 'okog@gmail.com', 'ogorg', 'jejee', 'rg', '85'),
('fhhg', 'yuhj', 'ugyyk', '5656', 'ghgj@gmail.com', 'gyuyiu', '45656', 'sssa', 'sssa'),
('gdh', 'fhg', 'hgjh', '4656', 'fgh@gmail.com', 'etrdh', '553', 'mnmn', 'ummma'),
('rash', 'sdfd', 'fhfh', '353', 'dg@gmail.com', 'fdhg', 'fhfh', 'popopo', 'oppo'),
('zdfx', 'dgh', 'ffff', '22222222222', 'ff@gmail.co', 'fffffff', '4444', 'fffffff', 'ffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Code` char(20) NOT NULL,
  `Name` char(50) NOT NULL,
  `Price` char(50) NOT NULL,
  `Amount` int(50) NOT NULL,
  `Unit` char(50) NOT NULL,
  `Discount` char(50) DEFAULT NULL,
  `Image` int(50) NOT NULL,
  `Type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Code`, `Name`, `Price`, `Amount`, `Unit`, `Discount`, `Image`, `Type`) VALUES
('fru1', 'ffbbvbv', '70', 1, 'kg', '0', 68, 'Fruit'),
('fru2', 'ffbbvbv', '70', 1, 'kg', '0', 69, 'Fruit'),
('fru3', 'ffbbvbv', '70', 1, 'kg', '0', 70, 'Fruit'),
('fru4', 'ffbbvbv', '70', 1, 'kg', '0', 72, 'Fruit'),
('fru5', 'ffbbvbv', '70', 1, 'kg', '0', 73, 'Fruit'),
('veg1', 'ffbgn', '50', 1, 'kg', '0', 59, 'Vegetable'),
('veg2', 'ffbbvbv', '70', 1, 'kg', '0', 60, 'Vegetable'),
('veg3', 'ffbbvbv', '70', 1, 'kg', '0', 62, 'Vegetable'),
('veg399', 'ffbbvbv', '65', 1, 'kg', '0', 76, 'Vegetable'),
('veg4', 'ffbbvbv', '78', 1, 'kg', '0', 64, 'Vegetable'),
('veg55', 'ffbgn', '50', 1, 'kg', '0', 75, 'Vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `loading_shop`
--

CREATE TABLE `loading_shop` (
  `Load_No` char(20) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loading_stores_invoice`
--

CREATE TABLE `loading_stores_invoice` (
  `Load_No` char(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Income` int(100) DEFAULT NULL,
  `Reg_Farmer_Or_Farm_Id` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `load_shop_items`
--

CREATE TABLE `load_shop_items` (
  `Item_Code` char(20) NOT NULL,
  `Load_Num` char(20) NOT NULL,
  `Amount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `load_stores_items`
--

CREATE TABLE `load_stores_items` (
  `Item_Code` char(20) NOT NULL,
  `Load_Num` char(20) NOT NULL,
  `Amount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `productName` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`productName`, `type`, `quantity`, `price`) VALUES
('avacado', 'fruits', '1', 25),
('banana', 'fruits', '1', 6),
('brinjol', 'vegetables', '1kg', 90),
('Cabbage', 'vegetables', '1kg', 150),
('Carrot', 'vegetables', '1kg', 200),
('cashews', 'others', '1kg', 180),
('chicken', 'others', '1kg', 325),
('cocoa', 'fruits', '1', 30),
('curd', 'milkproduct', '1', 50),
('dhall', 'vegetables', '1kg', 120),
('eggs', 'others', '1', 17),
('grapes', 'fruits', '1', 3.5),
('guava', 'fruits', '1', 50),
('juice', 'milkproduct', '1', 80),
('leaks', 'vegetables', '1kg', 140),
('milkCup', 'milkproduct', '1', 60),
('orange', 'fruits', '1', 30),
('pineapple', 'fruits', '1', 100),
('Radish', 'vegetables', '1kg', 120),
('soy nuts', 'others', '1kg', 220),
('Turnip', 'vegetables', '1kg', 140),
('yougurt', 'milkproduct', '1', 35);

-- --------------------------------------------------------

--
-- Table structure for table `regfarmerorder`
--

CREATE TABLE `regfarmerorder` (
  `OrderNumber` char(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Item_Code` char(20) DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  `Verified` tinyint(1) DEFAULT NULL,
  `Delivered` tinyint(1) DEFAULT NULL,
  `Reg_Farmer_Id` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Address` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredfarmer`
--

INSERT INTO `registeredfarmer` (`Id`, `First_Name`, `Last_Name`, `Gender`, `Tele_Number`, `Email`, `Address`) VALUES
('farmer1', 'dasun', 'kasun', 'male', '46456546', 'dggchg@emailcom', '23dgfdfdsgfg');

-- --------------------------------------------------------

--
-- Table structure for table `registeredshop`
--

CREATE TABLE `registeredshop` (
  `Id` char(20) NOT NULL,
  `Address` char(70) DEFAULT NULL,
  `Reg_Id` char(50) DEFAULT NULL,
  `Owner_First_Name` char(20) DEFAULT NULL,
  `Owner_Last_Name` char(20) DEFAULT NULL,
  `Owner_Tele_Number` char(20) DEFAULT NULL,
  `Owner_Nic` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `Code` char(20) NOT NULL,
  `Amount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `Cart_Id` char(20) NOT NULL,
  `Total_Cost` int(50) DEFAULT NULL,
  `Shop_Id` char(20) DEFAULT NULL,
  `Date_Wanted` date DEFAULT NULL,
  `Verified` tinyint(1) DEFAULT NULL,
  `Delivered` tinyint(1) DEFAULT NULL,
  `Reg_Shop_Id` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcartitems`
--

CREATE TABLE `shoppingcartitems` (
  `Shopping_Cart_Id` char(20) NOT NULL,
  `Item_Code` char(20) NOT NULL,
  `Amount` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `Code` char(20) NOT NULL,
  `Amount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `St_Id` char(20) NOT NULL,
  `St_Name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `name`) VALUES
(29, '20161016122151.jpg'),
(28, '20161016122151.jpg'),
(27, 'FB_IMG_1477801633877.jpg'),
(26, 'cola.jpg'),
(25, 'se.jpg'),
(24, 'slide_1.jpg'),
(23, 'Rahula_College_Crest_Color.svg.png'),
(30, '20161016122151.jpg'),
(31, '20161016122151.jpg'),
(32, '20161016121825.jpg'),
(33, '20161016121825.jpg'),
(34, '20161016121825.jpg'),
(35, '20161016121825.jpg'),
(36, '20161016121825.jpg'),
(37, '20161016121825.jpg'),
(38, 'Rcm.jpg'),
(39, 'FB_IMG_1478665009387.jpg'),
(40, 'FB_IMG_1475901990374.jpg'),
(41, 'IMG_20161109_222134.jpg'),
(42, 'FB_IMG_1473601414050.jpg'),
(43, 'FB_IMG_1477801633877.jpg'),
(44, 'FB_IMG_1480226764219.jpg'),
(45, 'images (47).jpg'),
(46, 'Snapshot.png'),
(47, 'Untitled.png'),
(48, 'cola.jpg'),
(49, 'Rahula_College_Crest_Color.svg.png'),
(50, 'se.jpg'),
(51, 'Rcm.jpg'),
(52, 'slide_1.jpg'),
(53, 'se2.jpg'),
(54, 'se2.jpg'),
(55, 'cola.jpg'),
(56, 'cola.jpg'),
(57, 'Rahula_College_Crest_Color.svg.png'),
(58, 'download.jpg'),
(59, 'download.jpg'),
(60, '1371616351150 (1).jpeg'),
(61, '800px_COLOURBOX1712223.jpg'),
(62, '800px_COLOURBOX1712223.jpg'),
(63, 'imagvbvnes.jpg'),
(64, 'imagvbvnes.jpg'),
(65, 'imagexvs.jpg'),
(66, 'imagescbvb.jpg'),
(67, 'imafhghges.jpg'),
(68, 'imagevbbhgs.jpg'),
(69, 'imagesgfg.jpg'),
(70, 'imagfgghes.jpg'),
(71, 'imagefhks.jpg'),
(72, 'imagefhks.jpg'),
(73, 'infbhgdex.jpg'),
(74, '227049676.jpg'),
(75, '533049552-612x612.jpg'),
(76, 'imagcbes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_amount` float DEFAULT NULL,
  `order_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_no`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_amount`, `order_datetime`) VALUES
(19, '75', '0000-00-00', 'Hasee Amarathunga', 'Galle Road,Colombo 06.', 415, '2018-09-09 00:00:00'),
(23, '120', '0000-00-00', 'Isuru', '', 3300, '2018-09-10 19:54:51'),
(24, '113', '2018-09-10', 'JPS Sasadara', 'Galle road, Colombo 06.', 1500, '2018-09-11 06:01:20'),
(26, '2145', '2018-09-13', 'Sam', 'hsda', 4200, '2018-09-14 01:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_actual_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`order_item_id`, `order_id`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_actual_amount`) VALUES
(44, 19, 'banana', '20.00', '12.00', '240.00'),
(45, 19, 'yougurt', '5.00', '35.00', '175.00'),
(63, 23, 'milkCup', '12.00', '150.00', '1800.00'),
(64, 23, 'banana', '50.00', '6.00', '300.00'),
(65, 23, 'cocoa', '10.00', '20.00', '200.00'),
(66, 23, 'Carrot', '10.00', '50.00', '500.00'),
(67, 23, 'Cabbage', '5.00', '100.00', '500.00'),
(83, 24, 'Carrot', '15.00', '75.00', '1125.00'),
(84, 24, 'banana', '5.00', '5.00', '25.00'),
(85, 24, 'yougurt', '10.00', '35.00', '350.00'),
(90, 26, 'Cabbage', '20.00', '150.00', '3000.00'),
(91, 26, 'orange', '10.00', '120.00', '1200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbillitem`
--
ALTER TABLE `addbillitem`
  ADD PRIMARY KEY (`Bill_Number`,`Item_Code`),
  ADD KEY `Item_Code` (`Item_Code`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_Number`),
  ADD KEY `Cashier_Emp_Id` (`Cashier_Emp_Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`Course_Id`,`St_Id`),
  ADD KEY `St_Id` (`St_Id`);

--
-- Indexes for table `farmshopemployee`
--
ALTER TABLE `farmshopemployee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `loading_shop`
--
ALTER TABLE `loading_shop`
  ADD PRIMARY KEY (`Load_No`);

--
-- Indexes for table `loading_stores_invoice`
--
ALTER TABLE `loading_stores_invoice`
  ADD PRIMARY KEY (`Load_No`);

--
-- Indexes for table `load_shop_items`
--
ALTER TABLE `load_shop_items`
  ADD PRIMARY KEY (`Item_Code`,`Load_Num`),
  ADD KEY `Load_Num` (`Load_Num`);

--
-- Indexes for table `load_stores_items`
--
ALTER TABLE `load_stores_items`
  ADD PRIMARY KEY (`Item_Code`,`Load_Num`),
  ADD KEY `Load_Num` (`Load_Num`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`productName`);

--
-- Indexes for table `regfarmerorder`
--
ALTER TABLE `regfarmerorder`
  ADD PRIMARY KEY (`OrderNumber`),
  ADD KEY `Item_Code` (`Item_Code`),
  ADD KEY `Reg_Farmer_Id` (`Reg_Farmer_Id`);

--
-- Indexes for table `registeredfarmer`
--
ALTER TABLE `registeredfarmer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registeredshop`
--
ALTER TABLE `registeredshop`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`Cart_Id`),
  ADD KEY `Reg_Shop_Id` (`Reg_Shop_Id`);

--
-- Indexes for table `shoppingcartitems`
--
ALTER TABLE `shoppingcartitems`
  ADD PRIMARY KEY (`Shopping_Cart_Id`,`Item_Code`),
  ADD KEY `Item_Code` (`Item_Code`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`St_Id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addbillitem`
--
ALTER TABLE `addbillitem`
  ADD CONSTRAINT `addbillitem_ibfk_1` FOREIGN KEY (`Bill_Number`) REFERENCES `bill` (`Bill_Number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addbillitem_ibfk_2` FOREIGN KEY (`Item_Code`) REFERENCES `items` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`Cashier_Emp_Id`) REFERENCES `farmshopemployee` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`St_Id`) REFERENCES `student` (`St_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `load_shop_items`
--
ALTER TABLE `load_shop_items`
  ADD CONSTRAINT `load_shop_items_ibfk_1` FOREIGN KEY (`Load_Num`) REFERENCES `loading_stores_invoice` (`Load_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `load_shop_items_ibfk_2` FOREIGN KEY (`Item_Code`) REFERENCES `items` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `load_stores_items`
--
ALTER TABLE `load_stores_items`
  ADD CONSTRAINT `load_stores_items_ibfk_1` FOREIGN KEY (`Load_Num`) REFERENCES `loading_stores_invoice` (`Load_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `load_stores_items_ibfk_2` FOREIGN KEY (`Item_Code`) REFERENCES `items` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regfarmerorder`
--
ALTER TABLE `regfarmerorder`
  ADD CONSTRAINT `regfarmerorder_ibfk_1` FOREIGN KEY (`Item_Code`) REFERENCES `items` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regfarmerorder_ibfk_2` FOREIGN KEY (`Reg_Farmer_Id`) REFERENCES `registeredfarmer` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`Code`) REFERENCES `items` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`Reg_Shop_Id`) REFERENCES `registeredshop` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shoppingcartitems`
--
ALTER TABLE `shoppingcartitems`
  ADD CONSTRAINT `shoppingcartitems_ibfk_1` FOREIGN KEY (`Shopping_Cart_Id`) REFERENCES `shoppingcart` (`Cart_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shoppingcartitems_ibfk_2` FOREIGN KEY (`Item_Code`) REFERENCES `items` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`Code`) REFERENCES `items` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
