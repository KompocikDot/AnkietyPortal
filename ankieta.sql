-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 10:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ankieta`
--

-- --------------------------------------------------------

--
-- Table structure for table `ankieties`
--

CREATE TABLE `ankieties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nazwa_ankiety` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pytanie1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pytanie2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pytanie3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pytanie4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pytanie5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pytanie6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p1_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p2_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p3_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p4_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p5_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p6_odp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p1_poprawna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p2_poprawna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p3_poprawna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p4_poprawna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p5_poprawna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p6_poprawna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ankieties`
--

INSERT INTO `ankieties` (`id`, `created_at`, `updated_at`, `nazwa_ankiety`, `pytanie1`, `pytanie2`, `pytanie3`, `pytanie4`, `pytanie5`, `pytanie6`, `p1_odp`, `p2_odp`, `p3_odp`, `p4_odp`, `p5_odp`, `p6_odp`, `p1_poprawna`, `p2_poprawna`, `p3_poprawna`, `p4_poprawna`, `p5_poprawna`, `p6_poprawna`) VALUES
(1, '2021-11-14 19:03:17', '2021-11-14 19:03:17', 'Czy wpływa na człowieka', 'sadge', 'sadge', 'sadge3', 'sadge4', 'sadge5', 'sadge6', 'dasdasdasd||asdasdasd||asdasd||asdasdsa', 'dasdasdas||dasdasdasda||sdasdasdasd||asdasdas', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'a', 'c', 'a', 'a', 'a', 'b'),
(2, '2021-11-14 19:03:23', '2021-11-14 19:03:23', 'Najlepsze auta', 'sadge132123', 'sadgedasd', 'sadge3', 'sadge4', 'sadge5', 'sadge6', 'dasdasdasd||asdasdasd||asdasd||asdasdsa', 'dasdasdas||dasdasdasda||sdasdasdasd||asdasdas', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'sdasdasdasd||sdasdasdasd||sdasdasdasd||sdasdasdasd', 'a', 'c', 'a', 'a', 'a', 'b');

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2021_11_14_104149_create_sessions_table', 1),
(27, '2021_11_14_135033_create_ankieties_table', 1),
(28, '2021_11_14_135047_create_odpowiedzis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `odpowiedzis`
--

CREATE TABLE `odpowiedzis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `ankieta_id` int(11) NOT NULL,
  `odp1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odp2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odp3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odp4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odp5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odp6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('t34yAntoKByq3P98vR4OhSjY60jjkODLuEvQ1xWl', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZ1VQMGlRY0NrTjhCdDY1QzN0TGNVRWRMTG1CUW9jd0JZaVJnN0NBdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbmtpZXRhLzEiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUFI1Uy5XN2x6dVV1cjdublNqUWtQZW5RRlI0UXprNUNXdEhlZUlQNWhYdGpIT2NkdzJ4UVMiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFBSNVMuVzdsenVVdXI3bm5TalFrUGVuUUZSNFF6azVDV3RIZWVJUDVoWHRqSE9jZHcyeFFTIjt9', 1636926724);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$b76KSRiwl9W0CArEsVPUoOONXwPuJjmHPENr7TBRosIU1HLRqtVwW', NULL, NULL, NULL, NULL, NULL, '2021-11-14 18:26:04', '2021-11-14 18:26:04'),
(2, 'user', 'user@user.com', NULL, '$2y$10$PR5S.W7lzuUur7nnSjQkPenQFR4Qzk5CWtHeeIP5hXtjHOcdw2xQS', NULL, NULL, NULL, NULL, NULL, '2021-11-14 18:56:36', '2021-11-14 18:56:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ankieties`
--
ALTER TABLE `ankieties`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `odpowiedzis`
--
ALTER TABLE `odpowiedzis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `ankieties`
--
ALTER TABLE `ankieties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `odpowiedzis`
--
ALTER TABLE `odpowiedzis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
