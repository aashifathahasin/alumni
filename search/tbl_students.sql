-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 08:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `Rollno` varchar(10) NOT NULL,
  `Name` text NOT NULL,
  `Date_of_Birth` varchar(20) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Passedoutyear` int(20) NOT NULL,
  `Occupation` text NOT NULL,
  `Company_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`Rollno`, `Name`, `Date_of_Birth`, `E_mail`, `Mobile_no`, `Passedoutyear`, `Occupation`, `Company_address`) VALUES
('15mx45', 'giri', '16-05-1995', 'giri@gmail.com', '9095645998', 2018, 'programmer', 'coimbatore'),
('16mx73', 'bhaviya', '', 'bhav@gmail.com', '9988774456', 2018, 'tyuiuii', 'tdgdfgfdg'),
('16mx81', 'pavithra', '07/06/1995', 'pavi@gmail.com', '2147483647', 2018, 'professor', 'gonzaga college');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`Rollno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
