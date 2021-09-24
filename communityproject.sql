-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 10:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `communityproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(2, 'vkgupta', 'vkgupta@gmail.com', 'vkgupta');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `child_Name` varchar(20) NOT NULL,
  `child_email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobileno` bigint(30) NOT NULL,
  `age` int(3) NOT NULL,
  `education` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `height` int(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `faceofcomplexion` varchar(10) NOT NULL,
  `manglik` varchar(10) NOT NULL,
  `expectation` varchar(255) NOT NULL,
  `profile_pic` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `child_Name`, `child_email`, `gender`, `mobileno`, `age`, `education`, `degree`, `profession`, `height`, `dateofbirth`, `faceofcomplexion`, `manglik`, `expectation`, `profile_pic`, `status`) VALUES
(21, 'dummy don', 'site88@gmnail.cimn', 'Male', 0, 56, 'bca', 'btech', 'mca', 7, '2021-10-01', 'btech', 'mca', 'hj', '614736768a081.png', ''),
(22, 'dummy101 dummy last1', 'anurag@gmail.com', 'Male', 8010334416, 56, 'cvb', 'bcom', 'bcom', 7, '2021-09-15', 'bcom', 'bcom', '', '614b25f938a34.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `mobileNo` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fatherName` varchar(20) NOT NULL,
  `motherName` varchar(20) NOT NULL,
  `lifeMemberNo` int(12) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `isLifeMember` int(10) NOT NULL DEFAULT 0,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstName`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`, `profilepic`, `status`, `isLifeMember`, `pincode`) VALUES
(94, 'dummi', 2147483647, 'anurag@gmail.com', '1999-12-28', 'Male', 'Delhi', 'Faridabad', '770, gali 1, Nagla Road NIT Faridabad, Haryana 121005', 'ASas!@12', 'dummy name', 'sdfda', 2345, '614c818c44a97.png', 1, 0, 121009),
(95, 'dummy name ', 2147483647, 'nurag@gmail.com', '1999-12-29', 'Male', 'Haryana', 'Faridabad', '770, gali 1, Nagla Road NIT Faridabad, Haryana 121005', 'AS!@as12', 'dummy name', 'PHOOL', 12345, '614c8218c22ea.png', 0, 0, 121009);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
