# Host: 127.0.0.1  (Version: 5.6.17)
# Date: 2015-01-29 20:48:03
# Generator: MySQL-Front 5.3  (Build 4.175)

/*!40101 SET NAMES latin1 */;

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
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "fornecedor"
#

