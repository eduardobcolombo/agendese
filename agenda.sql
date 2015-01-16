# Host: localhost  (Version: 5.6.17)
# Date: 2015-01-15 20:33:36
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "cliente"
#

INSERT INTO `cliente` VALUES (1,'CLOVIS ROBERTO','5496579930','clovisdahmer@gmail.com',NULL,NULL,NULL),(2,'jfjfj','999','lgsdfgsdfjlgs','kfkdkfkf','',NULL),(3,'RICHARD','99428935','richard@gmail.com','richard','1234',NULL),(4,'RENAN ','32860889','RENAN@GMAIL','123456','e10adc3949ba59abbe56e057f20f883e',NULL),(5,'RENAN ','32860889','RENAN@GMAIL','123456','e10adc3949ba59abbe56e057f20f883e',NULL),(6,'','','','','d41d8cd98f00b204e9800998ecf8427e',NULL),(7,'','','','','d41d8cd98f00b204e9800998ecf8427e',NULL),(8,'fernanda','99879645454','fernanda@gmail.com','fernanda','6c44e5cd17f0019c64b042e4a745412a','cliente'),(9,'','','','','d41d8cd98f00b204e9800998ecf8427e','cliente'),(10,'','','','','d41d8cd98f00b204e9800998ecf8427e','cliente');
