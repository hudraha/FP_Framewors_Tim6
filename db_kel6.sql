-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 15.49
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kel6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE `template` (
  `ID_TEMPLATE` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `TYPE` varchar(15) NOT NULL,
  `LAYOUT` varchar(25) NOT NULL,
  `PICT1` varchar(100) DEFAULT NULL,
  `PICT2` varchar(100) DEFAULT NULL,
  `TEXT1` varchar(255) DEFAULT NULL,
  `TEXT2` varchar(255) DEFAULT NULL,
  `BTN1` varchar(100) DEFAULT NULL,
  `BTN2` varchar(100) DEFAULT NULL,
  `BTN_NAME1` varchar(25) DEFAULT NULL,
  `BTN_NAME2` varchar(25) DEFAULT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`ID_TEMPLATE`, `NAME`, `TYPE`, `LAYOUT`, `PICT1`, `PICT2`, `TEXT1`, `TEXT2`, `BTN1`, `BTN2`, `BTN_NAME1`, `BTN_NAME2`, `STATUS`) VALUES
(1, 'Nama Template', 'header', 'Ini Layout', '', '', 'text 1', 'text 2', 'link btn 1', 'link btn 2', 'nama btn', 'nama btn', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `website`
--

CREATE TABLE `website` (
  `ID_USER` int(11) DEFAULT NULL,
  `TEMPLATE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`ID_TEMPLATE`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indeks untuk tabel `website`
--
ALTER TABLE `website`
  ADD KEY `MEMILIKI_FK` (`ID_USER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `template`
--
ALTER TABLE `template`
  MODIFY `ID_TEMPLATE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `website`
--
ALTER TABLE `website`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
