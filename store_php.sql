-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 06:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_dec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`c_id`, `c_name`, `c_dec`) VALUES
(1, 'men', 'summer'),
(2, 'women', 'summer collection'),
(3, 'child', 'cloths');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(20) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `login_pass` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_email`, `login_pass`, `role`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(20) NOT NULL,
  `p_cat` varchar(30) NOT NULL,
  `p_sub` varchar(30) NOT NULL,
  `p_supplier` varchar(30) NOT NULL,
  `p_code` varchar(30) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_dec` varchar(200) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_srp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat`, `p_sub`, `p_supplier`, `p_code`, `p_name`, `p_dec`, `p_price`, `p_srp`) VALUES
(1, '1', '1', '1', 'p-2020', 'sweatshirts', 'What are sweat shirts? a loose, long-sleeved, collarless pullover of soft, absorbent fabric, as cotton jersey, with close-fitting or elastic cuffs and sometimes a drawstring at the waist, ', '2000', '2500'),
(2, '3', '2', '1', 'u-2020', 'school unifrom', 'What are sweat shirts? a loose, long-sleeved, collarless pullover of soft, absorbent fabric, as cotton jersey, with close-fitting or elastic cuffs and sometimes a drawstring at the waist, ', '1500', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `q_id` int(20) NOT NULL,
  `q_name` varchar(30) NOT NULL,
  `q_unit` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`q_id`, `q_name`, `q_unit`) VALUES
(1, 'kids summer', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sub_catageory`
--

CREATE TABLE `sub_catageory` (
  `sub_id` int(20) NOT NULL,
  `sub_cat` int(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_catageory`
--

INSERT INTO `sub_catageory` (`sub_id`, `sub_cat`, `sub_name`, `sub_des`) VALUES
(1, 1, 'winter', 'there will be winter thins '),
(2, 3, 'uniform', 'school');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(20) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `supplier_email` varchar(40) NOT NULL,
  `supplier_des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_email`, `supplier_des`) VALUES
(1, 'rehan', 'rehan@gmail.com', 'he supplies kid goods');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `sub_catageory`
--
ALTER TABLE `sub_catageory`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `q_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_catageory`
--
ALTER TABLE `sub_catageory`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
