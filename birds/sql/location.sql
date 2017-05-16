-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2017 at 6:18 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `birdsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` mediumint(3) unsigned NOT NULL AUTO_INCREMENT,
  `location` tinytext NOT NULL,
  `location_type` tinytext NOT NULL,
  `bird_id` mediumint(4) unsigned NOT NULL,
  PRIMARY KEY (`location_id`),
  KEY `bird_id` (`bird_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location`, `location_type`, `bird_id`) VALUES
(1, 'Upper Newport', 'Ponds', 6),
(2, 'Lower Newport', 'Bay', 2),
(3, 'Newport Coastal', 'Streams', 3),
(4, 'Sand Canyon', 'Creek', 1),
(5, 'Laguna Canyon', 'Wash', 5),
(6, 'Newport Bay', 'Watershed', 7),
(7, 'Peters Canyon', 'Wash', 8),
(8, 'Santa Ana', 'Channel', 5),
(9, 'Bonita Canyon', 'Creek', 4),
(10, 'San Diego', 'Creek', 3),
(11, 'Bee Canyon', 'Wash', 8);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`bird_id`) REFERENCES `birds` (`bird_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
