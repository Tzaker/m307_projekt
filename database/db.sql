-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: m307
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `m307`
--

/*!40000 DROP DATABASE IF EXISTS `m307`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `m307` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `m307`;

--
-- Table structure for table `concerts`
--

DROP TABLE IF EXISTS `concerts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concerts`
--

LOCK TABLES `concerts` WRITE;
/*!40000 ALTER TABLE `concerts` DISABLE KEYS */;
INSERT INTO `concerts` VALUES (1,'The Beatles'),(2,'Elvis Presley'),(3,'Michael Jackson'),(4,'Madonna'),(5,'Elton John'),(6,'ABBA'),(7,'Led Zeppelin'),(8,'Pink Floyd'),(9,'Mariah Carey'),(10,'Céline Dion'),(11,'AC/DC'),(12,'Whitney Houston'),(13,'Queen'),(14,'The Rolling Stones'),(15,'Rihanna'),(16,'Taylor Swift'),(17,'Eminem'),(18,'Garth Brooks'),(19,'Eagles'),(20,'U2'),(21,'Billy Joel'),(22,'Phil Collins'),(23,'Aerosmith'),(24,'Frank Sinatra'),(25,'Barbra Streisand'),(26,'Bon Jovi'),(27,'Genesis'),(28,'Donna Summer'),(29,'Neil Diamond'),(30,'Kanye West'),(31,'Bruce Springsteen'),(32,'Bee Gees'),(33,'Julio Iglesias'),(34,'Dire Straits'),(35,'Lady Gaga'),(36,'Metallica'),(37,'Bruno Mars'),(38,'Jay Z'),(39,'Rod Stewart'),(40,'Britney Spears'),(41,'Fleetwood Mac'),(42,'George Strait'),(43,'Backstreet Boys'),(44,'Guns N’ Roses'),(45,'Prince'),(46,'Paul McCartney'),(47,'Kenny Rogers'),(48,'Janet Jackson'),(49,'Chicago'),(50,'The Carpenters'),(51,'Bob Dylan'),(52,'George Michael'),(53,'Bryan Adams'),(54,'Def Leppard'),(55,'Cher'),(56,'Lionel Richie'),(57,'Olivia Newton-John'),(58,'Stevie Wonder'),(59,'Tina Turner'),(60,'Kiss'),(61,'The Who'),(62,'Barry White'),(63,'Katy Perry'),(64,'Santana'),(65,'Earth, Wind & Fire'),(66,'Beyoncé'),(67,'Shania Twain'),(68,'R.E.M.'),(69,'B’z'),(70,'Coldplay'),(71,'Van Halen'),(72,'Red Hot Chili Peppers'),(73,'The Doors'),(74,'Barry Manilow'),(75,'Johnny Hallyday'),(76,'The Black Eyed Peas'),(77,'Journey'),(78,'Kenny G'),(79,'Enya'),(80,'Green Day'),(81,'Tupac Shakur'),(82,'Nirvana'),(83,'The Police'),(84,'Bob Marley'),(85,'Depeche Mode'),(86,'Aretha Franklin');
/*!40000 ALTER TABLE `concerts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creditpackages`
--

DROP TABLE IF EXISTS `creditpackages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `creditpackages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditpackages`
--

LOCK TABLES `creditpackages` WRITE;
/*!40000 ALTER TABLE `creditpackages` DISABLE KEYS */;
INSERT INTO `creditpackages` VALUES (1,'Kredit Basic: 1k'),(2,'Kredit Basic: 2k'),(3,'Kredit Basic: 3k'),(4,'Kredit Basic: 4k'),(5,'Kredit Basic: 5k'),(6,'Kredit Basic: 6k'),(7,'Kredit Basic: 7k'),(8,'Kredit Basic: 8k'),(9,'Kredit Basic: 9k'),(10,'Kredit Basic: 10k'),(11,'Kredit Best: 1k'),(12,'Kredit Best: 2k'),(13,'Kredit Best: 3k'),(14,'Kredit Best: 4k'),(15,'Kredit Best: 5k'),(16,'Kredit Best: 6k'),(17,'Kredit Best: 7k'),(18,'Kredit Best: 8k'),(19,'Kredit Best: 9k'),(20,'Kredit Best: 10k'),(21,'Kredit Plus: 1k'),(22,'Kredit Plus: 2k'),(23,'Kredit Plus: 3k'),(24,'Kredit Plus: 4k'),(25,'Kredit Plus: 5k'),(26,'Kredit Plus: 6k'),(27,'Kredit Plus: 7k'),(28,'Kredit Plus: 8k'),(29,'Kredit Plus: 9k'),(30,'Kredit Plus: 10k'),(31,'Kredit Karma: 1k'),(32,'Kredit Karma: 2k'),(33,'Kredit Karma: 3k'),(34,'Kredit Karma: 4k'),(35,'Kredit Karma: 5k'),(36,'Kredit Karma: 6k'),(37,'Kredit Karma: 7k'),(38,'Kredit Karma: 8k'),(39,'Kredit Karma: 9k'),(40,'Kredit Karma: 10k');
/*!40000 ALTER TABLE `creditpackages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fruits`
--

DROP TABLE IF EXISTS `fruits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fruits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fruits`
--

LOCK TABLES `fruits` WRITE;
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;
INSERT INTO `fruits` VALUES (1,'Ananas'),(2,'Äpfel'),(3,'Aprikosen'),(4,'Avocado'),(5,'Bananen'),(6,'Birnen'),(7,'Blondorangen'),(8,'Blutorangen'),(9,'Brombeeren'),(10,'Clementinen'),(11,'Erdbeeren'),(12,'Feigen frisch'),(13,'Grapefruits'),(14,'Heidelbeeren'),(15,'Himbeeren'),(16,'Johannisbeeren'),(17,'Kaki'),(18,'Kirschen'),(19,'Kiwi'),(20,'Kiwi Bio Schweiz'),(21,'Limetten'),(22,'Litschis'),(23,'Mango'),(24,'Melonen'),(25,'Mirabellen'),(26,'Nektarinen'),(27,'Papaya'),(28,'Pfirsiche'),(29,'Pflaumen'),(30,'Preiselbeeren'),(31,'Quitten'),(32,'Stachelbeeren'),(33,'Trauben'),(34,'Kirschen'),(35,'Zwetschgen');
/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mortgages`
--

DROP TABLE IF EXISTS `mortgages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mortgages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mortgages`
--

LOCK TABLES `mortgages` WRITE;
/*!40000 ALTER TABLE `mortgages` DISABLE KEYS */;
INSERT INTO `mortgages` VALUES (20,'Hypo-Paket: Fest 2  (0,54 %)'),(21,'Hypo-Paket: Fest 3  (0,54 %)'),(22,'Hypo-Paket: Fest 4  (0,59 %)'),(23,'Hypo-Paket: Fest 5  (0,62 %)'),(24,'Hypo-Paket: Fest 6  (0,75 %)'),(25,'Hypo-Paket: Fest 7  (0,80 %)'),(26,'Hypo-Paket: Fest 8  (0,83 %)'),(27,'Hypo-Paket: Fest 9  (0,86 %)'),(28,'Hypo-Paket: Fest 10  (0,91 %)'),(29,'Hypo-Paket: Fest 11  (0,96 %)'),(30,'Hypo-Paket: Fest 12  (1,02 %)'),(31,'Hypo-Paket: Fest 13  (1,48 %)'),(32,'Hypo-Paket: Fest 14  (1,54 %)'),(33,'Hypo-Paket: Fest 15  (1,40 %)'),(34,'Hypo-Paket: LIBOR 1M (0,72 %)'),(35,'Hypo-Paket: LIBOR 3M (0,65 %)'),(36,'Hypo-Paket: LIBOR 6M (0,65 %)'),(37,'Hypo-Paket: LIBOR 12M (0,71 %)'),(38,'Hypo-Paket: Variabel (2,25 %)');
/*!40000 ALTER TABLE `mortgages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Die Reise zum Mond'),(2,'Der große Eisenbahnraub'),(3,'Geburt einer Nation'),(4,'Die Vampire'),(5,'Intoleranz'),(6,'Gebrochene Blüten'),(7,'Das Cabinet des Dr. Caligari'),(8,'Weit im Osten'),(9,'Within Our Gates'),(10,'Der Fuhrmann des Todes'),(11,'Zwei Waisen im Sturm'),(12,'Dr. Mabuse, der Spieler - Ein Bild der Zeit'),(13,'Nosferatu, eine Symphonie des Grauens'),(14,'Nanuk, der Eskimo'),(15,'Das Lächeln der Madame Beudet'),(16,'Die Hexe'),(17,'Närrische Weiber'),(18,'Die verflixte Gastfreundschaft'),(19,'Das Rad'),(20,'Der Dieb von Bagdad'),(21,'Streik'),(22,'Gier'),(23,'Sherlock Jr.'),(24,'The Great White Silence'),(25,'Der letzte Mann'),(26,'Buster Keaton, der Mann mit den 1000 Bräuten'),(27,'Der Adler'),(28,'Das Phantom der Oper'),(29,'Panzerkreuzer Potemkin'),(30,'Goldrausch'),(31,'Die große Parade'),(32,'Die Abenteuer des Prinzen Achmed'),(33,'Metropolis'),(34,'Sonnenaufgang - Lied von zwei Menschen'),(35,'Der General'),(36,'Der Unbekannte'),(37,'Oktober'),(38,'Der Jazzsänger'),(39,'Napoleon'),(40,'Der kleine Bruder'),(41,'Ein Mensch der Masse'),(42,'Die Docks von New York'),(43,'Ein andalusischer Hund'),(44,'Die Passion der Jungfrau von Orléans'),(45,'Steamboat Bill, Jr. - Wasser hat keine Balken'),(46,'Sturm über Asien'),(47,'Erpressung'),(48,'A Throw of Dice - Schicksalswürfel'),(49,'Der Mann mit der Kamera'),(50,'Die Büchse der Pandora'),(51,'Der blaue Engel'),(52,'Das goldene Zeitalter'),(53,'Erde'),(54,'Der kleine Cäsar'),(55,'Im Westen nichts Neues'),(56,'Es lebe die Freiheit'),(57,'Die Million'),(58,'Tabu'),(59,'Dracula'),(60,'Frankenstein'),(61,'Lichter der Großstadt'),(62,'Limit'),(63,'Der öffentliche Feind'),(64,'M - Eine Stadt sucht einen Mörder'),(65,'Die Hündin'),(66,'Vampyr - Der Traum des Allan Grey'),(67,'Schönste, liebe mich'),(68,'Boudu - aus den Wassern gerettet'),(69,'Ich bin ein entflohener Kettensträfling'),(70,'Ärger im Paradies'),(71,'Narbengesicht'),(72,'Shanghai Express'),(73,'Freaks - Mißgestaltete'),(74,'Me and My Gal'),(75,'Betragen ungenügend'),(76,'Die 42. Straße'),(77,'Parade im Rampenlicht'),(78,'Goldgräber von 1933'),(79,'Sie tat ihm unrecht'),(80,'Die Marx Brothers im Krieg'),(81,'Königin Christine'),(82,'Erde ohne Brot'),(83,'King Kong und die weiße Frau'),(84,'Das Verhängnis des General Yen'),(85,'Die Wüstensöhne'),(86,'Das ist geschenkt'),(87,'Triumph des Willens'),(88,'Atalante'),(89,'Die schwarze Katze'),(90,'Judge Priest'),(91,'Es geschah in einer Nacht'),(92,'Die Göttliche'),(93,'Der dünne Mann'),(94,'Peter Ibbetson'),(95,'Unter Piratenflagge'),(96,'Meuterei auf der Bounty'),(97,'Die Marx Brothers in der Oper'),(98,'Die 39 Stufen'),(99,'Frankensteins Braut'),(100,'Ich tanz mich in dein Herz hinein');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tools`
--

DROP TABLE IF EXISTS `tools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=332 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tools`
--

LOCK TABLES `tools` WRITE;
/*!40000 ALTER TABLE `tools` DISABLE KEYS */;
INSERT INTO `tools` VALUES (3,'Abisolierzange'),(4,'Abflussspirale'),(5,'Abzieher'),(6,'Abziehstein'),(7,'Absetzzange'),(8,'Aderendhülsenzange'),(9,'Ahle'),(10,'Amboss'),(11,'Anschlageisen'),(12,'Anschlagwinkel'),(13,'Auftreibschere'),(14,'Ausreiber'),(15,'Ausschlageisen, siehe Locheisen'),(16,'Axt'),(17,'Bandhacke'),(18,'Bandhaken'),(19,'Bandschlüssel'),(20,'Bär'),(21,'Bauchzange'),(22,'Beil'),(23,'Beitel'),(24,'Bergeisen'),(25,'Besen'),(26,'Biegeeisen'),(27,'Bindermesser'),(28,'Bit'),(29,'Blechschere'),(30,'Bohrer'),(31,'Bohrkrone siehe Bohrer'),(32,'Bohrsäge siehe Stichling'),(33,'Bolzenschneider'),(34,'Brechstange'),(35,'Bundaxt, siehe Bandhacke'),(36,'Bundsäge, siehe Säge'),(37,'Burin'),(38,'Bürste'),(39,'Crimp-Zange'),(40,'Cutter (Messer)'),(41,'Dampfhammer, siehe Fallhammer'),(42,'Dengelhammer'),(43,'Dechsel (auch Dachsbeil)'),(44,'Dekupiersäge'),(45,'Diamant-Trennscheibe'),(46,'Dietrich'),(47,'Doppelhobel'),(48,'Dorn'),(49,'Drahtbürste'),(50,'Dreget'),(51,'Drehmeissel'),(52,'Drehmomentschlüssel'),(53,'Drehpfahl'),(54,'Drehstahl siehe Drehmeissel'),(55,'Drillbohrer'),(56,'Drucklufthammer'),(57,'Druckluftnadler'),(58,'Dübeleisen'),(59,'Elektropick, siehe E-pick'),(60,'Engländer'),(61,'Fällaxt, siehe Axt'),(62,'Fallhammer'),(63,'Falzhobel, siehe Hobel'),(64,'Fäustel'),(65,'Federhaken'),(66,'Federspanner'),(67,'Feile'),(68,'Feilkloben'),(69,'Feinsäge'),(70,'Fettpresse'),(71,'Feststellzange (Gripzange)'),(72,'Filete'),(73,'Filzbrett'),(74,'Flachzange'),(75,'Fliesenschneider'),(76,'Fliesenlöser'),(77,'Forstnerbohrer'),(78,'Franzose'),(79,'Fräser'),(80,'Fräsrädchen'),(81,'Friktionshammer, siehe Fallhammer'),(82,'Fuchsschwanz (Säge)'),(83,'Fügebock'),(84,'Fügelade'),(85,'Furniersäge, siehe Säge'),(86,'Gabelschlüssel (auch Maulschlüssel genannt)'),(87,'Gasrohrkluppe'),(88,'Gehrungsschmiege'),(89,'Gehrungssäge'),(90,'Geissfuss'),(91,'Geradschere'),(92,'Gestellsäge'),(93,'Gewindebohrer'),(94,'Gewindeschneider'),(95,'Gewindefeile'),(96,'Glasbrechzange'),(97,'Glaserzange'),(98,'Glasmacherpfeife'),(99,'Glasschneider'),(100,'Glättkelle'),(101,'Grabgabel'),(102,'Grabstichel'),(103,'Gratsäge'),(104,'Gripzange'),(105,'Grundsäge'),(106,'Gummihammer'),(107,'Hacke – siehe auch Axt'),(108,'Hahnenschlüssel'),(109,'Halbdiamant'),(110,'Halligan-Tool'),(111,'Hammer'),(112,'Handpumpe'),(113,'Handramme'),(114,'Harke, siehe Hacke oder Rechen'),(115,'Haspel'),(116,'Haue, siehe Hacke'),(117,'Hebeisen'),(118,'Hebebock'),(119,'Hebelvornschneider'),(120,'Hefteisen'),(121,'Hobel'),(122,'Hobelbank'),(123,'Hobelmeissel'),(124,'Höhenreisser'),(125,'Hohleisen'),(126,'Honahle'),(127,'Holzform (Glasmacher)'),(128,'Innensechskant-Schlüssel (auch Inbusschlüssel genannt)'),(129,'Iler (Schabeisen der Kammmacher)'),(130,'Justorium'),(131,'Kanonenbohrer'),(132,'Kantring'),(133,'Kapselheber, auch Flaschenöffner'),(134,'Keilhaue'),(135,'Kelle siehe Maurerkelle'),(136,'Kittmesser, siehe Messer'),(137,'Klaue, auch als Maschinenteil'),(138,'Klopfholz'),(139,'Klüpfel'),(140,'Kluppe'),(141,'Knarre (Werkzeug)'),(142,'Knebel (Werkzeug) auch Schiebstück mit Drehstange'),(143,'Knipp'),(144,'Knochen'),(145,'Knüpfel'),(146,'Knüppel'),(147,'Kombizange'),(148,'Konterpunze'),(149,'Körner'),(150,'Kornhammer'),(151,'Krätzer'),(152,'Kreuzhacke, auch Pickel genannt, siehe Spitzhacke'),(153,'Kreuzschlitzschraubendreher, siehe Schraubendreher'),(154,'Kreuzschlüssel'),(155,'Kröselzange'),(156,'Kugelhammer'),(157,'Kuhfuss (Werkzeug)'),(158,'Kurbelhammer, siehe Fallhammer'),(159,'Laubsäge'),(160,'Leatherman'),(161,'Linksausdreher'),(162,'Lochbeitel, siehe Beitel'),(163,'Locheisen'),(164,'Lochfräser, siehe Fräswerkzeug'),(165,'Lochsäge, siehe Säge'),(166,'Lochstanze'),(167,'Lochzange'),(168,'Lohlöffel'),(169,'Lötkolben'),(170,'Lötlampe'),(171,'Maishacke, siehe Axt'),(172,'Maulschlüssel (auch Gabelschlüssel genannt)'),(173,'Maurerkelle'),(174,'Meissel'),(175,'Meisselbohrer'),(176,'Messer'),(177,'Metallsäge'),(178,'Mikrolith'),(179,'Monierzange'),(180,'Montiereisen'),(181,'Multifunktionswerkzeug'),(182,'Mutternsprenger'),(183,'Nadel'),(184,'Nagel'),(185,'Nageleisen'),(186,'Nagelklaue'),(187,'Nähross, siehe Schraubstock und Sattler'),(188,'Nietenzieher'),(189,'Nietwerkzeuge'),(190,'Nippelspanner'),(191,'Nuthobel, siehe Hobel'),(192,'Nuss, siehe Schraubenschlüssel'),(193,'Ölauffangbehälter'),(194,'Ölfilterschlüssel'),(195,'Ölkanne'),(196,'Ölstein'),(197,'Papiermesser'),(198,'Pickel, auch Kreuzhacke genannt, siehe Spitzhacke'),(199,'Pinsel'),(200,'Pinzette'),(201,'Pistill, siehe auch Reibschale'),(202,'Presszange'),(203,'Puksäge'),(204,'Pumpe'),(205,'Punze (Werkzeug)'),(206,'Raspel'),(207,'Ratsche'),(208,'Raubank'),(209,'Räumaxt, siehe Axt'),(210,'Räumnadel'),(211,'Räumwerkzeug'),(212,'Rechen'),(213,'Reibahle'),(214,'Reibebrett'),(215,'Reibschale'),(216,'Reifkloben'),(217,'Reissnadel'),(218,'Ringschlüssel'),(219,'Rohrausklinker'),(220,'Rohrentgrater'),(221,'Rohrexpander'),(222,'Rohrzange'),(223,'Rundglasschneider, siehe Zirkelschneider'),(224,'Rundschere'),(225,'Rundlochstanze'),(226,'Sackbohrer'),(227,'Säge'),(228,'Sammethaken'),(229,'Sammetmesser'),(230,'Samthaken'),(231,'Samtmesser'),(232,'Sappi, Sappel'),(233,'Sapie'),(234,'Schafschere'),(235,'Schäferschippe'),(236,'Schaufel'),(237,'Schere'),(238,'Schiessnadel'),(239,'Schlägel'),(240,'Schlagschere (Tafelschere)'),(241,'Schlagstempel'),(242,'Schlegel siehe Hammer'),(243,'Schleifpapier'),(244,'Schleifscheibe'),(245,'Schleifstein'),(246,'Schleifteller'),(247,'Schlüsselfeile'),(248,'Schmirgelkluppe (Eisendreher)'),(249,'Schneideisen'),(250,'Schnitzpferd, siehe Schnitzbank und Schraubstock'),(251,'Schraubendreher auch Schraubenzieher genannt'),(252,'Schraubenschlüssel'),(253,'Schraubstock'),(254,'Schraubzwinge'),(255,'Schrotaxt, siehe Axt'),(256,'Schrupphobel'),(257,'Schwammbrett'),(258,'Seitenschneider'),(259,'Senker'),(260,'Sense'),(261,'Sichel'),(262,'Sickenhammer'),(263,'Simshobel'),(264,'Skalpell'),(265,'Skelettpistole'),(266,'Spachtel'),(267,'Spaltaxt siehe Axt'),(268,'Spalter'),(269,'Spalthammer'),(270,'Span'),(271,'Spanner'),(272,'Spaten'),(273,'Spitzhammer'),(274,'Spitzzange'),(275,'Splintentreiber'),(276,'Spritzgusswerkzeug siehe Spritzgiesswerkzeug'),(277,'Stahllineal'),(278,'Stampfer'),(279,'Standhahnmutterschlüssel'),(280,'Stangen-Schlangenbohrer siehe Bohrer'),(281,'Stechbeitel siehe Beitel'),(282,'Stemmeisen'),(283,'Stichaxt'),(284,'Stichling'),(285,'Stichsäge'),(286,'Stift'),(287,'Stifthammer, siehe Hammer'),(288,'Storchschnabelzange'),(289,'Streichmass'),(290,'Strukturzange (Glasmacher)'),(291,'Stupspinsel (auch Schablonierpinsel)'),(292,'Tacker'),(293,'Täcks'),(294,'Tafelschere (Schlagschere)'),(295,'Tapetenmesser, siehe Messer'),(296,'Teppichmesser, siehe Cutter (Messer)'),(297,'Tasso (Werkzeug)'),(298,'Tjanting'),(299,'Thermosäge'),(300,'Transmissionshammer, siehe Fallhammer'),(301,'Traufel, siehe Glättkelle'),(302,'Trennscheibe'),(303,'Tuschierlineal'),(304,'Tuschierplatte'),(305,'Twinsäge'),(306,'Versenker, siehe Ausreiber'),(307,'Vertikalhammer, siehe Fallhammer'),(308,'Vierkantschlüssel, kurz Vierkant'),(309,'Waldaxt, siehe Axt'),(310,'Walze'),(311,'Wasserpumpenzange'),(312,'Windeisen, siehe Gewindebohrer'),(313,'Winkelschere, siehe Schere'),(314,'Wölbungshobel'),(315,'Wulgerholzlöffel'),(316,'Zahnkamm'),(317,'Zahnkelle, siehe Glättkelle'),(318,'Zange'),(319,'Zapine, Zappel'),(320,'Zentrierbohrer'),(321,'Zentrierwinkel'),(322,'Zieheisen'),(323,'Ziehfeder'),(324,'Ziehklinge'),(325,'Zimmeraxt, siehe Bandhacke'),(326,'Zirkel'),(327,'Zirkelschneider'),(328,'Zugmesser'),(329,'Zwackeisen'),(330,'Zwinge'),(331,'Zinnmesser');
/*!40000 ALTER TABLE `tools` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-21 13:05:44
