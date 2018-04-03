/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - miso2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`miso2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `miso2`;

/*Table structure for table `dokumen` */

DROP TABLE IF EXISTS `dokumen`;

CREATE TABLE `dokumen` (
  `id_dokumen` int(20) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nama_dokumen` varchar(250) DEFAULT NULL,
  `dokumen_path` varchar(500) DEFAULT NULL,
  `id_jenispos` int(11) DEFAULT NULL,
  `id_statusdokumen` int(11) DEFAULT NULL,
  `id_statuspengiriman` int(11) DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `tgl_dikirim` datetime DEFAULT NULL,
  `tgl_diterima` datetime DEFAULT NULL,
  `catatan` text,
  PRIMARY KEY (`id_dokumen`),
  KEY `id_statusdokumen` (`id_statusdokumen`),
  KEY `id_statuspengiriman` (`id_statuspengiriman`),
  KEY `id_jenispos` (`id_jenispos`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `dokumen_ibfk_2` FOREIGN KEY (`id_statusdokumen`) REFERENCES `status_dokumen` (`id_statusdokumen`),
  CONSTRAINT `dokumen_ibfk_3` FOREIGN KEY (`id_statuspengiriman`) REFERENCES `status_pengiriman` (`id_statuspengiriman`),
  CONSTRAINT `dokumen_ibfk_4` FOREIGN KEY (`id_jenispos`) REFERENCES `jenis_pos` (`id_jenispos`),
  CONSTRAINT `dokumen_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dokumen` */

/*Table structure for table `dokumen_revisi` */

DROP TABLE IF EXISTS `dokumen_revisi`;

CREATE TABLE `dokumen_revisi` (
  `id_dokumenrevisi` int(20) NOT NULL AUTO_INCREMENT,
  `id_dokumen` int(11) DEFAULT NULL,
  `tempat_revisi` text,
  `semula_berbunyi` text,
  `diusulkan_menjadi` text,
  `alasan_usulan` text,
  `status_usulanrevisi` varchar(50) DEFAULT NULL,
  `tgl_diusulkan` datetime DEFAULT NULL,
  `tgl_persetujuan` datetime DEFAULT NULL,
  `catatan` text,
  PRIMARY KEY (`id_dokumenrevisi`),
  KEY `revisi1` (`id_dokumenrevisi`),
  KEY `id_dokumen` (`id_dokumen`),
  CONSTRAINT `dokumen_revisi_ibfk_1` FOREIGN KEY (`id_dokumen`) REFERENCES `dokumen` (`id_dokumen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dokumen_revisi` */

/*Table structure for table `hak_akses` */

DROP TABLE IF EXISTS `hak_akses`;

CREATE TABLE `hak_akses` (
  `id_hakakses` int(11) NOT NULL AUTO_INCREMENT,
  `hak_akses` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_hakakses`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hak_akses` */

/*Table structure for table `jenis_pos` */

DROP TABLE IF EXISTS `jenis_pos`;

CREATE TABLE `jenis_pos` (
  `id_jenispos` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenispos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenis_pos` */

/*Table structure for table `status_dokumen` */

DROP TABLE IF EXISTS `status_dokumen`;

CREATE TABLE `status_dokumen` (
  `id_statusdokumen` int(11) NOT NULL AUTO_INCREMENT,
  `status_dokumen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_statusdokumen`),
  KEY `id_user` (`status_dokumen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_dokumen` */

/*Table structure for table `status_pengiriman` */

DROP TABLE IF EXISTS `status_pengiriman`;

CREATE TABLE `status_pengiriman` (
  `id_statuspengiriman` int(11) NOT NULL AUTO_INCREMENT,
  `status_pengiriman` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_statuspengiriman`),
  KEY `id_user` (`status_pengiriman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_pengiriman` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(65) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL,
  `id_hakakses` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`id_hakakses`) values 
(1,'pelog','kukuh','pelog',0),
(2,'veradf','vera','mustopa',0),
(3,'dewii','dewi','dewa',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
