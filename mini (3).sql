-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 08:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `kyu`
--

CREATE TABLE `kyu` (
  `gender` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `loud` varchar(255) NOT NULL,
  `leisure` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `share` varchar(255) NOT NULL,
  `clean` varchar(255) NOT NULL,
  `friends` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `snore` varchar(255) NOT NULL,
  `srn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kyu`
--

INSERT INTO `kyu` (`gender`, `language`, `food`, `region`, `time`, `loud`, `leisure`, `relationship`, `share`, `clean`, `friends`, `person`, `snore`, `srn`) VALUES
('male', 'english', 'veg', 'north', 'Day', 'Yes', 'Playing', 'Close', 'Yes', 'Messy', 'Yes', '', 'Yes', 'r16cs271'),
('male', 'english', 'veg', 'north', 'Day', 'Yes', 'Playing', 'Close', 'Yes', 'Messy', 'Yes', 'Introvert', 'Yes', 'r16cs276'),
('male', 'english', 'veg', 'north', 'Day', 'Yes', 'Playing', 'Close', 'Yes', 'Messy', 'Yes', 'Introvert', 'Yes', 'r16cs277'),
('male', 'english', 'veg', 'north', 'Day', 'Yes', 'Playing', 'Close', 'Yes', 'Messy', 'Yes', 'Introvert', 'Yes', 'r16cs278');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `srn` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`srn`, `name`, `branch`, `year`, `email`, `password`) VALUES
('r16cs222', 'hardik pathar', 'mca', '4', 'hardikpvb@gmail.com', 'hardikvb'),
('r16cs276', 'abc', 'cse', '3', 'abc@gmail.com', 'abc'),
('r16cs277', 'raju', 'mech', '1st', 'raj@gmail.com', '123'),
('r16cs278', 'priya', 'ece', '2nd', 'pr@yahoo.in', 'neha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kyu`
--
ALTER TABLE `kyu`
  ADD UNIQUE KEY `srn` (`srn`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`srn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
