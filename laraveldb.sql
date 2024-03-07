-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2024 pada 06.16
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `deskripsi` text NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `nama`, `tanggal`, `jam`, `deskripsi`, `updated_at`, `created_at`) VALUES
(1, 'victor', '2024-03-06', '09:01:00', 'tes', '2024-03-06 15:29:19.955281', '2024-03-06 15:29:19.955281'),
(3, 'zxc', '2024-03-05', '22:31:00', 'aaaaaa', '2024-03-06 08:30:20.000000', '2024-03-06 08:30:20.000000'),
(4, 'ens', '2024-03-07', '10:12:00', 'tesss', '2024-03-06 22:10:44.000000', '2024-03-06 22:10:44.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`) VALUES
(1, 'a@gmail.com', '123123', 'VICTOR'),
(5, 'email', 'password', 'nama'),
(6, 'email', 'password', 'nama'),
(7, 'email1', 'password1', 'nama1'),
(8, 'asd@gmail.com', '123', '123123'),
(9, 'z@gmail.com', '22', '111'),
(10, 'asd1@gmail.com', '123', '123'),
(11, 'asd11@gmail.com', '1111', '11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
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
-- AUTO_INCREMENT untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
