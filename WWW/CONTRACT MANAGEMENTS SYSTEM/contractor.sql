-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2016 at 02:52 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contractmng`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE IF NOT EXISTS `contractor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idno`),
  UNIQUE KEY `username` (`username`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`Id`, `fname`, `mname`, `lname`, `username`, `idno`, `email`, `address`, `password`) VALUES
(1, 'john', 'maina', 'macharia', 'johnie', '1234', 'mainajohn@gmail.com', '306', '123456'),
(9, 'johnie', 'maina', 'macharia', 'maich', '2341', 'mainajohn@yahoo.com', 'nai', '332'),
(6, 'james', 'mwangi', 'muhoho', 'mjames', '98275', 'mainajshfuh', 'kudhws', '123'),
(8, 'FHT', 'EQ', 'GSVGFG', 'SDF', 'Ads', 'mainajohn@yahoo.com', 'aXAS', 'XSC'),
(3, 'frwv', 'ewf', 'wfc', 'will', 'dsc', 'ecds', 'wqDW', '3R2DWC'),
(6, ',hjjjbgrfzv', 'njmef c', 'jknfwea', 'jn faw', 'j,n,n df', 'n ,wf', 'kjweaf', 'jnnef'),
(4, 'kjv', 'nbjmn ', 'nms ', 'james', 'khanmcs', 'nkwf', 'n.kwmecv', 'ncv'),
(7, 'jacm', ',kkhjwd', 'jnaf', 'uhef', 'lkjnqaf', 'jnhuwda', 'jnjqwAFD', 'jknWDS'),
(10, 'sae', 'q', 'khb', 'g', 'mg', 'kjmn@yahoo.com', 'hkb', 'gv'),
(5, 'jlius', 'mwsarf', ',jgbhwc', 'meto', 'sc', 'wefsfb ', 'fwasv', 'wefa'),
(11, 'kjv', 'nbjmn', 'hjfhn', 'johniem', 'wafv', 'ma@gmail.com', '1234', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
