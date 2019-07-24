-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2019 at 05:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mjp`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_config`
--

CREATE TABLE `email_config` (
  `id` int(1) NOT NULL,
  `protocol` varchar(20) NOT NULL,
  `host` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` int(4) NOT NULL,
  `type` enum('html','text','','') NOT NULL,
  `charset` varchar(20) NOT NULL,
  `newline` varchar(20) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `sistem_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_config`
--

INSERT INTO `email_config` (`id`, `protocol`, `host`, `username`, `password`, `port`, `type`, `charset`, `newline`, `admin_email`, `sistem_email`) VALUES
(1, 'smtp', 'ssl://smtp.googlemail.com', 'printcloud91@gmail.com', '9b728c647d361352c031d6dfb485b85790011ecadfd5c271cb7e1235820e93e5568735687b9af278adcc350e3086517733b8', 465, 'html', 'utf-8', '\\r\\n', 'beniepedia@gmail.com', 'no-replay@id-mjp.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `oauth_provider` enum('facebook','google','twitter','local') NOT NULL DEFAULT 'local',
  `oauth_uid` varchar(50) DEFAULT NULL,
  `ipaddr` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text,
  `image` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `oauth_provider`, `oauth_uid`, `ipaddr`, `name`, `date`, `phone`, `email`, `password`, `gender`, `address`, `image`, `role_id`, `is_active`, `date_created`, `last_login`) VALUES
(21, 'local', '', '::1', 'Ahmad Qomaini', '1991-01-07', '0821744160777', 'ahmadqomaini@yahoo.com', '$2y$10$vi0DkAr4MwDtv0Q5kapZB.0D8oCOM4GZ2q0PDay.MoMRzALdEEaz.', 'laki-laki', 'Jl. Parit dua 2 laut', 'ahmad_qomaini-1563907829.jpg', 1, 1, 1562853373, 1563935378),
(40, 'local', NULL, '192.168.88.253', '&lt;h1&gt;Beniepay&lt;/h1&gt;', '0000-00-00', '0821744160777', 'beniepay@gmail.com', '$2y$10$iF3jcPFHT/Rer3np7aD3hOu68erXJlN157LajYX7UyVnn5aI8SJTu', 'laki-laki', '&lt;h1&gt;Beniepay&lt;/h1&gt;', 'beniepedia-1563706509.jpg', 2, 0, 1563210561, 1563718182),
(41, 'local', NULL, '192.168.88.243', 'Ahmad Qomaini', '0000-00-00', '82174416077', 'beniepedia@gmail.com', '$2y$10$8MSlBHsKa/hrO.YzdQ9Y2OBBRDACxl59jyKjG2YMIv1Hm7q4Gs0Mu', 'laki-laki', 'Jl. Sederhana no. 12', 'ahmad_qomaini-1563909462.jpg', 2, 1, 1563896213, 1563908409);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

CREATE TABLE `web_config` (
  `id` int(1) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_alias` varchar(50) NOT NULL,
  `site_description` text NOT NULL,
  `site_author` varchar(50) NOT NULL,
  `fb_id` varchar(100) NOT NULL,
  `fb_key` varchar(100) NOT NULL,
  `google_client_id` varchar(100) NOT NULL,
  `google_client_key` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `site_name`, `site_alias`, `site_description`, `site_author`, `fb_id`, `fb_key`, `google_client_id`, `google_client_key`, `is_active`) VALUES
(0, 'ID-MJPARFUME', 'ID-MJP.com', 'Situs resmi yang menjual produk original dari MJParfume', 'BeniePedia', '2430830390480285', '5d85b7fd4a9c041b4b0cfb5c594dc99d', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_config`
--
ALTER TABLE `email_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `web_config`
--
ALTER TABLE `web_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
