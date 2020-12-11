-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2020 at 05:00 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktra`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cuahang`
--

CREATE TABLE `Cuahang` (
  `id` int NOT NULL,
  `tenhang` varchar(255) NOT NULL,
  `loaihang` varchar(255) NOT NULL,
  `gia` int NOT NULL,
  `soluong` int NOT NULL,
  `ngaytao` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Cuahang`
--

INSERT INTO `Cuahang` (`id`, `tenhang`, `loaihang`, `gia`, `soluong`, `ngaytao`, `mota`) VALUES
(1, 'mu', 'dsds', 2222, 222, 'gfggf', 'rrr'),
(6, 'Quần bò', 'quần', 50000000, 555, '12/12/2020', 'chat luong'),
(7, 'Kính râm', 'kính', 600000, 66, '15/12/2020', 'tốt'),
(8, 'Khăn', 'Khăn len', 9990000, 877, '10/12/2020', 'cực tốt'),
(9, 'Bóng', 'bóng đá', 950000, 99, '25/10/2020', 'rất tốt'),
(10, 'Đồng hồ', 'Đeo tay', 4500000, 10, '12/12/2020', 'tốt'),
(11, 'Máy tính', 'Để bàn', 90000000, 50, '19/07/2020', 'tốt'),
(12, 'Điện thoại', 'Samsung', 20000000, 2, '07/07/2020', 'tốt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cuahang`
--
ALTER TABLE `Cuahang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cuahang`
--
ALTER TABLE `Cuahang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
