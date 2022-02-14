-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2022 at 12:35 PM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.3.29-1+focal

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizz_agcorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `customer_name`, `email`, `mobile`, `city`, `state`, `zip`, `dob`, `avatar`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sopan', NULL, 'sopan@codexxa.in', NULL, NULL, NULL, NULL, '2021-06-01', '/images/1626945867.png', NULL, '$2y$10$iBqsbnIUfKPqq1TcRBOqw.p5zK3sHrCocjS7pa486Pr8XUKmwTJie', 'user', NULL, '2021-07-22 03:54:27', '2021-07-22 03:54:27'),
(2, 'Payal', NULL, 'payal@codexxa.in', NULL, NULL, NULL, NULL, '2021-06-01', '/images/1626945867.png', NULL, '$2y$10$iBqsbnIUfKPqq1TcRBOqw.p5zK3sHrCocjS7pa486Pr8XUKmwTJie', 'admin', NULL, '2021-07-22 03:54:27', '2021-07-22 03:54:27'),
(3, 'Amit yele', 'amit', 'yeleamit9@gmail.com', '1111111111111', 'vbnv', 'bnv', 'bnvb', NULL, NULL, NULL, '$2y$10$l6wgrno4qHvxiwn5VuyJ..qn5a/I4Mz.zM3TfvQ1BNTHs6/EatYlO', 'user', NULL, '2022-01-01 02:38:43', '2022-01-01 02:38:43'),
(4, 'aman', 'Amit Tilakchand yele', 'aman@gmail.com', '08788255459', 'GOREGAON GONDIYA DISTRICT', 'Maharashtra', '441801', NULL, NULL, NULL, '$2y$10$ijKJBW6y/qC80jYgijs4AOUq4/7jgQaJLTWZaLrKOWOtNHIwpDgXe', 'user', NULL, '2022-01-02 23:30:50', '2022-01-02 23:30:50'),
(5, 'test', 'Amit Tilakchand yele', 'test8881@yopmail.com', '08788255459', 'GOREGAON GONDIYA DISTRICT', 'Maharashtra', '441801', NULL, NULL, NULL, '$2y$10$yPUgTKvuMw97MPJyFzx5BOl4rwKV52.YEpS848Vzk6O0bkxXyzAni', 'user', NULL, '2022-01-02 23:34:40', '2022-01-02 23:34:40'),
(6, 'amit', 'test', 'test81@yopmail.com', '08788255459', 'GOREGAON GONDIYA DISTRICT', 'Maharashtra', '441801', NULL, NULL, NULL, '$2y$10$sPApua2.jZooSa0bO9uX0.r7xhzb41751vZ2pjNsdZrndguQabdYW', 'user', NULL, '2022-01-02 23:35:34', '2022-01-02 23:35:34'),
(7, 'manish', 'manish', 'manish@yopmail.com', '8411083218', 'GOREGAON GONDIYA DISTRICT', 'Maharashtra', '441801', NULL, NULL, NULL, '$2y$10$.X1JyshEj1Bp.mdRX514DetJKzW8zAw/Z8Jk0ykmwucSEe2us/OBG', 'user', NULL, '2022-01-03 00:11:31', '2022-01-03 00:11:31'),
(8, 'amaama', 'amit', 'amit@codexxa.in', '08788255459', 'GOREGAON GONDIYA DISTRICT', 'Maharashtra', '441801', NULL, NULL, NULL, '$2y$10$a8/2UjabDgBbSL2bPg5Gm.jnV61BuLxgrxFkNpucyJaBCB1lfJ9sq', 'user', NULL, '2022-02-01 06:41:47', '2022-02-01 06:41:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
