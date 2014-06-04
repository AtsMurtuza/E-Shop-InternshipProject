-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2014 at 07:29 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--
CREATE DATABASE IF NOT EXISTS `eshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eshop`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `parent_id` int(10) NOT NULL,
  `category_name` varchar(20) NOT NULL COMMENT 'Name of category',
  `category_description` text NOT NULL COMMENT 'Description of Category',
  `active_bool` tinyint(1) NOT NULL COMMENT 'Is it active or not ?',
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`),
  UNIQUE KEY `CategoryID` (`category_id`),
  KEY `category_id` (`category_id`),
  KEY `category_id_2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Table for categories of different products' AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `parent_id`, `category_name`, `category_description`, `active_bool`) VALUES
(0, 0, 'root', 'root', 1),
(2, 0, 'Electronics', 'Electronic Items', 1),
(3, 0, 'Clothes', 'Clothes', 1),
(4, 2, 'Mobiles', 'Mobile Phones', 1),
(5, 4, 'Mobile Cases', 'Mobile Case', 1),
(9, 5, 'Xcer', '', 1),
(10, 3, 'Linen', 'xyz', 1),
(11, 0, 'Shoes', 'Shoes And Shocks', 1),
(12, 2, 'Ear Phones', 'Ear Phone Mast ', 1),
(13, 10, 'T Shirts', 'Mast T Shirt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(20) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `email_id` text NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `reputation` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `user_id_2` (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderDetail_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `oder_number` bigint(20) NOT NULL,
  `price` double(12,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `discount` double(12,2) NOT NULL,
  `total` double(12,2) NOT NULL,
  `size` double(12,2) NOT NULL,
  `color` text NOT NULL,
  `size_unit` text NOT NULL,
  `ship_date` date NOT NULL,
  `order_id` int(10) NOT NULL,
  `bill_date` date NOT NULL,
  PRIMARY KEY (`orderDetail_id`),
  KEY `product_id` (`product_id`,`order_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oder_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `payment_id` int(10) NOT NULL,
  `oder_date` date NOT NULL,
  `shipper_id` int(10) NOT NULL,
  `tax_order` double(12,2) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transaction_status` text NOT NULL,
  `err_location` text NOT NULL,
  `err_msg` text NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`oder_id`),
  KEY `customer_id` (`customer_id`,`payment_id`,`shipper_id`),
  KEY `shipper_id` (`shipper_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `paymnet_type` text NOT NULL,
  `allowed` tinyint(1) NOT NULL,
  `amount_paid` double(12,2) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Product id ',
  `category_id` int(10) NOT NULL COMMENT 'Foreign key of category',
  `product_name` text NOT NULL COMMENT 'Name of Product',
  `product_description` text NOT NULL COMMENT 'Product Description',
  `supplier_id` int(10) NOT NULL COMMENT 'Id of supplier',
  `unit_price` double(10,2) NOT NULL COMMENT 'Unit price',
  `product_mrp` double(10,2) NOT NULL COMMENT 'Maximum Retail Price',
  `available_size` text NOT NULL COMMENT 'size of product',
  `available_color` text NOT NULL COMMENT 'Available Colors',
  `discount` double(10,2) NOT NULL COMMENT 'discount on product',
  `weight` double(10,2) NOT NULL COMMENT 'Weight of Product',
  `unit_in_stock` bigint(20) NOT NULL COMMENT 'unit in stock',
  `unit_on_order` bigint(20) DEFAULT NULL COMMENT 'Ordered Unit',
  `product_ranking` double(5,2) DEFAULT NULL COMMENT 'ranking',
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`,`supplier_id`,`unit_on_order`),
  KEY `supplier_id` (`supplier_id`),
  KEY `unit_on_order` (`unit_on_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_description`, `supplier_id`, `unit_price`, `product_mrp`, `available_size`, `available_color`, `discount`, `weight`, `unit_in_stock`, `unit_on_order`, `product_ranking`) VALUES
(16, 0, '2 States', 'askjdn', 0, 76.00, 76.00, '656', '76', 76.00, 76.00, 76, 0, 0.00),
(22, 0, '2 States', 'askjdn', 0, 76.00, 76.00, '656', '76', 76.00, 76.00, 76, 0, 0.00),
(23, 0, '2 States', 'askjdn', 0, 76.00, 76.00, '656', '76', 76.00, 76.00, 76, 0, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE IF NOT EXISTS `shipper` (
  `shipper_id` int(10) NOT NULL AUTO_INCREMENT,
  `shipper_name` varchar(15) NOT NULL,
  `company_name` text NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  PRIMARY KEY (`shipper_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` int(10) NOT NULL AUTO_INCREMENT,
  `shop_name` text NOT NULL,
  `shop_owner_name` text NOT NULL,
  `contact_title` varchar(5) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email_address` text NOT NULL,
  `supplier_url` text NOT NULL,
  `COD` tinyint(1) NOT NULL,
  `Net_Banking` tinyint(1) NOT NULL,
  `Cards` tinyint(1) NOT NULL,
  `discount_types` text NOT NULL,
  `logo_id` int(10) NOT NULL,
  `supplier_note` text NOT NULL,
  `supplier_ranking` double(7,2) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_shop`
--

CREATE TABLE IF NOT EXISTS `tb_shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` text NOT NULL,
  `shop_supplier_id` int(11) NOT NULL,
  `shop_activation_hash` text NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_shop`
--

INSERT INTO `tb_shop` (`shop_id`, `shop_name`, `shop_supplier_id`, `shop_activation_hash`) VALUES
(8, 'Abbasi Grain Stores', 5, '3a1dd75fb59a98ef916ddac2d9d05888'),
(14, 'Hamza''s Tool', 8, '7f01666fd5512e0c2947df6516f33985'),
(15, 'Lucky Tea Stall', 9, '0eb9c0823af7ac258a81d53a0efc16ee'),
(16, 'Aabid Carrom Shop', 10, '6c95b5df511c42cb790f237d64562727'),
(17, 'Abhisex Condom Shop', 11, 'b37a504aad5b166b7beda283a5397d38'),
(18, 'Chikki Stores', 12, '82613cc64ef436dc10accb742fa8f516'),
(19, 'local', 13, 'efaf39ca99d9c271263f76e734108a90'),
(20, 'Mutton Shop', 14, '60b4e55fc106fff66d09caa6fd72f3db');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE IF NOT EXISTS `tb_supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` text NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`supplier_id`, `supplier_name`) VALUES
(5, 'Murtuza Sugarwala'),
(8, 'Hamza Dairywala'),
(9, 'Moiz Shaikh'),
(10, 'Aabid Khan'),
(11, 'Abhisex'),
(12, 'Abhishek Sharma'),
(13, 'Trial'),
(14, 'Moiz Kasai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL,
  `user_password_hash` varchar(255) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_active` tinyint(1) DEFAULT NULL,
  `user_activation_hash` varchar(40) NOT NULL,
  `user_password_reset_hash` varchar(40) NOT NULL,
  `user_password_reset_timestamp` bigint(20) NOT NULL,
  `user_failed_logins` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_failed_logins`) VALUES
(5, '', 'fe469bd7fff2ef510825906ecb936821', 'murtuza05@gmail.com', NULL, '3a1dd75fb59a98ef916ddac2d9d05888', '', 0, NULL),
(8, '', '92c7ae01ca8f5dccd5d8d15ea738cb96', 'hamza.dairywala@gmail.com', NULL, '7f01666fd5512e0c2947df6516f33985', '', 0, NULL),
(9, '', 'be2044ea493da4cfbd074d5e87a84131', 'moiz.shaikh@facebook.com', NULL, '0eb9c0823af7ac258a81d53a0efc16ee', '', 0, NULL),
(10, '', 'c6e453a2b40d64965f9fde57aae11c67', 'pathan.aabid@yahoo.in', NULL, '6c95b5df511c42cb790f237d64562727', '', 0, NULL),
(11, '', '47c6cb15a6565212cdaea22c12017304', 'abhisheksharma@gmail.com', NULL, 'b37a504aad5b166b7beda283a5397d38', '', 0, NULL),
(12, '', '2b863679bf9ed509e82b8f4416cac320', 'sharmaabhisex@gmail.com', NULL, '82613cc64ef436dc10accb742fa8f516', '', 0, NULL),
(13, '', 'trialkaro', 'trial@gmail.com', NULL, 'efaf39ca99d9c271263f76e734108a90', '', 0, NULL),
(14, '', '7fab6a881a1a3b9209735efc3f783365', 'muttontikka@gmail.com', NULL, '60b4e55fc106fff66d09caa6fd72f3db', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `user_rememberme_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
  `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attemps',
  `user_last_failed_login` int(10) DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
  `user_registration_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_registration_ip` varchar(39) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.0.0.0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_rememberme_token`, `user_failed_logins`, `user_last_failed_login`, `user_registration_datetime`, `user_registration_ip`) VALUES
(12, 'maulik', '$2y$10$qNeeA40X5ckY8te6BfKCu.Dmxm3.aUIpKJTN9FvsBXk8TEz/pQAoq', 'maulikkotadia@gmail.com', 0, NULL, NULL, NULL, NULL, 0, NULL, '2014-02-11 01:59:13', '::1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`oder_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shipper_id`) REFERENCES `shipper` (`shipper_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `product` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
