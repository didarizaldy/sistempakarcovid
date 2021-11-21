-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 04:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(1) NOT NULL,
  `fakta` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `fakta`) VALUES
(1, 'Positive'),
(2, 'Negative');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kesimpulan`
--

CREATE TABLE `tb_kesimpulan` (
  `id_kesimpulan` int(1) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `solusi` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kesimpulan`
--

INSERT INTO `tb_kesimpulan` (`id_kesimpulan`, `hasil`, `solusi`) VALUES
(1, 'Terindikasi COVID-19', 'Silahkan Kunjungi Rumah Sakit Rujukan Covid-19'),
(2, 'Tidak Terindikasi COVID-19', 'Anda Tidak Terindikasi COVID-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL,
  `isi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `isi`) VALUES
(1, 'Apakah anda kehilangnya kemampuan mengecap rasa atau mencium aroma ?'),
(2, 'Apakah anda mengalami hidung tersumbat ?'),
(3, 'Apakah anda merasakan mata merah ?'),
(4, 'Apakah anda mengalami sakit tenggorokan ?'),
(5, 'Apakah anda mengalami sakit kepala berkepanjangan ?'),
(6, 'Apakah anda merasakan nyeri otot dan sendi ?'),
(7, 'Apakah anda merasakan ruam pada daerah kulit ?'),
(8, 'Apakah anda mengalami gangguan pencernaan, seperti mual, muntah, atau diare diare ?'),
(9, 'Apakah anda mengalami menggigil ?'),
(10, 'Apakah nafsu makan anda berkurang ?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  ADD PRIMARY KEY (`id_kesimpulan`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kesimpulan`
--
ALTER TABLE `tb_kesimpulan`
  MODIFY `id_kesimpulan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
