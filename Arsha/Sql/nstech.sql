-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 02:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nstech`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `c_num` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `c_name`, `c_img`, `c_num`, `c_address`) VALUES
(1, 'sdfsdf', 'clients/6490622.PNG', '445', '33');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email_id`, `mobile`, `subject`, `message`) VALUES
(1, 'Sushant chaudhary ', 'Nirmaya12@gmail.com', '9821224203', 'Web design', 'I want a Website for Enterprice Purpose'),
(2, 'Sushant chaudhary ', 'Nirmaya12@gmail.com', '9821224203', 'Web design', 'I want a Website for Enterprice Purpose'),
(3, 'Sushant chaudhary ', 'Nirmaya12@gmail.com', '9821224203', 'Web design', 'I want a Website for Enterprice Purpose'),
(4, 'Sushant chaudhary ', 'Nirmaya12@gmail.com', '9821224203', 'Web design', 'I want a Website for Enterprice Purpose'),
(5, 'Sushant chaudhary ', 'csushant224@gmail.com', '9821224203', 'Web design', 'sdfdsf'),
(6, 'adas', 'csushant224@gmail.com', '3234434234', 'asda', 'asdsd'),
(7, 'adas', 'csushant224@gmail.com', '3234434234', 'asda', 'asdsd'),
(8, 'asfsfasf', 'fsf@gmail.com', '9821224203', 'safsfd', 'sfaasfsf'),
(9, '$name', '$email', '$mobile', '$subject', '$message'),
(10, '$name', '$email', '$mobile', '$subject', '$message'),
(11, '123', 'csushant224@gmail.com', '9821224203', 'as', 'sdfsadfsf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `n_msg` varchar(255) NOT NULL,
  `n_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `subject`, `n_msg`, `n_date`) VALUES
(1, 'New Year', 'tommorow is Holiday Occassion of New Year', '2023-04-04 15:17:50'),
(2, 'sdfsdf', 'sfsdf', '2023-04-04 15:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `our_service`
--

CREATE TABLE `our_service` (
  `id` int(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_img` varchar(255) NOT NULL,
  `s_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_service`
--

INSERT INTO `our_service` (`id`, `s_name`, `s_img`, `s_desc`) VALUES
(1, 'Web Development', 'clients/1762420-02-03-ade0188de9603c0ce5bfba226c3fb795c68e8d56d1876c64c42f6b5bb3b7b732_e9322ce871042409.jpg', 'This is the Boom domain'),
(2, 'Enterprice Application', 'clients/9027340-02-03-402c4b2597084620df31a5699274dbcd08d7e3b08fe181dbe43e21721028253b_431897a9c0fbca88.jpg', 'it is motly High Secure Application and it is expensive');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `p_name`) VALUES
(1, 'Senior Devloper'),
(2, 'CTO');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `o_address` varchar(255) NOT NULL,
  `o_email` varchar(255) NOT NULL,
  `o_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `o_address`, `o_email`, `o_number`) VALUES
(1, 'Satungal CG Gate', 'nstech@gmail.com', '9821224203');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `num` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `img`, `position`, `about`, `num`, `address`, `email_id`) VALUES
(1, 'Sushant Chaudhary', 'upload/236022profile.jpg', '1', 'Hello Budy', '9821224203', 'Dhodharpa, Bara', 'csushant224@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_service`
--
ALTER TABLE `our_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_service`
--
ALTER TABLE `our_service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
