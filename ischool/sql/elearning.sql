-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 09:46 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `course_amount` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `course_id`, `user_email`, `course_amount`, `order_date`) VALUES
(15, 76, 'csushant224@gmail.com', '420', '2020-10-13 05:33:04'),
(16, 76, 'csushant224@gmail.com', '420', '2020-10-13 05:33:04'),
(17, 0, '', '420', '2020-10-13 05:33:04'),
(18, 0, '', '420', '2020-10-13 05:33:04'),
(19, 76, 'csushant224@gmail.com', '420', '2020-10-13 05:33:04'),
(20, 76, 'csushant224@gmail.com', '4200', '2020-10-13 05:33:04'),
(21, 75, 'csushant224@gmail.com', '1222', '2020-10-13 05:33:04'),
(22, 75, 'csushant224@gmail.com', '1222', '2020-10-13 05:33:04'),
(23, 75, 'csushant224@gmail.com', '1222', '2020-10-13 05:33:04'),
(24, 68, 'csushant224@gmail.com', '420', '2020-10-13 05:33:04'),
(25, 78, 'csushant224@gmail.com', '150', '2020-10-13 05:34:20'),
(26, 75, 'sushant1234@gmail.com', '1222', '2020-10-13 06:04:56'),
(27, 76, 'Shailesh123@gmail.com', '420', '2020-10-13 06:06:59'),
(28, 68, 'Shailesh123@gmail.com', '420', '2020-10-13 06:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `subject`, `email`, `message`) VALUES
(5, 'Sushant chaudhary', 'python', 'csushant224@gmail.com', 'wd,.mfnskfn sam,dfsdaf');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_desc` varchar(255) NOT NULL,
  `c_author` varchar(255) NOT NULL,
  `c_oprice` varchar(255) NOT NULL,
  `c_sprice` varchar(255) NOT NULL,
  `c_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_name`, `c_desc`, `c_author`, `c_oprice`, `c_sprice`, `c_img`) VALUES
(68, 'game development', '250', 'java', '260', '420', 'images/ios.JPG'),
(75, 'Java high', 'The Python  is  a High  Level Programing Language.', 'Sushant Chaudhary', '1200', '1222', 'images/pexels-andré-cook-396714.jpg'),
(76, 'mobile development', 'The Python  is  a High  Level Programing Language.', 'prashant', '1200', '420', 'images/planets-1497200_640.jpg'),
(77, 'AI', 'Artifial Inteligence is a mechine Language', 'Sushant Chaudhary', '232', '123', 'images/pexels-pixabay-41951.jpg'),
(78, 'React js', 'React Js is a Java script Programing Language', 'Sushant Chaudhary', '1200', '150', 'images/pexels-jtmultimidia-1500610 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `feedback`) VALUES
(35, 'Sushant chaudhary', 'nice job'),
(36, 'Nirmaya', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lession_duration` text NOT NULL,
  `course_id` int(100) NOT NULL,
  `lesson_vid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lession_duration`, `course_id`, `lesson_vid`) VALUES
(31, 'Introduction', 'This is most important part of this course', '2:30 hrs', 68, 'Ipad - 2988.mp4'),
(32, 'cpanel', 'This is most important part of this course in java', '2:00', 75, 'Ipad - 2988.mp4'),
(33, 'Introduction of python', 'This is most important part of this course in java', '2:30 hrs', 75, 'Insert Data into Database using AJAX jQuery PHP MySQLi in Hindi - CRUD using AJAX with CODE - 2018.mp4'),
(34, 'Introduction', 'This is most important part of this course in java', '2:30 hrs', 76, 'Notebook - 197.mp4'),
(35, 'Introduction of AI', 'the Mechine Language', '2:30 hrs', 77, 'Notebook - 197.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`) VALUES
(1, 'pending'),
(2, 'success'),
(3, 'cancell'),
(4, 'processing');

-- --------------------------------------------------------

--
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`, `role`) VALUES
(3, 'Sushant chaudhary', 'csushant224@gmail.com', '1530', 'Software', 'images/pexels-helena-lopes-708440.jpg', 1),
(8, 'Pradip Chaudhari', 'prashant123@gmail.com', 'pradip', '', 'images/fire-2349893_640.jpg', 0),
(10, 'Nirmaya', 'Nirmaya12@gmail.com', 'nirmaya', '', 'images/pexels-pixabay-41951.jpg', 0),
(15, 'Shailesh', 'Shailesh123@gmail.com', '1234', 'Network Engineer', 'images/heart-5515235_640.png', 0),
(20, 'Sushant chaudhary', 'sushant1234@gmail.com', '1234', 'DCOM', 'images/hyundai.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singup`
--
ALTER TABLE `singup`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `singup`
--
ALTER TABLE `singup`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
