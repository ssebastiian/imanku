CREATE DATABASE `elecciones` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

/*tabla de coordiador*/
CREATE TABLE `coordinador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4

/* script de insercion del usuario de coordinador
*/
INSERT INTO elecciones.coordinador
(id, nombre, documento, email, clave)
VALUES(1, 'sebastian', '10333333', 'sebastian@imanku', '123456');

/*tabla de election*/
CREATE TABLE `election` (
  `idelection` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(100) NOT NULL,
  `voteCount` varchar(100) NOT NULL,
  `poloticalParty` varchar(100) NOT NULL,
  `codecount` varchar(100) NOT NULL,
  PRIMARY KEY (`idelection`)
) ENGINE=InnoDB AUTO_INCREMENT=46694 DEFAULT CHARSET=utf8mb4

/*tabla de country*/
CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `codecountry` int(11) NOT NULL,
  `county` varchar(100) NOT NULL,
  `population` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  PRIMARY KEY (`codecountry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4