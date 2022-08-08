-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 09:30 AM
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
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE `products_list` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(20,0) NOT NULL,
  `Size` varchar(255) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `SKU` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`ID`, `Name`, `Price`, `Size`, `Category`, `SKU`) VALUES
(1, 'Acme DISC', '1', '700', 'DVD', 'JVC200123'),
(2, 'Acme DISC', '1', '700', 'DVD', 'JVC200123'),
(3, 'Acme DISC', '1', '700', 'DVD', 'JVC200123'),
(4, 'Acme DISC', '1', '700', 'DVD', 'JVC200123'),
(5, 'War and Peace', '20', '2', 'BOOK', 'GGWP0007'),
(6, 'War and Peace', '20', '2', 'BOOK', 'GGWP0007'),
(7, 'War and Peace', '20', '2', 'BOOK', 'GGWP0007'),
(8, 'War and Peace', '20', '2', 'BOOK', 'GGWP0007'),
(9, 'Chair', '40', '24x45x15', 'FURNITURE', 'TR120555'),
(10, 'Chair', '40', '24x45x15', 'FURNITURE', 'TR120555'),
(11, 'Chair', '40', '24x45x15', 'FURNITURE', 'TR120555'),
(12, 'Chair', '40', '24x45x15', 'FURNITURE', 'TR120555');

-- --------------------------------------------------------

--
-- Table structure for table `sku_id`
--

CREATE TABLE `sku_id` (
  `SKU` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sku_id`
--

INSERT INTO `sku_id` (`SKU`, `Category`) VALUES
('GGWP0007', 'BOOK'),
('JVC200123', 'DVD'),
('TR120555', 'FURNITURE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_list`
--
ALTER TABLE `products_list`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category_fk` (`Category`),
  ADD KEY `SKU_fk` (`SKU`);

--
-- Indexes for table `sku_id`
--
ALTER TABLE `sku_id`
  ADD PRIMARY KEY (`SKU`,`Category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_list`
--
ALTER TABLE `products_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
