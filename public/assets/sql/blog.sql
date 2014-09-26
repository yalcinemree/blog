-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Eyl 2014, 14:50:25
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `iDate` datetime NOT NULL,
  `uDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `userId`, `iDate`, `uDate`) VALUES
(1, 'dfgsd', 'dsfsdfs', 5, '2014-09-25 09:10:14', '2014-09-25 09:10:14'),
(2, 'vfdsvsd', 'dvsvd', 5, '2014-09-25 09:10:38', '2014-09-25 09:10:38'),
(3, 'asdas', 'asdasd', 5, '2014-09-25 14:06:34', '2014-09-25 14:06:34'),
(4, 'asdasd', 'asdasd', 5, '2014-09-25 14:06:38', '2014-09-25 14:06:38'),
(5, 'adasdas', 'asdasd', 5, '2014-09-25 14:06:43', '2014-09-25 14:06:43'),
(6, 'asdas', 'asdasd', 5, '2014-09-25 14:06:47', '2014-09-25 14:06:47'),
(7, 'adasda', 'asdsadas', 5, '2014-09-25 14:06:51', '2014-09-25 14:06:51'),
(8, 'adasda', 'asdas', 5, '2014-09-25 14:06:55', '2014-09-25 14:06:55'),
(9, 'adasd', 'asdasda', 5, '2014-09-25 14:06:59', '2014-09-25 14:06:59'),
(10, 'asdasd', 'asdasdd', 5, '2014-09-25 14:07:06', '2014-09-25 14:07:06'),
(11, 'asdasd', 'asdasd', 5, '2014-09-25 14:07:22', '2014-09-25 14:07:22'),
(12, 'emreeee', 'dfdf', 5, '2014-09-25 15:13:32', '2014-09-25 15:13:32'),
(13, 'ttt', 'fffff', 5, '2014-09-25 15:13:44', '2014-09-25 15:13:44'),
(14, 'dfgdfgdfg', 'dfgfdgf', 5, '2014-09-26 05:05:05', '2014-09-26 05:05:05'),
(15, 'sds', 'sdsd', 9, '2014-09-26 07:20:29', '2014-09-26 07:20:29'),
(16, 'asdasdasd', 'asdasdasd', 9, '2014-09-26 11:09:49', '2014-09-26 11:09:49'),
(17, 'abc def', 'abcddedfasdaasd', 9, '2014-09-26 11:10:27', '2014-09-26 11:10:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articleId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `iDate` datetime NOT NULL,
  `uDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`id`, `articleId`, `userId`, `comment`, `iDate`, `uDate`) VALUES
(1, 1, 5, 'asdasdsdsad', '2014-09-25 11:44:24', '2014-09-25 11:44:24'),
(2, 1, 5, 'asdasdsdsadgdgd', '2014-09-25 11:46:07', '2014-09-25 11:46:07'),
(3, 1, 5, 'asdasdsdsadgdgd', '2014-09-25 11:46:11', '2014-09-25 11:46:11'),
(4, 1, 5, 'asdasdsdsadgdgd', '2014-09-25 11:47:20', '2014-09-25 11:47:20'),
(5, 1, 5, 'asdasdsdsadgdgd', '2014-09-25 11:47:24', '2014-09-25 11:47:24'),
(6, 1, 5, 'asdasdsdsadgdgd', '2014-09-25 11:49:59', '2014-09-25 11:49:59'),
(7, 1, 5, 'sdsad', '2014-09-25 11:50:02', '2014-09-25 11:50:02'),
(8, 1, 5, 'sdsad', '2014-09-25 11:50:19', '2014-09-25 11:50:19'),
(9, 1, 5, 'sdsadsdasd', '2014-09-25 11:50:21', '2014-09-25 11:50:21'),
(10, 1, 5, 'sdsadsdasd', '2014-09-25 11:50:56', '2014-09-25 11:50:56'),
(11, 1, 5, 'sdsadsdasd', '2014-09-25 11:50:59', '2014-09-25 11:50:59'),
(12, 1, 5, 'sdsadsdasd', '2014-09-25 11:52:21', '2014-09-25 11:52:21'),
(13, 1, 5, 'sdsadsdasd', '2014-09-25 11:53:09', '2014-09-25 11:53:09'),
(14, 1, 5, 'sdsadsdasd', '2014-09-25 11:53:51', '2014-09-25 11:53:51'),
(15, 1, 5, 'sdsadsdasddfbgdf', '2014-09-25 11:54:20', '2014-09-25 11:54:20'),
(16, 1, 5, 'sdsadsdasddfbgdf', '2014-09-25 11:58:53', '2014-09-25 11:58:53'),
(17, 1, 5, 'sdsadsdasddfbgdf', '2014-09-25 12:00:23', '2014-09-25 12:00:23'),
(18, 1, 5, 'emre ahyasfslaf', '2014-09-25 12:00:36', '2014-09-25 12:00:36'),
(19, 1, 5, 'emre ahyasfslaf', '2014-09-25 12:00:40', '2014-09-25 12:00:40'),
(20, 1, 5, 'emre ahyasfslaf', '2014-09-25 12:06:03', '2014-09-25 12:06:03'),
(21, 1, 5, 'emre ahyasfslaf', '2014-09-25 12:06:04', '2014-09-25 12:06:04'),
(22, 1, 5, 'sadas', '2014-09-25 12:06:06', '2014-09-25 12:06:06'),
(23, 1, 5, 'sadas', '2014-09-25 12:06:12', '2014-09-25 12:06:12'),
(24, 1, 5, 'srrrr', '2014-09-25 12:06:17', '2014-09-25 12:06:17'),
(25, 1, 5, 'srrrr', '2014-09-25 12:06:29', '2014-09-25 12:06:29'),
(26, 1, 5, 'srrrr', '2014-09-25 12:06:46', '2014-09-25 12:06:46'),
(27, 1, 5, 'eefr', '2014-09-25 12:08:36', '2014-09-25 12:08:36'),
(28, 1, 5, 'eefr', '2014-09-25 12:09:59', '2014-09-25 12:09:59'),
(29, 2, 5, 'dsfd', '2014-09-25 12:10:44', '2014-09-25 12:10:44'),
(30, 2, 5, 'rrrr', '2014-09-25 12:10:49', '2014-09-25 12:10:49'),
(31, 1, 5, 'sadas', '2014-09-25 12:13:57', '2014-09-25 12:13:57'),
(32, 1, 5, 'aaaaa', '2014-09-25 12:14:07', '2014-09-25 12:14:07'),
(33, 1, 5, 'cbcfb', '2014-09-25 12:22:15', '2014-09-25 12:22:15'),
(34, 1, 5, '', '2014-09-25 13:28:10', '2014-09-25 13:28:10'),
(35, 1, 5, '', '2014-09-25 13:28:13', '2014-09-25 13:28:13'),
(36, 1, 5, 'dfgdgd', '2014-09-25 13:29:00', '2014-09-25 13:29:00'),
(37, 1, 5, 'dfgdgd', '2014-09-25 13:29:01', '2014-09-25 13:29:01'),
(38, 1, 5, 'dfgdgd', '2014-09-25 13:29:01', '2014-09-25 13:29:01'),
(39, 1, 5, 'dsf', '2014-09-25 13:50:01', '2014-09-25 13:50:01'),
(40, 5, 5, 'ghfgh', '2014-09-26 05:04:19', '2014-09-26 05:04:19'),
(41, 5, 9, 'aasd', '2014-09-26 05:55:48', '2014-09-26 05:55:48'),
(42, 1, 9, 'sdfsdf', '2014-09-26 07:28:33', '2014-09-26 07:28:33'),
(43, 1, 9, 'emreeee', '2014-09-26 07:28:38', '2014-09-26 07:28:38'),
(44, 14, 9, 'deneme de deneme de deneme', '2014-09-26 11:26:15', '2014-09-26 11:26:15'),
(45, 15, 18, 'adsdasd', '2014-09-26 11:57:38', '2014-09-26 11:57:38'),
(46, 15, 19, 'adsd', '2014-09-26 12:27:17', '2014-09-26 12:27:17'),
(47, 15, 5, 'ttt', '2014-09-26 12:49:55', '2014-09-26 12:49:55'),
(48, 15, 5, 'ergrr', '2014-09-26 12:50:02', '2014-09-26 12:50:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `uDate` datetime NOT NULL,
  `iDate` datetime NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `uDate`, `iDate`, `remember_token`) VALUES
(1, 'dsfsdf', 'dsfs', 'emr@sdfsdf', 'sfsdfjdksf', '2014-09-25 07:11:45', '2014-09-25 07:11:45', ''),
(2, 'dsfsdf', 'dsfs', 'emr@sdfsdf', 'sfsdfjdksf', '2014-09-25 07:14:56', '2014-09-25 07:14:56', ''),
(3, 'dsfsdf', 'dsfs', 'emr@sdfsdf', 'sfsdfjdksf', '2014-09-25 07:16:26', '2014-09-25 07:16:26', ''),
(4, 'Emre', 'Yalçın', 'e@y.com', '123', '2014-09-25 07:47:45', '2014-09-25 07:47:45', ''),
(5, 'emre', 'yalçın', 'emre@y.com', '$2y$10$DGaKhwA9bVSugDI4r1RzweIYdqD5tph8b14YtTAtaKYY4NdrrrD3C', '2014-09-26 05:05:24', '2014-09-25 08:22:30', 'ciCDpsPyHdYr6hhc87WNHRuarbIqbblzcKpNf5yhKroVaNLQ2C14xxKHIeAi'),
(6, 'emre', 'Yalçın', 'ey@rezervasyon.com', '$2y$10$RoZQw.jc8tLmLsPJW7ueGugzi1zaCwHAXnygu1MtyjbkvLV8HW0yO', '2014-09-25 08:29:36', '2014-09-25 08:29:36', ''),
(7, 'ey', 'y', 'ey@y', '$2y$10$P/Ov7zqIUbmAibLArkanauh0eyMTkM.5wsxD.ZPyw9C4Bk1070Exq', '2014-09-25 08:32:11', '2014-09-25 08:32:11', ''),
(8, 'er', 'ya', 'er@y.com', '$2y$10$GVg.6d0iR3bAsQ1U06q9mOeaKx75RrlswdWb/0zwtGnbwqOvoXRxS', '2014-09-25 08:34:47', '2014-09-25 08:33:47', 'U6wHUFLEwLi8BWZ3NYKu78s9SKcUZQqkpxMW4CDdWkkyfsvLbF0a76GiS1vk'),
(9, 'nurettin', 'topal', 'n@t.com', '$2y$10$Hl0YJ4ESoxcOkwOKPCS2r.SsKndtdC8j2oDUbJmkDrEKjtj8e2FKC', '2014-09-26 11:38:10', '2014-09-26 05:05:45', 'N55By5Fgz5xJpJbflbKLt7MbLffGIEHMvaiJMGIoeughzDz3SJgyOBFRcqFy'),
(10, 'asd', 'asd', 'emre@y.asdasdasdcom', '$2y$10$t1FDSwnelyQcU.wP9F7N0eoEToa9GAN2rLvzTlZnoVdUMmNh0Gl8e', '2014-09-26 11:41:15', '2014-09-26 11:41:15', ''),
(11, 'dfg', 'asd', 'emre@yasdasdasdasd.com', '$2y$10$KQCjdDJ.2XnVY.wzGUuwy.ci3pgf1yj2ifh9WohAhRgkmLxU.FX9K', '2014-09-26 11:42:34', '2014-09-26 11:42:34', ''),
(12, 'dfg', 'asd', 'emre@yasdasdasdasd.com', '$2y$10$byOZ564N3n8HykoKjmMz1ecSblsen.yxN.Qcja4cbAWT45WUMh5NW', '2014-09-26 11:43:59', '2014-09-26 11:43:59', ''),
(13, 'dfg', 'asd', 'emre@yasdasdasdasd.com', '$2y$10$eS/KbKQuDLsh.CghV70cJefXJ0vP13q8kJUX86tKE9p/zXqXpwzAu', '2014-09-26 11:44:24', '2014-09-26 11:44:24', ''),
(14, 'dfg', 'asd', 'emre@yasdasdasdasd.com', '$2y$10$hR9nJXE4lJaAhVvZ.h6sX.N.wvz3RJX9h6v2Q/Oh8bRSoR4s1MsOu', '2014-09-26 11:44:40', '2014-09-26 11:44:40', ''),
(15, 'dfg', 'asd', 'emre@yasdasdasdasd.com', '$2y$10$6drHSu6cfaHenl0MIJzZwuqocRcmPza0Z64sISast.cf8kI.WIUta', '2014-09-26 11:44:47', '2014-09-26 11:44:47', ''),
(16, 'dfg', 'asd', 'emre@yasdasdasdasd.com', '$2y$10$tQ7uDrmz8eswCox/AFbkJOfel92pWuRLPHohw2z7AUG4zEmW72BhG', '2014-09-26 11:45:10', '2014-09-26 11:45:10', ''),
(17, 'dfg', 'asd', 'emre@yasdasdasdasd.com', '$2y$10$mJY1kJPgcgrwrPgqMVDFpugRk0k1y8no8Pk1PorqFzU3k0oOUrZLy', '2014-09-26 11:45:43', '2014-09-26 11:45:38', 'l40hSJCDEw2wAW9QOfuetaHJhZ149Rtd08MpCOfGAv2SbcwdeZ7S3MzW7tuj'),
(18, 'ahmet', 'mehmet', 'ahmet@mehmetc.com', '$2y$10$1ZfPS99rRcYj7mxk43YxTOdit9b0R1jwkZaK4xRimWQdGKBWi96Jm', '2014-09-26 11:57:43', '2014-09-26 11:46:01', 'PijLdQs43SsJQ5KtgH7u5CCHQ0JHfG5cWSuTZnVNW90nSx0Xv024WMhNSPv9'),
(19, 'asd asdasd ', 'asd asasda', 'emre@y.coasdasdasd.am', '$2y$10$RXdD57ZJzn//jwksJhSAc.XB8TtfSEjZA4d3pWfJamcY2e8dKk64C', '2014-09-26 12:45:12', '2014-09-26 12:14:22', '9c6Y2fHBIVRZKn6Jy2EZafGHc08YarfHZvm9sLpVaZXZsmOLoYKS8B0eO9H0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
