-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 09:26 AM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `address`, `phone`, `password`, `user_type`) VALUES
(1, 'test', 'dykurnia7@gmail.com', NULL, NULL, 'f936e6010fec57ff2f73e9e97cf98b55', 'user'),
(2, 'admin', 'admin@gmail.com', 'Tangerang', 8213, '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'admin1', 'admin1@gmail.com', NULL, NULL, 'e00cf25ad42683b3df678c61f42c6bda', 'user'),
(4, 'arif', 'arif@gmail.com', 'Tangerang', 87321, '0ff6c3ace16359e41e37d40b8301d67f', 'customer'),
(5, 'Dy', 'admin@gmail.com', NULL, NULL, '4d7565a0d64b31b41e9c0f04c59623b1', 'admin'),
(6, 'dy', 'dy@gmail.com', 'tangerang', 8123, '8e7dd5d3e76aa952e21999a5537dcffb', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
