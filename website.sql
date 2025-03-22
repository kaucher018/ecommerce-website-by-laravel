-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 01:53 PM
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
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_17ba0791499db908433b80f37c5fbc89b870084b', 'i:2;', 1742485478),
('laravel_cache_17ba0791499db908433b80f37c5fbc89b870084b:timer', 'i:1742485478;', 1742485478),
('laravel_cache_kaucher@gmail.com|127.0.0.1', 'i:1;', 1742483621),
('laravel_cache_kaucher@gmail.com|127.0.0.1:timer', 'i:1742483621;', 1742483621);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(13, 6, 2, '2025-03-15 09:09:49', '2025-03-15 09:09:49'),
(14, 6, 5, '2025-03-15 09:09:53', '2025-03-15 09:09:53'),
(23, 4, 6, '2025-03-20 08:50:56', '2025-03-20 08:50:56'),
(24, 4, 3, '2025-03-20 08:50:59', '2025-03-20 08:50:59'),
(25, 5, 5, '2025-03-20 09:10:10', '2025-03-20 09:10:10'),
(26, 5, 6, '2025-03-20 09:10:17', '2025-03-20 09:10:17'),
(30, 8, 2, '2025-03-20 09:17:34', '2025-03-20 09:17:34'),
(31, 8, 4, '2025-03-20 09:17:36', '2025-03-20 09:17:36'),
(32, 8, 6, '2025-03-20 09:17:39', '2025-03-20 09:17:39'),
(37, 10, 6, '2025-03-20 09:22:40', '2025-03-20 09:22:40'),
(45, 11, 2, '2025-03-21 06:40:16', '2025-03-21 06:40:16'),
(46, 11, 3, '2025-03-21 06:40:20', '2025-03-21 06:40:20'),
(47, 11, 4, '2025-03-21 06:40:24', '2025-03-21 06:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory_name`, `created_at`, `updated_at`) VALUES
(3, 'Man', '2025-03-08 10:44:42', '2025-03-09 02:39:14'),
(7, 'Women', '2025-03-08 12:31:32', '2025-03-08 12:31:32'),
(10, 'Toys', '2025-03-08 12:37:14', '2025-03-09 09:42:38'),
(11, 'Electronics', '2025-03-08 12:37:17', '2025-03-09 09:42:56');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2025_03_08_163346_create_catagories_table', 2),
(8, '2025_03_09_150635_create_products_table', 3),
(9, '2025_03_17_070053_create_orders_table', 4),
(10, '2025_03_20_160347_add_payment_status_to_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rec_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `sts` varchar(50) NOT NULL DEFAULT 'In progress',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Cash on delivary',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `rec_address`, `phone`, `sts`, `user_id`, `product_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(20, 'goku islam', 'canada', '+880324235', 'In progress', 8, 3, 'Cash on delivary', '2025-03-20 09:13:59', '2025-03-20 09:13:59'),
(21, 'goku islam', 'canada', '+880324235', 'On the way', 8, 5, 'Cash on delivary', '2025-03-20 09:13:59', '2025-03-20 09:14:41'),
(22, 'test', 'canada', '456345', 'In progress', 10, 3, 'Cash on delivary', '2025-03-20 09:22:27', '2025-03-20 09:22:27'),
(25, 'kaucher ahmed', 'canada', '43532465', 'In progress', 9, 2, 'Cash on delivary', '2025-03-20 09:25:20', '2025-03-20 09:25:20'),
(26, 'kaucher ahmed', 'canada', '43532465', 'In progress', 9, 4, 'Cash on delivary', '2025-03-20 09:25:20', '2025-03-20 09:25:20'),
(28, 'zara', 'canada', 'admin@gmail.com', 'In progress', 11, 6, 'Cash on delivary', '2025-03-21 06:39:54', '2025-03-21 06:39:54'),
(29, 'zara', 'canada', 'admin@gmail.com', 'In progress', 11, 7, 'Cash on delivary', '2025-03-21 06:39:54', '2025-03-21 06:39:54');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `catagory` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `catagory`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 'Watch', 'stylist men hand watch to move your hand as fast as can during exams', '1741706581.png', '8090', 'Man', '50', '2025-03-11 09:23:01', '2025-03-20 08:49:48'),
(3, 'Teddy', 'biggggg bear for little babies of big daddies . size 7 inch, width 8mm. color black.', '1741706718.png', '7000', 'Toys', '50', '2025-03-11 09:25:18', '2025-03-11 09:28:17'),
(4, 'Fingerings', 'biggggg bear for little babies of big daddies . size 7 inch, width 8mm. color black.', '1741706789.png', '400', 'Women', '50', '2025-03-11 09:26:29', '2025-03-20 08:50:11'),
(5, 'Purse', 'biggggg bear for little babies of big daddies . size 7 inch, width 8mm. color black.', '1741706831.png', '7000', 'Women', '50', '2025-03-11 09:27:11', '2025-03-11 09:27:11'),
(6, 'car', 'biggggg bear for little babies of big daddies . size 7 inch, width 8mm. color black.', '1741706878.jpg', '78000', 'Man', '50', '2025-03-11 09:27:58', '2025-03-20 09:23:34'),
(7, 'hairoil', 'natural', '1742051652.jpg', '7000', 'Man', '43', '2025-03-15 09:14:12', '2025-03-15 09:14:12');

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
('dSbwWzVcNeCCV7Mrpyz9nnkzarxZ4p7szZRnbgs9', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36 Edg/134.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieHJkMkZDb0tyc3V4UFRqUkx4b0xhbmdUakZQeXo1Vm5ubTJuS2dFbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWludmlldyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1742560995);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `address`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kaucher', 'kaucher@gmail.com', 'user', 'Uttara dhalka', '01865658478', NULL, '$2y$12$N25VQFqzCRvYoKx0ZKn6NO.MCgmG6oDcxaJeAH/.k03/JFQrDFTEi', NULL, '2025-03-08 09:09:07', '2025-03-08 09:09:07'),
(2, 'admin', 'admin@gmail.com', 'admin', 'canada', '324235', NULL, '$2y$12$U.aArOah/SMHiSnmm2rJIuwIXJRC.ahn.1XyEIQf21iJ9KtoKIQ3m', NULL, '2025-03-08 09:31:27', '2025-03-08 09:31:27'),
(3, 'goku islam', 'adminsss@gmail.com', 'user', 'canada', '324235', NULL, '$2y$12$GY2t114OE5FJENsdO2f6EeVtYLpSN93OJtc4aDZQmgQqrYO6w8rqq', NULL, '2025-03-08 10:12:01', '2025-03-08 10:12:01'),
(4, 'user', 'user@gmail.com', 'user', 'Uttara dhalka', '+8801865658478', NULL, '$2y$12$yMs3ccyR6J5j2e2NgX93qebAJJxJxKvgN/YGJv2DAMsJopbG31tOG', NULL, '2025-03-11 01:49:50', '2025-03-11 01:49:50'),
(5, 'as', 'as@gmail.com', 'user', 'Uttara dhalka', '+8801865658478', NULL, '$2y$12$AW7NLpFwIftbDkJydxIDG.6vr3YydJiZpcf84P2bV8nw1EiTTiMRa', NULL, '2025-03-15 08:54:58', '2025-03-15 08:54:58'),
(6, 'fahim 5', 'fahim@gmail.com', 'user', 'Uttara dhalka', '+8801865658478', NULL, '$2y$12$5xPwrIkDGRIS4pJdy7zXH.YKqodVqScpGMCznEiz1musc7hEUKyvK', NULL, '2025-03-15 09:09:44', '2025-03-15 09:09:44'),
(8, 'goku islam', 'n@gmail.com', 'user', 'canada', '+880324235', NULL, '$2y$12$er6hnFv5oqI7Db.UuxthIuYahk13MfVuBgxrNfKP3cBmMXkHn2Gcq', NULL, '2025-03-20 09:13:36', '2025-03-20 09:13:36'),
(9, 'kaucher ahmed', 'ad@gmail.com', 'user', 'canada', '43532465', NULL, '$2y$12$CiuSL6i92XECUam7zway2ObUrANrWJRY0.9XG3y26I3PwKzyhUS1i', NULL, '2025-03-20 09:19:45', '2025-03-20 09:19:45'),
(10, 'test', 'd@gmail.com', 'user', 'canada', '456345', NULL, '$2y$12$y5M1LSjh/J1FapRj3AJcdeT/ENE9ADusfM1tXUIxeQVBf0P4qS7pq', NULL, '2025-03-20 09:22:14', '2025-03-20 09:22:14'),
(11, 'zara', 'mszara8@gmail.com', 'user', 'canada', 'admin@gmail.com', '2025-03-20 09:44:15', '$2y$12$ND9Vvm5aP55UcmrXf/YQJuZsBgRcMIwz/fH8x3y.sEAmyMYadAlWO', NULL, '2025-03-20 09:36:36', '2025-03-20 09:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
