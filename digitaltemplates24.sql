-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 15, 2025 at 02:10 PM
-- Server version: 5.7.44
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitaltemplates24_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Business', 'business', NULL, '2025-04-14 18:19:21', '2025-04-14 18:19:21'),
(5, 'Portfolio', 'portfolio', NULL, '2025-04-14 18:19:33', '2025-04-14 18:19:33'),
(6, 'E-Commerce', 'e-commerce', NULL, '2025-04-14 18:19:45', '2025-04-14 18:19:45'),
(7, 'Blog', 'blog', NULL, '2025-04-14 18:19:56', '2025-04-14 18:19:56');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `license_types`
--

CREATE TABLE `license_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `license_types`
--

INSERT INTO `license_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Carissa Vang', 'Consequatur Aliqua', '2025-04-14 19:06:57', '2025-04-14 19:06:57'),
(3, 'Shelly Ramirez', 'Dolor cillum amet e', '2025-04-14 19:07:03', '2025-04-14 19:07:03');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_30_091705_create_skills_table', 2),
(5, '2025_04_11_025218_create_categories_table', 3),
(6, '2025_04_11_025317_create_templates_table', 3),
(7, '2025_04_11_025348_create_tags_table', 3),
(9, '2025_04_11_025436_create_orders_table', 4),
(10, '2025_04_11_025544_create_reviews_table', 5),
(11, '2025_04_14_171205_template', 6),
(12, '2025_04_14_171228_create_template_features_table', 6),
(13, '2025_04_14_171239_create_template_images_table', 6),
(14, '2025_04_14_171243_create_license_types_table', 6),
(15, '2025_04_14_171248_create_template_licenses_table', 6),
(16, '2025_04_14_172711_category', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` enum('pending','processing','completed','failed','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `billing_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `license_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'standard',
  `template_metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `is_verified_purchase` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `module` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-05-07 11:16:21', '2023-05-07 11:16:21'),
(2, 'Customer', '2023-05-07 11:16:21', '2023-05-07 11:16:21'),
(6, 'Artist', '2023-11-02 23:44:47', '2023-11-02 23:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_rights`
--

CREATE TABLE `role_rights` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `right_id` int(11) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XxiKbGQYuOovCqfCHfoiDyVhdSWMVnUf8Iyq2siE', 1, '172.18.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiclRBMW45R0UxTDFjVXRzWUlQampuZXA1U3hVc2pYUWVabks0d2ZpQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6OTAwMC9hZG1pbi90ZW1wbGF0ZXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1744659863);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'application_name', 'AsadK', 1, '2023-05-21 22:34:50', '2025-04-10 21:15:34'),
(2, 'site_logo', 'uploads/settings/174465887067fd61b6d6eeblogo-black.png', 1, '2023-05-21 22:59:19', '2025-04-14 19:27:50'),
(3, 'site_favicon', 'uploads/settings/174465881967fd61835f90ffavicon.ico', 1, '2023-05-21 23:09:36', '2025-04-14 19:26:59'),
(4, 'application_phone', '+1 (905) 790-4567', 1, '2023-05-21 23:11:44', '2023-11-02 00:02:56'),
(5, 'application_email', 'info@tamworth24.com', 1, '2023-05-21 23:12:29', '2023-11-02 00:02:56'),
(6, 'application_toll_free', '+1 (905) 790-4567', 1, '2023-05-21 23:20:49', '2023-11-02 00:02:56'),
(7, 'application_fax', '+1 (905) 790-4567', 1, '2023-05-21 23:20:49', '2023-11-02 00:02:56'),
(8, 'application_address', '8 Automatic Rd. Building C, Unit #6 Brampton, Ontario L6S 5N4, Canada', 1, '2023-05-21 23:20:49', '2023-10-27 23:16:08'),
(9, 'about_us', '<h1 style=\"font-size: 1.625em; margin: 0.2em 0px 0.5em; padding: 0px; direction: ltr; font-family: Lato, helvetica, arial, sans-serif; font-weight: bold; text-rendering: optimizelegibility; line-height: 1.4;\"><br></h1>', 1, '2023-05-22 01:14:20', '2023-11-02 22:09:40'),
(13, 'terms_and_conditions', '<p class=\"MsoNormal\"><br></p>', 1, '2023-07-03 01:25:51', '2023-11-02 22:21:47'),
(14, 'privacy_policy', '<p class=\"MsoNormal\"><br></p>', 1, '2023-07-03 01:25:51', '2023-11-02 22:21:47'),
(15, 'return_policy', '<p class=\"MsoNormal\"><br></p>', 1, '2023-07-03 01:25:51', '2023-11-02 22:21:47'),
(16, 'facebook_link', '#', 1, '2023-07-03 05:45:16', '2023-11-02 00:02:56'),
(17, 'twitter_link', '#', 1, '2023-07-03 05:45:16', '2023-11-02 00:02:56'),
(18, 'instagram_link', '#', 1, '2023-07-03 05:45:16', '2023-11-02 00:02:56'),
(19, 'linkedin_link', '#', 1, '2023-07-03 05:45:16', '2023-11-02 00:02:56'),
(20, 'youtube_link', '#', 1, '2023-07-03 05:45:16', '2023-11-02 00:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(10,2) NOT NULL,
  `framework` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_compatibility` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentation_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `user_id`, `category_id`, `title`, `description`, `short_description`, `regular_price`, `framework`, `browser_compatibility`, `documentation_status`, `support_period`, `demo_url`, `template_file`, `created_at`, `updated_at`) VALUES
(1, '1', '5', 'Consectetur lorem v', 'Delectus nisi nostr', 'Voluptas et aut aute', 379.00, 'Eveniet illum qui', 'Quia nostrum mollit', 'Aut voluptate molest', 'Quas aliquam tempor', 'https://www.setuqez.co', 'uploads/template_files/1744658660_WSEB8JRbN2.zip', '2025-04-14 19:24:20', '2025-04-14 19:24:20'),
(2, '1', '5', 'Consectetur lorem v', 'Delectus nisi nostr', 'Voluptas et aut aute', 379.00, 'Eveniet illum qui', 'Quia nostrum mollit', 'Aut voluptate molest', 'Quas aliquam tempor', 'https://www.setuqez.co', 'uploads/template_files/1744658690_ZZuNKFZBZ9.zip', '2025-04-14 19:24:50', '2025-04-14 19:24:50'),
(3, '1', '5', 'Consectetur lorem v', 'Delectus nisi nostr', 'Voluptas et aut aute', 379.00, 'Eveniet illum qui', 'Quia nostrum mollit', 'Aut voluptate molest', 'Quas aliquam tempor', 'https://www.setuqez.co', 'uploads/template_files/1744658716_eHybKXUZ0f.zip', '2025-04-14 19:25:16', '2025-04-14 19:25:16'),
(4, '1', '5', 'Consectetur lorem v', 'Delectus nisi nostr', 'Voluptas et aut aute', 379.00, 'Eveniet illum qui', 'Quia nostrum mollit', 'Aut voluptate molest', 'Quas aliquam tempor', 'https://www.setuqez.co', 'uploads/template_files/1744658734_ZNxBZGbe9O.zip', '2025-04-14 19:25:34', '2025-04-14 19:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `template_features`
--

CREATE TABLE `template_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `feature_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_features`
--

INSERT INTO `template_features` (`id`, `template_id`, `feature_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'khghj', '2025-04-14 19:24:20', '2025-04-14 19:24:20'),
(2, 1, 'lij', '2025-04-14 19:24:20', '2025-04-14 19:24:20'),
(3, 2, 'khghj', '2025-04-14 19:24:50', '2025-04-14 19:24:50'),
(4, 2, 'lij', '2025-04-14 19:24:50', '2025-04-14 19:24:50'),
(5, 3, 'khghj', '2025-04-14 19:25:16', '2025-04-14 19:25:16'),
(6, 3, 'lij', '2025-04-14 19:25:16', '2025-04-14 19:25:16'),
(7, 4, 'khghj', '2025-04-14 19:25:34', '2025-04-14 19:25:34'),
(8, 4, 'lij', '2025-04-14 19:25:34', '2025-04-14 19:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `template_images`
--

CREATE TABLE `template_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_thumbnail` tinyint(1) NOT NULL DEFAULT '0',
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `display_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_images`
--

INSERT INTO `template_images` (`id`, `template_id`, `image_url`, `is_thumbnail`, `is_main`, `display_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/templates/1744658660_kAs93COpfw.png', 1, 1, 0, '2025-04-14 19:24:20', '2025-04-14 19:24:20'),
(2, 2, 'uploads/templates/1744658690_QWPWY0Cqbn.png', 1, 1, 0, '2025-04-14 19:24:50', '2025-04-14 19:24:50'),
(3, 3, 'uploads/templates/1744658716_hmyDI7MPDY.png', 1, 1, 0, '2025-04-14 19:25:16', '2025-04-14 19:25:16'),
(4, 4, 'uploads/templates/1744658734_Ttr8qjwPIB.png', 1, 1, 0, '2025-04-14 19:25:34', '2025-04-14 19:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `template_license_types`
--

CREATE TABLE `template_license_types` (
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `license_type_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_license_types`
--

INSERT INTO `template_license_types` (`template_id`, `license_type_id`, `price`, `created_at`, `updated_at`) VALUES
(4, 2, NULL, NULL, NULL),
(4, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `template_tag`
--

CREATE TABLE `template_tag` (
  `template_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(40) NOT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `description` longtext,
  `password` text NOT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `otp_expiry` timestamp NULL DEFAULT NULL,
  `email_verified` int(1) DEFAULT NULL,
  `profile_image` varchar(256) DEFAULT NULL,
  `is_golden_guiter` int(11) NOT NULL DEFAULT '0',
  `social_media_links` text,
  `address` text,
  `artist_type` varchar(256) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `ancestor_id` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `role`, `description`, `password`, `access_token`, `otp`, `otp_expiry`, `email_verified`, `profile_image`, `is_golden_guiter`, `social_media_links`, `address`, `artist_type`, `status`, `ancestor_id`, `created_at`, `updated_at`) VALUES
('1', 'System', 'admin', 'admin@gmail.com', '01847382920', 1, NULL, '$2y$12$cQQjekU3V0C1egNm45ndh.GqpxhhXdJ0jgpdv4knm177RN4iT6KRi', NULL, NULL, NULL, NULL, 'uploads/user-images/174438080967f923891e6ab07bf6ca3-cef9-4259-b70c-9dd85f01ed42.png', 0, NULL, NULL, NULL, 1, NULL, '2023-05-07 11:15:50', '2025-04-11 08:13:29');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `license_types`
--
ALTER TABLE `license_types`
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
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_order_number_status_index` (`order_number`,`status`),
  ADD KEY `orders_created_at_index` (`created_at`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_template_id_foreign` (`template_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reviews_template_id_user_id_unique` (`template_id`,`user_id`),
  ADD KEY `reviews_is_approved_rating_index` (`is_approved`,`rating`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_rights`
--
ALTER TABLE `role_rights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`,`right_id`),
  ADD KEY `right_id` (`right_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_features`
--
ALTER TABLE `template_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_features_template_id_foreign` (`template_id`);

--
-- Indexes for table `template_images`
--
ALTER TABLE `template_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_images_template_id_foreign` (`template_id`);

--
-- Indexes for table `template_license_types`
--
ALTER TABLE `template_license_types`
  ADD PRIMARY KEY (`template_id`,`license_type_id`),
  ADD KEY `template_licenses_license_id_foreign` (`license_type_id`);

--
-- Indexes for table `template_tag`
--
ALTER TABLE `template_tag`
  ADD PRIMARY KEY (`template_id`,`tag_id`),
  ADD KEY `template_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `license_types`
--
ALTER TABLE `license_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_rights`
--
ALTER TABLE `role_rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `template_features`
--
ALTER TABLE `template_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `template_images`
--
ALTER TABLE `template_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `template_features`
--
ALTER TABLE `template_features`
  ADD CONSTRAINT `template_features_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `template_images`
--
ALTER TABLE `template_images`
  ADD CONSTRAINT `template_images_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `template_license_types`
--
ALTER TABLE `template_license_types`
  ADD CONSTRAINT `template_licenses_license_id_foreign` FOREIGN KEY (`license_type_id`) REFERENCES `license_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `template_licenses_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `template_tag`
--
ALTER TABLE `template_tag`
  ADD CONSTRAINT `template_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `template_tag_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
