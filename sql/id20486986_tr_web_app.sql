-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2023 at 03:47 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20486986_tr_web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `info` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `title`, `price`, `info`, `created_at`) VALUES
(4, 'def@gmail.com', 'MEN T-SHIRT', 6, 'All sizes available. 10 left in stock', '2023-03-20 20:15:15'),
(5, 'def@gmail.com', 'JEANS', 9, 'All sizes available. 5 left in stock', '2023-03-20 20:17:02'),
(6, 'def@gmail.com', 'JEANS', 9, 'All sizes available. 5 left in stock', '2023-03-21 19:29:22'),
(7, 'def@gmail.com', 'COFFEE MAKER', 29, 'All sizes available. 5 left in stock', '2023-03-21 19:34:20'),
(8, 'def@gmail.com', 'DINNER SET', 1820, 'All sizes available. 5 left in stock', '2023-03-21 19:36:20'),
(9, 'def@gmail.com', 'BOOK', 420, 'All sizes available. 5 left in stock', '2023-03-21 19:40:16'),
(10, 'def@gmail.com', 'BAG', 349, 'All sizes available. 5 left in stock', '2023-03-21 19:44:26'),
(11, 'def@gmail.com', 'DINNER SET', 1820, 'All sizes available. 5 left in stock', '2023-03-21 19:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `confirmpassword` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `confirmpassword`) VALUES
(1, 'Ravdeep', 'ravdeepkaur123@gmail.com', '12345678', '12345678'),
(2, 'Ravdeep', 'ravdeepkaur123@gmail.com', '12345678', '12345678'),
(3, 'Ravdeep', 'ravdeepkaur1234@gmail.com', '12345678', '12345678'),
(4, 'Ravdeep', 'ravdeepkaur1234@gmail.com', '12345678', '12345678'),
(5, 'test1', 'ravdeeptest@gmail.com', '12345678', '12345678'),
(6, 'test1', 'ravdeeptest@gmail.com', '12345678', '12345678'),
(7, 'ravdeepkaur', 'ravdeepkaur@gmail.com', '$2y$10$/u8mXG1mz6NgT/4WcxEj8Oe2ZQ2/GZTj7XFqMGUsaDKRuxG/8IOXe', '$2y$10$8Pp821Zks6xrk9jM8i2H.uiDLcjEmvNxh45JJ.lfmV3ZJpQ678.Da'),
(8, 'ravdeep', 'ravdeep@gmail.com', '$2y$10$VE9ucJCTIdCNeQrqxbT.femogaFDN7EMSLAc4WVPPHiY46vqdhgwu', '$2y$10$CUblzt4wUQbW6tbxHlp6se5VOtu6iiscOJYAnl.DZRf8clVzEe1Qa'),
(9, 'ravdeep', 'ravdeepk@gmail.com', '$2y$10$.LJk6BYCrNQf/5.G64UdpeWTBJtDF6a1PBQi0inYA9X6sgKR6C4km', '$2y$10$.LJk6BYCrNQf/5.G64UdpeWTBJtDF6a1PBQi0inYA9X6sgKR6C4km');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00),
(5, 'XP 1150 Intel Core Laptop', 'LPN', 'product-images/laptop.jpg', 1200.00),
(6, 'Dell 1155 Intel Core Laptop', 'DELL-1VC', 'product-images/laptop.jpg', 1000.00),
(7, 'HP 1155 Intel Core Laptop', 'HP-1011', 'product-images/laptop.jpg', 1600.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
