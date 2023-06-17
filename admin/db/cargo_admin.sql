-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 01:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargo_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `abouts_id` int(255) NOT NULL,
  `company` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `bg_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`abouts_id`, `company`, `vision`, `mission`, `bg_img`) VALUES
(1, 'We keep an eye on the big picture to provide the best service possible with an competitive edge like no other. Colossal Cargo is out to become a top reputable courier company when it comes to on time and claim free , pickup and delivery. We are always looking for new ways to provide greater choice and service for our customers, and a stronger foundation for our business.', ' We aim to build a brand which is trusted, reliable and provide efficient service\'s to all merchants, traders and customers in NORTH EAST INDIA. ', 'To became the most trusted ,preferred and reliable transport and courier service provider in the whole of NORTH EAST INDIA.', 'images/index/de7f8968096a19307c854ad67c57c392t2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contacts_id` int(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `contacts` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contacts_id`, `email`, `location`, `contacts`) VALUES
(1, 'Wil@colossal.com', 'Guwajati', '989898989');

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
(1, 'Colossal Cargo', 'assets/images/logo.png', '2020-07-14', '13:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(255) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `contact` varchar(60) DEFAULT NULL,
  `location` varchar(120) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `passengers` int(20) NOT NULL DEFAULT 0,
  `hotel` varchar(10) DEFAULT NULL,
  `fooding` varchar(10) DEFAULT NULL,
  `lodging` varchar(10) DEFAULT NULL,
  `cars` varchar(10) DEFAULT NULL,
  `enquiry_date` date DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `contact`, `location`, `from_date`, `to_date`, `passengers`, `hotel`, `fooding`, `lodging`, `cars`, `enquiry_date`, `status`) VALUES
(1, 'WIl', '8548585865', 'Guwahati, Assam', '2020-10-04', '2020-10-05', 2, 'YES', 'YES', 'YES', 'YES', '2020-10-04', 1),
(2, 'Suman', '8585869586', 'Gangtok, Sikkim', '2020-10-04', '2020-10-05', 6, 'NO', 'YES', 'YES', 'NO', '2020-10-04', 1),
(3, 'Robin', '8578458965', 'Namchi', '2020-10-11', '2020-10-13', 3, 'NO', 'YES', 'NO', 'NO', '2020-10-06', 1),
(4, 'mayal', '9865754562', '', '2020-10-06', '2020-10-06', 5, 'YES', 'YES', 'YES', 'YES', '2020-10-06', 1),
(6, 'alka', '9654873215', 'gangtok', '2020-10-06', '2020-10-06', 2, 'YES', 'NO', 'NO', 'NO', '2020-10-08', 1),
(10, 'Bibek', '8011331430', 'Guwahati', '2020-12-06', '2020-12-16', 1, 'YES', 'YES', 'NO', 'NO', '2020-12-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `index_id` int(255) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `slider` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`index_id`, `heading`, `slider`) VALUES
(1, 'New Heading', 'images/index/f185edfdd5bead0013e44b6511dbee19t1.jpg');

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
(36, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2021-01-22', '22:18:31', 1),
(37, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2021-01-25', '22:00:12', 1),
(38, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2021-02-04', '19:17:50', 1),
(39, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2021-02-07', '22:10:43', 1),
(40, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2021-02-09', '18:17:02', 1),
(41, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2021-02-10', '22:16:49', 1),
(42, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2021-02-12', '21:05:49', 1);

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
(1, 'colossaladmin', 'colossaladmin@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'Colossal', 'Cargo', NULL, NULL, NULL, NULL, NULL, 'ADMIN', '2020-07-14', '06:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`abouts_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contacts_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`index_id`);

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
  MODIFY `abouts_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contacts_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `index_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
