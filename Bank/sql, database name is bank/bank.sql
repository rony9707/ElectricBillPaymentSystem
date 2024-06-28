-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 04:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `fullname` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `c1` int(255) NOT NULL,
  `c2` int(255) NOT NULL,
  `c3` int(255) NOT NULL,
  `c4` int(255) NOT NULL,
  `cvv` int(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`fullname`, `id`, `username`, `balance`, `c1`, `c2`, `c3`, `c4`, `cvv`, `month`, `year`) VALUES
('Agnibha', 11, '1', 11066, 4396, 6896, 8656, 6887, 7085, 'March', '2022'),
('Rony', 12, '2', 28187, 6898, 2256, 1885, 4049, 7246, 'August', '2023'),
('ewewqe', 13, '3', 19313, 9250, 2129, 2152, 4760, 2285, 'February', '2025');

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE `debit` (
  `fullname` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `c1` int(255) NOT NULL,
  `c2` int(255) NOT NULL,
  `c3` int(255) NOT NULL,
  `c4` int(255) NOT NULL,
  `cvv` int(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debit`
--

INSERT INTO `debit` (`fullname`, `id`, `username`, `balance`, `c1`, `c2`, `c3`, `c4`, `cvv`, `month`, `year`) VALUES
('Agnibha', 11, '1', 23753, 1170, 6750, 9042, 8982, 5245, 'January', '2028'),
('Rony', 12, '2', 17516, 6290, 8597, 7281, 3208, 4821, 'June', '2022'),
('ewewqe', 13, '3', 15595, 3322, 8284, 1054, 1199, 5169, 'March', '2026');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `c_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_real` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`c_id`, `username`, `fullname`, `password`, `password_real`, `email`, `phone_number`, `address`) VALUES
(11, '1', 'Agnibha', '2af9b1ba42dc5eb01743e6b3759b6e4b', 'Qwerty123', 'wqe@gmail.com', '2131231231', 'qwe'),
(12, '2', 'Rony', 'f92ec4b879be59aa29c5bc12aac57a2a', 'qWerty123', '123@gmail.com', '5234234123', '12312'),
(13, '3', 'ewewqe', '2af9b1ba42dc5eb01743e6b3759b6e4b', 'Qwerty123', 'weqw@213', '2131231231', '213132');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `debit`
--
ALTER TABLE `debit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
