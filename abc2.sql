-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 07:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categries`
--

CREATE TABLE `categries` (
  `catg_code` varchar(100) NOT NULL,
  `catg_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categries`
--

INSERT INTO `categries` (`catg_code`, `catg_title`) VALUES
('DF002', 'Data Frames'),
('DS001', 'Data Science'),
('DS002', 'Database SystemsII'),
('IM001', 'Interactive Media'),
('jhkyi', 'ur8r'),
('M001', 'Media'),
('OO001', 'Object Oriented Programming'),
('rr', 'dsd'),
('SE001', 'Software engineering'),
('WD001', 'Web Development'),
('wew', 'wewe'),
('yty', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categries`
--

CREATE TABLE `sub_categries` (
  `p_catg_code` varchar(100) NOT NULL,
  `subcatg_code` varchar(100) NOT NULL,
  `subcatg_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categries`
--

INSERT INTO `sub_categries` (`p_catg_code`, `subcatg_code`, `subcatg_title`) VALUES
('rr', '123', '1233'),
('DF002', 'df004', 'ioutew3q23'),
('rr', 'hjghg', 'kjjj'),
('M001', 'K001', 'Python'),
('wew', 'kiuy', 'fasewq'),
('DS002', 'SUB CATEGORY CODE', 'SUB CATEGORY TITLE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categries`
--
ALTER TABLE `categries`
  ADD PRIMARY KEY (`catg_code`);

--
-- Indexes for table `sub_categries`
--
ALTER TABLE `sub_categries`
  ADD PRIMARY KEY (`subcatg_code`),
  ADD KEY `catg_code` (`p_catg_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categries`
--
ALTER TABLE `sub_categries`
  ADD CONSTRAINT `sub_categries_ibfk_1` FOREIGN KEY (`p_catg_code`) REFERENCES `categries` (`catg_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
