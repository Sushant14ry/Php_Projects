-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 04:17 PM
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
-- Database: `rescms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sushant1530', '1234'),
(2, 'prashant12', 'sushant');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `fullname`, `username`, `password`, `picture`, `gender`, `number`) VALUES
(25, 'Sushant chaudhary', 'Alex', 'c0ade83c872b086ad4e2ced6e11d1b0a', 'userload/', 'Male', '318723847838'),
(26, 'Sushant chaudhary', 'Alex', 'c0ade83c872b086ad4e2ced6e11d1b0a', 'userload/', 'Male', '318723847838'),
(27, 'Sushant chaudhary', 'Sushant chaudhary', 'c83b2d5bb1fb4d93d9d064593ed6eea2', 'userload/', 'Male', '40'),
(28, 'Sushant chaudhary', 'Alex', 'f31a81e91afdcf0b84dfee82ec2fb196', 'userload/', 'Male', '2344');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `role` varchar(2) NOT NULL,
  `author` varchar(255) NOT NULL,
  `meta_tags` varchar(255) NOT NULL,
  `meta_des` text NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `picture`, `date`, `role`, `author`, `meta_tags`, `meta_des`, `Location`) VALUES
(22, 'sknM,', 'KDLM,N', 'upload/value.PNG', '2022-05-20', '0', 'JHBD', '', '', ''),
(32, 'bari me  Jayeke ha Jayeke', 'NMHVYJHV', '/upload/iceland.PNG', '2022-05-20', '1', 'Prashant chaudhary', '', '', ''),
(36, 'Post Date', 'MLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiMLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiMLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiMLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiMLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipi', '/upload/value.PNG', '2022-05-20', '0', 'Sushant chaudhary', '', '', ''),
(37, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '/upload/iceland.PNG', '2022-05-20', '0', 'Prashant chaudhary', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '', ''),
(38, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '/upload/iceland.PNG', '2022-05-20', '0', 'Prashant chaudhary', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '', ''),
(39, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '/upload/iceland.PNG', '2022-05-20', '0', 'Prashant chaudhary', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '', ''),
(43, 'Cable net services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '//upload/value.PNG', '2022-05-20', '0', 'Sushant chaudhary', '', '', ''),
(45, 'Corona virus', 'Corona Virus is Very Powerfull Virus', 'upload/cloud.PNG', '2022-05-20', '0', 'Pradip Chaudhary ', '', '', ''),
(46, 'Cable net services', 'sjhdjkalajhdl aklshdlkaj', 'upload/value.PNG', '2022-05-20', '0', 'Pradip Chaudhary ', '', '', ''),
(47, 'Post Date', 'n nm mn mn n', 'upload/jadel.jpg', '2022-05-20', '1', 'Sushant chaudhary', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
