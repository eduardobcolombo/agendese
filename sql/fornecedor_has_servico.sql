# Host: localhost  (Version: 5.6.17)
# Date: 2015-02-13 21:28:55
# Generator: MySQL-Front 5.3  (Build 4.156)

/*!40101 SET NAMES utf8 */;

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

