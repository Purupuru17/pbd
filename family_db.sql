-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: app-db:3306
-- Waktu pembuatan: 14 Jun 2023 pada 06.28
-- Versi server: 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluarga`
--

CREATE TABLE `tb_keluarga` (
  `no_kk` char(16) NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt/rw` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_keluarga`
--

INSERT INTO `tb_keluarga` (`no_kk`, `nama_kk`, `alamat`, `rt/rw`) VALUES
('1234567887654321', 'Mahmud', 'Aimas', '01/05'),
('1234567887654325', 'Juanda', 'Surabaya', '01/01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `nik` char(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `agama` char(10) NOT NULL,
  `no_kk` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_kk`) VALUES
('1122334455667788', 'Budi Suka', 'Sorong Timur', '2021-12-01', 'Laki-Laki', 'Islam', '1234567887654321'),
('12123121231231', 'Anto', 'Manokwari', '2023-05-09', 'Laki-Laki', 'Budha', '1234567887654325'),
('124234234234', 'Susanti', 'Manokwari', '2023-05-17', 'Perempuan', '', '1234567887654321'),
('8877665544332211', 'Ani Mie Bakso', 'Sorong', '2023-05-01', 'Perempuan', 'Kristen', '1234567887654321');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_keluarga`
--
ALTER TABLE `tb_keluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD CONSTRAINT `tb_penduduk_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `tb_keluarga` (`no_kk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
