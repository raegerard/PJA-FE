-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2016 at 09:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pja_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
`account_id` tinyint(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`, `type`) VALUES
(1, 'superadmin', '08d33dd951551a4d7da9dbdf3a539d63', 'admin'),
(2, 'user1', '1fa8d1bd7d039ccbf6a733f19f0d8928', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
`agentId` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agentId_no` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`bookingId` int(11) NOT NULL,
  `guestId` int(11) NOT NULL,
  `rmId` int(11) NOT NULL,
  `payId` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `no_of_pax` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingId`, `guestId`, `rmId`, `payId`, `checkin`, `checkout`, `no_of_pax`) VALUES
(1, 1, 1, 2, '2016-02-14', '2016-02-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE IF NOT EXISTS `com` (
  `guestid` int(11) NOT NULL,
  `agenitid` int(11) NOT NULL,
  `commission` varchar(11) NOT NULL,
  `amt_paid` int(11) NOT NULL,
  `com_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
`guestId` int(11) NOT NULL,
  `guest_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `plate_no` varchar(6) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guestId`, `guest_name`, `address`, `contact_no`, `email`, `plate_no`, `agent_id`) VALUES
(1, 'juan tamad', '123 noob st., kalingafornia', 2147483647, 'juantamad@sample.com', 'abc123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
`inventoryid` int(8) NOT NULL,
  `item` varchar(25) NOT NULL,
  `description` longtext NOT NULL,
  `quantity` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryid`, `item`, `description`, `quantity`) VALUES
(2, 'fork', 'silver', 100);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`payId` int(11) NOT NULL,
  `guestId` int(11) NOT NULL,
  `trans_type` varchar(25) NOT NULL,
  `date_paid` date NOT NULL,
  `amt_paid` int(11) NOT NULL,
  `agentId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payId`, `guestId`, `trans_type`, `date_paid`, `amt_paid`, `agentId`) VALUES
(2, 1, 'walk-in', '2016-02-14', 2500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`rmId` int(11) NOT NULL,
  `rm_no` varchar(25) NOT NULL,
  `rm_type` varchar(25) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `rm_status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rmId`, `rm_no`, `rm_type`, `capacity`, `price`, `rm_status`) VALUES
(1, '1', 'two bed room', 8, 3000, 'available'),
(2, '2', 'two bed room', 8, 3000, 'available'),
(3, '3', 'two bed room', 8, 3000, 'available'),
(4, '4', 'two bed room', 8, 3000, 'available'),
(5, '5', 'two bed room', 8, 3000, 'available'),
(6, '6', 'two bed room', 8, 3000, 'available'),
(7, '7', 'three bed room', 10, 3500, 'available'),
(8, '8', 'three bed room', 10, 3500, 'available'),
(9, 'b-1', 'three bed room', 10, 3500, 'available'),
(10, 'b-2', 'three bed room', 10, 3500, 'available'),
(11, 'b-3', 'three bed room', 10, 3500, 'available'),
(12, 'b-4', 'three bed room', 10, 3500, 'available'),
(13, 'b-5', 'two bed room', 8, 3000, 'available'),
(14, 'b-6', 'two bed room', 8, 3000, 'available'),
(15, 'b-7', 'one bed room', 3, 1500, 'available'),
(16, 'b-8', 'four bed room', 15, 4500, 'available'),
(17, 'd-1', 'dorm type w/o bed room', 20, 300, 'available'),
(18, 'd-2', 'dorm type w/o bed room', 20, 300, 'available'),
(19, 'd-3', 'dorm type ++', 25, 300, 'available'),
(20, 'd-4', 'dorm type ++', 25, 300, 'available'),
(21, 'lb1', 'two bed room', 8, 3000, 'available'),
(22, 'lb2', 'two bed room', 8, 3000, 'available'),
(23, 'lb3', 'one bed room', 3, 1500, 'available'),
(24, 'lb4', 'one bed', 3, 1500, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
`unitId` int(11) NOT NULL,
  `unit_no` int(11) NOT NULL,
  `unit_type` varchar(25) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unitId`, `unit_no`, `unit_type`, `capacity`) VALUES
(1, 1, 'one bedroom', 3),
(2, 2, 'two bedroom', 8),
(3, 3, '3 bedrooms', 10),
(4, 4, 'four bedrooms', 15),
(6, 5, 'dormitory', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
 ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
 ADD PRIMARY KEY (`agentId`), ADD UNIQUE KEY `agentId_no` (`agentId_no`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `com`
--
ALTER TABLE `com`
 ADD PRIMARY KEY (`guestid`,`agenitid`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
 ADD PRIMARY KEY (`guestId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
 ADD PRIMARY KEY (`inventoryid`), ADD UNIQUE KEY `item` (`item`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`payId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`rmId`), ADD UNIQUE KEY `rm_no` (`rm_no`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
 ADD PRIMARY KEY (`unitId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
MODIFY `account_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
MODIFY `agentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
MODIFY `inventoryid` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `payId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `rmId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
MODIFY `unitId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
