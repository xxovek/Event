-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2019 at 08:05 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Event`
--

-- --------------------------------------------------------

--
-- Table structure for table `AdminMaster`
--

CREATE TABLE `AdminMaster` (
  `adminId` int(11) NOT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `userPassword` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AdminMaster`
--

INSERT INTO `AdminMaster` (`adminId`, `userName`, `userPassword`, `created_at`, `updated_at`) VALUES
(1, 'john@abc.com', '12345', '2019-03-13 09:16:04', '2019-03-13 09:16:04'),
(2, 'kk@gmail.com', '125', '2019-03-21 10:03:52', '2019-03-21 10:19:00'),
(4, 'kk@gmail.com', 'kk', '2019-03-21 11:04:42', '2019-03-21 11:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `Contacts`
--

CREATE TABLE `Contacts` (
  `contactId` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `emailId` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `msg` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contacts`
--

INSERT INTO `Contacts` (`contactId`, `name`, `emailId`, `ContactNumber`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'kunal kapse', 'krkunal29@gmail.com', '9766695099', 'hello welcome to jai hind college', '2019-03-15 11:45:59', '2019-03-15 11:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `EventId` int(11) NOT NULL,
  `EventName` varchar(255) DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `EventTime` time DEFAULT NULL,
  `Description` text,
  `Venue` varchar(255) DEFAULT NULL,
  `VenueCity` varchar(255) DEFAULT NULL,
  `EventProfile` text,
  `EventFlag` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`EventId`, `EventName`, `EventDate`, `EventTime`, `Description`, `Venue`, `VenueCity`, `EventProfile`, `EventFlag`, `created_at`, `updated_at`) VALUES
(32, 'Fireworks Pune', '2019-03-19', '20:52:00', 'Pune railway station', 'Pune city', 'Pune Nashik', '1.jpg', 0, '2019-03-17 11:25:03', '2019-03-21 12:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `EventsGallary`
--

CREATE TABLE `EventsGallary` (
  `GallaryId` int(11) NOT NULL,
  `EventId` int(11) DEFAULT NULL,
  `pictures` text,
  `pictureid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EventsGallary`
--

INSERT INTO `EventsGallary` (`GallaryId`, `EventId`, `pictures`, `pictureid`, `created_at`, `updated_at`) VALUES
(24, 32, '321.jpg', 1, '2019-03-22 06:58:43', '2019-03-22 06:58:43'),
(25, 32, '322.jpg', 2, '2019-03-22 06:58:47', '2019-03-22 06:58:47'),
(26, 32, '323.jpg', 3, '2019-03-22 06:59:23', '2019-03-22 06:59:23'),
(27, 32, '324.jpg', 4, '2019-03-22 07:00:00', '2019-03-22 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Sponsers`
--

CREATE TABLE `Sponsers` (
  `SponserId` int(11) NOT NULL,
  `sponserName` varchar(255) DEFAULT NULL,
  `sponserDesc` text,
  `sponserProfile` text,
  `showFlag` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sponsers`
--

INSERT INTO `Sponsers` (`SponserId`, `sponserName`, `sponserDesc`, `sponserProfile`, `showFlag`, `created_at`, `updated_at`) VALUES
(3, 'kunal', 'hello', 'adakhan.jpeg', 1, '2019-03-15 11:28:48', '2019-03-16 12:33:37'),
(7, 'kunal', 'kapse', 'adakhan.jpeg', 0, '2019-03-15 11:41:53', '2019-03-16 12:33:27'),
(8, 'kunal', 'kunal kapse', 'Blaugrana-Tez-Icon-Shop-Shop-Coffee-brown.ico', 0, '2019-03-16 11:37:30', '2019-03-16 11:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `Subscriber`
--

CREATE TABLE `Subscriber` (
  `subscriberId` int(11) NOT NULL,
  `emailId` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Subscriber`
--

INSERT INTO `Subscriber` (`subscriberId`, `emailId`, `created_at`, `updated_at`) VALUES
(1, 'vikas@gmail.com', '2019-03-13 12:48:50', '2019-03-13 12:48:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AdminMaster`
--
ALTER TABLE `AdminMaster`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `Contacts`
--
ALTER TABLE `Contacts`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`EventId`);

--
-- Indexes for table `EventsGallary`
--
ALTER TABLE `EventsGallary`
  ADD PRIMARY KEY (`GallaryId`),
  ADD KEY `EventId` (`EventId`);

--
-- Indexes for table `Sponsers`
--
ALTER TABLE `Sponsers`
  ADD PRIMARY KEY (`SponserId`);

--
-- Indexes for table `Subscriber`
--
ALTER TABLE `Subscriber`
  ADD PRIMARY KEY (`subscriberId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AdminMaster`
--
ALTER TABLE `AdminMaster`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Contacts`
--
ALTER TABLE `Contacts`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `EventsGallary`
--
ALTER TABLE `EventsGallary`
  MODIFY `GallaryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `Sponsers`
--
ALTER TABLE `Sponsers`
  MODIFY `SponserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Subscriber`
--
ALTER TABLE `Subscriber`
  MODIFY `subscriberId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `EventsGallary`
--
ALTER TABLE `EventsGallary`
  ADD CONSTRAINT `EventsGallary_ibfk_1` FOREIGN KEY (`EventId`) REFERENCES `Events` (`EventId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
