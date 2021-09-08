-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 10:43 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `uni_about`
--

CREATE TABLE IF NOT EXISTS `uni_about` (
  `about_id` int(10) NOT NULL AUTO_INCREMENT,
  `about_desc` text NOT NULL,
  `about_status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '1-active,0-dactive',
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uni_about`
--

INSERT INTO `uni_about` (`about_id`, `about_desc`, `about_status`) VALUES
(1, '<p>dsfgdskhgfsdjhks pravin</p>\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uni_admin`
--

CREATE TABLE IF NOT EXISTS `uni_admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(120) NOT NULL,
  `admin_status` enum('1','0') NOT NULL COMMENT '1-active,0-dactive',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uni_admin`
--

INSERT INTO `uni_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_status`) VALUES
(1, 'admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uni_contact`
--

CREATE TABLE IF NOT EXISTS `uni_contact` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `contact_phone` varchar(12) NOT NULL,
  `contact_email` varchar(120) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_status` enum('1','0') NOT NULL COMMENT '1-active,0-dactive',
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uni_contact`
--

INSERT INTO `uni_contact` (`contact_id`, `contact_phone`, `contact_email`, `contact_address`, `contact_status`) VALUES
(1, '5454454545', 'info@domain.com', 'this is the  test address', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uni_gallery`
--

CREATE TABLE IF NOT EXISTS `uni_gallery` (
  `gallery_id` int(10) NOT NULL AUTO_INCREMENT,
  `gallery_image` varchar(120) NOT NULL,
  `gallery_status` enum('1','0') NOT NULL COMMENT '1-active,0-dactive',
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `uni_gallery`
--

INSERT INTO `uni_gallery` (`gallery_id`, `gallery_image`, `gallery_status`) VALUES
(1, '21461_blog1.jpg', '1'),
(2, '18410_blog2.jpg', '1'),
(3, '6875_blog3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uni_home`
--

CREATE TABLE IF NOT EXISTS `uni_home` (
  `home_id` int(10) NOT NULL AUTO_INCREMENT,
  `home_desc` text NOT NULL,
  `home_status` enum('1','0') NOT NULL COMMENT '1-active,0-dactive',
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uni_home`
--

INSERT INTO `uni_home` (`home_id`, `home_desc`, `home_status`) VALUES
(1, '<h2>Welcome to University of College Education</h2>\r\n\r\n<p><a href="#">Share with friends</a></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu porta lorem. Cras turpis ipsum, iaculis ut auctor eget, euismod eget enim. Curabitur a lorem porttitor lectus euismod semper vitae eu purus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu porta lorem. Cras turpis ipsum, iaculis ut auctor eget, euismod eget enim. Curabitur a lorem porttitor lectus euismod semper vitae eu purus. Nulla at mi scelerisque urna dapibus ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nec lectus elit, at aliquam est. Proin eget laoreet lectus.</p>\r\n\r\n<p>Nullam scelerisque cursus leo at volutpat. Etiam non faucibus ante. Ut eget leo placerat velit imperdiet suscipit. , at aliquam est. Proin eget laoreet lectus. Nullam scelerisque cursus leo at volutpat. Etiam non faucibus ante. Ut eget leo placerat velit imperdiet suscipit. at aliquam est. Proin eget laoreet lectus. Nullam scelerisque cursus leo at volutpat.</p>\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uni_logo`
--

CREATE TABLE IF NOT EXISTS `uni_logo` (
  `logo_id` int(3) NOT NULL AUTO_INCREMENT,
  `logo_image` varchar(120) NOT NULL,
  `logo_status` enum('1','0') NOT NULL COMMENT '1-active,0-dactive',
  PRIMARY KEY (`logo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uni_logo`
--

INSERT INTO `uni_logo` (`logo_id`, `logo_image`, `logo_status`) VALUES
(1, '17048_logo.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uni_media`
--

CREATE TABLE IF NOT EXISTS `uni_media` (
  `media_id` int(10) NOT NULL AUTO_INCREMENT,
  `media_desc` text NOT NULL,
  `media_image` varchar(120) NOT NULL,
  `media_status` enum('1','0') NOT NULL COMMENT '1-active,0-dactive',
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uni_media`
--

INSERT INTO `uni_media` (`media_id`, `media_desc`, `media_image`, `media_status`) VALUES
(1, '<p>this is the test media description&nbsp;</p>\r\n', '22904_blog2.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `uni_slider`
--

CREATE TABLE IF NOT EXISTS `uni_slider` (
  `slider_id` int(40) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(120) NOT NULL,
  `slider_image` varchar(120) NOT NULL,
  `slider_status` enum('1','0') NOT NULL COMMENT '1-active,0-dactive',
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uni_slider`
--

INSERT INTO `uni_slider` (`slider_id`, `slider_name`, `slider_image`, `slider_status`) VALUES
(2, 'slider1', '26183_banner2.jpg', '1'),
(3, 'slider2', '17847_banner3.jpg', '1'),
(4, 'slider3', '24180_banner.jpg', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
