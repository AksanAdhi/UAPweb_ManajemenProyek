-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 12:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
(1, 'Bianka', 2),
(2, 'Taehyung', 2),
(3, 'Jimin', 1);

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
(2, 2, 1, 'SEDANG_DIPROSES'),
(11, 6, 1, 'BELUM_DIMULAI'),
(12, 15, 2, 'SEDANG_DIPROSES');

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
(1, 'Proyek PBO', 'Melatih kemampuan dalam menggunakan Java', '2023-12-16', 100000),
(2, 'Proyek Komdat', 'Agar mampu merakit jaringan wifi', '2023-12-13', 50000),
(3, 'Pengeboran Minyak', 'Mengambil sumber daya alam yang ada', '2030-10-16', 1200000000),
(4, 'Pembangunan Hotel', 'Memajukan kesejahteraan pemilik hotel', '2025-02-13', 750000000),
(5, 'Pembangunan Rumah Sakit', 'Memfasilitasi masyarakat penyakitan', '2026-03-20', 2500000000),
(6, 'Pembangunan apartemen', 'Menyediakan tempat tinggal', '2027-06-15', 9500000000),
(7, 'Pembangunan MRT di Lampung', 'Menyediakan transportasi umum bagi masyarakat Lampung', '2035-05-16', 3500000000000),
(8, 'Pembangunan Stadion JIS', 'Menyediakan stadion nasional bagi masyarakat', '2032-03-10', 4100000000000),
(9, 'Pembangunan Kos', 'Menyediakan tempat tinggal bagi anak kos', '2025-10-11', 500000),
(10, 'Pembangunan Sekolah', 'Membangun sekolah bermutu', '2026-01-12', 145000000),
(12, 'angga yunanda', 'menjadi pacarku', '2025-12-12', 10000),
(13, 'Pembangunan Kontrakan', 'Menyediakan tempat tinggal ', '2024-01-20', 120000000),
(15, 'pembangunan masjid', 'biar bisa sholat', '2024-10-20', 1000000000),
(100, 'bianka', 'ingin menyejahterakan sjdskjskfjskjfskajfkslajf;lsakfaslalala yeyeyeyyeye wohoooooooooooooooooooooooooddddddddddddd', '2023-10-12', 12000),
(72100, 'Huru', 'Membangun rumah makan', '2023-12-10', 10000);

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
(1, 'Vargo', 1),
(2, 'Firewall', 2),
(3, 'Fivey', 13);

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
(1, 2, 'Membangun candi', '2023-12-28', '2023-12-29'),
(2, 3, 'Menyewa alat berat', '2023-12-21', '2023-12-22');

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
  ADD KEY `idTim` (`idTim`);

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
-- AUTO_INCREMENT for table `daftar_jadwal`
--
ALTER TABLE `daftar_jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `daftar_tugas`
--
ALTER TABLE `daftar_tugas`
  MODIFY `idTugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_anggota`
--
ALTER TABLE `daftar_anggota`
  ADD CONSTRAINT `daftar_anggota_ibfk_1` FOREIGN KEY (`idTim`) REFERENCES `daftar_tim` (`idTim`);

--
-- Constraints for table `daftar_jadwal`
--
ALTER TABLE `daftar_jadwal`
  ADD CONSTRAINT `daftar_jadwal_ibfk_1` FOREIGN KEY (`idProyek`) REFERENCES `daftar_proyek` (`id`),
  ADD CONSTRAINT `daftar_jadwal_ibfk_2` FOREIGN KEY (`idTugas`) REFERENCES `daftar_tugas` (`idTugas`);

--
-- Constraints for table `daftar_tim`
--
ALTER TABLE `daftar_tim`
  ADD CONSTRAINT `daftar_tim_ibfk_1` FOREIGN KEY (`idProyek`) REFERENCES `daftar_proyek` (`id`);

--
-- Constraints for table `daftar_tugas`
--
ALTER TABLE `daftar_tugas`
  ADD CONSTRAINT `daftar_tugas_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `daftar_anggota` (`idAnggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
