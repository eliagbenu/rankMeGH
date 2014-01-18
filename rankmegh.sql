-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2014 at 01:56 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rankmegh`
--
CREATE DATABASE IF NOT EXISTS `rankmegh` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rankmegh`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_budget_type`
--

CREATE TABLE IF NOT EXISTS `tbl_budget_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(150) NOT NULL,
  `score` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_budget_type`
--

INSERT INTO `tbl_budget_type` (`id`, `description`, `score`) VALUES
(1, 'Agric', 5),
(2, 'Education', 7),
(3, 'Infrastructure', 5),
(4, 'Water and Sanitation', 12),
(5, 'Health', 8),
(6, 'Employment Creation', 4),
(7, 'Crime and Security', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE IF NOT EXISTS `tbl_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=220 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`id`, `district_name`, `region`) VALUES
(1, 'Ledzokuku-Krowor Municipal District', '1'),
(2, 'La Nkwantanang Madina District', '1'),
(3, 'La Dade Kotopon Municipal District', '1'),
(4, 'Adansi North ', '6'),
(5, 'Adansi South ', '6'),
(6, 'Afigya-Kwabre ', '6'),
(7, 'Ahafo Ano North ', '6'),
(8, 'Ahafo Ano South ', '6'),
(9, 'Amansie Central ', '6'),
(10, 'Amansie West ', '6'),
(11, 'Asante Akim Central Municipal ', '6'),
(12, 'Asante Akim North ', '6'),
(13, 'Asante Akim South ', '6'),
(14, 'Asokore Mampong Municipal ', '6'),
(15, 'Atwima Kwanwoma ', '6'),
(16, 'Atwima Mponua ', '6'),
(17, 'Atwima Nwabiagya ', '6'),
(18, 'Bekwai Municipal ', '6'),
(19, 'Bosome Freho ', '6'),
(20, 'Botsomtwe ', '6'),
(21, 'Ejisu-Juaben Municipal ', '6'),
(22, 'Ejura - Sekyedumase ', '6'),
(23, 'Kumasi Metropolitan ', '6'),
(24, 'Kumawu ', '6'),
(25, 'Kwabre East ', '6'),
(26, 'Mampong Municipal ', '6'),
(27, 'Obuasi Municipal ', '6'),
(28, 'Offinso North ', '6'),
(29, 'Offinso South Municipal ', '6'),
(30, 'Sekyere Afram Plains ', '6'),
(31, 'Sekyere Central ', '6'),
(32, 'Sekyere East ', '6'),
(33, 'Sekyere South ', '6'),
(35, 'Asunafo North Municipal', '5'),
(36, 'Asunafo South ', '5'),
(37, 'Asutifi ', '5'),
(38, 'Asutifi South ', '5'),
(39, 'Atebubu-Amantin ', '5'),
(40, 'Banda ', '5'),
(41, 'Berekum Municipal', '5'),
(42, 'Dormaa East ', '5'),
(43, 'Dormaa Municipal', '5'),
(44, 'Dormaa West ', '5'),
(45, 'Jaman North ', '5'),
(46, 'Jaman South ', '5'),
(47, 'Kintampo North Municipal', '5'),
(48, 'Kintampo South ', '5'),
(49, 'Nkoranza North ', '5'),
(50, 'Nkoranza South Municipal', '5'),
(51, 'Pru ', '5'),
(52, 'Sene ', '5'),
(53, 'Sene West ', '5'),
(54, 'Sunyani Municipal', '5'),
(55, 'Sunyani West ', '5'),
(56, 'Tain ', '5'),
(57, 'Tano North ', '5'),
(58, 'Tano South ', '5'),
(59, 'Techiman Municipal', '5'),
(60, 'Techiman North ', '5'),
(61, 'Wenchi Municipal', '5'),
(62, 'Abura/Asebu/Kwamankese District', '3'),
(63, 'Agona East District', '3'),
(64, 'Agona West Municipal District', '3'),
(65, 'Ajumako/Enyan/Essiam District', '3'),
(66, 'Asikuma/Odoben/Brakwa District', '3'),
(67, 'Assin North Municipal District', '3'),
(68, 'Assin South District', '3'),
(69, 'Awutu-Senya District', '3'),
(70, 'Awutu Senya East District', '3'),
(71, 'Cape Coast Metropolitan District', '3'),
(72, 'Effutu Municipal District', '3'),
(73, 'Ekumfi District', '3'),
(74, 'Gomoa East District', '3'),
(75, 'Gomoa West District', '3'),
(76, 'Komenda/Edina/Eguafo/Abirem Municipal District', '3'),
(77, 'Mfantsiman Municipal District', '3'),
(78, 'Twifo-Ati Mokwa District', '3'),
(79, 'Twifo/Heman/Lower Denkyira District', '3'),
(80, 'Upper Denkyira East Municipal District', '3'),
(81, 'Upper Denkyira West District', '3'),
(82, 'Akuapim South District', '2'),
(83, 'Afram Plains South District', '2'),
(84, 'Akuapim North District', '2'),
(85, 'Akuapim South Municipal District', '2'),
(86, 'Akyemansa District', '2'),
(87, 'Asuogyaman District', '2'),
(88, 'Ayensuano District', '2'),
(89, 'Atiwa District', '2'),
(90, 'Birim Central Municipal District', '2'),
(91, 'Birim North District', '2'),
(92, 'Birim South District', '2'),
(93, 'Denkyembour District', '2'),
(94, 'East Akim Municipal District', '2'),
(95, 'Fanteakwa District', '2'),
(96, 'Kwaebibirem District', '2'),
(97, 'Kwahu East District', '2'),
(98, 'Kwahu North District', '2'),
(99, 'Kwahu South District', '2'),
(100, 'Kwahu West Municipal District', '2'),
(101, 'Lower Manya Krobo District', '2'),
(102, 'New-Juaben Municipal District', '2'),
(103, 'Suhum/Kraboa/Coaltar District', '2'),
(104, 'Upper Manya Krobo District', '2'),
(105, 'Upper West Akim District', '2'),
(106, 'West Akim Municipal District', '2'),
(107, 'Yilo Krobo District', '2'),
(108, 'Accra Metropolitan District', '1'),
(109, 'Ada West District', '1'),
(110, 'Adenta Municipal District', '1'),
(111, 'Ashaiman Municipal District', '1'),
(112, 'Dangme East District', '1'),
(113, 'Dangme West District', '1'),
(114, 'Ga Central District', '1'),
(115, 'Ga East Municipal District', '1'),
(116, 'Ga South Municipal District', '1'),
(117, 'Ga West Municipal District', '1'),
(118, 'Kpone Katamanso District', '1'),
(119, 'Test District 1', '1'),
(120, 'Test District 2', '1'),
(121, 'Test District 3', '1'),
(122, 'Ningo Prampram District', '1'),
(123, 'Tema Metropolitan District', '1'),
(124, 'Bole District', '7'),
(125, 'Bunkpurugu-Yunyoo District', '7'),
(126, 'Central Gonja District', '7'),
(127, 'Chereponi District', '7'),
(128, 'East Gonja District', '7'),
(129, 'East Mamprusi District', '7'),
(130, 'Gushegu District', '7'),
(131, 'Karaga District', '7'),
(132, 'Kpandai District', '7'),
(133, 'Kumbungu District', '7'),
(134, 'Mamprugo Moaduri District', '7'),
(135, 'Mion District', '7'),
(136, 'Nanumba North District', '7'),
(137, 'Nanumba South District', '7'),
(138, 'Saboba District', '7'),
(139, 'Sagnarigu District', '7'),
(140, 'Savelugu-Nanton District', '7'),
(141, 'Sawla-Tuna-Kalba District', '7'),
(142, 'Tamale Metropolitan District', '7'),
(143, 'Tatale Sangule District', '7'),
(144, 'Tolon District', '7'),
(145, 'West Gonja District', '7'),
(146, 'West Mamprusi District', '7'),
(147, 'Yendi Municipal District', '7'),
(148, 'Zabzugu District', '7'),
(149, 'Bawku Municipal District', '8'),
(150, 'Bawku West District', '8'),
(151, 'Binduri District', '8'),
(152, 'Bolgatanga Municipal District', '8'),
(153, 'Bongo District', '8'),
(154, 'Builsa District', '8'),
(155, 'Builsa South District', '8'),
(156, 'Garu-Tempane District', '8'),
(157, 'Kassena Nankana East District', '8'),
(158, 'Kassena Nankana West District', '8'),
(159, 'Nabdam District', '8'),
(160, 'Pusiga District', '8'),
(161, 'Talensi District', '8'),
(162, 'Daffiama Bussie Issa District', '10'),
(163, 'Jirapa District', '10'),
(164, 'Lambussie Karni District', '10'),
(165, 'Lawra District', '10'),
(166, 'Nadowli District', '10'),
(167, 'Nandom District', '10'),
(168, 'Sissala East District', '10'),
(169, 'Sissala West District', '10'),
(170, 'Wa East District', '10'),
(171, 'Wa Municipal District', '10'),
(172, 'Wa West District', '10'),
(173, 'Adaklu District', '9'),
(174, 'Afadjato District', '9'),
(175, 'Agotime Ziope District', '9'),
(176, 'Akatsi North District', '9'),
(177, 'Akatsi South District', '9'),
(178, 'Biakoye District', '9'),
(179, 'Central Tongu District', '9'),
(180, 'Ho Municipal District', '9'),
(181, 'Ho West District', '9'),
(182, 'Hohoe Municipal District', '9'),
(183, 'Jasikan District', '9'),
(184, 'Kadjebi District', '9'),
(185, 'Keta Municipal District', '9'),
(186, 'Ketu North District', '9'),
(187, 'Ketu South Municipal District', '9'),
(188, 'Kpando Municipal District', '9'),
(189, 'Krachi East District', '9'),
(190, 'Krachi Nchumuru District', '9'),
(191, 'Krachi West District', '9'),
(192, 'Nkwanta North District', '9'),
(193, 'Nkwanta South District', '9'),
(194, 'North Dayi District', '9'),
(195, 'North Tongu District', '9'),
(196, 'South Dayi District', '9'),
(197, 'South Tongu District', '9'),
(198, 'Ahanta West District', '4'),
(199, 'Aowin/Suaman District', '4'),
(200, 'Bia District', '4'),
(201, 'Bia East District', '4'),
(202, 'Bibiani/Anhwiaso/Bekwai District', '4'),
(203, 'Bodi District', '4'),
(204, 'Ellembele District', '4'),
(205, 'Jomoro District', '4'),
(206, 'Juabeso District', '4'),
(207, 'Mpohor District', '4'),
(208, 'Mpohor/Wassa East District', '4'),
(209, 'Nzema East Municipal District', '4'),
(210, 'Prestea-Huni Valley District', '4'),
(211, 'Sefwi Akontombra District', '4'),
(212, 'Sefwi-Wiawso District', '4'),
(213, 'Sekondi Takoradi Metropolitan Assembly', '4'),
(214, 'Shama District', '4'),
(215, 'Suaman District', '4'),
(216, 'Tarkwa-Nsuaem Municipal District', '4'),
(217, 'Wasa Amenfi East District', '4'),
(218, 'Wasa Amenfi West District', '4'),
(219, 'Wassa Amenfi Central District', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district_budget`
--

CREATE TABLE IF NOT EXISTS `tbl_district_budget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) DEFAULT NULL,
  `budget_amount` double DEFAULT NULL,
  `budget_source` varchar(150) DEFAULT NULL,
  `budget_type` int(11) DEFAULT NULL,
  `budget_year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_district_budget`
--

INSERT INTO `tbl_district_budget` (`id`, `district_id`, `budget_amount`, `budget_source`, `budget_type`, `budget_year`) VALUES
(6, 3, 3244, 'wqw', 2, 2),
(7, 3, 104, 'woqwow', 3, 2),
(8, 3, 2000, 'unicef', 2, 2),
(9, 2, 120, 'The Investors Group', 2, 2),
(10, 4, 123, 'ww', 2, 2),
(11, 1, 200000, 'Government of Ghana', 2, 2),
(12, 1, 150000, 'Danida', 1, 2),
(13, 10, 200000, 'Unicef', 2, 2),
(14, 10, 200000, 'Unicef', 2, 2),
(15, 10, 150000, 'Government of Ghana', 1, 2),
(16, 9, 150000, 'un', 7, 2),
(17, 47, 200000, 'govt', 2, 2),
(18, 7, 10000, 'Government', 0, 0),
(19, 7, 3500, 'Government', 5, 2),
(20, 89, 150000, 'Government of Ghana', 1, 2),
(21, 89, 200000, 'Unicef', 2, 2),
(22, 89, 40, 'Unicef', 4, 2),
(23, 96, 150000, 'Government of Ghana', 1, 2),
(24, 96, 200000, 'Unicef', 2, 2),
(25, 96, 40, 'Danida', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district_project`
--

CREATE TABLE IF NOT EXISTS `tbl_district_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(150) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `budget_type` int(11) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `description` text,
  `photos` varchar(250) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `budget_allocated` float DEFAULT NULL,
  `completion_date` date DEFAULT NULL,
  `completion_rate` int(11) DEFAULT NULL,
  `number_of_user_ratings` int(11) NOT NULL DEFAULT '0',
  `user_rating_score` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_district_project`
--

INSERT INTO `tbl_district_project` (`id`, `project_name`, `district_id`, `budget_type`, `location`, `description`, `photos`, `start_date`, `end_date`, `budget_allocated`, `completion_date`, `completion_rate`, `number_of_user_ratings`, `user_rating_score`) VALUES
(4, 'Pre-natal advice session', 2, 1, 'rrrr', 'wwrrrr', NULL, '2014-01-16', '2014-01-16', 234, '2014-01-09', NULL, 2, 13),
(5, 'Water Drainage works', 2, 1, 'erwrrr', 'errrf', NULL, '2014-01-01', '2014-01-14', 33, '2014-01-16', NULL, 6, 30),
(6, 'Clothes for primary pupils', 1, 1, 'rrrr', 'fwrwr', NULL, '2014-01-01', '2014-01-16', 23, '2014-01-17', NULL, 11, 98),
(7, 'Mid-wife roundups', 2, 1, 'rrffr', 'rwfrg', NULL, '2014-01-01', '2014-01-16', 23, '2014-01-14', NULL, 0, 0),
(8, 'Wash hands campaign', 1, 1, 'rrrr', 'wwwr', '', '2014-01-01', '2014-01-17', 23, '2014-01-23', NULL, 0, 0),
(9, 'Citizen Rights Workshop', 1, 1, 'rrrrr', 'rrr', '', '2014-01-01', '2014-01-15', 34, '2014-01-17', NULL, 0, 0),
(10, 'Free eye screening', 2, 1, 'vffffd', 'weffccdscs', '', '2014-01-01', '2014-01-17', 23, '2014-01-15', NULL, 0, 0),
(11, 'Unicef awareness workshop', 2, 1, 'vffffd', 'weffccdscs', '', '2014-01-01', '2014-01-17', 2323, '2014-01-15', NULL, 0, 0),
(12, 'Back to School Campaign', 1, 1, 'rrrr', 'tttet', '', '2014-01-01', '2014-01-17', 34, '2014-01-15', NULL, 0, 0),
(13, 'Construction of bore hole', 1, 4, 'Ashesi Keeper', 'Construction of bore hole', '', '2014-01-16', '2014-02-07', 12000, '2014-02-21', NULL, 0, 0),
(14, '6-unit classroom block', 9, 2, 'herty borngreat', '6-unit classroom block', '', '2014-01-23', '2015-04-15', 40000, '2015-04-17', NULL, 0, 0),
(15, 'Chps Compound', 47, 5, 'kintampo south', 'Chps Compound', '', '2014-01-24', '2015-01-15', 60000, '2015-12-30', NULL, 0, 0),
(16, 'Football Park', 110, 2, 'ashaley botwe down', 'Football Park', '', '2014-01-22', '2014-10-10', 9000, '2014-05-10', NULL, 2, 13),
(17, 'Digging of well', 7, 4, 'Near post office', 'This is for the digging of wells near post office', '', '2013-01-02', '2014-12-24', 900, '2014-01-31', NULL, 0, 0),
(18, 'Construction of a dam', 10, 1, 'Asante Bekwai', 'Its a project that would help reduce crop losses due to seasonal problems', '', '2013-01-03', '2013-12-03', 120, '2013-11-05', NULL, 1, 4),
(19, 'Provision of books ', 10, 2, 'Amansie districts', 'A special project to help pupils who cannot afford text books', '', '2013-01-01', '2014-01-16', 10, '2014-12-17', NULL, 0, 0),
(20, 'Cleaning gutters', 7, 3, 'All main streets', 'Cleaning gutters', '', '2014-01-30', '2014-02-12', 200, '2014-02-12', NULL, 0, 0),
(21, 'Construction of commercial pineapple farm', 89, 1, 'Kumawu', 'Build the farm that would produce food for export to create employment in Atiwa', '', '2013-01-07', '2015-12-16', 130, '2015-12-31', NULL, 0, 0),
(22, 'Construction of commercial pineapple farm', 89, 1, 'Kumawu', 'Build the farm that would produce food for export to create employment in Atiwa', '', '2013-01-07', '2015-12-16', 130, '2015-12-31', NULL, 0, 0),
(23, 'Building ICT lab', 89, 2, 'Agona', 'Improve ICT education in the area for the kids ', '', '2013-01-07', '2015-12-16', 180, '2014-01-17', NULL, 1, 9),
(24, 'Building ICT lab', 89, 2, 'Agona', 'Improve ICT education in the area for the kids ', '', '2013-01-07', '2015-12-16', 180, '2014-01-17', NULL, 0, 0),
(25, 'Bore-Hole project', 89, 4, 'Nukuona', 'Prevent water-borne sicknesses by creating a safer source of drinking water', '', '2013-01-07', '2015-12-16', 10, '2014-01-17', NULL, 0, 0),
(26, 'Refreshment for community leaders', 96, 1, 'Asunker', 'To help create enjoyment in the area', '', '2013-01-14', '2013-02-19', 140000, '2013-01-30', NULL, 0, 0),
(27, 'Media Campaigns for School Kids', 96, 2, 'The whole district', 'To create awareness on Education in the district', '', '2013-01-14', '2013-02-19', 190000, '2013-01-30', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district_project_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_district_project_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_district_project_comment`
--

INSERT INTO `tbl_district_project_comment` (`id`, `district_id`, `project_id`, `comment`) VALUES
(1, 2, 5, 'ewew'),
(2, 2, 4, 'it ain''t cool'),
(3, 2, 5, 'ok'),
(4, 110, 16, 'was this really constructed'),
(5, 10, 18, 'bulshit'),
(6, 1, 6, 'It was great!'),
(7, 1, 6, 'Really needed this assistance'),
(8, 1, 6, 'It was so great.'),
(9, 1, 6, 'It was great.Thank you'),
(10, 1, 6, 'Nice of you.Thanks'),
(11, 1, 6, 'It was needed'),
(12, 1, 6, 'It was really needed.'),
(13, 1, 6, 'Thanks alot.'),
(14, 1, 6, 'Nice of you.'),
(15, 1, 6, 'It was really, really great.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE IF NOT EXISTS `tbl_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_region`
--

INSERT INTO `tbl_region` (`id`, `region_name`) VALUES
(1, 'Greater Accra'),
(2, 'Eastern'),
(3, 'Central'),
(4, 'Western'),
(5, 'Brong Ahafo'),
(6, 'Ashanti'),
(7, 'Northern'),
(8, 'Upper East'),
(9, 'Volta'),
(10, 'Upper West');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) DEFAULT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(250) DEFAULT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `user_rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `district_id`, `username`, `password`, `first_name`, `last_name`, `user_rank`) VALUES
(1, 13, 'eli', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Eli', 'Agbenu', 1),
(2, 3, 'patrick', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Patrick', 'Farcon', 1),
(3, 26, 'abdul', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Abdul', 'Rahim', 1),
(4, 14, 'frank', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Frank', 'Agbeko', 1),
(5, 4, 'loretta', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Loretta', 'Cobbson', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rank`
--

CREATE TABLE IF NOT EXISTS `tbl_user_rank` (
  `id` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_rank`
--

INSERT INTO `tbl_user_rank` (`id`, `description`) VALUES
(1, 'Admin'),
(2, 'Entry Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE IF NOT EXISTS `tbl_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`id`, `year`, `start_date`, `end_date`) VALUES
(1, 2012, '2012-01-01', '2012-12-31'),
(2, 2013, '2013-01-01', '2012-12-31');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_total_district_budget`
--
CREATE TABLE IF NOT EXISTS `vw_total_district_budget` (
`total_budget` double
,`district_id` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_total_district_project_budget`
--
CREATE TABLE IF NOT EXISTS `vw_total_district_project_budget` (
`total_district_project_budgets` double
,`district_id` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `vw_total_district_budget`
--
DROP TABLE IF EXISTS `vw_total_district_budget`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_total_district_budget` AS select sum(`tbl_district_budget`.`budget_amount`) AS `total_budget`,`tbl_district_budget`.`district_id` AS `district_id` from `tbl_district_budget` group by `tbl_district_budget`.`district_id`;

-- --------------------------------------------------------

--
-- Structure for view `vw_total_district_project_budget`
--
DROP TABLE IF EXISTS `vw_total_district_project_budget`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_total_district_project_budget` AS select sum(`tbl_district_project`.`budget_allocated`) AS `total_district_project_budgets`,`tbl_district_project`.`district_id` AS `district_id` from `tbl_district_project` group by `tbl_district_project`.`district_id`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
