-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2019 pada 00.06
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waralabaku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `attribut`
--

CREATE TABLE `attribut` (
  `id` int(10) UNSIGNED NOT NULL,
  `modal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gerai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keuntungan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `attribut`
--

INSERT INTO `attribut` (`id`, `modal`, `gerai`, `bep`, `fee`, `keuntungan`, `created_at`, `updated_at`) VALUES
(1, 'benefit', 'cost', 'benefit', 'benefit', 'cost', NULL, '2019-03-27 08:40:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id` int(10) UNSIGNED NOT NULL,
  `modal` double(5,2) DEFAULT NULL,
  `gerai` double(5,2) DEFAULT NULL,
  `bep` double(5,2) DEFAULT NULL,
  `fee` double(5,2) DEFAULT NULL,
  `keuntungan` double(5,2) DEFAULT NULL,
  `modalNorm` double(5,2) DEFAULT NULL,
  `geraiNorm` double(5,2) DEFAULT NULL,
  `bepNorm` double(5,2) DEFAULT NULL,
  `feeNorm` double(5,2) DEFAULT NULL,
  `keuntunganNorm` double(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id`, `modal`, `gerai`, `bep`, `fee`, `keuntungan`, `modalNorm`, `geraiNorm`, `bepNorm`, `feeNorm`, `keuntunganNorm`, `created_at`, `updated_at`) VALUES
(1, 3.00, 2.00, 2.00, 1.00, 2.00, 0.30, 0.20, 0.20, 0.10, 0.20, NULL, '2019-04-04 22:46:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datawaralaba`
--

CREATE TABLE `datawaralaba` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modal` bigint(20) DEFAULT NULL,
  `gerai` int(11) DEFAULT NULL,
  `bep` int(11) DEFAULT NULL,
  `fee` enum('ada','tidak ada') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keuntungan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datawaralaba`
--

INSERT INTO `datawaralaba` (`id`, `nama`, `alamat`, `jenis`, `phone`, `email`, `web`, `modal`, `gerai`, `bep`, `fee`, `keuntungan`, `created_at`, `updated_at`) VALUES
(110, 'Franchise 1', 'Bandung', 'Makanan', '022 87655654', 'franchise1@gmail.com', 'www.franchise1.com', 8000000, 56, 2, 'ada', 100, '2019-02-05 03:06:28', '2019-05-09 03:46:33'),
(113, 'Franchise 3', 'Jakarta', 'Minuman', '021 65457896', 'franchise3@gmail.com', 'www.franchise3.com', 9000000, 80, 5, 'ada', 120, '2019-02-05 03:12:57', '2019-03-27 07:46:27'),
(118, 'Franchise 2', 'Malang', 'Makanan', '024 65676567', 'franchise2@gmail.com', 'www.franchise2.com', 6800000, 17, 2, 'tidak ada', 95, '2019-02-05 03:24:11', '2019-03-27 07:47:40'),
(119, 'Franchise 4', 'Surabaya', 'makanan', '034 56565656', 'franchise4@gmail.com', 'www.franchise4.com', 12000000, 68, 4, 'tidak ada', 125, '2019-02-05 06:59:27', '2019-03-27 07:48:48'),
(120, 'Franchise 5', 'Medan', 'Minuman', '07 12238491', 'hfey@Hasd.com', 'www.franchise5.com', 14000000, 35, 4, 'tidak ada', 100, '2019-02-18 06:22:16', '2019-03-27 07:49:46');

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
(5, '2019_01_22_100859_datawaralaba', 1),
(6, '2019_01_23_111328_bobot', 1),
(7, '2019_01_23_140504_jenisattribut', 1),
(8, '2019_01_24_093456_nilaiattribut', 1),
(9, '2019_01_31_115945_update_bobot', 2),
(10, '2019_01_31_120622_update_bobot', 3),
(11, '2019_01_31_121111_update_bobot', 4),
(12, '2019_01_31_122354_update_bobot', 5),
(13, '2019_01_31_122538_update_bobot1', 6),
(14, '2019_01_31_122844_update_bobot1', 7),
(15, '2019_01_23_140504_attribut', 8),
(16, '2019_02_02_034032_nilaikriteria', 8),
(17, '2019_02_02_034506_minmaxkriteria', 9),
(18, '2019_02_02_041551_edit_data_waralaba', 10),
(19, '2019_02_02_142454_nilaiutility', 11),
(20, '2019_05_07_214953_create_user_models_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiutility`
--

CREATE TABLE `nilaiutility` (
  `id` int(10) UNSIGNED NOT NULL,
  `idDW` int(5) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modal` int(11) DEFAULT NULL,
  `gerai` int(11) DEFAULT NULL,
  `bep` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `keuntungan` int(11) DEFAULT NULL,
  `modalUtility` double(4,2) DEFAULT NULL,
  `geraiUtility` double(4,2) DEFAULT NULL,
  `bepUtility` double(4,2) DEFAULT NULL,
  `feeUtility` double(4,2) DEFAULT NULL,
  `keuntunganUtility` double(4,2) DEFAULT NULL,
  `hasil` double(4,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilaiutility`
--

INSERT INTO `nilaiutility` (`id`, `idDW`, `nama`, `modal`, `gerai`, `bep`, `fee`, `keuntungan`, `modalUtility`, `geraiUtility`, `bepUtility`, `feeUtility`, `keuntunganUtility`, `hasil`, `created_at`, `updated_at`) VALUES
(89, 110, 'Franchise 1', 8000000, 56, 2, 1, 100, 0.17, 0.38, 0.00, 0.00, 0.83, 0.29, '2019-02-05 03:06:28', '2019-05-09 03:46:33'),
(92, 113, 'Franchise 3', 9000000, 80, 5, 1, 120, 0.31, 0.00, 1.00, 0.00, 0.17, 0.32, '2019-02-05 03:12:57', '2019-05-09 03:46:33'),
(97, 118, 'Franchise 2', 6800000, 17, 2, 2, 95, 0.00, 1.00, 0.00, 1.00, 1.00, 0.50, '2019-02-05 03:24:12', '2019-05-09 03:46:33'),
(98, 119, 'Franchise 4', 12000000, 68, 4, 2, 125, 0.72, 0.19, 0.67, 1.00, 0.00, 0.49, '2019-02-05 06:59:27', '2019-05-09 03:46:33'),
(99, 120, 'Franchise 5', 14000000, 35, 4, 2, 100, 1.00, 0.71, 0.67, 1.00, 0.83, 0.84, '2019-02-18 06:22:16', '2019-05-09 03:46:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$WEvHm9JmEiZwJUl80vxCuuupF67I/euDYZS0No68SqmJ6HFUheK7W', '2019-05-09 03:14:48', '2019-05-09 03:14:48'),
(6, '12312', 'asd@hha.com', '$2y$10$Y3ltAjx/4av5F0e595GWy.eA8tgQwS53D9Nssw2CsIeqTL8qZrzvC', '2019-05-09 04:35:29', '2019-05-09 04:35:29'),
(7, 'asd', 'asd@asd.asd', '$2y$10$/bjf6AlMh9nNmL/wEHg1H.UqSXLoADZd7vRGzN4VUgMHMqzaLGKLy', '2019-05-12 04:20:26', '2019-05-12 04:20:26'),
(8, 'jjjj', 'jjjj@jjjj.com', '$2y$10$tURbuNo7VPsv6KMw.GXVdeWDANzYhPBL0qGAfZGMNUPmkuVf9Rsb6', '2019-06-19 06:55:52', '2019-06-19 06:55:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `attribut`
--
ALTER TABLE `attribut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datawaralaba`
--
ALTER TABLE `datawaralaba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilaiutility`
--
ALTER TABLE `nilaiutility`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `attribut`
--
ALTER TABLE `attribut`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datawaralaba`
--
ALTER TABLE `datawaralaba`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `nilaiutility`
--
ALTER TABLE `nilaiutility`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
