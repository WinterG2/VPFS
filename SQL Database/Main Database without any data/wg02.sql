-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2023 at 03:18 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wg02`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `org_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map_link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_required` int NOT NULL,
  `number_current` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `instructor_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volunteer_hrs` int NOT NULL,
  `points` int NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
CREATE TABLE IF NOT EXISTS `organization` (
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neighborhood` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_manager_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_manager_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_manager_phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `organization_number` (`organization_number`),
  UNIQUE KEY `zipcode` (`zipcode`),
  UNIQUE KEY `event_manager_phone` (`event_manager_phone`),
  UNIQUE KEY `event_manager_email` (`event_manager_email`),
  UNIQUE KEY `manager_phone` (`manager_phone`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neighborhood` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dean_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dean_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `school_number` (`school_number`),
  UNIQUE KEY `zipcode` (`zipcode`),
  UNIQUE KEY `dean_email` (`dean_email`),
  UNIQUE KEY `manager_email` (`manager_email`),
  UNIQUE KEY `manager_phone` (`manager_phone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `fname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalID` int NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_level` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volunteer_hrs` int NOT NULL,
  `points` int NOT NULL,
  `gfname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gphone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
