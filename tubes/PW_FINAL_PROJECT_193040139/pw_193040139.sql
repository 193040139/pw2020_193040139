-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 15.48
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040139`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alatmusik`
--

CREATE TABLE `alatmusik` (
  `id` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `JenisBunyi` varchar(100) NOT NULL,
  `Cara_main` varchar(100) NOT NULL,
  `Asal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alatmusik`
--

INSERT INTO `alatmusik` (`id`, `Foto`, `Nama`, `JenisBunyi`, `Cara_main`, `Asal`) VALUES
(1, 'Accordion.jpg', 'Accordion', 'Aerofon', 'Ditiup dan menggunakan tangan untuk mengatur nada', 'Sumatra Selatan'),
(2, 'Angklung.jpg', 'Angklung', 'Ideofom', 'menggerakan bambu untuk menghasilkan nada', 'Jawa Barat'),
(3, 'Aramba.jpg', 'Aramba', 'Aidieofom', 'Dipukul dengan alat pukul berbentuk stik', 'Nias, Sumatra Utara'),
(4, 'Bende.jpg', 'Bende', 'Ideofom', 'Dipukul dengan alat khusus', 'Lampung'),
(5, 'Ceng-ceng.jpg', 'Ceng-ceng', 'Ideofom', 'Saling dibenturkan oleh tangan', 'Bali'),
(6, 'Doll.jpg', 'Doll', 'Membranofom', 'Dipukul dengan alat pukul dari karet khusus', 'Bengkulu'),
(7, 'Gambus.jpg', 'Gambus', 'Kordofom', 'Dipetik', 'Riau'),
(8, 'Kecapi.jpg', 'kecapi', 'Kordofom', 'Dipetiik', 'Sulawesi Barat'),
(9, 'Serunekale.jpg', 'Serunekale', 'Aerofom', 'Ditiup dan menggunkan tangan untuk mengatur nada', 'Nanggroe Aceh Daruss'),
(10, 'Tehyan.jpg', 'Tehyan', 'Kordofom', 'Dipetik', 'DKI Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
