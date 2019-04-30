-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 04:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csgobaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(15) NOT NULL,
  `Username` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `vijest`
--

CREATE TABLE `vijest` (
  `ID` int(15) NOT NULL,
  `Autor` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Naslov` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `Datum` int(15) NOT NULL,
  `Sadrzaj` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vijest`
--

INSERT INTO `vijest` (`ID`, `Autor`, `Naslov`, `Datum`, `Sadrzaj`, `Slika`) VALUES
(1, 'Nikolaj Šekerović', 'Brollan prelazi u fnatic', 1540806990, 'Šesnaestogodišnjak dolazi kao zamjena za Adila “ScreaM” Benrlitoma koji je bio privremena zamjena za fnatic od prelaska Robina “Flusha” Rönnquista u američki Cloud9. Brollan je drugi igrač iz redova Red Reservea kojeg je fnatic kupio nakon Simona “twist” Eliassona koji je doveden prije manje od dvije sedmice kao zamjena za Williama “draken” Sudina koji je premješten na klupu i transfer listu.\r\n\r\nLudvig “Brollan” Brolin će svoj debi za fnatic odigrati večeras protiv FaZea u ESL Pro Leageu. Dok za njegov LAN debi ćemo morati sačekati IEM Chichago, koji će se odigrati početkom decembra.\r\n\r\nfnaticov lineup izgleda sada ovako:\r\nJesper “JW” Wecksell\r\nFreddy “KRIMZ” Johansson\r\nRichard “Xizt” Landström\r\nSimon “twist” Eliasson\r\nLudvig “Brollan” Brolin\r\n\r\nJimmy “Jumpy” Berndtsson (trener)\r\n\r\nWilliam “draken” Sundin (klupa)', '../../upload/brollan.jpg'),
(2, 'Nemanja Lazarević', 'Skadoodle prekida s profesionalnim igranjem', 1540815310, 'AWP američkog tima Cloud9, Tyler “skadoodle” Latham uzet će pauzu od natjecateljskog igranja na neodređeno vrijeme, potvrdili su iz organizacije. Odluka će stupiti na snagu čim tim pronađe igrača koji će ga zamijeniti.\r\n\r\nNakon što su u posljednje dvije godine Cloud9 napustili Jordan “n0thing” Gilbert i Michael “shroud” Grzesiek, odlazi i još jedan velikan. Za Cloud9 je potpisao u 4. mjesecu 2015. te je godine bio proglašen za 20. najboljeg igrača svijeta, ali u nadolazećem periodu nije uspio ostvariti isti individualni uspjeh. Bio je u postavama koje su osvajale ESL Pro League S4 Finals i ELEAGUE Major Boston 2018 u nevjerojatnom finalu protiv FaZe Clana. Intervju poslije osvajanja majora svi ćemo dugo pamtiti. Na istom je majoru primio i U.S. Air Force MVP nagradu.', '../../upload/skadoodle.jpg'),
(3, 'Boban Janković', 'Valiance&CO i GamePub osigurali LAN završnicu A1 Adria League', 1541075417, 'Poznati su svi sudionici LAN završnice A1 Adria League nakon što su u online playoffu slavili GamePub i Valiance&CO. Za mjesto među najbolje četiri ekipe Valiance&CO je bez problema nadigrao Zagreb 360 Gaming, a GamePub na dvije mape bio bolji od GameZonea.\r\n\r\nKlikTech, Locastic Esports, GamePub i Valiance&CO će se na LAN završnici druge sezona A1 Adria League natjecati za najveći dio nagradnog fonda od 10 tisuća eura. Kao nositelji, KlikTech i Locastic se ne mogu sresti u polufinalu, a točne mečeve saznat ćemo nakon subote kada će se odigrati meč između Valiance&CO i GamePuba za seed. LAN završnica A1 Adria League održat će se u sklopu Reboot InfoGamer 2018 powered by A1.', '../../upload/valiance.png'),
(4, 'Nemanja Lazarević', 'Evo što tačno donosi novi CS:GO update', 1541076131, 'Valve je izbacio novi CS:GO update koji će značajno utjecati na igru. Promjene se ponajprije odnose na ekonomiju te CZ i Tec9 pištolje. Dodane su i nove mape u rotaciju za Competitive i Casual matchmaking.\r\n\r\nNajznačajnija promjena u novom updateu odnosi se na ekonomiju. Timovi će tako početi prvu rundu halfa kao da su jednu rundu već izgubili. U prijevodu to znači da će ekipa koja izgubi pištolj rundu dobiti 1900$ umjesto dosadašnjih 1400$, a losing bonus za izgubljen runde će dalje ići 2400$, 2900$ i 3400$ koliko će i dalje iznositi maksimalni bonus. Cilj je umanjiti važnost pobjede u pištolj rundi. Tako bismo uskoro mogli viđati prvu buy rundu već u trećoj, umjesto u četvrtoj rundi (1900$+2400$).\r\n\r\nJedna od novih mogućnosti je i  eco rush plant u pištolj rundi na T strani, koji s uspješnim plantom i izgubljenom rundom donosi 3500$, koliko će dobiti CT strana i ako defa i osvoji rundu.', '../../upload/noviUpdate.jpg'),
(5, 'Nikolaj Šekerović', 'Povećan je nagradni fond za ESL SEC Season VIII', 1541076539, 'Nedavno je najavljena osma sezona SEC natjecanja u kojem je ESL osigurao nagradni fond za čak tri igre. Nama, a vjerujemo i CS:GO timovima iz regije, su najinteresantnije informacije vezane uz CS:GO, a ove sezone timovi se bore za \r\n10 000€.\r\n\r\nSudjelovati mogu timovi iz Albanije, Bosne i Hercegovine, Bugarske, Hrvatske, Cipra, Grčke, Mađarske, Makedonije (FYROM), Moldavije, Crne Gore, Rumunjske, Srbije i Slovenije.\r\n', '../../upload/esl.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vijest`
--
ALTER TABLE `vijest`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vijest`
--
ALTER TABLE `vijest`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
