SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

/*CREATE DATABASE 'app' !40100 DEFAULT CHARACTER SET utf8 */;
USE app;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `first_failed_login` datetime NOT NULL,
  `failed_login_count` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`first_failed_login`, `failed_login_count`, `ID`, `email`, `password`) VALUES
('0000-00-00 00:00:00',	0,	1,	'jyangj@git.ch',	'011748'),
('0000-00-00 00:00:00',	0,	2,	'bruteforce@gibz.ch',	'1111');

