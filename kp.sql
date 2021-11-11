-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 05:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nign` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nign`, `nama_guru`, `alamat`, `telepon`, `jenis_kelamin`, `photo`) VALUES
(1, '51123', 'Asep', 'Jalan Karapitan', '0822', 'Laki-laki', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_plj` int(11) NOT NULL,
  `id_thn_akademik` int(10) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `kode_mapel` varchar(10) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id_plj`, `id_thn_akademik`, `nis`, `kode_mapel`, `skor`) VALUES
(1, 1, '1', 'MK', 85),
(2, 2, '1', 'KBD', 70),
(3, 1, '1', 'AP', 90);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'M', 'Manajemen'),
(2, 'TK', 'Sipil'),
(3, 'MI', 'Manajemen Informatika'),
(4, 'A', 'akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_mapel` int(3) NOT NULL,
  `kode_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `semester` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_mapel`, `kode_mapel`, `nama_mapel`, `nama_jurusan`, `nama_guru`, `hari`, `jam`, `semester`) VALUES
(1, 'MK', 'Matematika', 'Managemen', 'Asep', 'Senin', '07.00 - 09.45', 'Ganjil'),
(2, 'AP', 'Algoritma dan Pemrograman', 'Managemen', 'Dadang', '', '', 'Genap'),
(3, 'KBD', 'Keamanan Basis Data', 'Manajemen', 'Asep', 'Selasa', '07.00 - 09.45', 'Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `nama_jurusan` varchar(120) NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_lengkap`, `nama_jurusan`, `jenis_kelamin`, `tempat_lahir`, `alamat`, `email`, `telepon`, `tanggal_lahir`, `tahun_akademik`, `photo`) VALUES
(1, '1', 'Wira', 'Manajemen', 'Laki-laki', 'Bandung', 'Bandung', 'wiraswasta@gmail.com', '0212331', '2003-02-01', '2019-2020', '1.jpg'),
(2, '2', 'tes', 'Manajemen', 'Laki-laki', 'Subang', 'Jalann', 'adwa@gmail.com', '9202', '2002-01-01', '2019-2020', ''),
(3, '2211', 'aa', 'Manajemen', 'Laki-laki', 'da', 'ada', 'adada', '022', '2000-02-01', '2019-2020', ''),
(4, '1231', 'adwa', 'Manajemen', 'Laki-laki', 'Bandung', 'dad', 'addaw', '13231', '2006-05-09', '2019-2020', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn_akademik` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn_akademik`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2019-2020', 'Genap', 'Aktif'),
(2, '2019-2020', 'Ganjil', 'Aktif'),
(3, '2020-2021', 'Genap', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'N', ''),
(2, 'aria', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'N', ''),
(3, 'user', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'N', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_plj`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD UNIQUE KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_mapel`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn_akademik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_plj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
