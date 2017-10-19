-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2016 at 08:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('imran', 'imran');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `eligblity` varchar(65) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `address` varchar(65) NOT NULL,
  `time` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `city`, `phone`, `company`, `eligblity`, `salary`, `address`, `time`, `email`) VALUES
(1, 'John Smith', 'Michigan', '11', 'google', 'no arrears & UG 70% above', '200', '121 4', '27th oct', 'gam@12.com'),
(2, 'Maria Sy', 'Manila Binondo', '12345', '', '', '', '', '', ''),
(3, 'Mike Dela Cruz', 'Bago City', '123434', '', '', '', '', '', ''),
(4, 'Sandra Smith', 'Japan', '12345', '', '', '', '', '', ''),
(5, 'Sharon Stone', 'San Diego California', '12345', '', '', '', '', '', ''),
(6, 'Linda Lee', 'Hongkong China', '12345', '', '', '', '', '', ''),
(7, 'Mario Perez', 'Laguna City', '12345', '', '', '', '', '', ''),
(8, 'Portia Familiar', 'Bacolod', '12345', '', '', '', '', '', ''),
(9, 'Carla Gomez', 'Silay City', '12345', '', '', '', '', '', ''),
(10, 'Kobe Bryant', 'LA, USA', '12345', '', '', '', '', '', ''),
(12, 'Peter Norton', 'Canada', '1212121', '', '', '', '', '', ''),
(13, 'Jimmy Santos', 'Quezon City', '343434', '', '', '', '', '', ''),
(14, 'Mariano Chua', 'Makati ', '565343', '', '', '', '', '', ''),
(15, 'Melissa Chan', 'Cebu City', '565656', '', '', '', '', '', ''),
(16, 'George Town', 'Africa', '123456', '', '', '', '', '', ''),
(17, 'Alma Ching', 'Pasay City', '433', '', '', '', '', '', ''),
(18, 'Karl Malone', 'Utah, USA', '45454545', '', '', '', '', '', ''),
(20, 'Zandro Co', 'Cotabato', '34343434', '', '', '', '', '', ''),
(21, 'imrahamed', 'qq', '343432', 'errtr', '555', '342423', 'gdg', 'thghd', 'drdr@wrr.com'),
(22, 'imran ahamed', 'qq', '343432', 'errtr', '6666', '342423', 'gdg', '24', 'drdr@wrr.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
