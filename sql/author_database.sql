-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 10:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `author_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors_table`
--

CREATE TABLE `authors_table` (
  `Author_ID` int(11) NOT NULL,
  `Author_FullName` varchar(255) NOT NULL,
  `Author_Email_Address` varchar(255) NOT NULL,
  `Author_Address` varchar(255) NOT NULL,
  `Author_Biography` text NOT NULL,
  `Author_Date_Of_Birth` date NOT NULL,
  `Author_Suspended` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors_table`
--
ALTER TABLE `authors_table`
  ADD PRIMARY KEY (`Author_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors_table`
--
ALTER TABLE `authors_table`
  MODIFY `Author_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
