-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Gostitelj: localhost
-- Čas nastanka: 26. okt 2013 ob 20.51
-- Različica strežnika: 5.6.12-log
-- Različica PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `ocene2`
--
CREATE DATABASE IF NOT EXISTS `ocene2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ocene2`;

-- --------------------------------------------------------

--
-- Struktura tabele `komentarji`
--

CREATE TABLE IF NOT EXISTS `komentarji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uporabnikid` int(11) NOT NULL,
  `vsebina` text NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Odloži podatke za tabelo `komentarji`
--

INSERT INTO `komentarji` (`id`, `uporabnikid`, `vsebina`, `datum`) VALUES
(1, 1, 'feget\r\n', '2013-10-26'),
(2, 2, 'lepi', '2013-10-26'),
(3, 3, 'muck', '2013-10-26'),
(6, 3, 'pizdaaa', '2013-10-26'),
(7, 1, 'Testis', '2013-10-26');

-- --------------------------------------------------------

--
-- Struktura tabele `ocene`
--

CREATE TABLE IF NOT EXISTS `ocene` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uporabnik_id` int(11) NOT NULL,
  `ocena` int(11) NOT NULL,
  `predmet` varchar(4) NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Odloži podatke za tabelo `ocene`
--

INSERT INTO `ocene` (`id`, `uporabnik_id`, `ocena`, `predmet`, `datum`) VALUES
(1, 1, 4, 'slo', '2013-10-26'),
(2, 2, 3, 'slo', '2013-10-26'),
(3, 3, 4, 'mat', '2013-10-26'),
(4, 1, 2, 'mat', '2013-10-26'),
(5, 1, 2, 'nubp', '2013-10-26'),
(6, 1, 2, 'vos', '2013-10-26'),
(7, 1, 5, 'npa', '2013-10-26'),
(8, 1, 2, 'msa', '2013-10-26'),
(9, 1, 3, 'soc', '2013-10-26'),
(10, 1, 5, 'nsa', '2013-10-26'),
(11, 1, 4, 'anj', '2013-10-26'),
(12, 1, 4, 'oos', '2013-10-26'),
(13, 1, 1, 'fiz', '2013-10-26'),
(14, 1, 2, 'sap', '2013-10-26'),
(15, 1, 5, 'npap', '2013-10-26');

-- --------------------------------------------------------

--
-- Struktura tabele `uporabniki`
--

CREATE TABLE IF NOT EXISTS `uporabniki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime_priimek` varchar(99) NOT NULL,
  `spol` text NOT NULL,
  `razred` varchar(5) NOT NULL,
  `slika` varchar(99) NOT NULL,
  `glasovi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Odloži podatke za tabelo `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `ime_priimek`, `spol`, `razred`, `slika`, `glasovi`) VALUES
(1, 'Matej JeriÄ', 'MoÅ¡ki', '2.Rb', 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-frc1/21817_296434187142121_1342268080_n.jpg', 0),
(2, 'Josip RajkoviÄ‡', 'MoÅ¡k', '4. Ra', 'https://scontent-b-vie.xx.fbcdn.net/hphotos-frc3/550199_547930525221751_1428887436_n.jpg', 0),
(3, 'Miha VidakoviÄ', 'MoÅ¡k', '2. Mb', 'https://scontent-a-vie.xx.fbcdn.net/hphotos-ash3/530402_426730387444365_690154163_n.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
