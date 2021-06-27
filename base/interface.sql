-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 04:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interface`
--

-- --------------------------------------------------------

--
-- Table structure for table `int_base`
--

CREATE TABLE `int_base` (
  `id` int(100) NOT NULL,
  `Left_value` text NOT NULL,
  `Right_value` text NOT NULL,
  `Stop_value` text NOT NULL,
  `Backward_value` text NOT NULL,
  `Forward_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `int_base`
--

INSERT INTO `int_base` (`id`, `Left_value`, `Right_value`, `Stop_value`, `Backward_value`, `Forward_value`) VALUES
(1, 'Left', '', '', '', ''),
(2, '', 'Right', '', '', ''),
(3, '', '', 'Stop', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `int_base`
--
ALTER TABLE `int_base`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `int_base`
--
ALTER TABLE `int_base`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
