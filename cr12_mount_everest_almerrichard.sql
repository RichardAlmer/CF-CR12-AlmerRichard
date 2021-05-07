-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Mai 2021 um 20:21
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr12_mount_everest_almerrichard`
--
CREATE DATABASE IF NOT EXISTS `cr12_mount_everest_almerrichard` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr12_mount_everest_almerrichard`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `description` text NOT NULL,
  `longitude` decimal(13,8) NOT NULL,
  `latitude` decimal(13,8) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `travel`
--

INSERT INTO `travel` (`id`, `locationName`, `picture`, `price`, `description`, `longitude`, `latitude`, `address`, `tel`) VALUES
(2, 'My Lake Hotel', 'https://media-cdn.tripadvisor.com/media/photo-m/1280/15/17/c8/c5/lake-s-my-lake-hotel.jpg', '45.00', 'Dieses moderne Hotel am Ufer eines Sees in den Alpen ist 5 Gehminuten vom nächsten Bahnhof, 9 km vom Casino Velden und 12 km vom Freizeitpark Minimundus entfernt. Die modernen Zimmer und Suiten haben bodentiefe Fenster mit Park- oder Seeblick und verfügen über Flachbildfernseher, iPod-Dock, kostenloses WLAN, Minibar und Espressomaschine. Suiten bieten außerdem ein Wohnzimmer und einen Balkon.  Das Frühstück ist kostenlos. Es gibt ein mondänes Restaurant und eine Bar sowie eine clubartige Lounge. Das Freizeitangebot umfasst einen Außenpool mit Sonnenterrasse, Zugang zum Privatstrand, einen Fitnessraum und ein Spa.', '14.14380000', '46.63360000', 'Augustenstraße 24, 9210 Pörtschach am Wörthersee', 427220505),
(3, 'Hotel Schloss Mönchstein', 'https://cf.bstatic.com/images/hotel/max1024x768/190/190670971.jpg', '50.00', 'Dieses gehobene Schlosshotel mit Gartenanlage befindet sich auf einer Anhöhe und ist jeweils 2 km von der Salzburger Altstadt und vom Salzburger Dom entfernt. Die eleganten Zimmer mit Marmorbad bieten kostenloses WLAN und einen Flachbildfernseher. Zimmer mit gehobener Ausstattung und Suiten haben außerdem einen Balkon oder eine Terrasse. In den Suiten gibt es einen separaten Wohnbereich. Zimmerservice ist verfügbar.  Ein Frühstücksbuffet ist im Preis inbegriffen. Parkplätze können kostenlos genutzt werden. Es gibt ein stilvolles Restaurant mit Bar, Glaskuppel und Terrasse. Ein Spa, ein Fitnessraum, ein Infinity-Außenpool und ein Whirlpool sind ebenfalls vorhanden.', '13.03582000', '47.80415000', 'Mönchsberg Park 26, 5020 Salzburg', 2147483647),
(4, 'Hotel Nestroy Wien', 'https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_650,q_auto,w_1000/itemimages/18/11/1811309_v8.jpeg', '65.00', 'Das charmante, blau gestrichene Gebäude dieses gehobenen Hotels liegt 11 Gehminuten vom Bahnhof Wien Praterstern, 2 km vom Riesenrad im Prater und 18 Gehminuten vom Stephansdom entfernt. Die hellen, modernen Zimmer mit Holzfußboden und Sitzecke bieten kostenloses WLAN, Flachbild-TV und eine Minibar. Die stilvoll eingerichteten Suiten verfügen darüber hinaus über einen separaten Wohnbereich und eine Nespressomaschine. Einige haben einen Balkon.  Zum Angebot gehören eine Sauna, ein Fitnesscenter sowie Konferenzräume und eine moderne Lobbybar. Frühstück ist gegen Aufpreis erhältlich.', '16.38229000', '48.21782000', 'Rotensterngasse 7A, 1020 Wien', 1211400),
(5, 'Seehotel im Weyer Gmunden', 'https://www.gmunden-seehotel.at/files/cto_layout/img/Seehotel%20Schloss%20Ort%20Gmunden.jpg', '160.00', 'Ein familiengeführtes Seehotel im Salzkammergut direkt am Traunsee in Oberösterreich mit herzlichen Gastgebern und Geschichte erwartet Sie ebenso wie individuell geschnittene Doppelzimmer und Juniorsuiten, teilweise mit eigener Sauna/Infrarot im Zimmer. Das hochwertige Frühstücksbuffet ist nicht nur inklusive, sondern ein wahrer Höhepunkt des Aufenthaltes.', '13.80752000', '47.91367000', 'Traunsteinstraße 23, 4810 Gmunden', 761270488),
(6, 'Hotel Schütterhof', 'https://vcdn.bergfex.at/images/resized/06/7cdc7b9cd0c39f06_d7fae2098bb6ff3c@2x.jpg', '75.00', 'Dieses gemütliche, moderne Hotel mit direktem Zugang zu einer Skipiste liegt im Skigebiet Planai-Hochwurzen und ist 3 km vom Bahnhof Schladming entfernt. Die hellen Zimmer mit Holzmöbeln, Flachbildfernseher und Balkon bieten kostenloses WLAN. In Zimmern mit gehobener Ausstattung gibt es einen Minikühlschrank und eine Sitzecke. Die Suiten haben außerdem ein Wohnzimmer und Bergblick. Zimmerservice ist verfügbar.  Parkplätze können kostenlos genutzt werden. Das Frühstücksbuffet ist im Preis inbegriffen und wird in einem zwanglosen Speiseraum mit Bergblick angeboten. Im Hotel gibt es eine Bar und ein schickes Restaurant mit Terrasse. Ein Wellnesscenter mit Innen- und Außenpools, Fitnessraum, Whirlpool-Badewanne, Saunas und Dampfbädern ist ebenfalls vorhanden.', '13.67624000', '47.38577000', 'Wiesenweg 140, 8971 Schladming', 368761205),
(7, 'Das Rieser', 'https://media-cdn.tripadvisor.com/media/photo-s/11/47/60/98/hotel-rieser-aktiv-spa.jpg', '86.00', 'Dieses exklusive Hotel mit Blick auf den Achensee ist 5 Gehminuten vom Golfclub Achensee, 7 Gehminuten von der Talstation der Karwendelbahn und 20 km von der Abtei St. Georgenberg-Fiecht entfernt. Die rustikal-eleganten Zimmer und Suiten bieten kostenloses WLAN und einen Flachbildfernseher sowie zum Großteil einen Balkon oder eine Terrasse. Die Suiten haben außerdem einen separaten Wohnbereich. In den Familienzimmern gibt es ein Wohnzimmer und ein zusätzliches Schlafzimmer. Zimmerservice ist verfügbar.  Das kostenlose Frühstück wird in einem Gourmetrestaurant oder auf einer saisonalen Gartenterrasse serviert. Außerdem gibt es ein Spa mit Innen- und Außenpools sowie einen Schwimmteich.', '11.69747000', '47.44113000', 'Karwendelstraße 40, 6213 Pertisau', 52435251);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
