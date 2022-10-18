-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2022 pada 19.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `edukasi1` varchar(150) NOT NULL,
  `edukasi2` varchar(150) NOT NULL,
  `edukasi3` varchar(150) NOT NULL,
  `sertifikasi1` varchar(150) NOT NULL,
  `sertifikasi2` varchar(150) NOT NULL,
  `sertifikasi3` varchar(150) NOT NULL,
  `deskripsi_edukasi1` varchar(150) NOT NULL,
  `deskripsi_edukasi2` varchar(150) NOT NULL,
  `deskripsi_edukasi3` varchar(150) NOT NULL,
  `deskripsi_sertifikasi1` varchar(150) NOT NULL,
  `deskripsi_sertifikasi2` varchar(150) NOT NULL,
  `deskripsi_sertifikasi3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `edukasi1`, `edukasi2`, `edukasi3`, `sertifikasi1`, `sertifikasi2`, `sertifikasi3`, `deskripsi_edukasi1`, `deskripsi_edukasi2`, `deskripsi_edukasi3`, `deskripsi_sertifikasi1`, `deskripsi_sertifikasi2`, `deskripsi_sertifikasi3`) VALUES
(1, '<p>Junior High School</p>', '<p>Senior High School</p>', '<p>Undergraduate Student</p>', '<p>Fundamental AWS Cloud</p>', '<p>Fundamental Javascript</p>', '<p>Membuat Aplikasi Back-End Pemula</p>', 'SMPN 177 Jakarta (2014 - 2017)', 'SMAN 87 Jakarta (2017 - 2020)', 'Pembangunan Jaya University (2020 - Now)', 'Dicoding 16 Juli 2021 (Available Until 16 Juli 2024)', 'Dicoding 26 Juli 2021 (Available Until 26 Juli 2024)', 'Dicoding 31 Agustus 2022 (Available Until 31 Juli 2025)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactme`
--

CREATE TABLE `contactme` (
  `id` int(11) NOT NULL,
  `namaclient` varchar(100) NOT NULL,
  `emailclient` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contactme`
--

INSERT INTO `contactme` (`id`, `namaclient`, `emailclient`, `subject`, `message`) VALUES
(1, 'adsd', 'abimanyu177.sss@gmail.com', 'asdasd', ''),
(2, 'asdasd', 'abimanyu177.sss@gmail.com', 'sdasd', 'dasdas'),
(3, 'RAPAEL', 'abimanyu177.sss@gmail.com', 'KONTOL', 'KONTOLLLLL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `homepage`
--

INSERT INTO `homepage` (`id`, `deskripsi`) VALUES
(1, 'I am Abimanyu Luthfi, Active Student From Pembangunan Jaya university Majoring Informatics Technology');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `gambar`) VALUES
(1, 'abimanyu2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `gambar4` varchar(255) NOT NULL,
  `judul1` varchar(50) NOT NULL,
  `judul2` varchar(50) NOT NULL,
  `judul3` varchar(50) NOT NULL,
  `judul4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `judul1`, `judul2`, `judul3`, `judul4`) VALUES
(1, 'project1.png', 'project2.png', 'project3.png', 'project4.png', '<p>Toko Buku Berbasis Java OOP</p>', '<p>Si Sehat User Interface</p>', '<p>NOBAR Website</p>', '<p>Bookshelf API</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `judul1` varchar(100) NOT NULL,
  `judul2` varchar(100) NOT NULL,
  `judul3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`id`, `gambar1`, `gambar2`, `gambar3`, `judul1`, `judul2`, `judul3`) VALUES
(1, 'tools1.png', 'tools2.png', 'tools3.png', '<p>VS Code</p>', '<p>Intellij</p>', '<p>Code::Blocks</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contactme`
--
ALTER TABLE `contactme`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contactme`
--
ALTER TABLE `contactme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
