-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2017 at 12:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2016_01_15_105324_create_roles_table', 1),
(28, '2016_01_15_114412_create_role_user_table', 1),
(29, '2016_01_26_115212_create_permissions_table', 1),
(30, '2016_01_26_115523_create_permission_role_table', 1),
(31, '2016_02_09_132439_create_permission_user_table', 1),
(32, '2017_03_09_082449_create_social_logins_table', 1),
(33, '2017_03_09_082526_create_activations_table', 1),
(34, '2017_03_20_213554_create_themes_table', 1),
(35, '2017_03_21_042918_create_profiles_table', 1),
(36, '2017_04_15_065309_create_simple_table', 1),
(37, '2017_06_26_132626_create_parking_table', 2),
(38, '2017_06_27_104136_create_AssignParking', 3),
(39, '2017_07_04_101615_create_parkingTypes', 4),
(40, '2017_07_10_114033_create_vehicleManage', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `model`, `created_at`, `updated_at`) VALUES
(1, 'Can View Users', 'view.users', 'Can view users', 'Permission', '2017-06-23 07:36:08', '2017-06-23 07:36:08'),
(2, 'Can Create Users', 'create.users', 'Can create new users', 'Permission', '2017-06-23 07:36:08', '2017-06-23 07:36:08'),
(3, 'Can Edit Users', 'edit.users', 'Can edit users', 'Permission', '2017-06-23 07:36:08', '2017-06-23 07:36:08'),
(4, 'Can Delete Users', 'delete.users', 'Can delete users', 'Permission', '2017-06-23 07:36:09', '2017-06-23 07:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-06-23 07:36:09', '2017-06-23 07:36:09'),
(2, 2, 1, '2017-06-23 07:36:09', '2017-06-23 07:36:09'),
(3, 3, 1, '2017-06-23 07:36:09', '2017-06-23 07:36:09'),
(4, 4, 1, '2017-06-23 07:36:09', '2017-06-23 07:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `theme_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `twitter_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `theme_id`, `location`, `bio`, `twitter_username`, `github_username`, `avatar`, `avatar_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, '2017-06-23 07:36:13', '2017-06-23 07:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'Admin Role', 5, '2017-06-23 07:36:09', '2017-06-23 07:36:09'),
(2, 'Owner', 'owner', 'Owner Role', 1, '2017-06-23 07:36:09', '2017-06-23 07:36:09'),
(3, 'Manager', 'manager', 'Manager Role', 1, '2017-06-23 07:36:09', '2017-06-23 07:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-06-23 07:36:13', '2017-06-23 07:36:13'),
(5, 2, 5, '2017-06-23 07:59:35', '2017-06-23 07:59:35'),
(7, 3, 7, '2017-06-23 23:59:33', '2017-06-23 23:59:33'),
(8, 3, 8, '2017-06-26 00:08:28', '2017-06-26 00:08:28'),
(9, 3, 9, '2017-06-27 04:52:32', '2017-06-27 04:52:32'),
(10, 3, 10, '2017-06-28 08:03:49', '2017-06-28 08:03:49'),
(11, 3, 11, '2017-06-28 08:04:16', '2017-06-28 08:04:16'),
(17, 2, 18, '2017-06-30 04:31:47', '2017-06-30 04:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `simple`
--

CREATE TABLE `simple` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignParking`
--

CREATE TABLE `tbl_assignParking` (
  `id` int(10) UNSIGNED NOT NULL,
  `parking_id` int(11) DEFAULT NULL,
  `manager_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organiser_id` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_assignParking`
--

INSERT INTO `tbl_assignParking` (`id`, `parking_id`, `manager_id`, `organiser_id`, `created_at`, `updated_at`) VALUES
(18, 11, '8,9', '5', NULL, '2017-06-28 07:11:38'),
(19, 7, '8,9', '5', '2017-06-28 07:12:04', '2017-06-28 07:12:04'),
(21, 13, ',10,9', '5', '2017-06-28 23:56:13', '2017-06-28 23:57:28'),
(25, 17, '8,9,10', '5', '2017-06-29 23:32:49', '2017-06-30 23:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parking`
--

CREATE TABLE `tbl_parking` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parkingRate` int(11) NOT NULL,
  `parking_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organiser_id` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_parking`
--

INSERT INTO `tbl_parking` (`id`, `name`, `city`, `location`, `parkingRate`, `parking_type`, `organiser_id`, `created_at`, `updated_at`) VALUES
(7, 'iskon', 'ahmedabad', 'S.G. High way .', 10, '8', 5, '2017-06-27 06:12:25', '2017-07-06 00:52:36'),
(11, 'ujala', 'ahmedabad', 'S.G. High way .', 11, '9', 5, '2017-06-28 05:55:33', '2017-07-04 23:27:33'),
(13, 'thaltej', 'ahmedabad', 'ahmedabad', 15, '7', 5, '2017-06-28 23:56:13', '2017-07-04 23:27:22'),
(17, 'shamal', 'ahmedabad', 'ahmedabad', 20, '9', 5, '2017-06-29 23:32:49', '2017-07-04 23:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parkingTypes`
--

CREATE TABLE `tbl_parkingTypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `parkingType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organiser_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_parkingTypes`
--

INSERT INTO `tbl_parkingTypes` (`id`, `parkingType`, `organiser_id`, `created_at`, `updated_at`) VALUES
(7, '2 wheeler', 5, '2017-07-04 07:24:11', '2017-07-04 07:24:56'),
(8, '3 wheeler', 5, '2017-07-04 07:24:27', '2017-07-04 07:25:09'),
(9, '4 wheeler', 5, '2017-07-04 07:25:23', '2017-07-04 07:25:23'),
(10, 'hevy load wheeler', 5, '2017-07-04 07:25:48', '2017-07-04 07:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `id` int(10) UNSIGNED NOT NULL,
  `driverName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicleNo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileNo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managerId` int(11) DEFAULT NULL,
  `parkingId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`id`, `driverName`, `vehicleNo`, `mobileNo`, `managerId`, `parkingId`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'gj-1-2154', '9033336111', 8, 17, '2017-07-11 02:04:44', '2017-07-11 23:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `link`, `notes`, `status`, `taggable_id`, `taggable_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Default', 'null', NULL, 1, 1, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(2, 'Darkly', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css', NULL, 1, 2, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(3, 'Cyborg', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css', NULL, 1, 3, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(4, 'Cosmo', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css', NULL, 1, 4, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(5, 'Cerulean', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css', NULL, 1, 5, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(6, 'Flatly', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css', NULL, 1, 6, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(7, 'Journal', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css', NULL, 1, 7, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(8, 'Lumen', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css', NULL, 1, 8, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(9, 'Paper', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css', NULL, 1, 9, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(10, 'Readable', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css', NULL, 1, 10, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:10', NULL),
(11, 'Sandstone', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css', NULL, 1, 11, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:11', NULL),
(12, 'Simplex', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css', NULL, 1, 12, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:11', NULL),
(13, 'Slate', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css', NULL, 1, 13, 'theme', '2017-06-23 07:36:09', '2017-06-23 07:36:11', NULL),
(14, 'Spacelab', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css', NULL, 1, 14, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(15, 'Superhero', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css', NULL, 1, 15, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(16, 'United', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css', NULL, 1, 16, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(17, 'Yeti', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css', NULL, 1, 17, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(18, 'Bootstrap 4.0.0 Alpha', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', NULL, 1, 18, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(19, 'Materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css', NULL, 1, 19, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(20, 'Bootstrap Material Design 0.3.0', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css', NULL, 1, 20, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(21, 'Bootstrap Material Design 0.5.10', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css', NULL, 1, 21, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(22, 'Bootstrap Material Design 4.0.0', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.0/bootstrap-material-design.min.css', NULL, 1, 22, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:11', NULL),
(23, 'Bootstrap Material Design 4.0.2', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.min.css', NULL, 1, 23, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:12', NULL),
(24, 'mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.1/css/mdb.min.css', NULL, 1, 24, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:12', NULL),
(25, 'bootflat', 'https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css', NULL, 1, 25, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:12', NULL),
(26, 'flat-ui', 'https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css', NULL, 1, 26, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:12', NULL),
(27, 'm8tro-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/m8tro-bootstrap/3.3.7/m8tro.min.css', NULL, 1, 27, 'theme', '2017-06-23 07:36:10', '2017-06-23 07:36:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_data` int(11) DEFAULT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noManagerCreate` int(11) DEFAULT NULL,
  `noParkingCreate` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_confirmation_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_sm_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `password`, `role_data`, `user_role_id`, `mobile`, `noManagerCreate`, `noParkingCreate`, `remember_token`, `activated`, `token`, `signup_ip_address`, `signup_confirmation_ip_address`, `signup_sm_ip_address`, `admin_ip_address`, `created_at`, `updated_at`) VALUES
(1, 'laron19', 'Sally', 'Gottlieb', 'admin@admin.com', '$2y$10$5EmQpeaiA6FlWuCq5OIFReUPEkyvoSSmcnbDtqw02NeWhaEz8aDU2', 1, NULL, '9874859655', NULL, NULL, 'bk3GKdrVBW3e7HidbuLuKniCQYlqqwmEwZkeUIKfvkSVje2wMmly3USt11R7', 1, 'OLqmN27y5vKsYm0sBs28E1hNRLwGO5pCroHOxvLFOzS6pdoQUcg1bE7URa8ablf4', NULL, '211.63.164.40', NULL, '211.133.114.135', '2017-06-23 07:36:13', '2017-06-23 07:36:13'),
(5, 'kamal', 'kariyani', 'sureshbhai', 'kamal@gmail.com', '$2y$10$/YZmtJeGEoJp0kGLoVSEiOcvHHkXQlHHDI5.cRMuvbRMegZT1KBZq', 2, 1, '7878958558', 5, 5, 'aOZpqd4vO0FH4OtMapt01hExE9rKBGWd11WXCheLiZukxEeooLF8SAYY4q16', 1, NULL, NULL, NULL, NULL, NULL, '2017-06-23 07:59:35', '2017-06-30 04:47:42'),
(7, 'janak', 'olakiya', 'chiragbhai', 'janak@gmail.com', '$2y$10$nhJZto3GLQGbDQGroHxvP.rOKmc67526gQ4zSgR6jjh09hOP4IaRe', 3, 2, '9898256411', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2017-06-23 23:59:32', '2017-06-24 00:12:59'),
(8, 'rajanik', 'patel', 'ketanbhai', 'rajnik@xemesolutions.com', '$2y$10$yl1KyTd0tJX/yA5VLvDrMueRJuS.Ie8Fvxx/8u/52ttKyl9jRgJWy', 3, 5, '7878958558', NULL, NULL, 'In4bWQG4Xq9o3gQhDeCFqvm6bWqnbKXjAOLHjqInWqKqHBlra1eOUHgVbmz5', 1, NULL, NULL, NULL, NULL, NULL, '2017-06-26 00:08:28', '2017-06-26 00:08:28'),
(9, 'jatin', 'patel', 'nayanbhai', 'jatin@gmail.com', '$2y$10$o7HIAqd/SCHD8iwdvfpq7.P0HvOjpSJRLjE4PS0zyXz6xb5HyEc9O', 3, 5, '7875859674', NULL, NULL, 'xIUDf1xTSN2EFUrdDlh0cH0rcMemuwajtAkz02YDHt4yy3PEHgtrj81Db3w7', 1, NULL, NULL, NULL, NULL, NULL, '2017-06-27 04:52:32', '2017-06-27 04:52:32'),
(10, 'abc', 'abc', 'abc', 'abc@gmail.com', '$2y$10$ABgxXHNsna8UOukPsNZ0DexyRBPSdJ8c42L.iGkQbC764G9T3bXH2', 3, 5, '2545465464', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2017-06-28 08:03:48', '2017-06-28 08:03:48'),
(11, 'ketan', 'hkjhk', 'jhkhkh', 'ketan@gmail.com', '$2y$10$CXfLUlBs5h889jsR23n4oOYmF1Xa31Gfm/xB.nrLUgA1au.uwcXPe', 3, 5, '45465454456', NULL, NULL, 'cyz2aHNLddia3SWiUYzeoVulVW3bFT6RNc1JIGy6CMs0nfbL82qgNncC7mVU', 1, NULL, NULL, NULL, NULL, NULL, '2017-06-28 08:04:16', '2017-06-28 08:04:16'),
(18, 'user', 'user', 'user', 'user@user.com', '$2y$10$EK0gcOjTmJugEPRgiEqIBO08IOtsoYCAonO9lfypY3ljnl3tJKzna', 2, 1, '7878988565', 5, 5, '8TZwyQTCglu2QT24Nw6EojQLF8tt7N1tBRtbvnm2sTgTHxOXF2xNRF4TcUGb', 1, NULL, NULL, NULL, NULL, NULL, '2017-06-30 04:31:47', '2017-06-30 04:31:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activations_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_theme_id_foreign` (`theme_id`),
  ADD KEY `profiles_user_id_index` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `simple`
--
ALTER TABLE `simple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_index` (`user_id`);

--
-- Indexes for table `tbl_assignParking`
--
ALTER TABLE `tbl_assignParking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_parking`
--
ALTER TABLE `tbl_parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_parkingTypes`
--
ALTER TABLE `tbl_parkingTypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `themes_name_unique` (`name`),
  ADD UNIQUE KEY `themes_link_unique` (`link`),
  ADD KEY `themes_taggable_id_taggable_type_index` (`taggable_id`,`taggable_type`),
  ADD KEY `themes_id_index` (`id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `simple`
--
ALTER TABLE `simple`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_assignParking`
--
ALTER TABLE `tbl_assignParking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_parking`
--
ALTER TABLE `tbl_parking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_parkingTypes`
--
ALTER TABLE `tbl_parkingTypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activations`
--
ALTER TABLE `activations`
  ADD CONSTRAINT `activations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_theme_id_foreign` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`),
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
