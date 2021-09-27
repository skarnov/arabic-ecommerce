-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2016 at 10:24 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evis_arabic ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_level` tinyint(1) NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_date_time`, `admin_level`, `admin_status`) VALUES
(1, 'Admin', 'eng.ismael.sa@gmail.com', 'store2016', '2016-06-08 05:18:00', 1, 1),
(2, 'Arnov', 'admin@evis.com', '111111', '2016-06-15 21:09:25', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(2) NOT NULL,
  `banner_image` varchar(250) NOT NULL,
  `banner_position` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `banner_image`, `banner_position`) VALUES
(1, 'upload_image/banner_image/3_thumb.jpg', 2),
(2, 'upload_image/banner_image/5_thumb.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(2) NOT NULL,
  `brand_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_image`) VALUES
(1, 'upload_image/brand_image/apple_thumb.jpg'),
(2, 'upload_image/brand_image/htc_thumb.jpg'),
(3, 'upload_image/brand_image/samsung_thumb.jpg'),
(4, 'upload_image/brand_image/huawei_thumb.jpg'),
(5, 'upload_image/brand_image/lenovo_thumb.jpg'),
(6, 'upload_image/brand_image/sony_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `display_in_home` tinyint(1) NOT NULL DEFAULT '0',
  `category_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `display_in_home`, `category_status`) VALUES
(1, 'iPhone', 1, 1),
(2, 'Samsung', 1, 1),
(3, 'Sony', 1, 1),
(4, 'HTC', 0, 1),
(5, 'Lenovo', 0, 1),
(6, 'Huawei', 0, 1),
(7, 'Tablets', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(3) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `more_info` text NOT NULL,
  `password` varchar(32) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `day` varchar(2) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` varchar(4) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `state` varchar(100) NOT NULL,
  `region` varchar(30) NOT NULL,
  `customer_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter_subscription`
--

CREATE TABLE `tbl_newsletter_subscription` (
  `subscription_id` int(10) NOT NULL,
  `subscription_email` varchar(100) NOT NULL,
  `subscription_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(5) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `shipping_id` int(4) NOT NULL,
  `payment_id` int(4) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `invoice_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `product_sales_quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(5) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `shipping_id` int(4) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(4) NOT NULL,
  `category_id` int(2) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_tag` varchar(10) NOT NULL,
  `product_image_0` varchar(250) NOT NULL,
  `product_image_1` varchar(250) NOT NULL,
  `product_image_2` varchar(250) NOT NULL,
  `product_image_3` varchar(250) NOT NULL,
  `product_image_4` varchar(250) NOT NULL,
  `product_color` varchar(50) NOT NULL DEFAULT 'Black',
  `product_quantity` varchar(10) NOT NULL,
  `discount_end_time` varchar(11) NOT NULL DEFAULT '0',
  `product_price` float(10,2) NOT NULL,
  `product_old_price` float(10,2) DEFAULT NULL,
  `product_discount_type` tinyint(1) NOT NULL DEFAULT '0',
  `product_summery` text NOT NULL,
  `product_description` text NOT NULL,
  `product_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `product_tag`, `product_image_0`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `product_color`, `product_quantity`, `discount_end_time`, `product_price`, `product_old_price`, `product_discount_type`, `product_summery`, `product_description`, `product_status`) VALUES
(1, 1, 'iPhone 5S', '', 'upload_image/product_image_0/5s_thumb.png', '', '', '', '', 'Black', '10', '2016/06/20', 1500.00, 0.00, 2, 'Best Mobile in The World', '', 1),
(2, 1, 'iPhone 6', '', 'upload_image/product_image_0/6_thumb.png', '', '', '', '', 'Black,White', '10', '', 2000.00, 2100.00, 0, 'The New iPhone', '', 1),
(3, 1, 'iPhone 6 Gray', '', 'upload_image/product_image_0/gray_thumb.jpg', '', '', '', '', 'Gray', '5', '', 1500.00, 0.00, 0, '', '', 1),
(4, 1, 'iPhone Rose', '', 'upload_image/product_image_0/rose_thumb.jpg', '', '', '', '', 'Pink', '3', '', 2000.00, 0.00, 0, '', '', 1),
(5, 1, 'iPhone Gold', '', 'upload_image/product_image_0/gold_thumb.jpg', '', '', '', '', 'Gold', '50', '', 3000.00, 0.00, 0, '', '', 1),
(6, 3, 'Xperia Z2 Hero', '', 'upload_image/product_image_0/xperia-z2-hero-black-1240x840-fc5a31e4db7ebb88498f29f05732c912_thumb.jpg', '', '', '', '', 'Black', '20', '', 1000.00, 0.00, 1, 'Best phone from Sony', '', 1),
(7, 3, 'Xperia Z3', '', 'upload_image/product_image_0/Sony_Xperia_Z3_Coppera_thumb.jpg', '', '', '', '', 'Gold', '2', '', 990.00, 0.00, 0, '', '', 1),
(8, 3, 'Xperia Z3', '', 'upload_image/product_image_0/xperia-z3-white-2000x2000-43adaeaed2bd118caeb1a867a87e4c5b_thumb.png', 'upload_image/product_image_1/xperia-z3-compact-black-1240x840-2f1d546fc795ff2d1295547982a23cb4_thumb.jpg', '', '', '', 'Black,White', '30', '', 3000.00, 0.00, 0, '', '', 1),
(9, 3, 'Xperia Z5', '', 'upload_image/product_image_0/SonyXperiaZ5__1__thumb.JPG', 'upload_image/product_image_1/sony_xperia_z5_green_thumb.jpg', '', '', '', 'White,Green', '30', '', 2900.00, 0.00, 0, '', '', 1),
(10, 2, 'Galaxy', '', 'upload_image/product_image_0/2015-05-18-2-samsung-2_thumb.jpg', '', '', '', '', 'Blue', '20', '', 1000.00, 0.00, 0, '', '', 1),
(11, 2, 'Galaxy Edge', '', 'upload_image/product_image_0/Galaxy7edge_White_R30_thumb.jpg', '', '', '', '', 'White', '20', '', 30.00, 0.00, 0, '', '', 1),
(12, 2, 'Galaxy Note 4', '', 'upload_image/product_image_0/galaxynote4-123_thumb.jpg', '', '', '', '', 'White', '5', '', 4000.00, 0.00, 0, '', '', 1),
(13, 2, 'Galaxy S6 Edge', '', 'upload_image/product_image_0/galaxy-s6-edge_gallery_front_black_thumb.png', '', '', '', '', 'Black', '30', '', 2000.00, 0.00, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(4) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `slide_id` int(2) NOT NULL,
  `slide_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`slide_id`, `slide_image`) VALUES
(1, 'upload_image/slide_image/bg1_thumb.jpg'),
(2, 'upload_image/slide_image/bg2_thumb.jpg'),
(3, 'upload_image/slide_image/bg3_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_newsletter_subscription`
--
ALTER TABLE `tbl_newsletter_subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_newsletter_subscription`
--
ALTER TABLE `tbl_newsletter_subscription`
  MODIFY `subscription_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `slide_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
