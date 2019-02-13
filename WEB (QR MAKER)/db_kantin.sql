/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.34-MariaDB : Database - db_kantin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kantin` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kantin`;

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` enum('admin','penjual','xr1','xr2','xr3','xr4','xr5','xr6','xr7','xt1','xt2','xt3','xt4','xt5','xt6','xir1','xir2','xir3','xir4','xir5','xir6','xit1','xit2','xit3','xit4','xit5','xit6','xiir1','xiir2','xiir3','xiir4','xiir5','xiir6','xiit1','xiit2','xiit3','xiit4','xiit5','xiit6') NOT NULL,
  `role` char(1) DEFAULT '0',
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`id_kelas`,`nama_kelas`,`role`) values 
(1,'admin','2'),
(2,'xr1','0'),
(3,'xr2','0'),
(4,'xr3','0'),
(5,'xr4','0'),
(6,'xr5','0'),
(7,'xr6','0'),
(8,'xr7','0'),
(9,'xt1','0'),
(10,'xt2','0'),
(11,'xt3','0'),
(12,'xt4','0'),
(13,'xt5','0'),
(14,'xt6','0'),
(15,'xir1','0'),
(16,'xir2','0'),
(17,'xir3','0'),
(18,'xir4','0'),
(19,'xir5','0'),
(20,'xir6','0'),
(21,'xit1','0'),
(22,'xit2','0'),
(23,'xit3','0'),
(24,'xit4','0'),
(25,'xit5','0'),
(26,'xit6','0'),
(27,'xiir1','0'),
(28,'xiir2','0'),
(29,'xiir3','0'),
(30,'xiir1','0'),
(31,'xiir5','0'),
(32,'xiir6','0'),
(33,'xiit1','0'),
(34,'xiit2','0'),
(35,'xiit3','0'),
(36,'xiit4','0'),
(37,'xiit5','0'),
(38,'xiit6','0'),
(39,'penjual','1');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) DEFAULT NULL,
  `jenis_menu` enum('makanan','minuman') DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `id_users` (`id_users`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id_menu`,`nama_menu`,`jenis_menu`,`harga`,`id_users`) values 
(1,'nasi goreng','makanan',10000,3),
(2,'es teh','minuman',2500,4);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`id_kelas`,`telp`,`email`,`password`) values 
(1,'Muhammad Faisal Affan',1,'0341 724486','faisallionel@gmail.com','020802'),
(2,'Muhammad Thoriq Al Faruq',2,'1321231','thoriq@gmail.com','12321'),
(3,'Ibuk Path',39,'012 3321321','ibukpath@gmail.com','112233'),
(4,'Ibuk Lime',39,'001321312','lime@gmail.com','1029');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
