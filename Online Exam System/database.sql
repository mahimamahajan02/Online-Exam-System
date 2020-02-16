-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 09:43 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'What is the range of short data type in Java?', '-128 to 127', ' -2147483648 to 2147483647', 'None of the mentioned', '-32768 to 32767'),
(2, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int'),
(3, 'Which data type value is returned by all transcendental math functions?', 'byte', 'float', 'int', ' double'),
(4, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int'),
(5, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int'),
(6, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int'),
(7, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int'),
(8, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int'),
(9, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int'),
(10, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `userName` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `userName`, `password`) VALUES
(1, 'admin', 'Test@12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourses`
--

CREATE TABLE `tblcourses` (
  `id` int(11) NOT NULL,
  `courseName` varchar(200) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourses`
--

INSERT INTO `tblcourses` (`id`, `courseName`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(1, 'MCA', '2018-12-17 13:00:00', 1, '2018-12-25 00:45:43'),
(2, 'BSC', '2018-12-25 13:13:33', 1, NULL),
(5, 'MBA', '2019-07-22 11:10:26', NULL, NULL),
(6, 'Btech', '2019-07-22 11:12:15', NULL, NULL),
(8, 'BCA', '2019-07-22 15:15:07', NULL, NULL),
(9, 'LLB', '2019-07-22 15:21:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblexams`
--

CREATE TABLE `tblexams` (
  `id` int(11) NOT NULL,
  `subjectName` int(11) NOT NULL,
  `courseName` int(11) NOT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `correct` varchar(200) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexams`
--

INSERT INTO `tblexams` (`id`, `subjectName`, `courseName`, `question`, `option1`, `option2`, `option3`, `correct`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(1, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization ', '2019-07-29 04:55:13', NULL, NULL),
(2, 2, 5, 'Financial management process deals with ', 'Investments ', ' Both a and b ', 'None of the above', 'Financing decisions ', '2019-07-29 04:55:13', NULL, NULL),
(3, 2, 5, ' 2 Function comprises \r\n', ' Safe custody of funds only', ' Expenditure of funds only', ' Procurement of 2 only ', ' Procurement & effective use of funds ', '2019-07-29 04:55:13', NULL, NULL),
(4, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization ', '2019-07-29 04:55:13', NULL, NULL),
(5, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization ', '2019-07-29 04:55:13', NULL, NULL),
(6, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization ', '2019-07-29 04:55:13', NULL, NULL),
(7, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization ', '2019-07-29 04:55:13', NULL, NULL),
(8, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization', '2019-07-29 04:55:13', NULL, NULL),
(9, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization', '2019-07-29 04:55:13', NULL, NULL),
(10, 2, 5, ' The only feasible purpose of financial management is', ' Sales Maximization\r\n', ' Profit Maximization\r\n', ' Assets maximization ', ' Wealth Maximization ', '2019-07-29 04:55:13', NULL, NULL),
(11, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(12, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(13, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(14, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(15, 3, 6, ' What does the moment of the force measure? ', ' The moment of inertia of the body about any axis', ' The couple moment produced by the single force acting on the body\r\n ', 'The total work is done on the body by the force ', ' The tendency of rotation of the body along any axis', '2019-07-29 05:03:49', NULL, NULL),
(16, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(17, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(18, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(19, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(20, 3, 6, 'If a car is moving forward, what is the direction of the moment of the moment caused by the rotation', 'It is heading inwards, i.e. the direction is towards inside of the car ', ' It is heading outwards, i.e. the direction is towards outside of the car', 'It is heading forward, i.e. the direction is towards the forward direction of the motion of the car', 'It is heading backward, i.e. the direction is towards the back side of the motion of the car', '2019-07-29 05:03:49', NULL, NULL),
(21, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL),
(22, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL),
(23, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL),
(24, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL),
(25, 1, 1, 'What is the range of short data type in 1?', '-128 to 127', ' -2147483648 to 2147483647', 'None of the mentioned', '-32768 to 32767', '2019-07-29 05:07:38', NULL, NULL),
(26, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL),
(27, 1, 1, 'Which data type value is returned by all transcendental math functions?', 'byte', 'float', 'int', ' double', '2019-07-29 05:07:38', NULL, NULL),
(28, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL),
(29, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL),
(30, 1, 1, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'long', 'byte', 'float', 'int', '2019-07-29 05:07:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblscores`
--

CREATE TABLE `tblscores` (
  `id` int(11) NOT NULL,
  `firstName` int(11) NOT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `subjectName` int(11) NOT NULL,
  `courseName` int(11) NOT NULL,
  `score` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblscores`
--

INSERT INTO `tblscores` (`id`, `firstName`, `lastName`, `subjectName`, `courseName`, `score`) VALUES
(1, 12, NULL, 2, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `subjectName` varchar(200) DEFAULT NULL,
  `courseName` int(11) NOT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `subjectName`, `courseName`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(1, 'Java', 1, '2019-07-29 12:09:45', NULL, NULL),
(2, 'Finance', 5, '2019-07-29 12:09:45', NULL, NULL),
(3, 'Mechanics', 6, '2019-07-29 14:21:46', NULL, NULL),
(4, 'Php', 8, '2019-07-30 10:27:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblteachers`
--

CREATE TABLE `tblteachers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` char(12) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteachers`
--

INSERT INTO `tblteachers` (`id`, `firstName`, `lastName`, `emailId`, `mobileNumber`, `userPassword`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(7, 'juhii', 'sharmaa', 'juhi@gmail.com', '7777777777', 'Juhi@123', '2019-07-22 19:36:56', 1, '2019-07-29 17:04:11'),
(8, 'mahima', 'jindal', 'mahi1@gmail.com', '8989877654', 'Karan2123', '2019-07-22 19:40:32', 1, NULL),
(9, 'kunal', 'kapoorr', 'kunal@gmail.com', '7890665544', 'Kunal@123', '2019-07-23 08:53:57', 1, '2019-07-25 07:36:36'),
(10, 'juhi', 'jindal', 'uhh@gmail.com', '8989877654', 'Juhi@123', '2019-07-25 11:00:20', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` char(12) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstName`, `lastName`, `emailId`, `mobileNumber`, `userPassword`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(5, 'MAHIMA', 'MAHAJAN', 'mahima_mahajan97@yahoo.co.in', '8826606388', 'Mahima@123', '2019-07-20 13:19:06', 1, NULL),
(6, 'mahima', 'jindal', 'mahi1@gmail.com', '8989877654', 'Mahima@123', '2019-07-20 18:35:24', 1, NULL),
(7, 'Ashima', 'Agarwal', 'ashima_mahajan97@yahoo.co.in', '8826606388', 'Ashima@123', '2019-07-20 18:54:54', 1, NULL),
(8, 'abc', 'MAHAJAN', 'aaa@gmil.com', '8826606388', 'Abc@123', '2019-07-20 19:22:39', 1, NULL),
(9, 'vanjul', 'MAHAJAN', 'vanul_mahajan97@yahoo.co.in', '8826606388', 'Vanjul@123', '2019-07-21 08:23:17', 1, NULL),
(11, 'karishma', 'Sharma', 'karishma_mahajan97@yahoo.co.in', '8826606388', 'Karishma@123', '2019-07-21 10:25:09', 0, NULL),
(12, 'AKRITI', 'MAHAJAN', 'ak22@yaho.com', '7890665544', 'Akriti@123', '2019-07-21 10:35:14', 1, NULL),
(14, 'jia', 'jindal', 'jia@gmail.com', '8989877654', 'Jia@123', '2019-07-22 19:45:49', 1, NULL),
(15, 'kriti', 'sharma', 'kriti@gmail.com', '8826606388', 'Kriti@123', '2019-07-25 07:05:53', 1, NULL),
(16, 'karishma', 'DWIVEDI', 'puneet.dwivedi@crg.in', '8826606388', '1234566', '2019-07-25 09:40:12', 1, NULL),
(17, 'hh', 'jindal', 'h@gmail.com', '8989877654', '123456', '2019-07-25 11:04:52', 1, NULL),
(18, 'kk', 'jindal', 'mahi@gmail.com', '8989877654', '123456', '2019-07-25 11:08:05', 0, NULL),
(19, 'j', 'k', 'j@gmail.com', '8826606388', '123456', '2019-07-25 11:10:34', 0, NULL),
(20, 's', 'x', 'da@gmail.com', '4567678733', '123456', '2019-07-30 16:49:52', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcourses`
--
ALTER TABLE `tblcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblexams`
--
ALTER TABLE `tblexams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjectName` (`subjectName`),
  ADD KEY `courseName` (`courseName`);

--
-- Indexes for table `tblscores`
--
ALTER TABLE `tblscores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjectName` (`subjectName`),
  ADD KEY `courseName` (`courseName`),
  ADD KEY `firstName` (`firstName`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjectCategory` (`courseName`);

--
-- Indexes for table `tblteachers`
--
ALTER TABLE `tblteachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcourses`
--
ALTER TABLE `tblcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblexams`
--
ALTER TABLE `tblexams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tblscores`
--
ALTER TABLE `tblscores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblteachers`
--
ALTER TABLE `tblteachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblexams`
--
ALTER TABLE `tblexams`
  ADD CONSTRAINT `tblexams_ibfk_1` FOREIGN KEY (`subjectName`) REFERENCES `tblsubjects` (`id`),
  ADD CONSTRAINT `tblexams_ibfk_2` FOREIGN KEY (`subjectName`) REFERENCES `tblsubjects` (`id`),
  ADD CONSTRAINT `tblexams_ibfk_3` FOREIGN KEY (`courseName`) REFERENCES `tblcourses` (`id`);

--
-- Constraints for table `tblscores`
--
ALTER TABLE `tblscores`
  ADD CONSTRAINT `tblscores_ibfk_1` FOREIGN KEY (`subjectName`) REFERENCES `tblsubjects` (`id`),
  ADD CONSTRAINT `tblscores_ibfk_2` FOREIGN KEY (`courseName`) REFERENCES `tblcourses` (`id`),
  ADD CONSTRAINT `tblscores_ibfk_3` FOREIGN KEY (`firstName`) REFERENCES `tblusers` (`id`);

--
-- Constraints for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD CONSTRAINT `tblsubjects_ibfk_1` FOREIGN KEY (`courseName`) REFERENCES `tblcourses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
