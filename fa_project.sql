-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2016 at 12:37 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fa_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignedflights`
--

CREATE TABLE `assignedflights` (
  `id` int(10) NOT NULL,
  `flight_number` int(10) NOT NULL,
  `flight_date` date NOT NULL,
  `captain` varchar(255) NOT NULL,
  `first_officer` varchar(255) NOT NULL,
  `fal` varchar(255) NOT NULL,
  `fa1` varchar(255) NOT NULL,
  `fa2` varchar(255) NOT NULL,
  `fa3` varchar(255) NOT NULL,
  `fa4` varchar(255) NOT NULL,
  `fa5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignedflights`
--

INSERT INTO `assignedflights` (`id`, `flight_number`, `flight_date`, `captain`, `first_officer`, `fal`, `fa1`, `fa2`, `fa3`, `fa4`, `fa5`) VALUES
(4, 234, '2016-04-20', 'hlima', 'ygonzalez', 'apena', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_id` int(11) UNSIGNED NOT NULL,
  `flight_number` int(10) UNSIGNED NOT NULL,
  `flight_date` date NOT NULL,
  `flight_origin` varchar(5) NOT NULL,
  `flight_destination` varchar(5) NOT NULL,
  `flight_start` int(5) NOT NULL,
  `flight_end` int(5) NOT NULL,
  `assigned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_id`, `flight_number`, `flight_date`, `flight_origin`, `flight_destination`, `flight_start`, `flight_end`, `assigned`) VALUES
(6, 234, '2016-04-20', 'FLL', 'NYC', 1200, 1600, 1),
(11, 321, '2016-04-25', 'MIA', 'MCO', 2100, 2350, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `permissions` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `hash`, `permissions`) VALUES
(18, 'humberto', 'lima', 'test3@email.com', 'hlima', '$2y$10$x/29Toytk6Jo3u.0PlH52Ot.1xsLTEy8a8FUODydJv4oxDjxF2J6m', 'pilot'),
(20, 'annia', 'pena', 'test2@email.com', 'apena', '$2y$10$uobM2LmwisxKRafrO1Lni.TKK0YXx6nF0Kqu0/lQIbLMhAW408FQ6', 'fa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignedflights`
--
ALTER TABLE `assignedflights`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `flight_number` (`flight_number`,`flight_date`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flight_id`),
  ADD UNIQUE KEY `flight_number` (`flight_number`,`flight_date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignedflights`
--
ALTER TABLE `assignedflights`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flight_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
