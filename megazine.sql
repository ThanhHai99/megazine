-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2020 lúc 05:13 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `megazine`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `hot_news` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `id_topic`, `id_creator`, `hot_news`, `image`, `tag`, `caption`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'blog-1.jpg', 'Nature', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:12:41', NULL),
(2, 2, 2, 0, 'blog-2.jpg', 'auto', 'BMW i8', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:13:10', NULL),
(3, 3, 3, 0, 'blog-3.jpg', 'Sports', 'Boxing Sports', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:13:10', NULL),
(4, 1, 4, 0, 'blog-4.jpg', 'PLACE', 'NATURE', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:13:21', NULL),
(5, 5, 5, 0, 'blog-5.jpg', 'Sports', 'SURFING', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:13:21', NULL),
(6, 6, 6, 0, 'blog-6.jpg', 'MOVIES', 'LIAM NEESON', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:13:57', NULL),
(7, 1, 7, 0, 'blog-7.jpg', 'Movies', 'John Wick', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:14:50', NULL),
(8, 1, 8, 0, 'blog-8.jpg', 'Sports', 'Boxing Sports', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:14:50', NULL),
(9, 2, 9, 0, 'blog-9.jpg', 'Place', 'Nature', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', NULL),
(10, 1, 10, 0, 'blog-10.jpg', 'Place', 'Nature', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', NULL),
(11, 1, 11, 0, 'blog-11.jpg', 'auto', 'BMW i8', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', NULL),
(12, 2, 12, 0, 'blog-12.jpg', 'Sports', 'Boxing Sports', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:50', NULL),
(13, 3, 13, 0, 'blog-13.jpg', 'Place', 'Nature', 'Even the all-powerful Pointing has no control about', '2020-04-08 12:14:51', NULL),
(14, 4, 14, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 12:14:51', NULL),
(15, 1, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:39:47', NULL),
(16, 1, 3, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:39:47', NULL),
(17, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:39:47', NULL),
(18, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:39:47', NULL),
(19, 1, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:37', NULL),
(20, 1, 3, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', NULL),
(21, 1, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', NULL),
(22, 1, 3, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', NULL),
(23, 1, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', NULL),
(24, 1, 3, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', NULL),
(25, 1, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', NULL),
(26, 1, 3, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:42:38', NULL),
(27, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(28, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(29, 2, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(30, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(31, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(32, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(33, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(34, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(35, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(36, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(37, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:40', NULL),
(38, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(39, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(40, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(41, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(42, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(43, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(44, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(45, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(46, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(47, 2, 2, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(48, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(49, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(50, 2, 1, 1, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(51, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(52, 2, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(53, 2, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(54, 2, 1, 1, 'blog-14.jpg', 'Motor', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:43:41', NULL),
(55, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(56, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(57, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(58, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(59, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:28', NULL),
(60, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(61, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(62, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(63, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(64, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(65, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(66, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(67, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(68, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(69, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(70, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(71, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(72, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(73, 3, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
(74, 3, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:44:29', NULL),
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
(112, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:22', NULL),
(113, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(114, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(115, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(116, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(117, 5, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
(118, 5, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:23', NULL),
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
(151, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(152, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(153, 6, 2, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
(154, 6, 1, 0, 'blog-14.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:41', NULL),
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
(166, 6, 1, 0, 'blog-5.jpg', 'Healthy', 'Gym Fitness', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-09 08:45:42', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('haitran23031999@gmail.com', '$2y$10$bifakQn/WF5ERmvW899/Wex/SVE4k8wvrexW1OGat3tMXjS7dVKHu', '2020-04-11 18:59:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rule`
--

CREATE TABLE `rule` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `rule`
--

INSERT INTO `rule` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'admin', '2020-04-08 12:31:16', NULL),
(1, 'staff', '2020-04-08 12:31:16', NULL),
(2, 'guest', '2020-04-08 12:31:16', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_topic` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading_primary` varchar(255) DEFAULT NULL,
  `heading_secondary` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `id_topic`, `image`, `heading_primary`, `heading_secondary`, `created_at`, `updated_at`) VALUES
(1, 1, 'img_bg_1.jpg', 'Strategic Design for Brands', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', NULL),
(2, 4, 'img_bg_2.jpg', 'Creators of Brands Template', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', NULL),
(3, 2, 'img_bg_3.jpg', 'Design & develop functional sites', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life', '2020-04-08 08:52:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'block', '2020-04-08 12:42:32', NULL),
(1, 'active', '2020-04-08 12:42:32', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `topic`
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
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_rule` int(11) NOT NULL DEFAULT '2',
  `id_status` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'it', 'tranvietthanhhaiit@gmail.com', '$2y$10$5OPwHrNtABIMS.TtUcp51OjuGrGgxoFflvKu9ThmI/dOWJXG5W1qO', 'yH8IyOBrwvjR54YPENXhOOR0JR0VaaK9T4f31F0JYUF6itRHY0HDgGtZluSR', '2020-04-11 19:12:22', '2020-04-11 19:28:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `video`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
