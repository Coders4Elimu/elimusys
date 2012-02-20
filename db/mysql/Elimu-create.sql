DROP DATABASE IF EXISTS `elimudb`;
CREATE DATABASE `elimudb`;
USE elimudb;

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Unique key for Address Table',
  `celPhone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL COMMENT 'Any additional information',
  `email` varchar(255) DEFAULT NULL,
  `landPhone` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `zipCode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Address Table for Elimu';

DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Unique key for Person Table',
  `birthDayDate` date DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `addressID` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `addressID` (`addressID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Base Table for Elimu actors (Students, Employees...)';

DROP TABLE IF EXISTS `schoolemployees`;
CREATE TABLE `schoolemployees` (
  `function` varchar(30) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  `schoolID` bigint(20) NOT NULL COMMENT 'School Id references the School Table',
  PRIMARY KEY (`id`),
  UNIQUE KEY `schoolID` (`schoolID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table for School Employees';

DROP TABLE IF EXISTS `schools`;
CREATE TABLE `schools` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Unique key for School Table',
  `fax` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `addressID` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `addressID` (`addressID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='School Table for Elimu Project';