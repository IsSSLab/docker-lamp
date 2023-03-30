-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2022 at 12:27 PM
-- Server version: 10.1.48-MariaDB-0+deb9u2
-- PHP Version: 5.6.40-0+deb8u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Participant`
--

CREATE TABLE `Participant` (
  `serial` double NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `last_seen_page_index` int NOT NULL,
  `pages` varchar(2000),
  `user_agent` varchar(300),
  `completion_code` varchar(30),
  `last_access_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `first_access_at` datetime NOT NULL,
  PRIMARY KEY (serial)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
