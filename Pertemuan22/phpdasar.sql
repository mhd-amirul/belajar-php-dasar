-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2021 pada 01.49
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `smartphone`
--

CREATE TABLE `smartphone` (
  `id` int(11) NOT NULL,
  `merk` varchar(20) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `processor` varchar(20) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `smartphone`
--

INSERT INTO `smartphone` (`id`, `merk`, `tahun`, `ram`, `processor`, `gambar`) VALUES
(1, 'Oppo', '2020', '8gb', 'Octa Core', '61af54887b128.jpg'),
(2, 'Asus', '2018', '2gb', 'Snapdragon', 'asus.jpg'),
(3, 'Realme', '2019', '4gb', 'Octa Core', 'realme.jpg'),
(4, 'Iphone', '2020', '8gb', 'iOS', 'iphone.jpg'),
(5, 'Samsung', '2021', '8gb', 'Snapdragon', 'samsung.jpg'),
(6, 'Vivo', '2020', '6gb', 'Snapdragon', 'vivo.jpg'),
(7, 'Huawei', '2017', '8gb', 'Snapdragon', 'huawei.jpg'),
(8, 'LG', '2017', '2gb', 'Octa Core', 'lg.jpg'),
(9, 'Blackberry', '2015', '6gb', 'Blackberry OS', 'blackberry.jpg'),
(10, 'Advan', '2020', '2gb', 'Snapdragon', 'advan.jpg'),
(11, 'Infinix', '2019', '4gb', 'Snapdragon', 'infinix.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(12, 'admin', '$2y$10$jVrJ7WDKlk9zOkA2xB.lHeigFfcXs7eNKXWG/a8YH3ra7wVoh7RZO'),
(14, 'admin2', '$2y$10$FSCzqnfQ8OC5l8DFcnzfVOmlHNUglLqOQr4GeK.S8uqwoAguk.ALG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
