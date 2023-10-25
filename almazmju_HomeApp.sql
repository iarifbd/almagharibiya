-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2023 at 11:24 AM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almazmju_HomeApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(255) NOT NULL,
  `Status` varchar(16) NOT NULL DEFAULT '1',
  `Comments` varchar(100) NOT NULL DEFAULT '1=Active 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `DepartmentName`, `Status`, `Comments`) VALUES
(1, 'Buyer', '1', '1=Active 0=Inactive'),
(2, 'Factory', '1', '1=Active 0=Inactive'),
(3, 'Warehouse', '1', '1=Active 0=Inactive'),
(4, 'Office', '1', '1=Active 0=Inactive'),
(5, 'Supplier', '1', '1=Active 0=Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DepartmentID` int(15) NOT NULL,
  `Status` int(5) NOT NULL DEFAULT 1,
  `Comments` varchar(100) NOT NULL DEFAULT 'Active=1 Inactive=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `FName`, `LName`, `Email`, `Password`, `DepartmentID`, `Status`, `Comments`) VALUES
(1, 'Mohammad Arifur', 'Rahman', 'admin@admin.com', '1234', 1, 1, 'Active=1 Inactive=0'),
(2, 'Engg. Md.', 'Rahman', 'demo@user.com', '123456', 1, 0, 'Active=1 Inactive=0'),
(11, 'Yacine', 'Belgacemi', 'yacinebel40@gmail.com', 'YA12345cine', 1, 1, 'Active=1 Inactive=0'),
(12, 'Yacine', 'Yacine', 'Almagharibiyaltd@gmail.com', 'asd12345', 2, 1, 'Active=1 Inactive=0'),
(13, 'Atef', 'Ttygdsqf', 'Almagharibiyaltd@gmail.com', 'asdf1234', 4, 1, 'Active=1 Inactive=0'),
(14, 'amir', 'amir', 'amir2013rima@gmail.com', 'Aa123456', 1, 1, 'Active=1 Inactive=0'),
(15, 'amir', 'amir', 'amir2013rima@gmail.com', 'Aa123456', 4, 1, 'Active=1 Inactive=0'),
(16, 'DETTY SPORTSWEAR', 'Yacine', 'yacine_safi@hotmail.com', 'ys09071977YS@', 1, 1, 'Active=1 Inactive=0'),
(17, 'amir', 'amir', 'amir2013rima@gmail.com', '123456', 1, 1, 'Active=1 Inactive=0'),
(18, 'amir', 'amir', 'amir2013rima@gmail.com', '123456', 1, 1, 'Active=1 Inactive=0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
