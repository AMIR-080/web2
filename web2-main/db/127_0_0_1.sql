-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2026 at 08:12 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--
CREATE DATABASE IF NOT EXISTS `web` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `web`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comm` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comm`) VALUES
(8, 'aaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `heavy`
--

DROP TABLE IF EXISTS `heavy`;
CREATE TABLE IF NOT EXISTS `heavy` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `firstwin` varchar(5) NOT NULL,
  `record` varchar(50) NOT NULL,
  `wins` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `company` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `heavy`
--

INSERT INTO `heavy` (`id`, `name`, `firstwin`, `record`, `wins`, `country`, `company`) VALUES
(1, 'Jack Johnson', '1908', '71-11-10', '7 Years', 'US', 'WHT'),
(2, 'Joe Louis', '1937', '66-3', '12 Years', 'US', 'WBA/UD'),
(3, 'Rocky Marciano', '1952', '49-0', '3 Years', 'US', 'Undisputed'),
(4, 'Sonny Liston', '1962', '50-4', '2 Years', 'US', 'WBA/WBC'),
(5, 'Muhammad Ali', '1964', '56-5', '9 Years', 'US', 'WBA/WBC'),
(6, 'Joe Frazier', '1970', '32-4-1', '3 Years', 'US', 'WBA/WBC'),
(7, 'George Foreman', '1973', '76-5', '3 Years', 'US', 'WBA/WBC'),
(8, 'Larry Holmes', '1978', '69-6', '7 Years', 'US', 'WBC/IBF'),
(9, 'Mike Tyson', '1986', '50-6', '4 Years', 'US', 'WBC/WBA/IBF'),
(10, 'Evander Holyfield', '1990', '44-10-2', '4 Years', 'US', 'WBA/WBC/IBF'),
(11, 'Lennox Lewis', '1992', '41-2-1', '8 Years', 'GB', 'WBC/IBF/WBA'),
(12, 'Wladimir Klitschko', '2006', '64-5', '9 Years', 'UA', 'IBF/WBA/WBO'),
(13, 'Tyson Fury', '2015', '34-0-1', '2 Eras', 'GB', 'WBA/WBO/WBC'),
(14, 'Anthony Joshua', '2016', '27-3', '5 Years', 'GB', 'WBA/IBF/WBO'),
(15, 'Deontay Wilder', '2015', '43-3-1', '5 Years', 'US', 'WBC'),
(16, 'Oleksandr Usyk', '2021', '22-0', '5 Years', 'UA', 'WBA/WBO/IBF');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `name`, `user`, `email`, `pass`, `admin`) VALUES
(1, 'amirmohamad', 'amir12', 'mohamady1388888@gmail.com', '1234', 0),
(2, 'admin', 'admin', 'mohamady1388888@gmail.com', '12345', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
