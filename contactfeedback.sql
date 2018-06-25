-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jun 2018 om 15:16
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
-- Tabelstructuur voor tabel `contactfeedback`
--

CREATE TABLE `contactfeedback` (
  `contact_id` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bericht` varchar(1999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contactfeedback`
--

INSERT INTO `contactfeedback` (`contact_id`, `naam`, `email`, `bericht`) VALUES
(3, 'Milan Gupta', 'milan.gupta@ymail.com', 'testbericht'),
(4, 'milan', 'milan.gupta@ymail.com', 'wwww');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contactfeedback`
--
ALTER TABLE `contactfeedback`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contactfeedback`
--
ALTER TABLE `contactfeedback`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
