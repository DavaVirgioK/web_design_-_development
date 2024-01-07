-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 17.21
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
  `id_username` int(100) NOT NULL,
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

INSERT INTO `laporan` (`id`, `id_username`, `namadepan`, `namabelakang`, `alamat`, `email`, `notelp`, `kejadian`, `status`) VALUES
(15, 5, 'michaelasda', 'owen', 'jalan lakitan no 1465', 'owenmic26@gmail.com', '08982405634', 'di palembang indah mall pada pukul 14:00', 'Rejected'),
(16, 8, 'michaelasd', 'dava', 'jalan lakitan no 1465', 'owenmic26@gmail.com', '08982405634', 'di palembang indah mall pada pukul 14:00', 'Progress'),
(19, 5, 'michael', 'owen', 'jalan lakitan no 1465', 'mario.te.kuang@gmail.com', '08982405634', 'di palembang indah mall pada pukul 14:00', 'Complete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'owenmic26@gmail.com', '$2y$10$41V8lNhW4QudIgasT2e4ReJC4I7UgbnQNqjYnIq4.quqx2P2b1yJu', 'Admin'),
(2, 'asuk', 'asuk@gmail.com', '$2y$10$M9pYS5cOH7.5PvZRz/4w9.jvSKIIMBRb8FiYiuluHtyRG5FsOyynC', 'Member'),
(3, 'budi', 'rozaliyaliliya@gamil.com', '$2y$10$AEmGmYgn0YLkAao3OF6MY.uIJNSmWdqugBIIWe10h5MBoIIgdt4Ga', 'Member'),
(4, 'dava', 'dava@gmail.com', '$2y$10$kGMaDzOvi/gN26FA.VtEXOsduXM8IyL4dMxPmcN6JJB856020VFSC', 'Member'),
(5, 'owen', 'owenmic26@gmail.com', '$2y$10$axKB9ykPcLPVKE4yOuDuN.QP3b64i8fuaQmeOuqTAv3GJ8STABnvG', 'Member'),
(6, 'umar', 'umar@gmail.com', '$2y$10$Zs4yGkZiSn.JRaw8zMF/K.qAIKxLW4ggjGOiWy7.OwSdnH5qaCESS', 'Member'),
(7, 'danniel', 'jackygantengnian@gmail.com', '$2y$10$EKEqCZAAxYICjar1bTLx2eiDLG701L7rQzXRkoG0yP7kVBL55x7qy', 'Admin'),
(8, 'coeg', 'yola_lita@yahoo.co.id', '$2y$10$UJV1XK09ydsEJ6PTkkTp/eAtXNi0w3YKO/pDxdJuBzVk5qQ2off3O', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `user` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
