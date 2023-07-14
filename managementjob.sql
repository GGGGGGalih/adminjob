-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2023 pada 11.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managementjob`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobkelar`
--

CREATE TABLE `jobkelar` (
  `id` int(255) NOT NULL,
  `namaclient` varchar(255) NOT NULL,
  `alamatClient` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `kontak` int(11) NOT NULL,
  `tanggaljob` varchar(255) NOT NULL,
  `tanggalselesai` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `solusi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jobkelar`
--

INSERT INTO `jobkelar` (`id`, `namaclient`, `alamatClient`, `kondisi`, `kontak`, `tanggaljob`, `tanggalselesai`, `solusi`) VALUES
(23, 'Rudi', 'Perum A', 'FO CUT', 2147483647, '2023-07-24 05:30:00', '2023-07-17 01:35:00', 'belum diketahui'),
(24, 'hjk', 'Perum A', 'FO CUT', 2147483647, '2023-07-16 04:15:00', '2023-07-19 04:25:00', 'Splising');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobteknisi`
--

CREATE TABLE `jobteknisi` (
  `id` int(255) NOT NULL,
  `namaclient` varchar(255) NOT NULL,
  `alamatClient` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `kontak` int(255) NOT NULL,
  `tanggaljob` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggalselesai` timestamp NULL DEFAULT NULL,
  `solusi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jobteknisi`
--

INSERT INTO `jobteknisi` (`id`, `namaclient`, `alamatClient`, `kondisi`, `kontak`, `tanggaljob`, `tanggalselesai`, `solusi`) VALUES
(24, 'hjk', 'Perum A', 'FO CUT', 2147483647, '2023-07-15 21:15:00', '2023-07-19 04:25:00', 'Splising'),
(26, 'Rudi', 'Perum A', 'FO CUT', 2147483647, '2023-07-23 22:30:00', '2023-07-17 01:35:00', 'belum diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginteknisi`
--

CREATE TABLE `loginteknisi` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `loginteknisi`
--

INSERT INTO `loginteknisi` (`id`, `username`, `password`) VALUES
(1, 'gal', '$2y$10$EAn62W8toz5KP3GNDEalW.EzSmYOOr8FIDM6/Xxk/Kz4YsRtimdt2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `nrp` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id`, `nama`, `usia`, `nrp`, `email`) VALUES
(11, 'Galih Cahya', '23 Tahun', 24564, 'kusumagalih062002@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gal', '$2y$10$riqnnWhZaYN0raZKF1QKfughx0YLnS/5i6Z18QeyKcNhLttQLIIZO'),
(2, 'gal', '$2y$10$ZYS9XkjmBHwJkvnLNZ/J2eNaByyiiY9f46mBhiEw90e9Y6DrADAy.'),
(3, 'admin', '$2y$10$jaqST.2KKP/w7Gy/G479L.ZAckx0KcqnibWxX4WsplhoXyAIYQfoy'),
(4, 'admin2', '$2y$10$xHYOjmPOou6aSIf98Bha5uWNdzLVXYxZ1LnNBOKDnR/qIKe4pmfQ6'),
(5, 'admin3', '$2y$10$vQCz1hd9n.F62LbF5j9.5OFPhkyEXuMd6OqSweyvL1zI16wp7siw.'),
(6, 'shafa.net', '$2y$10$qreqmhj7YLYlLQaWdr8RWuZU99XWfXsYAwAI6iZHvEUzegA7I3QiW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jobkelar`
--
ALTER TABLE `jobkelar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobteknisi`
--
ALTER TABLE `jobteknisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loginteknisi`
--
ALTER TABLE `loginteknisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jobkelar`
--
ALTER TABLE `jobkelar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `jobteknisi`
--
ALTER TABLE `jobteknisi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `loginteknisi`
--
ALTER TABLE `loginteknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
