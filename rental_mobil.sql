-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2019 pada 10.57
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery_mobil`
--
-- Kesalahan membaca struktur untuk tabel rental_mobil.tb_gallery_mobil: #1932 - Table 'rental_mobil.tb_gallery_mobil' doesn't exist in engine
-- Kesalahan membaca data untuk tabel rental_mobil.tb_gallery_mobil: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `rental_mobil`.`tb_gallery_mobil`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `ID_MOBIL` int(11) NOT NULL,
  `NAMA_MOBIL` varchar(225) DEFAULT NULL,
  `MERK_MOBIL` varchar(225) DEFAULT NULL,
  `DESKRIPSI_MOBIL` text,
  `TAHUN_MOBIL` varchar(4) DEFAULT NULL,
  `KAPASITAS_MOBIL` int(11) DEFAULT NULL,
  `HARGA_MOBIL` int(20) DEFAULT NULL,
  `WARNA_MOBIL` varchar(50) DEFAULT NULL,
  `BENSIN_MOBIL` int(11) DEFAULT NULL,
  `PLAT_NO_MOBIL` varchar(25) DEFAULT NULL,
  `STATUS_SEWA` int(11) DEFAULT NULL,
  `STATUS_MOBIL` int(11) DEFAULT NULL,
  `CREATED_MOBIL` varchar(120) DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `ALAMAT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`ID_MOBIL`, `NAMA_MOBIL`, `MERK_MOBIL`, `DESKRIPSI_MOBIL`, `TAHUN_MOBIL`, `KAPASITAS_MOBIL`, `HARGA_MOBIL`, `WARNA_MOBIL`, `BENSIN_MOBIL`, `PLAT_NO_MOBIL`, `STATUS_SEWA`, `STATUS_MOBIL`, `CREATED_MOBIL`, `latitude`, `longitude`, `ALAMAT`) VALUES
(9, 'Kijang Inova Black', 'Mitsubishi', 'kojang edisi terbaru', '2018', 8, 600000, 'Hitam', 2, 'F 5444 BU', 0, 1, '2018-01-15 08:20:05', 0, 0, 'Jl. Allenmanda 4, Cipenjo, Kec. Cileungsi, Bogor, Jawa Barat 16820, Indonesia'),
(10, 'Honda Mobilio', 'Honda', 'keluaran terbaru dengan spek memuaskan', '2018', 6, 800000, 'Merah', 2, 'B 3435 JJ', 1, 1, '2018-01-15 08:22:34', -6.3802409, 106.9956116, 'Jl. Metland Cileungsi No.19, RW.01, Kp. Parung Jambu, Cipenjo, Kec. Cileungsi, Bogor, Jawa Barat 16820, Indonesia'),
(11, 'Nissan Sport F1', 'Nissan', 'kualitas terbaik', '2017', 6, 1000000, 'Biru', 2, 'G 4544 FF', 0, 1, '2018-01-15 08:25:46', -6.3802409, 106.9956116, 'Jl. Metland Cileungsi No.19, RW.01, Kp. Parung Jambu, Cipenjo, Kec. Cileungsi, Bogor, Jawa Barat 16820, Indonesia'),
(12, 'datsum', 'nasa', 'dddddd', '1202', 6, 300000, 'merah', 1, 'B 2222 FB', 0, 1, '2019-07-16 17:51:48', -6.3802409, 106.9956116, ''),
(21, 'Avanziii', 'Toyotiiii', 'lorem ipsum lorem', '2000', 1000, 300000, 'Warna yang dilupakan', 1, '11111', 1, 1, '2019-07-20 09-19-03', 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `ID` int(11) NOT NULL,
  `KODE_TRANSAKSI` varchar(150) NOT NULL,
  `ID_MOBIL` int(5) NOT NULL,
  `ID_USER` int(5) NOT NULL,
  `TGL_SEWA` varchar(150) NOT NULL,
  `TGL_AKHIR_PENYEWAAN` varchar(150) NOT NULL,
  `HARGA_MOBIL` int(10) NOT NULL,
  `DOKUMEN` varchar(150) NOT NULL,
  `SUPIR` varchar(10) NOT NULL,
  `TOTAL` int(10) NOT NULL,
  `STATUS_TRANSAKSI` varchar(100) NOT NULL,
  `TGL_PEMBAYARAN` varchar(150) NOT NULL,
  `BUKTI_PEMBAYARAN` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`ID`, `KODE_TRANSAKSI`, `ID_MOBIL`, `ID_USER`, `TGL_SEWA`, `TGL_AKHIR_PENYEWAAN`, `HARGA_MOBIL`, `DOKUMEN`, `SUPIR`, `TOTAL`, `STATUS_TRANSAKSI`, `TGL_PEMBAYARAN`, `BUKTI_PEMBAYARAN`) VALUES
(2, 'TR-20190720165654', 9, 12, '2019-07-20 16-56-54', '2019-07-27 16-56-54', 600000, 'KTP', 'Ya', 4200000, 'selesai', '2019-07-21 01-01-39', '20190721010139.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(225) DEFAULT NULL,
  `NAME` varchar(225) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `EMAIL` varchar(225) DEFAULT NULL,
  `NO_TELP` varchar(20) DEFAULT NULL,
  `JENIS_KELAMIN` char(1) DEFAULT NULL,
  `ALAMAT` text,
  `PASSWORD` varchar(120) DEFAULT NULL,
  `ACTIVATED` int(11) DEFAULT NULL,
  `CREATED` varchar(120) DEFAULT NULL,
  `GROUP_USER` int(11) DEFAULT NULL,
  `LAST_LOGIN` varchar(125) DEFAULT NULL,
  `LAST_UPDATE` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`ID_USER`, `USERNAME`, `NAME`, `NIK`, `EMAIL`, `NO_TELP`, `JENIS_KELAMIN`, `ALAMAT`, `PASSWORD`, `ACTIVATED`, `CREATED`, `GROUP_USER`, `LAST_LOGIN`, `LAST_UPDATE`) VALUES
(46, 'ibu', 'ibu', '', 'ibu@gmail.com', '0808808', 'P', 'kkllll', 'bd4c70d40f7fa5421cfeefbd66b7fff6', 1, '2019-07-11 00:00:00', 2, NULL, NULL),
(90, NULL, 'aaaaaa', '333333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'test', 'user test', '123456', 'user@test.com', '0812121212', 'L', 'Bandung', '$2y$10$qMDr26vsheXTfCcbLno2aOPQwuT3fiZH4XDUPqTkITqHyTCbOdyHi', 1, '2019-07-19 01-19-04', 1, '2019-07-19 01-19-04', '2019-07-19 01-19-04'),
(92, 'test3', 'Testing User3', '123456', 'tester@gmail.com', '0822121212', 'P', 'jl apa aja dehh kek', '$2y$10$3XL69MssHway8N9ALDIa2uhl1zZ0uZw74e.ierG7LxgrynJTIHuPy', 1, '2019-07-21 09-11-27', 2, '2019-07-21 09-11-27', '2019-07-21 09-11-27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`ID_MOBIL`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `ID_MOBIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
