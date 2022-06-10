-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 12:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winery`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `comments` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`user_id`, `username`, `email`, `comments`) VALUES
(1, 'maxsbez', 'Maxiesbezzy@gmail.com', 'great wines'),
(2, 'oghomwen eguavoen', 'manny@gmail.com', 'good tatste'),
(3, 'curry', 'curry@gmail.com', 'the man is beauty'),
(4, 'curry', 'curry@gmail.com', 'the man is beauty'),
(5, 'curry', 'curry@gmail.com', 'the man is beauty'),
(6, 'killokl', 'killokk@gmail.com', 'very great winery'),
(7, 'killokl', 'killokk@gmail.com', 'very great winery'),
(8, 'killokl', 'killokk@gmail.com', 'very great winery'),
(9, 'killokl', 'killokk@gmail.com', 'very great winery'),
(10, 'killokl', 'killokk@gmail.com', 'very great winery'),
(11, 'killokl', 'killokk@gmail.com', 'very great winery'),
(12, 'killokl', 'killokk@gmail.com', 'very great winery'),
(13, 'killokl', 'killokk@gmail.com', 'very great winery'),
(14, 'kunle', 'kunle@gmail.com', 'lovely wine'),
(15, 'kunle', 'kunle@gmail.com', 'lovely wine');

-- --------------------------------------------------------

--
-- Table structure for table `customers_t`
--

CREATE TABLE `customers_t` (
  `customerId` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `streetAddress` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_t`
--

CREATE TABLE `inventory_t` (
  `ProductID` int(11) NOT NULL,
  `Wine` varchar(45) NOT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_t`
--

INSERT INTO `inventory_t` (`ProductID`, `Wine`, `Quantity`) VALUES
(1, 'Pinot_Noir', 50),
(2, 'Cabernet_Sauvignon', 50),
(3, 'Riesling', 50),
(4, 'Pinot_Grigio', 45),
(5, 'Zinfendel', 45),
(6, 'Rose', 50);

-- --------------------------------------------------------

--
-- Table structure for table `orders_t`
--

CREATE TABLE `orders_t` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` varchar(45) DEFAULT NULL,
  `Pinot_Noir` int(11) DEFAULT NULL,
  `Cabernet_Sauvignon` int(11) DEFAULT NULL,
  `Riesling` int(11) DEFAULT NULL,
  `Pinot_Grigio` int(11) DEFAULT NULL,
  `Zinfendel` int(11) DEFAULT NULL,
  `Rose` int(11) DEFAULT NULL,
  `OrderTotal` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_t`
--

INSERT INTO `orders_t` (`OrderID`, `CustomerID`, `Pinot_Noir`, `Cabernet_Sauvignon`, `Riesling`, `Pinot_Grigio`, `Zinfendel`, `Rose`, `OrderTotal`) VALUES
(1, NULL, NULL, NULL, 5, NULL, NULL, 5, '139.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customers_t`
--
ALTER TABLE `customers_t`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `inventory_t`
--
ALTER TABLE `inventory_t`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `orders_t`
--
ALTER TABLE `orders_t`
  ADD PRIMARY KEY (`OrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers_t`
--
ALTER TABLE `customers_t`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_t`
--
ALTER TABLE `inventory_t`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders_t`
--
ALTER TABLE `orders_t`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
