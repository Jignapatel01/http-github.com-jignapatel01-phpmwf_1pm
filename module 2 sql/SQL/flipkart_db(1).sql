-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 09:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipkart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `flip_category`
--

CREATE TABLE `flip_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `added_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flip_customers`
--

CREATE TABLE `flip_customers` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flip_products`
--

CREATE TABLE `flip_products` (
  `product_id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `offer_price` float DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `product_decriptions` text DEFAULT NULL,
  `added_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flip_subcategory`
--

CREATE TABLE `flip_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategoryname` varchar(255) DEFAULT NULL,
  `added_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flip_category`
--
ALTER TABLE `flip_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `flip_customers`
--
ALTER TABLE `flip_customers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `flip_products`
--
ALTER TABLE `flip_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `flip_subcategory`
--
ALTER TABLE `flip_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flip_category`
--
ALTER TABLE `flip_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flip_customers`
--
ALTER TABLE `flip_customers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flip_products`
--
ALTER TABLE `flip_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flip_subcategory`
--
ALTER TABLE `flip_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
