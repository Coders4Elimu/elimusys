# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.8-log
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2011-09-04 17:56:09
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for elimudev
DROP DATABASE IF EXISTS `elimudev`;
CREATE DATABASE IF NOT EXISTS `elimudev` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `elimudev`;


# Dumping structure for table elimudev.addresses
DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `AddressID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique key for Address Table',
  `AddressLine1` varchar(45) NOT NULL COMMENT 'Address Line1',
  `AddressLine2` varchar(45) DEFAULT NULL COMMENT 'Address Line 2',
  `City` varchar(45) NOT NULL COMMENT 'City of School Staff',
  `State` varchar(45) NOT NULL COMMENT 'City of School Staff',
  `Country` varchar(45) NOT NULL COMMENT 'Country of School Staff',
  `PostalCode` varchar(45) NOT NULL COMMENT 'Postal Address Code',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional Information',
  PRIMARY KEY (`AddressID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Address Table for Elimu';

# Dumping data for table elimudev.addresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;


# Dumping structure for table elimudev.courses
DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `ClassID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for Class id and is the primary key',
  `TeacherID` int(10) unsigned NOT NULL COMMENT 'Column name for teacher id',
  `SubjectID` int(10) unsigned NOT NULL COMMENT 'Column name for subject id',
  `Name` varchar(45) NOT NULL COMMENT 'Column name for the name of the class',
  `Code` varchar(45) NOT NULL COMMENT 'Column name for code',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that may be required',
  PRIMARY KEY (`ClassID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table name for Class of a school';

# Dumping data for table elimudev.courses: ~0 rows (approximately)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;


# Dumping structure for table elimudev.guardians
DROP TABLE IF EXISTS `guardians`;
CREATE TABLE IF NOT EXISTS `guardians` (
  `ParentID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for parent id and is the primary key',
  `FirstName` varchar(45) NOT NULL COMMENT 'Column name for first name',
  `LastName` varchar(45) NOT NULL COMMENT 'Column name for last name',
  `MiddleName` varchar(45) DEFAULT NULL COMMENT 'Column name for middle name',
  `Gender` tinyint(1) NOT NULL COMMENT 'Column name for gender',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that may be required',
  PRIMARY KEY (`ParentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table name for Parent';

# Dumping data for table elimudev.guardians: ~0 rows (approximately)
/*!40000 ALTER TABLE `guardians` DISABLE KEYS */;
/*!40000 ALTER TABLE `guardians` ENABLE KEYS */;


# Dumping structure for table elimudev.parentsaddresses
DROP TABLE IF EXISTS `parentsaddresses`;
CREATE TABLE IF NOT EXISTS `parentsaddresses` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for parent id and it references the parent table',
  `ParentID` int(10) unsigned NOT NULL COMMENT 'Column name for parent id and it references the parent table',
  `AddressID` int(10) unsigned NOT NULL COMMENT 'Column name for address id and it references the address table',
  `StartDate` date NOT NULL COMMENT 'Column name for start date',
  `EnDate` date NOT NULL COMMENT 'Column name for end date',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that may be required',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table Name for Parents Address';

# Dumping data for table elimudev.parentsaddresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `parentsaddresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `parentsaddresses` ENABLE KEYS */;


# Dumping structure for table elimudev.schools
DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `SchoolID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'School Id column and is the primary key',
  `LanguageID` varchar(10) NOT NULL COMMENT 'Language used by the school',
  `Name` varchar(45) NOT NULL COMMENT 'Name of the School',
  `Phone` decimal(15,0) NOT NULL COMMENT 'Contact Number of the school',
  `Fax` decimal(15,0) DEFAULT NULL COMMENT 'Fax Number of the school',
  `WebSite` varchar(45) DEFAULT NULL COMMENT 'Website Address of the school',
  `Email` varchar(45) DEFAULT NULL COMMENT 'Email Address of the school',
  `DateFounded` date NOT NULL COMMENT 'Date the school was established',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information about the school',
  PRIMARY KEY (`SchoolID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='School Table for Elimu Project';

# Dumping data for table elimudev.schools: ~5 rows (approximately)
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;
INSERT IGNORE INTO `schools` (`SchoolID`, `LanguageID`, `Name`, `Phone`, `Fax`, `WebSite`, `Email`, `DateFounded`, `Details`) VALUES
	(1, '0', 'My First School', 202, 240, 'www.schoolofrock.com', 'admin@schoolofrock.com', '2011-08-16', 'This function helps you cache the count of re'),
	(2, '0', 'Elimu School', 240, 240, 'www.elimuschool.com', 'cotnact@elimuschool.com', '2011-08-18', 'Life is food and good to the rude'),
	(3, '0', 'Elimu School', 240, 240, 'www.elimuschool.com', 'cotnact@elimuschool.com', '2011-08-18', 'Life is food and good to the rude'),
	(4, '0', 'Elimu School', 240, 240, 'www.elimuschool.com', 'cotnact@elimuschool.com', '2011-08-18', 'Life is food and good to the rude'),
	(5, '0', 'Elimu School', 240, 240, 'www.elimuschool.com', 'cotnact@elimuschool.com', '2011-08-18', 'Life is food and good to the rude');
/*!40000 ALTER TABLE `schools` ENABLE KEYS */;


# Dumping structure for table elimudev.schoolsaddresses
DROP TABLE IF EXISTS `schoolsaddresses`;
CREATE TABLE IF NOT EXISTS `schoolsaddresses` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for address id that references the address table',
  `AddressID` int(10) unsigned NOT NULL COMMENT 'Column name for address id that references the address table',
  `SchoolID` int(10) unsigned NOT NULL COMMENT 'Column name for school id that references the table',
  `StartDate` date NOT NULL COMMENT 'Column name for start date',
  `EndDate` date NOT NULL COMMENT 'Column name for end date',
  `Details` varchar(45) NOT NULL COMMENT 'Any additional information that may be required',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table name for school address';

# Dumping data for table elimudev.schoolsaddresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `schoolsaddresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `schoolsaddresses` ENABLE KEYS */;


# Dumping structure for table elimudev.schoolstaff
DROP TABLE IF EXISTS `schoolstaff`;
CREATE TABLE IF NOT EXISTS `schoolstaff` (
  `SchoolStaffID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique id for School Staff',
  `SchoolID` int(10) unsigned NOT NULL COMMENT 'School Id references the School Table',
  `FirstName` varchar(45) NOT NULL COMMENT 'First Name of School Staff',
  `LastName` varchar(45) NOT NULL COMMENT 'Last NAme of School Staff',
  `MiddleName` varchar(45) DEFAULT NULL COMMENT 'Middle Name of School Staff',
  `Role` varchar(45) NOT NULL COMMENT 'Role id assigned to School Staff',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information',
  PRIMARY KEY (`SchoolStaffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table name for School Staff';

# Dumping data for table elimudev.schoolstaff: ~0 rows (approximately)
/*!40000 ALTER TABLE `schoolstaff` DISABLE KEYS */;
/*!40000 ALTER TABLE `schoolstaff` ENABLE KEYS */;


# Dumping structure for table elimudev.schoolstaffaddresses
DROP TABLE IF EXISTS `schoolstaffaddresses`;
CREATE TABLE IF NOT EXISTS `schoolstaffaddresses` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Address id references the Address table',
  `AddressID` int(10) unsigned NOT NULL COMMENT 'Address id references the Address table',
  `SchoolStaffID` int(10) unsigned NOT NULL COMMENT 'School Staff Id reference the school staff table',
  `StartDate` date NOT NULL COMMENT 'Column for start date',
  `EndDate` date NOT NULL COMMENT 'Column for end date',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that mey be required',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table name for School Staff Address';

# Dumping data for table elimudev.schoolstaffaddresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `schoolstaffaddresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `schoolstaffaddresses` ENABLE KEYS */;


# Dumping structure for table elimudev.studentparents
DROP TABLE IF EXISTS `studentparents`;
CREATE TABLE IF NOT EXISTS `studentparents` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for Student id and it reference the Student table',
  `StudentID` int(10) unsigned NOT NULL COMMENT 'Column name for Student id and it reference the Student table',
  `ParentID` int(10) unsigned NOT NULL COMMENT 'Column name for parent id and it references the parent table',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that may be required',
  `Relationship` char(255) NOT NULL COMMENT 'Relationship to the student',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This is a Student-Parent Table';

# Dumping data for table elimudev.studentparents: ~0 rows (approximately)
/*!40000 ALTER TABLE `studentparents` DISABLE KEYS */;
/*!40000 ALTER TABLE `studentparents` ENABLE KEYS */;


# Dumping structure for table elimudev.students
DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `StudentID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique student id',
  `SchoolID` varchar(45) NOT NULL COMMENT 'Registered school id',
  `FirstName` varchar(45) NOT NULL COMMENT 'First Name of student',
  `LastName` varchar(45) NOT NULL COMMENT 'Last Name of students',
  `MiddleName` varchar(45) DEFAULT NULL COMMENT 'Middle name of students',
  `Gender` varchar(45) NOT NULL COMMENT 'Gender status of students',
  `dob` varchar(45) NOT NULL COMMENT 'Date of Birth for students',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional Information that may be required',
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table Name for student table in Elimu';

# Dumping data for table elimudev.students: ~0 rows (approximately)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;


# Dumping structure for table elimudev.studentsaddresses
DROP TABLE IF EXISTS `studentsaddresses`;
CREATE TABLE IF NOT EXISTS `studentsaddresses` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for address id and it references the address table',
  `AddressID` int(10) unsigned NOT NULL COMMENT 'Column name for address id and it references the address table',
  `StudentID` int(10) unsigned NOT NULL COMMENT 'Column name for student id and it reference the student table',
  `StartDate` date NOT NULL COMMENT 'Column name for start date',
  `EndDate` date NOT NULL COMMENT 'Column name for end date',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that may be required',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table Name for Student';

# Dumping data for table elimudev.studentsaddresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `studentsaddresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `studentsaddresses` ENABLE KEYS */;


# Dumping structure for table elimudev.studentsclasses
DROP TABLE IF EXISTS `studentsclasses`;
CREATE TABLE IF NOT EXISTS `studentsclasses` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for class id and it reference the class table',
  `ClassID` int(10) unsigned NOT NULL COMMENT 'Column name for class id and it reference the class table',
  `StudentID` int(10) unsigned NOT NULL COMMENT 'Column name for student id and it references the student table',
  `StartDate` date NOT NULL COMMENT 'Column name for start date',
  `EndDate` date NOT NULL COMMENT 'Column name for end date',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table name for Student-Class';

# Dumping data for table elimudev.studentsclasses: ~0 rows (approximately)
/*!40000 ALTER TABLE `studentsclasses` DISABLE KEYS */;
/*!40000 ALTER TABLE `studentsclasses` ENABLE KEYS */;


# Dumping structure for table elimudev.subjects
DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `SubjectID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique id for the various subject',
  `Name` varchar(45) NOT NULL COMMENT 'Name of the various subjects',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any other additional Information',
  PRIMARY KEY (`SubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table Name for Subject in Elimu';

# Dumping data for table elimudev.subjects: ~0 rows (approximately)
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;


# Dumping structure for table elimudev.teachers
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `TeacherID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key column for Teacher table',
  `SchoolID` varchar(45) NOT NULL COMMENT 'Column name for school id',
  `FirstName` varchar(45) NOT NULL COMMENT 'Last Name for teachesr',
  `LastName` varchar(45) NOT NULL COMMENT 'Middle Name for teachers',
  `MiddleName` varchar(45) DEFAULT NULL COMMENT 'Contact numbers for the teachers',
  `Phone` decimal(15,0) DEFAULT NULL COMMENT 'Date of birth for the teachers',
  `dob` date NOT NULL COMMENT 'Any additional Information that may be needed',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that may be required',
  PRIMARY KEY (`TeacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Teacher table name for Elimu';

# Dumping data for table elimudev.teachers: ~0 rows (approximately)
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;


# Dumping structure for table elimudev.teachersaddresses
DROP TABLE IF EXISTS `teachersaddresses`;
CREATE TABLE IF NOT EXISTS `teachersaddresses` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Column name for Teacher Address Table reference address Id',
  `AddressID` int(10) unsigned NOT NULL COMMENT 'Column name for Teacher Address Table reference address Id',
  `TeacherID` int(10) unsigned NOT NULL COMMENT 'Column name for teacher id references teacher table',
  `StartDate` date NOT NULL COMMENT 'Column name for start date',
  `EndDate` date NOT NULL COMMENT 'Column name for end date',
  `Details` varchar(45) DEFAULT NULL COMMENT 'Any additional information that may be required',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table name for Teacher-Address';

# Dumping data for table elimudev.teachersaddresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `teachersaddresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `teachersaddresses` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
