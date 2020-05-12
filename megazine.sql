-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 01:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

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
  `id_status` int(11) NOT NULL DEFAULT 1,
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

INSERT INTO `news` (`id`, `id_topic`, `id_creator`, `hot_news`, `id_status`, `image`, `tag`, `caption`, `subtitle`, `created_at`, `updated_at`) VALUES
(269, 1, 1, 1, 1, '1588717903_5eb1e94f09805.jpg', '1', '1', '1', '2020-05-05 02:30:42', '2020-05-05 22:31:43'),
(270, 4, 1, 1, 1, '1588718023_5eb1e9c7b3439.jpg', '1', '1', '1', '2020-05-05 02:34:02', '2020-05-05 22:33:43'),
(8, 1, 1, 1, 1, '1589259338_5eba2c4ae0ebb.jpg', 'Sports', 'Boxing Sports', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:14:50', '2020-05-12 09:16:57'),
(10, 1, 1, 0, 1, 'blog-10.jpg', 'Place', 'Nature', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', '2020-05-07 16:54:56'),
(11, 1, 1, 1, 1, '1588713514_5eb1d82ae160a.jpg', 'auto', 'BMW i8', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', '2020-05-05 21:18:34'),
(12, 2, 1, 0, 1, 'blog-12.jpg', 'Sports', 'Boxing Sports', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', '2020-05-07 16:55:07'),
(13, 3, 1, 0, 1, 'blog-13.jpg', 'Place', 'Nature', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:51', '2020-05-09 19:35:58'),
(14, 4, 1, 1, 1, '1588713865_5eb1d989efdb2.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:14:51', '2020-05-06 01:21:27'),
(16, 1, 1, 1, 1, '1589277734_5eba74260987a.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:39:47', '2020-05-12 10:02:14'),
(247, 1, 1, 1, 1, '1588667167_5eb1231fbb02a.jpg', '1', '1', '1', '2020-04-25 05:08:35', '2020-05-05 08:26:07'),
(245, 2, 1, 1, 1, '1588667646_5eb124fe05c57.jpg', '111', '1', '1', '2020-04-24 23:35:57', '2020-05-12 09:19:33'),
(246, 2, 1, 1, 1, '1588717072_5eb1e610256d2.jpg', '11', '1', '1', '2020-04-24 23:36:02', '2020-05-12 09:19:01'),
(19, 1, 1, 0, 1, '1588713525_5eb1d8352a402.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:37', '2020-05-05 21:18:45'),
(251, 1, 1, 1, 1, '1588667329_5eb123c12112f.jpg', '1', '1', '1', '2020-04-25 05:08:57', '2020-05-05 08:28:49'),
(252, 1, 1, 1, 1, '1588667345_5eb123d18af3c.jpg', '1', '1', '1', '2020-04-25 05:09:01', '2020-05-05 08:29:05'),
(248, 1, 1, 1, 1, '1588667197_5eb1233dcf7af.jpg', '1', '1', '1', '2020-04-25 05:08:42', '2020-05-05 08:26:37'),
(249, 1, 1, 1, 1, '1588667293_5eb1239d829dc.jpg', '1', '1', '1', '2020-04-25 05:08:47', '2020-05-12 05:28:37'),
(250, 1, 1, 1, 1, '1588667312_5eb123b00e713.jpg', '11s', '1', '1', '2020-04-25 05:08:51', '2020-05-12 05:27:04'),
(240, 1, 1, 1, 1, '1588667185_5eb12331d278c.jpg', '1', '1', '1', '2020-04-24 10:23:59', '2020-05-05 08:26:25'),
(253, 1, 1, 1, 1, '1588667359_5eb123df45cad.jpg', '1', '1', '1', '2020-04-25 05:09:09', '2020-05-05 08:29:19'),
(254, 1, 1, 1, 1, '1588667371_5eb123eb283ff.jpg', '1', '1', '1', '2020-04-25 05:09:12', '2020-05-05 08:29:31'),
(26, 1, 1, 0, 1, '1588717013_5eb1e5d555eb2.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', '2020-05-05 22:16:53'),
(27, 2, 1, 0, 1, '1588717027_5eb1e5e3d287b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-05 22:17:07'),
(28, 2, 1, 1, 1, '1588667585_5eb124c164da7.jpg', 'Healthyy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-12 05:32:42'),
(29, 2, 1, 1, 1, '1588725682_5eb207b29d8a3.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-06 00:41:22'),
(30, 2, 1, 1, 1, '1588667499_5eb1246bc5474.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-05 08:31:39'),
(31, 2, 1, 0, 1, '1588725692_5eb207bcf132e.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-06 00:41:32'),
(32, 2, 1, 1, 1, '1588725699_5eb207c34f7a8.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-06 00:41:39'),
(33, 2, 1, 0, 1, '1588725705_5eb207c9e8e16.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-06 00:41:45'),
(34, 2, 1, 0, 1, '1588725712_5eb207d063492.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-06 00:41:52'),
(35, 2, 1, 0, 1, '1588667473_5eb124510d181.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-05 08:31:13'),
(36, 2, 1, 0, 1, '1588724031_5eb2013f8de5b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-05-06 00:13:51'),
(37, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(38, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(39, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(40, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(41, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(42, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(43, 2, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-20 13:45:51'),
(44, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(45, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(46, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(47, 2, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(48, 2, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:12'),
(49, 2, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(50, 2, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(51, 2, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:10'),
(52, 2, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:09'),
(53, 2, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-04-21 14:21:08'),
(54, 2, 1, 1, 1, 'blog-14.jpg', 'Motor', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(55, 3, 1, 1, 1, '1588724102_5eb201861f58f.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-05-09 19:36:00'),
(56, 3, 1, 0, 1, '1588724111_5eb2018f5ba42.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-05-06 00:15:11'),
(57, 3, 1, 0, 1, '1589257809_5eba26514091d.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-05-12 04:30:09'),
(58, 3, 1, 0, 1, '1588667519_5eb1247f74c93.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-05-05 08:31:59'),
(59, 3, 1, 1, 1, '1588724127_5eb2019fb3e1c.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-05-06 00:15:27'),
(60, 3, 1, 0, 1, '1588724133_5eb201a5cf4b4.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:15:33'),
(61, 3, 1, 0, 1, '1588724141_5eb201adb122c.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:15:41'),
(62, 3, 1, 1, 1, '1588724147_5eb201b378ba0.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:15:47'),
(63, 3, 1, 0, 1, '1588724158_5eb201becfca1.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:15:58'),
(64, 3, 1, 0, 1, '1588724167_5eb201c74bbc8.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:16:07'),
(65, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(66, 3, 1, 0, 1, '1588667534_5eb1248e80e3c.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-05 08:32:14'),
(67, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(68, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(69, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(70, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(71, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(72, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(73, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(74, 3, 1, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-04-20 14:02:32'),
(75, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(76, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(77, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(78, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(79, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:30', NULL),
(80, 3, 1, 0, 1, 'blog-14.jpg', 'Healthyy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:30', '2020-05-05 23:46:39'),
(81, 3, 1, 0, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:30', NULL),
(83, 4, 1, 0, 1, '1588713950_5eb1d9de14ebe.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-12 00:45:57'),
(84, 4, 1, 0, 1, '1588714001_5eb1da111fb58.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-05 21:26:41'),
(85, 4, 1, 1, 1, '1588715053_5eb1de2d82abb.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-05 21:44:13'),
(86, 4, 1, 0, 1, '1588714388_5eb1db941103a.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-05 21:33:08'),
(87, 4, 1, 1, 1, '1588715046_5eb1de265f620.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-05 21:44:06'),
(88, 4, 1, 0, 1, '1588714229_5eb1daf58f8b6.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-05 21:30:29'),
(89, 4, 1, 0, 1, '1588714981_5eb1dde554b98.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:43:01'),
(90, 4, 1, 0, 1, '1588714243_5eb1db03c892f.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:30:43'),
(91, 4, 1, 0, 1, '1588714393_5eb1db99f136e.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:33:13'),
(92, 4, 1, 0, 1, '1588714968_5eb1ddd85e0a1.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:42:48'),
(93, 4, 1, 0, 1, '1588714404_5eb1dba45e62b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:33:24'),
(94, 4, 1, 0, 1, '1589258069_5eba275503a37.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-12 04:34:29'),
(95, 4, 1, 0, 1, '1588714429_5eb1dbbdc0e69.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:33:49'),
(96, 4, 1, 0, 1, '1588714452_5eb1dbd4564b3.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:34:12'),
(97, 4, 1, 1, 1, '1588715426_5eb1dfa206a3a.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:50:26'),
(98, 4, 1, 1, 1, '1588724039_5eb20147d914f.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-06 00:13:59'),
(99, 4, 1, 0, 1, '1588715414_5eb1df962401e.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:50:14'),
(100, 4, 1, 0, 1, '1588714471_5eb1dbe72a2a4.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:34:31'),
(101, 4, 1, 0, 1, '1588714641_5eb1dc917f40e.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:37:21'),
(102, 4, 1, 1, 1, '1588715612_5eb1e05c1020e.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:53:32'),
(103, 4, 1, 0, 1, '1588715634_5eb1e07219841.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:53:54'),
(104, 4, 1, 0, 1, '1588715624_5eb1e0683fbf4.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:53:44'),
(105, 4, 1, 0, 1, '1588715645_5eb1e07da7787.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:54:05'),
(106, 4, 1, 1, 1, '1588715657_5eb1e08932f51.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:54:17'),
(107, 4, 1, 0, 1, '1588715756_5eb1e0ec4866c.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:55:56'),
(108, 4, 1, 0, 1, '1588715603_5eb1e0538ff9d.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:53:23'),
(109, 4, 1, 0, 1, '1588715765_5eb1e0f57c359.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:56:05'),
(110, 4, 1, 0, 1, '1588715517_5eb1dffdc3b3a.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:51:57'),
(282, 1, 2, 1, 1, '1588862470_5eb41e0636250.jpg', '1', '1', '1', '2020-05-07 14:41:10', '2020-05-07 14:41:10'),
(255, 1, 1, 1, 1, '1588667273_5eb123899a6c5.jpg', '1', '1', '1', '2020-04-25 05:09:15', '2020-05-05 08:27:53'),
(256, 1, 1, 1, 1, '1588667241_5eb12369b3dc3.jpg', '1', '1', '1', '2020-04-25 05:09:17', '2020-05-05 08:27:21'),
(257, 1, 1, 1, 1, '1588667228_5eb1235cd4c89.jpg', '11', '1', '1', '2020-04-25 05:09:20', '2020-05-05 08:27:08'),
(259, 1, 1, 1, 1, '1588717436_5eb1e77c64549.jpg', 'y', '1', '1', '2020-05-05 02:11:26', '2020-05-05 22:23:56'),
(260, 1, 1, 1, 1, '1588718123_5eb1ea2bcabb6.jpg', 'ys', '1', '1', '2020-05-05 02:11:48', '2020-05-12 05:28:48'),
(261, 1, 1, 1, 1, '1588718044_5eb1e9dc1b3ff.jpg', 'y', '1', '1', '2020-05-05 02:12:08', '2020-05-05 22:34:04'),
(262, 1, 1, 1, 1, '1588717959_5eb1e9876c86c.jpg', '1', '1', '1', '2020-05-05 02:12:32', '2020-05-05 22:32:39'),
(263, 1, 1, 1, 1, '1588717815_5eb1e8f78c14f.jpg', '1', '1', '1', '2020-05-05 02:15:07', '2020-05-05 22:30:15'),
(264, 1, 1, 1, 1, '1588717875_5eb1e933686f8.jpg', '1', '1', '1', '2020-05-05 02:15:57', '2020-05-05 22:31:15'),
(265, 1, 1, 1, 1, '1588718062_5eb1e9eec4d5d.jpg', '1', '1', '1', '2020-05-05 02:16:56', '2020-05-05 22:34:22'),
(267, 1, 1, 1, 1, '1588717840_5eb1e9102ebe2.jpg', '1', '1', '1', '2020-05-05 02:18:04', '2020-05-05 22:30:40'),
(268, 1, 1, 1, 1, '1588717890_5eb1e9429bdd6.jpg', '1', '1', '1', '2020-05-05 02:18:25', '2020-05-05 22:31:30'),
(271, 1, 1, 1, 1, '1588717929_5eb1e9699afbf.jpg', '1', '1', '1', '2020-05-05 02:36:50', '2020-05-05 22:32:09'),
(272, 1, 1, 1, 1, '1588717789_5eb1e8dd04f0d.jpg', '1', '1', '1', '2020-05-05 02:37:47', '2020-05-05 22:29:49'),
(273, 1, 1, 1, 1, '1588717773_5eb1e8cdb6267.jpg', '1qs', '1', '1', '2020-05-05 02:38:04', '2020-05-12 05:28:53'),
(274, 1, 1, 1, 1, '1588717336_5eb1e7189aaf0.jpg', '1', '1', '1', '2020-05-05 02:41:15', '2020-05-05 22:22:16'),
(275, 1, 1, 1, 1, '1588717327_5eb1e70f5f0c0.jpg', '1', '1', '1', '2020-05-05 02:41:30', '2020-05-05 22:22:07'),
(276, 1, 1, 1, 1, '1588717312_5eb1e700ce194.jpg', '1', '1', '1', '2020-05-05 02:50:28', '2020-05-05 22:21:52'),
(277, 1, 1, 1, 1, '1588667213_5eb1234d2afbf.jpg', '1', '1', '1', '2020-05-05 03:05:21', '2020-05-05 08:26:53'),
(278, 1, 1, 1, 1, '1588667390_5eb123fee0253.jpg', 'y', '1', '1', '2020-05-05 03:05:37', '2020-05-05 08:29:50'),
(279, 1, 1, 1, 1, '1589257819_5eba265b3820b.jpg', 'y', 'y', 'y', '2020-05-05 03:08:11', '2020-05-12 04:30:19'),
(280, 1, 1, 1, 1, '1588667426_5eb1242299099.jpg', 'z', 'z', 'z', '2020-05-05 03:11:59', '2020-05-05 08:30:26');

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
  `tag` varchar(11) NOT NULL,
  `heading_primary` varchar(255) DEFAULT NULL,
  `heading_secondary` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `id_topic`, `id_creator`, `image`, `tag`, `heading_primary`, `heading_secondary`, `created_at`, `updated_at`) VALUES
(1, 4, 0, '1588716056_5eb1e2189ba0d.jpg', 'sport', 'Strategic Design for Brands', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', '2020-05-05 22:00:56'),
(2, 1, 0, 'img_bg_2.jpg', 'style', 'Creators of Brands Template', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', NULL),
(3, 4, 0, '1588716034_5eb1e202c78c0.jpg', 'sport', 'Design & develop functional sites', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', '2020-05-05 22:00:34');

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
(5, 'video', '2020-05-07 09:55:41', NULL);

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
(3, 2, 1, 'haiit3', 'tranvietthanhhaiit3@gmail.com', '$2y$10$JNxtb1xsCx6.CjpkyEJca.WWHFt1PIkpE0ETrOB5t1OMc/jzAyQOa', 'Nxr8kcDnylLhlmMnZQVk4OGnr17g6sPwpKVl9Ib9qPmTJ951Bxw5imfOxBSD', '2020-04-20 07:18:55', '2020-05-05 17:48:47'),
(2, 1, 1, 'haiit2', 'tranvietthanhhaiit2@gmail.com', '$2y$10$hzCaFe/3ADHHK99t/Lej5eRjtQjNyS4dXQkDTyedrQ0jqSewmKSvq', 'PPDhlvJCgL9veMIfUOsFBbI8HU15dMSJJFvzdCg0sNKkuczBKploIrO6vtLt', '2020-04-20 07:17:22', '2020-05-10 17:46:35'),
(1, 1, 0, 'haiit11', 'tranvietthanhhaiit1@gmail.com', '$2y$10$M6aUa.uVRu1988c91UxYnOzbRJmWoAo6fVsJHbroIkkML5azY/qbC', 'g1IoU6NanfPZixpoKof4CA776NrFtqDg8BuJn09imOv2B7jDHHGghcZGoGtK', '2020-04-20 07:06:04', '2020-05-11 19:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL DEFAULT 0,
  `hot_news` int(11) NOT NULL DEFAULT 0,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `id_topic`, `id_creator`, `hot_news`, `id_status`, `image`, `video`, `tag`, `caption`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 1, 1, '1589257246_5eba241e9a36d.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:48:54', '2020-05-12 04:20:46'),
(2, 5, 1, 0, 0, '1588818151_5eb370e764a29.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '2020-05-07 02:22:31'),
(3, 1, 1, 0, 1, '1588819518_5eb3763ee2dda.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '2020-05-07 02:45:18'),
(4, 5, 1, 1, 1, '1588818192_5eb371108f831.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '2020-05-07 02:23:12'),
(5, 5, 1, 0, 1, '1588820803_5eb37b43237fc.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:15', '2020-05-07 03:06:43'),
(6, 5, 1, 0, 1, '1588820807_5eb37b47b8594.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:15', '2020-05-07 03:06:47'),
(7, 1, 1, 0, 1, '1588819537_5eb376512ecc5.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-07 02:45:37'),
(8, 1, 1, 0, 1, '1588819543_5eb37657c563c.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-07 02:45:43'),
(9, 2, 1, 0, 1, '1588819525_5eb376450fbed.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-07 02:45:25'),
(10, 1, 1, 0, 1, '1588819531_5eb3764b69638.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-07 02:45:31'),
(11, 4, 1, 0, 1, '1588820881_5eb37b9128d08.jpeg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-07 03:08:01'),
(12, 2, 1, 0, 1, '1589277576_5eba738875f75.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-12 09:59:36'),
(13, 4, 1, 0, 1, '1589277585_5eba73910830a.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 09:59:45'),
(14, 2, 1, 0, 1, '1589277592_5eba73985d5b5.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 09:59:52'),
(15, 2, 1, 0, 1, '1589277694_5eba73fe2d718.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:01:34'),
(16, 4, 1, 0, 1, '1589277710_5eba740e10d0f.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:01:50'),
(17, 1, 1, 0, 1, '1589277770_5eba744aaed98.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:02:50'),
(18, 1, 1, 0, 1, '1589277796_5eba746430012.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:03:16'),
(19, 1, 1, 0, 1, '1589277806_5eba746e9ea4f.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:03:26'),
(20, 3, 1, 0, 1, '1589277909_5eba74d56c4a7.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:05:09'),
(21, 1, 1, 0, 1, '1589257271_5eba2437b5583.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 04:21:11'),
(22, 1, 1, 0, 1, '1589277917_5eba74dd25cdb.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:05:17'),
(23, 1, 1, 0, 1, '1589277868_5eba74ac91f07.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:04:28'),
(24, 2, 1, 0, 1, '1589277933_5eba74edb9386.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:05:33'),
(25, 1, 1, 0, 1, '1589277881_5eba74b969ca3.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:04:41'),
(26, 3, 1, 0, 1, '1589277952_5eba75008ed08.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:05:52'),
(27, 1, 1, 0, 1, '1589277893_5eba74c5b7d0f.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:04:53'),
(28, 4, 1, 0, 1, '1589277964_5eba750c6a784.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:06:04'),
(29, 1, 1, 0, 1, '1589277840_5eba7490d78f4.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:04:00'),
(30, 2, 1, 0, 1, '1589277818_5eba747ab19ed.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:43', '2020-05-12 10:03:38'),
(31, 1, 1, 0, 1, '1589277974_5eba7516341da.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:06:14'),
(32, 3, 1, 0, 1, '1589277667_5eba73e3609f1.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:01:07'),
(33, 1, 1, 0, 1, '1589277656_5eba73d8e1ec6.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:56'),
(34, 1, 1, 0, 1, '1589277645_5eba73cd61817.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:45'),
(35, 4, 1, 0, 1, '1589277632_5eba73c0492e6.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:32'),
(36, 4, 1, 0, 1, '1589277623_5eba73b76aed4.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:23'),
(37, 1, 1, 0, 1, '1589277612_5eba73ac09cea.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:12'),
(38, 1, 1, 0, 1, '1589277603_5eba73a394b9f.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:03'),
(39, 3, 1, 0, 1, '1588820867_5eb37b8381635.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:47'),
(40, 3, 1, 0, 1, '1588820862_5eb37b7e8ccbf.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:42'),
(41, 1, 1, 0, 1, '1588820759_5eb37b17643de.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:05:59'),
(42, 1, 1, 0, 1, '1588820844_5eb37b6c70d8a.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:24'),
(43, 2, 1, 0, 1, '1588820856_5eb37b78861c7.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:36'),
(44, 1, 1, 0, 1, '1588820796_5eb37b3c9e255.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:06:36'),
(45, 2, 1, 0, 1, '1588820776_5eb37b281cb79.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:06:16'),
(46, 1, 1, 0, 1, '1588820749_5eb37b0dac996.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:05:49');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

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
