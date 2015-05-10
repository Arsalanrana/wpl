-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2015 at 06:01 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `pass` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `fname`, `dob`, `pass`) VALUES
(16, 'Mohammad Sami', 'Saad Usmani', '1993-07-06', 'abbu'),
(17, 'Qazi Shahab', 'Qazi Azam', '1990-12-12', 'qazi'),
(19, 'Tabish', 'Ayan', '1995-01-10', 'yourz');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE IF NOT EXISTS `app` (
  `first` varchar(25) NOT NULL,
  `father` varchar(25) NOT NULL,
  `mobile` int(11) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `time` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`first`, `father`, `mobile`, `dob`, `gender`, `address`, `time`, `email`, `id`, `date`) VALUES
('Mohammad Sami Usmani', 'Saad Usmani', 2147483647, '1993.07.06', 'Male', 'north nazimabad T block', 'Dr. Sami Thursday 08:00-12:00', 'sami.usmani48@gmail.com', 9, '0000-00-00'),
('tabish', 'ayan', 37482, '1234.12.12', 'Male', 'wwww', 'Dr. Arsalan Friday 03:00-06:00', 'samiusiau.com', 15, '0000-00-00'),
('wasif', 'badar', 84756387, '1234.56.78', 'Male', 'qwqasx', 'Dr. Tabish Sunday From 08:00', 'sanu,ysa.,iaa', 16, '0000-00-00'),
('Mohammad Sami Usmani', 'Saad Usmani', 2147483647, '1950.10.31', 'Male', 'north nazimabad T block', 'Dr. Tabish Sunday From 08:00', 'sami.usmani48@gmail.com', 17, '0000-00-00'),
('shahab', 'shoaib', 1901011, '1983.06.04', 'Male', 'skajskjsa', 'Dr. Wasif Wednesday 08:00-12:00', 'abxd', 18, '0000-00-00'),
('Mohammad Sami Usmani', 'Saad Usmani', 2147483647, '1993.07.06', 'Male', 'north nazimabad T block', 'Dr. Arsalan Saturday 08:00-12:00', 'sami.usmani48@gmail.com', 20, '2015.12.12');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE IF NOT EXISTS `doc` (
  `day` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `special` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`day`, `time`, `special`, `id`) VALUES
('Mondays And Thursdays', 'On Monday The Time Is: 03:00 PM Till 06:00 PM (PST)\r\nOn Thursday The Time Is: 08:00 AM Till 12:00 PM (PST)', 'Child And Adolescent Psychiatry And Psychotherapy', 1),
('Tuesdays And Wednesdays', 'On Tuesday The Time Is: 03:00 PM Till 06:00 PM (PST)\r\nOn Wednesday The Time Is: 08:00 AM Till 12:00 PM (PST)', 'Physical And Rehabilitation Medicine', 2),
('Fridays And Saturdays', 'On Friday The Time Is: 03:00 PM Till 06:00 PM (PST)\r\nOn Saturday The Time Is: 08:00 AM Till 12:00 PM (PST)', 'Plastic , Reconstruction And Aesthetic Surgery', 3),
('Sunday (All Day)', 'The Time Is  From 08:00 AM (PST)', 'Paediatric Gastroenterology, Hepatology And Nutrition', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
