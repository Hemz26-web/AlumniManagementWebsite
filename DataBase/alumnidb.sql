-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(10) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `course_desc` varchar(500) NOT NULL,
  `course_duration` varchar(3) NOT NULL,
  `course_eligibility` varchar(20) NOT NULL,
  `course_fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `course_desc`, `course_duration`, `course_eligibility`, `course_fees`) VALUES
(1, 'BCA', 'BCA', '4', '12th pass', 25000),
(3, 'BBA', 'Bachlor of Business Administrator', '4', '12th Pass', 25000),
(5, 'bcom', 'fhfbn', '4', '12th Pass', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(30) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_location` varchar(30) NOT NULL,
  `event_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_date`, `event_time`, `event_location`, `event_desc`) VALUES
(5, 'dfszdcsdz', '2024-10-05', '13:23:00', 'gdfrgvrfg', 'sefcszdfvsdzfvds'),
(7, 'svgsdfvgf', '2024-10-04', '13:24:00', 'gdfrgvrfg', 'vgsxfvgsxrfgv');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `email`, `user_name`, `feedback`) VALUES
(1, 'typroject1576@gmail.com', 'Hemz26', 'Hello'),
(2, 'khk@gmail.com', 'priyanka', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(30) NOT NULL,
  `img` varchar(500) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `img`, `userName`, `password`, `firstName`, `lastName`, `dob`, `city`, `state`, `country`, `email`, `phno`) VALUES
(1, '', 'Admin', 'Mjk@1234', 'Administrator', 'Admin', '0000-00-00', '', 'Gujarat', 'India', 'admin@gmail.com', 1234567890),
(2, '', 'Hemz30', 'Hemu@3012', 'Hemadri', 'Nimavat', '2024-10-03', 'Rajkot', 'Gujarat', 'India', 'rekha@gmail.com', 123143214),
(3, '', 'Kisu054', 'Kisu@1234', 'Krishna', 'Joshi', '2004-10-05', 'Rajkot', 'Gujarat', 'India', 'kj8428389@gmail.com', 1234567890),
(6, 'Image/default_UP.png', 'Hemz2633', 'Hemu@1234', 'Hemadri', 'Nimavat', '2005-01-26', 'Rajkot', 'Gujarat', 'India', 'typroject1576@gmail.com', 123143214),
(7, 'Image/default_UP.png', 'Hemz30', 'Kisu@0510', 'Hemadri', 'Nimavat', '0002-05-02', 'Rajkot', 'Gujarat', 'India', 'uy@gmail.com', 1243242345),
(8, 'Image/default_UP.png', 'Hemz30', 'H@vfd34543', 'Hemadri', 'Nimavat', '2024-10-24', 'Rajkot', 'Gujarat', 'India', 'parmarpriyanshi@12gamil.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
