-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2016 at 06:32 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `alarm`
--

CREATE TABLE IF NOT EXISTS `alarm` (
  `alarm_id` int(11) NOT NULL AUTO_INCREMENT,
  `sh_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `direction` tinyint(1) NOT NULL,
  `price` float NOT NULL,
  `last_trigered` date DEFAULT NULL,
  PRIMARY KEY (`alarm_id`),
  KEY `sh_id` (`sh_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `alarm`
--

INSERT INTO `alarm` (`alarm_id`, `sh_id`, `user_id`, `is_enabled`, `direction`, `price`, `last_trigered`) VALUES
(8, 1, 1, 1, 1, 100, '2016-03-07'),
(9, 1, 1, 1, 1, 100, NULL),
(10, 1, 1, 1, 1, 100, NULL),
(11, 1, 1, 1, 1, 100, NULL),
(12, 1, 1, 1, 1, 100, NULL),
(13, 1, 1, 1, 1, 100, NULL),
(14, 1, 1, 1, 1, 100, NULL),
(15, 1, 1, 1, 1, 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE IF NOT EXISTS `shares` (
  `sh_id` int(11) NOT NULL AUTO_INCREMENT,
  `sh_symbol` varchar(20) NOT NULL,
  `sh_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`sh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`sh_id`, `sh_symbol`, `sh_desc`) VALUES
(1, 'TFSC', '1347 Capital Corp'),
(2, 'PIH', '1347 Property Insurance Holdings, Inc'),
(3, 'FB', 'Facebook, Inc.'),
(4, 'FCS', 'Fairchild Semiconductor International, Inc.'),
(5, 'ONEQ', 'Fidelity Nasdaq Composite Index Tracking Stock'),
(6, 'GSM', 'Ferroglobe PLC'),
(7, 'MITK', 'Mitek Systems, Inc.'),
(8, 'MHGC', 'Morgans Hotel Group Co.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`) VALUES
(1, 'aya', '12345', 'aya@yahoo.com'),
(2, 'ali', '567', 'aliali@yahoo.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alarm`
--
ALTER TABLE `alarm`
  ADD CONSTRAINT `alarm_ibfk_1` FOREIGN KEY (`sh_id`) REFERENCES `shares` (`sh_id`),
  ADD CONSTRAINT `alarm_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
