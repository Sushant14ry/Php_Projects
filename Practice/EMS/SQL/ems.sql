-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 02:43 AM
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
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave`
--

CREATE TABLE `assign_leave` (
  `id` int(255) NOT NULL,
  `v_from` varchar(1000) NOT NULL,
  `v_to` varchar(1000) NOT NULL,
  `e_leave` varchar(1000) NOT NULL,
  `m_leave` varchar(1000) NOT NULL,
  `c_leave` varchar(1000) NOT NULL,
  `assign_to` varchar(1000) NOT NULL,
  `assign_by` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_leave`
--

INSERT INTO `assign_leave` (`id`, `v_from`, `v_to`, `e_leave`, `m_leave`, `c_leave`, `assign_to`, `assign_by`, `created`) VALUES
(6, '2020-05-25', '2020-05-30', '2', '2', '2', '6', '7', '2020-05-24 16:00:28'),
(7, '2020-05-24', '2020-05-30', '4', '5', '67', '6', '7', '2020-05-24 16:06:31'),
(8, '2020-05-05', '2020-05-12', '', '', '', '6', '7', '2020-05-24 16:08:00'),
(9, '2020-05-05', '2020-05-12', '', '', '', '2', '7', '2020-05-24 16:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `number` varchar(12) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `picture`, `gender`, `depart`, `role`, `number`, `created`) VALUES
(1, 'Sushant', 'csushant224@gmail.com', '1234', '$des', '$gender', '$Depart', 'admin', '$number', '2020-05-24 04:34:26'),
(2, 'nirmaya ', 'Nirmaya12@gmail.com', 'nirmaya', 'photo/', 'Select', 'Select Department', 'emp', '9814295654', '2020-05-24 04:33:29'),
(4, 'prashant chaudhary', 'prashant12@gmail.com', '1234', 'photo/', 'Male', 'Web Developer', 'emp', '09876', '2020-05-23 18:15:00'),
(5, 'aadi', 'adi@gmail.com', '1234', 'photo/', 'Male', 'SEO', 'admin', '12304987', '2020-05-23 18:15:00'),
(6, 'bakul', 'baku@gmail.com', '1234', 'photo/', 'Male', 'Web Developer', 'emp', '1234', '2020-05-23 18:15:00'),
(7, 'pradip', 'pradip12@gmail.com', '1234', 'photo/', 'Male', 'Coder', 'emp', '1234567', '2020-05-23 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_id` int(255) NOT NULL,
  `task` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `assign_by` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_id`, `task`, `user_id`, `assign_by`, `date_time`) VALUES
(37, 'Hlo Guys do this task fast', 6, 1, '2020-05-24 07:48:49'),
(38, 'Hlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fastHlo Guys do this task fast', 2, 1, '2020-05-24 08:22:28'),
(39, 'Hlo Guys do this task fast', 7, 1, '2020-05-24 07:48:49'),
(40, 'Hlo Guys do this task fast', 4, 1, '2020-05-24 07:48:49'),
(41, 'how are you guys', 6, 1, '2020-05-24 14:56:32'),
(42, 'how are you guys', 2, 1, '2020-05-24 14:56:32'),
(43, 'how are you guys', 7, 1, '2020-05-24 14:56:32'),
(44, 'how are you guys', 4, 1, '2020-05-24 14:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `task_reply`
--

CREATE TABLE `task_reply` (
  `r_id` int(255) NOT NULL,
  `reply` text NOT NULL,
  `msg_id` int(255) NOT NULL,
  `reply_by` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_reply`
--

INSERT INTO `task_reply` (`r_id`, `reply`, `msg_id`, `reply_by`, `date_time`) VALUES
(70, 'a,mnbfkjsafnjkashdfjkaklsndkjfjasldfkjjkasf', 39, '7', '2020-05-24 10:48:29'),
(71, 'a,mnbfkjsafnjkashdfjkaklsndkjfjasldfkjjkasf', 39, '7', '2020-05-24 10:48:54'),
(74, 'kandljfaNBDS,AM,FD', 38, '1', '2020-05-24 11:19:08'),
(75, 'kandljfaNBDS,AM,FD', 38, '1', '2020-05-24 11:19:13'),
(76, 'jkhgjhhk', 38, '1', '2020-05-24 11:30:14'),
(77, '', 38, '1', '2020-05-24 14:47:59'),
(78, '', 38, '1', '2020-05-24 14:48:00'),
(79, '', 38, '1', '2020-05-24 14:48:01'),
(80, '', 38, '1', '2020-05-24 14:48:02'),
(81, 'hgfvb', 38, '1', '2020-05-24 14:48:11'),
(82, '', 38, '1', '2020-05-24 14:48:12'),
(83, 'hlow', 42, '2', '2020-05-24 14:57:48'),
(87, 'superb', 38, '2', '2020-05-24 15:02:54'),
(88, 'how are you', 38, '2', '2020-05-24 15:03:27'),
(89, 'wow', 39, '7', '2020-05-24 15:04:27'),
(90, 'wow', 39, '7', '2020-05-24 15:04:38'),
(91, 'hlow\r\n', 43, '7', '2020-05-24 15:07:43'),
(92, 'hlo', 43, '7', '2020-05-24 15:08:45'),
(93, 'hlo', 43, '7', '2020-05-24 15:08:56'),
(94, 'pic', 43, '7', '2020-05-24 15:09:19'),
(95, 'hlo\r\n', 38, '2', '2020-05-26 08:13:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_leave`
--
ALTER TABLE `assign_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `task_reply`
--
ALTER TABLE `task_reply`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_leave`
--
ALTER TABLE `assign_leave`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `task_reply`
--
ALTER TABLE `task_reply`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
