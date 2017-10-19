-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 01:13 PM
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
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `created` varchar(30) NOT NULL,
  `image` varchar(55) NOT NULL,
  `url` varchar(144) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `content`, `status`, `created`, `image`, `url`) VALUES
(14, '2', '26', 'i got your message', 'unread', 'Wednesday,1st January 2014,10:', '', ''),
(17, '6', '3', 'thanks', 'unread', 'Thursday,2nd January 2014,1:16', '', ''),
(27, '6', '3', 'i receive your message', 'unread', 'Thursday,13th February 2014,1:', 'fotos/', ''),
(30, '3', '26', 'Hello admin', 'unread', 'Sunday,16th February 2014,5:34', 'fotos/', ''),
(31, '3', '26', 'thanks', 'unread', 'Sunday,16th February 2014,5:35', 'fotos/', ''),
(32, '6', '2', 'kkkkkk', 'unread', 'Sunday,16th February 2014,5:40', 'fotos/', ''),
(33, '4', '26', 'hello', 'unread', 'Sunday,16th February 2014,5:46', 'fotos/', ''),
(34, '6', '1', 'hi', 'unread', 'Sunday,16th February 2014,5:47', 'fotos/', ''),
(35, '6', '19', 'hi', 'unread', 'Monday,17th February 2014,4:26', 'fotos/', ''),
(36, '19', '6', 'thankks', 'unread', 'Monday,17th February 2014,4:27', 'fotos/', ''),
(38, '23', '6', 'this is so cool.....', 'unread', 'Monday,17th February 2014,6:32', 'fotos/', ''),
(39, '6', '23', 'thjaasdaw', 'unread', 'Monday,17th February 2014,7:03', 'fotos/', ''),
(41, '7', '26', 'cool', 'unread', 'Monday,17th February 2014,7:14', 'fotos/', ''),
(42, '6', '3', 'hjh<br />\r\n', 'unread', 'Monday,17th February 2014,10:0', 'fotos/', ''),
(43, '1', '6', 'Thanks bro for making cool socialweb... ', 'unread', 'Tuesday,18th February 2014,8:3', 'fotos/', ''),
(44, '6', '4', 'mm', 'unread', 'Tuesday,23rd September 2014,8:', 'fotos/', ''),
(45, '6', '4', 'mm', 'unread', 'Tuesday,23rd September 2014,8:', 'fotos/', ''),
(46, '6', '4', 'r', 'unread', 'Tuesday,23rd September 2014,8:', 'fotos/', ''),
(47, '6', '1', 'dfdgsd', 'unread', 'Friday,26th September 2014,1:0', 'fotos/', ''),
(48, '6', '26', 'hello admin from another ranjit', 'unread', 'Saturday,27th September 2014,2', 'fotos/', ''),
(49, '33', '32', 'hi', 'unread', 'Wednesday,9th March 2016,8:44:', 'fotos/', ''),
(50, '32', '33', 'hi dear', 'unread', 'Wednesday,9th March 2016,8:45:', 'fotos/', ''),
(51, '26', '2', 'sss', 'unread', 'Monday,20th March 2017,1:08:52', 'fotos/', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
