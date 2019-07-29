#
# TABLE STRUCTURE FOR: email_config
#

DROP TABLE IF EXISTS `email_config`;

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
  `sistem_email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `email_config` (`id`, `protocol`, `host`, `username`, `password`, `port`, `type`, `charset`, `newline`, `admin_email`, `sistem_email`) VALUES (1, 'smtp', 'ssl://smtp.googlemail.com', 'printcloud91@gmail.com', '9b728c647d361352c031d6dfb485b85790011ecadfd5c271cb7e1235820e93e5568735687b9af278adcc350e3086517733b8', 465, 'html', 'utf-8', '\\r\\n', 'beniepedia@gmail.com', 'no-replay@id-mjp.com');


#
# TABLE STRUCTURE FOR: tb_inbox
#

DROP TABLE IF EXISTS `tb_inbox`;

CREATE TABLE `tb_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_name` varchar(100) DEFAULT NULL,
  `inbox_email` text DEFAULT NULL,
  `inbox_phone` varchar(20) DEFAULT NULL,
  `inbox_subject` varchar(50) DEFAULT NULL,
  `inbox_message` text DEFAULT NULL,
  `inbox_created` varchar(100) DEFAULT NULL,
  `inbox_status` enum('1','0','','') NOT NULL DEFAULT '0' COMMENT '1=read,0=unread',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tb_inbox` (`inbox_id`, `inbox_name`, `inbox_email`, `inbox_phone`, `inbox_subject`, `inbox_message`, `inbox_created`, `inbox_status`) VALUES (1, 'Ahmad Qomaini', 'ahmadqomaini@yahoo.com', '082174416077', 'Bagaimana kah', 'bang toloknasnfnas asjdjsadjas sjadjasjdasdasd', '1564393669', '0');


#
# TABLE STRUCTURE FOR: user_role
#

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `user_role` (`id_role`, `role`) VALUES (1, 'Administrator');
INSERT INTO `user_role` (`id_role`, `role`) VALUES (2, 'Member');


#
# TABLE STRUCTURE FOR: user_token
#

DROP TABLE IF EXISTS `user_token`;

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id_token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` enum('facebook','google','twitter','local') NOT NULL DEFAULT 'local',
  `oauth_uid` varchar(50) DEFAULT NULL,
  `ipaddr` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id_user`, `oauth_provider`, `oauth_uid`, `ipaddr`, `name`, `date`, `phone`, `email`, `password`, `gender`, `address`, `image`, `role_id`, `is_active`, `date_created`, `last_login`) VALUES (21, 'local', '', '::1', 'Ahmad Qomaini', '1991-01-07', '0821744160777', 'ahmadqomaini@yahoo.com', '$2y$10$vi0DkAr4MwDtv0Q5kapZB.0D8oCOM4GZ2q0PDay.MoMRzALdEEaz.', 'laki-laki', 'Jl. Parit dua 2 laut', 'ahmad_qomaini-1563907829.jpg', 1, 1, 1562853373, 1564385424);


#
# TABLE STRUCTURE FOR: web_config
#

DROP TABLE IF EXISTS `web_config`;

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
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `web_config` (`id`, `site_name`, `site_alias`, `site_description`, `site_author`, `fb_id`, `fb_key`, `google_client_id`, `google_client_key`, `is_active`) VALUES (0, 'ID-MJPARFUME', 'ID-MJP.com', 'Situs resmi yang menjual produk original dari MJParfume', 'BeniePedia', '2430830390480285', '5d85b7fd4a9c041b4b0cfb5c594dc99d', '', '', 0);


