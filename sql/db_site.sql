# Host: localhost  (Version: 5.6.17)
# Date: 2015-01-15 20:33:10
# Generator: MySQL-Front 5.3  (Build 4.156)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "tb_pessoa"
#

DROP TABLE IF EXISTS `tb_pessoa`;
CREATE TABLE `tb_pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

#
# Data for table "tb_pessoa"
#

INSERT INTO `tb_pessoa` VALUES (1,'Clovis Roberto Dahmer','1.78','gremio','1970-01-25'),(3,'richard','1.74','inter','1983-02-17'),(4,'eduardo','1.89','gremio','1984-07-31'),(5,'bruno','1.82','gremio','1998-05-26'),(21,'Renan','1,42','Grêmio','2004-03-27'),(22,'Fernanda Dahmer','1,70','Grêmio','1994-08-16'),(23,'Livia da Silva','1,65','grrremio','1978-03-17'),(24,'Cleodir','1,78','Inter','1979-07-24'),(25,'Jean Carlo','1,86','Gremio','1994-07-14');

#
# Structure for table "tb_veiculo"
#

DROP TABLE IF EXISTS `tb_veiculo`;
CREATE TABLE `tb_veiculo` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `veiculo` varchar(45) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `velocidade` varchar(45) DEFAULT NULL,
  `potencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

#
# Data for table "tb_veiculo"
#

INSERT INTO `tb_veiculo` VALUES (35,'uni vivace','vermelho','250','72'),(39,'BELINA','AZUL MATÁLICO','56','33');
