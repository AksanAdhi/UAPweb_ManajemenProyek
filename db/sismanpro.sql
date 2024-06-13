-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 12:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sismanpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_anggota`
--

CREATE TABLE `akun_anggota` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun_anggota`
--

INSERT INTO `akun_anggota` (`username`, `password`) VALUES
('', ''),
('2211679', 'hgjhkj'),
('adm01', '123'),
('agamfardhan', 'bianka123'),
('ahlan', '123'),
('akaru', 'akaru'),
('ananghermansyah', 'ashanti123'),
('anggayunanda', 'shenina123'),
('b', 'b'),
('bianka', 'bianka'),
('biw', 'biw'),
('chen', 'chen'),
('irma', 'irma'),
('mas', 'mas'),
('rapal123', 'rapal123'),
('rennyhandayani', 'renny1208'),
('trio', 'trio');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_anggota`
--

CREATE TABLE `daftar_anggota` (
  `idAnggota` int(11) NOT NULL,
  `namaAnggota` varchar(255) NOT NULL,
  `idTim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_anggota`
--

INSERT INTO `daftar_anggota` (`idAnggota`, `namaAnggota`, `idTim`) VALUES
(19, 'Mitha', 5),
(20, 'Nca', 6),
(21, 'Serrendie', 7);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_jadwal`
--

CREATE TABLE `daftar_jadwal` (
  `idJadwal` int(11) NOT NULL,
  `idProyek` int(11) DEFAULT NULL,
  `idTugas` int(11) DEFAULT NULL,
  `statusTugas` enum('BELUM_DIMULAI','SEDANG_DIPROSES','SELESAI','TERTUNDA') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_jadwal`
--

INSERT INTO `daftar_jadwal` (`idJadwal`, `idProyek`, `idTugas`, `statusTugas`) VALUES
(14, 16, 4, 'BELUM_DIMULAI'),
(15, 16, 4, 'BELUM_DIMULAI'),
(16, 15, 4, 'SEDANG_DIPROSES');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_proyek`
--

CREATE TABLE `daftar_proyek` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tujuan` text NOT NULL,
  `tenggat_waktu` date NOT NULL,
  `anggaran` bigint(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_proyek`
--

INSERT INTO `daftar_proyek` (`id`, `nama`, `tujuan`, `tenggat_waktu`, `anggaran`) VALUES
(15, 'Kantin Ilmu Komputer', 'Kasian anak ilkomp jajan di fkip', '2024-06-22', 24234),
(16, 'Mushola FMIPA', 'Biar bisa sholat', '2024-06-22', 345000);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tim`
--

CREATE TABLE `daftar_tim` (
  `idTim` int(11) NOT NULL,
  `namaTim` varchar(255) DEFAULT NULL,
  `idProyek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_tim`
--

INSERT INTO `daftar_tim` (`idTim`, `namaTim`, `idProyek`) VALUES
(5, 'Kosmilenial', 15),
(6, 'Hallistic', 16),
(7, 'Pancaindra', 16);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tugas`
--

CREATE TABLE `daftar_tugas` (
  `idTugas` int(11) NOT NULL,
  `idAnggota` int(11) DEFAULT NULL,
  `namaTugas` varchar(255) DEFAULT NULL,
  `tanggalMulai` date DEFAULT NULL,
  `tanggalSelesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_tugas`
--

INSERT INTO `daftar_tugas` (`idTugas`, `idAnggota`, `namaTugas`, `tanggalMulai`, `tanggalSelesai`) VALUES
(4, 21, 'Membeli material', '2024-06-20', '2024-06-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_anggota`
--
ALTER TABLE `akun_anggota`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `daftar_anggota`
--
ALTER TABLE `daftar_anggota`
  ADD PRIMARY KEY (`idAnggota`),
  ADD KEY `daftar_anggota_ibfk_1` (`idTim`);

--
-- Indexes for table `daftar_jadwal`
--
ALTER TABLE `daftar_jadwal`
  ADD PRIMARY KEY (`idJadwal`),
  ADD KEY `idProyek` (`idProyek`),
  ADD KEY `idTugas` (`idTugas`);

--
-- Indexes for table `daftar_proyek`
--
ALTER TABLE `daftar_proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_tim`
--
ALTER TABLE `daftar_tim`
  ADD PRIMARY KEY (`idTim`),
  ADD KEY `idProyek` (`idProyek`);

--
-- Indexes for table `daftar_tugas`
--
ALTER TABLE `daftar_tugas`
  ADD PRIMARY KEY (`idTugas`),
  ADD KEY `idAnggota` (`idAnggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_anggota`
--
ALTER TABLE `daftar_anggota`
  MODIFY `idAnggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `daftar_jadwal`
--
ALTER TABLE `daftar_jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `daftar_proyek`
--
ALTER TABLE `daftar_proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `daftar_tim`
--
ALTER TABLE `daftar_tim`
  MODIFY `idTim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `daftar_tugas`
--
ALTER TABLE `daftar_tugas`
  MODIFY `idTugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_anggota`
--
ALTER TABLE `daftar_anggota`
  ADD CONSTRAINT `daftar_anggota_ibfk_1` FOREIGN KEY (`idTim`) REFERENCES `daftar_tim` (`idTim`) ON DELETE CASCADE;

--
-- Constraints for table `daftar_jadwal`
--
ALTER TABLE `daftar_jadwal`
  ADD CONSTRAINT `daftar_jadwal_ibfk_1` FOREIGN KEY (`idProyek`) REFERENCES `daftar_proyek` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daftar_jadwal_ibfk_2` FOREIGN KEY (`idTugas`) REFERENCES `daftar_tugas` (`idTugas`) ON DELETE CASCADE;

--
-- Constraints for table `daftar_tim`
--
ALTER TABLE `daftar_tim`
  ADD CONSTRAINT `daftar_tim_ibfk_1` FOREIGN KEY (`idProyek`) REFERENCES `daftar_proyek` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `daftar_tugas`
--
ALTER TABLE `daftar_tugas`
  ADD CONSTRAINT `daftar_tugas_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `daftar_anggota` (`idAnggota`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
