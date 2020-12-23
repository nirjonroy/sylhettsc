-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 07:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `result7th`
--

CREATE TABLE `result7th` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll` varchar(300) NOT NULL,
  `registration` varchar(300) NOT NULL,
  `result` varchar(300) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `father` varchar(233) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `innovation_grade` varchar(20) NOT NULL,
  `innovation_cgpa` varchar(20) NOT NULL,
  `system_grade` varchar(40) NOT NULL,
  `system_cgpa` varchar(244) NOT NULL,
  `network_grade` varchar(200) NOT NULL,
  `network_cgpa` varchar(20) NOT NULL,
  `ecommerce_grade` varchar(20) NOT NULL,
  `ecommerce_cgpa` varchar(20) NOT NULL,
  `cyber_grade` varchar(20) NOT NULL,
  `cyber_cgpa` varchar(40) NOT NULL,
  `advance_grade` varchar(25) NOT NULL,
  `advance_cgpa` varchar(30) NOT NULL,
  `apps_grade` varchar(25) NOT NULL,
  `apps_cgpa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result7th`
--

INSERT INTO `result7th` (`id`, `roll`, `registration`, `result`, `name`, `class`, `father`, `mother`, `innovation_grade`, `innovation_cgpa`, `system_grade`, `system_cgpa`, `network_grade`, `network_cgpa`, `ecommerce_grade`, `ecommerce_cgpa`, `cyber_grade`, `cyber_cgpa`, `advance_grade`, `advance_cgpa`, `apps_grade`, `apps_cgpa`) VALUES
(1, '372196', '228879', '3.20', 'Nirjon Roy', 'Diploma- in Engineering 7th semister', 'Nirupom Roy', 'Moni Roy', 'A+', '4.00', 'A+', '4.00', 'A', '3.75', 'A+', '4.00', 'A+', '4.00', 'A', '3.75', 'A+', '4.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result7th`
--
ALTER TABLE `result7th`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result7th`
--
ALTER TABLE `result7th`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
