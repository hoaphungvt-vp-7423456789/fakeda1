-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 07:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` decimal(10,0) DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 là đang chờ xác nhận',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` decimal(10,0) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `unit_price` decimal(10,0) UNSIGNED DEFAULT NULL,
  `bill_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(2, 'Casio4'),
(3, 'cá'),
(6, 'Patek Philippe'),
(7, 'Audemars Piguet'),
(8, 'Vacheron Constantin'),
(9, 'TAG Heuer'),
(10, 'A.Lange & Söhne');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'hồng'),
(2, 'tím'),
(3, 'Bạc'),
(4, 'Đen'),
(5, 'Vàng'),
(6, 'Xanh Ngọc'),
(7, 'Đen Đỏ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `detail`, `created_at`, `updated_at`, `brand_id`) VALUES
(6, 'Dương đẹp trai lọ 2', '6413312983911-casio-ltp-vt01gl-9budf-nu-1.jpg', '<p>1</p>\r\n', '<p>1</p>\r\n', '2023-03-16 09:08:45', '2023-03-16 09:09:29', 2),
(7, 'Dương đẹp trai lọ 1', '64133136a19b9-casio-mtp-e715d-7avdf-nam-1.jpg', '<p>2</p>\r\n', '<p>2</p>\r\n', '2023-03-16 09:09:42', '2023-03-16 09:36:25', 3),
(8, 'Đồng hồ CITIZEN', '64155efb6e64c-dh1.jpg', '<h3><strong>Đơn giản v&agrave; thanh lịch&nbsp;</strong></h3>\r\n\r\n<p>Xu hướng thiết kế ch&iacute;nh của đồng hồ Citizen l&agrave; đơn giản v&agrave; thanh lịch. Citizen lu&ocirc;n ch&uacute; trọng đến việc đổi mới v&agrave; tạo sự phong ph&uacute; cho c&aacute;c mẫu thiết kế. C&aacute;c chi tiết cũng được Citizen đầu tư kỹ lưỡng trong kh&acirc;u chế t&aacute;c.</p>\r\n', '<p>&nbsp;Đường k&iacute;nh mặt của mẫu&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-deo-tay/citizen-nh8391-51x-nam\">đồng hồ CITIZEN 40 mm Nam NH8391-51X</a>&nbsp;n&agrave;y l&agrave;&nbsp;<strong>40 mm</strong>, độ rộng d&acirc;y l&agrave;&nbsp;<strong>20 mm</strong>.</p>\r\n', '2023-03-18 00:49:32', '2023-03-18 00:49:32', 6),
(9, 'Đồng hồ Esprit ', '64155f3d79f68-dh2.jpg', '<h3><strong>Thanh lịch v&agrave; sang trọng</strong></h3>\r\n\r\n<p>Esprit lu&ocirc;n đặt chất lượng sản phẩm l&ecirc;n h&agrave;ng đầu. C&aacute;c thiết kế đến từ&nbsp;<a href=\"http://www.thegioididong.com/dong-ho-deo-tay\">đồng hồ</a>&nbsp;Esprit mang đậm chất trẻ, sự thanh lịch nhưng kh&ocirc;ng k&eacute;m phần sang trọng, ph&ugrave; hợp với thị hiếu của giới trẻ hiện nay.</p>\r\n', '<p>Đồng hồ Esprit 30 mm Nữ ES1L281L1015 thuộc thương hiệu Esprit của Mỹ.</p>\r\n', '2023-03-18 00:50:37', '2023-03-18 00:50:37', 7),
(10, 'Đồng hồ Elle Rive Droite', '64155f697a009-dh3.jpg', '<h3><strong>Hiện đại v&agrave; sang trọng</strong></h3>\r\n\r\n<p>Đồng hồ ELLE l&agrave; một trong những thương hiệu nổi tiếng với nhiều mẫu m&atilde;&nbsp;<a href=\"http://www.thegioididong.com/dong-ho-deo-tay\">đồng hồ</a>&nbsp;đầy thời thượng v&agrave; được nhiều người ưa chuộng. Nhắc đến thương hiệu ELLE l&agrave; nhắc đến thương hiệu thời trang của sự s&aacute;ng tạo - c&aacute; t&iacute;nh v&agrave; sự đổi mới cho vẻ đẹp đương đại.</p>\r\n', '<p>Elle l&agrave; một trong những thương hiệu&nbsp;<a href=\"https://www.thegioididong.com/dong-ho\" target=\"_blank\" title=\"Xem thêm các mẫu đồng hồ tại Thế Giới Di Động\">đồng hồ</a>&nbsp;nổi tiếng uy t&iacute;n đến từ Ph&aacute;p hiện đang b&aacute;n chạy tr&ecirc;n thị trường Việt Nam. Mẫu thiết kế n&agrave;y sẽ l&agrave; sự lựa chọn ph&ugrave; hợp cho c&aacute;c qu&yacute; c&ocirc; sở hữu phong c&aacute;ch sang trọng v&agrave; thời thượng.</p>\r\n', '2023-03-18 00:51:21', '2023-03-18 00:51:21', 9),
(11, 'Đồng hồ Orient ', '64155fb5a7eed-dh4.jpg', '<h3><strong>Sang trọng v&agrave; đẳng cấp</strong></h3>\r\n\r\n<p>Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nh&igrave;n một c&aacute;ch nhanh ch&oacute;ng. Đồng hồ Orient với những chất liệu cao cấp b&oacute;ng bẩy n&acirc;ng tầm đẳng cấp cho người sở hữu, ph&ugrave; hợp với doanh nh&acirc;n th&agrave;nh đạt, d&acirc;n văn ph&ograve;ng hay c&aacute;c gi&aacute;m đốc c&ocirc;ng ty. Phong c&aacute;ch thời thượng, sang trọng đầy sức thu h&uacute;t đến từ đồng hồ Orient chắc chắn sẽ khiến bạn lu&ocirc;n h&atilde;nh diện với những người xung quanh.</p>\r\n', '<p>Chất liệu d&acirc;y đeo được l&agrave;m từ th&eacute;p kh&ocirc;ng gỉ - sang trọng v&agrave; chống ăn m&ograve;n cao, tạo cảm gi&aacute;c m&aacute;t tay cho người d&ugrave;ng khi đeo.</p>\r\n', '2023-03-18 00:52:37', '2023-03-18 00:52:37', 10),
(12, 'Đồng hồ Titoni', '64155fe7a1c3e-dh5.jpg', '<h3><strong>Cổ điển v&agrave; sang trọng</strong></h3>\r\n\r\n<p>Titoni c&oacute; sứ mệnh l&agrave; chế t&aacute;c ra những chiếc đồng hồ tinh xảo với độ ch&iacute;nh x&aacute;c cao, thiết kế đẹp mắt ở xưởng sản xuất tại Grenchen, Thụy Sĩ.&nbsp;Đồng hồ được sản xuất theo c&aacute;c y&ecirc;u cầu, quy định khắt khe Swiss-made. Swiss-made l&agrave; cốt l&otilde;i trong suốt qu&aacute; tr&igrave;nh s&aacute;ng tạo v&agrave; ph&aacute;t triển của Titoni, từ thiết kế, sự s&aacute;ng tạo cho đến những c&ocirc;ng nghệ hiện đại.</p>\r\n', '<p>Mẫu&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-deo-tay-titoni\" target=\"_blank\" title=\"Đồng hồ Titoni chính hãng, giá rẻ, bán tại Thế Giới Di Động\">đồng hồ Titoni</a>&nbsp;thời thượng v&agrave; đẳng cấp, thương hiệu nổi tiếng d&agrave;nh cho c&aacute;c qu&yacute; &ocirc;ng sang trọng.&nbsp;<a href=\"https://www.thegioididong.com/dong-ho-deo-tay/titoni-83709-sy-500-nam\">Đồng hồ Titoni 40 mm Nam 83709 SY-500</a>&nbsp;nổi bật với thiết kế sang trọng v&agrave; cực k&igrave; tinh tế.</p>\r\n', '2023-03-18 00:53:27', '2023-03-18 00:53:27', 10);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`) VALUES
(1, '32mn'),
(2, '34mn'),
(3, '20mm'),
(4, '28mm'),
(5, '22mm'),
(6, '24mm'),
(8, '38mm');

-- --------------------------------------------------------

--
-- Table structure for table `variation`
--

CREATE TABLE `variation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variation`
--

INSERT INTO `variation` (`id`, `color_id`, `size_id`, `product_id`, `price`, `discount`, `quantity`) VALUES
(18, 2, 2, 7, '1', 1, 1),
(19, 1, 1, 7, '12', 12, 12),
(20, 2, 1, 7, '1', 1, 1),
(21, 6, 6, 12, '522', 10, 1),
(22, 5, 3, 11, '522', 4, 4),
(23, 3, 6, 10, '497', 30, 1),
(24, 5, 2, 8, '996', 20, 2),
(25, 7, 5, 8, '499', 20, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `variation_id` (`variation_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variation`
--
ALTER TABLE `variation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `variation`
--
ALTER TABLE `variation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`variation_id`) REFERENCES `variation` (`id`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `variation`
--
ALTER TABLE `variation`
  ADD CONSTRAINT `variation_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `variation_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `variation_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
