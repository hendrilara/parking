-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01 Apr 2016 pada 13.25
-- Versi Server: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amptek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `capacity`
--

CREATE TABLE IF NOT EXISTS `capacity` (
  `id` int(10) unsigned NOT NULL,
  `empty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avalible` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `image`
--

INSERT INTO `image` (`id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(1, '', 'http://localhost:8000/image/94823.Vita-Long-Cardi-300x300 (1).jpg', '2016-03-31 20:19:04', '2016-03-31 20:19:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(10) unsigned NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `capacity_id` int(10) unsigned NOT NULL,
  `parking_hours_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lng` double(10,7) NOT NULL,
  `lat` double(10,7) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `location`
--

INSERT INTO `location` (`id`, `image_id`, `capacity_id`, `parking_hours_id`, `name`, `city`, `address`, `description`, `price`, `type`, `lng`, `lat`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 'Plaza Ambarrukmo', 'yogyakarta', 'jaln m', 'parking here', 2000.00, '', 110.4013282, -7.7820963, '2016-03-31 20:19:04', '2016-03-31 20:19:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_15_141757_create_image_table', 1),
('2016_02_15_141815_create_location_table', 1),
('2016_02_18_050110_create_saldo_table', 1),
('2016_02_18_081049_create_social_accounts_table', 1),
('2016_03_01_065418_create_transaction_table', 1),
('2016_03_01_065441_create_barcode_table', 1),
('2016_03_01_072526_create_capacity_table', 1),
('2016_03_01_174049_create_parking_hours_table', 1),
('2016_03_25_073512_create_usersos_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parking_hours`
--

CREATE TABLE IF NOT EXISTS `parking_hours` (
  `id` int(10) unsigned NOT NULL,
  `close_parking` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_parking` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `parking_hours`
--

INSERT INTO `parking_hours` (`id`, `close_parking`, `open_parking`, `created_at`, `updated_at`) VALUES
(1, '15.10', '07.10', '2016-03-31 20:19:04', '2016-03-31 20:19:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_account`
--

CREATE TABLE IF NOT EXISTS `social_account` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_token` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `refresh_token` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@superadmin.com', 'superadmin', 'img/admin.jpg', '$2y$10$Mb6jaPdXXUmGS0jPRmagpuhyyn4bVSaFSz1TM6X0hVE1CCbw3xJri', 'dEHlMyt1ClY7mtxyU6PAjv3GIqnUG6lOjLWDg5VgAeWwLoUindrkGXZwq86s', '0000-00-00 00:00:00', '2016-03-31 22:41:52'),
(2, 'administrator', 'admin@admin.com', 'administrator', 'img/admin.jpg', '$2y$10$5x8Esh.1OBWVzelOvaVsn.bdZS2LxZ6p5/wjD/dXta0GFnCWur53K', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'operator', 'operator@operator.com', 'operator', 'img/operator.jpg', '$2y$10$M7C/ttLcNzAViLzAUZe52eOBJY34ag4Tg1UOvzMRziM2OXCnlEYLe', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_sos`
--

CREATE TABLE IF NOT EXISTS `users_sos` (
  `id` int(10) unsigned NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_token` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_image_id_foreign` (`image_id`),
  ADD KEY `location_capacity_id_index` (`capacity_id`),
  ADD KEY `location_parking_hours_id_index` (`parking_hours_id`);

--
-- Indexes for table `parking_hours`
--
ALTER TABLE `parking_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_sos`
--
ALTER TABLE `users_sos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacity`
--
ALTER TABLE `capacity`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parking_hours`
--
ALTER TABLE `parking_hours`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_sos`
--
ALTER TABLE `users_sos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
