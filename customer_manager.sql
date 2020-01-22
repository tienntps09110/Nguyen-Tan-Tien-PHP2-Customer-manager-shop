-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 21, 2020 lúc 08:09 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `customer_manager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_customer`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 6973, '2020-01-19 23:03:50', '2020-01-19 23:03:50'),
(2, 2, 136765, '2020-01-19 23:03:50', '2020-01-19 23:03:50'),
(3, 3, 49479, '2020-01-19 23:07:21', '2020-01-19 23:07:21'),
(5, 4, 176786, '2020-01-19 23:08:41', '2020-01-19 23:08:41'),
(6, 5, 6337, '2020-01-19 23:10:40', '2020-01-19 23:10:40'),
(8, 15, 176786, '2020-01-19 23:08:41', '2020-01-19 23:08:41'),
(9, 15, 5332, '2020-01-19 23:08:41', '2020-01-19 23:08:41'),
(41, 5, 26660, '2020-01-21 06:55:23', '2020-01-21 06:55:23'),
(43, 1, 462978, '2020-01-21 07:02:44', '2020-01-21 07:02:44'),
(45, 4, 26607, '2020-01-21 07:03:34', '2020-01-21 07:03:34'),
(46, 15, 442753, '2020-01-21 07:07:07', '2020-01-21 07:07:07'),
(47, 3, 28612, '2020-01-21 07:09:00', '2020-01-21 07:09:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'bang',
  `zip` int(6) DEFAULT NULL COMMENT 'mã bưu chính',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `gender`, `email`, `address`, `city`, `state`, `zip`, `created_at`, `updated_at`) VALUES
(1, 'Đinh Đức', 'Tài', 'Nam', 'vbahringer@yahoo.com', '12 Khánh Hội,Quận 8', 'TPHCM', NULL, 70000, '2020-01-19 15:54:58', '2020-01-19 15:54:58'),
(2, 'Lê Anh', 'Girl', 'Nữ', 'guillermo.nitzsche@vonrueden.info', '58/55 Âu Cơ,Phường 9', 'TPHCM', NULL, 70000, '2020-01-19 15:54:58', '2020-01-19 15:54:58'),
(3, 'Lê Tường', 'Bảo Nhi', 'Nữ', 'hailey.hettinger@daniel.com', '123 Tô Hiến Thành,Quận 10', 'TPHCM', NULL, 70000, '2020-01-19 15:54:58', '2020-01-19 15:54:58'),
(4, 'Nguyễn Ngọc', 'Hoàng', 'Nam', 'alexa.crona@yahoo.com', '256 Huỳnh Tấn Phát,Quận 7', 'TPHCM', NULL, 70000, '2020-01-19 15:54:58', '2020-01-19 15:54:58'),
(5, 'Mạc Thiên', 'Tấn', 'Nam', 'awelch@yahoo.com', '124, hẻm 12 Lê Lai', 'TPHCM', NULL, 70000, '2020-01-19 15:54:58', '2020-01-19 15:54:58'),
(15, 'Nguyễn', 'Tấn Tiền', 'Nam', 'toma.nguyen675@gmail.com', 'Phạm văn chiêu, gò vấp', 'TPHCM', 'không có', 80454, '2020-01-20 03:34:01', '2020-01-20 03:34:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_cart`
--

CREATE TABLE `detail_cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cart` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_cart`
--

INSERT INTO `detail_cart` (`id`, `id_cart`, `id_product`, `total`) VALUES
(1, 1, 1, 5),
(2, 1, 5, 1),
(3, 2, 4, 1),
(4, 2, 6, 1),
(5, 3, 9, 4),
(6, 3, 7, 3),
(7, 5, 9, 1),
(8, 5, 8, 1),
(9, 5, 4, 1),
(10, 6, 1, 3),
(11, 6, 5, 1),
(12, 8, 9, 1),
(13, 8, 8, 1),
(14, 8, 4, 1),
(15, 9, 2, 1),
(45, 41, 2, 5),
(48, 43, 6, 5),
(49, 43, 7, 5),
(50, 43, 4, 3),
(51, 43, 2, 4),
(54, 45, 5, 3),
(55, 45, 8, 3),
(56, 46, 8, 4),
(57, 46, 6, 5),
(58, 46, 4, 3),
(59, 46, 1, 4),
(60, 47, 5, 4),
(61, 47, 8, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 300, '2020-01-19 22:58:56', '2020-01-19 22:58:56'),
(2, 'Nike', 5332, '2020-01-19 22:58:56', '2020-01-19 22:58:56'),
(4, 'Asic', 128000, '2020-01-19 22:59:36', '2020-01-19 22:59:36'),
(5, 'Puma', 5437, '2020-01-19 22:59:36', '2020-01-19 22:59:36'),
(6, 'Bitis', 8765, '2020-01-19 22:59:36', '2020-01-19 22:59:36'),
(7, 'Rebook', 2765, '2020-01-19 22:59:36', '2020-01-19 22:59:36'),
(8, 'Túi Gu xì', 3432, '2020-01-19 23:01:36', '2020-01-19 23:01:36'),
(9, 'Túi chờ neo', 45354, '2020-01-19 23:01:36', '2020-01-19 23:01:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'tien', '$2y$10$qJyhe8APJFFnIp8ivp38k.NcSgQAVNxhqfre84ayAm8e6geyQScxa', '2020-01-20 05:52:24', '2020-01-20 05:52:39'),
(2, 'admin', '$2y$10$E6VJScAvpbYCEK4FGzb/9.d6B5s/WNqgaWta3.tEiGT5fkFmo75HG', '2020-01-20 05:52:24', '2020-01-20 05:52:39'),
(3, 'tantien', '$2y$10$cgNQmWXR.T0VMtQXZyIA6u8c741PwsTMNpAkVxo/yxgDV6D1o0pWG', '2020-01-20 05:52:24', '2020-01-20 05:52:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id_customer_foreign` (`id_customer`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_cart`
--
ALTER TABLE `detail_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_order_id_product_foreign` (`id_product`),
  ADD KEY `detail_order_id_order_foreign` (`id_cart`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `detail_cart`
--
ALTER TABLE `detail_cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `order_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_cart`
--
ALTER TABLE `detail_cart`
  ADD CONSTRAINT `detail_order_id_order_foreign` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_order_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
