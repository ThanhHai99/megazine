-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 04:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megazine`
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
(3, '2020_05_04_004109_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_topic` int(11) NOT NULL DEFAULT 0,
  `id_creator` int(11) NOT NULL DEFAULT 0,
  `hot_news` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `caption` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `id_topic`, `id_creator`, `hot_news`, `image`, `tag`, `caption`, `subtitle`, `created_at`, `updated_at`) VALUES
(6, 6, 6, 0, '1588058536_5ea7d9a8a2ffe.jpg', 'MOVIES', 'LIAM NEESON', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:13:57', '2020-04-28 07:22:16'),
(8, 1, 8, 0, '1588522637_5eaeee8d10174.jpg', 'Sports', 'Boxing Sports', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:14:50', '2020-05-03 16:17:17'),
(10, 1, 10, 0, 'blog-10.jpg', 'Place', 'Nature', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', '2020-04-24 01:31:50'),
(11, 1, 11, 1, '1587771960_5ea37a3841dc0.jpg', 'auto', 'BMW i8', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', '2020-04-25 06:06:41'),
(12, 2, 12, 0, 'blog-12.jpg', 'Sports', 'Boxing Sports', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', NULL),
(13, 3, 13, 0, 'blog-13.jpg', 'Place', 'Nature', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:51', NULL),
(14, 4, 14, 0, '1587771706_5ea3793a9c25b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:14:51', '2020-04-24 23:41:46'),
(16, 1, 3, 1, '1587771287_5ea377976a878.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:39:47', '2020-04-24 23:34:47'),
(247, 1, 0, 1, '1587791315_5ea3c5d36f29f.jpg', '1', '1', '1', '2020-04-25 05:08:35', '2020-04-25 05:08:35'),
(245, 2, 0, 1, '1587771357_5ea377dd21e04.jpg', '1', '1', '1', '2020-04-24 23:35:57', '2020-04-24 23:35:57'),
(246, 2, 0, 1, '1587771362_5ea377e23fdbd.jpg', '1', '1', '1', '2020-04-24 23:36:02', '2020-04-24 23:36:02'),
(19, 1, 2, 0, '1588054712_5ea7cab8409f3.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:37', '2020-04-28 06:18:32'),
(251, 1, 0, 1, '1587791337_5ea3c5e9c3903.jpg', '1', '1', '1', '2020-04-25 05:08:57', '2020-04-25 05:08:57'),
(252, 1, 0, 1, '1587791341_5ea3c5eda1555.jpg', '1', '1', '1', '2020-04-25 05:09:01', '2020-04-25 05:09:01'),
(248, 1, 0, 1, '1587791322_5ea3c5da94708.jpg', '1', '1', '1', '2020-04-25 05:08:42', '2020-04-25 05:08:42'),
(249, 1, 0, 1, '1587791327_5ea3c5df0cc39.jpg', '1', '1', '1', '2020-04-25 05:08:47', '2020-04-25 05:08:47'),
(250, 1, 0, 1, '1587791331_5ea3c5e34f61a.jpg', '1', '1', '1', '2020-04-25 05:08:51', '2020-04-25 05:08:51'),
(240, 1, 0, 1, '1587723839_5ea2be3faec7d.jpg', '1', '1', '1', '2020-04-24 10:23:59', '2020-04-24 10:23:59'),
(253, 1, 0, 1, '1587791349_5ea3c5f5e9ce8.jpg', '1', '1', '1', '2020-04-25 05:09:09', '2020-04-25 05:09:09'),
(254, 1, 0, 1, '1587791352_5ea3c5f87a92b.jpg', '1', '1', '1', '2020-04-25 05:09:12', '2020-04-25 05:09:12'),
(26, 1, 3, 0, '1588056330_5ea7d10a81568.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', '2020-04-28 06:45:30'),
(27, 2, 2, 0, '1587771726_5ea3794e95609.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-04-24 23:42:06'),
(28, 2, 1, 1, '1587771742_5ea3795e7d81f.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-04-24 23:42:22'),
(29, 2, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-04-20 14:00:11'),
(30, 2, 1, 1, '1587772285_5ea37b7d58c31.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-04-24 23:51:25'),
(31, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-04-21 14:19:46'),
(32, 2, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-04-21 14:19:44'),
(33, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(34, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(35, 2, 2, 0, '1587771852_5ea379cc370fe.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-04-24 23:44:12'),
(36, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(37, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(38, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(39, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(40, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(41, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(42, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(43, 2, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-20 13:45:51'),
(44, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(45, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(46, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(47, 2, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(48, 2, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:12'),
(49, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(50, 2, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(51, 2, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:10'),
(52, 2, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:09'),
(53, 2, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:08'),
(54, 2, 1, 1, 'blog-14.jpg', 'Motor', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(55, 3, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-04-20 14:02:16'),
(56, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(57, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(58, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(59, 3, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-04-20 14:02:14'),
(60, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(61, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(62, 3, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-04-20 14:02:18'),
(63, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(64, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(65, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(66, 3, 1, 0, '1587771873_5ea379e1e750b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-04-24 23:44:33'),
(67, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(68, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(69, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(70, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(71, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(72, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(73, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(74, 3, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-04-20 14:02:32'),
(75, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(76, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(77, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(78, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(79, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:30', NULL),
(80, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:30', NULL),
(81, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:30', NULL),
(82, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:30', NULL),
(83, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', NULL),
(84, 4, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', NULL),
(85, 4, 2, 1, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', NULL),
(86, 4, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', NULL),
(87, 4, 2, 1, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', NULL),
(88, 4, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', NULL),
(89, 4, 2, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(90, 4, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(91, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(92, 4, 1, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(93, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(94, 4, 1, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(95, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(96, 4, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(97, 4, 2, 1, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(98, 4, 1, 1, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(99, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(100, 4, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(101, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(102, 4, 1, 1, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(103, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(104, 4, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(105, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(106, 4, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', NULL),
(107, 4, 2, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', NULL),
(108, 4, 1, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', NULL),
(109, 4, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', NULL),
(110, 4, 1, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', NULL),
(111, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:22', NULL),
(112, 5, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:22', '2020-04-20 13:59:59'),
(113, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(114, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(115, 5, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', '2020-04-20 13:59:56'),
(116, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(117, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(118, 5, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', '2020-04-20 13:59:53'),
(119, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(120, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(121, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(122, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(123, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(124, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(125, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(126, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(127, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(128, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(129, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(130, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(131, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(132, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(133, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(134, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(135, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(136, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(137, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(138, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:24', NULL),
(139, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:40', NULL),
(140, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:40', NULL),
(141, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:40', NULL),
(142, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(143, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(144, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(145, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(146, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(147, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(148, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(149, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(150, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(258, 1, 0, 1, '1588056478_5ea7d19e512d8.jpg', '1', '1', '1', '2020-04-28 06:47:58', '2020-04-28 06:47:58'),
(155, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(156, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(157, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(158, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(159, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(160, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(161, 6, 2, 0, 'blog-5.jpg', 'Motor', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:42', NULL),
(162, 6, 1, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:42', NULL),
(163, 6, 2, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:42', NULL),
(164, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:42', NULL),
(165, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:42', NULL),
(166, 6, 1, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:42', NULL),
(255, 1, 0, 1, '1587791355_5ea3c5fb291f4.jpg', '1', '1', '1', '2020-04-25 05:09:15', '2020-04-25 05:09:15'),
(256, 1, 0, 1, '1587791357_5ea3c5fd8c939.jpg', '1', '1', '1', '2020-04-25 05:09:17', '2020-04-25 05:09:17'),
(257, 1, 0, 1, '1587791360_5ea3c600a605b.jpg', '1', '1', '1', '2020-04-25 05:09:20', '2020-04-25 05:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('haitran23031999@gmail.com', '$2y$10$bifakQn/WF5ERmvW899/Wex/SVE4k8wvrexW1OGat3tMXjS7dVKHu', '2020-04-11 18:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'admin', '2020-04-08 12:31:16', NULL),
(1, 'staff', '2020-04-08 12:31:16', NULL),
(2, 'guest', '2020-04-08 12:31:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading_primary` varchar(255) DEFAULT NULL,
  `heading_secondary` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `id_topic`, `id_creator`, `image`, `heading_primary`, `heading_secondary`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'img_bg_1.jpg', 'Strategic Design for Brands', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', '2020-05-03 15:30:47'),
(2, 4, 0, 'img_bg_2.jpg', 'Creators of Brands Template', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', NULL),
(3, 1, 0, '1588525007_5eaef7cfa7608.jpg', 'Design & develop functional sites', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', '2020-05-03 16:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'block', '2020-04-08 12:42:32', NULL),
(1, 'active', '2020-04-08 12:42:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'style', '2020-04-08 07:54:04', NULL),
(2, 'fashion', '2020-04-08 07:54:05', NULL),
(3, 'travel', '2020-04-08 07:54:05', NULL),
(4, 'sports', '2020-04-08 07:54:05', NULL),
(5, 'video', '2020-04-08 07:54:05', NULL),
(6, 'archives', '2020-04-08 07:54:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT 2,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT 2,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_role`, `id_status`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 2, 1, 'hai', 'tranvietthanhhaiit3@gmail.com', '$2y$10$JNxtb1xsCx6.CjpkyEJca.WWHFt1PIkpE0ETrOB5t1OMc/jzAyQOa', '8tNbGXH0MQuIJ8R6irhUUOd2c8L2RdDlqHdILTWJF12pIxrVqjr62FfYZos3', '2020-04-20 07:18:55', '2020-04-20 07:18:55'),
(5, 1, 1, 'hai', 'tranvietthanhhaiit2@gmail.com', '$2y$10$hzCaFe/3ADHHK99t/Lej5eRjtQjNyS4dXQkDTyedrQ0jqSewmKSvq', 'mbSbrjRCxPdQaA2BRM9PW6vccYgicE1oDIZ2SfzXoQ8aiy4W5uI54OR43aoH', '2020-04-20 07:17:22', '2020-04-20 07:17:22'),
(4, 1, 1, 'hai1', 'tranvietthanhhaiit1@gmail.com', '$2y$10$M6aUa.uVRu1988c91UxYnOzbRJmWoAo6fVsJHbroIkkML5azY/qbC', 'pNm4uVuzJziICKbkiJRv1hmaF8u76iZBiyBiDmayGgM9ypQt6ZHpOTkmwAVO', '2020-04-20 07:06:04', '2020-04-24 04:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `link_image` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `id_topic`, `id_creator`, `link_image`, `link_video`, `tag`, `caption`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:48:54', '0000-00-00 00:00:00'),
(2, 5, 2, 'blog-5.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '0000-00-00 00:00:00'),
(3, 1, 3, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '0000-00-00 00:00:00'),
(4, 5, 1, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '0000-00-00 00:00:00'),
(5, 5, 4, 'blog-5.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:15', '0000-00-00 00:00:00'),
(6, 5, 6, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:15', '0000-00-00 00:00:00'),
(7, 1, 1, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '0000-00-00 00:00:00'),
(8, 1, 2, 'blog-5.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '0000-00-00 00:00:00'),
(9, 2, 3, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '0000-00-00 00:00:00'),
(10, 1, 1, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '0000-00-00 00:00:00'),
(11, 4, 4, 'blog-5.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '0000-00-00 00:00:00'),
(12, 2, 6, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '0000-00-00 00:00:00'),
(13, 4, 6, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(14, 2, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(15, 2, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(16, 4, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(17, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(18, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(19, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(20, 3, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(21, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(22, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(23, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(24, 2, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(25, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(26, 3, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(27, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(28, 4, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(29, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(30, 2, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '0000-00-00 00:00:00'),
(31, 1, 6, 'blog-5.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(32, 3, 6, 'blog-5.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(33, 1, 6, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(34, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(35, 4, 6, 'blog-5.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(36, 4, 6, 'blog-5.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(37, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(38, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(39, 3, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(40, 3, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(41, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(42, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(43, 2, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(44, 1, 6, 'blog-5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(45, 2, 6, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00'),
(46, 1, 6, 'blog-5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
