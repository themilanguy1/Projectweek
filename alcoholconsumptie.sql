-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jun 2018 om 14:07
-- Serverversie: 10.1.29-MariaDB
-- PHP-versie: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `alcoholconsumptie`
--

CREATE TABLE `alcoholconsumptie` (
  `id` int(255) NOT NULL,
  `jaar` year(4) NOT NULL,
  `bier` decimal(10,1) NOT NULL,
  `wijn` decimal(10,1) NOT NULL,
  `gedistilleerd` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `alcoholconsumptie`
--

INSERT INTO `alcoholconsumptie` (`id`, `jaar`, `bier`, `wijn`, `gedistilleerd`) VALUES
(21, 1960, '1.2', '0.2', '1.9'),
(22, 1965, '1.9', '0.5', '1.9'),
(23, 1970, '2.9', '0.8', '2.0'),
(24, 1975, '4.0', '1.5', '3.4'),
(25, 1980, '4.8', '1.4', '2.7'),
(26, 1985, '4.2', '2.0', '2.2'),
(27, 1990, '4.1', '1.9', '2.0'),
(28, 1995, '4.1', '2.2', '1.7'),
(29, 2000, '4.1', '2.3', '1.7'),
(30, 2001, '4.1', '2.3', '1.7'),
(31, 2002, '4.0', '2.3', '1.7'),
(32, 2003, '4.0', '2.5', '1.5'),
(33, 2004, '3.9', '2.6', '1.4'),
(34, 2005, '3.9', '2.7', '1.3');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `alcoholconsumptie`
--
ALTER TABLE `alcoholconsumptie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `alcoholconsumptie`
--
ALTER TABLE `alcoholconsumptie`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
