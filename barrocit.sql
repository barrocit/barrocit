-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 07 nov 2014 om 15:12
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
  `faxNumber` varchar(10) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `email` varchar(40) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `appointments` varchar(30) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `lastcontactDate` date NOT NULL,
  `contactPerson` varchar(30) COLLATE latin1_bin NOT NULL DEFAULT '-',
  `prospect` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `openProjects` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customerNR`),
  FULLTEXT KEY `companyName` (`companyName`),
  FULLTEXT KEY `companyName_2` (`companyName`),
  FULLTEXT KEY `companyName_3` (`companyName`),
  FULLTEXT KEY `companyName_4` (`companyName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=108 ;

--
-- Gegevens worden uitgevoerd voor tabel `customer`
--

INSERT INTO `customer` (`customerNR`, `companyName`, `address`, `zipCode`, `residence`, `telephoneNumber`, `faxNumber`, `email`, `appointments`, `lastcontactDate`, `contactPerson`, `prospect`, `active`, `openProjects`) VALUES
(101, 'barrocithsdgkj', 'Terheijdenseweg 350', '4826 AA', 'Breda', '76733444', '13123', 'radiuscollege@hotmail.com', 'gkjdrjghdk', '2014-10-24', 'Fer van Krimpen', 1, 1, 0),
(102, 'Barroc-ITjesse', 'Terheijdenseweg 350', '5544 AA', 'Breda', '764635354', '0', 'Jesse@hotmail.com', '', '2014-10-02', 'Jesse Peffer', 0, 1, 0),
(103, 'Barroc-IT', 'Terheijdensweg 350', '4455 AB', 'Breedjeda', '683937583', '0', 'nick@hotmail.com', '', '2014-10-11', 'Nick de Koning', 0, 1, 0),
(104, 'test1', 'test2', 'test3', 'test4', '6060606', '20202', 'test@test.nl', 'testen', '2014-11-18', 'de moeder van rian', 0, 0, 0),
(105, 'nac', 'nac', 'nac', 'nac', '07654972166666666666', '0', 'ajax@aja', 'nac', '0002-11-21', 'Ji-hjad', 0, 0, 0),
(106, 'ajax', 'ajax', 'ajax', 'ajax', '0', '0', 'ajax@ajax.nl', 'ajaxx', '2014-11-21', 'ajacied', 0, 0, 0),
(107, 'dsgdfs', 'gdfgdsfgdsf', 'gddfg', 'dsfgdsfgsd', '0', '0', 'dfgdssgdsf', 'gsdfgdsfgsdfg', '2014-11-21', 'dsgdffgfg', 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3258 ;

--
-- Gegevens worden uitgevoerd voor tabel `invoices`
--

INSERT INTO `invoices` (`invoicesNR`, `projectsNR`, `description`, `datum`, `price`, `quantity`, `btw`, `active`) VALUES
(1, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1),
(2, 50, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 0),
(11, 49, 'kutkakkerlak', '2014-11-26', '0.00', 10, '1.21', 1),
(3245, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1),
(3247, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1),
(3248, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1),
(3249, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1),
(3253, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1),
(3254, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1),
(3255, 49, 'jesse', '2014-11-21', '40.00', 3, '1.21', 1),
(3256, 49, 'ajaxied', '2014-11-26', '100.00', 10, '1.21', 0),
(3257, 49, 'ajaxied', '2014-11-26', '0.00', 10, '1.21', 1);

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
