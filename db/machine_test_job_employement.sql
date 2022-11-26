-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2022 at 02:59 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `machine_test_job_employement`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint UNSIGNED DEFAULT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `candidates_job_id_foreign` (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `job_id`, `name`, `email`, `phone`, `resume`, `created_at`, `updated_at`) VALUES
(12, 13, 'Manasi Jain', 'manasijain@gmail.com', 12231231, '4362817.pdf', '2022-11-26 09:00:42', '2022-11-26 09:00:42'),
(11, 13, 'rukHMAN SALIM', 'rukhmansalim@gmail.com', 12121, '1259698.pdf', '2022-11-26 09:00:02', '2022-11-26 09:00:02'),
(10, 13, 'Robin George', 'rg@gmail.com', 123213123213, '6750118.pdf', '2022-11-26 08:58:04', '2022-11-26 08:58:04'),
(13, 13, 'Thoufeeq ahmed', 'tahmed@gmail.com', 123213123, '6901511.pdf', '2022-11-26 09:01:24', '2022-11-26 09:01:24'),
(14, 12, 'Thomas P', 'thomaspamn@gmail.com', 2312321, '9289228.pdf', '2022-11-26 09:01:56', '2022-11-26 09:01:56'),
(15, 12, 'Sam jack', 'sjack4567@gmail.com', 12123213, '2254135.pdf', '2022-11-26 09:03:12', '2022-11-26 09:03:12'),
(16, 12, 'misi p', 'mp@gmail.com', 231232132, '5528700.pdf', '2022-11-26 09:03:54', '2022-11-26 09:03:54'),
(17, 11, 'farooq fg', 'farooq@gmail.com', 57758654, '8954072.pdf', '2022-11-26 09:04:26', '2022-11-26 09:04:26'),
(18, 11, 'phenil mathew', 'phenilm@gmail.com', 9898987797, '8614486.pdf', '2022-11-26 09:04:59', '2022-11-26 09:04:59'),
(19, 10, 'Ramson Pillai', 'ramson@gmail.com', 8989899898, '9801046.pdf', '2022-11-26 09:05:34', '2022-11-26 09:05:34'),
(20, 10, 'Jennifer Pillai', 'jenp@gmail.com', 944154521, '8601865.pdf', '2022-11-26 09:06:16', '2022-11-26 09:06:16'),
(21, 9, 'kash kumar', 'kkummar@gmail.com', 7882938923, '1416730.pdf', '2022-11-26 09:07:14', '2022-11-26 09:07:14'),
(22, 9, 'jeevan kumar', 'jeevankumar@gmail.com', 342423423, '4434449.pdf', '2022-11-26 09:08:02', '2022-11-26 09:08:02'),
(23, 8, 'kamaran ahmed', 'kahmed@gmail.com', 368799808908, '7579857.pdf', '2022-11-26 09:08:40', '2022-11-26 09:08:40'),
(24, 8, 'kasu kumar', 'kasukumar@gmail.com', 90786798767867, '4505674.pdf', '2022-11-26 09:09:10', '2022-11-26 09:09:10'),
(25, 8, 'dsasdsa', 'sdad@gmail.com', 12345232, '7980185.pdf', '2022-11-26 09:14:54', '2022-11-26 09:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint UNSIGNED DEFAULT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` longtext COLLATE utf8mb4_unicode_ci,
  `job_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jobs_company_name_unique` (`company_name`),
  UNIQUE KEY `jobs_email_unique` (`email`),
  UNIQUE KEY `jobs_phone_unique` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_name`, `email`, `phone`, `location`, `job_title`, `job_description`, `job_type`, `created_at`, `updated_at`) VALUES
(10, 'Grm manufactures', 'grm@gmail.com', 12321321, 'trissur', 'production engineer', 'production engineer with lead ebility', 'Contract', '2022-11-26 08:53:23', '2022-11-26 08:53:23'),
(9, 'SRM Cements', 'js@gmail.com', 1231232, 'Kollam', 'Site supervise engineer', 'Site supervise engineer with years of experinece', 'Full Time', '2022-11-26 08:52:36', '2022-11-26 08:52:36'),
(8, 'JK sons', 'paulgeorge4567@gmail.com', 8086988605, NULL, 'Site engineers', 'Need site engineer with experience', 'Full Time', '2022-11-26 08:32:50', '2022-11-26 08:32:50'),
(11, 'SAS Cements', 'sas@gmail.com', 21323, 'Calicut', 'Production Engineers', 'Production Engineers two three experinces', 'Contract', '2022-11-26 08:54:13', '2022-11-26 08:54:13'),
(12, 'Quality info solutions', 'quality@info.com', 2321321, 'Calicut', 'web developer', 'Web developer with the knowledge of multiple frameworks', 'Free Lance', '2022-11-26 08:55:40', '2022-11-26 08:55:40'),
(13, 'Private info tech', 'pinfo@gmail.com', 2342342, 'Ernakulam', 'python Developer', 'python Developer mulitple quality', 'Contract', '2022-11-26 08:56:40', '2022-11-26 08:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_25_114245_create_jobs_table', 1),
(6, '2022_11_25_153859_create_candidates_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
