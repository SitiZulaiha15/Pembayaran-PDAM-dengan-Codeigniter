-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 01:01 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bludspam`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE IF NOT EXISTS `biaya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` text NOT NULL,
  `nominal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `jenis`, `nominal`) VALUES
(3, 'denda', 5000),
(4, 'administrasi', 5000),
(5, 'dana_meter', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
  `kode_desa` varchar(20) NOT NULL,
  `nama_desa` varchar(20) NOT NULL,
  `kode_kec` int(12) NOT NULL,
  PRIMARY KEY (`kode_desa`),
  KEY `kode_kec` (`kode_kec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`kode_desa`, `nama_desa`, `kode_kec`) VALUES
('5319010003', 'Nanga Labang', 5319010),
('5319010004', 'Golo Kantar', 5319010),
('5319010005', 'Rana Loba', 5319010),
('5319010006', 'Kota Ndora', 5319010),
('5319010007', 'Rana Masak', 5319010),
('5319010008', 'Ngampang Mas', 5319010),
('5319010009', 'Benteng Raja', 5319010),
('5319010010', 'Benteng Riwu', 5319010),
('5319010011', 'Poco Rii', 5319010),
('5319010012', 'Golo Lalong', 5319010),
('5319010013', 'Gurung Liwut', 5319010),
('5319010025', 'Compang Ndejing', 5319010),
('5319010026', 'Bangka Kantar', 5319010),
('5319010027', 'Satar Peot', 5319010),
('5319010028', 'Balus Permai', 5319010),
('5319010029', 'Compang Tenda', 5319010),
('5319010030', 'Waling', 5319010),
('5319010031', 'Golo Leda', 5319010),
('5319011001', 'Bea Ngencung', 5319011),
('5319011002', 'Satar Lahing', 5319011),
('5319011003', 'Golo Meleng', 5319011),
('5319011004', 'Golo Rutuk', 5319011),
('5319011005', 'Golo Loni', 5319011),
('5319011006', 'Sita', 5319011),
('5319011007', 'Torok Golo', 5319011),
('5319011008', 'Golo Ros', 5319011),
('5319011009', 'Sano Lokom', 5319011),
('5319011010', 'Rondo Woing', 5319011),
('5319011011', 'Lidi', 5319011),
('5319011012', 'Satar Lenda', 5319011),
('5319011013', 'Lalang', 5319011),
('5319011014', 'Wae Nggori', 5319011),
('5319011015', 'Compang Kantar', 5319011),
('5319011016', 'Bangka Kempo', 5319011),
('5319011017', 'Compang Teber', 5319011),
('5319011018', 'Compang Loni', 5319011),
('5319011019', 'Compang Kempo', 5319011),
('5319011020', 'Watu Mori', 5319011),
('5319011021', 'Bangka Masa', 5319011),
('5319020001', 'Tanah Rata', 5319020),
('5319020002', 'Bamo', 5319020),
('5319020003', 'Rongga Koe', 5319020),
('5319020004', 'Komba', 5319020),
('5319020005', 'Watu Nggene', 5319020),
('5319020006', 'Gunung Mute', 5319020),
('5319020007', 'Rana Kolong', 5319020),
('5319020008', 'Mbengan', 5319020),
('5319020009', 'Lembur', 5319020),
('5319020010', 'Ruan', 5319020),
('5319020011', 'Pong Ruan', 5319020),
('5319020012', 'Golo Tolang', 5319020),
('5319020013', 'Paan Leleng', 5319020),
('5319020014', 'Mokel', 5319020),
('5319020015', 'Golomeni', 5319020),
('5319020016', 'Rana Mbeling', 5319020),
('5319020017', 'Golo Nderu', 5319020),
('5319020018', 'Gunung Baru', 5319020),
('5319020019', 'Golon Dele', 5319020),
('5319020020', 'Mokel Morid', 5319020),
('5319020021', 'Rana Mbata', 5319020),
('5319020022', 'Watu Pari', 5319020),
('5319030010', 'Golo Munde', 5319030),
('5319030012', 'Tiwu Kondo', 5319030),
('5319030013', 'Rana Gapang', 5319030),
('5319030014', 'Haju Ngendong', 5319030),
('5319030015', 'Lengko Namut', 5319030),
('5319030016', 'Sisir', 5319030),
('5319030017', 'Rana Kulan', 5319030),
('5319030018', 'Biting', 5319030),
('5319030019', 'Golo Lebo', 5319030),
('5319030020', 'Legur Lai', 5319030),
('5319030021', 'Golo Lijun', 5319030),
('5319030026', 'Wae Lokom', 5319030),
('5319030027', 'Compang Teo', 5319030),
('5319030028', 'Compang Soba', 5319030),
('5319030029', 'Kaju Wangi', 5319030),
('5319031001', 'Golo Wuas', 5319031),
('5319031002', 'Sipi', 5319031),
('5319031003', 'Paan Waru', 5319031),
('5319031004', 'Nanga Meje', 5319031),
('5319031005', 'Langgasai', 5319031),
('5319031006', 'Sangan Kalo', 5319031),
('5319031007', 'Golo Linus', 5319031),
('5319031008', 'Gising', 5319031),
('5319031009', 'Teno Mese', 5319031),
('5319031010', 'Lempang Paji', 5319031),
('5319031011', 'Nanga Pu''un', 5319031),
('5319031012', 'Mosi Ngaran', 5319031),
('5319031013', 'Wae Rasan', 5319031),
('5319031014', 'Benteng Pau', 5319031),
('5319040001', 'Compang Congkar', 5319040),
('5319040002', 'Rana Mese', 5319040),
('5319040003', 'Satar Nawang', 5319040),
('5319040004', 'Golo Ngawan', 5319040),
('5319040005', 'Buti', 5319040),
('5319040006', 'Golo Wangkung', 5319040),
('5319040007', 'Lada Mese', 5319040),
('5319040008', 'Nanga Baras', 5319040),
('5319040009', 'Nanga Mbaling', 5319040),
('5319040010', 'Pota', 5319040),
('5319040011', 'Nanga Mbaur', 5319040),
('5319040012', 'Compang Lawi', 5319040),
('5319040013', 'Wea', 5319040),
('5319040014', 'Golo Pari', 5319040),
('5319040015', 'Golo Wangkung Barat', 5319040),
('5319040016', 'Golo Wangkung Utara', 5319040),
('5319040017', 'Kembang Mekar', 5319040),
('5319040018', 'Wela Lada', 5319040),
('5319040019', 'Ulung Baras', 5319040),
('5319040020', 'Nampar Sepang', 5319040),
('5319050001', 'Golo Lobos', 5319050),
('5319050002', 'Bangka Kuleng', 5319050),
('5319050003', 'Mando Sawu', 5319050),
('5319050004', 'Bangka Pau', 5319050),
('5319050005', 'Nggalak Leleng', 5319050),
('5319050006', 'Golo Nderu', 5319050),
('5319050007', 'Pocolia', 5319050),
('5319050016', 'Gurung Turi', 5319050),
('5319050017', 'Compang Laho', 5319050),
('5319050018', 'Bea Waek', 5319050),
('5319050019', 'Satar Tesem', 5319050),
('5319050020', 'Lenang', 5319050),
('5319050021', 'Pocong', 5319050),
('5319050025', 'Watu Lanur', 5319050),
('5319050026', 'Leong', 5319050),
('5319050027', 'Melo', 5319050),
('5319050028', 'Golo Ndari', 5319050),
('5319050029', 'Compang Wesang', 5319050),
('5319050030', 'Bangka Leleng', 5319050),
('5319050031', 'Lento', 5319050),
('5319050036', 'Golo Rengket', 5319050),
('5319050037', 'Golo Wune', 5319050),
('5319050038', 'Deno', 5319050),
('5319050041', 'Compang Weluk', 5319050),
('5319051001', 'Rende Nao', 5319051),
('5319051002', 'Ulu Wae', 5319051),
('5319051003', 'Ngkiong Dora', 5319051),
('5319051004', 'Wangkar Weli', 5319051),
('5319051005', 'Rengkam', 5319051),
('5319051006', 'Golo Lero', 5319051),
('5319051007', 'Tango Molas', 5319051),
('5319051008', 'Arus', 5319051),
('5319051009', 'Watu Arus', 5319051),
('5319051010', 'Benteng Rampas', 5319051),
('5319051011', 'Compang Wunis', 5319051),
('5319051012', 'Wejang Mali', 5319051),
('5319051013', 'Colol', 5319051),
('5319051014', 'Urung Dora', 5319051),
('5319051015', 'Compang Raci', 5319051),
('5319051016', 'Bangka Arus', 5319051),
('5319051017', 'Benteng Wunis', 5319051),
('5319051018', 'Wejang Mawe', 5319051),
('5319060001', 'Tengkulawar', 5319060),
('5319060002', 'Compang Necak', 5319060),
('5319060003', 'Compang Mekar', 5319060),
('5319060004', 'Tengku Leda', 5319060),
('5319060005', 'Compang Deru', 5319060),
('5319060006', 'Goreng Meni', 5319060),
('5319060007', 'Golo Munga', 5319060),
('5319060008', 'Golo Rentung', 5319060),
('5319060009', 'Golo Lembur', 5319060),
('5319060010', 'Golo Nimbung', 5319060),
('5319060011', 'Lencur', 5319060),
('5319060012', 'Golo Mangung', 5319060),
('5319060013', 'Satar Padut', 5319060),
('5319060014', 'Nampar Tabang', 5319060),
('5319060015', 'Liang Deruk', 5319060),
('5319060016', 'Satar Punda', 5319060),
('5319060017', 'Lamba Keli', 5319060),
('5319060018', 'Goreng Meni Utara', 5319060),
('5319060019', 'Golo Munga Barat', 5319060),
('5319060020', 'Golo Paleng', 5319060),
('5319060021', 'Haju Wangi', 5319060),
('5319060022', 'Golo Wontong', 5319060),
('5319060023', 'Satar Kampas', 5319060),
('5319060024', 'Satar Punda Barat', 5319060);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
  `kode_gol` int(16) NOT NULL AUTO_INCREMENT,
  `id_kelompok` int(11) NOT NULL,
  `nama_gol` varchar(50) NOT NULL,
  `tarif_a` int(11) NOT NULL,
  `tarif_b` int(11) NOT NULL,
  `tarif_c` int(11) NOT NULL,
  `kode_tarif` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_gol`),
  KEY `id_kelompok` (`id_kelompok`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`kode_gol`, `id_kelompok`, `nama_gol`, `tarif_a`, `tarif_b`, `tarif_c`, `kode_tarif`) VALUES
(7, 1, 'Sosial Khusus', 1600, 2000, 2400, 'SK'),
(8, 1, 'Sosial Umum', 1600, 1600, 1600, 'SU'),
(9, 2, 'Rumah Tangga A', 2000, 2500, 3000, 'RT A'),
(10, 2, 'Rumah Tangga B', 2500, 3000, 3500, 'RT B'),
(11, 2, 'Instansi Pemerintah', 3000, 3500, 4000, 'IP'),
(12, 3, 'Niaga Kecil', 3000, 3000, 3400, 'NK'),
(13, 3, 'Niaga Besar', 4000, 4000, 4500, 'NB'),
(14, 3, 'Industri Kecil', 3500, 3500, 4500, 'IK'),
(15, 3, 'Industri Besar', 5000, 5000, 6000, 'IB'),
(16, 4, 'Pelabuhan', 7500, 7500, 7500, 'P'),
(17, 4, 'Mobil Tangki', 8000, 8000, 8000, 'MT');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `kode_kec` int(12) NOT NULL AUTO_INCREMENT,
  `nama_kec` varchar(12) NOT NULL,
  PRIMARY KEY (`kode_kec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5319061 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kode_kec`, `nama_kec`) VALUES
(5319010, ' Borong'),
(5319011, ' Rana Mese'),
(5319020, ' Kota Komba'),
(5319030, ' Elar'),
(5319031, ' Elar Selata'),
(5319040, ' Sambi Rampa'),
(5319050, ' Poco Ranaka'),
(5319051, ' Poco Ranaka'),
(5319060, ' Lamba Leda');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `id_kelompok` int(11) NOT NULL AUTO_INCREMENT,
  `nm_kelompok` text NOT NULL,
  PRIMARY KEY (`id_kelompok`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `nm_kelompok`) VALUES
(1, 'Kelompok Pelanggan I'),
(2, 'Kelompok Pelanggan II'),
(3, 'Kelompok Pelanggan III'),
(4, 'Kelompok Pelanggan IV'),
(8, 'Kelompok Pelanggan VI'),
(9, 'Kelompok Pelanggan VII');

-- --------------------------------------------------------

--
-- Table structure for table `mtr_pelanggan`
--

CREATE TABLE IF NOT EXISTS `mtr_pelanggan` (
  `no_transaksi` varchar(16) NOT NULL,
  `no_pelanggan` varchar(20) NOT NULL,
  `kode_gol` int(16) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `mtr_awal` varchar(20) NOT NULL,
  `vol` int(11) NOT NULL,
  `tgl_baca_mtr` date NOT NULL,
  `ptgs_baca_mtr` int(16) NOT NULL,
  `status` varchar(6) NOT NULL,
  `jml_tagihan` double NOT NULL,
  `tgl_bts_byr` date NOT NULL,
  PRIMARY KEY (`no_transaksi`),
  KEY `no_pelanggan` (`no_pelanggan`),
  KEY `kode_gol` (`kode_gol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtr_pelanggan`
--

INSERT INTO `mtr_pelanggan` (`no_transaksi`, `no_pelanggan`, `kode_gol`, `tgl_transaksi`, `mtr_awal`, `vol`, `tgl_baca_mtr`, `ptgs_baca_mtr`, `status`, `jml_tagihan`, `tgl_bts_byr`) VALUES
('TRANS01', '15122017531904000008', 15, '2017-12-15', '12', 12, '2017-12-10', 1, 'Lunas', 60000, '2017-12-20'),
('TRANS02', '10112017531904000002', 13, '2017-12-15', '15', 15, '2017-12-22', 1, 'Lunas', 60000, '2017-12-20'),
('TRANS03', '15122017531904000008', 15, '2017-12-15', '15', 3, '2018-02-21', 1, 'Lunas', 15000, '2018-02-20'),
('TRANS04', '09112017531904000001', 13, '2017-12-15', '15', 15, '2017-12-15', 1, 'Lunas', 60000, '2017-12-20'),
('TRANS05', '09112017531904000001', 13, '2017-12-15', '17', 2, '2017-12-15', 1, 'Lunas', 8000, '2017-12-20'),
('TRANS06', '09112017531904000001', 13, '2017-12-15', '20', 3, '2017-12-16', 1, 'Lunas', 12000, '2017-12-20'),
('TRANS07', '10112017531904000003', 15, '2017-12-15', '8', 8, '2017-12-16', 1, 'Lunas', 40000, '2017-12-20'),
('TRANS08', '16122017531904000010', 15, '2017-12-16', '10', 10, '2017-12-16', 1, 'Lunas', 50000, '2017-12-20'),
('TRANS09', '10112017531904000003', 15, '2017-12-16', '10', 2, '2018-01-12', 1, 'Hutang', 10000, '2018-01-20'),
('TRANS10', '15122017531904000009', 15, '2017-12-16', '12', 12, '2017-12-16', 1, 'Lunas', 60000, '2017-12-20'),
('TRANS11', '13112017531904000004', 14, '2017-12-17', '15', 15, '2017-12-17', 1, 'Hutang', 52500, '2017-12-20'),
('TRANS12', '14122017531904000006', 15, '2017-12-21', '12', 12, '2017-12-28', 1, 'Lunas', 60000, '2017-12-20'),
('TRANS13', '15122017531904000008', 15, '2017-12-21', '17', 2, '2018-01-18', 1, 'Lunas', 10000, '2018-01-20'),
('TRANS14', '10112017531904000003', 15, '2017-12-27', '12', 2, '2017-12-27', 1, 'Hutang', 10000, '2017-12-20'),
('TRANS15', '09112017531904000001', 13, '2018-01-06', '22', 2, '2018-01-06', 1, 'Lunas', 8000, '2018-01-20'),
('TRANS16', '17012018531904000012', 12, '2018-01-17', '15', 15, '2018-03-10', 1, 'Lunas', 45000, '2018-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `no_pelanggan` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `no_ktp` bigint(16) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kode_desa` varchar(20) NOT NULL,
  `dusun` text NOT NULL,
  `kode_gol` int(16) NOT NULL,
  PRIMARY KEY (`no_pelanggan`),
  KEY `kode_desa` (`kode_desa`),
  KEY `kode_gol` (`kode_gol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_pelanggan`, `nama`, `no_tlp`, `no_kk`, `no_ktp`, `pekerjaan`, `kode_desa`, `dusun`, `kode_gol`) VALUES
('09112017531904000001', 'A. Azis Dg Manteko', '082234754632', 1901201612310001, 1901201612310001, 'Guru', '5319040010', 'Pacipanda', 13),
('10112017531904000002', 'A. Fatta Har', '082236447387', 1901201612310003, 1901201612310003, 'Tani', '5319040010', 'Paci Panda', 13),
('10112017531904000003', 'A. Azis Nurdin', '082234567843', 1901201612310002, 1901201612310002, 'WIRASWASTA', '5319040010', 'Sarae', 15),
('13112017531904000004', 'A. Gani Tado', '082234567843', 1901201612310004, 1901201612310004, 'Tani', '5319040010', 'ASI', 14),
('13112017531904000005', '  Siti Maya', '081336447387', 1901201612310006, 1901201612310006, 'Guru', '5319040010', 'Asi', 15),
('14122017531904000006', 'Hamid Kasim', '082234754632', 1901201612310007, 1901201612310007, 'Tani', '5319040010', 'Serae', 15),
('14122017531904000007', 'Hamid Kasim', '082234754632', 1901201612310007, 1901201612310007, 'Tani', '5319040010', 'Serae', 15),
('15122017531904000008', ' H. Abdul Majid', '082234567843', 1901201612310010, 1901201612310010, 'Guru', '5319040010', 'Sarae', 15),
('15122017531904000009', 'A. Majid Ismail', '082236447387', 1901201612310011, 1901201612310011, 'Nelayan', '5319040010', 'Sigit', 15),
('16122017531904000010', 'A. Majid Yusuf', '081234321345', 1901201612310012, 1901201612310012, 'Guru', '5319040010', 'Sigit', 15),
('16122017531904000011', 'A. Murtalib S.Ag', '082234567843', 1901201612310013, 1901201612310013, 'Guru', '5319040010', 'Sigit', 15),
('17012018531904000012', 'Siti Zulaiha', '081234123456', 1901201612310002, 1901201612310001, 'Guru', '5319040010', 'Asi', 12),
('17012018531904000013', 'Fatma Waty', '081234321345', 1901201612310010, 1901201612310002, 'Guru', '5319040011', 'Sigit', 16);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `no_resi` int(16) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(50) NOT NULL,
  `no_sambungan` int(16) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `denda` double NOT NULL,
  `no_petugas` varchar(20) NOT NULL,
  PRIMARY KEY (`no_resi`),
  KEY `no_sambungan` (`no_sambungan`),
  KEY `no_transaksi` (`no_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no_resi`, `no_transaksi`, `no_sambungan`, `tgl_bayar`, `denda`, `no_petugas`) VALUES
(14, 'TRANS08', 42, '2017-11-15', 0, '2'),
(15, 'TRANS08', 42, '2017-11-15', 0, '2'),
(16, 'TRANS12', 42, '2017-11-15', 0, '2'),
(17, 'TRANS13', 42, '2017-11-15', 0, '2'),
(18, 'TRANS14', 42, '2017-11-15', 0, '2'),
(19, 'TRANS15', 42, '2017-11-15', 0, '2'),
(20, 'TRANS16', 45, '2017-11-15', 0, '1'),
(21, 'TRANS17', 45, '2017-11-15', 0, '1'),
(22, 'TRANS09', 43, '2017-11-15', 0, '1'),
(23, 'TRANS18', 43, '2017-11-15', 0, '1'),
(24, 'TRANS19', 43, '2017-11-15', 0, '1'),
(25, 'TRANS21', 42, '2017-11-15', 0, '1'),
(26, 'TRANS22', 46, '2017-11-15', 0, '1'),
(27, 'TRANS23', 42, '2017-11-15', 0, '1'),
(28, 'TRANS02', 43, '2017-12-15', 0, '1'),
(29, 'TRANS01', 48, '2017-12-15', 0, '1'),
(30, 'TRANS03', 48, '2017-12-15', 0, '1'),
(31, 'TRANS04', 42, '2017-12-15', 0, '1'),
(32, 'TRANS07', 44, '2017-12-15', 0, '1'),
(33, 'TRANS08', 50, '2017-12-16', 0, '1'),
(34, 'TRANS10', 49, '2017-12-16', 0, '1'),
(35, 'TRANS12', 0, '2017-12-21', 5000, '1'),
(36, 'TRANS13', 48, '2017-12-21', 0, '1'),
(37, 'TRANS05', 42, '2018-01-06', 0, '1'),
(38, 'TRANS06', 42, '2018-01-06', 0, '1'),
(39, 'TRANS15', 42, '2018-01-06', 0, '1'),
(40, 'TRANS16', 59, '2018-01-17', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `no_petugas` varchar(20) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`no_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`no_petugas`, `nama_petugas`, `no_tlp`, `jabatan`, `username`, `password`) VALUES
('1', 'Siti Zulaiha', '082236447387', 'Kepala', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `sambungan`
--

CREATE TABLE IF NOT EXISTS `sambungan` (
  `no_sambungan` int(16) NOT NULL AUTO_INCREMENT,
  `kondisi_air` varchar(20) NOT NULL,
  `no_pelanggan` varchar(20) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_pasang` date NOT NULL,
  `no_meteran` int(16) NOT NULL,
  `status_vm` varchar(10) NOT NULL,
  PRIMARY KEY (`no_sambungan`),
  KEY `no_pelanggan` (`no_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `sambungan`
--

INSERT INTO `sambungan` (`no_sambungan`, `kondisi_air`, `no_pelanggan`, `tgl_daftar`, `tgl_pasang`, `no_meteran`, `status_vm`) VALUES
(42, 'Mengalir\n', '09112017531904000001', '2017-11-09', '2017-11-01', 22, 'Aktif'),
(43, 'Mengalir', '10112017531904000002', '2017-11-10', '2017-11-05', 12, 'Aktif'),
(44, 'Mengalir', '10112017531904000003', '2017-11-10', '2017-11-08', 22, 'Akti'),
(45, 'Mengalir', '13112017531904000004', '2017-11-13', '2017-11-01', 23, 'Aktif'),
(46, 'Mengalir', '13112017531904000005', '2017-11-13', '2017-10-01', 15, 'Aktif'),
(47, 'Mengalir', '14122017531904000007', '2017-12-14', '2017-09-04', 13, 'Aktif'),
(48, 'Mengalir', '15122017531904000008', '2017-12-15', '2017-07-12', 11, 'Aktif'),
(49, 'Mengalir', '15122017531904000009', '2017-12-15', '2017-12-17', 14, 'Aktif'),
(50, 'Mengalir', '16122017531904000010', '2017-12-16', '2017-12-16', 15, 'Aktif'),
(51, 'Mengalir', '16122017531904000011', '2017-12-16', '2017-11-23', 10, 'Aktif'),
(52, 'Mengalir', '16122017531904000012', '2017-12-16', '2017-12-16', 0, 'Aktif'),
(53, 'Mengalir', '20122017531904000013', '2017-12-20', '2017-12-20', 898, 'Aktif'),
(54, 'Mengalir', '22122017531903100012', '2017-12-22', '2017-12-08', 9, 'Aktif'),
(55, 'Mengalir', '22122017--- Kecamata', '2017-12-22', '2017-05-05', 0, 'Aktif'),
(56, 'Mengalir', '22122017--- Kecamata', '2017-12-22', '2017-05-05', 0, 'Aktif'),
(57, 'Mengalir', '01012018531904000012', '2018-01-01', '2018-01-02', 204, 'Aktif'),
(58, 'Mengalir', '01012018531903000012', '2018-01-01', '2018-01-01', 12, 'Aktif'),
(59, 'Mengalir', '17012018531904000012', '2018-01-17', '2018-01-17', 123, 'Aktif'),
(60, 'Mengalir', '17012018531904000013', '2018-01-17', '2018-01-11', 124, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `sub_golongan`
--

CREATE TABLE IF NOT EXISTS `sub_golongan` (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub` text NOT NULL,
  `kode_gol` int(11) NOT NULL,
  PRIMARY KEY (`id_sub`),
  KEY `kode_gol` (`kode_gol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sub_golongan`
--

INSERT INTO `sub_golongan` (`id_sub`, `nama_sub`, `kode_gol`) VALUES
(6, 'Kran Umum', 8),
(7, 'WC Umum', 8),
(8, 'Sekolah - Sekolah', 7),
(9, 'Panti Asuhan', 7),
(10, 'Rumah Ibadah', 7),
(11, 'Yayaysan Sosial', 7),
(12, 'Rumah Sakit Pemerintah', 7),
(13, 'Rumah Semi Permanen', 9),
(14, 'Rumah Sederhana (bukan rumah permanen)', 9),
(15, 'Rumah Tembok / Permanen', 10),
(16, 'Rumah Bertingkat', 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`kode_kec`) REFERENCES `kecamatan` (`kode_kec`);

--
-- Constraints for table `golongan`
--
ALTER TABLE `golongan`
  ADD CONSTRAINT `golongan_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`);

--
-- Constraints for table `mtr_pelanggan`
--
ALTER TABLE `mtr_pelanggan`
  ADD CONSTRAINT `mtr_pelanggan_ibfk_1` FOREIGN KEY (`no_pelanggan`) REFERENCES `pelanggan` (`no_pelanggan`),
  ADD CONSTRAINT `mtr_pelanggan_ibfk_2` FOREIGN KEY (`kode_gol`) REFERENCES `golongan` (`kode_gol`);

--
-- Constraints for table `sub_golongan`
--
ALTER TABLE `sub_golongan`
  ADD CONSTRAINT `sub_golongan_ibfk_1` FOREIGN KEY (`kode_gol`) REFERENCES `golongan` (`kode_gol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
