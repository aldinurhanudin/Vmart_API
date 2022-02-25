-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2021 pada 10.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan-app1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_anggota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nis`, `nama_anggota`, `alamat`, `ttl_anggota`, `no_hp`) VALUES
(51, '10001', 'sahrul', 'jl.kujang jaya, ds.panyingkiran lor', 'indramayu', '0877777111'),
(52, '10002', 'andita', 'lelea', 'indramayu', '08777123434'),
(53, '10003', 'ridzal', 'jl.tatata', 'cirebon', '0808339383'),
(56, '10004', 'Andriatno', 'bojong petet', 'Indramayu', '083389302'),
(57, '10005', 'feby', 'indramayu', 'indramayu', '08777717189'),
(58, '10006', 'nandang', 'celeng', 'cirebon', '0987666677'),
(59, '10007', 'hakim', 'losarang', 'indramayu', '0987655'),
(60, '10008', 'ilham', 'cirebon', 'cerebon', '09240280'),
(61, '10009', 'cireb', 'cirebon', 'malang', '028492749'),
(62, '10010', 'aldi', 'bogor', 'bogor', '792739279');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `penerbit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `id_kategori`, `judul`, `pengarang`, `tahun_terbit`, `penerbit`, `stok`) VALUES
(14, 'BK-001', 11, 'sejarah nabi', 'ridho', 2013, 'pt.hijrah', 13),
(16, '10005', 6, 'hfhfh', 'djhdjg', 2001, 'gig', 21),
(17, '48920', 11, '25 kisah Nabi&Rasul', 'mahmud', 2015, 'gramed', 20),
(18, '1354', 3, 'Aqidah akhlak', 'bidin.amd.pp', 2018, 'tokmed', 7),
(19, '3221', 10, '7 Cara patuh terhadap orang tua', 'ahmadamd', 2019, 'gramed', 5),
(20, '2283', 3, 'Prakarya', 'budiman', 2020, 'mediacom', 5),
(21, '1134', 10, 'Belajar Membaca v3', 'yono.bb', 2019, 'tokpep', 30),
(22, '4789', 10, 'Belajar membaca v2', 'yono.bb', 2018, 'tokmed', 28),
(23, '2265', 10, 'Belajar membaca v1', 'yono.bb', 2017, 'tokmed', 15),
(24, '7483', 10, 'Lagu-Lagu Nasional', 'yamin', 2018, 'gramed', 22),
(25, '96543', 3, 'B.Indonesia', 'sudirmnto', 2019, 'medialyr', 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `denda` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'ilmu pengetahuan'),
(4, 'bahasa'),
(5, 'hadist'),
(6, 'teknologi'),
(10, 'untuk anak-anak'),
(11, 'sejarah'),
(12, 'novel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(101, '2014_10_12_000000_create_users_table', 1),
(102, '2014_10_12_100000_create_password_resets_table', 1),
(103, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(104, '2021_11_26_005559_create_denda_table', 1),
(105, '2021_11_26_010814_create_transaksi_table', 1),
(106, '2021_11_26_011006_create_peminjaman_table', 1),
(107, '2021_11_26_011927_create_buku_table', 1),
(108, '2021_11_26_011958_create_anggota_table', 1),
(109, '2021_11_26_012011_create_kategori_table', 1),
(110, '2021_11_26_014018_create_role_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode_peminjaman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_buku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_anggota` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama`) VALUES
(1, 'Admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_buku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_anggota` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_mengembalikan` date DEFAULT NULL,
  `denda` double DEFAULT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_transaksi`, `kode_buku`, `id_anggota`, `tanggal_pinjam`, `tanggal_kembali`, `tanggal_mengembalikan`, `denda`, `id_petugas`) VALUES
(58, 'KP-001', 'BK-001', 52, '2021-08-03', '2021-12-03', '2021-12-05', 10000, 1),
(59, 'KP-002', 'BK-001', 52, '2021-12-04', '2021-12-06', '2021-12-06', NULL, 1),
(60, 'KP-003', 'BK-001', 52, '2021-12-01', '2021-12-03', '2021-12-06', 15000, 1),
(61, 'KP-004', '10005', 53, '2021-12-16', '2021-12-17', '2021-12-10', NULL, 1),
(64, 'KP-005', 'BK-001', 51, '2021-12-01', '2021-12-03', '2021-12-10', 35000, 1),
(65, 'KP-006', 'BK-001', 53, '2021-12-09', '2021-12-11', '2021-12-15', 20000, 1),
(66, 'KP-007', '3221', 51, '2021-12-08', '2021-12-10', '2021-12-16', 30000, 1),
(67, 'KP-008', '3221', 51, '2021-12-15', '2021-12-16', NULL, NULL, 1),
(68, 'KP-009', '3221', 53, '2021-12-01', '2021-12-03', NULL, NULL, 1),
(69, 'KP-010', '3221', 56, '2021-12-01', '2021-12-03', NULL, NULL, 1),
(70, 'KP-011', '3221', 56, '2021-12-01', '2021-12-02', NULL, NULL, 1),
(71, 'KP-012', '3221', 53, '2021-12-02', '2021-12-17', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'sahrul', 'sahrul@gmail.com', NULL, '$2y$10$EZPwNXSzVbCf1aCRDmrk0OXtnVFgF09l/sp5HD226Ai39vH6X7r1y', NULL, 2, '2021-11-29 19:39:57', '2021-11-29 19:39:57'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$C6gcs6SHB2ZgA/1Kau2UlumbgDJTdPyRR5DXU0vc0NyBALDqUryFK', NULL, 1, '2021-11-29 19:39:57', '2021-11-29 19:39:57'),
(3, 'Melani', 'ivan.hardiansyah@yahoo.co.id', NULL, '$2y$10$Gy8ZJC.o2cTp2aD/A13yTOHXGnIj0OskD.eu4UY6QFmgdNrJ5febm', NULL, 2, '2021-11-29 19:39:57', '2021-11-29 19:39:57'),
(5, 'Sirait', 'laswi.halimah@marbun.info', NULL, '$2y$10$rHzn8Gr1ArkHS7qcCu1LauaJYL5y7bTEpcrdKgyM6rGx7zafstzLq', NULL, 1, '2021-11-29 19:39:57', '2021-11-29 19:39:57'),
(6, 'Nurdiyanti', 'briyanti@yahoo.co.id', NULL, '$2y$10$DzdbXwR8rbduK9WReRUvne9BeX8ebpjJFgq7TXCY3OiUhwv3u//DS', NULL, 2, '2021-11-29 19:39:57', '2021-11-29 19:39:57'),
(7, 'Safitri', 'yusada@astuti.web.id', NULL, '$2y$10$nugCUoVGIp7u4CJieivDCuijW8LYCCR1T6R6392FCB3ArU9r/DPXa', NULL, 1, '2021-11-29 19:39:57', '2021-11-29 19:39:57'),
(8, 'ridjal', 'winarsih.lasmono@yahoo.com', NULL, '$2y$10$VGzvG1/TiIhwODOXpfH5bu9HXzn5xKz65Cwb0F6cpHYKM72O2C6lC', NULL, 2, '2021-11-29 19:39:58', '2021-12-03 06:19:12'),
(10, 'Prayoga', 'kacung99@prasetyo.name', NULL, '$2y$10$I/FftVgaQXhYyjkvtpGTN.BmNzUPsKQKlfbnGlD10iq0wwqymKFVa', NULL, 2, '2021-11-29 19:39:58', '2021-11-29 19:39:58'),
(11, 'andita', 'andita@gmail.com', NULL, '$2y$10$LgZn5dL2nDVDkck/DooTfOtHLD2fH9LlwUTx0kqxddl8V2RsjEI4O', NULL, 2, '2021-12-03 06:11:56', '2021-12-03 06:11:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `denda`
--
ALTER TABLE `denda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
