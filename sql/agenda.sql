# Host: localhost  (Version: 5.6.17)
# Date: 2015-02-27 20:45:42
# Generator: MySQL-Front 5.3  (Build 4.156)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "agendahorario"
#

DROP TABLE IF EXISTS `agendahorario`;
CREATE TABLE `agendahorario` (
  `Id_fornecedor` int(11) NOT NULL,
  `Id_servico` int(11) DEFAULT NULL,
  `DataInicial` date DEFAULT NULL,
  `DataFinal` date DEFAULT NULL,
  `HoraInicial` time DEFAULT NULL,
  `HoraFinal` time DEFAULT NULL,
  `Intervalo` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "agendahorario"
#

INSERT INTO `agendahorario` VALUES (1,14,'2015-02-19','2015-02-28','08:00:00','16:00:00',15),(0,NULL,'0000-00-00','0000-00-00','09:00:00','16:00:00',20),(0,NULL,'0000-00-00','0000-00-00','09:00:00','16:00:00',20),(0,NULL,'2015-02-27','2015-02-27','09:00:00','16:00:00',20),(0,NULL,'2015-02-27','2015-02-27','09:00:00','16:00:00',20),(0,0,'2015-02-27','2015-02-27','09:00:00','16:00:00',20),(0,0,'2015-02-27','2015-02-28','09:00:00','16:00:00',15),(6,0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0),(6,0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0),(6,0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0),(6,0,'0000-00-00','0000-00-00','00:00:00','00:00:00',0),(6,2015,'2015-03-02','2015-02-02','07:30:00','18:30:00',10),(6,1,'0000-00-00','0000-00-00','00:00:00','00:00:00',0),(1,2015,'2015-03-02','2015-03-07','08:00:00','20:00:00',30),(6,2015,'2015-03-02','2015-02-07','08:00:00','20:00:00',10),(1,2015,'2015-04-02','2015-04-30','07:15:00','17:45:00',45),(9,2015,'2015-02-04','2015-02-24','12:00:00','22:00:00',1),(9,0,'2015-02-04','2015-02-24','12:00:00','22:00:00',1),(10,0,'2015-02-12','2015-02-13','13:30:00','21:00:00',5);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "cliente"
#

INSERT INTO `cliente` VALUES (1,'CLOVIS ROBERTO','5496579930','clovisdahmer@gmail.com',NULL,NULL,NULL),(3,'RICHARD','99428935','richard@gmail.com','richard','1234',NULL),(4,'RENAN ','32860889','RENAN@GMAIL','123456','e10adc3949ba59abbe56e057f20f883e',NULL),(8,'fernanda','99879645454','fernanda@gmail.com','fernanda','6c44e5cd17f0019c64b042e4a745412a','cliente'),(11,'LÍVIA','96341449','','LIVIA','c4ca4238a0b923820dcc509a6f75849b','cliente'),(12,'BRUNO','91556677','bruno@gmail.com','bruno','c4ca4238a0b923820dcc509a6f75849b','cliente'),(13,'BRUNO','91556677 ','bruno@gmail.com','','',''),(14,'BRUNO','99556677','bruno@gmail.com','','','');

#
# Structure for table "fornecedor"
#

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE `fornecedor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `cpf_cnpj` varchar(255) DEFAULT NULL,
  `ie` varchar(255) DEFAULT NULL,
  `servicos` varchar(255) DEFAULT NULL,
  `tipoFone` varchar(255) DEFAULT NULL,
  `cabelereiro` varchar(255) DEFAULT NULL,
  `manicure` varchar(255) DEFAULT NULL,
  `massoterapeuta` varchar(255) DEFAULT NULL,
  `fisioterapeuta` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `confirmaSenha` varchar(255) DEFAULT NULL,
  `logotipo` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "fornecedor"
#

INSERT INTO `fornecedor` VALUES (1,'renan','9955665555','','','','','rua','95','centro','gramado','rs','','','','','',NULL,NULL,NULL,NULL,NULL,'c4ca4238a0b923820dcc509a6f75849b','',NULL,NULL),(6,'Clóvis Dahmer','96579930','clovisdahmer@gmail.com','','','','rua augusto','93','piratini','gramado','rs','','','','','Array',NULL,NULL,NULL,NULL,NULL,'c4ca4238a0b923820dcc509a6f75849b','',NULL,NULL),(9,'pedro','99665566','','','','','','','','','','','','','','Array',NULL,NULL,NULL,NULL,NULL,'c4ca4238a0b923820dcc509a6f75849b','',NULL,NULL),(10,'bete','','','','','','','','','','','','','','','Array',NULL,NULL,NULL,NULL,NULL,'c4ca4238a0b923820dcc509a6f75849b','',NULL,NULL),(11,'JEAN CARLO','99','jean@hotmail.com','','','','rua','222','','','carazinho','','','','','Array',NULL,NULL,NULL,NULL,NULL,'c4ca4238a0b923820dcc509a6f75849b','',NULL,NULL);

#
# Structure for table "fornecedor_has_servico"
#

DROP TABLE IF EXISTS `fornecedor_has_servico`;
CREATE TABLE `fornecedor_has_servico` (
  `Id_fornecedor` int(11) NOT NULL,
  `Id_servico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "fornecedor_has_servico"
#

INSERT INTO `fornecedor_has_servico` VALUES (1,14),(6,1),(6,2),(6,1);

#
# Structure for table "servico"
#

DROP TABLE IF EXISTS `servico`;
CREATE TABLE `servico` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "servico"
#

INSERT INTO `servico` VALUES (1,'MANICURE'),(2,'CABELEREIRO'),(3,'MASSOTERAPEUTA'),(4,'ELETRECISTA'),(5,'ENCANADOR'),(6,'AUX DE LIMPEZA'),(7,'JARDINEIRO'),(8,'PROF IDIOMAS'),(9,'PROF INFORMATICA'),(10,'PEDREIRO'),(11,'ELETRECISTA PREDIAL'),(12,'PEELING'),(13,'CORRETOR IMOVEIS'),(14,'FISIOTERAPEUTA'),(15,'TECNICOINFOMATICA'),(16,'PERSONALTRAINER'),(17,'ENFERMEIRA');
