-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2024 pada 10.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruangcerita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `reasons` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `rating`, `reasons`) VALUES
(25, 'lubar', 'bagus'),
(26, 'lumayan', 'tidak ada jawaban ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_konsul`
--

CREATE TABLE `riwayat_konsul` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `riwayat_konsul`
--

INSERT INTO `riwayat_konsul` (`id`, `username`, `keluhan`) VALUES
(13, 'rc123', 'besok adalah uas yang sangat berat'),
(14, 'jimin', 'terlalu banyak uang ku bagaimana caranya kuhabiskan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `telp` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `usia`, `jenis_kelamin`, `telp`, `password`) VALUES
(8, 'rc123', 19, 'perempuan', 'rc123@unm.com', '$2y$10$sOVFP4hn1P1Ktg06LzGu.uRr6WN59U54nB.J.iv0hK.IhgXQ2vvyS'),
(9, 'jimin', 8, 'laki-laki', 'jimin@gmail.com', '$2y$10$lIGLceFaPSwXRzE1q4TQuem1Qr.cSx8vqV81ZNqm5i5j3TeOYtwku');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_konsul`
--
ALTER TABLE `riwayat_konsul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `riwayat_konsul`
--
ALTER TABLE `riwayat_konsul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
