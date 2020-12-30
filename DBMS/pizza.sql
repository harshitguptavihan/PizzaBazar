-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 12:25 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `constructer`
--

CREATE TABLE `constructer` (
  `ProId` int(6) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductPage` varchar(100) NOT NULL DEFAULT 'pizza',
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constructer`
--

INSERT INTO `constructer` (`ProId`, `ProductName`, `ProductPage`, `Time`) VALUES
(19, 'MagicPizza', 'pizza', '2018-08-21 06:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `magicpizza`
--

CREATE TABLE `magicpizza` (
  `DishId` int(6) NOT NULL,
  `DishName` varchar(60) DEFAULT NULL,
  `DishPath` varchar(200) DEFAULT NULL,
  `ImgName` varchar(50) DEFAULT NULL,
  `DishMetarial` varchar(250) DEFAULT NULL,
  `DishPrice` float(6,2) DEFAULT NULL,
  `DishStander` varchar(60) DEFAULT 'MagicPizza',
  `Crust` varchar(30) DEFAULT 'Pan',
  `Size` varchar(30) DEFAULT 'Medium'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magicpizza`
--

INSERT INTO `magicpizza` (`DishId`, `DishName`, `DishPath`, `ImgName`, `DishMetarial`, `DishPrice`, `DishStander`, `Crust`, `Size`) VALUES
(1, 'mypizza', 'photos/pizza/1371172.png', '1371172.png', 'dnmdbvfkjbnfkjbgdsjhgh', 244.00, 'MagicPizza', 'Pan', 'Medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constructer`
--
ALTER TABLE `constructer`
  ADD PRIMARY KEY (`ProId`);

--
-- Indexes for table `magicpizza`
--
ALTER TABLE `magicpizza`
  ADD PRIMARY KEY (`DishId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constructer`
--
ALTER TABLE `constructer`
  MODIFY `ProId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `magicpizza`
--
ALTER TABLE `magicpizza`
  MODIFY `DishId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
