-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 11:31 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstaff`
--

CREATE TABLE IF NOT EXISTS `addstaff` (
  `staffname` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `doj` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstaff`
--

INSERT INTO `addstaff` (`staffname`, `department`, `doj`, `address`, `email`, `contact`, `gender`, `status`) VALUES
('ramesh', '', '', '', '', 0, '', 'active'),
('ramesh', 'stock', '2016-04-04', 'panipat', 'pt1382252@apiit.edu.in', 9812034846, 'male', 'active'),
('abhishek', 'play', '2016-04-10', 'yamuna', 'pt1384408@apiit.edu.in', 9812034847, 'male', 'active'),
('ramesh', 'stock', '2016-04-04', 'panipat', 'pt1382252@apiit.edu.in', 9812034846, 'male', 'active'),
('atul', 'sse', '2016-04-04', 'yamuna', 'pt1382253@apiit.edu.in', 98120348488484, 'male', 'active'),
('abh', 'cse', '2016-04-04', 'c-203', 'pt1382255@apiit.edu.in', 9931791888, 'male', 'active'),
('abh', 'cse', '2016-04-04', 'c-203', 'pt1382255@apiit.edu.in', 9931791888, 'male', 'active'),
('', '', '', '', '', 0, '', 'active'),
('shanu', 'b.e', '2016-04-12', 'yamuna enclave', 'shanusulabh@gmail.com', 9017603817, 'male', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `insert_category`
--

CREATE TABLE IF NOT EXISTS `insert_category` (
  `category_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_category`
--

INSERT INTO `insert_category` (`category_name`, `description`, `date`) VALUES
('', '', '0000-00-00'),
('books', 'study_material', '0000-00-00'),
('pen', 'rotomac', '0000-00-00'),
('pen', 'study_material', '0000-00-00'),
('gfckhj', 'rfthgjkhukluh', '5124-12-04'),
('pen', '', '2016-04-04'),
('pen', 'red', '2016-04-04'),
('vdjvkahj', 'hfkjlkg', '2016-04-06'),
('vfchgjkuhd', 'dhgjh', '5622-12-31'),
('vfchgjkuhd', 'dhgjh', '5622-12-31'),
('prnddfdgg', 'ertr', '2016-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_name` varchar(50) NOT NULL,
  `opening_stock` varchar(50) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `quantity` bigint(200) NOT NULL,
  `date` date NOT NULL,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`item_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_name`, `opening_stock`, `discription`, `quantity`, `date`, `category_name`) VALUES
('adsszfx', 'werete3rtet', 'eretg34', 435, '2016-04-11', 'gfckhj'),
('eetre', 'rfdvb', 'edfd', 78, '2016-04-04', 'books'),
('fsddd', '9e32e', 'd,ffd', 21, '2016-04-13', 'gfckhj'),
('lazer', '', 'mjsoxjns', 56, '2016-04-21', 'pen'),
('rs agr', 'type', 'emrc', 40, '2016-04-05', 'books'),
('rwtetdersfgd', '5y67', '455t3', 454, '2016-04-13', 'gfckhj');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `staffid` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `staffid`) VALUES
('atul12', '123', 'admin', 'pt1382253@apiit.edu.in'),
('prc', 'prc', 'pc', ''),
('s', 's', 'admin', 'shanusulabh@gmail.com'),
('shanusulabh', 'shanu', 'Staff', 'shanusulabh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tran`
--

CREATE TABLE IF NOT EXISTS `tran` (
  `username` varchar(50) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `transdate` date NOT NULL,
  `transtype` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tran`
--

INSERT INTO `tran` (`username`, `itemname`, `transdate`, `transtype`, `quantity`) VALUES
('', 'eetre', '2016-04-04', 'opening-stock', 78),
('', 'rs agr', '2016-04-05', 'opening-stock', 40),
('', 'rwtetdersfgd', '2016-04-13', 'opening-stock', 454),
('', 'lazer', '2016-04-21', 'opening-stock', 56),
('atul12', 'fsddd', '2016-04-13', 'opening-stock', 21);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
