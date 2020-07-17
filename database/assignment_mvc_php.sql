-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 09:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_mvc_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`name`, `email`, `password`) VALUES
('mahendra', 'a@gmail.com', 'a@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`code`, `name`, `title`, `description`) VALUES
('CHMPYgoprv', 'vsdvfb', 'bbgcy', 'ygbfhv'),
('BEQdlnqtuy', 'vjfsdh', 'gbfvyufhg', 'byvhjgfhuh'),
('FKLQTYZox6', 'vjhsu', 'hfvihiu', 'huvfhfu'),
('BGefruvy45', 'taxHeal', 'web Developer', 'cd aydaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('GINRVWkpw4', 'vsgf', 'guyvsdfg', 'guysdgbhw8gry wgyreywgefesf'),
('CFUXbhjs57', 'vnsdf', 'jsuduh', 'hiuhstbeoihtu 8ger uugudhuer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(200) NOT NULL,
  `jobid` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `tenth` int(11) NOT NULL,
  `twelve` int(11) NOT NULL,
  `btech` int(11) NOT NULL,
  `github` varchar(200) NOT NULL,
  `linkdin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `jobid`, `fname`, `lname`, `email`, `password`, `gender`, `dob`, `tenth`, `twelve`, `btech`, `github`, `linkdin`) VALUES
('FXcswxyz59', 'CHMPYgoprv', ' hd', 'gvjv', 'j@gmail.com', 'jjg', 'female', '1111-01-10', 10, 10, 10, 'hgy', 'vh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
