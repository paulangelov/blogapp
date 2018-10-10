-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 06:48 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogid` int(4) NOT NULL,
  `blogtitle` varchar(255) NOT NULL,
  `blogdesc` varchar(255) NOT NULL,
  `blogdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blogpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogid`, `blogtitle`, `blogdesc`, `blogdate`, `blogpic`) VALUES
(2, 'Sample One Hell-o', 'This is already edited', '2018-10-08 16:52:20', 'Penguins.jpg'),
(3, 'Sample Two Nice One Tow', 'Sample Two Desc', '2018-10-08 16:52:59', 'sample2.jpg'),
(4, 'Sample 3 This is already edited', 'Sample 3 Desc', '2018-10-08 16:53:17', 'sample3.jpg'),
(5, 'Sample 4', 'Sample Four Desc 4', '2018-10-09 00:48:20', 'sample4.jpg'),
(6, 'Sample 5', 'this is sample test 5 inputted', '2018-10-09 14:31:34', 'assure-lease-image.jpg'),
(7, 'Sample 6', 'dsdassa', '2018-10-09 14:41:41', 'assure-lease-image.jpg'),
(8, 'Bible Study', 'Bible Study', '2018-10-09 20:43:08', 'Lighthouse.jpg'),
(9, 'Final Test Record', 'This is my final test record', '2018-10-10 12:28:23', 'Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user-account`
--

CREATE TABLE `user-account` (
  `user-id` int(4) NOT NULL,
  `user-password` varchar(255) NOT NULL,
  `user-name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-account`
--

INSERT INTO `user-account` (`user-id`, `user-password`, `user-name`) VALUES
(1001, 'p@ssw0rd', 'Paul Villarante');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogid`);

--
-- Indexes for table `user-account`
--
ALTER TABLE `user-account`
  ADD PRIMARY KEY (`user-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
