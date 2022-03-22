-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2022 at 09:51 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_mgmt`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1);

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Miss Clemmie Hills DDS', 'koss.golden@example.org', '2022-03-21 06:29:27', '1-910-407-7564 x6705', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'a6Kde8xJwY', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(2, 'Chaz Walker', 'arnoldo.dooley@example.net', '2022-03-21 06:29:27', '263-315-8085 x48603', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'K6DEW3bjxJ', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(3, 'Lauriane Shanahan', 'thalia.dach@example.org', '2022-03-21 06:29:27', '(531) 226-7041', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'Qaxj5P7Ziu', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(4, 'Mr. Walker Davis', 'rframi@example.com', '2022-03-21 06:29:27', '(523) 988-2615 x95728', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'FaUfRpRIfU', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(5, 'Sazzad Saju', 'saju@mail', '2022-03-21 06:29:27', '1-572-630-4943', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'bU5SnimnUFQ9mPpZFHE0CkEbagJVkbVd9aARrCVGm83zcb8WKWkkPpu4QEpA', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(6, 'Karley Carter', 'helga36@example.com', '2022-03-21 06:29:27', '(423) 436-7522', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'We0ikrZoJJ', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(7, 'Prudence Lemke', 'uriel52@example.net', '2022-03-21 06:29:27', '254.202.5606 x617', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', '4apMcnb4mC', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(8, 'Prof. Amanda Kilback', 'kadin.johns@example.org', '2022-03-21 06:29:27', '560.646.3961 x7592', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'hRXsqphHgz', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(9, 'Mrs. Elvie Sanford I', 'shanahan.tito@example.com', '2022-03-21 06:29:27', '220-412-4089 x657', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', '8fY8FuZhTP', '2022-03-21 06:29:27', '2022-03-21 06:29:27'),
(10, 'Dr. Ronaldo Blanda', 'qmurazik@example.com', '2022-03-21 06:29:27', '1-367-565-6530', '$2y$10$st4/twU5xm1t42UEcYhuKeKzlw66lH5Noduu7P.JxFzPUqbRBaoWW', 'ptkSJWkEoW', '2022-03-21 06:29:27', '2022-03-21 06:29:27');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
