-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2019 at 08:56 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talent_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `talent_info`
--

CREATE TABLE `talent_info` (
  `id` int(11) NOT NULL,
  `name_sei` varchar(11) NOT NULL,
  `name_mei` varchar(11) NOT NULL,
  `kana_sei` varchar(20) NOT NULL,
  `kana_mei` varchar(20) NOT NULL,
  `addr11` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tell1` int(3) NOT NULL,
  `tell2` int(4) NOT NULL,
  `tell3` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `talent_info`
--

INSERT INTO `talent_info` (`id`, `name_sei`, `name_mei`, `kana_sei`, `kana_mei`, `addr11`, `mail`, `tell1`, `tell2`, `tell3`) VALUES
(1, '亀谷', '圭介', 'カメタニ', 'ケイスケ', '福岡市中央区モントーレセントラルベイスタイル', 'keisuke.kametani@gmail.com', 90, 3255, 1920),
(2, '亀谷', '圭介', 'モチヅキ', 'ケイスケ', '3-16-6 706号', 'keisuke.kametani@gmail.com', 90, 111, 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talent_info`
--
ALTER TABLE `talent_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `talent_info`
--
ALTER TABLE `talent_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
