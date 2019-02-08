-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for debian-linux-gnueabihf (armv8l)
--
-- Host: localhost    Database: Class4Forever
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `Class4Forever`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `Class4Forever` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `Class4Forever`;

--
-- Table structure for table `SOVE`
--

DROP TABLE IF EXISTS `SOVE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SOVE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(128) NOT NULL,
  `SEX` varchar(64) NOT NULL,
  `BORN` date NOT NULL,
  `COLOR` varchar(200) DEFAULT NULL,
  `SONG` varchar(200) DEFAULT NULL,
  `FAVORITE` text,
  `WISH` text,
  `QQ` varchar(128) NOT NULL,
  `TEL` varchar(128) DEFAULT NULL,
  `Email` varchar(128) DEFAULT NULL,
  `ME` text NOT NULL,
  `AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SOVE`
--

LOCK TABLES `SOVE` WRITE;
/*!40000 ALTER TABLE `SOVE` DISABLE KEYS */;
/*!40000 ALTER TABLE `SOVE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `default_names`
--

DROP TABLE IF EXISTS `default_names`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `default_names` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(128) NOT NULL,
  `LOGGED` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `default_names`
--

LOCK TABLES `default_names` WRITE;
/*!40000 ALTER TABLE `default_names` DISABLE KEYS */;
/*!40000 ALTER TABLE `default_names` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `C4F_CTRL`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `C4F_CTRL` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `C4F_CTRL`;

--
-- Table structure for table `black_ip`
--

DROP TABLE IF EXISTS `black_ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `black_ip` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(128) NOT NULL,
  `TIMES` int(11) NOT NULL,
  `FIRST_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LAST_TIME` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `black_ip`
--

LOCK TABLES `black_ip` WRITE;
/*!40000 ALTER TABLE `black_ip` DISABLE KEYS */;
/*!40000 ALTER TABLE `black_ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `online`
--

DROP TABLE IF EXISTS `online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `online` (
  `ID` char(255) NOT NULL,
  `IP` char(255) NOT NULL,
  `LAST` int(11) NOT NULL,
  `LAST_ACTION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `online`
--

LOCK TABLES `online` WRITE;
/*!40000 ALTER TABLE `online` DISABLE KEYS */;
/*!40000 ALTER TABLE `online` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-08 12:40:22
