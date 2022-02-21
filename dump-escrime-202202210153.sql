-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: escrime
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `armes`
--

DROP TABLE IF EXISTS `armes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `armes` (
  `id_armes` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nom_arme` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_armes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `armes`
--

LOCK TABLES `armes` WRITE;
/*!40000 ALTER TABLE `armes` DISABLE KEYS */;
INSERT INTO `armes` VALUES ('1','epee'),('2','sabre'),('3','fleuret');
/*!40000 ALTER TABLE `armes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competiteur`
--

DROP TABLE IF EXISTS `competiteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competiteur` (
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `date_de_naissance` varchar(10) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_arme` varchar(100) NOT NULL,
  KEY `competiteur_FK` (`id_arme`),
  CONSTRAINT `competiteur_FK` FOREIGN KEY (`id_arme`) REFERENCES `armes` (`id_armes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competiteur`
--

LOCK TABLES `competiteur` WRITE;
/*!40000 ALTER TABLE `competiteur` DISABLE KEYS */;
INSERT INTO `competiteur` VALUES ('$nom',NULL,NULL,NULL,NULL,'3'),('$nom','$prenom','$date','$mail',NULL,'1'),('a','a','25102002','c@df.com',NULL,'2'),('','','','',NULL,'2'),('','','','',NULL,'2'),('','','','',NULL,'2'),('','','','',NULL,'2'),('a','a','25102002','c@df.com',NULL,'2');
/*!40000 ALTER TABLE `competiteur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipementier`
--

DROP TABLE IF EXISTS `equipementier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipementier` (
  `nom` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `date_de_naissance` varchar(10) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `mail` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tables` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `armoire` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `raccordement` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipementier`
--

LOCK TABLES `equipementier` WRITE;
/*!40000 ALTER TABLE `equipementier` DISABLE KEYS */;
INSERT INTO `equipementier` VALUES ('$nom','$prenom','$date',NULL,'$mail','$Table','$Armoire','$Raccordement'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002',NULL,'c@df.com','1','1','1'),('a','a','25102002','IUoCVh8syEaTjnGfkKDO','c@df.com','1','1','1'),('a','a','25102002','8BgtxlTD0hruLUsEKyz4','c@df.com','1','1','1'),('a','a','25102002','oM1xDjcgAhnkJ3EN468F','c@df.com','1','1','1'),('a','a','25102002','PNhSCn7gmEy4FOzu9Trv','c@df.com','1','1','1');
/*!40000 ALTER TABLE `equipementier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'escrime'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-21  1:53:15
