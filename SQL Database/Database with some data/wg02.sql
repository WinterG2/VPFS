-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2023 at 10:03 PM
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
-- Table structure for table `1099207183`
--

DROP TABLE IF EXISTS `1099207183`;
CREATE TABLE IF NOT EXISTS `1099207183` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `organization_name` varchar(200) DEFAULT NULL,
  `volunteer_hrs` int DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `points` int DEFAULT NULL,
  `google_map_link` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `instructor_name` varchar(200) DEFAULT NULL,
  `instructor_phone` varchar(200) DEFAULT NULL,
  `instructor_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`title`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1099207183`
--

INSERT INTO `1099207183` (`id`, `title`, `organization_name`, `volunteer_hrs`, `status`, `city`, `address`, `points`, `google_map_link`, `start_date`, `end_date`, `start_time`, `end_time`, `instructor_name`, `instructor_phone`, `instructor_email`) VALUES
(1, 'طلاء الجدران', 'كلية الحاسبات', 12, 'مكتملة', 'جدة', 'السيلمانية', 24, 'google.com', '2023-06-17', '2023-06-20', '08:00:00', '11:00:00', 'وجدي الغامدي', '056373823', 'wajdi@gmail.com'),
(2, 'تنظيف الشاطئ', 'أرامكو السعودية', 6, 'فعالة', 'جدة', 'أبحر', 12, 'google.com', '2023-06-27', '2023-06-29', '15:00:00', '18:00:00', 'عادل خديدوس', '05738392', 'adil@hotmail.com'),
(3, 'الاعتناء بالمرضى', 'أرامكو السعودية', 4, 'فعالة', 'جدة', 'المستشقى الجامعي', 8, 'google.com', '2023-06-28', '2023-06-29', '09:00:00', '13:00:00', 'محمد منور', '056738283', 'monower@gmail.com'),
(4, 'المساعدة في المساجد', 'كلية الحاسبات', 10, 'فعالة', 'جدة', 'السلامة', 20, 'google.com', '2023-06-18', '2023-06-20', '14:00:00', '19:00:00', 'عمر باطرفي', '054838273', 'omar@gmailc.com');

-- --------------------------------------------------------

--
-- Table structure for table `1110032404`
--

DROP TABLE IF EXISTS `1110032404`;
CREATE TABLE IF NOT EXISTS `1110032404` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `organization_name` varchar(200) DEFAULT NULL,
  `volunteer_hrs` int DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `points` int DEFAULT NULL,
  `google_map_link` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `instructor_name` varchar(200) DEFAULT NULL,
  `instructor_phone` varchar(200) DEFAULT NULL,
  `instructor_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`title`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1110032404`
--

INSERT INTO `1110032404` (`id`, `title`, `organization_name`, `volunteer_hrs`, `status`, `city`, `address`, `points`, `google_map_link`, `start_date`, `end_date`, `start_time`, `end_time`, `instructor_name`, `instructor_phone`, `instructor_email`) VALUES
(1, 'دروس للإبتدائية', 'كلية الحاسبات', 4, 'مكتملة', 'جدة', 'الصفا', 8, 'google.com', '2023-06-20', '2023-06-21', '08:00:00', '10:00:00', 'فارس كاتب', '0548383534', 'faris@gmail.com'),
(2, 'طلاء الجدران', 'كلية الحاسبات', 12, 'مكتملة', 'جدة', 'السيلمانية', 24, 'google.com', '2023-06-17', '2023-06-20', '08:00:00', '11:00:00', 'وجدي الغامدي', '056373823', 'wajdi@gmail.com'),
(3, 'المساعدة في المساجد', 'كلية الحاسبات', 10, 'فعالة', 'جدة', 'السلامة', 20, 'google.com', '2023-06-18', '2023-06-20', '14:00:00', '19:00:00', 'عمر باطرفي', '054838273', 'omar@gmailc.com'),
(4, 'الاعتناء بالايتام', 'أرامكو السعودية', 36, 'فعالة', 'مكة', 'حي الخالدية', 72, 'google.com', '2023-06-18', '2023-06-24', '16:00:00', '22:00:00', 'محمد الحداد', '055798394', 'mohammed_hadad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `1127918587`
--

DROP TABLE IF EXISTS `1127918587`;
CREATE TABLE IF NOT EXISTS `1127918587` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `organization_name` varchar(200) DEFAULT NULL,
  `volunteer_hrs` int DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `points` int DEFAULT NULL,
  `google_map_link` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `instructor_name` varchar(200) DEFAULT NULL,
  `instructor_phone` varchar(200) DEFAULT NULL,
  `instructor_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`title`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1127918587`
--

INSERT INTO `1127918587` (`id`, `title`, `organization_name`, `volunteer_hrs`, `status`, `city`, `address`, `points`, `google_map_link`, `start_date`, `end_date`, `start_time`, `end_time`, `instructor_name`, `instructor_phone`, `instructor_email`) VALUES
(1, 'تنظيف الشاطئ', 'أرامكو السعودية', 6, 'فعالة', 'جدة', 'أبحر', 12, 'google.com', '2023-06-27', '2023-06-29', '15:00:00', '18:00:00', 'عادل خديدوس', '05738392', 'adil@hotmail.com'),
(2, 'الاعتناء بالمرضى', 'أرامكو السعودية', 4, 'فعالة', 'جدة', 'المستشقى الجامعي', 8, 'google.com', '2023-06-28', '2023-06-29', '09:00:00', '13:00:00', 'محمد منور', '056738283', 'monower@gmail.com'),
(3, 'طلاء الجدران', 'كلية الحاسبات', 12, 'مكتملة', 'جدة', 'السيلمانية', 24, 'google.com', '2023-06-17', '2023-06-20', '08:00:00', '11:00:00', 'وجدي الغامدي', '056373823', 'wajdi@gmail.com');

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

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`org_name`, `title`, `image`, `city`, `address`, `google_map_link`, `description`, `number_required`, `number_current`, `start_date`, `end_date`, `start_time`, `end_time`, `instructor_name`, `instructor_phone`, `instructor_email`, `volunteer_hrs`, `points`, `status`) VALUES
('كلية الحاسبات', 'طلاء الجدران', 'uploaded_files/paint.jpg', 'جدة', 'السيلمانية', 'google.com', 'طلاء بعض جدران المدارس المكتوب عليها عبارات سيئة', 30, 3, '2023-06-17', '2023-06-20', '08:00:00', '11:00:00', 'وجدي الغامدي', '056373823', 'wajdi@gmail.com', 12, 24, 'فعالة'),
('كلية الحاسبات', 'دروس للإبتدائية', 'uploaded_files/طلاب.jpg', 'جدة', 'الصفا', 'google.com', 'دروس تعليمية لطلبة المرحلة الإبتدائية', 7, 1, '2023-06-20', '2023-06-21', '08:00:00', '10:00:00', 'فارس كاتب', '0548383534', 'faris@gmail.com', 4, 8, 'فعالة'),
('أرامكو السعودية', 'تنظيف الشاطئ', 'uploaded_files/Jeddah-beach.jpg', 'جدة', 'أبحر', 'google.com', 'تنظيف شاطئ جدة من المخلفات', 40, 2, '2023-06-27', '2023-06-29', '15:00:00', '18:00:00', 'عادل خديدوس', '05738392', 'adil@hotmail.com', 6, 12, 'فعالة'),
('كلية الحاسبات', 'ورش عمل', 'uploaded_files/ورش.png', 'جدة', 'حي السيلمانية', 'google.com', 'تنظيم ورش عمل في جامعة الملك عبدالعزيز', 16, 0, '2023-06-23', '2023-06-25', '17:00:00', '22:00:00', 'ريان موصلي', '053827839', 'ryan@gmail.com', 10, 20, 'فعالة'),
('أرامكو السعودية', 'الاعتناء بالمرضى', 'uploaded_files/patints.jpg', 'جدة', 'المستشقى الجامعي', 'google.com', 'الاهتمام بمرضى المستشفى الجامعي في جامعة الملم عبدالعزيز', 22, 2, '2023-06-28', '2023-06-29', '09:00:00', '13:00:00', 'محمد منور', '056738283', 'monower@gmail.com', 4, 8, 'فعالة'),
('أرامكو السعودية', 'الاعتناء بالايتام', 'uploaded_files/ايتام.jpg', 'مكة', 'حي الخالدية', 'google.com', 'الاعتناء بحاجيات الايتام وتعليمهم دروس قيمة', 15, 1, '2023-06-18', '2023-06-24', '16:00:00', '22:00:00', 'محمد الحداد', '055798394', 'mohammed_hadad@gmail.com', 36, 72, 'فعالة'),
('كلية الحاسبات', 'المساعدة في المساجد', 'uploaded_files/mosque.jpg', 'جدة', 'السلامة', 'google.com', 'المساعدة في اعمال المسجد وخدمة المسلمين والمحتاجين', 12, 2, '2023-06-18', '2023-06-20', '14:00:00', '19:00:00', 'عمر باطرفي', '054838273', 'omar@gmailc.com', 10, 20, 'فعالة');

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

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`name`, `email`, `password`, `organization_number`, `city`, `neighborhood`, `organization_type`, `manager_name`, `manager_phone`, `event_manager_name`, `event_manager_email`, `event_manager_phone`, `address`, `zipcode`) VALUES
('أرامكو السعودية', 'aramco@gmail.com', '$2y$10$4RPefJfEd2ZyxhQEwWTmB.qTeOUQkoe5AQFBLLEkyrp6rNTNQ4T0G', '01234555', 'جدة', 'ولي العهد', 'خاص', 'اياد كاتب', '05874934', 'فارس كاتب', 'manager1@gmail.com', '057489394', 'ذهبان', '87445'),
('كلية الحاسبات', 'fcit@gmail.com', '$2y$10$V4jQzy6bx52riGsN5t0Are7eabnD03DtOBCmrAprSPwdp0G02oXoq', '0126873', 'جدة', 'السيلمانية', 'حكومي', 'اياد كاتب', '0537833429', 'فارس كاتب', 'faris@hotmail.com', '05383872', 'شارع الكليات', '73882');

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

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`name`, `email`, `password`, `school_number`, `city`, `neighborhood`, `address`, `zipcode`, `dean_name`, `dean_email`, `manager_name`, `manager_email`, `manager_phone`) VALUES
('دار الفكر', 'daralfikr@hotmail.com', '$2y$10$EQfHJVjAmq2Dux2H.1haqOLnimUV5lkuw4SOkuugLqSS4hOSehLr2', '0567744334', 'جدة', 'الحرزات', 'حي الخالدية', '77321', 'محمد خالد ', 'mohamed@hotmail.com', 'عبدالله مؤيد', 'moaed@hotmail.com', '056784212'),
('الابداع الاهلية', 'ebdaa@gmail.com', '$2y$10$9jlhsrGQ90Tez7h2q9s6muHRe/kDw72WtDmI0.wMzHbLvc8H2sk0m', '0128798', 'مكة', 'الشرفية', 'مكة', '35325', 'محمد خالد ', 'mohame34d@hotmail.com', 'مؤيد خالد', 'moa12ed@hotmail.com', '054543534');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `sname`, `lname`, `email`, `nationalID`, `password`, `sex_type`, `date`, `phone`, `city`, `school_name`, `school_level`, `volunteer_hrs`, `points`, `gfname`, `relationship`, `gphone`) VALUES
('ريان', 'عبدالحليم', 'الشهري', 'ralshehri0244@stu.kau.edu.sa', 1127918587, '$2y$10$nhZtjBmjeh5QJepIY4/oJ.dSwJGejpMK.cwgncIgnNhjtdt981IQm', 'ذكر', '2000-01-01', '0567790887', 'جدة', 'دار الفكر', 'ثالث ثانوي', 12, 24, 'عبدالحليم الشهري', 'أب', '054566534'),
('باسم', 'أحمد', 'باحطاب', 'basem.bahattab@gmail.com', 1110032404, '$2y$10$pOnurRH7FErvud5LCDE8bu4bC/DL2ePyL.j7jf/oiwo8LjOY6TSkS', 'ذكر', '2000-03-28', '0574638385', 'جدة', 'دار الفكر', 'أول ثانوي', 16, 32, 'أحمد باحطاب', 'أب', '0547738493'),
('عبدالله', 'خالد', 'بانعمة', 'abanaemah@stu.kau.edu.sa', 1099207183, '$2y$10$N/ZbCtVXxWZYPrOzzav8dOPwBirW/Hom1PqzoSPdiYDyeh3VEg5xW', 'ذكر', '1998-05-07', '056786446', 'مكة', 'دار الفكر', 'ثالث ثانوي', 12, 24, 'خالد بانعمة', 'أب', '05738372');

-- --------------------------------------------------------

--
-- Table structure for table `أرامكو السعودية`
--

DROP TABLE IF EXISTS `أرامكو السعودية`;
CREATE TABLE IF NOT EXISTS `أرامكو السعودية` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `city` varchar(200) DEFAULT NULL,
  `volunteer_hrs` int DEFAULT NULL,
  `points` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `instructor_name` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`title`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `أرامكو السعودية`
--

INSERT INTO `أرامكو السعودية` (`id`, `title`, `city`, `volunteer_hrs`, `points`, `start_date`, `end_date`, `instructor_name`, `status`) VALUES
(1, 'تنظيف الشاطئ', 'جدة', 6, 12, '2023-06-27', '2023-06-29', 'عادل خديدوس', 'فعالة'),
(2, 'الاعتناء بالمرضى', 'جدة', 4, 8, '2023-06-28', '2023-06-29', 'محمد منور', 'فعالة'),
(3, 'الاعتناء بالايتام', 'مكة', 36, 72, '2023-06-18', '2023-06-24', 'محمد الحداد', 'فعالة');

-- --------------------------------------------------------

--
-- Table structure for table `الابداع الاهلية`
--

DROP TABLE IF EXISTS `الابداع الاهلية`;
CREATE TABLE IF NOT EXISTS `الابداع الاهلية` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `volunteer_hrs` int DEFAULT NULL,
  `points` int DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `الاعتناء بالايتام`
--

DROP TABLE IF EXISTS `الاعتناء بالايتام`;
CREATE TABLE IF NOT EXISTS `الاعتناء بالايتام` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gphone` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `الاعتناء بالايتام`
--

INSERT INTO `الاعتناء بالايتام` (`id`, `nationalID`, `fname`, `sname`, `lname`, `email`, `phone`, `gphone`, `school_name`, `school_level`, `status`) VALUES
(1, 1110032404, 'باسم', 'أحمد', 'باحطاب', NULL, '0574638385', '0547738493', 'دار الفكر', 'أول ثانوي', 'فعالة');

-- --------------------------------------------------------

--
-- Table structure for table `الاعتناء بالمرضى`
--

DROP TABLE IF EXISTS `الاعتناء بالمرضى`;
CREATE TABLE IF NOT EXISTS `الاعتناء بالمرضى` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gphone` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `الاعتناء بالمرضى`
--

INSERT INTO `الاعتناء بالمرضى` (`id`, `nationalID`, `fname`, `sname`, `lname`, `email`, `phone`, `gphone`, `school_name`, `school_level`, `status`) VALUES
(1, 1127918587, 'ريان', 'عبدالحليم', 'الشهري', NULL, '0567790887', '054566534', 'دار الفكر', 'ثالث ثانوي', 'فعالة'),
(2, 1099207183, 'عبدالله', 'خالد', 'بانعمة', NULL, '056786446', '05738372', 'دار الفكر', 'ثالث ثانوي', 'فعالة');

-- --------------------------------------------------------

--
-- Table structure for table `المساعدة في المساجد`
--

DROP TABLE IF EXISTS `المساعدة في المساجد`;
CREATE TABLE IF NOT EXISTS `المساعدة في المساجد` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gphone` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `المساعدة في المساجد`
--

INSERT INTO `المساعدة في المساجد` (`id`, `nationalID`, `fname`, `sname`, `lname`, `email`, `phone`, `gphone`, `school_name`, `school_level`, `status`) VALUES
(1, 1110032404, 'باسم', 'أحمد', 'باحطاب', NULL, '0574638385', '0547738493', 'دار الفكر', 'أول ثانوي', 'فعالة'),
(2, 1099207183, 'عبدالله', 'خالد', 'بانعمة', NULL, '056786446', '05738372', 'دار الفكر', 'ثالث ثانوي', 'فعالة');

-- --------------------------------------------------------

--
-- Table structure for table `تنظيف الشاطئ`
--

DROP TABLE IF EXISTS `تنظيف الشاطئ`;
CREATE TABLE IF NOT EXISTS `تنظيف الشاطئ` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gphone` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `تنظيف الشاطئ`
--

INSERT INTO `تنظيف الشاطئ` (`id`, `nationalID`, `fname`, `sname`, `lname`, `email`, `phone`, `gphone`, `school_name`, `school_level`, `status`) VALUES
(1, 1127918587, 'ريان', 'عبدالحليم', 'الشهري', NULL, '0567790887', '054566534', 'دار الفكر', 'ثالث ثانوي', 'فعالة'),
(2, 1099207183, 'عبدالله', 'خالد', 'بانعمة', NULL, '056786446', '05738372', 'دار الفكر', 'ثالث ثانوي', 'فعالة');

-- --------------------------------------------------------

--
-- Table structure for table `دار الفكر`
--

DROP TABLE IF EXISTS `دار الفكر`;
CREATE TABLE IF NOT EXISTS `دار الفكر` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `volunteer_hrs` int DEFAULT NULL,
  `points` int DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `دار الفكر`
--

INSERT INTO `دار الفكر` (`id`, `nationalID`, `fname`, `sname`, `lname`, `email`, `phone`, `school_level`, `volunteer_hrs`, `points`, `status`) VALUES
(1, 1127918587, 'ريان', 'عبدالحليم', 'الشهري', 'ralshehri0244@stu.kau.edu.sa', '0567790887', 'ثالث ثانوي', 12, 24, 'فعال'),
(2, 1110032404, 'باسم', 'أحمد', 'باحطاب', 'basem.bahattab@gmail.com', '0574638385', 'أول ثانوي', 16, 32, 'فعال'),
(3, 1099207183, 'عبدالله', 'خالد', 'بانعمة', 'abanaemah@stu.kau.edu.sa', '056786446', 'ثالث ثانوي', 12, 24, 'فعال');

-- --------------------------------------------------------

--
-- Table structure for table `دروس للإبتدائية`
--

DROP TABLE IF EXISTS `دروس للإبتدائية`;
CREATE TABLE IF NOT EXISTS `دروس للإبتدائية` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gphone` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `دروس للإبتدائية`
--

INSERT INTO `دروس للإبتدائية` (`id`, `nationalID`, `fname`, `sname`, `lname`, `email`, `phone`, `gphone`, `school_name`, `school_level`, `status`) VALUES
(1, 1110032404, 'باسم', 'أحمد', 'باحطاب', NULL, '0574638385', '0547738493', 'دار الفكر', 'أول ثانوي', 'مكتملة');

-- --------------------------------------------------------

--
-- Table structure for table `طلاء الجدران`
--

DROP TABLE IF EXISTS `طلاء الجدران`;
CREATE TABLE IF NOT EXISTS `طلاء الجدران` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gphone` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `طلاء الجدران`
--

INSERT INTO `طلاء الجدران` (`id`, `nationalID`, `fname`, `sname`, `lname`, `email`, `phone`, `gphone`, `school_name`, `school_level`, `status`) VALUES
(1, 1127918587, 'ريان', 'عبدالحليم', 'الشهري', NULL, '0567790887', '054566534', 'دار الفكر', 'ثالث ثانوي', 'مكتملة'),
(2, 1110032404, 'باسم', 'أحمد', 'باحطاب', NULL, '0574638385', '0547738493', 'دار الفكر', 'أول ثانوي', 'مكتملة'),
(3, 1099207183, 'عبدالله', 'خالد', 'بانعمة', NULL, '056786446', '05738372', 'دار الفكر', 'ثالث ثانوي', 'مكتملة');

-- --------------------------------------------------------

--
-- Table structure for table `كلية الحاسبات`
--

DROP TABLE IF EXISTS `كلية الحاسبات`;
CREATE TABLE IF NOT EXISTS `كلية الحاسبات` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `city` varchar(200) DEFAULT NULL,
  `volunteer_hrs` int DEFAULT NULL,
  `points` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `instructor_name` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`title`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `كلية الحاسبات`
--

INSERT INTO `كلية الحاسبات` (`id`, `title`, `city`, `volunteer_hrs`, `points`, `start_date`, `end_date`, `instructor_name`, `status`) VALUES
(1, 'طلاء الجدران', 'جدة', 12, 24, '2023-06-17', '2023-06-20', 'وجدي الغامدي', 'مكتملة'),
(2, 'دروس للإبتدائية', 'جدة', 4, 8, '2023-06-20', '2023-06-21', 'فارس كاتب', 'مكتملة'),
(3, 'ورش عمل', 'جدة', 10, 20, '2023-06-23', '2023-06-25', 'ريان موصلي', 'فعالة'),
(4, 'المساعدة في المساجد', 'جدة', 10, 20, '2023-06-18', '2023-06-20', 'عمر باطرفي', 'فعالة');

-- --------------------------------------------------------

--
-- Table structure for table `ورش عمل`
--

DROP TABLE IF EXISTS `ورش عمل`;
CREATE TABLE IF NOT EXISTS `ورش عمل` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nationalID` int NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `sname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gphone` varchar(200) DEFAULT NULL,
  `school_name` varchar(200) DEFAULT NULL,
  `school_level` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nationalID`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
