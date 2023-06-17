-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2023 at 06:53 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u355669643_pranjal`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `abouts_id` int(255) NOT NULL,
  `company` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `date_posted` date DEFAULT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`abouts_id`, `company`, `vision`, `link`, `date_posted`, `image1`, `image2`, `image3`, `category`) VALUES
(18, 'Blue Mountains Tours and Travels', 'Blue Mountains Tours and Travels is a team of professional tourism agency that provide travel destinations in Sikkim and West Bengal.', 'https://www.bmtt.in/', '2023-05-25', '../images/index/ca693cfb650ff81b46bc9307b1e0ac3dproject1.png', '../images/index/ca693cfb650ff81b46bc9307b1e0ac3dbmtt4.png', '../images/index/ca693cfb650ff81b46bc9307b1e0ac3dbmtt2.png', 'WEB DESIGN'),
(19, 'Skill Employment and Entrepreneur Department', 'The Skill, Employment & Entrepreneurship Department (SEED) of the Bodoland Territorial Council (BTC) announced a logo designing competition as a part of our mission to promote skills and entrepreneurship in the region. The competition was open to all residents of BTC, and particularly targets youth and students. ', 'https://btrseedmission.com/', '2023-05-25', '../images/index/29c6a08f25875de30d1402296c66fc72comp2.png', '../images/index/29c6a08f25875de30d1402296c66fc72logo.png', '../images/index/29c6a08f25875de30d1402296c66fc72comp1.png', 'WEB DESIGN'),
(20, 'Employment Registration', 'Employment Registration of BTR region people', '', '2023-05-25', '../images/index/49b9f0a4087356e38fe89e9106fda7fcemploy.png', '../images/index/49b9f0a4087356e38fe89e9106fda7fcform.png', '../images/index/49b9f0a4087356e38fe89e9106fda7fcreg.png', 'WEB DESIGN'),
(22, 'Araddha Nursery', 'Araddha Nursery located in Gossaigaon, Srirampur KOkrajhar district.This nursery provide dirrent kinds of indoor,outdoor, interior decoration,pots and much more.', 'https://araddhanursery.in/', '2023-05-25', '../images/index/1768cb37ac403237cb16e24f5a9885a0ara.png', '../images/index/ee3c31967bd0c789ce0e794f66189f02ara1.png', '../images/index/ee3c31967bd0c789ce0e794f66189f02ara2.png', 'WEB DESIGN'),
(24, 'Hashtag Foodies', 'Online Food delivery android mobile application', '', '2023-05-25', '../images/index/0f470edfb756baf0b75fcc4a2bea7d75android.jpg', '../images/index/0f470edfb756baf0b75fcc4a2bea7d75android3.jpg', '../images/index/0f470edfb756baf0b75fcc4a2bea7d755.jpg', 'ANDROID APP'),
(25, 'Skill Employment and Entrepreneur Department', 'Skill Employment and Entrepreneur Department,kokrajhar', 'https://seedbtr.com/', '2023-05-25', '../images/index/f201be5d38fafb8f593d12625bfd85c3seed 4.png', '../images/index/f201be5d38fafb8f593d12625bfd85c3seed2.png', '../images/index/f201be5d38fafb8f593d12625bfd85c3seed3.png', 'WEB DESIGN');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `app_name` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `app_name`, `logo`, `created_date`, `created_time`) VALUES
(1, 'pranjal', 'assets/images/logo.png', '2022-10-12', '13:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `os` varchar(200) DEFAULT NULL,
  `browser` varchar(200) DEFAULT NULL,
  `ip` varchar(200) DEFAULT NULL,
  `login_date` date DEFAULT NULL,
  `login_time` time DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`, `status`) VALUES
(55, 1, 'Windows 10', 'Chrome', '::1', '2022-10-26', '20:55:23', 1),
(56, 1, 'Windows 10', 'Chrome', '::1', '2022-10-27', '10:49:54', 1),
(57, 1, 'Windows 10', 'Chrome', '::1', '2022-10-27', '18:11:26', 1),
(58, 1, 'Windows 10', 'Chrome', '::1', '2022-10-27', '20:25:07', 1),
(59, 1, 'Windows 10', 'Chrome', '::1', '2022-11-26', '14:14:16', 1),
(60, 1, 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-15', '18:37:37', 1),
(61, 1, 'Windows 10', 'Firefox', '127.0.0.1', '2023-05-16', '13:20:43', 1),
(62, 1, 'Windows 10', 'Chrome', '202.168.85.112', '2023-05-18', '15:22:06', 1),
(63, 1, 'Windows 10', 'Chrome', '202.168.85.112', '2023-05-18', '15:26:43', 1),
(64, 1, 'Windows 10', 'Chrome', '202.168.85.112', '2023-05-18', '15:27:34', 1),
(65, 1, 'Windows 10', 'Chrome', '202.168.85.183', '2023-05-25', '13:08:17', 1),
(66, 1, 'Windows 10', 'Firefox', '202.168.85.183', '2023-05-25', '14:39:38', 1),
(67, 1, 'Windows 10', 'Firefox', '103.199.202.240', '2023-06-03', '16:02:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `town` varchar(200) DEFAULT NULL,
  `pincode` varchar(200) DEFAULT NULL,
  `user_type` varchar(200) DEFAULT 'USER',
  `added_date` date DEFAULT NULL,
  `added_time` time DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 inactive, 1 active, 2 banned'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `surname`, `phone`, `dob`, `state`, `town`, `pincode`, `user_type`, `added_date`, `added_time`, `status`) VALUES
(1, 'pranjal', 'admin.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'panjal', 'roy', NULL, NULL, NULL, NULL, NULL, 'ADMIN', '2022-10-13', '06:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`abouts_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `abouts_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
