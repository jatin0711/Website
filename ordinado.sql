-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2018 at 12:05 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ordinado`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` char(10) DEFAULT NULL,
  `year` int(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `college_s` varchar(200) DEFAULT NULL,
  `degree` varchar(200) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `number`, `year`, `city`, `college`, `college_s`, `degree`, `comments`, `create_date`) VALUES
(1, 'Yogesh Jakhar', 'yogeshjakhar259@gmail.com', '9079662467', 3, 'Bikaner', 'bkbiet', 'sdcjksdc ndmv dfhuvbdfv fjv fehv ', 'vnvhjf vdfbvhfbj fvb', 'vf fgvgtr', '2018-09-25 17:09:13'),
(2, 'Yogesh Jakhar', 'yogeshjakhar259@gmail.com', '9079662467', 2, 'Bikaner', 'bkbiet', 'sdcjksdc ndmv dfhuvbdfv fjv fehv ', 'vnvhjf vdfbvhfbj fvb', 'rg r hryh ', '2018-09-25 17:12:06'),
(3, 'Yogesh Jakhar', 'yogeshjakhar259@gmail.com', '9079662467', 2, 'Bikaner', 'bkbiet', 'sdcjksdc ndmv dfhuvbdfv fjv fehv ', 'vnvhjf vdfbvhfbj fvb', 'rg r hryh ', '2018-09-25 17:12:47');
