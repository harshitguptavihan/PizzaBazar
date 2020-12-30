-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 10:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useractivity`
--

-- --------------------------------------------------------

--
-- Table structure for table `asignin`
--

CREATE TABLE `asignin` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ProfileImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asignin`
--

INSERT INTO `asignin` (`sr`, `name`, `email`, `password`, `mobile`, `address`, `time`, `ProfileImage`) VALUES
(1, 'Harshit Gupta', 'harshit@gmail.com', 'admin', '9559097135', 'sitapur ', '2018-08-14 05:14:44', 'IMG_20180813_210804-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(6) NOT NULL,
  `User` varchar(150) NOT NULL,
  `DishName` varchar(150) NOT NULL,
  `DishPrice` float(12,2) NOT NULL,
  `DishPath` varchar(150) NOT NULL,
  `Status` varchar(150) NOT NULL DEFAULT 'incart',
  `NumOfItem` int(6) NOT NULL DEFAULT 1,
  `AdminStatus` varchar(200) NOT NULL DEFAULT 'notconfirm'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `User`, `DishName`, `DishPrice`, `DishPath`, `Status`, `NumOfItem`, `AdminStatus`) VALUES
(139, 'harshit@gmail.com', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'order', 1, 'confirm'),
(140, 'harshit@gmail.com', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'order', 1, 'confirm'),
(141, 'harshit@gmail.com', 'Spicy Baked Chicken Wings', 169.00, 'photos/more/1372345.png', 'order', 1, 'confirm'),
(142, 'harshit@gmail.com', 'anuraGpizza', 56.00, 'photos/pizza/1371860.png', 'order', 1, 'confirm'),
(143, 'harshit@gmail.com', 'SPICY  pizza', 499.00, 'photos/pizza/1371860.png', 'order', 1, 'confirm'),
(144, 'harshit@gmail.com', 'jhggiuio', 545.00, 'photos/pizza/1371170.png', 'order', 1, 'confirm'),
(145, 'shreya@gmail.com', 'hamza khan', 9999.99, 'photos/pizza/ajax-loader.gif', 'order', 1, 'confirm'),
(146, 'shreya@gmail.com', 'bnjbj', 979.00, 'photos/pizza/1371170.png', 'order', 1, 'confirm'),
(147, 'shreya@gmail.com', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(148, 'shreya@gmail.com', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'incart', 1, 'notconfirm'),
(149, 'shreya@gmail.com', 'Spicy Baked Chicken Wings', 169.00, 'photos/more/1372345.png', 'incart', 1, 'notconfirm'),
(150, 'harshit@gmail.com', 'anuraGpizza', 56.00, 'photos/pizza/1371860.png', 'order', 3, 'confirm'),
(151, 'harshit@gmail.com', 'SPICY  pizza', 499.00, 'photos/pizza/1371860.png', 'order', 1, 'confirm'),
(152, 'harshit@gmail.com', 'jhggiuio', 545.00, 'photos/pizza/1371170.png', 'order', 1, 'confirm'),
(153, 'harshit@gmail.com', 'anuraGpizza', 56.00, 'photos/pizza/1371860.png', 'order', 3, 'confirm'),
(154, 'harshit@gmail.com', 'SPICY  pizza', 499.00, 'photos/pizza/1371860.png', 'order', 3, 'confirm'),
(155, 'harshit@gmail.com', 'jhggiuio', 545.00, 'photos/pizza/1371170.png', 'order', 1, 'confirm'),
(156, 'harshit@gmail.com', 'anuraGpizza', 56.00, 'photos/pizza/1371860.png', 'order', 1, 'confirm'),
(157, 'harshit@gmail.com', 'SPICY  pizza', 499.00, 'photos/pizza/1371860.png', 'order', 2, 'confirm'),
(160, 'shruti@gmail.com', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'order', 2, 'confirm'),
(161, 'shruti@gmail.com', 'Texas Garlic Dip', 30.00, 'photos/more/1371090.png', 'order', 3, 'confirm'),
(162, 'shruti@gmail.com', 'Soya & Onion.', 99.00, 'photos/more/1371172.png', 'order', 2, 'confirm'),
(163, 'shruti@gmail.com', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'order', 1, 'confirm'),
(164, 'shruti@gmail.com', 'Spicy Baked Chicken Wings', 169.00, 'photos/more/1372345.png', 'order', 1, 'confirm'),
(165, 'shruti@gmail.com', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(166, 'shruti@gmail.com', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'incart', 1, 'notconfirm'),
(167, 'harshit@gmail.com', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'order', 2, 'confirm'),
(168, 'harshit@gmail.com', 'Spicy Baked Chicken Wings', 169.00, 'photos/more/1372345.png', 'order', 3, 'confirm'),
(169, '', 'Tandoori Pocket Chicken', 109.00, 'photos/more/1371909.png', 'incart', 1, 'notconfirm'),
(171, 'harshit@gmail.com', 'Texas Garlic Dip', 30.00, 'photos/more/1371090.png', 'order', 3, 'confirm'),
(172, '', 'Spicy Baked Chicken Wings', 169.00, 'photos/more/1372345.png', 'incart', 1, 'notconfirm'),
(173, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(174, '', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'incart', 1, 'notconfirm'),
(175, 'harshit@gmail.com', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'order', 1, 'notconfirm'),
(176, 'harshit@gmail.com', 'Spanish Tomato Non Veg Pasta', 169.00, 'photos/more/1372343.png', 'order', 3, 'notconfirm'),
(177, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(178, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(179, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(180, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(181, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(182, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(183, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(184, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(185, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm'),
(186, '', 'Spanish Tomato Veg Pasta', 9999.99, 'photos/more/1372342.png', 'incart', 1, 'notconfirm');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MsgId` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sighnin`
--

CREATE TABLE `sighnin` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ProfileImage` varchar(100) NOT NULL,
  `currentstatus` varchar(200) NOT NULL DEFAULT 'noorder',
  `status` varchar(200) NOT NULL DEFAULT 'noorder'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sighnin`
--

INSERT INTO `sighnin` (`sr`, `name`, `email`, `password`, `mobile`, `address`, `time`, `ProfileImage`, `currentstatus`, `status`) VALUES
(23, 'Harshit Gupta', 'harshit@gmail.com', 'admin', '9559097135', 'Mo makhupur', '2018-08-24 04:49:14', '1371170.png', 'notconfirm', 'order'),
(29, 'harshita', 'harshita@gmail.com', 'admin@123', '6666666666', 'Mo makhupur', '2018-08-14 11:21:03', '1371174.png', 'noorder', 'noorder'),
(30, 'shreya', 'shreya@gmail.com', 'admin', '1234567890', 'Mo makhupur', '2018-08-14 11:29:36', 'IMG-20180613-WA0000.jpg', 'confirm', 'order'),
(31, 'shruti gupta', 'shruti@gmail.com', 'admin', '9005170392', 'lucknow', '2018-08-20 17:55:11', '1371167.png', 'confirm', 'order'),
(34, 'shruti gupta', 'shruti1@gmail.com', 'khushi', '9005170392', 'lucknow', '2018-08-11 16:07:58', '1371167.png', 'noorder', 'noorder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asignin`
--
ALTER TABLE `asignin`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sighnin`
--
ALTER TABLE `sighnin`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asignin`
--
ALTER TABLE `asignin`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `sighnin`
--
ALTER TABLE `sighnin`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
