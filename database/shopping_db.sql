-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql209.epizy.com
-- Generation Time: Apr 01, 2022 at 09:54 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30882546_shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `com_logo` varchar(100) DEFAULT NULL,
  `com_name` varchar(100) NOT NULL,
  `com_email` varchar(60) NOT NULL,
  `com_phone` varchar(15) DEFAULT NULL,
  `com_address` varchar(255) DEFAULT NULL,
  `cur_format` varchar(10) NOT NULL,
  `admin_role` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`, `com_logo`, `com_name`, `com_email`, `com_phone`, `com_address`, `cur_format`, `admin_role`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'Inventory', 'inventory@gmail.com', NULL, NULL, '$', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `products` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `products`) VALUES
(9, 'Black Coffee', 0),
(10, 'Brewed Coffee', 0),
(13, 'Cappucino', 0),
(15, 'Latte Coffee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `monumber` varchar(10) NOT NULL,
  `userdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `monumber`, `userdate`) VALUES
(175, 'Abc', 'abc@gmail.com', '978464548', '2022-02-08 20:23:42'),
(176, 'sanket', 'abc@gmail.com', '4522223897', '2022-02-22 10:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `s_no` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_title` varchar(100) DEFAULT NULL,
  `site_logo` varchar(100) NOT NULL,
  `site_desc` varchar(255) DEFAULT NULL,
  `footer_text` varchar(100) NOT NULL,
  `currency_format` varchar(20) NOT NULL,
  `contact_phone` varchar(15) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`s_no`, `site_name`, `site_title`, `site_logo`, `site_desc`, `footer_text`, `currency_format`, `contact_phone`, `contact_email`, `contact_address`) VALUES
(1, 'Indian Coffee Bazaar', 'Indian Coffee Bazaar', 'logo.png', 'With it being February and still too cold to do any exploring outside, for this bit of description practice, I decided to visit a new, interesting indoor place. One where I could still find a lot to describe without having to freeze my butt off in the pro', 'Created By Sanket Prajapati | All Rights Reserved', 'Rs.', '9904491017', 'indiancoffee@gmail.com', '#123, Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_qty` varchar(100) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `product_user` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `pay_req_id` varchar(100) DEFAULT NULL,
  `confirm` tinyint(4) NOT NULL DEFAULT 0,
  `delivery` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`order_id`, `product_id`, `product_qty`, `total_amount`, `product_user`, `order_date`, `pay_req_id`, `confirm`, `delivery`) VALUES
(87, '7,', '1,', '40', 2, '2022-02-10 21:26:56', '28957926ec5f4ecf944874105a3637b4', 0, 0),
(86, '7,', '3,', '120', 2, '2022-02-10 21:21:05', '5d5a96bfe8bc44019edd09e0a5b646c6', 0, 0),
(88, '4,', '1,', '40', 2, '2022-02-12 18:49:00', '5e9d762611eb4bfda9d2eae7610b394f', 0, 0),
(89, '4,', '3,', '120', 2, '2022-02-12 18:50:10', '338e3851967e4fad96c377bbb3cca509', 0, 0),
(90, '4,17,', '1,1,', '100', 2, '2022-02-13 21:57:34', 'b4c2af634cd64365853836fd1d92bf8c', 0, 0),
(91, '4,17,', '1,2,', '160', 2, '2022-02-13 22:02:25', '9c79ff37f92d4720b2c559bfedf76bec', 0, 0),
(92, '4,17,', '1,1,', '100', 2, '2022-02-13 22:10:23', '323482a84dd9427180d706a91633edc7', 0, 0),
(93, '7,', '1,', '40', 2, '2022-02-14 11:40:07', 'f22f223d86df47a3b46ea48b7417191d', 0, 0),
(94, '4,', '1,', '40', 2, '2022-02-14 11:58:10', '6a1a90f82cac45429763a5f7ee31313c', 0, 0),
(95, '17,', '3,', '180', 2, '2022-02-15 08:53:14', '22ed5dcc321c4d519e330e4aef2ce464', 0, 0),
(96, '4,17,', '1,1,', '100', 22, '2022-02-19 17:37:37', '86ad1bd01b2d4fa3987289ad7efd37b1', 0, 0),
(97, '3,', '1,', '30', 2, '2022-02-21 12:25:32', '753f6f7d8ca14c528e7c174d5c5a2206', 0, 0),
(98, '4,', '1,', '40', 25, '2022-02-21 18:09:31', '2dde60858a2a4517ae69956667ca4614', 0, 0),
(99, '7,', '1,', '40', 2, '2022-02-22 10:25:33', '979683942af04bfabfc1f8f838d6e490', 0, 0),
(100, '7,', '1,', '40', 2, '2022-02-22 10:29:26', '4ae2d16b9a674b108daa03b110009f1d', 0, 0),
(101, '7,8,', '5,1,', '250', 2, '2022-02-22 11:08:45', 'cfee050984284a19914ce872d58d00f9', 0, 1),
(102, '3,', '1,', '30', 2, '2022-02-25 10:59:14', 'c31cc625868b4892a6a3db38711c2100', 0, 0),
(103, '17,', '1,', '60', 2, '2022-02-26 08:35:16', 'f9f04d111e174ee48c55df27821cbff9', 0, 1),
(104, '4,7,', '5,1,', '240', 2, '2022-03-01 20:55:24', '62b3c37bee4640bd81fa33df4391869d', 0, 0),
(105, '4,', '1,', '40', 25, '2022-03-03 10:04:57', '2cd12958ef79408d86104663e207dd6c', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_sub_cat` int(11) NOT NULL,
  `product_brand` int(100) DEFAULT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `featured_image` text NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `product_keywords` text DEFAULT NULL,
  `product_views` int(11) DEFAULT 0,
  `product_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `product_cat`, `product_sub_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `featured_image`, `qty`, `product_keywords`, `product_views`, `product_status`) VALUES
(2, '5fc500f4330ad', 9, 18, 10, 'Tasty And Healthy', '25', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu-1.png', 10, NULL, 3, 1),
(3, '5fc500ec98a64', 9, 18, 13, 'Iced Coffee', '100', 'Weï¿½re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. Itï¿½s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. Itï¿½s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu-2.png', 50, NULL, 74, 1),
(4, '5fc500e4de9c2', 9, 19, 12, 'Brewed Coffee', '40', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu-3.png', 5, NULL, 35, 1),
(5, '5fc500decacd2', 9, 19, 12, 'Almond Milk', '25', 'Weï¿½re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. Itï¿½s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. Itï¿½s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu-4.png', 10, NULL, 2, 1),
(6, '5fc500d9502a7', 12, 25, 12, 'Black Coffee', '35', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu7.png', 7, NULL, 1, 1),
(7, '5fc500d3ae088', 12, 25, 12, 'Nitro Cold Coffee', '40', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu8.png', -21, NULL, 14, 1),
(8, '5fc500cd9a2c4', 12, 24, 15, 'Cappucino', '50', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu9.png', 8, NULL, 4, 1),
(14, '5fc500cd9a2c6', 12, 24, 14, 'Americano Coffee', '45', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu10.png', 10, NULL, 2, 1),
(15, '5fc500cd9a2c8', 12, 24, 20, 'Expresso Coffee', '60', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu11.png', 5, NULL, 2, 1),
(16, '5fc500cd9a2c7', 12, 24, 12, 'Latte Coffee', '50', 'We’re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. It’s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. It’s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu12.png', 9, NULL, 2, 1),
(17, '5fc500decacd3', 9, 19, 12, 'Mocha Coffee', '1000', 'Weï¿½re starting the delicious coffee recipe train strong with this recipe for vanilla-almond coffee. Itï¿½s as simple as adding some vanilla and almond extract, which add no calories, no sugar, and no fat, all while providing some warm and delicious flavors to your coffee. Itï¿½s the perfect coffee drink to enjoy early in the morning, and it will wake your senses up from the first sip', 'menu13.png', 30, NULL, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `s_no` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `user_role` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `username`, `email`, `password`, `mobile`, `address`, `city`, `user_role`) VALUES
(2, 'User1', 'user', 'user@gmail.com', '', '24c9e15e52afc47c225b757e7bee1f9d', '9856231042', '#1234', 'abc', 1),
(26, 'MSU', 'bye', 'msu1@gmail.com', NULL, 'f5ca2d0fea818f7c46b004aa04214791', '9912456768', 'PANDYA BRIDGE', 'vadodara', 1),
(23, 'Arjun', 'Prajapati', 'xyz@gmail.com', NULL, 'd16fb36f0911f878998c136191af705e', '162847291619', 'Abc', 'Vadodara', 1),
(25, 'prem', 'singh', 'prem@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', '9875468956', 'c-2345', 'vadodara', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
