-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 10:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `cust_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cnic` bigint(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`cust_id`, `name`, `cnic`, `phone`, `email`, `address`, `dt`, `id`) VALUES
(1, 'fahad', 34444, 4444, 'fahadfarrukh26@gmail.com', 'fgbfgn', '2023-01-26 17:38:40', 1),
(2, 'fahad', 3333, 333333, 'fahadfarrukh26@gmail.com', 'fgbfgn', '2023-01-26 17:49:17', 1),
(3, 'fahad', 33, 33, 'fahadfarrukh26@gmail.com', 'fgbfgn', '2023-01-26 17:55:39', 1),
(4, 'fahad', 5445, 644, 'fahadfarrukh26@gmail.com', 'fgbfgn', '2023-01-26 17:56:38', 1),
(5, 'fb', 34444, 4444, 'gbf@drdgr', 'fgbfgn', '2023-01-26 18:16:51', 1),
(6, 'vbn bn', 0, 0, 'fahadfarrukh26@gmail.com', 'trbrtb', '2023-01-26 18:50:20', 1),
(7, 'db', 0, 0, 'hh@gdfb', 'dbvdfb', '2023-06-23 11:37:15', 3),
(8, 'fgbgb', 0, 0, 'a@a', 'egteg', '2023-06-23 11:42:50', 2),
(9, 'abc', 123, 123, 'a@a', 'hah', '2023-06-23 12:05:49', 4),
(10, ' fg bd', 0, 0, 'dfbdfb@dfbdb', 'dfbdbf', '2023-08-29 12:20:14', 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `message`, `dt`, `id`) VALUES
(1, 'ngh ', 'a@dgbgfb', 'hn gng ', '2023-01-26 18:22:27', 1),
(2, 'vbn bn ', 'fahadfarrukh26@gmail.com', 'g f ghnghn', '2023-01-26 18:22:36', 1),
(3, 'vbn bn', 'fahadfarrukh26@gmail.com', 'gb fdbgdfgbn', '2023-01-26 18:50:40', 1),
(11, 'abc', 'a@a', 'abcdd', '2023-06-23 12:06:21', 4);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `sno` int(255) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `product` int(100) NOT NULL,
  `price` float NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`sno`, `pname`, `quantity`, `product`, `price`, `dt`, `id`) VALUES
(2, '', 4, 2, 100, '2023-01-26 17:32:13', 1),
(3, '', 5, 2, 125, '2023-01-26 17:49:07', 1),
(4, '', 4, 2, 100, '2023-01-26 17:55:26', 1),
(5, 'Panadol', 5, 1, 100, '2023-01-26 17:56:23', 1),
(6, '', 1, 2, 25, '2023-01-26 18:10:47', 1),
(7, '', 3, 5, 360, '2023-01-26 18:16:37', 1),
(10, 'Calpol', 5, 2, 125, '2023-01-26 18:50:11', 1),
(12, '', 0, 1, 0, '2023-06-22 13:53:44', 2),
(13, '', 0, 1, 0, '2023-06-22 13:55:08', 2),
(14, '', 0, 1, 0, '2023-06-22 13:55:14', 2),
(15, '', 0, 1, 0, '2023-06-22 13:55:45', 2),
(16, '', 0, 1, 0, '2023-06-22 13:55:52', 2),
(17, '', 0, 1, 0, '2023-06-22 13:58:00', 2),
(18, '', 0, 0, 0, '2023-06-22 13:58:02', 2),
(19, '', 0, 0, 0, '2023-06-22 13:58:17', 2),
(20, '', 0, 0, 0, '2023-06-22 13:58:19', 2),
(21, '', 0, 0, 0, '2023-06-22 14:01:37', 2),
(24, '', 0, 0, 0, '2023-06-23 11:29:39', 3),
(25, '', 0, 0, 0, '2023-06-23 11:30:30', 3),
(26, '', 0, 0, 0, '2023-06-23 11:30:53', 3),
(27, '', 0, 0, 0, '2023-06-23 11:31:18', 3),
(28, '', 0, 0, 0, '2023-06-23 11:31:21', 3),
(29, '', 0, 0, 0, '2023-06-23 11:31:24', 3),
(30, '', 0, 0, 0, '2023-06-23 11:33:16', 3),
(31, '', 0, 0, 0, '2023-06-23 11:33:19', 3),
(32, '', 0, 0, 0, '2023-06-23 11:33:21', 3),
(33, '', 0, 0, 0, '2023-06-23 11:39:09', 3),
(34, '', 0, 0, 0, '2023-06-23 11:40:25', 3),
(36, '', 0, 0, 0, '2023-06-23 11:42:21', 2),
(38, '', 0, 0, 0, '2023-06-23 12:05:29', 4),
(39, 'Calpol', 1, 2, 25, '2023-08-29 12:19:56', 6),
(41, 'Calpol', 1, 2, 25, '2023-08-29 12:24:06', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'a@a', '$2y$10$70Cr8HKdCy7DeRupyHakyuGEzZnlNr3i/dw43WMn7qwo6A9pzKS16', '2023-01-26 17:31:50'),
(2, 'cs201033', '$2y$10$LxjEYDVikUx9Jo1RtYt2JOhtrdICXf5xlbzAZe9y98w/5lyoZd64O', '2023-06-22 13:44:45'),
(3, 'dus', '$2y$10$F4TyMIKOWhXtij9AL0JIouxfSFpmBQcGskdNWjVmrAhoMOATvE8Rm', '2023-06-23 11:28:44'),
(4, 'dsu', '$2y$10$IPSZofKgh4OGq3zjuMXhVuhwf9h/R8R3CEW3woLGHhNdIgm1HsN.K', '2023-06-23 12:04:42'),
(5, 'qirat', '$2y$10$VQyLODRSwEVBsyfR80ZT1Omjm/fNAex2FXewKwcVIB/c22gcStQ/2', '2023-06-26 12:54:11'),
(6, 'fahad', '$2y$10$zpGUYmfPc3bWe2v.uwmc8e/ZknYaFlrFCmmrBd0jrZKBmdmIsvmpe', '2023-08-29 12:10:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `billing` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `contact` (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `total` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `cust_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `total`
--
ALTER TABLE `total`
  ADD CONSTRAINT `total` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
