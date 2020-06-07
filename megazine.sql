-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 06:40 AM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `id_news`, `id_user`, `content`, `created_at`, `updated_at`) VALUES
(1, 379, 1, 'okkkkkkk', '2020-05-31 23:44:01', '2020-05-31 23:44:01'),
(2, 379, 1, 'okkkkk', '2020-06-01 00:05:01', '2020-06-01 00:05:01'),
(11, 385, 1, '1', '2020-06-01 00:30:56', '2020-06-01 00:30:56'),
(25, 385, 1, '2', '2020-06-01 00:51:49', '2020-06-01 00:51:49'),
(26, 385, 1, '3', '2020-06-01 00:51:55', '2020-06-01 00:51:55'),
(27, 384, 1, '1', '2020-06-01 04:06:08', '2020-06-01 04:06:08'),
(31, 384, 1, '2', '2020-06-01 05:00:45', '2020-06-01 05:00:45'),
(32, 385, 1, '4', '2020-06-01 05:07:47', '2020-06-01 05:07:47'),
(33, 385, 1, '5', '2020-06-01 05:09:24', '2020-06-01 05:09:24'),
(34, 385, 1, '6', '2020-06-02 06:58:05', '2020-06-02 06:58:05'),
(35, 382, 1, '1', '2020-06-02 08:56:48', '2020-06-02 08:56:48'),
(36, 386, 1, '1', '2020-06-06 10:40:34', '2020-06-06 10:40:34'),
(37, 386, 1, '2', '2020-06-06 10:43:12', '2020-06-06 10:43:12'),
(38, 389, 1, '1', '2020-06-07 02:12:27', '2020-06-07 02:12:27');

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
(269, 1, 1, 1, 1, '1588717903_5eb1e94f09805.jpg', '1brtbrt', '1btrbrt', '1brtbrt', '2020-05-05 02:30:42', '2020-05-27 05:56:43'),
(384, 1, 1, 0, 1, '1590942731_5ed3dc0b59866.jpg', 'tag', 'cap', 'sub', '2020-05-31 16:32:11', '2020-05-31 16:32:11'),
(382, 4, 1, 0, 1, '1590888890_5ed309bad2060.jpg', 'tag', 'cap', 'sub', '2020-05-31 01:34:50', '2020-05-31 01:34:50'),
(383, 4, 1, 0, 1, '1590939989_5ed3d155449a8.jpg', 'tag news', 'cap news', 'sub news', '2020-05-31 15:46:29', '2020-05-31 15:46:29'),
(371, 1, 1, 1, 1, '1590763226_5ed11edabd1fb.jpg', '1', '1', '1', '2020-05-29 14:39:19', '2020-05-29 14:40:26'),
(372, 1, 1, 1, 1, '1590763252_5ed11ef47dab6.jpg', '1', '1', '1', '2020-05-29 14:40:52', '2020-05-29 14:40:52'),
(373, 1, 1, 1, 1, '1590763341_5ed11f4dbb9eb.jpg', '1', '1', '1', '2020-05-29 14:42:21', '2020-05-29 14:42:21'),
(16, 1, 1, 1, 1, '1590768868_5ed134e4ebff3.jpg', 'Healthyyyyyyyyyyyyyyy', 'Gym Fitnes', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:39:47', '2020-06-06 18:17:50'),
(245, 2, 1, 1, 1, '1588667646_5eb124fe05c57.jpg', '111', '1', '1', '2020-04-24 23:35:57', '2020-05-12 09:19:33'),
(246, 2, 1, 1, 1, '1588717072_5eb1e610256d2.jpg', '11', '1', '1', '2020-04-24 23:36:02', '2020-05-12 09:19:01'),
(27, 2, 1, 0, 1, '1588717027_5eb1e5e3d287b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-06-06 16:46:53'),
(28, 1, 1, 1, 1, '1588667585_5eb124c164da7.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-06-06 16:25:46'),
(30, 2, 1, 1, 1, '1588667499_5eb1246bc5474.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-06-06 16:36:37'),
(31, 2, 1, 1, 1, '1588725692_5eb207bcf132e.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', '2020-06-06 16:36:44'),
(387, 4, 1, 0, 1, '1591495812_5edc4c84c3ff9.jpg', 'tag', 'cap', 'sub', '2020-06-07 02:10:12', '2020-06-07 02:10:12'),
(389, 4, 1, 0, 1, '1591495925_5edc4cf5e70d2.jpg', 'tag', 'cap', 'sub', '2020-06-07 02:12:05', '2020-06-07 02:12:05'),
(38, 2, 1, 1, 1, '1590691115_5ed0052ba4e44.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-06-06 16:36:50'),
(39, 2, 1, 1, 1, '1591467493_5edbdde582e96.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-06-06 18:18:13'),
(40, 2, 1, 0, 1, '1590691130_5ed0053a7b258.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-06-06 16:39:16'),
(41, 2, 1, 1, 1, '1590691149_5ed0054db727d.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-06-06 16:27:19'),
(380, 4, 1, 0, 1, '1590795651_5ed19d8301932.jpg', '1', '1', '1', '2020-05-29 23:40:51', '2020-05-29 23:40:51'),
(381, 4, 1, 0, 1, '1590795665_5ed19d91f1569.jpg', '1', '1', '1', '2020-05-29 23:41:05', '2020-05-29 23:41:05'),
(379, 3, 1, 0, 1, '1590795583_5ed19d3f37ea4.jpg', '1', '1', '1', '2020-05-29 23:39:43', '2020-05-29 23:39:43'),
(44, 2, 1, 0, 1, '1590691236_5ed005a4e4fff.jpg', 'Healthyyyyyy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-06-06 16:42:23'),
(45, 2, 1, 0, 1, '1590691244_5ed005ac597e4.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:40:44'),
(46, 2, 1, 0, 1, '1590691251_5ed005b3e9995.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:40:51'),
(47, 2, 1, 1, 1, '1590691259_5ed005bbe0a8b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:40:59'),
(48, 2, 1, 1, 1, '1590691169_5ed005611c0ee.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:39:29'),
(49, 2, 1, 0, 1, '1590691175_5ed005675c910.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:39:35'),
(50, 2, 1, 1, 1, '1590691181_5ed0056dd29cf.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:39:41'),
(51, 2, 1, 1, 1, '1590691188_5ed00574dbf71.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:39:48'),
(52, 2, 1, 1, 1, '1590691211_5ed0058baaf10.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:40:11'),
(53, 2, 1, 1, 1, '1590691205_5ed005856081d.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-05-28 18:40:05'),
(54, 2, 1, 1, 1, '1590691198_5ed0057eb84be.jpg', 'Motorrrrrrrrrrr', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', '2020-06-01 08:12:22'),
(377, 4, 1, 1, 1, '1590795336_5ed19c4834858.jpg', '1', '1', '1', '2020-05-29 23:35:36', '2020-05-29 23:35:36'),
(57, 1, 1, 0, 1, '1589257809_5eba26514091d.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', '2020-05-29 15:44:16'),
(375, 1, 1, 1, 1, '1590764198_5ed122a68cd83.jpg', '1', '1', '1', '2020-05-29 14:56:38', '2020-05-29 14:56:38'),
(376, 2, 1, 0, 1, '1590765099_5ed1262b9942e.jpg', '1', '1', '1', '2020-05-29 15:11:39', '2020-05-29 15:12:06'),
(61, 3, 1, 0, 1, '1588724141_5eb201adb122c.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:15:41'),
(62, 3, 1, 1, 1, '1588724147_5eb201b378ba0.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:15:47'),
(63, 3, 1, 0, 1, '1588724158_5eb201becfca1.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:15:58'),
(64, 3, 1, 0, 1, '1588724167_5eb201c74bbc8.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-06 00:16:07'),
(65, 3, 1, 0, 1, '1590691288_5ed005d8c7957.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-28 18:41:28'),
(66, 3, 1, 0, 1, '1588667534_5eb1248e80e3c.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-05 08:32:14'),
(69, 1, 1, 0, 1, '1590681351_5ecfdf077bde4.jpg', 'Healthy', 'Gym Fitnes', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-06-01 07:41:05'),
(70, 1, 1, 0, 1, '1590691329_5ed00601a2324.jpg', 'Healthy', 'Gym Fitnes', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-06-01 07:36:52'),
(71, 3, 1, 0, 1, '1590691348_5ed00614d5699.jpg', 'Healthyyyyyyyyyyyyyyyyyy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-06-01 07:37:20'),
(72, 3, 1, 0, 1, '1590691342_5ed0060ee99eb.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-28 18:42:22'),
(73, 3, 1, 0, 1, '1590691336_5ed0060810535.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', '2020-05-28 18:42:16'),
(83, 4, 1, 0, 1, '1588713950_5eb1d9de14ebe.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-12 00:45:57'),
(84, 4, 1, 0, 1, '1588714001_5eb1da111fb58.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-05 21:26:41'),
(85, 4, 1, 1, 1, '1588715053_5eb1de2d82abb.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-05-05 21:44:13'),
(86, 4, 1, 1, 0, '1588714388_5eb1db941103a.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-06-01 07:34:14'),
(87, 4, 1, 1, 0, '1588715046_5eb1de265f620.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:07', '2020-06-01 07:34:20'),
(366, 4, 1, 1, 1, '1590668958_5ecfae9e8582c.jpg', '1', '1', '1', '2020-05-28 12:29:18', '2020-05-28 12:29:18'),
(367, 4, 1, 1, 1, '1590668987_5ecfaebbce7ea.jpg', '1', '1', '1', '2020-05-28 12:29:47', '2020-05-28 12:29:47'),
(89, 4, 1, 0, 1, '1588714981_5eb1dde554b98.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:43:01'),
(90, 4, 1, 0, 1, '1588714243_5eb1db03c892f.jpg', 'Healthy-ok', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-06-01 08:17:54'),
(92, 4, 1, 0, 1, '1588714968_5eb1ddd85e0a1.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:42:48'),
(93, 4, 1, 0, 1, '1588714404_5eb1dba45e62b.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:33:24'),
(94, 4, 1, 0, 1, '1589258069_5eba275503a37.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-12 04:34:29'),
(95, 4, 1, 0, 1, '1588714429_5eb1dbbdc0e69.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-06-06 16:50:30'),
(96, 4, 1, 0, 1, '1588714452_5eb1dbd4564b3.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-06-06 16:50:33'),
(97, 4, 1, 1, 1, '1588715426_5eb1dfa206a3a.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:50:26'),
(98, 4, 1, 1, 1, '1588724039_5eb20147d914f.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-06 00:13:59'),
(99, 4, 1, 0, 1, '1588715414_5eb1df962401e.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-06-06 16:50:53'),
(100, 4, 1, 0, 1, '1588714471_5eb1dbe72a2a4.jpg', 'Healthyyyyyyyyyyyyyyyyyyy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-06-01 08:21:27'),
(101, 4, 1, 0, 1, '1588714641_5eb1dc917f40e.jpg', 'Healthyiiiiiiiiiyyyyyyyyyyyyyyy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-06-06 16:50:38'),
(102, 4, 1, 0, 1, '1588715612_5eb1e05c1020e.jpg', 'Healthyyyyyyy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-06-06 16:51:21'),
(103, 4, 1, 0, 1, '1588715634_5eb1e07219841.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:53:54'),
(104, 4, 1, 0, 1, '1588715624_5eb1e0683fbf4.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:53:44'),
(105, 4, 1, 0, 1, '1588715645_5eb1e07da7787.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:54:05'),
(106, 4, 1, 1, 1, '1588715657_5eb1e08932f51.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:08', '2020-05-05 21:54:17'),
(107, 4, 1, 0, 1, '1588715756_5eb1e0ec4866c.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:55:56'),
(108, 4, 1, 0, 1, '1588715603_5eb1e0538ff9d.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:53:23'),
(109, 4, 1, 0, 1, '1588715765_5eb1e0f57c359.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:56:05'),
(110, 4, 1, 0, 1, '1588715517_5eb1dffdc3b3a.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:09', '2020-05-05 21:51:57'),
(282, 4, 1, 1, 1, '1588862470_5eb41e0636250.jpg', '11', '1', '1', '2020-05-07 14:41:10', '2020-05-26 05:34:19'),
(370, 1, 1, 1, 1, '1590669382_5ecfb046f2867.jpg', '1', '1', '1', '2020-05-28 12:36:22', '2020-05-28 12:36:22'),
(271, 1, 1, 1, 1, '1588717929_5eb1e9699afbf.jpg', '1', '1', '1', '2020-05-05 02:36:50', '2020-05-05 22:32:09'),
(385, 4, 1, 0, 1, '1590943149_5ed3ddadcebd8.jpg', 'tag', 'cap', 'sub', '2020-05-31 16:39:09', '2020-05-31 16:39:09'),
(273, 1, 1, 1, 1, '1588717773_5eb1e8cdb6267.jpg', '1qs', '1', '1', '2020-05-05 02:38:04', '2020-05-12 05:28:53'),
(274, 1, 1, 1, 1, '1588717336_5eb1e7189aaf0.jpg', '1', '1', '1', '2020-05-05 02:41:15', '2020-05-05 22:22:16'),
(275, 1, 1, 1, 1, '1588717327_5eb1e70f5f0c0.jpg', '1okok', '1', '1', '2020-05-05 02:41:30', '2020-06-01 07:38:16'),
(276, 1, 1, 1, 1, '1588717312_5eb1e700ce194.jpg', '1BRBER', '1ẺBERBE', '1ẺBERBER', '2020-05-05 02:50:28', '2020-05-27 05:55:42'),
(280, 1, 1, 1, 1, '1588667426_5eb1242299099.jpg', 'z', 'z', 'z', '2020-05-05 03:11:59', '2020-05-05 08:30:26'),
(283, 4, 1, 1, 1, '1589651426_5ec027e2dd0b3.jpg', '1', '1', '1', '2020-05-16 17:50:26', '2020-05-26 05:04:44'),
(285, 1, 1, 1, 1, '1589651495_5ec028277e2bf.jpg', '1rbtrrt', '1brtbrt', '1brtbrt', '2020-05-16 17:51:35', '2020-05-27 05:56:49'),
(362, 1, 1, 1, 1, '1590642875_5ecf48bbeeb92.jpg', '1', '1', '1', '2020-05-28 05:14:35', '2020-05-28 05:14:35'),
(287, 1, 1, 1, 1, '1589677543_5ec08de79de9f.jpg', '1brbrt', '1brtbrtbrt', '1brtbrtb', '2020-05-17 01:05:43', '2020-05-27 05:56:58'),
(288, 1, 1, 1, 1, '1589677594_5ec08e1a54ed6.jpg', '1brtbrt', '1brtbrt', '1brtbrt', '2020-05-17 01:06:34', '2020-05-27 05:57:24'),
(289, 1, 1, 1, 1, '1589679198_5ec0945ee864d.jpg', '1brtbrt', '1brtbrt', '1brtbrt', '2020-05-17 01:33:18', '2020-05-27 05:57:36'),
(291, 1, 1, 1, 1, '1589690855_5ec0c1e7c9970.jpg', '1brtbrt', '1btrbrtb', '1btrbrtbrt', '2020-05-17 04:47:35', '2020-05-27 05:57:58'),
(292, 1, 1, 1, 1, '1589690940_5ec0c23c359b8.jpg', '1', '1', '1', '2020-05-17 04:49:00', '2020-05-17 04:49:00'),
(293, 1, 1, 1, 1, '1589690983_5ec0c2673f393.jpg', '1', '1', '1', '2020-05-17 04:49:43', '2020-05-17 04:49:43'),
(294, 1, 1, 1, 1, '1589691268_5ec0c384795da.jpg', '1', '1ok', '1', '2020-05-17 04:54:28', '2020-06-01 07:38:26'),
(295, 1, 1, 1, 1, '1589693466_5ec0cc1a9cbc1.jpg', '1', '1', '1', '2020-05-17 05:31:06', '2020-05-17 05:31:06'),
(296, 1, 1, 1, 1, '1589693499_5ec0cc3b9a390.jpg', '1', '1', '1', '2020-05-17 05:31:39', '2020-05-17 05:31:39'),
(297, 1, 1, 1, 1, '1589693573_5ec0cc8558d9d.jpg', '1', '1', '1', '2020-05-17 05:32:53', '2020-05-17 05:32:53'),
(298, 1, 1, 1, 1, '1589693787_5ec0cd5b9ee45.jpg', '1', '1', '1', '2020-05-17 05:36:27', '2020-05-17 05:36:27'),
(299, 1, 1, 1, 1, '1589695184_5ec0d2d091305.jpg', '1', '1', '1', '2020-05-17 05:59:44', '2020-05-17 05:59:44'),
(300, 1, 1, 1, 1, '1589695450_5ec0d3da8109f.jpg', '1', '1', '1', '2020-05-17 06:04:10', '2020-05-17 06:04:10'),
(301, 1, 1, 1, 1, '1589695571_5ec0d4530d4e8.jpg', '1', '1', '1', '2020-05-17 06:06:11', '2020-05-17 06:06:11'),
(302, 1, 1, 1, 1, '1589696045_5ec0d62de3537.jpg', '1', '1', '1', '2020-05-17 06:14:05', '2020-05-17 06:14:05'),
(303, 1, 1, 1, 1, '1589696273_5ec0d71153945.jpg', '1', '1', '1', '2020-05-17 06:17:53', '2020-05-17 06:17:53'),
(304, 1, 1, 1, 1, '1589696519_5ec0d807456d9.jpg', '1', '1', '1', '2020-05-17 06:21:59', '2020-05-17 06:21:59'),
(305, 1, 1, 1, 1, '1589696574_5ec0d83ed9e8f.jpg', '1', '1', '1', '2020-05-17 06:22:54', '2020-05-17 06:22:54'),
(306, 1, 1, 1, 1, '1589696662_5ec0d8962ef94.jpg', '1', '1', '1', '2020-05-17 06:24:22', '2020-05-17 06:24:22'),
(307, 1, 1, 1, 1, '1589696985_5ec0d9d9cce45.jpg', '1', '1', '1', '2020-05-17 06:29:45', '2020-05-17 06:29:45'),
(308, 1, 1, 1, 1, '1589862655_5ec360ffa9d07.jpg', '1', '1', '1', '2020-05-19 04:30:55', '2020-05-19 04:30:55'),
(309, 1, 1, 1, 1, '1589862781_5ec3617df0e18.jpg', '1h44545', '15g5454h54', '1h45h54h5h', '2020-05-19 04:33:01', '2020-05-27 05:59:11'),
(310, 1, 1, 1, 1, '1589862782_5ec3617e04683.jpg', 'ưegvƯGRWGR', '1GRGRGR', '1REGERGER', '2020-05-19 04:33:02', '2020-05-27 05:55:36'),
(312, 1, 1, 1, 1, '1589863028_5ec3627433949.jpg', '1BERBER', '1ERBERBER', '1BERBERBRE', '2020-05-19 04:37:08', '2020-05-27 05:56:05'),
(313, 1, 1, 1, 1, '1589863074_5ec362a256ac9.jpg', '1brbrb', '1brbr', '1brbrb', '2020-05-19 04:37:54', '2020-05-27 05:56:12'),
(314, 1, 1, 1, 1, '1590469718_5ecca456cbb95.jpg', '1erbtrbrtb', '1rtbrtbrt', '1btrbrt', '2020-05-19 04:39:14', '2020-05-27 05:56:36'),
(315, 1, 1, 1, 1, '1589863313_5ec36391626d3.jpg', '1gggggbtt', '111111111111111', '1thththt', '2020-05-19 04:41:53', '2020-05-27 05:59:03'),
(317, 1, 1, 1, 1, '1590459367_5ecc7be79f0c6.jpg', '1gggggggggggg', '1ggggggggggg', '1gggggggggg', '2020-05-26 02:16:07', '2020-05-27 05:58:56'),
(318, 1, 1, 1, 1, '1590460655_5ecc80efd0f61.jpg', '1gggggggggggggggg', '1gggggggggggggg', '1ggggggggggg', '2020-05-26 02:37:35', '2020-05-27 05:58:51'),
(319, 1, 1, 1, 1, '1590461215_5ecc831f5b4a1.jpg', '1grrrrrrrr', '1grrrrr', '1rggggggggggggggggg', '2020-05-26 02:46:55', '2020-05-27 05:58:43'),
(321, 1, 1, 1, 1, '1590461342_5ecc839e16a10.jpg', '1brtbrt', '1brtbrt', '1brtbrt', '2020-05-26 02:49:02', '2020-05-27 05:57:17'),
(323, 4, 1, 1, 1, '1590474693_5eccb7c50ee10.jpg', 'tag1', 'cap1', 'sub1', '2020-05-26 06:31:33', '2020-05-26 06:31:33'),
(326, 2, 1, 1, 1, '1590475404_5eccba8c18fb8.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:24', '2020-05-26 06:43:24'),
(327, 2, 1, 1, 1, '1591089151_5ed617ff3ae96.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:28', '2020-06-02 09:12:31'),
(328, 2, 1, 1, 1, '1590475411_5eccba93a3748.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:31', '2020-05-26 06:43:31'),
(329, 2, 1, 1, 1, '1590475415_5eccba9723e07.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:35', '2020-05-26 06:43:35'),
(330, 2, 1, 1, 1, '1590475418_5eccba9a6339f.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:38', '2020-05-26 06:43:38'),
(331, 2, 1, 1, 1, '1590475421_5eccba9d78eda.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:41', '2020-05-26 06:43:41'),
(332, 2, 1, 1, 1, '1590475424_5eccbaa039e59.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:44', '2020-05-26 06:43:44'),
(333, 2, 1, 1, 1, '1590475427_5eccbaa3cf7d5.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:47', '2020-05-26 06:43:47'),
(334, 2, 1, 1, 1, '1590475430_5eccbaa6ac5bf.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:50', '2020-05-26 06:43:50'),
(335, 2, 1, 1, 1, '1590475433_5eccbaa94260b.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:53', '2020-05-26 06:43:53'),
(336, 2, 1, 1, 1, '1590475435_5eccbaabc899f.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:55', '2020-05-26 06:43:55'),
(337, 2, 1, 1, 1, '1590475439_5eccbaafc3300.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:43:59', '2020-05-26 06:43:59'),
(338, 2, 1, 1, 1, '1590475443_5eccbab3005c8.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:44:03', '2020-05-26 06:44:03'),
(386, 2, 3, 1, 1, '1591081966_5ed5fbee64e73.jpg', 'tag', 'cap', 'kon', '2020-06-02 07:12:30', '2020-06-02 07:34:38'),
(374, 1, 1, 1, 1, '1590768893_5ed134fd73de4.jpg', '1', '1', '1', '2020-05-29 14:55:38', '2020-05-29 16:14:53'),
(347, 4, 1, 1, 1, '1590475525_5eccbb05c5cba.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:25', '2020-05-26 06:45:25'),
(348, 4, 1, 1, 1, '1590475529_5eccbb0977c9c.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:29', '2020-05-26 06:45:29'),
(349, 4, 1, 1, 1, '1590475533_5eccbb0d0f1f3.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:33', '2020-05-26 06:45:33'),
(350, 4, 1, 1, 1, '1590475536_5eccbb10930e2.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:36', '2020-05-26 06:45:36'),
(351, 4, 1, 1, 1, '1590475539_5eccbb13501be.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:39', '2020-05-26 06:45:39'),
(352, 4, 1, 1, 1, '1590475542_5eccbb165b2d4.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:42', '2020-05-26 06:45:42'),
(353, 4, 1, 1, 1, '1590475545_5eccbb194fde2.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:45', '2020-05-26 06:45:45'),
(354, 4, 1, 1, 1, '1590475548_5eccbb1c3bd30.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:48', '2020-05-26 06:45:48'),
(355, 4, 1, 1, 1, '1590475550_5eccbb1edec8c.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:50', '2020-05-26 06:45:50'),
(356, 4, 1, 1, 1, '1590475553_5eccbb21eb0f8.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 06:45:53', '2020-05-26 06:45:53'),
(357, 1, 1, 11, 1, '1590487569_5eccea11be038.jpg', '1trbtrbtrb', '11bbrtb', '11btrbtrbrt', '2020-05-26 10:06:09', '2020-05-27 05:58:19'),
(359, 3, 62, 1, 1, '1590535495_5ecda547f06e5.jpg', 'q ejwf', 'biebie', 'ndlvdnvlknd', '2020-05-26 23:24:55', '2020-05-26 23:24:55'),
(363, 1, 1, 1, 1, '1590642895_5ecf48cf192e4.jpg', '1', '1', '1', '2020-05-28 05:14:55', '2020-05-28 05:14:55'),
(365, 2, 1, 1, 1, '1590668841_5ecfae29e6137.jpg', '1', '1', '1', '2020-05-28 12:27:21', '2020-05-28 12:27:21'),
(360, 4, 1, 1, 1, '1590638830_5ecf38ee531fe.jpg', 'Tag', 'Cap', 'Sub', '2020-05-28 04:07:10', '2020-05-28 04:07:10');

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
('tranvietthanhhaiit1@gmail.com', '$2y$10$2oZA7Ga75GqOGOJGldGFAuJ0zptTr60S0/AB2xSx7I8XOrLIuDJOm', '2020-05-13 19:18:16'),
('tranvietthanhhaiit2@gmail.com', '$2y$10$T/WL0vwXV/WpGui.IdXl/uAi/ZD3kkkB69B.k2E.7BpiViFGpdL.W', '2020-05-13 20:24:40'),
('haitran23031999@gmail.com', '$2y$10$nX24wJ4VLYQOoXtZ2o7Je.Xm0.ugk4.qU2nBTEnHLcyGr1cTMO5KG', '2020-05-13 20:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `receive_news`
--

CREATE TABLE `receive_news` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receive_news`
--

INSERT INTO `receive_news` (`id`, `email`, `created_at`, `updated_at`) VALUES
(8, 'tranvietthanhhaiit@gmail.com', '2020-05-19 04:24:20', NULL),
(11, 'haitran23031999@gmail.com', '2020-05-19 04:34:10', NULL);

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
(1, 'staff manager', '2020-04-08 12:31:16', NULL),
(2, 'creator', '2020-04-08 12:31:16', NULL),
(3, 'guest', '2020-04-08 12:31:16', NULL);

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
(1, 4, 1, '1590640207_5ecf3e4fb554f.jpg', 'sport', 'Strategic Design for Brands', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', '2020-05-31 02:02:00'),
(2, 1, 1, 'img_bg_2.jpg', 'style', 'Creators of Brands Template', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', NULL),
(7, 4, 1, '1590831479_5ed22977a95f3.jpg', 'tag 1', 'cap1-edited', 'sub1', '2020-05-30 09:37:59', '2020-05-31 02:02:10'),
(9, 4, 1, '1590866783_5ed2b35fce114.jpg', 'tag', 'primary', 'second', '2020-05-30 19:26:23', '2020-05-30 19:26:23');

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
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_role` int(11) NOT NULL DEFAULT 3,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `facebook_id`, `id_role`, `id_status`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 2, 1, 'haiit3', 'tranvietthanhhaiit3@gmail.com', '$2y$10$JNxtb1xsCx6.CjpkyEJca.WWHFt1PIkpE0ETrOB5t1OMc/jzAyQOa', 'VBngF7gRj50pHdOAQsybleaGUVr45B19xpx40xhobFn0i8JBWQLoD3nV4Fpr', '2020-04-20 07:18:55', '2020-06-06 19:02:32'),
(2, NULL, NULL, 1, 1, 'haiit22', 'tranvietthanhhaiit2@gmail.com', '$2y$10$hzCaFe/3ADHHK99t/Lej5eRjtQjNyS4dXQkDTyedrQ0jqSewmKSvq', 'wrpsb1iVSSRNb5ZMMiTvpMY0QgRBRrmidcZvgCg45bnwUJcXqTQ2u1xq9ylF', '2020-04-20 07:17:22', '2020-06-06 03:26:22'),
(91, NULL, NULL, 1, 1, 'phong', 'phongnguyen.pn488@gmail.com', '$2y$10$7h88yJctyOzfeaAK1hKlmu3r0mXXSYO9mXm2XJqWEezL4ge6JEOAW', 'K8pCrSnq5aXxAUxvEPG1EtozQWzriAfPRsZ2wAyQBCnzSxTjdFiqq5g1nPfp', '2020-06-02 00:37:38', '2020-06-02 00:39:41'),
(92, '103828606473742253800', NULL, 3, 1, 'Claud Claud S Mills', 'claudsmillsc@my.lanecc.edu', NULL, NULL, '2020-06-06 04:09:29', '2020-06-06 04:09:29'),
(93, '106765797680362007486', NULL, 3, 1, 'Hải Trần', 'haitran23031999@gmail.com', NULL, NULL, '2020-06-06 20:56:51', '2020-06-06 20:56:51'),
(89, NULL, '103340031406512', 3, 1, 'Hai Tran', NULL, NULL, NULL, '2020-06-01 04:20:06', '2020-06-01 04:20:06'),
(1, NULL, NULL, 0, 1, 'haiit1', 'tranvietthanhhaiit1@gmail.com', '$2y$10$hzCaFe/3ADHHK99t/Lej5eRjtQjNyS4dXQkDTyedrQ0jqSewmKSvq', 'wsfGP6sifpRrfRmy5uJrQ18RKZzjEHdAzFnn0wotB1CsNV2VlxRCk6H0jc29kozqMbXDULHtznYSd7jvmvxRs1njL4GeGqkroM9H', '2020-04-20 07:17:22', '2020-06-06 21:27:52'),
(90, '102337005034649318765', NULL, 3, 1, 'hai tran', 'tranvietthanhhaiit@gmail.com', NULL, NULL, '2020-06-01 04:29:39', '2020-06-02 00:10:25');

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
(1, 4, 1, 1, 1, '1591496897_5edc50c1b0a6b.jpg', '1591497161_5edc51c94e4fe.mp4', 'FUNNYyyyyyyyyy', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:48:54', '2020-06-07 02:32:41'),
(2, 4, 1, 1, 1, '1590595161_5ece8e599714e.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '2020-06-06 19:52:25'),
(3, 1, 1, 1, 1, '1590793200_5ed193f0e76f5.jpg', '2.mp4', 'FUNNYyyyyyyyyyyyyy', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '2020-06-06 20:02:32'),
(4, 4, 1, 1, 1, '1590595485_5ece8f9dcd4a6.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:14', '2020-05-27 16:04:45'),
(5, 4, 1, 0, 1, '1588820803_5eb37b43237fc.jpg', '3.mp4', 'FUNNYyyyyyyy', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:15', '2020-06-07 02:05:29'),
(6, 4, 1, 0, 1, '1588820807_5eb37b47b8594.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-09 20:50:15', '2020-05-07 03:06:47'),
(7, 1, 1, 0, 1, '1590593838_5ece892e53b5c.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-27 15:37:18'),
(8, 1, 1, 0, 1, '1590594601_5ece8c2918429.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-05-27 15:50:01'),
(9, 2, 1, 0, 1, '1590594796_5ece8cece3971.jpg', '2.mp4', 'FUNNYy', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-06-06 20:15:40'),
(10, 1, 1, 0, 1, '1590845880_5ed261b8b55fe.jpg', '2.mp4', 'FUNNYyyyyyyyyyy', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:42', '2020-06-07 02:02:45'),
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
(31, 1, 1, 0, 1, '1589277974_5eba7516341da.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:06:14'),
(32, 3, 1, 0, 1, '1589277667_5eba73e3609f1.jpg', '3.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:01:07'),
(33, 1, 1, 0, 1, '1589277656_5eba73d8e1ec6.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:56'),
(34, 1, 1, 0, 1, '1589277645_5eba73cd61817.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:45'),
(35, 4, 1, 0, 1, '1589277632_5eba73c0492e6.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:32'),
(36, 4, 1, 0, 1, '1589277623_5eba73b76aed4.jpg', '4.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:23'),
(37, 1, 1, 0, 1, '1589277612_5eba73ac09cea.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-12 10:00:12'),
(38, 1, 1, 0, 1, '1589277603_5eba73a394b9f.jpg', '2.mp4', 'FUNNYyyy', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-30 13:39:36'),
(39, 3, 1, 0, 1, '1588820867_5eb37b8381635.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:47'),
(40, 3, 1, 0, 1, '1588820862_5eb37b7e8ccbf.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:42'),
(41, 1, 1, 0, 1, '1590595002_5ece8dba20e62.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-27 15:56:42'),
(42, 1, 1, 0, 1, '1588820844_5eb37b6c70d8a.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:24'),
(43, 2, 1, 0, 1, '1588820856_5eb37b78861c7.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-07 03:07:36'),
(44, 1, 1, 1, 1, '1588820796_5eb37b3c9e255.jpg', '2.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-30 13:40:16'),
(46, 1, 1, 0, 0, '1590594994_5ece8db212807.jpg', '1.mp4', 'FUNNY', 'Watch Liam Neeson', 'A small river named Duden flows by their place and supplies it with the necessary', '2020-04-10 09:01:44', '2020-05-30 13:40:18'),
(47, 4, 1, 0, 1, '1590795719_5ed19dc7b421f.jpg', NULL, '1', '1', '1', '2020-05-29 23:41:59', '2020-05-29 23:41:59'),
(48, 1, 1, 0, 1, '1590846101_5ed2629543f83.jpg', NULL, '1', '1', '1', '2020-05-29 23:43:47', '2020-05-30 13:41:41'),
(49, 1, 1, 1, 1, '1590795843_5ed19e4393d11.jpg', NULL, 'tagggggg', '1', '1', '2020-05-29 23:44:03', '2020-05-30 13:40:11'),
(50, 1, 1, 1, 1, '1590795876_5ed19e6401f3d.jpg', NULL, '1', '1', '1', '2020-05-29 23:44:36', '2020-05-30 13:39:03'),
(52, 4, 1, 0, 1, '1590845317_5ed25f85b9614.jpg', NULL, 'tag', 'cap', 'sub', '2020-05-30 13:28:37', '2020-05-30 13:28:37'),
(53, 4, 1, 0, 1, '1590845920_5ed261e00987f.jpg', NULL, 'tag', 'cap', 'sub', '2020-05-30 13:38:40', '2020-05-30 13:38:40'),
(54, 4, 1, 0, 1, '1590846035_5ed26253d4dcf.jpg', NULL, 'tag', 'cap', 'sub', '2020-05-30 13:40:35', '2020-05-30 13:40:35'),
(55, 1, 1, 0, 1, '1590864097_5ed2a8e12c0df.jpg', NULL, 'tag', 'cap', 'sub', '2020-05-30 18:41:37', '2020-05-30 18:41:37'),
(56, 4, 1, 0, 1, '1590889643_5ed30cabe650b.jpg', NULL, 'tag new', 'cap', 'sub', '2020-05-31 01:47:23', '2020-05-31 01:47:23'),
(57, 4, 1, 0, 1, '1590895860_5ed324f4ca7f4.jpg', '1590895860_5ed324f4caf69.mp4', 'tag sport', 'cap sport', 'sub sport', '2020-05-31 03:31:00', '2020-05-31 03:31:00'),
(58, 3, 90, 0, 1, '1591011974_5ed4ea86bee00.jpg', '1591012079_5ed4eaefa10ff.mp4', 'tag', 'cap', 'sub', '2020-06-01 11:46:14', '2020-06-01 11:47:59'),
(59, 1, 1, 0, 1, '1591496013_5edc4d4daf88d.jpg', '1591496013_5edc4d4dafebc.mp4', 'tag', 'cap', 'sub', '2020-06-07 02:13:33', '2020-06-07 02:13:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `receive_news`
--
ALTER TABLE `receive_news`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `receive_news`
--
ALTER TABLE `receive_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
