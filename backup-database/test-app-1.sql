-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 05:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-app-1`
--

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
(46, '2014_10_12_000000_create_users_table', 1),
(47, '2014_10_12_100000_create_password_resets_table', 1),
(48, '2017_06_05_064955_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'Thanh Xuân Của Ai Không Mơ Hồ (Tặng Kèm Postcard)', '<h5 id="product-name" class="item-name" style="box-sizing: border-box; margin: 16px 0px 6px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 30px; color: #333333; font-size: 24px;">Thanh Xu&acirc;n Của Ai Kh&ocirc;ng Mơ Hồ (Tặng K&egrave;m Postcard)</h5>', 94, '2017-06-12-n19-thanhxuancuaaikhongmoho-1.u4972.d20170522.t174112.437168.jpg', '2017-06-11 20:17:32', '2017-06-11 20:17:32'),
(6, 'Hết Hôm Nay Là Đến Hôm Qua (Tái Bản)', '<h1 id="product-name" class="item-name" style="box-sizing: border-box; margin: 16px 0px 6px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 30px; color: #333333; font-size: 24px;">Hết H&ocirc;m Nay L&agrave; Đến H&ocirc;m Qua (T&aacute;i Bản)</h1>', 35, '2017-06-12-n75-img831.gif', '2017-06-11 20:18:27', '2017-06-11 20:18:27'),
(7, 'Em Muốn Có Một Cuộc Tình Già Với Anh', '<h1 id="product-name" class="item-name" style="box-sizing: border-box; margin: 16px 0px 6px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 30px; color: #333333; font-size: 24px;">Em Muốn C&oacute; Một Cuộc T&igrave;nh Gi&agrave; Với Anh</h1>', 30, '2017-06-12-n22-cover (3).u2654.d20160826.t154730.816366.jpg', '2017-06-11 20:19:50', '2017-06-11 20:19:50'),
(8, 'Thương Nhau Để Đó (Tái Bản 2014)', '<h1 id="product-name" class="item-name" style="box-sizing: border-box; margin: 16px 0px 6px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 30px; color: #333333; font-size: 24px;">Thương Nhau Để Đ&oacute; (T&aacute;i Bản 2014)</h1>', 20, '2017-06-12-n98-thuong-nhau-de-do.u48.d20160610.t141042.jpg', '2017-06-11 20:20:20', '2017-06-11 20:20:20'),
(9, 'Your Name', '<h1 id="product-name" class="item-name" style="box-sizing: border-box; margin: 16px 0px 6px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 30px; color: #333333; font-size: 24px;">Your Name</h1>', 52, '2017-06-12-n63-your-name---bia-1.u4972.d20170519.t093922.230473.jpg', '2017-06-11 20:25:16', '2017-06-11 20:25:16'),
(10, '5 Centimet Trên Giây', '<h1 id="product-name" class="item-name" style="box-sizing: border-box; margin: 16px 0px 6px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 30px; color: #333333; font-size: 24px;">5 Centimet Tr&ecirc;n Gi&acirc;y</h1>', 35, '2017-06-12-n19-img894.gif', '2017-06-11 20:26:17', '2017-06-11 20:26:17'),
(11, 'Cô Gái Đến Từ Hôm Qua (Tái Bản 2013)', '<h1 id="product-name" class="item-name" style="box-sizing: border-box; margin: 16px 0px 6px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 300; line-height: 30px; color: #333333; font-size: 24px;">C&ocirc; G&aacute;i Đến Từ H&ocirc;m Qua (T&aacute;i Bản 2013)</h1>', 32, '2017-06-12-n37-img858.gif', '2017-06-11 20:27:47', '2017-06-11 20:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `level`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2017-06-11-boy.png', 1, 'admin@gmail.com', '$2y$10$mbDv79kV57ha0jjS2SogMuX7XFDkhI73dk3aH/8DxtJVvpAuxuk.e', 'cImTXVvkLitytNXE3MXVYHHvpKTQ47zDDFPMahH7btEM7jHe1b0lqOxLnGpB', '2017-06-11 10:02:39', '2017-06-11 10:02:39'),
(2, 'Bui Van Hai', '2017-06-12-delete.png', 0, 'buihai2603@gmail.com', '$2y$10$rjlZ4uakIHEYnnRdaF1IBOggvZ1P1B4z59I0nsZqeAEgK.ctPdRx.', 'KMzalhYr9WXz8ozpOMOK1JBaHA8cvYT5eVfLITl3Zxc0tMqwyX9HazVdS7Xm', '2017-06-11 19:32:20', '2017-06-11 20:11:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD UNIQUE KEY `password_resets_email_unique` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
