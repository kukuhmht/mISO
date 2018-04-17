/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - miso3
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`miso3` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `miso3`;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen` */

LOCK TABLES `dokumen` WRITE;

UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen_revisi` */

LOCK TABLES `dokumen_revisi` WRITE;

UNLOCK TABLES;

/*Table structure for table `hak_akses` */

DROP TABLE IF EXISTS `hak_akses`;

CREATE TABLE `hak_akses` (
  `id_hakakses` int(11) NOT NULL AUTO_INCREMENT,
  `hak_akses` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_hakakses`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `hak_akses` */

LOCK TABLES `hak_akses` WRITE;

insert  into `hak_akses`(`id_hakakses`,`hak_akses`) values 
(1,'Admin'),
(2,'Unit Kerja'),
(3,'Wakil Management Mutu'),
(4,'Kepala Sekolah');

UNLOCK TABLES;

/*Table structure for table `jenis_pos` */

DROP TABLE IF EXISTS `jenis_pos`;

CREATE TABLE `jenis_pos` (
  `id_jenispos` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenispos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_pos` */

LOCK TABLES `jenis_pos` WRITE;

insert  into `jenis_pos`(`id_jenispos`,`jenis_pos`) values 
(2,'POS Tambahan'),
(3,'POS Wajib'),
(4,'Tidak Ada POS');

UNLOCK TABLES;

/*Table structure for table `laporan_dokumen` */

DROP TABLE IF EXISTS `laporan_dokumen`;

CREATE TABLE `laporan_dokumen` (
  `id_laporandokumen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumen` varchar(150) DEFAULT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `status_dokumen` varchar(55) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_laporandokumen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `laporan_dokumen` */

LOCK TABLES `laporan_dokumen` WRITE;

UNLOCK TABLES;

/*Table structure for table `pedoman_mutu` */

DROP TABLE IF EXISTS `pedoman_mutu`;

CREATE TABLE `pedoman_mutu` (
  `id_pedomanmutu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumen` varchar(145) DEFAULT NULL,
  `dokumen_path` text,
  `tgl_upload` datetime DEFAULT NULL,
  `tgl_dikirim` datetime DEFAULT NULL,
  `status_dokumen` varchar(100) DEFAULT NULL,
  `catatan` text,
  PRIMARY KEY (`id_pedomanmutu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pedoman_mutu` */

LOCK TABLES `pedoman_mutu` WRITE;

UNLOCK TABLES;

/*Table structure for table `penerima_pedomanmutu` */

DROP TABLE IF EXISTS `penerima_pedomanmutu`;

CREATE TABLE `penerima_pedomanmutu` (
  `id_penerimapm` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedomanmutu` int(11) DEFAULT NULL,
  `id_unit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penerimapm`),
  KEY `id_pedomanmutu` (`id_pedomanmutu`),
  KEY `id_unit` (`id_unit`),
  CONSTRAINT `penerima_pedomanmutu_ibfk_1` FOREIGN KEY (`id_pedomanmutu`) REFERENCES `pedoman_mutu` (`id_pedomanmutu`),
  CONSTRAINT `penerima_pedomanmutu_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `penerima_pedomanmutu` */

LOCK TABLES `penerima_pedomanmutu` WRITE;

UNLOCK TABLES;

/*Table structure for table `status_dokumen` */

DROP TABLE IF EXISTS `status_dokumen`;

CREATE TABLE `status_dokumen` (
  `id_statusdokumen` int(11) NOT NULL AUTO_INCREMENT,
  `status_dokumen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_statusdokumen`),
  KEY `id_user` (`status_dokumen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `status_dokumen` */

LOCK TABLES `status_dokumen` WRITE;

insert  into `status_dokumen`(`id_statusdokumen`,`status_dokumen`) values 
(3,'diperiksa'),
(1,'diterima'),
(2,'ditolak'),
(4,'tidak di ketahui');

UNLOCK TABLES;

/*Table structure for table `status_pengiriman` */

DROP TABLE IF EXISTS `status_pengiriman`;

CREATE TABLE `status_pengiriman` (
  `id_statuspengiriman` int(11) NOT NULL AUTO_INCREMENT,
  `status_pengiriman` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_statuspengiriman`),
  KEY `id_user` (`status_pengiriman`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `status_pengiriman` */

LOCK TABLES `status_pengiriman` WRITE;

insert  into `status_pengiriman`(`id_statuspengiriman`,`status_pengiriman`) values 
(2,'Belum Dikirim'),
(1,'Terkirim');

UNLOCK TABLES;

/*Table structure for table `unit_kerja` */

DROP TABLE IF EXISTS `unit_kerja`;

CREATE TABLE `unit_kerja` (
  `id_unit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_unit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `unit_kerja` */

LOCK TABLES `unit_kerja` WRITE;

insert  into `unit_kerja`(`id_unit`,`nama_unit`) values 
(1,'Humas dan Hubin'),
(2,'Kesiswaan'),
(3,'Kurikulum'),
(4,'Penelitian dan Pengembangan'),
(5,'Sarana dan Prasaran'),
(6,'Sumber Daya Manusia'),
(7,'Administrasi Perkantoran'),
(8,'Administrasi Akuntansi'),
(9,'Administrasi Pemasaran'),
(10,'Multimedia'),
(11,'TKJ'),
(12,'RPL'),
(13,'ICT'),
(14,'Bimbingan Konseling'),
(15,'Lingkungan Hidup'),
(16,'Perpustakaan'),
(17,'Tata Usaha'),
(18,'Unit Produksi');

UNLOCK TABLES;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `id_unit` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(65) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL,
  `id_hakakses` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_hakakses` (`id_hakakses`),
  KEY `id_unit` (`id_unit`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_hakakses`) REFERENCES `hak_akses` (`id_hakakses`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`id_user`,`id_unit`,`nama`,`username`,`password`,`id_hakakses`) values 
(1,NULL,'Admin','admin','21232f297a57a5a743894a0e4a801fc3',1),
(2,11,'TKJ','tkj','1b7baaaacb4b7760e787823d7de12de5',2),
(3,NULL,'Wakil Management Mutu','wmm','bcfcda141f39cff792d1de4c8fc9bf51',3),
(4,NULL,'Kepala Sekolah','kepsek','8561863b55faf85b9ad67c52b3b851ac',4);

UNLOCK TABLES;

/* Trigger structure for table `dokumen` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `laporan_dokumen` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `laporan_dokumen` BEFORE UPDATE ON `dokumen` FOR EACH ROW BEGIN
	if new.id_statuspengiriman = '1' then
		INSERT INTO laporan_dokumen (nama_dokumen, status_dokumen, keterangan) values(old.nama_dokumen, (SELECT status_dokumen.status_dokumen FROM status_dokumen WHERE status_dokumen.id_statusdokumen = old.id_statusdokumen), concat('Pengiriman Dokumen dari ', (SELECT user.nama FROM user WHERE user.id_user = old.id_user), ' ke WMM'));
	end if;
    END */$$


DELIMITER ;

/* Trigger structure for table `pedoman_mutu` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `delete_pedomanmutu_yg_ada_unitkerja` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `delete_pedomanmutu_yg_ada_unitkerja` BEFORE DELETE ON `pedoman_mutu` FOR EACH ROW BEGIN
	DELETE FROM penerima_pedomanmutu WHERE id_pedomanmutu = old.id_pedomanmutu;
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
