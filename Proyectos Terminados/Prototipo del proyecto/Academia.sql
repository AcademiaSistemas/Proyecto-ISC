-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Academia_Sistemas
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.13.04.1

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
-- Table structure for table `DatosEscolares`
--

DROP TABLE IF EXISTS `DatosEscolares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DatosEscolares` (
  `matricula` char(8) NOT NULL,
  `grado` char(2) DEFAULT NULL,
  `incidencias` varchar(30) DEFAULT NULL,
  `promedio` decimal(2,2) DEFAULT NULL,
  `creditos` char(2) DEFAULT NULL,
  `actExtraCurry` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DatosEscolares`
--

LOCK TABLES `DatosEscolares` WRITE;
/*!40000 ALTER TABLE `DatosEscolares` DISABLE KEYS */;
/*!40000 ALTER TABLE `DatosEscolares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `admiistrativovista`
--

DROP TABLE IF EXISTS `admiistrativovista`;
/*!50001 DROP VIEW IF EXISTS `admiistrativovista`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `admiistrativovista` (
  `nombre` tinyint NOT NULL,
  `apellido1` tinyint NOT NULL,
  `apellido2` tinyint NOT NULL,
  `matricula` tinyint NOT NULL,
  `grado` tinyint NOT NULL,
  `incidencias` tinyint NOT NULL,
  `e_mail` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `administrativo`
--

DROP TABLE IF EXISTS `administrativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrativo` (
  `nombre` varchar(15) DEFAULT NULL,
  `apellido1` varchar(15) DEFAULT NULL,
  `apellido2` varchar(15) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `matricula` char(10) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrativo`
--

LOCK TABLES `administrativo` WRITE;
/*!40000 ALTER TABLE `administrativo` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `alumnosvista`
--

DROP TABLE IF EXISTS `alumnosvista`;
/*!50001 DROP VIEW IF EXISTS `alumnosvista`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `alumnosvista` (
  `nombre` tinyint NOT NULL,
  `matricula` tinyint NOT NULL,
  `grado` tinyint NOT NULL,
  `creditos` tinyint NOT NULL,
  `promedio` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `datosPersonales`
--

DROP TABLE IF EXISTS `datosPersonales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datosPersonales` (
  `nombre` varchar(15) DEFAULT NULL,
  `apellido1` varchar(15) DEFAULT NULL,
  `apellido2` varchar(15) DEFAULT NULL,
  `edad` char(2) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefono` decimal(11,0) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `estadoCivil` char(10) DEFAULT NULL,
  `e_mail` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosPersonales`
--

LOCK TABLES `datosPersonales` WRITE;
/*!40000 ALTER TABLE `datosPersonales` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosPersonales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcForanea`
--

DROP TABLE IF EXISTS `direcForanea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcForanea` (
  `calle` varchar(25) DEFAULT NULL,
  `numero` char(4) DEFAULT NULL,
  `localidad` varchar(25) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `colonia` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcForanea`
--

LOCK TABLES `direcForanea` WRITE;
/*!40000 ALTER TABLE `direcForanea` DISABLE KEYS */;
/*!40000 ALTER TABLE `direcForanea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcLocal`
--

DROP TABLE IF EXISTS `direcLocal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcLocal` (
  `calle` varchar(25) DEFAULT NULL,
  `numero` char(4) DEFAULT NULL,
  `localidad` varchar(25) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `colonia` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcLocal`
--

LOCK TABLES `direcLocal` WRITE;
/*!40000 ALTER TABLE `direcLocal` DISABLE KEYS */;
/*!40000 ALTER TABLE `direcLocal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `jefevista`
--

DROP TABLE IF EXISTS `jefevista`;
/*!50001 DROP VIEW IF EXISTS `jefevista`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `jefevista` (
  `nombre` tinyint NOT NULL,
  `apellido1` tinyint NOT NULL,
  `apellido2` tinyint NOT NULL,
  `matricula` tinyint NOT NULL,
  `grado` tinyint NOT NULL,
  `incidencias` tinyint NOT NULL,
  `creditos` tinyint NOT NULL,
  `e_mail` tinyint NOT NULL,
  `telefono` tinyint NOT NULL,
  `direccion` tinyint NOT NULL,
  `estadoCivil` tinyint NOT NULL,
  `actExtraCurry` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `materiasCursadas`
--

DROP TABLE IF EXISTS `materiasCursadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiasCursadas` (
  `nombre` varchar(25) DEFAULT NULL,
  `cave` char(10) NOT NULL,
  PRIMARY KEY (`cave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiasCursadas`
--

LOCK TABLES `materiasCursadas` WRITE;
/*!40000 ALTER TABLE `materiasCursadas` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiasCursadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiasCursar`
--

DROP TABLE IF EXISTS `materiasCursar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiasCursar` (
  `nombre` varchar(25) DEFAULT NULL,
  `cave` char(10) NOT NULL,
  PRIMARY KEY (`cave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiasCursar`
--

LOCK TABLES `materiasCursar` WRITE;
/*!40000 ALTER TABLE `materiasCursar` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiasCursar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiasImpartidas`
--

DROP TABLE IF EXISTS `materiasImpartidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiasImpartidas` (
  `nombre` varchar(25) DEFAULT NULL,
  `cave` char(10) NOT NULL,
  PRIMARY KEY (`cave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiasImpartidas`
--

LOCK TABLES `materiasImpartidas` WRITE;
/*!40000 ALTER TABLE `materiasImpartidas` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiasImpartidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `admiistrativovista`
--

/*!50001 DROP TABLE IF EXISTS `admiistrativovista`*/;
/*!50001 DROP VIEW IF EXISTS `admiistrativovista`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `admiistrativovista` AS (select `datosPersonales`.`nombre` AS `nombre`,`datosPersonales`.`apellido1` AS `apellido1`,`datosPersonales`.`apellido2` AS `apellido2`,`DatosEscolares`.`matricula` AS `matricula`,`DatosEscolares`.`grado` AS `grado`,`DatosEscolares`.`incidencias` AS `incidencias`,`datosPersonales`.`e_mail` AS `e_mail` from (`DatosEscolares` join `datosPersonales`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `alumnosvista`
--

/*!50001 DROP TABLE IF EXISTS `alumnosvista`*/;
/*!50001 DROP VIEW IF EXISTS `alumnosvista`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `alumnosvista` AS (select `datosPersonales`.`nombre` AS `nombre`,`DatosEscolares`.`matricula` AS `matricula`,`DatosEscolares`.`grado` AS `grado`,`DatosEscolares`.`creditos` AS `creditos`,`DatosEscolares`.`promedio` AS `promedio` from (`DatosEscolares` join `datosPersonales`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `jefevista`
--

/*!50001 DROP TABLE IF EXISTS `jefevista`*/;
/*!50001 DROP VIEW IF EXISTS `jefevista`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `jefevista` AS (select `datosPersonales`.`nombre` AS `nombre`,`datosPersonales`.`apellido1` AS `apellido1`,`datosPersonales`.`apellido2` AS `apellido2`,`DatosEscolares`.`matricula` AS `matricula`,`DatosEscolares`.`grado` AS `grado`,`DatosEscolares`.`incidencias` AS `incidencias`,`DatosEscolares`.`creditos` AS `creditos`,`datosPersonales`.`e_mail` AS `e_mail`,`datosPersonales`.`telefono` AS `telefono`,`datosPersonales`.`direccion` AS `direccion`,`datosPersonales`.`estadoCivil` AS `estadoCivil`,`DatosEscolares`.`actExtraCurry` AS `actExtraCurry` from (`DatosEscolares` join `datosPersonales`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-26 22:32:42
