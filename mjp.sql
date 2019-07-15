-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2019 at 02:49 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `oauth_provider` enum('facebook','google','twitter','local') NOT NULL DEFAULT 'local',
  `oauth_uid` varchar(50) DEFAULT NULL,
  `ipaddr` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
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

INSERT INTO `users` (`id_user`, `oauth_provider`, `oauth_uid`, `ipaddr`, `name`, `email`, `password`, `gender`, `address`, `image`, `role_id`, `is_active`, `date_created`, `last_login`) VALUES
(21, 'local', '0', '::1', 'Ahmad Qomaini', 'ahmadqomaini@yahoo.com', '$2y$10$vi0DkAr4MwDtv0Q5kapZB.0D8oCOM4GZ2q0PDay.MoMRzALdEEaz.', NULL, NULL, 'default.jpg', 1, 1, 1562853373, 0),
(33, 'local', '0', '192.168.88.252', 'beniepedia', 'beniepay@gmail.com', '$2y$10$JNLckeaXTdoub/ARA5yweODArjBGvKWK30pRinth3M4h/pTANHtcW', NULL, NULL, 'default.jpg', 2, 1, 1562965770, 0),
(34, 'local', '0', '192.168.88.252', 'Benjoooooo', 'beni.syaputra@gmail.com', '$2y$10$VYGqTVdkTPwOvzkL7Isq1.FEp47gUUTAIh3UUvq.SXxINuj6ZGvk6', NULL, NULL, 'default.jpg', 2, 1, 1562995207, 0),
(39, 'facebook', '3177025138974616', '::1', 'Ahmad Qomaini', 'ahmadqomaini@yahoo.com', NULL, 'laki-laki', 'Kota Medan', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=3177025138974616&height=512&width=512&ext=1565721321&hash=AeSQsScZMb4v-7b0', 2, 1, 1563129321, 1563129321);

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
