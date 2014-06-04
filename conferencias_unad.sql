-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `conferencias_unad` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `conferencias_unad`;

DROP TABLE IF EXISTS `acceso`;
CREATE TABLE `acceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc` bigint(20) NOT NULL,
  `sala` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ingreso` time NOT NULL,
  `hora_salida` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cc` (`cc`),
  KEY `sala` (`sala`),
  CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`cc`) REFERENCES `asistente` (`cc`),
  CONSTRAINT `acceso_ibfk_2` FOREIGN KEY (`sala`) REFERENCES `sala` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `acceso` (`id`, `cc`, `sala`, `fecha`, `hora_ingreso`, `hora_salida`) VALUES
(1,	123,	1,	'2014-06-02',	'18:57:18',	NULL);

DROP TABLE IF EXISTS `asistente`;
CREATE TABLE `asistente` (
  `cc` bigint(20) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `ciudad` varchar(25) DEFAULT NULL,
  `departamento` varchar(20) DEFAULT NULL,
  `direccion` int(25) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `sexo` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`cc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `asistente` (`cc`, `nombres`, `apellidos`, `ciudad`, `departamento`, `direccion`, `telefono`, `sexo`) VALUES
(123,	'Jorge',	'Garcia',	'',	'',	0,	0,	CONV('1', 2, 10) + 0),
(159,	'Lina',	'Ruiz',	'',	'',	0,	0,	CONV('1', 2, 10) + 0),
(321,	'Luisa',	'Gomez',	'Neiva',	'Huila',	0,	0,	CONV('1', 2, 10) + 0),
(456,	'Martha',	'Lopez',	'Pitalito',	'Huila',	0,	0,	CONV('1', 2, 10) + 0),
(741,	'Eliana',	'Calderon',	'Ibagué',	'Tolima',	0,	0,	CONV('1', 2, 10) + 0),
(111000111,	'Karina',	'Rocha',	'Neiva',	'Huila',	0,	NULL,	CONV('0', 2, 10) + 0),
(111222333,	'Jairo',	'Prieto',	'Bogota',	'Bogota',	0,	NULL,	CONV('0', 2, 10) + 0);

DROP TABLE IF EXISTS `inscripcion`;
CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc` bigint(20) NOT NULL,
  `sala` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cc_sala` (`cc`,`sala`),
  KEY `sala` (`sala`),
  CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`cc`) REFERENCES `asistente` (`cc`),
  CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`sala`) REFERENCES `sala` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `inscripcion` (`id`, `cc`, `sala`) VALUES
(3,	159,	1);

DROP TABLE IF EXISTS `sala`;
CREATE TABLE `sala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `sala` (`id`, `nombre`) VALUES
(1,	'Sistemas'),
(2,	'Electronico'),
(3,	'Industrial');

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `user` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`user`, `password`) VALUES
('jairo',	'prieto'),
('root',	'root');

-- 2014-06-04 04:43:03
