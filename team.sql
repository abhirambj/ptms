-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: team
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty` (
  `fid` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `intrest` varchar(30) DEFAULT NULL,
  `exp` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` mediumtext,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'K.C.Ravishankar','CSE','MACHINE LEARNING',10,'kcr@gmail.com','8755544236'),(11,'raghu','cs','WEB DESIGNING',8,'raghu@gmail.com','9867003403'),(22,'Annaiah','cs','ANDROID APPLICATION',8,'annaiah@gmail.com','8600559680'),(33,'Chethan.K.C','CSE','NETWORKING',9,'hanichethan@gmail.com','8755544236'),(44,'Rangnath.S','CSE','IMAGE PROCESSING',10,'rangnath@gmail.com','8296889920');
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `username` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `privileges` varchar(100) DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('Abhiram','abhiram@gmail.com','12@#4','2'),('Aishwarya','aishwarya@gmail.com','21@#4','4'),('Meghana','meghana@gmail.com','54@#4','2'),('Gowtham','gowtham@gmail.com','76@#4','4'),('NEW ROCK 5','new@new','pass','2'),('NEW ROCK 4','new@new','pass','4'),('NEW ROCKsadfvsd','new@new','pass','4'),('NEW sadfvsd','new@new','pass','4'),('WEl','un@un.com','password','4'),('zing zing','new@new','pass','4'),('akash','new@new','pass','4'),('akshay','new@new','pass','4'),('anu','new@new','pass','4'),('anirudh','new@new','pass','4'),('admin','admin@admin','admin','1'),('student','stu@admin','stu','3'),('ani','ani@ani','ani','4'),('admin2','admin2@admin','admin2','1'),('stu2','admin2@admin','admin2','3'),('stu3','admin2@admin','admin2','3'),('stu4','admin2@admin','admin2','3'),('stu5','admin2@admin','admin2','3'),('4GH17CS619','rey@rey','rey','4'),('rock','rock@rock','rock','1');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `pname` varchar(30) DEFAULT NULL,
  `pleader` varchar(30) DEFAULT NULL,
  `batch` year(4) DEFAULT NULL,
  `faculty` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES ('IOT','Impana',2015,'Raghu'),('computer networks','Abhiram',2016,'Annaiah'),('Web','Gowtham',2015,'Rangnath'),('App','Aishwarya',2014,'Priyanka'),('AI','Meghana',2014,'Chethan');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `sskill` varchar(40) DEFAULT NULL,
  `fintrest` varchar(40) DEFAULT NULL,
  `susn` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES ('html',NULL,'4gh18cs001'),('ANDROID APPLICATION',NULL,'4gh19cs001');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `usn` varchar(12) NOT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `sem` int(11) DEFAULT NULL,
  `cgpa` float DEFAULT NULL,
  `skills` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` mediumtext,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('4gh15cs100','amith','cse',8,6.999,'html','amith@amith','9986899198'),('4GH17CS001','Abhiram','cs',5,8,'html','abhiram@gmail.com','6547819911'),('4GH17CS002','bindu','cs',5,8,'java','bindu@gmail.com','8861159911'),('4GH17CS003','Aishwarya','cs',5,8.9,'python','aishwarya@gmail.com','9855426511'),('4GH17CS004','Akshatha','cs',5,8.06,'html','akshatha@gmail.com','9847819911'),('4GH17CS005','Akshay','cs',5,8.91,'python','akshay@gmail.com','9856426511'),('4GH17CS006','Anagha','cs',5,8.02,'java','anagha@gmail.com','8865009911'),('4GH17CS007','Archana','cs',5,8.42,'c++','archana@gmail.com','8297008850'),('4GH17CS008','Anil','cs',5,6.32,'php','anil@gmail.com','8744865436'),('4GH17CS009','chaitra','cs',5,8.93,'python','chaitra@gmail.com','9825426511'),('4GH17CS010','amreeeza','cs',5,8.33,'php','amreeza@gmail.com','9844885436'),('4GH17CS011','anusha','cs',5,7.012,'html','anusha@gmail.com','6547819011'),('4GH17CS012','bhoomika m','cs',5,7.0325,'java','bhoomika@gmail.com','8661149971'),('4GH17CS013','chandan','cs',5,6.3346,'php','chandan@gmail.com','8844865406'),('4GH17CS014','bhavana','cs',5,6.943,'python','bhavana@gmail.com','9811426511'),('4GH17CS015','pallavi','cs',5,7.03462,'java','pallavi@gmail.com','8860059911'),('4GH17CS016','Gowtham','cs',5,8.01,'java','gowtham@gmail.com','8861149911'),('4GH17CS017','greeshma','cs',5,7.38,'php','greeshma@gmail.com','7844865436'),('4GH17CS018','Impana','cs',5,8.4,'c++','impu@gmail.com','8297008850'),('4GH17CS019','kavya n','cs',5,7.4346,'c++','kavya@gmail.com','8277008840'),('4GH17CS020','kavana','cs',5,6.05,'java','kavana@gmail.com','8861149901'),('4GH17CS022','minchu','cs',5,7.06,'html','minchu@gmail.com','9547819910'),('4GH17CS024','megha','cs',5,5.45,'c++','megha@gmail.com','7897008850'),('4GH17CS025','Meghana h c','cs',5,6.35,'php','meghanahc@gmail.com','9864865436'),('4GH17CS026','Meghana','cs',5,8.3,'php','meghana@gmail.com','9844865436'),('4GH17CS027','megha s p','cs',5,7.03,'html','meghasp@gmail.com','7547819911'),('4GH17CS028','meghana b r','cs',5,6.9312,'python','meghana@gmail.com','8855406511'),('4GH17CS029','meghana s v','cs',5,7.434,'c++','meghanasv@gmail.com','8297008851'),('4GH17CS030','manasa','cs',5,7.0536,'html','manasa@gmail.com','6547810011'),('4GH17CS032','rachana','cs',5,8.05,'java','rachana@gmail.com','9361149911'),('4GH17CS033','rakshitha','cs',5,8.37,'php','rakshitha@gmail.com','7844865435'),('4GH17CS034','rohini','cs',5,8.43,'c++','rohini@gmail.com','8297008890'),('4GH17CS035','manoj','cs',5,6.4246,'c++','manoj@gmail.com','8297998850'),('4GH17CS036','Renukaprasad','cs',5,8.52,'html','renukap@gmail.com','8857819911'),('4GH17CS037','roopa','cs',5,8.054,'html','roopa@gmail.com','9547819911'),('4GH17CS041','shobha','cs',5,6.354,'php','shoba@gmail.com','9844865430'),('4GH17CS045','shilpa h m','cs',5,8.9,'python','shilpa@gmail.com','7855426511'),('4GH17CS047','sachin','cs',5,5.92346,'python','sachin@gmail.com','9844426511'),('4GH17CS049','chandini','cs',5,6.02364,'java','chandini@gmail.com','7860149911'),('4GH17CS050','mohit','cs',5,6.42364,'c++','mohit@gmail.com','8297668850'),('4GH17CS051','kavya s k','cs',5,5.33246,'php','kavyask@gmail.com','7844863436'),('4GH17CS052','vidya a p s','cs',5,8.41,'c++','vidya@gmail.com','8297008580'),('4GH17CS053','vidya h','cs',5,6.96,'python','vidyah@gmail.com','8855426581'),('4GH17CS054','sameeksha','cs',5,8.08,'java','sameeksha@gmail.com','8761149971'),('4GH17CS055','kavya','cs',5,5.4564,'c++','kavya@gmail.com','8296108850'),('4GH17CS056','sindu','cs',5,8.48,'c++','sindu@gmail.com','8297008860'),('4GH17CS0568','jdsbvbdf','jdvds',1,9.25222,'HTML, CSS, JS','ad@ad','9480440659'),('4GH17CS057','shilpa h v','cs',5,5.03,'java','shilpahv@gmail.com','8761149911'),('4GH17CS058','vandana','cs',5,7.08,'html','vandana@gmail.com','9847819911'),('4GH17CS059','varshitha','cs',5,6.98,'python','varshitha@gmail.com','7855426511'),('4GH17CS060','tejaswini','cs',5,5.42353,'c++','tejaswini@gmail.com','9297108850'),('4GH17CS061','deepika','cs',5,6.33465,'php','deepika@gmail.com','9844865326'),('4GH17CS062','umme haani','cs',5,7.9,'python','ummehaani@gmail.com','9855726511'),('4GH17CS063','sachin cl','cs',5,6.94364,'python','sachincl@gmail.com','9855776511'),('4GH17CS064','kumar','cs',5,6.03458,'java','kumar@gmail.com','8861149001'),('4GH17CS065','naveeni','cs',5,7.45473,'c++','naveeni@gmail.com','8297558850'),('4GH17CS066','vivek','cs',5,6.34575,'php','vivek@gmail.com','9844865401'),('4GH17CS067','sunil','cs',5,5.09876,'html','sunil@gmail.com','6546810911'),('4GH17CS068','impana a s','cs',5,7.92345,'python','impana@gmail.com','7854426511'),('4GH17CS069','yatheesh','cs',5,6.08765,'java','yatheesh@gmail.com','8961109911'),('4GH17CS070','muskan','cs',5,6.45445,'c++','muskan@gmail.com','8297007710'),('4GH17CS071','likitha','cs',5,5.33463,'php','likitha@gmail.com','9844840436'),('4GH17CS072','preethi','cs',5,8.03465,'html','preethi@gmail.com','6547709911'),('4GH17CS073','ankitha','cs',5,7.9373,'python','ankitha@gmail.com','9866426511'),('4GH17CS074','yamuna','cs',5,8.0346,'java','yamuna@gmail.com','8861148811'),('4GH17CS075','manavi','cs',5,8.45457,'c++','manavi@gmail.com','8297008750'),('4GH17CS076','ramitha','cs',5,8.35643,'php','ramitha@gmail.com','9844865436'),('4GH17CS404','aAbhiram','cs',5,5.02,'html','abhiram@gmail.com','6547819911'),('4GH17CS406','aAishwarya','cs',5,6.9,'python','aishwarya@gmail.com','9855426511'),('4GH17CS413','aImpana','cs',5,6.66,'c++','impu@gmail.com','8297008850'),('4GH17CS415','aGowtham','cs',5,2,'java','gowtham@gmail.com','8861149911'),('4GH17CS416','aMeghana','cs',5,4.35,'php','meghana@gmail.com','9844865436'),('4gh17cs999','Rockstar','cse',6,5.66667,'HTML, CSS, JS','rock@rock','546164815665'),('4gh18cs001','chimma','pmcs',3,9.56666,'html','chim@chim','9986899198'),('4gh19cs001','rockstar','cse',1,8,'ANDROID APPLICATION','rockstar@rock','9480440659');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger skl_up after insert on student for each row insert into skills(susn,sskill) values(new.usn,new.skills) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `tid` int(11) NOT NULL,
  `first` varchar(30) DEFAULT NULL,
  `second` varchar(30) DEFAULT NULL,
  `third` varchar(30) DEFAULT NULL,
  `fourth` varchar(30) DEFAULT NULL,
  `tlead` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'4gh17cs009','4gh17cs022','4gh17cs030','4gh17cs404',NULL),(2,'4gh17cs005','4gh17cs058','4gh17cs015','4gh17cs557',NULL),(3,'4gh17cs003','4gh17cs017','4gh17cs012','4gh17cs967',NULL),(4,'4gh17cs613','4gh17cs029','4gh17cs027','4gh17cs051',NULL),(5,'4gh17cs036','4gh17cs019','4gh17cs011','4gh17cs071',NULL),(6,'4gh17cs056','4gh17cs065','4gh17cs059','4gh17cs060',NULL),(7,'4gh17cs075','4gh17cs062','4gh17cs053','4gh17cs024',NULL),(8,'4gh17cs034','4gh17cs068','4gh17cs063','4gh17cs055',NULL),(9,'4gh17cs007','4gh17cs073','4gh17cs014','4gh17cs047',NULL),(10,'4gh17cs052','4gh17cs001','4gh17cs028','4gh17cs049',NULL),(11,'4gh17cs018','4gh17cs001','4gh17cs406','4gh17cs064',NULL),(12,'4gh17cs033','4gh17cs016','4gh17cs413','4gh17cs020',NULL),(13,'4gh17cs076','4gh17cs006','4gh17cs070','4gh17cs069',NULL),(14,'4gh17cs010','4gh17cs074','4gh17cs035','4gh17cs008',NULL),(15,'4gh17cs026','4gh17cs072','4gh17cs050','4gh17cs013',NULL),(16,'4gh17cs054','4gh17cs032','4gh17cs041','4gh17cs061',NULL),(17,'4gh17cs004','4gh17cs637','4gh17cs025','4gh17cs666',NULL),(18,'4GH17CS004','4GH17CS037','4GH17CS066','4GH17CS061',NULL);
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-20 10:46:52
