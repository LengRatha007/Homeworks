-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2015 at 06:20 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lrcharbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `lrcbmsg`
--

CREATE TABLE IF NOT EXISTS `lrcbmsg` (
  `MSGID` varchar(255) NOT NULL,
  `IDX` int(11) NOT NULL,
  `USERID` varchar(255) NOT NULL,
  `TO_USERID` varchar(255) NOT NULL,
  `MSG_CONTENT` text CHARACTER SET utf8 NOT NULL,
  `CREATED_DATE` date NOT NULL,
  PRIMARY KEY (`IDX`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `lrcbmsg`
--

INSERT INTO `lrcbmsg` (`MSGID`, `IDX`, `USERID`, `TO_USERID`, `MSG_CONTENT`, `CREATED_DATE`) VALUES
('22-Jul-2015-1', 1, '0', '0', 'h', '2015-07-22'),
('22-Jul-2015-2', 2, '0', '0', 'h', '2015-07-22'),
('22-Jul-2015-3', 3, '0', '0', 'h', '2015-07-22'),
('22-Jul-2015-4', 4, '0', '0', 'h', '2015-07-22'),
('22-Jul-2015-5', 5, '0', '0', 'h', '2015-07-22'),
('22-Jul-2015-6', 6, '0', '0', 'j', '2015-07-22'),
('22-Jul-2015-7', 7, '0', '0', 'ds', '2015-07-22'),
('22-Jul-2015-8', 8, '0', '0', '<img src="images/symbol/135.gif" /><img src="images/symbol/79.gif" />', '2015-07-22'),
('22-Jul-2015-9', 9, '0', '0', '<img src="images/symbol/smiley-lol.png" />', '2015-07-22'),
('22-Jul-2015-10', 10, '0', '0', '<img src="images/symbol/smiley-twist.png" />', '2015-07-22'),
('22-Jul-2015-11', 11, '0', '0', 'fdfsfsdfdfsdfsdfdsfsdfsdf f fsdfsdf fsfsd dsfsdfsd fs fsdf fsdfsd fsdfsdf sdfsdfsdfsdsdf sdf', '2015-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `lrcbmsgsetting`
--

CREATE TABLE IF NOT EXISTS `lrcbmsgsetting` (
  `MSGSETTINGID` varchar(255) NOT NULL,
  `IDX` int(11) NOT NULL,
  `USERID` varchar(255) NOT NULL,
  `MSGVIEW` int(11) NOT NULL,
  `CREATION_DATE` date NOT NULL,
  PRIMARY KEY (`IDX`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `lrcbsymbol`
--

CREATE TABLE IF NOT EXISTS `lrcbsymbol` (
  `symbid` int(11) NOT NULL,
  `symbname` varchar(1024) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `lrcbsymbol`
--

INSERT INTO `lrcbsymbol` (`symbid`, `symbname`, `code`, `name`) VALUES
(1, 'smiley.png', '', 'Smiley'),
(2, 'smiley-cry.png', '', 'Cry'),
(3, 'smiley-confuse.png', '', 'Confuse'),
(4, 'smiley-cool.png', '', 'Cool'),
(5, 'smiley-eek.png', '', 'Eek'),
(6, 'smiley-eek-blue.png', '', 'Eek Blue'),
(7, 'smiley-yell.png', '', 'Yell'),
(8, 'smiley-twist.png', '', 'Twist'),
(9, 'smiley-grin.png', '', 'Grin'),
(10, 'smiley-mad.png', '', 'Mad'),
(11, 'smiley-zipper.png', '', 'Zipper'),
(12, 'smiley-sad-blue.png', '', 'Sad'),
(13, 'smiley-sleep.png', '', 'Sleep'),
(14, 'smiley-slim.png', '', 'Slim'),
(15, 'smiley-money.png', '', 'Money'),
(16, 'smiley-lol.png', '', 'Lol'),
(17, 'smiley-kiss.png', '', 'Kiss'),
(18, 'smiley-razz.png', '', 'Razz'),
(19, 'snowman.png', '', 'Snowman'),
(20, 'smiley-sweat.png', '', 'Sweat'),
(21, 'smiley-evil.png', '', 'Evil'),
(22, 'smiley-fat.png', '', 'Fat'),
(23, 'smiley-wink.png', '', 'Wink'),
(24, 'smiley-neutral.png', '', 'Neutral'),
(25, 'smiley-roll.png', '', 'Roll'),
(26, 'smiley-roll-blue.png', '', 'Roll-Blue'),
(27, 'heart.png', '', 'Heart'),
(28, 'music-beam.png', '', 'Music'),
(29, 'star.png', '', 'Star'),
(30, 'traffic-light.png', '', 'Light'),
(31, 'umbrella.png', '', 'Umbrella'),
(32, 'weather-cloudy.png', '', 'Weather'),
(33, '1.gif', 'shy', 'Shy'),
(34, '2.gif', 'sa', 'Sad'),
(35, '3.gif', 'Laungh', 'Laungh'),
(36, '4.gif', 'Leng Ratha', 'Leng Ratha'),
(37, '5.gif', '', 'Phon Vuthy'),
(38, '6.gif', '', 'Am Chumno'),
(39, '7.gif', '', 'Heng Sumony'),
(40, '8.gif', '', 'Chhean Phana'),
(41, '9.gif', '', 'AChhange'),
(42, '10.gif', '', 'A Jerng'),
(43, '11.gif', '', 'A Ku'),
(44, '12.gif', '', 'A Loy'),
(45, '13.gif', '', 'A Shangha'),
(46, '14.gif', '', 'A Suymuy'),
(47, '15.gif', '', 'A Ach'),
(48, '16.gif', '', 'A Somkis'),
(49, '17.gif', '', 'Sorphea'),
(50, '18.gif', '', 'Vannisa'),
(51, '19.gif', '', 'Theara'),
(52, '20.gif', '', 'Sumoney Kaja'),
(53, '21.gif', '', 'Aspire'),
(54, '22.gif', '', 'Acer'),
(55, '23.gif', '', 'Dell'),
(56, '24.gif', '', 'Lenovo'),
(57, '24.gif', '', 'PHP'),
(58, '25.gif', '', ''),
(59, '26.gif', '', ''),
(60, '27.gif', '', ''),
(61, '28.gif', '', ''),
(62, '29.gif', '', ''),
(63, '30.gif', '', ''),
(64, '31.gif', '', ''),
(65, '32.gif', '', ''),
(66, '33.gif', '', ''),
(67, '34.gif', '', ''),
(68, '35.gif', '', ''),
(68, '51.gif', '', ''),
(69, '50.gif', '', ''),
(70, '49.gif', '', ''),
(71, '54.gif', '', ''),
(72, '72.gif', '', ''),
(73, '73.gif', '', ''),
(74, '74.gif', '', ''),
(75, '59.gif', '', ''),
(76, '108.gif', '', ''),
(77, '120.gif', '', ''),
(78, '102.gif', '', ''),
(79, '105.gif', '', ''),
(80, '135.gif', '', ''),
(81, '79.gif', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lrcbuser`
--

CREATE TABLE IF NOT EXISTS `lrcbuser` (
  `USERID` varchar(255) NOT NULL,
  `IDX` int(11) NOT NULL,
  `USERFULLNAME` varchar(255) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `USER_IMG` varchar(1024) NOT NULL,
  `CREATED_DATE` date NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `STATUS` int(11) NOT NULL,
  PRIMARY KEY (`IDX`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `lrcbuser`
--

INSERT INTO `lrcbuser` (`USERID`, `IDX`, `USERFULLNAME`, `USERNAME`, `PASSWORD`, `USER_IMG`, `CREATED_DATE`, `EXPIRY_DATE`, `STATUS`) VALUES
('20-Jul-2015-1', 1, 'Leng Ratha', 'l.ratha', 'b6d884e10cae8f2784cfb642087d9af0', '', '2015-07-20', '0000-00-00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
