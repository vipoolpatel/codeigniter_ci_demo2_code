-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 05:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seventechbienesraices`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE IF NOT EXISTS `apartment` (
  `Id_Apartment` int(11) NOT NULL AUTO_INCREMENT,
  `Status_Property` int(11) NOT NULL,
  `Id_User` int(20) NOT NULL,
  `Id_Broker_Out` int(20) NOT NULL,
  `Id_Broker_In` int(20) NOT NULL,
  `Id_Developer` int(20) NOT NULL,
  `Id_Particular` int(20) NOT NULL,
  `Date_In` date NOT NULL,
  `Date_Out` date NOT NULL,
  `Expiration_Date` date NOT NULL,
  `Price_dollar` decimal(10,0) NOT NULL,
  `Id_Comission_Type` int(20) NOT NULL,
  `Id_Transaction_Type` int(20) NOT NULL,
  `Photo1` varchar(250) NOT NULL,
  `Photo2` varchar(250) NOT NULL,
  `Photo3` varchar(250) NOT NULL,
  `Photo4` varchar(250) NOT NULL,
  `Photo5` varchar(250) NOT NULL,
  `photo6` varchar(255) NOT NULL,
  `photo7` varchar(255) NOT NULL,
  `photo8` varchar(255) NOT NULL,
  `photo9` varchar(255) NOT NULL,
  `photo10` varchar(255) NOT NULL,
  `Id_Cat_Department` int(20) NOT NULL,
  `Id_Cat_City` int(20) NOT NULL,
  `Id_Cat_Zone` int(20) NOT NULL,
  `Id_Cat_Area` int(11) NOT NULL,
  `Id_Cat_Road_To` int(11) NOT NULL,
  `Id_Cat_Enter_To` int(11) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Mts2` int(6) NOT NULL,
  `Rooms` int(6) NOT NULL,
  `Principal_Room_Walking_Closet` tinyint(1) NOT NULL,
  `Principal_Room_Bathroom` tinyint(1) NOT NULL,
  `Service_Room` tinyint(1) NOT NULL,
  `Studio` tinyint(1) NOT NULL,
  `Qty_Bathrooms` tinyint(4) NOT NULL,
  `Balcony` tinyint(1) NOT NULL,
  `Balcony_mts2` smallint(6) NOT NULL,
  `Living_Room` tinyint(1) NOT NULL,
  `Dining_Room` tinyint(1) NOT NULL,
  `Family_Room` tinyint(1) NOT NULL,
  `Kitchen` tinyint(1) NOT NULL,
  `Storage` tinyint(1) NOT NULL,
  `Storage_mts2` smallint(6) NOT NULL,
  `Parking` tinyint(4) NOT NULL,
  `Recreational_Areas` tinyint(1) NOT NULL,
  `Business_Center` tinyint(1) NOT NULL,
  `Building_Garden` tinyint(1) NOT NULL,
  `Gym` tinyint(1) NOT NULL,
  `Cat_Type_Laundry` int(10) NOT NULL,
  `Level` int(3) NOT NULL,
  `Elevator` tinyint(1) NOT NULL,
  `Id_Type_Apartment` int(10) NOT NULL,
  `Penthouse` tinyint(1) NOT NULL,
  `Apartment_Garden` tinyint(1) NOT NULL,
  `Pergola` tinyint(1) NOT NULL,
  `Comments` varchar(300) NOT NULL,
  `Created_Date` datetime NOT NULL,
  PRIMARY KEY (`Id_Apartment`),
  KEY `Status_Property` (`Status_Property`),
  KEY `Id_User` (`Id_User`),
  KEY `Id_Commision_Type` (`Id_Comission_Type`),
  KEY `Id_transaction_Type` (`Id_Transaction_Type`),
  KEY `Id_Cat_Department` (`Id_Cat_Department`),
  KEY `Id_Cat_City` (`Id_Cat_City`),
  KEY `Id_Cat_Zone` (`Id_Cat_Zone`),
  KEY `Id_Cat_Area` (`Id_Cat_Area`),
  KEY `Id_Cat_Road_To` (`Id_Cat_Road_To`),
  KEY `Id_Cat_Enter_To` (`Id_Cat_Enter_To`),
  KEY `Cat_Type_Laundry` (`Cat_Type_Laundry`),
  KEY `Id_Type_Apartment` (`Id_Type_Apartment`),
  KEY `Id_Broker_In` (`Id_Broker_In`),
  KEY `Id_Broker_Out` (`Id_Broker_Out`),
  KEY `Id_Developer` (`Id_Developer`),
  KEY `Id_Particular` (`Id_Particular`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`Id_Apartment`, `Status_Property`, `Id_User`, `Id_Broker_Out`, `Id_Broker_In`, `Id_Developer`, `Id_Particular`, `Date_In`, `Date_Out`, `Expiration_Date`, `Price_dollar`, `Id_Comission_Type`, `Id_Transaction_Type`, `Photo1`, `Photo2`, `Photo3`, `Photo4`, `Photo5`, `photo6`, `photo7`, `photo8`, `photo9`, `photo10`, `Id_Cat_Department`, `Id_Cat_City`, `Id_Cat_Zone`, `Id_Cat_Area`, `Id_Cat_Road_To`, `Id_Cat_Enter_To`, `Address`, `Mts2`, `Rooms`, `Principal_Room_Walking_Closet`, `Principal_Room_Bathroom`, `Service_Room`, `Studio`, `Qty_Bathrooms`, `Balcony`, `Balcony_mts2`, `Living_Room`, `Dining_Room`, `Family_Room`, `Kitchen`, `Storage`, `Storage_mts2`, `Parking`, `Recreational_Areas`, `Business_Center`, `Building_Garden`, `Gym`, `Cat_Type_Laundry`, `Level`, `Elevator`, `Id_Type_Apartment`, `Penthouse`, `Apartment_Garden`, `Pergola`, `Comments`, `Created_Date`) VALUES
(66, 1, 7, 2, 2, 4, 6, '2019-02-27', '2019-02-27', '2019-02-27', '5', 6, 5, 'a (10).jpg', 'a (11).jpg', 'a (6).jpg', '2018_02_03.jpg', 'course-4.jpg', 'dish-2.jpg', 'defaultdg.png', 'bg_6.jpg', 'course-1.jpg', 'blog_1.jpg', 4, 8, 11, 7, 5, 4, 'yy', 53, 2, 2, 2, 1, 2, 2, 2, 53, 2, 1, 2, 1, 1, 1, 0, 2, 2, 2, 2, 7, 0, 2, 1, 2, 2, 2, 'oo', '2019-02-27 00:00:00'),
(67, 4, 1, 9, 2, 4, 6, '2020-09-30', '2020-10-29', '2020-09-17', '545', 10, 6, '300_2.jpg', '300_19.jpg', '300_8.jpg', '100_10.jpg', '100_1.jpg', '13.jpg', '21.jpg', '16.jpg', '0010.jpg', '300_12.jpg', 8, 6, 8, 6, 2, 1, 'Address', 0, 0, 1, 1, 2, 2, 1, 1, 2, 2, 2, 1, 1, 2, 2, 1, 2, 1, 1, 1, 3, 0, 2, 1, 2, 1, 1, 'Commen', '2020-09-26 16:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `broker_in`
--

CREATE TABLE IF NOT EXISTS `broker_in` (
  `Broker_In` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL DEFAULT '',
  `Email` varchar(255) NOT NULL DEFAULT '',
  `Phone` int(11) NOT NULL,
  `Created_Date` datetime NOT NULL,
  PRIMARY KEY (`Broker_In`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `broker_in`
--

INSERT INTO `broker_in` (`Broker_In`, `Name`, `Email`, `Phone`, `Created_Date`) VALUES
(2, 'Hardik', 'hardikdayani1@gmail.com', 2147483647, '2018-12-04 16:17:30'),
(4, 'Vi', 'admin@gmail.c', 21, '2019-02-23 07:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `broker_out`
--

CREATE TABLE IF NOT EXISTS `broker_out` (
  `Id_Broker_Out` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL DEFAULT '',
  `Email` varchar(255) NOT NULL DEFAULT '',
  `Phone` int(11) NOT NULL,
  `Pbx` int(20) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Created_Date` datetime NOT NULL,
  PRIMARY KEY (`Id_Broker_Out`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `broker_out`
--

INSERT INTO `broker_out` (`Id_Broker_Out`, `Name`, `Email`, `Phone`, `Pbx`, `Company`, `Comment`, `Created_Date`) VALUES
(2, 'Hardik', 'hardikdayani1@gmail.com', 2147483647, 123456, 'bladephp', 'welcome', '2018-12-04 16:08:16'),
(9, 'Vipulvv', 'admin@gmail.comvv', 77, 4567777, '456vv', 'ssvvvv', '2019-02-23 05:59:17'),
(10, 'a', 'admin@gmail.com', 89456, 4567777, 'aa', 'aa', '2019-02-23 05:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `cat_area`
--

CREATE TABLE IF NOT EXISTS `cat_area` (
  `Id_Cat_Area` int(11) NOT NULL AUTO_INCREMENT,
  `Area` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Cat_Area`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cat_area`
--

INSERT INTO `cat_area` (`Id_Cat_Area`, `Area`) VALUES
(1, 'Naranjo'),
(2, 'Kanajuyu'),
(3, 'Ciudad San Cristobal'),
(4, 'Cayalá'),
(5, 'El Pulté'),
(6, 'El Naranjo'),
(7, 'cat_area'),
(8, 'Sueor_cut'),
(9, 'Sueor'),
(10, 'Sueor_cut');

-- --------------------------------------------------------

--
-- Table structure for table `cat_city`
--

CREATE TABLE IF NOT EXISTS `cat_city` (
  `Id_Cat_City` int(11) NOT NULL AUTO_INCREMENT,
  `City` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_Cat_City`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cat_city`
--

INSERT INTO `cat_city` (`Id_Cat_City`, `City`) VALUES
(1, 'Guatemala'),
(2, 'Dhol'),
(3, 'Surat'),
(4, 'Bhavnager'),
(5, 'Bhavnager'),
(6, 'Surat'),
(7, 'Surat'),
(8, 'Surat'),
(9, 'Bha'),
(10, 'Surat_Cut');

-- --------------------------------------------------------

--
-- Table structure for table `cat_comission_type`
--

CREATE TABLE IF NOT EXISTS `cat_comission_type` (
  `Id_Cat_Comission_Type` int(11) NOT NULL AUTO_INCREMENT,
  `Comission_Type` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Cat_Comission_Type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cat_comission_type`
--

INSERT INTO `cat_comission_type` (`Id_Cat_Comission_Type`, `Comission_Type`) VALUES
(1, 'D'),
(2, 'C'),
(3, 'H'),
(4, 'V'),
(6, 'W'),
(10, 'Q'),
(11, 'T'),
(12, 'I'),
(13, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `cat_department`
--

CREATE TABLE IF NOT EXISTS `cat_department` (
  `Id_Department` int(11) NOT NULL AUTO_INCREMENT,
  `Department` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_Department`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `cat_department`
--

INSERT INTO `cat_department` (`Id_Department`, `Department`) VALUES
(1, 'Alta Verapaz'),
(2, 'Baja Verapaz'),
(3, 'Chimaltenango'),
(4, 'Chiquimula'),
(5, 'El Progreso'),
(6, 'Escuintla'),
(7, 'Guatemala'),
(8, 'Huehuetenango'),
(9, 'Izabal'),
(10, 'Jalapa'),
(11, 'Jutiapa'),
(12, 'Petén'),
(13, 'Quetzaltenango'),
(14, 'Quiché'),
(15, 'Retalhuleu'),
(16, 'Sacatepéquez'),
(17, 'San Marcos'),
(18, 'Santa Rosa'),
(19, 'Sololá'),
(20, 'Suchitepéquez'),
(21, 'Totonicapán');

-- --------------------------------------------------------

--
-- Table structure for table `cat_enter_to`
--

CREATE TABLE IF NOT EXISTS `cat_enter_to` (
  `Id_Enter_To` int(11) NOT NULL AUTO_INCREMENT,
  `Enter_To` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Enter_To`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cat_enter_to`
--

INSERT INTO `cat_enter_to` (`Id_Enter_To`, `Enter_To`) VALUES
(1, 'Fraijanes'),
(2, 'San José Pinula'),
(3, 'Olmeca'),
(4, 'test111'),
(7, 'Fraijanes');

-- --------------------------------------------------------

--
-- Table structure for table `cat_road_to`
--

CREATE TABLE IF NOT EXISTS `cat_road_to` (
  `Id_Road_To` int(11) NOT NULL AUTO_INCREMENT,
  `Road_To` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Road_To`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cat_road_to`
--

INSERT INTO `cat_road_to` (`Id_Road_To`, `Road_To`) VALUES
(1, 'A El Salvador'),
(2, 'Interamericana'),
(3, 'Al Atlantico'),
(4, 'test1'),
(5, 'aaadsd'),
(6, 'vdsdsdsdsdsdsdsdsds');

-- --------------------------------------------------------

--
-- Table structure for table `cat_transaction_type`
--

CREATE TABLE IF NOT EXISTS `cat_transaction_type` (
  `Id_Cat_Transaction_Type` int(11) NOT NULL AUTO_INCREMENT,
  `Transaction_Type` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Cat_Transaction_Type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cat_transaction_type`
--

INSERT INTO `cat_transaction_type` (`Id_Cat_Transaction_Type`, `Transaction_Type`) VALUES
(1, 'V'),
(2, 'R'),
(3, 'G'),
(4, 'O'),
(5, 'U'),
(6, 'pa'),
(9, 'sasa'),
(10, 'Osssaaa');

-- --------------------------------------------------------

--
-- Table structure for table `cat_type_apartment`
--

CREATE TABLE IF NOT EXISTS `cat_type_apartment` (
  `Id_Cat_Type_Apartment` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Apartment` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Cat_Type_Apartment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cat_type_apartment`
--

INSERT INTO `cat_type_apartment` (`Id_Cat_Type_Apartment`, `Type_Apartment`) VALUES
(1, 'P'),
(2, 'C'),
(3, 'D'),
(4, 'A'),
(7, 'Q'),
(8, 'W');

-- --------------------------------------------------------

--
-- Table structure for table `cat_type_laundry`
--

CREATE TABLE IF NOT EXISTS `cat_type_laundry` (
  `Id_Type_Laundry` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Laundry` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Type_Laundry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cat_type_laundry`
--

INSERT INTO `cat_type_laundry` (`Id_Type_Laundry`, `Type_Laundry`) VALUES
(1, 'C'),
(2, '2 en 1'),
(3, 'G1'),
(4, 'S2dddaaa'),
(6, 'a2'),
(7, 'C8'),
(9, 'C9');

-- --------------------------------------------------------

--
-- Table structure for table `cat_zone`
--

CREATE TABLE IF NOT EXISTS `cat_zone` (
  `Id_Zone` int(11) NOT NULL AUTO_INCREMENT,
  `Zone` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Zone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `cat_zone`
--

INSERT INTO `cat_zone` (`Id_Zone`, `Zone`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(46, '13');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `Id_Client` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Creation_Date` datetime NOT NULL,
  PRIMARY KEY (`Id_Client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id_Client`, `Name`, `Tel`, `Email`, `Comment`, `Creation_Date`) VALUES
(2, 'Hardik', '9979133538', 'hardikdayani2@gmail.com', 'Teting this cloient', '2018-12-04 10:21:00'),
(3, 'Hardik', '9979133538', 'admin@gmail.com', 'Welcome', '2018-12-04 11:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `Id_Developer` int(11) NOT NULL AUTO_INCREMENT,
  `NameCompany` varchar(100) NOT NULL,
  `NameContact1` varchar(100) NOT NULL,
  `Tel1` varchar(20) NOT NULL,
  `Email1` varchar(60) NOT NULL,
  `Position1` varchar(60) NOT NULL,
  `NameContact2` varchar(100) NOT NULL,
  `Tel2` varchar(20) NOT NULL,
  `Email2` varchar(60) NOT NULL,
  `Position2` varchar(60) NOT NULL,
  `Web` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL DEFAULT '',
  `Nit` varchar(255) NOT NULL DEFAULT '',
  `Comment` text NOT NULL,
  `Created_Date` datetime NOT NULL,
  PRIMARY KEY (`Id_Developer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`Id_Developer`, `NameCompany`, `NameContact1`, `Tel1`, `Email1`, `Position1`, `NameContact2`, `Tel2`, `Email2`, `Position2`, `Web`, `Address`, `Nit`, `Comment`, `Created_Date`) VALUES
(4, 'vipul1', 'dayania1', '9991', 'admin@gmail.com1', '9991', 'ouy1', '45646a1', 'admin@gmail.com1', 'out1', 'asd1', 'bgjk1', 'asdWWQ1', 'jk1', '2019-02-23 10:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE IF NOT EXISTS `particular` (
  `Id_Particular` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Created_Date` datetime NOT NULL,
  PRIMARY KEY (`Id_Particular`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`Id_Particular`, `Name`, `Email`, `Phone`, `Comment`, `Created_Date`) VALUES
(6, 'aa', 'techguy@utz.gt', '+91541564', 'aaa', '2019-02-23 12:49:11'),
(7, 'aa', 'aaaadmin@gmail.com', '77', 'asdasdadsda', '2019-02-23 12:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `requirement_apartment`
--

CREATE TABLE IF NOT EXISTS `requirement_apartment` (
  `Id_Requirement_Apartment` int(11) NOT NULL AUTO_INCREMENT,
  `Status_Requirement` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `Date_Requirement` date NOT NULL,
  `Date_Expiration` date NOT NULL,
  `Id_Department` int(11) NOT NULL,
  `Id_City` int(11) NOT NULL,
  `Id_Zone` int(11) NOT NULL,
  `Id_Enter_to` int(11) NOT NULL,
  `Id_Road_To` int(11) NOT NULL,
  `Id_Area` int(11) NOT NULL,
  `Minimun_Rooms` int(11) NOT NULL,
  `Minimun_Parking` int(11) NOT NULL,
  `PriceRequirement` decimal(10,0) NOT NULL,
  `Price_Range_dollar_Min` decimal(10,0) NOT NULL,
  `Price_Range_dollar_Max` decimal(10,0) NOT NULL,
  `Level_Range_Min` int(11) NOT NULL,
  `Level_Range_Max` int(11) NOT NULL,
  `Comments` varchar(250) NOT NULL,
  `Created_Date` datetime NOT NULL,
  PRIMARY KEY (`Id_Requirement_Apartment`),
  KEY `Status_requirement` (`Status_Requirement`),
  KEY `id_client` (`Id_Client`),
  KEY `id_department` (`Id_Department`),
  KEY `id_city` (`Id_City`),
  KEY `id_zone` (`Id_Zone`),
  KEY `id_enter_to` (`Id_Enter_to`),
  KEY `id_road_to` (`Id_Road_To`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `requirement_apartment`
--

INSERT INTO `requirement_apartment` (`Id_Requirement_Apartment`, `Status_Requirement`, `Id_Client`, `Date_Requirement`, `Date_Expiration`, `Id_Department`, `Id_City`, `Id_Zone`, `Id_Enter_to`, `Id_Road_To`, `Id_Area`, `Minimun_Rooms`, `Minimun_Parking`, `PriceRequirement`, `Price_Range_dollar_Min`, `Price_Range_dollar_Max`, `Level_Range_Min`, `Level_Range_Max`, `Comments`, `Created_Date`) VALUES
(5, 10, 3, '2019-05-20', '2019-05-20', 2, 2, 2, 1, 3, 3, 5, 5, '3', '1', '2', 10, 20, 'ddffdsf', '2019-05-20 00:00:00'),
(7, 1, 3, '2018-12-04', '2018-12-18', 3, 2, 2, 0, 0, 0, 5, 5, '3', '1', '2', 10, 20, 'ddffdsf', '2018-12-06 11:57:18'),
(18, 1, 3, '2019-05-20', '2019-05-20', 13, 1, 11, 1, 1, 1, 11, 123, '1321', '32132', '132', 1321, 3213, '1321', '2019-05-20 00:00:00'),
(20, 2, 3, '2018-12-31', '2018-12-31', 9, 1, 2, 2, 1, 6, 56464456, 456, '456', '4564', '564', 4546, 4564, 'qa', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL,
  `sitename` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website_url` varchar(255) NOT NULL DEFAULT '',
  `upload_logo` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `sitename`, `email`, `website_url`, `upload_logo`, `icon`) VALUES
(1, 'Admin', 'admin@gmail.com', 'www.google.com', '300_2.jpg', '300_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status_property`
--

CREATE TABLE IF NOT EXISTS `status_property` (
  `Id_Status_Property` int(11) NOT NULL AUTO_INCREMENT,
  `Status_Property` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Status_Property`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status_property`
--

INSERT INTO `status_property` (`Id_Status_Property`, `Status_Property`, `Description`) VALUES
(1, 'Active', 'Property is active to make search on it'),
(3, 'Testing', 'Testing'),
(4, 'ActivessSDF', 'xsx');

-- --------------------------------------------------------

--
-- Table structure for table `status_requirement`
--

CREATE TABLE IF NOT EXISTS `status_requirement` (
  `Id_Status_Requirement` int(11) NOT NULL AUTO_INCREMENT,
  `Status_Requirement` varchar(30) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_Status_Requirement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `status_requirement`
--

INSERT INTO `status_requirement` (`Id_Status_Requirement`, `Status_Requirement`, `Description`) VALUES
(1, 'Active', ''),
(2, 'Inactive', 'gfgfdgfgd'),
(8, 'vipulSS', 'ss'),
(9, 'vipul22', 'fff'),
(10, 'vipul1', 'dsds');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL DEFAULT '',
  `Password` varchar(255) NOT NULL DEFAULT '',
  `Last_Login` date NOT NULL,
  `Creation_Date` date NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Username`, `Email`, `Password`, `Last_Login`, `Creation_Date`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '2019-02-20', '2019-02-20'),
(7, 'iamalway', 'aaadmin@gmail.com', '12345655', '2019-02-19', '2019-02-19'),
(8, 'dsaaaa', 'vvvdmin@gmail.com', '123456456', '2019-02-20', '2019-02-20'),
(9, 'iamalway', 'adsmin@gmail.com', '123456789', '2019-03-04', '2019-03-04'),
(10, 'iamalway', 'admin@gmail.com', 'ss', '2019-05-02', '2019-05-02'),
(11, 'admin', 'admin@gmail.com', '123456', '2019-05-02', '2019-05-02'),
(12, 'iamalway', 'admin@gmail.com', '123456', '2019-05-02', '2019-05-02');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `Cat_Type_Laundry` FOREIGN KEY (`Cat_Type_Laundry`) REFERENCES `cat_type_laundry` (`Id_Type_Laundry`),
  ADD CONSTRAINT `Id_Cat_Area` FOREIGN KEY (`Id_Cat_Area`) REFERENCES `cat_area` (`Id_Cat_Area`),
  ADD CONSTRAINT `Id_Cat_City` FOREIGN KEY (`Id_Cat_City`) REFERENCES `cat_city` (`Id_Cat_City`),
  ADD CONSTRAINT `Id_Cat_Department` FOREIGN KEY (`Id_Cat_Department`) REFERENCES `cat_department` (`Id_Department`),
  ADD CONSTRAINT `Id_Cat_Enter_To` FOREIGN KEY (`Id_Cat_Enter_To`) REFERENCES `cat_enter_to` (`Id_Enter_To`),
  ADD CONSTRAINT `Id_Cat_Road_To` FOREIGN KEY (`Id_Cat_Road_To`) REFERENCES `cat_road_to` (`Id_Road_To`),
  ADD CONSTRAINT `Id_Cat_Zone` FOREIGN KEY (`Id_Cat_Zone`) REFERENCES `cat_zone` (`Id_Zone`),
  ADD CONSTRAINT `Id_Commision_Type` FOREIGN KEY (`Id_Comission_Type`) REFERENCES `cat_comission_type` (`Id_Cat_Comission_Type`),
  ADD CONSTRAINT `Id_transaction_Type` FOREIGN KEY (`Id_Transaction_Type`) REFERENCES `cat_transaction_type` (`Id_Cat_Transaction_Type`),
  ADD CONSTRAINT `Id_Type_Apartment` FOREIGN KEY (`Id_Type_Apartment`) REFERENCES `cat_type_apartment` (`Id_Cat_Type_Apartment`),
  ADD CONSTRAINT `Id_User` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  ADD CONSTRAINT `Status_Property` FOREIGN KEY (`Status_Property`) REFERENCES `status_property` (`Id_Status_Property`);

--
-- Constraints for table `requirement_apartment`
--
ALTER TABLE `requirement_apartment`
  ADD CONSTRAINT `id_city` FOREIGN KEY (`Id_City`) REFERENCES `cat_city` (`Id_Cat_City`),
  ADD CONSTRAINT `id_client` FOREIGN KEY (`Id_Client`) REFERENCES `client` (`Id_Client`),
  ADD CONSTRAINT `id_department` FOREIGN KEY (`Id_Department`) REFERENCES `cat_department` (`Id_Department`),
  ADD CONSTRAINT `id_zone` FOREIGN KEY (`Id_Zone`) REFERENCES `cat_zone` (`Id_Zone`),
  ADD CONSTRAINT `Status_requirement` FOREIGN KEY (`Status_Requirement`) REFERENCES `status_requirement` (`Id_Status_Requirement`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
