-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 03:42 PM
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
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passout` int(4) NOT NULL,
  `department` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `uname`, `pass`, `rollno`, `email`, `passout`, `department`, `mobile`, `occupation`) VALUES
(18, 'aaaa', 'aaaa', 'aaa', 'aaaa', 'aas@gmail.com', 1998, 'MCA', '22222', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `Msg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Sender` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`Msg_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Msg_ID`, `Sender`, `Message`) VALUES
(1, 'aash', 'hai'),
(2, 'THha', 'uha'),
(3, 'thah', 'hay'),
(4, 'ga', 'ha'),
(5, 'ha', 'ha'),
(6, 'th', 'th'),
(7, 'thaah', 'hai'),
(8, 'priya', 'hai'),
(9, 'ram', 'hai'),
(10, 'priya', 'how are you'),
(11, 'ram', 'fine u'),
(12, 'priya', 'fine'),
(13, 'ram', 'how was your day'),
(14, 'priya', 'good'),
(15, 'priya', 'hai'),
(16, 'aashi', 'hai'),
(17, 'priya', 'hai'),
(18, 'aashifa', 'hai'),
(19, 'karthick', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `fromyear` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `toyear` int(4) NOT NULL,
  `department` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `uname`, `pass`, `fromyear`, `email`, `toyear`, `department`, `mobile`) VALUES
(18, 'aaa', 'aaaa', 'aaaa', '2003', 'aas@gmail.com', 2002, 'MCA', '78955522');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(0, '', 'aashifa'),
(1, '', 'aashifa'),
(3, 'aashi@gmail.com', 'aashifa');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE IF NOT EXISTS `other` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `name`, `uname`, `pass`, `email`, `mobile`) VALUES
(18, 'aaa', 'aaa', 'aaaa', 'aas@gmail.com', '5222');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `uname`, `pass`, `email`, `department`, `mobile`) VALUES
(18, 'aaaa', 'aaaaaaa', 'aaa', 'aas@gmail.com', 'MCA', '78552233');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `rollnumber` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `uname`, `pass`, `rollnumber`, `email`, `department`, `mobile`) VALUES
(18, 'aaa', 'aaa', 'aaa', '15mx01', 'aas@gmail.com', 'MCA', '7895223232'),
(19, 'aaa', 'aaa', 'a', '15mx01', 'aas@gmail.com', 'MCA', '22222');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
