-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 24, 2020 at 09:52 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasakumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_07_111935_create_roles_table', 1),
(5, '2020_07_07_112123_create_role_user_table', 1),
(6, '2020_07_07_193648_create_pasakumi_table', 1),
(7, '2020_07_07_200932_create_pasakums_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasakumi`
--

DROP TABLE IF EXISTS `pasakumi`;
CREATE TABLE IF NOT EXISTS `pasakumi` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nosaukums` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DatumsNO` date NOT NULL,
  `DatumsLIDZ` date NOT NULL,
  `LaiksNO` time NOT NULL,
  `LaiksLIDZ` time NOT NULL,
  `Norises_vieta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Personu_skaits` int(10) UNSIGNED NOT NULL,
  `Atbildigais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kontaktinfo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piezimes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projektors` tinyint(1) NOT NULL,
  `dators` tinyint(1) NOT NULL,
  `mikrafons` tinyint(1) NOT NULL,
  `skana` tinyint(1) NOT NULL,
  `TV` tinyint(1) NOT NULL,
  `tehnika` tinyint(1) NOT NULL,
  `prezenteris` tinyint(1) NOT NULL,
  `ITspec` tinyint(1) NOT NULL,
  `pauzes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stavvietas` int(10) UNSIGNED NOT NULL,
  `apsardze` int(10) UNSIGNED NOT NULL,
  `uzkopsana` tinyint(1) NOT NULL,
  `PR` tinyint(1) NOT NULL,
  `apstiprinatsDir` tinyint(1) NOT NULL DEFAULT '0',
  `apstiprinatsDNV` tinyint(1) NOT NULL DEFAULT '0',
  `apstiprinatsAudz` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasakumi`
--

INSERT INTO `pasakumi` (`id`, `nosaukums`, `DatumsNO`, `DatumsLIDZ`, `LaiksNO`, `LaiksLIDZ`, `Norises_vieta`, `Personu_skaits`, `Atbildigais`, `Kontaktinfo`, `piezimes`, `projektors`, `dators`, `mikrafons`, `skana`, `TV`, `tehnika`, `prezenteris`, `ITspec`, `pauzes`, `stavvietas`, `apsardze`, `uzkopsana`, `PR`, `apstiprinatsDir`, `apstiprinatsDNV`, `apstiprinatsAudz`) VALUES
(1, 'asdfg', '2020-07-10', '2020-07-16', '11:22:00', '11:21:00', 'asd', 234, 'asdfd', '2esdf', 'sezrdg', 1, 0, 1, 0, 0, 0, 0, 0, 'asdt', 234, 234, 1, 1, 1, 1, 1),
(2, 'c', '2020-07-27', '2020-07-31', '14:31:00', '16:31:00', 'rvt', 2, 'es', '25987453', 'v', 1, 0, 1, 0, 0, 1, 0, 1, 'fdg', 2, 2, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasakums_user`
--

DROP TABLE IF EXISTS `pasakums_user`;
CREATE TABLE IF NOT EXISTS `pasakums_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pasakums_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(2, 'direktors', '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(3, 'DNV', '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(4, 'audzinataja', '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(5, 'guest', '2020-07-24 05:17:37', '2020-07-24 05:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 4, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 5, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@admin.com', NULL, '$2y$10$v8zw/Wjt69SdwZC8Jzl06O/0QiY5n5HOAd9d1jfq99jNVmbF7Opqi', NULL, '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(2, 'Direktors User', 'direktors@direktors.com', NULL, '$2y$10$CgWVC8xNHe3F7e9u2DNJOuGLcrqRyyHnsAQ5ASoT5mjwko0yqxVVm', NULL, '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(3, 'Audzinataja User', 'audzinataja@audzinataja.com', NULL, '$2y$10$joHCghe7HSgeM.EhXyhuiuqpVKw47rDKPG.3ba4ipj5wp6NEn7wa2', NULL, '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(4, 'DNV User', 'DNV@DNV.com', NULL, '$2y$10$XRAH7ACAHCHztGWKzFpXcO5MarbpYKbrl11v2tskh8amoeO4CbYYi', NULL, '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(5, 'guest User', 'guest@guest.com', NULL, '$2y$10$Q.CW5ogfnk7pIQ/1zYAB1u2MggsAbXB0UrGb72E10hoPJoeLb9jh6', NULL, '2020-07-24 05:17:37', '2020-07-24 05:17:37'),
(6, 'ralfs', 'r@r.com', NULL, '$2y$10$khhHGBarq8kDffWNPc6Uj.fIrC7E.f.1unTjhlClKsxfc6I5dfFFK', NULL, '2020-07-24 06:27:21', '2020-07-24 06:27:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
