-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 12:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signinwe_dbinnodev`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactimages`
--

CREATE TABLE `tblactimages` (
  `Id` int(11) NOT NULL,
  `actTitle` varchar(250) NOT NULL,
  `imageName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblactimages`
--

INSERT INTO `tblactimages` (`Id`, `actTitle`, `imageName`) VALUES
(1, 'First Activity', '5922945827554@blacklogo.png'),
(3, 'First Activity', '5922945830b7c@screen.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblactivities`
--

CREATE TABLE `tblactivities` (
  `Id` int(11) NOT NULL,
  `prName` varchar(250) NOT NULL,
  `actDate` date NOT NULL,
  `title` varchar(250) NOT NULL,
  `location` varchar(250) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `video` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblactivities`
--

INSERT INTO `tblactivities` (`Id`, `prName`, `actDate`, `title`, `location`, `description`, `image`, `video`) VALUES
(1, 'First Project', '2017-05-17', 'First Activity', 'LOcation', 'First activity for the first Project', '5922943e97a9d@img.jpg', ''),
(3, 'name', '2017-05-24', 'title', '', 'dgb', '5922b8fee9d0f@blacklogo.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `Id` int(11) NOT NULL,
  `prName` varchar(250) NOT NULL,
  `eDate` date NOT NULL,
  `title` varchar(250) NOT NULL,
  `location` varchar(250) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `video` varchar(250) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`Id`, `prName`, `eDate`, `title`, `location`, `description`, `image`, `video`, `active`) VALUES
(1, 'First Project', '2017-05-29', 'First Event of first Project', '', 'This is the first event for first project', '59228e379f7ca@blacklogo.png', '', 1),
(3, 'name', '2017-05-23', 'title', '', 'bfbdfb', '5922b984e3648@img.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `Id` int(11) NOT NULL,
  `newsDate` date NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) DEFAULT NULL,
  `text` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `video` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`Id`, `newsDate`, `title`, `author`, `text`, `image`, `video`) VALUES
(1, '2017-05-22', 'First News Title', 'Alaa Bachir', 'cdkvjdrg kudrg d ldb ldiub dbd', '5922b9935ad69@img.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblprojects`
--

CREATE TABLE `tblprojects` (
  `Id` int(11) NOT NULL,
  `prname` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `target` varchar(250) DEFAULT NULL,
  `doner` varchar(250) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblprojects`
--

INSERT INTO `tblprojects` (`Id`, `prname`, `title`, `target`, `doner`, `startDate`, `endDate`, `image`, `description`, `notes`) VALUES
(1, 'First Project', 'The first project start', 'Schools & Univerity Students', 'Alaa Bachir', '2017-05-11', '2017-05-24', '592291e7b2ead@blacklogo.png', 'This project is the first project', 'My own notes '),
(5, 'name', 'title', 'dv', 'dv', '2017-05-19', '2017-05-12', '5922b8dd52f2f@blacklogo.png', 'dv', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `Id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `Type` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`Id`, `username`, `password`, `Type`) VALUES
(1, 'admin', 'Admin@123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactimages`
--
ALTER TABLE `tblactimages`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `uniqueImage` (`imageName`),
  ADD KEY `iActivityId` (`actTitle`);

--
-- Indexes for table `tblactivities`
--
ALTER TABLE `tblactivities`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `uniqueact` (`title`),
  ADD UNIQUE KEY `uniqueactimage` (`image`),
  ADD KEY `projectName` (`prName`);

--
-- Indexes for table `tblevents`
--
ALTER TABLE `tblevents`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `uniqueact` (`title`),
  ADD UNIQUE KEY `uniqueactimage` (`image`),
  ADD KEY `projectName` (`prName`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `uniquetitle` (`title`),
  ADD UNIQUE KEY `newsimge` (`image`);

--
-- Indexes for table `tblprojects`
--
ALTER TABLE `tblprojects`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `projectImage` (`image`),
  ADD UNIQUE KEY `prName` (`prname`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactimages`
--
ALTER TABLE `tblactimages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblactivities`
--
ALTER TABLE `tblactivities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblprojects`
--
ALTER TABLE `tblprojects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblactivities`
--
ALTER TABLE `tblactivities`
  ADD CONSTRAINT `projectsnames` FOREIGN KEY (`prName`) REFERENCES `tblprojects` (`prname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
