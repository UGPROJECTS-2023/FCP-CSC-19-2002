-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 07:27 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prince`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`SN` int(4) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `MESSAGE` text NOT NULL,
  `TELEPHONE` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SN`, `NAME`, `SUBJECT`, `MESSAGE`, `TELEPHONE`, `EMAIL`) VALUES
(1, 'Muhad', 'complain', 'Room problem', '02067837452', 'muhad@gmail.com'),
(2, 'Mud', 'complain', 'Room problem', '03067837452', 'mud@gmail.com'),
(3, 'Mun', 'thanking', 'I appreciate ur kindness', '04067837452', 'mun@gmail.com'),
(4, 'Musb', 'thanking', 'I enjoy ', '05067837452', 'musb@gmail.com'),
(5, 'yusuf', 'thanks', 'thanks', '06067837452', 'yusuf@gmail.com'),
(6, 'ismail', 'assistance', 'thanks for assiting', '07067837452', 'ismail@gmail.com'),
(7, 'Muhd', 'complain', 'Room problem', '04067837452', 'muhd@gmail.com'),
(8, 'Mujjahid', 'complain', 'Room problem', '04067837452', 'mujjahid@gmail.com');

--
-- Table structure for table `reserve`
--
CREATE TABLE IF NOT EXISTS `reserves` (
`sn` int(4) NOT NULL,
  `No` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` text NOT NULL,
  `telno` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

--
-- Dumping data for table `reserve
--

INSERT INTO `reserves` (`sn`, `No`, `name`, `email`, `telno` , `address`) VALUES
(1, 'RM001', 'Vip Room', 'muhad@gmail.com', '01067837452' , 'shagari Qtrs.' ),
(2, 'RM002', 'Flat Room', 'mud@gmail.com', '02067837452'  , 'Chadi Qrts.'),
(3, 'RM003', 'Vip Room', 'Yusuf@gmail.com', '03067837452' , 'GRA Qrts.' ),
(4, 'RM004', 'Standard Room', 'munir@gmail.com', '04067837452' , 'Zoo Road' ),
(5, 'RM005', 'Suit Room', 'muhd@gmail.com', '05067837452' , 'Air port road' ),
(6, 'RM006', 'Delux Room', 'musb@gmail.com', '06067837452' , 'Gagulmari' ),
(7, 'RM007', 'Luxury Room', 'ismail@gmail.com', '07067837452' , 'Gawuna' ),
(8, 'RM008', 'Twin Delux Room', 'mujjahid@gmail.com', '08067837452' , 'Dalla' );

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `Room_Id` varchar(50) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Second_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Room_No` varchar(11) NOT NULL,
  `product_qty` varchar(11) NOT NULL,
  `Room_name` varchar(255) NOT NULL,
  `Grand_total` decimal(10,2) NOT NULL,
  `Trans_id` varchar(255) NOT NULL,
`Book_id` int(11) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `TIME` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `booking`
--
INSERT INTO `booking` (`Room_Id`, `First_Name`, `Second_Name`, `Address`, `State`, `Phone_Number`, `Email`, `Room_No`, `product_qty`, `Room_name`, `Grand_total`, `Trans_id`, `Book_id`, `Date`, `TIME`, `status`) VALUES
('1', 'Ibrahim', 'Idris', 'Shagari Quarters, Kazaure, Jigawa State.', 'Abuja', '0716609200', 'ibrahim@gmail.com', 'RM001', '1', 'Standard Room', '15000.00', '21317-FEF20-37E1B-333E6-36A58', 12, '22:09:19', '7:21', 'Pending'),
('2', 'Mud', 'Abdlr', 'No 45 Zoo Road Kn, KANO, Kano State.', 'Kano', '02047647823', 'mud@gmail.com', 'RM002', '1', 'Standard Room', '20000.00', '643E3-7F558-1608F-4A9A1-1E1C7', 13, '05:11:19', '7:20', 'Pending'),
('3', 'Muhdin', 'isah', 'No 35 Zoo Road Kano, Kano, Kano State.', 'Kano', '03047568927', 'muhdin@gmail.com', 'RM003', '1', 'Standard Room', '60000.00', 'A531D-6556D-9F1BD-53E01-A43EA', 14, '25:09:19', '7:23', 'Paid');


-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`id` int(11) NOT NULL,
  `Room_No` varchar(60) NOT NULL,
  `Room_name` varchar(60) NOT NULL,
  `Room_image_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147  ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `Room_No`, `Room_name`, `Room_image_name`, `price`) VALUES
(1, 'RM001', 'Vip Room', 'B004.jpg', '10000.00'),
(2, 'RM003', 'Vip Room', 'B005.jpg', '20000.00'),
(3, 'RM004', 'Standard Room', 'Standard _img13.jpg', '600000.00'),
(4, 'RM005', 'Vip', 'B006.jpg', '30000.00'),
(5, 'RM007', 'Luxury Room', 'Luxury_img8.jpg', '300000.00'),
(6, 'RM0011', 'Vip Room', 'B005.jpg', '10000.00'),
(7, 'RM0012', 'Standard Room', 'Standard _img14.jpg', '30000.00'),
(8, 'RM0015', 'Twin Delux Room', 'Twin_img24.jpg', '30000.00'),
(9, 'RM0016', 'Twin Delux Room', 'Twin_img25.jpg', '30000.00'),
(10, 'RM0018', 'Delux Room', 'delux_img1.jpg', '30000.00');

-- --------------------------------------------------------


--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`SN`);
--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`Book_id`);
--
-- Indexes for table `resrves`
--
 
 ALTER TABLE `reserves`
 ADD PRIMARY KEY (`sn`);
 
 
--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Room_No` (`Room_No`);
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `SN` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;

ALTER TABLE `reserves`
MODIFY `sn` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `Signin` (
  `Sn` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Signin`
--

INSERT INTO `Signin` (`sn`, `username`, `password`) VALUES
(1, 'muhad@gmail.com', '12345');


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(20) NOT NULL,
  `ln` varchar(20) NOT NULL,
  `g` varchar(6) NOT NULL,
  `pn` varchar(15) NOT NULL,
  `e` varchar(50) NOT NULL,
  `P` varchar(20) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `c` varchar(20) NOT NULL,
  `s` varchar(20) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sn`, `fn`, `ln`, `g`, `pn`, `e`, `p`, `cp`, `c`, `s`) VALUES
(1, 'muhadeen', 'nam', 'Male', '9876776', 'muhadeen@gmail.com', '78887', '878998', 'xx way', 'Yola'),
(2, 'muhd', 'abdul', 'Male', '02847589893', 'muhd@gmail.com', '12345', '12345', 'dtse', 'Jigawa'),
(3, 'muheed', 'Ibrahim', 'Male', '06847589893', 'muheed@gmail.com', '1235', '1235', 'Hdj', 'Jigawa'),
(4, 'muhad', 'Ahmed', 'Male', '02847589893', 'muhad@gmail.com', '1234', '1234', 'Hdj', 'Jigawa'),
(5, 'Isah', 'Abdulhakim', 'Male', '09547589893', 'isah@gmail.com', '123456', '123456', 'Hadj', 'Jigawa'),
(6, 'Musa', 'dady', 'Male', '09147589893', 'musa@gmail.com', '123', '123', 'Hdej', 'Jigawa'),
(7, 'Nazir', 'Ahmad', 'Male', '09047589893', 'nazir@gmail.com', '12345', '12345', 'Hdji', 'Jigawa'),
(8, 'Fatima', 'Aminu', 'Female', '08847589893', 'fatima@gmail.com', '12345', '12345', 'Hdjia', 'Jigawa'),
(9, 'Yusuf', 'Idris', 'Male', '08847589893', 'yusuf@gmail.com', '12345', '12345', 'Gumel', 'Jigawa');



