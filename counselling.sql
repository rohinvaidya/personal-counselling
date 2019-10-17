-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 04:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_name`, `stream`, `city`, `address`, `description`, `image`, `contact_no`, `email`, `website`) VALUES
(1, 'jai hind', 'arts, science, commerce', 'mumbai ', 'churchgate ', 'dljanckbslkvbifbvpajb cphb', 'jaihing.jpeg', '745685412', 'jaihind@jaihin.com', 'www.jaihind.in'),
(2, 'KC college', 'commerce, science', 'mumbai', 'fort', 'asdjnxkasvdouabdlvco', 'kc.jpeg', 'uv567ui', 'kc@gmail.com', 'www.kc.com'),
(3, 'qwertyuiop', 'arts, commerce', 'xdfvgh bnm', 'zsxrdcfvgbhjnkml,', 'asdfghjklzxcvbnm', 'vlcsnap-error572.png', '1234567890', 'abc@gmail.com', 'http://google.com'),
(4, 'qwertyuiop', 'arts, commerce', 'xdfvgh bnm', 'zsxrdcfvgbhjnkml,', 'asdfghjklzxcvbnm', 'vlcsnap-error572.png', '1234567890', 'abc@gmail.com', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `subcourse_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_choice`
--

CREATE TABLE `question_choice` (
  `test_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_choice`
--

INSERT INTO `question_choice` (`test_id`, `question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, 3, 'full form of php', 'personal home page', 'tyuio', 'ertyu', 'nisdbd', 'personal home page'),
(1, 4, 'qwertyuiop', 'qwerty', 'qwe', 'asdfg', 'zxcvbnm', 'qwerty'),
(1, 5, 'hello mister', 'miss', 'mr', 'ms', 'mrs', 'mr'),
(2, 6, 'acnowsncobwoevub', 'ijcoi', 'dncwbc', 'nskdbck', 'jnksvn', 'dncwbc'),
(2, 7, 'wassup', 'hello', 'rohinn', 'shaco', 'idncnoi', 'rohinn'),
(2, 8, 'acac', 'asc', 'cccc', 'asca', 'wwdd', 'cccc');

-- --------------------------------------------------------

--
-- Table structure for table `subcourses`
--

CREATE TABLE `subcourses` (
  `subcourse_id` int(11) NOT NULL,
  `subcourses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_description` varchar(255) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `test_description`, `is_active`) VALUES
(1, 'IQ', 'shalva is naughtu', 0),
(2, 'Rohin', 'Rohin is smart', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `preferences` varchar(255) DEFAULT NULL,
  `profilepicpath` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `is_registered` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `contact_no`, `preferences`, `profilepicpath`, `role`, `is_registered`) VALUES
(1, 'Shalva', 'Thakurdesai', 'shalva@gmail.com', 'shalva@123', '9820098200', NULL, NULL, 'admin', 0),
(2, 'Rohin', 'Vaidya', 'rohin@gmail.com', 'rohin@123', '9876543211', NULL, NULL, 'counsellor', 0),
(3, 'Shubham', 'Vira', 'shubham@gmail.com', 'shubham@123', '9632587410', 'science', NULL, 'client', 0),
(4, 'Alex', 'Solanki', 'alex@gmail.com', 'alex@123', '6547893210', 'commerce', NULL, 'client', 0),
(5, 'Abdullah', 'Khan', 'abdulha@gmail.com', 'abdullah@1234', '9876543210', 'arts', NULL, 'client', 0),
(6, 'Tom', 'Snow', 'abc@gmail.com', '1234567890', '9087654321', NULL, NULL, 'counsellor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_question_answer`
--

CREATE TABLE `user_question_answer` (
  `user_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_question_answer`
--

INSERT INTO `user_question_answer` (`user_id`, `test_id`, `question_id`, `user_answer`) VALUES
(5, 1, 3, 'personal home page'),
(5, 1, 4, 'qwerty'),
(5, 1, 5, 'mr'),
(5, 2, 6, 'dncwbc'),
(5, 2, 7, 'rohinn'),
(5, 2, 8, 'cccc'),
(5, 1, 3, 'personal home page'),
(5, 1, 4, 'qwerty'),
(5, 1, 5, 'mr'),
(5, 1, 3, 'personal home page'),
(5, 1, 4, 'qwerty'),
(5, 1, 5, 'mr'),
(5, 1, 3, 'personal home page'),
(5, 1, 4, 'qwerty'),
(5, 1, 5, 'mr');

-- --------------------------------------------------------

--
-- Table structure for table `user_test`
--

CREATE TABLE `user_test` (
  `user_test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_test`
--

INSERT INTO `user_test` (`user_test_id`, `user_id`, `test_id`, `score`) VALUES
(1, 5, 1, 2),
(2, 5, 2, 1),
(3, 5, 1, 3),
(4, 5, 1, 3),
(5, 5, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `question_choice`
--
ALTER TABLE `question_choice`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_test`
--
ALTER TABLE `user_test`
  ADD PRIMARY KEY (`user_test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_choice`
--
ALTER TABLE `question_choice`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_test`
--
ALTER TABLE `user_test`
  MODIFY `user_test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
