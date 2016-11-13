-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql.jimbaldwin.net
-- Generation Time: Nov 12, 2016 at 06:38 PM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--
--
-- CREATE TABLE IF NOT EXISTS `projects` (
--   `id` int(10) UNSIGNED NOT NULL,
--   `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
--   `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
--   `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
--   `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
-- ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'TODO Site', 'todo-site', '2015-03-07 05:22:20', '2015-03-12 05:00:01'),
(4, 'JavaScript', 'javascript', '2015-03-08 00:11:06', '2015-03-08 00:11:06'),
(9, 'Dev Tasks', 'dev-tasks', '2015-04-08 00:08:01', '2015-04-08 00:08:01'),
(5, 'Home Network', 'home-network', '2015-03-08 00:15:38', '2015-03-08 00:15:38'),
(6, 'Books-vids-etc', 'books-vids-etc', '2015-03-08 21:42:14', '2015-03-08 21:42:14'),
(7, 'Movies', 'movies', '2015-03-08 23:47:01', '2015-03-08 23:47:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
-- ALTER TABLE `projects`
--   ADD PRIMARY KEY (`id`);
--
-- --
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
-- ALTER TABLE `projects`
--   MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
