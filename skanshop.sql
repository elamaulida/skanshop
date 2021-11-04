-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2021 pada 02.56
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skanshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk2`
--

CREATE TABLE `produk2` (
  `id` int(11) NOT NULL,
  `search` text CHARACTER SET utf8mb4 NOT NULL,
  `kategori` text CHARACTER SET utf8mb4 NOT NULL,
  `produk_lainnya` text CHARACTER SET utf8mb4 NOT NULL,
  `posting` text CHARACTER SET utf8mb4 NOT NULL,
  `foto` text CHARACTER SET utf8mb4 NOT NULL,
  `nama_produk` text CHARACTER SET utf8mb4 NOT NULL,
  `harga_produk` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk2`
--

INSERT INTO `produk2` (`id`, `search`, `kategori`, `produk_lainnya`, `posting`, `foto`, `nama_produk`, `harga_produk`, `deskripsi`) VALUES
(1, '', 'Fashion', '', '', 'wallpaper.jfif', 'baju', '30', 'baju'),
(2, '', 'jasa', '', '', 'ayu putri-6696 international human rights day.jpg', 'buku', '50', 'buku'),
(3, '', 'Fashion', '', '', 'fathiyatul fitri-7068 world autism awareness day.jpg', 'baju', '10', 'y'),
(4, '', 'jasa', '', '', 'fathiyatul fitri-7069 world autism awareness day.jpg', 'majalah', '25', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `foto` text CHARACTER SET utf8mb4,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') CHARACTER SET utf8mb4 NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `wa` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `fb` text CHARACTER SET utf8mb4,
  `ig` text CHARACTER SET utf8mb4,
  `password` text CHARACTER SET utf8mb4 NOT NULL,
  `cpassword` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `foto`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `email`, `wa`, `fb`, `ig`, `password`, `cpassword`) VALUES
(1, 'ayu putri-6696 international human rights day.png', 'dena', 'Perempuan', '2021-10-29', 'jateng', 'dena@gmail.com', '2413', 'http://localhost/skanshop/tugas%201/profil.php', 'http://localhost/skanshop/tugas%201/profil.php', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk2`
--
ALTER TABLE `produk2`
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
-- AUTO_INCREMENT untuk tabel `produk2`
--
ALTER TABLE `produk2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
