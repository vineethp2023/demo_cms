-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2024 at 05:31 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_tb`
--

DROP TABLE IF EXISTS `address_tb`;
CREATE TABLE IF NOT EXISTS `address_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `office_name` varchar(100) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adv_tb`
--

DROP TABLE IF EXISTS `adv_tb`;
CREATE TABLE IF NOT EXISTS `adv_tb` (
  `ad_id` int NOT NULL AUTO_INCREMENT,
  `ad_line` varchar(100) NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adv_tb`
--

INSERT INTO `adv_tb` (`ad_id`, `ad_line`, `description`) VALUES
(1, 'Services We Offer to Our Customers', 'You can rely on Company to help you to manage your company more effectively. Set up your Business & Virtual office with Company in 60 minutes.'),
(2, 'Your Trusted Business Solution Partner', 'Company is your premier online Business & Office Company assistance firm in the UAE. We understand that navigating the intricacies of Virtual Company processes can be overwhelming and time-consuming. That\'s why we\'re here to make your journey to the UAE easy, seamless, and hassle-free.'),
(3, 'Cut the Business Setup Time by 90% Get Virtual Office Company in Just 60 Minutes !', 'Company helps beginners and professionals to effortlessly establish businesses online, in less than an hour.');

-- --------------------------------------------------------

--
-- Table structure for table `image_tb`
--

DROP TABLE IF EXISTS `image_tb`;
CREATE TABLE IF NOT EXISTS `image_tb` (
  `img_id` int NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `contact_img` varchar(100) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `index_tb`
--

DROP TABLE IF EXISTS `index_tb`;
CREATE TABLE IF NOT EXISTS `index_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(150) NOT NULL,
  `contact_title` varchar(180) NOT NULL,
  `contact_subtitle` varchar(200) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `timing` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

DROP TABLE IF EXISTS `login_tb`;
CREATE TABLE IF NOT EXISTS `login_tb` (
  `login_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609');

-- --------------------------------------------------------

--
-- Table structure for table `service_tb`
--

DROP TABLE IF EXISTS `service_tb`;
CREATE TABLE IF NOT EXISTS `service_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(350) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_tb`
--

INSERT INTO `service_tb` (`id`, `title`, `description`) VALUES
(1, 'Time Saving', 'Getting the procedure done in just 60 minutes! The faster the better right!'),
(2, '24/7 Support', 'Get the best of the customer service with fully trained represenatives.'),
(3, 'Online Procedure', 'Get it done online from the comfort of your home. No more long queues.'),
(4, 'Cost-Effective', 'We don’t let your pocket take a dent. Enjoy the services but at affordable prices.'),
(5, 'Co-operative Team', 'Our team is always there by your side. Get the support of the most dedicated team in U.A.E'),
(6, 'Customer Focused', 'We focus on you and your needs. We deliver for results, to make your work easier and simpler.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
