-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 09:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `molvenohotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `house_number` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `phone`, `email`, `street_name`, `house_number`, `city`, `zipcode`, `country`) VALUES
(104, '2024-03-20 08:27:15', '2024-03-20 08:27:15', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(105, '2024-03-20 08:29:01', '2024-03-20 08:29:01', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(106, '2024-03-20 08:30:27', '2024-03-20 08:30:27', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(107, '2024-03-20 08:33:22', '2024-03-20 08:33:22', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(108, '2024-03-20 09:50:13', '2024-03-20 09:50:13', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(109, '2024-03-20 09:59:09', '2024-03-20 09:59:09', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(110, '2024-03-20 11:00:12', '2024-03-20 11:00:12', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(111, '2024-03-20 11:02:37', '2024-03-20 11:02:37', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(112, '2024-03-20 11:09:49', '2024-03-20 11:09:49', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(113, '2024-03-20 11:10:46', '2024-03-20 11:10:46', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(114, '2024-03-20 11:12:48', '2024-03-20 11:12:48', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(115, '2024-03-20 11:12:58', '2024-03-20 11:12:58', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(116, '2024-03-20 11:13:08', '2024-03-20 11:13:08', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(117, '2024-03-20 11:13:21', '2024-03-20 11:13:21', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(118, '2024-03-20 11:15:00', '2024-03-20 11:15:00', 'Felbe', 'Coppens', '0602040608', 'felbe@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(119, '2024-03-20 11:17:58', '2024-03-20 11:17:58', 'Djowie', 'Snijders', '0601030406', 'djowie@hotmail.nl', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(120, '2024-03-20 11:18:23', '2024-03-20 11:18:23', 'Sabrina', 'Hermans', '0697565435', 'sabrina@hotmail.nl', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(121, '2024-03-20 11:19:01', '2024-03-20 11:19:01', 'Mohamed', 'Kaddouri', '063920535', 'mohamed@hotmail.nl', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(122, '2024-03-20 12:09:33', '2024-03-20 12:09:33', 'jan', 'janssen', '061245678', 'jan@gmail.com', 'janstraat', 2, 'breda', 'ab1234', 'nederland'),
(123, '2024-03-20 12:16:30', '2024-03-20 12:16:30', 'sabr', 'herman', '061234567', 'example2hotmail.com', 'hoge straat', 7, 'breda', 'bj3456', 'neederland'),
(124, '2024-03-20 12:16:42', '2024-03-20 12:16:42', 'sabr', 'herman', '061234567', 'example2hotmail.com', 'hoge straat', 7, 'breda', 'bj3456', 'neederland'),
(125, '2024-03-20 12:35:45', '2024-03-20 12:35:45', 'sabr', 'herman', '061234567', 'example2hotmail.com', 'hoge straat', 7, 'breda', 'bj3456', 'neederland'),
(126, '2024-03-20 12:37:07', '2024-03-20 12:37:07', 'sabr', 'herman', '061234567', 'example2hotmail.com', 'hoge straat', 7, 'breda', 'bj3456', 'neederland'),
(127, '2024-03-20 12:38:32', '2024-03-20 12:38:32', 'sabr', 'herman', '061234567', 'example2hotmail.com', 'hoge straat', 7, 'breda', 'bj3456', 'neederland'),
(128, '2024-03-20 12:39:17', '2024-03-20 12:39:17', 'sabr', 'herman', '061234567', 'example2hotmail.com', 'hoge straat', 7, 'breda', 'bj3456', 'neederland'),
(129, '2024-03-22 07:09:15', '2024-03-22 07:09:15', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(130, '2024-03-22 07:09:57', '2024-03-22 07:09:57', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(131, '2024-03-22 07:11:13', '2024-03-22 07:11:13', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(132, '2024-03-22 07:11:34', '2024-03-22 07:11:34', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(133, '2024-03-22 07:13:10', '2024-03-22 07:13:10', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(134, '2024-03-22 07:37:37', '2024-03-22 07:37:37', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(135, '2024-03-22 07:38:00', '2024-03-22 07:38:00', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(136, '2024-03-22 07:38:34', '2024-03-22 07:38:34', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(137, '2024-03-22 08:06:52', '2024-03-22 08:06:52', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(138, '2024-03-22 08:11:10', '2024-03-22 08:11:10', 'unknown', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(139, '2024-03-22 08:11:16', '2024-03-22 08:11:16', 'unknown', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(140, '2024-03-22 08:11:47', '2024-03-22 08:11:47', 'unknown', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(141, '2024-03-22 08:16:24', '2024-03-22 08:16:24', 'Jan', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(142, '2024-03-22 09:59:06', '2024-03-22 09:59:06', 'Jan', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(143, '2024-03-26 11:53:45', '2024-03-26 11:53:45', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(144, '2024-03-26 11:54:54', '2024-03-26 11:54:54', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(145, '2024-03-27 07:28:14', '2024-03-27 07:28:14', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(146, '2024-03-27 07:30:36', '2024-03-27 07:30:36', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(147, '2024-03-27 07:30:45', '2024-03-27 07:30:45', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(148, '2024-03-27 07:31:22', '2024-03-27 07:31:22', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(149, '2024-03-27 07:31:56', '2024-03-27 07:31:56', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy'),
(150, '2024-03-27 07:32:03', '2024-03-27 07:32:03', 'John', 'Doe', '0612345678', 'example@hotmail.com', 'Via Bettega', 12, 'Molveno', '38018', 'Italy');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_19_082416_create_flights_table', 1),
(6, '2024_02_23_110147_create_sessions_table', 1),
(7, '2024_03_13_092820_create_rooms_reservations_table', 1),
(8, '2024_03_13_104313_create_guests_table', 1),
(9, '2024_03_13_110347_create_room_table', 1),
(10, '2024_03_13_111529_create_reservation_task_table', 1),
(11, '2024_03_13_123213_create_reservations_table', 1),
(12, '2024_03_15_085309_modify_bed_room_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_id` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL DEFAULT 0,
  `children` int(11) NOT NULL DEFAULT 0,
  `arrival` varchar(255) NOT NULL DEFAULT '0',
  `departure` varchar(255) NOT NULL DEFAULT '0',
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_task`
--

CREATE TABLE `reservation_task` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_view` varchar(255) NOT NULL,
  `baby_bed` tinyint(1) NOT NULL,
  `handicap` tinyint(1) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `view` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `handicap_accessible` tinyint(1) NOT NULL,
  `baby_bed` tinyint(1) NOT NULL,
  `price_per_night` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `bed_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `created_at`, `updated_at`, `number`, `floor`, `view`, `type`, `handicap_accessible`, `baby_bed`, `price_per_night`, `capacity`, `bed_description`) VALUES
(1, NULL, NULL, 207, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
(2, NULL, NULL, 208, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
(3, NULL, NULL, 209, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
(4, NULL, NULL, 210, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
(5, NULL, NULL, 211, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
(6, NULL, NULL, 212, 2, 'Mountain', 'Standard', 1, 1, 150, 2, '2 single bed'),
(7, NULL, NULL, 213, 2, 'Mountain', 'Standard', 0, 1, 200, 4, '1 Double, 2 single bed'),
(8, NULL, NULL, 214, 2, 'Mountain', 'Standard', 0, 1, 200, 4, '1 Double, 2 single bed'),
(9, NULL, NULL, 215, 2, 'Mountain', 'Standard', 0, 1, 150, 2, '2 single bed'),
(10, NULL, NULL, 216, 2, 'Mountain', 'Standard', 1, 1, 150, 2, 'Double bed'),
(11, NULL, NULL, 217, 2, 'Mountain', 'Standard', 0, 1, 200, 4, '1 Double, 2x1 single bed'),
(12, NULL, NULL, 218, 2, 'Lake', 'Standard', 0, 1, 200, 2, '2 single  bed'),
(13, NULL, NULL, 219, 2, 'Lake', 'Standard', 1, 1, 200, 2, 'Double bed'),
(14, NULL, NULL, 301, 3, 'Lake', 'Standard', 0, 0, 200, 2, '2 single bed'),
(15, NULL, NULL, 220, 2, 'Lake', 'Luxurious', 0, 1, 250, 4, '1 Double, 2x single bed'),
(16, NULL, NULL, 302, 3, 'Lake', 'Luxurious', 0, 0, 250, 2, 'Double bed'),
(17, NULL, NULL, 303, 3, 'Lake', 'Luxurious', 0, 0, 250, 2, 'Double bed'),
(18, NULL, NULL, 101, 1, 'Standard', 'Economy', 0, 0, 125, 2, '2 single bed'),
(19, NULL, NULL, 102, 1, 'Standard', 'Economy', 0, 0, 125, 2, '2 Single bed'),
(20, NULL, NULL, 103, 1, 'Standard', 'Economy', 0, 0, 125, 2, 'Double Bed'),
(21, NULL, NULL, 104, 1, 'Standard', 'Economy', 0, 0, 125, 2, 'Double bed'),
(22, NULL, NULL, 105, 1, 'Standard', 'Economy', 0, 1, 125, 2, 'Double bed'),
(23, NULL, NULL, 106, 1, 'Standard', 'Economy', 0, 1, 125, 2, 'Double bed'),
(24, NULL, NULL, 107, 1, 'Standard', 'Economy', 0, 1, 125, 4, 'Double Bed'),
(25, NULL, NULL, 108, 1, 'Standard', 'Economy', 0, 0, 125, 4, 'Double bed');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_reservations`
--

CREATE TABLE `rooms_reservations` (
  `room_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VRE2NMr2ijTR8MnZklaN1qQLQ0tU7930I9Xty3dv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUYwdkxPYVozbkVydHk1MTlqOU4zdmd1dkFldWZqUkNjU29vaUpURyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9NYWtlUmVzZXJ2YXRpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1710761223);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_task`
--
ALTER TABLE `reservation_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservation_task`
--
ALTER TABLE `reservation_task`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
