-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Apr 06, 2023 at 09:47 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `ID` int NOT NULL,
  `Names` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`ID`, `Names`, `Email`, `Passwords`) VALUES
(1, 'satyam', '1', '1'),
(2, '5', '5', '5'),
(3, 'SATYAM', 'BAJPAI', '123'),
(4, '123', '123', '123'),
(5, 'Satyam Bajpai', 'satyamjarvis007@gmail.com', 'hellobuddy@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
