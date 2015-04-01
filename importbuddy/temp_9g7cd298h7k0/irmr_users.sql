CREATE TABLE `irmr_users` (  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `user_login` varchar(60) NOT NULL DEFAULT '',  `user_pass` varchar(64) NOT NULL DEFAULT '',  `user_nicename` varchar(50) NOT NULL DEFAULT '',  `user_email` varchar(100) NOT NULL DEFAULT '',  `user_url` varchar(100) NOT NULL DEFAULT '',  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',  `user_activation_key` varchar(60) NOT NULL DEFAULT '',  `user_status` int(11) NOT NULL DEFAULT '0',  `display_name` varchar(250) NOT NULL DEFAULT '',  PRIMARY KEY (`ID`),  KEY `user_login_key` (`user_login`),  KEY `user_nicename` (`user_nicename`)) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40000 ALTER TABLE `irmr_users` DISABLE KEYS */;
INSERT INTO `irmr_users` VALUES('1', 'zenden', '$P$BID7mjqp.EkEQo8wT4n0yCkh/1d3LJ0', 'zenden', 'dan@zendenwebdesign.com', '', '2015-03-20 18:34:49', '', '0', 'zenden');
INSERT INTO `irmr_users` VALUES('2', 'idrocky', '$P$BkCoVQoq4oQnaYKvA2.zmTFN8J1ERy/', 'idrocky', 'erica@idahorocky.com', '', '2015-03-25 21:02:48', '', '0', 'admin');
INSERT INTO `irmr_users` VALUES('3', 'IRMR', '$P$Bs6cESRZrifoYtz9nAai40rxHMZV6F1', 'irmr', '', '', '2015-03-25 21:17:06', '', '0', 'IRMR');
/*!40000 ALTER TABLE `irmr_users` ENABLE KEYS */;