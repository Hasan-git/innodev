-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 02:00 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(3, 'name', '2017-05-24', 'title', 'Beirut', 'dgb', '5922b8fee9d0f@blacklogo.png', '');

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
  `video` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`Id`, `prName`, `eDate`, `title`, `location`, `description`, `image`, `video`) VALUES
(1, 'First Project', '2017-05-29', 'First Event of first Project', '', 'This is the first event for first project', '59228e379f7ca@blacklogo.png', ''),
(3, 'name', '2017-05-23', 'title', '', 'bfbdfb', '5922b984e3648@img.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblimages`
--

CREATE TABLE `tblimages` (
  `id` int(11) NOT NULL,
  `newsId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `Id` int(11) NOT NULL,
  `prName` varchar(250) DEFAULT NULL,
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

INSERT INTO `tblnews` (`Id`, `prName`, `newsDate`, `title`, `author`, `text`, `image`, `video`) VALUES
(1, 'First Project', '2017-05-22', 'First News Title', 'Alaa Bachir', 'cdkvjdrg kudrg d ldb ldiub dbd', '5922b9935ad69@img.jpg', ''),
(4, 'name', '2017-05-22', 'Testing news title', 'Alaa bachir', 'Some Content', '5922cacd496ac@blacklogo.png', '');

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
(5, 'name', 'title', 'target', 'doner', '2017-05-19', '2017-05-12', '5922ca2a56476@screen.png', 'dv', ''),
(6, 'g', 'liub', '', '', '0000-00-00', '0000-00-00', '592f265909cf2@blacklogo.png', 'jj', '');

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
-- Indexes for table `tblimages`
--
ALTER TABLE `tblimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsId` (`newsId`(191)) USING BTREE;

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `uniquetitle` (`title`),
  ADD UNIQUE KEY `newsimge` (`image`),
  ADD KEY `projectname` (`prName`);

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
-- AUTO_INCREMENT for table `tblimages`
--
ALTER TABLE `tblimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblprojects`
--
ALTER TABLE `tblprojects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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

--
-- Constraints for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD CONSTRAINT `projectname` FOREIGN KEY (`prName`) REFERENCES `tblprojects` (`prname`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
