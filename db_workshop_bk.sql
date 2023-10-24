-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: 72_mysqli_workshop
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_of_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departments_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Dipartimento di Biologia','Via Milani 8 Appartamento 02','+03 8952 1711580','biologia@uni.it','www.biologia.uni.it','Gilda Romano'),(2,'Dipartimento di Fisica e astronomia','Strada Barbieri 57','367 410 378','fisica-e-astronomia@uni.it','www.fisica-e-astronomia.uni.it','Dott. Deborah De Santis'),(3,'Dipartimento di Ingegneria civile, edile e ambientale','Strada Pablo 85 Appartamento 75','+54 35 36896630','ingegneria-civile-edile-e-ambientale@uni.it','www.ingegneria-civile-edile-e-ambientale.uni.it','Olimpia D\'amico'),(4,'Dipartimento di Ingegneria dell\'informazione','Borgo De luca 877 Appartamento 28','+39 091 353 730','ingegneria-dellinformazione@uni.it','www.ingegneria-dellinformazione.uni.it','Ing. Marzio Gatti'),(5,'Dipartimento di Matematica','Via Cosetta 5','+84 63 00392338','matematica@uni.it','www.matematica.uni.it','Sig. Alessandro Orlando'),(6,'Dipartimento di Medicina','Rotonda Pagano 59','+15 8928 3017622','medicina@uni.it','www.medicina.uni.it','Lisa Farina'),(7,'Dipartimento di Neuroscienze','Borgo Ubaldo 181 Appartamento 41','+32 6290 01889948','neuroscienze@uni.it','www.neuroscienze.uni.it','Dante Lombardi'),(8,'Dipartimento di Scienze chimiche','Strada Gatti 943 Appartamento 49','+94 833 74282438','scienze-chimiche@uni.it','www.scienze-chimiche.uni.it','Jole Benedetti'),(9,'Dipartimento di Scienze economiche e aziendali','Piazza Sibilla 876 Appartamento 03','+80 092 00 17 3967','scienze-economiche-e-aziendali@uni.it','www.scienze-economiche-e-aziendali.uni.it','Selvaggia De Angelis'),(10,'Dipartimento di Scienze politiche, giuridiche e studi internazionali','Strada Gelsomina 295','+59 862 14592149','scienze-politiche-giuridiche-e-studi-internazionali@uni.it','www.scienze-politiche-giuridiche-e-studi-internazionali.uni.it','Bernardo Sanna'),(11,'Dipartimento di Scienze statistiche','Contrada Valentini 577','+39 034 983 279','scienze-statistiche@uni.it','www.scienze-statistiche.uni.it','Lauro Barone'),(12,'Dipartimento di Studi linguistici e letterari','Borgo Ricci 140 Piano 9','+50 14 37174267','studi-linguistici-e-letterari@uni.it','www.studi-linguistici-e-letterari.uni.it','Dott. Ludovico Marino');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sensitive_data`
--

DROP TABLE IF EXISTS `sensitive_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensitive_data` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `amount` decimal(5,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sensitive_data`
--

LOCK TABLES `sensitive_data` WRITE;
/*!40000 ALTER TABLE `sensitive_data` DISABLE KEYS */;
INSERT INTO `sensitive_data` VALUES (7,'Mario','Rossi',150.00),(8,'Luigi','Bianchi',250.00);
/*!40000 ALTER TABLE `sensitive_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mario','5f4dcc3b5aa765d61d8327deb882cf99'),(2,'admin','5f4dcc3b5aa765d61d8327deb882cf99');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-24 11:48:25
