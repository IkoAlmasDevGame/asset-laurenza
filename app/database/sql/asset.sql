-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 03:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_approve`
--

CREATE TABLE `m_approve` (
  `id_approve` int(11) NOT NULL,
  `kode_kategori` varchar(100) NOT NULL,
  `kode_subkategori` varchar(100) NOT NULL,
  `kode_ruas` varchar(100) NOT NULL,
  `kode_gerbang` varchar(100) NOT NULL,
  `nomer_seri_aset` varchar(100) NOT NULL,
  `merk_aset` varchar(100) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_approve`
--

INSERT INTO `m_approve` (`id_approve`, `kode_kategori`, `kode_subkategori`, `kode_ruas`, `kode_gerbang`, `nomer_seri_aset`, `merk_aset`, `status`) VALUES
(13, '10', '03', '08', '08', '10 - 03 - 08 - 08 - 2022 -001 ', 'jaguar', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `m_gerbang`
--

CREATE TABLE `m_gerbang` (
  `id_gerbang` int(11) NOT NULL,
  `kode_gerbang` varchar(100) NOT NULL,
  `nama_gerbang` varchar(100) NOT NULL,
  `lokasi_gerbang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_gerbang`
--

INSERT INTO `m_gerbang` (`id_gerbang`, `kode_gerbang`, `nama_gerbang`, `lokasi_gerbang`) VALUES
(1, '08', 'banten', 'banten');

-- --------------------------------------------------------

--
-- Table structure for table `m_inventori`
--

CREATE TABLE `m_inventori` (
  `id_inventori` int(11) NOT NULL,
  `nomer_seri_aset` varchar(100) NOT NULL,
  `merk_aset` varchar(100) NOT NULL,
  `tahun_input` varchar(32) NOT NULL,
  `harga_perolehan` varchar(100) NOT NULL,
  `masa_penyusutan_aset` varchar(64) NOT NULL,
  `waktu_penyusutan_aset` varchar(64) NOT NULL,
  `kondisi_aset` varchar(100) NOT NULL,
  `lokasi_aset` varchar(255) NOT NULL,
  `foto_aset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_inventori`
--

INSERT INTO `m_inventori` (`id_inventori`, `nomer_seri_aset`, `merk_aset`, `tahun_input`, `harga_perolehan`, `masa_penyusutan_aset`, `waktu_penyusutan_aset`, `kondisi_aset`, `lokasi_aset`, `foto_aset`) VALUES
(3, '10 - 03 - 08 - 08 - 2022 -001', 'jaguar', '2023', '4000000', '4', '8', 'sangat bagus', 'https://goo.gl/maps/7W4XRsYk3efm25Fx7', 'Capture.png');

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kode_kategori` varchar(100) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(1, '10', 'kendaraan');

-- --------------------------------------------------------

--
-- Table structure for table `m_kodefikasi`
--

CREATE TABLE `m_kodefikasi` (
  `id_kodefikasi` int(11) NOT NULL,
  `kode_kategori` varchar(100) NOT NULL,
  `kode_subkategori` varchar(100) NOT NULL,
  `kode_ruas` varchar(100) NOT NULL,
  `kode_gerbang` varchar(100) NOT NULL,
  `tahun_input` varchar(32) NOT NULL,
  `nomer_seri_aset` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_kodefikasi`
--

INSERT INTO `m_kodefikasi` (`id_kodefikasi`, `kode_kategori`, `kode_subkategori`, `kode_ruas`, `kode_gerbang`, `tahun_input`, `nomer_seri_aset`) VALUES
(4, '10', '03', '08', '08', '2022', '10 - 03 - 08 - 08 - 2022 -001 '),
(5, '10', '03', '09', '08', '2023', '10 - 03 - 09 - 08 - 2023 - 002');

-- --------------------------------------------------------

--
-- Table structure for table `m_ruas`
--

CREATE TABLE `m_ruas` (
  `id_ruas` int(11) NOT NULL,
  `kode_ruas` varchar(100) NOT NULL,
  `nama_ruas` varchar(200) NOT NULL,
  `panjang_ruas` varchar(200) NOT NULL,
  `lokasi_ruas` varchar(100) NOT NULL,
  `jumlah_ruas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_ruas`
--

INSERT INTO `m_ruas` (`id_ruas`, `kode_ruas`, `nama_ruas`, `panjang_ruas`, `lokasi_ruas`, `jumlah_ruas`) VALUES
(1, '08', 'tebing tinggi ', '15000', 'sumatra utara', '2'),
(2, '09', 'jorss', '15000', 'jakarta', '2');

-- --------------------------------------------------------

--
-- Table structure for table `m_subkategori`
--

CREATE TABLE `m_subkategori` (
  `id_subkategori` int(11) NOT NULL,
  `kode_subkategori` varchar(100) NOT NULL,
  `nama_subkategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_subkategori`
--

INSERT INTO `m_subkategori` (`id_subkategori`, `kode_subkategori`, `nama_subkategori`) VALUES
(1, '03', 'genset');

-- --------------------------------------------------------

--
-- Table structure for table `user_cabang`
--

CREATE TABLE `user_cabang` (
  `id_user_cabang` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` varchar(200) NOT NULL,
  `bagian` varchar(200) DEFAULT NULL,
  `operasional` varchar(200) DEFAULT NULL,
  `cabang` varchar(200) DEFAULT NULL,
  `telpone` varchar(16) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `onCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `onUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cabang`
--

INSERT INTO `user_cabang` (`id_user_cabang`, `userEmail`, `username`, `password`, `user_level`, `bagian`, `operasional`, `cabang`, `telpone`, `foto`, `onCreated`, `onUpdated`) VALUES
(1, 'admin@gmail.com', 'AdminPusat', 'admin1234', 'Administrator', 'divisi', NULL, NULL, '0123456789', 'default.jfif', '2023-09-02 23:42:27', '2023-09-11 08:30:58'),
(2, 'supervisor@gmail.com', 'VicePresident', 'supervisor', 'Vice President', 'divisi', 'IT', NULL, '0123456789', 'default.jfif', '2023-09-03 03:09:32', '2023-09-08 08:09:06'),
(3, 'staff@gmail.com', 'staffJakarta', 'staffJakarta', 'Staff', 'Cabang', '', 'ATP', '0123456789', 'Capture.JPG', '2023-09-03 03:23:22', '2023-09-11 07:47:00'),
(4, 'manager@gmail.com', 'manager', 'manager', 'Manager', 'divisi', NULL, '', '0123456789', 'default.jfif', '2023-09-06 10:35:56', '2023-09-11 08:27:47'),
(5, 'stafflampung@gmail.com', 'lampung', 'lampung', 'Staff', 'Cabang', '', 'bakter', '123456789', 'default.jfif', '2023-09-11 08:32:43', '2023-09-11 08:33:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_approve`
--
ALTER TABLE `m_approve`
  ADD PRIMARY KEY (`id_approve`);

--
-- Indexes for table `m_gerbang`
--
ALTER TABLE `m_gerbang`
  ADD PRIMARY KEY (`id_gerbang`);

--
-- Indexes for table `m_inventori`
--
ALTER TABLE `m_inventori`
  ADD PRIMARY KEY (`id_inventori`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `m_kodefikasi`
--
ALTER TABLE `m_kodefikasi`
  ADD PRIMARY KEY (`id_kodefikasi`);

--
-- Indexes for table `m_ruas`
--
ALTER TABLE `m_ruas`
  ADD PRIMARY KEY (`id_ruas`);

--
-- Indexes for table `m_subkategori`
--
ALTER TABLE `m_subkategori`
  ADD PRIMARY KEY (`id_subkategori`);

--
-- Indexes for table `user_cabang`
--
ALTER TABLE `user_cabang`
  ADD PRIMARY KEY (`id_user_cabang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_approve`
--
ALTER TABLE `m_approve`
  MODIFY `id_approve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `m_gerbang`
--
ALTER TABLE `m_gerbang`
  MODIFY `id_gerbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_inventori`
--
ALTER TABLE `m_inventori`
  MODIFY `id_inventori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_kodefikasi`
--
ALTER TABLE `m_kodefikasi`
  MODIFY `id_kodefikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_ruas`
--
ALTER TABLE `m_ruas`
  MODIFY `id_ruas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_subkategori`
--
ALTER TABLE `m_subkategori`
  MODIFY `id_subkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_cabang`
--
ALTER TABLE `user_cabang`
  MODIFY `id_user_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
