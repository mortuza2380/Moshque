-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 06:20 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mosqueregulationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`id`, `name`, `phone`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Apon', '01717175888', 'Chairman', '2019-11-24 09:37:10', '2019-11-24 09:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ebook_libraries`
--

CREATE TABLE `ebook_libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ebook_libraries`
--

INSERT INTO `ebook_libraries` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dummy', 'dummy.pdf', '2019-11-24 10:18:16', '2019-11-24 10:18:16'),
(2, 'test', 'dummy.pdf', '2019-11-24 22:33:49', '2019-11-24 22:33:49'),
(3, 'test', 'dummy.pdf', '2019-11-24 22:33:57', '2019-11-24 22:33:57'),
(4, 'test', 'dummy.pdf', '2019-11-24 22:34:08', '2019-11-24 22:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(2, 'test2', 'test2', 'https://www.youtube.com/', '2019-11-24 09:16:25', '2019-11-24 09:16:25'),
(3, 'test3', 'test3', 'https://www.youtube.com/', '2019-11-24 09:16:38', '2019-11-24 09:16:38'),
(4, 'test4', 'test4', 'https://www.youtube.com/', '2019-11-24 09:16:49', '2019-11-24 09:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `email`, `phone`, `problem`, `created_at`, `updated_at`) VALUES
(1, 'apon@gmail.com', '01719852368', 'test', NULL, NULL),
(2, 'ali@gmail.com', '01717175888', 'I nned to contact with you', '2019-11-24 23:15:10', '2019-11-24 23:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `imam_messages`
--

CREATE TABLE `imam_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imam_messages`
--

INSERT INTO `imam_messages` (`id`, `name`, `designation`, `message`, `file`, `created_at`, `updated_at`) VALUES
(3, 'Abdur Rahman', 'Imam of Mecca', 'The time complexity of delivering M messages that come within [DELTA]t\' to their relevant subscribers in our proposed filter-verification framework with inverted index pruning technique is [mathematical expression not reproducible], where f is the fanout of the TMR-tree, [R.sub.i] is a node in the TMR-tree (also can be treated as a dummy message), and Lp is the inverted index associated with [R.sub.i]\'s parent in which the subscriptions are likely to be relevant to [R.sub.i]\'s parent.', 'Abdul_rahman_al_sudais.jpg', '2019-11-24 09:01:49', '2019-11-24 09:01:49');

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
(3, '2019_11_24_132755_create_events_table', 1),
(4, '2019_11_24_132932_create_slide_shows_table', 1),
(5, '2019_11_24_133135_create_committees_table', 1),
(6, '2019_11_24_133156_create_salat_times_table', 1),
(7, '2019_11_24_133238_create_notice_boards_table', 1),
(8, '2019_11_24_133350_create_money_transactions_table', 1),
(9, '2019_11_24_133458_create_ebook_libraries_table', 1),
(10, '2019_11_24_133515_create_photo_galleries_table', 1),
(11, '2019_11_24_133533_create_f_a_q_s_table', 1),
(12, '2019_11_24_133612_create_videos_table', 1),
(13, '2019_11_24_133732_create_donates_table', 1),
(14, '2019_11_24_133754_create_ramadan_calenders_table', 1),
(15, '2019_11_24_133953_create_imam_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `money_transactions`
--

CREATE TABLE `money_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `money_transactions`
--

INSERT INTO `money_transactions` (`id`, `date`, `amount`, `source`, `created_at`, `updated_at`) VALUES
(1, '2019-11-24', '6000', 'Jummah', '2019-11-24 09:49:25', '2019-11-24 09:49:25'),
(2, '2019-11-23', '8000', 'Donate from Apon', '2019-11-24 09:49:46', '2019-11-24 09:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 'MCT', 'test', '2019-11-24 09:20:16', '2019-11-24 09:20:16'),
(4, 'SWE', 'test', '2019-11-24 09:22:12', '2019-11-24 09:22:12');

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
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Mahafil', 'waz-mahfil.jpg', '2019-11-24 10:02:59', '2019-11-24 10:02:59'),
(3, 'test', 'mhahafil.jpg', '2019-11-24 10:07:00', '2019-11-24 10:07:00'),
(4, 'test', 'mhahafil.jpg', '2019-11-24 22:19:29', '2019-11-24 22:19:29'),
(5, 'test', 'waz-mahfil.jpg', '2019-11-24 22:19:40', '2019-11-24 22:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `ramadan_calenders`
--

CREATE TABLE `ramadan_calenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ramadan_calenders`
--

INSERT INTO `ramadan_calenders` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'ramadan.jpg', '2019-11-24 11:36:58', '2019-11-24 11:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `salat_times`
--

CREATE TABLE `salat_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fajr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dhuhr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maghrib` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salat_times`
--

INSERT INTO `salat_times` (`id`, `date`, `fajr`, `dhuhr`, `asr`, `maghrib`, `isha`, `created_at`, `updated_at`) VALUES
(2, '2019-11-25', '05:10', '13:15', '16:05', '17:20', '19:15', '2019-11-24 23:01:36', '2019-11-24 23:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `slide_shows`
--

CREATE TABLE `slide_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_shows`
--

INSERT INTO `slide_shows` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'm1.jpg', '2019-11-24 09:08:10', '2019-11-24 09:08:10'),
(2, 'm2.jpg', '2019-11-24 09:08:18', '2019-11-24 09:08:18'),
(3, 'm3.jpg', '2019-11-24 09:08:25', '2019-11-24 09:08:25'),
(5, 'm4.jpg', '2019-11-24 09:09:28', '2019-11-24 09:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Apon', 'apon@gmail.com', NULL, '$2y$10$SeYbkewKaSwLf7fiznY5I.HkFjTPsIrlKtOKarKxW4Gq6gs7fSf/m', NULL, '2019-11-24 08:16:25', '2019-11-24 08:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 'test', 'video1.mp4', '2019-11-24 11:10:55', '2019-11-24 11:10:55'),
(2, 'test', 'video1.mp4', '2019-11-24 22:27:41', '2019-11-24 22:27:41'),
(3, 'test', 'video1.mp4', '2019-11-24 22:29:15', '2019-11-24 22:29:15'),
(4, 'test', 'video1.mp4', '2019-11-24 22:29:25', '2019-11-24 22:29:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook_libraries`
--
ALTER TABLE `ebook_libraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imam_messages`
--
ALTER TABLE `imam_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_transactions`
--
ALTER TABLE `money_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ramadan_calenders`
--
ALTER TABLE `ramadan_calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salat_times`
--
ALTER TABLE `salat_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_shows`
--
ALTER TABLE `slide_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ebook_libraries`
--
ALTER TABLE `ebook_libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imam_messages`
--
ALTER TABLE `imam_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `money_transactions`
--
ALTER TABLE `money_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ramadan_calenders`
--
ALTER TABLE `ramadan_calenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salat_times`
--
ALTER TABLE `salat_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide_shows`
--
ALTER TABLE `slide_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
