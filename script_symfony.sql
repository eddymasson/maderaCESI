-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: mysql1.paris1.alwaysdata.com
-- Generation Time: Jan 12, 2017 at 10:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yearl_symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `draft` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BA5AE01D12469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(3, 'maxime', 'maxime', 'maxime@gmail.com', 'maxime@gmail.com', 1, NULL, '$2y$13$VhBdncoQiwmX7P9KlwyJF.ePUFPj1pvym3innRiMyHWUj2gtb/fY2', '2017-01-09 13:35:52', NULL, NULL, 'a:0:{}'),
(4, 'admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, NULL, '$2y$13$UoURGO6.CzEy1AAwZlaZwetEpPjNP1LqRWAfjsyOhIQYoQR8xfDCm', '2017-01-09 15:06:56', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}'),
(5, 'eddy', 'eddy', 'eddy@gmail.com', 'eddy@gmail.com', 1, NULL, '$2y$13$J6A8/n.PATtSwZkgsvBIqudoXi2HthV6L1vQnA3X4/fiohoHW6A4i', NULL, NULL, NULL, 'a:0:{}'),
(6, 'test', 'test', 'test', 'test', 1, NULL, '$2y$13$aXPSaTg4DVKVSIyIJHvx1ONnrIQEd1ujj6BabtY4Gb51u0qBu4bze', NULL, NULL, NULL, 'a:0:{}'),
(7, 'admin2', 'admin2', 'admin2', 'admin2', 1, NULL, '$2y$13$/XZW632DER9GkXL1yU578uqag2QYHtEINbDQVnJxWgzpT7SRjvp1G', '2017-01-09 16:40:22', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD CONSTRAINT `FK_BA5AE01D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
