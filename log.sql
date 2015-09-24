-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2013 at 03:26 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `log`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `Id` int(250) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `File` varchar(250) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Mail` (`Mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `Fname`, `Lname`, `City`, `Mail`, `Password`, `File`, `date`) VALUES
(21, 'aaa', 'aaa', 'aaa', 'a@gmail.comhgh', '123456', 'Alien 1.bmp', '2013-06-17'),
(22, 'bbbb', 'bbbb', 'bbbb', 'b@gmail.com', '123456', 'Alien 2.bmp', '2013-06-17'),
(23, 'c', 'c', 'fff', 'cd@gmail.com', '123456', 'Balloon.bmp', '2013-06-17'),
(24, 'd', 'd', 'd', 'de@gmail.com', '123456', 'Bear.bmp', '2013-06-17'),
(25, 'e', 'e', 'e', 'ef@gmail.com', '123456', 'Fireworks 1.bmp', '2013-06-17'),
(26, 'f', 'f', 'f', 'fg@gmail.com', '123456', 'Monkey 2.bmp', '2013-06-17'),
(27, 'h', 'h', 'h', 'hi@gmail.com', '123456', 'Owl.bmp', '2013-06-17'),
(28, 'm', 'm', 'm', 'mn@gmail.com', '123456', 'Sun.bmp', '2013-06-17'),
(29, 'k', 'k', 'k', 'kl@gmail.com', '123456', 'Penguin.bmp', '2013-06-17'),
(30, 'x', 'x', 'x', 'x@gmail.com', '123456', 'Hitchcock.bmp', '2013-06-17'),
(31, 'g', 'g', 'g', 'gz@gmail.com', '123456', 'Earth.bmp', '2013-06-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
