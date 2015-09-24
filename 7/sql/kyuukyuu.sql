-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 9 月 24 日 04:23
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_academy`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kyuukyuu`
--

CREATE TABLE IF NOT EXISTS `kyuukyuu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_flg` int(12) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kyuukyuu`
--

INSERT INTO `kyuukyuu` (`id`, `name`, `adress`, `tel`, `time`, `show_flg`, `update_date`) VALUES
(1, '鷹番休日診療所', '目黒区鷹番二丁目6番10号 ', '03-3716-5311', '土	PM 5:00～PM 10:00\r\n日・祝	AM 9:00～PM 12:00 / PM 1:00～PM 10:00', 1, '2015-09-24 10:29:33'),
(2, '中目黒休日診療所', '目黒区上目黒二丁目19番15号(総合庁舎別館内）', '03-5721-6110', '土	PM 5:00～PM 10:00\r\n日・祝	AM 9:00～PM 12:00 / PM 1:00～PM 10:00', 1, '2015-09-24 10:29:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kyuukyuu`
--
ALTER TABLE `kyuukyuu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kyuukyuu`
--
ALTER TABLE `kyuukyuu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
