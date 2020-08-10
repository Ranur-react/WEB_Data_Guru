-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 04:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datasekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `kode_golongan` char(20) NOT NULL,
  `nama_golongan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`kode_golongan`, `nama_golongan`) VALUES
('GL01', 'III C'),
('GL02', 'III B'),
('GL03', 'IV A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

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
  `kode_sekolah_guru` char(20) DEFAULT NULL,
  `kode_jenis_guru` char(20) DEFAULT NULL,
  `tgl_diangkat_guru` date DEFAULT NULL,
  `no_sk_guru` varchar(100) DEFAULT NULL,
  `kode_golongan_guru` char(20) DEFAULT NULL,
  `kode_pegawai_guru` char(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `kode_pangkat_guru` varchar(100) DEFAULT NULL,
  `nama_diklat_guru` varchar(100) DEFAULT NULL,
  `thn_diklat_guru` varchar(100) DEFAULT NULL,
  `nama_diklat_guru2` varchar(100) DEFAULT NULL,
  `thn_diklat_guru2` varchar(100) DEFAULT NULL,
  `nama_diklat_guru3` varchar(100) DEFAULT NULL,
  `thn_diklat_guru3` varchar(100) DEFAULT NULL,
  `nama_diklat_guru4` varchar(100) DEFAULT NULL,
  `nama_diklat_guru5` varchar(100) DEFAULT NULL,
  `nama_diklat_guru6` varchar(100) DEFAULT NULL,
  `nama_diklat_guru7` varchar(100) DEFAULT NULL,
  `nama_diklat_guru8` varchar(100) DEFAULT NULL,
  `nama_diklat_guru9` varchar(100) DEFAULT NULL,
  `nama_diklat_guru10` varchar(100) DEFAULT NULL,
  `thn_diklat_guru4` varchar(100) DEFAULT NULL,
  `thn_diklat_guru5` varchar(100) DEFAULT NULL,
  `thn_diklat_guru6` varchar(100) DEFAULT NULL,
  `thn_diklat_guru7` varchar(100) DEFAULT NULL,
  `thn_diklat_guru8` varchar(100) DEFAULT NULL,
  `thn_diklat_guru9` varchar(100) DEFAULT NULL,
  `thn_diklat_guru10` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`nip_guru`, `nama_guru`, `tmp_lahir_guru`, `tgl_lahir_guru`, `alamat_guru`, `telp_guru`, `jenkel_guru`, `agama_guru`, `status_guru`, `jabatan_guru`, `masa_jabatan_guru`, `ren_pensiun_guru`, `nip_lama_guru`, `kode_sekolah_guru`, `kode_jenis_guru`, `tgl_diangkat_guru`, `no_sk_guru`, `kode_golongan_guru`, `kode_pegawai_guru`, `pendidikan_terakhir`, `kode_pangkat_guru`, `nama_diklat_guru`, `thn_diklat_guru`, `nama_diklat_guru2`, `thn_diklat_guru2`, `nama_diklat_guru3`, `thn_diklat_guru3`, `nama_diklat_guru4`, `nama_diklat_guru5`, `nama_diklat_guru6`, `nama_diklat_guru7`, `nama_diklat_guru8`, `nama_diklat_guru9`, `nama_diklat_guru10`, `thn_diklat_guru4`, `thn_diklat_guru5`, `thn_diklat_guru6`, `thn_diklat_guru7`, `thn_diklat_guru8`, `thn_diklat_guru9`, `thn_diklat_guru10`) VALUES
('12121222111', 'Bima', 'Padang', '1998-02-28', 'Padang', '87978', 'L', 'Islam', 'Janda', 'Kepsek', '1', NULL, NULL, 'SKL3', 'MP01', NULL, '', '', 'PG-02', 'S1', '', 'Dilat 1', '1997', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12312', 'AB', 'Medan', '1998-02-28', 'Padang', '8789', 'L', 'Islam', 'Menikah', 'Guru', '2', NULL, NULL, 'SKL1', 'MP01', NULL, '123123', 'GL01', 'PG-01', NULL, NULL, 'KLS', '2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13123', 'Buana Aditia', 'Meda', '1998-02-08', 'Padang', '788979', 'L', 'Islam', 'Kawin', 'Kepsek', '2', NULL, NULL, 'SKL3', 'MP02', NULL, '3123', 'GL02', 'PG-01', 'S1', '03', 'Diklat 1', '2018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1711111', 'Baduto', 'Padang', '1998-02-28', 'Padang', '7687', 'L', 'Islam', 'kawin', 'Guru', '2', NULL, NULL, 'SKL2', 'MP01', NULL, '4324', 'GL01', 'PG-01', 'S1', '01', 'Dilat 1', '2010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1998998', 'Ibrahim', 'Bandung', '1998-12-01', 'Padang', '877', 'L', 'Islam', 'Kawin', 'Waka', '2', NULL, NULL, 'SKL5', 'MP01', NULL, '2311098098', 'GL02', 'PG-01', 'S1', '01', 'Dilat 1', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1998998123113', 'Ibrahim', 'Bandung', '1998-12-01', 'Padang', '877', 'L', 'Islam', 'Kawin', 'Waka', '2', NULL, NULL, 'SKL5', 'MP01', NULL, '', '', 'PG-02', 'S1', '02', 'Dilat 1', '2020', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2323', 'Ranurrr', 'Padang', '1998-02-08', 'Padang', '9897', 'L', 'Islam', 'jomblo', 'Kepsek', '2', NULL, NULL, 'SKL1', 'MP01', NULL, '', '', 'PG-02', 'S1', '01', 'Dl1', '2020', 'dil2', '2020', 'dil3', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('234123', 'Ibrahim', 'Solok', '1998-12-01', 'padang', '8979', 'L', 'Islam', 'Janda', 'Wkakepsek', '2', NULL, NULL, 'SKL1', 'MP01', NULL, '3120', 'GL01', 'PG-01', 'S2', '03', 'Dilat 1', '1997', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('23412333', 'Ibrahim', 'Solok', '1998-12-01', 'padang', '8979', 'L', 'Islam', 'Janda', 'Wkakepsek', '2', NULL, NULL, 'SKL1', 'MP01', NULL, '3120', 'GL01', 'PG-01', 'S2', '02', 'Dilat 1', '1997', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('55556677', 'lk;l', 'kjk;l', '1998-02-08', 'padang', '7897', 'L', 'Islam', 'Janda', 'Kepsek', '2', NULL, NULL, 'SKL5', 'MP01', NULL, '', '', 'PG-02', 'S2', '03', 'Dilat 1', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('777', 'kljl', 'kljl', '1998-02-08', 'jlkjkl', '8908', 'L', 'Islam', 'kawain', 'Kepsek', '2', NULL, NULL, 'SKL1', 'MP01', NULL, '', '', 'PG-02', 'S2', '02', 'Dilat 1', '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('999996666', 'Kamek', 'Padang', '1998-02-08', 'Padang', '8790', 'L', 'Islam', 'Kawin', 'Kepsek', '2', NULL, NULL, 'SKL5', 'MP01', NULL, '', '', 'PG-02', 'S1', '01', 'Dilat 1', '2020', 'Dilat 2', '2020', 'Dilat 3', '2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('NIP01', 'Rahmat', 'Padang', '2020-05-07', 'Kataping', '081246', 'L', 'Islam', 'PNS', 'Guru Kelas', '8 Tahun', 2, 'N01', 'SKL4', 'MP01', '2020-05-28', 'SK01', 'GL02', 'PG-02', NULL, NULL, '5 Bulan', '2002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `kode_lurah` char(20) NOT NULL,
  `nama_lurah` varchar(100) DEFAULT NULL,
  `jumlah_sd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`kode_lurah`, `nama_lurah`, `jumlah_sd`) VALUES
('LR01', 'Pauah', 10),
('LR02', 'Katapiang', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepegawaian`
--

CREATE TABLE `tb_kepegawaian` (
  `kode_pegawai` char(20) NOT NULL,
  `status_pegawai` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kepegawaian`
--

INSERT INTO `tb_kepegawaian` (`kode_pegawai`, `status_pegawai`) VALUES
('PG-01', 'PNS'),
('PG-02', 'Honorer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matapelajaran`
--

CREATE TABLE `tb_matapelajaran` (
  `kode_matapelajaran` char(20) NOT NULL,
  `nama_matapelajaran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matapelajaran`
--

INSERT INTO `tb_matapelajaran` (`kode_matapelajaran`, `nama_matapelajaran`) VALUES
('MP01', 'Bahasa Indonesia'),
('MP02', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pangkat`
--

CREATE TABLE `tb_pangkat` (
  `kode_pangkat` char(20) NOT NULL,
  `pangkat_kode_golongan` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pangkat`
--

INSERT INTO `tb_pangkat` (`kode_pangkat`, `pangkat_kode_golongan`) VALUES
('01', 'Guru madya'),
('02', 'Guru Senior'),
('03', 'Guru Tua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pend_guru`
--

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
  `Lainnyatahunlulus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pend_guru`
--

INSERT INTO `tb_pend_guru` (`nip_pend_guru`, `sma`, `smajurusan`, `smatahunlulus`, `s1`, `s1jurusan`, `s1gelar`, `s1tahunlulus`, `s2`, `s2jurusan`, `s2gelar`, `s2tahunlulus`, `Lainnya`, `Lainnyajurusan`, `lainnyagelar`, `Lainnyatahunlulus`) VALUES
('NIP01', 'asdajl', 'asdk;adk;', '2017', 'lkjdlasj', 'sld;lk', NULL, '2017', 'sadmalsk', 'lkadksjld', NULL, '2017', ';lksa;dlk', 'ajlekja', NULL, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `kode_sekolah` char(20) NOT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `alamat_sekolah` varchar(100) DEFAULT NULL,
  `telp_sekolah` varchar(100) DEFAULT NULL,
  `kode_lurah_sekolah` char(20) DEFAULT NULL,
  `nama_kepsek` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`kode_sekolah`, `nama_sekolah`, `alamat_sekolah`, `telp_sekolah`, `kode_lurah_sekolah`, `nama_kepsek`) VALUES
('SKL1', 'SDN 01', 'Padang barat', '08123123', 'LR01', NULL),
('SKL2', 'SDN 31', 'Paguah', '0845764', 'LR02', NULL),
('SKL3', 'SDN 24 Padang', 'padang', '87978', 'LR01', 'AJO'),
('SKL4', 'SDN 26', 'Padang', '767', 'LR02', 'Buyung Pyuh'),
('SKL5', 'SDN 27 Padang', 'Padang', '9879', 'LR01', 'Moya'),
('SKL6', 'SD', 'Padang', 'padang', 'LR02', 'GUE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswasekolah`
--

CREATE TABLE `tb_siswasekolah` (
  `kode_siswasekolah` varchar(20) NOT NULL,
  `sekolah_kode` char(20) DEFAULT NULL,
  `siswa` int(11) DEFAULT NULL,
  `siswi` int(11) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `tahun` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswasekolah`
--

INSERT INTO `tb_siswasekolah` (`kode_siswasekolah`, `sekolah_kode`, `siswa`, `siswi`, `semester`, `tahun`) VALUES
('RANDOM2', 'SKL1', 0, 0, 'II', '2000'),
('SKL1-I-2010', 'SKL1', 1, 10, 'I', '2010'),
('SKL1-I-2020', 'SKL1', 0, 32, 'I', '2020'),
('SKL1-II-2020', 'SKL1', 0, 12, 'II', '2020'),
('SKL3-I-2020', 'SKL3', 0, 6, 'I', '2020'),
('SKL3I2000', 'SKL3', 0, 0, 'I', '2000'),
('SKL4-I-2020', 'SKL4', 0, 123, 'I', '2020'),
('SKL4-II-2020', 'SKL4', 12, 1, 'II', '2020'),
('SKL4I2000', 'SKL4', 0, 0, 'I', '2000'),
('SKL5-I-2019', 'SKL5', 9, 10, 'I', '2019'),
('SKL5-I-2020', 'SKL5', 0, 0, 'I', '2020'),
('SKL5-II-2019', 'SKL5', 5, 0, 'II', '2019'),
('SKL5I2000', 'SKL5', 0, 0, 'I', '2000'),
('SKL6I2000', 'SKL6', 0, 0, 'I', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` char(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hakakses` enum('bos','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `hakakses`) VALUES
('01', '202cb962ac59075b964b07152d234b70', 'admin'),
('bos', '202cb962ac59075b964b07152d234b70', 'bos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`kode_golongan`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip_guru`),
  ADD KEY `kode_golongan_guru` (`kode_golongan_guru`),
  ADD KEY `kode_pegawai_guru` (`kode_pegawai_guru`),
  ADD KEY `kode_sekolah_guru` (`kode_sekolah_guru`),
  ADD KEY `kode_jenis_guru` (`kode_jenis_guru`);

--
-- Indexes for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`kode_lurah`);

--
-- Indexes for table `tb_kepegawaian`
--
ALTER TABLE `tb_kepegawaian`
  ADD PRIMARY KEY (`kode_pegawai`);

--
-- Indexes for table `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  ADD PRIMARY KEY (`kode_matapelajaran`);

--
-- Indexes for table `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  ADD PRIMARY KEY (`kode_pangkat`);

--
-- Indexes for table `tb_pend_guru`
--
ALTER TABLE `tb_pend_guru`
  ADD KEY `nip_pend_guru` (`nip_pend_guru`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`kode_sekolah`),
  ADD KEY `kode_lurah_sekolah` (`kode_lurah_sekolah`);

--
-- Indexes for table `tb_siswasekolah`
--
ALTER TABLE `tb_siswasekolah`
  ADD PRIMARY KEY (`kode_siswasekolah`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_3` FOREIGN KEY (`kode_sekolah_guru`) REFERENCES `tb_sekolah` (`kode_sekolah`),
  ADD CONSTRAINT `tb_guru_ibfk_4` FOREIGN KEY (`kode_jenis_guru`) REFERENCES `tb_matapelajaran` (`kode_matapelajaran`);

--
-- Constraints for table `tb_pend_guru`
--
ALTER TABLE `tb_pend_guru`
  ADD CONSTRAINT `tb_pend_guru_ibfk_1` FOREIGN KEY (`nip_pend_guru`) REFERENCES `tb_guru` (`nip_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD CONSTRAINT `tb_sekolah_ibfk_1` FOREIGN KEY (`kode_lurah_sekolah`) REFERENCES `tb_kelurahan` (`kode_lurah`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
