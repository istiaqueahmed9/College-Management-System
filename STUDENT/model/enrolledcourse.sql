-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 07:29 PM
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
-- Database: `college_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrolledcourse`
--

CREATE TABLE `enrolledcourse` (
  `id` int(10) NOT NULL,
  `sId` int(10) NOT NULL,
  `cName` varchar(30) NOT NULL,
  `midQuiz1` int(5) DEFAULT NULL,
  `midQuiz2` int(5) DEFAULT NULL,
  `finalQuiz1` int(5) DEFAULT NULL,
  `finalQuiz2` int(5) DEFAULT NULL,
  `midAttendence` int(5) DEFAULT NULL,
  `midPerformance` int(5) DEFAULT NULL,
  `finalAttendence` int(5) DEFAULT NULL,
  `day` varchar(20) NOT NULL,
  `finalPerformance` int(5) DEFAULT NULL,
  `midExam` int(5) DEFAULT NULL,
  `finalExam` int(5) DEFAULT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolledcourse`
--

INSERT INTO `enrolledcourse` (`id`, `sId`, `cName`, `midQuiz1`, `midQuiz2`, `finalQuiz1`, `finalQuiz2`, `midAttendence`, `midPerformance`, `finalAttendence`, `day`, `finalPerformance`, `midExam`, `finalExam`, `time`) VALUES
(1, 1, 'Engineering Ethics', 20, 18, 18, 20, 10, 10, 10, 'sunday', 10, 36, 35, '2:0PM-3:30PM'),
(2, 1, 'Object oriented Programming-2', 18, 15, 19, 20, 10, 10, 10, 'sunday', 10, 35, 32, '2:0PM-3:30PM'),
(3, 1, 'Research Methodology', 20, 18, 18, 20, 10, 10, 10, 'monday', 10, 32, 33, '2:0PM-3:30PM'),
(4, 1, 'Computer networks', 17, 19, 20, 17, 10, 10, 10, 'tuesday', 10, 30, 32, '2:0PM-3:30PM'),
(5, 1, 'Web technologies', 20, 18, 18, 17, 10, 10, 10, 'wednesday', 10, 33, 28, '2:0PM-3:30PM'),
(6, 1, 'Programming language-2', 17, 19, 20, 18, 10, 10, 10, 'thursday', 10, 25, 28, '2:0PM-3:30PM'),
(7, 2, 'Object oriented Programming', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sunday', NULL, NULL, NULL, '2:0PM-3:30PM'),
(8, 2, 'Research Methodology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', NULL, NULL, NULL, '2:0PM-3:30PM'),
(9, 2, 'Engineering Ethics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuesday', NULL, NULL, NULL, '2:0PM-3:30PM'),
(10, 2, 'Web technologies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tuesday', NULL, NULL, NULL, '2:0PM-3:30PM'),
(11, 2, 'Computer networks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wednesday', NULL, NULL, NULL, '2:0PM-3:30PM'),
(12, 2, 'Programming language-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thursday', NULL, NULL, NULL, '2:0PM-3:30PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolledcourse`
--
ALTER TABLE `enrolledcourse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrolledcourse`
--
ALTER TABLE `enrolledcourse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
