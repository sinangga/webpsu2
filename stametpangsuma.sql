-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Sep 2020 pada 19.16
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stametpangsuma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buletin`
--

CREATE TABLE IF NOT EXISTS `buletin` (
`id_buletin` int(10) NOT NULL,
  `bln_buletin` varchar(25) NOT NULL,
  `gbr_buletin` varchar(255) NOT NULL,
  `file_buletin` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buletin`
--

INSERT INTO `buletin` (`id_buletin`, `bln_buletin`, `gbr_buletin`, `file_buletin`) VALUES
(1, 'Agustus 2020', 'img/buletin/8.jpeg', 'bulet/Pangsuma_agustus2020.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_saran`
--

CREATE TABLE IF NOT EXISTS `kritik_saran` (
`id_kritiksaran` int(10) NOT NULL,
  `nama_kritiksaran` varchar(50) NOT NULL,
  `email_kritiksaran` varchar(50) NOT NULL,
  `pesan_kritiksaran` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritiksaran`, `nama_kritiksaran`, `email_kritiksaran`, `pesan_kritiksaran`) VALUES
(1, 'dewi', 'dewi88@gmail.com', 'okee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id_pengguna` int(10) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username_pengguna` varchar(50) NOT NULL,
  `password_pengguna` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username_pengguna`, `password_pengguna`) VALUES
(1, 'Pebriyanti ', 'pebyan', '070298'),
(2, 'Muhammad Suyudi', 'yudi66', '11111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `potensi_karhutla`
--

CREATE TABLE IF NOT EXISTS `potensi_karhutla` (
`id_potensikarhutla` int(10) NOT NULL,
  `tgl_potensikarhutla` date NOT NULL,
  `gbr_potensikarhutla` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `potensi_karhutla`
--

INSERT INTO `potensi_karhutla` (`id_potensikarhutla`, `tgl_potensikarhutla`, `gbr_potensikarhutla`) VALUES
(1, '2020-09-16', 'img/hs/potensikarhutla_16sept.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pracu_3harian`
--

CREATE TABLE IF NOT EXISTS `pracu_3harian` (
`id_pracu3harian` int(10) NOT NULL,
  `tgl_pracu3harian` date NOT NULL,
  `gbr_pracu3harian` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pracu_3harian`
--

INSERT INTO `pracu_3harian` (`id_pracu3harian`, `tgl_pracu3harian`, `gbr_pracu3harian`) VALUES
(1, '2020-09-15', 'img/pracu/pracu_3harian15sept.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pracu_harian`
--

CREATE TABLE IF NOT EXISTS `pracu_harian` (
`id_pracuharian` int(10) NOT NULL,
  `namafile` varchar(50) NOT NULL,
  `tgl_pracuharian` date NOT NULL,
  `gbr_pracuharian` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pracu_harian`
--

INSERT INTO `pracu_harian` (`id_pracuharian`, `namafile`, `tgl_pracuharian`, `gbr_pracuharian`) VALUES
(1, 'pracu16sept', '2020-09-16', 'img/pracu/pracu16sept.jpeg'),
(4, 'Cuaca Harian 17-09-2020', '2020-09-17', 'harian-20200917-.jpg'),
(5, 'Cuaca Harian 17-09-2020', '2020-09-17', 'harian-20200917-.jpg'),
(10, 'Cuaca Harian 17-09-2020', '2020-09-17', 'pracu/harian-20200917.jpg'),
(11, 'Cuaca Harian 18-09-2020', '2020-09-18', 'pracu/harian-20200918.jpg'),
(12, 'Cuaca Harian 18-09-2020', '2020-09-18', 'pracu/harian-20200918.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pracu_kapuashulu`
--

CREATE TABLE IF NOT EXISTS `pracu_kapuashulu` (
`id_pracukh` int(25) NOT NULL,
  `tgl_pracukh` date NOT NULL,
  `gbr_pracukh` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pracu_kapuashulu`
--

INSERT INTO `pracu_kapuashulu` (`id_pracukh`, `tgl_pracukh`, `gbr_pracukh`) VALUES
(1, '2020-09-16', 'img/pracu/pracu16sept.jpeg'),
(2, '2020-09-17', 'img/pracu/pracu17sept.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pracu_mingguan`
--

CREATE TABLE IF NOT EXISTS `pracu_mingguan` (
`id_pracumingguan` int(10) NOT NULL,
  `tgl_pracumingguan` date NOT NULL,
  `gbr_pracumingguan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pracu_mingguan`
--

INSERT INTO `pracu_mingguan` (`id_pracumingguan`, `tgl_pracumingguan`, `gbr_pracumingguan`) VALUES
(1, '2020-09-13', 'img/pracu/pracumingguan_13sept.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sebaran_hotspot`
--

CREATE TABLE IF NOT EXISTS `sebaran_hotspot` (
`id_sebaranhotspot` int(10) NOT NULL,
  `tgl_sebaranhotspot` date NOT NULL,
  `gbr_sebaranhotspot` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sebaran_hotspot`
--

INSERT INTO `sebaran_hotspot` (`id_sebaranhotspot`, `tgl_sebaranhotspot`, `gbr_sebaranhotspot`) VALUES
(1, '2020-09-16', 'img/hs/sebaranhs_16sept.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buletin`
--
ALTER TABLE `buletin`
 ADD PRIMARY KEY (`id_buletin`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
 ADD PRIMARY KEY (`id_kritiksaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `potensi_karhutla`
--
ALTER TABLE `potensi_karhutla`
 ADD PRIMARY KEY (`id_potensikarhutla`);

--
-- Indexes for table `pracu_3harian`
--
ALTER TABLE `pracu_3harian`
 ADD PRIMARY KEY (`id_pracu3harian`);

--
-- Indexes for table `pracu_harian`
--
ALTER TABLE `pracu_harian`
 ADD PRIMARY KEY (`id_pracuharian`);

--
-- Indexes for table `pracu_kapuashulu`
--
ALTER TABLE `pracu_kapuashulu`
 ADD PRIMARY KEY (`id_pracukh`);

--
-- Indexes for table `pracu_mingguan`
--
ALTER TABLE `pracu_mingguan`
 ADD PRIMARY KEY (`id_pracumingguan`);

--
-- Indexes for table `sebaran_hotspot`
--
ALTER TABLE `sebaran_hotspot`
 ADD PRIMARY KEY (`id_sebaranhotspot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buletin`
--
ALTER TABLE `buletin`
MODIFY `id_buletin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
MODIFY `id_kritiksaran` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `potensi_karhutla`
--
ALTER TABLE `potensi_karhutla`
MODIFY `id_potensikarhutla` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pracu_3harian`
--
ALTER TABLE `pracu_3harian`
MODIFY `id_pracu3harian` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pracu_harian`
--
ALTER TABLE `pracu_harian`
MODIFY `id_pracuharian` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pracu_kapuashulu`
--
ALTER TABLE `pracu_kapuashulu`
MODIFY `id_pracukh` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pracu_mingguan`
--
ALTER TABLE `pracu_mingguan`
MODIFY `id_pracumingguan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sebaran_hotspot`
--
ALTER TABLE `sebaran_hotspot`
MODIFY `id_sebaranhotspot` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
