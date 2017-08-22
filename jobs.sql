-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2017 at 08:26 AM
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

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `token`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 3, 'lLAbSZ0o6M8GzrN3O69ut33PMMlvuDAzGSCHZrdGjaF4zT8Pj7CwZvjdLJfvVadY', '127.0.0.1', '2017-04-11 08:03:47', '2017-04-11 08:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'What is Myjobo.com?', '<p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">MyJobo.com connects individuals with jobs and entrepreneurship for FREE. Myjobo.com also connects academic institutions, employers and students with internship and volunteer placement opportunities that equally benefit each party. Myjobo.com provides a platform for professional associations to connect with its members and other similar bodies internationally while embracing technology to enhance their profession.</span></span></p>\r\n\r\n<p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Myjobo.com aids companies in their recruitment process, helping employers seek acquire and manage talent more efficiently and quickly at no cost. Companies advertise and use the Myjobo.com database for <strong>FREE!</strong></span></span></p>\r\n\r\n<p><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Job Seekers search jobs and upload their CVs so that companies can reach them- for FREE!</span></span></p>', '2017-04-15 06:19:43', '2017-04-15 00:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `f_id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`f_id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, '1492172301staff.png', 'http://www2.staffingindustry.com/row/Editorial/Daily-News/Malawi-New-job-board-launched-30821', '2017-04-14 06:48:21', '2017-04-14 06:48:21'),
(2, '1492172416biztech.jpg', 'http://www.biztechafrica.com/article/malawi-run-1st-online-recruitment-site/8467/', '2017-04-14 06:50:16', '2017-04-14 06:50:16');

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
(3, '2016_01_15_105324_create_roles_table', 1),
(4, '2016_01_15_114412_create_role_user_table', 1),
(5, '2016_01_26_115212_create_permissions_table', 1),
(6, '2016_01_26_115523_create_permission_role_table', 1),
(7, '2016_02_09_132439_create_permission_user_table', 1),
(8, '2017_03_09_082449_create_social_logins_table', 1),
(9, '2017_03_09_082526_create_activations_table', 1),
(10, '2017_03_20_213554_create_themes_table', 1),
(11, '2017_03_21_042918_create_profiles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(10) NOT NULL,
  `contents` longtext NOT NULL,
  `page_name` varchar(150) NOT NULL,
  `element` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `contents`, `page_name`, `element`, `created_at`, `updated_at`) VALUES
(1, '<p><strong><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif; font-size:1.2em">Tell us what you think. You can also contact us by phone:</span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif; font-size:1.2em">Lilongwe: +265 884597387</span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif; font-size:1.2em">Blantyre: +265 991023288</span></span></strong></p>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif; font-size:1.2em"><strong>Email Address :</strong><span style="color:#0000ff">&nbsp; &nbsp;&nbsp;</span><u><span style="color:#0000ff"><strong>info@myjobo.com</strong></span></u></span></span></p>\r\n\r\n<p><strong>Our Postal Address is:</strong></p>\r\n\r\n<p><strong>P.O. Box 30511, Lilongwe 3, Malawi.</strong></p>\r\n\r\n<p>&nbsp;</p>', 'contact_us', 'data', '2017-04-14 07:40:29', '2017-04-14 02:10:29'),
(2, '<p>Looking for a job in Malawi? You want to advertise jobs in Malawi?&nbsp;</p>\r\n\r\n<p><a href="http://www.myjobo.com">Myjobo.com</a>&nbsp;is Malawi&#39;s largest platform that connects people with jobs&nbsp;and entrepreneurship opportunities. Started by Malawians, we have since July 2014 been pioneering free online advertising of jobs in Malawi&nbsp;reaching out to thousands&nbsp;of job seekers everyday.&nbsp;We have the largest number of job vacancies online&nbsp;in Malawi updated everyday. We are building&nbsp;the largest CV database that will ease the recruitment processes for employers In Malawi.</p>\r\n\r\n<p>Employers advertise jobs for free and receive online job applications through&nbsp;Myjobo.com.</p>\r\n\r\n<p>Job seekers register, upload their CVs and let employers find them on our database for Free. Job seekers apply for jobs online using the Myjobo.com.</p>\r\n\r\n<p>Myjobo.com recognizes that there are few employment opportunities in Malawi and not everyone can get a job. We provide the space for such individuals to enhance their education, careers, and skills in various areas or attempt entrepreneurship.&nbsp;</p>\r\n\r\n<p>You can register now as an Employer and start advertising jobs immediately. &nbsp;As a Job Seeker, you are assured of a seamless and the best&nbsp;Malawian job search experience provided by Malawians.&nbsp;</p>\r\n\r\n<p>For more information:</p>\r\n\r\n<p>You can&nbsp;send us an email: <strong>info@myjobo.com</strong></p>', 'about_us', 'data', '2017-04-14 09:15:08', '2017-04-14 03:45:08'),
(3, 'Our team is diverse and equipped with the right skills to provide satisfactory services to our clients at all times. (Telephone Contact hours: 08:00 am – 06:00pm)', 'about_us', 'sec_2_des', '2017-04-14 11:09:46', '2017-04-14 05:39:46'),
(4, '{"name":"Jamilla LM","qua":"BSc (Information Technology)","des":"Technical Manager","email":"jamila@myjobo.com"}', 'about_us', 'profile1', '2017-04-14 11:09:46', '2017-04-14 05:39:46'),
(5, '{"name":"Geoffrey Banda","qua":"MBA and CIMA","des":"Co-Founder & Director","email":"gbanda@myjobo.com"}', 'about_us', 'profile2', '2017-04-14 11:09:46', '2017-04-14 05:39:46'),
(6, '{"name":"Bertha Mambala","qua":"BSc (Mathematics & Statistics)","des":"Manager","email":"bmambala@myjobo.com"}', 'about_us', 'profile3', '2017-04-14 11:09:46', '2017-04-14 05:39:46'),
(7, '1492168186Jamilla.jpg', 'about_us', 'profileimg1', '2017-04-14 11:09:46', '2017-04-14 05:39:46'),
(8, '1492168186Geoffrey.jpg', 'about_us', 'profileimg2', '2017-04-14 11:09:46', '2017-04-14 05:39:46'),
(9, '1492168186Bertha.jpg', 'about_us', 'profileimg3', '2017-04-14 11:09:46', '2017-04-14 05:39:46'),
(10, '{"title":"Reduce Recruitment Costs","dec":"You advertise jobs for free and reach out instantly to over thousands of Myjobo.com subscribers. Our subscribers include Malawians who are studying or living abroad. Your advert is included in daily email alerts to subscribers."}', 'about_us', 'sec_3_des1', '2017-04-14 11:31:58', '2017-04-14 06:01:58'),
(11, '{"title":"Fast and Simple to use","dec":"Myjobo.com is simple to use and offers you the fastest route to seamless recruitment. You register and immediately start posting jobs. It does not take long before applications start flooding your inbox."}', 'about_us', 'sec_3_des2', '2017-04-14 11:31:58', '2017-04-14 06:01:58'),
(12, '{"title":"Be in Control","dec":"Your jobs can be accessed instantly and can be viewed 24\\/7 until the closing date. You can add your logo too. With your own dashboard, you are in control to change closing date or make any edits."}', 'about_us', 'sec_3_des3', '2017-04-14 11:31:58', '2017-04-14 06:01:58'),
(13, '{"title":"Recruitment made Simple","dec":"Myjobo.com helps you find not only the top quality candidates, but many of them. Myjobo.com streamlines the recruitment and you save time and money. With our superior services, you can hire like no one else in Malawi."}', 'about_us', 'sec_3_des4', '2017-04-14 11:31:58', '2017-04-14 06:01:58');

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
(1, 'Can View Users', 'view.users', 'Can view users', 'Permission', '2017-04-10 23:57:22', '2017-04-10 23:57:22'),
(2, 'Can Create Users', 'create.users', 'Can create new users', 'Permission', '2017-04-10 23:57:22', '2017-04-10 23:57:22'),
(3, 'Can Edit Users', 'edit.users', 'Can edit users', 'Permission', '2017-04-10 23:57:22', '2017-04-10 23:57:22'),
(4, 'Can Delete Users', 'delete.users', 'Can delete users', 'Permission', '2017-04-10 23:57:22', '2017-04-10 23:57:22');

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
(1, 1, 1, '2017-04-10 23:57:23', '2017-04-10 23:57:23'),
(2, 2, 1, '2017-04-10 23:57:23', '2017-04-10 23:57:23'),
(3, 3, 1, '2017-04-10 23:57:23', '2017-04-10 23:57:23'),
(4, 4, 1, '2017-04-10 23:57:23', '2017-04-10 23:57:23');

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
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, '2017-04-10 23:57:25', '2017-04-10 23:57:25'),
(2, 2, 1, NULL, NULL, NULL, NULL, NULL, 0, '2017-04-10 23:57:25', '2017-04-11 00:36:34'),
(3, 3, 1, NULL, NULL, NULL, NULL, NULL, 0, '2017-04-11 18:30:00', NULL);

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
(1, 'Admin', 'admin', 'Admin Role', 5, '2017-04-10 23:57:22', '2017-04-10 23:57:22'),
(2, 'User', 'user', 'User Role', 1, '2017-04-10 23:57:22', '2017-04-10 23:57:22'),
(3, 'Unverified', 'unverified', 'Unverified Role', 0, '2017-04-10 23:57:23', '2017-04-10 23:57:23'),
(4, 'Employer', 'employer', 'Employer Role', 1, '2017-04-12 03:12:21', '2017-04-12 05:59:36');

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
(1, 1, 1, '2017-04-10 23:57:25', '2017-04-10 23:57:25'),
(2, 2, 2, '2017-04-10 23:57:26', '2017-04-10 23:57:26'),
(3, 4, 3, '2017-04-11 08:03:47', '2017-04-11 08:03:47');

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
(1, 'Default', 'null', NULL, 1, 1, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(2, 'Darkly', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css', NULL, 1, 2, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(3, 'Cyborg', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css', NULL, 1, 3, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(4, 'Cosmo', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css', NULL, 1, 4, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(5, 'Cerulean', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css', NULL, 1, 5, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(6, 'Flatly', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css', NULL, 1, 6, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(7, 'Journal', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/journal/bootstrap.min.css', NULL, 1, 7, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(8, 'Lumen', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css', NULL, 1, 8, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(9, 'Paper', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css', NULL, 1, 9, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(10, 'Readable', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css', NULL, 1, 10, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(11, 'Sandstone', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css', NULL, 1, 11, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(12, 'Simplex', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css', NULL, 1, 12, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(13, 'Slate', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css', NULL, 1, 13, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(14, 'Spacelab', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css', NULL, 1, 14, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(15, 'Superhero', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css', NULL, 1, 15, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(16, 'United', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css', NULL, 1, 16, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(17, 'Yeti', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css', NULL, 1, 17, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(18, 'Bootstrap 4.0.0 Alpha', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', NULL, 1, 18, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(19, 'Materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css', NULL, 1, 19, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(20, 'Bootstrap Material Design 0.3.0', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css', NULL, 1, 20, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(21, 'Bootstrap Material Design 0.5.10', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css', NULL, 1, 21, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:24', NULL),
(22, 'Bootstrap Material Design 4.0.0', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.0/bootstrap-material-design.min.css', NULL, 1, 22, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:25', NULL),
(23, 'Bootstrap Material Design 4.0.2', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.min.css', NULL, 1, 23, 'theme', '2017-04-10 23:57:23', '2017-04-10 23:57:25', NULL),
(24, 'mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.1/css/mdb.min.css', NULL, 1, 24, 'theme', '2017-04-10 23:57:24', '2017-04-10 23:57:25', NULL),
(25, 'bootflat', 'https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css', NULL, 1, 25, 'theme', '2017-04-10 23:57:24', '2017-04-10 23:57:25', NULL),
(26, 'flat-ui', 'https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css', NULL, 1, 26, 'theme', '2017-04-10 23:57:24', '2017-04-10 23:57:25', NULL),
(27, 'm8tro-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/m8tro-bootstrap/3.3.7/m8tro.min.css', NULL, 1, 27, 'theme', '2017-04-10 23:57:24', '2017-04-10 23:57:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `token`, `signup_ip_address`, `signup_confirmation_ip_address`, `signup_sm_ip_address`, `admin_ip_address`, `created_at`, `updated_at`) VALUES
(1, 'trever57', 'Neha', 'Heidenreich', 'admin@admin.com', '$2y$10$70DsQZa44E7ND3RB04cMZu04iyT9foMboFJRE5w8Q9mXs1y2Qixke', 'tsUifyKulZTSFISp86A3TGStkgvWpQZ9i5mGL42EP6er465isyikzv0is9yG', 1, '5ccpUl4d9gq4WlZKOmtJ6zTCfLimhYJu3m6UHcXTZzHvNfhZnwlw8uFVJepMVmGy', NULL, '26.241.154.34', NULL, '87.118.161.248', '2017-04-10 23:57:25', '2017-04-10 23:57:25'),
(2, 'vincent74', 'Dolores', 'Schamberger', 'user@user.com', '$2y$10$MjPT2P9cOOScBVKbsujVTOKp.rcC9KW5PblhXvvfqph9Rxitkp426', 'H8UyVRLpnuEH3iqE6Uxp47WfATlzgrfo4RQsMZmTuysVLlEOvmm4c6haA6vy', 1, 'hFtKTtvaDCsoz1P8NnZF7WsUCl35S4e37sjcasXG9lnH4lDUhXMBEHkvgp9t4UfA', '74.77.183.62', '32.206.5.122', NULL, NULL, '2017-04-10 23:57:25', '2017-04-10 23:57:25'),
(3, 'rajnik1311', 'rajnik', 'bambhaniya', 'rajnik@xemesolution.com', '$2y$10$UTh2VPIBCVhF8OOD2TtpBeqcBX.i.3eASQe1uAKMlt2etjg4rlSF6', 'VQrHKPRWqYxeDZPiZJxJ6Usfx7qY3xr7NDk5v8BwyOr0dY8vWpyRuiGcGYpR', 1, 'NDmLYDAvuWECmAXyCi9CAfAMfEhbuvFla69PLFxpyzzCH3YhrShS6Bibfpb74P1q', '192.168.1.1', '32.206.5.122', NULL, NULL, '2017-04-11 08:03:47', '2017-04-11 08:03:47');

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

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
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_index` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
