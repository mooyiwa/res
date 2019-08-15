-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `upline` varchar(255) DEFAULT NULL,
  `credit` decimal(15,2) DEFAULT NULL,
  `bonus` decimal(15,2) DEFAULT 0.00,
  `start` timestamp NOT NULL DEFAULT current_timestamp(),
  `finish` timestamp NOT NULL DEFAULT current_timestamp(),
  `who` varchar(25) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `assets`;
CREATE TABLE `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset` varchar(255) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rate` int(5) DEFAULT NULL,
  `period` int(5) DEFAULT NULL,
  `asset_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `assets` (`id`, `asset`, `location`, `rate`, `period`, `asset_id`, `created_at`, `updated_at`, `amount`) VALUES
(3,	'Badewa Estate, 2004.',	'Agbara',	9,	8,	'1563912703.jpg',	NULL,	'2019-08-15 12:17:45',	1000000.00),
(5,	'Minnenial Blocks',	'Ikeja',	11,	12,	'1563912545.jpg',	NULL,	'2019-08-15 08:46:30',	550000.00),
(6,	'Bank House',	'Oregun',	10,	12,	'1563912703.jpg',	NULL,	'2019-07-23 19:11:43',	750000.00),
(7,	'Banana Estates',	'Ikeja',	9,	10,	'1563917308.jpg',	NULL,	'2019-07-23 20:28:28',	1000000.00),
(8,	'Palm Beach',	'Marina, Lagos',	11,	12,	'1563917308.jpg',	NULL,	NULL,	750000.00),
(17,	'Barack Estates',	'Ikoyi',	25,	12,	'1565875193.jpg',	NULL,	'2019-08-15 12:32:40',	750000.00);

DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `story` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `joins`;
CREATE TABLE `joins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `story` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `plans`;
CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset` varchar(255) NOT NULL,
  `period` int(5) NOT NULL,
  `rate` decimal(15,2) NOT NULL,
  `cap_in` decimal(15,2) NOT NULL,
  `cap_out` decimal(15,2) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `cate` varchar(200) NOT NULL,
  `post` blob NOT NULL,
  `auth` varchar(100) NOT NULL,
  `upped` varchar(5) DEFAULT NULL,
  `fname` varchar(200) NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `score` varchar(25) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `accepted` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`title`,`cate`,`auth`,`start`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pros`;
CREATE TABLE `pros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `author` text DEFAULT NULL,
  `reader` text DEFAULT NULL,
  `who` varchar(25) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `txn`;
CREATE TABLE `txn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `wallet_id` varchar(25) NOT NULL,
  `item` varchar(255) NOT NULL,
  `cost` decimal(15,2) NOT NULL,
  `qty` varchar(25) NOT NULL,
  `cafe` varchar(255) NOT NULL,
  `txn_id` varchar(25) NOT NULL,
  `debit` decimal(15,2) NOT NULL,
  `credit` decimal(15,2) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(25) NOT NULL,
  `paidstamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `paid_day` date NOT NULL,
  `auth` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `upline` varchar(255) DEFAULT NULL,
  `who` char(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passcode` varchar(10) DEFAULT NULL,
  `user_id` varchar(50) NOT NULL,
  `secret` varchar(25) NOT NULL,
  `hash_secret` varchar(255) NOT NULL,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `sex` char(2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` char(100) DEFAULT NULL,
  `kin` varchar(255) DEFAULT NULL,
  `kin_address` text DEFAULT NULL,
  `kin_phone` varchar(100) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `photo_id` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`username`,`user_id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `how` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2019-08-15 14:05:37
