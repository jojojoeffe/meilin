-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2014 at 02:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meilinconsultinggroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `companylogos`
--

CREATE TABLE IF NOT EXISTS `companylogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `companylogos`
--

INSERT INTO `companylogos` (`id`, `name`, `image`) VALUES
(1, 'Company Logos 6', 'Logo.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `company_contents`
--

CREATE TABLE IF NOT EXISTS `company_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description_1` text NOT NULL,
  `description_2` text NOT NULL,
  `description_3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_contents`
--

INSERT INTO `company_contents` (`id`, `title`, `description_1`, `description_2`, `description_3`) VALUES
(1, 'Our Company', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumA.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'We''are ready for freelance work! Just contact me :)))');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` text NOT NULL,
  `province` text NOT NULL,
  `country` text NOT NULL,
  `email` text NOT NULL,
  `tel_local` text NOT NULL,
  `tel_inter` text NOT NULL,
  `fax` text NOT NULL,
  `whatsap_line` text NOT NULL,
  `title` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `region`, `province`, `country`, `email`, `tel_local`, `tel_inter`, `fax`, `whatsap_line`, `title`, `facebook`, `twitter`) VALUES
(1, 'Mampang Prapatan Blok X/20', 'Jakarta Selatan 16000', 'Indonesia', 'info@meilinconsultant.com', 'Tel (local): (+6221) 50538050', 'Tel (int): +1 917 2591299', 'Fax: +1 630 934 9019', 'WhatsApp and Line : +1 612 587 8379', 'Our Location', 'Meilin Consulting Group', 'meilinconsultinggroup');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `part` text NOT NULL,
  `date` text NOT NULL,
  `section` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `part`, `date`, `section`) VALUES
(1, 'OGANIZATION', 'March 6', 'Section 1: INTRODUCTION ORGANIZATIONAL, CULTURE AND MANAGING EFFECTIVE \nORGANIZATION'),
(2, 'ORGANIZATION', 'March 13', 'Section 2 : BEHAVIOUR WITHIN ORGANIZATION, INDIVIDUAL, GROUP AND INTERPERSONAL \r\nINFLUENCE'),
(3, 'ORGANIZATION', 'March 20\r\n', 'Section 3 : THE STRUCTURAL AND DESIGN OF ORGANIZATION '),
(4, 'STRATEGIC MANAGEMENT ', 'MArch 27', 'Section 1 : INTRODUCTION TO STRATEGIC MANAGEMENT AND BUSINESS POLICY'),
(5, 'STRATEGIC MANAGEMENT ', 'April 10', 'Section 2 : STRATEGY FORMULATION, IMPLEMENTATION AND CONTROL SYSTEM');

-- --------------------------------------------------------

--
-- Table structure for table `headerlogos`
--

CREATE TABLE IF NOT EXISTS `headerlogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `headerlogos`
--

INSERT INTO `headerlogos` (`id`, `name`, `image`) VALUES
(5, 'Header Logos 10', 'Logo2.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE IF NOT EXISTS `home_contents` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `title`, `description`) VALUES
(1, 'Welcome :) Why Choose Us??', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, minus, velit, corporis nihil quo quis porro natus id delectus consequuntur cupiditate distinctio ad magnam sed voluptates repellendus rerum perspiciatis nemo...');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `category_service` varchar(100) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email_address`, `category_service`, `phone_number`) VALUES
(6, 'Aldhi Mirza', 'aldhi.mirza@ui.ac.id', 'HRD', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consulting_field` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `consulting_field`, `description`, `image`) VALUES
(3, 'Education Consultant', 'Bergabunglah bersama kami.Kami jamin anak anda minimal menjadi progrmammer.', 'education_consultants_canada_educational_services.jpg'),
(4, 'Finance Consulting', 'Jalinlah kerjasama dengan kami. Uang anda akan bertmabh 30% tiap bulannya', 'finance-consulting.jpg'),
(5, 'HR Consulting', 'Perusahaan anda mempunyai kendala tentang rekruitmen dan lain-lain? Kami siap membantu', 'consulting3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE IF NOT EXISTS `slider_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `caption` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image`, `caption`, `name`) VALUES
(1, 'consulting2.jpg', 'Bekerja Sama', 'Test Image 2'),
(2, 'consulting1.jpg', 'Teliti terhadap pekerjaan', 'Test Image 2'),
(3, 'PLAN_B.PNG', 'Jayalah Meilin', 'Test Image 3');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `division` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `division`, `email`, `facebook`, `twitter`, `image`) VALUES
(1, 'David Luiz', 'Denfender Kribo', 'david.luiz@bpl.cfc.com', 'David Luiz Official', '@davidluiz_kribos', 'David-Luiz_2.jpg'),
(2, 'Eden Hazard', 'Attacking Midfielder', 'eden.hazard@bpl.cfc.com', 'Eden Hazard', '@Hazard17', 'Eden-Hazard.jpg'),
(3, 'Torres', 'asda', 'aldhi@ui.ac.id', 'sa', 'as', 'Ferndando-Torres01.jpg'),
(4, 'Aldhi', 'DR', 'aldhi@ui.ac.id', 'aldhi mirza', 'aldhi', 'team-1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `team_contents`
--

CREATE TABLE IF NOT EXISTS `team_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `team_contents`
--

INSERT INTO `team_contents` (`id`, `title`, `description`) VALUES
(1, 'Meet the Teams', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_confirmation` varchar(32) NOT NULL,
  `email` varchar(45) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `id`, `username`, `password`, `password_confirmation`, `email`, `create_at`, `update_at`) VALUES
('Meilin Consultant', 2, 'meilinconsultinggroup', '12345', '', 'meilinconsultinggroup@gmail.com', NULL, NULL),
('Aldhi Mirza', 3, 'aldhimirza', '0987', '', 'aldhi@umas.edu', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
