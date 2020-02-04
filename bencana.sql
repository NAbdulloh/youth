-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 03:14 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `korban`
--

CREATE TABLE `korban` (
  `id_korban` int(9) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `usia` int(3) NOT NULL,
  `id_petugas` int(9) DEFAULT NULL,
  `penyakit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korban`
--

INSERT INTO `korban` (`id_korban`, `nama`, `jenis_kelamin`, `usia`, `id_petugas`, `penyakit`) VALUES
(1, 'Nabhan Faisal', 'Laki-laki', 67, NULL, ''),
(2, 'Nassharih Abdulloh', 'Laki-laki', 54, NULL, ''),
(3, 'indra ', 'Perempuan', 34, 1, ''),
(4, 'Nugi Auu', 'Laki-laki', 34, 2, ''),
(5, 'Rio Kiyoshi', 'Laki-laki', 44, 2, ''),
(6, 'Gita', 'Perempuan', 15, 2, ''),
(7, 'Alexander', 'Laki-laki', 20, 1, ''),
(8, 'bUBUB', 'Laki-laki', 12, 1, ''),
(10, 'coba', 'Laki-laki', 11, 2, ''),
(11, 'ann', 'Laki-laki', 23, 2, ''),
(12, 'svds', 'Laki-laki', 3, 2, ''),
(13, 'eqw', 'Laki-laki', 2, 2, ''),
(14, 'bebe', 'Laki-laki', 2, 2, ''),
(15, 'DDD', 'Laki-laki', 23, 2, ''),
(16, 'aD', 'Laki-laki', 22, 2, ''),
(17, 'Coba Diare', 'Laki-laki', 32, 2, ''),
(18, 'Coba DBD', 'Perempuan', 43, 2, ''),
(19, 'Coba Malaria', 'Laki-laki', 12, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(30) DEFAULT NULL,
  `jum_makanan` int(255) DEFAULT NULL,
  `id_krb` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `jum_makanan`, `id_krb`) VALUES
(1, 'Beras', 105, NULL),
(2, 'Susu', 12, NULL),
(3, 'Mie Instan', 18, NULL),
(4, 'Air Mineral', 16, NULL),
(5, 'Roti', 24, NULL),
(6, 'Bubur', 30, NULL),
(7, 'Gula', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `id_krbn` int(9) DEFAULT NULL,
  `id_pnykt` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(30) DEFAULT NULL,
  `jum_obat` int(255) DEFAULT NULL,
  `id_krban` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jum_obat`, `id_krban`) VALUES
(1, 'Paracetamol', 30, NULL),
(2, 'Antalgin', 27, NULL),
(3, 'Antasida', 30, NULL),
(4, 'Amoxilin', 30, NULL),
(5, 'Betadine', 30, NULL),
(6, 'Dexa', 20, NULL),
(7, 'Suplemen', 30, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id_pakaian` int(10) NOT NULL,
  `jenis_pakaian` varchar(20) DEFAULT NULL,
  `nama_pakaian` varchar(30) DEFAULT NULL,
  `jum_pakaian` int(255) DEFAULT NULL,
  `id_korban` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id_pakaian`, `jenis_pakaian`, `nama_pakaian`, `jum_pakaian`, `id_korban`) VALUES
(1, 'Pria', 'Jaket', 102, NULL),
(2, 'Pria', 'Kaos Pria', 45, NULL),
(3, 'Pria', 'Celana Pria', 78, NULL),
(4, 'Pria', 'Pakasian Dalam Pria', 103, NULL),
(5, 'Wanita', 'Kaos Wanita', 15, NULL),
(6, 'Wanita', 'Celana Wanita', 27, NULL),
(7, 'Wanita', 'Pakaian Dalam Wanita', 10, NULL),
(8, 'Wanita', 'Pembalut', 10, NULL),
(9, 'anakBayi', 'Kaos Anak', 10, NULL),
(10, 'anakBayi', 'Popok Bayi', 10, NULL),
(11, 'anakBayi', 'mpeng', 16, NULL),
(12, 'lain', 'Selimut', 10, NULL),
(13, 'lain', 'Alat mandi', 10, NULL),
(14, 'lain', 'Alat Sholat', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(9) NOT NULL,
  `gejala_awal` varchar(25) DEFAULT NULL,
  `gejala_kedua` varchar(12) DEFAULT NULL,
  `penyakit` varchar(25) DEFAULT NULL,
  `id_korban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `gejala_awal`, `gejala_kedua`, `penyakit`, `id_korban`) VALUES
(1, 'Demam', 'MKkuning', 'Positif Malaria', 1),
(2, '', 'lain', 'Tidak Sakit', 2),
(3, 'Demam', 'bintik', 'Positif DBD', 3),
(4, 'Demam', 'MKkuning', 'Positif Malaria', 4),
(5, 'Demam', 'bintik', 'Positif DBD', 5),
(6, 'Demam', 'nyeri', 'Positif Diare', 6),
(7, '', 'lain', 'Tidak Sakit', 7),
(8, 'Demam', 'nyeri', 'Positif Diare', 8),
(10, 'Demam', 'nyeri', 'Positif Diare', 10),
(11, 'Demam', 'nyeri', 'Positif Diare', 11),
(12, 'Demam', 'bintik', 'Positif DBD', 12),
(13, 'Demam', 'MKkuning', 'Positif Malaria', 13),
(14, 'Demam', 'nyeri', 'Positif Diare', 14),
(15, 'Demam', 'bintik', 'Positif DBD', 15),
(16, 'Demam', 'nyeri', 'Positif Diare', 16),
(17, 'Demam', 'nyeri', 'Positif Diare', 17),
(18, 'Demam', 'bintik', 'Positif DBD', 18),
(19, 'Demam', 'MKkuning', 'Positif Malaria', 19);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(9) NOT NULL,
  `nama_petugas` varchar(12) DEFAULT NULL,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(1, 'nabhan faisa', 'nabhan', 'nabhan30'),
(2, 'Nassharih Ab', 'abdul', 'abdul123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`id_korban`),
  ADD KEY `FK_ptgs` (`id_petugas`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `FK_krb` (`id_krb`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD KEY `FK_krbn` (`id_krbn`),
  ADD KEY `FK_pnykt` (`id_pnykt`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `FK_krban` (`id_krban`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id_pakaian`),
  ADD KEY `FK_korban` (`id_korban`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korban`
--
ALTER TABLE `korban`
  MODIFY `id_korban` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id_pakaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korban`
--
ALTER TABLE `korban`
  ADD CONSTRAINT `FK_ptgs` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `FK_krb` FOREIGN KEY (`id_krb`) REFERENCES `korban` (`id_korban`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `FK_krbn` FOREIGN KEY (`id_krbn`) REFERENCES `korban` (`id_korban`),
  ADD CONSTRAINT `FK_pnykt` FOREIGN KEY (`id_pnykt`) REFERENCES `penyakit` (`id_penyakit`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `FK_krban` FOREIGN KEY (`id_krban`) REFERENCES `korban` (`id_korban`);

--
-- Constraints for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD CONSTRAINT `FK_korban` FOREIGN KEY (`id_korban`) REFERENCES `korban` (`id_korban`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
