-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_last_price` int NOT NULL,
  `item_price` int NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`,`item_last_price`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Apple', 'iPhone 14 Pro Max',41790000,45990000, './assets/products/ip14pm.png', '2023-03-28 11:08:57'), -- NOW()
(2, 'Samsung', 'Samsung Galaxy Z Fold4',33760000,40990000, './assets/products/ssgzf4.png', '2023-03-28 11:08:57'),
(3, 'Xiaomi', 'Xiaomi 13 Pro 12GB',23490000,29990000, './assets/products/x13p.png', '2023-03-28 11:08:57'),
(4, 'Apple', 'iPhone 13 Pro Max',27290000,31990000, './assets/products/ip13pm.png', '2023-03-28 11:08:57'),
(5, 'Samsung', 'Samsung Galaxy S23 Ultra',37190000,44990000, './assets/products/s23u.png', '2023-03-28 11:08:57'),
(6, 'Xiaomi', 'Xiaomi 11T Pro',11990000,14990000, './assets/products/x11tp.png', '2023-03-28 11:08:57'),
(7, 'Apple', 'iPhone 12',16990000,23990000, './assets/products/ip12.png', '2023-03-28 11:08:57'),
(8, 'Samsung', 'Samsung Galaxy S22 Ultra',36990000,39990000, './assets/products/ssgs22u.png', '2023-03-28 11:08:57'),
(9, 'Xiaomi', 'Xiaomi Mi 10T Pro 5G',11200000,12990000, './assets/products/xm10tp.png', '2023-03-28 11:08:57'),
(10, 'Apple', 'iPhone 11',11990000,13990000, './assets/products/ip11.png', '2023-03-28 11:08:57'),
(11, 'Samsung', 'Samsung Galaxy S20 FE',8200000,12490000, './assets/products/ssgs20.png', '2023-03-28 11:08:57'),
(12, 'Xiaomi', 'Redmi A1',1840000,2190000, './assets/products/ra1.png', '2023-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Duc', 'Nguyen', '2023-05-05 13:07:17'),
(2, 'Lam', 'Hoai', '2023-05-05 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;