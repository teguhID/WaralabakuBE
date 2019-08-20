-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2019 pada 20.28
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
(1, 'cost', 'benefit', 'cost', 'benefit', 'benefit', NULL, '2019-07-31 01:44:24');

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
(1, 30.00, 20.00, 20.00, 10.00, 20.00, 0.30, 0.20, 0.20, 0.10, 0.20, NULL, '2019-07-30 22:04:33');

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
(120, 'Franchise 5', 'Medan', 'Minuman', '07 12238491', 'hfey@Hasd.com', 'www.franchise5.com', 14000000, 35, 4, 'tidak ada', 100, '2019-02-18 06:22:16', '2019-03-27 07:49:46'),
(121, 'Kako Thai Tea Indonesia', 'Jl trembesi Blok D.4, Bandar baru, Kemayoran, Jakarta Pusat', 'Minuman', '085735300400', 'kakothaitea@gmail.com', 'http://www.kakothaitea.com', 9900000, 261, 3, 'tidak ada', 240, '2019-07-27 00:57:45', '2019-07-27 00:57:45'),
(122, 'Cheese Tea Inc', 'Jl. Trembesi Blok D 4, Bandarbaru, Kemayoran  ', 'Minuman', '085735300400', 'cheeseteainc@gmail.com', 'http://www.cheeseteainc.com', 19900000, 32, 2, 'tidak ada', 183, '2019-07-27 00:59:24', '2019-07-27 00:59:24'),
(123, 'Rachacha Thai Tea', 'Jl. S. Indragiri 25/290 Sangkrah Pasar Kliwon Surakarta 57119', 'Minuman', '081575862500', 'rachachaid@gmail.com', 'http://www.rachacha.id', 6900000, 150, 2, 'tidak ada', 100, '2019-07-27 01:00:41', '2019-07-27 01:00:41'),
(124, 'NYOKLAT SUPER', 'Jl. Cocak I No. 4 Sambeng, Mangkubumen, Banjarsari, Surakarta 57139', 'Minuman', '082225445558', 'nyoklatsuper@gmail.com', 'http://www.nyoklatsuper.com', 9800000, 154, 2, 'tidak ada', 118, '2019-07-27 01:01:41', '2019-07-27 01:01:41'),
(125, 'Nyot Nyot Thai Tea', 'Jl. Garuda No. 23, Karangasem, Laweyan 57169', 'Minuman', '082133375341', 'thaiteanyotnyot@gmail.com', 'http://www.thaiteanyotnyot.com', 8500000, 188, 2, 'tidak ada', 100, '2019-07-27 01:02:39', '2019-07-27 01:02:39'),
(126, 'Oliv Geprek Ekspres', 'Jl. Kenanga 14 Badran, Purwosari, Laweyan, Solo 57142', 'Makanan', '082133246400', 'olivgeprekekspres@gmail.com', '-', 8000000, 17, 2, 'tidak ada', 42, '2019-07-27 01:04:09', '2019-07-27 01:04:09'),
(127, 'Pisang Nugget Kece', 'Jl. Hasanudin 53, Badran, Purwosari, Laweyan, Solo 57142', 'Makanan', '082220777161', 'pisangnuggetkece@gmail.com', '-', 5800000, 450, 1, 'tidak ada', 139, '2019-07-27 01:05:13', '2019-07-27 01:05:13'),
(128, 'WISCO', 'Jl.Bintan no 10 Grogolan, Ketelan, Banjarsari, Solo', 'Minuman', '085702222138', 'wisco.chocolate@gmail.com', 'http://www.wiscochocolate.com', 5000000, 387, 3, 'tidak ada', 76, '2019-07-27 01:08:02', '2019-07-27 01:08:02'),
(129, 'Moscoblend', 'Jl. Hasanudin 88 Punggawan Surakarta', 'Minuman', '081217978413', 'dwikusumasarendra@gmail.com', 'http://www.moscoblend.com', 3000000, 850, 1, 'tidak ada', 76, '2019-07-27 01:09:50', '2019-07-27 01:09:50'),
(130, 'Forty Eight Ice Blend', 'Jl. Hasanudin No. 53, Badran, Laweyan, Surakarta 57142', 'Minuman', '081328999639', 'forty.eight48@yahoo.co.id', 'http://www.48iceblend.com', 6200000, 152, 3, 'tidak ada', 105, '2019-07-27 01:10:56', '2019-07-27 01:10:56'),
(131, 'Candy Crepes', 'Jl. Kenanga no. 14 Badran, Purwosari, Laweyan,Solo 57142', 'Makanan', '081331546611', 'candycrepes.id@gmail.com', '-', 6700000, 5, 2, 'tidak ada', 149, '2019-07-27 01:12:36', '2019-07-27 01:12:36'),
(132, 'MOMOCHI (Premium Mochi Ice Cream)', 'Vila Bogor Indah Blok F3 No.36-37 Bogor 16157', 'Makanan', '085692221584', 'cv.aruziki@gmail.com', 'http://www.momochi.web.id', 6000000, 16, 2, 'tidak ada', 81, '2019-07-27 01:14:02', '2019-07-27 01:14:02'),
(133, 'Jomar Jamur Krezz', 'Jl. Kenanga 14 Badran, Purwosari, Laweyan, Solo 57142', 'Makanan', '081359336768', 'jomarjamurkrezz@gmail.com', '-', 5200000, 15, 3, 'tidak ada', 112, '2019-07-27 01:15:50', '2019-07-27 01:15:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `no` int(11) NOT NULL,
  `id` varchar(255) DEFAULT NULL,
  `jawaban2` varchar(255) DEFAULT NULL,
  `jawaban3` varchar(255) DEFAULT NULL,
  `jawaban4` varchar(255) DEFAULT NULL,
  `jawaban5` varchar(255) DEFAULT NULL,
  `jawaban6` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`no`, `id`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `created_at`, `updated_at`) VALUES
(28, 'e6f75795-9045-434b-bc87-a3e87bc8b95e', 'jawaban2', 'jawaban2', 'jawaban1', 'jawaban2', 'jawaban1', '2019-08-18 01:27:15', '2019-08-18 01:27:15');

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
(89, 110, 'Franchise 1', 8000000, 56, 2, 1, 100, 0.70, 0.06, 0.75, 0.00, 0.29, 0.43, '2019-02-05 03:06:28', '2019-07-31 01:44:24'),
(92, 113, 'Franchise 3', 9000000, 80, 5, 1, 120, 0.64, 0.09, 0.00, 0.00, 0.39, 0.29, '2019-02-05 03:12:57', '2019-07-31 01:44:24'),
(97, 118, 'Franchise 2', 6800000, 17, 2, 2, 95, 0.78, 0.01, 0.75, 1.00, 0.27, 0.54, '2019-02-05 03:24:12', '2019-07-31 01:44:24'),
(98, 119, 'Franchise 4', 12000000, 68, 4, 2, 125, 0.47, 0.07, 0.25, 1.00, 0.42, 0.39, '2019-02-05 06:59:27', '2019-07-31 01:44:24'),
(99, 120, 'Franchise 5', 14000000, 35, 4, 2, 100, 0.35, 0.04, 0.25, 1.00, 0.29, 0.32, '2019-02-18 06:22:16', '2019-07-31 01:44:24'),
(100, 121, 'Kako Thai Tea Indonesia', 9900000, 261, 3, 2, 240, 0.59, 0.30, 0.50, 1.00, 1.00, 0.64, '2019-07-27 00:57:45', '2019-07-31 01:44:24'),
(101, 122, 'Cheese Tea Inc', 19900000, 32, 2, 2, 183, 0.00, 0.03, 0.75, 1.00, 0.71, 0.40, '2019-07-27 00:59:24', '2019-07-31 01:44:24'),
(102, 123, 'Rachacha Thai Tea', 6900000, 150, 2, 2, 100, 0.77, 0.17, 0.75, 1.00, 0.29, 0.57, '2019-07-27 01:00:41', '2019-07-31 01:44:24'),
(103, 124, 'NYOKLAT SUPER', 9800000, 154, 2, 2, 118, 0.60, 0.18, 0.75, 1.00, 0.38, 0.54, '2019-07-27 01:01:41', '2019-07-31 01:44:25'),
(104, 125, 'Nyot Nyot Thai Tea', 8500000, 188, 2, 2, 100, 0.67, 0.22, 0.75, 1.00, 0.29, 0.55, '2019-07-27 01:02:39', '2019-07-31 01:44:25'),
(105, 126, 'Oliv Geprek Ekspres', 8000000, 17, 2, 2, 42, 0.70, 0.01, 0.75, 1.00, 0.00, 0.46, '2019-07-27 01:04:09', '2019-07-31 01:44:25'),
(106, 127, 'Pisang Nugget Kece', 5800000, 450, 1, 2, 139, 0.83, 0.53, 1.00, 1.00, 0.49, 0.75, '2019-07-27 01:05:13', '2019-07-31 01:44:25'),
(107, 128, 'WISCO', 5000000, 387, 3, 2, 76, 0.88, 0.45, 0.50, 1.00, 0.17, 0.59, '2019-07-27 01:08:02', '2019-07-31 01:44:25'),
(108, 129, 'Moscoblend', 3000000, 850, 1, 2, 76, 1.00, 1.00, 1.00, 1.00, 0.17, 0.83, '2019-07-27 01:09:50', '2019-07-31 01:44:25'),
(109, 130, 'Forty Eight Ice Blend', 6200000, 152, 3, 2, 105, 0.81, 0.17, 0.50, 1.00, 0.32, 0.54, '2019-07-27 01:10:56', '2019-07-31 01:44:25'),
(110, 131, 'Candy Crepes', 6700000, 5, 2, 2, 149, 0.78, 0.00, 0.75, 1.00, 0.54, 0.59, '2019-07-27 01:12:36', '2019-07-31 01:44:25'),
(111, 132, 'MOMOCHI (Premium Mochi Ice Cream)', 6000000, 16, 2, 2, 81, 0.82, 0.01, 0.75, 1.00, 0.20, 0.54, '2019-07-27 01:14:02', '2019-07-31 01:44:25'),
(112, 133, 'Jomar Jamur Krezz', 5200000, 15, 3, 2, 112, 0.87, 0.01, 0.50, 1.00, 0.35, 0.53, '2019-07-27 01:15:50', '2019-07-31 01:44:25');

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
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`no`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `nilaiutility`
--
ALTER TABLE `nilaiutility`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
