-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2012 at 06:07 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelmgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `user` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `country` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `security_question` text NOT NULL,
  `answer` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `user`, `password`, `gender`, `city`, `state`, `country`, `phone`, `email`, `security_question`, `answer`) VALUES
(1, 'Quimby', 'Fred', 'freddy', 'ydderf', '', 'Toronto', 'Karnataka', 'India', 986277502, 'uvray90@hotmail.com', 'Which is your favourite juice?', 'apple'),
(2, 'Trial1', 'tq', 'tariq', 'qirat', 'Female', 'egcity', 'egstste', 'hy', 986277502, 'uvray90@hotmail.com', 'Which is your favourite dessert?', 'kjl'),
(3, 'reshma', 'saldanha', 'resh1990', 'resh', 'Female', 'karkala', 'Karnataka', 'India', 9902644204, 'reshu1990@yahoo.com', 'Which is your favourite dessert?', 'aaaa'),
(4, 'a', 'a', 'a', 'a', 'Female', 'a', 'a', 'a', 5446, 'asd', 'which is your favourite dish?', 'a'),
(5, 'Quimby', 'q', 'q', 'q', 'Male', 'q', 'q', 'q', 9902644204, 'franklinroystan@gmail.com', 'Which is your favourite juice?', 'mango');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(35) NOT NULL,
  `room_type` varchar(35) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `rooms` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `user`, `room_type`, `checkin`, `checkout`, `rooms`, `days`) VALUES
(1, 'fred', 'deluxe', '2012-01-13', '2012-01-17', 3, 5),
(2, 'w', 'Room', '2012-01-28', '2012-01-21', 14, 34),
(3, 'x', 'Hall', '2012-01-17', '2012-01-20', 19, 23),
(4, 'a', 'Room', '2012-01-15', '2012-01-18', 1, 8),
(5, 'a', 'Room', '2012-01-15', '2012-01-18', 1, 8),
(6, 'a', 'Room', '2012-01-19', '2012-01-27', 1, 23),
(7, 'q', 'Room', '2012-01-29', '2012-01-31', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user`, `password`) VALUES
(1, 'fred', 'dref'),
(2, 'drew', 'werd');
