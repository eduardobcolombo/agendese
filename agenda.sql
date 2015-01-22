# Host: 127.0.0.1  (Version: 5.6.17)
# Date: 2015-01-22 19:48:28
# Generator: MySQL-Front 5.3  (Build 4.156)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "cliente"
#

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(255) DEFAULT NULL,
  `telefoneCliente` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "cliente"
#

INSERT INTO `cliente` VALUES (1,'CLOVIS ROBERTO','5496579930','clovisdahmer@gmail.com','clovis','c4ca4238a0b923820dcc509a6f75849b',NULL),(11,'Eduardo','54 81122117','eduardo@abc.com.nr','eduardo','c4ca4238a0b923820dcc509a6f75849b','cliente');
