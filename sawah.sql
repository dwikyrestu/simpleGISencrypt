-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Agu 2018 pada 06.31
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`) VALUES
(1, 'Ampelgading'),
(2, 'Bantur'),
(3, 'Bululawang'),
(4, 'Dampit'),
(5, 'Dau'),
(6, 'Donomulyo'),
(7, 'Gedangan'),
(8, 'Gondanglegi'),
(9, 'Jabung'),
(10, 'Kalipare'),
(11, 'Karangploso'),
(12, 'Kasembon'),
(13, 'Kepanjen'),
(14, 'Kromengan'),
(15, 'Lawang'),
(16, 'Ngajum'),
(17, 'Ngantang'),
(18, 'Pagak'),
(19, 'Pagelaran'),
(20, 'Pakis'),
(21, 'Pakisaji'),
(22, 'Poncokusumo'),
(23, 'SumbermanjingWetan'),
(24, 'Singosari'),
(25, 'Sumberpucung'),
(26, 'Tajinan'),
(27, 'Tirtoyudo'),
(28, 'Tumpang'),
(29, 'Turen'),
(30, 'Wagir'),
(31, 'Wajak'),
(32, 'Wonosari'),
(33, 'Pujon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_lahan`
--

CREATE TABLE `lokasi_lahan` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `kecamatan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `warna` varchar(12) NOT NULL,
  `keterangan` text NOT NULL,
  `polygon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi_lahan`
--

INSERT INTO `lokasi_lahan` (`id`, `nama_lokasi`, `kecamatan`, `alamat`, `warna`, `keterangan`, `polygon`) VALUES
(7, 'dasd', 5, 'sadasdas', '#FFFF00', 'zasdadasdasd', 'kpeRp52olq2bmpmooamXppyTmaCappiimZKTqaGpla2bkZynoKuBoZuPlqyap5anmpOaq5+mlKyWlo+lma2PqJaRlaiZp5inmJScrJ2WjqqTlJulna+Vq5eUlqmeqJarmo2UpKCklaqdmpesnKyVppqYm6WJo5eimJOYpaKqlKyZlputmauSoJaRmqKdq5atlZOTraKska2YmQ=='),
(9, 'dadabf', 11, 'sdasdasd', '#FF0000', 'sadasdasd', 'kpeRpp6nmaaZkpenmauTqZqNlKSgpJOtnZSUqqKrlqmbl5eUlqyPppySmaWhppeomJKXrJ+qjaWVmJGmoaeZp5yVmaecrZmthY6ZopuvlayXlJqrnKqVqpeUl6CappiimJGbpqCplKWalZWtn6+BoZuPlaqdp5KklpKWqZ6nmKiRkpOrl6mVrZaTm6ubqZKomZaW'),
(10, 'zcdzxczxczxc', 1, 'asfasfa', '#008000', 'czxczxczxczxc', 'kpeRpqCulaiYlJukm62ZrJaVj6WZrY+plZiXpJmrkqabmpinmpaOqpOUk6WcppipmJeXqJuuk6yRkpOrl6uRqZiVk6mgrJKrlpmblJasj6eWmpatnKmaqJeTlqicq42llZiRqZ+qmKealZSmnq+YqpuBkKqXqJeplpSWrZynlKyWlZSqlaeRq5OWmqefrJKslZWUraKokw=='),
(11, 'yuiyiyiyiyiu', 11, 'sdgsdgsdgsdgsdg', '#FF0000', 'assasdasdasd', 'kpeRpp6tmaeekpupnqmZqpiVj6WZrY+nlpaYpp+mkaybkZitn5aOqpOTmaacp5mol5iYpaCvkaqRkpOrl6mSpp6WlKShrZqplpeZlJasj6abmJWqn66YrJyVlaScrpaglpGaopynlaWak5qloKuapJiUg6GfpJOqmpqXqJ2rk6iVlpiknaKSpJyPlqWirJGmnpeZp5mul5SSl5Gmn6uarJySlKWcrZKtlZiPpZmtj6eXk5Wmma6RppiRmqWclo6qk5OZpaGqmqWclpatoK2VqJGSk6uXqZOnm5SapJmul6qbmpyUlqyPppqYl6Wbq5mtlZeUpqKtjaWVmJGnm6mTqZWYmqSerJmsmg==');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(100) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `nama_status`, `warna`) VALUES
(1, 'Panen', '#008000'),
(2, 'Gagal Panen', '#FF0000'),
(3, 'Tanam', '#FFFF00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'c1ca43378e69f8528055b8edc3485c16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_lahan`
--
ALTER TABLE `lokasi_lahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan` (`kecamatan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `lokasi_lahan`
--
ALTER TABLE `lokasi_lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
