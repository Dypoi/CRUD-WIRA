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
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `productdb`
--

CREATE TABLE `productdb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `purchase_price` float DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdb`
--

INSERT INTO `productdb` (`id`, `product_name`, `deskripsi`, `purchase_price`, `product_price`, `product_image`) VALUES
(1, 'Batik', 'batik nomor 1 di indonesia', 500, 700, '30-foto.jpg'),
(2, 'Batik Hijau', 'batik nomor 2 diindonesia ', 1000, 1349, '770-foto.jpg'),
(5, 'foto terbagus', 'ini adalah foto yang bagus', 300, 311, '114-foto.jpg'),
(8, 'test Produk', 'ini saya juga tidak tau ', 500, 599, '329-is.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productdb`
--
ALTER TABLE `productdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productdb`
--
ALTER TABLE `productdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
