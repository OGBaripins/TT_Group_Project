-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2022 at 04:09 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

DROP TABLE IF EXISTS `computers`;
CREATE TABLE IF NOT EXISTS `computers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(11, 'Very nice Laptop (Low)', 250, 100, 'product_computer', 'KKL77291'),
(12, 'Very nice Laptop (Medium)', 400, 70, 'product_computer', 'KKL72678'),
(4, 'Pre-built Wokrstation (Medium)', 300, 20, 'product_computer', 'KKL61682'),
(5, 'Pre-built Wokrstation (Low)', 250, 50, 'product_computer', 'KKL45729'),
(6, 'Pre-built Wokrstation (High)', 550, 25, 'product_computer', 'KKL43796'),
(7, 'Pre-built Wokrstation (Ultimate)', 550, 40, 'product_computer', 'KKL95727'),
(8, 'Pre-built Wokrstation (Pro)', 900, 15, 'product_computer', 'KKL98437'),
(9, 'Pre-built Wokrstation (Ultimate)', 1300, 10, 'product_computer', 'KKL84244'),
(10, 'Pre-built Wokrstation (Pro Gamer Move)', 5000, 1, 'product_computer', 'KKL26423'),
(13, 'Very nice Laptop (High)', 600, 70, 'product_computer', 'KKL39446'),
(14, 'Very nice Laptop (Ultimate)', 900, 60, 'product_computer', 'KKL38235'),
(15, 'Very nice Laptop (Pro)', 1400, 40, 'product_computer', 'KKL23045'),
(16, 'Very nice Laptop (Pro)', 1800, 40, 'product_computer', 'KKL89743'),
(17, 'Very nice Laptop (Pro Gamer Move)', 2500, 20, 'product_computer', 'KKL27203');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

DROP TABLE IF EXISTS `phone`;
CREATE TABLE IF NOT EXISTS `phone` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(2, 'Barely a phone Phone', 100, 1120, 'product_phone', 'HJO27203'),
(3, 'Almost a phone Phone', 250, 1000, 'product_phone', 'HJO77238'),
(4, 'A phone Phone', 400, 1000, 'product_phone', 'HJO21001'),
(5, 'The Phone', 600, 900, 'product_phone', 'HJO90192'),
(6, 'Almost a tablet Phone', 900, 300, 'product_phone', 'HJO21130'),
(7, 'This is a tablet Phone', 1200, 100, 'product_phone', 'HJO44959'),
(8, 'This one even folds Phone', 1600, 90, 'product_phone', 'HJO18439'),
(9, 'Basically a small computer Phone', 2500, 60, 'product_phone', 'HJO55961');

-- --------------------------------------------------------

--
-- Table structure for table `photo_tech`
--

DROP TABLE IF EXISTS `photo_tech`;
CREATE TABLE IF NOT EXISTS `photo_tech` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `photo_tech`
--

INSERT INTO `photo_tech` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(2, 'The old bad camera', 20, 600, 'product_photo_tech', 'PED55961'),
(3, 'The old good camera', 200, 80, 'product_photo_tech', 'PED30104'),
(4, 'The old cool camera', 900, 30, 'product_photo_tech', 'PED78012'),
(5, 'The pretty good Camera', 200, 150, 'product_photo_tech', 'PED75066'),
(6, 'The very good Camera', 500, 150, 'product_photo_tech', 'PED10564'),
(7, 'The very very good Camera', 700, 100, 'product_photo_tech', 'PED61952'),
(8, 'Basically a movie Camera', 10000, 30, 'product_photo_tech', 'PED41227'),
(9, 'Why would anybody buy this? Camera', 100000, 1, 'product_photo_tech', 'PED92129');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE IF NOT EXISTS `sports` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(2, 'The bouncy Ball', 20, 1000, 'product_sports', 'QZC92129'),
(3, 'The not bouncy Ball', 30, 1000, 'product_sports', 'QZC41310'),
(4, 'The small Ball', 10, 1000, 'product_sports', 'QZC38409'),
(5, 'The big Ball', 20, 1000, 'product_sports', 'QZC96383'),
(6, 'The very big Ball', 40, 1000, 'product_sports', 'QZC95405'),
(7, 'The solid gold Ball', 400000, 1, 'product_sports', 'QZC17179'),
(8, 'Skipping rope', 20, 1000, 'product_sports', 'QZC98353'),
(9, 'Boxing gloves', 50, 100, 'product_sports', 'QZC93957');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

DROP TABLE IF EXISTS `tools`;
CREATE TABLE IF NOT EXISTS `tools` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(1, 'test_prod_tools', 100, 57, 'test_path', 'MIP12345'),
(2, 'A drill', 100, 100, 'product_tools', 'MIP93957'),
(3, 'A saw', 100, 100, 'product_tools', 'MIP43555'),
(4, 'A power sander', 100, 100, 'product_tools', 'MIP83853'),
(5, 'A Nail Gun', 200, 100, 'product_tools', 'MIP80074'),
(6, 'A power ratchet set', 200, 100, 'product_tools', 'MIP58772'),
(7, 'A Lathe', 500, 500, 'product_tools', 'MIP62076'),
(8, 'A Compressor', 200, 100, 'product_tools', 'MIP50577'),
(9, 'A Hammer', 20, 100, 'product_tools', 'MIP91731'),
(10, 'A Ladder', 50, 100, 'product_tools', 'MIP60948');

-- --------------------------------------------------------

--
-- Table structure for table `tv_audio`
--

DROP TABLE IF EXISTS `tv_audio`;
CREATE TABLE IF NOT EXISTS `tv_audio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tv_audio`
--

INSERT INTO `tv_audio` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(3, 'Smoll TV', 200, 100, 'product_tools', 'LEC78983'),
(4, 'Medium TV', 400, 100, 'product_tools', 'LEC22878'),
(5, 'Big TV', 600, 100, 'product_tools', 'LEC44820'),
(6, 'Very Big TV', 800, 100, 'product_tools', 'LEC34247'),
(7, 'Covers an entire wall TV', 1800, 100, 'product_tools', 'LEC38201'),
(8, 'Why would you even buy this TV', 4000, 10, 'product_tools', 'LEC65935'),
(9, 'Very not good headphones', 10, 1000, 'product_tools', 'LEC81647'),
(10, 'Kind of decent headphones', 18, 1000, 'product_tools', 'LEC64459'),
(11, 'Decent headphones', 40, 1000, 'product_tools', 'LEC51993'),
(12, 'Good headphones', 80, 1000, 'product_tools', 'LEC45277'),
(13, 'Superb headphones', 250, 100, 'product_tools', 'LEC53658'),
(14, 'Studio headphones', 500, 100, 'product_tools', 'LEC40920');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `passwd` varchar(40) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`username`,`e_mail`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`, `e_mail`) VALUES
(3, 'admin', 'admin', 'the_admin@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
