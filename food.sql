-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2019 at 08:50 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

DROP TABLE IF EXISTS `admin_table`;
CREATE TABLE IF NOT EXISTS `admin_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `desc` varchar(2555) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `category`, `pname`, `price`, `desc`, `path`) VALUES
(2, 'breakfast', 'Lunchhhhh', '20044', 'swSDfffff', 'uploads/banner_1400x400px-845x321.jpg'),
(3, 'breakfast', 'dinner', '200', 'wde', 'uploads/food-dinner-lunch-70497.jpg'),
(4, 'brunch', 'dinner', '2300', 'wdsqw', 'uploads/banner_1400x400px-845x321.jpg'),
(5, 'Lunch', 'dinner', '400', 'vhyj', 'uploads/food-dinner-lunch-70497.jpg'),
(6, 'snacks', 'Lunch', '200', 'ytu', 'uploads/dinner.jpg'),
(7, 'dinner', 'Lunch', '400', 'tgrd', 'uploads/back.jpg'),
(8, 'Drinks', 'Lunchhhhh', '1000', 'hdc', 'uploads/639389404.jpg'),
(9, 'Drinks', 'LunchSDAS', '400', 'gdsr', 'uploads/526749337-612x612.jpg'),
(10, 'fastfood', 'Lunch', '1000', 'sywuh', 'uploads/500516612.jpg'),
(11, 'desserts', 'Lunch1', '9786', 'w3yokyuo', 'uploads/639389404.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `rdate` date NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `fname`, `lname`, `rdate`, `mobile`, `email`, `time`) VALUES
(4, 'Varinderjit', 'kaur', '2019-07-27', 9876543210, 'qwerty@y.j', '01:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `password`, `email`, `address`, `contact`, `food`) VALUES
(1, 'abc', '123', 'abc@gmail.com', 'ldh', '', ''),
(2, 'abc', '123', 'abc@gmail.com', 'ludhiana', '', ''),
(3, 'abc', '111', 'abc@gmail.com', 'ludhiana', '', ''),
(4, 'taran', 'tttt', 'taran@gmail.com', 'hhhmmmm', '', ''),
(6, 'hello', 'qwerty', 'hello@k', 'lala', '123', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foodname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `foodname`, `price`, `name`, `email`, `address`, `contact`, `mode`) VALUES
(1, '', '', 'ROHIT', 'abc@gmail.com', 'wedwqd', '312142342134', ''),
(2, '', '', 'ROHIT', 'abc@gmail.com', 'wsq', '432525', ''),
(3, 'Lunchhhhh', '20044', 'ROHIT', 'abc@gmail.com', 'wqsdqw', '432525', ''),
(4, 'Lunchhhhh', '20044', 'suraj', 'abc@gmail.com', 'ewdqw', '432525', 'Cash On Delivery'),
(5, 'dinner', '200', '', '', 'address', '', 'Cash On Delivery');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
