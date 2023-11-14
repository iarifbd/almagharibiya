-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 08:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainapp`
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
-- Table structure for table `factorystockinventory`
--

CREATE TABLE `factorystockinventory` (
  `id` int(11) NOT NULL,
  `SerialNumber` varchar(100) NOT NULL,
  `ImageFilePath` text DEFAULT NULL,
  `ReferenceNumber` varchar(255) DEFAULT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `Color` varchar(255) DEFAULT NULL,
  `Sizes` varchar(20) DEFAULT NULL,
  `SizeQuantity` int(100) NOT NULL,
  `TotalQuantity` int(11) DEFAULT NULL,
  `UnitPrice` decimal(10,2) DEFAULT NULL,
  `TotalPrice` decimal(10,2) DEFAULT NULL,
  `DeliveryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `factorystockinventory`
--

INSERT INTO `factorystockinventory` (`id`, `SerialNumber`, `ImageFilePath`, `ReferenceNumber`, `ItemName`, `Color`, `Sizes`, `SizeQuantity`, `TotalQuantity`, `UnitPrice`, `TotalPrice`, `DeliveryDate`) VALUES
(1, 'White', 'uploads/product_image_1699947644.jpg', 'Aruif', 'Tshart', 'Green', 'S', 10, 160, 10.00, 1600.00, '2023-11-14'),
(2, 'White', 'uploads/product_image_1699947644.jpg', 'Aruif', 'Tshart', 'Green', 'M', 0, 160, 10.00, 1600.00, '2023-11-14'),
(3, 'White', 'uploads/product_image_1699947644.jpg', 'Aruif', 'Tshart', 'Green', 'L', 100, 160, 10.00, 1600.00, '2023-11-14'),
(4, 'White', 'uploads/product_image_1699947644.jpg', 'Aruif', 'Tshart', 'Green', 'XL', 50, 160, 10.00, 1600.00, '2023-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `NameBangla` varchar(500) NOT NULL,
  `NameEnglish` varchar(500) NOT NULL,
  `FatherName` varchar(500) NOT NULL,
  `MotherName` varchar(500) NOT NULL,
  `BirthDay` date NOT NULL,
  `Education` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `PresentAddress` varchar(500) NOT NULL,
  `PermanentAddress` varchar(500) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `ReferenceId1` int(100) NOT NULL,
  `ReferenceId1ApproveDate` date NOT NULL,
  `ReferenceId2` int(100) NOT NULL,
  `ReferenceId2ApproveDate` date NOT NULL,
  `OfficeApprovedBy` int(100) NOT NULL,
  `OfficeApprovedDate` date NOT NULL,
  `MemberStatus` int(10) NOT NULL DEFAULT 1,
  `MembershipDate` date NOT NULL,
  `LastStatusUpdateDate` date NOT NULL,
  `LastStatusUpdateby` int(100) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `Note` varchar(500) NOT NULL DEFAULT 'status: 1=applied, 2=refence rverified,  3=office approved, 4=suspend, 5=rejected, comments=any claim or objection noted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'Engg. Md.', 'Rahman', 'demo@user.com', '123456', 1, 1, 'Active=1 Inactive=0'),
(11, 'Mohammad Arifur', 'Rahman', 'admin@admin.com', '1234', 2, 1, 'Active=1 Inactive=0'),
(12, 'Mohammad Arifur', 'Rahman', 'admin@admin.com', '1234', 3, 1, 'Active=1 Inactive=0'),
(13, 'Mohammad Arifur', 'Rahman', 'admin@admin.com', '1234', 4, 1, 'Active=1 Inactive=0'),
(14, 'Mohammad Arifur', 'Rahman', 'admin@admin.com', '1234', 5, 1, 'Active=1 Inactive=0');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `EXP_NO` varchar(255) NOT NULL,
  `DATE` date NOT NULL,
  `SHIPMENT_DETAILS` text NOT NULL,
  `PAYMENT_TERMS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `EXP_NO`, `DATE`, `SHIPMENT_DETAILS`, `PAYMENT_TERMS`) VALUES
(6, 'exp-02', '2023-10-04', 'person mane', '60 daya');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_item`
--

CREATE TABLE `shipment_item` (
  `id` int(11) NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `SL_NO` int(11) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `TOTAL_QTY_PCS` int(11) NOT NULL,
  `TOTAL_BALES` int(11) NOT NULL,
  `TOTAL_CTN` int(11) NOT NULL,
  `NET_WEIGHT` int(11) NOT NULL,
  `GROSS_WEIGHT` int(11) NOT NULL,
  `TOTAL_CBM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment_item`
--

INSERT INTO `shipment_item` (`id`, `shipment_id`, `SL_NO`, `DESCRIPTION`, `TOTAL_QTY_PCS`, `TOTAL_BALES`, `TOTAL_CTN`, `NET_WEIGHT`, `GROSS_WEIGHT`, `TOTAL_CBM`) VALUES
(1, 6, 1, 'Item1', 1, 1, 1, 1, 1, 1),
(2, 6, 2, 'Item2', 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplierinventory`
--

CREATE TABLE `supplierinventory` (
  `SerialNumber` int(11) NOT NULL,
  `ImageFilePath` text DEFAULT NULL,
  `ReferenceNumber` varchar(255) DEFAULT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `Color` varchar(255) DEFAULT NULL,
  `Size` varchar(20) DEFAULT NULL,
  `TotalQuantity` int(11) DEFAULT NULL,
  `UnitPrice` decimal(10,2) DEFAULT NULL,
  `TotalPrice` decimal(10,2) DEFAULT NULL,
  `DeliveryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factorystockinventory`
--
ALTER TABLE `factorystockinventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depertment` (`DepartmentID`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_item`
--
ALTER TABLE `shipment_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shipment_item_shipment` (`shipment_id`);

--
-- Indexes for table `supplierinventory`
--
ALTER TABLE `supplierinventory`
  ADD PRIMARY KEY (`SerialNumber`),
  ADD UNIQUE KEY `ReferenceNumber` (`ReferenceNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `factorystockinventory`
--
ALTER TABLE `factorystockinventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shipment_item`
--
ALTER TABLE `shipment_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplierinventory`
--
ALTER TABLE `supplierinventory`
  MODIFY `SerialNumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `depertment` FOREIGN KEY (`DepartmentID`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipment_item`
--
ALTER TABLE `shipment_item`
  ADD CONSTRAINT `fk_shipment_item_shipment` FOREIGN KEY (`shipment_id`) REFERENCES `shipment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
