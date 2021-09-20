-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 12:52 PM
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
  `isMarriageable` varchar(5) NOT NULL,
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

INSERT INTO `child` (`id`, `child_Name`, `child_email`, `gender`, `isMarriageable`, `age`, `education`, `degree`, `profession`, `height`, `dateofbirth`, `faceofcomplexion`, `manglik`, `expectation`, `profile_pic`, `status`) VALUES
(16, '12aamir ', 'aamir@gmail.com', 'Female', 'yes', 12, '12aamir ', 'bcom', 'bcom', 0, '0000-00-00', 'bcom', 'bcom', '', '', ''),
(17, '12aamir ', 'aamir@gmail.com', 'Female', 'yes', 12, '12aamir ', 'bcom', 'bcom', 0, '0000-00-00', 'bcom', 'bcom', '', '', ''),
(20, 'dummy', 'child@gmnail.cimn', 'Male', 'yes', 0, 'bca', 'btech', 'bcom', 7, '2021-09-13', 'bcom', 'bcom', '45', '', ''),
(21, 'dummy don', 'site88@gmnail.cimn', 'Male', 'yes', 56, 'bca', 'btech', 'mca', 7, '2021-10-01', 'btech', 'mca', 'hj', '614736768a081.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mobileNo` int(30) NOT NULL,
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
  `recieptNo` int(12) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `isLifeMember` int(10) NOT NULL DEFAULT 0,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstName`, `lastname`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`, `recieptNo`, `profilepic`, `status`, `isLifeMember`, `pincode`) VALUES
(66, 'dummy925', 'jkl', 2147483647, 'anurag@gmail.com', '2021-09-28', 'Male', 'Puducherry', 'dfghj', '770, gali 1, Nagla Road NIT Faridabad, Haryana 121005', '12345', 'dummy name1', 'jk,', 32145, 123456, '61474d15b2ed8.jpg', 0, 0, 121),
(67, 'newGender', 'newlastName', 4567890, 'anurag@gmail.com', '2021-09-10', 'Male', 'Daman and Diu', 'fghj', '770, gali 1, Nagla Road NIT Faridabad, Haryana 121005', '12345', 'ghjkl', 'ghjkl', 56789, 45678, '61470664c2bcb.png', 0, 0, 1210078),
(68, 'dummy99', 'sdfasd', 88456789, 'anurag@gmail.com', '2021-09-18', 'Female', 'Andhra Pradesh', 'Faridabad', 'fde', '12345', 'dummy name', 'PHOOL', 0, 0, '61471d90d74c0.jpg', 0, 0, 121001),
(69, 'abc', 'def', 1234567890, 'abc@gmail.com', '1996-06-19', 'Male', 'Haryana', 'Faridabad', 'qwertyu', '12345', 'dummy', 'dummyyy', 12345, 12345, '614743488a8ff.jpg', 0, 0, 121005),
(70, 'dummy100', 'mas', 88456789, 'anurag@gmail.com', '1999-12-29', 'Female', 'Puducherry', 'dfghj', '770, gali 1, Nagla Road NIT Faridabad, Haryana 121005', '12345', 'dummyfathernamedumdu', 'dummymothernamedumdu', 2345, 1234, '6148511c53a84.png', 0, 0, 121006),
(71, 'neeraj', 'maurya', 12345678, 'dgjfas@gahjl.com', '2021-09-01', 'm', 'haryana', 'faridabad', 'asd', 'a3s4d5fgyu', 'asdfgh', 'zxcvbn', 3456789, 987654, '', 0, 0, 121005),
(72, 'dummy101', 'dummy last101', 2147483647, 'anurag@gmail.com', '1999-12-30', 'Female', 'Delhi', 'Faridabad', '770, gali 1, Nagla Road NIT Faridabad, Haryana 121005', '12345', 'Dummy Father Name101', 'dummy mother name101', 1250, 1201, '61485a9467c2c.png', 0, 0, 121005);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
