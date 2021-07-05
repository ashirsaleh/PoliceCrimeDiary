-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2021 at 07:05 AM
-- Server version: 10.3.29-MariaDB-0+deb10u1
-- PHP Version: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(11) NOT NULL,
  `case_no` int(11) NOT NULL,
  `criminal_name` varchar(255) NOT NULL,
  `action_commited` varchar(255) NOT NULL,
  `conviction` varchar(255) NOT NULL,
  `d_conviction` date NOT NULL,
  `case_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `case_no`, `criminal_name`, `action_commited`, `conviction`, `d_conviction`, `case_status`) VALUES
(1, 690, 'motinho', 'killing', 'sentenced to death', '2021-07-12', 'UNSOLVED CASE');

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
  `natureComplaints` varchar(255) NOT NULL,
  `phoneNum` int(50) NOT NULL,
  `th_name` varchar(30) NOT NULL,
  `accusation` varchar(255) NOT NULL,
  `def_info` varchar(255) NOT NULL,
  `other_info` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `p_number` int(15) NOT NULL,
  `color` varchar(20) NOT NULL,
  `w_statement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainers`
--

INSERT INTO `complainers` (`complainerId`, `Fname`, `Lname`, `address`, `date`, `natureComplaints`, `phoneNum`, `th_name`, `accusation`, `def_info`, `other_info`, `type`, `p_number`, `color`, `w_statement`) VALUES
(12, 'Shana Orr', 'Miriam Campos', 'Eum illum veniam q', '1971-10-22', 'Nisi enim non in mag', 0, 'Scott Blackburn', '', 'Inventore est accus', 'Minim sit dolore sun', '', 882, 'Nemo rerum qui id am', ''),
(13, 'Megan Vaughn', 'Alden Pratt', 'Dolorum sint dolor ', '1981-12-22', 'Sit pariatur Nobis ', 0, 'Denise Todd', 'Fugit fugiat ullam', 'Facere cupiditate co', 'Magnam minim soluta ', '', 74, 'Dolorum est officia ', ''),
(14, 'Whoopi Rowe', 'Daniel Valentine', 'In blanditiis vel ad', '1980-12-23', 'Aut sint sint harum', 0, 'Mona Mccullough', 'Quia corporis cupidi', 'Adipisci voluptatem ', 'Nostrum ea temporibu', '', 698, 'Velit non explicabo', ''),
(15, 'MacKensie Chaney', 'Armand Carney', 'Id accusamus rerum s', '1986-10-06', 'Sed exercitationem u', 0, 'Stacy Hoffman', 'Nobis earum omnis vo', 'Dolore nulla explica', 'Repudiandae sit vero', '', 575, 'Elit est quo est s', '');

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

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`fName`, `accuserId`, `lName`, `age`, `locationArrested`, `guardianName`, `gRelation`, `circumstance`, `bailset`, `charges`, `resident`, `wstatus`, `dateArrested`) VALUES
('Heidi Guerrero', 46, 'Fulton Garner', 18, 'Assumenda ut quas at', 'Dieter Vega', '', 'Dolorum dolorem lore', 54, 'Ad unde aut placeat', '', '', '2018-10-23 12:28:00');

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
(21, '00321', '$2y$10$7f7IQZ85a9de558z48YVoeI7WJMY5laNO7nUWB97ORmp6Nl8dCShG', '', 'Hashir', 'Sales', 'Head Of Station', 0, '+255754552233', 0, 'The police office of  the stations\n                ', '2021-07-04 23:59:14'),
(23, '00321', '$2y$10$7f7IQZ85a9de558z48YVoeI7WJMY5laNO7nUWB97ORmp6Nl8dCShG', '', 'Hashir', 'Sales', 'Head Of Station', 0, '+255754552233', 0, 'The police office of  the stations\n                ', '2021-07-04 23:59:14');

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
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complainers`
--
ALTER TABLE `complainers`
  MODIFY `complainerId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `accuserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `policeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
