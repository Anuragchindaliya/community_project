-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 04:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
  `education` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `height` int(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `faceofcomplexion` varchar(10) NOT NULL,
  `manglik` varchar(10) NOT NULL,
  `expectation` varchar(255) NOT NULL,
  `profile_pic` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `child_Name`, `child_email`, `gender`, `mobileno`, `education`, `degree`, `profession`, `height`, `dateofbirth`, `faceofcomplexion`, `manglik`, `expectation`, `profile_pic`, `status`, `pid`) VALUES
(29, 'J P GUPTA', 'jpgupta@gmail.com', 'Male', 9999999999, 'No formal education', 'bcom', 'Business', 7, '2003-09-10', 'Extremely ', '', 'sdhf asdh asdhj', '6154703e565f9.jpg', '', 130),
(30, 'J P GUPTA', 'anurag@gmail.com', 'Male', 9999999999, 'Secondary education', 'bcom', 'Service', 7, '2003-09-10', 'Extremely ', 'Sada Mangl', 'sdfa a sfasfd', '6154725256f11.jpg', '', 130),
(31, 'J P GUPTA', 'jpgupta@gmail.com1', 'Male', 9999999999, 'Primary education', 'bcom', 'others', 0, '2003-09-02', 'Extremely ', '', 'asd', '6154758e0d795.jpg', '', 130),
(32, 'J P GUPTA', 'jpguptadws@gmail.com', 'Male', 9999999999, 'BSC', 'bcom', 'bcom', 7, '2003-09-01', 'bcom', 'bcom', 'asdf sa fd', '61547a4beec6d.jpg', '', 130),
(33, 'J P GUPTAa', 'jpguptanew@gmail.com', 'Male', 9999999999, 'Primary education', 'bcom', 'bcom', 7, '1998-11-20', 'bcom', 'bcom', 'sd  Asfda sdf a', '61547b9135927.png', '', 130);

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
(128, 'J P GUPTA', 9999999999, 'anurag@gmail.com', '1999-12-26', 'Male', 'Haryana', 'faridabad', 'dummy address comes here', 'Anurag@123', 'asd', 'hsdjfh', 8765, '61519da3c7588.png', 1, 0, 121001),
(130, 'pp gupta', 9911457143, 'mohit@gmail.com', '1969-01-01', 'Male', 'haryana', 'faridabad', 'dummy address comes here', 'Varun@123', 'ab', 'ab', 45464, '6151dd5e94d4a.jpeg', 1, 0, 121001);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `child_email` (`child_email`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
