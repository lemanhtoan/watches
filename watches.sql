-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2017 at 11:05 PM
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
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advs`
--

INSERT INTO `advs` (`type`, `id`, `url`, `image`, `status`, `created_at`, `updated_at`) VALUES
('0', 1, '#', '1496813894_bn3.jpg', 1, '2017-06-06 22:38:14', '2017-06-06 22:38:14'),
('1', 2, '#', '1496813959_banner-web-xwatch-01.png', 1, '2017-06-06 22:39:19', '2017-06-06 22:39:19'),
('1', 3, '#', '1496813969_banner-web-xwatch-02.png', 1, '2017-06-06 22:39:29', '2017-06-06 22:39:29'),
('2', 4, '#', '1497020580_bn3.jpg', 1, '2017-06-09 08:03:00', '2017-06-09 08:03:00'),
('2', 5, '#', '1497020592_bn2.jpg', 1, '2017-06-09 08:03:12', '2017-06-09 08:03:12');

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
(16, 'Olym Pianus', 'olym-pianus', '0', '2016-11-25 02:00:27', '2017-06-05 15:54:57', '1496625743_banner-olympianus.png'),
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
(39, '1496657690_1495293279_avatarop990-141ams-d.png', 42, '2016-11-26 02:13:19', '2016-11-26 02:13:19'),
(42, '1496657690_1495293279_avatarop990-141ams-d.png', 45, '2016-11-26 02:13:31', '2016-11-26 02:13:31'),
(44, '1495335365_Avatar_SER0200HW-1.png', 47, '2016-11-26 02:13:53', '2016-11-26 02:13:53'),
(47, '1496657690_1495293279_avatarop990-141ams-d.png', 50, '2016-11-26 02:14:03', '2016-11-26 02:14:03'),
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
-- Table structure for table `groupnews`
--

CREATE TABLE `groupnews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groupnews`
--

INSERT INTO `groupnews` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Thẩm định đồng hồ', 1, '2017-06-08 21:54:55', '2017-06-08 21:56:26'),
(2, 'Kiến thức đồng hồ', 1, '2017-06-08 21:55:03', '2017-06-08 21:55:03'),
(3, 'Kinh nghiệm mua hàng', 1, '2017-06-08 21:55:10', '2017-06-08 21:55:10'),
(4, 'Chính sách bảo hành', 1, '2017-06-08 21:55:16', '2017-06-08 21:55:16'),
(5, 'Giới thiệu Watches', 1, '2017-06-08 21:55:24', '2017-06-08 21:55:24'),
(6, 'Kiến thức chuyên ngành', 1, '2017-06-08 21:55:29', '2017-06-08 21:55:29');

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

--
-- Dumping data for table `group_watch`
--

INSERT INTO `group_watch` (`id`, `name`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ nam', '#', '1496814679_dong-ho-nam-trang-chu.jpg', 1, '2017-06-06 22:51:19', '2017-06-06 22:51:19'),
(2, 'Đồng hồ nữ', '#', '1496814694_banner-dong-ho-nu.jpg', 1, '2017-06-06 22:51:34', '2017-06-06 22:51:34'),
(3, 'Đồng hồ đôi', '#', '1496814715_Dong-ho-doi.jpg', 1, '2017-06-06 22:51:55', '2017-06-06 22:51:55'),
(4, 'Đồng hồ cơ', '#', '1496814731_BST-dong-ho-co.jpg', 1, '2017-06-06 22:52:11', '2017-06-06 22:52:11');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `author`, `intro`, `full`, `images`, `tag`, `status`, `source`, `cat_id`, `user_id`, `created_at`, `updated_at`, `group`) VALUES
(1, 'khuyễn mại mùa mua sắm cuối năm 2017', 'khuyen-mai-mua-mua-sam-cuoi-nam-2017', 'admin', '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u', '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u thị Megaplaza | Vui vẻ Mua sắm - Tiết kiệm chi ti&ecirc;u.</p>\r\n', '1496414453_1495294235_avatarop990-141ams-d.png', 'khuyễn mại', 1, 'Google Product Forum​', 1, 1, '2017-06-08 20:39:16', '2017-06-08 20:39:16', '4'),
(2, 'Google phải khâm phục Samsung về khả năng tối ưu hóa Android 7.0', 'google-phai-kham-phuc-samsung-ve-kha-nang-toi-uu-hoa-android-70', 'admin', '<p>Google đ&atilde; tham gia v&agrave;o cuộc dua smartphone với Google Pixel được ra mắt v&agrave;o v&agrave;i th&aacute;ng trước. Mới đ&acirc;y, một Youtuber đ&atilde; c&oacute; cuộc thử nghiệm tốc độ giữa Google Pixel XL v&agrave; Galaxy S7. Để xem kết&', '<p>Một Youtuber c&oacute; t&ecirc;n XEETECHCARE đ&atilde; c&oacute; 1 cuộc thử nghiệm nhỏ nhằm so s&aacute;nh tốc độ của 2 chiếc smartphone Android cao cấp nhất hiện tại đ&oacute; l&agrave; Google Pixel XL v&agrave; Galaxy S7 tr&ecirc;n nền tảng Android 7.0 Nougat. Cuộc thử nghiệm n&agrave;y bao gồm c&aacute;c phần test về tốc độ mở của c&aacute;c ứng dụng cũng như tr&ograve; chơi. T&ograve; m&ograve; kết quả ra sao qu&aacute; nhỉ.</p>\r\n\r\n<p>Như đ&atilde; thấy, 2 chiếc điện thoại n&agrave;y kh&aacute; c&acirc;n t&agrave;i c&acirc;n sức. Google Pixel XL hơn Galaxy S7 ở 1 số dụng v&agrave; ngược lại. Tuy nhi&ecirc;n, nh&igrave;n chung th&igrave; Galaxy S7 vẫn vượt trội hơn so với ch&iacute;nh đứa con của Google. D&ugrave; c&oacute; lợi thế được sử dụng hệ sinh th&aacute;i Android gốc v&agrave; chip Snapdragon 821 nhưng về độ mượt tr&ecirc;n Android 7.0 th&igrave; c&oacute; lẽ Google phải thua Samsung về 1 bậc.</p>\r\n', '1496414442_avatarefr-526d-7avudf.png', 'iOS 10.1.1 , Pin', 1, 'Vietnam', 1, 1, '2017-06-08 20:39:34', '2017-06-08 20:39:34', '2'),
(3, 'iOS 10.1.1 mới ra mắt', 'ios-1011-moi-ra-mat', 'admin', '<p>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật iOS 10.1.1, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</p>\r\n', '<h2>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật&nbsp;<a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=iOS+10.1.1" target="_blank" title="iOS 10.1.1" type="iOS 10.1.1">iOS 10.1.1</a>, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</h2>\r\n\r\n<p>Cụ thể ng&agrave;y c&agrave;ng c&oacute; nhiều c&aacute;c b&aacute;o c&aacute;o về vấn đề iOS 10.1.1 ngốn pin nhanh hơn so với c&aacute;c phi&ecirc;n bản trước. Một số thiết bị khi c&ograve;n khoảng 30% pin sẽ đột ngột tắt nguồn, sau khi cắm bộ sạc v&agrave;o v&agrave;i gi&acirc;y th&igrave; m&agrave;n h&igrave;nh sẽ hiển thị lại dung lượng pin 30% trước đ&oacute;, th&ocirc;ng tin được&nbsp;<a href="http://www.phonearena.com/news/iOS-10.1.1-reported-to-drain-users-batteries_id88354" rel="nofollow" target="_blank" title="phonearena" type="phonearena">phonearena</a>&nbsp;đăng tải.</p>\r\n\r\n<p>Người d&ugrave;ng kh&aacute;c c&ograve;n gặp vấn đề nghi&ecirc;m trọng hơn, khi iPhone của họ bị giảm hơn 80% pin trong một đ&ecirc;m, v&agrave; ho&agrave;n to&agrave;n tắt nguồn v&agrave;o s&aacute;ng h&ocirc;m sau, khi cắm sạc v&agrave;o th&igrave; lại hiển thị ở mức 30% pin.</p>\r\n\r\n<p>Hiện lỗi n&agrave;y chỉ xuất hiện ở một số người d&ugrave;ng nhất định, v&igrave; vậy Apple vẫn chưa thừa nhận đ&acirc;y l&agrave; vấn đề g&acirc;y ra bởi iOS 10.1.1. Hy vọng nh&agrave; t&aacute;o sẽ t&igrave;m ra nguy&ecirc;n nh&acirc;n vấn đề v&agrave; sớm khắc phục.</p>\r\n\r\n<p>Cũng nhắc lại đ&ocirc;i ch&uacute;t về iOS 10.1.1, trong bản n&acirc;ng cấp n&agrave;y Apple tập trung cải thiện t&iacute;nh năng chăm s&oacute;c sức khỏe v&agrave; sửa lỗi c&aacute;c ứng dụng kh&ocirc;ng thể tiếp cận dữ liệu từ điện thoại để thống k&ecirc; cho người d&ugrave;ng. Ngo&agrave;i ra, kh&ocirc;ng c&oacute; bất kỳ t&iacute;nh năng mới n&agrave;o được th&ecirc;m v&agrave;o.</p>\r\n', '1496414426_1495355717_EFR-543BK-1A2VUDF_1.jpg', 'iOS 10.1.1 , Pin', 1, 'thegoididong.com', 1, 1, '2017-06-08 20:39:41', '2017-06-08 20:39:41', '3'),
(4, 'iOS 10.1.1 đang gặp vấn đề nghiêm trọng về pin?', 'ios-1011-dang-gap-van-de-nghiem-trong-ve-pin', 'admin', '<p>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật iOS 10.1.1, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</p>\r\n', '<h2>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật&nbsp;<a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=iOS+10.1.1" target="_blank" title="iOS 10.1.1" type="iOS 10.1.1">iOS 10.1.1</a>, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</h2>\r\n\r\n<p>Cụ thể ng&agrave;y c&agrave;ng c&oacute; nhiều c&aacute;c b&aacute;o c&aacute;o về vấn đề iOS 10.1.1 ngốn pin nhanh hơn so với c&aacute;c phi&ecirc;n bản trước. Một số thiết bị khi c&ograve;n khoảng 30% pin sẽ đột ngột tắt nguồn, sau khi cắm bộ sạc v&agrave;o v&agrave;i gi&acirc;y th&igrave; m&agrave;n h&igrave;nh sẽ hiển thị lại dung lượng pin 30% trước đ&oacute;, th&ocirc;ng tin được&nbsp;<a href="http://www.phonearena.com/news/iOS-10.1.1-reported-to-drain-users-batteries_id88354" rel="nofollow" target="_blank" title="phonearena" type="phonearena">phonearena</a>&nbsp;đăng tải.</p>\r\n\r\n<p>Người d&ugrave;ng kh&aacute;c c&ograve;n gặp vấn đề nghi&ecirc;m trọng hơn, khi iPhone của họ bị giảm hơn 80% pin trong một đ&ecirc;m, v&agrave; ho&agrave;n to&agrave;n tắt nguồn v&agrave;o s&aacute;ng h&ocirc;m sau, khi cắm sạc v&agrave;o th&igrave; lại hiển thị ở mức 30% pin.</p>\r\n\r\n<p>Hiện lỗi n&agrave;y chỉ xuất hiện ở một số người d&ugrave;ng nhất định, v&igrave; vậy Apple vẫn chưa thừa nhận đ&acirc;y l&agrave; vấn đề g&acirc;y ra bởi iOS 10.1.1. Hy vọng nh&agrave; t&aacute;o sẽ t&igrave;m ra nguy&ecirc;n nh&acirc;n vấn đề v&agrave; sớm khắc phục.</p>\r\n\r\n<p>Cũng nhắc lại đ&ocirc;i ch&uacute;t về iOS 10.1.1, trong bản n&acirc;ng cấp n&agrave;y Apple tập trung cải thiện t&iacute;nh năng chăm s&oacute;c sức khỏe v&agrave; sửa lỗi c&aacute;c ứng dụng kh&ocirc;ng thể tiếp cận dữ liệu từ điện thoại để thống k&ecirc; cho người d&ugrave;ng. Ngo&agrave;i ra, kh&ocirc;ng c&oacute; bất kỳ t&iacute;nh năng mới n&agrave;o được th&ecirc;m v&agrave;o.</p>\r\n', '1496414417_1495272480_Avatar_SER0200HW-1.png', 'iOS 10.1.1 , Pin', 1, 'thegoididong.com', 1, 1, '2017-06-08 20:39:47', '2017-06-08 20:39:47', '3'),
(5, 'iPhone SE đổi trả thiết kế thanh lịch', 'iphone-se-doi-tra-thiet-ke-thanh-lich', 'admin', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>\r\n', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n', '1496414405_1495272523_avatarfac0000bw0.png', 'Galaxy S7, Galaxy S7,Galaxy S7', 1, 'Google Product Forum​', 1, 1, '2017-06-08 20:39:54', '2017-06-08 20:39:54', '6'),
(6, 'iPhone SE đổi trả thiết kế thanh lịch, mạnh ', 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh', 'admin', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>\r\n', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n', '1496414396_avatarefr-526d-7avudf.png', 'Galaxy S7, Galaxy S7,Galaxy S7', 1, 'Google Product Forum​', 1, 1, '2017-06-08 20:40:00', '2017-06-08 20:40:00', '5'),
(7, 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone', 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone', 'admin', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>\r\n', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n', '1496414386_1496134995_g-8900sc-1rdravar.png', 'Galaxy S7, Galaxy S7,Galaxy S7', 1, 'Google Product Forum​', 1, 1, '2017-06-08 20:40:06', '2017-06-08 20:40:06', '4'),
(8, 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 ', 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone-6s-con-duoi-7', 'admin', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>\r\n', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n', '1496414375_1495249390_avatarefr-526d-7avudf.png', 'bla ble', 1, 'Google Product Forum​', 1, 1, '2017-06-08 20:40:12', '2017-06-08 20:40:12', '3'),
(9, 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu ', 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone-6s-con-duoi-7-trieu', 'admin', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>\r\n', '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n\r\n<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>\r\n', '1496414362_1495293254_avatarop995.6agsk-t.png', 'Galaxy S7, Galaxy S7,Galaxy S7', 1, 'Google Product Forum​', 1, 1, '2017-06-08 20:40:20', '2017-06-08 20:40:20', '2'),
(10, 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 ', 'diem-tin-hot-2311-mau-iphone-se-2017', 'admin', '<p>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất.</p>\r\n', '<h2>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất. Ngo&agrave;i ra, cư d&acirc;n mạng đang truyền tay nhau 1 clip 5 gi&acirc;y khiến nhiều chiếc iPhone trở th&agrave;nh cục gạch 1 c&aacute;ch nhẹ nh&agrave;ng.</h2>\r\n\r\n<h3><strong>1.&nbsp;Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</strong></h3>\r\n\r\n<p>Mới đ&acirc;y, nh&agrave; thiết kế nhỏ tuổi Đạt Nobita tiếp tục đến với mẫu thiết kế iPhone SE 2017 m&agrave; theo m&igrave;nh l&agrave; &ldquo;đẹp kh&ocirc;ng tỳ vết&rdquo;. iPhone SE 2017 trong mẫu thiết kế n&agrave;y c&oacute; khung viền phẳng, rất mạnh mẽ trong khi mặt trước v&agrave; sau được phủ k&iacute;nh cường lực. C&oacute; vẻ như những th&ocirc;ng tin cho rằng năm sau iPhone sẽ sử dụng lại kiểu thiết kế tr&ecirc;n iPhone 4/4s đ&atilde; ảnh hưởng tới mẫu concept n&agrave;y.</p>\r\n\r\n<p><img alt="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" src="https://cdn3.tgdd.vn/Files/2016/11/22/917054/se1_1280x720.jpg" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" /></p>\r\n\r\n<p>Chưa hết, concept iPhone SE 2017 c&ograve;n ấn tượng bởi viền cạnh m&agrave;n h&igrave;nh si&ecirc;u mỏng, cạnh tr&ecirc;n cũng rất hẹp, t&iacute;ch hợp camera trước gọn nhỏ, tinh tế. Lần n&agrave;y, m&aacute;y kh&ocirc;ng c&oacute; n&uacute;t nguồn cạnh tr&ecirc;n m&agrave; l&agrave; ở cạnh phải để tiện lợi cho người d&ugrave;ng bởi m&agrave;n h&igrave;nh của m&aacute;y đ&atilde; lớn hơn.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/neu-iphone-se-2017-dep-the-nay-thi-iphone-7-cung-se-e-hang-917054" target="_blank" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi">Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</a></p>\r\n\r\n<h3><strong>2.&nbsp;Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</strong></h3>\r\n\r\n<p><img alt="" src="https://www.thegioididong.com/tin-tuc/mau-iphone-se-2017-dep-nao-long-doan-video-5-giay-917408" /></p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/canh-bao-doan-video-5-giay-khien-may-iphone-tro-thanh-cuc-gach-917063" target="_blank" title="Cảnh báo: Đoạn video 5 giây khiến máy iPhone trở thành cục gạch">Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</a></p>\r\n\r\n<h3><strong>3.&nbsp;Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</strong></h3>\r\n\r\n<p>Trang c&ocirc;ng nghệ th&acirc;n cận với Samsung &ndash;&nbsp;<a href="http://www.sammobile.com/2016/11/23/first-images-of-the-glossy-black-galaxy-s7-edge-surface-online/" rel="nofollow" target="_blank" title="Galaxy S7 Edge" type="Galaxy S7 Edge">Sammobile</a>&nbsp;l&agrave; nguồn tin mang đến cho ch&uacute;ng ta những h&igrave;nh ảnh n&agrave;y. Trong bộ ảnh dưới đ&acirc;y, c&aacute;c bạn c&oacute; thể thấy rằng Galaxy S7 Edge xuất hiện với m&agrave;u đen b&oacute;ng bẩy hơn so với m&agrave;u Black Onyx trước đ&oacute;.</p>\r\n\r\n<p><img alt="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" src="https://cdn.tgdd.vn/Files/2016/11/23/917387/s7-edge-glossy-black-7_690x690.jpg" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" /></p>\r\n\r\n<p>Đặc biệt, bộ ảnh n&agrave;y cũng rất sắc n&eacute;t v&agrave; chi tiết, kh&ocirc;ng c&oacute; vẻ g&igrave; l&agrave; đang chụp l&eacute;n cả, v&igrave; vậy c&oacute; thể n&oacute;i rằng Samsung đ&atilde; sẵn s&agrave;ng để tung phi&ecirc;n bản m&agrave;u sắc mới n&agrave;y cho dịp cuối năm để những ai th&iacute;ch m&agrave;u đen b&oacute;ng c&oacute; th&ecirc;m lựa chọn hấp dẫn.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/galaxy-s7-edge-glossy-black-bong-dung-xuat-hien-917387" target="_blank" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có người anh em">Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</a></p>\r\n\r\n<h3><strong>4.&nbsp;3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</strong></h3>\r\n\r\n<p><img alt="Apple iPhone SE" src="https://cdn3.tgdd.vn/Files/2016/11/22/917091/iphone-se_800x450.jpg" title="Apple iPhone SE" /></p>\r\n\r\n<p>Bắt đầu rồi đ&oacute; c&aacute;c bạn ạ, m&ugrave;a mua sắm cuối năm đang nhộn nhịp hẳn l&ecirc;n. Thị trường di động kh&ocirc;ng chỉ xuất hiện c&aacute;c mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Đặt mua smartphone tại Thegioididong.com" type="Đặt mua smartphone tại Thegioididong.com">smartphone</a>&nbsp;mới thời thượng, m&agrave; b&ecirc;n cạnh đ&oacute;, những mẫu m&aacute;y được b&aacute;n ra trước đ&oacute; cũng ồ ạt giảm gi&aacute; để h&uacute;t kh&aacute;ch.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/top-3-smartphone-co-gia-giam-lam-nao-long-nguoi-viet-11-2016-917091" target="_blank" title="3 smartphone có giá giảm làm nao lòng người dùng Việt (11/2016)">3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</a></p>\r\n\r\n<h3><strong>5.&nbsp;7 t&iacute;nh năng tuyệt vời gi&uacute;p bạn sử dụng Android như chuy&ecirc;n gia</strong></h3>\r\n\r\n<p><img alt="Android" src="https://cdn1.tgdd.vn/Files/2016/11/23/917202/android_800x450.jpg" title="Android" /></p>\r\n\r\n<p><a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=android" target="_blank" title="Android" type="Android">Android</a>&nbsp;l&agrave; một hệ điều hảnh phổ biến nhất hiện nay với rất nhiều tuỳ chỉnh th&uacute; vị. V&igrave; vậy, h&ocirc;m nay m&igrave;nh xin giới thiệu với c&aacute;c bạn c&aacute;c cử chỉ rất hữu &iacute;ch gi&uacute;p bạn sử dụng thiết bị như một chuy&ecirc;n gia. Mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i b&agrave;i viết nh&eacute;.</p>\r\n', '1496414150_1495351034_avatarfac0000bw0.png', 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 ', 1, 'Vietnam', 1, 1, '2017-06-08 20:40:27', '2017-06-08 20:40:27', '2'),
(11, 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 đẹp nao lòng, đoạn video 5 giây biến iPhone thành cục gạch', 'diem-tin-hot-2311-mau-iphone-se-2017-dep-nao-long-doan-video-5-giay-bien-iphone-thanh-cuc-gach', 'admin', '<p>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất.</p>\r\n', '<h2>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất. Ngo&agrave;i ra, cư d&acirc;n mạng đang truyền tay nhau 1 clip 5 gi&acirc;y khiến nhiều chiếc iPhone trở th&agrave;nh cục gạch 1 c&aacute;ch nhẹ nh&agrave;ng.</h2>\r\n\r\n<h3><strong>1.&nbsp;Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</strong></h3>\r\n\r\n<p>Mới đ&acirc;y, nh&agrave; thiết kế nhỏ tuổi Đạt Nobita tiếp tục đến với mẫu thiết kế iPhone SE 2017 m&agrave; theo m&igrave;nh l&agrave; &ldquo;đẹp kh&ocirc;ng tỳ vết&rdquo;. iPhone SE 2017 trong mẫu thiết kế n&agrave;y c&oacute; khung viền phẳng, rất mạnh mẽ trong khi mặt trước v&agrave; sau được phủ k&iacute;nh cường lực. C&oacute; vẻ như những th&ocirc;ng tin cho rằng năm sau iPhone sẽ sử dụng lại kiểu thiết kế tr&ecirc;n iPhone 4/4s đ&atilde; ảnh hưởng tới mẫu concept n&agrave;y.</p>\r\n\r\n<p><img alt="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" src="https://cdn3.tgdd.vn/Files/2016/11/22/917054/se1_1280x720.jpg" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" /></p>\r\n\r\n<p>Chưa hết, concept iPhone SE 2017 c&ograve;n ấn tượng bởi viền cạnh m&agrave;n h&igrave;nh si&ecirc;u mỏng, cạnh tr&ecirc;n cũng rất hẹp, t&iacute;ch hợp camera trước gọn nhỏ, tinh tế. Lần n&agrave;y, m&aacute;y kh&ocirc;ng c&oacute; n&uacute;t nguồn cạnh tr&ecirc;n m&agrave; l&agrave; ở cạnh phải để tiện lợi cho người d&ugrave;ng bởi m&agrave;n h&igrave;nh của m&aacute;y đ&atilde; lớn hơn.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/neu-iphone-se-2017-dep-the-nay-thi-iphone-7-cung-se-e-hang-917054" target="_blank" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi">Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</a></p>\r\n\r\n<h3><strong>2.&nbsp;Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</strong></h3>\r\n\r\n<p><img alt="" src="https://www.thegioididong.com/tin-tuc/mau-iphone-se-2017-dep-nao-long-doan-video-5-giay-917408" /></p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/canh-bao-doan-video-5-giay-khien-may-iphone-tro-thanh-cuc-gach-917063" target="_blank" title="Cảnh báo: Đoạn video 5 giây khiến máy iPhone trở thành cục gạch">Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</a></p>\r\n\r\n<h3><strong>3.&nbsp;Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</strong></h3>\r\n\r\n<p>Trang c&ocirc;ng nghệ th&acirc;n cận với Samsung &ndash;&nbsp;<a href="http://www.sammobile.com/2016/11/23/first-images-of-the-glossy-black-galaxy-s7-edge-surface-online/" rel="nofollow" target="_blank" title="Galaxy S7 Edge" type="Galaxy S7 Edge">Sammobile</a>&nbsp;l&agrave; nguồn tin mang đến cho ch&uacute;ng ta những h&igrave;nh ảnh n&agrave;y. Trong bộ ảnh dưới đ&acirc;y, c&aacute;c bạn c&oacute; thể thấy rằng Galaxy S7 Edge xuất hiện với m&agrave;u đen b&oacute;ng bẩy hơn so với m&agrave;u Black Onyx trước đ&oacute;.</p>\r\n\r\n<p><img alt="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" src="https://cdn.tgdd.vn/Files/2016/11/23/917387/s7-edge-glossy-black-7_690x690.jpg" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" /></p>\r\n\r\n<p>Đặc biệt, bộ ảnh n&agrave;y cũng rất sắc n&eacute;t v&agrave; chi tiết, kh&ocirc;ng c&oacute; vẻ g&igrave; l&agrave; đang chụp l&eacute;n cả, v&igrave; vậy c&oacute; thể n&oacute;i rằng Samsung đ&atilde; sẵn s&agrave;ng để tung phi&ecirc;n bản m&agrave;u sắc mới n&agrave;y cho dịp cuối năm để những ai th&iacute;ch m&agrave;u đen b&oacute;ng c&oacute; th&ecirc;m lựa chọn hấp dẫn.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/galaxy-s7-edge-glossy-black-bong-dung-xuat-hien-917387" target="_blank" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có người anh em">Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</a></p>\r\n\r\n<h3><strong>4.&nbsp;3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</strong></h3>\r\n\r\n<p><img alt="Apple iPhone SE" src="https://cdn3.tgdd.vn/Files/2016/11/22/917091/iphone-se_800x450.jpg" title="Apple iPhone SE" /></p>\r\n\r\n<p>Bắt đầu rồi đ&oacute; c&aacute;c bạn ạ, m&ugrave;a mua sắm cuối năm đang nhộn nhịp hẳn l&ecirc;n. Thị trường di động kh&ocirc;ng chỉ xuất hiện c&aacute;c mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Đặt mua smartphone tại Thegioididong.com" type="Đặt mua smartphone tại Thegioididong.com">smartphone</a>&nbsp;mới thời thượng, m&agrave; b&ecirc;n cạnh đ&oacute;, những mẫu m&aacute;y được b&aacute;n ra trước đ&oacute; cũng ồ ạt giảm gi&aacute; để h&uacute;t kh&aacute;ch.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/top-3-smartphone-co-gia-giam-lam-nao-long-nguoi-viet-11-2016-917091" target="_blank" title="3 smartphone có giá giảm làm nao lòng người dùng Việt (11/2016)">3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</a></p>\r\n\r\n<h3><strong>5.&nbsp;7 t&iacute;nh năng tuyệt vời gi&uacute;p bạn sử dụng Android như chuy&ecirc;n gia</strong></h3>\r\n\r\n<p><img alt="Android" src="https://cdn1.tgdd.vn/Files/2016/11/23/917202/android_800x450.jpg" title="Android" /></p>\r\n\r\n<p><a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=android" target="_blank" title="Android" type="Android">Android</a>&nbsp;l&agrave; một hệ điều hảnh phổ biến nhất hiện nay với rất nhiều tuỳ chỉnh th&uacute; vị. V&igrave; vậy, h&ocirc;m nay m&igrave;nh xin giới thiệu với c&aacute;c bạn c&aacute;c cử chỉ rất hữu &iacute;ch gi&uacute;p bạn sử dụng thiết bị như một chuy&ecirc;n gia. Mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i b&agrave;i viết nh&eacute;.</p>\r\n', '1496414071_1495293309_AVATAR_OP900-15AMSK-T.png', 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 ', 1, 'Vietnam', 1, 1, '2017-06-08 20:40:33', '2017-06-08 20:40:33', '1'),
(12, 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu đồng', 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone-6s-con-duoi-7-trieu-dong', 'admin', '<p>Kh&ocirc;ng chỉ iPhone SE h&agrave;ng mới m&agrave; h&agrave;ng đổi trả cũng được giảm gi&aacute; mạnh mẽ. Trước đ&acirc;y mức gi&aacute; l&agrave; hơn 7 triệu b&acirc;y giờ chỉ c&ograve;n dưới 7 triệu đồng, thậm ch&iacute; về gần mức 6 triệu đồng</p>\r', '<p>iPhone SE kế thừa từ nhiều mẫu iPhone hiện nay, n&oacute; l&agrave; tổng h&ograve;a của vẻ đẹp thanh lịch, gọn g&agrave;ng của&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-5s-16gb" target="_blank" title=" iPhone 5s" type=" iPhone 5s">iPhone 5s</a>&nbsp;với sức mạnh cấu h&igrave;nh của iPhone 6s. Ch&iacute;nh v&igrave; vậy, iPhone SE vẫn l&agrave; mong ước của nhiều t&iacute;n đồ nh&agrave; T&aacute;o.</p>\r\n\r\n<p><img alt="iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu đồng" src="https://cdn1.tgdd.vn/Files/2016/11/28/919237/iphone-se-2_1204x535.jpg" title="iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu đồng" /></p>\r\n\r\n<p>Về gi&aacute; b&aacute;n, hiện tại iPhone SE h&agrave;ng đổi trả chỉ c&ograve;n dưới 7 triệu, ở mức trung b&igrave;nh l&agrave; 6.8 triệu đồng, thậm ch&iacute; c&oacute; chiếc chỉ 6.3 triệu đồng, t&ugrave;y thời gian bảo h&agrave;nh. Đ&acirc;y ch&iacute;nh l&agrave; lựa chọn tốt cho nhiều bạn trẻ mong muốn c&oacute; một iPhone &ldquo;nhỏ nhưng c&oacute; v&otilde;&rdquo;, gọn g&agrave;ng nhưng cực kỳ mạnh mẽ.</p>\r\n\r\n<p>iPhone SE hiện l&agrave; mẫu smartphone nhỏ gọn c&oacute; hiệu suất cao nhất hiện nay bởi n&oacute; trang bị cấu h&igrave;nh như iPhone 6s, đ&oacute; l&agrave; vi xử l&yacute; Apple A9, RAM 2 GB, c&ugrave;ng camera 12 MP sắc n&eacute;t. So với iPhone 5s th&igrave; iPhone SE c&ograve;n sở hữu thỏi pin dung lượng lớn hơn (1.642 mAh so với 1.560 mAh).</p>\r\n', '1496413999_1496393446_1495351096_avatarfac0000bw0.png', 'iphone 7, iphone 7 plus', 1, 'Vietnam', 1, 1, '2017-06-08 20:40:39', '2017-06-08 20:40:39', '1');

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
(23, 10, 1, 1900990, 1900990, 0, 'cod', 'qwqwqww', '2017-06-02 07:26:45', '2017-06-02 07:26:45'),
(24, 11, 1, 1000000, 1000000, 0, 'cod', '', '2017-06-08 15:49:59', '2017-06-08 15:49:59'),
(25, 12, 1, 3500000, 3500000, 0, 'cod', '', '2017-06-08 16:24:50', '2017-06-08 16:24:50'),
(26, 13, 1, 5123900, 5123900, 0, 'tructiep', '', '2017-06-08 16:32:18', '2017-06-08 16:32:18'),
(27, 15, 0, 0, 0, 0, 'tructiep', '', '2017-06-08 16:32:53', '2017-06-08 16:32:53'),
(28, 16, 1, 5123900, 5123900, 0, 'cod', '5939dfbece910', '2017-06-08 16:37:34', '2017-06-08 16:37:34'),
(29, 18, 0, 0, 0, 0, 'cod', '5939dfd134caa', '2017-06-08 16:37:53', '2017-06-08 16:37:53'),
(30, 20, 0, 0, 0, 0, 'cod', '5939e0012a663', '2017-06-08 16:38:41', '2017-06-08 16:38:41'),
(31, 21, 0, 0, 0, 0, 'cod', '5939e00a873f3', '2017-06-08 16:38:50', '2017-06-08 16:38:50'),
(32, 21, 0, 0, 0, 0, 'cod', '5939e14b000f1', '2017-06-08 16:44:10', '2017-06-08 16:44:10'),
(33, 21, 0, 0, 0, 0, 'cod', '5939e164e41b9', '2017-06-08 16:44:36', '2017-06-08 16:44:36'),
(34, 21, 0, 0, 0, 0, 'cod', '5939e1893879f', '2017-06-08 16:45:13', '2017-06-08 16:45:13'),
(35, 21, 0, 0, 0, 0, 'cod', '5939e3c9a5fd8', '2017-06-08 16:54:49', '2017-06-08 16:54:49'),
(36, 21, 0, 0, 0, 0, 'cod', '5939e3e69dcff', '2017-06-08 16:55:18', '2017-06-08 16:55:18'),
(37, 21, 0, 0, 0, 0, 'cod', '5939e3f20dff8', '2017-06-08 16:55:30', '2017-06-08 16:55:30'),
(38, 22, 1, 12345, 12345, 0, 'bank', '5939e429b7b16', '2017-06-08 16:56:25', '2017-06-08 16:56:25');

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
(30, 35, 1, 22, '2017-06-02 07:23:14', '2017-06-02 07:23:14'),
(32, 73, 1, 24, '2017-06-08 15:49:59', '2017-06-08 15:49:59'),
(33, 45, 1, 25, '2017-06-08 16:24:50', '2017-06-08 16:24:50'),
(34, 71, 1, 26, '2017-06-08 16:32:18', '2017-06-08 16:32:18'),
(35, 71, 1, 28, '2017-06-08 16:37:34', '2017-06-08 16:37:34'),
(36, 99, 1, 38, '2017-06-08 16:56:25', '2017-06-08 16:56:25');

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
(22, 'SGEH51P12', 'galaxy-s7-edge', NULL, 'Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', 'Hoặc Tặng Vali Lock & Lock ', 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)', ' Trả góp 10%', '1495272433_avatarfac0000bw0.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>Ch&iacute;nh thức ra mắt tại sự kiện MWC 2016 tổ chức tại Barcelona (T&acirc;y Ban Nha), smartphone&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Samsung Galaxy S7</strong></a>&nbsp;sở hữu nhiều sự thay đổi nổi bật ở cả thiết kế, cấu h&igrave;nh v&agrave; những t&iacute;nh năng đi k&egrave;m.&nbsp;Chiếc điện thoại n&agrave;y hứa hẹn sẽ tạo n&ecirc;n sự b&ugrave;ng nổ trong ph&acirc;n kh&uacute;c cao cấp v&agrave; mang lại những th&agrave;nh c&ocirc;ng tiếp theo cho h&atilde;ng điện thoại H&agrave;n Quốc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Samsung Galaxy S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/samsung-galaxy-s7-a.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Ng&ocirc;n ngữ thiết kế quen thuộc, bổ sung khả năng chống nước hiệu quả</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Samsung Galaxy S7 chống nước hiệu quả" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-1.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sở hữu vẻ ngo&agrave;i mang nhiều n&eacute;t ti&ecirc;u biểu của người tiền nhiệm S6 nhưng&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Galaxy S7</strong></a>&nbsp;cũng c&oacute; những điểm nhấn mới mẻ của ri&ecirc;ng m&igrave;nh, c&oacute; thể&nbsp;kể đến như mặt lưng được bo cong hơn gi&uacute;p người d&ugrave;ng cầm giữ dễ d&agrave;ng hệ thống camera được l&agrave;m gọn v&agrave; bớt lồi hơn. Đặc biệt, khả năng chống nước v&agrave; bụi đạt ti&ecirc;u chuẩn IP68 sẽ mang đến sự y&ecirc;n t&acirc;m khi sử dụng m&aacute;y trong điều kiện ẩm ướt v&agrave; gi&uacute;p người d&ugrave;ng vệ sinh cho m&aacute;y dễ d&agrave;ng hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh Super AMOLED độ ph&acirc;n giải 2K sắc n&eacute;t</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Màn hình Samsung Galaxy S7 Super AMOLED" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-2.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>M&agrave;n h&igrave;nh của Galaxy S7 sẽ c&oacute; k&iacute;ch thước 5,1 inch với độ ph&acirc;n giải 2K (2560 x 1440 pixel), cho mật độ điểm ảnh l&ecirc;n đến 576 ppi, gi&uacute;p t&aacute;i hiện h&igrave;nh ảnh với độ sắc n&eacute;t cực cao ngay trước mắt người d&ugrave;ng. C&ugrave;ng với đ&oacute;, c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED sẽ mang đến những khung h&igrave;nh với m&agrave;u sắc tươi tắn, sống động, c&ugrave;ng khả năng tiết kiệm điện năng ấn tượng. Nhờ đ&oacute;, Samsung đ&atilde; thiết kế th&ecirc;m&nbsp;<a href="https://fptshop.com.vn/tin-tuc/tin-moi/chuc-nang-always-on-se-chi-danh-rieng-cho-galaxy-s7-37568" target="_blank">t&iacute;nh năng Always On cho Galaxy S7</a>&nbsp;gi&uacute;p người d&ugrave;ng đọc được c&aacute;c th&ocirc;ng b&aacute;o m&agrave; kh&ocirc;ng phải qua thao t&aacute;c mở s&aacute;ng m&agrave;n h&igrave;nh.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Vi xử l&yacute; mới, sức mạnh mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Vi xử lý Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-3.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Điện thoại Galaxy S7</strong></a>&nbsp;sẽ c&oacute; 2 phi&ecirc;n bản sử dụng 2 vi xử l&yacute; kh&aacute;c nhau l&agrave; Qualcomm Snapdragon 820 v&agrave; Exynos 8890 &ndash; cả hai đều l&agrave; những con chip cao cấp thế hệ mới sở hữu hiệu suất vượt trội, gi&uacute;p m&aacute;y xử l&yacute; ho&agrave;n hảo mọi y&ecirc;u cầu t&aacute;c vụ d&ugrave; &ldquo;nặng nề&rdquo; nhất. Th&ecirc;m nữa, dung lượng RAM được n&acirc;ng cấp l&ecirc;n mức 4GB sẽ gi&uacute;p x&oacute;a đi nỗi băn khoăn về hiệu quả thực thi đa nhiệm. Một điểm tuyệt vời kh&aacute;c l&agrave; việc&nbsp;<strong>Galaxy S7</strong>&nbsp;sẽ hỗ trợ thẻ nhớ ngo&agrave;i để người d&ugrave;ng mở rộng kh&ocirc;ng gian lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Samsung S7 được trang bị camera chụp h&igrave;nh ấn tượng hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Camera Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-4.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Camera của Galaxy S7 cũng sẽ c&oacute; những n&acirc;ng cấp đ&aacute;ng kể. D&ugrave; độ ph&acirc;n giải được giảm xuống 12MP (so với 16MP tr&ecirc;n Galaxy S6), tuy nhi&ecirc;n camera n&agrave;y sẽ c&oacute; khẩu độ f/1.7 cho khả năng thu s&aacute;ng tuyệt vời hơn bao giờ hết. Ngo&agrave;i ra, t&iacute;nh năng chống rung quang học OIS gi&uacute;p m&aacute;y ảnh chụp nhanh hơn, &iacute;t nh&ograve;e h&igrave;nh hơn trong điều kiện thiếu s&aacute;ng. Chưa hết, Samsung c&ograve;n sử dụng một cảm biến ảnh mới tự động lấy n&eacute;t điểm ảnh k&eacute;p (Dual Pixel) tương tự cảm biến của c&aacute;c m&aacute;y DSLR của Canon, do vậy h&igrave;nh ảnh sẽ bớt nhiễu, m&agrave;u sắc rực rỡ hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nền tảng điều h&agrave;nh mới cho thời lượng pin tốt hơn</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Dung lượng pin Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-5.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hệ điều h&agrave;nh Android 6.0 Marshmallow mới nhất hiện nay kết hợp với c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED v&agrave; vi xử l&yacute; tiết kiệm điện năng c&ograve;n gi&uacute;p m&aacute;y c&oacute; được thời lượng pin l&acirc;u hơn, c&oacute; thể l&ecirc;n đến 2 ng&agrave;y ở điều kiện sử dụng th&ocirc;ng thường. C&ocirc;ng nghệ sạc nhanh sẽ gi&uacute;p r&uacute;t ngắn đ&aacute;ng kể thời gian chờ đợi của người d&ugrave;ng, ngo&agrave;i ra Galaxy S7 c&ograve;n được trang bị t&iacute;nh năng sạc kh&ocirc;ng d&acirc;y v&agrave; đặc biệt l&agrave; tản nhiệt bằng chất lỏng.</p>\r\n', 'Galaxy S7, Galaxy S7,Galaxy S7', 15891000, 0, 24, 1, '2016-11-24 09:39:13', '2017-05-21 00:57:46', 1, 1),
(23, 'Olym P12', 'olym-p12', NULL, 'Trả góp 10%', 'Hoặc Tặng Vali Lock & Lock ', 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495272458_avatarfac00009w0-369x500.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>Ch&iacute;nh thức ra mắt tại sự kiện MWC 2016 tổ chức tại Barcelona (T&acirc;y Ban Nha), smartphone&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Samsung Galaxy S7</strong></a>&nbsp;sở hữu nhiều sự thay đổi nổi bật ở cả thiết kế, cấu h&igrave;nh v&agrave; những t&iacute;nh năng đi k&egrave;m.&nbsp;Chiếc điện thoại n&agrave;y hứa hẹn sẽ tạo n&ecirc;n sự b&ugrave;ng nổ trong ph&acirc;n kh&uacute;c cao cấp v&agrave; mang lại những th&agrave;nh c&ocirc;ng tiếp theo cho h&atilde;ng điện thoại H&agrave;n Quốc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="Samsung Galaxy S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/samsung-galaxy-s7-a.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Ng&ocirc;n ngữ thiết kế quen thuộc, bổ sung khả năng chống nước hiệu quả</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Samsung Galaxy S7 chống nước hiệu quả" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-1.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sở hữu vẻ ngo&agrave;i mang nhiều n&eacute;t ti&ecirc;u biểu của người tiền nhiệm S6 nhưng&nbsp;<a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Galaxy S7</strong></a>&nbsp;cũng c&oacute; những điểm nhấn mới mẻ của ri&ecirc;ng m&igrave;nh, c&oacute; thể&nbsp;kể đến như mặt lưng được bo cong hơn gi&uacute;p người d&ugrave;ng cầm giữ dễ d&agrave;ng hệ thống camera được l&agrave;m gọn v&agrave; bớt lồi hơn. Đặc biệt, khả năng chống nước v&agrave; bụi đạt ti&ecirc;u chuẩn IP68 sẽ mang đến sự y&ecirc;n t&acirc;m khi sử dụng m&aacute;y trong điều kiện ẩm ướt v&agrave; gi&uacute;p người d&ugrave;ng vệ sinh cho m&aacute;y dễ d&agrave;ng hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh Super AMOLED độ ph&acirc;n giải 2K sắc n&eacute;t</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Màn hình Samsung Galaxy S7 Super AMOLED" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-2.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>M&agrave;n h&igrave;nh của Galaxy S7 sẽ c&oacute; k&iacute;ch thước 5,1 inch với độ ph&acirc;n giải 2K (2560 x 1440 pixel), cho mật độ điểm ảnh l&ecirc;n đến 576 ppi, gi&uacute;p t&aacute;i hiện h&igrave;nh ảnh với độ sắc n&eacute;t cực cao ngay trước mắt người d&ugrave;ng. C&ugrave;ng với đ&oacute;, c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED sẽ mang đến những khung h&igrave;nh với m&agrave;u sắc tươi tắn, sống động, c&ugrave;ng khả năng tiết kiệm điện năng ấn tượng. Nhờ đ&oacute;, Samsung đ&atilde; thiết kế th&ecirc;m&nbsp;<a href="https://fptshop.com.vn/tin-tuc/tin-moi/chuc-nang-always-on-se-chi-danh-rieng-cho-galaxy-s7-37568" target="_blank">t&iacute;nh năng Always On cho Galaxy S7</a>&nbsp;gi&uacute;p người d&ugrave;ng đọc được c&aacute;c th&ocirc;ng b&aacute;o m&agrave; kh&ocirc;ng phải qua thao t&aacute;c mở s&aacute;ng m&agrave;n h&igrave;nh.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Vi xử l&yacute; mới, sức mạnh mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Vi xử lý Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-3.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://fptshop.com.vn/dien-thoai/samsung-galaxy-s7" target="_blank"><strong>Điện thoại Galaxy S7</strong></a>&nbsp;sẽ c&oacute; 2 phi&ecirc;n bản sử dụng 2 vi xử l&yacute; kh&aacute;c nhau l&agrave; Qualcomm Snapdragon 820 v&agrave; Exynos 8890 &ndash; cả hai đều l&agrave; những con chip cao cấp thế hệ mới sở hữu hiệu suất vượt trội, gi&uacute;p m&aacute;y xử l&yacute; ho&agrave;n hảo mọi y&ecirc;u cầu t&aacute;c vụ d&ugrave; &ldquo;nặng nề&rdquo; nhất. Th&ecirc;m nữa, dung lượng RAM được n&acirc;ng cấp l&ecirc;n mức 4GB sẽ gi&uacute;p x&oacute;a đi nỗi băn khoăn về hiệu quả thực thi đa nhiệm. Một điểm tuyệt vời kh&aacute;c l&agrave; việc&nbsp;<strong>Galaxy S7</strong>&nbsp;sẽ hỗ trợ thẻ nhớ ngo&agrave;i để người d&ugrave;ng mở rộng kh&ocirc;ng gian lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Samsung S7 được trang bị camera chụp h&igrave;nh ấn tượng hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Camera Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-4.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Camera của Galaxy S7 cũng sẽ c&oacute; những n&acirc;ng cấp đ&aacute;ng kể. D&ugrave; độ ph&acirc;n giải được giảm xuống 12MP (so với 16MP tr&ecirc;n Galaxy S6), tuy nhi&ecirc;n camera n&agrave;y sẽ c&oacute; khẩu độ f/1.7 cho khả năng thu s&aacute;ng tuyệt vời hơn bao giờ hết. Ngo&agrave;i ra, t&iacute;nh năng chống rung quang học OIS gi&uacute;p m&aacute;y ảnh chụp nhanh hơn, &iacute;t nh&ograve;e h&igrave;nh hơn trong điều kiện thiếu s&aacute;ng. Chưa hết, Samsung c&ograve;n sử dụng một cảm biến ảnh mới tự động lấy n&eacute;t điểm ảnh k&eacute;p (Dual Pixel) tương tự cảm biến của c&aacute;c m&aacute;y DSLR của Canon, do vậy h&igrave;nh ảnh sẽ bớt nhiễu, m&agrave;u sắc rực rỡ hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nền tảng điều h&agrave;nh mới cho thời lượng pin tốt hơn</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><img alt="Dung lượng pin Samsung Galaxy S7" longdesc="http://fptshop.com.vn/dien-thoai/Samsung%20Galaxy%20S7" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/DH/samsung/galaxy-s7/galaxy-s7-5.jpg" title="Samsung Galaxy S7" /></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hệ điều h&agrave;nh Android 6.0 Marshmallow mới nhất hiện nay kết hợp với c&ocirc;ng nghệ m&agrave;n h&igrave;nh Super AMOLED v&agrave; vi xử l&yacute; tiết kiệm điện năng c&ograve;n gi&uacute;p m&aacute;y c&oacute; được thời lượng pin l&acirc;u hơn, c&oacute; thể l&ecirc;n đến 2 ng&agrave;y ở điều kiện sử dụng th&ocirc;ng thường. C&ocirc;ng nghệ sạc nhanh sẽ gi&uacute;p r&uacute;t ngắn đ&aacute;ng kể thời gian chờ đợi của người d&ugrave;ng, ngo&agrave;i ra Galaxy S7 c&ograve;n được trang bị t&iacute;nh năng sạc kh&ocirc;ng d&acirc;y v&agrave; đặc biệt l&agrave; tản nhiệt bằng chất lỏng.</p>\r\n', 'Olym', 1589990, 1, 16, 1, '2016-11-24 09:39:28', '2017-05-21 01:48:35', 1, 1),
(24, 'OPPO F1S', 'oppo-f1s', 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ', 'Tặng Voucher 500.000đ mua Apple Watch', '', '1495294235_avatarop990-141ams-d.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<h3><strong>Thiết kế ho&agrave;n thiện hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-3.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Về thiết kế, vẫn l&agrave; nh&ocirc;m nguy&ecirc;n khối liền lạc nhưng iPhone 7 Plus đ&atilde; c&oacute; những n&eacute;t thay đổi tinh tế khi đưa hai dải ăng-ten l&ecirc;n s&aacute;t hai cạnh tr&ecirc;n dưới, đồng thời bỏ đi jack cắm tai nghe 3.5 mm. Điểm nhấn ấn tượng nhất về ngoại h&igrave;nh của iPhone 7 Plus l&agrave; việc Apple bỏ đi m&agrave;u x&aacute;m kh&ocirc;ng gian từng rất được ưa chuộng tr&ecirc;n c&aacute;c model cũ để bổ sung th&ecirc;m t&ugrave;y chọn m&agrave;u đen mờ v&agrave; đen b&oacute;ng Jet Black (chỉ c&oacute; tr&ecirc;n iPhone 7 Plus bản 128/256 GB).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh rộng 5.5 inch, s&aacute;ng hơn, nhiều m&agrave;u sắc hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-9.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>iPhone 7 Plus cũng c&oacute; m&agrave;n h&igrave;nh 5.5 inch độ ph&acirc;n giải 1080x1920 pixels tương tự iPhone 6s Plus, như vậy về k&iacute;ch thước tổng thể ch&uacute;ng ta kh&ocirc;ng c&oacute; g&igrave; thay đổi. Tuy nhi&ecirc;n, tấm nền m&agrave;n h&igrave;nh mới đ&atilde; được bổ sung th&ecirc;m 25% độ s&aacute;ng, đạt mức cao nhất 625 nits c&ugrave;ng khả năng t&aacute;i tạo m&agrave;u sắc, gam m&agrave;u rộng hơn v&agrave; hỗ trợ 3D Touch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>N&uacute;t Home ho&agrave;n to&agrave;n mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-6.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với chiếc điện thoại thế hệ mới, Apple đ&atilde; &quot;xo&aacute; sổ&quot; ho&agrave;n to&agrave;n n&uacute;t bấm vật l&yacute; tr&ecirc;n m&agrave;n h&igrave;nh iPhone. Giờ đ&acirc;y n&uacute;t Home ở vị tr&iacute; cũ đ&atilde; trở th&agrave;nh cảm ứng, khi bạn nhấn xuống n&oacute; vẫn cảm nhận được lực nhấn v&agrave; sẽ rung nhẹ để bạn biết rằng bạn đ&atilde; tương t&aacute;c. Apple đ&atilde; sử dụng Taptic Engine tr&ecirc;n Force Touch của Macbook cho chiếc iPhone mới n&agrave;y. Mặc d&ugrave; vậy ph&iacute;m Home vẫn c&oacute; cảm biến v&acirc;n tay Touch ID v&agrave; t&iacute;ch hợp nhiều t&iacute;nh năng bảo mật.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Camera chất lượng đột ph&aacute; như m&aacute;y ảnh chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-5.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus đi k&egrave;m với một camera k&eacute;p độ ph&acirc;n giải đồng thời 12 MP, trong số đ&oacute; c&oacute; một ống k&iacute;nh g&oacute;c rộng khẩu độ l&ecirc;n đến f/1.8 v&agrave; một ống k&iacute;nh zoom (tele) l&ecirc;n đến 10x, c&ugrave;ng t&iacute;nh năng ổn định h&igrave;nh ảnh quang học tự động.&nbsp;N&oacute; cũng bao gồm một đ&egrave;n flash 2 t&ocirc;ng m&agrave;u v&agrave; đ&egrave;n flash quad-LED. Camera hỗ trợ quay film 4K 60fps, chụp x&oacute;a ph&ocirc;ng, chụp trước lấy n&eacute;t sau như một m&aacute;y ảnh chuy&ecirc;n nghiệp. Camera trước độ ph&acirc;n giải 7 MP, chụp selfie tốt hơn v&agrave; tự động chống rung. B&ecirc;n cạnh đ&oacute;, iOS 10 cũng cho ph&eacute;p người d&ugrave;ng iPhone 7 Plus chỉnh sửa, chọn lựa ảnh từ Live Photos, lưu ảnh ở định dạng RAW.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>T&iacute;nh năng chống nước tiện lợi</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-8.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; thể n&oacute;i t&iacute;nh năng chống nước l&agrave; điều l&agrave;m h&agrave;i l&ograve;ng nhất c&aacute;c t&iacute;n đồ nh&agrave; T&aacute;o. Với ti&ecirc;u chuẩn chống nước IP67 sẽ gi&uacute;p iPhone mới c&oacute; thể sống ở độ s&acirc;u 1 m&eacute;t nước trong 30 ph&uacute;t, vậy l&agrave; từ nay bạn sẽ qu&ecirc;n đi nỗi lo về thấm nước tr&ecirc;n iPhone 7 Plus khi đi trong trời mưa hay lỡ tay rớt nước.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Hiệu năng vượt trội, lưu trữ thoải m&aacute;i</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-1.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus sử dụng chip A10 Fusion 4 l&otilde;i, 64-bit với tốc độ cực nhanh. Apple c&ocirc;ng bố con chip n&agrave;y c&oacute; hiệu năng xử l&yacute; cao hơn 40% so với chip A9 v&agrave; gấp 2 lần so với chip A8. Đặc biệt l&agrave; n&oacute; c&ograve;n cao gấp 120 lần so với iPhone đời đầu. Đi c&ugrave;ng đ&oacute; l&agrave; sự n&acirc;ng cấp về bộ nhớ trong, phi&ecirc;n bản 16 GB trước đ&acirc;y đ&atilde; bị loại bỏ, thay v&agrave;o đ&oacute; ch&uacute;ng ta sẽ c&oacute; bộ nhớ trong 128 GB ở phi&ecirc;n bản n&agrave;y để thoải m&aacute;i lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>&Acirc;m thanh sống động c&ugrave;ng loa stereo</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-7.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Loa ngo&agrave;i tr&ecirc;n iPhone 7 Plus bất ngờ được n&acirc;ng cấp khi từ dạng đơn l&ecirc;n loa k&eacute;p Stereo, với một loa nằm ở cạnh đ&aacute;y v&agrave; một nằm ở cạnh tr&ecirc;n, cho &acirc;m lượng sống động gấp hai lần tr&ecirc;n iPhone 6s Plus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tăng thời lượng sử dụng pin</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo c&ocirc;ng bố từ Apple, iPhone 7 Plus c&oacute; khả năng sử dụng li&ecirc;n tục trong thời gian hơn 1 ng&agrave;y, với 60 giờ lướt web kh&ocirc;ng d&acirc;y v&agrave; 13 giờ sử dụng mạng LTE. Tăng hơn so với iPhone 6s Plus v&agrave; đảm bảo sử dụng cho cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Lưu &yacute;: B&agrave;i viết v&agrave; h&igrave;nh ảnh chỉ c&oacute; t&iacute;nh chất tham khảo v&igrave; cấu h&igrave;nh v&agrave; đặc t&iacute;nh sản phẩm c&oacute; thể thay đổi theo thị trường v&agrave; từng phi&ecirc;n bản. Vui l&ograve;ng gọi tổng đ&agrave;i miễn ph&iacute; 18006601 hoặc đến cửa h&agrave;ng FPT Shop để nhận th&ocirc;ng tin ch&iacute;nh x&aacute;c nhất về sản phẩm.</em></p>\r\n', 'Ipple', 5990000, 1, 16, 1, '2016-11-24 18:48:39', '2017-05-20 08:30:35', 1, 1),
(25, 'SGEH51P13', 'iphone-7-plus-128gb', 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)', 'Đặt Online hoặc Gọi 18006601', 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)', 'Tặng Voucher 500.000đ mua Apple Watch', '', '1495272500_avatarfac00009w0-369x500.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<h3><strong>Thiết kế ho&agrave;n thiện hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-3.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Về thiết kế, vẫn l&agrave; nh&ocirc;m nguy&ecirc;n khối liền lạc nhưng iPhone 7 Plus đ&atilde; c&oacute; những n&eacute;t thay đổi tinh tế khi đưa hai dải ăng-ten l&ecirc;n s&aacute;t hai cạnh tr&ecirc;n dưới, đồng thời bỏ đi jack cắm tai nghe 3.5 mm. Điểm nhấn ấn tượng nhất về ngoại h&igrave;nh của iPhone 7 Plus l&agrave; việc Apple bỏ đi m&agrave;u x&aacute;m kh&ocirc;ng gian từng rất được ưa chuộng tr&ecirc;n c&aacute;c model cũ để bổ sung th&ecirc;m t&ugrave;y chọn m&agrave;u đen mờ v&agrave; đen b&oacute;ng Jet Black (chỉ c&oacute; tr&ecirc;n iPhone 7 Plus bản 128/256 GB).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh rộng 5.5 inch, s&aacute;ng hơn, nhiều m&agrave;u sắc hơn</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-9.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>iPhone 7 Plus cũng c&oacute; m&agrave;n h&igrave;nh 5.5 inch độ ph&acirc;n giải 1080x1920 pixels tương tự iPhone 6s Plus, như vậy về k&iacute;ch thước tổng thể ch&uacute;ng ta kh&ocirc;ng c&oacute; g&igrave; thay đổi. Tuy nhi&ecirc;n, tấm nền m&agrave;n h&igrave;nh mới đ&atilde; được bổ sung th&ecirc;m 25% độ s&aacute;ng, đạt mức cao nhất 625 nits c&ugrave;ng khả năng t&aacute;i tạo m&agrave;u sắc, gam m&agrave;u rộng hơn v&agrave; hỗ trợ 3D Touch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>N&uacute;t Home ho&agrave;n to&agrave;n mới</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-6.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với chiếc điện thoại thế hệ mới, Apple đ&atilde; &quot;xo&aacute; sổ&quot; ho&agrave;n to&agrave;n n&uacute;t bấm vật l&yacute; tr&ecirc;n m&agrave;n h&igrave;nh iPhone. Giờ đ&acirc;y n&uacute;t Home ở vị tr&iacute; cũ đ&atilde; trở th&agrave;nh cảm ứng, khi bạn nhấn xuống n&oacute; vẫn cảm nhận được lực nhấn v&agrave; sẽ rung nhẹ để bạn biết rằng bạn đ&atilde; tương t&aacute;c. Apple đ&atilde; sử dụng Taptic Engine tr&ecirc;n Force Touch của Macbook cho chiếc iPhone mới n&agrave;y. Mặc d&ugrave; vậy ph&iacute;m Home vẫn c&oacute; cảm biến v&acirc;n tay Touch ID v&agrave; t&iacute;ch hợp nhiều t&iacute;nh năng bảo mật.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Camera chất lượng đột ph&aacute; như m&aacute;y ảnh chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-5.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus đi k&egrave;m với một camera k&eacute;p độ ph&acirc;n giải đồng thời 12 MP, trong số đ&oacute; c&oacute; một ống k&iacute;nh g&oacute;c rộng khẩu độ l&ecirc;n đến f/1.8 v&agrave; một ống k&iacute;nh zoom (tele) l&ecirc;n đến 10x, c&ugrave;ng t&iacute;nh năng ổn định h&igrave;nh ảnh quang học tự động.&nbsp;N&oacute; cũng bao gồm một đ&egrave;n flash 2 t&ocirc;ng m&agrave;u v&agrave; đ&egrave;n flash quad-LED. Camera hỗ trợ quay film 4K 60fps, chụp x&oacute;a ph&ocirc;ng, chụp trước lấy n&eacute;t sau như một m&aacute;y ảnh chuy&ecirc;n nghiệp. Camera trước độ ph&acirc;n giải 7 MP, chụp selfie tốt hơn v&agrave; tự động chống rung. B&ecirc;n cạnh đ&oacute;, iOS 10 cũng cho ph&eacute;p người d&ugrave;ng iPhone 7 Plus chỉnh sửa, chọn lựa ảnh từ Live Photos, lưu ảnh ở định dạng RAW.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>T&iacute;nh năng chống nước tiện lợi</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-8.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; thể n&oacute;i t&iacute;nh năng chống nước l&agrave; điều l&agrave;m h&agrave;i l&ograve;ng nhất c&aacute;c t&iacute;n đồ nh&agrave; T&aacute;o. Với ti&ecirc;u chuẩn chống nước IP67 sẽ gi&uacute;p iPhone mới c&oacute; thể sống ở độ s&acirc;u 1 m&eacute;t nước trong 30 ph&uacute;t, vậy l&agrave; từ nay bạn sẽ qu&ecirc;n đi nỗi lo về thấm nước tr&ecirc;n iPhone 7 Plus khi đi trong trời mưa hay lỡ tay rớt nước.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Hiệu năng vượt trội, lưu trữ thoải m&aacute;i</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-1.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>iPhone 7 Plus sử dụng chip A10 Fusion 4 l&otilde;i, 64-bit với tốc độ cực nhanh. Apple c&ocirc;ng bố con chip n&agrave;y c&oacute; hiệu năng xử l&yacute; cao hơn 40% so với chip A9 v&agrave; gấp 2 lần so với chip A8. Đặc biệt l&agrave; n&oacute; c&ograve;n cao gấp 120 lần so với iPhone đời đầu. Đi c&ugrave;ng đ&oacute; l&agrave; sự n&acirc;ng cấp về bộ nhớ trong, phi&ecirc;n bản 16 GB trước đ&acirc;y đ&atilde; bị loại bỏ, thay v&agrave;o đ&oacute; ch&uacute;ng ta sẽ c&oacute; bộ nhớ trong 128 GB ở phi&ecirc;n bản n&agrave;y để thoải m&aacute;i lưu trữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>&Acirc;m thanh sống động c&ugrave;ng loa stereo</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="iphone-7-plus-128gb" longdesc="http://fptshop.com.vn/dien-thoai/iphone-7-plus-128gb" src="http://fptshop.com.vn/Uploads/images/2015/San-pham/iphone-7-plus-128gb/iphone-7-plus-128gb/iphone-7-plus-128gb-7.jpg" title="iphone-7-plus-128gb" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Loa ngo&agrave;i tr&ecirc;n iPhone 7 Plus bất ngờ được n&acirc;ng cấp khi từ dạng đơn l&ecirc;n loa k&eacute;p Stereo, với một loa nằm ở cạnh đ&aacute;y v&agrave; một nằm ở cạnh tr&ecirc;n, cho &acirc;m lượng sống động gấp hai lần tr&ecirc;n iPhone 6s Plus.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tăng thời lượng sử dụng pin</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo c&ocirc;ng bố từ Apple, iPhone 7 Plus c&oacute; khả năng sử dụng li&ecirc;n tục trong thời gian hơn 1 ng&agrave;y, với 60 giờ lướt web kh&ocirc;ng d&acirc;y v&agrave; 13 giờ sử dụng mạng LTE. Tăng hơn so với iPhone 6s Plus v&agrave; đảm bảo sử dụng cho cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Lưu &yacute;: B&agrave;i viết v&agrave; h&igrave;nh ảnh chỉ c&oacute; t&iacute;nh chất tham khảo v&igrave; cấu h&igrave;nh v&agrave; đặc t&iacute;nh sản phẩm c&oacute; thể thay đổi theo thị trường v&agrave; từng phi&ecirc;n bản. Vui l&ograve;ng gọi tổng đ&agrave;i miễn ph&iacute; 18006601 hoặc đến cửa h&agrave;ng FPT Shop để nhận th&ocirc;ng tin ch&iacute;nh x&aacute;c nhất về sản phẩm.</em></p>\r\n', 'Ipple', 25190000, 1, 24, 1, '2016-11-24 18:48:45', '2017-05-20 02:28:20', 1, 1),
(26, 'SGEH51P5', 'galaxy-s7-edge', 'sắp ra mắt', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495272523_avatarfac0000bw0.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 24, 1, '2016-11-25 23:44:07', '2017-05-20 02:28:43', 1, 1),
(27, 'SGEH51P7', 'galaxy-s8', 'sắp ra mắt', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495293254_avatarop995.6agsk-t.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 16, 1, '2016-11-25 23:44:11', '2017-05-20 08:14:14', 1, 1),
(28, 'SGEH5232', 'galaxy-s8', NULL, 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495293279_avatarop990-141ams-d.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 16, 1, '2016-11-25 23:44:15', '2017-05-21 01:51:12', 1, 1),
(34, 'EFR-526D-7AVUDF', 'efr-526d-7avudf', 'Đồng hồ nam casio đẹp', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn)', 'Hoặc Tặng hộp đựng đẹp', 'Tặng Voucher 500.000đ mua casio ', ' Hộp, Hướng dẫn, Pin ', '1495249390_avatarefr-526d-7avudf.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>Với Uy t&iacute;n h&agrave;ng đầu, tận t&acirc;m nhiệt t&igrave;nh phục vụ kh&aacute;ch h&agrave;ng, ph&acirc;n phối những chiếc đồng hồ cực kỳ chất lượng v&agrave; gi&aacute; cả phải chăng hơn 10 năm qua, Đồng Hồ 24H&nbsp;đ&atilde; nhận được sự tin d&ugrave;ng của hầu hết tất cả kh&aacute;ch h&agrave;ng trong nước cũng như phần lớn kiều b&agrave;o ở nước ngo&agrave;i về thăm qu&ecirc; khi lần đầu ti&ecirc;n mua sắm tại cửa h&agrave;ng ch&uacute;ng t&ocirc;i.</p>\r\n', 'Casio, Đồng hồ nam', 3289000, 1, 3, 1, '2016-11-25 23:45:03', '2017-05-20 02:30:17', 1, 1),
(35, 'SGEH51P1656', 'zenfone-2-laser', 'sắp ra mắt', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Tặng Voucher 500.000đ mua Apple Watch', ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '1495294235_avatarop990-141ams-d.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>sản phẩm sắp được ra mắt</p>\r\n', 'Galaxy S8, Galaxy S8,Galaxy S8', 18490000, 1, 16, 1, '2016-11-25 23:45:08', '2017-05-20 08:15:09', 1, 1),
(42, 'SGEH51P1222', 'dell-optiplex-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495294235_avatarop990-141ams-d.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 20, 1, '2016-11-26 02:13:19', '2016-11-26 02:13:19', 1, 1),
(45, 'SGEH51P1AA', 'dell-optiplex-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495294235_avatarop990-141ams-d.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 20, 1, '2016-11-26 02:13:31', '2016-11-26 02:13:31', 1, 1),
(47, 'SGEH51P1AAB', 'asus-gimming-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495293254_avatarop995.6agsk-t.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 21, 1, '2016-11-26 02:13:53', '2016-11-26 02:13:53', 1, 1),
(50, 'SGEH51P1AAC', 'asus-gimming-980-sff-case-size-mini', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Giao hàng tận nơi trong nội thành', '', '', 'Thùng máy, day cab kết nối', '1495293254_avatarop995.6agsk-t.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>* D&ograve;ng&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham/325/dell-optiplex-980-case-size-mini.html">Dell Optiplex 980 SFF</a></strong>&nbsp;<strong>hổ trợ CPU Core I3, I5, I7 Clarkdale</strong>đời đầu. Được thiết kế với vỏ&nbsp;<strong>Case size mini nhỏ gọn</strong>, kiểu d&aacute;ng sang trọng<strong>.</strong>Th&iacute;ch hợp x&agrave;i gia đ&igrave;nh, văn ph&ograve;ng, HTPC tr&igrave;nh chiếu phim HD.&nbsp;<strong>Card đồ họa t&iacute;ch hợp&nbsp;</strong><strong>Intel&reg; HD Graphics</strong><strong>&nbsp;</strong>gi&uacute;p xem phim HD v&agrave; Game cho h&igrave;nh ảnh sắc n&eacute;t, mượt m&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>* Ngo&agrave;i ra D&ograve;ng Dell Optiplex 980 SFF c&oacute; thể gắn th&ecirc;m Card Wifi, Card VGA. T&iacute;ch hợp sẵn tr&ecirc;n mainboard c&oacute; cổng COM, Display Port<strong>&nbsp;</strong>(chức năng tương đương HDMI)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Với cấu h&igrave;nh dưới đ&acirc;y, sẽ đ&aacute;p ứng đầy đủ nhu cầu l&agrave;m c&ocirc;ng việc Văn Ph&ograve;ng, Vẽ AUTOCAD, 3D MAX, Game Web, xem Phim HD, nghe Nhạc...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Cấu h&igrave;nh c&oacute; thể thay đổi theo y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch</em></strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Cấu h&igrave;nh 01:&nbsp;<strong><a href="http://cungcapmaytinh.vn/san-pham-xem/929/dell-optiplex-980-core-i.html">Dell&nbsp;Optiplex 980 SFF</a>&nbsp;</strong>Case Size Mini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>H&agrave;ng Likenew, th&ugrave;ng hộp Dell</strong></p>\r\n\r\n<p><strong>&nbsp;<strong>(Gi&aacute; tr&ecirc;n chưa bao gồm Ph&iacute;m + Chuột)</strong>&nbsp;</strong></p>\r\n', '', 3500000, 1, 21, 1, '2016-11-26 02:14:03', '2016-11-26 02:14:03', 0, 1),
(53, 'SGEH23', 'asus-rog-gl-552-vx', '', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', '', 'Pin, Dây nguồn, Sách hướng dẫn, Thùng máy, Adapter sạc ', '1495272500_avatarfac00009w0-369x500.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>Th&ocirc;ng tin sản phẩm:<br />\r\n<strong>ASUS GL552VX-DM070D - i7-6700HQ 2.6GHz, 8GB, 1TB, VGA GTX 950M 4GB GDDR5, 15.6&quot; FHD</strong><br />\r\n<em>&bull; CPU: Intel Core i7 6700HQ 2.6GHz up to 3.5GHz 6Mb<br />\r\n&bull; RAM: 8GB DDR4 2133MHz<br />\r\n&bull; Đĩa cứng: HDD 1TB 7200rpm&nbsp;<br />\r\n&bull; Card đồ họa: NVIDIA GeForce GTX 950M 4GB GDDR5 + Intel HD Graphics 530&nbsp;<br />\r\n&bull; M&agrave;n h&igrave;nh: 15.6 inch Full HD (1920 x 1080 pixels) LED + Anti-Glare WV<br />\r\n&bull; T&iacute;ch hợp đĩa quang: Super-Multi DVD<br />\r\n&bull; Cổng giao tiếp: USB 2.0 USB 3.0 HDMI LAN&nbsp;<br />\r\n&bull; PIN: 4 Cells<br />\r\n&bull; Trọng lượng: 2.59 kg<br />\r\n&bull; Hệ điều h&agrave;nh: Free Dos</em><br />\r\n<br />\r\nTh&ugrave;ng m&aacute;y chắc sản xuất trước khi c&oacute; m&aacute;y n&ecirc;n kh&ocirc;ng c&oacute; ảnh sản phẩm ở ngo&agrave;i th&ugrave;ng<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/wDr6xJo.jpg" /><br />\r\n<br />\r\nTh&ocirc;ng tin sản phẩm c&oacute; thể được quy đổi th&agrave;nh code game World Of Warship kh&aacute; gi&aacute; trị. Nếu bạn n&agrave;o kh&ocirc;ng đổi dc code game th&igrave; cứ li&ecirc;n hệ m&igrave;nh hỗ trợ nh&eacute;<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/R653ba2.jpg" /><br />\r\n<br />\r\nTrọn bộ phụ kiện k&egrave;m theo sản phẩm:<br />\r\n- Pin<br />\r\n- D&acirc;y nguồn v&agrave; sạc adapter<br />\r\n- Đĩa driver windows 10<br />\r\n- Chuột ASUS Gaming SiCa<br />\r\n- D&acirc;y r&uacute;t sạc &amp; Khăn vệ sinh m&agrave;n h&igrave;nh<br />\r\n- Sổ bảo h&agrave;nh v&agrave; giấy tờ kh&aacute;c<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/qpBdqsp.jpg" /><br />\r\n&nbsp;</p>\r\n\r\n<p>Sản phẩm được tặng k&egrave;m theo chuột ASUS ROG SICA (gi&aacute; ~60$). Thiết kế chuột tương đối nhỏ nhắn, vừa tay, ph&ugrave; hợp cho cả người thuận tay phải lẫn tay tr&aacute;i n&ecirc;n kh&ocirc;ng c&oacute; c&aacute;c n&uacute;t chuột phụ b&ecirc;n h&ocirc;ng. Thiết kế n&agrave;y ph&ugrave; hợp cho đối tượng game thủ RPG, FPS hơn l&agrave; MOBA/ARTS v&igrave; &iacute;t n&uacute;t cho việc sử dụng nhanh skills/items</p>\r\n\r\n<p><img alt="" src="http://i.imgur.com/OLpgTZO.jpg" /></p>\r\n\r\n<p><br />\r\n<br />\r\nVỏ ngo&agrave;i của m&aacute;y c&oacute; thiết kế kh&ocirc;ng thay đổi so với GL552JX. Vỏ bằng nhựa cứng c&aacute;p chứ kh&ocirc;ng phải l&agrave; vỏ nh&ocirc;m của GL552VW gi&aacute; tiền cao hơn<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/vVjxXPS.jpg" /><br />\r\n<br />\r\nLogo ASUS ph&aacute;t s&aacute;ng khi bật nguồn<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/Bnn5Sk7.jpg" /><br />\r\n<br />\r\nM&aacute;y đ&atilde; được lược bỏ cổng VGA (D-sub) thay v&agrave;o đ&oacute; l&agrave; cổng USB 3.1 Type C đời mới<br />\r\nNgo&agrave;i ra c&aacute;c cổng kh&aacute;c như jack nguồn, khe tản nhiệt, HDMI, LAN, 2 cổng USB 3.0 vẫn được giữ lại đ&uacute;ng vị tr&iacute; như GL552JX<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/V5qcO0m.jpg" /><br />\r\nKh&ocirc;ng c&oacute; sự thay đổi, vẫn l&agrave; 2 jack audio/micro được t&aacute;ch ri&ecirc;ng biệt, 1 cổng USB 2.0, ổ DVD-RW v&agrave; kh&oacute;a kensington<br />\r\n<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/V1H6QND.jpg" /><br />\r\nPh&iacute;a trước l&agrave; khe cắm thẻ nhớ SD card<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/uerGtNe.jpg" /><br />\r\n<br />\r\nThiết kế b&agrave;n ph&iacute;m kh&ocirc;ng c&oacute; g&igrave; thay đổi. M&aacute;y c&oacute; đ&egrave;n nền m&agrave;u đỏ, c&aacute;c ph&iacute;m ASDW được l&agrave;m nổi bật<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/sL81FWt.jpg" /><br />\r\n<br />\r\n<br />\r\nLogo Core i7 Skylake (l&ocirc; h&agrave;ng đầu c&oacute; nhiều thiếu s&oacute;t do thiếu sự đồng bộ giữa c&aacute;c nh&agrave; sản xuất hoặc c&aacute;c kh&acirc;u sx của ASUS n&ecirc;n logo NVIDIA đ&atilde; bị thiếu, m&aacute;y vẫn c&oacute; card đồ họa rời GTX 950M 4GB GDDR5)<br />\r\nM&aacute;y l&agrave; sản phẩm ch&iacute;nh h&atilde;ng c&oacute; hỗ trợ bảo h&agrave;nh từ xa của ASUS<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/ix8rdSI.jpg" /><br />\r\n<br />\r\nLogo ASUS ROG, m&aacute;y m&agrave;n h&igrave;nh 15.6&quot; inch n&ecirc;n c&oacute; k&egrave;m b&agrave;n ph&iacute;m số<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/qYQ2qan.jpg" /><br />\r\n<br />\r\n<br />\r\nM&aacute;y c&oacute; 2 loa k&eacute;p, hangchinhhieu.vn sẽ cập nhật chất lượng loa của m&aacute;y xem c&oacute; nhiều cải thiện so với sản phẩm tiền nhiệm hay kh&ocirc;ng<br />\r\n<img alt="[​IMG]" src="http://i.imgur.com/xoHzNtM.jpg" /><br />\r\n<br />\r\n<br />\r\nThiết kế mặt đ&aacute;y kh&ocirc;ng c&oacute; sự thay đổi, m&aacute;y c&oacute; thể dễ d&agrave;ng n&acirc;ng cấp RAM, SSD bằng th&aacute;o cover ra.<br />\r\nASUS đ&atilde; th&ecirc;m 1 lưu &yacute;: khe M.2 tr&ecirc;n m&aacute;y chỉ lắp được loại SSD SATA M.2 2280 chứ kh&ocirc;ng lắp được loại SSD chuẩn pcie x4 hoặc ssd c&oacute; k&iacute;ch thước kh&aacute;c như 2242 chẳng hạn. C&oacute; thể do 1 số người d&ugrave;ng gl552jx ng&agrave;y trước đ&atilde; ph&agrave;n n&agrave;n họ đ&atilde; mua sai loại SSD khi gắn v&agrave;o m&aacute;y n&ecirc;n ASUS phải note lại thế n&agrave;y</p>\r\n', 'rog, gamming', 19850000, 1, 24, 1, '2016-11-26 02:18:11', '2017-06-02 07:55:42', 0, 1);
INSERT INTO `products` (`id`, `name`, `slug`, `intro`, `promo1`, `promo2`, `promo3`, `packet`, `images`, `r_intro`, `review`, `tag`, `price`, `status`, `cat_id`, `user_id`, `created_at`, `updated_at`, `isHome`, `isGroup`) VALUES
(69, 'OPTIPLEX 3046SFF 70086073', 'optiplex-3046sff-70086073', 'Intel Core i3 6100,8G DDR3, intel HD ', 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):', 'Hoặc Tặng Vali Lock & Lock ', 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)', 'Dây nguồn, Ốc', '1495351631_avatarfac0000bw0.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<h2>CHI TIẾT T&Iacute;NH NĂNG</h2>\r\n\r\n<h3>Thiết kế cứng c&aacute;p</h3>\r\n\r\n<p>M&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073&nbsp;mang trong m&igrave;nh t&ocirc;ng m&agrave;u đen bắt mắt, rất th&iacute;ch hợp với nhiều kh&ocirc;ng gian l&agrave;m việc. B&ecirc;n cạnh đ&oacute;, thiết kế cứng c&aacute;p c&ugrave;ng với bộ tản nhiệt được lắp đặt rất hợp l&yacute; sẽ tăng độ bền cho m&aacute;y t&iacute;nh.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 thiết kế cứng cáp, độ bền cao" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/dell/may-tinh-de-ban-dell-optiplex-3046sff-70086073-core-i3-2.jpg" /></p>\r\n\r\n<p>M&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073&nbsp;c&oacute;&nbsp;thiết kế cứng c&aacute;p</p>\r\n\r\n<h3>Hiệu năng hoạt động</h3>\r\n\r\n<p>Chip Intel Core-i3 6100 tốc độ cao 3.7GHz được trang bị tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073 c&oacute; hiệu suất hoạt động rất hiệu quả, m&aacute;y t&iacute;nh c&oacute; thể xử l&yacute; hiệu năng đa nhiệm nhanh ch&oacute;ng m&agrave; kh&ocirc;ng bị xảy ra hiện tượng giật.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 trang bị chip Intel Core-i3 6100" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/dell/may-tinh-de-ban-dell-optiplex-3046sff-70086073-core-i3--3.jpg" /></p>\r\n\r\n<p>Xử l&yacute; t&aacute;c vụ nhanh với&nbsp;Intel Core-i3 6100 tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073</p>\r\n\r\n<h3>Ổ đĩa cứng&nbsp;500 GB</h3>\r\n\r\n<p><a href="http://www.nguyenkim.com/may-tinh-de-ban/">M&aacute;y t&iacute;nh b&agrave;n&nbsp;</a>n&agrave;y trang bị ổ đĩa cứng với dung lượng l&ecirc;n đến 500GB, đem đến khả năng lưu trữ dữ liệu lớn, gi&uacute;p bạn c&oacute; thể c&agrave;i đặt ứng dụng, phần mềm m&agrave; kh&ocirc;ng phải lo về t&igrave;nh trạng hết bộ nhớ trống.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 trang bị ổ HDD 500 GB" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/asus/may-tinh-de-ban-asus-k31ad-vn028d-core-i3-4.jpg" /></p>\r\n\r\n<p>M&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073&nbsp;lưu trữ dữ liệu lớn</p>\r\n\r\n<h3>Ổ đĩa quang DVD</h3>\r\n\r\n<p>Bạn cũng c&oacute; thể khai th&aacute;c được sự tiện lợi của đĩa DVD với ổ đĩa quang c&oacute; khả năng đọc v&agrave; ghi t&iacute;ch hợp tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073, hỗ trợ bạn rất nhiều trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<p><img alt="Máy tính bàn Dell Optiplex 3046SFF 70086073 tích hợp ổ đĩa quang tiện lợi" src="http://static.nguyenkimmall.com/images/companies/_1/Content/tin-hoc/may-tinh-de-ban/dell/may-tinh-de-ban-dell-optiplex-3046sff-70086073-core-i3-5.jpg" /></p>\r\n\r\n<p>Ổ đĩa quang DVD t&iacute;ch hợp tr&ecirc;n m&aacute;y&nbsp;t&iacute;nh b&agrave;n Dell Optiplex 3046SFF 70086073</p>\r\n\r\n<h3>L&yacute; do mua h&agrave;ng</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>C&oacute; thể dễ d&agrave;ng n&acirc;ng cấp phần cứng để ph&ugrave; hợp với nhu cầu sử dụng của m&igrave;nh.</p>\r\n	</li>\r\n	<li>\r\n	<p>Chip Intel Core-i3 6100 tốc&nbsp;độ cao c&ugrave;ng RAM 4 GB, gi&uacute;p xử l&yacute; c&aacute;c t&aacute;c vụ nhanh ch&oacute;ng.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>T&iacute;ch hợp ổ đĩa quang DVD cho ph&eacute;p ghi v&agrave; đọc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Ưu đ&atilde;i mua h&agrave;ng</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Để đặt mua&nbsp;m&aacute;y t&iacute;nh b&agrave;n của Dell, bạn c&oacute; thể gọi ngay đến tổng đ&agrave;i&nbsp;<em>1900 1267</em>&nbsp;bấm ph&iacute;m số 1.</p>\r\n	</li>\r\n	<li>\r\n	<p>Bạn cũng c&oacute; thể y&ecirc;u cầu nh&acirc;n vi&ecirc;n Nguyễn Kim gọi lại để tiết kiệm chi ph&iacute; điện thoại.</p>\r\n	</li>\r\n	<li>\r\n	<p>Dịch vụ giao h&agrave;ng tận nơi nhanh ch&oacute;ng, tiện lợi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>TH&Ocirc;NG SỐ KỸ THUẬT</h3>\r\n\r\n<h2>Th&ocirc;ng tin chung</h2>\r\n\r\n<p>Model:</p>\r\n\r\n<p>OPTIPLEX 3046SFF 70086073</p>\r\n\r\n<p>M&agrave;u sắc:</p>\r\n\r\n<p>Đen</p>\r\n\r\n<p>Nh&agrave; sản xuất:</p>\r\n\r\n<p>Dell</p>\r\n\r\n<p>Xuất xứ:</p>\r\n\r\n<p>Trung Quốc</p>\r\n\r\n<p>Thời gian bảo h&agrave;nh:</p>\r\n\r\n<p>12 th&aacute;ng</p>\r\n\r\n<p>Địa điểm bảo h&agrave;nh:</p>\r\n\r\n<p>Nguyễn Kim</p>\r\n\r\n<h2>Bộ vi xử l&yacute; m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>CPU:</p>\r\n\r\n<p>Intel Core-i3</p>\r\n\r\n<p>Loại CPU:</p>\r\n\r\n<p>6100</p>\r\n\r\n<p>Tốc độ CPU:</p>\r\n\r\n<p>3.70 GHz</p>\r\n\r\n<p>Bộ nhớ đệm:</p>\r\n\r\n<p>3 MB Cache</p>\r\n\r\n<p>Tốc độ CPU tối đa:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<h2>Bộ nhớ m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Loại RAM:</p>\r\n\r\n<p>SDRAM DDR3</p>\r\n\r\n<p>Dung lượng RAM:</p>\r\n\r\n<p>4 GB</p>\r\n\r\n<p>Tốc độ Bus:</p>\r\n\r\n<p>1600 MHz</p>\r\n\r\n<h2>Đĩa cứng m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Loại ổ đĩa cứng:</p>\r\n\r\n<p>SATA</p>\r\n\r\n<p>Dung lượng đĩa cứng:</p>\r\n\r\n<p>500 GB</p>\r\n\r\n<h2>Đĩa quang m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>T&iacute;ch hợp ổ đĩa quang:</p>\r\n\r\n<p>C&oacute;</p>\r\n\r\n<p>Loại đĩa quang:</p>\r\n\r\n<p>SuperMulti DVD</p>\r\n\r\n<h2>Đồ họa m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Bộ xử l&yacute; đồ họa:</p>\r\n\r\n<p>Integrated Intel HD Graphics</p>\r\n\r\n<p>Chipset card đồ họa:</p>\r\n\r\n<p>Intel HD</p>\r\n\r\n<p>Dung lượng card đồ họa:</p>\r\n\r\n<p>Share</p>\r\n\r\n<h2>&Acirc;m thanh m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>C&ocirc;ng nghệ &acirc;m thanh:</p>\r\n\r\n<p>High Definition</p>\r\n\r\n<p>Chuẩn &acirc;m thanh:</p>\r\n\r\n<p>High Definition Audio</p>\r\n\r\n<h2>Kết nối m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>Cổng kết nối m&agrave;n h&igrave;nh:</p>\r\n\r\n<p>VGA</p>\r\n\r\n<p>Chuẩn WiFi:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<p>Chuẩn LAN:</p>\r\n\r\n<p>10 / 100 Mbps</p>\r\n\r\n<p>Bluetooth:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<p>Cổng USB:</p>\r\n\r\n<p>C&oacute;</p>\r\n\r\n<p>Cổng HDMI:</p>\r\n\r\n<p>Đang cập nhật</p>\r\n\r\n<p>Khe đọc thẻ nhớ:</p>\r\n\r\n<p>Đang cập nhật</p>\r\n\r\n<p>Kết nối kh&aacute;c:</p>\r\n\r\n<p>Kh&ocirc;ng</p>\r\n\r\n<h2>Hệ điều h&agrave;nh m&aacute;y t&iacute;nh để b&agrave;n</h2>\r\n\r\n<p>HĐH k&egrave;m theo m&aacute;y:</p>\r\n\r\n<p>Ubuntu</p>\r\n\r\n<h2>K&iacute;ch thước &amp; Khối lượng th&ugrave;ng</h2>\r\n\r\n<p>K&iacute;ch thước th&ugrave;ng:</p>\r\n\r\n<p>290x92x292 mm</p>\r\n\r\n<p>Khối lượng th&ugrave;ng (kg):</p>\r\n\r\n<p>6.1 kg</p>\r\n', 'OPTIPLEX 3046SFF 70086073', 21890000, 1, 24, 1, '2016-11-28 18:10:44', '2016-11-28 18:21:42', 0, 1),
(71, 'SGEH51P1', 'sgeh51p1', '', 'Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ', '', '', ' Trả góp 0%', '1495351631_avatarfac0000bw0.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p style="text-align:center"><a href="https://www.xwatch.vn/blog/bao-hiem-dong-ho-tieu-chuan-thuy-si-p2724.html" rel="noopener noreferrer" target="_blank"><img alt="chính sách bảo hành Xwatch" class="alignnone size-full wp-image-36297" src="//www.cdn.xwatch.vn/wp-content/uploads/2016/12/xw-banner-csbh.png" style="max-width:1177px; width:1200px" /></a> <img alt="chứng nhận đại lý Seiko" class="alignnone size-full wp-image-36358" src="//www.cdn.xwatch.vn/wp-content/uploads/2016/12/xw-banner-giay-chung-nhan-seiko-chinh-hang.jpg" style="max-width:1177px; width:1200px" /><img alt="" class="alignnone size-full wp-image-33822" src="//www.cdn.xwatch.vn/wp-content/uploads/2017/04/xw-doi-ngu-ki-thuat.png" style="max-width:1177px; width:1200px" /> <a href="https://www.xwatch.vn/lien-he" rel="noopener noreferrer" target="_blank"><img alt="hệ thống cửa hàng xwatch" class="alignnone size-full wp-image-34096" src="//www.cdn.xwatch.vn/wp-content/uploads/2017/04/xw-banner-he-thong-cua-hang.png" style="max-width:1177px; width:1200px" /></a><img alt="" class="alignnone size-full wp-image-32678" src="//www.cdn.xwatch.vn/wp-content/uploads/2016/12/phụ-kiện-của-Seiko.jpg" style="max-width:1177px; width:1099px" /></p>\r\n', '', 5123900, 1, 4, 1, '2017-05-21 00:27:11', '2017-06-05 16:44:51', 1, 1),
(73, 'Đồng hồ TS1', 'dong-ho-ts1', NULL, 'Không có', '', '', 'Không có', '1496392203_1495249390_avatarefr-526d-7avudf.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '<p>Đồng hồ Thụy Sĩ TS1</p>\r\n', '', 1000000, 1, 26, 1, '2017-05-28 00:27:20', '2017-05-28 00:27:20', 1, 0),
(99, 'San pham 001', 'san-pham-001', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '', '', '', '', '1496393446_1495351096_avatarfac0000bw0.png', 'https://www.youtube.com/watch?v=QzgqOuaRNZ0', '', '', 12345, 1, 15, 1, '2017-05-30 03:16:07', '2017-06-05 03:14:50', 1, 0),
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
(7, 'social', 'social icon', '2017-06-06 08:19:16', '2017-06-07 03:22:03'),
(8, 'footerLink', '<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">\r\n    <h3>GIỚI THIỆU CÔNG TY</h3>\r\n    <ul class="list-intro">\r\n      <li><a href="">Triết lý kinh doanh: Chữ tâm hàng đầu</a></li>\r\n      <li><a href="">Câu chuyện về  Watches</a></li>\r\n      <li><a href="">Giải đáp mọi thắc mắc về đồng hồ chính hãng</a></li>\r\n    </ul>\r\n  </div>\r\n  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">\r\n    <h3>CHÍNH SÁCH</h3>\r\n    <ul class="list-intro">\r\n      <li><a href="">Chính sách bảo mật</a></li>\r\n      <li><a href="">Điều khoản và điều kiện</a></li>\r\n      <li><a href="">Hướng dẫn mua hàng</a></li>\r\n      <li><a href="">Chính sách đổi trả hàng</a></li>\r\n      <li><a href="">Chính sách bảo hành</a></li>\r\n    </ul>\r\n  </div>\r\n  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">\r\n    <h3>BỘ SƯU TẬP</h3>\r\n    <ul class="list-intro">\r\n      <li><a href="">Đàn ông muốn sở hữu nhất</a></li>\r\n      <li><a href="">Phụ nữ khao khát nhất</a></li>\r\n      <li><a href="">Đồng hồ bán chạy nhất</a></li>\r\n      <li><a href="">Bộ sưu tập đặc biệt</a></li>\r\n      <li><a href="">Sản phẩm mới nhất</a></li>\r\n    </ul>\r\n  </div>', '2017-06-06 08:28:40', '2017-06-06 08:29:35'),
(9, 'buyok', '<p>Rất cảm ơn bạn đ&atilde; mua h&agrave;ng!</p>\r\n\r\n<p><strong>XWATCH.vn</strong> đ&atilde; ghi nhận đơn h&agrave;ng của bạn.<br />\r\nSẽ mất khoảng 1-2 ng&agrave;y l&agrave;m việc để ch&uacute;ng t&ocirc;i kiểm tra v&agrave; đối so&aacute;t đơn h&agrave;ng của bạn, v&agrave; giao h&agrave;ng cho bạn trong v&ograve;ng 1-2 ng&agrave;y đối với đơn giao nội th&agrave;nh hoặc 3-6 ng&agrave;y đối với đơn h&agrave;ng giao li&ecirc;n tỉnh. Kh&ocirc;ng kể chủ nhật hoặc c&aacute;c ng&agrave;y nghỉ lễ tết kh&aacute;c.</p>\r\n\r\n<p><strong><u>Xin bạn lưu &yacute;</u></strong>: Email x&aacute;c nhận Đơn h&agrave;ng đ&atilde; được gửi đến địa chỉ Email của bạn. Nếu bạn kh&ocirc;ng t&igrave;m thấy trong Hộp thư đến (Inbox) vui l&ograve;ng kiểm tra hộp thư Spam hoặc Junk Folder.</p>\r\n\r\n<p>Nếu bạn c&oacute; bất kỳ thắc mắc n&agrave;o, xin vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua đường d&acirc;y n&oacute;ng: <span style="color:#FF0000">19000325</span>.</p>\r\n\r\n<p>Tr&acirc;n trọng,<br />\r\n<strong>Đội ngũ XWATCH.vn</strong></p>\r\n', '2017-06-08 16:52:20', '2017-06-08 16:52:20'),
(10, 'hotline', '19001001', '2017-06-09 02:42:11', '2017-06-09 02:42:11');

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
(10, 'le manh toan', 'toanvn@gmail.com', '$2y$10$XRiAzlRp5rDk5R5mgzTTYuZhH7jNQ0A/cncKas7Gz1d3OhtV6TmZK', '12323234', 'hn bn', 1, 'U2uC7LaE425bJ2aTm3icwwXU9Dy9I3etJiNoVcgIpWjrK5lYEc7W8X77iDNr', '2017-06-02 07:24:59', '2017-06-02 07:29:27'),
(11, 'www', 'www@email.guest', '$2y$10$kwdaN4XHBixzUVe5mqCXdee9vQhLKfV.9apBuuT2syf8Y5qMd6kYK', 'ww', 'ww', 0, NULL, '2017-06-08 15:49:59', NULL),
(12, '121212', '121212@email.guest', '$2y$10$DS/Zz20telhHURRhhFJHN.3OxfCrpe6vu1jbXV0rIE9JB0rKLZqEi', '12121212', '1212122', 0, NULL, '2017-06-08 16:24:50', NULL),
(13, '11111', '11111@email.guest', '$2y$10$Rh9ooAx0DIby9gA9wTXwUuyK2VKCsnC4eTnCAyxkl3ERft.xiLtXm', '2222', '33333', 0, NULL, '2017-06-08 16:32:18', NULL),
(15, '111112222', '111112222@email.guest', '$2y$10$kkENaLYEPcGecXciKUtDteqW51lBqja53BaUmSdHgRVPQ4oKYvDa2', '2222222', '33333', 0, NULL, '2017-06-08 16:32:53', NULL),
(16, '3443344343', '3443344343@email.guest', '$2y$10$U0e4JRT4ovhakwF5KxhTW.NfiyxR70zJwlbn11ZXT.ee3alhmK48C', '34334', '343434', 0, NULL, '2017-06-08 16:37:34', NULL),
(18, '3443344343wwww', '3443344343wwww@email.guest', '$2y$10$YvPeRWffXMiE5q2mgSUckunLe2L0YvND.HrDBcJyBkHnHud6vNHaO', '34334ww', '343434', 0, NULL, '2017-06-08 16:37:53', NULL),
(20, '344334', '344334@email.guest', '$2y$10$u/JKVtNzm9DYgFUnpYREI.I3772pKu37RcP5fmB.G3nJVJ8jQQL/6', '34334ww', '343434', 0, NULL, '2017-06-08 16:38:41', NULL),
(21, '3443sss34', '3443sss34@email.guest', '$2y$10$GR8EIC6CEOoHTVG6fZeVGOx0/f0q5X4zKVsYTxWhjw9zLgEzSO546', '34334ww', '343434', 0, NULL, '2017-06-08 16:38:50', NULL),
(22, '222', '222@email.guest', '$2y$10$9aXF7AKDy68vASA54.N4ruX.1fXhaEVbanTHk3xmcIpRVm8cbz.na', '111', '333', 0, NULL, '2017-06-08 16:56:25', NULL),
(23, 'Toan', 'toanktvem@gmail.com', '$2y$10$rosihAn5unTqehleaxz38OMo4oxdq1yHmnAvxOGhp/XFh6uVyv632', '12345678', 'qh', 1, NULL, '2017-06-09 07:52:28', '2017-06-09 07:52:28');

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
-- Indexes for table `groupnews`
--
ALTER TABLE `groupnews`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
-- AUTO_INCREMENT for table `groupnews`
--
ALTER TABLE `groupnews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `group_watch`
--
ALTER TABLE `group_watch`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `oders_detail`
--
ALTER TABLE `oders_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
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
