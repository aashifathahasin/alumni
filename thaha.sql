-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 05:13 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(20) NOT NULL,
  
  `pass` varchar(20) NOT NULL,
  
  `email` varchar(30) NOT NULL,
  
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`,`pass`,`email`) VALUES
(0, 'aa', 'aaa', 'aaa', 'aaa', 'aas@gmail.com', 1998, 'MCA', '222222', 'aaaa'),
(0, 'aaaa', 'aaaa', 'aaa', 'aaaa', 'aas@gmail.com', 1998, 'MCA', '22222', 'aaa'),
(0, 'irfan', 'irfan', 'irfan', '15mx90', 'irfan@gmail.com', 1999, 'MCA', '7896541235', 'dddd'),
(0, 'ram', 'ram', 'ram', '15mx01', 'ram@gmail.com', 1999, 'MCA', '7896541235', 'nnnn');

-- --------------------------------------------------------

--

--


-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`,`pass`, `email`) VALUES
(18, 'aaa', 'aaaa', 'aaaa', 'aas@gmail.com', 0, 2002, 'MCA', '78955522'),
(19, 'aaa', 'aaa', 'aaa', 'aas@gmail.com', 0, 2003, 'MCA', '789654123'),
(20, 'a', 'a', 'a', 'aas@gmail.com', 0, 2002, 'MCA', '44444'),
(21, 'aaa', 'aa', 'aa', 'aas@gmail.com', 0, 2003, 'MCA', '112222'),
(22, 'aa', 'aa', 'aa', 'aas@gmail.com', 2003, 2003, 'MCA', '11233');

-- --------------------------------------------------------

--
-- 