-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 30 okt 2014 om 09:55
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `barrocit`
--
CREATE DATABASE IF NOT EXISTS `barrocit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `barrocit`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `appointmentsNR` int(11) NOT NULL AUTO_INCREMENT,
  `customersNR` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(75) NOT NULL,
  PRIMARY KEY (`appointmentsNR`),
  KEY `customersNR` (`customersNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerNR` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(30) COLLATE latin1_bin NOT NULL,
  `address` varchar(40) COLLATE latin1_bin NOT NULL,
  `zipCode` varchar(7) COLLATE latin1_bin NOT NULL,
  `residence` varchar(30) COLLATE latin1_bin NOT NULL,
  `telephoneNumber` int(10) NOT NULL,
  `faxNumber` int(10) NOT NULL,
  `email` varchar(40) COLLATE latin1_bin NOT NULL,
  `invoicesNumber` int(5) NOT NULL,
  `openProjects` int(5) NOT NULL,
  `appointments` varchar(30) COLLATE latin1_bin NOT NULL,
  `internalContact` text COLLATE latin1_bin NOT NULL,
  `dateAction` date NOT NULL,
  `lastcontactDate` date NOT NULL,
  `nextAction` date NOT NULL,
  `contactPerson` text COLLATE latin1_bin NOT NULL,
  `btwCode` int(15) NOT NULL,
  `salesAmount` double NOT NULL,
  `balance` double NOT NULL,
  `credit` int(6) NOT NULL,
  `limit` int(10) NOT NULL,
  `grootboekrekeningNR` varchar(15) COLLATE latin1_bin NOT NULL,
  `offerStatus` varchar(40) COLLATE latin1_bin NOT NULL,
  `prospect` varchar(40) COLLATE latin1_bin NOT NULL,
  `bkrControle` tinyint(4) NOT NULL,
  PRIMARY KEY (`customerNR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=104 ;

--
-- Gegevens worden uitgevoerd voor tabel `customer`
--

INSERT INTO `customer` (`customerNR`, `companyName`, `address`, `zipCode`, `residence`, `telephoneNumber`, `faxNumber`, `email`, `invoicesNumber`, `openProjects`, `appointments`, `internalContact`, `dateAction`, `lastcontactDate`, `nextAction`, `contactPerson`, `btwCode`, `salesAmount`, `balance`, `credit`, `limit`, `grootboekrekeningNR`, `offerStatus`, `prospect`, `bkrControle`) VALUES
(101, 'barrocit', 'Terheijdenseweg 350', '4826 AA', 'Breda', 76733444, 0, 'radiuscollege@hotmail.com', 3, 1, '', '', '0000-00-00', '2014-10-09', '0000-00-00', 'Fer van Krimpen', 0, 0, 1500, 0, 1000, '', '', '', 0),
(102, 'Barroc-IT', 'Terheijdenseweg 350', '5544 AA', 'Breda', 764635354, 0, 'Jesse@hotmail.com', 3, 2, '', '', '0000-00-00', '2014-10-02', '0000-00-00', 'Jesse Peffer', 53245254, 0, 3000, 0, 2500, '', '', '', 0),
(103, 'Barroc-IT', 'Terheijdensweg 350', '4455 AB', 'Breedjeda', 683937583, 0, 'nick@hotmail.com', 4, 1, '', '', '0000-00-00', '2014-10-11', '0000-00-00', 'Nick de Koning', 543663324, 2000, 4000, 0, 1750, '5345363', '', '', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `invoicesNR` int(11) NOT NULL AUTO_INCREMENT,
  `projectsNR` int(10) NOT NULL,
  `date` date NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`invoicesNR`),
  KEY `projectsNR` (`projectsNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projectsNR` int(11) NOT NULL AUTO_INCREMENT,
  `customerNR` int(10) NOT NULL,
  `maintenanceContract` tinyint(4) NOT NULL,
  `software` varchar(50) NOT NULL,
  `hardware` varchar(50) NOT NULL,
  `description` varchar(75) NOT NULL,
  PRIMARY KEY (`projectsNR`),
  KEY `customerNR` (`customerNR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Gegevens worden uitgevoerd voor tabel `projects`
--

INSERT INTO `projects` (`projectsNR`, `customerNR`, `maintenanceContract`, `software`, `hardware`, `description`) VALUES
(49, 101, 0, 'Google chrome, Wamp server & Sublime text 2', 'Laptop', 'Finance application for BarrocIT. Contactperson: Fer v Krimpen'),
(50, 102, 1, 'Notepad ++, Wamp server & Google chrome', 'Laptop', 'A application for the administration'),
(51, 102, 1, 'Sublime text 2, Wamp server & Mozilla firefox', 'Laptop', 'Finance application'),
(52, 103, 0, 'Sublime text 2, Wamp server & Google chrome', 'Laptop', 'A application for the administration');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gebruikersrol` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `gebruikersrol`) VALUES
(1, 'admin', 'admin', 4),
(2, 'finance', 'finance', 1),
(3, 'sales', 'sales', 3),
(4, 'development', 'development', 2);

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_customers` FOREIGN KEY (`customersNR`) REFERENCES `customer` (`customerNR`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `project-invoices` FOREIGN KEY (`projectsNR`) REFERENCES `projects` (`projectsNR`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`customerNR`) REFERENCES `customer` (`customerNR`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
