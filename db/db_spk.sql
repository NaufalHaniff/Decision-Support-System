-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2025 at 09:33 AM
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
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id3` int(10) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id3`, `nama_alternatif`) VALUES
(2, 'BYD Seal Premium (Extended Range)'),
(8, 'BYD Seal Performance (AWD)'),
(9, 'BYD Atto 3 Advance (Standard Range)'),
(10, 'BYD Atto 3 Superior (Extended Range)'),
(11, 'BYD Dolphin Dynamic (Standard Range)'),
(12, 'BYD Dolphin Premium (Extended Range)'),
(13, 'BYD M6 Standard (7 Seater)'),
(14, 'BYD M6 Superior (7 Seater)'),
(15, 'BYD M6 Superior Captain (6 Seater)'),
(16, 'BYD Sealion 7 Premium (5 Seater)'),
(17, 'BYD Sealion 7 Performance (5 Seater)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id1` int(10) NOT NULL,
  `kode_kriteria` varchar(3) NOT NULL,
  `nama_kriteria` varchar(35) NOT NULL,
  `bobot_kriteria` float NOT NULL,
  `jenis_kriteria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id1`, `kode_kriteria`, `nama_kriteria`, `bobot_kriteria`, `jenis_kriteria`) VALUES
(1, 'C1', 'Kapasitas Baterai (kWh)', 0.2, 'Benefit'),
(2, 'C2', 'Jarak Tempuh per Pengisian (km)', 0.25, 'Benefit'),
(3, 'C3', 'Konsumsi Energi (kWh/100 km)', 0.3, 'Cost'),
(13, 'C4', 'Waktu Pengisian Penuh (menit)', 0.1, 'Cost'),
(14, 'C5', 'Harga Mobil (Rp)', 0.1, 'Cost'),
(15, 'C6', 'Daya Pengisian (kW)', 0.05, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id4` int(10) NOT NULL,
  `id_alternatif` int(10) NOT NULL,
  `id_sub` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id4`, `id_alternatif`, `id_sub`) VALUES
(83, 2, 55),
(84, 2, 66),
(85, 2, 77),
(86, 2, 88),
(87, 2, 99),
(88, 2, 110),
(89, 8, 56),
(90, 8, 67),
(91, 8, 78),
(92, 8, 89),
(93, 8, 100),
(94, 8, 111),
(95, 9, 57),
(96, 9, 68),
(97, 9, 79),
(98, 9, 90),
(99, 9, 101),
(100, 9, 112),
(101, 10, 58),
(102, 10, 69),
(103, 10, 80),
(104, 10, 91),
(105, 10, 102),
(106, 10, 113),
(107, 11, 59),
(108, 11, 70),
(109, 11, 81),
(110, 11, 92),
(111, 11, 103),
(112, 11, 114),
(113, 12, 60),
(114, 12, 71),
(115, 12, 82),
(116, 12, 93),
(117, 12, 104),
(118, 12, 115),
(119, 13, 61),
(120, 13, 72),
(121, 13, 83),
(122, 13, 94),
(123, 13, 105),
(124, 13, 116),
(125, 14, 62),
(126, 14, 73),
(127, 14, 84),
(128, 14, 95),
(129, 14, 106),
(130, 14, 117),
(131, 15, 63),
(132, 15, 74),
(133, 15, 85),
(134, 15, 96),
(135, 15, 107),
(136, 15, 118),
(137, 16, 64),
(138, 16, 75),
(139, 16, 86),
(140, 16, 97),
(141, 16, 108),
(142, 16, 119),
(143, 17, 65),
(144, 17, 76),
(145, 17, 87),
(146, 17, 98),
(147, 17, 109),
(148, 17, 120);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub`
--

CREATE TABLE `tb_sub` (
  `id2` int(10) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `nama_sub` varchar(35) NOT NULL,
  `nilai_sub` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sub`
--

INSERT INTO `tb_sub` (`id2`, `id_kriteria`, `nama_sub`, `nilai_sub`) VALUES
(55, 1, 'Seal Premium (Extended Range)', 82.56),
(56, 1, 'Seal Performance (AWD)', 82.56),
(57, 1, 'Atto 3 Advance (Standard Range)', 49.92),
(58, 1, 'Atto 3 Superior(Extended Range)', 60.48),
(59, 1, 'Dolphin Dynamic (Standard Range)', 44.9),
(60, 1, 'Dolphin Premium (Extended Range)', 60.48),
(61, 1, 'M6 Standard (7 Seater)', 55.4),
(62, 1, 'M6 Superior (7 Seater)', 71.8),
(63, 1, 'M6 Superior Captain (6 Seater)', 71.8),
(64, 1, 'Sealion 7 Premium (5 Seater', 82.56),
(65, 1, 'Sealion 7 Performance (5 Seater', 82.56),
(66, 2, 'Seal Premium (Extended Range)', 650),
(67, 2, 'Seal Performance (AWD)', 580),
(68, 2, 'Atto 3 Advance (Standard Range)', 410),
(69, 2, 'Atto 3 Superior(Extended Range)', 480),
(70, 2, 'Dolphin Dynamic (Standard Range)', 410),
(71, 2, 'Dolphin Premium (Extended Range)', 490),
(72, 2, 'M6 Standard (7 Seater)', 420),
(73, 2, 'M6 Superior (7 Seater)', 530),
(74, 2, 'M6 Superior Captain (6 Seater)', 530),
(75, 2, 'Sealion 7 Premium (5 Seater', 567),
(76, 2, 'Sealion 7 Performance (5 Seater', 542),
(77, 3, 'Seal Premium (Extended Range)', 17.3),
(78, 3, 'Seal Performance (AWD)', 17.3),
(79, 3, 'Atto 3 Advance (Standard Range)', 13.8),
(80, 3, 'Atto 3 Superior(Extended Range)', 13.8),
(81, 3, 'Dolphin Dynamic (Standard Range)', 13.2),
(82, 3, 'Dolphin Premium (Extended Range)', 13.2),
(83, 3, 'M6 Standard (7 Seater)', 13),
(84, 3, 'M6 Superior (7 Seater)', 13),
(85, 3, 'M6 Superior Captain (6 Seater)', 13),
(86, 3, 'Sealion 7 Premium (5 Seater', 14.8),
(87, 3, 'Sealion 7 Performance (5 Seater', 14.8),
(88, 13, 'Seal Premium (Extended Range)', 35),
(89, 13, 'Seal Performance (AWD)', 35),
(90, 13, 'Atto 3 Advance (Standard Range)', 40),
(91, 13, 'Atto 3 Superior(Extended Range)', 45),
(92, 13, 'Dolphin Dynamic (Standard Range)', 40),
(93, 13, 'Dolphin Premium (Extended Range)', 40),
(94, 13, 'M6 Standard (7 Seater)', 45),
(95, 13, 'M6 Superior (7 Seater)', 40),
(96, 13, 'M6 Superior Captain (6 Seater)', 40),
(97, 13, 'Sealion 7 Premium (5 Seater', 35),
(98, 13, 'Sealion 7 Performance (5 Seater', 35),
(99, 14, 'Seal Premium (Extended Range)', 639),
(100, 14, 'Seal Performance (AWD)', 750),
(101, 14, 'Atto 3 Advance (Standard Range)', 470),
(102, 14, 'Atto 3 Superior(Extended Range)', 520),
(103, 14, 'Dolphin Dynamic (Standard Range)', 369),
(104, 14, 'Dolphin Premium (Extended Range)', 429),
(105, 14, 'M6 Standard (7 Seater)', 383),
(106, 14, 'M6 Superior (7 Seater)', 423),
(107, 14, 'M6 Superior Captain (6 Seater)', 433),
(108, 14, 'Sealion 7 Premium (5 Seater', 629),
(109, 14, 'Sealion 7 Performance (5 Seater', 719),
(110, 15, 'Seal Premium (Extended Range)', 150),
(111, 15, 'Seal Performance (AWD)', 150),
(112, 15, 'Atto 3 Advance (Standard Range)', 88),
(113, 15, 'Atto 3 Superior(Extended Range)', 88),
(114, 15, 'Dolphin Dynamic (Standard Range)', 60),
(115, 15, 'Dolphin Premium (Extended Range)', 80),
(116, 15, 'M6 Standard (7 Seater)', 89),
(117, 15, 'M6 Superior (7 Seater)', 115),
(118, 15, 'M6 Superior Captain (6 Seater)', 115),
(119, 15, 'Sealion 7 Premium (5 Seater', 150),
(120, 15, 'Sealion 7 Performance (5 Seater', 150);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Naufal', 'admin', '123', 'admin'),
(2, 'Rara', 'konsumen', '123', 'user'),
(17, 'Shienna', 'cro', '12345', 'admin'),
(23, 'faradilla', 'konsumen1', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id3`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id4`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_sub` (`id_sub`);

--
-- Indexes for table `tb_sub`
--
ALTER TABLE `tb_sub`
  ADD PRIMARY KEY (`id2`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id3` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id4` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `tb_sub`
--
ALTER TABLE `tb_sub`
  MODIFY `id2` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD CONSTRAINT `tb_penilaian_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id3`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penilaian_ibfk_2` FOREIGN KEY (`id_sub`) REFERENCES `tb_sub` (`id2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sub`
--
ALTER TABLE `tb_sub`
  ADD CONSTRAINT `tb_sub_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id1`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
