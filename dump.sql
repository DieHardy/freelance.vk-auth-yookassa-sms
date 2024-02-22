-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2024 at 07:25 PM
-- Server version: 5.7.42
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dihardy_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `final_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `status`, `email`, `id_user`, `final_date`) VALUES
(100, 'fs', 200, 1, 's@mail.ru', 558057995, '2024-05-12 12:36:48'),
(101, 'fs', 400, 1, 'nerdyaus21@gmail.com', 558057995, '2024-05-14 12:36:48'),
(102, 's', 400, 1, 'nerdyaus21@gmail.com', 558057995, '2024-05-16 12:36:48'),
(103, 'f', 600, 1, 's@mail.ru', 558057995, '2024-05-19 12:36:48'),
(104, 'x zz', 600, 1, 's@mail.ru', 558057995, '2024-05-22 12:36:48'),
(105, 'ы', 600, 1, 's@mail.ru', 558057995, '2024-05-25 12:36:48'),
(106, 'f', 400, 1, 'nerdyaus21@gmail.com', 558057995, '2024-05-27 12:36:48'),
(107, 'fs', 600, 1, 'nerdyaus21@gmail.com', 558057995, '2024-08-25 12:36:48'),
(108, 'fs', 200, 1, 'nerdyaus21@gmail.com', 558057995, '2024-09-24 12:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `days`) VALUES
(5, '1 Месяц', 200, 30),
(6, '2 Месяца', 400, 60),
(7, '3 Месяца', 600, 90),
(8, '6 Месяцов', 1200, 180);

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE `promocodes` (
  `id_code` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promocodes`
--

INSERT INTO `promocodes` (`id_code`, `code`, `days`) VALUES
(3, 'test', 4),
(9, 'day6', 1),
(10, 'day7', 1),
(11, 'day8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `date` datetime NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`date`, `payment_status`, `payment_id`, `payment_paid`, `payment_amount`, `payment_order_id`) VALUES
('2024-02-17 13:15:43', NULL, NULL, NULL, NULL, NULL),
('2024-02-17 13:15:53', NULL, NULL, NULL, NULL, NULL),
('2024-02-17 13:16:35', NULL, NULL, NULL, NULL, NULL),
('2024-02-17 13:17:59', NULL, NULL, NULL, NULL, NULL),
('2024-02-17 13:20:47', NULL, NULL, NULL, NULL, NULL),
('2024-02-17 13:22:26', NULL, NULL, NULL, NULL, NULL),
('2024-02-17 13:29:54', 'succeeded', '2d629e53-000f-5000-9000-1727dad3354f', '1', '600.00', '103'),
('2024-02-17 13:30:04', 'succeeded', '2d629e53-000f-5000-9000-1727dad3354f', '1', '600.00', '103'),
('2024-02-17 13:30:46', 'succeeded', '2d629e53-000f-5000-9000-1727dad3354f', '1', '600.00', '103'),
('2024-02-17 13:31:08', 'succeeded', '2d629ea2-000f-5000-a000-1211bed1914e', '1', '600.00', '104'),
('2024-02-17 13:31:18', 'succeeded', '2d629ea2-000f-5000-a000-1211bed1914e', '1', '600.00', '104'),
('2024-02-17 13:32:00', 'succeeded', '2d629b04-000f-5000-9000-127abc17122e', '1', '400.00', '102'),
('2024-02-17 13:32:00', 'succeeded', '2d629ea2-000f-5000-a000-1211bed1914e', '1', '600.00', '104'),
('2024-02-17 13:32:10', 'succeeded', '2d629e53-000f-5000-9000-1727dad3354f', '1', '600.00', '103'),
('2024-02-17 13:33:24', 'succeeded', '2d629ea2-000f-5000-a000-1211bed1914e', '1', '600.00', '104'),
('2024-02-17 13:34:58', 'succeeded', '2d629e53-000f-5000-9000-1727dad3354f', '1', '600.00', '103'),
('2024-02-17 13:36:12', 'succeeded', '2d629ea2-000f-5000-a000-1211bed1914e', '1', '600.00', '104'),
('2024-02-17 13:43:52', 'succeeded', '2d62a19e-000f-5000-8000-19aa87c8d1ea', '1', '600.00', '105'),
('2024-02-17 13:44:02', 'succeeded', '2d62a19e-000f-5000-8000-19aa87c8d1ea', '1', '600.00', '105'),
('2024-02-17 13:44:44', 'succeeded', '2d62a19e-000f-5000-8000-19aa87c8d1ea', '1', '600.00', '105'),
('2024-02-17 13:46:08', 'succeeded', '2d62a19e-000f-5000-8000-19aa87c8d1ea', '1', '600.00', '105'),
('2024-02-17 13:46:10', 'succeeded', '2d629e53-000f-5000-9000-1727dad3354f', '1', '600.00', '103'),
('2024-02-17 13:47:24', 'succeeded', '2d629ea2-000f-5000-a000-1211bed1914e', '1', '600.00', '104'),
('2024-02-17 13:48:56', 'succeeded', '2d62a19e-000f-5000-8000-19aa87c8d1ea', '1', '600.00', '105'),
('2024-02-17 13:55:13', 'succeeded', '2d628b6d-000f-5000-9000-1ccf7cd8bde8', '1', '200.00', '97'),
('2024-02-17 14:00:08', 'succeeded', '2d62a19e-000f-5000-8000-19aa87c8d1ea', '1', '600.00', '105'),
('2024-02-17 14:10:23', 'succeeded', '2d628f04-000f-5000-9000-1d2f33d271fa', '1', '200.00', '98'),
('2024-02-17 14:11:32', 'succeeded', '2d628f3d-000f-5000-9000-1b1199968cc9', '1', '1200.00', '99'),
('2024-02-17 14:22:41', 'succeeded', '2d6291d5-000f-5000-a000-1e826815506d', '1', '200.00', '100'),
('2024-02-17 14:42:23', 'succeeded', '2d629680-000f-5000-8000-103ba0c9444a', '1', '400.00', '101'),
('2024-02-17 15:01:36', 'succeeded', '2d629b04-000f-5000-9000-127abc17122e', '1', '400.00', '102'),
('2024-02-17 15:15:46', 'succeeded', '2d629e53-000f-5000-9000-1727dad3354f', '1', '600.00', '103'),
('2024-02-17 15:17:00', 'succeeded', '2d629ea2-000f-5000-a000-1211bed1914e', '1', '600.00', '104'),
('2024-02-17 15:29:44', 'succeeded', '2d62a19e-000f-5000-8000-19aa87c8d1ea', '1', '600.00', '105'),
('2024-02-17 17:35:37', 'succeeded', '2d616ea7-000f-5000-8000-1a52c48807fd', '1', '200.00', '75'),
('2024-02-17 17:40:33', 'succeeded', '2d617042-000f-5000-a000-13e3c85bccce', '1', '200.00', '76'),
('2024-02-17 17:43:37', 'succeeded', '2d6170ff-000f-5000-a000-112c3b70f97f', '1', '200.00', '77'),
('2024-02-17 18:04:47', 'succeeded', '2d62dec3-000f-5000-9000-11d4aaa065c7', '1', '400.00', '106'),
('2024-02-17 18:04:57', 'succeeded', '2d62dec3-000f-5000-9000-11d4aaa065c7', '1', '400.00', '106'),
('2024-02-17 18:05:39', 'succeeded', '2d62dec3-000f-5000-9000-11d4aaa065c7', '1', '400.00', '106'),
('2024-02-17 18:06:50', 'succeeded', '2d62df3e-000f-5000-a000-12ffc718bd0a', '1', '600.00', '107'),
('2024-02-17 18:07:00', 'succeeded', '2d62df3e-000f-5000-a000-12ffc718bd0a', '1', '600.00', '107'),
('2024-02-17 18:07:03', 'succeeded', '2d62dec3-000f-5000-9000-11d4aaa065c7', '1', '400.00', '106');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_phone` tinyint(1) NOT NULL,
  `test_period` datetime NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `city` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription` datetime NOT NULL,
  `verification_try` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `verified_phone`, `test_period`, `sex`, `birth_date`, `city`, `subscription`, `verification_try`) VALUES
(558057995, 'Nikita Korolev', '', 0, '0000-00-00 00:00:00', 'Мужской', '2004-04-14', NULL, '2024-09-24 12:36:48', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocodes`
--
ALTER TABLE `promocodes`
  ADD PRIMARY KEY (`id_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promocodes`
--
ALTER TABLE `promocodes`
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558057996;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
