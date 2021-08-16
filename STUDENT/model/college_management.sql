-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 09:30 PM
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
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `eId` int(10) NOT NULL,
  `path` varchar(300) NOT NULL,
  `uploadDate` datetime NOT NULL,
  `id` int(10) NOT NULL,
  `fileName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`eId`, `path`, `uploadDate`, `id`, `fileName`) VALUES
(2, '../assets/assignment/task1.zip', '2021-08-10 03:32:51', 1, 'task1.zip'),
(2, '../assets/assignment/task2.zip', '2021-08-17 06:59:07', 2, 'task2.zip'),
(2, '../assets/assignment/task3.zip', '2021-08-16 03:02:48', 3, 'task3.zip'),
(2, '../assets/assignment/Assignment_2_SQT_A.docx', '2021-08-06 12:42:49', 4, 'Assignment_2_SQT_A.docx'),
(5, '../assets/assignment/LabTask2.zip', '2021-08-09 11:08:23', 6, 'LabTask2.zip'),
(2, '../assets/assignment/ER-3.ppt', '2021-08-11 05:59:39', 7, 'ER-3.ppt');

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

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `eId` int(10) NOT NULL,
  `path` varchar(300) NOT NULL,
  `uploadDate` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`eId`, `path`, `uploadDate`, `name`, `id`) VALUES
(2, '../assets/notes/Lesson 1.1 - Introducing Java.pdf', '2021-08-10 09:44:30', 'Lesson 1.1 - Introducing Java.pdf', 1),
(2, '../assets/notes/Lesson 1.2 - Java Environment Setup.pdf', '2021-08-09 10:44:30', 'Lesson 1.2 - Java Environment Setup.pdf', 2),
(2, '../assets/notes/Lesson 2.2 - Class and Object.pdf', '2021-05-12 05:49:35', 'Lesson 2.2 - Class and Object.pdf', 3),
(2, '../assets/notes/Lesson 3.1 - Variable Types.pdf', '2021-08-16 04:49:35', 'Lesson 3.1 - Variable Types.pdf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `eId` int(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `eId`, `description`, `date`) VALUES
(1, 2, 'There will be no Quiz on Saturday. Date will be announced later', '2021-08-01 02:05:37'),
(2, 1, 'There will be no Quiz on Saturday. Date will be announced later', '2021-08-02 02:07:28');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `password`, `email`, `phone`, `address`, `dob`, `image`, `gender`) VALUES
(1, 'Mahdin', 'Ahsan ', '12345', 'mahdinahsan84@gmail.com', 1756545656, 'Moulvibazar, Bangladesh', '2011-08-01', '../assets/images/person.jpg', 'male'),
(2, 'Fardin Ahsan', 'Imran', '12345', 'fardinahsan@gmail.com', 1788370756, 'Sylhet, Bangladesh', '2021-08-11', '../assets/images/fb1.jpg', 'male'),
(7, 'Mim', 'Mahfuza', '12345', 'mimmahfuza@gmail.com', 1753389078, 'Bashundhara R/A', '2021-08-06', NULL, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolledcourse`
--
ALTER TABLE `enrolledcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offeredcourse`
--
ALTER TABLE `offeredcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enrolledcourse`
--
ALTER TABLE `enrolledcourse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offeredcourse`
--
ALTER TABLE `offeredcourse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
