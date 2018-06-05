-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 24, 2018 at 06:06 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(4) UNSIGNED NOT NULL,
  `prod_image` varchar(200) NOT NULL,
  `prod_code` varchar(50) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `prod_image`, `prod_code`, `prod_name`, `prod_price`) VALUES
(1, './image/1.jpg', 'eg', 'GUITAR 1', '1500.45'),
(2, './image/2.jpg', 'eg', 'GUITAR 2', '1250.00'),
(3, './image/3.jpeg', 'eg', 'GUITAR 3', '1750.00'),
(4, './image/4.jpg', 'eg', 'GUITAR 4', '1400.00'),
(5, './image/5.jpg', 'eg', 'GUITAR 5', '2900.00'),
(6, './image/6.jpg', 'eg', 'GUITAR 6', '2000.00'),
(7, './image/7.jpg', 'ag', 'GUITAR 7', '1500.00'),
(8, './image/8.jpg', 'ag', 'GUITAR 8', '1100.00'),
(9, './image/9.jpg', 'ag', 'GUITAR 9', '1750.00'),
(10, './image/10.jpg', 'ag', 'GUITAR 10', '1400.00'),
(11, './image/11.jpg', 'ag', 'GUITAR 11', '2000.00'),
(12, './image/12.jpg', 'ag', 'GUITAR 12', '2100.00'),
(13, './image/13.jpg', 'cg', 'GUITAR 13', '1500.00'),
(14, './image/14.jpg', 'cg', 'GUITAR 14', '1679.00'),
(15, './image/15.jpg', 'cg', 'GUITAR 15', '1900.00'),
(16, './image/16.jpg', 'cg', 'GUITAR 16', '1800.00'),
(17, './image/17.jpg', 'cg', 'GUITAR 17', '1509.90'),
(18, './image/18.jpg', 'cg', 'GUITAR 18', '1899.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
