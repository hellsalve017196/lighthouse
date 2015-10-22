-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2015 at 07:33 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lighthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
`e_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `conduct_by` varchar(500) NOT NULL,
  `image_banner` text NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `date_start` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  `time_start` varchar(20) NOT NULL,
  `time_end` varchar(20) NOT NULL,
  `location` varchar(500) NOT NULL,
  `fees` varchar(150) DEFAULT NULL,
  `details` text,
  `profile` text NOT NULL,
  `profile_file` text,
  `event_leaflet` text,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`e_id`, `name`, `conduct_by`, `image_banner`, `short_description`, `long_description`, `date_start`, `date_end`, `time_start`, `time_end`, `location`, `fees`, `details`, `profile`, `profile_file`, `event_leaflet`, `status`) VALUES
(3, 'WORKSHOP ON LEADERSHIP AND TEAM BUILDING', 'G DON SUMDANY', '16488bd9f5606ac7e36051e32e08a4f8.jpg', '<span style="color: rgb(79, 79, 79); font-family: ''PT Sans'', sans-serif; line-height: 20px;">This program is designed to identify and improve your team’s leadership traits related to team-building, and how it effects organizations or individuals from reaching their overall objectives, and how can your team identify organizational objectives and design plus deliver messages accordingly.</span>', '<h3 style="font-family: ''PT Sans'', sans-serif; font-weight: 700; line-height: 1.2; color: rgb(51, 51, 51); margin: 0px 0px 21px; text-transform: uppercase;">DESCRIPTION OF THE EVENT</h3><p style="margin-bottom: 20px; color: rgb(79, 79, 79); font-family: ''PT Sans'', sans-serif; letter-spacing: normal; line-height: 20px;">This program is designed to identify and improve your team’s leadership traits related to team-building, and how it effects organizations or individuals from reaching their overall objectives, and how can your team identify organizational objectives and design plus deliver messages accordingly.</p><br style="color: rgb(79, 79, 79); font-family: ''PT Sans'', sans-serif; line-height: 20px;"><h3 style="font-family: ''PT Sans'', sans-serif; font-weight: 700; line-height: 1.2; color: rgb(51, 51, 51); margin: 0px 0px 21px; text-transform: uppercase;">OUTCOME OF THE EVENT</h3><p style="margin-bottom: 20px; color: rgb(79, 79, 79); font-family: ''PT Sans'', sans-serif; letter-spacing: normal; line-height: 20px;">It is a complete package on how you can transform the people of your participants FROM working in silos and going into unnecessary conflicts or wasting time making ineffective leadership decisions TO believers and leaders of team-work, equipped with the tips and tricks on how to increase efficiency by the effective use of different leadership skills.</p>', '22 Jun,15', '22 Jun,15', '06:00', '10:00', 'ighthouse Bangaldesh - 41 Kamal Ataturk Avenue, Level- 4, Banani Dhaka-1213', '1500BDT', '<span style="font-weight: 700; color: rgb(79, 79, 79); font-family: ''PT Sans'', sans-serif; line-height: 20px;"><span class="fa fa-circle-o">&nbsp;<span style="font-weight: 700;">Maximum seats: 50 (Reservation - First Come First Serve Basis)</span></span></span>', '<h1 style="margin-top: 0px; margin-bottom: 24px; font-size: 28px; font-family: ''PT Sans'', sans-serif; font-weight: 700; line-height: 1.2; color: rgb(51, 51, 51); text-transform: uppercase;"><span style="color: rgb(79, 79, 79); font-size: 13px; line-height: 20px; text-transform: none;"><div class="row team_wrap" style="margin-right: -15px; margin-left: -15px;"><div class="col-lg-9 col-md-9 padbot30" style="padding-right: 15px; padding-left: 15px; width: 855px; padding-bottom: 30px !important;"><p style="margin-bottom: 20px;">G. Sumdany Don is the Chief Inspirational Officer at Don Sumdany Facilitation &amp; Consultancy. He completed “Facilitation and Training Skills” with certified Master-trainer Sarah Krasker at the Master Trainer Institute (France) and also trained under global facilitator and brand-marketing guru Trini Amador from BHC Consulting (USA). For over four years, Don had the privilege to work for Philip Morris International (PMI), a Fortune 500 Company and represented one of the top 10 global brands in the world. Don also conducts career build-up workshops at East West University (EWU), and the University of Liberal Arts Bangladesh (ULAB). He has conducted sessions in Dhaka University, JU, IBA JU, NSU, AIUB, BRAC, Manarat, ASA University and several others. He also offers corporate client training sessions for Bdjobs, Prothom-Alo Jobs, Business Express, and for Chartered Accountants in ICAB. He has trained over 6000+ people so far. Don also writes a newspaper column, “Don’s Career Tips,” published every Thursday in The Independent.</p></div></div></span></h1>', 'c5f54968cf2461ce7d8ea5f50ae90105.pdf', 'b78477e4ea40967071716f1e47656467.zip', '0'),
(6, 'test', 'hudai', 'c3abc2ee2aab23ff784e39ba26c49920.jpg', 'test', 'test', '15 Jun,15', '15 Jul,15', '23:00', '23:00', 'test', '1200', 'asdasd', 'asdasd', NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_info`
--

CREATE TABLE IF NOT EXISTS `tbl_log_info` (
`l_id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_log_info`
--

INSERT INTO `tbl_log_info` (`l_id`, `email`, `password`) VALUES
(1, 'a@a.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE IF NOT EXISTS `tbl_newsletter` (
`e_id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`e_id`, `email`) VALUES
(2, 's@s.com'),
(3, 'g@g.com'),
(4, 'jakel@jakel.com'),
(5, 'k@k.com'),
(6, 'a@a.com'),
(7, 'hd@hd.com'),
(8, 'a@a.com'),
(9, 's@s.com'),
(10, 's@s.com'),
(11, 'a@a.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
`r_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`r_id`, `event_id`, `name`, `email`, `address`, `company_name`, `designation`, `phone`) VALUES
(2, 5, 'sadsad', 'a@a.com', 'asdasd', 'asdasd', 'qweqwe', '12313'),
(4, 3, 'asdasd', 'abdullah017196@yahoo.com', 'asdasd', 'asdasd', 'dasd', '12312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
 ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `tbl_log_info`
--
ALTER TABLE `tbl_log_info`
 ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
 ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
 ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_log_info`
--
ALTER TABLE `tbl_log_info`
MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
