-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 03:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meraki_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_supplier_tbl`
--

CREATE TABLE `client_supplier_tbl` (
  `Id_client_sup` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tin_no` int(100) NOT NULL,
  `role` enum('1','2') NOT NULL COMMENT '1 = supplier, 2 = client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_supplier_tbl`
--

INSERT INTO `client_supplier_tbl` (`Id_client_sup`, `name`, `address`, `contact_person`, `contact_no`, `email`, `tin_no`, `role`) VALUES
(1, 'Tarlac Agricultural University', 'Tarlac, Tarlac', 'Mark Raymond Rom', 2147483647, 'mrom210143@tau.edu.ph', 8462846, '2'),
(2, 'Company 1', 'Manila, Manila', 'Jose Garcia', 2147483647, 'company@gmail.com', 324433553, '1'),
(3, 'Mercury Drug', 'Pasay', 'Abayan', 957264728, 'abayan@tau.edu.ph', 1747848365, '1'),
(4, 'Generics Pharmacy', 'Tarlac', 'Mark', 956286572, 'mrom210143@tau.edu.ph', 86395738, '2');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice` int(100) NOT NULL,
  `Id_client_sup` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `uom_id` int(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `po_num` int(100) NOT NULL,
  `price` double NOT NULL,
  `total_amount` double NOT NULL,
  `terms_id` int(100) NOT NULL,
  `date_paid` date NOT NULL,
  `CR` varchar(100) NOT NULL,
  `mop` varchar(100) NOT NULL,
  `reference_no` int(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `date`, `invoice`, `Id_client_sup`, `quantity`, `uom_id`, `description`, `po_num`, `price`, `total_amount`, `terms_id`, `date_paid`, `CR`, `mop`, `reference_no`, `remarks`, `date_created`) VALUES
(1, '2024-12-01', 240200312, 2, 1, 13, 'paracetamol', 654321, 1300, 1300, 1, '2024-02-12', 'n.a', 'cash', 6478664, 'idk what ive been doing this is a test', '2024-02-12 06:51:01'),
(2, '2024-12-02', 240201012, 3, 12, 2, 'paracetamol', 654321, 1300, 15600, 10, '2024-02-12', 'n.a', 'cash', 6478664, 'idk what ive been doing this is a test', '2024-02-12 14:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `terms_data`
--

CREATE TABLE `terms_data` (
  `terms_id` int(11) NOT NULL,
  `terms_name` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms_data`
--

INSERT INTO `terms_data` (`terms_id`, `terms_name`, `date_added`) VALUES
(1, 'CASH', '2024-02-04 21:26:29'),
(2, 'COD', '2024-02-04 21:26:29'),
(3, 'GCASH', '2024-02-04 21:26:29'),
(4, 'BANK TRANSFER', '2024-02-04 21:26:29'),
(5, '7 Days', '2024-02-04 21:26:29'),
(6, '15 Days', '2024-02-04 21:26:29'),
(7, '30 Days', '2024-02-04 21:26:29'),
(8, '90 Days', '2024-02-04 21:26:29'),
(9, 'Maya', '2024-02-12 14:49:20'),
(10, 'Coins.ph', '2024-02-12 21:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `uom_data`
--

CREATE TABLE `uom_data` (
  `uom_id` int(11) NOT NULL,
  `uom_name` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uom_data`
--

INSERT INTO `uom_data` (`uom_id`, `uom_name`, `date_added`) VALUES
(1, 'Bot', '2024-02-04 21:28:13'),
(2, 'Box', '2024-02-04 21:28:13'),
(3, 'Bundle', '2024-02-04 21:28:13'),
(4, 'MB', '2024-02-04 21:28:13'),
(5, 'Pack', '2024-02-04 21:28:13'),
(6, 'Roll', '2024-02-04 21:28:13'),
(7, 'Set', '2024-02-04 21:28:13'),
(8, 'Tray', '2024-02-04 21:28:13'),
(9, 'Tube', '2024-02-04 21:28:13'),
(10, 'Unit', '2024-02-04 21:28:13'),
(11, 'Vial', '2024-02-04 21:28:13'),
(12, 'uom1', '2024-02-12 14:49:12'),
(13, 'dosen', '2024-02-12 14:50:28'),
(14, 'UOm_test_1', '2024-02-12 21:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL COMMENT '1 = admin, 2 = tba'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `f_name`, `m_name`, `l_name`, `email`, `contact`, `username`, `password`, `role`) VALUES
(1, 'Mark ', 'Ferdinand', 'Abayan', 'admin@gmail.com', 0, 'admin', 'admin_1234', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_supplier_tbl`
--
ALTER TABLE `client_supplier_tbl`
  ADD PRIMARY KEY (`Id_client_sup`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `Id_client_sup` (`Id_client_sup`),
  ADD KEY `uom_id` (`uom_id`),
  ADD KEY `terms_id` (`terms_id`);

--
-- Indexes for table `terms_data`
--
ALTER TABLE `terms_data`
  ADD PRIMARY KEY (`terms_id`);

--
-- Indexes for table `uom_data`
--
ALTER TABLE `uom_data`
  ADD PRIMARY KEY (`uom_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_supplier_tbl`
--
ALTER TABLE `client_supplier_tbl`
  MODIFY `Id_client_sup` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terms_data`
--
ALTER TABLE `terms_data`
  MODIFY `terms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uom_data`
--
ALTER TABLE `uom_data`
  MODIFY `uom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`terms_id`) REFERENCES `terms_data` (`terms_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`Id_client_sup`) REFERENCES `client_supplier_tbl` (`Id_client_sup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_3` FOREIGN KEY (`uom_id`) REFERENCES `uom_data` (`uom_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
