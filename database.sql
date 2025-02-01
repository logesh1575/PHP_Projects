-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2025 at 05:21 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

DROP TABLE IF EXISTS `chatbox`;
CREATE TABLE IF NOT EXISTS `chatbox` (
  `narmatha` varchar(20) NOT NULL,
  `logesh` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbox`
--

INSERT INTO `chatbox` (`narmatha`, `logesh`) VALUES
('', ''),
('hi', ''),
('', 'hlo'),
('', ''),
('', 'wht'),
('', ''),
('yes', ''),
('', 'wht u want'),
('', ''),
('', 'yup'),
('', ''),
('kk', ''),
('', 'h'),
('', 'kk'),
('', 'oh'),
('', 'j'),
('', 'hi'),
('', 'j'),
('', 'oh'),
('', 'oh'),
('', 'k'),
('', 'k'),
('', 's'),
('', 'e'),
('', 'r'),
('tt', ''),
('', 'oh'),
('', 'hi bro'),
('hru', ''),
('', 'j'),
('', 'k'),
('', ''),
('', ''),
('kk', ''),
('', 'oh'),
('j', ''),
('hi', ''),
('hlo', ''),
('s', ''),
('w', ''),
('', 'haha'),
('s', ''),
('s', ''),
('ww', ''),
('', 'ww'),
('q', ''),
('hi', ''),
('', 'hlo'),
('monday', ''),
('', 'hlo'),
('', 'friday'),
('raja', ''),
('', 'friday'),
('hlo', ''),
('one', ''),
('', 'hi'),
('two', ''),
('', ''),
('helo', ''),
('', 'gi'),
('', 'hlo'),
('', ''),
('', ''),
('', 'yes'),
('', ''),
('', ''),
('', 'hi'),
('', ''),
('', ''),
('hlo', ''),
('', 'ok'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('gi', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `stname` varchar(20) NOT NULL,
  `stnum` varchar(10) NOT NULL,
  `course` varchar(15) NOT NULL,
  `software` varchar(50) NOT NULL,
  `stfees` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`slno`, `stname`, `stnum`, `course`, `software`, `stfees`) VALUES
(35, 'nirmal', '9876567891', 'mme', 'Photoshop,InDesign,Animate,', 148000),
(34, 'swetha', '8990763423', 'm2d', 'Photoshop,InDesign,', 198000),
(33, 'akshaya', '8990763423', 'mme', 'html,css, bootstrap ,', 148000),
(28, 'praveen', '7890897022', 'fullstack', 'php,,', 48000),
(26, 'praveen', '7890897022', 'fullstack', 'html,css,javascript,,', 48000),
(27, 'narmatha', '7890897022', 'fullstack', 'html,css,javascript,php,,', 8000),
(36, 'jagadeesh', '7890897022', 'fullstack', 'php,,', 48000),
(25, 'pravee', '7890897022', 'fullstack', 'javascript,', 48000),
(24, 'praveen', '7890897022', 'fullstack', 'php,', 48000),
(23, 'logesh', '7890897022', 'fullstack', 'html,css,', 48000),
(22, 'praveen', '7890897022', 'fullstack', 'html,css,javascript,', 48000),
(31, 'akshaya', '8990763423', 'fullstack', 'html,css,javascript,', 48000),
(32, 'jagadeesh', '7890897022', 'ui,ux', 'Photoshop,Illustrator,', 38000),
(37, 'swetha', '8990763423', 'mme', 'Photoshop,InDesign,', 148000),
(38, 'akshaya', '6757890724', 'mme', 'Photoshop,InDesign,Animate,Premiere,', 148000),
(39, 'swetha', '8990763423', 'mme', 'Photoshop,InDesign,', 148000);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `cmrname` varchar(15) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usname` varchar(10) NOT NULL,
  `uspass` varchar(10) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`slno`, `cmrname`, `dob`, `gmail`, `mobile`, `address`, `usname`, `uspass`) VALUES
(1, 'sindhu', '1999-12-25', 'sindhu@gmail.com', '6789543221', '1/156 mgr nagar athupollacchi,pollachi ,coimbatore', 'sindhu123', 'sindhu@123'),
(2, 'shalini', '1997-02-21', 'shalu@gmail.com', '9512345689', '2/123 crosscut road madurai', 'shalu123', 'shalu@123'),
(3, 'rajesh', '1990-07-12', 'rajesh@gmail.com', '8979692154', '3/89 noyal salai tirupur', 'raj123', 'raj@123'),
(4, 'yazhini', '1998-11-07', 'yazhu12345@gmail.com', '9098765412', '1/23 kumaranroad erode ', 'yazhu123', 'yazhu@123');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

DROP TABLE IF EXISTS `paper`;
CREATE TABLE IF NOT EXISTS `paper` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  PRIMARY KEY (`slno`,`date`),
  UNIQUE KEY `slno` (`slno`,`date`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`slno`, `date`, `title`, `picture`, `description`) VALUES
(3, ' 31-Dec-2024', 'Korea plane crash LIVE: 120 killed as Jeju aircraft landing gear malfunctioned', '662039.jpeg', 'South Koreaâ€™s national fire agency says 120 people have been confirmed dead after a plane caught fire after a failed landing at an airport in the countryâ€™s south.The National Fire Agency said the fire was almost put out but officials were still trying to pull people from the Jeju Air passenger plane carrying 181 people at the airport in the town of Muan, about 290 kilometers (180 miles) south of Seoul.Emergency workers pulled out two people one passenger and one crew member. It said it deployed 32 fire trucks and several helicopters to contain the fire.Footage of the crash aired by YTN television showed the Jeju Air plane skidding across the airstrip, apparently with its landing gear still closed, and colliding head-on with a concrete wall on the outskirts of the facility. The transport ministry said the incident happened at 9:03 am local time.Emergency officials said they were examining the cause of the fire. They said the planeâ€™s landing gear appeared to have malfunctioned. The Transport Ministry said the plane was returning from Bangkok and its passengers include two Thai nationals.Itâ€™s one of the deadliest disasters in South Koreaâ€™s aviation history. The last time South Korea suffered a large-scale air disaster was in 1997, when an Korean Airline plane crashed in Guam, killing 228 people on board.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int(10) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `gst` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`slno`, `name`, `description`, `price`, `picture`, `gst`, `discount`) VALUES
(1, 'camara', 'sony multilevel cam', 50000, '178924.jpg', 16, 8),
(2, 'vivo V30 Pro', '(Midnight Navy, 8GB RAM, 256GB Storage)', 27000, '714675.jpg', 16, 18),
(3, 'oppo f27', ' 5G (Andaman Blue, 256 GB)  (8 GB RAM)', 27000, '233403.jpg', 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`slno`, `name`, `dob`, `mobile`, `email`, `photo`) VALUES
(7, 'swetha', '2002-06-14', '8990763423', 'sweet@gamil.com', '875371.jpeg'),
(6, 'jagadeesh', '1998-05-20', '7890897022', 'jagadh@gmail.com', '187193.jpg'),
(5, 'akshaya', '2000-02-14', '6757890724', 'akshu@gmail.com', '736375.jpg'),
(4, 'nirmal', '2001-12-30', '9876567891', 'nir123@gmail.com', '480582.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

DROP TABLE IF EXISTS `syllabus`;
CREATE TABLE IF NOT EXISTS `syllabus` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  `sw1` varchar(200) NOT NULL,
  `sw2` varchar(20) NOT NULL,
  `sw3` varchar(20) NOT NULL,
  `sw4` varchar(20) NOT NULL,
  `sw5` varchar(20) NOT NULL,
  `sw6` varchar(20) NOT NULL,
  `sw7` varchar(20) NOT NULL,
  `sw8` varchar(20) NOT NULL,
  `sw9` varchar(20) NOT NULL,
  `sw10` varchar(20) NOT NULL,
  `sw11` varchar(20) NOT NULL,
  `sw12` varchar(20) NOT NULL,
  `fees` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`slno`, `subject`, `sw1`, `sw2`, `sw3`, `sw4`, `sw5`, `sw6`, `sw7`, `sw8`, `sw9`, `sw10`, `sw11`, `sw12`, `fees`) VALUES
(42, 'mme', 'Photoshop', 'InDesign', 'Animate', 'Premiere', 'Illustrator', 'coraldraw ', 'html,css', '', '', '', '', 'bootstrap', 148000),
(41, 'ui,ux', 'Photoshop', '', '', '', 'Illustrator', '', 'html,css', '', 'figma', '', '', 'bootstrap', 38000),
(40, 'fullstack', '', '', '', '', '', '', 'html,css', 'javascript', '', 'php', 'ajax', 'bootstrap', 48000),
(39, 'graphicdesign', 'Photoshop', 'InDesign', '', '', 'Illustrator', 'coraldraw ', '', '', '', '', '', '', 18000),
(43, 'm2d', 'Photoshop', 'InDesign', 'Animate', 'Premiere', 'Illustrator', 'coraldraw ', 'html,css', 'javascript', '', '', '', '', 198000),
(45, 'vfx', 'Photoshop', '', 'Animate', 'Premiere', 'Illustrator', '', '', '', '', '', '', '', 38000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`slno`, `username`, `password`) VALUES
(1, 'admin', 'admin123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
