-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2021 at 11:00 AM
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
  `caseId` int(11) NOT NULL,
  `caseNo` varchar(100) NOT NULL,
  `criminalName` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `conviction` text DEFAULT NULL,
  `conDate` datetime NOT NULL DEFAULT current_timestamp(),
  `caseStatus` varchar(20) NOT NULL
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
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `natureComplaints` varchar(255) NOT NULL,
  `phoneNum` varchar(50) NOT NULL,
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
(28, 'Keith Chen', 'Astra Manning', 'Consequuntur ex quisquam voluptatem Ea fuga Voluptatem in ipsam sit mollit delectus', '1975-09-21 11:52:00', 'Delectus occaecat nihil aut id autem ut ex qui ut sit doloremque quos excepteur sunt architecto en', '+255449342767', 'Yoshi Hester', 'Doloribus et in sed blanditiis sed duis ducimus lorem obcaecati molestiae nemo nostrum', 'Adipisicing eum dolor optio corrupti et et aliquid', 'Sunt rerum sunt fuga Eveniet qui ea deleniti aut reprehenderit', '', 466, 'Qui aliqua Omnis con', 'assets/uploads/documents/59-594549_best-spacex.jpg'),
(29, 'Ivan Willis', 'Bethany Wilson', 'Minus quaerat illum facilis ad voluptatem', '2011-08-20 09:09:00', 'Suscipit dolore sint aperiam sed culpa do magni dolore', '+255605500883', 'Isaac Yang', 'Et culpa laborum Tempora iusto nulla est recusandae Ex molestiae autem libero quo', 'Nisi excepturi omnis quasi quisquam adipisicing placeat irure similique repellendus Quisquam deser', 'Voluptas sint tempora veniam consequat Eius dolore soluta tempor sed voluptatem minima assumenda', '', 451, 'Ex eveniet deserunt ', 'assets/uploads/documents/320453.jpg');

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
('Xenos Todd', 48, 'Katelyn Mcclain', 8, 'Sit qui excepteur id et aut similique perferendis enim ea odit et voluptate quisquam', 'Jennifer Andrews', '', 'Nobis labore duis et exercitationem saepe cillum in irure nulla aperiam exercitation ut voluptatem c', 96, 'Dolorem ex libero ipsum aut mollit adipisicing non ullam saepe proident pariatur Est quasi eius ', '', '', '1976-02-12 19:54:00');

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
(24, '00321', '$2y$10$V8z46EaE7nniKADaMxOQFeR/69bhz5NQ4jepc4VVPpy5bEZI3QGgy', '', 'Hashir', 'Saleh', 'Head of Station', 0, '+255754552233', 0, 'hashir saleh papa                ', '2021-07-05 02:37:53'),
(25, '00654', '$2y$10$cBYTy76GY7/sOMXvYfzbHOjddSLRFhAQ1bf7QD/jTY22yhG9OCmx2', '', 'mohammed', 'issa', 'Police officer', 0, '+255754558899', 0, 'mohammed issa  hamad\n                ', '2021-07-05 02:39:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseId`);

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
  MODIFY `caseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complainers`
--
ALTER TABLE `complainers`
  MODIFY `complainerId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `accuserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `policeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
