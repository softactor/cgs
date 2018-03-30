-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 08:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_16_052151_create_subject_table', 1),
(4, '2018_03_16_055507_create_subject_address_table', 2),
(5, '2018_03_16_060033_create_services_table', 3),
(6, '2018_03_16_060147_create_sub_services_table', 3),
(7, '2018_03_16_060435_create_problem_types_table', 4),
(8, '2018_03_16_060541_create_problem_solutions_table', 5),
(9, '2018_03_16_060713_create_solutions_table', 6),
(10, '2018_03_16_060822_create_service_request_table', 7),
(11, '2018_03_16_061130_create_service_feedback_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `problem_solutions`
--

CREATE TABLE `problem_solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `problem_type_id` int(11) NOT NULL,
  `solution_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proble_types`
--

CREATE TABLE `proble_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'abbuse, depression etc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proble_types`
--

INSERT INTO `proble_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Problem Type 1', '2018-03-30 00:24:18', '2018-03-30 00:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'services like social, mental etc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Social Service', '2018-03-29 23:56:15', '2018-03-29 23:56:15'),
(2, 'Mental Service', '2018-03-30 00:11:25', '2018-03-30 00:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `service_feedback`
--

CREATE TABLE `service_feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_request_id` int(11) NOT NULL,
  `descriptions` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nedd DEescriptions',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE `service_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `need_type` int(11) NOT NULL COMMENT '1=Problem; 2=service',
  `descriptions` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nedd DEescriptions',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'status 1= active; 0 ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Solutions name',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Solution 1', '2018-03-30 00:29:33', '2018-03-30 00:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_type` int(11) DEFAULT NULL,
  `full_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject Full Name',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject email',
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject email',
  `age` int(11) DEFAULT NULL COMMENT 'subject age',
  `fathers_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject fathers Name',
  `mothers_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject motherss Name',
  `gender` tinyint(4) DEFAULT NULL COMMENT 'subject gender',
  `occupation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject occupation',
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject nationality',
  `nid` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject national Id',
  `dob` date DEFAULT NULL COMMENT 'subject Date of Birth',
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subject path',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'status 1= active; 0 ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_type`, `full_name`, `email`, `contact`, `age`, `fathers_name`, `mothers_name`, `gender`, `occupation`, `nationality`, `nid`, `dob`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jafrin', NULL, '013456789', 5, 'fathers name', 'Mother name', 2, NULL, 'Bangladeshi', NULL, NULL, NULL, 0, '2018-03-29 23:14:35', '2018-03-29 23:14:35'),
(2, 2, 'Jerin', NULL, '4563214', 6, 'kk', 'kkk', 2, NULL, 'Bangladeshi', NULL, NULL, NULL, 0, '2018-03-29 23:17:08', '2018-03-29 23:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `subject_address`
--

CREATE TABLE `subject_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `address_type` int(11) NOT NULL COMMENT '1=present Address; 2=permanent',
  `division_id` int(11) NOT NULL COMMENT 'division Address',
  `district_id` int(11) NOT NULL COMMENT 'district Address',
  `thana_id` int(11) NOT NULL COMMENT 'thana Address',
  `upazila_id` int(11) NOT NULL COMMENT 'upazila',
  `postal_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'postal code',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'sub service name',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`id`, `service_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sub Mental Service', '2018-03-30 00:13:35', '2018-03-30 00:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `problem_solutions`
--
ALTER TABLE `problem_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proble_types`
--
ALTER TABLE `proble_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_feedback`
--
ALTER TABLE `service_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_address`
--
ALTER TABLE `subject_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `problem_solutions`
--
ALTER TABLE `problem_solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proble_types`
--
ALTER TABLE `proble_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_feedback`
--
ALTER TABLE `service_feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_requests`
--
ALTER TABLE `service_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject_address`
--
ALTER TABLE `subject_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
