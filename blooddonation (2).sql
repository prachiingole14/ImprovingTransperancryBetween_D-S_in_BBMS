-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 06:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `awareness_camps`
--

CREATE TABLE `awareness_camps` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Contact_no` bigint(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awareness_camps`
--

INSERT INTO `awareness_camps` (`id`, `name`, `Contact_no`, `address`, `date_time`) VALUES
(1, 'Yuva Blood Donation Awareness Camp', 9874563210, 'Warje, Pune', '2024-01-12 10:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbanks`
--

CREATE TABLE `bloodbanks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Contact_no` bigint(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodbanks`
--

INSERT INTO `bloodbanks` (`id`, `name`, `Contact_no`, `address`) VALUES
(1, '24 care center', 9874563210, 'Warje, Pune'),
(2, 'Tatpar Seva', 7418529630, 'Yavatmal');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstocks`
--

CREATE TABLE `bloodstocks` (
  `id` int(11) NOT NULL,
  `bb_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodstocks`
--

INSERT INTO `bloodstocks` (`id`, `bb_name`, `address`, `blood_grp`, `unit`) VALUES
(1, '24 care center', 'Warje, Pune', 'A+', '801-1000'),
(2, '24 care center', 'Warje, Pune', 'O+', '201-400'),
(3, 'helpline', 'Warje, Pune', 'A+', '400');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donates`
--

CREATE TABLE `blood_donates` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Contact_no` bigint(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_donates`
--

INSERT INTO `blood_donates` (`id`, `name`, `Contact_no`, `address`, `date_time`) VALUES
(1, 'Yogdan Shibir', 7418529630, 'Warje, Pune', '2024-01-30 08:46:00.000000'),
(2, 'youth blood donation foundation', 9874563210, 'nashik', '2024-01-19 15:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Contact_no` bigint(15) NOT NULL,
  `Blood_grp` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `age` int(5) NOT NULL,
  `weight` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`id`, `name`, `Contact_no`, `Blood_grp`, `email`, `password`, `age`, `weight`) VALUES
(1, 'Prachi Ingole', 8482849491, 'A+', 'prachii760@gmail.com', 'Prachi@123', 26, 51);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Contact_no` bigint(15) NOT NULL,
  `Blood_grp` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `age` int(5) NOT NULL,
  `weight` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Contact_no`, `Blood_grp`, `email`, `password`, `age`, `weight`) VALUES
(1, 'Vedika', 8482849491, 'A-', 'prachii760@gmail.com', 'vedika@123', 21, 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awareness_camps`
--
ALTER TABLE `awareness_camps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodstocks`
--
ALTER TABLE `bloodstocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_donates`
--
ALTER TABLE `blood_donates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awareness_camps`
--
ALTER TABLE `awareness_camps`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloodstocks`
--
ALTER TABLE `bloodstocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood_donates`
--
ALTER TABLE `blood_donates`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
