-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 12:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`) VALUES
(1101, '11 RPL', 'rekayasa perangkat lunak'),
(1102, '11 tkj', 'teknik komputer dan jaringan'),
(1103, '11 otkp', 'otomatisasi dan tata kelola perkantoran'),
(1201, '12 RPL', 'rekayasa perangkat lunak'),
(1202, '12 TKJ', 'teknik komputer dan jaringan'),
(1203, '12 OTKP', 'otomatisasi dan tata kelola perkantoran');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(13) NOT NULL,
  `id_petugas` varchar(12) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `bulan_dibayar` varchar(20) NOT NULL,
  `tahun_dibayar` varchar(5) NOT NULL,
  `id_spp` varchar(3) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `id_kelas`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
('pb181218373', '001', '0003332941', 1201, '2021-04-01 12:45:06', 'januari', '2021', '101', 450000),
('pb747010440', '001', '0000099999', 1101, '2021-04-01 17:05:05', 'februari', '2021', '102', 450000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(110) NOT NULL,
  `is_active` int(1) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `is_active`, `nama_petugas`, `level`) VALUES
('001', 'jaehyun', '$2y$10$z/1YqxbjdvVWlh4o/cU9ieSuQu3nAw/BcjvXRRXjWlDmEXUgiS1Ti', 1, 'jung jaehyun', 'admin'),
('002', 'taeyonglee', '$2y$10$PiDeWtgxY.N/4N53ElIBQOVoAlbhVkXFcZX77dnzA6AQ7n0XX3FPy', 1, 'lee taeyong', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `password` varchar(110) NOT NULL,
  `username` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `password`, `username`, `is_active`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0000099999', '10091000', '$2y$10$5VGj1H4D70s9cltyiKNH5O8nPNbi3J9FzB6Fb0lKsKc6hm1VONTqO', 'jenolee01', 1, 'lee jeno', 1101, 'jl.highway', '089729373617', '102'),
('0003332941', '10089000', '$2y$10$VAYR.kMzBDsZiG4cUeu6ae2H2TP5G2t.2TGgGSfOhRSkJwTg1VnS6', 'mayagita', 1, 'Maya gita cahyani', 1202, 'jl.brooklyn', '08123456789', '101');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` varchar(3) NOT NULL,
  `tahunAjaran` varchar(10) NOT NULL,
  `nominal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahunAjaran`, `nominal`) VALUES
('101', '2018/2019', '405000'),
('102', '2019/2020', '450000'),
('103', '2020/2021', '465000'),
('104', '2021/2022', '500000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
