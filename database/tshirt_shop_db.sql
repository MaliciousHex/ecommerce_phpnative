-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2015 at 06:00 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tshirt_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_brand`
--

CREATE TABLE IF NOT EXISTS `ms_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(256) NOT NULL,
  `brand_description` text NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ms_brand`
--

INSERT INTO `ms_brand` (`brand_id`, `brand_name`, `brand_description`, `create_date`) VALUES
(1, 'NEVADA', 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2014-06-29 00:00:00'),
(2, '16DS', 'Lorem ipsum dolor sit amet conse ctetur adipisicin', '2014-06-29 00:00:00'),
(3, 'AWESOME', 'Lorem ipsum dolor sit amet conse ctetur adipisicin', '2014-06-29 00:00:00'),
(4, 'ASYLUM', 'Lorem ipsum dolor sit amet conse ctetur adipisicin', '2014-06-29 00:00:00'),
(5, 'OCEAN', 'Lorem ipsum dolor sit amet conse ctetur adipisicin', '2014-06-29 00:00:00'),
(6, 'WATCHOUT', 'Lorem ipsum dolor sit amet conse ctetur adipisicin', '2014-06-29 00:00:00'),
(7, 'SALT AND PEPPER', '', '2014-07-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ms_customer`
--

CREATE TABLE IF NOT EXISTS `ms_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(256) NOT NULL,
  `customer_email` varchar(256) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_username` varchar(256) NOT NULL,
  `customer_password` varchar(256) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ms_customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `ms_size`
--

CREATE TABLE IF NOT EXISTS `ms_size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(256) NOT NULL,
  `size_description` text NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ms_size`
--


-- --------------------------------------------------------

--
-- Table structure for table `ms_tshirt`
--

CREATE TABLE IF NOT EXISTS `ms_tshirt` (
  `tshirt_id` int(11) NOT NULL AUTO_INCREMENT,
  `tshirt_name` varchar(250) NOT NULL,
  `tshirt_image` varchar(256) NOT NULL,
  `tshirt_price` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `best_seller` tinyint(4) NOT NULL,
  `featured` tinyint(11) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`tshirt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `ms_tshirt`
--

INSERT INTO `ms_tshirt` (`tshirt_id`, `tshirt_name`, `tshirt_image`, `tshirt_price`, `brand_id`, `best_seller`, `featured`, `create_date`) VALUES
(1, 'NEVADA X001', 'nevada-product-1.jpg', 98000, 1, 0, 0, '2014-06-29 00:00:00'),
(2, 'NEVADA X002', 'nevada-product-2.jpg', 90000, 1, 0, 0, '2014-06-29 00:00:00'),
(3, 'NEVADA X003', 'nevada-product-3.jpg', 100000, 1, 0, 0, '2014-06-29 00:00:00'),
(4, 'NEVADA X004', 'nevada-product-4.jpg', 78000, 1, 0, 0, '2014-06-29 00:00:00'),
(5, 'NEVADA X005', 'nevada-product-5.jpg', 87000, 1, 1, 0, '2014-06-29 00:00:00'),
(6, 'NEVADA X006', 'nevada-product-6.jpg', 88000, 1, 1, 0, '2014-06-29 00:00:00'),
(7, 'NEVADA X007', 'nevada-product-7.jpg', 89000, 1, 0, 1, '2014-06-29 00:00:00'),
(8, 'NEVADA X008', 'nevada-product-8.jpg', 88000, 1, 0, 1, '2014-06-29 00:00:00'),
(9, 'NEVADA X009', 'nevada-product-9.jpg', 69000, 1, 0, 1, '2014-06-29 00:00:00'),
(10, 'NEVADA X010', 'nevada-product-10.jpg', 99000, 1, 0, 1, '2014-06-29 00:00:00'),
(11, 'NEVADA X011', 'nevada-product-11.jpg', 99000, 1, 0, 1, '2014-06-29 00:00:00'),
(12, 'NEVADA X012', 'nevada-product-12.jpg', 89000, 1, 0, 1, '2014-06-29 00:00:00'),
(13, '16DS 2355', '16ds-2355-495242-1-zoom.jpg', 149000, 2, 0, 1, '2014-06-29 00:00:00'),
(14, '16DS 2607', '16ds-2607-395242-1-zoom.jpg', 129000, 2, 0, 1, '2014-06-29 00:00:00'),
(15, '16DS 5217', '16ds-5217-272841-1-zoom.jpg', 119000, 2, 0, 1, '2014-06-29 00:00:00'),
(16, '16DS 9005', '16ds-9005-875242-1-zoom.jpg', 149000, 2, 0, 0, '2014-06-29 00:00:00'),
(17, 'ASYLUM 6466', 'asylum-6466-254331-1-zoom.jpg', 199000, 4, 0, 0, '2014-06-29 00:00:00'),
(18, 'ASYLUM 6566', 'asylum-6556-654331-1-zoom.jpg', 209000, 4, 0, 0, '2014-06-29 00:00:00'),
(19, 'ASYLUM 6565', 'asylum-6565-554331-1-zoom.jpg', 169000, 4, 0, 0, '2014-06-29 00:00:00'),
(20, 'ASYLUM 6576', 'asylum-6576-454331-1-zoom.jpg', 179000, 4, 0, 0, '2014-06-29 00:00:00'),
(21, 'ASYLUM 6608', 'asylum-6608-944331-1-zoom.jpg', 159000, 4, 0, 0, '2014-06-29 00:00:00'),
(22, 'AWE 1675 ', 'awesome-1675-819921-1-zoom.jpg', 177000, 3, 0, 0, '2014-06-29 00:00:00'),
(23, 'AWE 1719', 'awesome-1719-074331-1-zoom.jpg', 168000, 3, 0, 0, '2014-06-29 00:00:00'),
(24, 'AWE 9964', 'awesome-9964-622051-1-zoom.jpg', 187000, 3, 0, 0, '2014-06-29 00:00:00'),
(25, 'OCEAN PACIFIC 2044', 'ocean-pacific-2044-500542-1-zoom.jpg', 229000, 5, 0, 0, '2014-06-29 00:00:00'),
(26, 'OCEAN PACIFIC 5840', 'ocean-pacific-5840-506541-1-zoom.jpg', 219000, 5, 0, 0, '2014-06-29 00:00:00'),
(27, 'WATCHOUT JEANS 3256', 'watchout-jeans-3256-476204-1-zoom.jpg', 239000, 6, 0, 0, '2014-06-29 00:00:00'),
(28, 'WATCHOUT JEANS 7490', 'watchout-jeans-7490-429011-1-zoom.jpg', 249000, 6, 0, 0, '2014-06-29 00:00:00'),
(29, 'WATCHOUT JEANS 8856', 'watchout-jeans-8856-756021-1-zoom.jpg', 213000, 6, 0, 0, '2014-06-29 00:00:00'),
(30, 'SALT P0072', 'salt-n-pepper-0072-390701-1.jpg', 190000, 7, 0, 0, '2014-07-05 00:00:00'),
(31, 'SALT P0532', 'salt-n-pepper-0532-477611-1.jpg', 200000, 7, 0, 0, '2014-07-05 00:00:00'),
(32, 'SALT P2339', 'salt-n-pepper-2339-332621-1.jpg', 167000, 7, 0, 0, '2014-07-05 00:00:00'),
(33, 'SALT P3621', 'salt-n-pepper-3621-028642-1', 134000, 7, 0, 0, '2014-07-05 00:00:00'),
(34, 'SALT P3646', 'salt-n-pepper-3646-918642-1.jpg', 135000, 7, 0, 0, '2014-07-05 00:00:00'),
(35, 'SALT P3717', 'salt-n-pepper-3717-304421-1.jpg', 187000, 7, 0, 0, '2014-07-05 00:00:00'),
(36, 'SALT P3720', 'salt-n-pepper-3720-312051-1.jpg', 154000, 7, 0, 0, '2014-07-05 00:00:00'),
(37, 'SALT P5524', 'salt-n-pepper-5524-864011-1.jpg', 165000, 7, 0, 0, '2014-07-05 00:00:00'),
(38, 'SALT P6261', 'salt-n-pepper-6261-612621-1.jpg', 190000, 7, 0, 0, '2014-07-05 00:00:00'),
(39, 'SALT P8889', 'salt-n-pepper-8889-648441-1.jpg', 178000, 7, 0, 0, '2014-07-05 00:00:00'),
(40, 'SALT P9782', 'salt-n-pepper-9782-211841-1.jpg', 156000, 7, 0, 0, '2014-07-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ms_tshirt_size`
--

CREATE TABLE IF NOT EXISTS `ms_tshirt_size` (
  `tshirt_size_id` int(11) NOT NULL AUTO_INCREMENT,
  `tshirt_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`tshirt_size_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ms_tshirt_size`
--


-- --------------------------------------------------------

--
-- Table structure for table `tr_order`
--

CREATE TABLE IF NOT EXISTS `tr_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total_price` int(10) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tr_order`
--


-- --------------------------------------------------------

--
-- Table structure for table `tr_order_detail`
--

CREATE TABLE IF NOT EXISTS `tr_order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `shoes_id` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tr_order_detail`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `tr_order_detail`
--
ALTER TABLE `tr_order_detail`
  ADD CONSTRAINT `tr_order_detail_ibfk_1` FOREIGN KEY (`order_detail_id`) REFERENCES `tr_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
