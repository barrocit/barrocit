-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 13 nov 2014 om 00:44
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
  `companyName` varchar(30) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `address` varchar(40) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `zipCode` varchar(7) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `residence` varchar(30) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `telephoneNumber` varchar(20) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `faxNumber` varchar(20) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `email` varchar(40) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `appointments` varchar(30) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `lastcontactDate` date NOT NULL,
  `contactPerson` varchar(30) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `prospect` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customerNR`),
  FULLTEXT KEY `companyName` (`companyName`),
  FULLTEXT KEY `companyName_2` (`companyName`),
  FULLTEXT KEY `companyName_3` (`companyName`),
  FULLTEXT KEY `companyName_4` (`companyName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=108 ;

--
-- Gegevens worden uitgevoerd voor tabel `customer`
--

INSERT INTO `customer` (`customerNR`, `companyName`, `address`, `zipCode`, `residence`, `telephoneNumber`, `faxNumber`, `email`, `appointments`, `lastcontactDate`, `contactPerson`, `prospect`, `active`) VALUES
(1, 'MC Donalds', 'Terheijdenseweg 350', '4826 AA', 'Breda', '076-4545434', '046-4777556', 'contact@mc.nl', 'MC Donalds in Breda', '2014-10-24', 'Jan van Haperen', 1, 0),
(2, 'Peffer', 'Amstelweg 20', '5544 AA', 'Breda', '076-4635354', '046-4635354', 'contact@peffer.com', 'Meneer Peffer is op vakantie', '2014-10-02', 'Jesse Peffer', 0, 0),
(3, 'Ajax', 'Adweg 10', '4455 AB', 'Amsterdam', '020-8885632', '010-8885632', 'contact@ajax.nl', 'voetbalclub', '2014-10-11', 'Nick de Koning', 0, 1),
(4, 'NAC', 'Verleghweg 23', '4841 AA', 'Breda', '076-3423858', '079-3423858', 'friso@nac.nl', 'testen', '2014-11-18', 'Friso Kin', 0, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `invoicesNR` int(11) NOT NULL AUTO_INCREMENT,
  `projectsNR` int(10) NOT NULL,
  `description` text NOT NULL,
  `datum` date NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '1',
  `btw` decimal(10,2) NOT NULL DEFAULT '1.21',
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`invoicesNR`),
  KEY `projectsNR` (`projectsNR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `invoices`
--

INSERT INTO `invoices` (`invoicesNR`, `projectsNR`, `description`, `datum`, `price`, `quantity`, `btw`, `active`) VALUES
(1, 1, 'factuur 1', '2014-11-26', '10.00', 10, '1.21', 0),
(2, 2, 'factuur 2', '2014-11-25', '9.99', 9, '1.21', 0),
(3, 3, 'factuur 3', '2014-11-24', '9.98', 8, '1.21', 0),
(4, 4, 'factuur 4', '2014-11-23', '9.97', 7, '1.21', 0),
(5, 5, 'factuur 5', '2014-11-22', '9.96', 3, '1.21', 0),
(6, 6, 'factuur 6', '2014-11-21', '9.95', 2, '1.21', 0),
(7, 7, 'factuur 7', '2014-11-22', '9.94', 1, '1.21', 0),
(8, 8, 'factuur 8', '2014-11-21', '9.93', 11, '1.21', 0),
(9, 1, 'factuur 9', '2014-11-26', '10.20', 6, '1.21', 1),
(10, 2, 'factuur 10', '2014-11-25', '8.78', 3, '1.21', 1),
(11, 3, 'factuur 11', '2014-11-24', '10.72', 2, '1.21', 1),
(12, 4, 'factuur 12', '2014-11-23', '9.98', 2, '1.21', 1),
(13, 5, 'factuur 13', '2014-11-22', '9.99', 2, '1.21', 1),
(14, 6, 'factuur 14', '2014-11-21', '9.80', 3, '1.21', 1),
(15, 7, 'factuur 15', '2014-11-22', '4.32', 3, '1.21', 1),
(16, 8, 'factuur 16', '2014-11-21', '6.24', 2, '1.21', 1);

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
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`projectsNR`),
  KEY `customerNR` (`customerNR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Gegevens worden uitgevoerd voor tabel `projects`
--

INSERT INTO `projects` (`projectsNR`, `customerNR`, `maintenanceContract`, `software`, `hardware`, `description`, `active`) VALUES
(1, 1, 0, 'MC Donalds system', 'Laptop, Kassa', 'Finance application for MC Donalds', 0),
(2, 2, 1, 'Notepad ++, Wamp server & Google chrome', 'Laptop', 'A application for the administration', 0),
(3, 3, 1, 'Sublime text 2, Wamp server & Mozilla firefox', 'Laptop', 'Finance application', 0),
(4, 4, 0, 'Sublime text 2, Wamp server & Google chrome', 'Laptop', 'A application for the administration', 0),
(5, 1, 0, 'Hamburgersystem', 'Bakplaat, Laptop', 'Bakplaat for MC Donalds', 1),
(6, 2, 1, 'Google chrome', 'Laptop', 'A application for the machine', 1),
(7, 3, 1, 'Wamp server', 'Laptop', 'Ajax system', 1),
(8, 4, 0, 'Sublime text 2', 'Laptop', 'A application for the machine', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
