-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 02:45 AM
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
-- Database: `dnm_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(255) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `c_name`, `post`) VALUES
(1, 'health', '1'),
(2, 'Politics', '3'),
(3, 'Entertainment', '2'),
(4, 'Coding', '2'),
(6, 'Natures', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(255) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_description` text NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `p_title`, `p_description`, `p_category`, `p_img`, `date`, `author`) VALUES
(6, 'Hello Future', ' helool cjkshdfkjj l;kjdfkljas fdc;o', '4', 'it.JPG', '0000-00-00 00:00:00', 0),
(7, 'Superman', 'ishdfjk,mn aslkfhjk', '2', 'news.jpg', '0000-00-00 00:00:00', 0),
(8, 'Superman', 'ishdfjk,mn aslkfhjk', '2', 'news.jpg', '0000-00-00 00:00:00', 0),
(11, 'Jhuma jhuma', 'Juma juma', '3', '78.1.JPG', '0000-00-00 00:00:00', 0),
(16, '', '', '', '', '0000-00-00 00:00:00', 0),
(17, '.kljbhv nb', 'JNBKHNB', '1', 'kasper.jpg', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `pic`, `password`, `role`) VALUES
(4, 'Prashant ', 'chaudhary', 'Prashant12', '', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(6, 'Nirmaya', 'Chaudhary', 'Nirmaya12@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(7, 'Sushant', 'chaudhary', 'Sushant Chaudhary', '', 'cb8acb1dc9821bf74e6ca9068032d623', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
