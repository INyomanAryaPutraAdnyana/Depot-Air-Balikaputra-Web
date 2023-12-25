-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 11:49 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter_tabel`
--

CREATE TABLE `counter_tabel` (
  `id` int(110) DEFAULT NULL,
  `cnt_dokter` int(11) NOT NULL,
  `cnt_pasien` int(11) NOT NULL,
  `cnt_obat` int(11) NOT NULL,
  `cnt_rwj` int(11) NOT NULL,
  `cnt_rwp` int(11) NOT NULL,
  `cnt_mcu` int(11) NOT NULL,
  `cnt_tbs_obat` int(11) NOT NULL,
  `cnt_kamar` int(11) NOT NULL,
  `cnt_igd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter_tabel`
--

INSERT INTO `counter_tabel` (`id`, `cnt_dokter`, `cnt_pasien`, `cnt_obat`, `cnt_rwj`, `cnt_rwp`, `cnt_mcu`, `cnt_tbs_obat`, `cnt_kamar`, `cnt_igd`) VALUES
(NULL, 9, 5, 9, 7, 7, 8, 5, 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `dk_nama` varchar(50) NOT NULL,
  `dk_nik` varchar(50) NOT NULL,
  `dk_status` varchar(50) NOT NULL,
  `dk_jabatan` varchar(50) NOT NULL,
  `dk_joindate` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `dk_nama`, `dk_nik`, `dk_status`, `dk_jabatan`, `dk_joindate`, `username`) VALUES
('DK00001', 'Ijan', '000344', 'jaga', 'direktur', '2023-07-13', 'admin'),
('DK00002', 'Endro', '434343', 'tidak tetap', 'Kepala Rs', '2023-07-20', 'admin'),
('DK00005', 'Indra', '9999', 'tidak tetap', 'manager ', '2023-07-13', 'admin'),
('DK00006', 'Haris', '11111', 'tetap', 'Supervisor', '2023-07-07', 'admin'),
('DK00007', 'Filisa', '44444', 'Tetap', 'SPV', '2023-07-22', 'admin'),
('DK00009', 'eka', '2345', 'tidak tetap', 'manager ', '2023-07-26', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `igd`
--

CREATE TABLE `igd` (
  `id_igd` char(20) NOT NULL,
  `kode_pasien` varchar(100) NOT NULL,
  `id_dokter` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `biaya_igd` int(100) NOT NULL,
  `tipe_bayar` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `igd`
--

INSERT INTO `igd` (`id_igd`, `kode_pasien`, `id_dokter`, `tgl_masuk`, `keluhan`, `biaya_igd`, `tipe_bayar`, `username`) VALUES
('1212', 'KP_003', 'KD001', '2023-07-20', 'sikil kecengklak', 1000, 'admin', ''),
('GD00001', 'CST00003', 'DK00001', '2023-07-14', 'Mata pegel', 1000, 'cash', '');

-- --------------------------------------------------------

--
-- Table structure for table `mcu`
--

CREATE TABLE `mcu` (
  `id_mcu` varchar(11) NOT NULL,
  `kode_pasien` varchar(10) DEFAULT NULL,
  `tgl_mcu` date DEFAULT NULL,
  `id_dokter` varchar(11) DEFAULT NULL,
  `jenis_mcu` varchar(255) DEFAULT NULL,
  `biaya_mcu` int(100) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcu`
--

INSERT INTO `mcu` (`id_mcu`, `kode_pasien`, `tgl_mcu`, `id_dokter`, `jenis_mcu`, `biaya_mcu`, `username`) VALUES
('CU00004', 'CST00002', '2023-07-22', 'DK00001', 'periksa gula', 450000, 'user1'),
('CU00005', 'CST00003', '2023-07-19', 'DK00002', 'periksa darah', 500000, 'user1'),
('CU00006', 'CST00002', '2023-07-21', 'DK00001', 'periksa mata ', 66666, 'user1'),
('CU00008', 'CST00002', '2023-07-15', 'DK00001', 'periksa mata ', 150000, 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(11) NOT NULL,
  `nama_obat` varchar(50) DEFAULT NULL,
  `jenis_obat` varchar(50) DEFAULT NULL,
  `satuan_obat` varchar(50) DEFAULT NULL,
  `qty_obat` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`, `satuan_obat`, `qty_obat`, `username`) VALUES
('HLT00002', 'Chlorpenaminec', 'sakit kepala', 'tablet', 50, NULL),
('HLT00004', 'Paracetamol', 'sakit kepala', 'pcs', 68, NULL),
('HLT00005', 'Acetazolamide ', 'Glukoma', 'pcs', 20, NULL),
('HLT00006', 'Amineptine', 'psikologis', 'pcs', 20, NULL),
('HLT00007', 'Amoxicillin ', 'pereda ', 'pcs', 10, NULL),
('HLT00009', 'Amineptine', 'glukoma', 'sirup', 45, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kode_pasien` varchar(20) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `nik_pasien` char(100) NOT NULL,
  `alamat_pasien` text NOT NULL,
  `no_hp` char(50) NOT NULL,
  `usia` char(50) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kode_pasien`, `nama_pasien`, `nik_pasien`, `alamat_pasien`, `no_hp`, `usia`, `username`) VALUES
('CST00002', 'indra', '00222929', 'jakarta', '323232323', '33', 'user1'),
('CST00003', 'hendri', '2232039230', 'bekasi', '20232032932', '23', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id_rwp` varchar(10) NOT NULL,
  `kode_pasien` varchar(10) NOT NULL,
  `tgl_masuk_rwp` date NOT NULL,
  `tipe_bayar` varchar(15) NOT NULL,
  `harga_rwp` int(20) NOT NULL,
  `jenis_penyakit` varchar(50) NOT NULL,
  `id_kamar` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`id_rwp`, `kode_pasien`, `tgl_masuk_rwp`, `tipe_bayar`, `harga_rwp`, `jenis_penyakit`, `id_kamar`, `username`) VALUES
('WP00003', 'CST00002', '2023-07-14', 'cash', 0, 'Sakit mata ', 'KM00014', 'admin'),
('WP00004', 'CST00003', '2023-07-22', 'cash', 0, 'sakit kesenggol mantan', 'KM00015', 'admin'),
('WP00006', 'CST00002', '2023-07-22', 'cash', 0, 'sakit mag', 'KM00018', 'admin'),
('WP00007', 'CST00002', '2023-07-21', 'cash', 0, 'kurang sehat', 'KM00021', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `id_rwj` char(10) NOT NULL,
  `kode_pasien` varchar(10) NOT NULL,
  `tgl_rawat` date NOT NULL,
  `id_dokter` char(15) NOT NULL,
  `rwj_note` varchar(100) NOT NULL,
  `biaya_rwj` int(11) NOT NULL,
  `tipe_bayar` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`id_rwj`, `kode_pasien`, `tgl_rawat`, `id_dokter`, `rwj_note`, `biaya_rwj`, `tipe_bayar`, `username`) VALUES
('77755', '4444563487', '2023-07-28', '12366', 'tidak ada', 2500000, 'cash', 'user1'),
('WJ000', '0014', '2023-07-21', '1111', 'dfasadsfadsfsa', 43434343, 'cash', 'admin'),
('WJ00003', '0012', '2023-07-28', 'fdasf', 'dfadsfasdfsad', 43434334, 'cash', 'admin'),
('WJ00004', 'CST00003', '2023-07-22', 'DK000', 'tset', 5455454, 'cash', 'admin'),
('WJ00005', 'CST00004', '2023-07-15', 'DK00005', 'test', 333, 'transfer', 'admin'),
('WJ00007', 'DK00005', '2023-07-21', 'DK00005', 'gdfgfdgsddffdsfasd', 43434343, 'cash', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblkamar`
--

CREATE TABLE `tblkamar` (
  `id_kamar` varchar(10) NOT NULL,
  `nomor_kamar` varchar(30) NOT NULL,
  `jenis_kamar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkamar`
--

INSERT INTO `tblkamar` (`id_kamar`, `nomor_kamar`, `jenis_kamar`, `harga`) VALUES
('KM00014', 'Annisa', 'Kelas 2', 0),
('KM00015', 'Musdalifah x', 'vip a', 0),
('KM00016', 'Sughra c', 'Kelas 2', 0),
('KM00017', 'Annur', 'Kelas 2', 0),
('KM00018', 'Annas', 'vip a', 0),
('KM00020', 'Annisa', 'Kelas 2', 0),
('KM00021', 'haidar', 'VIP A', 800000);

-- --------------------------------------------------------

--
-- Table structure for table `tebus_obat`
--

CREATE TABLE `tebus_obat` (
  `id_beli` varchar(10) NOT NULL,
  `id_obat` int(10) NOT NULL,
  `tgl_beli` date NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tebus_obat`
--

INSERT INTO `tebus_obat` (`id_beli`, `id_obat`, `tgl_beli`, `jumlah_obat`, `harga_obat`, `total_harga`, `username`) VALUES
('SLS00004', 4444, '2023-07-22', 22, 8999, 9999999, 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`, `email`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'admin', 'iconxy100@gmail.com'),
('dede', '202cb962ac59075b964b07152d234b70', 'admin', 'dede@gmail.com'),
('user1', '202cb962ac59075b964b07152d234b70', 'user', 'user1@gmail.com'),
('wandri', '202cb962ac59075b964b07152d234b70', 'admin', 'wandri@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igd`
--
ALTER TABLE `igd`
  ADD PRIMARY KEY (`id_igd`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kode_pasien`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`id_rwp`);

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`id_rwj`);

--
-- Indexes for table `tblkamar`
--
ALTER TABLE `tblkamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tebus_obat`
--
ALTER TABLE `tebus_obat`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
