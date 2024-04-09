-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2024 at 11:13 AM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MolvenoHotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `first_name` char(111) NOT NULL,
  `last_name` char(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `phone_number` int NOT NULL,
  `id` int NOT NULL,
  `timestamp` timestamp NOT NULL,
  `position` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guest_info`
--

CREATE TABLE `guest_info` (
  `first_name` char(111) NOT NULL,
  `last_name` char(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `phone_number` varchar(111) NOT NULL,
  `nationality` varchar(111) NOT NULL,
  `street_name` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `house_number` int NOT NULL,
  `zip_code` int NOT NULL,
  `country` char(111) NOT NULL,
  `id` int NOT NULL,
  `time_stamp` timestamp NOT NULL,
  `passport_control` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_19_082416_create_flights_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_nr` decimal(10,0) DEFAULT NULL,
  `floor` int NOT NULL,
  `room` text NOT NULL,
  `adults` int NOT NULL,
  `view` text NOT NULL,
  `baby_bed` tinyint(1) NOT NULL,
  `bed` text NOT NULL,
  `comments` text NOT NULL,
  `handicap_accessible` tinyint(1) NOT NULL,
  `price_per_night` decimal(10,0) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_nr`, `floor`, `room`, `adults`, `view`, `baby_bed`, `bed`, `comments`, `handicap_accessible`, `price_per_night`, `id`) VALUES
('207', 2, 'standard', 2, 'Mountain', 1, 'Double bed', '-', 0, '150', 1),
('208', 2, 'Standard', 2, 'Mountain', 1, 'Double bed', '-', 0, '150', 2),
('209', 2, 'Standard', 2, 'Mountain', 1, 'Double bed', '-', 0, '150', 3),
('210', 2, 'Standard', 2, 'Mountain', 1, 'Double bed', '-', 0, '150', 4),
('211', 2, 'Standard', 2, 'Mountain', 1, 'Double bed', '-', 0, '150', 5),
('212', 2, 'Standard', 2, 'Mountain', 1, '2 single bed', '-', 1, '150', 6),
('213', 2, 'Standard', 4, 'Mountain', 1, '1 Double, 2 single bed', '-', 0, '200', 7),
('214', 2, 'Standard', 4, 'Mountain', 1, '1 Double, 2 single bed', '-', 0, '200', 8),
('215', 2, 'Standard', 2, 'Mountain', 1, '2 single bed', '-', 0, '150', 9),
('216', 2, 'Standard', 2, 'Mountain', 1, 'Double bed', '-', 1, '150', 10),
('217', 2, 'Standard', 4, 'Mountain', 1, '1 Double, 2x1 single bed', '-', 0, '200', 11),
('218', 2, 'Standard', 2, 'Lake', 1, '2 single  bed', '-', 0, '200', 12),
('219', 2, 'Standard', 2, 'Lake', 1, 'Double bed', '-', 1, '200', 13),
('301', 3, 'Standard', 2, 'Lake', 0, '2 single bed', '-', 0, '200', 14),
('220', 2, 'Luxurious', 4, 'Lake', 1, '1 Double, 2x single bed', '-', 0, '250', 15),
('302', 3, 'Luxurious', 2, 'Lake', 0, 'Double bed', '-', 0, '250', 16),
('303', 3, 'Luxurious', 2, 'Lake view', 0, 'Double bed', '-', 0, '250', 17),
('101', 1, 'Economy', 2, 'Standard', 0, '2 single bed', '-', 0, '125', 18),
('102', 1, 'Economy', 2, 'Standard', 0, '2 Single bed', '-', 0, '125', 19),
('103', 1, 'Economy', 2, 'Standard', 0, 'Double Bed', '-', 0, '125', 20),
('104', 1, 'Economy', 2, 'Standard', 0, 'Double bed', '-', 0, '125', 21),
('105', 1, 'Economy', 2, 'Standard', 1, 'Double bed', '-', 0, '125', 22),
('106', 1, 'Economy', 2, 'Standard', 1, 'Double bed', '-', 0, '125', 23),
('107', 1, 'Economy', 4, 'Standard', 1, 'Double Bed', '-', 0, '125', 24),
('108', 1, 'Economy', 4, 'Standard', 0, 'Double bed', '-', 0, '125', 25);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduled_clean` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheduled_maintenence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_clean` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_maintenece` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `big_maintenece` text NOT NULL,
  `big_clean` text NOT NULL,
  `timestamp` timestamp NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Mrs. Nellie Barton', 'franecki.callie@example.net', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 'MnYjcrvzv2', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(15, 'Miss Amelie Hilpert I', 'rashawn81@example.org', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 't4UnxBV9Ia', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(16, 'Vilma VonRueden', 'kim10@example.org', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 'swXbY3vWJr', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(17, 'Jed Langworth PhD', 'olson.dewayne@example.org', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 'ewpBzdqIs3', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(18, 'Dr. Wilfredo Lesch', 'mara07@example.org', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 'seJClPmlYz', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(19, 'Mr. Emerald Berge I', 'margaretta.tromp@example.net', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 'H14hseNhZB', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(20, 'Kennedi Kuphal', 'collins.cloyd@example.org', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', '2W87YZPchQ', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(21, 'Jazmin Connelly MD', 'schoen.sierra@example.net', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 'kEzLmT0Am5', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(22, 'Dr. Horacio Streich II', 'bortiz@example.com', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', 'J90VRVbfkY', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(23, 'Aiyana Schumm', 'okris@example.net', '2024-03-06 07:12:37', '$2y$12$nEn05mBXeRG1hJfPaaQJ0uHOdTa.CNdiSayaFUkQ9EzxXrIR8rj1m', '2dOQcslq6LHxDl7vbkiTFxVkOZGxSMCwTDXHtaK8R6oIqtOp0ykd8brTqJQ1', '2024-03-06 07:12:37', '2024-03-06 07:12:37'),
(25, 'Julian Prosacco', 'xcarter@example.com', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'cu0ZP3szd4', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(26, 'Lincoln Emmerich', 'lamont83@example.com', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', '1MkJtfmG2u', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(27, 'Johnny Connelly', 'leonie08@example.com', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'nDo43SKk9Y', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(28, 'Markus Heller', 'payton.beahan@example.com', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'g8yBKAJ2Wx', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(29, 'Miss Patricia Mann IV', 'doug.bartoletti@example.net', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'pfBwC6DQgl', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(30, 'Prof. Deonte Ratke', 'adrian48@example.net', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'hndFO2axgj', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(31, 'Charity Bartoletti', 'durgan.kayden@example.com', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'XmNzj4qaX5', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(32, 'Elmira Cassin', 'jswift@example.net', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'nehlELq5xx', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(33, 'Mrs. Elenora Rowe', 'schamberger.jameson@example.org', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'CL57skxPJA', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(34, 'Gabriel Frami PhD', 'gutkowski.marianne@example.com', '2024-03-11 09:11:39', '$2y$12$lgg730vBQhHihArS2d8f0Owqr/C2ZzcSbpeDGSZkGPnvvOJ.Ykjo.', 'Kulggbd1rM', '2024-03-11 09:11:39', '2024-03-11 09:11:39'),
(35, 'Bertrand Marvin', 'gerry57@example.org', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', '2WCEzm2I7d', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(36, 'Leta Collins', 'sarina95@example.net', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', '9gMFIdcIqa', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(37, 'Garnet Wiza DVM', 'bettye40@example.com', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'TaVbxD8on5', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(38, 'Zack Howe', 'pmertz@example.org', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'EesNqQD0lQ', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(39, 'Jensen Renner MD', 'maureen.crist@example.org', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'BbiKMZyhBk', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(40, 'Aliya Kulas', 'orn.unique@example.com', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'DNuAL5kFB6', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(41, 'Dr. Fred Nikolaus', 'lizzie.ritchie@example.net', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'KIpREPC8o3', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(42, 'Angelita Robel', 'gregg65@example.org', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'fwapAaBmLk', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(43, 'Damian Quitzon', 'adrian73@example.net', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'msRgGhafAW', '2024-03-11 09:12:22', '2024-03-11 09:12:22'),
(44, 'Olga Kulas V', 'deshaun85@example.com', '2024-03-11 09:12:22', '$2y$12$IiP.Gx9jE.OImBv5ViemOeOK87zJx2bZfRozc4j/3jnTuIJJemIBi', 'g9IT8vvnLR', '2024-03-11 09:12:22', '2024-03-11 09:12:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_info`
--
ALTER TABLE `guest_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_info`
--
ALTER TABLE `guest_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
