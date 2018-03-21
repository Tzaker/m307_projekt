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

CREATE DATABASE  IF NOT EXISTS `m307`;

USE `m307`;

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

/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Die Reise zum Mond'),(2,'Der große Eisenbahnraub'),(3,'Geburt einer Nation'),(4,'Die Vampire'),(5,'Intoleranz'),(6,'Gebrochene Blüten'),(7,'Das Cabinet des Dr. Caligari'),(8,'Weit im Osten'),(9,'Within Our Gates'),(10,'Der Fuhrmann des Todes'),(11,'Zwei Waisen im Sturm'),(12,'Dr. Mabuse, der Spieler - Ein Bild der Zeit'),(13,'Nosferatu, eine Symphonie des Grauens'),(14,'Nanuk, der Eskimo'),(15,'Das Lächeln der Madame Beudet'),(16,'Die Hexe'),(17,'Närrische Weiber'),(18,'Die verflixte Gastfreundschaft'),(19,'Das Rad'),(20,'Der Dieb von Bagdad'),(21,'Streik'),(22,'Gier'),(23,'Sherlock Jr.'),(24,'The Great White Silence'),(25,'Der letzte Mann'),(26,'Buster Keaton, der Mann mit den 1000 Bräuten'),(27,'Der Adler'),(28,'Das Phantom der Oper'),(29,'Panzerkreuzer Potemkin'),(30,'Goldrausch'),(31,'Die große Parade'),(32,'Die Abenteuer des Prinzen Achmed'),(33,'Metropolis'),(34,'Sonnenaufgang - Lied von zwei Menschen'),(35,'Der General'),(36,'Der Unbekannte'),(37,'Oktober'),(38,'Der Jazzsänger'),(39,'Napoleon'),(40,'Der kleine Bruder'),(41,'Ein Mensch der Masse'),(42,'Die Docks von New York'),(43,'Ein andalusischer Hund'),(44,'Die Passion der Jungfrau von Orléans'),(45,'Steamboat Bill, Jr. - Wasser hat keine Balken'),(46,'Sturm über Asien'),(47,'Erpressung'),(48,'A Throw of Dice - Schicksalswürfel'),(49,'Der Mann mit der Kamera'),(50,'Die Büchse der Pandora'),(51,'Der blaue Engel'),(52,'Das goldene Zeitalter'),(53,'Erde'),(54,'Der kleine Cäsar'),(55,'Im Westen nichts Neues'),(56,'Es lebe die Freiheit'),(57,'Die Million'),(58,'Tabu'),(59,'Dracula'),(60,'Frankenstein'),(61,'Lichter der Großstadt'),(62,'Limit'),(63,'Der öffentliche Feind'),(64,'M - Eine Stadt sucht einen Mörder'),(65,'Die Hündin'),(66,'Vampyr - Der Traum des Allan Grey'),(67,'Schönste, liebe mich'),(68,'Boudu - aus den Wassern gerettet'),(69,'Ich bin ein entflohener Kettensträfling'),(70,'Ärger im Paradies'),(71,'Narbengesicht'),(72,'Shanghai Express'),(73,'Freaks - Mißgestaltete'),(74,'Me and My Gal'),(75,'Betragen ungenügend'),(76,'Die 42. Straße'),(77,'Parade im Rampenlicht'),(78,'Goldgräber von 1933'),(79,'Sie tat ihm unrecht'),(80,'Die Marx Brothers im Krieg'),(81,'Königin Christine'),(82,'Erde ohne Brot'),(83,'King Kong und die weiße Frau'),(84,'Das Verhängnis des General Yen'),(85,'Die Wüstensöhne'),(86,'Das ist geschenkt'),(87,'Triumph des Willens'),(88,'Atalante'),(89,'Die schwarze Katze'),(90,'Judge Priest'),(91,'Es geschah in einer Nacht'),(92,'Die Göttliche'),(93,'Der dünne Mann'),(94,'Peter Ibbetson'),(95,'Unter Piratenflagge'),(96,'Meuterei auf der Bounty'),(97,'Die Marx Brothers in der Oper'),(98,'Die 39 Stufen'),(99,'Frankensteins Braut'),(100,'Ich tanz mich in dein Herz hinein');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
