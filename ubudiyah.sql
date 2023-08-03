-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 08:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubudiyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pelanggaran`
--

CREATE TABLE `tb_jenis_pelanggaran` (
  `ID_PELANGGARAN` int(11) NOT NULL,
  `NAMA_PELANGGARAN` varchar(200) DEFAULT NULL,
  `SANKSI` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jenis_pelanggaran`
--

INSERT INTO `tb_jenis_pelanggaran` (`ID_PELANGGARAN`, `NAMA_PELANGGARAN`, `SANKSI`) VALUES
(1, 'TIDAK PAKAI JUBAH', 'MENULIS AL-FATIH 1000X'),
(2, 'TIDAK TAHAJJUD', 'PUSH UP 1000X');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengontrol`
--

CREATE TABLE `tb_pengontrol` (
  `ID_PENGONTROL` int(11) NOT NULL,
  `NAMA_PENGONTROL` varchar(200) DEFAULT NULL,
  `DAERAH_KONTROL` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengontrol`
--

INSERT INTO `tb_pengontrol` (`ID_PENGONTROL`, `NAMA_PENGONTROL`, `DAERAH_KONTROL`) VALUES
(1, 'ANZORI', 'DAERAH SUNAN KALIJOGO'),
(3, 'SAIPUL', 'SUNAN BONANG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurusan_skor`
--

CREATE TABLE `tb_pengurusan_skor` (
  `ID_PENGURUSAN` int(11) NOT NULL,
  `ID_PELANGGARAN` int(11) DEFAULT NULL,
  `ID_SANTRI` int(11) DEFAULT NULL,
  `ID_PENGONTROL` int(11) DEFAULT NULL,
  `PELANGGARAN` varchar(255) DEFAULT NULL,
  `TGL_PENGURUSAN` date DEFAULT NULL,
  `KETERANGAN` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengurusan_skor`
--

INSERT INTO `tb_pengurusan_skor` (`ID_PENGURUSAN`, `ID_PELANGGARAN`, `ID_SANTRI`, `ID_PENGONTROL`, `PELANGGARAN`, `TGL_PENGURUSAN`, `KETERANGAN`) VALUES
(1, 1, 2, 1, 'hfhfjh', '2023-06-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_santri`
--

CREATE TABLE `tb_santri` (
  `ID_SANTRI` int(11) NOT NULL,
  `NAMA_SANTRI` varchar(150) DEFAULT NULL,
  `ASRAMA_SANTRI` varchar(200) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `P_PAGI` varchar(200) DEFAULT NULL,
  `P_SORE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_santri`
--

INSERT INTO `tb_santri` (`ID_SANTRI`, `NAMA_SANTRI`, `ASRAMA_SANTRI`, `ALAMAT`, `P_PAGI`, `P_SORE`) VALUES
(1, 'WAHID ', 'SUNAN KUDUS NO.10', 'BANYUWANGI', 'MTS', 'SMK'),
(2, 'MUZAKKI', 'SUNAN BONANG No.06', 'BANYUWANGI', 'MTS', 'PT SAINTEK'),
(3, 'Zainul Arifin Billah', 'SUNAN KALIJOGO NO. 12', 'BANYUWANGI', 'MI', 'SMP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis_pelanggaran`
--
ALTER TABLE `tb_jenis_pelanggaran`
  ADD PRIMARY KEY (`ID_PELANGGARAN`);

--
-- Indexes for table `tb_pengontrol`
--
ALTER TABLE `tb_pengontrol`
  ADD PRIMARY KEY (`ID_PENGONTROL`);

--
-- Indexes for table `tb_pengurusan_skor`
--
ALTER TABLE `tb_pengurusan_skor`
  ADD PRIMARY KEY (`ID_PENGURUSAN`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_PELANGGARAN`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_SANTRI`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_PENGONTROL`);

--
-- Indexes for table `tb_santri`
--
ALTER TABLE `tb_santri`
  ADD PRIMARY KEY (`ID_SANTRI`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pengurusan_skor`
--
ALTER TABLE `tb_pengurusan_skor`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_PELANGGARAN`) REFERENCES `tb_jenis_pelanggaran` (`ID_PELANGGARAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_SANTRI`) REFERENCES `tb_santri` (`ID_SANTRI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_PENGONTROL`) REFERENCES `tb_pengontrol` (`ID_PENGONTROL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
