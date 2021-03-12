-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 04:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlykhachsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `link`, `prioty`, `position`, `status`, `descript`, `created_at`, `updated_at`) VALUES
(4, 'Avason', 'hero-bg-1.jpg', '123456', '1', '1', '1', 'Luxury Living', '2020-07-24 03:56:33', '2020-07-24 03:56:33'),
(7, 'Avason', 'hero-bg-2.jpg', '123456', '2', '2', '1', 'Luxury Living', '2020-07-24 04:08:06', '2020-07-24 04:08:06'),
(8, 'Welcome To Avson Modern Hotel Room Sells Services', '01.jpg', 'linh tinh', '3', '3', '1', 'But I must explain to you how all this mistaken idea denouncing pleasure and praising pain was born and I will give you a complec ount of the system, and expound the actual teachin reatexplorer of the truth, the master-builder of human happiness. No ways one rejdislikes, or avoids pleasure itself, because', '2020-07-24 08:19:02', '2020-07-24 08:19:02'),
(9, 'Booking Now', 'breadcrumb-01.jpg', 'hahahaha', '4', '4', '1', 'Looking For Luxury Hotel', '2020-07-24 08:55:59', '2020-07-24 08:55:59'),
(10, 'Deluxe Rooms', '01.jpg', '123456', '1', '5', '1', 'Couple Room Deluxe', '2020-07-27 01:33:37', '2020-07-27 01:33:37'),
(11, 'Deluxe Rooms', '02.jpg', '123456', '2', '5', '1', 'Couple Room Deluxe', '2020-07-27 01:37:06', '2020-07-27 01:37:06'),
(12, 'Deluxe Rooms', 'banner-03.jpg', '123456', '3', '5', '1', 'Couple Room Deluxe', '2020-07-27 01:40:00', '2020-07-27 01:40:00'),
(13, 'Deluxe Rooms', 'gird-07.jpg', '123456', '4', '5', '1', 'Couple Room Deluxe', '2020-07-27 01:53:03', '2020-07-27 01:53:03'),
(14, 'Deluxe Rooms', '05.jpg', '123456', '5', '5', '1', 'Couple Room Deluxe', '2020-07-27 01:54:26', '2020-07-27 01:54:26'),
(15, 'Popular Features', '02.jpg', '123456', '1', '6', '1', 'We Care You & We Feel What’s Needs For Good Living', '2020-07-27 01:57:23', '2020-07-27 01:57:23'),
(17, 'Blog Standard', 'blog-breadcrumb.jpg', '123456', '1', '7', '1', 'Blogs', '2020-07-27 03:36:01', '2020-07-27 03:36:01'),
(18, 'Our Staffs', 'breadcrumb-01.jpg', 'Staffs', '1', '8', '1', 'Staffs', '2020-07-27 09:37:33', '2020-07-27 09:37:33'),
(19, 'Our Restaurant', 'breadcrumb-01.jpg', 'Our Restaurant', '1', '9', '1', 'Restaurant', '2020-07-28 07:04:25', '2020-07-28 07:04:25'),
(20, 'Our Gallery', 'breadcrumb-01.jpg', 'Our Gallery', '1', '14', '1', 'Gallery', '2020-07-28 09:20:38', '2020-07-28 09:20:38'),
(21, 'Our Room', 'breadcrumb-01.jpg', 'Our Room', '1', '10', '1', 'Room Grid', '2020-07-29 03:54:04', '2020-07-29 03:54:04'),
(22, 'Room Details', 'blog-breadcrumb.jpg', 'Details', '1', '11', '1', 'Details', '2020-07-30 02:49:52', '2020-07-30 02:49:52'),
(23, 'Blog Details', 'breadcrumb-02.jpg', 'Blog Details', '1', '12', '1', 'Blog', '2020-08-13 08:11:23', '2020-08-13 08:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_descript` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `name`, `slug`, `image`, `summary`, `content`, `status`, `meta_key`, `meta_title`, `meta_descript`, `created_at`, `updated_at`) VALUES
(1, 'CSS Grid Challenge Build A Template, Win Some Smashing Prizes!', '17', '01.jpg', 'CSS Grid Challenge Build A Template, Win Some Smashing Prizes!', 'CSS Grid Challenge Build A Template, Win Some Smashing Prizes!', '1', '1', 'Viet Anh', '20 jan 2020', '2020-07-27 03:58:47', '2020-07-27 03:58:47'),
(2, 'Building Pattern Libraries With Shadow Dom in Markdown', '2', '02.jpg', 'Building Pattern Libraries With Shadow Dom in Markdown', 'Building Pattern Libraries With Shadow Dom in Markdown', '1', '2', 'ha', '17 jan 2020', '2020-07-27 04:16:28', '2020-07-27 04:16:28'),
(3, 'Challenge Yourself More Often By Creating Artwork Every Day Shadow Markdown', '3', '03.jpg', 'Challenge Yourself More Often By Creating Artwork Every Day Shadow Markdown', 'Challenge Yourself More Often By Creating Artwork Every Day Shadow Markdown', '1', '3', 'nguyen viet anh', '26 jan 2020', '2020-07-27 07:26:54', '2020-07-27 07:26:54'),
(4, 'Things To Keep In Mind When Designing Transportation Map Weather', '4', '04.jpg', 'Things To Keep In Mind When Designing Transportation Map Weather', 'Things To Keep In Mind When Designing Transportation Map Weather', '1', '4', 'kien', '20 jan 2020', '2020-07-27 07:28:17', '2020-07-27 07:28:17'),
(5, 'Quick Win For Impre Perfor Securitys.', '5', 'gird-01.jpg', 'Quick Win For Impre Perfor Securitys.', 'Quick Win For Impre Perfor Securitys.', '1', '5', 'Quick Win For Impre Perfor Securitys.', '<p>05 Feb 2020</p>', '2020-07-27 07:36:29', '2020-07-27 07:36:29'),
(6, 'Quick Win For Impre Perfor Securitys', '6', 'gird-09.jpg', 'Quick Win For Impre Perfor Securitys', 'Quick Win For Impre Perfor Securitys', '1', '6', 'Quick Win For Impre Perfor Securitys.', '<p>05 Feb 2020</p>', '2020-07-27 07:39:04', '2020-07-27 07:39:04'),
(7, 'Quick Win For Impre Perfor Securitys.', '8', 'gird-06.jpg', 'Quick Win For Impre Perfor Securitys.', 'Quick Win For Impre Perfor Securitys.', '1', '7', 'Quick Win For Impre Perfor Securitys.', '<p>05 Feb 2020</p>', '2020-07-27 07:39:59', '2020-07-27 07:39:59'),
(11, 'Booking Your Latest apartment', '10', 'gird-07.jpg', 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod tempor incididunt ut labore', 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod tempor incididunt ut labore', '1', '11', 'viet anh', '<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit sed do eiusmod tempor incididunt ut labore</p>', '2020-07-27 08:33:33', '2020-07-27 08:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `name`, `email`, `phone`, `address`, `city`, `country`, `total`, `start_date`, `end_date`, `note`, `payment_id`, `status`) VALUES
(60, 6, 'Viet Anh', 'nguyenvietanh262001@gmail.com', '0926112001', 'Ha Noi', 'Ha noi', 'Ha noi', '313', '2020-08-20', '2020-08-22', 'hahahaha', 2, 'Đã xử lý'),
(61, 7, 'việt anh', 'nguyenvietanh262001@gmail.com', '0926112001', 'hanoi', 'hanoi', 'việt nam', '229', '2020-08-20', '2020-08-24', 'lllllllll', 1, 'Đã xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `booking_room`
--

CREATE TABLE `booking_room` (
  `booking_room_id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_room`
--

INSERT INTO `booking_room` (`booking_room_id`, `booking_id`, `name`, `price`, `status`, `room_id`, `start_date`, `end_date`) VALUES
(68, 60, 'Modern Guest Rooms', '170', 'Đang chờ xử lý', 1, '2020-08-20 00:00:00', '2020-08-22 00:00:00'),
(69, 61, 'Modern Guest Rooms', '170', 'Đang chờ xử lý', 1, '2020-08-20 00:00:00', '2020-08-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `booking_room_service`
--

CREATE TABLE `booking_room_service` (
  `booking_room_id` int(100) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resturent_service_id` bigint(20) UNSIGNED NOT NULL,
  `quatity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_room_service`
--

INSERT INTO `booking_room_service` (`booking_room_id`, `room_id`, `name`, `price`, `status`, `resturent_service_id`, `quatity`, `created_at`, `updated_at`) VALUES
(68, 1, 'Special Hot Burger', 29, 'Đang chờ xử lý', 4, '2', '2020-08-20 02:31:36', '2020-08-20 02:31:36'),
(68, 1, 'Italian Supper Pizza', 85, 'Đang chờ xử lý', 5, '1', '2020-08-20 02:31:36', '2020-08-20 02:31:36'),
(69, 1, 'London Mashroom', 59, 'Đang chờ xử lý', 3, '1', '2020-08-20 02:35:07', '2020-08-20 02:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_gallery`
--

CREATE TABLE `category_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_gallery`
--

INSERT INTO `category_gallery` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Luxury', '1', '2020-07-28 09:58:14', '2020-07-28 09:58:14'),
(3, 'Twieen', '1', '2020-07-28 09:58:33', '2020-07-28 09:58:33'),
(4, 'Family', '1', '2020-07-28 09:58:45', '2020-07-28 09:58:45'),
(5, 'Couple', '1', '2020-07-28 09:59:02', '2020-07-28 09:59:02'),
(6, 'Conference', '1', '2020-07-28 09:59:15', '2020-07-28 09:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `image`, `status`, `description`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Andrew Simmons', 'public/uploads/employee\\01.jpgdcd7237e25dba7d7c21e576e0a28f56f', '1', 'CEO & Founder', 'CEO & Founder', '2020-07-27 09:21:20', '2020-07-27 09:21:20'),
(2, 'Dean Santiago', 'public/uploads/employee\\02.jpg0c3a239381aa276a0cee0b1e40abba47', '1', 'Dean Santiago', 'General Manager', '2020-07-27 09:25:04', '2020-07-27 09:25:04'),
(3, 'Kevin P. Tucker', 'public/uploads/employee\\03.jpgda2fa2cfab7c86ae5efd1331b0db111b', '1', 'Kevin P. Tucker', 'HS Manager', '2020-07-27 09:27:32', '2020-07-27 09:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`, `status`, `prioty`, `created_at`, `updated_at`) VALUES
(2, 'Luxuey Hotel', '08.jpg', '1', 'Luxuey Hotel', '2020-07-28 09:26:24', '2020-07-28 09:26:24'),
(3, 'Twieen Hotel', '02.jpg', '1', 'Twieen Hotel', '2020-07-28 09:27:14', '2020-07-28 09:27:14'),
(4, 'Couple Hotel', '03.jpg', '1', 'Couple', '2020-07-28 09:27:42', '2020-07-28 09:27:42'),
(5, 'Family Hotel', '04.jpg', '1', 'Family', '2020-07-28 09:28:08', '2020-07-28 09:28:08'),
(6, 'Conference Hotel', '05.jpg', '1', 'Conference', '2020-07-28 09:28:45', '2020-07-28 09:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `status`, `prioty`, `created_at`, `updated_at`) VALUES
(8, 'Hà Nội', '1', '1', '2020-07-28 19:18:37', '2020-07-28 19:18:37'),
(9, 'Hồ Chí Minh', '1', '2', '2020-07-28 19:18:53', '2020-07-28 19:18:53'),
(10, 'Đà Nẵng', '1', '3', '2020-07-28 19:19:05', '2020-07-28 19:19:05'),
(11, 'Đà Lạt', '1', '4', '2020-07-28 19:19:22', '2020-07-28 19:19:22'),
(12, 'Nha Trang', '1', '5', '2020-07-28 19:19:35', '2020-07-28 19:19:35');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_01_084620_create_table_room_category', 1),
(4, '2020_07_01_091510_create_location', 1),
(5, '2020_07_01_094030_create_room', 1),
(6, '2020_07_02_030411_create_banner', 1),
(7, '2020_07_02_030924_create_blog', 1),
(8, '2020_07_02_031518_create_user', 1),
(9, '2020_07_02_032235_create_room_ragrating', 1),
(10, '2020_07_02_034935_create_comment', 1),
(11, '2020_07_02_041653_create_payment_method', 1),
(12, '2020_07_02_041908_create_booking', 1),
(13, '2020_07_02_045230_create_booking_room', 1),
(14, '2020_07_06_021810_create_service', 1),
(15, '2020_07_06_022322_create_rooms_service', 1),
(16, '2020_07_06_025812_create_booking_room_service', 1),
(17, '2020_07_06_031514_create_resturent_service_room', 1),
(18, '2020_07_06_031924_create_resturent_service', 1),
(19, '2020_07_06_032119_create_category_gallery', 1),
(20, '2020_07_06_032223_create_gallery', 1),
(21, '2020_07_06_032344_create_subcrise', 1),
(22, '2020_07_06_033602_create_employee', 1),
(23, '2020_07_06_082359_create_config', 1),
(24, '2020_07_06_082625_create_feedback', 1),
(25, '2020_07_07_071359_create_categories_table', 1),
(26, '2020_07_10_020219_create_model_banners_table', 1),
(27, '2020_07_10_073427_create_modellocations_table', 1),
(28, '2020_07_13_023415_create_useradmin', 1),
(29, '2020_07_13_041643_create_modeluseradmins_table', 1),
(30, '2020_07_13_072702_create_modelrooms_table', 1),
(31, '2020_07_14_093543_create_modelservices_table', 1),
(32, '2020_07_15_093155_create_modelroomservices_table', 1),
(33, '2020_07_16_021416_create_modelblogs_table', 1),
(34, '2020_07_16_035630_create_modelpayment_methods_table', 1),
(35, '2020_07_20_025812_create_modelusers_table', 1),
(36, '2020_07_21_020631_create_model_employees_table', 1),
(37, '2020_07_21_034039_create_model_galleries_table', 1),
(38, '2020_07_22_021039_create_model_category_galleries_table', 1),
(39, '2020_07_22_081245_create_model_resturentservices_table', 2),
(40, '2020_07_28_074457_add_attribute_status_into_resturent_service_table', 3),
(41, '2020_08_09_162435_remove_user_domain_name_from_user', 4),
(42, '2020_08_13_040031_create_model_orderbookings_table', 5),
(43, '2020_08_13_092400_create_model_orderbooking_rooms_table', 5),
(44, '2020_08_13_095059_create_model_orderbooking_services_table', 5),
(45, '2020_08_14_072333_alter_column_code_and_time_code_in_user', 5);

-- --------------------------------------------------------

--
-- Table structure for table `modelblogs`
--

CREATE TABLE `modelblogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modellocations`
--

CREATE TABLE `modellocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modelpayment_methods`
--

CREATE TABLE `modelpayment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modelrooms`
--

CREATE TABLE `modelrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modelroomservices`
--

CREATE TABLE `modelroomservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modelservices`
--

CREATE TABLE `modelservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modeluseradmins`
--

CREATE TABLE `modeluseradmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modelusers`
--

CREATE TABLE `modelusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_banners`
--

CREATE TABLE `model_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_category_galleries`
--

CREATE TABLE `model_category_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_employees`
--

CREATE TABLE `model_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_galleries`
--

CREATE TABLE `model_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_orderbookings`
--

CREATE TABLE `model_orderbookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_orderbooking_rooms`
--

CREATE TABLE `model_orderbooking_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_orderbooking_services`
--

CREATE TABLE `model_orderbooking_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_resturentservices`
--

CREATE TABLE `model_resturentservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `name`, `status`, `prioty`, `created_at`, `updated_at`) VALUES
(1, 'cart', '1', 'cart', '2020-08-10 07:05:45', '2020-08-10 07:05:45'),
(2, 'sau khi nhận phòng', '1', '2', '2020-08-10 07:08:28', '2020-08-10 07:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `resturent_service`
--

CREATE TABLE `resturent_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resturent_service`
--

INSERT INTO `resturent_service` (`id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`, `status`) VALUES
(3, 'London Mashroom', '59', 'Toil and pain can procure food him some great pleasure to take a trivial', 'public/uploads/resturentservice\\01.jpg', '2020-07-28 08:42:55', '2020-07-28 08:42:55', '1'),
(4, 'Special Hot Burger', '29', 'Toil and pain can procure food him some great pleasure to take a trivial', 'public/uploads/resturentservice\\02.jpg', '2020-07-28 08:44:45', '2020-07-28 08:44:45', '1'),
(5, 'Italian Supper Pizza', '85', 'Toil and pain can procure food him some great pleasure to take a trivial', 'public/uploads/resturentservice\\03.jpg', '2020-07-28 08:45:46', '2020-07-28 08:45:46', '1'),
(6, 'Special Hot Burger', '47', 'Toil and pain can procure food him some great pleasure to take a trivial', 'public/uploads/resturentservice\\11.jpg', '2020-07-28 08:46:46', '2020-07-28 08:46:46', '1'),
(7, 'Italian Supper Pizza', '17', 'Toil and pain can procure food him some great pleasure to take a trivial', 'public/uploads/resturentservice\\04.jpg', '2020-07-28 09:11:04', '2020-07-28 09:11:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `resturent_service_room`
--

CREATE TABLE `resturent_service_room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(13,3) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `name`, `image`, `price`, `description`, `category_id`, `content`, `area`, `bed`, `bath`, `location_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Modern Guest Rooms', '01.jpg', 170.000, 'Avoids pleasure itself, because pleasure, but because those who do not know how to pursue pleasure rationally encounter', 5, 'Guest House', '1', '2', '71', 8, '1', '2020-07-29 02:23:29', '2020-07-29 02:23:29'),
(2, 'Conference Room', '02.jpg', 260.000, 'Great explorer of the truth, the master- builder of human happiness one rejects, dislikes avoids pleasure because', 2, 'Meeting Room', '1', '1', '50', 9, '1', '2020-07-29 02:26:33', '2020-07-29 02:26:33'),
(3, 'Deluxe Couple Room', '03.jpg', 200.000, 'Provident, similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum fuga. Et harum quidem', 3, 'Couple Room', '2', '3', '60', 12, '1', '2020-07-29 02:29:01', '2020-07-29 02:29:01'),
(4, 'Study & Library Rooms', '04.jpg', 300.000, 'Avoids pleasure itself, because pleasure, but because those who do not know how to pursue pleasure rationally encounter', 4, 'Study & Library', '3', '3', '100', 10, '1', '2020-07-29 02:30:34', '2020-07-29 02:30:34'),
(5, 'Room King', '05.jpg', 500.000, 'Great explorer of the truth, the master- builder of human happiness one rejects, dislikes avoids pleasure because', 5, 'King', '2', '3', '170', 10, '1', '2020-07-29 02:32:45', '2020-07-29 02:32:45'),
(6, 'Hollywood Twin Room', '14.jpg', 170.000, 'Great explorer of the truth, the master- builder of human happiness one rejects, dislikes avoids pleasure because', 2, 'Hollywood Twin', '2', '3', '80', 8, '1', '2020-07-29 02:34:06', '2020-07-29 02:34:06'),
(7, 'Mini Suite/Junior Suite', '11.jpg', 240.000, 'Great explorer of the truth, the master- builder of human happiness one rejects, dislikes avoids pleasure because', 4, 'Junior', '1', '2', '100', 11, '1', '2020-08-18 07:38:16', '2020-08-18 07:38:16'),
(8, 'Connecting room', '05.jpg', 210.000, '<table id=\"example1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Avoids pleasure itself, because pleasure, but because those who do not know how to pursue pleasure rationally encounter</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 5, '<p>Connecting&nbsp;</p>', '3', '3', '170', 8, '1', '2020-08-18 07:43:26', '2020-08-18 07:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_service`
--

CREATE TABLE `rooms_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms_service`
--

INSERT INTO `rooms_service` (`id`, `service_id`, `room_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 6, '1', '2020-08-10 13:56:26', '2020-08-10 13:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_descritp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prioty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`category_id`, `name`, `slug`, `image`, `status`, `meta_title`, `meta_descritp`, `prioty`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(2, 'Room Single', 'Single', '03.jpg', '1', 'Single', 'Single', '1', 'Single', '2020-07-28 19:15:51', '2020-07-28 19:15:51'),
(3, 'Room Double', 'Double', '01.jpg', '1', 'Double', 'Double', '2', 'Double', '2020-07-28 19:16:22', '2020-07-28 19:16:22'),
(4, 'Room Tripple', 'Tripple', '12.jpg', '1', 'Tripple', 'Tripple', '3', 'Tripple', '2020-07-28 19:17:05', '2020-07-28 19:17:05'),
(5, 'Room Queen', 'Queen', '05.jpg', '1', 'Queen', 'Queen', '4', 'Queen', '2020-07-28 19:17:50', '2020-07-28 19:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `room_ragrating`
--

CREATE TABLE `room_ragrating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `star_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Rooms & Appartment', '65', 'Great explorer of the truth the ter-blde human happiness one reject', 'public/uploads/service\\01.png', '2020-08-10 13:51:39', '2020-08-10 13:51:39'),
(2, 'Food & Restaurant', '170', 'Great explorer of the truth the ter-blde human happiness one reject', 'public/uploads/service\\02.png', '2020-08-10 13:54:32', '2020-08-10 13:54:32'),
(3, 'Spa & Fitness', '150', 'Great explorer of the truth the ter-blde human happiness one reject', 'public/uploads/service\\03.png', '2020-08-10 13:55:05', '2020-08-10 13:55:05'),
(4, 'Sports & Gaming', '170', 'Great explorer of the truth the ter-blde human happiness one reject', 'public/uploads/service\\04.png', '2020-08-11 02:42:44', '2020-08-11 02:42:44'),
(5, 'Event & Party', '90', 'Great explorer of the truth the ter-blde human happiness one reject', 'public/uploads/service\\05.png', '2020-08-11 02:43:32', '2020-08-11 02:43:32'),
(6, 'GYM & Yoga', '260', 'Great explorer of the truth the ter-blde human happiness one reject', 'public/uploads/service\\06.png', '2020-08-11 02:44:19', '2020-08-11 02:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `subcrise`
--

CREATE TABLE `subcrise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`, `code`, `time_code`) VALUES
(2, 'vietanh17', 'vietanh@gmail.com', '0123456789', 'ssss', 'e10adc3949ba59abbe56e057f20f883e', '2020-08-09 17:04:51', '2020-08-09 17:04:51', NULL, NULL),
(4, 'vietanh', 'nguyenvietanh@gmail.com', '0123456789', 'hanoi', '8a94d51ed265d68538fa5a912bcbd172', '2020-08-10 02:13:31', '2020-08-10 02:13:31', NULL, NULL),
(5, 'vietanh', 'haha@gmail.com', '0926112001', 'hanoi', '25d55ad283aa400af464c76d713c07ad', '2020-08-17 05:54:38', '2020-08-16 23:00:49', '$2y$10$9myMnNMEaatovpVJpT1p0.oniJ/1L6hDUYbgdvlnZbo1lWx4HtfC2', '2020-08-16 23:00:49'),
(6, 'Viet Anh', 'nguyenvietanh262001@gmail.com', '0926112001', 'hanoi', '8a94d51ed265d68538fa5a912bcbd172', '2020-08-17 06:08:48', '2020-08-19 18:58:18', NULL, '2020-08-19 18:57:45'),
(7, 'kien', 'vietnam9com@gmail.com', '0926112001', 'hanoi', '25d55ad283aa400af464c76d713c07ad', '2020-08-17 06:13:59', '2020-08-16 23:24:42', '$2y$10$JgJvW0f6nJa7g1fU513y9.LZFZc.WAK1YMitzsZDB25v7xegadAdq', '2020-08-16 23:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'nguyenvietanh262001@gmail.com', '8a94d51ed265d68538fa5a912bcbd172', 'Việt Anh', '0926112001', '2020-07-22 09:16:06', '2020-07-22 09:16:06'),
(2, 'nguyenvietanh262001@gmail.com', '8a94d51ed265d68538fa5a912bcbd172', 'Việt Anh', '0926112001', '2020-07-31 02:44:51', '2020-07-31 02:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_id_user_id` (`user_id`),
  ADD KEY `booking_payment_id` (`payment_id`);

--
-- Indexes for table `booking_room`
--
ALTER TABLE `booking_room`
  ADD PRIMARY KEY (`booking_room_id`),
  ADD KEY `booking_room_room_id_foreign` (`room_id`),
  ADD KEY `booking_room_booking_id` (`booking_id`);

--
-- Indexes for table `booking_room_service`
--
ALTER TABLE `booking_room_service`
  ADD KEY `booking_room_service_booking_room_id_foreign` (`booking_room_id`),
  ADD KEY `booking_room_service_room_id_foreign` (`room_id`),
  ADD KEY `resturent_service_id_booking_service` (`resturent_service_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_blog_id_foreign` (`blog_id`),
  ADD KEY `comment_user_id_foreign` (`user_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelblogs`
--
ALTER TABLE `modelblogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modellocations`
--
ALTER TABLE `modellocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelpayment_methods`
--
ALTER TABLE `modelpayment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelrooms`
--
ALTER TABLE `modelrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelroomservices`
--
ALTER TABLE `modelroomservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelservices`
--
ALTER TABLE `modelservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modeluseradmins`
--
ALTER TABLE `modeluseradmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelusers`
--
ALTER TABLE `modelusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_banners`
--
ALTER TABLE `model_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_category_galleries`
--
ALTER TABLE `model_category_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_employees`
--
ALTER TABLE `model_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_galleries`
--
ALTER TABLE `model_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_orderbookings`
--
ALTER TABLE `model_orderbookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_orderbooking_rooms`
--
ALTER TABLE `model_orderbooking_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_orderbooking_services`
--
ALTER TABLE `model_orderbooking_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_resturentservices`
--
ALTER TABLE `model_resturentservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturent_service`
--
ALTER TABLE `resturent_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturent_service_room`
--
ALTER TABLE `resturent_service_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resturent_service_room_room_id_foreign` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_category_id_foreign` (`category_id`),
  ADD KEY `room_location_id_foreign` (`location_id`);

--
-- Indexes for table `rooms_service`
--
ALTER TABLE `rooms_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_service_service_id_foreign` (`service_id`),
  ADD KEY `rooms_service_room_id_foreign` (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `room_ragrating`
--
ALTER TABLE `room_ragrating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_ragrating_room_id_foreign` (`room_id`),
  ADD KEY `room_ragrating_user_id_foreign` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `subcrise`
--
ALTER TABLE `subcrise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_code_index` (`code`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`admin_id`);

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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `booking_room`
--
ALTER TABLE `booking_room`
  MODIFY `booking_room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `modelblogs`
--
ALTER TABLE `modelblogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modellocations`
--
ALTER TABLE `modellocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modelpayment_methods`
--
ALTER TABLE `modelpayment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modelrooms`
--
ALTER TABLE `modelrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modelroomservices`
--
ALTER TABLE `modelroomservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modelservices`
--
ALTER TABLE `modelservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modeluseradmins`
--
ALTER TABLE `modeluseradmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modelusers`
--
ALTER TABLE `modelusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_banners`
--
ALTER TABLE `model_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_category_galleries`
--
ALTER TABLE `model_category_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_employees`
--
ALTER TABLE `model_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_galleries`
--
ALTER TABLE `model_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_orderbookings`
--
ALTER TABLE `model_orderbookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_orderbooking_rooms`
--
ALTER TABLE `model_orderbooking_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_orderbooking_services`
--
ALTER TABLE `model_orderbooking_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_resturentservices`
--
ALTER TABLE `model_resturentservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resturent_service`
--
ALTER TABLE `resturent_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resturent_service_room`
--
ALTER TABLE `resturent_service_room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms_service`
--
ALTER TABLE `rooms_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room_ragrating`
--
ALTER TABLE `room_ragrating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcrise`
--
ALTER TABLE `subcrise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_id_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `booking_payment_id` FOREIGN KEY (`payment_id`) REFERENCES `payment_method` (`id`);

--
-- Constraints for table `booking_room`
--
ALTER TABLE `booking_room`
  ADD CONSTRAINT `booking_room_booking_id` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `booking_room_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `booking_room_service`
--
ALTER TABLE `booking_room_service`
  ADD CONSTRAINT `booking_room_service_booking_room_id_foreign` FOREIGN KEY (`booking_room_id`) REFERENCES `booking_room` (`booking_room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_room_service_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resturent_service_id_booking_service` FOREIGN KEY (`resturent_service_id`) REFERENCES `resturent_service` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`),
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `resturent_service_room`
--
ALTER TABLE `resturent_service_room`
  ADD CONSTRAINT `resturent_service_room_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `room_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms_service`
--
ALTER TABLE `rooms_service`
  ADD CONSTRAINT `rooms_service_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_ragrating`
--
ALTER TABLE `room_ragrating`
  ADD CONSTRAINT `room_ragrating_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`),
  ADD CONSTRAINT `room_ragrating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
