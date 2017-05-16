-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2017 at 6:04 PM
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
-- Table structure for table `birds`
--

CREATE TABLE IF NOT EXISTS `birds` (
  `bird_id` mediumint(4) unsigned NOT NULL AUTO_INCREMENT,
  `bird_name` tinytext NOT NULL,
  `rarity` tinytext NOT NULL,
  `best_time` tinytext NOT NULL,
  PRIMARY KEY (`bird_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`bird_id`, `bird_name`, `rarity`, `best_time`) VALUES
(1, 'Barn Swallow', 'Common', 'Summer'),
(2, 'Mallard', 'Rare', 'Any time'),
(3, 'Blue-winged Teal', 'Rare', 'Spring'),
(4, 'Northern Pintail', 'Common', 'Spring'),
(5, 'Green-winged Teal', 'Common', 'Spring'),
(6, 'Brown Pelican', 'Rare', 'Winter'),
(7, 'Snowy Egret', 'Common', 'Any time'),
(8, 'American Crow', 'Common', 'Any time');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
