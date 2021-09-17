-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 09:09 AM
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
(1, 'anurag', 'anurag@gmail.com', '12345');

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
(1, 'aamir ', 'khanboy9911998319@gmail.com', 'Male', '', 22, 'btech@gd.in', 'btech', 'btech', 10, '1999-03-30', 'btech', 'btech', 'csccjkdskknds sqkjakja,56645', '', ''),
(2, 'xsmns', 'amanbhatia@gmail.com', 'Male', 'no', 22, 'btech@gd.in', 'bcom', 'bcom', 10, '2002-03-05', 'btech', 'btech', 'dsdddzdzzd', '', ''),
(3, 'sksk', 'asj@gmail.com', 'Male', 'yes', 23, 'bsc', 'btech', 'mca', 15, '1698-03-20', 'mca', 'other', 'dgvxfdxfbxbxbx dsjhzjkz odkzlkzfds', 'IMG_20210203_111700_5142109801', ''),
(4, 'dsgrt', 'ak114@gmai.com', 'Male', '', 0, 'bba', 'bcom', 'other', 7, '2021-09-24', 'btech', 'btech', 'sdfghh', '', ''),
(5, 'dsgrt', 'ak114@gmai.com', 'Male', '', 0, 'bba', 'bcom', 'other', 7, '2021-09-24', 'btech', 'btech', 'sdfghh', '', '');

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
  `isLifeMember` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstName`, `lastname`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`, `recieptNo`, `profilepic`, `status`, `isLifeMember`) VALUES
(24, 'anurag', 'chindaliya', 2147483647, 'ak114@gmai.com', '2021-09-17', 'Male', 'haryana', 'ak114@gmai.com', 'jawahar colong', '12345', 'asdfg', 'sdfggg', 123456, 12345, '0%-FINANCE.jpg', 0, 0),
(26, 'neeraj', 'chindaliya', 2147483647, 'ak114@gmai.com', '2021-09-17', 'Male', 'haryana', 'ak114@gmai.com', 'jawahar colong', '12345', 'asdfg', 'sdfggg', 123456, 12345, '0%-FINANCE.jpg', 1, 1),
(27, 'dummy98', 'chauhan', 2147483647, 'new@gmail.com', '2021-08-30', 'Male', 'haryana', 'faridabad', 'ak114@gmai.com', '12345', 'asdfg', 'hsdjfh', 23456, 12345, 'K23.jpg', 0, 0);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
