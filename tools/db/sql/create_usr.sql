--
-- Create users in mysql.user table
--

CREATE USER 'elimudb_usr'@'%' IDENTIFIED BY '!elimudb_usr!';

CREATE TABLE IF NOT EXISTS `mysql`.`user_info`
(
	`user` VARCHAR(16) COLLATE utf8_bin NOT NULL,
	`full_name` VARCHAR(60) COLLATE utf8_bin DEFAULT NULL,
	`description` VARCHAR(255) COLLATE utf8_bin DEFAULT NULL,
	`email` VARCHAR(80) COLLATE utf8_bin DEFAULT NULL,
	`contact_information` VARCHAR(60) COLLATE utf8_bin,
	`icon` BLOB,
	PRIMARY KEY (`user`),
	KEY `user_info_full_name` (`full_name`)
)
ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Stores additional user information';

INSERT INTO mysql.user_info (user,full_name) VALUES ('elimudb_usr','Elimu DB User');

GRANT SELECT, INSERT, UPDATE, DELETE ON elimudb.* TO 'elimudb_usr'@'%';

SELECT mu.host,mu.user,mui.full_name FROM mysql.user mu, mysql.user_info mui WHERE mu.user=mui.user;
