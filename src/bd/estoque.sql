-- MySQL dump 10.14  Distrib 5.5.43-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: fabioalvaro13_dev
-- ------------------------------------------------------
-- Server version	5.5.43-MariaDB

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'The titleeeeeeeeeeeeeeee','This is the article body.','2015-12-17 22:22:56','2015-12-26 16:44:40',1),(2,'A title once again','And the article body follows.','2015-12-17 22:22:56',NULL,1),(3,'Title strikes back','This is really exciting! Not.','2015-12-17 22:22:56',NULL,1),(7,'aa','aaa','2015-12-31 13:01:49','2015-12-31 13:01:49',1),(8,'123123','123123','2015-12-31 13:13:45','2015-12-31 13:13:45',1),(10,'meu artigo da paula','meu artigo da paula','2015-12-31 21:27:32','2015-12-31 21:29:58',3);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clifors`
--

DROP TABLE IF EXISTS `clifors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clifors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `doc` int(11) NOT NULL,
  `tipodoc` int(11) NOT NULL,
  `tipoclifor` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ativo` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clifors`
--

LOCK TABLES `clifors` WRITE;
/*!40000 ALTER TABLE `clifors` DISABLE KEYS */;
INSERT INTO `clifors` VALUES (1,'makro atacado',123,1,1,'2016-01-14 19:14:11','2016-01-14 19:14:11',1);
/*!40000 ALTER TABLE `clifors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `ativo` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,'geral',1);
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estoques`
--

DROP TABLE IF EXISTS `estoques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estoques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `active` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoques`
--

LOCK TABLES `estoques` WRITE;
/*!40000 ALTER TABLE `estoques` DISABLE KEYS */;
INSERT INTO `estoques` VALUES (1,'Armazem gerais',1),(2,'galpao viracopos',1),(4,'opa',1),(5,'aaaa',1),(6,'qweqweqwe',1),(7,'asdasdasd',1),(8,'rtyrtyrty',1),(9,'123123123',1),(10,'asdasdasd',1),(11,'qwe qwe qwe qwe ',1),(12,' qwe qwe qwe ',1),(13,' qwe qwe qwe',1),(14,' qwe qwe qwe',1),(15,' qwe qwe qwe wqe qwe ',1),(16,'qweqwe',1),(17,'Wurtwe ',1),(18,' qwe qwe qwe ',1),(19,'qweqweqweqweqwe',1),(20,'e e e e e e',1),(21,'rrrrrr rrrr r',1),(22,'Zabumba Meu Boi',1),(23,'asda sda sd',1),(24,'Maria Maria Maria',1),(25,'hahahah ',1),(26,'asdasd',1);
/*!40000 ALTER TABLE `estoques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kardexs`
--

DROP TABLE IF EXISTS `kardexs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kardexs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `tiposmovimento_id` int(11) NOT NULL,
  `clifor_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `estoque_id` int(11) NOT NULL,
  `ativo` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_tiposmovimento_key_idx` (`tiposmovimento_id`),
  CONSTRAINT `fk_tiposmovimento_key` FOREIGN KEY (`tiposmovimento_id`) REFERENCES `tiposmovimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kardexs`
--

LOCK TABLES `kardexs` WRITE;
/*!40000 ALTER TABLE `kardexs` DISABLE KEYS */;
INSERT INTO `kardexs` VALUES (2,'2016-01-14 19:14:17',1,1,2,1,1),(3,'2016-01-14 19:14:19',1,1,2,1,1),(4,'2016-01-14 19:14:22',1,1,2,1,1);
/*!40000 ALTER TABLE `kardexs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merda`
--

DROP TABLE IF EXISTS `merda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merda`
--

LOCK TABLES `merda` WRITE;
/*!40000 ALTER TABLE `merda` DISABLE KEYS */;
INSERT INTO `merda` VALUES (1,'asd',NULL),(2,'zxc',NULL),(3,'qwe',NULL),(4,'ttt',NULL),(5,'ggg',NULL),(6,'bbb',NULL);
/*!40000 ALTER TABLE `merda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) DEFAULT NULL,
  `custo` float DEFAULT '0',
  `ativo` time DEFAULT '00:00:01',
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento_key_idx` (`departamento_id`),
  CONSTRAINT `fk_produtos_departamento` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (2,'asd',12,'19:13:00',1);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposmovimentos`
--

DROP TABLE IF EXISTS `tiposmovimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiposmovimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `active` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposmovimentos`
--

LOCK TABLES `tiposmovimentos` WRITE;
/*!40000 ALTER TABLE `tiposmovimentos` DISABLE KEYS */;
INSERT INTO `tiposmovimentos` VALUES (1,'ENTRADA',1),(2,'saida',1);
/*!40000 ALTER TABLE `tiposmovimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fabio','$2y$10$bC.MY1a17XDOeHiMB4hf1.F4Cm0jvzIc8Zl9ZiG4N8C01uSLJpsqu','author','2015-12-31 18:56:47','2015-12-31 18:56:47'),(2,'isabela','$2y$10$bC.MY1a17XDOeHiMB4hf1.F4Cm0jvzIc8Zl9ZiG4N8C01uSLJpsqu','author',NULL,NULL),(3,'paula','$2y$10$I8kYJPgPjpeshQ0jguQ1Z.YwiMqLGJfGWI9UHL3EtvfmucjmN02Bm','author',NULL,NULL);
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

-- Dump completed on 2016-01-14 17:43:50
