-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2016 at 04:17 AM
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
CREATE DATABASE IF NOT EXISTS `contractmng` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contractmng`;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `refname` varchar(255) NOT NULL,
  `expdate` date NOT NULL,
  `idno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idno`),
  UNIQUE KEY `username` (`username`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`Id`, `fname`, `mname`, `lname`, `username`, `refname`, `expdate`, `idno`, `email`, `address`, `password`) VALUES
(1, 'john', 'maina', 'macharia', 'johnie', 'ref123', '2016-04-12', '1234', 'mainajohn@gmail.com', '306', '123456'),
(9, 'johnie', 'maina', 'macharia', 'maich', '', '0000-00-00', '2341', 'mainajohn@yahoo.com', 'nai', '332'),
(6, 'simon', 'maina', 'karume', 'smkarume', 'ref4356', '2016-05-07', '789654', 'm@gmail.com', 'meru', '12345'),
(6, 'james', 'mwangi', 'muhoho', 'mjames', '', '0000-00-00', '98275', 'mainajshfuh', 'kudhws', '123'),
(11, 'kjv', 'nbjmn', 'hjfhn', 'johniem', '', '0000-00-00', 'wafv', 'ma@gmail.com', '1234', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE IF NOT EXISTS `cancellation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refname` varchar(255) NOT NULL,
  `cdetails` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `refname` (`refname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cancellation`
--

INSERT INTO `cancellation` (`id`, `refname`, `cdetails`) VALUES
(13, 'ref123', 'cancelled'),
(14, '123456', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `installment` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `ammount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `username`, `address`, `zip`, `phone`, `year`, `make`, `model`, `vin`, `deposit`, `installment`, `day`, `ammount`) VALUES
(1, 'johnie', 'wqDW', 'kjbms', 'mnhasF', '18', 'GERMANY', 'GHANHEVF', 'MNBAF', 'deposit', 'installment', 'day', 'total cash'),
(2, '1123', 'wqDW', 'MAHMbZ', 'mnhasF', 'KHQK', '6257', 'GHANHEVF', 'hjw', 'deposit', 'installment', 'day', 'total cash'),
(3, 'jamo', '306', 'kjbms', 'JHAC', 'KHQK', '6257', 'GHANHEVF', 'MNBAF', 'deposit', 'installment', 'day', 'total cash');

-- --------------------------------------------------------

--
-- Table structure for table `construction`
--

CREATE TABLE IF NOT EXISTS `construction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `changes` varchar(255) NOT NULL,
  `begindate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `ammount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cname` (`cname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `construction`
--

INSERT INTO `construction` (`id`, `cname`, `date`, `changes`, `begindate`, `enddate`, `ammount`) VALUES
(1, 'name of contractor', 'day/month/year', 'changes need to be changed', 'day/month/year', 'day/month/year', 'amount');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`Id`, `fname`, `mname`, `lname`, `username`, `idno`, `email`, `address`, `password`) VALUES
(1, 'john', 'maina', 'macharia', 'johnie', '1234', 'mainajohn@gmail.com', '306', '123456'),
(9, 'johnie', 'maina', 'macharia', 'maich', '2341', 'mainajohn@yahoo.com', 'nai', '332'),
(12, 'simon', 'Karume', 'Maina', 'smkarume', '789654', 'smkarume@gmail.com', '15232nakuru', 'simaka'),
(6, 'james', 'mwangi', 'muhoho', 'mjames', '98275', 'mainajshfuh', 'kudhws', '123'),
(8, 'FHT', 'EQ', 'GSVGFG', 'SDF', 'Ads', 'mainajohn@yahoo.com', 'aXAS', 'XSC'),
(3, 'frwv', 'ewf', 'wfc', 'will', 'dsc', 'ecds', 'wqDW', '3R2DWC'),
(6, ',hjjjbgrfzv', 'njmef c', 'jknfwea', 'jn faw', 'j,n,n df', 'n ,wf', 'kjweaf', 'jnnef'),
(4, 'kjv', 'nbjmn ', 'nms ', 'james', 'khanmcs', 'nkwf', 'n.kwmecv', 'ncv'),
(7, 'jacm', ',kkhjwd', 'jnaf', 'uhef', 'lkjnqaf', 'jnhuwda', 'jnjqwAFD', 'jknWDS'),
(10, 'sae', 'q', 'khb', 'g', 'mg', 'kjmn@yahoo.com', 'hkb', 'gv'),
(5, 'jlius', 'mwsarf', ',jgbhwc', 'meto', 'sc', 'wefsfb ', 'fwasv', 'wefa'),
(11, 'kjv', 'nbjmn', 'hjfhn', 'johniem', 'wafv', 'ma@gmail.com', '1234', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `refname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `cdetails` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`,`refname`),
  UNIQUE KEY `refname` (`refname`),
  UNIQUE KEY `refname_2` (`refname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`Id`, `refname`, `description`, `expdate`, `cdetails`, `title`) VALUES
(15, 'dgxcfng g', 'dfnglnb u,gfvcrdvjc ynf', '3-2-17', 'na', 'land'),
(33, 'jhhuh', ',lkikj', 'mhmbwFD', ',NJNBG', ',JUHJG'),
(34, 'kbv', 'kv', 'kjbv', 'kuhf', 'mjdvb'),
(35, 'ljku', ',jh', ',.jkjkug', 'ihjj', 'car'),
(36, 'james', 'gefrg', '9/12/16', 'none', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `costholder`
--

CREATE TABLE IF NOT EXISTS `costholder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `expamt` varchar(255) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `refname` (`refname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `costholder`
--

INSERT INTO `costholder` (`id`, `refname`, `title`, `expamt`, `expdate`) VALUES
(3, 'ref123', 'rent', '45000', '12/3/16'),
(6, 'ref0001', 'land', '23000', '9/12/16');

-- --------------------------------------------------------

--
-- Table structure for table `costing`
--

CREATE TABLE IF NOT EXISTS `costing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `refname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `expamt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `costing`
--

INSERT INTO `costing` (`id`, `username`, `refname`, `title`, `expamt`) VALUES
(32, 'johnie', 'ref123', 'car', '3000'),
(33, 'johnie', 'ref123', 'car', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `title`, `file`) VALUES
(3, 'job', 'DECLARATION.docx');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE IF NOT EXISTS `employment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `date`, `username`, `address`, `zip`, `phone`) VALUES
(1, 'date', 'jhekjg', 'kjaef', 'ouewg', 'jkkeauf');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planner` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `duties` varchar(255) NOT NULL,
  `agree` varchar(255) NOT NULL,
  `cancelday` varchar(255) NOT NULL,
  `ammount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `planner` (`planner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `planner`, `event`, `company`, `phoneno`, `email`, `fax`, `address`, `date`, `des`, `duties`, `agree`, `cancelday`, `ammount`) VALUES
(1, 'jige', 'khef', 'feas', 'afzs', 'f', 'efs', 'efaWsg', 'date', 'description of the event', 'duties perfomed by the planner', 'will', 'days', 'amount'),
(2, 'khjQR', 'khef', 'feas', 'afzs', 'eFC', 'efs', 'wqDW', 'date', 'description of the event', 'duties perfomed by the planner', 'will not', 'days', 'amount');

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE IF NOT EXISTS `invitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`id`, `title`, `details`) VALUES
(6, 'apply for the post of construction', 'i here by invite all inteerested in applying for construction vacancis'),
(7, 'view dates', 'view the dates for new contracts');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE IF NOT EXISTS `land` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `ammount` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `installments` varchar(255) NOT NULL,
  `buyername` varchar(255) NOT NULL,
  `witness` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `buyername` (`buyername`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`id`, `date`, `ammount`, `deposit`, `installments`, `buyername`, `witness`) VALUES
(1, 'date', 'ammount', 'deposit', 'installments', 'buyers name', 'witness name'),
(2, '12/11/2016', '34,000', '20,000', '2000', 'johnie', 'mwash');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE IF NOT EXISTS `officials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`idno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `fname`, `mname`, `lname`, `username`, `idno`, `email`, `address`, `title`, `password`) VALUES
(1, 'james', 'maina', 'weru', 'jamo', '1225', 'mainajohn291@gmail.com', 'sg', 'finance officer', 'dfbh'),
(3, 'john', 'regd', 'ad', 'ferro', '21345', 'mainajohn291@gmail.com', 'dg', 'other official staffs', 'ef'),
(4, 'Willi', 'Mwangi', 'ngv', 'willi', 'ngvchgf', 'mainajhon213@gmaail.com', 'grdrd', 'admin', 'dgrtr');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mused` varchar(255) NOT NULL,
  `mleft` varchar(255) NOT NULL,
  `completion` varchar(255) NOT NULL,
  `spaid` varchar(255) NOT NULL,
  `sremain` varchar(255) NOT NULL,
  `workers` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`),
  UNIQUE KEY `name_3` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `name`, `title`, `mused`, `mleft`, `completion`, `spaid`, `sremain`, `workers`) VALUES
(6, 'winnie', 'services', 'bkhgju', 'gfdf', '3', 'nh g', 'jmhe', 'jhwafdh'),
(7, 'jhgwjd', 'land', 'mjbhAzfb', ',jhv', 'hj g  edbv', 'mjhm', 'drfht', 'hjfvjgh'),
(11, 'james', 'services', 'all', 'hgvgaf', 'hggyy', 'gfser', 'fddtr', 'winn\r\nkevo\r\njohn'),
(12, 'smkarume', 'land', '2300', '1200', '12', '30000', '40000', 'jihm\r\nmaina'),
(13, 'johnii', 'event', '2300', '1200', '12', '12', '40000', 'willi\r\ngeorgi\r\nmaina'),
(14, 'johnie', 'land', '2300', '1200', '12', '12', '42332', 'john\r\nmaina');

-- --------------------------------------------------------

--
-- Table structure for table `qualified`
--

CREATE TABLE IF NOT EXISTS `qualified` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `refname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `qualified`
--

INSERT INTO `qualified` (`id`, `staffid`, `username`, `refname`) VALUES
(5, '545', 'johnie', 'nghdf'),
(6, '545', 'johnie', 'ref123'),
(19, '', 'maichjohn', 'ref0001'),
(20, '', 'maichjohn', 'ref0001'),
(21, '', 'maichjohn', 'ref0001'),
(22, 'jkyhdshc', 'maichjohn', 'ref0001'),
(23, 'k,jchs', 'maichjohn', 'ref0001');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ammount` varchar(255) NOT NULL,
  `paymentday` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rname` (`rname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `rname`, `date`, `ammount`, `paymentday`, `sdate`, `address`, `city`) VALUES
(1, 'renter name', 'MM/DD/YYY', 'ammount', 'MM/DD/YYY', 'days', 'address', 'city,country'),
(2, 'johnie', '12/4/13', '8867689', '12/4/14', '15', '8742', '2389749jk');

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE IF NOT EXISTS `selected` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `refname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `selected`
--

INSERT INTO `selected` (`id`, `username`, `refname`) VALUES
(6, 'johnie', 'ref123'),
(19, 'maichjohn', 'ref0001'),
(20, 'smkarume', 'ref234');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL DEFAULT '0',
  `cname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `totalamt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cname` (`cname`),
  KEY `cname_2` (`cname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `cname`, `date`, `address`, `quantity`, `price`, `totalamt`) VALUES
(0, 'contractor name', 'date', 'address', 'khmj', 'jg', 'gh');

-- --------------------------------------------------------

--
-- Table structure for table `staffrecord`
--

CREATE TABLE IF NOT EXISTS `staffrecord` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `idno` (`idno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staffrecord`
--

INSERT INTO `staffrecord` (`Id`, `name`, `username`, `title`, `idno`) VALUES
(1, 'johnie', 'johniem', 'administrator', '21345'),
(2, 'ferrrix', 'ferro', 'staff', '234557'),
(3, 'james', 'jamo', 'finance officer', '128879'),
(4, 'willi', 'willi', 'staff', '23534tf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
