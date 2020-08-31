-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2020 at 03:28 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_beniamin_hutyra_bigevents`
--
CREATE DATABASE IF NOT EXISTS `cr13_beniamin_hutyra_bigevents` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr13_beniamin_hutyra_bigevents`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `datetime`, `description`, `image`, `capacity`, `contact_mail`, `contact_phone`, `address`, `event_url`, `type`) VALUES
(1, 'Coding', '2020-08-24 09:21:00', 'ALL DAY CODING', 'https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', '500', 'coding@mail.com', '+43 1 220558', 'Kaiserstraße 5', 'https://www.wearedevelopers.com/talents/?action=login', 'Education'),
(2, 'Coding', '2015-06-01 00:00:00', 'ALL DAY CODING test 2', 'https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', '550', 'coding23@mail.com', '+43 1 220558', 'Arbeitergasse 37', 'https://www.wearedevelopers.com/talents/?action=login', 'Education'),
(4, 'Beethoven. Menschenwelt und Götterfunken', '2020-09-06 06:13:00', 'Ludwig van Beethoven: Der Name steht für ein musikalisches Lebenswerk, das bis heute weltweit Menschen begeistert. Zum 250. Geburtstag des großen Komponisten im Jahr 2020 präsentiert die Österreichische Nationalbibliothek im Prunksaal die Sonderausstellun', 'https://events.wien.info/media/full/OENB_Beethoven_Prunksaal_1.jpg', '1000', 'info@info.at', '+43 153410', 'Prunksaal Josefsplatz 1 1010 Wien', 'https://events.wien.info/de/10iv/beethoven-menschenwelt-und-gotterfunken/', 'Music'),
(5, 'The Beginning. Österreichische Kunst 1945 bis 1980', '2023-07-09 13:17:00', 'Die Eröffnungsausstellung der ALBERTINA MODERN \"The Beginning. Kunst in Österreich 1945 bis 1980\" zeigt erstmals eine Epochenübersicht über die österreichische Kunst in den wichtigen drei Jahrzehnten nach 1945. Die Ausstellung fokussiert damit die für die', 'https://events.wien.info/media/full/max_weiler_laufes-_1961_c_albertina_essl_klein.jpg', '8000', 'info@info.at', '+43 1 220558', 'Karlsplatz 5 1010 Wien', 'https://events.wien.info/de/11mi/the-beginning-osterreichische-kunst-1945-bis-1980/', 'Art'),
(6, 'Wiener Festwochen 2020 reframed', '2021-08-15 09:17:00', 'Nach dem ersten Teil der Festwochen 2020 reframed, einer Sammlung digitaler „Gesten“ von Festwochen Künstler*innen (darunter eigens produzierte Texte, Videos und Bilder zu finden auf www.festwochen.at), findet von 26. August bis 26. September der zweite T', 'https://events.wien.info/media/full/WienerFestwochen_Logo_CMYK_-01_002.jpg', '5022', 'info@info.at', '+43 1 220558', 'Kaiserstraße 10', 'https://events.wien.info/de/10hn/wiener-festwochen-2020-reframed/', 'Festival'),
(7, 'Film-Festival auf dem Wiener Rathausplatz 2020', '2020-08-12 10:10:00', 'Das Film Festival auf den Wiener Rathausplatz ist seit drei Jahrzehnten ein Markenzeichen der Bundeshauptstadt. Hunderttausende Menschen aus Wien und der ganzen Welt besuchen alljährlich den beliebten Event, um die einzigartige Mischung aus Kultur, Kulina', 'https://events.wien.info/media/full/c2020-ZOOMVP_Tavakolik-Rathausplatz_UE1_RP_c09_A2_Quer.jpg', '3000', 'info@info.at', '+43 1 220558', 'Rathausplatz 1010 Wien', 'https://events.wien.info/de/11pu/film-festival-auf-dem-wiener-rathausplatz-2020/', 'Festival');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
