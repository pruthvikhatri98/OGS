-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 08:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Patiyala'),
(2, 'Chudidar'),
(3, 'Garara'),
(4, 'Plazo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(3) NOT NULL,
  `category_id` int(1) NOT NULL,
  `prod_name` varchar(70) NOT NULL,
  `fabric` varchar(70) NOT NULL,
  `design_no` varchar(70) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `price` bigint(5) NOT NULL,
  `prod_image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `category_id`, `prod_name`, `fabric`, `design_no`, `quantity`, `price`, `prod_image`) VALUES
(37, 1, 'Kessi Patiyala', 'Top - Satin, Bottom - Reyon', 'KP001', 15, 780, 'Image/Kessi Patiyala 1.jpeg'),
(38, 1, 'Kessi Patiyala Blue', 'Top - Satin, Bottom - Reyon', 'KP003', 10, 750, 'Image/Kessi Patiyala 3.jpeg'),
(39, 1, 'Kessi Patiyala Green', 'Top - Satin, Bottom - Reyon', 'KP007', 20, 810, 'Image/Kessi Patiyala 7.jpeg'),
(42, 3, 'Designer Pitch Work Garara', 'Top - Silk Satin, Bottom - Cotton Silk', 'DSP02', 50, 1000, 'Image/Designer Pitch Garara.jpg'),
(43, 3, 'Designer Pink Garara', 'Top & Bottom - Tapeta Silk', 'DPG01', 25, 1250, 'Image/Designer Pink Garara.jpg'),
(44, 3, 'Red Banaras Garara', 'Top - Red Banaras, Bottom - Cotton', 'DRG03', 20, 1500, 'Image/Red Banaras Garara.jpg'),
(45, 2, 'Deeptex Suit', 'Top & Bottom - 100% Cotton', 'DP5801', 50, 350, 'Image/Deeptex 5801.jpeg'),
(47, 2, 'Laado Pure Cotton Suit', 'Top & Bottom - 100% Cotton', 'LD5202', 15, 320, 'Image/Laado 02.jpeg'),
(48, 2, 'Laado Pure Cotton Suit', 'Top & Bottom - 100% Cotton', 'LD5205', 20, 320, 'Image/Laado 05.jpeg'),
(49, 2, 'Mayur Khushi Cotton Suit', 'Top & Bottom - 100% Cotton', 'MK5201', 20, 340, 'Image/KHUSHI 5201.jpeg'),
(50, 2, 'Mayur Khushi Cotton Suit', 'Top & Bottom - 100% Cotton', 'MK5202', 10, 340, 'Image/KHUSHI 5202.jpeg'),
(51, 2, 'Mayur Khushi Cotton Suit', 'Top & Bottom - 100% Cotton', 'MK5202', 10, 340, 'Image/KHUSHI 5202.jpeg'),
(52, 4, 'Rangoon Heavy Plaxo', 'Top & Bottom - 100% Reyon', 'RP2261', 50, 1250, 'Image/Rangoon 2261.jpeg'),
(53, 4, 'Rangoon Designer Plazo', 'Top & Bottom - 100% Reyon', 'RP2262', 20, 1350, 'Image/Rangoon 2262.jpeg'),
(54, 4, 'Rangoon Heavy Material Plazo', 'Top & Bottom - 100% Reyon', 'RP2263', 5, 1250, 'Image/Rangoon 2263.jpeg'),
(55, 1, 'Satarangi Musterd Patiyala', 'Top - Satin, Bottom - Reyon', 'SP001', 20, 1050, 'Image/Satrangi Patiyala 1.jpeg'),
(56, 1, 'Satarangi Blue Patiyala', 'Top - Satin, Bottom - Reyon', 'SP002', 10, 1100, 'Image/Satrangi Patiyala 2.jpeg'),
(57, 1, 'Satarangi Green Patiyala', 'Top - Satin, Bottom - Reyon', 'SP006', 5, 1250, 'Image/Satrangi Patiyala 6.jpeg'),
(58, 1, 'Cotton Patiyala', 'Top & Bottom - 100% Cotton', 'RJ001', 10, 450, 'Image/RJ Patiyala Pari 1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact` int(13) NOT NULL,
  `usertype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `address`, `city`, `pincode`, `contact`, `usertype`) VALUES
(6, 'Pruthvi', 'pruthvi@gmail.com', 'Pruthvi98', 'sardarnagar', 'ahmedabad', 382475, 2147483647, 1),
(7, 'Nirav', 'nirav@gmail.com', 'Nirav123', 'Motera', 'Ahmedabad', 382475, 1234567890, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
