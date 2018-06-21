-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 jun 2018 om 00:51
-- Serverversie: 10.1.31-MariaDB
-- PHP-versie: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scnproject`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aircraft`
--

CREATE TABLE `aircraft` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_id` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Aircrafts','Codes','Hacks','Music','Pictures','NSFW''Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `aircraft`
--

INSERT INTO `aircraft` (`id`, `image`, `image_text`, `auteur`, `inhoud_id`, `category_id`) VALUES
(1, '', '', '', '', 'NSFW'),
(2, 'discord icon.jpg', 'asdfasdf', 'MD', '', 'NSFW\'Tools'),
(3, 'background.jpg', 'asdfasdf', 'MD', '', 'NSFW\'Tools');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_id` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Aircrafts','Codes','Hacks','Music','Pictures','NSFW''Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `codes`
--

INSERT INTO `codes` (`id`, `image`, `image_text`, `auteur`, `inhoud_id`, `category_id`) VALUES
(1, 'discord icon.jpg', 'sss', '', '', 'Aircrafts'),
(2, '', '', '', '', 'Aircrafts');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hacks`
--

CREATE TABLE `hacks` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_id` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `hacks`
--

INSERT INTO `hacks` (`id`, `image`, `image_text`, `auteur`, `inhoud_id`, `category_id`) VALUES
(1, '', '', '', '', 'Codes');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_id` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `music`
--

INSERT INTO `music` (`id`, `image`, `image_text`, `auteur`, `inhoud_id`, `category_id`) VALUES
(1, '', '', '', '', 'Hacks'),
(2, 'discord.jpg', 'eSdcsedcedcdcdcdcdcdcdcdcdddcdcdcdc', '', '', 'Music');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nsfw`
--

CREATE TABLE `nsfw` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_id` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Aircrafts','Codes','Hacks','Music','Pictures','NSFW''Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `nsfw`
--

INSERT INTO `nsfw` (`id`, `image`, `image_text`, `auteur`, `inhoud_id`, `category_id`) VALUES
(1, 'discord icon.jpg', 'lol', '', '', 'Pictures');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pictures`
--

CREATE TABLE `pictures` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_ID` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pictures`
--

INSERT INTO `pictures` (`ID`, `image`, `image_text`, `auteur`, `inhoud_ID`, `category_id`) VALUES
(52, 'body.png', 'sss', '', '', ''),
(53, '', 'sss', '', '', 'Music'),
(54, '', 'fadf', '', '', 'Pictures'),
(55, '', 'fadf', '', '', 'Pictures'),
(56, '', 'dd', '', '', 'Vehicles'),
(57, 'footer.png', 'xxx', '', '', ''),
(58, '', 'sssssssss', '', '', ''),
(59, '', 's', '', '', 'Pictures'),
(60, '', '', '', '', 'NSFW'),
(61, '', 'dddd', '', '', 'Vehicles'),
(62, '', 'sss', '', '', 'Codes'),
(63, '', '', '', '', 'Codes'),
(64, '', 'sss', '', '', 'Codes'),
(65, '', 'sss', '', '', 'Codes'),
(66, '', 'sss', '', '', 'Codes'),
(67, '', 'asdfasdf', '', '', 'NSFW'),
(68, 'discord icon.jpg', 'asdfasdf', '', '', 'NSFW'),
(69, '', '', '', '', 'Music'),
(70, '', 'wdasxzedc  ezno', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tools`
--

CREATE TABLE `tools` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_ID` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tools`
--

INSERT INTO `tools` (`ID`, `image`, `image_text`, `auteur`, `inhoud_ID`, `category_id`) VALUES
(1, '', '', '', '', 'Tools'),
(2, '', 'cv', '', '', 'Tools'),
(3, '', '', '', '', 'Tools'),
(4, '', 'xsxs', '', '', 'Tools'),
(5, 'discord icon.jpg', 'asdfasdf', '', '', 'Tools');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rank` enum('Gebruiker','Donateur','VIP','Moderator','Administrator','Beheer') NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `rank`, `created_at`) VALUES
(1, 'Mike', '$2y$10$jrJCuD/fRaxO/TTFL7QZyOdUoB0o2aBFTbb1vTyy8HF8QDg0xp6Ti', 'info@original-mike.com', 'Gebruiker', '2018-06-21 09:48:18'),
(2, 'MD', '$2y$10$3FqqynYNH9pSo5bdu/kTdeGfCj.lhiFy5PXHDHoPFrBxIp7Qxoc9u', 'md@hotmail.com', 'Beheer', '2018-06-21 18:30:20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `inhoud_id` varchar(255) NOT NULL,
  `category_id` enum('Tools','Vehicles','Aircrafts','Codes','Hacks','Music','Pictures','NSFW''Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts''Tools','Vehicles','Codes','Hacks','Music','Pictures','NSFW','Aircrafts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vehicles`
--

INSERT INTO `vehicles` (`id`, `image`, `image_text`, `auteur`, `inhoud_id`, `category_id`) VALUES
(1, '', '', '', '', 'Vehicles'),
(2, '', 'asdfafd', 'MD', '', 'Vehicles');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `hacks`
--
ALTER TABLE `hacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `nsfw`
--
ALTER TABLE `nsfw`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexen voor tabel `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aircraft`
--
ALTER TABLE `aircraft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `hacks`
--
ALTER TABLE `hacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `nsfw`
--
ALTER TABLE `nsfw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `pictures`
--
ALTER TABLE `pictures`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT voor een tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
