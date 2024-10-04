-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 05:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_animasi2d`
--

CREATE TABLE `tbl_animasi2d` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit1el4` int(11) NOT NULL,
  `unit1el5` int(11) NOT NULL,
  `unit1el6` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit2el4` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit3el4` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `unit4el4` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit5el3` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit6el3` int(11) NOT NULL,
  `unit6el4` int(11) NOT NULL,
  `unit6el5` int(11) NOT NULL,
  `unit7el1` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit1el4` varchar(255) NOT NULL,
  `buktiunit1el5` varchar(255) NOT NULL,
  `buktiunit1el6` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit2el4` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit3el4` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL,
  `buktiunit4el4` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit5el3` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit6el3` varchar(255) NOT NULL,
  `buktiunit6el4` varchar(255) NOT NULL,
  `buktiunit6el5` varchar(255) NOT NULL,
  `buktiunit7el1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_animasi2d`
--

INSERT INTO `tbl_animasi2d` (`id_unit`, `id_siswa`, `no_pendaftaran`, `unit1el1`, `unit1el2`, `unit1el3`, `unit1el4`, `unit1el5`, `unit1el6`, `unit2el1`, `unit2el2`, `unit2el3`, `unit2el4`, `unit3el1`, `unit3el2`, `unit3el3`, `unit3el4`, `unit4el1`, `unit4el2`, `unit4el3`, `unit4el4`, `unit5el1`, `unit5el2`, `unit5el3`, `unit6el1`, `unit6el2`, `unit6el3`, `unit6el4`, `unit6el5`, `unit7el1`, `buktiunit1el1`, `buktiunit1el2`, `buktiunit1el3`, `buktiunit1el4`, `buktiunit1el5`, `buktiunit1el6`, `buktiunit2el1`, `buktiunit2el2`, `buktiunit2el3`, `buktiunit2el4`, `buktiunit3el1`, `buktiunit3el2`, `buktiunit3el3`, `buktiunit3el4`, `buktiunit4el1`, `buktiunit4el2`, `buktiunit4el3`, `buktiunit4el4`, `buktiunit5el1`, `buktiunit5el2`, `buktiunit5el3`, `buktiunit6el1`, `buktiunit6el2`, `buktiunit6el3`, `buktiunit6el4`, `buktiunit6el5`, `buktiunit7el1`) VALUES
(14, 167, '2022-1645927631', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'KARTU_PELAJAR-270222-2022-1645927631.rar', 'RAPORT-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'KARTU_PELAJAR-270222-2022-1645927631.rar', 'RAPORT-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'SERTIFIKAT_PENDUKUNG-270222-2022-1645927631.png', 'PAS_PHOTO-270222-2022-1645927631.jpg', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'SERTIFIKAT_PENDUKUNG-270222-2022-1645927631.png', 'KARTU_PELAJAR-270222-2022-1645927631.rar', 'PAS_PHOTO-270222-2022-1645927631.jpg', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'RAPORT-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audiovideo`
--

CREATE TABLE `tbl_audiovideo` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit1el4` int(11) NOT NULL,
  `unit1el5` int(11) NOT NULL,
  `unit1el6` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit2el4` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit3el4` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `unit4el4` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit5el3` int(11) NOT NULL,
  `unit5el4` int(11) NOT NULL,
  `unit5el5` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit6el3` int(11) NOT NULL,
  `unit6el4` int(11) NOT NULL,
  `unit7el1` int(11) NOT NULL,
  `unit7el2` int(11) NOT NULL,
  `unit7el3` int(11) NOT NULL,
  `unit7el4` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit1el4` varchar(255) NOT NULL,
  `buktiunit1el5` varchar(255) NOT NULL,
  `buktiunit1el6` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit2el4` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit3el4` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL,
  `buktiunit4el4` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit5el3` varchar(255) NOT NULL,
  `buktiunit5el4` varchar(255) NOT NULL,
  `buktiunit5el5` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit6el3` varchar(255) NOT NULL,
  `buktiunit6el4` varchar(255) NOT NULL,
  `buktiunit7el1` varchar(255) NOT NULL,
  `buktiunit7el2` varchar(255) NOT NULL,
  `buktiunit7el3` varchar(255) NOT NULL,
  `buktiunit7el4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desaingrafis`
--

CREATE TABLE `tbl_desaingrafis` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit1el4` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit2el4` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit3el4` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit1el4` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit2el4` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit3el4` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desainpercetakan`
--

CREATE TABLE `tbl_desainpercetakan` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit1el4` int(11) NOT NULL,
  `unit1el5` int(11) NOT NULL,
  `unit1el6` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit2el4` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit3el4` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `unit4el4` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit5el3` int(11) NOT NULL,
  `unit5el4` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit6el3` int(11) NOT NULL,
  `unit7el1` int(11) NOT NULL,
  `unit7el2` int(11) NOT NULL,
  `unit7el3` int(11) NOT NULL,
  `unit7el4` int(11) NOT NULL,
  `unit8el1` int(11) NOT NULL,
  `unit8el2` int(11) NOT NULL,
  `unit8el3` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit1el4` varchar(255) NOT NULL,
  `buktiunit1el5` varchar(255) NOT NULL,
  `buktiunit1el6` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit2el4` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit3el4` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL,
  `buktiunit4el4` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit5el3` varchar(255) NOT NULL,
  `buktiunit5el4` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit6el3` varchar(255) NOT NULL,
  `buktiunit7el1` varchar(255) NOT NULL,
  `buktiunit7el2` varchar(255) NOT NULL,
  `buktiunit7el3` varchar(255) NOT NULL,
  `buktiunit7el4` varchar(255) NOT NULL,
  `buktiunit8el1` varchar(255) NOT NULL,
  `buktiunit8el2` varchar(255) NOT NULL,
  `buktiunit8el3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instalasijaringan`
--

CREATE TABLE `tbl_instalasijaringan` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_instalasijaringan`
--

INSERT INTO `tbl_instalasijaringan` (`id_unit`, `id_siswa`, `no_pendaftaran`, `unit1el1`, `unit1el2`, `unit2el1`, `unit2el2`, `unit3el1`, `unit3el2`, `unit3el3`, `unit4el1`, `unit4el2`, `unit4el3`, `buktiunit1el1`, `buktiunit1el2`, `buktiunit2el1`, `buktiunit2el2`, `buktiunit3el1`, `buktiunit3el2`, `buktiunit3el3`, `buktiunit4el1`, `buktiunit4el2`, `buktiunit4el3`) VALUES
(22, 158, '2022-1644397018', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komp`
--

CREATE TABLE `tbl_komp` (
  `id_komp` int(11) NOT NULL,
  `kompetensi` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `jurusan` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_komp`
--

INSERT INTO `tbl_komp` (`id_komp`, `kompetensi`, `jurusan`) VALUES
(1, 'Pemrograman Dasar', 'RPL'),
(2, 'Pemrograman Web', 'RPL'),
(3, 'Pemrograman Berorientasi Objek', 'RPL'),
(4, 'Instalasi Jaringan Komputer Berbasis Kabel', 'TKJ'),
(5, 'Konfigurasi Perangkat Jaringan Komputer', 'TKJ'),
(6, 'Konfigurasi Routing Pada Perangkat Jaringan Komputer', 'TKJ'),
(7, 'Desain Grafis', 'MM'),
(8, 'Desain Grafis Percetakan', 'MM'),
(9, 'Animasi 2D', 'MM'),
(10, 'Pengolahan Audio Video', 'MM'),
(11, 'Pengoperasian Aplikasi Komputer Akuntansi', 'PKM'),
(12, 'Pelayanan Perbankan', 'PKM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfigurasiperangkat`
--

CREATE TABLE `tbl_konfigurasiperangkat` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit5el3` int(11) NOT NULL,
  `unit5el4` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit6el3` int(11) NOT NULL,
  `unit6el4` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit5el3` varchar(255) NOT NULL,
  `buktiunit5el4` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit6el3` varchar(255) NOT NULL,
  `buktiunit6el4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konfigurasiperangkat`
--

INSERT INTO `tbl_konfigurasiperangkat` (`id_unit`, `id_siswa`, `no_pendaftaran`, `unit1el1`, `unit1el2`, `unit1el3`, `unit2el1`, `unit2el2`, `unit2el3`, `unit3el1`, `unit3el2`, `unit4el1`, `unit4el2`, `unit4el3`, `unit5el1`, `unit5el2`, `unit5el3`, `unit5el4`, `unit6el1`, `unit6el2`, `unit6el3`, `unit6el4`, `buktiunit1el1`, `buktiunit1el2`, `buktiunit1el3`, `buktiunit2el1`, `buktiunit2el2`, `buktiunit2el3`, `buktiunit3el1`, `buktiunit3el2`, `buktiunit4el1`, `buktiunit4el2`, `buktiunit4el3`, `buktiunit5el1`, `buktiunit5el2`, `buktiunit5el3`, `buktiunit5el4`, `buktiunit6el1`, `buktiunit6el2`, `buktiunit6el3`, `buktiunit6el4`) VALUES
(6, 166, '2022-1645874897', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'PAS_PHOTO-260222-2022-1645874897.jpg', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'KARTU_KELUARGA-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'KARTU_KELUARGA-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'KARTU_PELAJAR-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'KARTU_KELUARGA-260222-2022-1645874897.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfigurasirouting`
--

CREATE TABLE `tbl_konfigurasirouting` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit1el4` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit3el4` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit1el4` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit3el4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pbo`
--

CREATE TABLE `tbl_pbo` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit5el3` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit7el1` int(11) NOT NULL,
  `unit7el2` int(11) NOT NULL,
  `unit7el3` int(11) NOT NULL,
  `unit7el4` int(11) NOT NULL,
  `unit7el5` int(11) NOT NULL,
  `unit8el1` int(11) NOT NULL,
  `unit8el2` int(11) NOT NULL,
  `unit8el3` int(11) NOT NULL,
  `unit8el4` int(11) NOT NULL,
  `unit8el5` int(11) NOT NULL,
  `unit8el6` int(11) NOT NULL,
  `unit8el7` int(11) NOT NULL,
  `unit8el8` int(11) NOT NULL,
  `unit9el1` int(11) NOT NULL,
  `unit9el2` int(11) NOT NULL,
  `unit9el3` int(11) NOT NULL,
  `unit9el4` int(11) NOT NULL,
  `unit10el1` int(11) NOT NULL,
  `unit10el2` int(11) NOT NULL,
  `unit10el3` int(11) NOT NULL,
  `unit10el4` int(11) NOT NULL,
  `unit10el5` int(11) NOT NULL,
  `unit11el1` int(11) NOT NULL,
  `unit11el2` int(11) NOT NULL,
  `unit11el3` int(11) NOT NULL,
  `unit11el4` int(11) NOT NULL,
  `unit11el5` int(11) NOT NULL,
  `unit12el1` int(11) NOT NULL,
  `unit12el2` int(11) NOT NULL,
  `unit13el1` int(11) NOT NULL,
  `unit13el2` int(11) NOT NULL,
  `unit13el3` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit5el3` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit7el1` varchar(255) NOT NULL,
  `buktiunit7el2` varchar(255) NOT NULL,
  `buktiunit7el3` varchar(255) NOT NULL,
  `buktiunit7el4` varchar(255) NOT NULL,
  `buktiunit7el5` varchar(255) NOT NULL,
  `buktiunit8el1` varchar(255) NOT NULL,
  `buktiunit8el2` varchar(255) NOT NULL,
  `buktiunit8el3` varchar(255) NOT NULL,
  `buktiunit8el4` varchar(255) NOT NULL,
  `buktiunit8el5` varchar(255) NOT NULL,
  `buktiunit8el6` varchar(255) NOT NULL,
  `buktiunit8el7` varchar(255) NOT NULL,
  `buktiunit8el8` varchar(255) NOT NULL,
  `buktiunit9el1` varchar(255) NOT NULL,
  `buktiunit9el2` varchar(255) NOT NULL,
  `buktiunit9el3` varchar(255) NOT NULL,
  `buktiunit9el4` varchar(255) NOT NULL,
  `buktiunit10el1` varchar(255) NOT NULL,
  `buktiunit10el2` varchar(255) NOT NULL,
  `buktiunit10el3` varchar(255) NOT NULL,
  `buktiunit10el4` varchar(255) NOT NULL,
  `buktiunit10el5` varchar(255) NOT NULL,
  `buktiunit11el1` varchar(255) NOT NULL,
  `buktiunit11el2` varchar(255) NOT NULL,
  `buktiunit11el3` varchar(255) NOT NULL,
  `buktiunit11el4` varchar(255) NOT NULL,
  `buktiunit11el5` varchar(255) NOT NULL,
  `buktiunit12el1` varchar(255) NOT NULL,
  `buktiunit12el2` varchar(255) NOT NULL,
  `buktiunit13el1` varchar(255) NOT NULL,
  `buktiunit13el2` varchar(255) NOT NULL,
  `buktiunit13el3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id_pdd` int(11) NOT NULL,
  `nama_pdd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id_pdd`, `nama_pdd`) VALUES
(1, 'SD/Sederajat'),
(2, 'SMP/Sederajat'),
(3, 'SMA/Sederajat'),
(4, 'D1'),
(5, 'D2'),
(6, 'D3'),
(7, 'D4/S1'),
(8, 'S2'),
(9, 'S3'),
(10, 'Tidak Berpendidikan Formal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelayananperbankan`
--

CREATE TABLE `tbl_pelayananperbankan` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit1el4` int(11) NOT NULL,
  `unit1el5` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit5el3` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit7el1` int(11) NOT NULL,
  `unit7el2` int(11) NOT NULL,
  `unit8el1` int(11) NOT NULL,
  `unit8el2` int(11) NOT NULL,
  `unit8el3` int(11) NOT NULL,
  `unit9el1` int(11) NOT NULL,
  `unit9el2` int(11) NOT NULL,
  `unit9el3` int(11) NOT NULL,
  `unit10el1` int(11) NOT NULL,
  `unit10el2` int(11) NOT NULL,
  `unit10el3` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit1el4` varchar(255) NOT NULL,
  `buktiunit1el5` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit5el3` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit7el1` varchar(255) NOT NULL,
  `buktiunit7el2` varchar(255) NOT NULL,
  `buktiunit8el1` varchar(255) NOT NULL,
  `buktiunit8el2` varchar(255) NOT NULL,
  `buktiunit8el3` varchar(255) NOT NULL,
  `buktiunit9el1` varchar(255) NOT NULL,
  `buktiunit9el2` varchar(255) NOT NULL,
  `buktiunit9el3` varchar(255) NOT NULL,
  `buktiunit10el1` varchar(255) NOT NULL,
  `buktiunit10el2` varchar(255) NOT NULL,
  `buktiunit10el3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemdas`
--

CREATE TABLE `tbl_pemdas` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(255) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit7el1` int(11) NOT NULL,
  `unit7el2` int(11) NOT NULL,
  `unit8el1` int(11) NOT NULL,
  `unit8el2` int(11) NOT NULL,
  `unit8el3` int(11) NOT NULL,
  `unit8el4` int(11) NOT NULL,
  `unit8el5` int(11) NOT NULL,
  `unit8el6` int(11) NOT NULL,
  `unit9el1` int(11) NOT NULL,
  `unit9el2` int(11) NOT NULL,
  `unit9el3` int(11) NOT NULL,
  `unit9el4` int(11) NOT NULL,
  `unit9el5` int(11) NOT NULL,
  `unit10el1` int(11) NOT NULL,
  `unit10el2` int(11) NOT NULL,
  `unit10el3` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit7el1` varchar(255) NOT NULL,
  `buktiunit7el2` varchar(255) NOT NULL,
  `buktiunit8el1` varchar(255) NOT NULL,
  `buktiunit8el2` varchar(255) NOT NULL,
  `buktiunit8el3` varchar(255) NOT NULL,
  `buktiunit8el4` varchar(255) NOT NULL,
  `buktiunit8el5` varchar(255) NOT NULL,
  `buktiunit8el6` varchar(255) NOT NULL,
  `buktiunit9el1` varchar(255) NOT NULL,
  `buktiunit9el2` varchar(255) NOT NULL,
  `buktiunit9el3` varchar(255) NOT NULL,
  `buktiunit9el4` varchar(255) NOT NULL,
  `buktiunit9el5` varchar(255) NOT NULL,
  `buktiunit10el1` varchar(255) NOT NULL,
  `buktiunit10el2` varchar(255) NOT NULL,
  `buktiunit10el3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemdas`
--

INSERT INTO `tbl_pemdas` (`id_unit`, `id_siswa`, `no_pendaftaran`, `unit1el1`, `unit1el2`, `unit1el3`, `unit2el1`, `unit2el2`, `unit2el3`, `unit3el1`, `unit3el2`, `unit4el1`, `unit4el2`, `unit5el1`, `unit5el2`, `unit6el1`, `unit6el2`, `unit7el1`, `unit7el2`, `unit8el1`, `unit8el2`, `unit8el3`, `unit8el4`, `unit8el5`, `unit8el6`, `unit9el1`, `unit9el2`, `unit9el3`, `unit9el4`, `unit9el5`, `unit10el1`, `unit10el2`, `unit10el3`, `buktiunit1el1`, `buktiunit1el2`, `buktiunit1el3`, `buktiunit2el1`, `buktiunit2el2`, `buktiunit2el3`, `buktiunit3el1`, `buktiunit3el2`, `buktiunit4el1`, `buktiunit4el2`, `buktiunit5el1`, `buktiunit5el2`, `buktiunit6el1`, `buktiunit6el2`, `buktiunit7el1`, `buktiunit7el2`, `buktiunit8el1`, `buktiunit8el2`, `buktiunit8el3`, `buktiunit8el4`, `buktiunit8el5`, `buktiunit8el6`, `buktiunit9el1`, `buktiunit9el2`, `buktiunit9el3`, `buktiunit9el4`, `buktiunit9el5`, `buktiunit10el1`, `buktiunit10el2`, `buktiunit10el3`) VALUES
(6, 168, '2022-1669892010', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 'RAPORT-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'KARTU_PELAJAR-011222-2022-1669892010.png', 'KARTU_KELUARGA-011222-2022-1669892010.png', 'SERTIFIKAT_PENDUKUNG-011222-2022-1669892010.png', 'KARTU_PELAJAR-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'RAPORT-011222-2022-1669892010.png', 'SERTIFIKAT_PENDUKUNG-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'SERTIFIKAT_PENDUKUNG-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'RAPORT-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'KARTU_PELAJAR-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'KARTU_KELUARGA-011222-2022-1669892010.png', 'KARTU_KELUARGA-011222-2022-1669892010.png', 'SERTIFIKAT_PENDUKUNG-011222-2022-1669892010.png', 'KARTU_PELAJAR-011222-2022-1669892010.png', 'SERTIFIKAT_PENDUKUNG-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'KARTU_KELUARGA-011222-2022-1669892010.png', 'KARTU_KELUARGA-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'RAPORT-011222-2022-1669892010.png', 'KARTU_KELUARGA-011222-2022-1669892010.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemweb`
--

CREATE TABLE `tbl_pemweb` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `unit4el4` int(11) NOT NULL,
  `unit5el1` int(11) NOT NULL,
  `unit5el2` int(11) NOT NULL,
  `unit5el3` int(11) NOT NULL,
  `unit6el1` int(11) NOT NULL,
  `unit6el2` int(11) NOT NULL,
  `unit7el1` int(11) NOT NULL,
  `unit7el2` int(11) NOT NULL,
  `unit8el1` int(11) NOT NULL,
  `unit8el2` int(11) NOT NULL,
  `unit9el1` int(11) NOT NULL,
  `unit9el2` int(11) NOT NULL,
  `unit9el3` int(11) NOT NULL,
  `unit10el1` int(11) NOT NULL,
  `unit10el2` int(11) NOT NULL,
  `unit11el1` int(11) NOT NULL,
  `unit11el2` int(11) NOT NULL,
  `unit11el3` int(11) NOT NULL,
  `unit11el4` int(11) NOT NULL,
  `unit11el5` int(11) NOT NULL,
  `unit12el1` int(11) NOT NULL,
  `unit12el2` int(11) NOT NULL,
  `unit12el3` int(11) NOT NULL,
  `unit12el4` int(11) NOT NULL,
  `unit12el5` int(11) NOT NULL,
  `unit12el6` int(11) NOT NULL,
  `unit12el7` int(11) NOT NULL,
  `unit12el8` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL,
  `buktiunit4el4` varchar(255) NOT NULL,
  `buktiunit5el1` varchar(255) NOT NULL,
  `buktiunit5el2` varchar(255) NOT NULL,
  `buktiunit5el3` varchar(255) NOT NULL,
  `buktiunit6el1` varchar(255) NOT NULL,
  `buktiunit6el2` varchar(255) NOT NULL,
  `buktiunit7el1` varchar(255) NOT NULL,
  `buktiunit7el2` varchar(255) NOT NULL,
  `buktiunit8el1` varchar(255) NOT NULL,
  `buktiunit8el2` varchar(255) NOT NULL,
  `buktiunit9el1` varchar(255) NOT NULL,
  `buktiunit9el2` varchar(255) NOT NULL,
  `buktiunit9el3` varchar(255) NOT NULL,
  `buktiunit10el1` varchar(255) NOT NULL,
  `buktiunit10el2` varchar(255) NOT NULL,
  `buktiunit11el1` varchar(255) NOT NULL,
  `buktiunit11el2` varchar(255) NOT NULL,
  `buktiunit11el3` varchar(255) NOT NULL,
  `buktiunit11el4` varchar(255) NOT NULL,
  `buktiunit11el5` varchar(255) NOT NULL,
  `buktiunit12el1` varchar(255) NOT NULL,
  `buktiunit12el2` varchar(255) NOT NULL,
  `buktiunit12el3` varchar(255) NOT NULL,
  `buktiunit12el4` varchar(255) NOT NULL,
  `buktiunit12el5` varchar(255) NOT NULL,
  `buktiunit12el6` varchar(255) NOT NULL,
  `buktiunit12el7` varchar(255) NOT NULL,
  `buktiunit12el8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengoperasianaplikasi`
--

CREATE TABLE `tbl_pengoperasianaplikasi` (
  `id_unit` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `unit1el1` int(11) NOT NULL,
  `unit1el2` int(11) NOT NULL,
  `unit1el3` int(11) NOT NULL,
  `unit1el4` int(11) NOT NULL,
  `unit1el5` int(11) NOT NULL,
  `unit2el1` int(11) NOT NULL,
  `unit2el2` int(11) NOT NULL,
  `unit2el3` int(11) NOT NULL,
  `unit3el1` int(11) NOT NULL,
  `unit3el2` int(11) NOT NULL,
  `unit3el3` int(11) NOT NULL,
  `unit3el4` int(11) NOT NULL,
  `unit4el1` int(11) NOT NULL,
  `unit4el2` int(11) NOT NULL,
  `unit4el3` int(11) NOT NULL,
  `unit4el4` int(11) NOT NULL,
  `unit4el5` int(11) NOT NULL,
  `buktiunit1el1` varchar(255) NOT NULL,
  `buktiunit1el2` varchar(255) NOT NULL,
  `buktiunit1el3` varchar(255) NOT NULL,
  `buktiunit1el4` varchar(255) NOT NULL,
  `buktiunit1el5` varchar(255) NOT NULL,
  `buktiunit2el1` varchar(255) NOT NULL,
  `buktiunit2el2` varchar(255) NOT NULL,
  `buktiunit2el3` varchar(255) NOT NULL,
  `buktiunit3el1` varchar(255) NOT NULL,
  `buktiunit3el2` varchar(255) NOT NULL,
  `buktiunit3el3` varchar(255) NOT NULL,
  `buktiunit3el4` varchar(255) NOT NULL,
  `buktiunit4el1` varchar(255) NOT NULL,
  `buktiunit4el2` varchar(255) NOT NULL,
  `buktiunit4el3` varchar(255) NOT NULL,
  `buktiunit4el4` varchar(255) NOT NULL,
  `buktiunit4el5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `ket_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `ket_pengumuman`, `tgl_pengumuman`) VALUES
(1, '<html>\n<head>\n	<title></title>\n</head>\n<body>\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Keterangan :</u></strong></span></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;1.&nbsp;Registrasi daftar ulang dilaksanakan pada tanggal 8 &ndash; 11 Juli 2021&nbsp;pukul 08.00 &ndash; 14.00.</span></span></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;2. Mencetak dan membawa Surat Pengumuman ini sebagai bukti&nbsp; lulus seleksi.</span></span></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp; &nbsp; &nbsp; &nbsp; 3.&nbsp;Membawa materi Rp. 6000,- sebanyak 2 lembar.</span></span></span></span></p>\n</body>\n</html>\n', '2021-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(60) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `id_user`, `id_siswa`, `no_pendaftaran`, `pesan`, `waktu`) VALUES
(31, 1, 127, '2022-1643539213', 'tess', '2022-01-30 11:43:43'),
(32, 1, 127, '2022-1643539213', 'hai', '2022-01-30 17:46:24'),
(33, 1, 127, '2022-1643539213', 'halo', '2022-01-30 11:50:02'),
(34, 1, 127, '2022-1643539213', 'woiii', '2022-01-30 17:51:39'),
(35, 1, 127, '2022-1643539213', 'test waktu gais', '2022-01-30 17:53:46'),
(36, 1, 129, '2022-1644079912', 'Halo azkazikna selamat kamu telah diterima sebagai calon asesi LSP SMK Plus pelita nusantara untuk jadwalnya besok kamu datang pukul 22.00 WIB memakai seragam pemuda pancasila', '2022-02-06 15:27:49'),
(37, 1, 129, '2022-1644079912', 'h', '2022-02-06 16:30:01'),
(39, 1, 129, '2022-1644079912', 'halo', '2022-02-06 16:48:08'),
(45, 1, 147, '2022-1644145854', 'halo', '2022-02-07 10:51:12'),
(46, 1, 147, '2022-1644145854', 'a', '2022-02-07 10:53:39'),
(47, 1, 147, '2022-1644145854', 'halo azka ini asesor lsp nusantara gaming', '2022-02-07 11:04:51'),
(48, 1, 147, '2022-1644145854', 'Halo Azkazikna, ini aku LSP Nusantara gaming besok pake baju seragam putih abu dan bawa sapa arahman ya', '2022-02-07 11:06:31'),
(49, 1, 155, '2022-1644151746', 'Atiyahhh gua kangen banget sama lu nanti hari rabu kita ketemu ya trs kita pulang barengg. Jangan lupa mo jajanin gua, gua mau sop duren.', '2022-02-07 11:11:11'),
(50, 1, 155, '2022-1644151746', 'ti gua mau curhat, gua cape anjay jadi asesor', '2022-02-07 11:18:37'),
(51, 11, 157, '2022-1644211498', 'hai lagi test', '2022-02-08 20:16:36'),
(52, 11, 154, '2022-1644150727', 'hai lagi test', '2022-02-08 20:16:58'),
(53, 1, 166, '2022-1645874897', 'hai bujang', '2022-02-26 18:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signature`
--

CREATE TABLE `tbl_signature` (
  `id_signature` int(11) NOT NULL,
  `no_pendaftaran` varchar(110) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_signature`
--

INSERT INTO `tbl_signature` (`id_signature`, `no_pendaftaran`, `img`) VALUES
(42, '2022-1643512651', 'signature-image/61f6041ee77e4.png'),
(43, '2022-1643539213', 'signature-image/61f66bb6d9469.png'),
(44, '2022-1644079912', 'signature-image/61feac7d0cfe9.png'),
(45, '2022-1644397018', 'signature-image/62038239984f7.png'),
(46, '2022-1645873418', 'signature-image/621a0daf0fc38.png'),
(47, '2022-1645874897', 'signature-image/621a0f411835b.png'),
(48, '2022-1645927631', 'signature-image/621add4bdb2c2.png'),
(49, '2022-1669892010', 'signature-image/638888daef526.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(100) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `pd_terakhir` varchar(155) NOT NULL,
  `kebangsaan` varchar(255) NOT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `alamat_siswa` text DEFAULT NULL,
  `jenis_tinggal` varchar(100) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `kab` varchar(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `email` varchar(155) NOT NULL,
  `id_komp` int(10) DEFAULT NULL,
  `tgl_siswa` date DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL,
  `kartu_pelajar` varchar(255) NOT NULL,
  `raport` varchar(255) NOT NULL,
  `kartu_keluarga` varchar(255) NOT NULL,
  `pas_photo` varchar(255) NOT NULL,
  `sertifikat_pendukung` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(155) NOT NULL,
  `jabatan` varchar(155) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `no_telp_perusahaan` varchar(155) NOT NULL,
  `no_fax` varchar(155) NOT NULL,
  `email_perusahaan` varchar(155) NOT NULL,
  `tujuan_asesmen` varchar(155) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `nama_asesor` varchar(255) DEFAULT NULL,
  `tgl_asesor` date DEFAULT NULL,
  `ttd_asesor` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `no_pendaftaran`, `password`, `nis`, `nisn`, `nik`, `nama_lengkap`, `jk`, `pd_terakhir`, `kebangsaan`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat_siswa`, `jenis_tinggal`, `desa`, `kec`, `kab`, `prov`, `kode_pos`, `no_hp_siswa`, `email`, `id_komp`, `tgl_siswa`, `status_verifikasi`, `status_pendaftaran`, `kartu_pelajar`, `raport`, `kartu_keluarga`, `pas_photo`, `sertifikat_pendukung`, `nama_perusahaan`, `jabatan`, `alamat_perusahaan`, `no_telp_perusahaan`, `no_fax`, `email_perusahaan`, `tujuan_asesmen`, `status`, `nama_asesor`, `tgl_asesor`, `ttd_asesor`) VALUES
(166, '2022-1645874897', '3523453242', '2022-16458', '3523453242', '0025726493874657', 'Azkazikna Ageung Laksana', 'Laki-Laki', '3', 'Warga Negara Indonesia', 'Bogor', '01-01-1990', NULL, 'Blablablabalba Bogor', '1', 'Tlajung Udik', 'Gunung Putri', 'Bogor', 'Jawa Barat', '2555', '081314697305', 'azkazikna.aal@gmail.com', 5, '2022-02-26', NULL, NULL, 'KARTU_PELAJAR-260222-2022-1645874897.png', 'RAPORT-260222-2022-1645874897.png', 'KARTU_KELUARGA-260222-2022-1645874897.png', 'PAS_PHOTO-260222-2022-1645874897.jpg', 'SERTIFIKAT_PENDUKUNG-260222-2022-1645874897.jpg', 'azkazikna.aal@gmail.com', 'azkazikna.aal@gmail.com', 'Bogor', 'Azka Corp', 'Azka Corp', 'azkazikna.aal@gmail.com', 'Sertifikasi', 0, NULL, NULL, NULL),
(167, '2022-1645927631', '3523453242', '2022-16459', '3523453242', '0025726493874657', 'Azkazikna Ageung Laksana', 'Laki-Laki', '1', 'Warga Negara Indonesia', 'Bogor', '01-01-1990', NULL, 'Blablablabalba Bogor', '1', 'Tlajung Udik', 'Gunung Putri', 'Bogor', 'Jawa Barat', '2555', '081314697305', 'azkazikna.aal@gmail.com', 9, '2022-02-27', '1', 'lulus', 'KARTU_PELAJAR-270222-2022-1645927631.rar', 'RAPORT-270222-2022-1645927631.png', 'KARTU_KELUARGA-270222-2022-1645927631.png', 'PAS_PHOTO-270222-2022-1645927631.jpg', 'SERTIFIKAT_PENDUKUNG-270222-2022-1645927631.png', 'azkazikna.aal@gmail.com', 'azkazikna.aal@gmail.com', 'Bogor', 'Azka Corp', 'Azka Corp', 'azkazikna.aal@gmail.com', 'Sertifikasi', 0, 'Azka RPL', '2022-02-27', 'signature-image/621af4d0d2496.png'),
(168, '2022-1669892010', '345345', '2022-16698', '345345', 'as', 'Azkazikna Ageung Laksana', 'Laki-Laki', '1', 'sdfsdfs', 'dsfsdf', '01-02-1991', NULL, 'Blablablabalba Bogor', '1', 'Tlajung Udik', 'Gunung Putri', 'Bogor', 'Jawa Barat', '2555', '081314697305', 'azkazikna.aal@gmail.com', 1, '2022-12-01', '1', NULL, 'KARTU_PELAJAR-011222-2022-1669892010.png', 'RAPORT-011222-2022-1669892010.png', 'KARTU_KELUARGA-011222-2022-1669892010.png', 'PAS_PHOTO-011222-2022-1669892010.png', 'SERTIFIKAT_PENDUKUNG-011222-2022-1669892010.png', 'azkazikna.aal@gmail.com', 'azkazikna.aal@gmail.com', 'Bogor', 'Azka Corp', 'Azka Corp', 'azkazikna.aal@gmail.com', 'Sertifikasi', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `kab_sekolah` varchar(100) DEFAULT NULL,
  `ketua_panitia` varchar(100) DEFAULT NULL,
  `nip_ketua` varchar(100) DEFAULT NULL,
  `th_pelajaran` varchar(100) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `kepsek` varchar(100) DEFAULT NULL,
  `nip_kepsek` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `jurusan` varchar(20) NOT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `alamat`, `email`, `website`, `telp`, `kab_sekolah`, `ketua_panitia`, `nip_ketua`, `th_pelajaran`, `no_surat`, `kepsek`, `nip_kepsek`, `level`, `jurusan`, `tgl_daftar`, `foto`, `status`) VALUES
(1, 'lsp', 'lsp', 'LSP SMK PLUS PELITA NUSANTARA', 'Jl. Golf Ciriung Cibinong, Kabupaten Bogor', 'smkpluspnb@gmail.com', 'http://smkpluspnb.sch.id/', '(+62) 821183713168', 'Bogor', 'Azkazikna', '198909153007101112', '2021-2022', '001/MA.11.12/KP.00.02/IV/2021', 'Drs. Asnawi Yanto', '198909153007101112', 'admin', 'SEMUA', '2018-04-12 00:00:00', 'logoshadow.png', 1),
(11, 'rpl', 'rpl', 'Asesor RPL', 'rpl', 'rpl', NULL, 'rpl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asesor', 'RPL', '2022-01-28 18:36:45', 'Azka_(1).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi`
--

CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(10) NOT NULL,
  `isi` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `tgl_verifikasi` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifikasi`
--

INSERT INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
(1, '<html>\n<head>\n	<title></title>\n</head>\n<body>\n<p style=\"margin-left:0in; margin-right:0in\"><u><strong><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">Materi Tes Potensi Akademik</span></span></span></strong></u></p>\n\n<ol>\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">Bahasa Indonesia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">Matematika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">IPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\n	<li><span style=\"font-size:11pt\"><span style=\"line-height:107%\"><span style=\"font-family:Calibri,sans-serif\">PAI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\n</ol>\n\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Hari Tanggal tes : </u></strong></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;tanggal 06&nbsp;Juli 2021</span></span></p>\n\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Waktu Tes potensi Akademik :</u></strong></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 1&nbsp; : 07.00 - 09.00</span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 2&nbsp; : 09.30 - 11.30</span></span></p>\n\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*<em>catatan : </em></span></span></strong><br />\n<strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em>jadwal ujian bisa berubah sewaktu - waktu&nbsp; Update infomasi di web PPDB </em></span></span><em><span style=\"font-size:11.0pt\">peserta ujian datang 15&nbsp; menit sebelum&nbsp;tes dimulai.</span></em></strong></p>\n</body>\n</html>\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `status_ppdb` varchar(30) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `status_ppdb`, `tgl_diubah`) VALUES
(1, 'buka', '2022-01-24 22:03:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_animasi2d`
--
ALTER TABLE `tbl_animasi2d`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_audiovideo`
--
ALTER TABLE `tbl_audiovideo`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_desaingrafis`
--
ALTER TABLE `tbl_desaingrafis`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_desainpercetakan`
--
ALTER TABLE `tbl_desainpercetakan`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_instalasijaringan`
--
ALTER TABLE `tbl_instalasijaringan`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_komp`
--
ALTER TABLE `tbl_komp`
  ADD PRIMARY KEY (`id_komp`);

--
-- Indexes for table `tbl_konfigurasiperangkat`
--
ALTER TABLE `tbl_konfigurasiperangkat`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_konfigurasirouting`
--
ALTER TABLE `tbl_konfigurasirouting`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_pbo`
--
ALTER TABLE `tbl_pbo`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  ADD PRIMARY KEY (`id_pdd`);

--
-- Indexes for table `tbl_pelayananperbankan`
--
ALTER TABLE `tbl_pelayananperbankan`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_pemdas`
--
ALTER TABLE `tbl_pemdas`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_pemweb`
--
ALTER TABLE `tbl_pemweb`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_pengoperasianaplikasi`
--
ALTER TABLE `tbl_pengoperasianaplikasi`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  ADD PRIMARY KEY (`id_signature`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_animasi2d`
--
ALTER TABLE `tbl_animasi2d`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_audiovideo`
--
ALTER TABLE `tbl_audiovideo`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_desaingrafis`
--
ALTER TABLE `tbl_desaingrafis`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_desainpercetakan`
--
ALTER TABLE `tbl_desainpercetakan`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_instalasijaringan`
--
ALTER TABLE `tbl_instalasijaringan`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_komp`
--
ALTER TABLE `tbl_komp`
  MODIFY `id_komp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_konfigurasiperangkat`
--
ALTER TABLE `tbl_konfigurasiperangkat`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_konfigurasirouting`
--
ALTER TABLE `tbl_konfigurasirouting`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pbo`
--
ALTER TABLE `tbl_pbo`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  MODIFY `id_pdd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pelayananperbankan`
--
ALTER TABLE `tbl_pelayananperbankan`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pemdas`
--
ALTER TABLE `tbl_pemdas`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pemweb`
--
ALTER TABLE `tbl_pemweb`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pengoperasianaplikasi`
--
ALTER TABLE `tbl_pengoperasianaplikasi`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  MODIFY `id_signature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  MODIFY `id_verifikasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
