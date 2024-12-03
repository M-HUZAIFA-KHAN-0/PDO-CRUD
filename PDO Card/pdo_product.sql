-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 10:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huzproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdo product`
--

CREATE TABLE `pdo product` (
  `prod_Id` int(11) NOT NULL,
  `prod_Name` varchar(250) NOT NULL,
  `prod_Price` int(11) NOT NULL,
  `prod_Desc` text NOT NULL,
  `prod_Rating` float NOT NULL,
  `prod_Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdo product`
--

INSERT INTO `pdo product` (`prod_Id`, `prod_Name`, `prod_Price`, `prod_Desc`, `prod_Rating`, `prod_Img`) VALUES
(3, '26', 26, 'good person ', 4, '67384e85966d4.jpg'),
(4, '26', 26, 'good person ', 5, '67384eb1e7c61.jpg'),
(5, '26', 26, 'good person ', 4.5, '67384eed11f8f.jpg'),
(6, '26', 26, 'good person ', 4, '67384f3e8f4f6.jpg'),
(7, '26', 26, 'good person ', 4.5, '67384fb65b653.jpg'),
(8, '26', 26, 'good person ', 4.5, '673860825ce6a.jpg'),
(9, 'ammar', 26, 'good person ', 4.5, '673860ad2fd02.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdo product`
--
ALTER TABLE `pdo product`
  ADD PRIMARY KEY (`prod_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdo product`
--
ALTER TABLE `pdo product`
  MODIFY `prod_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
