-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 01:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `more`
--

-- --------------------------------------------------------

--
-- Table structure for table `constructer`
--

CREATE TABLE `constructer` (
  `ProId` int(6) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductPage` varchar(100) NOT NULL DEFAULT 'more',
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constructer`
--

INSERT INTO `constructer` (`ProId`, `ProductName`, `ProductPage`, `Time`) VALUES
(2, 'SIDES', 'more', '0000-00-00 00:00:00'),
(6, 'MAGIC_PIZZA', 'more', '0000-00-00 00:00:00'),
(7, 'DESSERT', 'more', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `DishId` int(6) NOT NULL,
  `DishName` varchar(60) DEFAULT NULL,
  `DishPath` varchar(200) DEFAULT NULL,
  `DishMetarial` varchar(250) DEFAULT NULL,
  `DishPrice` float(6,2) DEFAULT NULL,
  `DishStander` varchar(60) DEFAULT 'DESSERT',
  `Crust` varchar(30) DEFAULT 'Pan',
  `Size` varchar(30) DEFAULT 'Medium',
  `ImgName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `magic_pizza`
--

CREATE TABLE `magic_pizza` (
  `DishId` int(6) NOT NULL,
  `DishName` varchar(60) DEFAULT NULL,
  `DishPath` varchar(200) DEFAULT NULL,
  `DishMetarial` varchar(250) DEFAULT NULL,
  `DishPrice` float(6,2) DEFAULT NULL,
  `DishStander` varchar(60) DEFAULT 'MAGIC_PIZZA',
  `Crust` varchar(30) DEFAULT 'Pan',
  `Size` varchar(30) DEFAULT 'Medium',
  `ImgName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magic_pizza`
--

INSERT INTO `magic_pizza` (`DishId`, `DishName`, `DishPath`, `DishMetarial`, `DishPrice`, `DishStander`, `Crust`, `Size`, `ImgName`) VALUES
(1, 'Paneer & Capsicum.', 'photos/more/1371174.png', 'Veggie Magic Duo', 129.00, 'MAGIC_PIZZA', 'Pan', 'Medium', '1371174.png'),
(2, 'Soya & Onion.', 'photos/more/1371172.png', 'Veggie Magic Duo', 99.00, 'MAGIC_PIZZA', 'Pan', 'Medium', '1371172.png'),
(3, 'Corn.', 'photos/more/1371170.png', 'Veggie Magic Solo', 89.00, 'MAGIC_PIZZA', 'Pan', 'Medium', '1371170.png'),
(4, 'Onion.', 'photos/more/1371167.png', 'Veggie Magic Solo', 69.00, 'MAGIC_PIZZA', 'Pan', 'Medium', '1371167.png');

-- --------------------------------------------------------

--
-- Table structure for table `sides`
--

CREATE TABLE `sides` (
  `DishId` int(6) NOT NULL,
  `DishName` varchar(60) DEFAULT NULL,
  `DishPath` varchar(200) DEFAULT NULL,
  `DishMetarial` varchar(250) DEFAULT NULL,
  `DishPrice` float(6,2) DEFAULT NULL,
  `DishStander` varchar(60) DEFAULT 'SIDES',
  `Crust` varchar(30) DEFAULT 'Pan',
  `Size` varchar(30) DEFAULT 'Medium',
  `ImgName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sides`
--

INSERT INTO `sides` (`DishId`, `DishName`, `DishPath`, `DishMetarial`, `DishPrice`, `DishStander`, `Crust`, `Size`, `ImgName`) VALUES
(1, 'Spanish Tomato Veg Pasta', 'photos/more/1372342.png', 'Creamy Tangy Tomato Sauce, Topped With Onion , Red Capsicum , Green Capsicum And Creamy Mayo', 9999.99, 'SIDES', 'Pan', 'Medium', '1372342.png'),
(2, 'Spanish Tomato Non Veg Pasta', 'photos/more/1372343.png', 'Creamy Tangy Tomato Sauce , Topped With Chicken Sausage, Black Olive And Creamy Mayo', 169.00, 'SIDES', 'Pan', 'Medium', '1372343.png'),
(3, 'Spicy Baked Chicken Wings', 'photos/more/1372345.png', '6 Pieces Of Spicy , Tender Chicken Wings', 169.00, 'SIDES', 'Pan', 'Medium', '1372345.png'),
(4, 'Cheese Garlic Bread', 'photos/more/1370423.png', 'Garlic Bread With 100% Mozzarella Cheese', 129.00, 'SIDES', 'Pan', 'Medium', '1370423.png'),
(5, 'Garlic Bread Spicy Supreme', 'photos/more/2097.png', 'Garlic Bread With Cheese, Onion & Green Chilies', 139.00, 'SIDES', 'Pan', 'Medium', '2097.png'),
(8, 'Tandoori Pocket Paneer', 'photos/more/1371908.png', 'Freshly Baked Pockets Abundantly Stuffed With Spicy Paneer & Flavored Tandoori Sauce', 89.00, 'SIDES', 'Pan', 'Medium', '1371908.png'),
(9, 'Tandoori Pocket Chicken', 'photos/more/1371909.png', 'Freshly Baked Pockets Abundantly Stuffed With Chicken & Flavored Tandoori Sauce', 109.00, 'SIDES', 'Pan', 'Medium', '1371909.png'),
(10, 'Texas Garlic Dip', 'photos/more/1371090.png', 'Smokey Flavored Creamy Dip', 30.00, 'SIDES', 'Pan', 'Medium', '1371090.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constructer`
--
ALTER TABLE `constructer`
  ADD PRIMARY KEY (`ProId`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`DishId`);

--
-- Indexes for table `magic_pizza`
--
ALTER TABLE `magic_pizza`
  ADD PRIMARY KEY (`DishId`);

--
-- Indexes for table `sides`
--
ALTER TABLE `sides`
  ADD PRIMARY KEY (`DishId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constructer`
--
ALTER TABLE `constructer`
  MODIFY `ProId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `DishId` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `magic_pizza`
--
ALTER TABLE `magic_pizza`
  MODIFY `DishId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sides`
--
ALTER TABLE `sides`
  MODIFY `DishId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
