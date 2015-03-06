# Host: 127.0.0.1  (Version: 5.6.17)
# Date: 2015-02-27 19:35:31
# Generator: MySQL-Front 5.3  (Build 4.175)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "cliente"
#

use agenda;

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

#
# Data for table "cliente"
#

INSERT INTO `cliente` VALUES (1,'CLOVIS ROBERTO','5496579930','clovisdahmer@gmail.com','clovis','cfcd208495d565ef66e7dff9f98764da',NULL),(11,'Eduardo','54 81122117','eduardo@abc.com.nr','eduardo','c4ca4238a0b923820dcc509a6f75849b','cliente'),(24,'1',' 999','99','1','c4ca4238a0b923820dcc509a6f75849b','cliente'),(25,'1','1','1','1','c4ca4238a0b923820dcc509a6f75849b','cliente'),(26,'eduardo','1','1','0','cfcd208495d565ef66e7dff9f98764da','cliente');

#
# Structure for table "contato"
#

DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "contato"
#


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
  `login` varchar(255) DEFAULT NULL,
  `logotipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "fornecedor"
#

INSERT INTO `fornecedor` VALUES (2,'bruno','99260606','99999999','mnkvndkfv','','95670000','r sao pedro','664','centro','gramado','rs','145.455.669','111.555.666','12345678','','','celular','','','','','1','1',NULL,NULL),(3,'cleodir','12345678','87654321','1234567897','','95670000','r carniel','1234','avenida','gramado','rs','123','12','123','','','','','','massoterapeuta','','1','1',NULL,NULL),(5,'3','3','3','3','3','3','3','3','3','3','33','','3','33','','',NULL,NULL,NULL,NULL,NULL,'eccbc87e4b5ce2fe28308fd9f2a7baf3','',NULL,NULL),(6,'','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,'d41d8cd98f00b204e9800998ecf8427e','',NULL,NULL),(7,'joao','','','','','','','','','','','','','','','Array',NULL,NULL,NULL,NULL,NULL,'cfcd208495d565ef66e7dff9f98764da','0',NULL,NULL),(10,'Bruno','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,'c4ca4238a0b923820dcc509a6f75849b','0','bruno2',NULL),(11,'luis','0','0','0','0','0','00','0','0','0','0','0','0','0','0','Array',NULL,NULL,NULL,NULL,NULL,'c4ca4238a0b923820dcc509a6f75849b','1','luis','Garage.jpg'),(12,'Bruno','0','0','0','0','0','00','0','0','0','0','0','0','0','0','Array',NULL,NULL,NULL,NULL,NULL,'202cb962ac59075b964b07152d234b70','123','bruno','Garage.jpg');

#
# Structure for table "fornecedor_has_servico"
#

DROP TABLE IF EXISTS `fornecedor_has_servico`;
CREATE TABLE `fornecedor_has_servico` (
  `Id_fornecedor` int(11) NOT NULL,
  `Id_servico` int(11) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `HoraInicial` time DEFAULT NULL,
  `HoraFinal` time DEFAULT NULL,
  `Intervalo` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "fornecedor_has_servico"
#


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
