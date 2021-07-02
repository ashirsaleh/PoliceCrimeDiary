-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2021 at 04:47 AM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1+eagle

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `complainerId` int(50) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `natureComplaints` varchar(255) NOT NULL,
  `phoneNum` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `fName` varchar(255) DEFAULT NULL,
  `accuserId` int(11) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `locationArrested` varchar(255) NOT NULL,
  `guardianName` varchar(255) NOT NULL,
  `gRelation` varchar(255) NOT NULL,
  `circumstance` varchar(255) NOT NULL,
  `bailset` int(50) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `resident` varchar(50) NOT NULL,
  `wstatus` varchar(50) NOT NULL,
  `dateArrested` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

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
  `tel_number` varchar(255) NOT NULL,
  `role` tinyint(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`policeId`, `policeNo`, `password`, `policepic`, `Fname`, `Lname`, `rank`, `age`, `tel_number`, `role`, `description`, `updated_at`) VALUES
(19, '557', '$2y$10$WC6rnerQaqt88sYD6nqajO5NU8VyqXLgui18RvZtsPKfMhovGhrxm', '', 'Echo', 'Malone', 'Head Of Station', 0, '', 0, 'Veniam itaque quasi', '2021-07-02 03:01:37');

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
  ADD PRIMARY KEY (`complainerId`);

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`accuserId`);

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
  MODIFY `complainerId` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `accuserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `policeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
