-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2021 at 07:37 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_seats`
--

INSERT INTO `booking_seats` (`id`, `code`, `event_id`, `seat_id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(67, '/assets/img/booking-code/A046.jpg', 1, 46, 'tetset', '082286691994', '2021-11-04 02:45:12', '2021-11-04 02:45:12'),
(66, '/assets/img/booking-code/A052.jpg', 1, 52, 'tetst', '082286691994', '2021-11-04 02:15:53', '2021-11-04 02:15:53'),
(65, '/assets/img/booking-code/C163.jpg', 1, 163, 'htrhe', '082286691994', '2021-11-01 05:45:13', '2021-11-01 05:45:13'),
(64, '/assets/img/booking-code/C173.jpg', 1, 173, 'eyq345', '082286691994', '2021-11-01 05:44:51', '2021-11-01 05:44:51'),
(63, '/assets/img/booking-code/C176.jpg', 1, 176, 'ghkasd', '080812122323', '2021-11-01 05:44:42', '2021-11-01 05:44:42'),
(62, '/assets/img/booking-code/C154.jpg', 1, 154, 'j6trtj', '082286691994', '2021-11-01 05:44:31', '2021-11-01 05:44:31'),
(61, '/assets/img/booking-code/B141.jpg', 1, 141, 'k67ek', '082286691994', '2021-11-01 05:44:19', '2021-11-01 05:44:19'),
(60, '/assets/img/booking-code/B134.jpg', 1, 134, 'atjtjertj', '082286691994', '2021-11-01 05:44:11', '2021-11-01 05:44:11'),
(59, '/assets/img/booking-code/B107.jpg', 1, 107, 'adfhad', '082286691994', '2021-11-01 05:44:01', '2021-11-01 05:44:01'),
(58, '/assets/img/booking-code/A043.jpg', 1, 43, 'Jack', '082286691994', '2021-11-01 05:43:52', '2021-11-01 05:43:52'),
(57, '/assets/img/booking-code/A064.jpg', 1, 64, 'ghkasd', '01927845125', '2021-11-01 05:43:42', '2021-11-01 05:43:42'),
(56, '/assets/img/booking-code/A069.jpg', 1, 69, 'asdgad', '080812122323', '2021-11-01 05:43:24', '2021-11-01 05:43:24'),
(55, '/assets/img/booking-code/A019.jpg', 1, 19, 'Dimas', '082286691994', '2021-11-01 05:43:09', '2021-11-01 05:43:09'),
(54, '/assets/img/booking-code/A001.jpg', 1, 1, 'Dimas', '082286691994', '2021-10-30 06:40:09', '2021-10-30 06:40:09');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `events_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `event_date`, `image`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Perayaan Natal LICC Youth GBI Pelita', '2021-10-25 19:14:23', NULL, 'Booking tempat duduk anda segera, karena jumlah kursi yang kami sediakan terbatas di masa Pandemi Covid-19 ini.', 'licc', '2021-10-25 12:09:25', NULL),
(2, 'Starkids', '2021-10-27 19:23:28', NULL, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'startkids', '2021-10-25 12:19:28', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(41, 4, 'booking_seat', 'Booking Kursi', '/event/booking', 'fa fa-bookmark');

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
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `code`, `seat_grup_id`, `row`, `column`, `image`, `status`) VALUES
(1, 'A001', 1, 1, 1, '/assets/img/map/A001.jpg', 1),
(2, 'A002', 1, 1, 2, '/assets/img/map/A002.jpg', 1),
(3, 'A003', 1, 1, 3, '/assets/img/map/A003.jpg', 1),
(4, 'A004', 1, 1, 4, '/assets/img/map/A004.jpg', 1),
(5, 'A005', 1, 1, 5, '/assets/img/map/A005.jpg', 1),
(6, 'A006', 1, 1, 6, '/assets/img/map/A006.jpg', 1),
(7, 'A007', 1, 1, 7, '/assets/img/map/A007.jpg', 1),
(8, 'A008', 1, 1, 8, '/assets/img/map/A008.jpg', 1),
(9, 'A009', 1, 1, 9, '/assets/img/map/A009.jpg', 1),
(10, 'A010', 1, 1, 10, '/assets/img/map/A010.jpg', 1),
(11, 'A011', 1, 2, 1, '/assets/img/map/A011.jpg', 1),
(12, 'A012', 1, 2, 2, '/assets/img/map/A012.jpg', 1),
(13, 'A013', 1, 2, 3, '/assets/img/map/A013.jpg', 1),
(14, 'A014', 1, 2, 4, '/assets/img/map/A014.jpg', 1),
(15, 'A015', 1, 2, 5, '/assets/img/map/A015.jpg', 1),
(16, 'A016', 1, 2, 6, '/assets/img/map/A016.jpg', 1),
(17, 'A017', 1, 2, 7, '/assets/img/map/A017.jpg', 1),
(18, 'A018', 1, 2, 8, '/assets/img/map/A018.jpg', 1),
(19, 'A019', 1, 2, 9, '/assets/img/map/A019.jpg', 1),
(20, 'A020', 1, 2, 10, '/assets/img/map/A020.jpg', 1),
(21, 'A021', 1, 3, 1, '/assets/img/map/A021.jpg', 1),
(22, 'A022', 1, 3, 2, '/assets/img/map/A022.jpg', 1),
(23, 'A023', 1, 3, 3, '/assets/img/map/A023.jpg', 1),
(24, 'A024', 1, 3, 4, '/assets/img/map/A024.jpg', 1),
(25, 'A025', 1, 3, 5, '/assets/img/map/A025.jpg', 1),
(26, 'A026', 1, 3, 6, '/assets/img/map/A026.jpg', 1),
(27, 'A027', 1, 3, 7, '/assets/img/map/A027.jpg', 1),
(28, 'A028', 1, 3, 8, '/assets/img/map/A028.jpg', 1),
(29, 'A029', 1, 3, 9, '/assets/img/map/A029.jpg', 1),
(30, 'A030', 1, 3, 10, '/assets/img/map/A030.jpg', 1),
(31, 'A031', 1, 4, 1, '/assets/img/map/A031.jpg', 1),
(32, 'A032', 1, 4, 2, '/assets/img/map/A032.jpg', 1),
(33, 'A033', 1, 4, 3, '/assets/img/map/A033.jpg', 1),
(34, 'A034', 1, 4, 4, '/assets/img/map/A034.jpg', 1),
(35, 'A035', 1, 4, 5, '/assets/img/map/A035.jpg', 1),
(36, 'A036', 1, 4, 6, '/assets/img/map/A036.jpg', 1),
(37, 'A037', 1, 4, 7, '/assets/img/map/A037.jpg', 1),
(38, 'A038', 1, 4, 8, '/assets/img/map/A038.jpg', 1),
(39, 'A039', 1, 4, 9, '/assets/img/map/A039.jpg', 1),
(40, 'A040', 1, 4, 10, '/assets/img/map/A040.jpg', 1),
(41, 'A041', 1, 5, 1, '/assets/img/map/A041.jpg', 1),
(42, 'A042', 1, 5, 2, '/assets/img/map/A042.jpg', 1),
(43, 'A043', 1, 5, 3, '/assets/img/map/A043.jpg', 1),
(44, 'A044', 1, 5, 4, '/assets/img/map/A044.jpg', 1),
(45, 'A045', 1, 5, 5, '/assets/img/map/A045.jpg', 1),
(46, 'A046', 1, 5, 6, '/assets/img/map/A046.jpg', 1),
(47, 'A047', 1, 5, 7, '/assets/img/map/A047.jpg', 1),
(48, 'A048', 1, 5, 8, '/assets/img/map/A048.jpg', 1),
(49, 'A049', 1, 5, 9, '/assets/img/map/A049.jpg', 1),
(50, 'A050', 1, 5, 10, '/assets/img/map/A050.jpg', 1),
(51, 'A051', 1, 6, 1, '/assets/img/map/A051.jpg', 1),
(52, 'A052', 1, 6, 2, '/assets/img/map/A052.jpg', 1),
(53, 'A053', 1, 6, 3, '/assets/img/map/A053.jpg', 1),
(54, 'A054', 1, 6, 4, '/assets/img/map/A054.jpg', 1),
(55, 'A055', 1, 6, 5, '/assets/img/map/A055.jpg', 1),
(56, 'A056', 1, 6, 6, '/assets/img/map/A056.jpg', 1),
(57, 'A057', 1, 6, 7, '/assets/img/map/A057.jpg', 1),
(58, 'A058', 1, 6, 8, '/assets/img/map/A058.jpg', 1),
(59, 'A059', 1, 6, 9, '/assets/img/map/A059.jpg', 1),
(60, 'A060', 1, 6, 10, '/assets/img/map/A060.jpg', 1),
(61, 'A061', 1, 7, 1, '/assets/img/map/A061.jpg', 1),
(62, 'A062', 1, 7, 2, '/assets/img/map/A062.jpg', 1),
(63, 'A063', 1, 7, 3, '/assets/img/map/A063.jpg', 1),
(64, 'A064', 1, 7, 4, '/assets/img/map/A064.jpg', 1),
(65, 'A065', 1, 7, 5, '/assets/img/map/A065.jpg', 1),
(66, 'A066', 1, 7, 6, '/assets/img/map/A066.jpg', 1),
(67, 'A067', 1, 7, 7, '/assets/img/map/A067.jpg', 1),
(68, 'A068', 1, 7, 8, '/assets/img/map/A068.jpg', 1),
(69, 'A069', 1, 7, 9, '/assets/img/map/A069.jpg', 1),
(70, 'A070', 1, 7, 10, '/assets/img/map/A070.jpg', 1),
(71, 'A071', 1, 8, 1, '/assets/img/map/A071.jpg', 1),
(72, 'A072', 1, 8, 2, '/assets/img/map/A072.jpg', 1),
(73, 'A073', 1, 8, 3, '/assets/img/map/A073.jpg', 1),
(74, 'A074', 1, 8, 4, '/assets/img/map/A074.jpg', 1),
(75, 'A075', 1, 8, 5, '/assets/img/map/A075.jpg', 1),
(76, 'A076', 1, 8, 6, '/assets/img/map/A076.jpg', 1),
(77, 'A077', 1, 8, 7, '/assets/img/map/A077.jpg', 1),
(78, 'A078', 1, 8, 8, '/assets/img/map/A078.jpg', 1),
(79, 'A079', 1, 8, 9, '/assets/img/map/A079.jpg', 1),
(80, 'A080', 1, 8, 10, '/assets/img/map/A080.jpg', 1),
(81, 'A081', 1, 9, 1, '/assets/img/map/A081.jpg', 1),
(82, 'A082', 1, 9, 2, '/assets/img/map/A082.jpg', 1),
(83, 'A083', 1, 9, 3, '/assets/img/map/A083.jpg', 1),
(84, 'A084', 1, 9, 4, '/assets/img/map/A084.jpg', 1),
(85, 'A085', 1, 9, 5, '/assets/img/map/A085.jpg', 1),
(86, 'A086', 1, 9, 6, '/assets/img/map/A086.jpg', 1),
(87, 'A087', 1, 9, 7, '/assets/img/map/A087.jpg', 1),
(88, 'A088', 1, 9, 8, '/assets/img/map/A088.jpg', 1),
(89, 'A089', 1, 9, 9, '/assets/img/map/A089.jpg', 1),
(90, 'A090', 1, 9, 10, '/assets/img/map/A090.jpg', 1),
(91, 'A091', 1, 10, 1, '/assets/img/map/A091.jpg', 1),
(92, 'A092', 1, 10, 2, '/assets/img/map/A092.jpg', 1),
(93, 'A093', 1, 10, 3, '/assets/img/map/A093.jpg', 1),
(94, 'A094', 1, 10, 4, '/assets/img/map/A094.jpg', 1),
(95, 'A095', 1, 10, 5, '/assets/img/map/A095.jpg', 1),
(96, 'A096', 1, 10, 6, '/assets/img/map/A096.jpg', 1),
(97, 'A097', 1, 10, 7, '/assets/img/map/A097.jpg', 1),
(98, 'A098', 1, 10, 8, '/assets/img/map/A098.jpg', 1),
(99, 'A099', 1, 10, 9, '/assets/img/map/A099.jpg', 1),
(100, 'A100', 1, 10, 10, '/assets/img/map/A100.jpg', 1),
(101, 'B101', 2, 1, 1, '/assets/img/map/B101.jpg', 1),
(102, 'B102', 2, 1, 2, '/assets/img/map/B102.jpg', 1),
(103, 'B103', 2, 1, 3, '/assets/img/map/B103.jpg', 1),
(104, 'B104', 2, 1, 4, '/assets/img/map/B104.jpg', 1),
(105, 'B105', 2, 1, 5, '/assets/img/map/B105.jpg', 1),
(106, 'B106', 2, 1, 6, '/assets/img/map/B106.jpg', 1),
(107, 'B107', 2, 1, 7, '/assets/img/map/B107.jpg', 1),
(108, 'B108', 2, 1, 8, '/assets/img/map/B108.jpg', 1),
(109, 'B109', 2, 1, 9, '/assets/img/map/B109.jpg', 1),
(110, 'B110', 2, 1, 10, '/assets/img/map/B110.jpg', 1),
(111, 'B111', 2, 2, 1, '/assets/img/map/B111.jpg', 1),
(112, 'B112', 2, 2, 2, '/assets/img/map/B112.jpg', 1),
(113, 'B113', 2, 2, 3, '/assets/img/map/B113.jpg', 1),
(114, 'B114', 2, 2, 4, '/assets/img/map/B114.jpg', 1),
(115, 'B115', 2, 2, 5, '/assets/img/map/B115.jpg', 1),
(116, 'B116', 2, 2, 6, '/assets/img/map/B116.jpg', 1),
(117, 'B117', 2, 2, 7, '/assets/img/map/B117.jpg', 1),
(118, 'B118', 2, 2, 8, '/assets/img/map/B118.jpg', 1),
(119, 'B119', 2, 2, 9, '/assets/img/map/B119.jpg', 1),
(120, 'B120', 2, 2, 10, '/assets/img/map/B120.jpg', 1),
(121, 'B121', 2, 3, 1, '/assets/img/map/B121.jpg', 1),
(122, 'B122', 2, 3, 2, '/assets/img/map/B122.jpg', 1),
(123, 'B123', 2, 3, 3, '/assets/img/map/B123.jpg', 1),
(124, 'B124', 2, 3, 4, '/assets/img/map/B124.jpg', 1),
(125, 'B125', 2, 3, 5, '/assets/img/map/B125.jpg', 1),
(126, 'B126', 2, 3, 6, '/assets/img/map/B126.jpg', 1),
(127, 'B127', 2, 3, 7, '/assets/img/map/B127.jpg', 1),
(128, 'B128', 2, 3, 8, '/assets/img/map/B128.jpg', 1),
(129, 'B129', 2, 3, 9, '/assets/img/map/B129.jpg', 1),
(130, 'B130', 2, 3, 10, '/assets/img/map/B130.jpg', 1),
(131, 'B131', 2, 4, 1, '/assets/img/map/B131.jpg', 1),
(132, 'B132', 2, 4, 2, '/assets/img/map/B132.jpg', 1),
(133, 'B133', 2, 4, 3, '/assets/img/map/B133.jpg', 1),
(134, 'B134', 2, 4, 4, '/assets/img/map/B134.jpg', 1),
(135, 'B135', 2, 4, 5, '/assets/img/map/B135.jpg', 1),
(136, 'B136', 2, 4, 6, '/assets/img/map/B136.jpg', 1),
(137, 'B137', 2, 4, 7, '/assets/img/map/B137.jpg', 1),
(138, 'B138', 2, 4, 8, '/assets/img/map/B138.jpg', 1),
(139, 'B139', 2, 4, 9, '/assets/img/map/B139.jpg', 1),
(140, 'B140', 2, 4, 10, '/assets/img/map/B140.jpg', 1),
(141, 'B141', 2, 5, 1, '/assets/img/map/B141.jpg', 1),
(142, 'B142', 2, 5, 2, '/assets/img/map/B142.jpg', 1),
(143, 'B143', 2, 5, 3, '/assets/img/map/B143.jpg', 1),
(144, 'B144', 2, 5, 4, '/assets/img/map/B144.jpg', 1),
(145, 'B145', 2, 5, 5, '/assets/img/map/B145.jpg', 1),
(146, 'B146', 2, 5, 6, '/assets/img/map/B146.jpg', 1),
(147, 'B147', 2, 5, 7, '/assets/img/map/B147.jpg', 1),
(148, 'B148', 2, 5, 8, '/assets/img/map/B148.jpg', 1),
(149, 'B149', 2, 5, 9, '/assets/img/map/B149.jpg', 1),
(150, 'B150', 2, 5, 10, '/assets/img/map/B150.jpg', 1),
(151, 'C151', 3, 1, 1, '/assets/img/map/C151.jpg', 1),
(152, 'C152', 3, 1, 2, '/assets/img/map/C152.jpg', 1),
(153, 'C153', 3, 1, 3, '/assets/img/map/C153.jpg', 1),
(154, 'C154', 3, 1, 4, '/assets/img/map/C154.jpg', 1),
(155, 'C155', 3, 1, 5, '/assets/img/map/C155.jpg', 1),
(156, 'C156', 3, 1, 6, '/assets/img/map/C156.jpg', 1),
(157, 'C157', 3, 1, 7, '/assets/img/map/C157.jpg', 1),
(158, 'C158', 3, 1, 8, '/assets/img/map/C158.jpg', 1),
(159, 'C159', 3, 1, 9, '/assets/img/map/C159.jpg', 1),
(160, 'C160', 3, 1, 10, '/assets/img/map/C160.jpg', 1),
(161, 'C161', 3, 2, 1, '/assets/img/map/C161.jpg', 1),
(162, 'C162', 3, 2, 2, '/assets/img/map/C162.jpg', 1),
(163, 'C163', 3, 2, 3, '/assets/img/map/C163.jpg', 1),
(164, 'C164', 3, 2, 4, '/assets/img/map/C164.jpg', 1),
(165, 'C165', 3, 2, 5, '/assets/img/map/C165.jpg', 1),
(166, 'C166', 3, 2, 6, '/assets/img/map/C166.jpg', 1),
(167, 'C167', 3, 2, 7, '/assets/img/map/C167.jpg', 1),
(168, 'C168', 3, 2, 8, '/assets/img/map/C168.jpg', 1),
(169, 'C169', 3, 2, 9, '/assets/img/map/C169.jpg', 1),
(170, 'C170', 3, 2, 10, '/assets/img/map/C170.jpg', 1),
(171, 'C171', 3, 3, 1, '/assets/img/map/C171.jpg', 1),
(172, 'C172', 3, 3, 2, '/assets/img/map/C172.jpg', 1),
(173, 'C173', 3, 3, 3, '/assets/img/map/C173.jpg', 1),
(174, 'C174', 3, 3, 4, '/assets/img/map/C174.jpg', 1),
(175, 'C175', 3, 3, 5, '/assets/img/map/C175.jpg', 1),
(176, 'C176', 3, 3, 6, '/assets/img/map/C176.jpg', 1),
(177, 'C177', 3, 3, 7, '/assets/img/map/C177.jpg', 1),
(178, 'C178', 3, 3, 8, '/assets/img/map/C178.jpg', 1),
(179, 'C179', 3, 3, 9, '/assets/img/map/C179.jpg', 1),
(180, 'C180', 3, 3, 10, '/assets/img/map/C180.jpg', 1),
(181, 'C181', 3, 4, 1, '/assets/img/map/C181.jpg', 1),
(182, 'C182', 3, 4, 2, '/assets/img/map/C182.jpg', 1),
(183, 'C183', 3, 4, 3, '/assets/img/map/C183.jpg', 1),
(184, 'C184', 3, 4, 4, '/assets/img/map/C184.jpg', 1),
(185, 'C185', 3, 4, 5, '/assets/img/map/C185.jpg', 1),
(186, 'C186', 3, 4, 6, '/assets/img/map/C186.jpg', 1),
(187, 'C187', 3, 4, 7, '/assets/img/map/C187.jpg', 1),
(188, 'C188', 3, 4, 8, '/assets/img/map/C188.jpg', 1),
(189, 'C189', 3, 4, 9, '/assets/img/map/C189.jpg', 1),
(190, 'C190', 3, 4, 10, '/assets/img/map/C190.jpg', 1);

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
(2, 'Lantai 2'),
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
