-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 03:07 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

-- Table structure for table `courseregistered`
--

CREATE TABLE `courseregistered` (
  `studentid` int(11) NOT NULL,
  `courseId` varchar(30) NOT NULL,
  `courseName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseregistered`
--

INSERT INTO `courseregistered` (`studentid`, `courseId`, `courseName`) VALUES
(1, 'CS111', 'Computer Programming'),
(1, 'CS222', 'Data Structure and Algorithms'),
(3, 'CS111', 'Computer Programming'),
(3, 'CS311', 'Operating System'),
(1, 'CS311', 'Operating System');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courseId` varchar(30) NOT NULL,
  `courseName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseId`, `courseName`) VALUES
(1, 'CS111', 'Computer Programming'),
(2, 'CS222', 'Data Structure and Algorithms'),
(3, 'CS311', 'Operating System');

-- --------------------------------------------------------

--
-- Table structure for table `cs111`
--

CREATE TABLE `cs111` (
  `Date` date NOT NULL,
  `singh.8` int(11) NOT NULL,
  `kohli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyId` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyId`, `username`, `password`, `FirstName`, `LastName`, `Email`) VALUES
(1, 'chicha', '12345', 'Chiranjoy', 'Chattopadhyay', 'chicha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `facultycourse`
--

CREATE TABLE `facultycourse` (
  `facultyId` int(11) NOT NULL,
  `courseId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultycourse`
--

INSERT INTO `facultycourse` (`facultyId`, `courseId`) VALUES
(1, 'CS111'),
(1, 'CS311');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `studentid` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`studentid`, `username`, `password`, `FirstName`, `LastName`, `Email`) VALUES
(1, 'singh.8', '12345', 'Deewan', 'Singh', 'singhdeewan78@gmail.com'),
(2, 'raj', '12345', 'rajesh', 'Singh', 'singh.8@gmail.com'),
(3, 'kohli', '12345', 'virat', 'kohli', 'kohli18@gmail.com'),
(4, 'swap', '12345', 'swapnil', 'athawale', 'swap@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`),
  ADD KEY `INDEX` (`id`);

--
-- Indexes for table `cs111`
--
ALTER TABLE `cs111`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `UNIQUE` (`facultyId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `facultyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
