-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2017 at 09:36 PM
-- Server version: 10.0.29-MariaDB-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `fooddata`
--

CREATE TABLE `fooddata` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(64) NOT NULL,
  `foodname` varchar(64) NOT NULL,
  `fertalizer-used` varchar(64) NOT NULL,
  `fertalizer-type` varchar(64) NOT NULL,
  `pesticide-used` varchar(64) NOT NULL,
  `pesticide-interval` varchar(64) NOT NULL,
  `pesticide-type` varchar(64) NOT NULL,
  `irrigation-type` varchar(64) NOT NULL,
  `water-interval` varchar(64) NOT NULL,
  `water-amount` varchar(64) NOT NULL,
  `delivery-method` varchar(64) NOT NULL,
  `delivery-distance` varchar(64) NOT NULL,
  `delivery-waste-perent` varchar(64) NOT NULL,
  `gmo` varchar(64) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooddata`
--
ALTER TABLE `fooddata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fooddata`
--
ALTER TABLE `fooddata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
