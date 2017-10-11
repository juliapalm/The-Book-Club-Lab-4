-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 05 okt 2017 kl 17:10
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `The Book Club`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `Books`
--

CREATE TABLE `Books` (
  `ISBN` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Pages` int(11) DEFAULT NULL,
  `Edition` int(11) DEFAULT NULL,
  `Published` int(11) DEFAULT NULL,
  `Author` varchar(255) NOT NULL,
  `Reserved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `Books`
--

INSERT INTO `Books` (`ISBN`, `Title`, `Pages`, `Edition`, `Published`, `Author`, `Reserved`) VALUES
(1, 'Neverland', 210, 2, 1701, 'Peter Pan', 1),
(2, 'Magic Kingdom', 60, 1, 2017, 'Mickey Mouse', 0),
(3, 'Wonderland', 360, 3, 2001, 'Alice Liddel', 1),
(4, 'Disney World', 200, 1, 1960, 'Walt Disney', 0),
(5, 'Treasure Island', 163, 2, 1755, 'Jim Hawkins', 0),
(6, 'Arendelle', 265, 1, 2015, 'Queen Elsa', 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `Users`
--

CREATE TABLE `Users` (
  `userID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `Users`
--

INSERT INTO `Users` (`userID`, `username`, `userpass`) VALUES
(1, 'Amy', '942d9b462359bfeaf06ba28c3abbcc550d411e7d'),
(2, 'Missy', '78f3842f0201c993fec13905f2ff9ec3fdd39056'),
(3, 'Doctor', '917357a1114ea6a25fee259eb9dc0bc8e2a5cc6e');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ISBN`);

--
-- Index för tabell `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `Users`
--
ALTER TABLE `Users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
