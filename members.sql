-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 02:20 PM
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
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `work` varchar(55) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `coverphoto` varchar(300) NOT NULL,
  `content` varchar(125) NOT NULL,
  `relation` varchar(66) NOT NULL,
  `search_result` varchar(55) NOT NULL,
  `friends_condition` varchar(55) NOT NULL,
  `school` varchar(55) NOT NULL,
  `college` varchar(66) NOT NULL,
  `interest` varchar(55) NOT NULL,
  `aboutme` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `address`, `city`, `contact`, `email`, `password`, `gender`, `bday`, `work`, `profilepic`, `coverphoto`, `content`, `relation`, `search_result`, `friends_condition`, `school`, `college`, `interest`, `aboutme`) VALUES
(1, 'jenish', 'Shreatha', 'Dhapakhel', 'kathmandu', 2147483647, 'jenish@yahoo.com', '77b116c99bce06fb11dfb6d79814f718', 'Male', '03/07/2012', 'engineer', 'profilepic/DSC04423.JPG', '', '', 'Single', '', 'yes', '', '', '', ''),
(2, 'Avijit', 'karna', 'Dhapakhel', 'kathmandu', 0, 'Avijit@yahoo.com', 'Avijit', 'Male', '03/06/2012', 'engineer', 'profilepic/1005585_6135959.jpg', 'coverphotos/2.jpg', '', '', 'yes', 'yes', '', '', '', ''),
(3, 'Zenish', 'Shakya', 'kathmandu', 'Jaulakhel', 2147483647, 'Zenish@.com', 'Zenish', 'Male', 'April/4/2009', 'engineer', 'profilepic/1376248533.gif', 'coverphotos/1794545_10152116541129123_1118899118_n.jpg', '', 'Single', 'yes', 'yes', 'vidya sadan school', 'molihss', 'nothing', 'im cool'),
(4, 'sujata', 'thapa', 'Dhapakhel', 'kathmandu', 2147483647, 'sugata@yahoo.com', 'sugata', 'female', '03/06/2012', 'engineer', 'profilepic/matlab_main (1).jpg', 'coverphotos/rachna-maurya-8a.jpg', '', '', '', 'yes', '', '', '', ''),
(5, 'sirgina', 'basnet', 'kathmandu', 'dhapakhel', 2147483647, 'sirgina@gmail.com', '1f4dbdac4cc7d9fa58e84b6a8e60a962', 'female', '04/19/2012', 'engineer', 'profilepic/2.jpeg', 'coverphotos/IMG_80492428338207.jpeg', '', '', 'yes', 'yes', '', '', '', ''),
(6, 'ranjit', 'Karki', 'japan', 'Jhapa', 0, 'ranjitkarki2@gmail.com', '77b116c99bce06fb11dfb6d79814f718', 'Female', 'February/12/1998', 'Engineer', 'profilepic/20140217_140825.jpg', 'coverphotos/Capture1.PNG', '', 'In a relationship', 'No', ' yes', 'kkec', 'kec', 'male', 'boy'),
(7, 'rupak', 'nepal', 'Dhapakhel', 'kathmandu', 2147483647, 'rupak@yahoo.com', 'rupak', 'Male', '03/01/2012', 'student', 'profilepic/SAM_0004.JPG', '', '', '', 'yes', 'yes', '', '', '', ''),
(8, 'sam', 'maharajan', 'Dhapakhel', 'kathmandu', 0, 'sam@yahoo.com', 'sam', 'Male', '03/06/2012', 'student', 'profilepic/DSC04319.JPG', '', '', '', 'yes', 'yes', '', '', '', ''),
(9, 'partik', 'kharel', 'dhapakhel', 'dhapakhel', 444444, 'purtik@yahoo.com', 'purtik', 'male', '2047/03/08', 'eee', 'profilepic/1118695_100000702644504_1683430572_q.jpg', '', '', '', 'yes', 'no', '', '', '', ''),
(10, 'Ustab', 'Neupane', 'Dhapakhel', 'kathmandu', 2147483647, 'ustab@yahoo.com', 'ustab', 'Male', '03/06/2012', 'nothing', 'profilepic/DSC04294.JPG', '', '', '', 'yes', 'yes', '', '', '', ''),
(11, 'Binaya', 'Shrestha', 'jhapa', 'Nepal', 2147483647, 'binaya@yahoo.com', 'binaya', 'Male', '1971-09-15', '', 'profilepic/1118247_100000093465156_1952022755_q.jpg', '', '', '', '', '', '', '', '', ''),
(16, 'Ayusha ', 'Kshetri', 'kathmandu', '', 2147483647, 'Ayusha_12@yahoo.com', 'ayusha', 'Female', '1971-10-29', '', 'profilepic/happy-girl-in-spring.jpg', '', '', '', '', '', '', '', '', ''),
(17, 'Nabin', 'Kumar', 'dharan', '', 2147483647, 'Nabin_12@yahoo.com', 'nabinn', 'Male', '1972-11-29', '', 'profilepic/5 - Copy.jpg', '', '', '', '', '', '', '', '', ''),
(18, 'Samna', 'Acharya', 'Patan', '', 2147483647, 'samna_hope@yahoo.com', 'nightmare@', 'Female', '1992-08-18', '', 'profilepic/1.jpg', 'coverphotos/3672_387975537931304_580217174_n (1).jpg', '', '', '', '', '', '', '', ''),
(19, 'Sushila', 'Shakya', 'jhapa', 'pokhara', 2147483647, 'curium_122@yahoo.com', 'aaaaaa', 'Female', 'September/15/1996', '', 'profilepic/safes_image.png', '', '', 'In a relationship', '', '', '', '', '', ''),
(20, 'Ronisha', 'nirula', 'kathmandu', '', 2147483647, 'ronisha_12@yahoo.com', 'mmmmmm', 'Female', '1970-08-16', '', 'profilepic/14855_1391972091067174_1232160828_n.jpg', 'coverphotos/abstract-496a.jpg', '', '', 'No', '', '', '', '', ''),
(21, 'Rojina', 'Malla', 'Kanibahal', '', 0, 'rojina_hope@yahoo.com', 'rojina', 'Female', '1993-12-10', '', 'profilepic/823831062.jpg', '', '', '', 'yes', '', '', '', '', ''),
(22, 'Ham', 'Maharjan', 'Lalitpur', '', 0, 'ham@yahoo.com', 'hammig', 'Male', '1957-05-11', '', 'profilepic/3.jpg', '', '', '', 'yes', '', '', '', '', ''),
(23, 'Chandan', 'Maharjan', 'kanibahal', '', 0, 'chandan_hope@yahoo.com', 'chandan', 'Male', '1993-09-7', '', 'profilepic/156332_10152259740316754_2084584233_n.jpg', '', '', '', 'yes', '', '', '', '', ''),
(26, 'Ranjit', 'karki[ADMIN]', 'jhapa', 'Jhapa,damak', 2147483647, 'ranjit_12@yahoo.com', '77b116c99bce06fb11dfb6d79814f718', 'Male', 'May/21/1991', '', 'profilepic/10415647_728286817233506_9201783281515427317_n.jpg', 'coverphotos/1005243_6124652_51.jpg', '', 'Single', 'yes', '', 'Damak multiple campus,jhapa,damak', ' kec', 'Everything', 'iam a  boy'),
(27, 'ranjit', 'karki', 'bgf', '', 0, 'c_1@yahoo.com', 'ghgghgj', 'Female', 'Year-Month-DD', '', '', '', '', '', 'yes', '', '', '', '', ''),
(28, 'ranjit', 'karki', 'jhapa', '', 2147483647, 'curium_12@yahoo.com', 'mmmmmm', 'Male', '1966-08-15', '', '', '', '', '', 'yes', '', '', '', '', ''),
(29, 'ranjit', 'karki', 'jhapa', '', 2147483647, 'curium_12@yahoo.com', 'mmmmmm', 'Male', '1971-12-18', '', '', '', '', '', 'yes', '', '', '', '', ''),
(30, 'ranjit', 'karki', 'jhapa', '', 2147483647, 'curium_12@yahoo.com', 'mmmmmm', 'Male', '1971-12-18', '', '', '', '', '', 'yes', '', '', '', '', ''),
(31, 'herbert sam', 'Shrestha', 'jhapa', '', 2147483647, 'curium_1992@yahoo.com', 'mmmmmm', 'Female', '1971-12-17', '', '', '', '', '', 'yes', '', '', '', '', ''),
(32, 'imran', 'ahamed', '342324', '', 0, 'imrahamed@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Male', '1994-12-18', '', '', '', '', '', 'yes', '', '', '', '', ''),
(33, 'aashifa ', 'ahamed', 'gobi', '', 0, 'aashifaimran@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Female', '1995-04-17', '', '', '', '', '', 'yes', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
