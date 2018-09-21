-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 10:02 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vastramela`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `tbl_about_us_id` int(111) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`tbl_about_us_id`, `title`, `sub_title`, `img`, `description`, `c_date`, `m_date`, `status`) VALUES
(1, 'ABOUT SHOP', '', 'about-banner.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod interdum lorem vitae dapibus. Aliquam             ut nibh ac dui gravida molestie non ut lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus.             Etiam nec quam venenatis nisl scelerisque faucibus. Duis luctus in velit at tincidunt. Mauris a nulla lacus.             In auctor, massa eu vestibulum efficitur, mi nisi bibendum enim, vel dictum elit quam eu magna.', '2016-06-15 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'vastra mela', 'we gave best product in best prise  thanks for visit site', 'about-post-1.jpg', '', '2016-06-15 00:00:00', '2016-06-22 18:12:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addpro_img`
--

CREATE TABLE `tbl_addpro_img` (
  `tbl_addpro_img_id` int(111) NOT NULL,
  `tbl_product_id` int(111) NOT NULL,
  `img` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `is_csv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addpro_img`
--

INSERT INTO `tbl_addpro_img` (`tbl_addpro_img_id`, `tbl_product_id`, `img`, `c_date`, `status`, `is_csv`) VALUES
(1, 12, 'Screen Shot 2016-05-23 at 10.18.49 PM.png', '0000-00-00 00:00:00', 0, 0),
(2, 79, 'd.jpg', '0000-00-00 00:00:00', 0, 0),
(3, 79, 'ggggggggggg.jpg', '0000-00-00 00:00:00', 0, 0),
(4, 79, 'jh.jpg', '0000-00-00 00:00:00', 0, 0),
(5, 80, 'IMG-20160623-WA0018.jpg', '0000-00-00 00:00:00', 0, 0),
(6, 80, 'IMG-20160623-WA0016.jpg', '0000-00-00 00:00:00', 0, 0),
(7, 18, 'Screen Shot 2016-01-18 at 10.14.11 pm.png', '0000-00-00 00:00:00', 0, 0),
(8, 18, 'Screen Shot 2016-01-19 at 12.38.30 am.png', '0000-00-00 00:00:00', 0, 0),
(9, 18, 'Screen Shot 2016-01-21 at 2.40.20 pm.png', '0000-00-00 00:00:00', 0, 0),
(10, 97, '399.jpg', '0000-00-00 00:00:00', 0, 0),
(11, 97, '399.jpg', '0000-00-00 00:00:00', 0, 0),
(12, 28, '(R)1436 (124).jpg', '0000-00-00 00:00:00', 0, 0),
(13, 121, 'https://www.dropbox.com/s/p88wcie50dbpbx3/2.jpg?dl=0', '2016-06-28 12:58:05', 0, 1),
(14, 121, 'https://www.dropbox.com/s/lk8h7275mjf8se4/3.jpg?dl=0', '2016-06-28 12:58:05', 0, 1),
(15, 121, 'https://www.dropbox.com/s/rxjuk5swkguufd9/4.jpg?dl=0', '2016-06-28 12:58:05', 0, 1),
(16, 126, 'https://photos-4.dropbox.com/t/2/AABqfZ6DxUzxwjOMStCh-fNAY8FW4yAERkAwxxDFFi2CAQ/12/578595631/jpeg/32x32/1/_/1/2/4.jpg/EM-Iu9MEGCYgAigC/yAFyyewEVMACGNDBx0frpvPApvw2dU6ydNoaTzYWgaM?size=1280x960&size_mode=3', '2016-06-28 13:30:39', 0, 1),
(17, 126, 'https://photos-2.dropbox.com/t/2/AAB6qQilDF_bGDx7igIBqJR_1UjrpvaUqmtN1DSpm_wRJA/12/578595631/jpeg/32x32/1/_/1/2/5.jpg/EM-Iu9MEGCcgAigC/5lVfYenApmAFjjjcy4QYbmd565DYC60oRZjIZ2HCzLQ?size=1280x960&size_mode=3', '2016-06-28 13:30:39', 0, 1),
(18, 126, 'https://photos-2.dropbox.com/t/2/AAAvACyUiSh3DmJUyLnX_AiFa95RmBi9ov7QZ99_7ue5bw/12/578595631/jpeg/32x32/1/_/1/2/8.jpg/EM-Iu9MEGCogAigC/fvPnaK7UXS4dQG8Yddji7WBRuY-ganEXDS2tjSwU7EY?size=1280x960&size_mode=3', '2016-06-28 13:30:39', 0, 1),
(19, 126, 'https://photos-5.dropbox.com/t/2/AAAfewD0BksKWvdWeYpHlyjCP5TFRaN7KiDCdyJaVc2CRg/12/578595631/jpeg/32x32/1/_/1/2/9.jpg/EM-Iu9MEGCsgAigC/pLsZ1OxueyviJl8Ab1ogdPS5hZHf5Lkw9iRUqKoBFeY?size=1280x960&size_mode=3', '2016-06-28 13:30:39', 0, 1),
(20, 126, 'https://photos-6.dropbox.com/t/2/AAAJUsmzI8hR9P9iyFFid-5V8nerlalvBrAmslivcGI77A/12/578595631/jpeg/32x32/1/_/1/2/10.jpg/EM-Iu9MEGCwgAigC/MuLj06NzDkPQRopb-Te6ZJDXL7kS89TQxd3nLQHKW8k?size=1280x960&size_mode=3', '2016-06-28 13:30:39', 0, 1),
(21, 126, 'https://photos-4.dropbox.com/t/2/AABR0nIhXGMdc3xwTFV9qIHcRdsHon3eKpwDIuG9Q3Fhkw/12/578595631/jpeg/32x32/1/_/1/2/12.jpg/EM-Iu9MEGC4gAigC/8sPhMAcRcT7CUMjO2atn1ct4oZL4v9zwdCQ1JoHIYUI?size=1280x960&size_mode=3', '2016-06-28 13:30:39', 0, 1),
(22, 0, 'http://pimg.tradeindia.com/01131830/b/1/sequin-beaded-sarees.jpg', '2016-07-26 06:41:20', 0, 1),
(23, 22, 'http://pimg.tradeindia.com/01131830/b/1/sequin-beaded-sarees.jpg', '2016-07-26 06:41:20', 0, 1),
(24, 23, 'http://pimg.tradeindia.com/01131830/b/1/sequin-beaded-sarees.jpg', '2016-07-26 06:41:20', 0, 1),
(25, 160, 'http://pimg.tradeindia.com/01131830/b/1/sequin-beaded-sarees.jpg', '2016-07-26 10:10:13', 0, 1),
(26, 161, 'http://pimg.tradeindia.com/01131830/b/1/sequin-beaded-sarees.jpg', '2016-07-26 10:10:13', 0, 1),
(27, 162, 'http://pimg.tradeindia.com/01131830/b/1/sequin-beaded-sarees.jpg', '2016-07-26 10:10:13', 0, 1),
(28, 160, '82b05ca9-7fb3-49ce-98db-56c7c489199c.jpg', '0000-00-00 00:00:00', 0, 0),
(29, 160, 'sdf.jpg', '0000-00-00 00:00:00', 0, 0),
(30, 164, 'ag___my_logo_by_agoblin4-d4ly8k4.png', '0000-00-00 00:00:00', 0, 0),
(31, 164, 'icon.png', '0000-00-00 00:00:00', 0, 0),
(32, 170, 'GIRL.png', '0000-00-00 00:00:00', 0, 0),
(33, 170, 'login_shop.png', '0000-00-00 00:00:00', 0, 0),
(34, 170, 'GIRL1.png', '0000-00-00 00:00:00', 0, 0),
(35, 170, 'p10.jpg', '0000-00-00 00:00:00', 0, 0),
(36, 168, '25.jpg (3).png', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addpro_type`
--

CREATE TABLE `tbl_addpro_type` (
  `tbl_addpro_type_id` int(111) NOT NULL,
  `tbl_product_id` int(111) NOT NULL,
  `tbl_type_id` int(111) NOT NULL,
  `c_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addpro_type`
--

INSERT INTO `tbl_addpro_type` (`tbl_addpro_type_id`, `tbl_product_id`, `tbl_type_id`, `c_date`, `status`) VALUES
(19, 12, 28, '0000-00-00 00:00:00', 0),
(20, 18, 14, '0000-00-00 00:00:00', 0),
(21, 18, 18, '0000-00-00 00:00:00', 0),
(22, 18, 27, '0000-00-00 00:00:00', 0),
(23, 19, 27, '0000-00-00 00:00:00', 0),
(24, 22, 7, '0000-00-00 00:00:00', 0),
(25, 22, 11, '0000-00-00 00:00:00', 0),
(26, 22, 14, '0000-00-00 00:00:00', 0),
(27, 22, 21, '0000-00-00 00:00:00', 0),
(28, 22, 22, '0000-00-00 00:00:00', 0),
(29, 22, 27, '0000-00-00 00:00:00', 0),
(30, 22, 5, '0000-00-00 00:00:00', 0),
(31, 22, 6, '0000-00-00 00:00:00', 0),
(32, 26, 14, '0000-00-00 00:00:00', 0),
(33, 25, 7, '0000-00-00 00:00:00', 0),
(34, 25, 14, '0000-00-00 00:00:00', 0),
(35, 81, 14, '0000-00-00 00:00:00', 0),
(36, 81, 21, '0000-00-00 00:00:00', 0),
(37, 81, 22, '0000-00-00 00:00:00', 0),
(38, 81, 25, '0000-00-00 00:00:00', 0),
(39, 81, 27, '0000-00-00 00:00:00', 0),
(40, 95, 14, '0000-00-00 00:00:00', 0),
(41, 96, 22, '0000-00-00 00:00:00', 0),
(42, 96, 27, '0000-00-00 00:00:00', 0),
(43, 97, 22, '0000-00-00 00:00:00', 0),
(44, 97, 27, '0000-00-00 00:00:00', 0),
(45, 98, 27, '0000-00-00 00:00:00', 0),
(46, 99, 23, '0000-00-00 00:00:00', 0),
(47, 99, 24, '0000-00-00 00:00:00', 0),
(48, 99, 27, '0000-00-00 00:00:00', 0),
(49, 127, 14, '0000-00-00 00:00:00', 0),
(50, 127, 18, '0000-00-00 00:00:00', 0),
(51, 127, 27, '0000-00-00 00:00:00', 0),
(52, 128, 14, '0000-00-00 00:00:00', 0),
(53, 128, 27, '0000-00-00 00:00:00', 0),
(54, 160, 14, '0000-00-00 00:00:00', 0),
(55, 160, 22, '0000-00-00 00:00:00', 0),
(56, 160, 3, '0000-00-00 00:00:00', 0),
(57, 160, 4, '0000-00-00 00:00:00', 0),
(58, 160, 5, '0000-00-00 00:00:00', 0),
(59, 160, 6, '0000-00-00 00:00:00', 0),
(60, 160, 29, '0000-00-00 00:00:00', 0),
(62, 140, 18, '0000-00-00 00:00:00', 0),
(63, 131, 7, '0000-00-00 00:00:00', 0),
(64, 162, 8, '0000-00-00 00:00:00', 0),
(65, 162, 14, '0000-00-00 00:00:00', 0),
(66, 162, 16, '0000-00-00 00:00:00', 0),
(67, 162, 23, '0000-00-00 00:00:00', 0),
(68, 162, 4, '0000-00-00 00:00:00', 0),
(69, 164, 8, '0000-00-00 00:00:00', 0),
(70, 164, 14, '0000-00-00 00:00:00', 0),
(71, 164, 23, '0000-00-00 00:00:00', 0),
(72, 164, 4, '0000-00-00 00:00:00', 0),
(73, 166, 27, '0000-00-00 00:00:00', 0),
(74, 168, 7, '0000-00-00 00:00:00', 0),
(75, 168, 15, '0000-00-00 00:00:00', 0),
(76, 168, 23, '0000-00-00 00:00:00', 0),
(77, 168, 5, '0000-00-00 00:00:00', 0),
(78, 169, 7, '0000-00-00 00:00:00', 0),
(79, 169, 15, '0000-00-00 00:00:00', 0),
(80, 169, 22, '0000-00-00 00:00:00', 0),
(81, 169, 4, '0000-00-00 00:00:00', 0),
(82, 170, 7, '0000-00-00 00:00:00', 0),
(83, 170, 14, '0000-00-00 00:00:00', 0),
(84, 170, 22, '0000-00-00 00:00:00', 0),
(85, 170, 4, '0000-00-00 00:00:00', 0),
(86, 168, 7, '0000-00-00 00:00:00', 0),
(87, 168, 8, '0000-00-00 00:00:00', 0),
(88, 168, 9, '0000-00-00 00:00:00', 0),
(89, 168, 16, '0000-00-00 00:00:00', 0),
(90, 168, 19, '0000-00-00 00:00:00', 0),
(91, 168, 21, '0000-00-00 00:00:00', 0),
(92, 168, 22, '0000-00-00 00:00:00', 0),
(93, 168, 23, '0000-00-00 00:00:00', 0),
(94, 168, 24, '0000-00-00 00:00:00', 0),
(95, 168, 25, '0000-00-00 00:00:00', 0),
(96, 168, 26, '0000-00-00 00:00:00', 0),
(97, 168, 27, '0000-00-00 00:00:00', 0),
(98, 168, 28, '0000-00-00 00:00:00', 0),
(99, 168, 3, '0000-00-00 00:00:00', 0),
(100, 168, 29, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `tbl_admin_id` int(111) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`tbl_admin_id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `tbl_banner_id` int(111) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`tbl_banner_id`, `img`, `title`, `c_date`, `m_date`, `status`) VALUES
(17, 'v3.jpg', 'test', '2016-09-16 18:51:30', '0000-00-00 00:00:00', 0),
(18, 'v1.jpg', 'banner2', '2016-09-16 18:51:45', '0000-00-00 00:00:00', 0),
(19, 'v2.jpg', 'banner 3', '2016-09-16 18:51:54', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_adv`
--

CREATE TABLE `tbl_banner_adv` (
  `tbl_banner_adv_id` int(111) NOT NULL,
  `tbl_banner_id` int(111) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `tbl_blog_id` int(111) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `by` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `tbl_config_id` int(111) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `tbl_contact_id` int(111) NOT NULL,
  `title` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mlink` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`tbl_contact_id`, `title`, `address`, `mobile`, `email`, `mlink`, `c_date`, `m_date`, `status`) VALUES
(1, 'vastra mela', 'Surat , Gujarat.', '7874159006', 'vipul.onus@gmail.com', 'https://www.google.co.in/maps/@21.1868471,72.8380677,21z', '2016-06-28 10:26:02', '2016-08-30 16:26:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `tbl_customer_id` int(111) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `token` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`tbl_customer_id`, `f_name`, `l_name`, `email`, `pass`, `phno`, `token`, `c_date`, `m_date`, `status`) VALUES
(3, 'dax', NULL, 'vipul.onus@gmail.com', '123456', '45654', '', '2016-06-22 10:28:55', NULL, 1),
(5, '', NULL, 'vipul.onus@gmail.com', '123', '9558181686', '', '2016-08-16 11:09:32', NULL, 1),
(14, '', NULL, 'vipul.onus@gmail.com', '123456789', '7986541256', '6PFzCzw', '2016-09-20 11:01:25', NULL, 1),
(15, '', NULL, 'vipul.onus@gmail.com', '9824157780', '8306967699', 'BFJhvwA', '2016-10-04 14:32:47', NULL, 1),
(16, '', NULL, 'vipul.onus@gmail.com', 'biN3ei26hL', '123456', 'EEwztkX', '2016-10-04 23:26:59', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_address`
--

CREATE TABLE `tbl_customer_address` (
  `tbl_customer_address_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `tbl_customer_id` int(11) NOT NULL,
  `cdate` datetime NOT NULL,
  `mdate` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `is_default` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer_address`
--

INSERT INTO `tbl_customer_address` (`tbl_customer_address_id`, `name`, `address`, `landmark`, `city`, `state`, `country`, `pincode`, `phone_no`, `tbl_customer_id`, `cdate`, `mdate`, `status`, `is_delete`, `is_default`) VALUES
(1, 'pratik lochawala', 'c-13 sai mohan row house', '', 'surat', 'gujarat', '', '395002', '7698469126', 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 1),
(2, 'hello', 'hello', '', 'hello', 'hello', '', '395002', '7383543210', 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0),
(3, 'test', 'test more', '', 'surat', 'bdsfg', '', '394101', '7874174111', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `tbl_feedback` int(111) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`tbl_feedback`, `name`, `email`, `phone_number`, `message`, `c_date`) VALUES
(1, 'dax', 'vipul.onus@gmail.com', '95581871675', 'sadsafdsfds', '0000-00-00 00:00:00'),
(2, 'vaibhav patel', 'vipul.onus@gmail.com', '9054351934', '7874159006', '0000-00-00 00:00:00'),
(3, 'Ram Mendpara', 'vipul.onus@gmail.com', '9898256409', 'your site is bakwas , when i create a new user acc , that time erroe generate 404-page not found !\nLOL Guysss', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_information`
--

CREATE TABLE `tbl_information` (
  `tbl_information_id` int(111) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_category`
--

CREATE TABLE `tbl_main_category` (
  `tbl_main_category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_main_category`
--

INSERT INTO `tbl_main_category` (`tbl_main_category_id`, `name`, `is_active`, `is_delete`, `created_date`, `modified_date`) VALUES
(1, 'Salwar-Suit', 0, 0, '2016-06-15 00:00:00', NULL),
(2, 'Saree', 0, 0, '2016-06-15 00:00:00', NULL),
(3, 'Chaniya-choli', 0, 0, '2016-06-15 00:00:00', NULL),
(4, 'Dress', 0, 0, '2016-06-15 00:00:00', NULL),
(5, 'Kurti', 0, 0, '2016-06-16 00:00:00', '2016-06-19 07:43:19'),
(6, 'westarn', 0, 0, '2016-07-12 12:27:47', NULL),
(7, 'TEST', 0, 0, '2018-07-05 16:24:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `tbl_order_id` int(11) NOT NULL,
  `tbl_customer_id` int(11) NOT NULL,
  `tbl_product_id` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `address_id` int(11) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `cdate` datetime NOT NULL,
  `mdate` datetime NOT NULL,
  `is_rto` int(11) NOT NULL DEFAULT '0',
  `is_cancle` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`tbl_order_id`, `tbl_customer_id`, `tbl_product_id`, `qty`, `price`, `address_id`, `payment_type`, `status`, `cdate`, `mdate`, `is_rto`, `is_cancle`) VALUES
(1, 14, 163, '1', '1199', 1, 0, 1, '2016-12-02 13:05:52', '0000-00-00 00:00:00', 0, 0),
(2, 14, 158, '1', '790', 1, 0, 1, '2016-12-02 13:05:52', '0000-00-00 00:00:00', 0, 0),
(3, 14, 163, '1', '1199', 1, 0, 1, '2016-12-16 20:41:02', '0000-00-00 00:00:00', 0, 0),
(4, 14, 165, '1', '1199', 1, 0, 0, '2016-12-16 20:41:02', '0000-00-00 00:00:00', 0, 0),
(5, 14, 155, '1', '790', 1, 0, 0, '2016-12-24 09:01:51', '0000-00-00 00:00:00', 0, 0),
(6, 14, 131, '1', '1150', 1, 0, 0, '2016-12-24 09:01:51', '0000-00-00 00:00:00', 0, 0),
(7, 14, 147, '1', '1150', 1, 0, 0, '2016-12-24 09:03:20', '0000-00-00 00:00:00', 0, 0),
(8, 14, 146, '1', '1150', 1, 0, 1, '2016-12-24 09:03:20', '0000-00-00 00:00:00', 0, 0),
(9, 3, 167, '1', '768', 3, 0, 1, '2018-07-02 16:46:09', '0000-00-00 00:00:00', 0, 0),
(10, 3, 148, '1', '600', 3, 0, 1, '2018-07-02 16:46:10', '0000-00-00 00:00:00', 0, 0),
(11, 3, 166, '1', '1190', 3, 0, 1, '2018-07-05 16:16:20', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `tbl_product_id` int(111) NOT NULL,
  `tbl_main_category_id` int(3) DEFAULT NULL,
  `SKU_NO` varchar(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_description` text NOT NULL,
  `long_description` text NOT NULL,
  `mrp` double NOT NULL,
  `rp` double NOT NULL,
  `weight` int(11) NOT NULL,
  `stock` int(3) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `temp_rate` float NOT NULL,
  `is_csv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`tbl_product_id`, `tbl_main_category_id`, `SKU_NO`, `product_name`, `image`, `sort_description`, `long_description`, `mrp`, `rp`, `weight`, `stock`, `c_date`, `m_date`, `status`, `temp_rate`, `is_csv`) VALUES
(131, 2, '', 'ASHIKA', 'IMG-20160716-WA0007.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:43:09', '2016-07-23 12:15:25', 0, 1799, 0),
(132, 2, '', 'ASHIKA', 'IMG-20160716-WA0008.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 0, 20, '2016-07-19 09:45:02', '2016-07-23 12:15:42', 0, 1799, 0),
(133, 2, '', 'ASHIKA', 'IMG-20160716-WA0009.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:46:03', '2016-07-23 12:15:58', 0, 1799, 0),
(134, 2, '', 'ASHIKA', 'IMG-20160716-WA0010.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:49:09', '2016-07-23 12:17:08', 0, 1799, 0),
(135, 2, '', 'ASHIKA', 'IMG-20160716-WA0011.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 10, '2016-07-19 09:49:51', '2016-08-30 16:19:56', 0, 1799, 0),
(136, 2, '', 'ASHIKA', 'IMG-20160716-WA0012.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 10, '2016-07-19 09:50:22', '2016-07-23 12:16:28', 0, 1799, 0),
(137, 2, '', 'ASHIKA', 'IMG-20160716-WA0013.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 10, '2016-07-19 09:51:18', '2016-07-23 12:16:55', 0, 1799, 0),
(138, 2, '', 'ASHIKA', 'IMG-20160716-WA0014.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:52:11', '2016-07-23 12:18:56', 0, 1200, 0),
(139, 2, '', 'ASHIKA', 'IMG-20160716-WA0015.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 100, '2016-07-19 09:53:07', '2016-07-23 12:19:42', 0, 1799, 0),
(140, 2, '', '', 'IMG-20160716-WA0016.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:54:08', '2016-07-23 12:20:24', 0, 1799, 0),
(141, 2, '', 'ASHIKA', 'IMG-20160716-WA0017.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1200, 0, 350, 20, '2016-07-19 09:55:46', '2016-07-28 12:29:43', 0, 1799, 0),
(142, 2, '', 'ASHIKA', 'IMG-20160716-WA0018.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:56:19', '2016-07-28 12:30:02', 0, 1799, 0),
(143, 2, '', 'ASHIKA', 'IMG-20160716-WA0019.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:57:36', '2016-07-23 12:22:51', 0, 1799, 0),
(144, 2, '', 'ASHIKA', 'IMG-20160716-WA0020.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:59:29', '2016-08-30 16:20:16', 0, 1799, 0),
(145, 2, '', 'ASHIKA', 'IMG-20160716-WA0021.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 09:59:59', '2016-07-23 12:22:01', 0, 1799, 0),
(146, 2, '', 'ASHIKA', 'IMG-20160716-WA0022.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 10:00:51', '2016-07-28 12:30:35', 0, 1799, 0),
(147, 2, '', 'ASHIKA', 'IMG-20160716-WA0023.jpg', 'CATALOG NAME - AASHIKA CATALOG \r\nFEBRIC - COTTON SILK\r\nPRICE - 1150 \r\nSINGLE AVAILABLE ', '', 1150, 0, 350, 20, '2016-07-19 10:01:38', '2016-07-23 12:20:50', 0, 1799, 0),
(148, 6, '', 'DENIM KURTI', 'IMG-20160717-WA0061.jpg', 'CATALOG NAME - DENIM \r\nFEBRC,,,DENIM \r\nITS SUPER.. PRODUCT \r\nNOW THIS TRENDING,,,,', '', 600, 0, 350, 20, '2016-07-19 10:09:47', NULL, 0, 1200, 0),
(149, 1, '', 'YOUR CHOICE ', 'IMG-20160719-WA0608.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:28:05', NULL, 0, 999, 0),
(150, 4, '', 'YOUR CHOICE', 'IMG-20160719-WA0609.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:29:09', NULL, 0, 999, 0),
(151, 4, '', 'YOUR CHOICE', 'IMG-20160719-WA0610.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:29:54', '2016-07-19 11:31:00', 0, 999, 0),
(152, 4, '', 'YOUR CHOICE', 'IMG-20160719-WA0611.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:31:54', NULL, 0, 999, 0),
(153, 4, '', 'YOUR CHOICE', 'IMG-20160719-WA0612.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:33:18', NULL, 0, 999, 0),
(155, 4, '', 'YOUR CHOICE', 'IMG-20160719-WA0613.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:36:32', NULL, 0, 999, 0),
(156, 4, '', 'YOUR CHOICE', 'IMG-20160719-WA0614.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:37:21', NULL, 0, 999, 0),
(157, 1, '', 'YOUR CHOICE', 'IMG-20160719-WA0615.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 0, 20, '2016-07-19 11:46:25', '2016-08-30 16:20:45', 0, 999, 0),
(158, 1, '', 'YOUR CHOICE', 'IMG-20160719-WA0616.jpg', 'CATALOG NAME - YOUR CHOISE\r\nFEBRIC \r\nTOP- pure chiffon with embroidery \r\nBOTTOM INNER -santoon\r\nDUPATTA NAZNIN\r\nAvailable in SINGLES & MULTIPLES\r\n\r\n\r\n\r\nBooking starts now !\r\n\r\n\r\nPREMIUM QUALITY GUARANTEE !', '', 790, 0, 250, 20, '2016-07-19 11:48:08', NULL, 0, 999, 0),
(159, 4, '', 'YOUR CHOICE', 'IMG-20160719-WA0617.jpg', 'CATALOG NAME - YOUR CHOISE FEBRIC TOP- pure chiffon with embroidery BOTTOM INNER -santoon DUPATTA NAZNIN Available in SINGLES & MULTIPLES Booking starts now ! PREMIUM QUALITY GUARANTEE !\r\n\r\n', '', 790, 0, 250, 20, '2016-07-19 11:58:57', '2016-08-30 16:20:34', 0, 999, 0),
(161, 1, '', 'Rani fashion', '13879257_152055598562160_6255696394723201294_n.jpg', 'contact us 9173018108\r\n" RANI FASHION"®\r\nWe are launching new\r\nCatalog---SUNDAY PATIYALA vol-14\r\nFabrics----????glace cotton heavy 2.25 mtr\r\nBottom-----cotton print patiyala 2.50 mtr\r\n\r\nDupatta:-marble print with lace 2.25 mtr\r\nColour--------18\r\n\r\nDispatching---- 10/8/16\r\n\r\nRate 485', '', 485, 0, 250, 0, '2016-08-08 13:49:51', NULL, 0, 999, 0),
(163, 1, '', 'LAVEL 5', 'e22f4d89-4ae6-46b9-a26c-d3d368453a5c.jpg', 'Catalogue Name :- "LEVEL - 5"\r\n\r\nFabrics.\r\n.TOP- fox Georgette \r\n BOTTOOM- Santoon \r\n  DUPATTA -Najnin\r\n \r\nType :- 48" semi stich \r\n\r\nShipping Extra...\r\n\r\nDesing :- 3 pcs', '', 1199, 0, 700, 10, '2016-08-30 17:49:02', NULL, 0, 1800, 0),
(165, 1, '', 'YOUR CHOICE', 'ae4b0a5f-f31b-4df1-b2fd-4647a9037916.jpg', 'Catalogue Name :- "LEVEL - 5" Fabrics.\r\n .TOP- fox Georgette \r\nBOTTOOM- Santoon \r\nDUPATTA -Najnin \r\nType :- 48" semi stich .\r\n. Desing :- 3 pcs', '', 1199, 0, 750, 10, '2016-08-31 15:50:58', NULL, 0, 1800, 0),
(166, 2, '', 'SAHIBA', '1db7e01d-9d2a-4877-b7d3-e73e85963ee7.jpg', 'CATALOG NAME : AKANSHA \r\n', '', 1190, 0, 800, 15, '2016-09-11 10:05:22', NULL, 0, 1700, 0),
(167, 5, '', 'KUMB 3', '6edb94eb-e7cc-4b90-af9b-5f40b9a47639.jpg', '   \r\n                  KUMB ~3\r\n\r\nLatest concept of Georgette,stylish Kurtis by Sparrow ™\r\n\r\n10 beautiful colours\r\n*10 beautful deigns *\r\n\r\nCatalog : KUMB VOL 3\r\n\r\nBrand : ????SPARROW????\r\n\r\nLength :  *47" inch *\r\n\r\nSize :    L     XL    XXL\r\n             40    42    44\r\n\r\n????Fabric : \r\n         Heavy  Georgette\r\n????Inner:-\r\n        Heavy  Santoon  \r\nHeavy Embroidery work\r\n', '', 768, 0, 850, 15, '2016-09-21 11:43:16', NULL, 0, 1200, 0),
(168, 7, '', 'test1', '13.jpg (18).png', 'testesttestestset', 'test', 164, 12, 164, 200, '2018-07-05 16:26:51', NULL, 0, 32, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_type`
--

CREATE TABLE `tbl_product_type` (
  `tbl_product_type_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modefied_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_type`
--

INSERT INTO `tbl_product_type` (`tbl_product_type_id`, `name`, `is_active`, `is_delete`, `created_date`, `modefied_date`) VALUES
(4, 'Neck', 0, 0, '2016-06-17 15:33:57', '2016-06-17 15:35:05'),
(5, 'Materials', 0, 0, '2016-06-17 15:34:41', '0000-00-00 00:00:00'),
(6, 'Color', 0, 0, '2016-06-17 15:35:21', '0000-00-00 00:00:00'),
(7, 'Size', 0, 0, '2016-06-17 15:35:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shoping_cart`
--

CREATE TABLE `tbl_shoping_cart` (
  `tbl_shoping_cart_id` int(111) NOT NULL,
  `tbl_product_id` int(111) NOT NULL,
  `tbl_customer_id` int(111) NOT NULL,
  `qty` int(3) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shoping_cart_ip`
--

CREATE TABLE `tbl_shoping_cart_ip` (
  `tbl_shoping_cart_id` int(111) NOT NULL,
  `tbl_product_id` int(111) NOT NULL,
  `tbl_customer_id` varchar(111) NOT NULL,
  `qty` int(3) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shoping_cart_ip`
--

INSERT INTO `tbl_shoping_cart_ip` (`tbl_shoping_cart_id`, `tbl_product_id`, `tbl_customer_id`, `qty`, `c_date`, `m_date`, `status`, `is_delete`) VALUES
(1, 144, '54e7252204e04c671057085193f15eaa', 1, '2016-10-07 15:57:42', '0000-00-00 00:00:00', 0, 0),
(2, 148, '6685db8254802f7b68958ad315a5f282', 1, '2016-10-08 22:23:04', '0000-00-00 00:00:00', 0, 0),
(3, 147, 'f65987e75ba0a87b7f42a948f579e21d', 1, '2016-10-09 11:09:51', '0000-00-00 00:00:00', 0, 0),
(4, 141, '3748820f086109fee0cb9307f148aad9', 1, '2016-10-15 22:40:09', '0000-00-00 00:00:00', 0, 0),
(5, 155, 'a8465a31d903645757c76391a41e4bce', 1, '2016-10-22 20:15:09', '0000-00-00 00:00:00', 0, 0),
(6, 133, '360e8ee6032866e3720c370925e80e36', 1, '2016-11-23 09:06:50', '0000-00-00 00:00:00', 0, 0),
(7, 161, '8086923348e3d078954e8c92fbcbfdcc', 1, '2016-11-23 15:06:14', '0000-00-00 00:00:00', 0, 0),
(8, 148, 'd140815493dd081699e515879f615441', 1, '2016-12-02 16:20:22', '0000-00-00 00:00:00', 0, 0),
(9, 166, 'c1bd135b540dbd521f74f086860dcd1c', 1, '2016-12-06 08:43:26', '0000-00-00 00:00:00', 0, 0),
(10, 132, 'c1bd135b540dbd521f74f086860dcd1c', 1, '2016-12-06 08:44:34', '0000-00-00 00:00:00', 0, 0),
(11, 158, 'c1bd135b540dbd521f74f086860dcd1c', 1, '2016-12-06 08:45:41', '0000-00-00 00:00:00', 0, 0),
(13, 168, '9cd7412c35ec47def5d9992367f6bd98', 42, '2018-07-05 16:27:48', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_media`
--

CREATE TABLE `tbl_social_media` (
  `tbl_social_media_id` int(111) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  `c_date` datetime NOT NULL,
  `m_date` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social_media`
--

INSERT INTO `tbl_social_media` (`tbl_social_media_id`, `icon`, `link`, `c_date`, `m_date`, `status`) VALUES
(1, 'fa fa-facebook', 'https://www.facebook.com', '2016-06-15 00:00:00', '2016-06-28 10:16:42', 0),
(2, 'fa fa-twitter', 'https://twitter.com', '2016-06-15 00:00:00', '2016-06-28 16:45:37', 0),
(3, 'fa fa-google-plus', 'https://plus.google.com', '2016-06-15 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'fa fa-pinterest-p', 'https://www.pinterest.com', '2016-06-15 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `tbl_type_id` int(11) NOT NULL,
  `tbl_product_type_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modefied_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`tbl_type_id`, `tbl_product_type_id`, `name`, `is_active`, `is_delete`, `created_date`, `modefied_date`) VALUES
(3, 7, '34', 0, 0, '2016-06-17 15:36:35', NULL),
(4, 7, '36', 0, 0, '2016-06-17 15:36:42', NULL),
(5, 7, '38', 0, 0, '2016-06-17 15:36:49', NULL),
(6, 7, '40', 0, 0, '2016-06-17 15:36:55', NULL),
(7, 4, 'Asymmetric Neckline', 0, 0, '2016-06-17 15:37:39', NULL),
(8, 4, 'Boat Neckline', 0, 0, '2016-06-17 15:37:50', NULL),
(9, 4, 'Peter Pan Collar Neckline', 0, 0, '2016-06-17 15:37:58', NULL),
(10, 4, 'Collared Neckline', 0, 0, '2016-06-17 15:38:09', NULL),
(11, 4, 'Closed Neckline', 0, 0, '2016-06-17 15:38:19', NULL),
(12, 4, 'Cowl Neckline', 0, 0, '2016-06-17 15:38:26', NULL),
(13, 4, 'Decolletage Neckline', 0, 0, '2016-06-17 15:38:36', NULL),
(14, 5, 'cotton', 0, 0, '2016-06-17 15:39:22', NULL),
(15, 5, 'flax', 0, 0, '2016-06-17 15:39:31', NULL),
(16, 5, 'wool', 0, 0, '2016-06-17 15:39:40', NULL),
(17, 5, 'ramie', 0, 0, '2016-06-17 15:39:49', NULL),
(18, 5, 'silk', 0, 0, '2016-06-17 15:39:59', NULL),
(19, 5, 'Denim', 0, 0, '2016-06-17 15:40:13', NULL),
(20, 5, 'Leather', 0, 0, '2016-06-17 15:40:24', NULL),
(21, 6, 'red', 0, 0, '2016-06-17 15:40:30', NULL),
(22, 6, 'Blue', 0, 0, '2016-06-17 15:40:37', NULL),
(23, 6, 'Black', 0, 0, '2016-06-17 15:40:44', NULL),
(24, 6, 'Yellow', 0, 0, '2016-06-17 15:40:51', NULL),
(25, 6, 'Green', 0, 0, '2016-06-17 15:40:57', NULL),
(26, 6, 'Orange', 0, 0, '2016-06-17 15:41:05', NULL),
(27, 6, 'Mix Color', 0, 0, '2016-06-17 15:41:12', NULL),
(28, 6, 'gray', 0, 0, '2016-06-25 06:04:18', NULL),
(29, 7, '42', 0, 0, '2016-07-02 10:56:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `tbl_wishlist` int(11) NOT NULL,
  `tbl_product_id` int(11) NOT NULL,
  `tbl_customer_id` int(11) NOT NULL,
  `cdate` datetime NOT NULL,
  `mdate` datetime NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`tbl_about_us_id`);

--
-- Indexes for table `tbl_addpro_img`
--
ALTER TABLE `tbl_addpro_img`
  ADD PRIMARY KEY (`tbl_addpro_img_id`);

--
-- Indexes for table `tbl_addpro_type`
--
ALTER TABLE `tbl_addpro_type`
  ADD PRIMARY KEY (`tbl_addpro_type_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`tbl_admin_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`tbl_banner_id`);

--
-- Indexes for table `tbl_banner_adv`
--
ALTER TABLE `tbl_banner_adv`
  ADD PRIMARY KEY (`tbl_banner_adv_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`tbl_blog_id`);

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`tbl_config_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`tbl_contact_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`tbl_customer_id`);

--
-- Indexes for table `tbl_customer_address`
--
ALTER TABLE `tbl_customer_address`
  ADD PRIMARY KEY (`tbl_customer_address_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`tbl_feedback`);

--
-- Indexes for table `tbl_information`
--
ALTER TABLE `tbl_information`
  ADD PRIMARY KEY (`tbl_information_id`);

--
-- Indexes for table `tbl_main_category`
--
ALTER TABLE `tbl_main_category`
  ADD PRIMARY KEY (`tbl_main_category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`tbl_order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`tbl_product_id`);

--
-- Indexes for table `tbl_product_type`
--
ALTER TABLE `tbl_product_type`
  ADD PRIMARY KEY (`tbl_product_type_id`);

--
-- Indexes for table `tbl_shoping_cart`
--
ALTER TABLE `tbl_shoping_cart`
  ADD PRIMARY KEY (`tbl_shoping_cart_id`);

--
-- Indexes for table `tbl_shoping_cart_ip`
--
ALTER TABLE `tbl_shoping_cart_ip`
  ADD PRIMARY KEY (`tbl_shoping_cart_id`);

--
-- Indexes for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  ADD PRIMARY KEY (`tbl_social_media_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`tbl_type_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`tbl_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `tbl_about_us_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_addpro_img`
--
ALTER TABLE `tbl_addpro_img`
  MODIFY `tbl_addpro_img_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_addpro_type`
--
ALTER TABLE `tbl_addpro_type`
  MODIFY `tbl_addpro_type_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `tbl_admin_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `tbl_banner_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_banner_adv`
--
ALTER TABLE `tbl_banner_adv`
  MODIFY `tbl_banner_adv_id` int(111) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `tbl_blog_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `tbl_config_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `tbl_contact_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `tbl_customer_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_customer_address`
--
ALTER TABLE `tbl_customer_address`
  MODIFY `tbl_customer_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `tbl_feedback` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_information`
--
ALTER TABLE `tbl_information`
  MODIFY `tbl_information_id` int(111) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_main_category`
--
ALTER TABLE `tbl_main_category`
  MODIFY `tbl_main_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `tbl_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `tbl_product_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `tbl_product_type`
--
ALTER TABLE `tbl_product_type`
  MODIFY `tbl_product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_shoping_cart`
--
ALTER TABLE `tbl_shoping_cart`
  MODIFY `tbl_shoping_cart_id` int(111) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_shoping_cart_ip`
--
ALTER TABLE `tbl_shoping_cart_ip`
  MODIFY `tbl_shoping_cart_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_social_media`
--
ALTER TABLE `tbl_social_media`
  MODIFY `tbl_social_media_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `tbl_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `tbl_wishlist` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
