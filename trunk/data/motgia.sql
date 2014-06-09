-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2014 at 01:32 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `motgia`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_status`
--

CREATE TABLE IF NOT EXISTS `bill_status` (
  `statusID` int(10) NOT NULL AUTO_INCREMENT,
  `action_date` datetime NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bill_status`
--

INSERT INTO `bill_status` (`statusID`, `action_date`, `userID`) VALUES
(3, '2014-06-06 17:06:33', 'UID00003'),
(4, '2014-06-06 17:12:04', 'UID00003'),
(6, '2014-06-06 16:21:42', 'UID00003'),
(7, '2014-06-06 16:22:17', 'UID00003'),
(8, '2014-06-06 18:05:42', 'UID00003'),
(9, '2014-06-06 17:11:34', 'UID00003'),
(10, '2014-06-07 15:25:07', 'UID00004'),
(11, '2014-06-07 15:35:50', 'UID00004'),
(12, '2014-06-07 15:37:20', 'UID00004');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=632 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(629, 1402170896, '::1', 'jscFp7sn'),
(630, 1402170965, '::1', 'sryZxggE'),
(631, 1402171019, '::1', 'zEBrnD57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoriesID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoriesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoriesID`, `name`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Trẻ em'),
(4, 'quần áo'),
(5, 'giày dép');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3527374b97bfd374f0c6109d26dde8b4', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1402179872, 'a:2:{s:9:"user_data";s:0:"";s:4:"user";a:4:{s:6:"userID";s:8:"UID00004";s:8:"fullname";s:13:"Tân Ông xã";s:5:"email";s:18:"tantanb2@gmail.com";s:9:"logged_in";b:1;}}');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `guestID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`guestID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='khách vãng lai';

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guestID`, `fullname`, `mail`, `phone`, `province`, `address`, `create_date`) VALUES
('GUEST001', '', '', 0, '', '', '2014-05-28 13:46:07'),
('GUEST002', '', '', 0, '', '', '2014-05-28 13:46:14'),
('GUEST003', '', '', 0, '', '', '2014-05-28 13:46:17'),
('GUEST004', '', '', 0, '', '', '2014-05-28 13:46:34'),
('GUEST005', 'sdfsdf', 'sfsdf', 0, 'Bà Rịa - Vũng Tàu', 'sdfsdf', '2014-05-28 13:50:51'),
('GUEST006', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'TP HCM', 'truong dinh', '2014-05-28 13:51:42'),
('GUEST007', 'Nguyễn Tân', 'sfdsdf', 0, 'Cần Thơ', 'sdfsdf', '2014-05-28 17:06:54'),
('GUEST008', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Dương', '123', '2014-05-28 21:25:56'),
('GUEST009', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Đà Nẵng', 'truong dinh', '2014-05-28 23:10:32'),
('GUEST010', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Thái Bình', 'tien hai', '2014-05-28 23:49:32'),
('GUEST011', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Đắk Lắk', 'buon ho', '2014-05-29 00:56:49'),
('GUEST012', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bến Tre', '123', '2014-05-29 01:18:45'),
('GUEST013', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Cao Bằng', '123', '2014-05-29 01:41:58'),
('GUEST014', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Thuận', '123', '2014-05-29 01:55:36'),
('GUEST015', 'Tân Tân Tân', '234dfsdf@sdfsdf.sdf', 1689338965, 'Vĩnh Long', '123456', '2014-05-29 02:01:01'),
('GUEST016', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Cao Bằng', '213', '2014-05-29 05:05:45'),
('GUEST017', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Thuận', '123', '2014-05-30 05:52:23'),
('GUEST018', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'TP HCM', '1234', '2014-05-30 06:05:27'),
('GUEST019', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 1689338965, 'Bình Dương', 'sdfsdf', '2014-05-30 06:29:11'),
('GUEST020', 'sdfsdf', '234dfsdf@sdfsdf.sdf', 123123, 'TP HCM', 'sdfsdf', '2014-05-30 06:30:56'),
('GUEST021', 'sdfsdf', 'ductan_nguyen92@yahoo.com', 123123, 'Bình Dương', 'sdf', '2014-05-30 06:33:00'),
('GUEST022', 'Tantan', 'thanhdo.trinh@gmail.com', 978787687, 'TP HCM', 'ssdasdasd', '2014-06-01 04:57:20'),
('GUEST023', '123', '3s@sdfsdf.sdfsfd', 2312312, 'Cần Thơ', 'sdfsdf', '2014-06-01 05:00:11'),
('GUEST024', 'Nguyễn Tân', 'ductan_nguyen92@yahoo.com', 0, 'Đà Nẵng', 'sdf', '2014-06-06 03:13:35'),
('GUEST025', 'Tân Ông xã', 'sdf@sdfsdf.sdfsdf', 123123, 'Đà Nẵng', 'sdfsdf', '2014-06-06 03:15:56'),
('GUEST026', 'Nguyễn Tân', 'sfdsdf@sdfsdf.sdfsdfsdf', 1689338965, 'Cao Bằng', 'c', '2014-06-06 16:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `levelID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`levelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`levelID`, `name`) VALUES
(0, 'chưa kích hoạt'),
(1, 'thành viên'),
(2, 'nhà cung cấp'),
(3, 'quản trị viên'),
(4, 'bị cấm');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messageID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `receiverID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senderID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`messageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageID`, `receiverID`, `senderID`, `title`, `content`, `create_date`, `status`) VALUES
('MSS00001', 'UID00003', 'UID00004', 'Xin chào', 'làm quen được không?', '2014-04-09 00:00:00', 1),
('MSS00002', 'UID00003', 'UID00002', 'Việc khẩn', 'nhậu không?', '2014-04-16 00:00:00', 1),
('MSS00004', 'UID00003', 'UID00003', 'Làm quen?', '<p>dfsdfsdfsdf</p>', '2014-04-18 17:15:37', 1),
('MSS00005', 'UID00002', 'UID00003', 'Reply: Việc khẩn', '<p>khong</p>', '2014-04-18 19:18:42', 0),
('MSS00006', 'UID00004', 'UID00003', 'Reply: Làm quen?', '<p>C&oacute; bạn trai rồi</p>', '2014-04-18 22:46:48', 1),
('MSS00007', 'UID00004', 'UID00003', 'Reply: Xin chào', '<p>sdfsdfhgjkl;kjgfdfs</p>', '2014-04-18 22:51:18', 1),
('MSS00008', 'UID00003', 'UID00004', 'Reply: Reply: Làm quen?', '<p>chia tay de</p>', '2014-04-18 23:13:47', 1),
('MSS00009', 'UID00002', 'UID00003', 'Reply: Việc khẩnsdddddddddddddddddddddddddddd', '<p>tantnanta</p>', '2014-04-20 15:42:09', 0),
('MSS00010', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '', '2014-05-17 01:52:27', 1),
('MSS00011', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '', '2014-05-17 01:52:32', 1),
('MSS00012', 'UID00004', 'UID00003', 'Reply: Reply: Reply: Làm quen?', '<p>fsdfsdfsdfsdfsdf</p>', '2014-05-17 01:52:38', 1),
('MSS00013', 'UID00002', 'UID00003', 'Reply: Việc khẩnfsdfsdf', 'sdfsdfsd', '2014-05-24 16:14:47', 0),
('MSS00014', 'UID00002', 'UID00003', 'Reply: Việc khẩnasdasdasdasd', 'asdasdasdasdasd', '2014-05-24 16:15:15', 0),
('MSS00015', 'UID00002', 'UID00003', 'Reply: Việc khẩnsdfffffffffffffff', 'ffffffffffffffffffffffffffffffffff', '2014-05-24 16:16:01', 0),
('MSS00016', 'UID00002', 'ArrayArray', 'Reply: Việc khẩndfgdfgdfg', 'dfgdfg', '2014-05-24 16:18:07', 0),
('MSS00017', 'UID00003', 'UID00004', 'cin chao thu nghiem', 'chao ban minh la tan dang thu nghiem he thong', '2014-05-24 17:06:16', 1),
('MSS00018', 'UID00003', 'UID00004', 'Reply: Reply: Làm quen?', 'sdfsdfsdf', '2014-05-27 16:58:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`orderID`,`productsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderID`, `productsID`, `quantity`) VALUES
('ORD00001', 'PRO00006', 1),
('ORD00001', 'PRO00008', 1),
('ORD00002', 'PRO00007', 1),
('ORD00003', 'PRO00007', 2),
('ORD00004', 'PRO00005', 1),
('ORD00005', 'PRO00003', 1),
('ORD00006', 'PRO00002', 2),
('ORD00006', 'PRO00004', 1),
('ORD00006', 'PRO00006', 3),
('ORD00006', 'PRO00008', 1),
('ORD00007', 'PRO00017', 2),
('ORD00007', 'PRO00018', 1),
('ORD00008', 'PRO00016', 1),
('ORD00009', 'PRO00014', 1),
('ORD00009', 'PRO00020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productsID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `soldnumber` int(11) NOT NULL,
  `images` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hightlight` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `condition` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productinfo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `userID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_expiration` date NOT NULL COMMENT 'ngày hết hạn',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`productsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productsID`, `name`, `quantity`, `price`, `soldnumber`, `images`, `intro`, `hightlight`, `condition`, `productinfo`, `create_date`, `userID`, `date_expiration`, `status`) VALUES
('PRO00001', 'Sơ mi nam - nâu', 12, 100000, 0, '["public\\/product_images\\/motgia53770e71c4ad4.jpg","public\\/product_images\\/motgia53770e71c4c2b.jpg","public\\/product_images\\/motgia53770e71c4d33.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>sdfdf</p>', '<p>sdfsdf</p>', '<p>sdfsdf</p>', '2014-05-17 15:23:29', 'UID00003', '0000-00-00', 2),
('PRO00002', 'Áo thun màu vàng nhạt', 3, 100000, 0, '["public\\/product_images\\/motgia53280fe0e1e00.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. us, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-02', 1),
('PRO00003', 'Quần Jeans nam', 3, 100000, 100, '["public\\/product_images\\/motgia53280f85369b2.jpg","public\\/product_images\\/motgia5315f9af7e73a.jpg","public\\/product_images\\/motgia5315f9af7eb66.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '', '', '', '0000-00-00 00:00:00', 'UID00004', '2014-04-02', 1),
('PRO00004', 'Áo ba lỗ nam - xanh', 3, 100000, 7, '["public\\/product_images\\/motgia53281007a3ecc.JPG","public\\/product_images\\/motgia53167d93e2722.jpg",null]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '', '', '', '0000-00-00 00:00:00', 'UID00003', '2014-04-03', 2),
('PRO00005', 'Sơ mi trắng nam', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1),
('PRO00006', 'iPhone 5s - white', 3, 100000, 4, '["public\\/product_images\\/motgia532811609eddc.jpg","public\\/product_images\\/motgia532811609efa6.jpg","public\\/product_images\\/motgia532811609f0e3.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-24', 0),
('PRO00007', 'Váy Hồng đáng yêu', 100, 100000, 4, '["public\\/product_images\\/motgia5328137f8d202.jpg","public\\/product_images\\/motgia5328137f8d3a1.jpg","public\\/product_images\\/motgia5328137f8d624.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'UID00001', '2014-04-25', 0),
('PRO00008', 'Máy tính bảng Samsung', 12, 100000, 10, '["public\\/product_images\\/motgia532813c6737fd.jpg","public\\/product_images\\/motgia532813c673993.jpg","public\\/product_images\\/motgia532813c673ab2.jpg"]', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '<p>rabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget,&nbsp;</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-17', 1),
('PRO00009', 'Áo thun TEES', 3, 100000, 0, '["public\\/product_images\\/motgia538b7f8e31f42.png","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-02', 1),
('PRO00010', 'Án Pull 100% cotton', 3, 100000, 0, '["public\\/product_images\\/motgia538b7e50c8bd5.jpg","public\\/product_images\\/motgia5315f2f47373e.png","public\\/product_images\\/motgia5315f2f473a91.PNG"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-02', 1),
('PRO00011', 'Pull Nam', 3, 100000, 6, '["public\\/product_images\\/motgia538b7f6174762.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', '2014-04-21', 0),
('PRO00012', 'Máy ảnh sony', 3, 100000, 6, '["public\\/product_images\\/MAY-ANH-SONY-DSC-W730-6.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0),
('PRO00013', 'Sp13', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1),
('PRO00014', 'Sp14', 3, 100000, 6, '["public\\/product_images\\/aothun.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1),
('PRO00015', 'Sp15', 3, 100000, 6, '["public\\/product_images\\/samsung.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0),
('PRO00016', 'Sp16', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00001', '2014-04-21', 0),
('PRO00017', 'Sp17', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 1),
('PRO00018', 'Sp18', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 1),
('PRO00019', 'Sp19', 3, 100000, 6, '["public\\/product_images\\/motgia538b7f6174762.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0),
('PRO00020', 'Sp20', 3, 100000, 6, '["public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00002', '2014-04-21', 1),
('PRO00021', 'Sp21', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0),
('PRO00022', 'Sp22', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', '2014-04-21', 0),
('PRO00023', 'Sp23', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0),
('PRO00024', 'Sp24', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00004', '2014-04-21', 1),
('PRO00025', 'Sp25', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00001', '2014-04-21', 0),
('PRO00026', 'Sp26', 3, 100000, 6, '["public\\/product_images\\/motgia53280bad9a66a.jpg","public\\/product_images\\/motgia53280bada3540.jpg","public\\/product_images\\/motgia53280bada3708.jpg"]', '<p><span >r ridiculus mus. Curabitur eu convallis erat. Integer suscipit euismod purus sed accumsan. Donec ac luctus quam. Nulla et nibh sit amet justo tristique consequat aliquam vel orci. Fusce eget elit at quam interdum egestas eget id metus. Sed velit lacus, euismod eu leo quis, condimentum sodales est. Pellentesque tortor est, posuere ut placerat eget, tempor id lacus. Sed at ante dapibus, cur</span></p>', '<p>fafasfsf</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '<p>mentum mauris pulvinar eu. Integer eget sapien id justo iaculi</p>\r\n<p>s aliquam ut id justo. Pellentesque adipiscing sit amet metus vitae</p>\r\n<p>mollis. Proin in mi sed quam iaculis molestie ac nec magna. Vivamus aliq</p>\r\n<p>uet dui sit amet nibh mattis tincidunt. Vivamus posuere tincidunt pulvi</p>\r\n<p>nar. Quisque quis auctor quam, nec consectetur ligula. Suspendisse potenti. S</p>\r\n<p>uspendisse rutrum sapien vel feugiat euismod.</p>\r\n<p>Quisque ornare auctor fringilla.&nbsp;</p>\r\n<p>Suspendisse sagittis commodo risus sed posuere.</p>', '0000-00-00 00:00:00', 'UID00003', '2014-04-21', 0),
('PRO00038', 'Smartosc', 222, 3, 0, '["public\\/product_images\\/img0538f7639f2017.jpg","public\\/product_images\\/img1538f763a013ab.jpg","public\\/product_images\\/img2538f763a02a77.jpg"]', 'fvcvbc', 'fvbcvbc', 'gcvbcv', 'bcvbcvb', '2014-06-04 12:05:42', 'UID00001', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE IF NOT EXISTS `seller_info` (
  `id` int(5) NOT NULL,
  `companyname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `shopID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `create_date` date NOT NULL,
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`shopID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shopID`, `company`, `address`, `city`, `website`, `phone`, `create_date`, `userID`) VALUES
('SHO00001', 'Trách nhiệm hữu hạn mười một thành viên', 'Định Công', 'Hà Nội', 'motgia.tk', 123456789, '2014-06-08', 'UID00004');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `sms` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sms`) VALUES
('Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN'),
('Hi {mobile}\nCam on ban da su dung dich vu.\nMa chinh: \nMa phu: \nDau so: \n\nSMS.VN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `categoryID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_parent` int(5) DEFAULT NULL,
  `order_sort` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`categoryID`, `category_name`, `category_parent`, `order_sort`) VALUES
(1, 'Featured Phones', 0, 1),
(2, 'sales', 1, 4),
(3, 'Smart Phones', 0, 10),
(4, 'Main Stream', 3, 8),
(55, 'Android', 4, 1),
(6, 'iOS', 4, 2),
(7, 'Others', 4, 3),
(8, 'Luxury', 3, 6),
(10, 'Accessories', 0, 9),
(51, 'Sales', 3, 7),
(57, 'Month 4', 51, 1),
(58, 'Month 5', 51, 2),
(59, 'Pin', 10, 0),
(60, 'Skin', 10, 0),
(61, 'Month 4', 2, 0),
(62, 'Month 5', 2, 0),
(63, 'Top Brand', 1, 0),
(64, 'Apple', 63, 0),
(65, 'Samsung', 63, 0),
(66, 'Blackberry', 63, 0),
(67, 'Brand', 3, 0),
(68, 'Month 3', 51, 0),
(69, 'Vertu', 8, 0),
(70, 'Mobiado', 8, 0),
(71, 'Lamboghili', 8, 0),
(72, 'Apple', 67, 0),
(73, 'Blackberry', 67, 0),
(74, 'Motorola', 67, 0),
(75, 'Apple', 60, 0),
(76, 'Blackberry', 60, 0),
(77, 'iOS xxx', 6, 2),
(78, 'iOS yyy', 6, 1),
(79, 'iOS zzz', 6, 0),
(81, '', 0, 0),
(82, 'tantan', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE IF NOT EXISTS `tbl_category_product` (
  `category_productID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `productsID` varchar(15) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`category_productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_productID`, `productsID`, `categoryID`) VALUES
(79, 'PRO00036', 3),
(80, 'PRO00036', 4),
(93, 'PRO00038 ', 75),
(94, 'PRO00038 ', 76),
(95, 'PRO00038 ', 69),
(96, 'PRO00038 ', 68),
(97, 'PRO00038 ', 59);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `orderID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sellerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `buyerID` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` tinyint(1) NOT NULL COMMENT '0: tai nha; 1:truc tuyen',
  `status` tinyint(1) NOT NULL COMMENT '0: huy; 1: dang cho xac nhan; 2: da xac nhan; 3: da thanh toan',
  `statusID` int(10) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`orderID`, `sellerID`, `buyerID`, `create_date`, `note`, `method`, `status`, `statusID`) VALUES
('ORD00001', 'UID00003', 'GUEST025', '2014-06-06 03:19:06', 'sdfsdfsf', 0, 2, 3),
('ORD00002', 'UID00003', 'UID00002', '2014-06-06 03:31:26', 'hết cmn hàng', 1, 2, 4),
('ORD00003', 'UID00001', 'UID00003', '2014-06-06 16:21:42', 'chuyen den truong dinh', 0, 2, 6),
('ORD00004', 'UID00002', 'UID00003', '2014-06-06 16:22:17', 'ko thich nua', 0, 2, 7),
('ORD00005', 'UID00004', 'UID00003', '2014-06-06 16:22:28', 'hhehehehehee\n', 0, 2, 8),
('ORD00006', 'UID00003', 'UID00003', '2014-06-06 16:22:40', 'sdfsdf', 0, 2, 9),
('ORD00007', 'UID00003', 'UID00004', '2014-06-07 15:25:07', '', 1, 1, 10),
('ORD00008', 'UID00001', 'UID00004', '2014-06-07 15:35:50', '', 1, 1, 11),
('ORD00009', 'UID00002', 'UID00004', '2014-06-07 15:37:20', '', 1, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `coin` double NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `levelID` int(5) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `email`, `password`, `birthday`, `gender`, `coin`, `province`, `phone`, `address`, `status`, `create_date`, `levelID`) VALUES
('UID00001', 'Trịnh', 'Thành Đô', 'thanhdo.trinh@yahoo.com', 'dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==', '0000-00-00', 0, 0, 'Bình Định', '841234567867', 'trên trời', 1, '2014-03-16 04:34:20', 3),
('UID00002', 'Hải', 'Lê', 'haile.fithou@yahoo.com', 'UV9qkwFX1usTeuQkjCrLffhyZHFcRn95QIfGBZ/pn4aGouNWZaVkk+CjRj3L1P25OCM4iHjuwWba9JVgOgfotg==', '0000-00-00', 0, 0, '', '0123456789', 'Linh Đàm', 1, '2014-03-19 15:01:31', 0),
('UID00003', 'Nguyễn', 'Tân Tân', 'ductan_nguyen92@yahoo.com', 'dukr6U5dbJcBUwe/Ea2yHY/3yLH7ppdvXxlLSjeGyDF67m/gUfTPnnQ9CVs+5swMMPTSYFZ32oDcab8V+H4WUw==', '2015-06-11', 0, 0, 'Thái Bình', '01689338965', 'Trương Định Hà Nội', 1, '2014-03-20 00:34:01', 2),
('UID00004', 'Tân', 'Ông xã', 'tantanb2@gmail.com', 'EoviPDsgOMcAxFnFxLbdVHfi/tF8HOqUuiSt7Y2QCy3qZh3K4ExwYNeYyHTZSA8wUnGSpvGYokin9fplU9N0nw==', '1992-08-26', 0, 0, 'Thái Bình', '023456789', 'trương định hà lội', 1, '2014-05-07 00:31:32', 2),
('UID00005', 'Tân', 'Tân', 'ductan_nguyen28@yahoo.com', 'Ji07bgVrTP2dwuYsj7PeWQxqrx+3+8gXt2dz0qmCtd8hmQzVonBIBePfLk4mYoXEYEJAzjRhSpdOET8cdngwLw==', '1992-08-26', 0, 0, 'Thái Nguyên', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-29 22:03:23', 0),
('UID00006', 'Đức', 'Tân', 'ductan_nguyen268@yahoo.com', 'S9HEeQDo9ntMsOBC8Eh1yz58UlX2/wMXY3T0Qj5OTQRxgOO09craSbvhaiWVVN89LJz7G77/ovxWdqTSphr8pg==', '1992-02-01', 0, 0, 'Bình Thuận', '01689338965', 'Hoàng Mai - Hà Nội', 1, '2014-05-30 15:19:50', 1),
('UID00009', 'trinh', 'sdfsdf', 'thanhdo.trinh@gmail.com', 'jRABb3xRkJ0bgt6Dj6ZD/YRnuCofWi0hCABt8luu+66s+hsh8ZwZCd6UKJSVyyLpIB8gxaxHGJC8+K8aImIjCg==', '2014-06-27', 1, 0, 'Hà Nội', '09877', 'định công - hoàng mai - hà nội', 0, '2014-06-01 12:00:27', 1),
('UID00011', 'trinh', 'do', '3s@sdfsdf.sdfsfd', 'Ad6AoxFxGj/JzK2szXMORkyPuKnnNBpuyGZ+JYv26V9lR0t+mca/dtdscZFGDWmTENcfhDieJsntDDEUCVEQqg==', '2014-06-29', 1, 0, 'Bình Phước', '00997983423', 'định công - hoàng mai - hà nội', 0, '2014-06-01 12:04:23', 1),
('UID00012', 'trinh', 'sdfsdf', 'thanhdo.trinh@gmail.com', '3VO+TMRrhJTc9IsRSPAnpLUJVWpI1QF4qdP54PNZwLTm1x0nduDHMR8xqDAdNm1Z3BJCxaBguo66eKhI9NJAUw==', '2014-06-28', 1, 0, 'Bình Thuận', '0978787687', 'định công - hoàng mai - hà nội', 0, '2014-06-01 12:05:47', 1),
('UID00013', 'trinh', 'sdfsdf', '3s@sdfsdf.sdfsfd', 'LuuS5ifXaZx3M7bW3x5vlLFmLhKuvoWIHsbaJr70Vh0v+CJZtFvTLOz0jqPUXOYyS1OL4ZNLBJByIFySW8xK9A==', '2014-06-06', 1, 0, 'Hải Phòng', '00997983423', '45345345345', 0, '2014-06-01 12:08:58', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;