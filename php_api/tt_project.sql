-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 01:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
CREATE DATABASE IF NOT EXISTS `tt_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tt_project`;
-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(11, 'Very nice Laptop (Low)', 250, 100, 'C14', 'KKL77291'),
(12, 'Very nice Laptop (Medium)', 400, 70, 'C8', 'KKL72678'),
(4, 'Pre-built Wokrstation (Medium)', 300, 20, 'C3', 'KKL61682'),
(5, 'Pre-built Wokrstation (Low)', 250, 50, 'C4', 'KKL45729'),
(6, 'Pre-built Wokrstation (High)', 550, 25, 'C5', 'KKL43796'),
(7, 'Pre-built Wokrstation (Ultimate)', 550, 40, 'C6', 'KKL95727'),
(8, 'Pre-built Wokrstation (Pro)', 900, 15, 'C7', 'KKL98437'),
(9, 'Pre-built Wokrstation (Ultimate)', 1300, 10, 'C1', 'KKL84244'),
(10, 'Pre-built Wokrstation (Pro Gamer Move)', 5000, 1, 'C2', 'KKL26423'),
(13, 'Very nice Laptop (High)', 600, 70, 'C9', 'KKL39446'),
(14, 'Very nice Laptop (Ultimate)', 900, 60, 'C11', 'KKL38235'),
(15, 'Very nice Laptop (Pro)', 1400, 40, 'C12', 'KKL23045'),
(16, 'Very nice Laptop (Pro)', 1800, 40, 'C10', 'KKL89743'),
(17, 'Very nice Laptop (Pro Gamer Move)', 2500, 20, 'C13', 'KKL27203');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(2, 'Barely a phone Phone', 100, 1120, 'P1', 'HJO27203'),
(3, 'Almost a phone Phone', 250, 1000, 'P2', 'HJO77238'),
(4, 'A phone Phone', 400, 1000, 'P3', 'HJO21001'),
(5, 'The Phone', 600, 900, 'P4', 'HJO90192'),
(6, 'Almost a tablet Phone', 900, 300, 'P5', 'HJO21130'),
(7, 'This is a tablet Phone', 1200, 100, 'P6', 'HJO44959'),
(8, 'This one even folds Phone', 1600, 90, 'P7', 'HJO18439'),
(9, 'Basically a small computer Phone', 2500, 60, 'P8', 'HJO55961');

-- --------------------------------------------------------

--
-- Table structure for table `photo_tech`
--

CREATE TABLE `photo_tech` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_tech`
--

INSERT INTO `photo_tech` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(2, 'The old bad camera', 20, 600, 'PT4', 'PED55961'),
(3, 'The old good camera', 200, 80, 'PT1', 'PED30104'),
(4, 'The old cool camera', 900, 30, 'PT5', 'PED78012'),
(5, 'The pretty good Camera', 200, 150, 'PT2', 'PED75066'),
(6, 'The very good Camera', 500, 150, 'PT3', 'PED10564'),
(7, 'The very very good Camera', 700, 100, 'PT6', 'PED61952'),
(8, 'Basically a movie Camera', 10000, 30, 'PT8', 'PED41227'),
(9, 'Why would anybody buy this? Camera', 100000, 1, 'PT7', 'PED92129');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(2, 'The bouncy Ball', 20, 1000, 'S3', 'QZC92129'),
(3, 'The not bouncy Ball', 30, 1000, 'S2', 'QZC41310'),
(4, 'The small Ball', 10, 1000, 'S4', 'QZC38409'),
(5, 'The big Ball', 20, 1000, 'S1', 'QZC96383'),
(6, 'The very big Ball', 40, 1000, 'S5', 'QZC95405'),
(7, 'The solid gold Ball', 400000, 1, 'S6', 'QZC17179'),
(8, 'Skipping rope', 20, 1000, 'S7', 'QZC98353'),
(9, 'Boxing gloves', 50, 100, 'S8', 'QZC93957');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(2, 'A drill', 100, 100, 'W1', 'MIP93957'),
(3, 'A saw', 100, 100, 'W2', 'MIP43555'),
(4, 'A power sander', 100, 100, 'W3', 'MIP83853'),
(5, 'A Nail Gun', 200, 100, 'W4', 'MIP80074'),
(6, 'A power ratchet set', 200, 100, 'W5', 'MIP58772'),
(7, 'A Lathe', 500, 500, 'W6', 'MIP62076'),
(8, 'A Compressor', 200, 100, 'W7', 'MIP50577'),
(9, 'A Hammer', 20, 100, 'W8', 'MIP91731'),
(10, 'A Ladder', 50, 100, 'W9', 'MIP60948');

-- --------------------------------------------------------

--
-- Table structure for table `tv_audio`
--

CREATE TABLE `tv_audio` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(4000) NOT NULL,
  `sku` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tv_audio`
--

INSERT INTO `tv_audio` (`id`, `name`, `price`, `quantity`, `image_path`, `sku`) VALUES
(3, 'Smoll TV', 200, 100, 'T2', 'LEC78983'),
(4, 'Medium TV', 400, 100, 'T1', 'LEC22878'),
(5, 'Big TV', 600, 100, 'T3', 'LEC44820'),
(6, 'Very Big TV', 800, 100, 'T4', 'LEC34247'),
(7, 'Covers an entire wall TV', 1800, 100, 'T5', 'LEC38201'),
(8, 'Why would you even buy this TV', 4000, 10, 'T6', 'LEC65935'),
(9, 'Very not good headphones', 10, 1000, 'T9', 'LEC81647'),
(10, 'Kind of decent headphones', 18, 1000, 'T7', 'LEC64459'),
(11, 'Decent headphones', 40, 1000, 'T8', 'LEC51993'),
(12, 'Good headphones', 80, 1000, 'T10', 'LEC45277'),
(13, 'Superb headphones', 250, 100, 'T11', 'LEC53658'),
(14, 'Studio headphones', 500, 100, 'T12', 'LEC40920');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `passwd` varchar(40) NOT NULL,
  `e_mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`, `e_mail`) VALUES
(3, 'admin', 'admin', 'the_admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `photo_tech`
--
ALTER TABLE `photo_tech`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `tv_audio`
--
ALTER TABLE `tv_audio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`username`,`e_mail`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photo_tech`
--
ALTER TABLE `photo_tech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tv_audio`
--
ALTER TABLE `tv_audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
