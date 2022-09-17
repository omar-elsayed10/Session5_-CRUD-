-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 08:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regform`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `Areacode` varchar(4) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `exist` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `fname`, `lname`, `company`, `email`, `Areacode`, `phone`, `sub`, `exist`) VALUES
(1, 'Omar', 'Elsayed', 'Canoups', '3mar153153@gmail.com', '+20', '01098320860', 'Subject 3', '0'),
(2, 'Mohamed', 'Ali', 'Valeo', 'moh1200@gmail.com', '+20', '01128574560', 'Subject 1', '1'),
(3, 'Aya', 'adel', 'Graket', 'ayaadel45@gmail.com', '+20', '01254789625', 'Subject 2', '1'),
(4, 'Fares', 'Atef', 'AUC', 'frsatef@hotmail.com', '+20', '01086575260', 'Subject 3', '0'),
(5, 'alaa', 'mohammed', 'intel', 'alaa79@hotmail.com', '+20', '01262143057', 'Subject 1', '1'),
(6, '', '', '', '', '', '', '', ''),
(7, 'Omar', 'Elsayed', 'Canoups', '3mar153153@gmail.com', '+20', '01098320860', 'Subject 3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
