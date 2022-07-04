-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2022 pada 09.29
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoenixk_oncard_absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kode_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengaturan_instansi_id` bigint(20) UNSIGNED NOT NULL,
  `waktu` time DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sync` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `session_id`, `user_id`, `kode_instansi`, `pengaturan_instansi_id`, `waktu`, `keterangan`, `sync`, `created_at`, `updated_at`) VALUES
(20, '1E9pIiYAvIvhNUjPtI46cnZuqU3dWlurmp1oeO2Y', 427, '11.11.11.11', 20, '14:32:11', 'Jam Ekstra Kurikuler', 1, '2022-06-17 07:32:11', '2022-06-22 13:56:07'),
(21, 'eUJVqqf08BHPFxv67rRNJFUE5AKJKRg4tNZB4zWW', 880, '11.11.11.11', 20, '14:32:23', 'Jam Ekstra Kurikuler', 1, '2022-06-17 07:32:23', '2022-06-22 13:56:07'),
(22, 'nox4x75zw3vdnWnmKE5W5GZzSyox9lHCv5AN6eQz', 428, '11.11.11.11', 20, '14:32:56', 'Jam Ekstra Kurikuler', 1, '2022-06-17 07:32:56', '2022-06-22 13:56:07'),
(23, 'GLiQsOd3Lhh8btseXd5hkpHNWHlpVkNhOqcac31T', 427, '11.11.11.11', 21, '15:14:30', 'Jam Pulang', 1, '2022-06-17 08:14:30', '2022-06-22 13:56:07'),
(24, 'mOKaZtscoqoeZraGcQoDORTTmYxfA4vQjDO9HfQX', 428, '11.11.11.11', 22, '22:07:48', 'Jam Tidur', 1, '2022-06-21 15:07:48', '2022-06-22 13:56:07'),
(27, 'f6OEloxQtWs1FHqlmmH7r0yRmcxT6qTBcd2a0hra', 437, '11.11.11.11', 23, '11:27:39', 'Jam Belaar', 1, '2022-06-22 04:27:39', '2022-06-22 13:56:07'),
(26, '1nFbXoynOZFZU6FMTxuJPV46G21HaWO2PA3sTzuy', 429, '11.11.11.11', 23, '11:11:21', 'Jam Belaar', 1, '2022-06-22 04:11:21', '2022-06-22 13:56:07'),
(28, '1RJathK4Zo7OeMaNaX6Ocfm48wGvRbhDgQHDBFmc', 439, '11.11.11.11', 23, '12:01:34', 'Jam Belaar', 1, '2022-06-22 05:01:34', '2022-06-22 13:56:07'),
(29, 'hr0NyqribYsFLAfB169hyfdI3GPAOCA4RVQ2K7nD', 444, '11.11.11.11', 23, '14:12:43', 'Jam Belaar', 1, '2022-06-22 07:12:43', '2022-06-22 13:56:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Senin', NULL, NULL),
(2, 'Selasa', NULL, NULL),
(3, 'Rabu', NULL, NULL),
(4, 'Kamis', NULL, NULL),
(5, 'Jumat', NULL, NULL),
(6, 'Sabtu', NULL, NULL),
(7, 'Minggu', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `kode_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_pimpinan` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frame_koordinat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_tunai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kas_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisensi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2022_05_31_223937_create_pengaturan_instansis_table', 5),
(27, '2022_05_31_223101_create_absensis_table', 6),
(18, '2022_05_31_225101_create_instansis_table', 2),
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2022_06_06_135604_create_haris_table', 4),
(28, '2022_06_15_151337_create_siswas_table', 7),
(29, '2022_06_17_090732_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_instansi`
--

CREATE TABLE `pengaturan_instansi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hari` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `tanggal` date DEFAULT NULL,
  `sync` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaturan_instansi`
--

INSERT INTO `pengaturan_instansi` (`id`, `session_id`, `kode_instansi`, `id_hari`, `keterangan`, `time_start`, `time_end`, `tanggal`, `sync`, `created_at`, `updated_at`) VALUES
(23, 'YYmroNSUGwwL2NqN7DQtDDyemSGLzPqhz8Q041Ff', '11.11.11.11', 3, 'Jam Belaar', '07:00:00', '15:00:00', '2022-06-22', 1, '2022-06-22 03:12:19', '2022-06-22 13:58:24'),
(22, 'Hb3XglIgBae76IyyxrlRmaviKruhzDWZC1a7IrHT', '11.11.11.11', 2, 'Jam Tidur', '18:00:00', '23:00:00', '2022-06-22', 1, '2022-06-21 15:07:37', '2022-06-22 13:58:24'),
(20, '5tRZkFDJbQaqsezWncqGmfI6fr3S4fa1xk5jlxnu', '11.11.11.11', 5, 'Jam Ekstra Kurikuler', '14:20:00', '14:40:00', '2022-06-08', 1, '2022-06-17 07:30:21', '2022-06-22 13:58:24'),
(21, 'wplyo6BsW5pNBa1NgXWmg2l8IFbZcgiaLrPnIkCb', '11.11.11.11', 5, 'Jam Pulang', '15:00:00', '16:00:00', '2022-06-08', 1, '2022-06-17 07:34:01', '2022-06-22 13:58:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` bigint(4) UNSIGNED ZEROFILL NOT NULL,
  `kode_instansi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_siswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `kode_instansi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_join` int(11) NOT NULL,
  `name_table_join` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_provinsi`
--

CREATE TABLE `wilayah_provinsi` (
  `id` varchar(2) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah_provinsi`
--

INSERT INTO `wilayah_provinsi` (`id`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'Dki Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'Di Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('94', 'Papua');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`kode_instansi`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indeks untuk tabel `pengaturan_instansi`
--
ALTER TABLE `pengaturan_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_qr_code_unique` (`qr_code`);

--
-- Indeks untuk tabel `wilayah_provinsi`
--
ALTER TABLE `wilayah_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `hari`
--
ALTER TABLE `hari`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pengaturan_instansi`
--
ALTER TABLE `pengaturan_instansi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
