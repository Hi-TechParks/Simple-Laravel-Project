-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2019 at 05:03 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `process_consultants`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@mail.com', '$2y$10$Geuuw0OaHXXKUAwa8/T3vOEOjOgtztSc7LlfWLe/yMX1OvK.jpdV2', '2019-02-18 08:02:32'),
('habibcse335@gmail.com', '$2y$10$K3LvncdMBb13KsKTLPVEfO1tS2OcuGWdG1bhUfwIk0dmIR.eOmzie', '2019-02-18 08:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `process_blog`
--

DROP TABLE IF EXISTS `process_blog`;
CREATE TABLE IF NOT EXISTS `process_blog` (
  `BLOG_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `BLOG_TITLE` varchar(300) DEFAULT NULL,
  `BLOG_CATEGORY_ID` bigint(20) DEFAULT NULL,
  `BLOG_CONTENT` text,
  `BLOG_IMAGE` varchar(500) DEFAULT NULL,
  `BLOG_AUTHOR` varchar(100) DEFAULT NULL,
  `PUBLISH_START_DATE` date DEFAULT NULL,
  `PUBLISH_END_DATE` date DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`BLOG_ID`),
  KEY `FK_PROCESS_BLOG_PBC` (`BLOG_CATEGORY_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20190004 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process_blog`
--

INSERT INTO `process_blog` (`BLOG_ID`, `BLOG_TITLE`, `BLOG_CATEGORY_ID`, `BLOG_CONTENT`, `BLOG_IMAGE`, `BLOG_AUTHOR`, `PUBLISH_START_DATE`, `PUBLISH_END_DATE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'New Blog', 20190001, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1_1550554042.jpg', 'Habib R', '2019-02-19', '2019-02-28', 1, NULL, 1, '2019-02-19', 1, '2019-02-19', NULL, NULL, NULL, NULL, NULL),
(20190002, 'New Blog', 20190002, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '310s-stainless-steel-pipe18216384420_1550555417.jpg', 'Ridoy', '2019-02-19', '2019-02-28', 1, NULL, 1, '2019-02-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190003, 'Blog Steel Building', 20190004, '<p>Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building</p>\r\n\r\n<p>Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building Blog Steel Building</p>', 'background_two_1550568942.png', 'Ashraful Karim', '2019-02-19', '2019-02-26', 0, NULL, 3, '2019-02-19', 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `process_blog_category`
--

DROP TABLE IF EXISTS `process_blog_category`;
CREATE TABLE IF NOT EXISTS `process_blog_category` (
  `BLOG_CATEGORY_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CATEGORY_NAME` varchar(100) DEFAULT NULL,
  `SHORT_CODE` varchar(10) DEFAULT NULL,
  `PARENT_CATEGORY_ID` bigint(20) DEFAULT NULL,
  `LEVEL_NO` int(11) DEFAULT NULL,
  `LEVEL_NAME` varchar(100) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`BLOG_CATEGORY_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20190007 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process_blog_category`
--

INSERT INTO `process_blog_category` (`BLOG_CATEGORY_ID`, `CATEGORY_NAME`, `SHORT_CODE`, `PARENT_CATEGORY_ID`, `LEVEL_NO`, `LEVEL_NAME`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190004, 'Steel Building', NULL, NULL, NULL, NULL, 1, NULL, 1, '2019-02-19', 1, '2019-02-19', NULL, NULL, NULL, NULL, NULL),
(20190003, 'Design', NULL, NULL, NULL, NULL, 1, NULL, 1, '2019-02-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190002, 'Exterior', NULL, NULL, NULL, NULL, 1, NULL, 1, '2019-02-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190001, 'Interior', NULL, NULL, NULL, NULL, 1, NULL, 1, '2019-02-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `process_event`
--

DROP TABLE IF EXISTS `process_event`;
CREATE TABLE IF NOT EXISTS `process_event` (
  `EVENT_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EVENT_TITLE` varchar(300) DEFAULT NULL,
  `EVENT_DESC` text,
  `EVENT_DATE` date DEFAULT NULL,
  `IMAGE_PATH` varchar(500) DEFAULT NULL,
  `PUBLISH_START_DATE` date DEFAULT NULL,
  `PUBLISH_END_DATE` date DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `REMARKS` varchar(4000) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`EVENT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20190004 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process_event`
--

INSERT INTO `process_event` (`EVENT_ID`, `EVENT_TITLE`, `EVENT_DESC`, `EVENT_DATE`, `IMAGE_PATH`, `PUBLISH_START_DATE`, `PUBLISH_END_DATE`, `ACTIVE_STATUS`, `REMARKS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 'Event Edited', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2019-02-19', '735153_1550553414.jpg', '2019-02-19', '2019-02-28', 1, NULL, 1, '2019-02-19', 1, '2019-02-19', NULL, NULL, NULL, NULL, NULL),
(20190002, 'News', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2019-02-20', 'download_3d_wallpaper_1550555477.jpg', '2019-02-19', '2019-02-28', 0, NULL, 1, '2019-02-19', 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL),
(20190003, 'Test Event', '<p>test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event test event</p>', '2019-02-19', '1_1550569118.jpg', '2019-02-19', '2019-02-19', 1, NULL, 3, '2019-02-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `process_service`
--

DROP TABLE IF EXISTS `process_service`;
CREATE TABLE IF NOT EXISTS `process_service` (
  `SERVICE_ID` bigint(20) NOT NULL,
  `SERVICE_NAME` varchar(200) DEFAULT NULL,
  `SHORT_CODE` varchar(10) DEFAULT NULL,
  `PARENT_SERVICE_ID` bigint(20) DEFAULT NULL,
  `LEVEL_NO` int(11) DEFAULT NULL,
  `SL_NO` int(11) DEFAULT NULL,
  `HOME_PAGE_SHOW` int(11) DEFAULT NULL,
  `SERVICE_DESC` text,
  `THUMBNAIL_IMAGE_PATH` varchar(500) DEFAULT NULL,
  `HOVER_IMAGE_PATH` varchar(500) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`SERVICE_ID`),
  KEY `FK_PS_PS` (`PARENT_SERVICE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process_service`
--

INSERT INTO `process_service` (`SERVICE_ID`, `SERVICE_NAME`, `SHORT_CODE`, `PARENT_SERVICE_ID`, `LEVEL_NO`, `SL_NO`, `HOME_PAGE_SHOW`, `SERVICE_DESC`, `THUMBNAIL_IMAGE_PATH`, `HOVER_IMAGE_PATH`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190003, 'Design', NULL, NULL, NULL, 3, 1, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'design_1551095845.png', NULL, NULL, 1, 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190002, 'Exterior', NULL, NULL, NULL, 2, 1, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'exterior_1551095819.png', NULL, NULL, 1, 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190001, 'Interior', NULL, NULL, NULL, 1, 1, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'interior_1551095785.png', NULL, NULL, 1, 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190004, 'Steel Building', NULL, NULL, NULL, 4, 1, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section</p>', 'steel_building_1551095876.png', NULL, NULL, 1, 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190005, 'Logo Design', NULL, 20190003, NULL, 5, 0, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1_1551096012.png', NULL, NULL, 1, 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20190006, 'Corporate Design', NULL, 20190003, NULL, 6, 0, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1_1551096074.png', NULL, NULL, 1, 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `process_service_image`
--

DROP TABLE IF EXISTS `process_service_image`;
CREATE TABLE IF NOT EXISTS `process_service_image` (
  `SERVICE_IMAGE_ID` bigint(20) NOT NULL,
  `SERVICE_ID` bigint(20) DEFAULT NULL,
  `IMAGE_TITLE` varchar(100) DEFAULT NULL,
  `IMAGE_DESC` varchar(4000) DEFAULT NULL,
  `SL_NO` int(11) DEFAULT NULL,
  `IMAGE_PATH` varchar(500) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` int(11) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` int(11) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`SERVICE_IMAGE_ID`),
  KEY `FK_PSI_PS` (`SERVICE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process_service_image`
--

INSERT INTO `process_service_image` (`SERVICE_IMAGE_ID`, `SERVICE_ID`, `IMAGE_TITLE`, `IMAGE_DESC`, `SL_NO`, `IMAGE_PATH`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(20190001, 20190001, 'Image 2', NULL, 1, 'basar room_1551096162.jpg', NULL, 1, 3, '2019-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `process_user`
--

DROP TABLE IF EXISTS `process_user`;
CREATE TABLE IF NOT EXISTS `process_user` (
  `USER_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(100) DEFAULT NULL,
  `LOGIN_USER` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `SECURITY_WORD` varchar(100) DEFAULT NULL,
  `REMARKS` varchar(500) DEFAULT NULL,
  `ACTIVE_STATUS` int(11) DEFAULT NULL,
  `ENTERED_BY` bigint(20) DEFAULT NULL,
  `ENTRY_TIMESTAMP` date DEFAULT NULL,
  `UPDATED_BY` bigint(20) DEFAULT NULL,
  `UPDATE_TIMESTAMP` date DEFAULT NULL,
  `FLEX_FIELD1` varchar(500) DEFAULT NULL,
  `FLEX_FIELD2` varchar(500) DEFAULT NULL,
  `FLEX_FIELD3` varchar(500) DEFAULT NULL,
  `FLEX_FIELD4` varchar(500) DEFAULT NULL,
  `FLEX_FIELD5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `process_user`
--

INSERT INTO `process_user` (`USER_ID`, `USER_NAME`, `LOGIN_USER`, `EMAIL`, `SECURITY_WORD`, `REMARKS`, `ACTIVE_STATUS`, `ENTERED_BY`, `ENTRY_TIMESTAMP`, `UPDATED_BY`, `UPDATE_TIMESTAMP`, `FLEX_FIELD1`, `FLEX_FIELD2`, `FLEX_FIELD3`, `FLEX_FIELD4`, `FLEX_FIELD5`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$2oYn14XJCVe5zJqir1MiB.A6r8DCi73uZNR9mV7aWhcrXVsUMsN2W', 'AwZB5c3Oe0kr7kTVsQRdA7h9cGgO3Kd4u3JWIT6alDpRc5REWXaMe89RCP3w', '2019-02-17 06:04:01', '2019-02-17 06:04:01'),
(2, 'HR Rahman', 'habibcse335@gmail.com', NULL, '$2y$10$O1VrJKCL856tbMDu7272xOQNNpV20oZUp5vZm8/iGOILQSju1WTs2', '0EFE6xz7bIqgwEVh0vMcP7t91J6U4tJjLlzfbRFTYEa08MauDifQc6Y1M61G', '2019-02-18 08:04:01', '2019-02-18 08:04:01'),
(3, 'H Rahman', 'test@mail.com', NULL, '$2y$10$5Nudmbh2oSwMiUXIv5ASCOyXRtTnVtELC/vFRx9RMC7QTcVnve5bW', NULL, '2019-02-18 11:09:03', '2019-02-18 11:09:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
