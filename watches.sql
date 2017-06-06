-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2017 at 10:44 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watches`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SupperAdmin', 'toanktv.it@gmail.com', '$2y$10$q3UFgqoa.mt5Yx1dVEBT.ee6CZkLk7p7U4Y.kbYQh6PLJ/mxgenJm', '100', 'y1pmuffYt2NXz8JnEutQkXs5xAgsMu1v7Eb8kkSMPMgtzZ6AoqibmmQVdau6', '2016-12-05 00:38:38', '2017-05-24 08:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

CREATE TABLE `advs` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `url_banner` text COLLATE utf8_unicode_ci NOT NULL,
  `pos` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`id`, `address`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, '44B, Phất Lộc, Hoàn Kiếm, HN', '0905.336.879', 1, '2017-06-06 07:00:46', '2017-06-06 07:00:46'),
(2, '44B, Phất Lộc, Hoàn Kiếm, HN', '0905.336.879', 1, '2017-06-06 07:00:59', '2017-06-06 07:00:59'),
(3, '44B, Phất Lộc, Hoàn Kiếm, HN', '0905.336.879', 1, '2017-06-06 07:01:16', '2017-06-06 07:01:16'),
(4, '44B, Phất Lộc, Hoàn Kiếm, HN', '0905.336.879', 1, '2017-06-06 07:01:22', '2017-06-06 07:01:22'),
(5, '44B, Phất Lộc, Hoàn Kiếm, HN', '0905.336.879', 1, '2017-06-06 07:01:27', '2017-06-06 07:01:27'),
(6, '44B, Phất Lộc, Hoàn Kiếm, HN', '0905.336.879', 1, '2017-06-06 07:01:32', '2017-06-06 07:01:32'),
(7, '44B, Phất Lộc, Hoàn Kiếm', '0905.336.888', 1, '2017-06-06 07:01:45', '2017-06-06 07:01:45'),
(8, '64B, Phất Lộc, Hoàn Kiếm', '0905.336.899', 1, '2017-06-06 07:02:05', '2017-06-06 07:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`, `banner`) VALUES
(1, 'Tin tức', 'tin-tuc', '0', '2016-11-24 01:38:46', '2017-06-05 15:57:13', NULL),
(3, 'Casio', 'casio', '0', '2016-11-23 20:17:01', '2017-06-05 16:02:32', '1496625595_1496134220_banner-casio.png'),
(4, 'Citizen', 'citizen', '0', '2016-11-23 20:17:39', '2017-06-05 15:54:45', NULL),
(15, 'Ogival', 'ogival', '0', '2016-11-24 01:56:05', '2017-06-05 15:54:51', NULL),
(16, 'Olym Pianus', 'olym-pianus', '0', '2016-11-25 02:00:27', '2017-06-05 15:54:57', NULL),
(17, 'Olympia star', 'olympia-star', '0', '2016-11-25 02:00:41', '2017-06-05 15:55:02', NULL),
(19, 'Đồng hồ cơ', 'dong-ho-co', '0', '2016-11-26 00:36:11', '2017-06-05 15:58:25', NULL),
(20, 'Đồng hồ đôi', 'dong-ho-doi', '0', '2016-11-26 00:36:27', '2017-06-05 15:57:59', NULL),
(21, 'Đồng hồ khác', 'dong-ho-khac', '0', '2016-11-26 00:36:48', '2017-06-05 15:58:13', NULL),
(24, 'Orient', 'orient', '0', '2017-05-19 19:25:25', '2017-06-05 15:55:06', NULL),
(25, 'Seiko', 'seiko', '0', '2017-05-19 19:25:37', '2017-06-05 15:55:12', NULL),
(26, 'Đồng hồ Thụy Sĩ', 'dong-ho-thuy-si', '0', '2017-05-28 00:25:26', '2017-05-28 00:25:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_message` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_email`, `contact_message`, `contact_status`, `created_at`, `updated_at`) VALUES
(2, 'le toan', '09212122121', 'noi dung contact', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'sfdsf', 'fsf', 'dsfdsfsfs', 1, '2017-05-26 03:17:30', '2017-05-26 03:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `detail_img`
--

CREATE TABLE `detail_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `images_url` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail_img`
--

INSERT INTO `detail_img` (`id`, `images_url`, `pro_id`, `created_at`, `updated_at`) VALUES
(22, '1495335365_Avatar_SER0200HW-1.png', 25, '2016-11-24 18:48:46', '2016-11-24 18:48:46'),
(23, '1495342280_avatarfac0000bw0.png', 26, '2016-11-25 23:44:07', '2016-11-25 23:44:07'),
(24, '1495335365_Avatar_SER0200HW-1.png', 27, '2016-11-25 23:44:11', '2016-11-25 23:44:11'),
(32, '1495335365_Avatar_SER0200HW-1.png', 35, '2016-11-25 23:45:08', '2016-11-25 23:45:08'),
(39, '1480151599_930_dell 980 2.png', 42, '2016-11-26 02:13:19', '2016-11-26 02:13:19'),
(42, '1480151611_930_dell 980 2.png', 45, '2016-11-26 02:13:31', '2016-11-26 02:13:31'),
(44, '1495335365_Avatar_SER0200HW-1.png', 47, '2016-11-26 02:13:53', '2016-11-26 02:13:53'),
(47, '1480151643_930_dell 980 2.png', 50, '2016-11-26 02:14:03', '2016-11-26 02:14:03'),
(50, '1495342280_avatarfac0000bw0.png', 53, '2016-11-26 02:18:11', '2016-11-26 02:18:11'),
(61, '1495351631_avatarfac00009w0-369x500.png', 69, '2016-11-28 18:21:42', '2016-11-28 18:21:42'),
(62, '1495351631_Avatar_SER0200HW-1.png', 69, '2016-11-28 18:21:42', '2016-11-28 18:21:42'),
(63, '1495351631_avatarfac00009w0-369x500.png', 69, '2016-11-28 18:21:42', '2016-11-28 18:21:42'),
(64, '1495351631_Avatar_SER0200HW-1.png', 69, '2016-11-28 18:21:42', '2016-11-28 18:21:42'),
(65, '1480650741_oppo-f1s-hero-400x460-400x460.png', 24, '2016-12-01 20:52:21', '2016-12-01 20:52:21'),
(66, '1495351631_avatarfac00009w0-369x500.png', 34, '2017-05-19 20:03:10', '2017-05-19 20:03:10'),
(67, '1495351631_avatarfac00009w0-369x500.png', 34, '2017-05-19 20:03:10', '2017-05-19 20:03:10'),
(68, '1495351631_avatarfac00009w0-369x500.png', 34, '2017-05-19 20:03:10', '2017-05-19 20:03:10'),
(69, '1495335365_avatarfac0000bw0.png', 23, '2017-05-20 19:56:05', '2017-05-20 19:56:05'),
(70, '1495335365_avatarfac00009w0-369x500.png', 23, '2017-05-20 19:56:05', '2017-05-20 19:56:05'),
(71, '1495335365_Avatar_SER0200HW-1.png', 23, '2017-05-20 19:56:05', '2017-05-20 19:56:05'),
(72, '1495335365_avatarfac0000bw0.png', 23, '2017-05-20 19:56:05', '2017-05-20 19:56:05'),
(73, '1495335365_avatarfac00009w0-369x500.png', 23, '2017-05-20 19:56:05', '2017-05-20 19:56:05'),
(74, '1495335365_Avatar_SER0200HW-1.png', 23, '2017-05-20 19:56:05', '2017-05-20 19:56:05'),
(75, '1495342280_avatarfac0000bw0.png', 22, '2017-05-20 21:51:20', '2017-05-20 21:51:20'),
(76, '1495342280_Avatar_SER0200HW-1.png', 22, '2017-05-20 21:51:20', '2017-05-20 21:51:20'),
(77, '1495351631_avatarfac00009w0-369x500.png', 71, '2017-05-21 00:27:11', '2017-05-21 00:27:11'),
(78, '1495351631_Avatar_SER0200HW-1.png', 71, '2017-05-21 00:27:11', '2017-05-21 00:27:11'),
(82, '1495356672_avatarag8351-86e-1.png', 28, '2017-05-21 01:51:12', '2017-05-21 01:51:12'),
(83, '1495356672_Avatar_NY4051-51A-1.png', 28, '2017-05-21 01:51:12', '2017-05-21 01:51:12'),
(84, '1495956440_avatarefv-510l-2avudf.png', 73, '2017-05-28 00:27:20', '2017-05-28 00:27:20'),
(85, '1495956440_avatarny0040-09e-1-1.png', 73, '2017-05-28 00:27:20', '2017-05-28 00:27:20'),
(88, '1496624498_1495293309_AVATAR_OP900-15AMSK-T.png', 101, '2017-06-04 18:01:38', '2017-06-04 18:01:38'),
(89, '1496624499_1495351096_avatarfac0000bw0.png', 101, '2017-06-04 18:01:39', '2017-06-04 18:01:39'),
(90, '1496657690_1495272433_avatarfac0000bw0.png', 99, '2017-06-05 03:14:50', '2017-06-05 03:14:50'),
(91, '1496657690_1495293279_avatarop990-141ams-d.png', 99, '2017-06-05 03:14:50', '2017-06-05 03:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `group_watch`
--

CREATE TABLE `group_watch` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kieuday`
--

CREATE TABLE `kieuday` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kieuday`
--

INSERT INTO `kieuday` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dây cao su', 1, '2017-06-05 21:53:01', '2017-06-05 21:54:42'),
(2, 'Dây da', 1, '2017-06-05 21:54:14', '2017-06-05 21:54:14'),
(3, 'Dây kim loại', 1, '2017-06-05 21:54:22', '2017-06-05 21:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `kieumay`
--

CREATE TABLE `kieumay` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kieumay`
--

INSERT INTO `kieumay` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eco - drive', 1, '2017-06-05 21:55:09', '2017-06-05 21:57:41'),
(2, 'Kinetic', 1, '2017-06-05 21:55:15', '2017-06-05 21:55:15'),
(3, 'Máy cơ', 1, '2017-06-05 21:55:22', '2017-06-05 21:55:22'),
(4, 'Máy Quartz', 1, '2017-06-05 21:55:29', '2017-06-05 21:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_13_131139_create_admin_users_table', 1),
('2016_11_24_011241_create_categor_table', 1),
('2016_11_24_011515_create_products_table', 1),
('2016_11_24_012823_create_pro_details_table', 1),
('2016_11_24_013636_create_detal_img_table', 1),
('2016_11_24_014238_create_news_table', 1),
('2016_11_24_014742_create_banners_table', 1),
('2016_12_01_161126_create_oders_table', 2),
('2016_12_02_015703_create_oders_detail_table', 3),
('2016_12_02_023327_create_oders_table', 4),
('2016_12_02_023343_create_oders_detail_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full` text COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `source` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

CREATE TABLE `oders` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` float NOT NULL,
  `total` float NOT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oders`
--

INSERT INTO `oders` (`id`, `c_id`, `qty`, `sub_total`, `total`, `status`, `type`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 24980000, 24980000, 1, 'cod', 'ok giao hang nhanh nhat co the', '2016-12-01 19:52:14', '2016-12-05 01:53:57'),
(2, 1, 2, 24980000, 24980000, 1, 'cod', 'sad', '2016-12-01 19:55:27', '2016-12-25 21:51:13'),
(6, 1, 2, 24980000, 24980000, 1, 'cod', 'ok be le', '2016-12-01 20:32:39', '2016-12-05 01:54:07'),
(7, 1, 1, 15890000, 15890000, 1, 'cod', 'asd', '2016-12-06 02:39:35', '2016-12-25 21:51:24'),
(8, 1, 2, 31780000, 31780000, 1, 'cod', 'nhan hang nhanh', '2016-12-17 03:52:18', '2016-12-25 21:51:28'),
(9, 1, 1, 15890000, 15890000, 1, 'paypal', 'PAY-39X56047VY8578917LBKSMVA', '2016-12-17 04:50:08', '2016-12-17 04:50:08'),
(10, 1, 2, 34380000, 34380000, 1, 'cod', 'ghi chu', '2016-12-17 04:53:28', '2016-12-25 21:51:35'),
(11, 1, 1, 15890000, 15890000, 1, 'cod', '                    \r\n                  ', '2016-12-17 04:54:11', '2016-12-25 21:51:42'),
(12, 1, 2, 24480000, 24480000, 1, 'paypal', 'PAY-5DH63736F1042400PLBKUBIY', '2016-12-17 06:42:29', '2016-12-17 06:42:29'),
(15, 3, 4, 73960000, 73960000, 1, 'cod', '                    \r\n                  ok toi mua no', '2017-05-16 21:42:19', '2017-05-16 21:42:51'),
(17, 1, 3, 15744800, 15744800, 0, 'cod', 'Tôi mua sản phẩm này                    \r\n                  ', '2017-05-28 01:15:08', '2017-05-28 01:15:08'),
(18, 4, 1, 19850000, 19850000, 0, 'cod', 'Di dau cung duoc', '2017-05-28 01:34:09', '2017-05-28 01:34:09'),
(19, 5, 1, 1000000, 1000000, 0, 'tructiep', 'Toi mua', '2017-05-28 01:54:10', '2017-05-28 01:54:10'),
(20, 6, 1, 3289000, 3289000, 0, 'cod', 'rtrtr', '2017-05-28 21:59:36', '2017-05-28 21:59:36'),
(21, 8, 1, 5497000, 5497000, 0, 'cod', '', '2017-05-29 03:42:55', '2017-05-29 03:42:55'),
(22, 9, 2, 23613900, 23613900, 0, 'cod', '23232', '2017-06-02 07:23:14', '2017-06-02 07:23:14'),
(23, 10, 1, 1900990, 1900990, 0, 'cod', 'qwqwqww', '2017-06-02 07:26:45', '2017-06-02 07:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `oders_detail`
--

CREATE TABLE `oders_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `o_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oders_detail`
--

INSERT INTO `oders_detail` (`id`, `pro_id`, `qty`, `o_id`, `created_at`, `updated_at`) VALUES
(1, 26, 1, 1, '2016-12-01 19:52:14', '2016-12-01 19:52:14'),
(2, 24, 1, 1, '2016-12-01 19:52:14', '2016-12-01 19:52:14'),
(3, 26, 1, 2, '2016-12-01 19:55:27', '2016-12-01 19:55:27'),
(4, 24, 1, 2, '2016-12-01 19:55:27', '2016-12-01 19:55:27'),
(10, 35, 1, 6, '2016-12-01 20:32:39', '2016-12-01 20:32:39'),
(12, 23, 1, 7, '2016-12-06 02:39:35', '2016-12-06 02:39:35'),
(13, 22, 2, 8, '2016-12-17 03:52:19', '2016-12-17 03:52:19'),
(14, 23, 1, 9, '2016-12-17 04:50:09', '2016-12-17 04:50:09'),
(15, 23, 1, 10, '2016-12-17 04:53:28', '2016-12-17 04:53:28'),
(16, 35, 1, 10, '2016-12-17 04:53:28', '2016-12-17 04:53:28'),
(17, 23, 1, 11, '2016-12-17 04:54:11', '2016-12-17 04:54:11'),
(18, 35, 1, 12, '2016-12-17 06:42:29', '2016-12-17 06:42:29'),
(19, 24, 1, 12, '2016-12-17 06:42:29', '2016-12-17 06:42:29'),
(22, 34, 4, 15, '2017-05-16 21:42:19', '2017-05-16 21:42:19'),
(23, 71, 2, 17, '2017-05-28 01:15:08', '2017-05-28 01:15:08'),
(26, 73, 1, 19, '2017-05-28 01:54:10', '2017-05-28 01:54:10'),
(27, 34, 1, 20, '2017-05-28 21:59:36', '2017-05-28 21:59:36'),
(29, 71, 1, 22, '2017-06-02 07:23:14', '2017-06-02 07:23:14'),
(30, 35, 1, 22, '2017-06-02 07:23:14', '2017-06-02 07:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Casio', '1496755652_logo-casio-min.jpg', '#', '2017-06-06 06:22:39', '2017-06-06 06:27:32'),
(2, 'Citizen', '1496755498_logo-citizen-min.jpg', '#', '2017-06-06 06:24:58', '2017-06-06 06:24:58'),
(3, 'Ogival', '1496755533_logo-ogival.png', '#', '2017-06-06 06:25:33', '2017-06-06 06:25:33'),
(4, 'Olym pianus', '1496755559_logo-olym-pianus-min.jpg', '#', '2017-06-06 06:25:59', '2017-06-06 06:25:59'),
(5, 'Olym Star', '1496755583_logo-olympia-star-min.jpg', '#', '2017-06-06 06:26:23', '2017-06-06 06:26:23'),
(6, 'Orient', '1496755599_logo-orient-min.jpg', '#', '2017-06-06 06:26:39', '2017-06-06 06:26:39'),
(7, 'Seiko', '1496755620_logo-seiko-min.png', '#', '2017-06-06 06:27:00', '2017-06-06 06:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sp@gmail.com', '4ef83492c9675a69bf1f1660f0965653a0864f47a3b6d161fecba7cb12c131b4', '2016-12-06 03:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promo1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promo2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promo3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `packet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `r_intro` text COLLATE utf8_unicode_ci,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isHome` int(1) DEFAULT NULL,
  `isGroup` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `intro`, `promo1`, `promo2`, `promo3`, `packet`, `images`, `r_intro`, `review`, `tag`, `price`, `status`, `cat_id`, `user_id`, `created_at`, `updated_at`, `isHome`, `isGroup`) VALUES
(22, 'Galaxy S7 EDGE', 'galaxy-s7-edge', NULL, 'Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', 'Hoặc Tặng Vali Lock & Lock ', 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)', ' Trả góp 10%', '1495272433_avatarfac0000bw0.png', NULL, '<p>Ch&iacute;nh thức ra mắt tại sự kiện MWC 2016 tổ chức tại Barcelona (T&acirc;y Ban Nha), smartphone&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Samsung Galaxy S7</strong></a>&nbsp;sở hữu nhiều sự thay đổi nổi bật ở cả thiết kế, cấu h&igrave;nh v&agrave; những t&iacute;nh năng đi k&egrave;m.&nbsp;Chiếc điện thoại n&agrave;y hứa hẹn sẽ tạo n&ecirc;n sự b&ugrave;ng nổ trong ph&acirc;n kh&uacute;c cao cấp v&agrave; mang lại những th&agrave;nh c&ocirc;ng tiếp theo cho h&atilde;ng điện thoại H&agrave;n Quốc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Samsung Galaxy S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/samsung-galaxy-s7-a.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Ng&ocirc;n ngữ thiết kế quen thuộc, bổ sung khả năng chống nước hiệu quả</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Samsung Galaxy S7 chống nước hiệu quả" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-1.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sở hữu vẻ ngo&agrave;i mang nhiều n&eacute;t ti&ecirc;u biểu của người tiền nhiệm S6 nhưng&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Galaxy S7</strong></a>&nbsp;cũng c&oacute; những điểm nhấn mới mẻ của ri&ecirc;ng m&igrave;nh, c&oacute; thể&nbsp;kể đến như mặt lưng được bo cong hơn gi&uacute;p người d&ugrave;ng cầm giữ dễ d&agrave;ng hệ thống camera được l&agrave;m gọn v&agrave; bớt lồi hơn. Đặc biệt, khả năng chống nước v&agrave; bụi đạt ti&ecirc;u chuẩn IP68 sẽ mang đến sự y&ecirc;n t&acirc;m khi sử dụng m&aacute;y trong điều kiện ẩm ướt v&agrave; gi&uacute;p người d&ugrave;ng vệ sinh cho m&aacute;y dễ d&agrave;ng hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh Super AMOLED độ ph&acirc;n giải 2K sắc n&eacute;t</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Màn hình Samsung Galaxy S7 Super AMOLED" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-2.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>M&agrave;n h&igrave;nh của Galaxy S7 sẽ c&oacute; k&iacute;ch thước 5,1 inch với độ ph&acirc;n giải 2K (2560 x 1440 pixel), cho mật độ điểm ảnh l&ecirc;n đến 576 ppi, gi&uacute;p t&aacute;i hiện h&igrave;nh ảnh với độ sắc n&eacute;t cực cao ngay trước mắt người d&ugrave;ng. C&ugrave;ng với đ&oacute;, c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED sẽ mang đến những khung h&igrave;nh với m&agrave;u sắc tươi tắn, sống động, c&ugrave;ng khả năng tiết kiệm điện năng ấn tượng. Nhờ đ&oacute;, Samsung đ&atilde; thiết kế th&ecirc;m&nbsp;<a href="https://fptshop.com.vn/tin-tuc/tin-moi/chuc-nang-always-on-se-chi-danh-rieng-cho-galaxy-s7-37568" target="_blank">t&iacute;nh năng Always On cho Galaxy S7</a>&nbsp;gi&uacute;p người d&ugrave;ng đọc được c&aacute;c th&ocirc;ng b&aacute;o m&agrave; kh&ocirc;ng phải qua thao t&aacute;c mở s&aacute;ng m&agrave;n h&igrave;nh.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Vi xử l&yacute; mới, sức mạnh mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Vi xử lý Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-3.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Điện thoại Galaxy S7</strong></a>&nbsp;sẽ c&oacute; 2 phi&ecirc;n bản sử dụng 2 vi xử l&yacute; kh&aacute;c nhau l&agrave; Qualcomm Snapdragon 820 v&agrave; Exynos 8890 &ndash; cả hai đều l&agrave; những con chip cao cấp thế hệ mới sở hữu hiệu suất vượt trội, gi&uacute;p m&aacute;y xử l&yacute; ho&agrave;n hảo mọi y&ecirc;u cầu t&aacute;c vụ d&ugrave; &ldquo;nặng nề&rdquo; nhất. Th&ecirc;m nữa, dung lượng RAM được n&acirc;ng cấp l&ecirc;n mức 4GB sẽ gi&uacute;p x&oacute;a đi nỗi băn khoăn về hiệu quả thực thi đa nhiệm. Một điểm tuyệt vời kh&aacute;c l&agrave; việc&nbsp;<strong>Galaxy S7</strong>&nbsp;sẽ hỗ trợ thẻ nhớ ngo&agrave;i để người d&ugrave;ng mở rộng kh&ocirc;ng gian lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Samsung S7 được trang bị camera chụp h&igrave;nh ấn tượng hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Camera Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-4.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Camera của Galaxy S7 cũng sẽ c&oacute; những n&acirc;ng cấp đ&aacute;ng kể. D&ugrave; độ ph&acirc;n giải được giảm xuống 12MP (so với 16MP tr&ecirc;n Galaxy S6), tuy nhi&ecirc;n camera n&agrave;y sẽ c&oacute; khẩu độ f/1.7 cho khả năng thu s&aacute;ng tuyệt vời hơn bao giờ hết. Ngo&agrave;i ra, t&iacute;nh năng chống rung quang học OIS gi&uacute;p m&aacute;y ảnh chụp nhanh hơn, &iacute;t nh&ograve;e h&igrave;nh hơn trong điều kiện thiếu s&aacute;ng. Chưa hết, Samsung c&ograve;n sử dụng một cảm biến ảnh mới tự động lấy n&eacute;t điểm ảnh k&eacute;p (Dual Pixel) tương tự cảm biến của c&aacute;c m&aacute;y DSLR của Canon, do vậy h&igrave;nh ảnh sẽ bớt nhiễu, m&agrave;u sắc rực rỡ hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nền tảng điều h&agrave;nh mới cho thời lượng pin tốt hơn</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Dung lượng pin Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-5.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hệ điều h&agrave;nh Android 6.0 Marshmallow mới nhất hiện nay kết hợp với c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED v&agrave; vi xử l&yacute; tiết kiệm điện năng c&ograve;n gi&uacute;p m&aacute;y c&oacute; được thời lượng pin l&acirc;u hơn, c&oacute; thể l&ecirc;n đến 2 ng&agrave;y ở điều kiện sử dụng th&ocirc;ng thường. C&ocirc;ng nghệ sạc nhanh sẽ gi&uacute;p r&uacute;t ngắn đ&aacute;ng kể thời gian chờ đợi của người d&ugrave;ng, ngo&agrave;i ra Galaxy S7 c&ograve;n được trang bị t&iacute;nh năng sạc kh&ocirc;ng d&acirc;y v&agrave; đặc biệt l&agrave; tản nhiệt bằng chất lỏng.</p>\r\n', 'Galaxy S7, Galaxy S7,Galaxy S7', 15891000, 0, 24, 1, '2016-11-24 09:39:13', '2017-05-21 00:57:46', NULL, NULL),
(23, 'Olym P12', 'olym-p12', NULL, 'Trả góp 10%', 'Hoặc Tặng Vali Lock & Lock ', 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495272458_avatarfac00009w0-369x500.png', NULL, '<p>Ch&iacute;nh thức ra mắt tại sự kiện MWC 2016 tổ chức tại Barcelona (T&acirc;y Ban Nha), smartphone&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Samsung Galaxy S7</strong></a>&nbsp;sở hữu nhiều sự thay đổi nổi bật ở cả thiết kế, cấu h&igrave;nh v&agrave; những t&iacute;nh năng đi k&egrave;m.&nbsp;Chiếc điện thoại n&agrave;y hứa hẹn sẽ tạo n&ecirc;n sự b&ugrave;ng nổ trong ph&acirc;n kh&uacute;c cao cấp v&agrave; mang lại những th&agrave;nh c&ocirc;ng tiếp theo cho h&atilde;ng điện thoại H&agrave;n Quốc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Samsung Galaxy S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/samsung-galaxy-s7-a.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Ng&ocirc;n ngữ thiết kế quen thuộc, bổ sung khả năng chống nước hiệu quả</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Samsung Galaxy S7 chống nước hiệu quả" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-1.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sở hữu vẻ ngo&agrave;i mang nhiều n&eacute;t ti&ecirc;u biểu của người tiền nhiệm S6 nhưng&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Galaxy S7</strong></a>&nbsp;cũng c&oacute; những điểm nhấn mới mẻ của ri&ecirc;ng m&igrave;nh, c&oacute; thể&nbsp;kể đến như mặt lưng được bo cong hơn gi&uacute;p người d&ugrave;ng cầm giữ dễ d&agrave;ng hệ thống camera được l&agrave;m gọn v&agrave; bớt lồi hơn. Đặc biệt, khả năng chống nước v&agrave; bụi đạt ti&ecirc;u chuẩn IP68 sẽ mang đến sự y&ecirc;n t&acirc;m khi sử dụng m&aacute;y trong điều kiện ẩm ướt v&agrave; gi&uacute;p người d&ugrave;ng vệ sinh cho m&aacute;y dễ d&agrave;ng hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh Super AMOLED độ ph&acirc;n giải 2K sắc n&eacute;t</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Màn hình Samsung Galaxy S7 Super AMOLED" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-2.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>M&agrave;n h&igrave;nh của Galaxy S7 sẽ c&oacute; k&iacute;ch thước 5,1 inch với độ ph&acirc;n giải 2K (2560 x 1440 pixel), cho mật độ điểm ảnh l&ecirc;n đến 576 ppi, gi&uacute;p t&aacute;i hiện h&igrave;nh ảnh với độ sắc n&eacute;t cực cao ngay trước mắt người d&ugrave;ng. C&ugrave;ng với đ&oacute;, c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED sẽ mang đến những khung h&igrave;nh với m&agrave;u sắc tươi tắn, sống động, c&ugrave;ng khả năng tiết kiệm điện năng ấn tượng. Nhờ đ&oacute;, Samsung đ&atilde; thiết kế th&ecirc;m&nbsp;<a href="https://fptshop.com.vn/tin-tuc/tin-moi/chuc-nang-always-on-se-chi-danh-rieng-cho-galaxy-s7-37568" target="_blank">t&iacute;nh năng Always On cho Galaxy S7</a>&nbsp;gi&uacute;p người d&ugrave;ng đọc được c&aacute;c th&ocirc;ng b&aacute;o m&agrave; kh&ocirc;ng phải qua thao t&aacute;c mở s&aacute;ng m&agrave;n h&igrave;nh.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Vi xử l&yacute; mới, sức mạnh mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Vi xử lý Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-3.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Điện thoại Galaxy S7</strong></a>&nbsp;sẽ c&oacute; 2 phi&ecirc;n bản sử dụng 2 vi xử l&yacute; kh&aacute;c nhau l&agrave; Qualcomm Snapdragon 820 v&agrave; Exynos 8890 &ndash; cả hai đều l&agrave; những con chip cao cấp thế hệ mới sở hữu hiệu suất vượt trội, gi&uacute;p m&aacute;y xử l&yacute; ho&agrave;n hảo mọi y&ecirc;u cầu t&aacute;c vụ d&ugrave; &ldquo;nặng nề&rdquo; nhất. Th&ecirc;m nữa, dung lượng RAM được n&acirc;ng cấp l&ecirc;n mức 4GB sẽ gi&uacute;p x&oacute;a đi nỗi băn khoăn về hiệu quả thực thi đa nhiệm. Một điểm tuyệt vời kh&aacute;c l&agrave; việc&nbsp;<strong>Galaxy S7</strong>&nbsp;sẽ hỗ trợ thẻ nhớ ngo&agrave;i để người d&ugrave;ng mở rộng kh&ocirc;ng gian lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Samsung S7 được trang bị camera chụp h&igrave;nh ấn tượng hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Camera Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-4.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Camera của Galaxy S7 cũng sẽ c&oacute; những n&acirc;ng cấp đ&aacute;ng kể. D&ugrave; độ ph&acirc;n giải được giảm xuống 12MP (so với 16MP tr&ecirc;n Galaxy S6), tuy nhi&ecirc;n camera n&agrave;y sẽ c&oacute; khẩu độ f/1.7 cho khả năng thu s&aacute;ng tuyệt vời hơn bao giờ hết. Ngo&agrave;i ra, t&iacute;nh năng chống rung quang học OIS gi&uacute;p m&aacute;y ảnh chụp nhanh hơn, &iacute;t nh&ograve;e h&igrave;nh hơn trong điều kiện thiếu s&aacute;ng. Chưa hết, Samsung c&ograve;n sử dụng một cảm biến ảnh mới tự động lấy n&eacute;t điểm ảnh k&eacute;p (Dual Pixel) tương tự cảm biến của c&aacute;c m&aacute;y DSLR của Canon, do vậy h&igrave;nh ảnh sẽ bớt nhiễu, m&agrave;u sắc rực rỡ hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nền tảng điều h&agrave;nh mới cho thời lượng pin tốt hơn</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Dung lượng pin Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-5.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hệ điều h&agrave;nh Android 6.0 Marshmallow mới nhất hiện nay kết hợp với c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED v&agrave; vi xử l&yacute; tiết kiệm điện năng c&ograve;n gi&uacute;p m&aacute;y c&oacute; được thời lượng pin l&acirc;u hơn, c&oacute; thể l&ecirc;n đến 2 ng&agrave;y ở điều kiện sử dụng th&ocirc;ng thường. C&ocirc;ng nghệ sạc nhanh sẽ gi&uacute;p r&uacute;t ngắn đ&aacute;ng kể thời gian chờ đợi của người d&ugrave;ng, ngo&agrave;i ra Galaxy S7 c&ograve;n được trang bị t&iacute;nh năng sạc kh&ocirc;ng d&acirc;y v&agrave; đặc biệt l&agrave; tản nhiệt bằng chất lỏng.</p>\r\n', 'Olym', 1589990, 1, 16, 1, '2016-11-24 09:39:28', '2017-05-21 01:48:35', NULL, NULL),
(24, 'OPPO F1S', 'oppo-f1s', 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ', 'Tặng Voucher 500.000đ mua Apple Watch', '', '1495294235_avatarop990-141ams-d.png', NULL, '<h3><strong>Thiết kế ho&agrave;n thiện hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-3.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Về thiết kế, vẫn l&agrave; nh&ocirc;m nguy&ecirc;n khối liền lạc nhưng iPhone 7 Plus đ&atilde; c&oacute; những n&eacute;t thay đổi tinh tế khi đưa hai dải ăng-ten l&ecirc;n s&aacute;t hai cạnh tr&ecirc;n dưới, đồng thời bỏ đi jack cắm tai nghe 3.5 mm. Điểm nhấn ấn tượng nhất về ngoại h&igrave;nh của iPhone 7 Plus l&agrave; việc Apple bỏ đi m&agrave;u x&aacute;m kh&ocirc;ng gian từng rất được ưa chuộng tr&ecirc;n c&aacute;c model cũ để bổ sung th&ecirc;m t&ugrave;y chọn m&agrave;u đen mờ v&agrave; đen b&oacute;ng Jet Black (chỉ c&oacute; tr&ecirc;n iPhone 7 Plus bản 128/256 GB).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh rộng 5.5 inch, s&aacute;ng hơn, nhiều m&agrave;u sắc hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-9.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>iPhone 7 Plus cũng c&oacute; m&agrave;n h&igrave;nh 5.5 inch độ ph&acirc;n giải 1080x1920 pixels tương tự iPhone 6s Plus, như vậy về k&iacute;ch thước tổng thể ch&uacute;ng ta kh&ocirc;ng c&oacute; g&igrave; thay đổi. Tuy nhi&ecirc;n, tấm nền m&agrave;n h&igrave;nh mới đ&atilde; được bổ sung th&ecirc;m 25% độ s&aacute;ng, đạt mức cao nhất 625 nits c&ugrave;ng khả năng t&aacute;i tạo m&agrave;u sắc, gam m&agrave;u rộng hơn v&agrave; hỗ trợ 3D Touch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>N&uacute;t Home ho&agrave;n to&agrave;n mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-6.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với chiếc điện thoại thế hệ mới, Apple đ&atilde; &quot;xo&aacute; sổ&quot; ho&agrave;n to&agrave;n n&uacute;t bấm vật l&yacute; tr&ecirc;n m&agrave;n h&igrave;nh iPhone. Giờ đ&acirc;y n&uacute;t Home ở vị tr&iacute; cũ đ&atilde; trở th&agrave;nh cảm ứng, khi bạn nhấn xuống n&oacute; vẫn cảm nhận được lực nhấn v&agrave; sẽ rung nhẹ để bạn biết rằng bạn đ&atilde; tương t&aacute;c. Apple đ&atilde; sử dụng Taptic Engine tr&ecirc;n Force Touch của Macbook cho chiếc iPhone mới n&agrave;y. Mặc d&ugrave; vậy ph&iacute;m Home vẫn c&oacute; cảm biến v&acirc;n tay Touch ID v&agrave; t&iacute;ch hợp nhiều t&iacute;nh năng bảo mật.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Camera chất lượng đột ph&aacute; như m&aacute;y ảnh chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-5.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus đi k&egrave;m với một camera k&eacute;p độ ph&acirc;n giải đồng thời 12 MP, trong số đ&oacute; c&oacute; một ống k&iacute;nh g&oacute;c rộng khẩu độ l&ecirc;n đến f/1.8 v&agrave; một ống k&iacute;nh zoom (tele) l&ecirc;n đến 10x, c&ugrave;ng t&iacute;nh năng ổn định h&igrave;nh ảnh quang học tự động.&nbsp;N&oacute; cũng bao gồm một đ&egrave;n flash 2 t&ocirc;ng m&agrave;u v&agrave; đ&egrave;n flash quad-LED. Camera hỗ trợ quay film 4K 60fps, chụp x&oacute;a ph&ocirc;ng, chụp trước lấy n&eacute;t sau như một m&aacute;y ảnh chuy&ecirc;n nghiệp. Camera trước độ ph&acirc;n giải 7 MP, chụp selfie tốt hơn v&agrave; tự động chống rung. B&ecirc;n cạnh đ&oacute;, iOS 10 cũng cho ph&eacute;p người d&ugrave;ng iPhone 7 Plus chỉnh sửa, chọn lựa ảnh từ Live Photos, lưu ảnh ở định dạng RAW.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>T&iacute;nh năng chống nước tiện lợi</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-8.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; thể n&oacute;i t&iacute;nh năng chống nước l&agrave; điều l&agrave;m h&agrave;i l&ograve;ng nhất c&aacute;c t&iacute;n đồ nh&agrave; T&aacute;o. Với ti&ecirc;u chuẩn chống nước IP67 sẽ gi&uacute;p iPhone mới c&oacute; thể sống ở độ s&acirc;u 1 m&eacute;t nước trong 30 ph&uacute;t, vậy l&agrave; từ nay bạn sẽ qu&ecirc;n đi nỗi lo về thấm nước tr&ecirc;n iPhone 7 Plus khi đi trong trời mưa hay lỡ tay rớt nước.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Hiệu năng vượt trội, lưu trữ thoải m&aacute;i</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-1.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus sử dụng chip A10 Fusion 4 l&otilde;i, 64-bit với tốc độ cực nhanh. Apple c&ocirc;ng bố con chip n&agrave;y c&oacute; hiệu năng xử l&yacute; cao hơn 40% so với chip A9 v&agrave; gấp 2 lần so với chip A8. Đặc biệt l&agrave; n&oacute; c&ograve;n cao gấp 120 lần so với iPhone đời đầu. Đi c&ugrave;ng đ&oacute; l&agrave; sự n&acirc;ng cấp về bộ nhớ trong, phi&ecirc;n bản 16 GB trước đ&acirc;y đ&atilde; bị loại bỏ, thay v&agrave;o đ&oacute; ch&uacute;ng ta sẽ c&oacute; bộ nhớ trong 128 GB ở phi&ecirc;n bản n&agrave;y để thoải m&aacute;i lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>&Acirc;m thanh sống động c&ugrave;ng loa stereo</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-7.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Loa ngo&agrave;i tr&ecirc;n iPhone 7 Plus bất ngờ được n&acirc;ng cấp khi từ dạng đơn l&ecirc;n loa k&eacute;p Stereo, với một loa nằm ở cạnh đ&aacute;y v&agrave; một nằm ở cạnh tr&ecirc;n, cho &acirc;m lượng sống động gấp hai lần tr&ecirc;n iPhone 6s Plus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tăng thời lượng sử dụng pin</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo c&ocirc;ng bố từ Apple, iPhone 7 Plus c&oacute; khả năng sử dụng li&ecirc;n tục trong thời gian hơn 1 ng&agrave;y, với 60 giờ lướt web kh&ocirc;ng d&acirc;y v&agrave; 13 giờ sử dụng mạng LTE. Tăng hơn so với iPhone 6s Plus v&agrave; đảm bảo sử dụng cho cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Lưu &yacute;: B&agrave;i viết v&agrave; h&igrave;nh ảnh chỉ c&oacute; t&iacute;nh chất tham khảo v&igrave; cấu h&igrave;nh v&agrave; đặc t&iacute;nh sản phẩm c&oacute; thể thay đổi theo thị trường v&agrave; từng phi&ecirc;n bản. Vui l&ograve;ng gọi tổng đ&agrave;i miễn ph&iacute; 18006601 hoặc đến cửa h&agrave;ng FPT Shop để nhận th&ocirc;ng tin ch&iacute;nh x&aacute;c nhất về sản phẩm.</em></p>\r\n', 'Ipple', 5990000, 1, 16, 1, '2016-11-24 18:48:39', '2017-05-20 08:30:35', NULL, NULL),
(25, 'iPhone 7 Plus 128GB', 'iphone-7-plus-128gb', 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)', 'Đặt Online hoặc Gọi 18006601', 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)', 'Tặng Voucher 500.000đ mua Apple Watch', '', '1495272500_avatarfac00009w0-369x500.png', NULL, '<h3><strong>Thiết kế ho&agrave;n thiện hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-3.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Về thiết kế, vẫn l&agrave; nh&ocirc;m nguy&ecirc;n khối liền lạc nhưng iPhone 7 Plus đ&atilde; c&oacute; những n&eacute;t thay đổi tinh tế khi đưa hai dải ăng-ten l&ecirc;n s&aacute;t hai cạnh tr&ecirc;n dưới, đồng thời bỏ đi jack cắm tai nghe 3.5 mm. Điểm nhấn ấn tượng nhất về ngoại h&igrave;nh của iPhone 7 Plus l&agrave; việc Apple bỏ đi m&agrave;u x&aacute;m kh&ocirc;ng gian từng rất được ưa chuộng tr&ecirc;n c&aacute;c model cũ để bổ sung th&ecirc;m t&ugrave;y chọn m&agrave;u đen mờ v&agrave; đen b&oacute;ng Jet Black (chỉ c&oacute; tr&ecirc;n iPhone 7 Plus bản 128/256 GB).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh rộng 5.5 inch, s&aacute;ng hơn, nhiều m&agrave;u sắc hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-9.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>iPhone 7 Plus cũng c&oacute; m&agrave;n h&igrave;nh 5.5 inch độ ph&acirc;n giải 1080x1920 pixels tương tự iPhone 6s Plus, như vậy về k&iacute;ch thước tổng thể ch&uacute;ng ta kh&ocirc;ng c&oacute; g&igrave; thay đổi. Tuy nhi&ecirc;n, tấm nền m&agrave;n h&igrave;nh mới đ&atilde; được bổ sung th&ecirc;m 25% độ s&aacute;ng, đạt mức cao nhất 625 nits c&ugrave;ng khả năng t&aacute;i tạo m&agrave;u sắc, gam m&agrave;u rộng hơn v&agrave; hỗ trợ 3D Touch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>N&uacute;t Home ho&agrave;n to&agrave;n mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-6.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với chiếc điện thoại thế hệ mới, Apple đ&atilde; &quot;xo&aacute; sổ&quot; ho&agrave;n to&agrave;n n&uacute;t bấm vật l&yacute; tr&ecirc;n m&agrave;n h&igrave;nh iPhone. Giờ đ&acirc;y n&uacute;t Home ở vị tr&iacute; cũ đ&atilde; trở th&agrave;nh cảm ứng, khi bạn nhấn xuống n&oacute; vẫn cảm nhận được lực nhấn v&agrave; sẽ rung nhẹ để bạn biết rằng bạn đ&atilde; tương t&aacute;c. Apple đ&atilde; sử dụng Taptic Engine tr&ecirc;n Force Touch của Macbook cho chiếc iPhone mới n&agrave;y. Mặc d&ugrave; vậy ph&iacute;m Home vẫn c&oacute; cảm biến v&acirc;n tay Touch ID v&agrave; t&iacute;ch hợp nhiều t&iacute;nh năng bảo mật.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Camera chất lượng đột ph&aacute; như m&aacute;y ảnh chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-5.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus đi k&egrave;m với một camera k&eacute;p độ ph&acirc;n giải đồng thời 12 MP, trong số đ&oacute; c&oacute; một ống k&iacute;nh g&oacute;c rộng khẩu độ l&ecirc;n đến f/1.8 v&agrave; một ống k&iacute;nh zoom (tele) l&ecirc;n đến 10x, c&ugrave;ng t&iacute;nh năng ổn định h&igrave;nh ảnh quang học tự động.&nbsp;N&oacute; cũng bao gồm một đ&egrave;n flash 2 t&ocirc;ng m&agrave;u v&agrave; đ&egrave;n flash quad-LED. Camera hỗ trợ quay film 4K 60fps, chụp x&oacute;a ph&ocirc;ng, chụp trước lấy n&eacute;t sau như một m&aacute;y ảnh chuy&ecirc;n nghiệp. Camera trước độ ph&acirc;n giải 7 MP, chụp selfie tốt hơn v&agrave; tự động chống rung. B&ecirc;n cạnh đ&oacute;, iOS 10 cũng cho ph&eacute;p người d&ugrave;ng iPhone 7 Plus chỉnh sửa, chọn lựa ảnh từ Live Photos, lưu ảnh ở định dạng RAW.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>T&iacute;nh năng chống nước tiện lợi</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-8.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; thể n&oacute;i t&iacute;nh năng chống nước l&agrave; điều l&agrave;m h&agrave;i l&ograve;ng nhất c&aacute;c t&iacute;n đồ nh&agrave; T&aacute;o. Với ti&ecirc;u chuẩn chống nước IP67 sẽ gi&uacute;p iPhone mới c&oacute; thể sống ở độ s&acirc;u 1 m&eacute;t nước trong 30 ph&uacute;t, vậy l&agrave; từ nay bạn sẽ qu&ecirc;n đi nỗi lo về thấm nước tr&ecirc;n iPhone 7 Plus khi đi trong trời mưa hay lỡ tay rớt nước.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Hiệu năng vượt trội, lưu trữ thoải m&aacute;i</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-1.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus sử dụng chip A10 Fusion 4 l&otilde;i, 64-bit với tốc độ cực nhanh. Apple c&ocirc;ng bố con chip n&agrave;y c&oacute; hiệu năng xử l&yacute; cao hơn 40% so với chip A9 v&agrave; gấp 2 lần so với chip A8. Đặc biệt l&agrave; n&oacute; c&ograve;n cao gấp 120 lần so với iPhone đời đầu. Đi c&ugrave;ng đ&oacute; l&agrave; sự n&acirc;ng cấp về bộ nhớ trong, phi&ecirc;n bản 16 GB trước đ&acirc;y đ&atilde; bị loại bỏ, thay v&agrave;o đ&oacute; ch&uacute;ng ta sẽ c&oacute; bộ nhớ trong 128 GB ở phi&ecirc;n bản n&agrave;y để thoải m&aacute;i lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>&Acirc;m thanh sống động c&ugrave;ng loa stereo</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-7.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Loa ngo&agrave;i tr&ecirc;n iPhone 7 Plus bất ngờ được n&acirc;ng cấp khi từ dạng đơn l&ecirc;n loa k&eacute;p Stereo, với một loa nằm ở cạnh đ&aacute;y v&agrave; một nằm ở cạnh tr&ecirc;n, cho &acirc;m lượng sống động gấp hai lần tr&ecirc;n iPhone 6s Plus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tăng thời lượng sử dụng pin</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo c&ocirc;ng bố từ Apple, iPhone 7 Plus c&oacute; khả năng sử dụng li&ecirc;n tục trong thời gian hơn 1 ng&agrave;y, với 60 giờ lướt web kh&ocirc;ng d&acirc;y v&agrave; 13 giờ sử dụng mạng LTE. Tăng hơn so với iPhone 6s Plus v&agrave; đảm bảo sử dụng cho cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Lưu &yacute;: B&agrave;i viết v&agrave; h&igrave;nh ảnh chỉ c&oacute; t&iacute;nh chất tham khảo v&igrave; cấu h&igrave;nh v&agrave; đặc t&iacute;nh sản phẩm c&oacute; thể thay đổi theo thị trường v&agrave; từng phi&ecirc;n bản. Vui l&ograve;ng gọi tổng đ&agrave;i miễn ph&iacute; 18006601 hoặc đến cửa h&agrave;ng FPT Shop để nhận th&ocirc;ng tin ch&iacute;nh x&aacute;c nhất về sản phẩm.</em></p>\r\n', 'Ipple', 25190000, 1, 24, 1, '2016-11-24 18:48:45', '2017-05-20 02:28:20', NULL, NULL),
(26, 'Galaxy S7 EDGE', 'galaxy-s7-edge', 'sắp ra mắt', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495272523_avatarfac0000bw0.png', NULL, '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 24, 1, '2016-11-25 23:44:07', '2017-05-20 02:28:43', NULL, NULL),
(27, 'Galaxy S8', 'galaxy-s8', 'sắp ra mắt', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495293254_avatarop995.6agsk-t.png', NULL, '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 16, 1, '2016-11-25 23:44:11', '2017-05-20 08:14:14', NULL, NULL),
(28, 'Galaxy S8', 'galaxy-s8', NULL, 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495293279_avatarop990-141ams-d.png', NULL, '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 16, 1, '2016-11-25 23:44:15', '2017-05-21 01:51:12', NULL, NULL),
(34, 'EFR-526D-7AVUDF', 'efr-526d-7avudf', 'Đồng hồ nam casio đẹp', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn)', 'Hoặc Tặng hộp đựng đẹp', 'Tặng Voucher 500.000đ mua casio ', ' Hộp, Hướng dẫn, Pin ', '1495249390_avatarefr-526d-7avudf.png', NULL, '<p>Với Uy t&iacute;n h&agrave;ng đầu, tận t&acirc;m nhiệt t&igrave;nh phục vụ kh&aacute;ch h&agrave;ng, ph&acirc;n phối những chiếc đồng hồ cực kỳ chất lượng v&agrave; gi&aacute; cả phải chăng hơn 10 năm qua, Đồng Hồ 24H&nbsp;đ&atilde; nhận được sự tin d&ugrave;ng của hầu hết tất cả kh&aacute;ch h&agrave;ng trong nước cũng như phần lớn kiều b&agrave;o ở nước ngo&agrave;i về thăm qu&ecirc; khi lần đầu ti&ecirc;n mua sắm tại cửa h&agrave;ng ch&uacute;ng t&ocirc;i.</p>\r\n', 'Casio, Đồng hồ nam', 3289000, 1, 3, 1, '2016-11-25 23:45:03', '2017-05-20 02:30:17', NULL, NULL),
(35, 'Zenfone 2 Laser', 'zenfone-2-laser', 'sắp ra mắt', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495294235_avatarop990-141ams-d.png', NULL, '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 16, 1, '2016-11-25 23:45:08', '2017-05-20 08:15:09', NULL, NULL),
(42, 'Dell Optiplex 980 SFF Case Size Mini', 'dell-optiplex-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495294235_avatarop990-141ams-d.png', NULL, '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 20, 1, '2016-11-26 02:13:19', '2016-11-26 02:13:19', NULL, NULL),
(45, 'Dell Optiplex 980 SFF Case Size Mini', 'dell-optiplex-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495294235_avatarop990-141ams-d.png', NULL, '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 20, 1, '2016-11-26 02:13:31', '2016-11-26 02:13:31', NULL, NULL),
(47, 'asus Gimming 980 SFF Case Size Mini', 'asus-gimming-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495293254_avatarop995.6agsk-t.png', NULL, '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 21, 1, '2016-11-26 02:13:53', '2016-11-26 02:13:53', NULL, NULL),
(50, 'asus Gimming 980 SFF Case Size Mini', 'asus-gimming-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495293254_avatarop995.6agsk-t.png', NULL, '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 21, 1, '2016-11-26 02:14:03', '2016-11-26 02:14:03', NULL, NULL),
(53, 'ASus ROG GL 552 VX', 'asus-rog-gl-552-vx', '', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', '', 'Pin, Dây nguồn, Sách hướng dẫn, Thùng máy, Adapter sạc ', '1495272500_avatarfac00009w0-369x500.png', '', '<p>Th&ocirc;ng tin sản phẩm:<br />\r\n<strong>ASUS GL552VX-DM070D - i7-6700HQ 2.6GHz, 8GB, 1TB, VGA GTX 950M 4GB GDDR5, 15.6&quot; FHD</strong><br />\r\n<em>&bull; CPU: Intel Core i7 6700HQ 2.6GHz up to 3.5GHz 6Mb<br />\r\n&bull; RAM: 8GB DDR4 2133MHz<br />\r\n&bull; Đĩa cứng: HDD 1TB 7200rpm&nbsp;<br />\r\n&bull; Card đồ họa: NVIDIA GeForce GTX 950M 4GB GDDR5 + Intel HD Graphics 530&nbsp;<br />\r\n&bull; M&agrave;n h&igrave;nh: 15.6 inch Full HD (1920 x 1080 pixels) LED + Anti-Glare WV<br />\r\n&bull; T&iacute;ch hợp đĩa quang: Super-Multi DVD<br />\r\n&bull; Cổng giao tiếp: USB 2.0 USB 3.0 HDMI LAN&nbsp;<br />\r\n&bull; PIN: 4 Cells<br />\r\n&bull; Trọng lượng: 2.59 kg<br />\r\n&bull; Hệ điều h&agrave;nh: Free Dos</em><br />\r\n<br />\r\nTh&ugrave;ng m&aacute;y chắc sản xuất trước khi c&oacute; m&aacute;y n&ecirc;n kh&ocirc;ng c&oacute; ảnh sản phẩm ở ngo&agrave;i th&ugrave;ng<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/wDr6xJo.jpg" /><br />\r\n<br />\r\nTh&ocirc;ng tin sản phẩm c&oacute; thể được quy đổi th&agrave;nh code game World Of Warship kh&aacute; gi&aacute; trị. Nếu bạn n&agrave;o kh&ocirc;ng đổi dc code game th&igrave; cứ li&ecirc;n hệ m&igrave;nh hỗ trợ nh&eacute;<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/R653ba2.jpg" /><br />\r\n<br />\r\nTrọn bộ phụ kiện k&egrave;m theo sản phẩm:<br />\r\n- Pin<br />\r\n- D&acirc;y nguồn v&agrave; sạc adapter<br />\r\n- Đĩa driver windows 10<br />\r\n- Chuột ASUS Gaming SiCa<br />\r\n- D&acirc;y r&uacute;t sạc &amp; Khăn vệ sinh m&agrave;n h&igrave;nh<br />\r\n- Sổ bảo h&agrave;nh v&agrave; giấy tờ kh&aacute;c<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/qpBdqsp.jpg" /><br />\r\n&nbsp;</p>\r\n\r\n<p>Sản phẩm được tặng k&egrave;m theo chuột ASUS ROG SICA (gi&aacute; ~60$). Thiết kế chuột tương đối nhỏ nhắn, vừa tay, ph&ugrave; hợp cho cả người thuận tay phải lẫn tay tr&aacute;i n&ecirc;n kh&ocirc;ng c&oacute; c&aacute;c n&uacute;t chuột phụ b&ecirc;n h&ocirc;ng. Thiết kế n&agrave;y ph&ugrave; hợp cho đối tượng game thủ RPG, FPS hơn l&agrave; MOBA/ARTS v&igrave; &iacute;t n&uacute;t cho việc sử dụng nhanh skills/items</p>\r\n\r\n<p><img alt="" src="http://i.imgur.com/OLpgTZO.jpg" /></p>\r\n\r\n<p><br />\r\n<br />\r\nVỏ ngo&agrave;i của m&aacute;y c&oacute; thiết kế kh&ocirc;ng thay đổi so với GL552JX. Vỏ bằng nhựa cứng c&aacute;p chứ kh&ocirc;ng phải l&agrave; vỏ nh&ocirc;m của GL552VW gi&aacute; tiền cao hơn<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/vVjxXPS.jpg" /><br />\r\n<br />\r\nLogo ASUS ph&aacute;t s&aacute;ng khi bật nguồn<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/Bnn5Sk7.jpg" /><br />\r\n<br />\r\nM&aacute;y đ&atilde; được lược bỏ cổng VGA (D-sub) thay v&agrave;o đ&oacute; l&agrave; cổng USB 3.1 Type C đời mới<br />\r\nNgo&agrave;i ra c&aacute;c cổng kh&aacute;c như jack nguồn, khe tản nhiệt, HDMI, LAN, 2 cổng USB 3.0 vẫn được giữ lại đ&uacute;ng vị tr&iacute; như GL552JX<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/V5qcO0m.jpg" /><br />\r\nKh&ocirc;ng c&oacute; sự thay đổi, vẫn l&agrave; 2 jack audio/micro được t&aacute;ch ri&ecirc;ng biệt, 1 cổng USB 2.0, ổ DVD-RW v&agrave; kh&oacute;a kensington<br />\r\n<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/V1H6QND.jpg" /><br />\r\nPh&iacute;a trước l&agrave; khe cắm thẻ nhớ SD card<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/uerGtNe.jpg" /><br />\r\n<br />\r\nThiết kế b&agrave;n ph&iacute;m kh&ocirc;ng c&oacute; g&igrave; thay đổi. M&aacute;y c&oacute; đ&egrave;n nền m&agrave;u đỏ, c&aacute;c ph&iacute;m ASDW được l&agrave;m nổi bật<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/sL81FWt.jpg" /><br />\r\n<br />\r\n<br />\r\nLogo Core i7 Skylake (l&ocirc; h&agrave;ng đầu c&oacute; nhiều thiếu s&oacute;t do thiếu sự đồng bộ giữa c&aacute;c nh&agrave; sản xuất hoặc c&aacute;c kh&acirc;u sx của ASUS n&ecirc;n logo NVIDIA đ&atilde; bị thiếu, m&aacute;y vẫn c&oacute; card đồ họa rời GTX 950M 4GB GDDR5)<br />\r\nM&aacute;y l&agrave; sản phẩm ch&iacute;nh h&atilde;ng c&oacute; hỗ trợ bảo h&agrave;nh từ xa của ASUS<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/ix8rdSI.jpg" /><br />\r\n<br />\r\nLogo ASUS ROG, m&aacute;y m&agrave;n h&igrave;nh 15.6&quot; inch n&ecirc;n c&oacute; k&egrave;m b&agrave;n ph&iacute;m số<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/qYQ2qan.jpg" /><br />\r\n<br />\r\n<br />\r\nM&aacute;y c&oacute; 2 loa k&eacute;p, hangchinhhieu.vn sẽ cập nhật chất lượng loa của m&aacute;y xem c&oacute; nhiều cải thiện so với sản phẩm tiền nhiệm hay kh&ocirc;ng<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/xoHzNtM.jpg" /><br />\r\n<br />\r\n<br />\r\nThiết kế mặt đ&aacute;y kh&ocirc;ng c&oacute; sự thay đổi, m&aacute;y c&oacute; thể dễ d&agrave;ng n&acirc;ng cấp RAM, SSD bằng th&aacute;o cover ra.<br />\r\nASUS đ&atilde; th&ecirc;m 1 lưu &yacute;: khe M.2 tr&ecirc;n m&aacute;y chỉ lắp được loại SSD SATA M.2 2280 chứ kh&ocirc;ng lắp được loại SSD chuẩn pcie x4 hoặc ssd c&oacute; k&iacute;ch thước kh&aacute;c như 2242 chẳng hạn. C&oacute; thể do 1 số người d&ugrave;ng gl552jx ng&agrave;y trước đ&atilde; ph&agrave;n n&agrave;n họ đ&atilde; mua sai loại SSD khi gắn v&agrave;o m&aacute;y n&ecirc;n ASUS phải note lại thế n&agrave;y</p>\r\n', 'rog, gamming', 19850000, 1, 24, 1, '2016-11-26 02:18:11', '2017-06-02 07:55:42', NULL, NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `intro`, `promo1`, `promo2`, `promo3`, `packet`, `images`, `r_intro`, `review`, `tag`, `price`, `status`, `cat_id`, `user_id`, `created_at`, `updated_at`, `isHome`, `isGroup`) VALUES
(69, 'OPTIPLEX 3046SFF 70086073', 'optiplex-3046sff-70086073', 'Intel Core i3 6100,8G DDR3, intel HD ', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)', 'Dây nguồn, Ốc', '1495351631_avatarfac0000bw0.png', NULL, '<h2>CHI TIẾT T&Iacute;NH NĂNG</h2>\r\n\r\n<h3>Thiết kế cứng c&aacute;p</h3>\r\n\r\n<p>M&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073&nbsp;mang trong m&igrave;nh t&ocirc;ng m&agrave;u đen bắt mắt, rất th&iacute;ch hợp với nhiều kh&ocirc;ng gian l&agrave;m việc. B&ecirc;n cạnh đ&oacute;, thiết kế cứng c&aacute;p c&ugrave;ng với bộ tản nhiệt được lắp đặt rất hợp l&yacute; sẽ tăng độ bền cho m&aacute;y t&iacute;nh.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 thiết kế cứng cáp, độ bền cao" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/dell/may-tinh-de-ban-dell-optiplex-3046sff-70086073-core-i3-2.jpg" /></p>\r\n\r\n<p>M&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073&nbsp;c&oacute;&nbsp;thiết kế cứng c&aacute;p</p>\r\n\r\n<h3>Hiệu năng hoạt động</h3>\r\n\r\n<p>Chip Intel Core-i3 6100 tốc độ cao 3.7GHz được trang bị tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073 c&oacute; hiệu suất hoạt động rất hiệu quả, m&aacute;y t&iacute;nh c&oacute; thể xử l&yacute; hiệu năng đa nhiệm nhanh ch&oacute;ng m&agrave; kh&ocirc;ng bị xảy ra hiện tượng giật.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 trang bị chip Intel Core-i3 6100" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/dell/may-tinh-de-ban-dell-optiplex-3046sff-70086073-core-i3--3.jpg" /></p>\r\n\r\n<p>Xử l&yacute; t&aacute;c vụ nhanh với&nbsp;Intel Core-i3 6100 tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073</p>\r\n\r\n<h3>Ổ đĩa cứng&nbsp;500 GB</h3>\r\n\r\n<p><a href="http://www.nguyenkim.com/may-tinh-de-ban/">M&aacute;y t&iacute;nh b&agrave;n&nbsp;</a>n&agrave;y trang bị ổ đĩa cứng với dung lượng l&ecirc;n đến 500GB, đem đến khả năng lưu trữ dữ liệu lớn, gi&uacute;p bạn c&oacute; thể c&agrave;i đặt ứng dụng, phần mềm m&agrave; kh&ocirc;ng phải lo về t&igrave;nh trạng hết bộ nhớ trống.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 trang bị ổ HDD 500 GB" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/asus/may-tinh-de-ban-asus-k31ad-vn028d-core-i3-4.jpg" /></p>\r\n\r\n<p>M&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073&nbsp;lưu trữ dữ liệu lớn</p>\r\n\r\n<h3>Ổ đĩa quang DVD</h3>\r\n\r\n<p>Bạn cũng c&oacute; thể khai th&aacute;c được sự tiện lợi của đĩa DVD với ổ đĩa quang c&oacute; khả năng đọc v&agrave; ghi t&iacute;ch hợp tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073, hỗ trợ bạn rất nhiều trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 tích hợp ổ đĩa quang tiện lợi" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/dell/may-tinh-de-ban-dell-optiplex-3046sff-70086073-core-i3-5.jpg" /></p>\r\n\r\n<p>Ổ đĩa quang DVD t&iacute;ch hợp tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073</p>\r\n\r\n<h3>L&yacute; do mua h&agrave;ng</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>C&oacute; thể dễ d&agrave;ng n&acirc;ng cấp phần cứng để ph&ugrave; hợp với nhu cầu sử dụng của m&igrave;nh.</p>\r\n	</li>\r\n	<li>\r\n	<p>Chip Intel Core-i3 6100 tốc&nbsp;độ cao c&ugrave;ng RAM 4 GB, gi&uacute;p xử l&yacute; c&aacute;c t&aacute;c vụ nhanh ch&oacute;ng.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>T&iacute;ch hợp ổ đĩa quang DVD cho ph&eacute;p ghi v&agrave; đọc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Ưu đ&atilde;i mua h&agrave;ng</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Để đặt mua&nbsp;m&aacute;y t&iacute;nh b&agrave;n của Dell, bạn c&oacute; thể gọi ngay đến tổng đ&agrave;i&nbsp;<em>1900 1267</em>&nbsp;bấm ph&iacute;m số 1.</p>\r\n	</li>\r\n	<li>\r\n	<p>Bạn cũng c&oacute; thể y&ecirc;u cầu nh&acirc;n vi&ecirc;n Nguyễn Kim gọi lại để tiết kiệm chi ph&iacute; điện thoại.</p>\r\n	</li>\r\n	<li>\r\n	<p>Dịch vụ giao h&agrave;ng tận nơi nhanh ch&oacute;ng, tiện lợi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>TH&Ocirc;NG SỐ KỸ THUẬT</h3>\r\n\r\n<h2>Th&ocirc;ng tin chung</h2>\r\n\r\n<p>Model:</p>\r\n\r\n<p>OPTIPLEX 3046SFF 70086073</p>\r\n\r\n<p>M&agrave;u sắc:</p>\r\n\r\n<p>Đen</p>\r\n\r\n<p>Nh&agrave; sản xuất:</p>\r\n\r\n<p>Dell</p>\r\n\r\n<p>Xuất xứ:</p>\r\n\r\n<p>Trung Quốc</p>\r\n\r\n<p>Thời gian bảo h&agrave;nh:</p>\r\n\r\n<p>12 th&aacute;ng</p>\r\n\r\n<p>Địa điểm bảo h&agrave;nh:</p>\r\n\r\n<p>Nguyễn Kim</p>\r\n\r\n<h2>Bộ vi xử l&yacute; m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>CPU:</p>\r\n\r\n<p>Intel Core-i3</p>\r\n\r\n<p>Loại CPU:</p>\r\n\r\n<p>6100</p>\r\n\r\n<p>Tốc độ CPU:</p>\r\n\r\n<p>3.70 GHz</p>\r\n\r\n<p>Bộ nhớ đệm:</p>\r\n\r\n<p>3 MB Cache</p>\r\n\r\n<p>Tốc độ CPU tối đa:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<h2>Bộ nhớ m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Loại RAM:</p>\r\n\r\n<p>SDRAM DDR3</p>\r\n\r\n<p>Dung lượng RAM:</p>\r\n\r\n<p>4 GB</p>\r\n\r\n<p>Tốc độ Bus:</p>\r\n\r\n<p>1600 MHz</p>\r\n\r\n<h2>Đĩa cứng m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Loại ổ đĩa cứng:</p>\r\n\r\n<p>SATA</p>\r\n\r\n<p>Dung lượng đĩa cứng:</p>\r\n\r\n<p>500 GB</p>\r\n\r\n<h2>Đĩa quang m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>T&iacute;ch hợp ổ đĩa quang:</p>\r\n\r\n<p>C&oacute;</p>\r\n\r\n<p>Loại đĩa quang:</p>\r\n\r\n<p>SuperMulti DVD</p>\r\n\r\n<h2>Đồ họa m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Bộ xử l&yacute; đồ họa:</p>\r\n\r\n<p>Integrated Intel HD Graphics</p>\r\n\r\n<p>Chipset card đồ họa:</p>\r\n\r\n<p>Intel HD</p>\r\n\r\n<p>Dung lượng card đồ họa:</p>\r\n\r\n<p>Share</p>\r\n\r\n<h2>&Acirc;m thanh m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>C&ocirc;ng nghệ &acirc;m thanh:</p>\r\n\r\n<p>High Definition</p>\r\n\r\n<p>Chuẩn &acirc;m thanh:</p>\r\n\r\n<p>High Definition Audio</p>\r\n\r\n<h2>Kết nối m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Cổng kết nối m&agrave;n h&igrave;nh:</p>\r\n\r\n<p>VGA</p>\r\n\r\n<p>Chuẩn WiFi:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<p>Chuẩn LAN:</p>\r\n\r\n<p>10 / 100 Mbps</p>\r\n\r\n<p>Bluetooth:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<p>Cổng USB:</p>\r\n\r\n<p>C&oacute;</p>\r\n\r\n<p>Cổng HDMI:</p>\r\n\r\n<p>Đang cập nhật</p>\r\n\r\n<p>Khe đọc thẻ nhớ:</p>\r\n\r\n<p>Đang cập nhật</p>\r\n\r\n<p>Kết nối kh&aacute;c:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<h2>Hệ điều h&agrave;nh m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>HĐH k&egrave;m theo m&aacute;y:</p>\r\n\r\n<p>Ubuntu</p>\r\n\r\n<h2>K&iacute;ch thước &amp; Khối lượng th&ugrave;ng</h2>\r\n\r\n<p>K&iacute;ch thước th&ugrave;ng:</p>\r\n\r\n<p>290x92x292 mm</p>\r\n\r\n<p>Khối lượng th&ugrave;ng (kg):</p>\r\n\r\n<p>6.1 kg</p>\r\n', 'OPTIPLEX 3046SFF 70086073', 21890000, 1, 20, 1, '2016-11-28 18:10:44', '2016-11-28 18:21:42', NULL, NULL),
(71, 'SGEH51P1-', 'sgeh51p1', '', 'Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '', '', ' Trả góp 0%', '1495351631_avatarfac0000bw0.png', '', '<p style="text-align:center"><a href="https://www.xwatch.vn/blog/bao-hiem-dong-ho-tieu-chuan-thuy-si-p2724.html" rel="noopener noreferrer" target="_blank"><img alt="chính sách bảo hành Xwatch" class="alignnone size-full wp-image-36297" src="//www.cdn.xwatch.vn/wp-content/uploads/2016/12/xw-banner-csbh.png" style="max-width:1177px; width:1200px" /></a> <img alt="chứng nhận đại lý Seiko" class="alignnone size-full wp-image-36358" src="//www.cdn.xwatch.vn/wp-content/uploads/2016/12/xw-banner-giay-chung-nhan-seiko-chinh-hang.jpg" style="max-width:1177px; width:1200px" /><img alt="" class="alignnone size-full wp-image-33822" src="//www.cdn.xwatch.vn/wp-content/uploads/2017/04/xw-doi-ngu-ki-thuat.png" style="max-width:1177px; width:1200px" /> <a href="https://www.xwatch.vn/lien-he" rel="noopener noreferrer" target="_blank"><img alt="hệ thống cửa hàng xwatch" class="alignnone size-full wp-image-34096" src="//www.cdn.xwatch.vn/wp-content/uploads/2017/04/xw-banner-he-thong-cua-hang.png" style="max-width:1177px; width:1200px" /></a><img alt="" class="alignnone size-full wp-image-32678" src="//www.cdn.xwatch.vn/wp-content/uploads/2016/12/phụ-kiện-của-Seiko.jpg" style="max-width:1177px; width:1099px" /></p>\r\n', '', 5123900, 1, 4, 1, '2017-05-21 00:27:11', '2017-06-05 16:44:51', 1, 1),
(73, 'Đồng hồ TS1', 'dong-ho-ts1', NULL, 'Không có', '', '', 'Không có', '1496392203_1495249390_avatarefr-526d-7avudf.png', NULL, '<p>Đồng hồ Thụy Sĩ TS1</p>\r\n', '', 1000000, 1, 26, 1, '2017-05-28 00:27:20', '2017-05-28 00:27:20', NULL, NULL),
(99, 'San pham 001', 'san-pham-001', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '', '', '', '', '1496393446_1495351096_avatarfac0000bw0.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '', '', 12345, 1, 15, 1, '2017-05-30 03:16:07', '2017-06-05 03:14:50', NULL, NULL),
(101, 'Đồng hồ Nei', 'dong-ho-nei', 'https://www.youtube.com/watch?v=RK6YUrMsP70', 'Đủ hộp sản phẩm', '', '', 'Không khuyến mãi', '1496624498_1495293254_avatarop995.6agsk-t.png', 'https://www.youtube.com/watch?v=RK6YUrMsP70', '<p>Chi tiet</p>\r\n', '', 6555000, 0, 16, 1, '2017-06-04 18:01:38', '2017-06-05 03:29:40', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pro_details`
--

CREATE TABLE `pro_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `w_group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_branch` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_sex` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_out` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_in` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_on` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_time_base` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_water` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w_other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pro_details`
--

INSERT INTO `pro_details` (`id`, `w_group`, `w_branch`, `w_country`, `w_role`, `w_type`, `w_sex`, `w_size`, `w_out`, `w_in`, `w_on`, `w_time_base`, `w_time`, `w_water`, `w_other`, `note`, `pro_id`, `created_at`, `updated_at`) VALUES
(9, 'Đồng hồ', '15', 'Thụy Sĩ', '11A', '1', '0', '100', 'Kính Khoáng', '1', 'Kính Shaphire', '1', '3', '100 m', 'Không', 'Không có', 22, '2016-11-24 09:39:13', '2017-05-21 00:57:46'),
(10, 'Đồng hồ Casio', '16', 'Japan', '11A', '2', '1', '100', 'Kính Khoáng', '2', 'Kính Shaphire', '2', '4', '100 m', 'Không', 'Không có', 23, '2016-11-24 09:39:28', '2017-05-21 01:48:35'),
(11, 'Đồng hồ', '17', 'Thụy Sĩ', '11A', '3', '0', '100', 'Kính Khoáng', '3', 'Kính Shaphire', '3', '5', '100 m', 'Không', 'Không có', 24, '2016-11-24 18:48:39', '2017-05-20 08:30:35'),
(12, 'Đồng hồ', '19', 'Nhật Bản', '11A', '4', '2', '100', 'Kính Khoáng', '1', 'Kính Shaphire', '4', '3', '100 m', 'Không', 'Không có', 25, '2016-11-24 18:48:46', '2017-05-20 02:28:21'),
(13, 'Đồng hồ', '20', 'Nhật Bản', 'adreno900', '1', '1', '100', 'Kính Khoáng', '2', 'Kính Shaphire', '2', '5', '100 m', 'Không', 'Không có', 26, '2016-11-25 23:44:07', '2017-05-20 02:28:43'),
(14, 'Đồng hồ', '21', 'Thụy Sĩ', '43.8 mm', '2', '0', '100', 'Kính Khoáng', '3', 'Kính Shaphire', '5', '5', '100 m', 'Không', 'Không có', 27, '2016-11-25 23:44:11', '2017-05-20 08:14:14'),
(15, 'Đồng hồ', '21', 'Đài loan', '11A', '1', '1', '100', 'Kính Khoáng', '1', 'Kính Shaphire', '5', '3', '100 m', 'Không', 'Không có', 28, '2016-11-25 23:44:15', '2017-05-21 01:51:12'),
(21, 'Đồng hồ Casio', '24', 'Thụy Sĩ', '43.8 mm', '2', '1', '100', 'Kính Khoáng', '2', 'Kính Shaphire', '5', '5', '100 m', 'Không', 'Không có', 34, '2016-11-25 23:45:03', '2017-05-20 02:30:17'),
(22, 'Đồng hồ', '16', 'Thụy Sĩ', 'adreno900', '3', '2', '100', 'Kính Khoáng', '3', 'Kính Shaphire', '3', '3', '100 m', 'Không', 'Không có', 35, '2016-11-25 23:45:08', '2017-05-20 08:15:09'),
(29, 'Đồng hồ', '25', 'Nhật Bản', '11A', '2', '1', '100', 'Kính Khoáng', '1', 'Kính Shaphire', '4', '3', '100 m', 'Không', 'Không có', 42, '2016-11-26 02:13:19', '2016-11-26 02:13:19'),
(32, 'Đồng hồ', '24', 'Nhật Bản', 'SVC', '3', '0', '100', 'Thép không gỉ 316L', '1', 'Kính Shaphire', '5', '4', '100 m', 'Không', 'Không có', 45, '2016-11-26 02:13:31', '2016-11-26 02:13:31'),
(34, 'Đồng hồ', '15', 'Đài loan', 'SVC', '1', '2', '100', 'Thép không gỉ 316L', '1', 'Kính Shaphire', '3', '3', '100 m', 'Không', 'Không có', 47, '2016-11-26 02:13:53', '2016-11-26 02:13:53'),
(37, 'Đồng hồ', '16', 'Đài loan', 'SVC', '4', '0', '100', 'Thép không gỉ 316L', '2', 'Kính Shaphire', '2', '2', '100 m', 'Không', 'Không có', 50, '2016-11-26 02:14:03', '2016-11-26 02:14:03'),
(40, 'Đồng hồ', '17', 'Đài loan', 'SVC', '3', '0', '100', 'Thép không gỉ 316L', '3', 'Kính Shaphire', '4', '5', '100 m', 'Không', 'Không có', 53, '2016-11-26 02:18:11', '2017-06-02 07:55:42'),
(52, 'Đồng hồ nam', '16', 'Nhật Bản', '11A', '2', '1', '40 mm', 'Thép không gỉ 316L', '3', 'Kính Shaphire', '4', '2', '100 m', 'Không', 'Không có', 69, '2016-11-28 18:10:45', '2016-11-28 18:21:42'),
(53, 'Đồng hồ Thụy Sĩ', '4', 'Nhật Bản', '11A', '2', '1', '40 mm', 'Thép không gỉ 316L', '1', 'Kính Shaphire', '4', '2', '100 m', 'Không', 'Không có', 71, '2017-05-21 00:27:11', '2017-06-05 16:44:51'),
(55, 'Đồng hồ Thụy Sĩ', '16', 'Thụy Sĩ', 'SVC', '4', '2', '100', 'Thép không gỉ 316L', '2', 'Kính Shaphire', '3', '2', '100 m', 'Không', 'Không có', 73, '2017-05-28 00:27:20', '2017-05-28 00:27:20'),
(81, 'Đồng hồ', '15', 'Thụy Sĩ', 'SVC', '2', '0', '100', 'Thép không gỉ 316L', '3', 'Kính Shaphire', '5', '2', '100 m', 'Không', 'Không có', 99, '2017-05-30 03:16:07', '2017-06-05 03:14:50'),
(83, 'Đồng hồ khác', '19', 'Đài loan', 'SVC', '1', '0', '100', 'Thép không gỉ 316L', '1', 'Kính cường lực', '5', '1', '100 m', 'Không', 'Không có', 101, '2017-06-04 18:01:38', '2017-06-05 03:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'logo', '1496757537_logo.png', '2017-06-06 03:11:33', '2017-06-06 06:58:57'),
(3, 'diachi', 'Hotline tư vấn bán hàng: 19000325\nHotline kỹ thuật: HN: 0963.359.529 HCM: 0888.678.666\nEmail: cskh.watches@gmail.com', '2017-06-06 07:35:56', '2017-06-06 07:35:56'),
(4, 'welcome', 'Chào mừng đến với hệ thống đồng hồ chính hãng Xwatch!', '2017-06-06 07:56:01', '2017-06-06 08:06:42'),
(5, 'copyright', 'Công Ty Cổ Phần Watches / Địa chỉ: TP. HN / GPĐKKD số: Website đang thử nghiệm.', '2017-06-06 08:00:56', '2017-06-06 08:07:09'),
(6, 'logopay', '1496761857_pay.png', '2017-06-06 08:10:57', '2017-06-06 08:10:57'),
(7, 'social', '<p>&lt;li class=&quot;footer-social-fb&quot;&gt;&lt;a href=&quot;&quot; class=&quot;&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li class=&quot;footer-social-tw&quot;&gt;&lt;a href=&quot;&quot; class=&quot;&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li class=&quot;footer-social-yt&quot;&gt;&lt;a href=&quot;&quot; class=&quot;&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot;&gt;&lt;i class=&quot;fa fa-youtube&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li class=&quot;footer-social-gg&quot;&gt;&lt;a href=&quot;&quot; class=&quot;&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot;&gt;&lt;i class=&quot;fa fa-google-plus&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;</p>\n', '2017-06-06 08:19:16', '2017-06-06 08:43:25'),
(8, 'footerLink', '<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">\r\n    <h3>GIỚI THIỆU CÔNG TY</h3>\r\n    <ul class="list-intro">\r\n      <li><a href="">Triết lý kinh doanh: Chữ tâm hàng đầu</a></li>\r\n      <li><a href="">Câu chuyện về  Watches</a></li>\r\n      <li><a href="">Giải đáp mọi thắc mắc về đồng hồ chính hãng</a></li>\r\n    </ul>\r\n  </div>\r\n  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">\r\n    <h3>CHÍNH SÁCH</h3>\r\n    <ul class="list-intro">\r\n      <li><a href="">Chính sách bảo mật</a></li>\r\n      <li><a href="">Điều khoản và điều kiện</a></li>\r\n      <li><a href="">Hướng dẫn mua hàng</a></li>\r\n      <li><a href="">Chính sách đổi trả hàng</a></li>\r\n      <li><a href="">Chính sách bảo hành</a></li>\r\n    </ul>\r\n  </div>\r\n  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">\r\n    <h3>BỘ SƯU TẬP</h3>\r\n    <ul class="list-intro">\r\n      <li><a href="">Đàn ông muốn sở hữu nhất</a></li>\r\n      <li><a href="">Phụ nữ khao khát nhất</a></li>\r\n      <li><a href="">Đồng hồ bán chạy nhất</a></li>\r\n      <li><a href="">Bộ sưu tập đặc biệt</a></li>\r\n      <li><a href="">Sản phẩm mới nhất</a></li>\r\n    </ul>\r\n  </div>', '2017-06-06 08:28:40', '2017-06-06 08:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Slider 1', '1496756342_bn1.png', '#', '2017-06-06 06:39:02', '2017-06-06 06:39:02'),
(2, 'Slider 2', '1496756395_bn2.jpg', '#', '2017-06-06 06:39:55', '2017-06-06 06:39:55'),
(3, 'Slider 3', '1496756408_bn3.jpg', '#', '2017-06-06 06:40:08', '2017-06-06 06:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@gmail.com', '$2y$10$TEY9mtHYRJ4G9oW.6n9D9.5.eHfae7I1po7iNVE8cNMsEORxtzv0m', '0868896944', 'Ho chi minh', 1, 'jFFpU4F9xl8TLtjS6DPBiI8qWugcLLXQWMtRSWx9UtBoB3TrjGpx66X8xMMh', '2016-11-23 20:44:11', '2016-12-17 02:55:05'),
(3, 'ToanLM', 'toan@gmail.com', '$2y$10$HOZtAN04wNNIDSUbViW/DOgIFjuS.syxauLnTeGvAVIRUA4ycassG', '0912923823', 'ha noi viet nam', 1, NULL, '2017-05-16 21:39:57', '2017-05-16 21:39:57'),
(4, 'Toi la ai', 'Toi la ai@email.info', '$2y$10$u.9J6qckuUgmK.5esizzi.XX9fx5i18XfME/e2fclAGkTnWZIlk8S', '0912121212', 'Ha Tinh', 0, NULL, '2017-05-28 01:34:09', NULL),
(5, 'new customer', 'new customer@email.guest', '$2y$10$oN9ucO6uBDln25ZqSn3oGOwyE57wZcsTyudCOpqwhqGMASdaAs6Ma', '091211223', 'Ha Noi - VN', 1, NULL, '2017-05-28 01:54:10', '2017-06-05 03:45:42'),
(6, '242', '242@email.guest', '$2y$10$3BIal4RW0QeZepGuxTurtOXS4vpqnxVS1yKpcCFnqE6b335js1o2W', '2232232', '323232', 0, NULL, '2017-05-28 21:59:36', NULL),
(7, 'toanlm', 'toanlm@gmail.com', '$2y$10$KEI3crGkGsytkvmmm/9N7uqb1/InJHkKHX4Q0qnegzES/z.ZboLE2', '121212122', '121212', 1, NULL, '2017-05-28 22:00:15', '2017-05-28 22:00:15'),
(8, 'toan', 'toan@email.guest', '$2y$10$GI7P6Nd8x1.lKlgrXu/E3ut1R4VRRkEGD.AdAbTnWlI5w1jAlWanq', 'toan', '1212121', 1, NULL, '2017-05-29 03:42:55', '2017-06-05 03:56:48'),
(9, 'toia', 'toia@email.guest', '$2y$10$z2eAsD0gnbaZS7JgJ.n2yuozCJ2msCDrZw0zrSNEuGnD9tD66o4b6', '12121212', '1212123', 0, NULL, '2017-06-02 07:23:14', NULL),
(10, 'le manh toan', 'toanvn@gmail.com', '$2y$10$XRiAzlRp5rDk5R5mgzTTYuZhH7jNQ0A/cncKas7Gz1d3OhtV6TmZK', '12323234', 'hn bn', 1, 'U2uC7LaE425bJ2aTm3icwwXU9Dy9I3etJiNoVcgIpWjrK5lYEc7W8X77iDNr', '2017-06-02 07:24:59', '2017-06-02 07:29:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `advs`
--
ALTER TABLE `advs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_user_id_foreign` (`user_id`);

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_img`
--
ALTER TABLE `detail_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_img_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `group_watch`
--
ALTER TABLE `group_watch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kieuday`
--
ALTER TABLE `kieuday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kieumay`
--
ALTER TABLE `kieumay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_cat_id_foreign` (`cat_id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oders_c_id_foreign` (`c_id`);

--
-- Indexes for table `oders_detail`
--
ALTER TABLE `oders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oders_detail_pro_id_foreign` (`pro_id`),
  ADD KEY `oders_detail_o_id_foreign` (`o_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `pro_details`
--
ALTER TABLE `pro_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_details_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `advs`
--
ALTER TABLE `advs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `detail_img`
--
ALTER TABLE `detail_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `group_watch`
--
ALTER TABLE `group_watch`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kieuday`
--
ALTER TABLE `kieuday`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kieumay`
--
ALTER TABLE `kieumay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `oders_detail`
--
ALTER TABLE `oders_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `pro_details`
--
ALTER TABLE `pro_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detail_img`
--
ALTER TABLE `detail_img`
  ADD CONSTRAINT `detail_img_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oders_detail`
--
ALTER TABLE `oders_detail`
  ADD CONSTRAINT `oders_detail_o_id_foreign` FOREIGN KEY (`o_id`) REFERENCES `oders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `oders_detail_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pro_details`
--
ALTER TABLE `pro_details`
  ADD CONSTRAINT `pro_details_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
