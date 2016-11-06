-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 02:30 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voice`
--

-- --------------------------------------------------------

--
-- Table structure for table `voice2016`
--

CREATE TABLE IF NOT EXISTS `voice2016` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `hall` varchar(20) NOT NULL,
  `block` varchar(10) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `room` int(11) NOT NULL,
  `oldcontact` int(11) NOT NULL,
  `newcontact` int(11) NOT NULL,
  `parentcontact` int(11) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `jeeroll` int(11) NOT NULL,
  `jeerank` int(11) NOT NULL,
  `eaa` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `particulars` text NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `payment` int(11) NOT NULL,
  `registeredby` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voice2016`
--
ALTER TABLE `voice2016`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voice2016`
--
ALTER TABLE `voice2016`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
