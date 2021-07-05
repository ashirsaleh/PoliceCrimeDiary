-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2021 at 10:34 AM
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
(20, 'Keaton', 'Galena', 'Modi repudiandae fugiat nulla sunt sunt rem et molestiae quia sit esse', '2021-04-18 14:51:00', 'Aut tempora omnis delectus provident ex', '+255689756325', 'Jada Horton', 'Eum vel ratione proident velit aliqua Incididunt ipsum eos sunt sunt qui ea', 'Impedit est nostrum vitae aut', 'Non delectus magna deserunt nulla cupidatat voluptatem ab sit unde anim quas et quis enim ea eos', '', 363, 'Enim aut perspiciati', 'assets/uploads/documents/Screenshot from 2021-03-01 16-21-50_2.png'),
(21, 'Abdul', 'Chancellor', 'Occaecat eos expedita eu fuga Fugiat magna ut fugiat ipsa occaecat ea eaque eos excepturi volup', '2021-06-11 17:43:00', 'Autem velit voluptatem reprehenderit minus eos sit vel ea qui delectus', '+255689756325', 'Phoebe Humphrey', 'Eos nulla et voluptatibus eveniet exercitation cumque itaque in labore molestias dolorem sint ali', 'Et aperiam dolor incidunt saepe cum quia do sed qui aliquip possimus minima beatae id', 'Recusandae Ullamco temporibus dolorem maiores velit cupidatat elit', '', 533, 'Sit magni sunt dolor', 'assets/uploads/documents/Screenshot from 2021-03-01 16-23-54.png'),
(23, 'Omar Mcknight', 'Tasha Walsh', 'Modi inventore aut fugiat expedita et accusantium suscipit sequi et laborum sequi elit corporis se', '2020-01-06 17:43:00', 'Officiis natus aspernatur culpa placeat quis repudiandae animi', '+255689756325', 'Madison Bauer', 'Dolorem Nam in accusamus ipsum et cumque molestiae a ratione quo in do in voluptatem Reprehenderit', 'Natus nobis rerum rem non sit quo molestiae nisi et voluptate ad', 'Quis lorem laboris et commodi ex adipisicing eaque in velit pariatur Sed voluptas sit totam volupta', '', 729, 'Non omnis sint tempo', 'assets/uploads/documents/Screenshot from 2021-03-01 16-21-50_3.png'),
(25, 'Kiona', 'Matthew', 'Facere officia et dolorem et inventore', '1979-12-18 05:22:00', 'Veritatis est dolor eaque sint cumque ea asperiores aspernatur aut mollit quam', '+255710234191', 'Clementine Reyes', 'Saepe rerum odit labore aliquid et ea ullamco et dolore maiores neque proident vero et sunt', 'Dicta error aut id quo et ut dolore nobis duis voluptatem blanditiis fugiat ut', 'Cupidatat dolorum saepe qui veniam veritatis', '', 887, 'Alias consectetur ma', 'assets/uploads/documents/Screenshot from 2021-03-01 16-23-54_2.png');

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
(24, '00321', '$2y$10$V8z46EaE7nniKADaMxOQFeR/69bhz5NQ4jepc4VVPpy5bEZI3QGgy', '', 'Hashir', 'Saleh', 'Head of Station', 0, '+255754552233', 0, 'hashir saleh papa                ', '2021-07-05 02:37:53'),
(25, '00654', '$2y$10$cBYTy76GY7/sOMXvYfzbHOjddSLRFhAQ1bf7QD/jTY22yhG9OCmx2', '', 'mohammed', 'issa', 'Police officer', 0, '+255754558899', 0, 'mohammed issa  hamad\n                ', '2021-07-05 02:39:21'),
(27, '10033', '$2y$10$3erV7z4u7bmx81EKbHqKNO06B0.mHkv2F.u1s.jC.0m6b/EI21/NO', '', 'someuser', 'otheruser', 'Head of Station', 0, '+255754552233', 0, 'some other user is here here and here\n                \n                ', '2021-07-05 02:47:57');

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
  MODIFY `complainerId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `accuserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `policeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
