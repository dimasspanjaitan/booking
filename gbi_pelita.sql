-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2021 at 07:01 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbi_pelita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  KEY `admins_role_id_index` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gbipelita.com', '$2y$10$CS7NV2ugITqlYF4YuUCTSuf92o2klD6UXnpktfqw/8CCvLdoBwC.q', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_seats`
--

DROP TABLE IF EXISTS `booking_seats`;
CREATE TABLE IF NOT EXISTS `booking_seats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` int(11) NOT NULL DEFAULT '1',
  `seat_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `booking_seats_code_unique` (`code`),
  KEY `booking_seats_event_id_index` (`event_id`),
  KEY `booking_seats_seat_id_index` (`seat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_seats`
--

INSERT INTO `booking_seats` (`id`, `code`, `event_id`, `seat_id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(73, '/assets/img/booking-code/C188.jpg', 1, 188, 'ruar', '082286691994', '2021-11-09 11:57:10', '2021-11-09 11:57:10'),
(72, '/assets/img/booking-code/B141.jpg', 1, 141, 'qweryeg', '082286691994', '2021-11-09 11:51:49', '2021-11-09 11:51:49'),
(71, '/assets/img/booking-code/B142.jpg', 1, 142, 'qweryeg', '082286691994', '2021-11-09 11:42:19', '2021-11-09 11:42:19'),
(70, '/assets/img/booking-code/A003.jpg', 1, 3, 'asdgad', '082286691994', '2021-11-06 06:09:30', '2021-11-06 06:09:30'),
(69, '/assets/img/booking-code/A001.jpg', 1, 1, 'Dimas', '082286691994', '2021-11-06 04:47:02', '2021-11-06 04:47:02'),
(68, '/assets/img/booking-code/A096.jpg', 1, 96, 'asdgad', '082286691994', '2021-11-06 04:28:49', '2021-11-06 04:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `events_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `event_date`, `image`, `description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Natal LICC Youth 2021', '2021-12-10 19:00:00', NULL, 'Booking tempat duduk anda segera, karena jumlah kursi yang kami sediakan terbatas di masa Pandemi Covid-19 ini.', 'licc', 1, '2021-10-25 12:09:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'fa fa-list',
  PRIMARY KEY (`id`),
  KEY `menus_parent_id_index` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `name`, `label`, `url`, `icon`) VALUES
(1, 0, 'dashboard', 'DASHBOARD', '/dashboard', 'ti-home'),
(2, 0, 'master', 'MASTER', '', 'ti-server'),
(3, 0, 'renungan', 'RENUNGAN', '/renungan', 'ti-book'),
(4, 0, 'event', 'EVENT', '/event', 'ti-notepad'),
(21, 2, 'user', 'User', '/user/list', 'fa fa-user'),
(22, 2, 'role', 'Role', '/role/list', 'fa fa-gear'),
(23, 2, 'admin', 'Admin', '/admin/list', 'fa fa-key'),
(24, 2, 'seat', 'Kursi', '/seat/list', 'fa fa-list'),
(31, 3, 'renungan_list', 'List', '/renungan/list', 'fa fa-list'),
(41, 4, 'list', 'List Event', '/event/list', 'fa fa-list'),
(42, 4, 'booking_seat', 'Booking Kursi', '/event/booking', 'fa fa-bookmark');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_26_162113_create_renungans_table', 1),
(5, '2021_07_26_162130_create_admins_table', 1),
(6, '2021_08_01_144823_create_menus_table', 1),
(7, '2021_08_01_145336_create_roles_table', 1),
(8, '2021_08_01_145514_create_modules_table', 1),
(9, '2021_08_01_145619_create_role_modules_table', 1),
(10, '2021_08_01_161040_update_role', 1),
(11, '2021_10_25_120352_create_events_table', 2),
(16, '2021_10_25_125137_create_seats_table', 3),
(17, '2021_10_25_125447_create_seat_grups_table', 3),
(18, '2021_10_25_135904_create_booking_seats_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `is_active`) VALUES
(1, 'Renungan', 1),
(2, 'Jadwal', 1),
(3, 'Berita', 1),
(4, 'Pengaturan', 1);

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
-- Table structure for table `renungans`
--

DROP TABLE IF EXISTS `renungans`;
CREATE TABLE IF NOT EXISTS `renungans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `thema` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `renungans_admin_id_index` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `renungans`
--

INSERT INTO `renungans` (`id`, `admin_id`, `thema`, `verse`, `content`, `exp`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test Thema Renungan', 'Test 12:12', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'test-thema-renungan', '2021-10-28 05:24:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_json` longtext COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `menu_json`, `name`, `is_admin`) VALUES
(1, NULL, 'Administator', 1),
(2, NULL, 'Editor', 0),
(3, NULL, 'Publisher', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_modules`
--

DROP TABLE IF EXISTS `role_modules`;
CREATE TABLE IF NOT EXISTS `role_modules` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `delete` tinyint(1) NOT NULL DEFAULT '0',
  `update` tinyint(1) NOT NULL DEFAULT '0',
  `insert` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `role_modules_role_id_index` (`role_id`),
  KEY `role_modules_module_id_index` (`module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_modules`
--

INSERT INTO `role_modules` (`id`, `role_id`, `module_id`, `view`, `delete`, `update`, `insert`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 1, 2, 1, 1, 1, 1),
(3, 1, 3, 1, 1, 1, 1),
(4, 1, 4, 1, 1, 1, 1),
(5, 2, 1, 1, 1, 1, 1),
(6, 2, 2, 1, 1, 1, 1),
(7, 2, 3, 1, 1, 1, 1),
(8, 2, 4, 1, 1, 1, 1),
(9, 3, 1, 1, 1, 1, 1),
(10, 3, 2, 1, 1, 1, 1),
(11, 3, 3, 1, 1, 1, 1),
(12, 3, 4, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_grup_id` int(11) NOT NULL,
  `row` int(11) DEFAULT NULL,
  `column` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `seats_code_unique` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `code`, `seat_grup_id`, `row`, `column`, `image`, `status`) VALUES
(1, 'A001', 1, 1, 1, '/assets/img/map/1.jpg', 1),
(2, 'A002', 1, 1, 2, '/assets/img/map/1.jpg', 1),
(3, 'A003', 1, 1, 3, '/assets/img/map/1.jpg', 1),
(4, 'A004', 1, 1, 4, '/assets/img/map/1.jpg', 1),
(5, 'A005', 1, 1, 5, '/assets/img/map/1.jpg', 1),
(6, 'A006', 1, 1, 6, '/assets/img/map/1.jpg', 1),
(7, 'A007', 1, 1, 7, '/assets/img/map/1.jpg', 1),
(8, 'A008', 1, 1, 8, '/assets/img/map/1.jpg', 1),
(9, 'A009', 1, 1, 9, '/assets/img/map/1.jpg', 1),
(10, 'A010', 1, 1, 10, '/assets/img/map/1.jpg', 1),
(11, 'A011', 1, 2, 1, '/assets/img/map/1.jpg', 1),
(12, 'A012', 1, 2, 2, '/assets/img/map/1.jpg', 1),
(13, 'A013', 1, 2, 3, '/assets/img/map/1.jpg', 1),
(14, 'A014', 1, 2, 4, '/assets/img/map/1.jpg', 1),
(15, 'A015', 1, 2, 5, '/assets/img/map/1.jpg', 1),
(16, 'A016', 1, 2, 6, '/assets/img/map/1.jpg', 1),
(17, 'A017', 1, 2, 7, '/assets/img/map/1.jpg', 1),
(18, 'A018', 1, 2, 8, '/assets/img/map/1.jpg', 1),
(19, 'A019', 1, 2, 9, '/assets/img/map/1.jpg', 1),
(20, 'A020', 1, 2, 10, '/assets/img/map/1.jpg', 1),
(21, 'A021', 1, 3, 1, '/assets/img/map/1.jpg', 1),
(22, 'A022', 1, 3, 2, '/assets/img/map/1.jpg', 1),
(23, 'A023', 1, 3, 3, '/assets/img/map/1.jpg', 1),
(24, 'A024', 1, 3, 4, '/assets/img/map/1.jpg', 1),
(25, 'A025', 1, 3, 5, '/assets/img/map/1.jpg', 1),
(26, 'A026', 1, 3, 6, '/assets/img/map/1.jpg', 1),
(27, 'A027', 1, 3, 7, '/assets/img/map/1.jpg', 1),
(28, 'A028', 1, 3, 8, '/assets/img/map/1.jpg', 1),
(29, 'A029', 1, 3, 9, '/assets/img/map/1.jpg', 1),
(30, 'A030', 1, 3, 10, '/assets/img/map/1.jpg', 1),
(31, 'A031', 1, 4, 1, '/assets/img/map/1.jpg', 1),
(32, 'A032', 1, 4, 2, '/assets/img/map/1.jpg', 1),
(33, 'A033', 1, 4, 3, '/assets/img/map/1.jpg', 1),
(34, 'A034', 1, 4, 4, '/assets/img/map/1.jpg', 1),
(35, 'A035', 1, 4, 5, '/assets/img/map/1.jpg', 1),
(36, 'A036', 1, 4, 6, '/assets/img/map/1.jpg', 1),
(37, 'A037', 1, 4, 7, '/assets/img/map/1.jpg', 1),
(38, 'A038', 1, 4, 8, '/assets/img/map/1.jpg', 1),
(39, 'A039', 1, 4, 9, '/assets/img/map/1.jpg', 1),
(40, 'A040', 1, 4, 10, '/assets/img/map/1.jpg', 1),
(41, 'A041', 1, 5, 1, '/assets/img/map/1.jpg', 1),
(42, 'A042', 1, 5, 2, '/assets/img/map/1.jpg', 1),
(43, 'A043', 1, 5, 3, '/assets/img/map/1.jpg', 1),
(44, 'A044', 1, 5, 4, '/assets/img/map/1.jpg', 1),
(45, 'A045', 1, 5, 5, '/assets/img/map/1.jpg', 1),
(46, 'A046', 1, 5, 6, '/assets/img/map/1.jpg', 1),
(47, 'A047', 1, 5, 7, '/assets/img/map/1.jpg', 1),
(48, 'A048', 1, 5, 8, '/assets/img/map/1.jpg', 1),
(49, 'A049', 1, 5, 9, '/assets/img/map/1.jpg', 1),
(50, 'A050', 1, 5, 10, '/assets/img/map/1.jpg', 1),
(51, 'A051', 1, 6, 1, '/assets/img/map/1.jpg', 1),
(52, 'A052', 1, 6, 2, '/assets/img/map/1.jpg', 1),
(53, 'A053', 1, 6, 3, '/assets/img/map/1.jpg', 1),
(54, 'A054', 1, 6, 4, '/assets/img/map/1.jpg', 1),
(55, 'A055', 1, 6, 5, '/assets/img/map/1.jpg', 1),
(56, 'A056', 1, 6, 6, '/assets/img/map/1.jpg', 1),
(57, 'A057', 1, 6, 7, '/assets/img/map/1.jpg', 1),
(58, 'A058', 1, 6, 8, '/assets/img/map/1.jpg', 1),
(59, 'A059', 1, 6, 9, '/assets/img/map/1.jpg', 1),
(60, 'A060', 1, 6, 10, '/assets/img/map/1.jpg', 1),
(61, 'A061', 1, 7, 1, '/assets/img/map/1.jpg', 1),
(62, 'A062', 1, 7, 2, '/assets/img/map/1.jpg', 1),
(63, 'A063', 1, 7, 3, '/assets/img/map/1.jpg', 1),
(64, 'A064', 1, 7, 4, '/assets/img/map/1.jpg', 1),
(65, 'A065', 1, 7, 5, '/assets/img/map/1.jpg', 1),
(66, 'A066', 1, 7, 6, '/assets/img/map/1.jpg', 1),
(67, 'A067', 1, 7, 7, '/assets/img/map/1.jpg', 1),
(68, 'A068', 1, 7, 8, '/assets/img/map/1.jpg', 1),
(69, 'A069', 1, 7, 9, '/assets/img/map/1.jpg', 1),
(70, 'A070', 1, 7, 10, '/assets/img/map/1.jpg', 1),
(71, 'A071', 1, 8, 1, '/assets/img/map/1.jpg', 1),
(72, 'A072', 1, 8, 2, '/assets/img/map/1.jpg', 1),
(73, 'A073', 1, 8, 3, '/assets/img/map/1.jpg', 1),
(74, 'A074', 1, 8, 4, '/assets/img/map/1.jpg', 1),
(75, 'A075', 1, 8, 5, '/assets/img/map/1.jpg', 1),
(76, 'A076', 1, 8, 6, '/assets/img/map/1.jpg', 1),
(77, 'A077', 1, 8, 7, '/assets/img/map/1.jpg', 1),
(78, 'A078', 1, 8, 8, '/assets/img/map/1.jpg', 1),
(79, 'A079', 1, 8, 9, '/assets/img/map/1.jpg', 1),
(80, 'A080', 1, 8, 10, '/assets/img/map/1.jpg', 1),
(81, 'A081', 1, 9, 1, '/assets/img/map/1.jpg', 1),
(82, 'A082', 1, 9, 2, '/assets/img/map/1.jpg', 1),
(83, 'A083', 1, 9, 3, '/assets/img/map/1.jpg', 1),
(84, 'A084', 1, 9, 4, '/assets/img/map/1.jpg', 1),
(85, 'A085', 1, 9, 5, '/assets/img/map/1.jpg', 1),
(86, 'A086', 1, 9, 6, '/assets/img/map/1.jpg', 1),
(87, 'A087', 1, 9, 7, '/assets/img/map/1.jpg', 1),
(88, 'A088', 1, 9, 8, '/assets/img/map/1.jpg', 1),
(89, 'A089', 1, 9, 9, '/assets/img/map/1.jpg', 1),
(90, 'A090', 1, 9, 10, '/assets/img/map/1.jpg', 1),
(91, 'A091', 1, 10, 1, '/assets/img/map/1.jpg', 1),
(92, 'A092', 1, 10, 2, '/assets/img/map/1.jpg', 1),
(93, 'A093', 1, 10, 3, '/assets/img/map/1.jpg', 1),
(94, 'A094', 1, 10, 4, '/assets/img/map/1.jpg', 1),
(95, 'A095', 1, 10, 5, '/assets/img/map/1.jpg', 1),
(96, 'A096', 1, 10, 6, '/assets/img/map/1.jpg', 1),
(97, 'A097', 1, 10, 7, '/assets/img/map/1.jpg', 1),
(98, 'A098', 1, 10, 8, '/assets/img/map/1.jpg', 1),
(99, 'A099', 1, 10, 9, '/assets/img/map/1.jpg', 1),
(100, 'A100', 1, 10, 10, '/assets/img/map/1.jpg', 1),
(101, 'A101', 1, 11, 1, '/assets/img/map/1.jpg', 1),
(102, 'A102', 1, 11, 2, '/assets/img/map/1.jpg', 1),
(103, 'A103', 1, 11, 3, '/assets/img/map/1.jpg', 1),
(104, 'A104', 1, 11, 4, '/assets/img/map/1.jpg', 1),
(105, 'A105', 1, 11, 5, '/assets/img/map/1.jpg', 1),
(106, 'A106', 1, 11, 6, '/assets/img/map/1.jpg', 1),
(107, 'A107', 1, 11, 7, '/assets/img/map/1.jpg', 1),
(108, 'A108', 1, 11, 8, '/assets/img/map/1.jpg', 1),
(109, 'A109', 1, 11, 9, '/assets/img/map/1.jpg', 1),
(110, 'A110', 1, 11, 10, '/assets/img/map/1.jpg', 1),
(111, 'B111', 2, 1, 1, '/assets/img/map/2.jpg', 1),
(112, 'B112', 2, 1, 2, '/assets/img/map/2.jpg', 1),
(113, 'B113', 2, 1, 3, '/assets/img/map/2.jpg', 1),
(114, 'B114', 2, 1, 4, '/assets/img/map/2.jpg', 1),
(115, 'B115', 2, 1, 5, '/assets/img/map/2.jpg', 1),
(116, 'B116', 2, 1, 6, '/assets/img/map/2.jpg', 1),
(117, 'B117', 2, 1, 7, '/assets/img/map/2.jpg', 1),
(118, 'B118', 2, 1, 8, '/assets/img/map/2.jpg', 1),
(119, 'B119', 2, 1, 9, '/assets/img/map/2.jpg', 1),
(120, 'B120', 2, 1, 10, '/assets/img/map/2.jpg', 1),
(121, 'B121', 2, 2, 1, '/assets/img/map/2.jpg', 1),
(122, 'B122', 2, 2, 2, '/assets/img/map/2.jpg', 1),
(123, 'B123', 2, 2, 3, '/assets/img/map/2.jpg', 1),
(124, 'B124', 2, 2, 4, '/assets/img/map/2.jpg', 1),
(125, 'B125', 2, 2, 5, '/assets/img/map/2.jpg', 1),
(126, 'B126', 2, 2, 6, '/assets/img/map/2.jpg', 1),
(127, 'B127', 2, 2, 7, '/assets/img/map/2.jpg', 1),
(128, 'B128', 2, 2, 8, '/assets/img/map/2.jpg', 1),
(129, 'B129', 2, 2, 9, '/assets/img/map/2.jpg', 1),
(130, 'B130', 2, 2, 10, '/assets/img/map/2.jpg', 1),
(131, 'B131', 2, 3, 1, '/assets/img/map/2.jpg', 1),
(132, 'B132', 2, 3, 2, '/assets/img/map/2.jpg', 1),
(133, 'B133', 2, 3, 3, '/assets/img/map/2.jpg', 1),
(134, 'B134', 2, 3, 4, '/assets/img/map/2.jpg', 1),
(135, 'B135', 2, 3, 5, '/assets/img/map/2.jpg', 1),
(136, 'B136', 2, 3, 6, '/assets/img/map/2.jpg', 1),
(137, 'B137', 2, 3, 7, '/assets/img/map/2.jpg', 1),
(138, 'B138', 2, 3, 8, '/assets/img/map/2.jpg', 1),
(139, 'B139', 2, 3, 9, '/assets/img/map/2.jpg', 1),
(140, 'B140', 2, 3, 10, '/assets/img/map/2.jpg', 1),
(141, 'B141', 2, 4, 1, '/assets/img/map/2.jpg', 1),
(142, 'B142', 2, 4, 2, '/assets/img/map/2.jpg', 1),
(143, 'B143', 2, 4, 3, '/assets/img/map/2.jpg', 1),
(144, 'B144', 2, 4, 4, '/assets/img/map/2.jpg', 1),
(145, 'B145', 2, 4, 5, '/assets/img/map/2.jpg', 1),
(146, 'B146', 2, 4, 6, '/assets/img/map/2.jpg', 1),
(147, 'B147', 2, 4, 7, '/assets/img/map/2.jpg', 1),
(148, 'B148', 2, 4, 8, '/assets/img/map/2.jpg', 1),
(149, 'B149', 2, 4, 9, '/assets/img/map/2.jpg', 1),
(150, 'B150', 2, 4, 10, '/assets/img/map/2.jpg', 1),
(151, 'B151', 2, 5, 1, '/assets/img/map/2.jpg', 1),
(152, 'B152', 2, 5, 2, '/assets/img/map/2.jpg', 1),
(153, 'B153', 2, 5, 3, '/assets/img/map/2.jpg', 1),
(154, 'B154', 2, 5, 4, '/assets/img/map/2.jpg', 1),
(155, 'B155', 2, 5, 5, '/assets/img/map/2.jpg', 1),
(156, 'B156', 2, 5, 6, '/assets/img/map/2.jpg', 1),
(157, 'B157', 2, 5, 7, '/assets/img/map/2.jpg', 1),
(158, 'B158', 2, 5, 8, '/assets/img/map/2.jpg', 1),
(159, 'B159', 2, 5, 9, '/assets/img/map/2.jpg', 1),
(160, 'B160', 2, 5, 10, '/assets/img/map/2.jpg', 1),
(161, 'C161', 3, 1, 1, '/assets/img/map/3.jpg', 1),
(162, 'C162', 3, 1, 2, '/assets/img/map/3.jpg', 1),
(163, 'C163', 3, 1, 3, '/assets/img/map/3.jpg', 1),
(164, 'C164', 3, 1, 4, '/assets/img/map/3.jpg', 1),
(165, 'C165', 3, 1, 5, '/assets/img/map/3.jpg', 1),
(166, 'C166', 3, 1, 6, '/assets/img/map/3.jpg', 1),
(167, 'C167', 3, 1, 7, '/assets/img/map/3.jpg', 1),
(168, 'C168', 3, 1, 8, '/assets/img/map/3.jpg', 1),
(169, 'C169', 3, 1, 9, '/assets/img/map/3.jpg', 1),
(170, 'C170', 3, 1, 10, '/assets/img/map/3.jpg', 1),
(171, 'C171', 3, 1, 11, '/assets/img/map/3.jpg', 1),
(172, 'C172', 3, 1, 12, '/assets/img/map/3.jpg', 1),
(173, 'C173', 3, 1, 13, '/assets/img/map/3.jpg', 1),
(174, 'C174', 3, 1, 14, '/assets/img/map/3.jpg', 1),
(175, 'C175', 3, 1, 15, '/assets/img/map/3.jpg', 1),
(176, 'C176', 3, 1, 16, '/assets/img/map/3.jpg', 1),
(177, 'C177', 3, 1, 17, '/assets/img/map/3.jpg', 1),
(178, 'C178', 3, 1, 18, '/assets/img/map/3.jpg', 1),
(179, 'C179', 3, 1, 19, '/assets/img/map/3.jpg', 1),
(180, 'C180', 3, 1, 20, '/assets/img/map/3.jpg', 1),
(181, 'C181', 3, 2, 1, '/assets/img/map/3.jpg', 1),
(182, 'C182', 3, 2, 2, '/assets/img/map/3.jpg', 1),
(183, 'C183', 3, 2, 3, '/assets/img/map/3.jpg', 1),
(184, 'C184', 3, 2, 4, '/assets/img/map/3.jpg', 1),
(185, 'C185', 3, 2, 5, '/assets/img/map/3.jpg', 1),
(186, 'C186', 3, 2, 6, '/assets/img/map/3.jpg', 1),
(187, 'C187', 3, 2, 7, '/assets/img/map/3.jpg', 1),
(188, 'C188', 3, 2, 8, '/assets/img/map/3.jpg', 1),
(189, 'C189', 3, 2, 9, '/assets/img/map/3.jpg', 1),
(190, 'C190', 3, 2, 10, '/assets/img/map/3.jpg', 1),
(191, 'C191', 3, 2, 11, '/assets/img/map/3.jpg', 1),
(192, 'C192', 3, 2, 12, '/assets/img/map/3.jpg', 1),
(193, 'C193', 3, 2, 13, '/assets/img/map/3.jpg', 1),
(194, 'C194', 3, 2, 14, '/assets/img/map/3.jpg', 1),
(195, 'C195', 3, 2, 15, '/assets/img/map/3.jpg', 1),
(196, 'C196', 3, 2, 16, '/assets/img/map/3.jpg', 1),
(197, 'C197', 3, 2, 17, '/assets/img/map/3.jpg', 1),
(198, 'C198', 3, 2, 18, '/assets/img/map/3.jpg', 1),
(199, 'C199', 3, 2, 19, '/assets/img/map/3.jpg', 1),
(200, 'C200', 3, 2, 20, '/assets/img/map/3.jpg', 1),
(201, 'C201', 3, 3, 1, '/assets/img/map/3.jpg', 1),
(202, 'C202', 3, 3, 2, '/assets/img/map/3.jpg', 1),
(203, 'C203', 3, 3, 3, '/assets/img/map/3.jpg', 1),
(204, 'C204', 3, 3, 4, '/assets/img/map/3.jpg', 1),
(205, 'C205', 3, 3, 5, '/assets/img/map/3.jpg', 1),
(206, 'C206', 3, 3, 6, '/assets/img/map/3.jpg', 1),
(207, 'C207', 3, 3, 7, '/assets/img/map/3.jpg', 1),
(208, 'C208', 3, 3, 8, '/assets/img/map/3.jpg', 1),
(209, 'C209', 3, 3, 9, '/assets/img/map/3.jpg', 1),
(210, 'C210', 3, 3, 10, '/assets/img/map/3.jpg', 1),
(211, 'C211', 3, 3, 11, '/assets/img/map/3.jpg', 1),
(212, 'C212', 3, 3, 12, '/assets/img/map/3.jpg', 1),
(213, 'C213', 3, 3, 13, '/assets/img/map/3.jpg', 1),
(214, 'C214', 3, 3, 14, '/assets/img/map/3.jpg', 1),
(215, 'C215', 3, 3, 15, '/assets/img/map/3.jpg', 1),
(216, 'C216', 3, 3, 16, '/assets/img/map/3.jpg', 1),
(217, 'C217', 3, 3, 17, '/assets/img/map/3.jpg', 1),
(218, 'C218', 3, 3, 18, '/assets/img/map/3.jpg', 1),
(219, 'C219', 3, 3, 19, '/assets/img/map/3.jpg', 1),
(220, 'C220', 3, 3, 20, '/assets/img/map/3.jpg', 1),
(221, 'C221', 3, 4, 1, '/assets/img/map/3.jpg', 1),
(222, 'C222', 3, 4, 2, '/assets/img/map/3.jpg', 1),
(223, 'C223', 3, 4, 3, '/assets/img/map/3.jpg', 1),
(224, 'C224', 3, 4, 4, '/assets/img/map/3.jpg', 1),
(225, 'C225', 3, 4, 5, '/assets/img/map/3.jpg', 1),
(226, 'C226', 3, 4, 6, '/assets/img/map/3.jpg', 1),
(227, 'C227', 3, 4, 7, '/assets/img/map/3.jpg', 1),
(228, 'C228', 3, 4, 8, '/assets/img/map/3.jpg', 1),
(229, 'C229', 3, 4, 9, '/assets/img/map/3.jpg', 1),
(230, 'C230', 3, 4, 10, '/assets/img/map/3.jpg', 1),
(231, 'C231', 3, 4, 11, '/assets/img/map/3.jpg', 1),
(232, 'C232', 3, 4, 12, '/assets/img/map/3.jpg', 1),
(233, 'C233', 3, 4, 13, '/assets/img/map/3.jpg', 1),
(234, 'C234', 3, 4, 14, '/assets/img/map/3.jpg', 1),
(235, 'C235', 3, 4, 15, '/assets/img/map/3.jpg', 1),
(236, 'C236', 3, 4, 16, '/assets/img/map/3.jpg', 1),
(237, 'C237', 3, 4, 17, '/assets/img/map/3.jpg', 1),
(238, 'C238', 3, 4, 18, '/assets/img/map/3.jpg', 1),
(239, 'C239', 3, 4, 19, '/assets/img/map/3.jpg', 1),
(240, 'C240', 3, 4, 20, '/assets/img/map/3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat_grups`
--

DROP TABLE IF EXISTS `seat_grups`;
CREATE TABLE IF NOT EXISTS `seat_grups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seat_grups`
--

INSERT INTO `seat_grups` (`id`, `name`) VALUES
(1, 'Gedung Utama'),
(2, 'Balkon'),
(3, 'Teras Gereja');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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
