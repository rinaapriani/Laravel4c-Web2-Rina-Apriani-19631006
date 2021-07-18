-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 06:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_univ_4c_bjb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `npm` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('P','L','','') NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `npm`, `tgl_lahir`, `tempat_lahir`, `telepon`, `alamat`, `gender`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, '1964753', '2021-06-17', 'Banjarmasin', '0822343839183', 'Sungai Andai', 'P', '', '2021-06-17 09:43:49', '2021-06-17 09:43:53'),
(6, 3, '19631662', '2021-07-12', 'Amuntai', '081345768648', 'Banjarbaru', 'L', NULL, NULL, NULL),
(7, 4, '1738290', '2021-07-15', 'Barabai', '086537202840', 'Pondok Pisang2', 'P', NULL, NULL, NULL),
(13, 6, '19631567', '2021-07-18', 'Kotabaru', '087527387293', 'Cempaka', 'L', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `makul`
--

CREATE TABLE `makul` (
  `id` int(10) NOT NULL,
  `kd_makul` varchar(20) NOT NULL,
  `nm_makul` varchar(50) NOT NULL,
  `sks` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makul`
--

INSERT INTO `makul` (`id`, `kd_makul`, `nm_makul`, `sks`, `created_at`, `updated_at`) VALUES
(1, 'MKL001', 'Pemrograman Pascal', 2, '2021-06-25 16:00:00', '2021-06-25 16:00:00'),
(2, 'MKL002', 'Sistem Terdistribusi', 2, NULL, NULL),
(3, 'MKL003', 'Pemrograman Web1', 2, NULL, NULL),
(4, 'MKL004', 'Matematika Diskrit', 1, NULL, NULL),
(5, 'MKL005', 'SIG', 2, NULL, NULL),
(8, 'MKL006', 'WEB2', 3, NULL, NULL);

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
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `makul_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `makul_id`, `mahasiswa_id`, `nilai`) VALUES
(1, 1, 1, 90),
(2, 4, 6, 85),
(7, 8, 13, 85);

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rina Apriani', 'rinaapriani2001@gmail.com', NULL, '$2y$10$bom/fjcuDb9lQ8NiFC09VOt1asjokwQ9SA33.zBBLw9gdfMfdvgIG', NULL, '2021-06-09 22:15:34', '2021-06-09 22:15:34'),
(3, 'Zeny', 'zeny12@gmail.com', NULL, '$2y$10$I2eOMBKkwP8C134FzR69/eLCCTH8O0W59ZStZsSwx0uSU2oBvcswm', NULL, '2021-06-28 22:25:32', '2021-06-28 22:25:32'),
(4, 'Naila', 'naila2009@gmail.com', NULL, '$2y$10$vJTKIE5TS5xPluYqtV3MCOcECIqh9R0o1z8.YTotO/o2zkX3kvePS', NULL, '2021-07-14 01:12:28', '2021-07-14 01:12:28'),
(5, 'Dani', 'faizal2000@gmail.com', NULL, '$2y$10$LdM13rgZ/EeRHVX3GExTq.BDDsNJeJmJ7.D2xm8FyGXvCeE9jzpZC', NULL, '2021-07-16 23:12:56', '2021-07-16 23:12:56'),
(6, 'Syarif', 'Syarif1234@gmail.com', NULL, '$2y$10$cP2EgBL/grqavk57x6FWwe1UavT7sYTAft.rgJObUksoWEUVEXZ8m', NULL, '2021-07-17 19:45:13', '2021-07-17 19:45:13'),
(7, 'Daus', 'daus1234@gmail.com', NULL, '$2y$10$FQJMoSSFsRHz65vnG7uqeebMMlACeOFdn9LNYOArT1SdcbBS/Wbai', NULL, '2021-07-17 19:51:20', '2021-07-17 19:51:20'),
(8, 'Selly', 'selly2001@gmail.com', NULL, '$2y$10$2YuLuBrwfosA1yMrdKrIHuZhOOUwjXbYz2iCFSHamPc.arsZwgPfW', NULL, '2021-07-17 20:06:39', '2021-07-17 20:06:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makul`
--
ALTER TABLE `makul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `makul`
--
ALTER TABLE `makul`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
