-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 04:34 AM
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
-- Database: `ebill`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `billgenerate`
--

CREATE TABLE `billgenerate` (
  `id` int(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `units` int(255) NOT NULL,
  `bill` int(255) NOT NULL,
  `cmonth` varchar(255) NOT NULL,
  `duedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billgenerate`
--

INSERT INTO `billgenerate` (`id`, `username`, `units`, `bill`, `cmonth`, `duedate`) VALUES
(103, '1', 186, 1116, 'Aug', '2019-08-08'),
(104, '2', 154, 924, 'May', '2019-05-11'),
(105, '3', 201, 1206, 'May', '2019-05-11'),
(106, 'rony9707', 102, 612, 'Aug', '2019-08-11'),
(107, 'rony19978', 187, 1122, 'Aug', '2019-08-11'),
(108, 'rony9808', 151, 906, 'Aug', '2019-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_real` varchar(255) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `imglink` varchar(255) NOT NULL,
  `c_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `fullname`, `password`, `password_real`, `phone_number`, `email`, `age`, `address`, `imglink`, `c_id`) VALUES
('1', 'Agnibha', '2af9b1ba42dc5eb01743e6b3759b6e4b', 'Qwerty123', '8013921775', 'asd@gmail.com', 21, '31', 'uploads/maxresdefault.jpg', 52),
('2', 'Rony', 'f92ec4b879be59aa29c5bc12aac57a2a', 'qWerty123', '2131231231', 'dew@gmail.com', 22, '213213', 'uploads/img1.jpg', 53),
('3', 'Aritra', 'ec5a756dcf703b570aaab0644089eedd', 'qwErty123', '1231231231', 'weqer@gmail.com', 22, 'fsar', 'uploads/download.jpg', 54),
('rony9707', 'Agnibha Chowdhury', '2af9b1ba42dc5eb01743e6b3759b6e4b', 'Qwerty123', '8013921775', 'chowdhury.agnibha.98@gmail.com', 21, 'P 16 Ishwar Gupta Road', 'uploads/Desert.jpg', 55),
('rony19978', 'ewrwq rwe ', 'f92ec4b879be59aa29c5bc12aac57a2a', 'qWerty123', '2131231231', '32@23', 21, 'wqe', 'uploads/Chrysanthemum.jpg', 56),
('rony9808', 'A', '2af9b1ba42dc5eb01743e6b3759b6e4b', 'Qwerty123', '1231231231', 'ew@123', 21, '321', 'uploads/Koala.jpg', 57);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportno` int(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `bywho` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportno`, `report`, `bywho`) VALUES
(1, ' dasdasd', 'sad'),
(2, ' f aofnsaoidfnasoidfnasnfao naidnflasudiflnas duiflnsa dflasnd fusandfiusnf asdufiasndfidsaufnsudf nsadufnsufnsiufnsdadifunqjrenrljwnerlwermwkrmqckerm lqwer qwercqwerxqwer', 'rony'),
(3, ' f aofnsaoidfnasoidfnasnfao naidnflasudiflnas duiflnsa dflasnd fusandfiusnf asdufiasndfidsaufnsudf nsadufnsufnsiufnsdadifunqjrenrljwnerlwermwkrmqckerm lqwer qwercqwerxqwerfefseeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'Agnibha Chowdhury'),
(4, 'aritra das', 'qwe'),
(5, 'besrtgearst', 'rony'),
(6, 'hahahahha \r\nLMAO\r\nLOL', 'Agnibha');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID`, `username`, `full_name`, `email`, `status`) VALUES
(8, '1', 'Agnibha', 'asd@gmail.com', 'Not Paid'),
(9, '2', 'Rony', 'dew@gmail.com', 'Not Paid'),
(10, '3', 'Aritra', 'weqer@gmail.com', 'Not Paid'),
(11, '0', 'Agnibha Chowdhury', 'chowdhury.agnibha.98@gmail.com', 'PAID'),
(12, '0', 'ewrwq rwe ', '32@23', 'PAID'),
(13, 'rony9808', 'A', 'ew@123', 'Not Paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `billgenerate`
--
ALTER TABLE `billgenerate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportno`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billgenerate`
--
ALTER TABLE `billgenerate`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
