-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 02:41 AM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `email`, `subject`, `sms`) VALUES
(25, 'csushant224@gmail.com', 'CEH 10', 'ams,dnfbjkas,dzm'),
(26, 'csushant297@gmail.com', 'Blog', 's,mdbzfj,asNDZk,m AS<Mzfn csADzxKALSNDfjksHFJKKLJDnfks,mdbzfj,asNDZk,m AS<Mzfn csADzxKALSNDfjksHFJKKLJDnfks,mdbzfj,asNDZk,m AS<Mzfn csADzxKALSNDfjksHFJKKLJDnfk');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `userpass`) VALUES
(1, 'sushant1530', '12345'),
(2, 'Prashant12', 'prashant1'),
(3, 'Sushant Chaudhary', 'sushant1530');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_author` varchar(100) NOT NULL,
  `post_img` varchar(100) NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_date`, `post_author`, `post_img`, `post_content`) VALUES
(19, 'free fire gaming Crazz', '2019-05-20', 'Prashant chaudhary', 'upload/macbookk pro.jpeg', 'The New gaming Laptop for gaming power Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(20, 'Latest Mobile fighter', '2019-05-20', 'Khitize chauhdaryy', 'upload/sadess.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(21, 'Corona virus', '2019-05-20', 'made in china', 'upload/heart rate.JPG', 'The New gaming Laptop for gaming power Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(22, 'Hacker boy', '2019-05-20', 'It Trade hub', 'upload/s940.JPG', 'The New gaming Laptop for gaming power Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(23, 'Hospital', '2019-05-20', 'Pradip Chaudhary ', 'upload/cx.JPG', 'The New gaming Laptop for gaming power Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n'),
(31, 'Cable net services', '2019-05-20', 'Shailesh Chaudhary', 'upload/wifi.webp', 'The New gaming Laptop for gaming power Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(44, 'Cable net services', '2022-05-20', 'Sushant chaudhary', 'upload/BeautyPlus_20180313195825_save.jpg', 'dsacm, xnbj,masd.fkjnsd'),
(45, 'Cable net services', '2022-05-20', 'Sushant chaudhary', 'upload/value.PNG', 'lkjhdfkjhaLKJSDHFLIKJHsfadz'),
(46, 'd.,kjbakjm', '2022-05-20', 'lakdnfbkj,', '/upload/value.PNG', 'asm,dcbstyle=\"overflow:scroll;\"style=\"overflow:scroll;\"style=\"overflow:scroll;\"style=\"overflow:scroll;\"style=\"overflow:scroll;\"style=\"overflow:scroll;\"'),
(47, 'djkbhvsmn', '2022-05-20', 'ALDKJHBCMANM', '/upload/iceland.PNG', '.KLJBAHDS XMZBDKJA,MBaSKJMNDBZXKJ'),
(48, 'JSBZKJSHNBKJ', '2022-05-20', 'QAKJDSFBKJM', '/upload/iceland.PNG', ',.MASDBVKZMHNALKA,MN'),
(49, 'ilsdfhkjh', '2019-08-20', 'idhfkj', '/upload/iceland.PNG', 'kdfbvjkbjh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
