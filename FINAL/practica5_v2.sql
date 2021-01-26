/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.16-MariaDB : Database - sem20211
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sem20211` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sem20211`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `correo` varchar(64) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `contrasena` varchar(32) DEFAULT NULL,
  `tipoUsr` varchar(2) NOT NULL,
  `auditoria` datetime DEFAULT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `alumno` */

insert  into `alumno`(`boleta`,`nombre`,`correo`,`fechaNac`,`contrasena`,`tipoUsr`,`auditoria`) values 
('1234','Israel','admin@admin.com','2020-12-12','21232f297a57a5a743894a0e4a801fc3','AD','2021-01-07 18:51:35'),
('2020630001','Pedro Paramo','pedro@pedro.com','2020-12-06','d8578edf8458ce06fbc5bb76a58c5ca4','AL','2020-12-21 14:33:06'),
('2020630002','Juan Pérez','juan@juan.com','2020-12-01','54e8a1106eeb36711ecb8c94598bcc70','AL','2020-12-22 14:16:38'),
('2020630003','Blanca Nieves','blanca@blanca.com','2020-12-06','0a856225316ab591135797577dac92e0','AL','2021-01-07 17:58:12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
