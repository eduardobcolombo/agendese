# Host: localhost  (Version: 5.5.8-log)
# Date: 2015-01-22 20:55:13
# Generator: MySQL-Front 5.3  (Build 4.156)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "servico"
#

DROP TABLE IF EXISTS `servico`;
CREATE TABLE `servico` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "servico"
#

INSERT INTO `servico` VALUES (1,'MANICURE'),(2,'CABELEREIRO'),(3,'MASSOTERAPEUTA'),(4,'ELETRECISTA'),(5,'ENCANADOR'),(6,'AUX DE LIMPEZA'),(7,'JARDINEIRO'),(8,'PROF IDIOMAS'),(9,'PROF INFORMATICA'),(10,'PEDREIRO'),(11,'ELETRECISTA PREDIAL');
