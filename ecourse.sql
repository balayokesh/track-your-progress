-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2020 at 04:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminun` tinytext NOT NULL,
  `adminmailid` tinytext NOT NULL,
  `adminpwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminun`, `adminmailid`, `adminpwd`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `facultyid` int(11) NOT NULL,
  `facultyun` tinytext NOT NULL,
  `facultymailid` tinytext NOT NULL,
  `facultypwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`facultyid`, `facultyun`, `facultymailid`, `facultypwd`) VALUES
(1, 'faculty', 'faculty@gmail.com', 'faculty'),
(11, 'faculty2', 'faculty2@gmail.com', 'faculty2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentid` int(11) NOT NULL,
  `studentun` tinytext NOT NULL,
  `studentmailid` tinytext NOT NULL,
  `studentpwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `studentun`, `studentmailid`, `studentpwd`) VALUES
(1, 'student', 'student@gmail.com', 'student'),
(2, 'student2', 'student2@gmail.com', 'student2'),
(3, 'student3', 'student3@gmail.com', 'student3');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `facultyname` varchar(255) DEFAULT NULL,
  `assignment` longtext DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `postedtime` datetime DEFAULT current_timestamp(),
  `completed` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `facultyname`, `assignment`, `deadline`, `postedtime`, `completed`) VALUES
(1, 'faculty', 'Write 1 to 5 tables and submit it in this form forms.gle ... ', '2020-09-12 20:38:00', '2020-10-18 18:39:06', NULL),
(2, 'faculty', 'Write assignment and submit itn in form florms..', '2020-10-29 18:41:00', '2020-10-18 18:41:16', NULL),
(3, 'faculty', 'Write English comprehension', '2020-09-24 18:43:00', '2020-10-18 18:43:10', NULL),
(5, 'faculty', 'Write 1 to 15 tables and submit it in this form forms.gle ... ', '2020-10-29 19:26:00', '2020-10-18 19:25:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`facultyid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `facultyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
