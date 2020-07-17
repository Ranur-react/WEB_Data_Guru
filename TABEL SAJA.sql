/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_datasekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_datasekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_datasekolah`;

/*Table structure for table `tb_golongan` */

DROP TABLE IF EXISTS `tb_golongan`;

CREATE TABLE `tb_golongan` (
  `kode_golongan` char(20) NOT NULL,
  `nama_golongan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_golongan` */

LOCK TABLES `tb_golongan` WRITE;

insert  into `tb_golongan`(`kode_golongan`,`nama_golongan`) values 
('GL01','III C'),
('GL02','III B'),
('GL03','IV A');

UNLOCK TABLES;

/*Table structure for table `tb_guru` */

DROP TABLE IF EXISTS `tb_guru`;

CREATE TABLE `tb_guru` (
  `nip_guru` char(20) NOT NULL,
  `nama_guru` varchar(100) DEFAULT NULL,
  `tmp_lahir_guru` varchar(100) DEFAULT NULL,
  `tgl_lahir_guru` date DEFAULT NULL,
  `alamat_guru` varchar(100) DEFAULT NULL,
  `telp_guru` varchar(100) DEFAULT NULL,
  `jenkel_guru` varchar(100) DEFAULT NULL,
  `agama_guru` varchar(100) DEFAULT NULL,
  `status_guru` varchar(100) DEFAULT NULL,
  `jabatan_guru` varchar(100) DEFAULT NULL,
  `masa_jabatan_guru` varchar(100) DEFAULT NULL,
  `ren_pensiun_guru` int(11) DEFAULT NULL,
  `nip_lama_guru` varchar(100) DEFAULT NULL,
  `nama_diklat_guru` varchar(100) DEFAULT NULL,
  `thn_diklat_guru` varchar(100) DEFAULT NULL,
  `kode_sekolah_guru` char(20) DEFAULT NULL,
  `kode_jenis_guru` char(20) DEFAULT NULL,
  `tgl_diangkat_guru` date DEFAULT NULL,
  `no_sk_guru` varchar(100) DEFAULT NULL,
  `kode_golongan_guru` char(20) DEFAULT NULL,
  `kode_pegawai_guru` char(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `kode_pangkat_guru` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nip_guru`),
  KEY `kode_golongan_guru` (`kode_golongan_guru`),
  KEY `kode_pegawai_guru` (`kode_pegawai_guru`),
  KEY `kode_sekolah_guru` (`kode_sekolah_guru`),
  KEY `kode_jenis_guru` (`kode_jenis_guru`),
  CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`kode_golongan_guru`) REFERENCES `tb_golongan` (`kode_golongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_guru_ibfk_2` FOREIGN KEY (`kode_pegawai_guru`) REFERENCES `tb_kepegawaian` (`kode_pegawai`),
  CONSTRAINT `tb_guru_ibfk_3` FOREIGN KEY (`kode_sekolah_guru`) REFERENCES `tb_sekolah` (`kode_sekolah`),
  CONSTRAINT `tb_guru_ibfk_4` FOREIGN KEY (`kode_jenis_guru`) REFERENCES `tb_matapelajaran` (`kode_matapelajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_guru` */

LOCK TABLES `tb_guru` WRITE;

insert  into `tb_guru`(`nip_guru`,`nama_guru`,`tmp_lahir_guru`,`tgl_lahir_guru`,`alamat_guru`,`telp_guru`,`jenkel_guru`,`agama_guru`,`status_guru`,`jabatan_guru`,`masa_jabatan_guru`,`ren_pensiun_guru`,`nip_lama_guru`,`nama_diklat_guru`,`thn_diklat_guru`,`kode_sekolah_guru`,`kode_jenis_guru`,`tgl_diangkat_guru`,`no_sk_guru`,`kode_golongan_guru`,`kode_pegawai_guru`,`pendidikan_terakhir`,`kode_pangkat_guru`) values 
('12312','AB','Medan','1998-02-28','Padang','8789','L','Islam','Menikah','Guru','2',NULL,NULL,'KLS','2011','SKL1','MP01',NULL,'123123','GL01','PG-01',NULL,NULL),
('1711111','Baduto','Padang','1998-02-28','Padang','7687','L','Islam','kawin','Guru','2',NULL,NULL,'Dilat 1','2010','SKL2','MP01',NULL,'4324','GL01','PG-01','S1','01'),
('NIP01','Rahmat','Padang','2020-05-07','Kataping','081246','L','Islam','PNS','Guru Kelas','8 Tahun',2,'N01','5 Bulan','2002','SKL2','MP01','2020-05-28','SK01','GL02','PG-02',NULL,NULL),
('NIP02','Mawar','Solok','2020-05-30','Alahan Panjang','094756','P','Kong Hucu','Kawin','Kepala Sekolah','6 Tahun',4,'N02','7 bulan','2001','SKL1','MP01','2020-05-13','SK02','GL01','PG-01',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `tb_kelurahan` */

DROP TABLE IF EXISTS `tb_kelurahan`;

CREATE TABLE `tb_kelurahan` (
  `kode_lurah` char(20) NOT NULL,
  `nama_lurah` varchar(100) DEFAULT NULL,
  `jumlah_sd` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_lurah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelurahan` */

LOCK TABLES `tb_kelurahan` WRITE;

insert  into `tb_kelurahan`(`kode_lurah`,`nama_lurah`,`jumlah_sd`) values 
('LR01','Pauah',4),
('LR02','Katapiang',12);

UNLOCK TABLES;

/*Table structure for table `tb_kepegawaian` */

DROP TABLE IF EXISTS `tb_kepegawaian`;

CREATE TABLE `tb_kepegawaian` (
  `kode_pegawai` char(20) NOT NULL,
  `status_pegawai` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kepegawaian` */

LOCK TABLES `tb_kepegawaian` WRITE;

insert  into `tb_kepegawaian`(`kode_pegawai`,`status_pegawai`) values 
('PG-01','PNS'),
('PG-02','Honorer');

UNLOCK TABLES;

/*Table structure for table `tb_matapelajaran` */

DROP TABLE IF EXISTS `tb_matapelajaran`;

CREATE TABLE `tb_matapelajaran` (
  `kode_matapelajaran` char(20) NOT NULL,
  `nama_matapelajaran` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode_matapelajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_matapelajaran` */

LOCK TABLES `tb_matapelajaran` WRITE;

insert  into `tb_matapelajaran`(`kode_matapelajaran`,`nama_matapelajaran`) values 
('MP01','Bahasa Indonesia'),
('MP02','IPA');

UNLOCK TABLES;

/*Table structure for table `tb_pangkat` */

DROP TABLE IF EXISTS `tb_pangkat`;

CREATE TABLE `tb_pangkat` (
  `kode_pangkat` char(20) NOT NULL,
  `pangkat_kode_golongan` char(20) DEFAULT NULL,
  PRIMARY KEY (`kode_pangkat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pangkat` */

LOCK TABLES `tb_pangkat` WRITE;

insert  into `tb_pangkat`(`kode_pangkat`,`pangkat_kode_golongan`) values 
('01','Ahli Madya'),
('02','Guru Muda'),
('03','Guru Berpengalaman');

UNLOCK TABLES;

/*Table structure for table `tb_pend_guru` */

DROP TABLE IF EXISTS `tb_pend_guru`;

CREATE TABLE `tb_pend_guru` (
  `nip_pend_guru` char(20) DEFAULT NULL,
  `sma` varchar(100) DEFAULT NULL,
  `smajurusan` varchar(100) DEFAULT NULL,
  `smatahunlulus` varchar(100) DEFAULT NULL,
  `s1` varchar(100) DEFAULT NULL,
  `s1jurusan` varchar(100) DEFAULT NULL,
  `s1gelar` varchar(100) DEFAULT NULL,
  `s1tahunlulus` varchar(100) DEFAULT NULL,
  `s2` varchar(100) DEFAULT NULL,
  `s2jurusan` varchar(100) DEFAULT NULL,
  `s2gelar` varchar(100) DEFAULT NULL,
  `s2tahunlulus` varchar(100) DEFAULT NULL,
  `Lainnya` varchar(100) DEFAULT NULL,
  `Lainnyajurusan` varchar(100) DEFAULT NULL,
  `lainnyagelar` varchar(100) DEFAULT NULL,
  `Lainnyatahunlulus` varchar(100) DEFAULT NULL,
  KEY `nip_pend_guru` (`nip_pend_guru`),
  CONSTRAINT `tb_pend_guru_ibfk_1` FOREIGN KEY (`nip_pend_guru`) REFERENCES `tb_guru` (`nip_guru`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pend_guru` */

LOCK TABLES `tb_pend_guru` WRITE;

insert  into `tb_pend_guru`(`nip_pend_guru`,`sma`,`smajurusan`,`smatahunlulus`,`s1`,`s1jurusan`,`s1gelar`,`s1tahunlulus`,`s2`,`s2jurusan`,`s2gelar`,`s2tahunlulus`,`Lainnya`,`Lainnyajurusan`,`lainnyagelar`,`Lainnyatahunlulus`) values 
('NIP01','asdajl','asdk;adk;','2017','lkjdlasj','sld;lk',NULL,'2017','sadmalsk','lkadksjld',NULL,'2017',';lksa;dlk','ajlekja',NULL,'2017'),
('NIP02','SMA 1 Padang','IPA','2017','UNP','Matematika','S.Pd','2017','AUSTY','Matematic Logic','mSC','2020','Asal Lainnya','Jurusan Lainnya','Doc','2017');

UNLOCK TABLES;

/*Table structure for table `tb_sekolah` */

DROP TABLE IF EXISTS `tb_sekolah`;

CREATE TABLE `tb_sekolah` (
  `kode_sekolah` char(20) NOT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `alamat_sekolah` varchar(100) DEFAULT NULL,
  `telp_sekolah` varchar(100) DEFAULT NULL,
  `jml_siswa_lk` int(11) DEFAULT NULL,
  `jml_siswa_pr` int(11) DEFAULT NULL,
  `kode_lurah_sekolah` char(20) DEFAULT NULL,
  PRIMARY KEY (`kode_sekolah`),
  KEY `kode_lurah_sekolah` (`kode_lurah_sekolah`),
  CONSTRAINT `tb_sekolah_ibfk_1` FOREIGN KEY (`kode_lurah_sekolah`) REFERENCES `tb_kelurahan` (`kode_lurah`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_sekolah` */

LOCK TABLES `tb_sekolah` WRITE;

insert  into `tb_sekolah`(`kode_sekolah`,`nama_sekolah`,`alamat_sekolah`,`telp_sekolah`,`jml_siswa_lk`,`jml_siswa_pr`,`kode_lurah_sekolah`) values 
('SKL1','SDN 01','Padang barat','08123123',55,45,'LR01'),
('SKL2','SDN 31','Paguah','0845764',53,33,'LR02');

UNLOCK TABLES;

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `username` char(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hakakses` enum('bos','admin') DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

LOCK TABLES `tb_user` WRITE;

insert  into `tb_user`(`username`,`password`,`hakakses`) values 
('01','202cb962ac59075b964b07152d234b70','admin'),
('bos','202cb962ac59075b964b07152d234b70','bos');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
