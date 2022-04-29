-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 08:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pramanik_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsH` varchar(100) NOT NULL,
  `newsC` varchar(500) NOT NULL,
  `response` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsH`, `newsC`, `response`) VALUES
('afvzfzdfv', 'zdfvzd', 'parthresponded'),
('dfvarfves', 'xzdfgbs', 'parthresponded'),
('rthxfndr', 'cghnsrtjjzs', 'kunalresponded'),
('sscvasD', 'zdfv', 'testresponded'),
('svzsdfbd', 'ZDFBZDFB', ''),
('zdfbdxgb', 'dxfxf', 'parthresponded');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('kunal', 'kunal'),
('parth', 'parth'),
('test', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `user` varchar(30) NOT NULL,
  `news` varchar(100) NOT NULL,
  `vote` varchar(10) NOT NULL,
  `voteID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`user`, `news`, `vote`, `voteID`) VALUES
('kunal', 'afvzfzdfv', 'true', 'kunalafvzfzdfv'),
('kunal', 'rthxfndr', 'true', 'kunalrthxfndr'),
('parth', 'afvzfzdfv', 'true', 'parthafvzfzdfv'),
('parth', 'dfvarfves', 'true', 'parthdfvarfves'),
('parth', 'zdfbdxgb', 'true', 'parthzdfbdxgb'),
('test', 'afvzfzdfv', 'true', 'testafvzfzdfv'),
('test', 'dfvarfves', 'true', 'testdfvarfves'),
('test', 'sscvasD', 'false', 'testsscvasD'),
('test', 'zdfbdxgb', 'true', 'testzdfbdxgb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsH`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD UNIQUE KEY `voteID` (`voteID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
