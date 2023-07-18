-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 05:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vital_aire`
--

-- --------------------------------------------------------

--
-- Table structure for table `broschure`
--

CREATE TABLE `broschure` (
  `id` int(11) UNSIGNED NOT NULL,
  `csrf_token` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `broschure`
--

INSERT INTO `broschure` (`id`, `csrf_token`, `name`, `file_name`, `created_at`) VALUES
(4, 'a95875440bf908ba4089a7ab7ad51196077e110a4ba40d0595bb2c83f0558a3c', 'broschure1', 'broschure/069741a92a2f641eb428ba6d12ccb9af5edbbc9f93450.pdf', '2020-06-06 17:56:15'),
(5, 'cbcf97d6bd86a830ad69c7e607c8548946c3dccf08453673b2b551c890abb86f', 'broschure2', 'broschure/c97fa026fe3e9a8a91af7784f65866e15edbbcac07356.pdf', '2020-06-06 17:56:28'),
(6, 'd9c2681549272135fca0b8b0acf1f26ee5f0569a3e6105271bb5c2a1af57da64', 'broschure3', 'broschure/d9a3a4f56a79e313195ed035c3a0e5db5edbbcbb4d680.pdf', '2020-06-06 17:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) UNSIGNED NOT NULL,
  `cart_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `sub_product_id` int(11) UNSIGNED DEFAULT NULL,
  `product_id` int(11) UNSIGNED DEFAULT NULL,
  `price` int(11) UNSIGNED DEFAULT NULL,
  `quantity` int(11) UNSIGNED DEFAULT NULL,
  `patient_id` int(11) UNSIGNED DEFAULT NULL,
  `payment_opt` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cart_number`, `sub_product_id`, `product_id`, `price`, `quantity`, `patient_id`, `payment_opt`) VALUES
(84, 'efd2c76f47b1a85c22c4584bcdd344835ef462c296bcf', 1, 1, 0, 1, 1, 'mit_kassenrezept'),
(85, 'efd2c76f47b1a85c22c4584bcdd344835ef46f117a2d5', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(86, 'efd2c76f47b1a85c22c4584bcdd344835ef470a9b8ef5', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(88, 'efd2c76f47b1a85c22c4584bcdd344835ef471348f8cf', 3, 2, 0, 1, 1, 'mit_kassenrezept'),
(89, 'efd2c76f47b1a85c22c4584bcdd344835ef47420967dd', 1, 1, 0, 1, 1, 'mit_kassenrezept'),
(90, 'efd2c76f47b1a85c22c4584bcdd344835ef4749821309', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(91, 'efd2c76f47b1a85c22c4584bcdd344835ef475d6a9549', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(92, 'efd2c76f47b1a85c22c4584bcdd344835ef476d11bd05', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(93, 'efd2c76f47b1a85c22c4584bcdd344835ef4778051a73', 3, 2, 0, 1, 1, 'mit_kassenrezept'),
(94, 'efd2c76f47b1a85c22c4584bcdd344835ef477dbac14b', 1, 1, 0, 1, 1, 'mit_kassenrezept'),
(95, 'efd2c76f47b1a85c22c4584bcdd344835ef477dbac14b', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(96, 'efd2c76f47b1a85c22c4584bcdd344835ef47e8dbd844', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(97, 'efd2c76f47b1a85c22c4584bcdd344835ef47fb254170', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(98, 'efd2c76f47b1a85c22c4584bcdd344835ef47fecee196', 5, 3, 30, 1, 1, 'selbstzahler'),
(99, 'efd2c76f47b1a85c22c4584bcdd344835ef480993055a', 3, 2, 0, 1, 1, 'mit_kassenrezept'),
(100, 'efd2c76f47b1a85c22c4584bcdd344835ef4860ae446a', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(101, 'efd2c76f47b1a85c22c4584bcdd344835ef48723767f1', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(102, 'efd2c76f47b1a85c22c4584bcdd344835ef48742c5468', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(103, 'efd2c76f47b1a85c22c4584bcdd344835ef48779116bf', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(104, 'efd2c76f47b1a85c22c4584bcdd344835ef4884ee47d0', 1, 1, 0, 1, 1, 'mit_kassenrezept'),
(105, 'efd2c76f47b1a85c22c4584bcdd344835ef488967468f', 1, 1, 0, 1, 1, 'mit_kassenrezept'),
(106, 'efd2c76f47b1a85c22c4584bcdd344835ef4891f963b4', 1, 1, 0, 1, 1, 'mit_kassenrezept'),
(107, 'efd2c76f47b1a85c22c4584bcdd344835ef48c14ea535', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(108, 'efd2c76f47b1a85c22c4584bcdd344835ef48d16c117c', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(109, 'efd2c76f47b1a85c22c4584bcdd344835ef4912741ed3', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(110, 'efd2c76f47b1a85c22c4584bcdd344835ef4913e375b5', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(111, 'efd2c76f47b1a85c22c4584bcdd344835ef49155e1802', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(112, 'efd2c76f47b1a85c22c4584bcdd344835ef4917390359', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(113, 'efd2c76f47b1a85c22c4584bcdd344835ef491d354b90', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(114, 'efd2c76f47b1a85c22c4584bcdd344835ef4921e645a4', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(115, 'efd2c76f47b1a85c22c4584bcdd344835ef4923b72b98', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(116, 'efd2c76f47b1a85c22c4584bcdd344835ef492c4630aa', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(117, 'efd2c76f47b1a85c22c4584bcdd344835ef492e8e2c43', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(118, 'efd2c76f47b1a85c22c4584bcdd344835ef49329cf01d', 5, 3, 0, 1, 1, 'mit_kassenrezept'),
(119, '2409cf61da03cd0ae9116ccd84d9e55f5ef4bc7cac9ea', 1, 1, 150, 5, 35, 'selbstzahler'),
(120, '2409cf61da03cd0ae9116ccd84d9e55f5ef4bc7cac9ea', 3, 2, 0, 2, 35, 'mit_kassenrezept'),
(121, '2409cf61da03cd0ae9116ccd84d9e55f5ef4bc7cac9ea', 4, 2, 200, 2, 35, 'mit_privatrezept'),
(122, '2409cf61da03cd0ae9116ccd84d9e55f5ef4bf871879f', 1, 1, 0, 1, 35, 'mit_kassenrezept'),
(123, '2409cf61da03cd0ae9116ccd84d9e55f5ef4bf871879f', 3, 2, 0, 1, 35, 'mit_kassenrezept'),
(124, '2409cf61da03cd0ae9116ccd84d9e55f5ef4c054a3d6b', 5, 3, 0, 1, 35, 'mit_kassenrezept'),
(125, '2409cf61da03cd0ae9116ccd84d9e55f5ef4c18144506', 5, 3, 0, 1, 35, 'mit_kassenrezept'),
(146, '2409cf61da03cd0ae9116ccd84d9e55f5ef4c273d0ce4', 1, 1, 0, 1, 35, 'mit_kassenrezept');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `delivery_address_id` int(11) UNSIGNED DEFAULT NULL,
  `billing_address_id` int(11) UNSIGNED DEFAULT NULL,
  `payment_option` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `cart_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `patient_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `delivery_address_id`, `billing_address_id`, `payment_option`, `file_name`, `cart_number`, `patient_id`, `created_at`) VALUES
(34, 1, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef462cba29cf.png', 'efd2c76f47b1a85c22c4584bcdd344835ef462c296bcf', 1, '2020-06-25 10:39:36'),
(35, 1, 2, NULL, 'receipt/27f511998833392a4ba39802dbd6855a5ef46f186fd55.png', 'efd2c76f47b1a85c22c4584bcdd344835ef46f117a2d5', 1, '2020-06-25 11:32:06'),
(36, 1, 2, NULL, 'receipt/27f511998833392a4ba39802dbd6855a5ef47100820b4.png', 'efd2c76f47b1a85c22c4584bcdd344835ef470a9b8ef5', 1, '2020-06-25 11:40:14'),
(37, 1, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef47345a01fa.png', 'efd2c76f47b1a85c22c4584bcdd344835ef471348f8cf', 1, '2020-06-25 11:49:53'),
(38, 1, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef47427c30ca.png', 'efd2c76f47b1a85c22c4584bcdd344835ef47420967dd', 1, '2020-06-25 11:53:41'),
(39, 1, 2, NULL, 'receipt/27f511998833392a4ba39802dbd6855a5ef47501a7f73.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4749821309', 1, '2020-06-25 11:55:40'),
(40, 1, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef475e06ca3f.png', 'efd2c76f47b1a85c22c4584bcdd344835ef475d6a9549', 1, '2020-06-25 12:00:58'),
(41, 1, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef476f4dc356.png', 'efd2c76f47b1a85c22c4584bcdd344835ef476d11bd05', 1, '2020-06-25 12:05:38'),
(42, 2, 1, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef47792cbaec.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4778051a73', 1, '2020-06-25 12:08:08'),
(43, NULL, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef47e3b1d46f.png', 'efd2c76f47b1a85c22c4584bcdd344835ef477dbac14b', 1, '2020-06-25 12:09:42'),
(44, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef47e9422ab6.png', 'efd2c76f47b1a85c22c4584bcdd344835ef47e8dbd844', 1, '2020-06-25 12:38:10'),
(45, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef47fb98201b.png', 'efd2c76f47b1a85c22c4584bcdd344835ef47fb254170', 1, '2020-06-25 12:43:03'),
(46, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef47ff5c8577.png', 'efd2c76f47b1a85c22c4584bcdd344835ef47fecee196', 1, '2020-06-25 12:44:02'),
(47, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4839683494.png', 'efd2c76f47b1a85c22c4584bcdd344835ef480993055a', 1, '2020-06-25 12:46:52'),
(48, 2, 2, NULL, 'receipt/3fb2db6cccf4a23383383394b28b2b315ef486153e2c5.jpg', 'efd2c76f47b1a85c22c4584bcdd344835ef4860ae446a', 1, '2020-06-25 13:10:06'),
(49, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4872a9280a.png', 'efd2c76f47b1a85c22c4584bcdd344835ef48723767f1', 1, '2020-06-25 13:14:47'),
(50, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef487494ccc8.png', 'efd2c76f47b1a85c22c4584bcdd344835ef48742c5468', 1, '2020-06-25 13:15:18'),
(51, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4877f8c17a.png', 'efd2c76f47b1a85c22c4584bcdd344835ef48779116bf', 1, '2020-06-25 13:16:13'),
(52, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4885549894.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4884ee47d0', 1, '2020-06-25 13:19:47'),
(53, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4889c601bd.png', 'efd2c76f47b1a85c22c4584bcdd344835ef488967468f', 1, '2020-06-25 13:20:58'),
(54, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef48aafc272d.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4891f963b4', 1, '2020-06-25 13:23:15'),
(55, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef48c1c9b79e.png', 'efd2c76f47b1a85c22c4584bcdd344835ef48c14ea535', 1, '2020-06-25 13:35:53'),
(56, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef48d20a7398.png', 'efd2c76f47b1a85c22c4584bcdd344835ef48d16c117c', 1, '2020-06-25 13:40:14'),
(57, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4912c57eec.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4912741ed3', 1, '2020-06-25 13:57:30'),
(58, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef49144bf9b2.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4913e375b5', 1, '2020-06-25 13:57:53'),
(59, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4915d97176.png', 'efd2c76f47b1a85c22c4584bcdd344835ef49155e1802', 1, '2020-06-25 13:58:18'),
(60, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef491793e5aa.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4917390359', 1, '2020-06-25 13:58:47'),
(61, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef491d955f1f.png', 'efd2c76f47b1a85c22c4584bcdd344835ef491d354b90', 1, '2020-06-25 14:00:23'),
(62, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef492244e1e0.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4921e645a4', 1, '2020-06-25 14:01:38'),
(63, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef49241e3d17.png', 'efd2c76f47b1a85c22c4584bcdd344835ef4923b72b98', 1, '2020-06-25 14:02:07'),
(64, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef492cb67165.png', 'efd2c76f47b1a85c22c4584bcdd344835ef492c4630aa', 1, '2020-06-25 14:04:25'),
(65, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef492efd135a.png', 'efd2c76f47b1a85c22c4584bcdd344835ef492e8e2c43', 1, '2020-06-25 14:05:01'),
(66, 2, 2, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4932fc064d.png', 'efd2c76f47b1a85c22c4584bcdd344835ef49329cf01d', 1, '2020-06-25 14:06:05'),
(67, 3, NULL, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4beb55217c.png', '2409cf61da03cd0ae9116ccd84d9e55f5ef4bc7cac9ea', 35, '2020-06-25 17:11:24'),
(68, 3, 3, NULL, 'receipt/27f511998833392a4ba39802dbd6855a5ef4bf9485ba0.png', '2409cf61da03cd0ae9116ccd84d9e55f5ef4bf871879f', 35, '2020-06-25 17:15:30'),
(69, 3, 3, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4c074ed0d4.png', '2409cf61da03cd0ae9116ccd84d9e55f5ef4c054a3d6b', 35, '2020-06-25 17:19:14'),
(70, 3, 3, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4c231443f1.png', '2409cf61da03cd0ae9116ccd84d9e55f5ef4c18144506', 35, '2020-06-25 17:26:38'),
(71, 3, 3, NULL, 'receipt/4a47a0db6e60853dedfcfdf08a5ca2495ef4c2a7174f0.png', '2409cf61da03cd0ae9116ccd84d9e55f5ef4c273d0ce4', 35, '2020-06-25 17:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` tinyint(1) UNSIGNED DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `type`) VALUES
(1, 'Infusionssets', 0, 'category'),
(2, 'Reservoir', 0, 'category'),
(3, 'Zubehor', 0, 'category'),
(4, 'NEU', 0, 'tag'),
(5, 'BESTSELLER', 0, 'tag'),
(6, 'SALE', 0, 'tag');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `surname`, `email`, `message`) VALUES
(1, 'Pornima', 'Sajekar', 'pornima@corpusvision.com', 'test'),
(2, 'Pornima', 'Sajekar', 'pornima@corpusvision.com', 'dhkjhs'),
(3, 'Sameer', 'Reddi', 'sameer@gmail.com', 'ddkskjskd'),
(4, 'Sameer', 'Reddi', 'sameer@gmail.com', 'ddkskjskd'),
(5, 'sdfsd', 'fdsdf', 'pornimma@it-inserts.de', 'dfdsfds'),
(6, 'sdfghjk', 'ertyuio', 'pornima@corpusvision.com', 'rftgyuil;'),
(7, 'sdfgh', 'dfghj', 'joy@gmail.com', 'fghjk'),
(8, 'asdfgh', 'ghjk', 'sam@gmail.com', 'sdfg'),
(9, 'erty', 'sdfgh', 'p.sajol@it-inserts.de', 'sdfghjkl'),
(10, 'sdfghj', 'sdfgh', 'pornimma@it-inserts.de', 'sdfgh'),
(11, 'sdfsd', 'dfsd', 'pornimma@it-inserts.de', 'test'),
(12, 'dfgfd', 'fdgdf', 'sajekarpunam@gmail.com', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `coupon_name` varchar(55) NOT NULL,
  `coupon_description` varchar(255) NOT NULL,
  `coupon_valid_from` varchar(55) NOT NULL,
  `coupon_valid_till` varchar(55) NOT NULL,
  `coupon_discount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_description`, `coupon_valid_from`, `coupon_valid_till`, `coupon_discount`) VALUES
(2, 'TESTING33', 'discount value edited once again', '2020-06-05', '2020-07-30', 35),
(3, 'TESTING_2.0', 'testing once again', '2020-06-01', '2020-06-30', 10),
(4, 'TEST_DATE', 'valid date entry', '2020-05-23', '2020-06-23', 10);

-- --------------------------------------------------------

--
-- Table structure for table `get_patient`
--

CREATE TABLE `get_patient` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `get_patient`
--

INSERT INTO `get_patient` (`id`, `name`, `serial_number`, `first_name`, `last_name`) VALUES
(1, 'serial_number', 'VA0001', 'Vineet', 'Kashyap'),
(2, 'serial_number', 'VA0002', 'Pornima', 'Sajekar'),
(3, 'serial_number', 'VA0003', 'Ashnil ', 'Vazirani');

-- --------------------------------------------------------

--
-- Table structure for table `metatag`
--

CREATE TABLE `metatag` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `csrf_token` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `metatag`
--

INSERT INTO `metatag` (`id`, `title`, `page`, `description`, `csrf_token`, `keyword`) VALUES
(1, 'Home', 'home', 'Description', 'b4d9b87cc535d7fecdd23ccb650710d9b4a54cca95344d4961bc15211a9afdfc', 'keyword'),
(2, 'Tslim', 'tslim', 'Description', 'ae43fd0cf7378b80efaa8375593f72eafafba02f9bb4299fdfbe8741df6cb565', 'keyword'),
(3, 'Basal', 'basal', 'description', 'bccb9d6b687775fb69798423a4bacc945525ca1dd2132167465fdf1d6cdc3da2', 'keyword'),
(4, 'cgm', 'cgm', 'Description', 'bf8f9f6ecd6de54023672ef33e2d6c2871fef2bb12aa622b96537465933748ea', 'keyword'),
(5, 'Diasend', 'diasend', 'Description', '43eb0fc9de804542ae7cce123800074a461caa18383de9c501e0ef585138e82d', 'keyword'),
(6, 'Verbrauchsmaterialien', 'verbrauchsmaterialien', 'Descrription', '0c585c63c72554ea19d6c63087ae1f01e839bf7d54b1259a08c9d763dac035aa', 'keyword'),
(7, 'Vitalaire', 'vitalaire', 'Description', '88e431490485d720cf3a77801db27e8bf28b60079df49c21336b9dde48669aaa', 'keyword'),
(8, 'onlineshop', 'onlineshop', 'Description', 'ae09bcded5338ef638c2bca4fe9efc352207a33ece5a3ea3bfa816625b41bfd6', 'onlineshop'),
(9, 'Datenschutz', 'datenschutz', 'Description', '57b56411c71ba7423c2715043abaa47950052beb0fb03b51b4679e008429d753', 'Datenschutz'),
(10, 'Impressum', 'impressum', 'Description', '12fa799d9cba55ac67fcbca9b242e1dd4faae350e551c1ead0b44613f59842be', 'Impressum'),
(11, 'Cart', 'cart', 'Description', NULL, 'Keywords'),
(12, 'Checkout', 'checkout', 'Description', NULL, 'Keywords'),
(13, 'Email', 'email', 'Description', NULL, 'Keywords'),
(14, 'Email Order', 'emailorder', 'Description', NULL, 'Keywords'),
(15, 'Email Rating', 'emailrating', 'Description', NULL, 'Keywords'),
(16, 'Search', 'search', 'Description', NULL, 'Keywords'),
(17, 'Kontakt Formular', 'kontaktformular', 'Description', NULL, 'Keywords'),
(18, 'Login', 'login', 'Description', NULL, 'Keywords'),
(19, 'Kategorie', 'kategorie', 'Description', 'abb4e23bf826507f380e71c50c1925a5d1b937f107b122e609675f1c8b00fee3', 'Keywords'),
(20, 'Orders', 'orders', 'Description', NULL, 'Keywords'),
(21, 'Order Details', 'orderdetails', 'Description', NULL, 'Keywords'),
(22, 'Passwort Vergessen', 'passwortvergessen', 'Description', NULL, 'Keywords'),
(23, 'Passwort Andern', 'passwortandern', 'Description', NULL, 'Keywords'),
(24, 'Review', 'review', 'Description', NULL, 'Keywords'),
(25, 'Profile', 'profile', 'Description', NULL, 'Keywords'),
(26, 'Registrierung', 'registrierung', 'Description', NULL, 'Keywords'),
(27, 'Shop Home', 'shophome', 'Description', NULL, 'Keywords'),
(28, 'Stripe', 'stripe', 'Description', NULL, 'Keywords'),
(29, 'Tslim Onlineshop', 'tslimonlineshop', 'Description', NULL, 'Keywords'),
(30, 'Unsubscribe', 'unsubscribe', 'Description', NULL, 'Keywords');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribe`
--

CREATE TABLE `newsletter_subscribe` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `newsletter_subscribe`
--

INSERT INTO `newsletter_subscribe` (`id`, `email`, `status`, `created_at`) VALUES
(1, 'vineetsinghkashyap@gmail.com', 1, '2020-06-04 13:11:00'),
(2, 'pornima@corpusvision.com', 1, '2020-06-06 18:53:09'),
(3, 'k@gmail.com', 1, '2020-06-06 18:53:31'),
(4, 'samith@gmvsdg', 1, '2020-06-25 15:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) UNSIGNED NOT NULL,
  `cart_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `patient_id` int(11) UNSIGNED DEFAULT NULL,
  `cartdetail_id` int(11) UNSIGNED DEFAULT NULL,
  `order_no` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `cart_number`, `patient_id`, `cartdetail_id`, `order_no`, `amount`, `discount`, `vat`, `status`, `created_at`) VALUES
(34, 'efd2c76f47b1a85c22c4584bcdd344835ef462c296bcf', 1, 34, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(35, 'efd2c76f47b1a85c22c4584bcdd344835ef46f117a2d5', 1, 35, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(36, 'efd2c76f47b1a85c22c4584bcdd344835ef470a9b8ef5', 1, 36, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(37, 'efd2c76f47b1a85c22c4584bcdd344835ef471348f8cf', 1, 37, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(38, 'efd2c76f47b1a85c22c4584bcdd344835ef47420967dd', 1, 38, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(39, 'efd2c76f47b1a85c22c4584bcdd344835ef4749821309', 1, 39, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(40, 'efd2c76f47b1a85c22c4584bcdd344835ef475d6a9549', 1, 40, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(41, 'efd2c76f47b1a85c22c4584bcdd344835ef476d11bd05', 1, 41, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(42, 'efd2c76f47b1a85c22c4584bcdd344835ef4778051a73', 1, 42, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(43, 'efd2c76f47b1a85c22c4584bcdd344835ef477dbac14b', 1, 43, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(44, 'efd2c76f47b1a85c22c4584bcdd344835ef47e8dbd844', 1, 44, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(45, 'efd2c76f47b1a85c22c4584bcdd344835ef47fb254170', 1, 45, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(46, 'efd2c76f47b1a85c22c4584bcdd344835ef47fecee196', 1, 46, 'joy@gmail.com', '34,80 ', '0,00', '4,80 ', 0, '2020-06-25 00:00:00'),
(47, 'efd2c76f47b1a85c22c4584bcdd344835ef480993055a', 1, 47, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(48, 'efd2c76f47b1a85c22c4584bcdd344835ef4860ae446a', 1, 48, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(49, 'efd2c76f47b1a85c22c4584bcdd344835ef48723767f1', 1, 49, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(50, 'efd2c76f47b1a85c22c4584bcdd344835ef48742c5468', 1, 50, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(51, 'efd2c76f47b1a85c22c4584bcdd344835ef48779116bf', 1, 51, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(52, 'efd2c76f47b1a85c22c4584bcdd344835ef4884ee47d0', 1, 52, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(53, 'efd2c76f47b1a85c22c4584bcdd344835ef488967468f', 1, 53, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(54, 'efd2c76f47b1a85c22c4584bcdd344835ef4891f963b4', 1, 54, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(55, 'efd2c76f47b1a85c22c4584bcdd344835ef48c14ea535', 1, 55, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(56, 'efd2c76f47b1a85c22c4584bcdd344835ef48d16c117c', 1, 56, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(57, 'efd2c76f47b1a85c22c4584bcdd344835ef4912741ed3', 1, 57, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(58, 'efd2c76f47b1a85c22c4584bcdd344835ef4913e375b5', 1, 58, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(59, 'efd2c76f47b1a85c22c4584bcdd344835ef49155e1802', 1, 59, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(60, 'efd2c76f47b1a85c22c4584bcdd344835ef4917390359', 1, 60, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(61, 'efd2c76f47b1a85c22c4584bcdd344835ef491d354b90', 1, 61, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(62, 'efd2c76f47b1a85c22c4584bcdd344835ef4921e645a4', 1, 62, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(63, 'efd2c76f47b1a85c22c4584bcdd344835ef4923b72b98', 1, 63, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(64, 'efd2c76f47b1a85c22c4584bcdd344835ef492c4630aa', 1, 64, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(65, 'efd2c76f47b1a85c22c4584bcdd344835ef492e8e2c43', 1, 65, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(66, 'efd2c76f47b1a85c22c4584bcdd344835ef49329cf01d', 1, 66, 'joy@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(67, '2409cf61da03cd0ae9116ccd84d9e55f5ef4bc7cac9ea', 35, 67, 'samith.twitch@gmail.com', '263,90 ', '122,50 ', '36,40 ', 0, '2020-06-25 00:00:00'),
(68, '2409cf61da03cd0ae9116ccd84d9e55f5ef4bf871879f', 35, 68, 'samith.twitch@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(69, '2409cf61da03cd0ae9116ccd84d9e55f5ef4c054a3d6b', 35, 69, 'samith.twitch@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00'),
(70, '2409cf61da03cd0ae9116ccd84d9e55f5ef4c18144506', 35, 70, 'samith.twitch@gmail.com', '0,00 ', '0,00', '0,00 ', 0, '2020-06-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) UNSIGNED NOT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `speech` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `landline` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` double DEFAULT NULL,
  `insurance_type` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `cart_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `order_status` int(11) UNSIGNED DEFAULT NULL,
  `status` int(11) UNSIGNED DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `hash` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `titel` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `serial_number`, `speech`, `firstname`, `surname`, `dob`, `landline`, `mobile`, `insurance_type`, `email`, `password`, `cart_number`, `order_status`, `status`, `profile_img`, `hash`, `titel`) VALUES
(1, 'US4546575', 'Mr', 'Joy', 'Gripson', '1999-06-04', '4565475756', 6876987988, 'Legal', 'joy@gmail.com', '202cb962ac59075b964b07152d234b70', '', 0, 1, 'profile/19a6a9085bc66dde26a8720afef6f8925ee76ae91d720.png', NULL, NULL),
(2, 'US654567', 'Mr', 'Sam', 'Das', '1999-06-03', '7657567565', 67657657657, 'Legal', 'sam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 1, NULL, NULL, NULL),
(6, 'US75894787', 'Mr', 'gdfgf', 'ghjh', '2020-06-06', '655676576', 687687989, 'Legal', 'p.sajol@it-inserts.de', '202cb962ac59075b964b07152d234b70', NULL, 0, 1, NULL, NULL, NULL),
(30, 'VA0001', 'Mr', 'Vineet', 'Kashyap', NULL, '33', 9234586948, 'Legal', 'samith.shetty3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '6cf1b05f10f24f61493977dc14580cdc5ef33348a13cf', 1, 1, NULL, '9936e3c99ba97fcc1b1de11fe13e49f394425ac6c945c8974b3cf206a55534ce', NULL),
(35, 'VA0002', 'Mrs', 'Pornima', 'Sajekar', '0000-00-00', '45454554', 5454554554, 'Legal', 'samith.twitch@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2409cf61da03cd0ae9116ccd84d9e55f5ef4c273d0ce4', 1, 1, NULL, '', NULL),
(36, 'VA0003', 'Mr', 'Ashnil ', 'Vazirani', '4555-05-04', '252565141', 4541526, 'Legal', 'ashmit7509@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 1, NULL, '7dcc7bc15122e0bce134b5f8c36e223ad11c4460534fe8bf89a045b303059e0d', 'Dr.');

-- --------------------------------------------------------

--
-- Table structure for table `patient_billing_address`
--

CREATE TABLE `patient_billing_address` (
  `id` int(11) UNSIGNED NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `house_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `postcode` int(11) UNSIGNED DEFAULT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `patient_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `preference` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `patient_billing_address`
--

INSERT INTO `patient_billing_address` (`id`, `street`, `house_number`, `postcode`, `place`, `patient_id`, `created_at`, `preference`) VALUES
(1, 'Herrn Dieter Wellhausen', 'Herrn Dieter Wellhausen', 11179, 'Germany', 1, '2020-06-16 07:09:35', 0),
(2, 'Feldstrasse 30', 'Feldstrasse 30', 13353, 'Germany', 1, '2020-06-16 07:10:12', 1),
(3, 'hihi', '123', 1245, 'CHINA GANG', 35, '2020-06-25 17:10:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_caretaker`
--

CREATE TABLE `patient_caretaker` (
  `id` int(11) UNSIGNED NOT NULL,
  `patient_id` int(11) UNSIGNED DEFAULT NULL,
  `caretaker_speech` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `caretaker_firstname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `caretaker_lastname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `caretaker_dob` date DEFAULT NULL,
  `caretaker_email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `caretaker_titel` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `patient_caretaker`
--

INSERT INTO `patient_caretaker` (`id`, `patient_id`, `caretaker_speech`, `caretaker_firstname`, `caretaker_lastname`, `caretaker_dob`, `caretaker_email`, `caretaker_titel`) VALUES
(1, 2, 'Mr', 'johan', 'Das', '2007-06-12', 'johan@gmail.com', NULL),
(2, 36, 'Mr', 'Samieesz', 'Shatei', '1521-05-04', 'ashmit7509@gmail.com', 'Dr.');

-- --------------------------------------------------------

--
-- Table structure for table `patient_csv`
--

CREATE TABLE `patient_csv` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_csv`
--

INSERT INTO `patient_csv` (`id`, `name`, `file_name`, `created_at`) VALUES
(1, 'serial_number', '637ae347499d4e653cf8ad4206f127545ef204b745d5f.csv', '2020-06-23 15:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `patient_delivery_address`
--

CREATE TABLE `patient_delivery_address` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `house_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `postcode` int(11) UNSIGNED DEFAULT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `patient_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `preference` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `patient_delivery_address`
--

INSERT INTO `patient_delivery_address` (`id`, `title`, `firstname`, `lastname`, `company_name`, `street`, `house_number`, `postcode`, `place`, `patient_id`, `created_at`, `preference`) VALUES
(1, 'Mr', 'Joy', 'Gripson', 'it-inserts', 'G.M Road', 'ABC123', 81929, 'Germany', 1, '2020-06-15 16:15:54', 0),
(2, 'Mr', 'San', 'Gripson', 'it-inserts', 'test', 'test', 81929, 'Germany', 1, '2020-06-15 16:17:47', 1),
(3, 'Mrs', 'Pornima', 'Sajekar', 'It in', '145', '5689', 4789456, 'CHina GANG', 35, '2020-06-25 17:04:27', 1),
(4, 'Mrs', 'BHhsdhsd', 'hxahfdsh', 'jzjfdsajf', 'jhfjsdajf', 'ds', 2222, 'CHINA GANG', 35, '2020-06-25 17:11:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) UNSIGNED NOT NULL,
  `csrf_token` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `csrf_token`, `name`, `file_name`, `created_at`) VALUES
(5, '8c38eda47c5f8e69b10fbec71f47be41a63ea9bc12ef56712e9316b494092e2f', 'File1', 'pdf/069741a92a2f641eb428ba6d12ccb9af5edbbc1f75a5a.pdf', '2020-06-06 17:54:07'),
(6, '8046bb052f757b3e504ddfbbd637827f1223f557b3b1526fb3be14f856d5cd05', 'File2', 'pdf/c97fa026fe3e9a8a91af7784f65866e15edbbc3fa231a.pdf', '2020-06-06 17:54:39'),
(7, 'ff0b76bcc8f3c21c025f67b51bac69ed6cf1dc7ecc65a70e69111a3c73da0751', 'File3', 'pdf/d9a3a4f56a79e313195ed035c3a0e5db5edbbc4bf2d09.pdf', '2020-06-06 17:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `item_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `manufacturer` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` int(11) UNSIGNED DEFAULT NULL,
  `article_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `tag_id` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `csrf_token` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `average_rating` int(11) NOT NULL DEFAULT 0,
  `title` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `item_number`, `manufacturer`, `status`, `article_name`, `product_description`, `tag_id`, `created_at`, `csrf_token`, `image`, `average_rating`, `title`, `description`, `keyword`, `profile_img`) VALUES
(1, 1, 'DIA03', 'Manufacturer', 0, 'AutoSoft-90-infusion-set', '      All-in-one infusion set with 90 ° soft cannula • Integrated automatic insertion aid • Infusion tubing can be disconnected from the cannula • Different cannula and tubing lengths and in three different colors • Transparent viewing window at the puncture site • Large grip area on the tubing connector for easy detachment\r\n\r\n \r\n \r\n \r\n \r\n \r\n ', '4', '2020-06-03 08:01:19', NULL, 'product/19a6a9085bc66dde26a8720afef6f8925ee9d7e4ba985.png', 0, 'AutoSoft-90-infusion-set', 'Description', 'keyword', NULL),
(2, 1, 'DIA01', 'Company', 0, 'Disc', '   All-in-one infusion set with 90 ° soft cannula • Integrated automatic insertion aid • Infusion tubing can be disconnected from the cannula • Different cannula and tubing lengths and in three different colors • Transparent viewing window at the puncture site • Large grip area on the tubing connector for easy detachment\r\n\r\n \r\n \r\n ', '4', '2020-06-03 08:07:04', NULL, 'product/19a6a9085bc66dde26a8720afef6f8925edcc046c203b.png', 0, 'Disc', 'Description', 'keyword', NULL),
(3, 2, 'cxcx', 'Company', 0, 'test', ' gfghgvghjvh\r\n', '6', '2020-06-04 14:09:31', NULL, 'product/19a6a9085bc66dde26a8720afef6f8925edcc0540b9ad.png', 0, 'test', 'Description', 'keyword', NULL),
(11, 1, 'sadas', 'sadasd', 0, 'sdasd', '   sdsad\r\n \r\n \r\n ', '4', '2020-06-15 11:22:37', NULL, 'product/19a6a9085bc66dde26a8720afef6f8925eec8a625b4db.png', 0, 'sdasd', 'Description', 'keyword', NULL),
(12, 1, 'fdgdfg', 'fgdfg', 0, 'fgfdg', '    fdgfdg\r\n \r\n \r\n \r\n ', '4', '2020-06-15 12:20:50', NULL, 'product/19a6a9085bc66dde26a8720afef6f8925eec8a8010738.png', 0, 'fgfdg', 'Description', 'Keyword', 'product/1592216383.png'),
(13, 1, 'cxcx', 'test', 0, 'dfsdf', '  Description\r\n \r\n ', '5', '2020-06-17 10:51:11', NULL, 'product/19a6a9085bc66dde26a8720afef6f8925ee9d97fed0ba.png', 0, 'dfsdf', 'Description', 'keyword', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED DEFAULT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `filename`) VALUES
(1, 1, 'product/c1b8260a86b6c9942d107eca3c57ce3f5ed73cb1ae27f.png'),
(2, 1, 'product/9c8e1067226c78de1c0b449b655a7cb45ed73cb1b0d5c.png'),
(3, 2, 'product/05c601cd2c8b1cbfc34220fac2607db55ed73e08a42c7.png'),
(4, 2, 'product/10d634f21976ea9db30913635d4294135ed73e08a5c4a.png'),
(5, 2, 'product/27505a21a5034740d2844353e61460425ed73e08a6bc2.png'),
(8, NULL, 'product/a5984e83e8b5bb745a4c618d9200d5e75edbc7fd208cc.JPG'),
(9, NULL, 'product/894e86042e53c787f66dc1ec076e640c5edbc7fd2e04b.JPG'),
(10, NULL, 'product/7fdc1a630c238af0815181f9faa190f55edcf08e9f85c.jpg'),
(11, NULL, 'product/1e6ae4ada992769567b71815f124fac55edcf08ea1297.jpg'),
(12, NULL, 'product/90093599af8fe9f26c614cc48f27e7b55edd11d9c3be8.png'),
(14, 3, 'product/3f6c0a8e771571376817bdb07b7b2c545edd3821c11c0.png'),
(15, 3, 'product/40d9c6d3ded94de76df31e842890f49f5edd3821f2e09.png'),
(29, 11, 'product/1592560886.jpg'),
(30, 12, 'product/1592560922.jpg'),
(31, 13, 'product/1592560935.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_video`
--

CREATE TABLE `product_video` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `product_video`
--

INSERT INTO `product_video` (`id`, `product_id`, `video_url`) VALUES
(1, 1, 'http://youtube.com'),
(2, 1, 'http://youtube1.com'),
(3, 2, 'http://google.com'),
(4, 3, 'http://google.com'),
(5, NULL, 'http://youtube1.com'),
(6, NULL, 'http://google.com'),
(7, NULL, 'http://youtube1.com'),
(8, 11, 'http://youtube.com'),
(9, 13, 'http://youtube1.com'),
(10, 13, 'http://youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) UNSIGNED NOT NULL,
  `ratings` tinyint(1) UNSIGNED DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `product_id` int(11) UNSIGNED DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `radio1` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) UNSIGNED NOT NULL,
  `sessionid` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `hash` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `session_data` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `session_expire` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `sessionid`, `hash`, `session_data`, `session_expire`) VALUES
(1, '27ngnu11v1h19ogr9rngqo91jp', '76d12f0d439d00ce508e816bb25f229d', 'status|s:35:\"Datensatz erfolgreich aktualisiert.\";user_id|s:1:\"1\";', 1591006803),
(2, 'cju8uo2salqjt35v5hh223kiuq', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";status|s:31:\"Datensatz erfolgreich erstellt.\";', 1591011441),
(3, 'a5u77ip7ns1ol4mdc79j56n5gt', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591026560),
(4, 'fc0riaj2ju1845raj8u64sv4q5', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"095ebdafcbb74aa66d617d718bcbd66f4cc55284406487c54f4d136ca44cae27\";', 1591106974),
(5, '7t082u2fj4nuuocfcbvpg92pjh', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"39da8e14fc449937e49765a5bfdab074d3ec74b4884bf8616a0a730210625de3\";', 1591180274),
(6, 'omr18134p0pt4c6oik7rhj116c', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";subproduct|a:4:{i:1;O:19:\"RedBeanPHP\\OODBBean\":10:{s:13:\"\0*\0properties\";a:22:{s:2:\"id\";s:1:\"1\";s:10:\"csrf_token\";s:64:\"cc7924b8a86ad21ce17d483c598065859fca95798be8a32ea7f3a9eb5055265f\";s:10:\"product_id\";s:1:\"1\";s:11:\"item_number\";s:10:\"DIA03-0002\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:30:\"AutoSoft 90 6 mm / 60 cm, gray\";s:5:\"price\";s:2:\"30\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"6\";s:12:\"house_length\";s:2:\"60\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:9:\"\0*\0__info\";a:7:{s:4:\"type\";s:11:\"sub_product\";s:6:\"sys.id\";s:2:\"id\";s:8:\"sys.orig\";a:22:{s:2:\"id\";s:1:\"1\";s:10:\"csrf_token\";s:64:\"cc7924b8a86ad21ce17d483c598065859fca95798be8a32ea7f3a9eb5055265f\";s:10:\"product_id\";s:1:\"1\";s:11:\"item_number\";s:10:\"DIA03-0002\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:30:\"AutoSoft 90 6 mm / 60 cm, gray\";s:5:\"price\";s:2:\"30\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"6\";s:12:\"house_length\";s:2:\"60\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:7:\"tainted\";b:0;s:7:\"changed\";b:0;s:10:\"changelist\";a:0:{}s:5:\"model\";N;}s:13:\"\0*\0beanHelper\";O:44:\"RedBeanPHP\\BeanHelper\\SimpleFacadeBeanHelper\":0:{}s:12:\"\0*\0fetchType\";N;s:10:\"\0*\0withSql\";s:0:\"\";s:13:\"\0*\0withParams\";a:0:{}s:12:\"\0*\0aliasName\";N;s:6:\"\0*\0via\";N;s:9:\"\0*\0noLoad\";b:0;s:6:\"\0*\0all\";b:0;}i:2;O:19:\"RedBeanPHP\\OODBBean\":10:{s:13:\"\0*\0properties\";a:22:{s:2:\"id\";s:1:\"2\";s:10:\"csrf_token\";s:64:\"0b1b59e941e18c97af619af958826ed0f0cf371dccfb9be4a042188c87d5da38\";s:10:\"product_id\";s:1:\"1\";s:11:\"item_number\";s:10:\"DIA03-0003\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:31:\"AutoSoft 90 6 mm / 110 cm, gray\";s:5:\"price\";s:2:\"50\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"6\";s:12:\"house_length\";s:3:\"110\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:9:\"\0*\0__info\";a:7:{s:4:\"type\";s:11:\"sub_product\";s:6:\"sys.id\";s:2:\"id\";s:8:\"sys.orig\";a:22:{s:2:\"id\";s:1:\"2\";s:10:\"csrf_token\";s:64:\"0b1b59e941e18c97af619af958826ed0f0cf371dccfb9be4a042188c87d5da38\";s:10:\"product_id\";s:1:\"1\";s:11:\"item_number\";s:10:\"DIA03-0003\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:31:\"AutoSoft 90 6 mm / 110 cm, gray\";s:5:\"price\";s:2:\"50\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"6\";s:12:\"house_length\";s:3:\"110\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:7:\"tainted\";b:0;s:7:\"changed\";b:0;s:10:\"changelist\";a:0:{}s:5:\"model\";N;}s:13:\"\0*\0beanHelper\";r:57;s:12:\"\0*\0fetchType\";N;s:10:\"\0*\0withSql\";s:0:\"\";s:13:\"\0*\0withParams\";a:0:{}s:12:\"\0*\0aliasName\";N;s:6:\"\0*\0via\";N;s:9:\"\0*\0noLoad\";b:0;s:6:\"\0*\0all\";b:0;}i:3;O:19:\"RedBeanPHP\\OODBBean\":10:{s:13:\"\0*\0properties\";a:22:{s:2:\"id\";s:1:\"3\";s:10:\"csrf_token\";s:64:\"980b2a74eb44db49e5b44b3b0d4a18b3945d7ad0f0d52d483d386b9f5742ad26\";s:10:\"product_id\";s:1:\"2\";s:11:\"item_number\";s:9:\"DIA01-001\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:23:\"Disc 9 mm / 60 cm, gray\";s:5:\"price\";s:3:\"200\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"9\";s:12:\"house_length\";s:2:\"60\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:9:\"\0*\0__info\";a:7:{s:4:\"type\";s:11:\"sub_product\";s:6:\"sys.id\";s:2:\"id\";s:8:\"sys.orig\";a:22:{s:2:\"id\";s:1:\"3\";s:10:\"csrf_token\";s:64:\"980b2a74eb44db49e5b44b3b0d4a18b3945d7ad0f0d52d483d386b9f5742ad26\";s:10:\"product_id\";s:1:\"2\";s:11:\"item_number\";s:9:\"DIA01-001\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:23:\"Disc 9 mm / 60 cm, gray\";s:5:\"price\";s:3:\"200\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"9\";s:12:\"house_length\";s:2:\"60\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:7:\"tainted\";b:0;s:7:\"changed\";b:0;s:10:\"changelist\";a:0:{}s:5:\"model\";N;}s:13:\"\0*\0beanHelper\";r:57;s:12:\"\0*\0fetchType\";N;s:10:\"\0*\0withSql\";s:0:\"\";s:13:\"\0*\0withParams\";a:0:{}s:12:\"\0*\0aliasName\";N;s:6:\"\0*\0via\";N;s:9:\"\0*\0noLoad\";b:0;s:6:\"\0*\0all\";b:0;}i:4;O:19:\"RedBeanPHP\\OODBBean\":10:{s:13:\"\0*\0properties\";a:22:{s:2:\"id\";s:1:\"4\";s:10:\"csrf_token\";s:64:\"ab99cd2007b5d9adcb0e9872ac29d50625970fd4f5359497c59b5253a409ccd3\";s:10:\"product_id\";s:1:\"2\";s:11:\"item_number\";s:9:\"DIA01-002\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:23:\"DISC 5 mm / 70 cm, pink\";s:5:\"price\";s:3:\"100\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"5\";s:12:\"house_length\";s:2:\"70\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:9:\"\0*\0__info\";a:7:{s:4:\"type\";s:11:\"sub_product\";s:6:\"sys.id\";s:2:\"id\";s:8:\"sys.orig\";a:22:{s:2:\"id\";s:1:\"4\";s:10:\"csrf_token\";s:64:\"ab99cd2007b5d9adcb0e9872ac29d50625970fd4f5359497c59b5253a409ccd3\";s:10:\"product_id\";s:1:\"2\";s:11:\"item_number\";s:9:\"DIA01-002\";s:6:\"status\";s:1:\"0\";s:12:\"article_name\";s:23:\"DISC 5 mm / 70 cm, pink\";s:5:\"price\";s:3:\"100\";s:3:\"vat\";s:2:\"19\";s:18:\"delivery_time_days\";s:1:\"5\";s:9:\"inventory\";s:4:\"1000\";s:12:\"release_date\";s:10:\"2020-06-03\";s:12:\"posting_date\";s:10:\"2020-06-30\";s:15:\"min_stock_level\";s:2:\"50\";s:11:\"pseudo_sale\";s:1:\"0\";s:12:\"min_purchase\";s:1:\"1\";s:12:\"max_purchase\";s:2:\"10\";s:17:\"scope_of_delivery\";s:2:\"10\";s:6:\"weight\";s:3:\"100\";s:13:\"free_shipping\";s:1:\"1\";s:14:\"cannula_length\";s:1:\"5\";s:12:\"house_length\";s:2:\"70\";s:22:\"filling_volume_cannula\";s:1:\"7\";}s:7:\"tainted\";b:0;s:7:\"changed\";b:0;s:10:\"changelist\";a:0:{}s:5:\"model\";N;}s:13:\"\0*\0beanHelper\";r:57;s:12:\"\0*\0fetchType\";N;s:10:\"\0*\0withSql\";s:0:\"\";s:13:\"\0*\0withParams\";a:0:{}s:12:\"\0*\0aliasName\";N;s:6:\"\0*\0via\";N;s:9:\"\0*\0noLoad\";b:0;s:6:\"\0*\0all\";b:0;}}product_images|a:2:{i:1;O:19:\"RedBeanPHP\\OODBBean\":10:{s:13:\"\0*\0properties\";a:3:{s:2:\"id\";s:1:\"1\";s:10:\"product_id\";s:1:\"1\";s:8:\"filename\";s:57:\"product/c1b8260a86b6c9942d107eca3c57ce3f5ed73cb1ae27f.png\";}s:9:\"\0*\0__info\";a:7:{s:4:\"type\";s:13:\"product_image\";s:6:\"sys.id\";s:2:\"id\";s:8:\"sys.orig\";a:3:{s:2:\"id\";s:1:\"1\";s:10:\"product_id\";s:1:\"1\";s:8:\"filename\";s:57:\"product/c1b8260a86b6c9942d107eca3c57ce3f5ed73cb1ae27f.png\";}s:7:\"tainted\";b:0;s:7:\"changed\";b:0;s:10:\"changelist\";a:0:{}s:5:\"model\";N;}s:13:\"\0*\0beanHelper\";r:57;s:12:\"\0*\0fetchType\";N;s:10:\"\0*\0withSql\";s:0:\"\";s:13:\"\0*\0withParams\";a:0:{}s:12:\"\0*\0aliasName\";N;s:6:\"\0*\0via\";N;s:9:\"\0*\0noLoad\";b:0;s:6:\"\0*\0all\";b:0;}i:3;O:19:\"RedBeanPHP\\OODBBean\":10:{s:13:\"\0*\0properties\";a:3:{s:2:\"id\";s:1:\"3\";s:10:\"product_id\";s:1:\"2\";s:8:\"filename\";s:57:\"product/05c601cd2c8b1cbfc34220fac2607db55ed73e08a42c7.png\";}s:9:\"\0*\0__info\";a:7:{s:4:\"type\";s:13:\"product_image\";s:6:\"sys.id\";s:2:\"id\";s:8:\"sys.orig\";a:3:{s:2:\"id\";s:1:\"3\";s:10:\"product_id\";s:1:\"2\";s:8:\"filename\";s:57:\"product/05c601cd2c8b1cbfc34220fac2607db55ed73e08a42c7.png\";}s:7:\"tainted\";b:0;s:7:\"changed\";b:0;s:10:\"changelist\";a:0:{}s:5:\"model\";N;}s:13:\"\0*\0beanHelper\";r:57;s:12:\"\0*\0fetchType\";N;s:10:\"\0*\0withSql\";s:0:\"\";s:13:\"\0*\0withParams\";a:0:{}s:12:\"\0*\0aliasName\";N;s:6:\"\0*\0via\";N;s:9:\"\0*\0noLoad\";b:0;s:6:\"\0*\0all\";b:0;}}csrf_token|s:64:\"d3a3c789dc54407b5504bd5dc8543486bb1aba12d7c125b8fe4d2ca91b85b5c1\";', 1591183259),
(7, 'icq94sj1k1mu5a59l3sdnvh6sv', '76d12f0d439d00ce508e816bb25f229d', '', 1591183291),
(8, '2ktfg6f18h6gp6v3t4fl28i28c', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"6a26d58d814166516d3e44530a2ed83fa8bc2bf3e788f4c4b5b665caed7875ad\";', 1591189484),
(9, 'kpib3kg47mgb13dc58skb1970i', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"38fc8d44071e4ddecec4a4a90fb4e8282967647380796d8a4854103460f4c817\";', 1591209481),
(10, '6eq1ln0gf47l18snl9nqh027l8', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"9001a2437cbf84579533b7c6c1636f241fb95714d46113824e9a50b396fa3ddc\";', 1591211374),
(11, 'a7l8sjjv1qq4qerbec9d8kd82a', '76d12f0d439d00ce508e816bb25f229d', 'status|s:35:\"Datensatz erfolgreich aktualisiert.\";', 1591212556),
(12, 'l7tceeo6gmqtdlht0ce78hos7m', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"1f36d862017ae1916865e5d60b788ba53556d4a5713ec6ed1777ffa80e14341c\";', 1591252133),
(13, 'jlv6mv2347cin35i69on3adroe', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"e68b0f5cfe2f69326a2c3bb23d76c2f13e1105ec531b47b1314ed1d685709e5f\";', 1591258174),
(14, 'u3e6v5uqntg8b0gr3l269o3n5h', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591265805),
(15, '7tefgndf7plm62478jce2102j0', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591266769),
(16, '7o4d7cohe96vgghbo33on3vtb2', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"4eb3fb70868ae6cec918b7f0052367f0b4a735c448119a1da737342906b11a8b\";', 1591269601),
(17, '8kr0u4i1ikqhndj27doiergsr1', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591270254),
(18, 's4m3nth9gmica1bas8jt3kcvkg', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"4c2c5dd891428414c37a0031ec7c4f4b7edfaec2f936a4697f9485af753da31e\";status|s:35:\"Datensatz erfolgreich aktualisiert.\";', 1591273736),
(19, 'g84rtddelkj1au6igs8t2bsqkl', '76d12f0d439d00ce508e816bb25f229d', '', 1591273745),
(20, '39dud9m0k4ruj9lrj02qofi35m', '76d12f0d439d00ce508e816bb25f229d', 'csrf_token|s:64:\"001d2d5f8b2131cc4ff129cb690fa937ef5f1a4f902cf31f360865ef516ee204\";user_id|s:1:\"6\";', 1591281541),
(21, 'ip6dtd9pgicnnsr7vv034emoar', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"654ae2ec681e7fe017bbf4fdda0622351f021d3c65bd4479cfedf648e69b46c6\";', 1591358683),
(22, 'drh9fsv22lonfp89tk537ae43n', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"2c4bb5193e1138211e4b480e3f9f55bd8ee73b5a4f4a9752ac56b380aa7f1e51\";', 1591368956),
(23, 'hgnbk2eufvd8ufrasm2pe2fpvh', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591358876),
(24, 'vnuq1bj72rlapu1mmnpp5ivcog', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";csrf_token|s:64:\"65da2269067efc074dcb55979fa8b86ac240d4affe16c750b906db013e463c96\";', 1591371756),
(25, 'c45t46joo3p7qjvvilo6qocu40', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591454807),
(26, '3lfaifcbh3l0vsr4paod3m14uv', '76d12f0d439d00ce508e816bb25f229d', '', 1591454839),
(27, 'ob5e2a6pr4ts0ilrua3mcp5079', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591468978),
(28, '0culsa39qfm2lom9k6mh4m8cmv', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591558167),
(29, 'iqbc7qm24pjvl4hroi9vnlnag6', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591551097),
(30, 'g3e4qgt0h9iepsoas34kvfnp1m', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591551123),
(32, '23f9tg7v1aooq5kig6ubiloq1r', '76d12f0d439d00ce508e816bb25f229d', '', 1591551569),
(34, 'prupop28aoj6kpf2aupq9mhbid', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591553881),
(35, 'pbaooq8jaks83kk995jkf7ufan', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591614881),
(38, 'vu37ui7rnmpe1r9496t5hmidtt', '76d12f0d439d00ce508e816bb25f229d', 'user_id|s:1:\"1\";', 1591692897),
(39, 'hlki1janujcqbqei4klqbfta2u', '76d12f0d439d00ce508e816bb25f229d', '', 1591706037),
(40, 'g24b5enpo38c4h89i0rv2hj554', '5955e588f57172967eabbd2ef67e9b62', '', 1591803946),
(41, 'vpcf1akf2f408n7p8e37nlpl34', '5955e588f57172967eabbd2ef67e9b62', '', 1591805302),
(45, '36kdhs08u451e1gpp3hrjgk410', '5955e588f57172967eabbd2ef67e9b62', '', 1591887866),
(46, 'lnad0fu0e078f1mnmfdpg0sk21', '5955e588f57172967eabbd2ef67e9b62', 'user_id|s:1:\"1\";', 1591973928),
(48, 'reh15kvclf92por65drtjfnfi5', '5955e588f57172967eabbd2ef67e9b62', 'user_id|s:1:\"1\";csrf_token|s:64:\"2a1f00747cf3baeacd27f5ffab97f3954c53a03e593cf56dc1c5c53717aa0d24\";', 1592232323),
(54, '6vqbmb0pgmovp91dr2tj6egt6r', '5955e588f57172967eabbd2ef67e9b62', 'user_id|s:1:\"1\";admin_id|s:1:\"1\";', 1592308997),
(60, 'uta3bjhr2vtpe2b1s4im6u91e8', '63022da58e1c241d808fd344e8575cc7', 'status|s:45:\"Sie haben das Passwort erfolgreich geändert.\";user_id|s:1:\"1\";', 1592401878),
(67, 'l1jo69718q34qn49f1j56fa055', '63022da58e1c241d808fd344e8575cc7', 'user_id|s:1:\"1\";', 1592494629),
(70, 'bbh83sdh5fe1bma2ilrark9p8i', '63022da58e1c241d808fd344e8575cc7', 'user_id|s:1:\"1\";status|s:35:\"Datensatz erfolgreich aktualisiert.\";', 1592555433),
(72, 'ome0f8a4jsq281k0e46kvlquhd', 'da39fe4d33fe5b723555494ef8e0ad68', '', 1593097251),
(77, 'gjcc40e5kt3pk9h2t524ofcicv', '63022da58e1c241d808fd344e8575cc7', '', 1592951382),
(79, 'ako7gb363kdvj8d7o3hhlbr8j7', '63022da58e1c241d808fd344e8575cc7', '', 1593010963),
(81, 'mq0e77mcgmcckij73v76pkd56s', '63022da58e1c241d808fd344e8575cc7', 'user_id|s:1:\"1\";', 1593038024),
(82, 'is02cto6rhig0nva4viutaf894', 'b921e2be217c9307db161fbbc7f4318e', 'user_id|s:1:\"1\";', 1593085475),
(87, '3jqb012fsb448iuhb6k4jfqgi9', 'b921e2be217c9307db161fbbc7f4318e', '', 1593102086);

-- --------------------------------------------------------

--
-- Table structure for table `sub_product`
--

CREATE TABLE `sub_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `csrf_token` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_id` int(11) UNSIGNED DEFAULT NULL,
  `item_number` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` int(11) UNSIGNED DEFAULT NULL,
  `article_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `price` int(11) UNSIGNED DEFAULT NULL,
  `vat` int(11) UNSIGNED DEFAULT NULL,
  `delivery_time_days` int(11) UNSIGNED DEFAULT NULL,
  `inventory` int(11) UNSIGNED DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `posting_date` date DEFAULT NULL,
  `min_stock_level` int(11) UNSIGNED DEFAULT NULL,
  `pseudo_sale` tinyint(1) UNSIGNED DEFAULT NULL,
  `min_purchase` int(11) UNSIGNED DEFAULT NULL,
  `max_purchase` int(11) UNSIGNED DEFAULT NULL,
  `scope_of_delivery` int(11) UNSIGNED DEFAULT NULL,
  `weight` int(11) UNSIGNED DEFAULT NULL,
  `free_shipping` tinyint(1) UNSIGNED DEFAULT NULL,
  `cannula_length` int(11) UNSIGNED DEFAULT NULL,
  `house_length` int(11) UNSIGNED DEFAULT NULL,
  `filling_volume_cannula` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `sub_product`
--

INSERT INTO `sub_product` (`id`, `csrf_token`, `product_id`, `item_number`, `status`, `article_name`, `price`, `vat`, `delivery_time_days`, `inventory`, `release_date`, `posting_date`, `min_stock_level`, `pseudo_sale`, `min_purchase`, `max_purchase`, `scope_of_delivery`, `weight`, `free_shipping`, `cannula_length`, `house_length`, `filling_volume_cannula`) VALUES
(1, 'cc7924b8a86ad21ce17d483c598065859fca95798be8a32ea7f3a9eb5055265f', 1, 'DIA03-0002', 0, 'AutoSoft 90 6 mm / 60 cm, gray', 30, 19, 5, 962, '2020-06-03', '2020-06-30', 50, 0, 1, 10, 10, 100, 1, 6, 60, 7),
(2, '0b1b59e941e18c97af619af958826ed0f0cf371dccfb9be4a042188c87d5da38', 1, 'DIA03-0003', 0, 'AutoSoft 90 6 mm / 110 cm, gray', 50, 19, 5, 999, '2020-06-03', '2020-06-30', 50, 0, 1, 10, 10, 100, 1, 6, 110, 7),
(3, '980b2a74eb44db49e5b44b3b0d4a18b3945d7ad0f0d52d483d386b9f5742ad26', 2, 'DIA01-001', 0, 'Disc 9 mm / 60 cm, gray', 200, 19, 5, 972, '2020-06-03', '2020-06-30', 50, 0, 1, 10, 10, 100, 1, 9, 60, 7),
(4, 'ab99cd2007b5d9adcb0e9872ac29d50625970fd4f5359497c59b5253a409ccd3', 2, 'DIA01-002', 0, 'DISC 5 mm / 70 cm, pink', 100, 19, 5, 996, '2020-06-03', '2020-06-30', 50, 0, 1, 10, 10, 100, 1, 5, 70, 7),
(5, '64d653e06fde49d829de5d3c97b5223dad8f33d62224cdc65c33fe02dec21fba', 3, 'cxcx-01', 0, 'test product', 30, 19, 5, 1956, '2020-06-05', '2020-06-30', 50, 0, 2, 10, 10, 100, 1, 6, 100, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_role`, `status`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) UNSIGNED NOT NULL,
  `ipaddress` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `click` int(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ipaddress`, `click`, `created_at`) VALUES
(1, '::1', 1209, '2020-06-25 17:55:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `broschure`
--
ALTER TABLE `broschure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_cart_sub_product` (`sub_product_id`),
  ADD KEY `index_foreignkey_cart_product` (`product_id`),
  ADD KEY `index_foreignkey_cart_patient` (`patient_id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_cart_detail_delivery_address` (`delivery_address_id`),
  ADD KEY `index_foreignkey_cart_detail_billing_address` (`billing_address_id`),
  ADD KEY `index_foreignkey_cart_detail_patient` (`patient_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_patient`
--
ALTER TABLE `get_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metatag`
--
ALTER TABLE `metatag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribe`
--
ALTER TABLE `newsletter_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_order_patient` (`patient_id`),
  ADD KEY `index_foreignkey_order_cartdetail` (`cartdetail_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_billing_address`
--
ALTER TABLE `patient_billing_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_patient_billing_address_patient` (`patient_id`);

--
-- Indexes for table `patient_caretaker`
--
ALTER TABLE `patient_caretaker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_patient_caretaker_patient` (`patient_id`);

--
-- Indexes for table `patient_csv`
--
ALTER TABLE `patient_csv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_delivery_address`
--
ALTER TABLE `patient_delivery_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_patient_delivery_address_patient` (`patient_id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_product_category` (`category_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_product_image_product` (`product_id`);

--
-- Indexes for table `product_video`
--
ALTER TABLE `product_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_product_video_product` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_reviews_user` (`user_id`),
  ADD KEY `index_foreignkey_reviews_product` (`product_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_product`
--
ALTER TABLE `sub_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_sub_product_product` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broschure`
--
ALTER TABLE `broschure`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `get_patient`
--
ALTER TABLE `get_patient`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metatag`
--
ALTER TABLE `metatag`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `newsletter_subscribe`
--
ALTER TABLE `newsletter_subscribe`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `patient_billing_address`
--
ALTER TABLE `patient_billing_address`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_caretaker`
--
ALTER TABLE `patient_caretaker`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_csv`
--
ALTER TABLE `patient_csv`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_delivery_address`
--
ALTER TABLE `patient_delivery_address`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_video`
--
ALTER TABLE `product_video`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `sub_product`
--
ALTER TABLE `sub_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `c_fk_cart_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_cart_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_cart_sub_product_id` FOREIGN KEY (`sub_product_id`) REFERENCES `sub_product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `c_fk_cart_detail_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `c_fk_order_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `patient_billing_address`
--
ALTER TABLE `patient_billing_address`
  ADD CONSTRAINT `c_fk_patient_billing_address_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `patient_caretaker`
--
ALTER TABLE `patient_caretaker`
  ADD CONSTRAINT `c_fk_patient_caretaker_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `patient_delivery_address`
--
ALTER TABLE `patient_delivery_address`
  ADD CONSTRAINT `c_fk_patient_delivery_address_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `c_fk_product_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `c_fk_product_image_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `product_video`
--
ALTER TABLE `product_video`
  ADD CONSTRAINT `c_fk_product_video_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `c_fk_reviews_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `sub_product`
--
ALTER TABLE `sub_product`
  ADD CONSTRAINT `c_fk_sub_product_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
