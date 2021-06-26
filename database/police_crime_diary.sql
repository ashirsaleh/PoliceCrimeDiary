-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 04:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police_crime_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(255) NOT NULL,
  `case_type` varchar(255) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `criminal_caseid` varchar(255) NOT NULL,
  `case_desk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complainers`
--

CREATE TABLE `complainers` (
  `complainer_id` int(11) NOT NULL,
  `Fnam` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `p_number` int(20) NOT NULL,
  `time` time(5) NOT NULL,
  `nature_complaints` varchar(255) NOT NULL,
  `th_name` int(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `short_info` varchar(255) NOT NULL,
  `car_name` varchar(30) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `wit_statement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainers`
--

INSERT INTO `complainers` (`complainer_id`, `Fnam`, `Lname`, `address`, `date`, `p_number`, `time`, `nature_complaints`, `th_name`, `location`, `short_info`, `car_name`, `plate_number`, `color`, `wit_statement`) VALUES
(1, 'Issa', 'hamadi', 'tiptop', '2021-06-09', 764546779, '26:41:37.18200', 'murder ', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `defendants`
--

CREATE TABLE `defendants` (
  `defendant_id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `age` int(12) NOT NULL,
  `t_arrested` time(5) NOT NULL,
  `d_arrested` date NOT NULL,
  `L_arrested` varchar(30) NOT NULL,
  `relationship` varchar(40) NOT NULL,
  `bail` int(50) NOT NULL,
  `charges` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `defendants`
--

INSERT INTO `defendants` (`defendant_id`, `Fname`, `Lname`, `age`, `t_arrested`, `d_arrested`, `L_arrested`, `relationship`, `bail`, `charges`) VALUES
(1, 'motinho', 'hilmy', 24, '12:05:14.05007', '2021-06-15', 'manzese', 'mother', 100000, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `policeId` int(11) NOT NULL,
  `policeNo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `policepic` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `tel_number` int(255) DEFAULT NULL,
  `role` tinyint(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`policeId`, `policeNo`, `password`, `policepic`, `Fname`, `Lname`, `rank`, `age`, `tel_number`, `role`, `description`, `location`) VALUES
(10, '00586', '$2y$10$o5bqycPajuhnvBTddQoWRuDtJ3cJXzzHy0.eD7HxzeQH.kDxFu8vW', '', 'Mohamed', 'Hamadi', 'luetinant', 23, 777567454, 0, 'hey there I am Mohamed i had a choice of thankful to my leaders but fuck them all', 'zanzibar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `complainers`
--
ALTER TABLE `complainers`
  ADD PRIMARY KEY (`complainer_id`);

--
-- Indexes for table `defendants`
--
ALTER TABLE `defendants`
  ADD PRIMARY KEY (`defendant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`policeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complainers`
--
ALTER TABLE `complainers`
  MODIFY `complainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `defendants`
--
ALTER TABLE `defendants`
  MODIFY `defendant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `policeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
