-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 04:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `address`, `type`, `lat`, `lng`) VALUES
(1, 'Usagara_HTT', 'TZ2860', 'site', -2.71810, 33.02854),
(2, 'Paradize-Hostel', 'TZ2595', 'site', -2.60731, 32.90492),
(3, 'Bugando', 'TZ0280', 'site', -2.52997, 32.91014),
(4, 'BugandoVTL', 'TZ3881', 'site', -2.52320, 32.90791),
(5, 'Nyegezi', 'TZ0090', 'site', -2.59856, 32.90781),
(6, 'Buhongwa', 'TZ1423', 'site', -2.61143, 32.93898),
(7, 'Buhongwa1Qua', 'TZ1777', 'site', -2.59841, 32.92958),
(8, 'BusisiVoda', 'TZ1644', 'site', -2.71180, 32.89996),
(9, 'ButimbaHelios', 'TZ1291', 'site', -2.56679, 32.91020),
(10, 'Capripoint', 'TZ0577', 'site', -2.52678, 32.88834);
(11, 'CapripointVoda', 'TZ1783', 'site', -2.52580, 32.89440);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
