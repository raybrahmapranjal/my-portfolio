-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 09:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `abouts_id` int(255) NOT NULL,
  `company` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `bg_img` text DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`abouts_id`, `company`, `vision`, `date_posted`, `bg_img`, `category`) VALUES
(1, 'test title o jhjhj', 'test description part 2', '2022-11-26', 'images/index/5284238533dd4d8e0c0284ce71af822eabout_background.jpg', 'APP DESIGN'),
(5, 'Test Title with a long test', 'This is a text with enter. \r\nmew\r\nThis is another line.\r\nLets see if tab     works.', '2022-10-27', 'images/index/a260bd8a45d5db231143476bdfdb95efzeropoint.jpg', 'BRANDING'),
(7, 'hello titile', 'yes description', '2022-10-27', 'images/index/8c3f8d4e99a6f1bccd6972f637a03465tutu-s-huDWS6g9yOk-unsplash.jpg', 'SMM'),
(8, 'new branding thing', 'let\'s see what happeneds', '2022-10-27', 'images/index/5f311f14613db2c9b632c34441796431about_background.jpg', 'DEVELOPMENT');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `app_name`, `logo`, `created_date`, `created_time`) VALUES
(1, 'Savio Kisku', 'assets/images/logo.png', '2022-10-12', '13:17:33');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`, `status`) VALUES
(55, 1, 'Windows 10', 'Chrome', '::1', '2022-10-26', '20:55:23', 1),
(56, 1, 'Windows 10', 'Chrome', '::1', '2022-10-27', '10:49:54', 1),
(57, 1, 'Windows 10', 'Chrome', '::1', '2022-10-27', '18:11:26', 1),
(58, 1, 'Windows 10', 'Chrome', '::1', '2022-10-27', '20:25:07', 1),
(59, 1, 'Windows 10', 'Chrome', '::1', '2022-11-26', '14:14:16', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `surname`, `phone`, `dob`, `state`, `town`, `pincode`, `user_type`, `added_date`, `added_time`, `status`) VALUES
(1, 'saviokisku', 'admin@saviokisku.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'Savio', 'Kisku', NULL, NULL, NULL, NULL, NULL, 'ADMIN', '2022-10-13', '06:00:00', 1);

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
  MODIFY `abouts_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
