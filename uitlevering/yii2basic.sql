-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 11 apr 2018 om 18:29
-- Serverversie: 5.7.21-0ubuntu0.16.04.1
-- PHP-versie: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `visitor`
--

CREATE TABLE `visitor` (
  `naam` char(30) NOT NULL,
  `adres` char(30) DEFAULT NULL,
  `plaats` char(30) DEFAULT NULL,
  `klacht` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `visitor`
--

INSERT INTO `visitor` (`naam`, `adres`, `plaats`, `klacht`) VALUES
('ann', 'Anstraatt', 'Ens', 'Geen water druk'),
('harry', 'Hoofdstraat', 'zwartsluis', 'Voordeur klemt'),
('henk', 'pietstart', 'pietstad', 'cv kapot'),
('klaas', 'klaasstraat', 'klassplaats', 'deur klemt'),
('piet', 'Kerkstraat 12', 'Meppel', 'Dak lekt');

--
-- Indexen voor geëxporteerde tabellen
--


--
-- Indexen voor tabel `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`naam`);


