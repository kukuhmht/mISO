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
  `dokumen_path` text,
  `id_jenispos` int(11) DEFAULT '4',
  `id_statusdokumen` int(11) DEFAULT '4',
  `id_statuspengiriman` int(11) DEFAULT '2',
  `tgl_upload` datetime DEFAULT NULL,
  `tgl_dikirim` datetime DEFAULT NULL,
  `tgl_diterima` datetime DEFAULT NULL,
  `catatan` text,
  `pesan` text,
  PRIMARY KEY (`id_dokumen`),
  KEY `id_statusdokumen` (`id_statusdokumen`),
  KEY `id_statuspengiriman` (`id_statuspengiriman`),
  KEY `id_jenispos` (`id_jenispos`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `dokumen_ibfk_2` FOREIGN KEY (`id_statusdokumen`) REFERENCES `status_dokumen` (`id_statusdokumen`),
  CONSTRAINT `dokumen_ibfk_3` FOREIGN KEY (`id_statuspengiriman`) REFERENCES `status_pengiriman` (`id_statuspengiriman`),
  CONSTRAINT `dokumen_ibfk_4` FOREIGN KEY (`id_jenispos`) REFERENCES `jenis_pos` (`id_jenispos`),
  CONSTRAINT `dokumen_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen` */

insert  into `dokumen`(`id_dokumen`,`id_user`,`nama_dokumen`,`dokumen_path`,`id_jenispos`,`id_statusdokumen`,`id_statuspengiriman`,`tgl_upload`,`tgl_dikirim`,`tgl_diterima`,`catatan`,`pesan`) values 
(1,3,'ISO 9001:2010','https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview',1,1,1,'2018-03-30 22:31:37','2018-03-31 01:49:37','2018-04-01 11:46:52','---','sip mantap!'),
(2,3,'TES','https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview',4,4,1,'2018-03-30 23:43:38','2018-03-31 01:16:18',NULL,'note',NULL),
(3,3,'TES 2','https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview',4,4,2,'2018-03-30 20:18:48',NULL,NULL,'rtyuio',NULL),
(7,3,'sdhkh','jkb',NULL,4,2,'2018-03-31 12:55:47',NULL,NULL,'jb',NULL),
(8,3,'shcsh','jcslj',NULL,4,2,'2018-03-31 12:56:51',NULL,NULL,'jl blj',NULL),
(9,3,'scaghv','hsvcjhv',NULL,4,2,'2018-03-31 12:57:57',NULL,NULL,'scjbkj',NULL),
(10,3,'sbcsj ','hs h',NULL,4,2,'2018-03-31 12:58:59',NULL,NULL,' shkw',NULL),
(11,3,'1111','jkcsjcb',NULL,4,2,'2018-03-31 13:02:05',NULL,NULL,'kjbcjb',NULL),
(12,3,'dvsd','https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview',3,2,1,'2018-03-31 13:03:05','2018-03-31 15:43:05','2018-04-01 11:51:48','k ksj','helleehhh...'),
(13,3,'jdakfjlsdjfl','https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/previewfds',NULL,4,2,'2018-03-31 13:21:12',NULL,NULL,'fas',NULL),
(14,5,'vuujhbhub','https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview',1,3,1,'2018-03-31 16:26:15','2018-04-01 12:12:36','2018-04-01 14:23:22','hvjhv','kalem'),
(16,2,'ini dokumen','https://drive.google.com/file/d/1cz80qHdF7oPQwZfk9G_4SgCy59uF_lFg/preview',2,3,1,'2018-04-01 14:07:35','2018-04-01 15:22:12','2018-04-01 15:56:29','','kalem'),
(18,5,'skabahv','https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview',3,4,2,'2018-04-01 16:08:45',NULL,NULL,'bk',NULL);

/*Table structure for table `dokumen_revisi` */

DROP TABLE IF EXISTS `dokumen_revisi`;

CREATE TABLE `dokumen_revisi` (
  `id_dokumenrevisi` int(20) NOT NULL AUTO_INCREMENT,
  `id_dokumen` int(11) DEFAULT NULL,
  `dokumen_path` text,
  `tempat_revisi` text,
  `semula_berbunyi` text,
  `diusulkan_menjadi` text,
  `alasan_usulan` text,
  `status_usulanrevisi` varchar(50) DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `tgl_diusulkan` datetime DEFAULT NULL,
  `tgl_persetujuan` datetime DEFAULT NULL,
  `catatan_revisi` text,
  `pesan_revisi` text,
  PRIMARY KEY (`id_dokumenrevisi`),
  KEY `revisi1` (`id_dokumenrevisi`),
  KEY `id_dokumen` (`id_dokumen`),
  CONSTRAINT `dokumen_revisi_ibfk_1` FOREIGN KEY (`id_dokumen`) REFERENCES `dokumen` (`id_dokumen`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen_revisi` */

insert  into `dokumen_revisi`(`id_dokumenrevisi`,`id_dokumen`,`dokumen_path`,`tempat_revisi`,`semula_berbunyi`,`diusulkan_menjadi`,`alasan_usulan`,`status_usulanrevisi`,`tgl_upload`,`tgl_diusulkan`,`tgl_persetujuan`,`catatan_revisi`,`pesan_revisi`) values 
(1,NULL,'https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview','-------','---------cvjwvcj','--------jhsvjwv','---------jhcvjwv',NULL,NULL,'2018-03-31 09:24:12',NULL,'---------hdvjh',NULL),
(6,1,'https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview','scvasjvschsvcjhv','cvsjvcj','jbkvwjcvwj','bjcvwjcv',NULL,'2018-03-31 14:18:50','2018-03-31 15:26:13',NULL,'scjhwv',NULL),
(7,12,'https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview','wdqw','bcwbci\r\n','icivei','vcievceiuv','Disetujui','2018-03-31 15:51:42','2018-04-01 12:31:49','2018-04-01 12:57:03','---','good'),
(8,2,'https://drive.google.com/file/d/1cz80qHdF7oPQwZfk9G_4SgCy59uF_lFg/preview','tempat revisi','semula','semuli','teuing',NULL,'2018-04-01 13:21:15',NULL,NULL,'---',NULL),
(9,14,'https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview','-','-','-','-',NULL,'2018-04-01 16:07:18',NULL,NULL,'-',NULL);

/*Table structure for table `hak_akses` */

DROP TABLE IF EXISTS `hak_akses`;

CREATE TABLE `hak_akses` (
  `id_hakakses` int(11) NOT NULL AUTO_INCREMENT,
  `hak_akses` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_hakakses`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `hak_akses` */

insert  into `hak_akses`(`id_hakakses`,`hak_akses`) values 
(1,'Admin'),
(2,'Unit Kerja'),
(3,'Wakil Management Mutu'),
(4,'Kepala Sekolah');

/*Table structure for table `jenis_pos` */

DROP TABLE IF EXISTS `jenis_pos`;

CREATE TABLE `jenis_pos` (
  `id_jenispos` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenispos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_pos` */

insert  into `jenis_pos`(`id_jenispos`,`jenis_pos`) values 
(1,'POS Campuran'),
(2,'POS Tambahan'),
(3,'POS Wajib'),
(4,'Tidak Ada POS');

/*Table structure for table `status_dokumen` */

DROP TABLE IF EXISTS `status_dokumen`;

CREATE TABLE `status_dokumen` (
  `id_statusdokumen` int(11) NOT NULL AUTO_INCREMENT,
  `status_dokumen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_statusdokumen`),
  KEY `id_user` (`status_dokumen`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `status_dokumen` */

insert  into `status_dokumen`(`id_statusdokumen`,`status_dokumen`) values 
(3,'diperiksa'),
(1,'diterima'),
(2,'ditolak'),
(4,'tidak di ketahui');

/*Table structure for table `status_pengiriman` */

DROP TABLE IF EXISTS `status_pengiriman`;

CREATE TABLE `status_pengiriman` (
  `id_statuspengiriman` int(11) NOT NULL AUTO_INCREMENT,
  `status_pengiriman` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_statuspengiriman`),
  KEY `id_user` (`status_pengiriman`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `status_pengiriman` */

insert  into `status_pengiriman`(`id_statuspengiriman`,`status_pengiriman`) values 
(2,'Belum Dikirim'),
(1,'Terkirim');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(65) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL,
  `id_hakakses` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_hakakses` (`id_hakakses`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_hakakses`) REFERENCES `hak_akses` (`id_hakakses`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`id_hakakses`) values 
(1,'pelog','kukuh','pelog',1),
(2,'veradf','vera','mustopa',3),
(3,'dewii','dewi','dewa',2),
(4,'Rivaldy','ipal','ubed',4),
(5,'fahri','fahr','mz',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
