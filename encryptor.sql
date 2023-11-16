-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 18.52
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encryptor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `nid` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`nid`, `nama`, `email`, `nohp`, `alamat`) VALUES
(1422, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(1910, 'KE FF EB', 'GG BY YE CC CC KE EY', '054846445454', 'DD AB'),
(3091, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(3591, 'KE FF EB', 'GG BY YE CC CC KE EY', '054846445454', 'GG GG'),
(4766, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(4923, 'KE FF EB', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(4943, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(5282, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG'),
(5909, 'KE FF EB', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG'),
(6146, 'KE FF EB', 'GG BY YE CC CC KE EY', '343', 'AB GG'),
(6528, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(7573, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(8274, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(8534, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG'),
(8875, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK'),
(9681, 'BA BA', 'GG BY YE CC CC KE EY', '054846445454', 'AB GG BE BK KY YK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`nid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
