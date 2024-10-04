-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2024 pada 17.23
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp` varchar(30) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`, `email`, `tanggal_lahir`, `telp`, `Alamat`) VALUES
(1, 'VIRA NUR ZAHRA', 'viranurzahra12', '12345', 'viranzahra12@gmail.com', '2003-12-01', '085520712944', 'Indramyu'),
(2, 'JINGGA APRIYANIS', 'jinggaapriyanis', '54321', 'jinggaapriyanis12@gmail.com', '2003-04-02', '082216338491', 'Indramayu'),
(3, 'MOCHAMAD RIZKY MAULANA', 'riskymaulana', '6789', 'riskimaulana12@gmail.com', '2003-05-02', '081224124406', 'Indramayu'),
(4, 'ANDIKA BERWIN PRATAMA', 'andikanugraha', '9876', 'andikanugraha12gmail.com', '2003-05-17', '082321247672', 'Indramayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayi_balita`
--

CREATE TABLE `bayi_balita` (
  `id_pasien` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `ortu` varchar(50) NOT NULL,
  `BB` int(5) DEFAULT NULL,
  `TB` int(5) DEFAULT NULL,
  `Umur` int(5) DEFAULT NULL,
  `Hasil_pemeriksaan` text DEFAULT NULL,
  `Pengobatan` text DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bayi_balita`
--

INSERT INTO `bayi_balita` (`id_pasien`, `tanggal_daftar`, `nama`, `tanggal_lahir`, `ortu`, `BB`, `TB`, `Umur`, `Hasil_pemeriksaan`, `Pengobatan`, `alamat`, `no_hp`) VALUES
(70, '2023-06-12', 'andini', '2023-06-01', 'surti', 20, 100, 2, 'nqyweo', 'qnyexuxy', 'lelea', '0852238678'),
(84, '2023-07-18', 'zahra', '2023-07-01', 'nisa', 0, 0, 0, '-', '-', 'jl.sehati sejiwa', '087824536897'),
(85, '2023-07-18', 'nur', '2023-07-18', ' ajzk', 0, 0, 0, '-', '-', 'jl.pahlawan no.24', '0878978675412');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `id_pasien` int(11) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `BB` int(5) DEFAULT NULL,
  `TB` int(5) DEFAULT NULL,
  `Umur` int(5) DEFAULT NULL,
  `Letak_Janin` varchar(30) DEFAULT NULL,
  `UK` varchar(30) DEFAULT NULL,
  `Tinggi_Fundus` varchar(30) DEFAULT NULL,
  `Keluhan` text DEFAULT NULL,
  `Imunisasi` varchar(100) DEFAULT NULL,
  `Analisa` text DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ibu_hamil`
--

INSERT INTO `ibu_hamil` (`id_pasien`, `tanggal_datang`, `nama`, `tanggal_lahir`, `BB`, `TB`, `Umur`, `Letak_Janin`, `UK`, `Tinggi_Fundus`, `Keluhan`, `Imunisasi`, `Analisa`, `alamat`, `no_hp`) VALUES
(8, '2023-06-04', 'jingga apriyanis', '2023-06-04', 30, 120, 12, 'tybwte', 'bskjsgqw', 'sqg dyt', 'crtey', 'gdtegd', 'wtebw', 'jl.sehati sejiwa', '087824536897'),
(39, '2023-07-16', 'icha', '2023-07-01', 0, 0, 0, '-', '-', '-', '-', '-', '-', 'jln.pasarean', '087857661005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu_nifas`
--

CREATE TABLE `ibu_nifas` (
  `id_pasien` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `BB` int(5) DEFAULT NULL,
  `TB` int(5) DEFAULT NULL,
  `Umur` int(5) DEFAULT NULL,
  `Keluhan` text DEFAULT NULL,
  `Kunjungan1` text DEFAULT NULL,
  `Kunjungan2` text DEFAULT NULL,
  `Kunjungan3` text DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ibu_nifas`
--

INSERT INTO `ibu_nifas` (`id_pasien`, `tanggal_daftar`, `nama`, `tanggal_lahir`, `BB`, `TB`, `Umur`, `Keluhan`, `Kunjungan1`, `Kunjungan2`, `Kunjungan3`, `alamat`, `no_hp`) VALUES
(5, '2023-06-02', 'vira', '2023-06-02', 30, 120, 2, 'dagjgdaf', 'ajhg', 'dgfkajs', 'asdgkiee', 'jln.kapten istana raya', '087824536897'),
(8, '2023-07-14', 'zahra', '2023-07-28', 50, 0, 0, 'sfjslkfs', '', '', 'asdgkiee', 'jl.sehati sejiwa', '087824536897');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_pasien` int(11) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `BB` int(5) DEFAULT NULL,
  `TB` int(5) DEFAULT NULL,
  `Umur` int(5) DEFAULT NULL,
  `Hasil_pemeriksaan` text DEFAULT NULL,
  `jenis_imunisasi` text DEFAULT NULL,
  `Analisa` text DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `imunisasi`
--

INSERT INTO `imunisasi` (`id_pasien`, `tanggal_datang`, `nama`, `tanggal_lahir`, `nama_ortu`, `BB`, `TB`, `Umur`, `Hasil_pemeriksaan`, `jenis_imunisasi`, `Analisa`, `tanggal_kembali`, `alamat`, `no_hp`) VALUES
(3, '2023-05-05', 'abid', '2023-05-05', 'wiwi', 0, 0, 0, 'bkasdgak', 'dahsdgka', 'adhjkfds', '0000-00-00', 'tangerang', '09878765'),
(7, '2023-07-02', 'angga', '2011-05-12', 'aan', 0, 0, 0, '-', '-', '-', '0000-00-00', 'jangga tua', '0852238678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `notelp`, `pekerjaan`) VALUES
(1, 'Iman K', 'duhaweb@gmail.com', '081391225070', 'Karyawan Swasta'),
(3, 'Arif', 'arif@gmail.com', '081324567709', 'Karyawan Swasta'),
(4, 'Andi', 'andi@gmail.com', '083274355769', 'Pengusaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `email`, `password`) VALUES
(32, 'zahra', 'zahra01@gmail.com', 'zahra01'),
(33, 'hurul', 'hurulcntik@gmail.com', '12345'),
(34, 'putra gans', 'putraagatakgitik@gmail.com', '12345'),
(35, 'aan', 'aan@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `tanggal_lahir` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_pasien`, `nama`, `email`, `mobile`, `tanggal_lahir`) VALUES
(1, 'vira', 'vira12@gmail.com', '09876', 11203);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id`, `tanggal`, `no_antrian`, `status`, `updated_date`) VALUES
(1, '2023-05-24', 1, '1', '2023-05-24 22:16:14'),
(2, '2023-05-24', 2, '1', '2023-05-24 22:28:22'),
(3, '2023-05-24', 3, '1', '2023-05-24 22:18:27'),
(4, '2023-05-24', 4, '1', '2023-05-24 22:28:19'),
(5, '2023-05-24', 5, '1', '2023-05-24 22:28:17'),
(6, '2023-05-24', 6, '1', '2023-05-24 22:29:03'),
(7, '2023-05-24', 7, '0', NULL),
(8, '2023-05-25', 1, '0', NULL),
(9, '2023-05-25', 2, '0', NULL),
(10, '2023-05-25', 3, '0', NULL),
(11, '2023-05-25', 4, '0', NULL),
(12, '2023-05-25', 5, '0', NULL),
(13, '2023-05-25', 6, '0', NULL),
(14, '2023-05-25', 7, '0', NULL),
(15, '2023-05-25', 8, '0', NULL),
(16, '2023-05-25', 9, '0', NULL),
(17, '2023-05-25', 10, '0', NULL),
(18, '2023-05-25', 11, '0', NULL),
(19, '2023-05-25', 12, '0', NULL),
(20, '2023-05-25', 13, '0', NULL),
(21, '2023-05-25', 14, '0', NULL),
(22, '2023-05-25', 15, '0', NULL),
(23, '2023-05-25', 16, '0', NULL),
(24, '2023-05-25', 17, '1', '2023-05-25 13:39:18'),
(25, '2023-05-25', 18, '1', '2023-05-25 13:39:02'),
(26, '2023-05-25', 19, '1', '2023-05-25 13:38:40'),
(27, '2023-05-25', 20, '1', '2023-05-25 13:38:33'),
(28, '2023-05-25', 21, '1', '2023-05-25 13:38:27'),
(29, '2023-05-25', 22, '1', '2023-05-25 13:09:00'),
(30, '2023-05-25', 23, '1', '2023-05-25 13:39:09'),
(31, '2023-05-25', 24, '1', '2023-05-25 13:38:49'),
(32, '2023-05-25', 25, '0', NULL),
(33, '2023-05-25', 26, '0', NULL),
(34, '2023-05-25', 27, '0', NULL),
(35, '2023-05-25', 28, '0', NULL),
(36, '2023-05-25', 29, '0', NULL),
(37, '2023-05-25', 30, '0', NULL),
(38, '2023-05-25', 31, '0', NULL),
(39, '2023-05-25', 32, '1', '2023-05-25 13:44:46'),
(40, '2023-05-25', 33, '1', '2023-05-25 13:44:37'),
(41, '2023-05-25', 34, '1', '2023-05-25 13:44:32'),
(42, '2023-05-25', 35, '1', '2023-05-25 13:44:24'),
(43, '2023-05-29', 1, '1', '2023-05-29 14:14:26'),
(44, '2023-05-29', 2, '1', '2023-05-29 16:08:47'),
(45, '2023-05-29', 3, '1', '2023-05-29 16:08:52'),
(46, '2023-05-29', 4, '1', '2023-05-29 16:09:02'),
(47, '2023-05-29', 5, '1', '2023-05-29 16:08:38'),
(48, '2023-05-29', 6, '1', '2023-05-29 14:15:05'),
(49, '2023-05-29', 7, '0', NULL),
(50, '2023-05-29', 8, '0', NULL),
(51, '2023-05-29', 9, '0', NULL),
(52, '2023-05-29', 10, '0', NULL),
(53, '2023-05-29', 11, '1', '2023-05-29 16:22:58'),
(54, '2023-06-01', 1, '1', '2023-06-01 23:11:23'),
(55, '2023-06-01', 2, '1', '2023-06-01 23:45:06'),
(56, '2023-06-01', 3, '1', '2023-06-01 23:57:24'),
(57, '2023-06-01', 4, '0', NULL),
(58, '2023-06-01', 5, '0', NULL),
(59, '2023-06-01', 6, '1', '2023-06-01 23:11:38'),
(60, '2023-06-01', 7, '1', '2023-06-01 23:58:05'),
(61, '2023-06-01', 8, '0', NULL),
(62, '2023-06-01', 9, '0', NULL),
(63, '2023-06-01', 10, '0', NULL),
(64, '2023-06-01', 11, '0', NULL),
(65, '2023-06-01', 12, '1', '2023-06-01 23:11:55'),
(66, '2023-06-01', 13, '0', NULL),
(67, '2023-06-01', 14, '0', NULL),
(68, '2023-06-01', 15, '0', NULL),
(69, '2023-06-01', 16, '0', NULL),
(70, '2023-06-01', 17, '0', NULL),
(71, '2023-06-01', 18, '0', NULL),
(72, '2023-06-01', 19, '0', NULL),
(73, '2023-06-01', 20, '0', NULL),
(74, '2023-06-01', 21, '0', NULL),
(75, '2023-06-01', 22, '0', NULL),
(76, '2023-06-01', 23, '1', '2023-06-01 23:42:54'),
(77, '2023-06-01', 24, '0', NULL),
(78, '2023-06-01', 25, '0', NULL),
(79, '2023-06-01', 26, '1', '2023-06-01 23:29:04'),
(80, '2023-06-02', 1, '1', '2023-06-02 00:01:26'),
(81, '2023-06-02', 2, '0', NULL),
(82, '2023-06-02', 3, '0', NULL),
(83, '2023-06-02', 4, '0', NULL),
(84, '2023-06-02', 5, '1', '2023-06-02 10:46:10'),
(85, '2023-06-02', 6, '0', NULL),
(86, '2023-06-02', 7, '0', NULL),
(87, '2023-06-06', 1, '1', '2023-06-06 16:54:08'),
(88, '2023-06-08', 1, '1', '2023-06-08 20:53:33'),
(89, '2023-06-09', 1, '0', NULL),
(90, '2023-06-11', 1, '1', '2023-06-11 11:02:19'),
(91, '2023-06-25', 1, '0', NULL),
(92, '2023-07-02', 1, '0', NULL),
(93, '2023-07-16', 1, '0', NULL),
(94, '2023-07-18', 1, '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Zahra', 'viranzahra12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Old crumpled paper texture background_ Horizontal banner.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bayi_balita`
--
ALTER TABLE `bayi_balita`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `ibu_nifas`
--
ALTER TABLE `ibu_nifas`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bayi_balita`
--
ALTER TABLE `bayi_balita`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `ibu_nifas`
--
ALTER TABLE `ibu_nifas`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
