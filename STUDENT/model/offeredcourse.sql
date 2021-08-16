-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 07:55 PM
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
-- Table structure for table `offeredcourse`
--

CREATE TABLE `offeredcourse` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `capacity` int(10) NOT NULL,
  `count` int(10) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offeredcourse`
--

INSERT INTO `offeredcourse` (`id`, `name`, `status`, `capacity`, `count`, `time`) VALUES
(1, 'ADVANCED OPERATING SYSTEM ', 'open', 40, 21, '2:0PM-3:30PM'),
(2, 'ADVANCED PROGRAMMING WITH JAVA ', 'open', 40, 32, '2:0PM-3:30PM'),
(3, 'ADVANCED PROGRAMMING WITH .NET', 'open', 40, 21, '2:0PM-3:30PM'),
(4, 'ADVANCED PROGRAMMING IN WEB TECHNOLOGY', 'open', 40, 32, '2:0PM-3:30PM'),
(5, 'BUSINESS COMMUNICATION', 'open', 40, 21, '2:0PM-3:30PM'),
(6, 'COMPUTING AND BUSINESS APPLICATIONS', 'open', 40, 32, '2:0PM-3:30PM'),
(7, 'ENGINEERING ETHICS', 'open', 40, 21, '2:0PM-3:30PM'),
(8, 'OBJECT ORIENTED PROGRAMING-1', 'open', 40, 32, '2:0PM-3:30PM'),
(9, 'OBJECT ORIENTED PROGRAMMING-2', 'open', 40, 21, '2:0PM-3:30PM'),
(10, 'COMPUTER NETWORKS', 'open', 40, 32, '2:0PM-3:30PM'),
(11, 'WEB TECHNOLOGIES', 'open', 40, 21, '2:0PM-3:30PM'),
(12, 'PROGRAMMING LANGUAGE-1', 'open', 40, 32, '2:0PM-3:30PM'),
(13, 'RESEARCH METHODOLOGY', 'open', 40, 21, '2:0PM-3:30PM'),
(14, 'PROGRAMMING LANGUAGE-2', 'open', 40, 32, '2:0PM-3:30PM'),
(15, 'DISCRETE MATHEMATICS', 'open', 40, 21, '2:0PM-3:30PM'),
(16, 'CS MATH', 'open', 40, 32, '2:0PM-3:30PM'),
(17, 'COMPLEX VARIABLE,LAPLACE & Z-TRANSFORMATION', 'open', 40, 21, '2:0PM-3:30PM'),
(18, 'DIFF CALCULUS AND COORDINATE GEOMETRY', 'open', 40, 32, '2:0PM-3:30PM'),
(19, 'INTEGRAL CALCULUS & ORD. DIFF EQUATION', 'open', 40, 21, '2:0PM-3:30PM'),
(20, 'ENGLISH WRITING SKILLS & COMMUNICATIONS', 'open', 40, 32, '2:0PM-3:30PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offeredcourse`
--
ALTER TABLE `offeredcourse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offeredcourse`
--
ALTER TABLE `offeredcourse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
