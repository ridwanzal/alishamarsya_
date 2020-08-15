-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2020 at 01:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `caption` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image_name`, `caption`, `date_created`) VALUES
(25, 'banners1.png', '', '0000-00-00 00:00:00'),
(26, 'banners21.png', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner_two`
--

CREATE TABLE `banner_two` (
  `id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `date_created` datetime NOT NULL,
  `link_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `slug` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `max_length` text NOT NULL,
  `image_path` text NOT NULL,
  `content` text NOT NULL,
  `category` varchar(128) NOT NULL,
  `tag` varchar(128) NOT NULL,
  `bookmark` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `type` int(2) NOT NULL COMMENT '1 post; 2 draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='blog data';

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `rank`) VALUES
(1, 'T-Shirt', '', 0),
(2, 'Jacket', '', 0),
(3, 'Hat', '', 10),
(4, 'Hoodies', '', 0),
(5, 'Plain & Basics', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `link_product` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `email`, `phone`, `link_product`, `date_created`) VALUES
(1, 'zalbinaridwan@gmail.com', '081919992000', 0, '2020-07-07 07:41:38'),
(2, 'zalbinaridwan@gmail.com', '081919992000', 0, '2020-07-07 07:42:23'),
(3, 'zalbinaridwan@gmail.com', '+6281919992000', 0, '2020-07-07 07:42:50'),
(4, 'zalbinaridwan@gmail.com', '+6281919992000', 0, '2020-07-07 07:43:33'),
(5, 'zalbinaridwan@gmail.com', '+6281919992000', 0, '2020-07-07 07:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `gender` enum('men','women','kids','other') NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `details` text NOT NULL,
  `offers` text NOT NULL,
  `seen` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `gender`, `price`, `discount`, `details`, `offers`, `seen`, `date_created`) VALUES
(16, 'Ganco - Kaos Hitam bermerk', 5, 'men', 260000, 10, '<p>Sangat kasual bahan nyaman dan tidak gatal. <br>\r\nBeli produk berikut jika kamu merasa memerlukan. <br>\r\nTersedia dengan berbagai ukuran</p>\r\n', '<p>Gratis Sticker merk Ganco</p>\r\n', 0, '0000-00-00 00:00:00'),
(17, 'Gemko - T-Shirt bergaa', 1, 'men', 60000, 0, '<p>Kaos dengan design superhero keren ini<br>\r\nBahan sangat adem, nyaman dipakai untuk santai dan juga keren dipakai hang out dengan temen.</p>\r\n', '<p>Kaos dengan design superhero keren ini<br>\r\nBahan sangat adem, nyaman dipakai untuk santai dan juga keren dipakai hang out dengan temen.</p>\r\n', 0, '0000-00-00 00:00:00'),
(18, 'OR-K689 Baju Kaos Make / Navy - Navy, S', 1, 'men', 75000, 5, '<p>Kaos bernuansa monotone dengan detail word bordir kontras<br>\r\n- Warna navy<br>\r\n- Kerah bulat<br>\r\n- Unlined<br>\r\n- Regular fit<br>\r\n- Material katun poliester tidak transparan, ringan dan tidak stretch<br>\r\n<br>\r\nPenting:<br>\r\nsebelum memesan produck harap ditanyakan dulu ketersediaan stock,</p>\r\n', '<p>Lebar Dada x Panjang Badan:<br>\r\n- S (47 cm x 67 cm)<br>\r\n- M (50 cm x 69 cm)<br>\r\n- L (53 cm x 72 cm)<br>\r\n- XL (56 cm x 75 cm)</p>\r\n', 0, '0000-00-00 00:00:00'),
(19, 'Baju Koko Pria', 1, 'men', 124000, 5, '<p>- Baju koko Agam<br>\r\n- Tersedia 6 Warna = Tosca,Mustard,Navy,Hitam,Abu,Putih<br>\r\n- Kerah mandarin<br>\r\n- Unlined<br>\r\n- Regular fit<br>\r\n- Kancing depan<br>\r\n- Material katun Popline<br>\r\n- Tinggi model 180cm, mengenakan ukuran XL<br>\r\n<br>\r\nBarang Yang Kami Jual Original, Asli Real Pict<br>\r\nUkuran Tersedia = M-L-XL-XXL<br>\r\n<br>\r\n\"Ukuran Koko Lengan 3/4\"<br>\r\n<br>\r\nM : Panjang 73cm Lebar Badan 57cm Panjang Lengan Panjang 54cm<br>\r\nL : Panjang 76cm Lebar Badan 60cm Panjang Lengan Panjang 57cm<br>\r\nXL : Panjang 79cm Lebar Badan 63cm Panjang Lengan Panjang 60cm<br>\r\nXXL : Panjang 82cm Lebar Badan 66cm Panjang Lengan Panjang 63cm</p>\r\n', '<p>NOTE:<br>\r\n- Kami Menjamin Bahwa Produk yang Kami Jual Merupakan Produk ORIGINAL dengan WARNA Yang Sesuai Dengan JUDUL POSTINGAN PRODUK.<br>\r\n- Perlu Diketahui! Untuk Meminimalisir Kesalah-pahaman Terkait Warna Produk, kemungkinan Warna akan Sedikit Berbeda dengan Foto yang di Upload, dikarenakan Efek dari Lensa Kamera yang digunakan saat Pemotretan Produk, dan Kualitas Layar LCD (Pada PC / Smartphone) yang Anda Gunakan Untuk Melihat Produk Ini.<br>\r\n- Jika Anda Mempunyai Kendala, Sebelum Memberikan Rating / Ulasan, Ada Baik nya Anda Diskusikan Terlebih Dahulu dengan Kami Untuk menemukan Solusi Terbaik.</p>\r\n', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_thumb`
--

CREATE TABLE `product_thumb` (
  `id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_thumb`
--

INSERT INTO `product_thumb` (`id`, `image_name`, `id_product`) VALUES
(8, '0_41c2e020-36a1-4ae4-be04-0ac4f340294b_1080_1084.jpg', 17),
(11, '0_41c2e020-36a1-4ae4-be04-0ac4f340294b_1080_1084.jpg', 16),
(12, '2411623_ae63556b-0ece-47d5-b8d6-02fe9f9fe969_762_762.jpg', 18),
(13, '12961895_d6eda7ea-de47-4a1b-9aa1-54e5897d5c7a_720_720.jpeg', 19),
(14, '2411623_ae63556b-0ece-47d5-b8d6-02fe9f9fe969_762_762.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `role` enum('pelanggan','admin') NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama_lengkap`, `role`, `email`, `telepon`, `alamat`, `password`) VALUES
(1, 'admin', 'Administrator', 'admin', 'admin@gmail.com', 123, '', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_thumb`
--
ALTER TABLE `product_thumb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `con_thumb_product` (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_thumb`
--
ALTER TABLE `product_thumb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_thumb`
--
ALTER TABLE `product_thumb`
  ADD CONSTRAINT `con_thumb_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
