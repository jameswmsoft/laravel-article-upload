-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 10:13 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `fullname`, `email`, `address`, `city`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Thomas', 'qqq@asoft.com', 'eeebb', 'aaa', 'aaabbb', '$2y$10$ndcagItgVZL/xoAAMMSy/.TEsxQhpMCzKhUV/Bumxqz9f3Mxjv4pi', '7FICWRGuJkMsOVsuxApKvJJBBScLo5h9M8MLnVj7D3nltCYgly1jGAyds5lu', '2018-07-15 03:04:13', '2018-07-17 23:55:40', 'admin'),
(2, 'Alex', 'ttt@ttt.com', 'ttt', 'ttt', 'ttt', '$2y$10$ZkPxD3bs8ImTwq77xeZ8xO0A5kCDZQpxBj8rTQe5cv8UJtcVPK3C.', '3ysVzVL2SIEB1dK6mjmN5dTskoYiKqxMp4HgJZkHM8kl5hLynpIRKGRLQgYq', '2018-07-16 11:50:54', '2018-07-17 11:21:08', 'user'),
(5, 'James', 'gggg@gg.gg', 'gggee', 'ggg', 'gggrr', '$2y$10$RCkkVJzLt8t4mOmUARUjs.ExrWMvt1K1yyUyOutghWInzpFe4NqsG', 'hBStQP4fvUvg1CRq7O2l29UL28Tx40hgejXLoln7xY7g2hiDFYHcfcNF8DQP', '2018-07-16 12:05:41', '2018-07-16 18:08:12', 'user'),
(7, 'Smith', 'yyy@yy.y', 'yyy', 'yyy', 'yyy', '$2y$10$A9Ce6u9FYvJj/1MmPB7wOOXUMb9NyKcqHaLXbZM7PHkPmsDTBWI0y', 'JOUoPTiQXAAXUwuKe4JHqzLaB4KHPugvkFHWFwI2vqzSVkSDruxCDNgXz61m', '2018-07-16 12:11:01', '2018-07-16 12:11:01', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Latest News', '2018-07-20 07:00:00', '2018-07-17 02:50:39'),
(2, 'Economy', '2018-07-20 07:00:00', '2018-06-20 07:00:00'),
(3, 'Sport', '2018-07-20 07:00:00', '2018-07-17 06:35:51'),
(6, 'Agriculture', '2018-07-17 02:58:15', '2018-07-17 02:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `userFullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `content`, `userFullname`, `articleId`, `created_at`, `updated_at`) VALUES
(1, 'When is Rath Yatra 2018?', 'The devotees will pull the three chariots on the grand road to the Gundicha Temple, about three km from the main temple, on Sunday.', 'Alex', 3, '2018-07-16 22:44:57', '2018-07-16 22:44:57'),
(2, 'Importance and its significance', 'Lord Jagannath ( the Lord of the Universe derived from the Sanskrit words - Jagat meaning Universe and Nath meaning Lord) leaves his abode along with siblings Balbhadra and Subadhra for Gundicha Mata\'s Temple, a monument built in the memory of Queen Gundicha, wife of King Indradyumna who built the world famous Puri temple.', 'Smith', 4, '2018-07-16 22:55:24', '2018-07-16 22:55:24'),
(3, 'Importance and its significance', 'Lord Jagannath ( the Lord of the Universe derived from the Sanskrit words - Jagat meaning Universe and Nath meaning Lord) leaves his abode along with siblings Balbhadra and Subadhra for Gundicha Mata\'s Temple, a monument built in the memory of Queen Gundicha, wife of King Indradyumna who built the world famous Puri temple.', 'Smith', 4, '2018-07-16 22:56:34', '2018-07-16 22:56:34'),
(4, 'Importance and its significance', 'Lord Jagannath ( the Lord of the Universe derived from the Sanskrit words - Jagat meaning Universe and Nath meaning Lord) leaves his abode along with siblings Balbhadra and Subadhra for Gundicha Mata\'s Temple, a monument built in the memory of Queen Gundicha, wife of King Indradyumna who built the world famous Puri temple.', 'Smith', 4, '2018-07-16 22:56:52', '2018-07-16 22:56:52'),
(5, 'its significance', 'Taladwaja (Balabhadra) and Darpadalan (Subhadra) - have been kept ready before the 12th century Jagannath Temple in Puri. The devotees will pull the three chariots on the grand road to the Gundicha Te', 'Alex', 5, '2018-07-16 23:09:05', '2018-07-16 23:09:05'),
(6, 'Importance and its significance 2018-07-11 00:00:00 - sport', 'Three majestic chariots - Nandighosa (Lord Jagannath), Taladwaja (Balabhadra) and Darpadalan (Subhadra) - have been kept ready before the 12th century Jagannath Temple in Puri.', 'Alex', 5, '2018-07-16 23:14:27', '2018-07-16 23:14:27'),
(7, 'After install, you need to:', 'The devotees will pull the three chariots on the grand road to the Gundicha Te', 'Alex', 5, '2018-07-16 23:15:28', '2018-07-16 23:15:28'),
(8, 'Importance and its significance', 'The devotees will pull the three chariots on the grand road to the Gundicha Te', 'Alex', 5, '2018-07-16 23:16:18', '2018-07-16 23:16:18'),
(9, 'Importance and its significance', 'This will be the first rath yatra to be held, after a part of the city was included by UNESCO on the list of world heritage cities and accordingly, the theme of the procession this year will be heritage. Lord Jagannath ( the Lord of the Universe derived from the Sanskrit words - Jagat meaning Universe and Nath meaning Lord) leaves his abode along with siblings Balbhadra and Subadhra for Gundicha Mata\'s Temple, a monument built in the memory of Queen Gundicha, wife of King Indradyumna who built the world famous Puri temple. Dwitiya Tithi will begin at 4:32 am on July 14 and ends at 00:55 am on July 15, according to Drikpanchang. Huge crowd has gathered outside Puri\'s Jagannath Temple as India witnessed partial solar eclipse today. Visiting this temple holds big significance among Hindus. Watch what GuruJi Pawan Sinha tells about Surya Grahan. Odisha: Devotees, including those from outside India, gather in Puri ahead of the annual festival of Jagannath #RathYatra which begins tomorrow. pic.twitter.com/UjhCItflhV Here\'s wishing one and all a very Happy Rath Yatra.', 'gggaa', 3, '2018-07-16 23:21:08', '2018-07-16 23:21:08'),
(10, 'this is very big.', 'this will be the first yatra to be held, after a part of the city was included by UNESCO on the list of world heritage cities and accordingly, the theme of the procession this year will be heritage.', 'gggaa', 3, '2018-07-16 23:23:35', '2018-07-16 23:23:35'),
(11, 'Importance and its significance', 'This will be the first rath yatra to be held, after a part of the city was included by UNESCO on the list of world heritage cities and accordingly, the theme of the procession this year will be heritage. Lord Jagannath ( the Lord of the Universe derived from the Sanskrit words - Jagat meaning Universe and Nath meaning Lord) leaves his abode along with siblings Balbhadra and Subadhra for Gundicha Mata\'s Temple, a monument built in the memory of Queen Gundicha, wife of King Indradyumna who built the world famous Puri temple. Dwitiya Tithi will begin at 4:32 am on July 14 and ends at 00:55 am on July 15, according to Drikpanchang. Huge crowd has gathered outside Puri\'s Jagannath Temple as India witnessed partial solar eclipse today. Visiting this temple holds big significance among Hindus. Watch what GuruJi Pawan Sinha tells about Surya Grahan. Odisha: Devotees, including those from outside India, gather in Puri ahead of the annual festival of Jagannath #RathYatra which begins tomorrow. pic.twitter.com/UjhCItflhV Here\'s wishing one and all a very Happy Rath Yatra.', 'gggaa', 54, '2018-07-16 23:24:32', '2018-07-16 23:24:32'),
(12, 'Use PGP compatible files format', 'This will be the first rath yatra to be held, after a part of the city was included by UNESCO on the list of world heritage cities and accordingly, the theme of the procession this year will be heritage. Lord Jagannath ( the Lord of the Universe derived from the Sanskrit words - Jagat meaning Universe and Nath meaning Lord) leaves his abode along with siblings Balbhadra and Subadhra for Gundicha Mata\'s Temple, a monument built in the memory of Queen Gundicha, wife of King Indradyumna who built the world famous Puri temple. Dwitiya Tithi will begin at 4:32 am on July 14 and ends at 00:55 am on July 15, according to Drikpanchang. Huge crowd has gathered outside Puri\'s Jagannath Temple as India witnessed partial solar eclipse today. Visiting this temple holds big significance among Hindus. Watch what GuruJi Pawan Sinha tells about Surya Grahan. Odisha: Devotees, including those from outside India, gather in Puri ahead of the annual festival of Jagannath #RathYatra which begins', 'James', 24, '2018-07-17 00:14:48', '2018-07-17 00:14:48'),
(13, 'Importance and its significance', '\"Save it\" to save the file to your hard drive or USB stick and send it as an email attachment\r\n\"Share it\" to upload your encrypted files to the cloud and share the link securely via Gmail or \"Copy\" it to the clipboard to share it via your email client', 'James', 36, '2018-07-17 01:42:26', '2018-07-17 01:42:26'),
(14, 'Use PGP compatible files format', 'rtwertwertwertwertwertwertwert', 'James', 36, '2018-07-17 01:42:33', '2018-07-17 01:42:33'),
(15, 'Use PGP compatible files format', '\r\n16 June 2007	Removed the single quote, double quote and backslash characters from the two scramble strings as these have special meaning in PHP, and can sometimes cause problems. \r\nRemoved the need to have the first character of each scramble string duplicated at the end. My thanks to Miroslav Kolar for supplying a fix.\r\n27 August 2004	Amended the decrypt() function so that if $num2 (the offset into $scramble2) points to the first character it is switched to point to the last character, which is a duplicate. For some reason the value zero has a peculiar effect.', 'James', 2, '2018-07-17 03:39:41', '2018-07-17 03:39:41'),
(16, 'Importance and its significance', 'How to use realshort.mp4\r\n\r\nthis is very simple and easy', 'Alex', 60, '2018-07-17 04:16:59', '2018-07-17 04:16:59'),
(17, 'Importance and its significance', 'to secure your sensitive or personal data on your computer and decrease damage from hacking or laptop loss\r\nto backup them online safely and have a peace of mind\r\nto share your files with your colleagues or clients easily and securely.', 'aaa', 67, '2018-07-17 11:24:35', '2018-07-17 11:24:35'),
(18, 'After install, you need to:', '\r\n16 June 2007	Removed the single quote, double quote and backslash characters from the two scramble strings as these have special meaning in PHP, and can sometimes cause problems. \r\nRemoved the need to have the first character of each scramble string duplicated at the end. My thanks to Miroslav Kolar for supplying a fix.\r\n27 August 2004	Amended the decrypt() function so that if $num2 (the offset into $scramble2) points to the first character it is switched to point to the last character, which is a duplicate. For some reason the value zero has a peculiar effect.', 'aaa', 67, '2018-07-17 11:34:30', '2018-07-17 11:34:30'),
(19, 'sadfsdfasdfasdf', 'asdfasdfasdfsadf', 'James', 4, '2018-07-17 11:38:28', '2018-07-17 11:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `image`, `extension`, `title`, `content`, `created_at`, `updated_at`, `category`) VALUES
(2, 'qatar-09-1494293349.jpg', 'jpg', 'Qatar Airways flight damages lights at runway', '<h4 style=\"text-align: center;\"><span style=\"color: #993366;\">Three majestic chariots - Nandighosa (Lord Jagannath), </span></h4>\r\n<h4 style=\"text-align: center;\">Taladwaja (Balabhadra) and Darpadalan (Subhadra) - have been kept ready before the 12th century Jagannath Temple in Puri.</h4>\r\n<h4 style=\"text-align: center;\">The devotees will pull the three chariots on the grand road to the Gundicha Te</h4>', '2018-07-12 13:00:00', '2018-07-17 16:54:53', 'Economy'),
(3, 'rahul-gandhi10-1530275903.jpg', 'jpg', 'threedsadasdasdas', '<ol>\r\n<li>Three majestic chariots - Nandighosa (Lord Jagannath),</li>\r\n<li>Taladwaja (Balabhadra) and Darpadalan (Subhadra) -</li>\r\n<li>have been kept ready before the 12th century Jagannath Temple in Puri.</li>\r\n<li>The devotees will pull the three chariots on the grand road to the Gundicha Temple,</li>\r\n<li>about three km from the main temple, on Sunday. The annua</li>\r\n</ol>', '2018-07-09 09:09:00', '2018-07-17 16:50:41', 'Sport'),
(4, 'rajnath-sigh-1531371504.jpg', 'jpg', 'Rath Yatra', '<ul>\r\n<li><span style=\"color: #ff0000;\">The annual Rath Yatra 2018 will begin from Saturday in Odisha\'s Puri. </span></li>\r\n<li><em>This will be the first rath yatra to be held, after a part of the city was included by UNESCO on the list of world heritage cities and accordingly, </em></li>\r\n<li><strong>the theme of the procession this year will be heritage.</strong></li>\r\n<li>Lord Jagannath ( the Lord of the Universe derived from the Sanskrit words -</li>\r\n<li><span style=\"background-color: #33cccc;\"> Jagat meaning Universe and Nath meaning Lord) leaves his abode along with siblings Balbhadra and Subadhra for Gundicha Mata\'s Temple,</span></li>\r\n<li><span style=\"text-decoration: line-through;\"> a monument built in the memory of Queen Gundicha, wife of King Indradyumna who built the world famous Puri temple.</span></li>\r\n</ul>', '2018-07-17 16:53:39', '2018-07-17 16:53:39', 'Sport'),
(5, 'qatar-09-1494293349.jpg', 'jpg', 'Qatar Airways flight damages lights at runway', 'Three majestic chariots - Nandighosa (Lord Jagannath), Taladwaja (Balabhadra) and Darpadalan (Subhadra) - have been kept ready before the 12th century Jagannath Temple in Puri. The devotees will pull the three chariots on the grand road to the Gundicha Te', '2018-07-17 16:53:39', '2018-07-17 11:58:40', 'Sport'),
(6, 'rahul-gandhi10-1530275903.jpg', 'jpg', 'three', '<p><span style=\"color: #ff0000;\">Three majestic chariots - Nandighosa (Lord Jagannath), Taladwaja (Balabhadra) and Darpadalan (Subhadra) - have been kept ready before the 12th century Jagannath <strong>Temple in Puri. The devotees will pull the three chariots on the grand road to the Gundicha Temple, about three</strong> km from the main temple, on Sunday. The annual Rath Yatra 2018 will begin from Saturday in Odisha\'s Puri.</span></p>', '2018-07-18 07:00:00', '2018-07-17 16:51:53', 'Sport'),
(27, 'aaaaaaaaaaaaaaaaaaaaaaa (2).png', 'png', 'Qatar Airways flight damages lights at runway during landing in Cochin', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../img/logo.png\" alt=\"\" width=\"182\" height=\"43\" /></p>\r\n<ol>\r\n<li><strong>asdasfg sfgsdfgs s sfgsdsdsd</strong></li>\r\n<li>\r\n<h3>asdasfg sfgsdfgs s sfgsdsdsd</h3>\r\n</li>\r\n<li>\r\n<h4>asdasfg sfgsdfgs s sfgsdsdsd</h4>\r\n</li>\r\n<li>\r\n<h2>asdasfg sfgsdfgs s sfgsdsdsd</h2>\r\n</li>\r\n<li>\r\n<h1>asdasfg sfgsdfgs s sfgsdsdsd</h1>\r\n</li>\r\n</ol>', '2018-07-16 02:20:18', '2018-07-17 16:59:58', 'Economy'),
(55, 'a.png', 'png', 'Customising the encryption algorithm', '<h3>Customising the encryption algorithm</h3>\r\n<p><em>By this I mean taking a routine that is freely available, such as this one, and customising it so that it produces totally different results from any other implementation. This customisation may be done at two levels:</em></p>\r\n<ul class=\"compress\">\r\n<li>By changing lines of code within the routine.</li>\r\n<li>By supplying additional values that the routine may include in its algorithm.</li>\r\n</ul>', '2018-07-16 06:22:17', '2018-07-18 00:08:47', 'Economy'),
(59, 'aaaaaaaaaaaaaaaaaaaaaaa (1).png', 'png', 'How Do I Protect My Application?', '<h2><span id=\"How_Do_I_Protect_My_Application.3F\" class=\"mw-headline\">How Do I Protect My Application?</span></h2>\r\n<p><span style=\"text-decoration: underline;\">Consider an application that must authenticate users. We have to store some form of the user&rsquo;s password in order to authenticate them, i.e. in order to see if the user presented the correct password. We don&rsquo;t want to store the password in plaintext form (i.e. unobfuscated or unencrypted), because if an attacker is able to recover the database of passwords (such as by using SQL injection or by stealing a backup tape), they would be able to undetectably hijack every user&rsquo;s account.</span></p>\r\n<p>Therefore, we want to obfuscate the passwords in such a way that we can still authenticate users.</p>\r\n<p>We could encrypt the passwords, but that would require an encryption key &mdash; and where would we store that? We would have to store it in the database or in some other place the application can get it, and then we&rsquo;re pretty much back where we started: An attacker can recover the plaintext of the passwords by stealing the ciphertexts and the decryption key, and&nbsp;</p>', '2018-07-16 11:27:32', '2018-07-18 00:07:59', 'Economy'),
(60, 'a.png', 'png', 'How to use realshort.mp4', '<h3>Customising the encryption algorithm</h3>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>to secure your sensitive or personal data on your computer and decrease damage from hacking or laptop loss</li>\r\n<li>to backup them online safely and have a peace of mind</li>\r\n<li>to share your files with your colleagues or clients easily and securely.</li>\r\n</ul>', '2018-07-17 03:13:30', '2018-07-18 00:09:15', 'Latest News'),
(61, 'uritv_music_2018-03-23_dn51372_music.mp3', 'mp3', 'music', 'uritv_music_2018', '2018-07-17 03:47:31', '2018-07-17 03:47:31', 'Latest News'),
(62, '16800183_Screenshot_20180613-135454.png', 'png', 'copy_realshort', 'content copy_realshortsfg', '2018-07-17 03:56:44', '2018-07-17 09:44:01', 'Sport'),
(63, '3 - Trip Details.png', 'png', 'Blue Cap', '<p><span style=\"color: #0000ff;\">Captura de pantalla 2018-06-23 a la(s) 21.52.56.png Captura de pantalla 2018-06-23 a la(s) 21.52.56.pngdsdfasdf</span></p>\r\n<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 11.1111%;\">cc</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">cc</td>\r\n<td style=\"width: 11.1111%;\">ccc</td>\r\n<td style=\"width: 11.1111%;\">cc</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">cc</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">cc</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">cc</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">ccc</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">c</td>\r\n<td style=\"width: 11.1111%;\">cc</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2018-07-17 06:36:51', '2018-07-17 17:10:38', 'Latest News'),
(64, '20180620_233908.jpg', 'jpg', 'Importance and its significance_BLUE CAP', 'asdfasdfaefwefqwesa werqwerqw qw qwer qwer qwer qwer qwer werryturtyurtyu', '2018-07-17 06:38:44', '2018-07-17 09:44:10', 'Sport'),
(65, '16800183_Screenshot_20180613-135454.png', 'png', 'Qatar Airways flight damages lights at runway during landing in Cochin', '<ul>\r\n<li>to secure your sensitive or personal data on your computer and decrease damage from hacking or laptop loss</li>\r\n<li>to backup them online safely and have a peace of mind</li>\r\n<li>to share your files with your colleagues or clients easily and securely.</li>\r\n</ul>', '2018-07-17 07:16:32', '2018-07-18 00:09:44', 'Sport'),
(66, 'Captura de pantalla 2018-06-23 a la(s) 21.52.56.png', 'png', 'Qatar Airways flight damages lights at runway during landing in Cochin', '<ul>\r\n<li>to secure your sensitive or personal data on your computer and decrease damage from hacking or laptop loss</li>\r\n<li>to backup them online safely and have a peace of mind</li>\r\n<li>to share your files with your colleagues or clients easily and securely.</li>\r\n</ul>', '2018-07-17 07:18:27', '2018-07-18 00:09:32', 'Economy'),
(67, 'realshort.mp4', 'mp4', 'Use PGP compatible files format', '<h4>Use PGP compatible files format</h4>\r\n<p><span style=\"color: #ff0000;\">With Encipher it, you can encrypt your files in a OpenPGP-compatible format, so your friends and colleagues, who use PGP-compatible encryption software, can decrypt them.</span></p>\r\n<p><span style=\"color: #ff0000;\">All this ease and comfort for you is possible, because Encipher it comes with a proven, open-source encryption tool GnuGP to secure your data.</span></p>', '2018-07-17 09:17:13', '2018-07-18 00:10:16', 'Sport'),
(68, 'a.png', 'png', 'Use PGP compatible files format', '<table><colgroup valign=\"top\"><col width=\"150\" /><col /></colgroup>\r\n<tbody>\r\n<tr>\r\n<td><a name=\"2007-06-16\"></a>16 June 2007</td>\r\n<td>Removed the single quote, double quote and backslash characters from the two scramble strings as these have special meaning in PHP, and can sometimes cause problems.&nbsp;<br />Removed the need to have the first character of each scramble string duplicated at the end. My thanks to&nbsp;<a href=\"http://mkolar.org/\">Miroslav Kolar</a>&nbsp;for supplying a fix.</td>\r\n</tr>\r\n<tr>\r\n<td><a name=\"2004-08-27\"></a>27 August 2004</td>\r\n<td>Amended the decrypt() function so that if $num2 (the offset into $scramble2) points to the first character it is switched to point to the last character, which is a duplicate. For some reason the value zero has a peculiar effect.</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2018-07-17 10:03:53', '2018-07-18 00:10:58', 'Sport'),
(69, 'IMG_3937.JPG', 'JPG', 'Importance and its significance', 'ty r rew wrwerw rwerw rwer wret wer wt wert wert wert', '2018-07-17 13:30:17', '2018-07-17 13:30:17', 'Sport'),
(70, 'concept1.jpg', 'jpg', 'Importance and its significance', '<h3>dfadsf</h3>\r\n<h1><span style=\"color: #0000ff;\">fadsfasdfasdfasdfSADSADS</span></h1>\r\n<p>asdf<strong>asdfadsfDasdASD</strong></p>\r\n<table style=\"border-collapse: collapse; width: 100%; height: 36px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">sdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">adsf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n<td style=\"width: 16.6667%; height: 18px;\">asdf</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2018-07-17 14:33:24', '2018-07-17 16:34:44', 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_14_070351_create_contents_table', 1),
(2, '2018_07_14_073913_create_comments_table', 2),
(5, '2018_07_14_171203_create_accounts_table', 3),
(6, '2018_07_16_175738_create_categories_table', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
