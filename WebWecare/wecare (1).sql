-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2022 pada 14.50
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `namadepan` varchar(100) NOT NULL,
  `namabelakang` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `kejadian` mediumtext NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `username`, `namadepan`, `namabelakang`, `alamat`, `email`, `notelp`, `kejadian`, `status`) VALUES
(10, 'asuk', 'michael', 'owen', 'jalan lakitan no 1465', 'owenmic26@gmail.com', '08982405634', 'di palembang indah mall pada pukul 14:00', 'Progress'),
(12, 'umar', 'michael', 'owen', 'jalan lakitan no 1465', 'owenmic26@gmail.com', '08982405634', 'di palembang indah mall pada pukul 14:00', 'Progress');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `role`) VALUES
('admin', 'owenmic26@gmail.com', '$2y$10$41V8lNhW4QudIgasT2e4ReJC4I7UgbnQNqjYnIq4.quqx2P2b1yJu', 'Admin'),
('owen', 'owenmic26@gmail.com', '$2y$10$axKB9ykPcLPVKE4yOuDuN.QP3b64i8fuaQmeOuqTAv3GJ8STABnvG', 'Member'),
('dava', 'dava@gmail.com', '$2y$10$kGMaDzOvi/gN26FA.VtEXOsduXM8IyL4dMxPmcN6JJB856020VFSC', 'Member'),
('budi', 'rozaliyaliliya@gamil.com', '$2y$10$AEmGmYgn0YLkAao3OF6MY.uIJNSmWdqugBIIWe10h5MBoIIgdt4Ga', 'Member'),
('asuk', 'asuk@gmail.com', '$2y$10$M9pYS5cOH7.5PvZRz/4w9.jvSKIIMBRb8FiYiuluHtyRG5FsOyynC', 'Member'),
('umar', 'umar@gmail.com', '$2y$10$Zs4yGkZiSn.JRaw8zMF/K.qAIKxLW4ggjGOiWy7.OwSdnH5qaCESS', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
