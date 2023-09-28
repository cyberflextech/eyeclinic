-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 06:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyeclinic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `modeofpayment`
--

CREATE TABLE `modeofpayment` (
  `mode_id` int(11) NOT NULL,
  `mode_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modeofpayment`
--

INSERT INTO `modeofpayment` (`mode_id`, `mode_name`) VALUES
(1, 'CASH'),
(2, 'MPESA'),
(3, 'NHIF');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(256) NOT NULL,
  `patient_fname` varchar(256) NOT NULL,
  `patient_mname` varchar(256) NOT NULL,
  `patient_lname` varchar(256) NOT NULL,
  `patient_nid` varchar(256) NOT NULL,
  `patient_dob` date NOT NULL,
  `patient_mobile` varchar(256) NOT NULL,
  `patient_home_phone` varchar(256) NOT NULL,
  `patient_email` varchar(256) NOT NULL,
  `patient_modeofpayment` varchar(256) NOT NULL,
  `patient_nok_fname` varchar(256) NOT NULL,
  `patient_nok_lname` varchar(256) NOT NULL,
  `patient_nok_mobile` varchar(256) NOT NULL,
  `patient_reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_id`, `patient_fname`, `patient_mname`, `patient_lname`, `patient_nid`, `patient_dob`, `patient_mobile`, `patient_home_phone`, `patient_email`, `patient_modeofpayment`, `patient_nok_fname`, `patient_nok_lname`, `patient_nok_mobile`, `patient_reg_date`) VALUES
(6, '', 'Felix', 'Kipkemoi', 'Sigei', '24142741', '1985-05-17', '0723568652', '0751280080', 'felixksigei@gmail.com', 'NHIF', 'Mwanarabu', 'Abdala', '0722111736', '0000-00-00'),
(7, '', 'Sam', 'Boski', 'Kosgey', '325689', '1984-02-12', '0723089625', '0751280080', 'samboski@yahoo.com', 'MPESA', 'Stella', 'Kosgey', '0711123456', '2021-03-02'),
(8, '', 'Mwanarabu', 'Abdala', 'Sigei', '30208210', '1992-07-07', '0722111736', '0723568652', 'mwanarabu@gmail.com', 'NHIF', 'Felix', 'Sigei', '0723568652', '2021-03-15'),
(9, '', 'Benard', 'Kipkirui', 'Korir', '30744020', '1992-03-19', '0712706138', '0723648603', 'benkorir6@gmail.com', 'NHIF', 'Joan', 'Korir', '0723648603', '2021-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` enum('receptionist','cashier','doctor','pharmacist','admin') NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'Felixksigei@gmail.com', '9c39252a25a56bdeeb7de6d33350852c', 'Felix Sigei'),
(3, 'admin', 'Samboski', '6ab82aae798d41f5b0f47be039615304', 'Sam Kosgey'),
(4, 'receptionist', 'Receptionist', 'e84d0dd71e85bfb91c530086572c638c', 'Vitalis Kosgey'),
(5, 'admin', 'nzala', 'Numb3r*24', 'James Nzala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modeofpayment`
--
ALTER TABLE `modeofpayment`
  ADD PRIMARY KEY (`mode_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modeofpayment`
--
ALTER TABLE `modeofpayment`
  MODIFY `mode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
