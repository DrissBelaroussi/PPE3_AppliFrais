-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: GsbFrais2
-- ------------------------------------------------------
-- Server version	5.5.53-0+deb7u1

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
-- Table structure for table `Comptable`
--

DROP TABLE IF EXISTS `Comptable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comptable` (
  `id` char(4) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `mdp` varchar(20) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comptable`
--

LOCK TABLES `Comptable` WRITE;
/*!40000 ALTER TABLE `Comptable` DISABLE KEYS */;
INSERT INTO `Comptable` VALUES ('c021','Belaroussi','Driss','dbelarou','azerty','8 rue des Charmes','46000','Cahors','2016-12-21'),('c022','Picois','Charlotte','cpicois','azerty','8 rue des Charmes','46000','Cahors','2016-12-21');
/*!40000 ALTER TABLE `Comptable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Etat`
--

DROP TABLE IF EXISTS `Etat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Etat` (
  `id` char(2) NOT NULL,
  `libelle` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Etat`
--

LOCK TABLES `Etat` WRITE;
/*!40000 ALTER TABLE `Etat` DISABLE KEYS */;
INSERT INTO `Etat` VALUES ('CL','Saisie clôturée'),('CR','Fiche créée, saisie en cours'),('RB','Remboursée'),('VA','Validée et mise en paiement');
/*!40000 ALTER TABLE `Etat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FicheFrais`
--

DROP TABLE IF EXISTS `FicheFrais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FicheFrais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `nbJustificatifs` int(11) DEFAULT NULL,
  `montantValide` decimal(10,0) DEFAULT NULL,
  `dateModif` date DEFAULT NULL,
  `idVisiteur` char(4) NOT NULL,
  `id_Etat` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_FicheFrais_id_Visiteur` (`idVisiteur`),
  KEY `FK_FicheFrais_id_Etat` (`id_Etat`),
  CONSTRAINT `FK_FicheFrais_id_Etat` FOREIGN KEY (`id_Etat`) REFERENCES `Etat` (`id`),
  CONSTRAINT `FK_FicheFrais_id_Visiteur` FOREIGN KEY (`idVisiteur`) REFERENCES `Visiteur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FicheFrais`
--

LOCK TABLES `FicheFrais` WRITE;
/*!40000 ALTER TABLE `FicheFrais` DISABLE KEYS */;
INSERT INTO `FicheFrais` VALUES (1,'2017-02-01',3,300,'2017-04-20','f4','VA'),(2,'2017-03-01',4,400,'2017-03-18','f4','CL'),(3,'2017-03-01',4,400,'2017-03-18','f21','CL'),(4,'2017-03-01',4,400,'2017-03-18','a131','CL'),(12,'2017-04-01',3,100,'2017-04-20','f4','CR'),(13,'2017-04-01',5,500,'2017-04-07','b34','CR'),(14,'2017-04-01',5,500,'2017-04-07','a55','CR');
/*!40000 ALTER TABLE `FicheFrais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FraisForfait`
--

DROP TABLE IF EXISTS `FraisForfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FraisForfait` (
  `id` char(3) NOT NULL,
  `libelle` varchar(20) DEFAULT NULL,
  `montant` decimal(5,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FraisForfait`
--

LOCK TABLES `FraisForfait` WRITE;
/*!40000 ALTER TABLE `FraisForfait` DISABLE KEYS */;
INSERT INTO `FraisForfait` VALUES ('ETP','Forfait Etape',110),('KM','Frais Kilométrique',1),('NUI','Nuitée Hôtel',80),('REP','Repas Restaurant',25);
/*!40000 ALTER TABLE `FraisForfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FraisHorsForfait`
--

DROP TABLE IF EXISTS `FraisHorsForfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FraisHorsForfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` decimal(10,0) DEFAULT NULL,
  `idFiche` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_FraisForfait_fiche` (`idFiche`),
  CONSTRAINT `FK_FraisForfait_fiche` FOREIGN KEY (`idFiche`) REFERENCES `FicheFrais` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FraisHorsForfait`
--

LOCK TABLES `FraisHorsForfait` WRITE;
/*!40000 ALTER TABLE `FraisHorsForfait` DISABLE KEYS */;
INSERT INTO `FraisHorsForfait` VALUES (1,'Karting','2017-03-03',160,12),(2,'Concert','2017-04-01',160,12),(3,'Tour de manège','2017-01-02',6,12),(8,'Cinéma','2017-01-02',40,13),(9,'Fête Foraine','2017-04-11',50,12),(11,'Depaneuse','2017-01-01',160,12);
/*!40000 ALTER TABLE `FraisHorsForfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LigneFraisForfait`
--

DROP TABLE IF EXISTS `LigneFraisForfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LigneFraisForfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) DEFAULT NULL,
  `idFiche` int(11) NOT NULL,
  `id_FraisForfait` char(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_LigneFraisForfait_id_FraisForfait` (`id_FraisForfait`),
  KEY `FK_LigneFraisForfait_fiche` (`idFiche`),
  CONSTRAINT `FK_LigneFraisForfait_fiche` FOREIGN KEY (`idFiche`) REFERENCES `FicheFrais` (`id`),
  CONSTRAINT `FK_LigneFraisForfait_id_FraisForfait` FOREIGN KEY (`id_FraisForfait`) REFERENCES `FraisForfait` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LigneFraisForfait`
--

LOCK TABLES `LigneFraisForfait` WRITE;
/*!40000 ALTER TABLE `LigneFraisForfait` DISABLE KEYS */;
INSERT INTO `LigneFraisForfait` VALUES (13,3,12,'ETP'),(14,350,12,'KM'),(15,3,12,'NUI'),(16,10,12,'REP'),(17,5,13,'ETP'),(18,200,13,'KM'),(19,4,13,'NUI'),(20,3,13,'REP'),(21,5,14,'ETP'),(22,200,14,'KM'),(23,3,14,'NUI'),(24,10,14,'REP');
/*!40000 ALTER TABLE `LigneFraisForfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Visiteur`
--

DROP TABLE IF EXISTS `Visiteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Visiteur` (
  `id` char(4) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `mdp` varchar(20) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Visiteur`
--

LOCK TABLES `Visiteur` WRITE;
/*!40000 ALTER TABLE `Visiteur` DISABLE KEYS */;
INSERT INTO `Visiteur` VALUES ('a131','Villechalane','Louis','lvillachane','jux7g','8 rue des Charmes','46000','Cahors','2005-12-21'),('a17','Andre','David','dandre','oppg5','1 rue Petit','46200','Lalbenque','1998-11-23'),('a55','Bedos','Christian','cbedos','gmhxd','1 rue Peranud','46250','Montcuq','1995-01-12'),('a93','Tusseau','Louis','ltusseau','ktp3s','22 rue des Ternes','46123','Gramat','2000-05-01'),('b13','Bentot','Pascal','pbentot','doyw1','11 allée des Cerises','46512','Bessines','1992-07-09'),('b16','Bioret','Luc','lbioret','hrjfs','1 Avenue gambetta','46000','Cahors','1998-05-11'),('b19','Bunisset','Francis','fbunisset','4vbnd','10 rue des Perles','93100','Montreuil','1987-10-21'),('b25','Bunisset','Denise','dbunisset','s1y1r','23 rue Manin','75019','paris','2010-12-05'),('b28','Cacheux','Bernard','bcacheux','uf7r3','114 rue Blanche','75017','Paris','2009-11-12'),('b34','Cadic','Eric','ecadic','6u8dc','123 avenue de la République','75011','Paris','2008-09-23'),('b4','Charoze','Catherine','ccharoze','u817o','100 rue Petit','75019','Paris','2005-11-12'),('b50','Clepkens','Christophe','cclepkens','bw1us','12 allée des Anges','93230','Romainville','2003-08-11'),('b59','Cottin','Vincenne','vcottin','2hoh9','36 rue Des Roches','93100','Monteuil','2001-11-18'),('d13','Debelle','Jeanne','jdebelle','nvwqq','134 allée des Joncs','44000','Nantes','2000-05-11'),('d51','Debroise','Michel','mdebroise','sghkb','2 Bld Jourdain','44000','Nantes','2001-04-17'),('e22','Desmarquest','Nathalie','ndesmarquest','f1fob','14 Place d Arc','45000','Orléans','2005-11-12'),('e24','Desnost','Pierre','pdesnost','4k2o5','16 avenue des Cèdres','23200','Guéret','2001-02-05'),('e39','Dudouit','Frédéric','fdudouit','44im8','18 rue de l église','23120','GrandBourg','2000-08-01'),('e49','Duncombe','Claude','cduncombe','qf77j','19 rue de la tour','23100','La souteraine','1987-10-10'),('e5','Enault-Pascreau','Céline','cenault','y2qdu','25 place de la gare','23200','Gueret','1995-09-01'),('e52','Eynde','Valérie','veynde','i7sn3','3 Grand Place','13015','Marseille','1999-11-01'),('f21','Finck','Jacques','jfinck','mpb3t','10 avenue du Prado','13002','Marseille','2001-11-10'),('f39','Frémont','Fernande','ffremont','xs5tq','4 route de la mer','13012','Allauh','1998-10-01'),('f4','Gest','Alain','agest','dywvt','30 avenue de la mer','13025','Berre','1985-11-01');
/*!40000 ALTER TABLE `Visiteur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-29 10:29:07
