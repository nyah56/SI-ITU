-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 14.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_05_27_041003_create_produks_table', 1);

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
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` varchar(15) NOT NULL,
  `id_pesan` varchar(15) NOT NULL,
  `id_konsumen` varchar(15) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `kirim_hari` text NOT NULL,
  `jumlah` int(10) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_pesan`, `id_konsumen`, `id_produk`, `kirim_hari`, `jumlah`, `alamat`) VALUES
('J001', 'O001', 'K001', 'B001', 'Senin', 2220000, 'Konoha'),
('J002', 'O001', 'K003', 'B001', 'Selasa', 33, 'Santonio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id_konsumen` varchar(15) NOT NULL,
  `nama_konsumen` text NOT NULL,
  `contact` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id_konsumen`, `nama_konsumen`, `contact`, `alamat`) VALUES
('K001', 'Danar', '12345', 'Joglo'),
('K002', 'Ibnu', '12345', 'Sulfat'),
('K003', 'Banjarius', '08218319313', 'Sunagakure');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pesan` varchar(15) NOT NULL,
  `id_konsumen` varchar(15) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pesan`, `id_konsumen`, `id_produk`, `jumlah`, `alamat`) VALUES
('O001', 'K001', 'B001', 8, 'Konoha gg.1'),
('O002', 'K003', 'B004', 12, 'Sulfat'),
('O003', 'K002', 'B002', 12, 'Sulfat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` varchar(15) NOT NULL,
  `role_id` int(5) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_persediaan`
--

CREATE TABLE `tb_persediaan` (
  `id_persediaan` varchar(15) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `id_petani` varchar(15) NOT NULL,
  `masa_kadaluarsa` date NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_persediaan`
--

INSERT INTO `tb_persediaan` (`id_persediaan`, `id_produk`, `id_petani`, `masa_kadaluarsa`, `jumlah`) VALUES
('PW001', 'B001', 'P001', '2022-05-31', 11),
('PW002', 'B004', 'P002', '2022-06-25', 22),
('PW003', 'B001', 'P001', '2022-06-07', 1233),
('PW004', 'B003', 'P004', '2022-06-29', 123),
('PW005', 'B003', 'P004', '2022-06-30', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petani`
--

CREATE TABLE `tb_petani` (
  `id_petani` varchar(15) NOT NULL,
  `nama_petani` text NOT NULL,
  `contact` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petani`
--

INSERT INTO `tb_petani` (`id_petani`, `nama_petani`, `contact`, `alamat`) VALUES
('P001', 'Ibnu', '1234', 'Konoha gang 8'),
('P002', 'Danu', '12345', 'Konoha'),
('P004', 'Dinasa', '1231231', 'Santonio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` varchar(15) NOT NULL,
  `nama_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`) VALUES
('B001', 'Wortel'),
('B002', 'Babi'),
('B003', 'Ayam'),
('B004', 'Sayur Kol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Ibnu', 'Ibnu', '$2y$10$tp3yORWAKAdlvw6jo5tIw.uqEnlCUe7RlnRoUPtkhlBuYqdg18dnG', 0, '2022-06-22 08:09:56', '2022-06-22 11:22:36'),
(2, 'Dana', 'dana123', '$2y$10$M9GWOkAVg3plFi0sNh/Pa.0djjX8eUbWA/pcPARwKa3cPNS7ssUHK', 0, '2022-06-22 10:04:53', '2022-06-22 10:04:53'),
(4, 'Daniar', 'daniar234', '$2y$10$4w0gA0OVMvLxahn2N4Rf.upRtE0cyDFFOAFTphw.dQTE5xdHeOsoO', 1, '2022-06-22 12:07:57', '2022-06-22 12:07:57'),
(6, 'Jonathan Junior', 'jo90123', '$2y$10$FVgrw3RupCeFCSaMs.cnBu.ymPapYxHVAT6ecYMflvdv1ONHpbYdO', 0, '2022-06-23 04:57:58', '2022-06-23 04:58:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_persediaan`
--
ALTER TABLE `tb_persediaan`
  ADD PRIMARY KEY (`id_persediaan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_petani` (`id_petani`);

--
-- Indeks untuk tabel `tb_petani`
--
ALTER TABLE `tb_petani`
  ADD PRIMARY KEY (`id_petani`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_konsumen`) REFERENCES `tb_konsumen` (`id_konsumen`),
  ADD CONSTRAINT `tb_jadwal_ibfk_3` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pemesanan` (`id_pesan`);

--
-- Ketidakleluasaan untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_konsumen`) REFERENCES `tb_konsumen` (`id_konsumen`);

--
-- Ketidakleluasaan untuk tabel `tb_persediaan`
--
ALTER TABLE `tb_persediaan`
  ADD CONSTRAINT `tb_persediaan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_persediaan_ibfk_2` FOREIGN KEY (`id_petani`) REFERENCES `tb_petani` (`id_petani`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
