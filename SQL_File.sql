-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 02:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nwasco`
--

-- --------------------------------------------------------

--
-- Table structure for table `cunits`
--

CREATE TABLE IF NOT EXISTS `cunits` (
  `cu_id` int(11) NOT NULL AUTO_INCREMENT,
  `utility` varchar(255) NOT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cunits`
--

INSERT INTO `cunits` (`cu_id`, `utility`) VALUES
(1, 'Luapula WSC'),
(2, 'Chambeshi WSC'),
(3, 'Eastern WSC'),
(4, 'Lukanga'),
(5, 'Mulonga WSC'),
(6, 'Nkana WSC'),
(7, 'Kafubu WSC'),
(8, 'Lusaka WSC'),
(9, 'Southern WSC'),
(10, 'Western WSC'),
(11, 'North Western WSC');

-- --------------------------------------------------------

--
-- Table structure for table `directives`
--

CREATE TABLE IF NOT EXISTS `directives` (
  `dir_id` int(11) NOT NULL AUTO_INCREMENT,
  `directive` mediumtext,
  `issue_date` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `utility_id` int(11) NOT NULL,
  PRIMARY KEY (`dir_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `directives`
--

INSERT INTO `directives` (`dir_id`, `directive`, `issue_date`, `due_date`, `status`, `utility_id`) VALUES
(1, 'Immediately stop selective reporting of water quality results and ensure that all tests conducted by districts are included in quarterly water quality reports submitted to NWASCO, particularly in the Northern Regional Office. Such ill reporting will attract a penalty on your overall 2014 water quality results.', '27/01/2015', '27/01/2015', NULL, 11),
(2, 'Immediately start using the 2010 ZABS Standards on Drinking Water Quality of 5 NTU for turbidity in the Northern Region and not the limit of 10 NTU.', '27/01/2015', '27/01/2015', NULL, 10),
(3, 'Immediately put in place remedial measures to stabilise pH for the water supplied in Zimba district. ', '27/01/2015', '27/01/2015', NULL, 2),
(4, 'Conduct an assessment of the viability of kiosks and ensure that all those that were inactive were decommissioned particularly the 38 that were noted in Livingstone to avoid double counting when assessing water service coverage.', '27/01/2015', '27/02/2015', NULL, 2),
(5, 'Immediately start expensing the 40% vendor commission from the kiosks’ collections and include it in the total collections for the company.', '27/01/2015', '27/01/2015', NULL, 3),
(6, 'Address rampant sewage overflows in Livingstone.', '27/01/2015', '27/02/2015', NULL, 7),
(7, 'Ensure that you reconcile the ring-fenced meter charge funds (Maamba collections) and the expected funds to be ring-fenced and therefore deposit the difference in the ring-fenced account.', '27/01/2015', '27/02/2015', NULL, 9),
(8, 'Ensure that all the districts / centres keep records for collections, banking and water quality test results in the company’s prescribed format.', '27/01/2015', '27/02/2015', NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `directive_cats`
--

CREATE TABLE IF NOT EXISTS `directive_cats` (
  `dir_id` int(11) NOT NULL DEFAULT '0',
  `directive_cat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dir_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directive_cats`
--

INSERT INTO `directive_cats` (`dir_id`, `directive_cat`) VALUES
(1, 'Annual Inspection Directives'),
(2, 'Spot Check Inspection Directives'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `level_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `name`) VALUES
(1, 'Administrator'),
(2, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `licence_conditions`
--

CREATE TABLE IF NOT EXISTS `licence_conditions` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `licence` varchar(255) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `utility_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `licence_conditions`
--

INSERT INTO `licence_conditions` (`l_id`, `licence`, `issue_date`, `due_date`, `status`, `utility_id`, `town_id`) VALUES
(1, 'The provisions concerning the transfer or amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 1, 1),
(2, 'License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 2, 2),
(3, 'The provisions concerning the transfer or amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 3, 3),
(4, 'Amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 4, 4),
(5, 'The provisions concerning the transfer or amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 5, 5),
(6, 'Penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 6, 6),
(7, 'The provisions concerning the transfer or amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 7, 7),
(8, 'The provisions concerning the transfer or amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 8, 8),
(9, 'Infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 9, 9),
(10, 'The provisions concerning the transfer or amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 10, 10),
(11, 'The provisions concerning the transfer or amendments of the License, penalty for infringement of the provisions of the License, and its suspension or cancellation shall be enforced as specified in the Water Supply and Sanitation Act No. 28 of 1997.', '0000-00-00', '0000-00-00', NULL, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `project` varchar(255) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `utility_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`proj_id`, `project`, `start_date`, `end_date`, `status`, `utility_id`, `town_id`) VALUES
(1, 'Water and Sanitation Project in Livingstone  Raw Water Intake Equipping, Raising Main Line replacement, Reservoirs, Network replacement and metering', '0000-00-00', '0000-00-00', NULL, 1, 1),
(2, 'Choma upgrading of Production and Supply to match the Provincial Capital City status. Abstraction Plants-Dam , Treatment Plants, Network rehab, and Metering', '0000-00-00', '0000-00-00', NULL, 2, 2),
(3, 'Chandamali Water Supply Project', '0000-00-00', '0000-00-00', NULL, 3, 3),
(4, 'Libuyu Sanitation project phase II ', '0000-00-00', '0000-00-00', NULL, 4, 4),
(5, 'Water and Sanitation Project in Livingstone  Raw Water Intake Equipping, Raising Main Line replacement, Reservoirs, Network replacement and metering', '2042-00-08', '0000-00-00', NULL, 5, 5),
(6, 'Choma upgrading of Production and Supply to match the Provincial Capital City status. Abstraction Plants-Dam , Treatment Plants, Network rehab, and Metering', '0000-00-00', '0000-00-00', NULL, 6, 6),
(7, 'Chandamali Water Supply Project', '0000-00-00', '0000-00-00', NULL, 7, 7),
(8, 'Libuyu Sanitation project phase II ', '0000-00-00', '0000-00-00', NULL, 8, 8),
(9, 'Water and Sanitation Project in Livingstone  Raw Water Intake Equipping, Raising Main Line replacement, Reservoirs, Network replacement and metering', '0000-00-00', '0000-00-00', NULL, 9, 9),
(10, 'Choma upgrading of Production and Supply to match the Provincial Capital City status. Abstraction Plants-Dam , Treatment Plants, Network rehab, and Metering', '2043-10-00', '0000-00-00', NULL, 10, 10),
(11, 'Chandamali Water Supply Project', '0000-00-00', '0000-00-00', NULL, 11, 11);

-- --------------------------------------------------------


--
-- Table structure for table `sessions_table`
--

CREATE TABLE IF NOT EXISTS `sessions_table` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_session_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions_table`
--

INSERT INTO `sessions_table` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1f3b392a4db7285ed99e123cc7a651a737dba63d', '::1', 1462293489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323239333438393b),
('9b3e8163ab5a6fd7092569e39c4be2aa0bd12f67', '::1', 1462290128, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323239303132383b);
-- --------------------------------------------------------

--
-- Table structure for table `srs`
--

CREATE TABLE IF NOT EXISTS `srs` (
  `srs_id` int(11) NOT NULL DEFAULT '0',
  `Indicator` varchar(255) DEFAULT NULL,
  `Base` double DEFAULT NULL,
  `Target` double DEFAULT NULL,
  `Due Date` datetime DEFAULT NULL,
  `Achieved` double DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Comments` varchar(255) DEFAULT NULL,
  `utility_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `srs`
--

INSERT INTO `srs` (`srs_id`, `Indicator`, `Base`, `Target`, `Due Date`, `Achieved`, `Status`, `Comments`, `utility_id`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tariff_conditions`
--

CREATE TABLE IF NOT EXISTS `tariff_conditions` (
  `tariff_id` int(11) NOT NULL AUTO_INCREMENT,
  `condition` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `utility_id` int(11) NOT NULL,
  PRIMARY KEY (`tariff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tariff_conditions`
--

INSERT INTO `tariff_conditions` (`tariff_id`, `condition`, `weight`, `score`, `due_date`, `status`, `remarks`, `utility_id`) VALUES
(1, 'Ensure that actual costs do not exceed an adverse variance of 10% of the approved cost structure (ZMW50, 750,739) for 2015.', 10, NULL, '2015-08-01', NULL, NULL, 2),
(2, 'Maintain an average collection efficiency of at least 85% throughout the tariff period', 20, NULL, '2015-09-01', NULL, NULL, 3),
(3, 'Achieve an O&M cost coverage rate of at least 116%  at 85% collection efficiency by August 2015', 20, NULL, '2015-10-01', NULL, NULL, 0),
(4, 'Increase total customer base by at least 2,400 connections by 31st August 2015 from the current 40,965 total connections.', 10, NULL, '2015-11-01', NULL, NULL, 7),
(5, 'Install 4,000 meters by 31st August 2015. ', 10, NULL, '2015-12-01', NULL, NULL, 2),
(6, 'Maintain water quality compliance above 95% throughout the tariff period.', 20, NULL, '2016-01-01', NULL, NULL, 0),
(7, 'Remain current on NWASCO license fees throughout 2015', 10, NULL, '2016-02-01', NULL, NULL, 0),
(8, 'Ring fence the fixed meter charge throughout the tariff period', 10, NULL, '2016-03-01', NULL, NULL, 7),
(9, 'Ring fence 20% of the sewerage billing throughout the tariff period', 10, NULL, '2016-04-01', NULL, NULL, 0),
(10, 'Ensure that external auditing of Financial Statements is up to date.', 10, NULL, '2016-05-01', NULL, NULL, 2),
(11, 'Ensure that no meter remains stuck for longer than 3 months', 5, NULL, '2016-06-01', NULL, NULL, 0),
(12, 'Submit an energy consumption reduction strategy by 31st January 2014 and report on implementation biannually within the tariff period.', 10, NULL, '2016-07-01', NULL, NULL, 0),
(13, 'Fully adhere to the 2015 Service Level Guarantees.', 20, NULL, '2016-08-01', NULL, NULL, 0),
(14, 'Extend service to Chandamali and Manungu Compounds Choma and Monze respectively by ', 10, NULL, '2016-09-01', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE IF NOT EXISTS `towns` (
  `town_id` int(11) NOT NULL AUTO_INCREMENT,
  `town` varchar(255) DEFAULT NULL,
  `utility_id` varchar(11) NOT NULL,
  PRIMARY KEY (`town_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`town_id`, `town`, `utility_id`) VALUES
(1, 'Kalabo', '10'),
(2, 'Kaoma', '10'),
(3, 'Limulungu', '10'),
(4, 'Luampa', '10'),
(5, 'Lukulu', '10'),
(6, 'Mitete', '10'),
(7, 'Mongu', '10'),
(8, 'Mulobezi', '10'),
(9, 'Mwandi', '10'),
(10, 'Nalolo', '10'),
(11, 'Nkeyama', '10'),
(12, 'Senanga', '10'),
(13, 'Sesheke', '10'),
(14, 'Shangombo', '10'),
(15, 'Sikongo', '10'),
(16, 'Sioma', '10'),
(17, 'Chiengi', '1'),
(18, 'Chipili', '1'),
(19, 'Chembe', '1'),
(20, 'Kawambwa', '1'),
(21, 'Lunga', '1'),
(22, 'Mansa', '1'),
(23, 'Milenge', '1'),
(24, 'Mwansabobwe', '1'),
(25, 'Mwense', '1'),
(26, 'Nchelenge', '1'),
(27, 'Samfya', '1'),
(28, 'Chinsali', '2'),
(29, 'Isoka', '2'),
(30, 'Mafinga', '2'),
(31, 'Mpika', '2'),
(32, 'Nakonde', '2'),
(33, 'Shiwa''Ngandu ', '2'),
(34, 'Chilubi', '2'),
(35, 'Kaputa', '2'),
(36, 'Kasama', '2'),
(37, 'Luwingu', '2'),
(38, 'Mbala', '2'),
(39, 'Mporokoso', '2'),
(40, 'Mpulungu', '2'),
(41, 'Mungwi', '2'),
(42, 'Nsama', '2'),
(43, 'Chadiza', '3'),
(44, 'Chama', '3'),
(45, 'Chipata', '3'),
(46, 'Katete', '3'),
(47, 'Lundazi', '3'),
(48, 'Mambwe', '3'),
(49, 'Nyimba', '3'),
(50, 'Petauke', '3'),
(51, 'Sinda', '3'),
(52, 'Vubwi', '3'),
(53, 'Chibombo', '4'),
(54, 'Chisamba', '4'),
(55, 'Chitambo', '4'),
(56, 'Itezhi-Tezhi', '4'),
(57, 'Kabwe', '4'),
(58, 'Kapiri', '4'),
(59, 'Mposhi', '4'),
(60, 'Luano', '4'),
(61, 'Mkushi', '4'),
(62, 'Mumbwa', '4'),
(63, 'Ngabwe', '4'),
(64, 'Serenje', '4'),
(65, 'Chinsali', '5'),
(66, 'Isoka', '5'),
(67, 'Mafinga', '5'),
(68, 'Mpika', '5'),
(69, 'Nakonde', '5'),
(70, 'Shiwa''Ngandu ', '5'),
(71, 'Chilubi', '5'),
(72, 'Kaputa', '5'),
(73, 'Kasama', '5'),
(74, 'Luwingu', '5'),
(75, 'Mbala', '5'),
(76, 'Mporokoso', '5'),
(77, 'Mpulungu', '5'),
(78, 'Mungwi', '5'),
(79, 'Nsama', '5'),
(80, 'Chililabombwe', '6'),
(81, 'Chingola', '6'),
(82, 'Mufulira', '6'),
(83, 'Luanshya', '7'),
(84, 'Kabwe', '6'),
(85, 'Livingstone', '9'),
(86, 'Kazungula', '9'),
(87, 'Namwala', '9'),
(88, 'Mbabala', '9'),
(89, 'Choma', '9'),
(90, 'Pemba', '9'),
(91, 'Batoka', '9'),
(92, 'Sinazongwe', '9'),
(93, 'Kalomo', '9'),
(94, 'Zimba', '9'),
(95, 'Sinazeze', '9'),
(96, 'Maamba', '9'),
(97, 'Siavonga', '9'),
(98, 'Mazabuka', '9'),
(99, 'Nega-Nega', '9'),
(100, 'monze', '9'),
(101, 'chisekesi', '9'),
(102, 'Gwembe', '9'),
(103, 'Munyumbwe', '9'),
(104, 'Chilanga', '8'),
(105, 'Chirundu', '8'),
(106, 'Chongwe', '8'),
(107, 'Kafue', '8'),
(108, 'Luangwa', '8'),
(109, 'Lusaka', '8'),
(110, 'Rufunsa', '8'),
(111, 'Shibuyunji', '8'),
(112, 'Chavuma', '11'),
(113, 'Ikelenge', '11'),
(114, 'Kabompo', '11'),
(115, 'Kasempa', '11'),
(116, 'Manyinga', '11'),
(117, 'Mufumbwe', '11'),
(118, 'Mwinilunga', '11'),
(119, 'Solwezi', '11'),
(120, 'Zambezi', '11'),
(121, 'Masaiti', '7'),
(122, 'Ndola', '7');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `utility_id` int(11) NOT NULL,
  `level` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `password`, `email`, `utility_id`, `level`) VALUES
(1, 'trudy', 'hope', '21232f297a57a5a743894a0e4a801fc3', 'admin@g.com', 0, 1),
(2, 'daniel', 'omara', '21232f297a57a5a743894a0e4a801fc3', 'dan@g.com', 1, 2),
(3, 'nkutu', 'yusuf', '21232f297a57a5a743894a0e4a801fc3', 'nkutu@g.com', 2, 1),
(4, 'omax', 'danny', '21232f297a57a5a743894a0e4a801fc3', 'omax@g.com', 7, 1),
(5, 'jack', 'malisu', '21232f297a57a5a743894a0e4a801fc3', 'jack@g.com', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wwwgs`
--

CREATE TABLE IF NOT EXISTS `wwwgs` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `Group Name` varchar(255) DEFAULT NULL,
  `Costitution Date` datetime DEFAULT NULL,
  `Expiry Date` datetime DEFAULT NULL,
  `utility_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wwwgs`
--

INSERT INTO `wwwgs` (`group_id`, `Group Name`, `Costitution Date`, `Expiry Date`, `utility_id`) VALUES
(1, 'Livingstone', NULL, NULL, 0),
(2, NULL, NULL, NULL, 0),
(3, NULL, NULL, NULL, 0),
(4, NULL, NULL, NULL, 0),
(5, NULL, NULL, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
