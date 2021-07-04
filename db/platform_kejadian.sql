-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2021 pada 13.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyfety`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `platform_kejadian`
--

CREATE TABLE `platform_kejadian` (
  `id` int(11) NOT NULL,
  `platform` varchar(200) DEFAULT NULL,
  `postingan_ada` varchar(200) DEFAULT NULL,
  `username_user` varchar(200) DEFAULT NULL,
  `username_pelaku` varchar(200) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `platform_kejadian`
--

INSERT INTO `platform_kejadian` (`id`, `platform`, `postingan_ada`, `username_user`, `username_pelaku`, `link`) VALUES
(1, '', NULL, NULL, NULL, NULL),
(2, '', 'on', 'yyu', 'gghh', 'hhhh'),
(3, '', 'on', 'yyu', 'gghh', 'httpppss'),
(4, '', 'on', '', '', ''),
(5, '', 'on', 'yyu', NULL, 'httpppss');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `platform_kejadian`
--
ALTER TABLE `platform_kejadian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `platform_kejadian`
--
ALTER TABLE `platform_kejadian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
