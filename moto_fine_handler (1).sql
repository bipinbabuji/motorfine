-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2019 at 08:56 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moto_fine_handler`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_details`
--

CREATE TABLE IF NOT EXISTS `case_details` (
  `owner` varchar(15) NOT NULL,
  `location` varchar(15) NOT NULL,
  `ofdate` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_no` varchar(15) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `payment` enum('0','1') NOT NULL,
  `ps_name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `case_details`
--

INSERT INTO `case_details` (`owner`, `location`, `ofdate`, `id`, `veh_no`, `type`, `amount`, `last_date`, `payment`, `ps_name`) VALUES
('kollam', 'thenmala', '2019-05-28 11:11:00', 41, 'KL24A1239', '10000+200', 10200, '2019-05-31', '1', 'janamythri');

-- --------------------------------------------------------

--
-- Table structure for table `changerc`
--

CREATE TABLE IF NOT EXISTS `changerc` (
  `buyer` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `houseno` varchar(15) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_no` varchar(20) NOT NULL,
  `name` char(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `changerc`
--

INSERT INTO `changerc` (`buyer`, `district`, `state`, `houseno`, `id`, `veh_no`, `name`, `address`, `phone`, `email`, `status`) VALUES
('athul', 'kollam', 'Kerala', 'hsno23', 44, 'KL24A1239', 'BIPIN', 'kaipali house', 7896521478, 'athul651@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(11, 'BIPIN', 'received certificate. thank you.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_no` varchar(25) NOT NULL,
  `company` varchar(40) NOT NULL,
  `number` varchar(40) NOT NULL,
  `exp_date` date NOT NULL,
  `cdate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` char(20) NOT NULL,
  `ccv` int(11) NOT NULL,
  `cardno` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `veh_no`, `company`, `number`, `exp_date`, `cdate`, `address`, `amount`, `type`, `ccv`, `cardno`) VALUES
(29, 'KL24A1239', 'United India Insurance Company', '127634', '2019-04-28', '2019-05-28', 'solamon house', 25000, 'Credit card', 123, 1234567812345678);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin123', 'admin123', 0),
(88, 'KL24A1239', 'KL24A1239', 4),
(89, '56', 'KL24A1239', 2),
(90, 'GEORGE LUKE', 'KL24A1239', 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(100) NOT NULL,
  `ps_name` varchar(15) NOT NULL,
  `veh_no` varchar(20) NOT NULL,
  `case_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_no` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `ccv` int(11) NOT NULL,
  `cardno` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `veh_no`, `amount`, `type`, `ccv`, `cardno`) VALUES
(6, 'KL24A1239', 10200, 'Credit card', 123, 1234567812345678);

-- --------------------------------------------------------

--
-- Table structure for table `policestation`
--

CREATE TABLE IF NOT EXISTS `policestation` (
  `ps_name` varchar(30) NOT NULL,
  `ps_adrs` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `incharge` char(20) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `ps_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ps_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `policestation`
--

INSERT INTO `policestation` (`ps_name`, `ps_adrs`, `phone`, `email`, `incharge`, `uname`, `password`, `ps_id`) VALUES
('JANAMYTHRI', 'thenmala', 7894561236, 'police@gmail.com', 'GEORGE LUKE', 'GEORGE LUKE', 'KL24A1239', 21);

-- --------------------------------------------------------

--
-- Table structure for table `rcform`
--

CREATE TABLE IF NOT EXISTS `rcform` (
  `owner` varchar(15) NOT NULL,
  `chassis` varchar(15) NOT NULL,
  `engine` varchar(15) NOT NULL,
  `motor` varchar(22) NOT NULL,
  `tvehicle` varchar(22) NOT NULL,
  `manufacture` date NOT NULL,
  `color` varchar(22) NOT NULL,
  `seat` varchar(22) NOT NULL,
  `fuel` char(25) NOT NULL,
  `address` varchar(35) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `reg_no` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcform`
--

INSERT INTO `rcform` (`owner`, `chassis`, `engine`, `motor`, `tvehicle`, `manufacture`, `color`, `seat`, `fuel`, `address`, `phone`, `email`, `reg_no`, `password`, `status`) VALUES
(' athul', 'cca12e123456', 'eng12', 'A NEW VEHICLE', '3-Wheeler', '2019-04-28', 'green', '3', 'PETROL', 'kaipalli bhavan', 9874563214, 'userabin@gmail.', '56', 'KL24A1239', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `district` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `houseno` varchar(12) NOT NULL,
  `name` char(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL,
  `veh_no` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`veh_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`district`, `state`, `houseno`, `name`, `address`, `phone`, `email`, `type`, `veh_no`, `password`, `status`) VALUES
('kollam', 'Kerala', 'hsno23', 'BIPIN', 'solamon house', 7896521478, 'bipinbipin651@g', '2-Wheeler', 'KL24A1239', 'KL24A1239', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
