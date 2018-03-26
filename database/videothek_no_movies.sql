-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Mrz 2018 um 09:06
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m307`
--
CREATE DATABASE IF NOT EXISTS `m307` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `m307`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `membership`
--

CREATE TABLE `membership` (
  `MembershipID` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `membership`
--

INSERT INTO `membership` (`MembershipID`, `m_name`, `days`) VALUES
(1, 'Keine', 30),
(2, 'Bronze', 40),
(3, 'Silber', 50),
(4, 'Gold', 70);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rentals`
--

CREATE TABLE `rentals` (
  `RentalID` int(11) NOT NULL,
  `fk_ID` int(11) NOT NULL,
  `fk_MembershipID` int(11) NOT NULL,
  `time_rented` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`MembershipID`);

--
-- Indizes für die Tabelle `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`RentalID`),
  ADD KEY `fk_ID` (`fk_ID`),
  ADD KEY `fk_MembershipID` (`fk_MembershipID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `membership`
--
ALTER TABLE `membership`
  MODIFY `MembershipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `rentals`
--
ALTER TABLE `rentals`
  MODIFY `RentalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `fk_ID` FOREIGN KEY (`fk_ID`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `fk_MembershipID` FOREIGN KEY (`fk_MembershipID`) REFERENCES `membership` (`MembershipID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
