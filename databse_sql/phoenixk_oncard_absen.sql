-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2022 pada 11.35
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
  `tanggal` date DEFAULT NULL,
  `sync` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `session_id`, `user_id`, `kode_instansi`, `pengaturan_instansi_id`, `waktu`, `keterangan`, `tanggal`, `sync`, `created_at`, `updated_at`) VALUES
(20, '1E9pIiYAvIvhNUjPtI46cnZuqU3dWlurmp1oeO2Y', 428, '11.11.11.11', 20, '14:32:11', 'Jam Ekstra Kurikuler', NULL, 0, '2022-06-17 07:32:11', '2022-06-22 13:56:07'),
(21, 'eUJVqqf08BHPFxv67rRNJFUE5AKJKRg4tNZB4zWW', 880, '11.11.11.11', 20, '14:32:23', 'Jam Ekstra Kurikuler', NULL, 0, '2022-06-17 07:32:23', '2022-06-22 13:56:07'),
(22, 'nox4x75zw3vdnWnmKE5W5GZzSyox9lHCv5AN6eQz', 428, '11.11.11.11', 20, '14:32:56', 'Jam Ekstra Kurikuler', NULL, 0, '2022-06-17 07:32:56', '2022-06-22 13:56:07'),
(23, 'GLiQsOd3Lhh8btseXd5hkpHNWHlpVkNhOqcac31T', 427, '11.11.11.11', 21, '15:14:30', 'Jam Pulang', NULL, 0, '2022-06-17 08:14:30', '2022-06-22 13:56:07'),
(24, 'mOKaZtscoqoeZraGcQoDORTTmYxfA4vQjDO9HfQX', 428, '11.11.11.11', 22, '22:07:48', 'Jam Tidur', NULL, 0, '2022-06-21 15:07:48', '2022-06-22 13:56:07'),
(27, 'f6OEloxQtWs1FHqlmmH7r0yRmcxT6qTBcd2a0hra', 437, '11.11.11.11', 23, '11:27:39', 'Jam Belaar', NULL, 0, '2022-06-22 04:27:39', '2022-06-22 13:56:07'),
(26, '1nFbXoynOZFZU6FMTxuJPV46G21HaWO2PA3sTzuy', 429, '11.11.11.11', 23, '11:11:21', 'Jam Belaar', NULL, 0, '2022-06-22 04:11:21', '2022-06-22 13:56:07'),
(28, '1RJathK4Zo7OeMaNaX6Ocfm48wGvRbhDgQHDBFmc', 439, '11.11.11.11', 23, '12:01:34', 'Jam Belaar', NULL, 0, '2022-06-22 05:01:34', '2022-06-22 13:56:07'),
(29, 'hr0NyqribYsFLAfB169hyfdI3GPAOCA4RVQ2K7nD', 444, '11.11.11.11', 23, '14:12:43', 'Jam Belaar', NULL, 0, '2022-06-22 07:12:43', '2022-06-22 13:56:07');

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

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`kode_instansi`, `user_id`, `user_pimpinan`, `nama_instansi`, `email_instansi`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `about`, `visi`, `misi`, `frame_koordinat`, `image`, `video`, `galery`, `package_module`, `saldo_tunai`, `saldo_bank`, `saldo_payment`, `kas_sekolah`, `lisensi`, `ip`, `created_at`, `updated_at`) VALUES
('11.11.11.11', 6, NULL, 'Ponpes Ahmad Dahlan', 'ahmadahlan@mail.com', 'Teluk Kuantan', '14', '1401', '1401030', 'PONDOK PESANTREN KH. AHMAD DAHLAN KUANTAN SINGINGI', 'TERWUJUDNYA PESANTREN KH.AHMAD DAHLAN SEBAGAI PUSAT PENGKADERAN ULAMA PERSYARIKATAN DAN UMMAT', '•	Menyelenggarakan dan mengembangkan program Tahfidz Al-qur’an.;\r\n•	Menyelenggarakan dan mengembangkan pendidikan Islam guna  membangun \r\n        kompetensi dan keunggulan santri di bidang ilmu dasar Islam dan Sains.;\r\n•	Menyelenggarakan dan mengembangkan pendidikan bahasa Arab dan bahasa \r\n        Inggris sebagai alat untuk mendalami Ilmu agama dan Sains.;\r\n•	Menyelenggarakan dan mengembangkan pendidikan kepemimpinan untuk membangun kompetensi santri di bidang akhlak, kepribadian & kepemimpinan.;\r\n•	Membina kemandirian santri melalui kegiatan pembiasaan dan pengembangan diri yang terencana dan berkesinambungan.;\r\n•	Menjalin kerjasama yang harmonis antara warga Pesantren dengan persyarikatan serta lembaga lain yang terkait.;\r\n•	Melaksanakan Proses Pembelajaranjaran  yang holistic dan Integratife;\r\n•	Menerapkan manajemen pelayanan pendidikan dengan sistem manajemen mutu yang terstandar.;', NULL, NULL, NULL, NULL, '', '2910500', '0', '40431', '281931', 'ghjX2dFPtv', NULL, '2022-07-15 09:35:18', '2022-07-15 09:35:18');

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
(29, '2022_06_17_090732_create_notifications_table', 7),
(30, '0000_00_00_000000_create_websockets_statistics_entries_table', 8),
(31, '2022_06_29_133001_create_staff_table', 8);

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
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `kode_instansi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `tgl_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_konsentrasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mengajar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pns` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_staff` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_relation` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_relation` bigint(20) NOT NULL,
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

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `kode_instansi`, `id_user`, `nama_siswa`, `jk`, `tgl_lahir`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `agama`, `tahun_masuk`, `kelas`, `created_at`, `updated_at`) VALUES
(0329, '11.11.11.11', 428, 'Al Disa Bela Saputri.', 'Perempuan', '2004-01-01', 'Giri Sako', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0331, '11.11.11.11', 430, 'Braja Santana', 'Laki-Laki', '2004-04-18', 'Sungai rumbio koto kari', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0332, '11.11.11.11', 434, 'Dhiah Rahma Setia Ningrum', 'Perempuan', '2004-02-10', 'Sungai buluh', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0333, '11.11.11.11', 431, 'Erca Triandara', 'Perempuan', '2004-02-11', 'Muara lembu', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0334, '11.11.11.11', 429, 'Fadni Fadila Natasya', 'Perempuan', '2004-07-19', 'Sumber jaya', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0335, '11.11.11.11', 922, 'Fadhlur Rahman Fakhri', 'Laki-Laki', '2004-06-29', 'Talontam Benai', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0336, '11.11.11.11', 432, 'Famesya Amanda Damayanti', 'Perempuan', '2004-05-25', 'Pangkalan pucuk rantau', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0338, '11.11.11.11', 427, 'Heni Nurfitri', 'Perempuan', '2004-03-07', 'Pesajian', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0339, '11.11.11.11', 489, 'Ikhsan Alqodri M', 'Laki-Laki', '2004-11-24', 'Sungai sirih', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0342, '11.11.11.11', 483, 'Muhammad Fauzan', 'Laki-Laki', '2004-02-14', 'Ponpes KH. Ahmad Dahlan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0343, '11.11.11.11', 491, 'Rahmadani Fitri', 'Perempuan', '2003-11-24', 'Marsawa', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0344, '11.11.11.11', 480, 'Randa Mayyotra', 'Laki-Laki', '2004-05-11', 'Ponpes KH. Ahmad Dahlan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0346, '11.11.11.11', 484, 'Shindy Anjela', 'Perempuan', '2004-01-01', 'Lubuk ramo', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0347, '11.11.11.11', 482, 'Tiara Erwandani Putri', 'Perempuan', '2004-06-08', 'Koto Simandolak', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0348, '11.11.11.11', 488, 'Agus Rajum\'a', 'Laki-Laki', '2004-08-20', 'Pulau Jambu', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0349, '11.11.11.11', 669, 'Anggun Alpio Maharani', 'Perempuan', '2003-11-03', 'Pesajian', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0350, '11.11.11.11', 486, 'Alfasandi Fitrananda', 'Laki-Laki', '2004-09-02', 'Sumber Jaya', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0351, '11.11.11.11', 479, 'Andika Fiqrul', 'Laki-Laki', '2004-01-01', 'Petapahan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0352, '11.11.11.11', 670, 'Alif Alfon Wildanrusyda', 'Laki-Laki', '2004-08-01', 'Pasar Baru Pangean', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0353, '11.11.11.11', 426, 'Almahdi Arif Billah', 'Laki-Laki', '2004-10-07', 'Talontam Benai', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0354, '11.11.11.11', 676, 'Brilian Fikri', 'Laki-Laki', '2004-08-18', 'Pebaun Hilir', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0356, '11.11.11.11', 681, 'Fahmil Mubaraq', 'Perempuan', '2004-06-19', 'Teberau Panjang', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0357, '11.11.11.11', 687, 'Gevinda', 'Laki-Laki', '2003-01-20', 'Sungai Besar', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0358, '11.11.11.11', 595, 'Gian Octha Syaputra', 'Laki-Laki', '2004-04-10', 'Pangkalan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0359, '11.11.11.11', 684, 'Hanifa Dwi Putra', 'Laki-Laki', '2004-06-30', 'Sungai Sirih', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0360, '11.11.11.11', 673, 'Herning Tri Hapsari', 'Perempuan', '2003-12-07', 'Sungai Buluh', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0361, '11.11.11.11', 678, 'Inayatu Zil Izzati', 'Perempuan', '2004-03-10', 'Jake', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0362, '11.11.11.11', 598, 'Muhammad Ihsan Saputra', 'Laki-Laki', '2003-06-07', 'Cerenti', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0363, '11.11.11.11', 590, 'Muhammad Rifky Rizani', 'Laki-Laki', '2004-01-04', 'Perumnas Teluk Kuantan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0364, '11.11.11.11', 713, 'Meliga Setiawati', 'Perempuan', '2004-01-18', 'Giri Sako', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0365, '11.11.11.11', 717, 'Malicha Zaskia', 'Perempuan', '2004-07-07', 'Teluk Kuantan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0366, '11.11.11.11', 657, 'Nur Aisyah', 'Perempuan', '2004-01-21', 'Lubuk Ramo', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0367, '11.11.11.11', 709, 'Nuriatul Fajria', 'Perempuan', '2003-05-31', 'Jake', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0368, '11.11.11.11', 662, 'Prima Yudistoro', 'Laki-Laki', '2003-05-26', 'Serosah', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0371, '11.11.11.11', 714, 'Revo Patria Sudma', 'Laki-Laki', '2004-05-04', 'Pangkalan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0372, '11.11.11.11', 719, 'Reynaldo Ilham Syardani', 'Laki-Laki', '2004-08-29', 'Pulau Rumput', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0373, '11.11.11.11', 659, 'Rita Aswari Yanti', 'Perempuan', '2004-01-02', 'Perhentian Luas', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0374, '11.11.11.11', 666, 'Syafiq Nabil Ma\'ruf', 'Laki-Laki', '2004-05-04', 'Sungai Jering', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0375, '11.11.11.11', 711, 'Tari Yusnita', 'Perempuan', '2004-06-26', 'Sumpu', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0376, '11.11.11.11', 716, 'Yusni Nurlaila', 'Perempuan', '2004-03-31', 'Sungai Jering', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0377, '11.11.11.11', 726, 'Yuliase', 'Perempuan', '2003-06-19', 'Lubuk Ramo', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0378, '11.11.11.11', 730, 'Zikrul Phatoni', 'Laki-Laki', '2004-04-07', 'Pangkalan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0379, '11.11.11.11', 924, 'Hendika Pratama', 'Laki-Laki', '2003-06-09', 'Pangkalan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0380, '11.11.11.11', 712, 'Afri Elkis Saputra', 'Laki-Laki', '2004-04-19', 'Serosah', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0381, '11.11.11.11', 718, 'Fadhlah Fadhlullah', 'Laki-Laki', '2004-03-14', 'Pasar Baru', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0382, '11.11.11.11', 728, 'Abdul Afif dirlian', 'Laki-Laki', '2004-10-11', 'Seberang cangar', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0383, '11.11.11.11', 736, 'Amalia wullan agustifa', 'Perempuan', '2005-08-07', 'Teluk kuantan', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0384, '11.11.11.11', 720, 'Arif ferdianto', 'Laki-Laki', '2005-02-15', 'Pintu kayu .kec batang', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0385, '11.11.11.11', 723, 'Aulia Tulhijrah', 'Perempuan', '2005-06-11', 'Kuantan hilir seberang', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0386, '11.11.11.11', 737, 'Amin rohim', 'Laki-Laki', '2004-08-01', 'Kab, dijunjung', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0387, '11.11.11.11', 727, 'Anelka Muhammad Al faye\'d', 'Laki-Laki', '2004-08-10', 'Jl napal', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0388, '11.11.11.11', 731, 'Farah Fadilah Fitri', 'Perempuan', '2004-01-10', 'Logas Hilir', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0389, '11.11.11.11', 721, 'Gilang irhansyah', 'Laki-Laki', '2005-01-18', 'Tanjung Medan', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0390, '11.11.11.11', 724, 'Hafiz anugrah erza', 'Laki-Laki', '2005-05-26', 'Pulau tongah', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0391, '11.11.11.11', 729, 'Hasto Adi Pratama', 'Laki-Laki', '2005-09-20', 'Koto taluk', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0394, '11.11.11.11', 710, 'M.ikhsan habib', 'Laki-Laki', '2005-08-23', 'Jl.napal gumanti', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0395, '11.11.11.11', 735, 'M.iqbal ramadhan', 'Laki-Laki', '2005-10-19', 'Cerenti', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0396, '11.11.11.11', 741, 'M.viky Al fansyah', 'Laki-Laki', '2005-01-06', 'Ibul', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0397, '11.11.11.11', 743, 'M.zaki', 'Laki-Laki', '2005-06-20', 'Gumanti ', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0398, '11.11.11.11', 725, 'Melani Aprillia putri', 'Perempuan', '2005-04-13', 'Kinali', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0399, '11.11.11.11', 747, 'Mila rinjani', 'Perempuan', '2005-06-06', 'Koto rajo', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0400, '11.11.11.11', 733, 'Mutia azura', 'Perempuan', '2004-08-19', 'Sendayan', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0401, '11.11.11.11', 745, 'Nabil Ainur ridho Islam', 'Laki-Laki', '2005-06-07', 'Pasar baru Pangean', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0402, '11.11.11.11', 748, 'Nur azmi', 'Perempuan', '2005-05-31', 'Kampung baru', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0403, '11.11.11.11', 742, 'Nazifa aura eprion', 'Perempuan', '2004-10-03', 'Teluk kuantan', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0404, '11.11.11.11', 734, 'Nurul azima', 'Perempuan', '2004-08-31', 'Logas tanah datar', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0405, '11.11.11.11', 739, 'Novita wadyah', 'Perempuan', '2005-03-31', 'Koto baru', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0406, '11.11.11.11', 925, 'Oti aprillia', 'Perempuan', '2005-04-17', 'Petai baru', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0407, '11.11.11.11', 746, 'Rasti Al waqiyah', 'Perempuan', '2005-05-15', 'Koto baru', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0408, '11.11.11.11', 749, 'R.muhammad alsyahadi', 'Laki-Laki', '2005-12-04', 'Koto baru', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0409, '11.11.11.11', 738, 'Rivaldi', 'Laki-Laki', '2004-05-06', 'Ibul', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0410, '11.11.11.11', 753, 'Sri rahma', 'Perempuan', '2005-06-07', 'Baserah', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0411, '11.11.11.11', 923, 'Soni', 'Laki-Laki', '2004-10-04', 'Seb.pt.busuk inuman', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0412, '11.11.11.11', 752, 'Taufiqur rahman', 'Laki-Laki', '2005-10-06', 'Muara lembu', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0414, '11.11.11.11', 744, 'Abdilwarits Didasudori', 'Laki-Laki', '2004-11-27', 'Kompe Barangin, Cerenti', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0415, '11.11.11.11', 755, 'Abrar Nihrir', 'Laki-Laki', '2005-03-02', 'Bukit kauman', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0416, '11.11.11.11', 740, 'Amanda Putri Sari', 'Perempuan', '2005-05-06', 'Pangkalan', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0417, '11.11.11.11', 549, 'Akramil Fikri Reza Absy', 'Laki-Laki', '2005-08-28', 'Sungai Rumbio Koto kari', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0418, '11.11.11.11', 554, 'Ikhsad Julyanda', 'Laki-Laki', '2004-07-14', 'Koto Baru', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0419, '11.11.11.11', 546, 'Khairunnisa Yusri', 'Perempuan', '2006-04-02', 'Pembatang Pangean', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0420, '11.11.11.11', 732, 'Romi Ananda', 'Laki-Laki', '2003-10-14', 'Pasir Pengarayan', '', '', '', 'Islam', '2020', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0421, '11.11.11.11', 553, 'Muhammad Tsaqif Wannur', 'Laki-Laki', '2004-12-02', 'Sampurago Hulu Kuantan', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0422, '11.11.11.11', 555, 'Nurhikmah Fitriani', 'Perempuan', '2005-02-25', 'Tanjung Hulu Kuantan', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0423, '11.11.11.11', 551, 'Najmi Salma Fitri', 'Perempuan', '2005-07-31', 'Lubuk Jambi', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0424, '11.11.11.11', 550, 'Nur islamiati', 'Perempuan', '2006-01-21', 'Koto Simandolak', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0425, '11.11.11.11', 548, 'Puan Andini Nurbai', 'Perempuan', '2004-08-27', 'Jake', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0426, '11.11.11.11', 545, 'R. Zikri Saputra', 'Laki-Laki', '2004-12-16', 'Muaro Tombang', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0427, '11.11.11.11', 556, 'Rifky Novriadi Pelawi', 'Laki-Laki', '2005-11-07', 'Banjar Benai', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0428, '11.11.11.11', 541, 'Qonita A. Delfia', 'Perempuan', '2005-06-18', 'Rantau Sialang', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0429, '11.11.11.11', 536, 'Sabila Fijra Hidayatika', 'Perempuan', '2005-05-15', 'Sungai Sirih', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0430, '11.11.11.11', 542, 'Suci Desliawan Fitri', 'Perempuan', '2004-12-18', 'Kampung Baru', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0431, '11.11.11.11', 715, 'Risqullah Syahril Aziz', 'Laki-Laki', '2003-05-27', 'Teluk kuantan', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0432, '11.11.11.11', 533, 'Anis Fitria Rahma', 'Perempuan', '2003-10-11', 'Kec. Kempas Kilo Lima', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0433, '11.11.11.11', 531, 'Al Juanda Kurniansyah', 'Laki-Laki', '2005-12-25', 'Koto kari', '', '', '', 'Islam', '2020', 'MA Kelas 11', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0435, '11.11.11.11', 539, 'Aisyah fiddhah aprillia', 'Perempuan', '2006-04-13', 'Sungai jering', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0436, '11.11.11.11', 537, 'Aldifa Novianda', 'Perempuan', '2005-07-31', 'Langsat Hulu', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0437, '11.11.11.11', 535, 'Alfiya mahira', 'Perempuan', '2006-08-31', 'Muara lembu', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0438, '11.11.11.11', 543, 'Amirul Al Amin', 'Laki-Laki', '2005-12-11', 'Benai', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0439, '11.11.11.11', 532, 'Anjelita', 'Perempuan', '2005-12-10', 'Pangkalan', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0440, '11.11.11.11', 526, 'Dika', 'Laki-Laki', '2006-01-12', 'Serosah', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0441, '11.11.11.11', 524, 'Elsa Yulianda', 'Perempuan', '2004-10-01', 'Sungai Bawang', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0442, '11.11.11.11', 521, 'Fajri Ramadhan', 'Laki-Laki', '2006-09-26', 'Baserah', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0443, '11.11.11.11', 519, 'Flora Agustin', 'Perempuan', '2005-08-17', 'Muaro Takung Sijunjung', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0444, '11.11.11.11', 528, 'Ilham Pratama ', 'Laki-Laki', '2006-01-11', 'Lubuk Ramo', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0445, '11.11.11.11', 525, 'Khoirunnisa Fitri', 'Perempuan', '2005-11-06', 'Sumber jaya', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0446, '11.11.11.11', 529, 'Khannan adli', 'Laki-Laki', '2005-10-04', 'Kuantan hilir', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0447, '11.11.11.11', 523, 'Lailatul Aqila', 'Perempuan', '2006-12-22', 'Peranap', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0448, '11.11.11.11', 520, 'Muhammad Adib Annur', 'Laki-Laki', '2006-01-18', 'Kampung Baru Gunung Toar', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0449, '11.11.11.11', 517, 'M.Razy Fadhlan', 'Laki-Laki', '2006-03-19', 'Pasir Pangaraian Rohul', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0450, '11.11.11.11', 698, 'Mario Pernando ', 'Laki-Laki', '2005-12-17', 'Kompe Berangin', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0451, '11.11.11.11', 702, 'Meisya delfera', 'Perempuan', '2006-05-23', 'Jake', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0452, '11.11.11.11', 694, 'Muhammad Daffa Arya Guna', 'Laki-Laki', '2006-09-19', 'Tebing Tinggi', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0453, '11.11.11.11', 705, 'Muhammad Hanif Delias', 'Laki-Laki', '2006-05-03', 'Benai', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0454, '11.11.11.11', 707, 'Muhammad nabil', 'Laki-Laki', '2006-12-02', 'Beringin teluk kuantan', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0455, '11.11.11.11', 700, 'Naurah Rafifah', 'Perempuan', '2006-03-08', 'Gunung Toar', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0456, '11.11.11.11', 704, 'Niken fadella', 'Perempuan', '2005-09-15', 'Peranap', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0457, '11.11.11.11', 696, 'Nipa Adhiya', 'Perempuan', '2006-01-10', 'Pesajian', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0458, '11.11.11.11', 706, 'Pegri palwa dwiguna putra', 'Laki-Laki', '2006-03-19', 'Jake', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0459, '11.11.11.11', 708, 'Putri Maharani', 'Perempuan', '2005-12-07', 'Peranap', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0466, '11.11.11.11', 630, 'Zalfa Zahira', 'Perempuan', '2006-03-31', 'Sungai Jering', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0468, '11.11.11.11', 624, 'Adelia Ridmelda', 'Perempuan', '2006-06-21', 'Kampung Baru GT', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0469, '11.11.11.11', 639, 'Aidilia Nur Adha', 'Perempuan', '2006-01-10', 'Tebing Tinggi', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0471, '11.11.11.11', 627, 'Amirul Zaky Ihram', 'Laki-Laki', '2006-06-26', 'Pulau Tongah Siberakun', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0472, '11.11.11.11', 691, 'Anggi Nisa Fuziah', 'Perempuan', '2005-12-31', 'Pesajian', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0473, '11.11.11.11', 438, 'Citra Nuraini', 'Perempuan', '2005-12-22', 'Singingi', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0474, '11.11.11.11', 436, 'Diana Harmuliani', 'Perempuan', '2006-04-08', 'Kebun Lado', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0475, '11.11.11.11', 606, 'Eldyo Mahesa', 'Laki-Laki', '2006-06-13', 'Jake', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0476, '11.11.11.11', 440, 'Fajar Arya Pratama ', 'Laki-Laki', '2006-01-30', 'Bukit Pedusunan', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0477, '11.11.11.11', 442, 'Intan Aprilyana', 'Perempuan', '2006-04-06', 'Petai Baru', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0478, '11.11.11.11', 437, 'M. Irzan Wahijra', 'Laki-Laki', '2006-01-08', 'Aur Duri', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0479, '11.11.11.11', 439, 'Muhammad Rian ', 'Laki-Laki', '2007-03-15', 'Pulau Bayur', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0480, '11.11.11.11', 441, 'Mariska Rahmadania', 'Perempuan', '2006-09-23', 'Muara Lembu ', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0481, '11.11.11.11', 435, 'Nafasha Nanda A', 'Perempuan', '2006-04-20', 'Ibul', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0482, '11.11.11.11', 443, 'Nur Adilla', 'Perempuan', '2006-10-22', 'Pesajian', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0483, '11.11.11.11', 562, 'Pandu alfariz sayuti', 'Laki-Laki', '2006-05-03', 'Sungai ara', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0484, '11.11.11.11', 559, 'Rafa Abdel Rahman', 'Laki-Laki', '2006-10-30', 'Seberang Cengar ', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0485, '11.11.11.11', 560, 'Rafky Dwipala Oktani', 'Laki-Laki', '2005-10-12', 'Koto Pangean', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0487, '11.11.11.11', 565, 'Rizki Dimas Ramadhan', 'Laki-Laki', '2004-10-05', 'Pangkalan', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0488, '11.11.11.11', 567, 'Syahrima Maulidiya Inayah ', 'Perempuan', '2006-04-20', 'Sungai Paku', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0489, '11.11.11.11', 561, 'Therea Nayla Desmarini', 'Perempuan', '2005-12-30', 'Muara lembu', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0490, '11.11.11.11', 563, 'Veniman Widianda', 'Laki-Laki', '2005-12-25', 'Pulau Baru', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0491, '11.11.11.11', 558, 'Marsya', 'Perempuan', '2006-03-21', 'Lubuk ambacang', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0492, '11.11.11.11', 564, 'Ade novi adrival', 'Laki-Laki', '2008-03-14', 'Marsawa', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0493, '11.11.11.11', 557, 'Aditya satria ramadhan', 'Laki-Laki', '2006-10-10', 'Peranap', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0494, '11.11.11.11', 921, 'Amedia bela mustika', 'Perempuan', '2007-01-23', 'LTD', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0495, '11.11.11.11', 605, 'Andra aprilio', 'Laki-Laki', '2006-04-14', 'Petapahan', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0496, '11.11.11.11', 611, 'Ashabil kahfi', 'Laki-Laki', '2005-10-03', 'Sungai paku', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0497, '11.11.11.11', 699, 'Azaky Adriansyah', 'Laki-Laki', '2006-06-11', 'Benai', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0498, '11.11.11.11', 703, 'Azka nabila rahma', 'Perempuan', '2006-04-19', 'Koto kari', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0499, '11.11.11.11', 701, 'Bucek danuarta', 'Laki-Laki', '2006-01-28', 'LUbuk ramo', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0500, '11.11.11.11', 602, 'Daffa elrisal ramadhan', 'Laki-Laki', '2005-10-16', 'Pisang berebus', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0502, '11.11.11.11', 609, 'Fristiawan octaviansyah', 'Laki-Laki', '2005-10-17', 'Simpang raya', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0503, '11.11.11.11', 697, 'Fritzye junpareza ', 'Laki-Laki', '2006-06-16', 'Banjar benai', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0504, '11.11.11.11', 795, 'Gusfi amripala', 'Laki-Laki', '2005-08-01', 'Rotan semelur', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0505, '11.11.11.11', 688, 'Habibah khairun nisa', 'Perempuan', '2005-12-10', 'Pintu gobang kari', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0506, '11.11.11.11', 685, 'Hasyifah faiza adelya', 'Perempuan', '2006-04-13', 'Muaro tombang', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0507, '11.11.11.11', 679, 'Hirzi asfi dirmawansyah', 'Laki-Laki', '2006-11-26', 'Sungai buluh', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0508, '11.11.11.11', 690, 'Ica delfiza', 'Perempuan', '2006-06-20', 'Inuman', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0509, '11.11.11.11', 693, 'Ikhram pramudya ananta', 'Laki-Laki', '2005-09-12', 'Kampung baru GT', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0510, '11.11.11.11', 686, 'Irvan maulana zikra', 'Laki-Laki', '2006-04-24', 'Bagan jaya', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0511, '11.11.11.11', 689, 'M. Aldi Kurniawan', 'Laki-Laki', '2005-11-09', 'Peranap', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0512, '11.11.11.11', 692, 'M. Ariq Athallah Syah', 'Laki-Laki', '2006-11-02', 'Gunung Toar', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0513, '11.11.11.11', 683, 'M. Imam Assidiq', 'Laki-Laki', '2006-07-26', 'Seberang Cengar ', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0515, '11.11.11.11', 695, 'Neisyla wardhani markhamah', 'Perempuan', '2006-03-10', 'Sumber jaya', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0516, '11.11.11.11', 652, 'Reyhan febriansyah', 'Laki-Laki', '2006-02-06', 'Sungai jering', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0517, '11.11.11.11', 655, 'Salma alfia syahrani', 'Perempuan', '2005-08-23', 'Geringging baru', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0518, '11.11.11.11', 661, 'Syarif hidayah tulloh', 'Laki-Laki', '2006-03-01', 'Logas', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0519, '11.11.11.11', 667, 'Zahratul rinda', 'Perempuan', '2006-12-12', 'Gunung toar', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0520, '11.11.11.11', 672, 'Naurah', 'Perempuan', '2006-07-10', 'Tebing tinggi', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0521, '11.11.11.11', 660, 'Nabila syifa', 'Perempuan', '2005-12-26', 'Teluk kuantan', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0522, '11.11.11.11', 664, 'Nindya inayah utami', 'Perempuan', '2006-01-17', 'Teluk kuantan', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(0523, '11.11.11.11', 654, 'Nadela febri', 'Perempuan', '2006-02-06', 'Sungai jering', '', '', '', 'Islam', '2021', 'MA Kelas 10', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2623, '11.11.11.11', 772, 'Ananda Yudhistira', 'Laki-Laki', '2006-09-19', 'Sei.Buluh', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2624, '11.11.11.11', 768, 'Andika Pebrian', 'Laki-Laki', '2007-04-18', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2625, '11.11.11.11', 766, 'Bipo Vahlevi', 'Laki-Laki', '2007-08-29', 'Benai', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2627, '11.11.11.11', 764, 'Faiz Abdul Aziz', 'Laki-Laki', '2006-11-20', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2628, '11.11.11.11', 762, 'Farel Apri Sastra', 'Laki-Laki', '2007-04-11', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2629, '11.11.11.11', 763, 'Fateh Tehan', 'Laki-Laki', '2006-07-15', 'Sei.Aur', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2630, '11.11.11.11', 765, 'Fharel Gusmianto', 'Laki-Laki', '2006-08-10', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2631, '11.11.11.11', 767, 'Firjatul Zaim', 'Laki-Laki', '2007-02-04', 'Koto Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2632, '11.11.11.11', 770, 'Ganda Naufal Aflan', 'Laki-Laki', '2007-07-23', 'Geringging Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2633, '11.11.11.11', 774, 'Guspan Efandi', 'Laki-Laki', '2007-08-07', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2636, '11.11.11.11', 789, 'Khairul Amri', 'Laki-Laki', '2007-06-20', 'Sungai Sirih', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2637, '11.11.11.11', 787, 'M. Nauvali Rizky', 'Laki-Laki', '2006-09-11', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2638, '11.11.11.11', 785, 'Muhammad Ridane', 'Laki-Laki', '2004-10-16', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2640, '11.11.11.11', 779, 'Muhamad Afdal', 'Laki-Laki', '2007-05-04', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2641, '11.11.11.11', 776, 'Muhammad Rafli', 'Laki-Laki', '2007-09-12', 'Muara Lembu', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2643, '11.11.11.11', 778, 'Raihan Aditya', 'Laki-Laki', '2007-06-30', 'Sumber Jaya', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2644, '11.11.11.11', 781, 'Yahdi Yuga Lifebrian', 'Laki-Laki', '2007-02-05', 'Muara Lembu', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2645, '11.11.11.11', 786, 'Yul Dwi Mugarrib', 'Laki-Laki', '2007-07-08', 'Kinali', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2646, '11.11.11.11', 788, 'Zaldy Alkhairi', 'Laki-Laki', '2006-12-24', 'Kampas Jaya', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2647, '11.11.11.11', 769, 'Zelvin Rafiza', 'Laki-Laki', '2007-06-19', 'Koto cengar', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2648, '11.11.11.11', 771, 'Adam Nur Alam', 'Laki-Laki', '2006-08-25', 'Marsawa', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(2649, '11.11.11.11', 775, 'Ahmad Refil Juanda', 'Laki-Laki', '2007-01-15', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2650, '11.11.11.11', 780, 'Aldo Riantoni', 'Laki-Laki', '2006-09-13', 'Dharmasraya', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2652, '11.11.11.11', 783, 'Dafa Jefika Cahya Pratama', 'Laki-Laki', '2006-11-22', 'Teluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2653, '11.11.11.11', 790, 'Dava Falerino', 'Laki-Laki', '2007-07-07', 'Perumnas', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2656, '11.11.11.11', 782, 'Elgio Firnanda', 'Laki-Laki', '2006-01-26', 'Koto Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2657, '11.11.11.11', 784, 'Enggar Prasetyo', 'Laki-Laki', '2006-12-23', 'Jake', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2658, '11.11.11.11', 773, 'Fahreza Gempita', 'Laki-Laki', '2007-03-06', 'Teberau Panjang Guntor', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2660, '11.11.11.11', 777, 'Febi Saputra', 'Laki-Laki', '2007-01-27', 'Logas Hilir', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2661, '11.11.11.11', 791, 'Ikhsan Al Aziz', 'Laki-Laki', '2006-08-30', 'Sei.Buluh', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2662, '11.11.11.11', 890, 'Khoirul Mutaqqin', 'Laki-Laki', '2006-08-21', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2663, '11.11.11.11', 887, 'Mhd.  Deron', 'Laki-Laki', '2007-08-01', 'Baserah', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2665, '11.11.11.11', 882, 'Muhammad Dino Septama', 'Laki-Laki', '2006-09-10', 'Batang Peranap', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2666, '11.11.11.11', 876, 'M. Haikal', 'Laki-Laki', '2007-07-13', 'Simp.Kelayang', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2668, '11.11.11.11', 871, 'Muhammad Ghazy Zahran', 'Laki-Laki', '2007-05-29', 'Sungai Paku', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2670, '11.11.11.11', 885, 'Picu Adrenalin', 'Laki-Laki', '2006-11-16', 'Koto Kari', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2672, '11.11.11.11', 817, 'Rully Hidayat', 'Laki-Laki', '2007-02-24', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2674, '11.11.11.11', 880, 'Ardiko Mardelian Saputra', 'Laki-Laki', '2007-10-09', 'Pesajian', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2675, '11.11.11.11', 873, 'Arsyandika Zaki Pratama', 'Laki-Laki', '2007-01-29', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2676, '11.11.11.11', 465, 'Bagas Rizky Rizal', 'Laki-Laki', '2007-02-24', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2677, '11.11.11.11', 468, 'Dafit Akbar', 'Laki-Laki', '2006-12-08', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2680, '11.11.11.11', 473, 'Ilias Azhari', 'Laki-Laki', '2007-05-18', 'Inuman', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2682, '11.11.11.11', 475, 'M. Alfredo Reyfan Asyu', 'Laki-Laki', '2007-04-27', 'Pl. Deras Pangean', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2683, '11.11.11.11', 477, 'M.Faza Akbar', 'Laki-Laki', '2007-09-09', 'Serosah', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2685, '11.11.11.11', 476, 'M. Rizki Hidayatullah', 'Laki-Laki', '2007-07-10', 'Sinambek', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2686, '11.11.11.11', 472, 'Muhammad Aji', 'Laki-Laki', '2007-03-08', 'Jake', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2687, '11.11.11.11', 471, 'Muhammad Azman', 'Laki-Laki', '2007-05-12', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2688, '11.11.11.11', 892, 'Muhammad Khairil Amri', 'Laki-Laki', '2007-04-04', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2689, '11.11.11.11', 470, 'Muhammad Rizki Anhari', 'Laki-Laki', '2007-01-08', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2692, '11.11.11.11', 466, 'Rais Al Asyari Irwansyah', 'Laki-Laki', '2007-07-04', 'Pantai L. Jambi', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2693, '11.11.11.11', 459, 'Retno Al-Fahri', 'Laki-Laki', '2007-08-05', 'Peranap', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2694, '11.11.11.11', 457, 'Reza Erlangga', 'Laki-Laki', '2007-01-20', 'Logas Hilir', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2695, '11.11.11.11', 462, 'Satrio Abiandra', 'Laki-Laki', '2007-07-22', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2696, '11.11.11.11', 453, 'Triwan Nugraha', 'Laki-Laki', '2007-05-04', 'Benai Kecil', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2697, '11.11.11.11', 450, 'Vales Afdwi Candra', 'Laki-Laki', '2007-04-27', 'Pasar Baru Pangean', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2699, '11.11.11.11', 456, 'Aisyah Mulkan', 'Perempuan', '2007-07-05', 'Teluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2700, '11.11.11.11', 454, 'Anggun khalifah', 'Perempuan', '2007-07-21', 'Ibul PKS 2', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2701, '11.11.11.11', 460, 'Cindy Atha Arman', 'Perempuan', '2007-05-24', 'Tanjung Pinang', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2702, '11.11.11.11', 449, 'Dina denanda yulfa', 'Perempuan', '2007-07-02', 'Sungai jering', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2704, '11.11.11.11', 463, 'Gusti Ketari Wulan', 'Perempuan', '2007-08-05', 'Logas', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2705, '11.11.11.11', 668, 'Inayah hafizah', 'Perempuan', '2007-07-24', 'Banjar benai', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2706, '11.11.11.11', 674, 'Karini Kirania', 'Perempuan', '2007-06-04', 'Sei. Jering', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2708, '11.11.11.11', 663, 'Livy Meilia Kurniati', 'Perempuan', '2007-05-15', 'Lubuk Ramo', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2710, '11.11.11.11', 656, 'Mutya Zaliani Putri', 'Perempuan', '2006-11-06', 'Marsawa', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2711, '11.11.11.11', 680, 'Nindya Rahmadhani Putri', 'Perempuan', '2006-10-03', 'Pelalawan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2712, '11.11.11.11', 665, 'Nurul Izzati Fiyna', 'Perempuan', '2007-01-24', 'Benai Kecil', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2713, '11.11.11.11', 930, 'Offi Octavia', 'Perempuan', '2006-10-10', 'Tanjung Pauh', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2714, '11.11.11.11', 927, 'Rizkia Adilla Putri', 'Perempuan', '2007-04-20', 'Seberang Cengar', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2716, '11.11.11.11', 677, 'Rodeah Ramadhani', 'Perempuan', '2006-10-06', 'Koto Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2717, '11.11.11.11', 682, 'Shayna Azzalia Dafina', 'Perempuan', '2007-12-08', 'Sei Jering', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2718, '11.11.11.11', 671, 'Shifa Qalbu Maisyah', 'Perempuan', '2007-07-26', 'Sungai jering', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2720, '11.11.11.11', 658, 'Zahra Yona Assyfa', 'Perempuan', '2007-05-03', 'Sungai Sirih', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2721, '11.11.11.11', 568, 'Alifa Athiyyah Zahra', 'Perempuan', '2021-12-16', '-', NULL, NULL, NULL, 'islam', '-', '-', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2722, '11.11.11.11', 583, 'Amelia Najwa', 'Perempuan', '2007-01-03', 'Topan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2723, '11.11.11.11', 580, 'Anggun pratigina', 'Perempuan', '2006-11-01', 'Kebun lado', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2724, '11.11.11.11', 675, 'Avria Mita Br. Sinulingga', 'Perempuan', '2007-06-04', 'Hulu Teso', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2726, '11.11.11.11', 578, 'Desmayunita', 'Perempuan', '2006-12-25', 'Sei Tambang Sijunjung', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2727, '11.11.11.11', 572, 'Desty Salsabilla', 'Perempuan', '2006-12-15', 'Seberang Pantai Lubuk Jambi', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2728, '11.11.11.11', 570, 'Dini Dwi Anggraini', 'Perempuan', '2008-04-06', 'PKS II Ibul Pucuk Rantau', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2729, '11.11.11.11', 582, 'Dinna Rahmalia Dzasskia', 'Perempuan', '2007-03-03', 'Topan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2730, '11.11.11.11', 579, 'Ezra Velya Josi', 'Perempuan', '2007-07-01', 'Jake', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2731, '11.11.11.11', 575, 'Fitrianur Ramadhani', 'Perempuan', '2006-10-20', 'Desa petai', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2732, '11.11.11.11', 574, 'Hanayla Rahmahuriyah', 'Perempuan', '2006-10-05', 'Padang', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2733, '11.11.11.11', 926, 'Indah Suci Ramadhani', 'Perempuan', '2007-09-20', 'Teluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2734, '11.11.11.11', 569, 'Jamayra Anne Kenaya', 'Perempuan', '2007-05-05', 'Lubuk Jambi', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2735, '11.11.11.11', 754, 'Nadya Putri Nur Lia', 'Perempuan', '2007-06-07', 'Sungai Keranji', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2736, '11.11.11.11', 920, 'Nur Hafizah', 'Perempuan', '2007-02-20', 'Lubuk Jambi', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2737, '11.11.11.11', 750, 'Risya Al fazarah', 'Perempuan', '2006-11-06', 'Sei.rumbio kari', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2738, '11.11.11.11', 758, 'Syafira Azzahra', 'Perempuan', '2006-08-27', 'Tobek Panjang', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2739, '11.11.11.11', 759, 'Syifa Chairunnisa Failen', 'Perempuan', '2007-05-18', 'Koto Taluk', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2740, '11.11.11.11', 756, 'Vina Meilany Dwi Saputri', 'Perempuan', '2007-05-03', 'Geringging baru', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2741, '11.11.11.11', 751, 'Winna Dwi nopiana', 'Perempuan', '2006-11-21', 'Koto kari', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2742, '11.11.11.11', 757, 'Zuriah Ariqah', 'Perempuan', '2007-12-11', 'Koto kari', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2743, '11.11.11.11', 761, 'Andesta Silvi', 'Perempuan', '2006-09-05', 'Sidodadi', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2744, '11.11.11.11', 760, 'Anniesa Rivera Elyusri', 'Perempuan', '2007-04-28', 'Beringin Teluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2745, '11.11.11.11', 904, 'Ansel Amanda Ramadhan', 'Perempuan', '2007-09-22', 'Cerenti', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2746, '11.11.11.11', 899, 'Arifa Zahrah', 'Perempuan', '2007-04-28', 'Desa Sawah', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2747, '11.11.11.11', 908, 'Arinda Aprilia iska', 'Perempuan', '2007-04-16', 'Tanjung pauh', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2748, '11.11.11.11', 814, 'Arsya Amalia', 'Perempuan', '2007-08-04', 'Sei Jering', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2749, '11.11.11.11', 894, 'Auraillia Agustin', 'Perempuan', '2007-08-29', 'Sungai Jering', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2750, '11.11.11.11', 896, 'Chelsi Laurenza', 'Perempuan', '2007-01-18', 'Ibul Pucuk Rantau', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2751, '11.11.11.11', 901, 'Despi rohimah', 'Perempuan', '2006-12-29', 'Geringging jaya', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2752, '11.11.11.11', 906, 'Dwi Kurnia purnama fitri', 'Perempuan', '2006-11-06', 'Lubuk jambi', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2753, '11.11.11.11', 909, 'Filza Nadira Yuksa', 'Perempuan', '2007-06-09', 'Benai', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2754, '11.11.11.11', 910, 'Imelda citra ayuningtias', 'Perempuan', '2007-05-15', 'Serosah', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2755, '11.11.11.11', 474, 'Laura Ananta Fadlie', 'Perempuan', '2007-10-30', 'Beringin Taluk', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21');
INSERT INTO `tbl_siswa` (`nis`, `kode_instansi`, `id_user`, `nama_siswa`, `jk`, `tgl_lahir`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `agama`, `tahun_masuk`, `kelas`, `created_at`, `updated_at`) VALUES
(2756, '11.11.11.11', 481, 'Mutia Safitri', 'Perempuan', '2007-10-15', 'Pintu Gobang Kari', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2757, '11.11.11.11', 487, 'Najwa Septiliana', 'Perempuan', '2006-09-03', 'Baserah', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2758, '11.11.11.11', 458, 'Nisrin zikria', 'Perempuan', '2007-05-22', 'Teluk kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2759, '11.11.11.11', 464, 'Salsabilla Azizah', 'Perempuan', '2007-06-28', 'Simpang Raya', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2760, '11.11.11.11', 478, 'Salvia vivaldie', 'Perempuan', '2006-12-29', 'Desa Beringin', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2761, '11.11.11.11', 485, 'Sastya Eriyani Salsabila', 'Perempuan', '2006-09-20', 'Geringging Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2762, '11.11.11.11', 494, 'Tasya Aprilia Purba', 'Perempuan', '2007-04-05', 'Kebun Lado', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2763, '11.11.11.11', 469, 'Violetta Syahwana', 'Perempuan', '2007-08-09', 'Serosah', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2764, '11.11.11.11', 929, 'Winny Tri Nopiana', 'Perempuan', '2006-11-21', 'Kari', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2765, '11.11.11.11', 461, 'M. Gusti Rendi A', 'Laki-Laki', '2006-08-17', 'Taluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2766, '11.11.11.11', 538, 'Dini Riani', 'Perempuan', '2007-06-21', 'Luar Irok', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2767, '11.11.11.11', 552, 'M. Gusti Rindo Anugrah', 'Laki-Laki', '2006-08-17', 'Jambi', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2768, '11.11.11.11', 566, 'Ade Arya Prawira', 'Laki-Laki', '2008-04-12', 'Pelalawan', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2769, '11.11.11.11', 544, 'Ferza Fitra', 'Laki-Laki', '2007-09-19', 'Inuman', '', '', '', 'Islam', '2019', 'MTs Kelas 9', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2770, '11.11.11.11', 571, 'Agung Al Fandes', 'Laki-Laki', '2007-12-05', 'Sungai Besar', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2772, '11.11.11.11', 573, 'Aryovi', 'Laki-Laki', '2008-08-07', 'Baserah', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2773, '11.11.11.11', 547, 'Belgio Ilarso', 'Laki-Laki', '2008-02-08', 'Padang Tarok', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2774, '11.11.11.11', 540, 'Daffasha Donesa Putra', 'Laki-Laki', '2008-08-16', 'Sungai Jering', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2775, '11.11.11.11', 522, 'Fajar Yuliandri', 'Laki-Laki', '2008-01-07', 'Benai', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2776, '11.11.11.11', 514, 'Ferdi', 'Laki-Laki', '2008-02-12', 'Serosa', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2777, '11.11.11.11', 530, 'Habiburrahman El Yardi', 'Laki-Laki', '2007-07-03', 'Pintu Gobang Kari', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2778, '11.11.11.11', 498, 'Imra Rifqi Dharmana', 'Laki-Laki', '2008-06-28', 'Ciberlin', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2779, '11.11.11.11', 500, 'Irsyadul Umami Sya\'bani', 'Laki-Laki', '2007-08-28', 'Sungai Jering', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2780, '11.11.11.11', 527, 'Ivan Gunawan', 'Laki-Laki', '2008-06-11', 'Pangkalan', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2781, '11.11.11.11', 518, 'Kaspil Aldi Milano Putra', 'Laki-Laki', '2008-02-05', 'Seb. Cengar', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2782, '11.11.11.11', 509, 'Kevin Saputra', 'Laki-Laki', '2008-08-16', 'Pesikaian', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2783, '11.11.11.11', 534, 'M. Faiz Ramadhan', 'Laki-Laki', '2008-09-29', 'Muara Lembu', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2784, '11.11.11.11', 490, 'M. Fayad Azka Jonang', 'Laki-Laki', '2008-04-15', 'Jao', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2785, '11.11.11.11', 895, 'M. Gavindra Nauval', 'Laki-Laki', '2008-06-09', 'Serosa ', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2786, '11.11.11.11', 898, 'M. Haikal Jeanda', 'Laki-Laki', '2007-11-02', 'Seberang Cengar', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2787, '11.11.11.11', 893, 'M. Zainal Arif', 'Laki-Laki', '2007-02-01', 'Peranap, serangge 3', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2788, '11.11.11.11', 888, 'Refin Putra Hendarma', 'Laki-Laki', '2008-07-09', 'Pangkalan', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2789, '11.11.11.11', 884, 'Muhammad Fazlan Zulfa P', 'Laki-Laki', '2006-12-12', 'Tobek Panjang ', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2790, '11.11.11.11', 891, 'Mursyd Hanif', 'Laki-Laki', '2007-12-30', 'Gumanti', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2792, '11.11.11.11', 889, 'Pepin Rezga Anugrah', 'Laki-Laki', '2007-11-26', 'Jao', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2793, '11.11.11.11', 897, 'Rayent Bintang Prasetyo', 'Laki-Laki', '2008-02-18', 'Simpang Raya, Singingi Hilir', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2795, '11.11.11.11', 900, 'Zickfa Ghibran Asnan', 'Laki-Laki', '2008-07-26', 'Koto Baru', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2797, '11.11.11.11', 886, 'Al Fahrezhi Nur Fajr', 'Laki-Laki', '2008-04-23', 'Baserah', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2798, '11.11.11.11', 581, 'Alief Ramadhani', 'Laki-Laki', '2007-10-08', 'Kebun Lado', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2799, '11.11.11.11', 576, 'Arjunadi Oktovianus ', 'Laki-Laki', '2007-12-09', 'Sako Margasari, LTD', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2800, '11.11.11.11', 592, 'Aryandra Anugrah', 'Laki-Laki', '2008-04-27', 'Sungai Jering', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2803, '11.11.11.11', 588, 'Desta Putra Zulfani', 'Laki-Laki', '2007-12-07', 'Koto Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2804, '11.11.11.11', 599, 'Fadhel Andira', 'Laki-Laki', '2008-10-17', 'Simandolak', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2805, '11.11.11.11', 584, 'Frandika Wahyu PS', 'Laki-Laki', '2008-04-29', 'Sungai Buluh', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2806, '11.11.11.11', 577, 'Fauzurrahman', 'Laki-Laki', '2008-05-02', 'Muara Lembu', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2807, '11.11.11.11', 585, 'Gresna Asnanta', 'Laki-Laki', '2008-09-11', 'Koto Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2808, '11.11.11.11', 596, 'M. Alfio Rizki', 'Laki-Laki', '2007-10-19', 'Benai', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2809, '11.11.11.11', 603, 'M. Fadlan Anugerah', 'Laki-Laki', '2008-05-18', 'Pantai Lubuk Ramo', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2810, '11.11.11.11', 875, 'M. Miftahul Khairi', 'Laki-Laki', '2008-04-06', 'Pangean', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2811, '11.11.11.11', 872, 'M. Nauval Adabi Ray', 'Laki-Laki', '2008-01-10', 'Jao, Teluk Kuantan', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2812, '11.11.11.11', 869, 'Mhd. Fathan Wildana Amany', 'Laki-Laki', '2008-08-26', 'Kampar', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2813, '11.11.11.11', 866, 'Muhammad Ridho', 'Laki-Laki', '2008-02-13', 'Koto Benai', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2815, '11.11.11.11', 878, 'Nauval Brilian ', 'Laki-Laki', '2008-01-24', 'Pangkalan', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2817, '11.11.11.11', 874, 'Regien Guslan Subardi', 'Laki-Laki', '2008-08-14', 'Ibul', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2818, '11.11.11.11', 877, 'Rifqi Nauval Pahrezi', 'Laki-Laki', '2008-07-22', 'Koto Baru', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2819, '11.11.11.11', 870, 'Rizki Abdillah', 'Laki-Laki', '2007-05-17', 'Peranap', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2821, '11.11.11.11', 879, 'Shefitra Aidil Yurika', 'Laki-Laki', '2007-10-18', 'Cerenti', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2823, '11.11.11.11', 867, 'Taufiq Pratama', 'Laki-Laki', '2007-11-29', 'Serosah', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2824, '11.11.11.11', 854, 'Tirta Bika Saputra', 'Laki-Laki', '2008-01-08', 'RAPP Estate baserah', '', '', '', 'Islam', '2019', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2825, '11.11.11.11', 856, 'Vieqo Mulya', 'Laki-Laki', '2007-11-11', 'Peranap', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2827, '11.11.11.11', 850, 'AILSYA NAIFAH CLORINDA ANUGRAH', 'Perempuan', '2008-08-02', 'Sungai buluh', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2828, '11.11.11.11', 859, 'Alya Novika Putri', 'Perempuan', '2007-02-13', 'Serosah', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2829, '11.11.11.11', 862, 'Aprilia nur kayla', 'Perempuan', '2008-04-14', 'Lubuk ramo', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2830, '11.11.11.11', 852, 'Dinda Alifda', 'Perempuan', '2008-02-01', 'Baserah', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2831, '11.11.11.11', 857, 'Diva Salsabila Idris', 'Perempuan', '2007-10-26', 'Sungai Jering, Teluk Kuantan', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2832, '11.11.11.11', 861, 'Elvi candra kasih', 'Perempuan', '2008-06-10', 'Kuantan sako', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2833, '11.11.11.11', 864, 'Faiza noviya', 'Perempuan', '2007-11-22', 'Pucuk rantau', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2834, '11.11.11.11', 849, 'Friska Apriani Haris', 'Perempuan', '2008-04-27', 'Lubuk Ramo', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2835, '11.11.11.11', 587, 'Lulu tsaniya', 'Perempuan', '2007-11-16', 'Kebun lado', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2836, '11.11.11.11', 589, 'Naila Muazaroh Athifa', 'Perempuan', '2008-01-01', 'Seberang Cengar', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2837, '11.11.11.11', 591, 'Neisya difanni afrilla', 'Perempuan', '2008-04-15', 'Jake', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2839, '11.11.11.11', 597, 'Qiyah Ramadhani', 'Perempuan', '2007-09-18', 'Serosah', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2841, '11.11.11.11', 601, 'Salsabila Hidayat', 'Perempuan', '2007-12-24', 'Koto Baru', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2842, '11.11.11.11', 593, 'Syifa meizela', 'Perempuan', '2008-05-15', 'Benai', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2843, '11.11.11.11', 594, 'Finca Olivia', 'Perempuan', '2007-10-11', 'Serosah', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2844, '11.11.11.11', 600, 'Violin Tri Alfindi', 'Perempuan', '2008-03-02', 'Jake, Teluk Kuantan', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2845, '11.11.11.11', 586, 'Wilda', 'Perempuan', '2007-12-13', 'Sungai besar', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2846, '11.11.11.11', 604, 'Zahra Salsabila', 'Perempuan', '2008-03-10', 'Sungai Jering, Teluk Kuantan', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2847, '11.11.11.11', 808, 'APNI PUTRI ZHAKIRA', 'Perempuan', '2008-07-30', 'Lubuk ramo', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2848, '11.11.11.11', 810, 'Chelse andra lestari', 'Perempuan', '2008-03-31', 'Koto baru', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2849, '11.11.11.11', 812, 'Dwi Agustien Maharani', 'Perempuan', '2008-08-22', 'Teans F.9 Sei Keranji', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2850, '11.11.11.11', 806, 'Dwila putri', 'Perempuan', '2008-01-17', 'Benai', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2851, '11.11.11.11', 804, 'Fezi aulia', 'Perempuan', '2008-01-11', 'Seberang cengar', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2852, '11.11.11.11', 809, 'Inayah Maulida Ikhsan', 'Perempuan', '2008-03-28', 'Ceberlin Kari', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2853, '11.11.11.11', 811, 'Jusmiani', 'Perempuan', '2007-10-26', 'Sungai Jering', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2854, '11.11.11.11', 722, 'Khafizatul khusna', 'Perempuan', '2007-10-18', 'Koto baru', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2855, '11.11.11.11', 807, 'Luthfia Putri Frisanti', 'Perempuan', '2008-10-23', 'Beringin Taluk', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2856, '11.11.11.11', 805, 'Melvita fitri', 'Perempuan', '2008-10-23', 'Tembilahan', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2857, '11.11.11.11', 796, 'Nabila Aska Andini', 'Perempuan', '2008-08-20', 'Benai', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2858, '11.11.11.11', 792, 'Nazwa marlis', 'Perempuan', '2008-02-19', 'Sinambek', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2859, '11.11.11.11', 798, 'Nayla Alifah Izmi', 'Perempuan', '2008-12-25', 'Seberang Pantai', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2860, '11.11.11.11', 800, 'Naysha Zahra Athira', 'Perempuan', '2008-03-31', 'Luar Irok', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2861, '11.11.11.11', 802, 'Nazila zurya arrahma', 'Perempuan', '2008-07-05', 'Ceberlin kari', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2862, '11.11.11.11', 797, 'Rafika cahyani', 'Perempuan', '2008-02-06', 'Pasar taluk', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2863, '11.11.11.11', 793, 'Ratu Julaika Almeipi Usman', 'Perempuan', '2008-05-19', 'Seberang Cengar', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2864, '11.11.11.11', 799, 'Salwa ori fitriana', 'Perempuan', '2007-10-17', 'Gunung toar', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2865, '11.11.11.11', 801, 'Vinza Asry Miftahul Janah', 'Perempuan', '2008-01-27', 'Sungai Buluh', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2866, '11.11.11.11', 803, 'Rahmadani sifatun nabila', 'Perempuan', '2007-09-28', 'Pucuk rantau', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2867, '11.11.11.11', 446, 'Lifraviel Zikri Ramadhan', 'Laki-Laki', '2008-09-29', 'Dharmasraya', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2868, '11.11.11.11', 448, 'Alini Enggano Fausta', 'Perempuan', '2008-05-30', 'Dhamasraya', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2869, '11.11.11.11', 447, 'Rafdy Anugrah Pratama', 'Laki-Laki', '2008-01-15', 'Kiliran Jao', '', '', '', 'Islam', '2020', 'MTs Kelas 8', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2870, '11.11.11.11', 433, 'Abdul Aziz', 'Laki-Laki', '2008-12-31', 'Teluk Kuantan', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2871, '11.11.11.11', 452, 'Aldo Rio Ramadhan', 'Laki-Laki', '2008-09-19', 'Merbau Kari', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2872, '11.11.11.11', 467, 'Aqso Jibran', 'Laki-Laki', '2008-10-24', 'Muaro Tombang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2873, '11.11.11.11', 928, 'Bamel Raffy Al Hafizsh', 'Laki-Laki', '2009-02-07', 'Muara Lembu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2874, '11.11.11.11', 444, 'Denil Hibrizi Andova', 'Laki-Laki', '2008-11-21', 'Sungai Jering', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2875, '11.11.11.11', 451, 'Dody Sahputra Sinukuban', 'Laki-Laki', '2008-02-29', 'Pekan Tua Inhil', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2876, '11.11.11.11', 455, 'Faiz Kafka Al Hafiz', 'Laki-Laki', '2008-09-25', 'Logas Tanah Darat', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2877, '11.11.11.11', 445, 'Ghazi Abizalsi', 'Laki-Laki', '2009-07-24', 'Sungai Jering', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2878, '11.11.11.11', 839, 'Halru Hesfa Reza Pratama', 'Laki-Laki', '2009-04-15', 'Koto Baru ', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2879, '11.11.11.11', 835, 'Irgi Maulana', 'Laki-Laki', '2008-06-02', 'Baserah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2880, '11.11.11.11', 841, 'M. Dafa Elwandra', 'Laki-Laki', '2009-02-07', 'Pintu Gobang Kari', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2881, '11.11.11.11', 828, 'M. Imam Nurjumaidi', 'Laki-Laki', '2009-05-15', 'Air Buluh', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2882, '11.11.11.11', 845, 'M. Rafif Hizbullah', 'Laki-Laki', '2008-10-09', 'Sampurago', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2883, '11.11.11.11', 833, 'Milan Fabian Ananta', 'Laki-Laki', '2010-02-01', 'Lubuk Ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2884, '11.11.11.11', 837, 'Muhammad Daffa Oktrianda', 'Laki-Laki', '2008-10-31', 'Kebun Lado', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2885, '11.11.11.11', 826, 'Novan Maulana Sugito', 'Laki-Laki', '2009-01-13', 'Muara Langsat', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2886, '11.11.11.11', 843, 'Rafa Okta Pratama', 'Laki-Laki', '2008-10-13', 'Lubuk Ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2887, '11.11.11.11', 848, 'Rangga Arya Dinata', 'Laki-Laki', '2008-11-04', 'Baserah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2888, '11.11.11.11', 911, 'Reyhan Muzaki', 'Laki-Laki', '2009-07-23', 'Serosah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2889, '11.11.11.11', 819, 'Wahyu Mandoza', 'Laki-Laki', '2008-10-02', 'Sungai Besar', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2890, '11.11.11.11', 822, 'Zhafran Fakhlevy', 'Laki-Laki', '2009-01-05', 'Bukit Petai', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2891, '11.11.11.11', 907, 'ahmad nabil kasasi', 'Laki-Laki', '2009-08-22', 'dusun ronge', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2892, '11.11.11.11', 903, 'alief zia mahira putra', 'Laki-Laki', '2009-01-06', 'jl perintis gg. puyuh', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2893, '11.11.11.11', 905, 'argya firjatulloh', 'Laki-Laki', '2009-04-25', 'sungai buluh', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(2894, '11.11.11.11', 912, 'brady wijaya', 'Laki-Laki', '2009-02-15', 'jl pandan wangi', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2896, '11.11.11.11', 820, 'elang mulya emraldi hutama', 'Laki-Laki', '2009-05-08', 'sako marga sari', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2898, '11.11.11.11', 824, 'hafidz awwalul khairi', 'Laki-Laki', '2009-03-08', 'beringin taluk', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2899, '11.11.11.11', 902, 'hanif habibillah', 'Laki-Laki', '2009-10-12', 'dusun panjongek', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2900, '11.11.11.11', 855, 'julliyo alfharezi', 'Laki-Laki', '2008-07-16', 'petai', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2901, '11.11.11.11', 851, 'm. habib az-zikra', 'Laki-Laki', '2009-09-12', 'seberang taluk', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2902, '11.11.11.11', 846, 'm.qadafi', 'Laki-Laki', '2009-08-17', 'bukit pedusunan', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2903, '11.11.11.11', 860, 'm.ridduan shaputra', 'Laki-Laki', '2008-04-17', 'seb. pantai', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2904, '11.11.11.11', 865, 'mohd. sukri', 'Laki-Laki', '2008-11-23', 'pebaun hulu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2905, '11.11.11.11', 853, 'mohd. yusri', 'Laki-Laki', '2008-11-23', 'pebaun hulu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2906, '11.11.11.11', 858, 'muhammad fadhil akbar', 'Laki-Laki', '2009-03-20', 'koto kombu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2907, '11.11.11.11', 847, 'okta dian saputra', 'Laki-Laki', '2009-10-01', 'baserah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2908, '11.11.11.11', 863, 'raihan syarif', 'Laki-Laki', '2009-06-04', 'tobek panjang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2909, '11.11.11.11', 868, 'raziq bumi arkana', 'Laki-Laki', '2009-06-09', 'dusun panjongek', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2910, '11.11.11.11', 834, 'roif al adhwa', 'Laki-Laki', '2009-06-26', 'muara lembu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2911, '11.11.11.11', 838, 'zahran pratama', 'Laki-Laki', '2009-03-03', 'teberau panjang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2912, '11.11.11.11', 842, 'zidan', 'Laki-Laki', '2008-10-21', 'serosah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2913, '11.11.11.11', 831, 'Albadito Xavier Syafiq', 'Laki-Laki', '2009-04-11', 'Sungai Buluh', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2914, '11.11.11.11', 829, 'Alvino Dwi Pratama', 'Laki-Laki', '2009-08-18', 'Lubuk Ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2915, '11.11.11.11', 840, 'Bagas Hamzah', 'Laki-Laki', '2008-12-24', 'Banjar Padang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2916, '11.11.11.11', 836, 'Davin Agustiandi', 'Laki-Laki', '2009-08-14', 'Dusun Simpang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2917, '11.11.11.11', 844, 'Dika Pratama', 'Laki-Laki', '2009-04-09', 'Dusun Bunai Jaya', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2918, '11.11.11.11', 832, 'Fachricel Pratama', 'Laki-Laki', '2008-11-02', 'Dusun Ngarai Benai', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2919, '11.11.11.11', 830, 'Firman Akbari', 'Laki-Laki', '2009-01-01', 'Koto Gunung', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2920, '11.11.11.11', 816, 'Hafiz Alfitra Azra', 'Laki-Laki', '2009-09-20', 'Sungai Jering', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2921, '11.11.11.11', 813, 'Ilham Badril', 'Laki-Laki', '2009-02-05', 'Dusun Bunai Jaya Sitorajo Kari', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2922, '11.11.11.11', 821, 'Ivander Rizki Pratama', 'Laki-Laki', '2009-01-27', 'Simpang Tiga', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2923, '11.11.11.11', 825, 'M. Abil Mubarok', 'Laki-Laki', '2009-03-05', 'Banjar Guntung', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2924, '11.11.11.11', 883, 'M. Hafiz Annabil', 'Laki-Laki', '2009-01-12', 'Dusun Sungai Rumbio', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2926, '11.11.11.11', 818, 'M. Zaky Oktariandy', 'Laki-Laki', '2008-10-31', 'Dusun Suka Maju', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2927, '11.11.11.11', 823, 'Muhammad Alif Febriansyah', 'Laki-Laki', '2009-02-23', 'Simpang Tiga Jao', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2928, '11.11.11.11', 815, 'Muhd. Khairun Nofal', 'Laki-Laki', '2009-05-30', 'Muara Lembu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2929, '11.11.11.11', 881, 'Purwanto Sutja', 'Laki-Laki', '2009-02-05', 'Serosah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2930, '11.11.11.11', 827, 'Raja Mhd. Fauzillah', 'Laki-Laki', '2008-03-18', 'PT. BNS KM. 10 Sungai Guntung INHIL', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2931, '11.11.11.11', 638, 'Reldi Oktavino', 'Laki-Laki', '2009-10-24', 'Rengat', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2932, '11.11.11.11', 634, 'Tri Alham Putra', 'Laki-Laki', '2009-04-22', 'Sungai Besar', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2933, '11.11.11.11', 631, 'Zdhuratur Ramadhaan', 'Laki-Laki', '2009-08-29', 'Seberang Taluk', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2934, '11.11.11.11', 643, 'ABDILLAHWARITS AULIAZAHARA', 'Perempuan', '2008-09-04', 'Cerenti', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2935, '11.11.11.11', 647, 'ADINDA KURNIAWAN', 'Perempuan', '2008-11-14', 'Koto baru', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2936, '11.11.11.11', 636, 'AGIS SALSABILA', 'Perempuan', '2009-08-11', 'Sungai buluh f1', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2937, '11.11.11.11', 641, 'AMELIA RETNISARI', 'Perempuan', '2008-05-10', 'Pangean', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2938, '11.11.11.11', 632, 'ANNISA NURUL AINI', 'Perempuan', '2008-08-20', 'SUKA MAJU', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2939, '11.11.11.11', 645, 'AURA', 'Perempuan', '2009-05-23', 'Lubuk Ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2941, '11.11.11.11', 650, 'Dhia salma salsabila', 'Perempuan', '2009-03-23', 'Sungai pinang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2943, '11.11.11.11', 621, 'Fani Adila', 'Perempuan', '2009-01-13', 'Lubuk Ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2944, '11.11.11.11', 613, 'Hanifa marsya ardiana', 'Perempuan', '2009-03-22', 'Seranggi 3', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2945, '11.11.11.11', 616, 'HAURA NURSYIFA', 'Perempuan', '2009-08-09', 'Sungai jering', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2946, '11.11.11.11', 625, 'Immawati Latifah', 'Perempuan', '2009-03-11', 'Pl. Godang kari', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2947, '11.11.11.11', 607, 'Jennie Septiani Rahmadani', 'Perempuan', '2009-09-10', 'Pekanbaru', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2948, '11.11.11.11', 615, 'Khalisa humaira ', 'Perempuan', '2008-12-23', 'Desa sawah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2949, '11.11.11.11', 619, 'Laura Shalsabilla', 'Perempuan', '2008-07-18', 'Sungai Tambang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2950, '11.11.11.11', 610, 'MYSHA ANGELICA', 'Perempuan', '2009-01-22', 'Pangean', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2951, '11.11.11.11', 622, 'Naila Nazhifah', 'Perempuan', '2009-02-10', 'Gunung Toar', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2952, '11.11.11.11', 628, 'Nazira syafwah deory', 'Perempuan', '2009-01-21', 'Peranap', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2953, '11.11.11.11', 635, 'Nur azizah', 'Perempuan', '2009-01-25', 'Sungai jering', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2954, '11.11.11.11', 640, 'Okta Fitria Isnaini', 'Perempuan', '2009-10-04', 'Langsat Hulu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2955, '11.11.11.11', 644, 'Qodri aura suci', 'Perempuan', '2008-09-23', 'Air emas', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2956, '11.11.11.11', 648, 'Rifana Khairunnisa', 'Perempuan', '2009-01-19', 'Logas Tanah Darat', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2957, '11.11.11.11', 651, 'Rusyaida Ulya Purnama', 'Perempuan', '2009-08-05', 'Lipatkain Kab. Kampar Kec. Kampar kiri. ', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2958, '11.11.11.11', 646, 'Sefriani', 'Perempuan', '2008-08-15', 'Desa jake', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2959, '11.11.11.11', 642, 'Shifa Rahadatul Aisy Yofa', 'Perempuan', '2009-04-17', 'Sungai Buluh', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2960, '11.11.11.11', 637, 'Syakina Ultari', 'Perempuan', '2008-08-17', 'Sungai manau', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2961, '11.11.11.11', 649, 'TALITA ZAHIRAH SISWANTO', 'Perempuan', '2008-11-18', 'Seb. Taluk hilir', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2962, '11.11.11.11', 653, 'Vania firsty riansyah', 'Perempuan', '2009-10-22', 'Lubuk ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2963, '11.11.11.11', 608, 'ZASKIA ZULQA', 'Perempuan', '2009-10-23', 'Tebing tinggi', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2964, '11.11.11.11', 614, 'Achika Akhlaqul Karimah ', 'Perempuan', '2009-08-13', 'Pucuk Rantau', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2965, '11.11.11.11', 618, 'Afdaliyanti', 'Perempuan', '2009-01-16', 'Pantai', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2966, '11.11.11.11', 623, 'Aisyah Rahmawani', 'Perempuan', '2009-04-09', 'Simandolak', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2967, '11.11.11.11', 629, 'Anggun Tria Salindri', 'Perempuan', '2008-11-05', 'Sako, Pangean', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2968, '11.11.11.11', 620, 'aurel', 'Perempuan', '2009-05-23', 'lubuk ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2969, '11.11.11.11', 626, 'cahaya cantika', 'Perempuan', '2009-09-24', 'koto tuo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2970, '11.11.11.11', 617, 'delvi apriawardiansih', 'Perempuan', '2009-02-13', 'dusun simarondan', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2971, '11.11.11.11', 633, 'dhipa repna wasila', 'Perempuan', '2010-02-17', 'kompe berangin', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2972, '11.11.11.11', 612, 'elmayra arda rohma', 'Perempuan', '2009-05-30', 'koto baru', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2973, '11.11.11.11', 495, 'gadis ayu putri sanjaya', 'Perempuan', '2009-04-03', 'sungai buluh ', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2974, '11.11.11.11', 499, 'hanifa najla', 'Perempuan', '2009-01-27', 'pucuk rantau', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2975, '11.11.11.11', 502, 'ilvi rahmi', 'Perempuan', '2009-07-19', 'lubuk ramo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2977, '11.11.11.11', 504, 'keyla kurnia putri', 'Perempuan', '2008-11-22', 'serosah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2978, '11.11.11.11', 493, 'khansa maila hana', 'Perempuan', '2008-02-13', 'desa muara bahan', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2979, '11.11.11.11', 496, 'luna ananta fadlie', 'Perempuan', '2009-06-15', 'beringin taluk', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2980, '11.11.11.11', 497, 'nadia erwandani putri', 'Perempuan', '2009-06-20', 'simandolak', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2981, '11.11.11.11', 492, 'nayla febriani', 'Perempuan', '2009-02-02', 'sungai buluh', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2982, '11.11.11.11', 501, 'nazzaha zahratu elzakiyyah', 'Perempuan', '2009-11-11', 'sungai jering', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2983, '11.11.11.11', 503, 'nurina asha alyani', 'Perempuan', '2009-11-11', 'dusun jirak', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2984, '11.11.11.11', 508, 'onna nazira', 'Perempuan', '2009-04-26', 'baserah', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2985, '11.11.11.11', 511, 'rewi auliya', 'Perempuan', '2009-03-06', 'koto gunung', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2986, '11.11.11.11', 515, 'rindu fransiska', 'Perempuan', '2009-10-02', 'sumpu', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2987, '11.11.11.11', 516, 'sasya aurora', 'Perempuan', '2009-04-24', 'bumi mulya', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2988, '11.11.11.11', 506, 'sherin tria ananda', 'Perempuan', '2009-01-08', 'seb.cengar', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2989, '11.11.11.11', 505, 'syakina putri', 'Perempuan', '2009-05-07', 'dusun gelugur', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2990, '11.11.11.11', 507, 'syakira andina siregar', 'Perempuan', '2009-05-10', 'dusun jirak', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2991, '11.11.11.11', 510, 'triana palincia', 'Perempuan', '2009-09-27', 'koto rajo', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2992, '11.11.11.11', 512, 'zakia yulia ', 'Perempuan', '2008-07-12', 'peranap', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(2993, '11.11.11.11', 513, 'zulfa turrahmah', 'Perempuan', '2009-07-13', 'sei. pinang', '', '', '', 'Islam', '2021', 'MTs Kelas 7', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(9999, '11.11.11.11', 1, 'Tester User', 'Perempuan', '2000-01-01', 'Taluk', '', '', '', 'Islam', '2019', 'MA Kelas 12', '2022-07-15 09:35:22', '2022-07-15 09:35:22');

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

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `kode_instansi`, `email`, `username`, `pin`, `qr_code`, `email_verified_at`, `password`, `role`, `route`, `remember_token`, `status_user`, `user_join`, `name_table_join`, `saldo`, `foto`, `created_at`, `updated_at`) VALUES
(1, '11.11.11.11', 'testuser@gmail.com', 'testuser', '1111', NULL, NULL, '$2y$10$UFANlMNLl0roVLhdohsrEuH.k49DMd1HCTK6SDvsHxcDfl0zXw8KW', 'SISWA', '', NULL, 'isActive', 1, NULL, '0', '', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(6, '11.11.11.11', 'ahmadDahlan@gmail.com', 'ahmadDahlan', '2805', NULL, NULL, '$2y$10$UFANlMNLl0roVLhdohsrEuH.k49DMd1HCTK6SDvsHxcDfl0zXw8KW', 'INSTANSI', '', 'd4PDu3P9e2WTAecDgtVsIR7PNdPmy8U4GdC8ZmKd', 'isActive', 1, NULL, '0', '', '2022-07-15 09:35:18', '2022-07-15 09:35:18'),
(426, '11.11.11.11', NULL, 'SISWA_iYOS', '1774', '0003972382', NULL, '$2y$10$C4qALDKiKTnwsn8CqAnt..5P1IiHL/C1XdMUeEgc27FMo/BhVyNQS', 'SISWA', NULL, 'bJtk0rrKIhh13A3m6vxU2vmJsw488yQWgX1en9Y0', 'isActive', 1, 'siswa', '0', '0353.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(427, '11.11.11.11', NULL, 'SISWA_vuck', '1234', '0003972119', NULL, '$2y$10$p/X4.nlbb04EUHG50PeL2u2TM.OTgVCJ.7DEocMSBgsNgUxdtODWK', 'SISWA', NULL, 'KPXSWuGIG3nHugpApTUsC84P4xlgWa6p2VZQkW2m', 'isActive', 1, 'siswa', '0', '0338.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(428, '11.11.11.11', NULL, 'SISWA_iJ1A', '1234', '0003971856', NULL, '$2y$10$55czH.WhGFhOEp5CPCY8w.oVyIZwAzq51Yh1Q6bfkTwMfWCP7oJn6', 'SISWA', NULL, 'Q0tdDIDfHMEDiIH8LZsOdOMVFD9OxWKnxLO86BjA', 'isActive', 1, 'siswa', '0', '0329.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(429, '11.11.11.11', NULL, 'SISWA_JIoq', '1234', '0255580861', NULL, '$2y$10$RGxOnHqRaJZ5vXIdbEZO3erMFB9Cjon.Ul5x8S2CoPaMBnewWulDa', 'SISWA', NULL, 'L5WgxCWAecs2YYScaYCQ75vBtOHgtIrPFgyCwOkz', 'isActive', 1, 'siswa', '5000', '0334.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(430, '11.11.11.11', NULL, 'SISWA_Vo8A', '1804', '0003971585', NULL, '$2y$10$K5tJe0.bYdFWkMAcAFzhTumE6a0tPWjfINh.wTNwMKsDRvp3hwga2', 'SISWA', NULL, 'mX4chWxYe49niqcAq7m4yzMubJDuMzoxVsfU8b91', 'isActive', 1, 'siswa', '0', '0331.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(431, '11.11.11.11', NULL, 'SISWA_fQiD', '1234', '0003970732', NULL, '$2y$10$SPond0hhepwVa/YQPK/RzOm3TXcKXgM5YEBy5cMHAMhD/Z240dJsq', 'SISWA', NULL, '8piIz41QiETwi6YBdhXakzxOZTePZ3WmeNeitoDu', 'isActive', 1, 'siswa', '0', '0333.JPG', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(432, '11.11.11.11', NULL, 'SISWA_q3T2', '1234', '0003973167', NULL, '$2y$10$N/CK//.MbKb5VCl9ZrX2BONREoNVQrMzROITYSNeQgcJic/qj86/y', 'SISWA', NULL, '0vs7lTN9MiTjYWyE1xUzJME0rk2IeLdfWxHWhM3l', 'isActive', 1, 'siswa', '0', '0336.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(433, '11.11.11.11', NULL, 'SISWA_wGtT', '1234', '0003940533', NULL, '$2y$10$u/MKREdEFoBmEBrzccbV1e7QQYMdmwfuGzCAhkKgzhhBYFM0..8gG', 'SISWA', NULL, 'SexaFaE5SttswCW6VTV0GRSYRRmhI0jgVAeo6EVG', 'isActive', 1, 'siswa', '0', '2870.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(434, '11.11.11.11', NULL, 'SISWA_CFCe', '1024', '0003971017', NULL, '$2y$10$s8K0FCz2lHZ.fawk7vKfwemsU8gBnhHYEnIoSxPQFje3VfGwT9oaS', 'SISWA', NULL, '0F30eZamzeDDIuNhkqG9xnF7KG8M1AuBSoWYkL3C', 'isActive', 1, 'siswa', '1000', '0332.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(435, '11.11.11.11', NULL, 'SISWA_Y5gt', '6420', '0003970157', NULL, '$2y$10$qA.IA/gX6.H0KPolvTOJJ./pJAkWxMG07jrp3x1ZpMHgMWm5CtYJG', 'SISWA', NULL, 'uj07NVLJLT5fYLlTOeVYVNrJjuQd1WL3jpaGxUPB', 'isActive', 1, 'siswa', '0', '0481.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(436, '11.11.11.11', NULL, 'SISWA_B8cp', '8917', '0003969582', NULL, '$2y$10$6AsWwFF0RjRV.ICVvwFG.eU6oLuzrL/Hka494xZLP3cD/9NGZwXym', 'SISWA', NULL, 'm0Yt3cLmrQ2lf8WenSeBS8oWVuOCKPpRFmjhvXXW', 'isActive', 1, 'siswa', '7000', '0474.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(437, '11.11.11.11', NULL, 'SISWA_DDMt', '1234', '0003970443', NULL, '$2y$10$oHhTOs0YIopJEjyoVs08tO4Ljg6WZmj3YzS41pb6CIsA6JtsamcNe', 'SISWA', NULL, '9EiGPNrd9fRpOYk2YPy0BLLLi32gnpsUffeYcaph', 'isActive', 1, 'siswa', '0', '0478.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(438, '11.11.11.11', NULL, 'SISWA_86cF', '2299', '0003969293', NULL, '$2y$10$LNMddDtcYCqEUAdHWnl7JeeLr5YcuFcEI65jmvufS4Olh3Ihz7TzO', 'SISWA', NULL, '9QYl1xCxfeaKHNHR0rZdi2gFOQQLZ3fVhQbenunV', 'isActive', 1, 'siswa', '99000', '0473.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(439, '11.11.11.11', NULL, 'SISWA_dYIz', '1507', '0003970729', NULL, '$2y$10$qy46cU6TUuftQXNIAXkkue/ZcmlG5Z6A.v5yPuQA9yE8x3j3Abpua', 'SISWA', NULL, 'm7ZxgysdBdc58SUGZ0OsCn88jFI5ji7BuiDmdomq', 'isActive', 1, 'siswa', '51880', '0479.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(440, '11.11.11.11', NULL, 'SISWA_L0XL', '1234', '0003969004', NULL, '$2y$10$Flh3pKwp6fjCrrgnLyOFPegw5J89CD8acE88E7Tu4RQcf1C52LYqy', 'SISWA', NULL, 'c3QYQvdo6rxAYROLkztNOiMenmbP9dPsuKq3ZavD', 'isActive', 1, 'siswa', '0', '0476.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(441, '11.11.11.11', NULL, 'SISWA_TTjI', '2309', '0003971014', NULL, '$2y$10$9svgbsygJeZGXMfa2imtSO/6SYk/Ctp0Z2CPyeKlZF60FxU8y9bmi', 'SISWA', NULL, 'ey4xs6kwHiK0TTMxUNTRpwVwhsGqYuWkwwhEl1ya', 'isActive', 1, 'siswa', '12000', '0480.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(442, '11.11.11.11', NULL, 'SISWA_wadA', '1234', '0003968714', NULL, '$2y$10$HIIBRXZDrbgWlmidx7w0nO8WJjFst0z29AnvNvsrxcc/rT8k8KfXG', 'SISWA', NULL, 'yO2Ljmj4LVSIHiA2Q0v0Vv22KptpjmBHciSZic3H', 'isActive', 1, 'siswa', '0', '0477.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(443, '11.11.11.11', NULL, 'SISWA_0aVt', '2210', '0003971298', NULL, '$2y$10$ohd84EvG3ywJK7Pqb7oHse6UQw7b44mS0JjSmBFiV9ujs.kmmbovG', 'SISWA', NULL, 'jCAT4gZFR3GxsEup38qJ3VabwFqljEGFBhmrVgBu', 'isActive', 1, 'siswa', '2000', '0482.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(444, '11.11.11.11', NULL, 'SISWA_QUW6', '1234', '0003941781', NULL, '$2y$10$EY6zxFTRBt3ZSDggvqoKVuMjMs1B61dgMSKhQnaAayOZ9.v7hR2Au', 'SISWA', NULL, 'WRt686CAtz1MWp2JwhVojydmIWAwRTDg6Thz3q2B', 'isActive', 1, 'siswa', '0', '2874.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(445, '11.11.11.11', NULL, 'SISWA_Shzs', '2407', '0003941157', NULL, '$2y$10$omjL0zDtqm3AlSXdJNRfLO7MwB5roBAx.upPRsoyS4Kw1mZbjnLZW', 'SISWA', NULL, 'QyqxyXuxnpz1LM3bTObHIKmVHvQUPMOvmrKyYaR7', 'isActive', 1, 'siswa', '0', '2877.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(446, '11.11.11.11', NULL, 'SISWA_Jod0', '2007', '0003939600', NULL, '$2y$10$HPmjJcQ2jMwvWj62JrYe..FuXB65pG3drZRJewKA/MKHjSgyBw4Kq', 'SISWA', NULL, 'Ozz73boCKNP2GsVYlCGfslyzuOgg7p168KfKlUUF', 'isActive', 1, 'siswa', '0', '2867.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(447, '11.11.11.11', NULL, 'SISWA_DZNE', '1234', '0003940222', NULL, '$2y$10$5ObwtWsfJK3at50PmK0QMOg23CP6FtoXRsoQLVnFqUdlA1hWjQYqC', 'SISWA', NULL, 'tcLriuAWuGdhWEKkTpTmzdw9seNeDKtdMOEO8fQI', 'isActive', 1, 'siswa', '0', '2869.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(448, '11.11.11.11', NULL, 'SISWA_qHYq', '1230', '0003939911', NULL, '$2y$10$IBHHJqLzmqpBGrsAgyvbLebHj9Kd/4LpHiVkztigMCFuCPvLWlZ8O', 'SISWA', NULL, 'do6CcTec6ZezElj12xIMGdLMDj1bxEE1EoalEpcu', 'isActive', 1, 'siswa', '5000', '2868.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(449, '11.11.11.11', NULL, 'SISWA_Op4l', '2020', '0004072340', NULL, '$2y$10$eqrvWfjorXMJ0YbQuP9S.e7AvUJweP9cainNL6X6Pct9fcfPHGI2G', 'SISWA', NULL, 'nvj5UohOg74nxDbxMIu8hr6k5R4FXHoyWHPB4Ngs', 'isActive', 1, 'siswa', '0', '2702.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(450, '11.11.11.11', NULL, 'SISWA_HfVA', '2704', '0004049918', NULL, '$2y$10$kqHZkp7pTc1hRg2vDQQGiOfz93cVSOULrzjNmiVURqzh.UvsJRXXy', 'SISWA', NULL, 'DOZYt0t9xD1X75lSCI7AgMLs3QT8fptRP8Qy1jRQ', 'isActive', 1, 'siswa', '0', '2697.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(451, '11.11.11.11', NULL, 'SISWA_RjA7', '0000', '0003942405', NULL, '$2y$10$YK8yMQq4OyMtfb2CMgag/u5r/CZz6obbDUiTVbQfQVFHSrCskTNBi', 'SISWA', NULL, 'j3SjQQdXfJ1nLffe8pFkdfpfbEpa6zQVkuyLvtDb', 'isActive', 1, 'siswa', '3000', '2875.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(452, '11.11.11.11', NULL, 'SISWA_9GSd', '4753', '0003940845', NULL, '$2y$10$lLKeCIkKTqKnHEOhTcRsKOdDlY9T8J4J8zB46LzHHGRMlag/TATgC', 'SISWA', NULL, 'V1UgyXjYUFtsGiHcJ8kmLxJ24EqJ2EozNlVjHWsI', 'isActive', 1, 'siswa', '14000', '2871.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(453, '11.11.11.11', NULL, 'SISWA_yoWO', '1234', '0004049609', NULL, '$2y$10$RkIi.hI.Gyywf7WhwE/qrOonu8ZidiGRTXNQYRqxKTC6eCQChWtO6', 'SISWA', NULL, 'kncSWpC0U0uXrZ5J4vNkThLvLaQeirhcuvQu6xiS', 'isActive', 1, 'siswa', '0', '2696.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(454, '11.11.11.11', NULL, 'SISWA_K01b', '2121', '0004072087', NULL, '$2y$10$XUfjLbZ9JA21XrpxpTk.ye2sjRDhuTJB/6k30vEFaYtQRMNwUxRua', 'SISWA', NULL, '6vrBGEsrq2Te2mVSjzK82R9qgT2HA1azFUfjGNfn', 'isActive', 1, 'siswa', '25000', '2700.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(455, '11.11.11.11', NULL, 'SISWA_Sou0', '2008', '0003942717', NULL, '$2y$10$ylbNMlR/lEADQGGRV2M9buUyS4NKCePol8h776GxYonTrsAeJicsW', 'SISWA', NULL, 'Zbii66053cmMSG4qetWfJJ816xrnBwMU3jdtXVFn', 'isActive', 1, 'siswa', '0', '2876.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(456, '11.11.11.11', NULL, 'SISWA_BDDy', '1234', '0004071833', NULL, '$2y$10$4x9m5DVWYTfmAVYnzk9Ez.KU8tfoPcRuY5GvklFjwvd5zMQkm2g9.', 'SISWA', NULL, '1TL16hWghzuNzY7H6bCPTy8cnAwSLHGDIBq8Iph0', 'isActive', 1, 'siswa', '32000', '2699.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(457, '11.11.11.11', NULL, 'SISWA_plzt', '1234', 'haiHQ6SEtLP4V603sl0IN4U4WrqloHhK5611DU5h', NULL, '$2y$10$/Qj0Bfro1ld8BNZeW/EzSOvVqigbKyzZYG9M.3JPWzzPWh93FX7Ai', 'SISWA', NULL, 'ToR6EdyuV22LXEBLK5Xqqpg09SMjXDawYuPOsDSR', 'isActive', 1, 'siswa', '0', '2694.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(458, '11.11.11.11', NULL, 'SISWA_AxgK', '2122', '0003961620', NULL, '$2y$10$rUaTqw0YtHWTDL8OY/clIuxXo5dVTelTyPmQWEX51F8c.1VndGEqq', 'SISWA', NULL, 'VB9iW7CJ4itl1U2mODLoz2uNfxQkaoXw7ACRH0aq', 'isActive', 1, 'siswa', '0', '2758.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(459, '11.11.11.11', NULL, 'SISWA_aCZh', '1234', '0004048991', NULL, '$2y$10$BviNQXzOrTjlP2j6L2p14uyJbPBNxRijK8at3R.zjAD5a4CRTPOC.', 'SISWA', NULL, 'PPiWUKLFwIw6PXHDy4U4N9XBzKO1rvGTUsbWojPy', 'isActive', 1, 'siswa', '0', '2693.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(460, '11.11.11.11', NULL, 'SISWA_NwER', '2324', '0004071578', NULL, '$2y$10$hxFvKAENg/WBPgc4dRcNZ.RA3DLWERltjP5cLoCI4x856nKGIUL8C', 'SISWA', NULL, 'jcTdlt6BL3dImHUy10kc9v6hYZmvH9yYg8I0VM2A', 'isActive', 1, 'siswa', '0', '2701.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(461, '11.11.11.11', NULL, 'SISWA_FwYk', '2765', '0003961328', NULL, '$2y$10$Y7ZTs4g/.UVCVVj7M8MoN.eabL0GyhfHjiLx0DHCai0sS.9ecBEd6', 'SISWA', NULL, 'PEDNOAtNOUYOoYpAmW6R1BhCIoFcMGKMT0YUL132', 'isActive', 1, 'siswa', '0', '2765.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(462, '11.11.11.11', NULL, 'SISWA_u2sz', '1671', '0004048682', NULL, '$2y$10$TBUn2BcN2U913T7zmFlnH.gPlyVv4xqm7N9e./Zk9SsM8vPBQNwoW', 'SISWA', NULL, 'aIz33Z69fpYybUHTyMJC52PfHNH1unz2LfqDFWQu', 'isActive', 1, 'siswa', '0', '2695.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(463, '11.11.11.11', NULL, 'SISWA_jZ4V', '2007', '0004071321', NULL, '$2y$10$V2gijDnCerg3bfzjmgng1unrdidFoAGgSwfsZfrR8h1Tdq1PNApvu', 'SISWA', NULL, '1r6MNST7rcpNadEDSVOI0eqkm132ul63IqQZ6S4N', 'isActive', 1, 'siswa', '2000', '2704.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(464, '11.11.11.11', NULL, 'SISWA_BhsC', '3206', '0003961920', NULL, '$2y$10$7pwyfb4HqhCDj/N1xTvOTOeBGgg5mw8LWjh.T9x9lZobZN0ea4Uxy', 'SISWA', NULL, 'etbFfsF5ENHpqnYmzKRhSAga5VIO8VuVDGfphjr2', 'isActive', 1, 'siswa', '0', '2759.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(465, '11.11.11.11', NULL, 'SISWA_t56F', '1234', '2QLP5dyQqoKuOl8CjprLhiieEsxFbzhJLaJZJcew', NULL, '$2y$10$OIhJu8JT26PDc7TRhfXWkOJfBKcJa2bGSHTussaXRl0Int0iM7Rde', 'SISWA', NULL, 'VMUCPyJUPFzs4gxvt5igpXBY32ThlWLDZxK3E7FJ', 'isActive', 1, 'siswa', '0', '2676.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(466, '11.11.11.11', NULL, 'SISWA_cUJh', '5427', '0003966421', NULL, '$2y$10$HuHk6es.6p8sFGVyEwBsmOQcjiLFSMuyAcwHNEEYlZM/TwpRQch/S', 'SISWA', NULL, 'R0WaidfP3pNmhKcj8GQktdzGLCS6r6tVS4eLVZ5D', 'isActive', 1, 'siswa', '12000', '2692.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(467, '11.11.11.11', NULL, 'SISWA_vhAl', '2810', '0003941469', NULL, '$2y$10$K2bX3Qogqhkn1gxumKGQMO03jSRpkDpB3sk5XrI5mVBng0Mah3T9W', 'SISWA', NULL, 'zCHzcUpYNnSQJDIvQNk305wXIVxvnflJ12qVZfoY', 'isActive', 1, 'siswa', '3000', '2872.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(468, '11.11.11.11', NULL, 'SISWA_JQdG', '1234', '0003964058', NULL, '$2y$10$zG4Pt/3UMeEI1YVevNmDoOT/3b7rnB.xTRfiFDmKS57hCDE808IIS', 'SISWA', NULL, 'wzpp3gUcoolMqAZZPo45kfsRcm1hE2kgRbKh8MHE', 'isActive', 1, 'siswa', '0', '2677.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(469, '11.11.11.11', NULL, 'SISWA_3kNF', '0908', '0003961045', NULL, '$2y$10$lgr4wRh.1n1AUxJqzy3Gju7pyv6xuHL/xbjZnqAoTSiHR47xJe0tO', 'SISWA', NULL, 'WG4FXP5DaVJeOrQoMdayr3vdIOVSmSV1qIBEX8fJ', 'isActive', 1, 'siswa', '0', '2763.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(470, '11.11.11.11', NULL, 'SISWA_ZsWw', '1234', '0003966126', NULL, '$2y$10$mpm5zovWhDgOD1ryxWbXRegwop1R8DVXZu3dwuiBo88cFX8tEmlJO', 'SISWA', NULL, 'NFJW1PQJmLu8gCCdSdf0YTIHOBoDucKh1myHboLt', 'isActive', 1, 'siswa', '0', '2689.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(471, '11.11.11.11', NULL, 'SISWA_2WE1', '7312', '0003965831', NULL, '$2y$10$e55V4z3eB2vk9bHPt/X1s.laj2eN8nua8kNkKnXHyp6lCmuvIZ826', 'SISWA', NULL, 'y3CpMyrAiXEUUoypFXoYyDC3SvIxSzto9bTUinYs', 'isActive', 1, 'siswa', '2000', '2687.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(472, '11.11.11.11', NULL, 'SISWA_jFZW', '1234', '0003965536', NULL, '$2y$10$bjf.tKNaY2YO16GGUFhyEeopNDM6EKeHUndaDPVYtrIvU9/2gA/Ne', 'SISWA', NULL, 'R0FKwlXGh0KdR4foYLxX5B7t3psbRvoEIbUVNGmJ', 'isActive', 1, 'siswa', '5000', '2686.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(473, '11.11.11.11', NULL, 'SISWA_X9ND', '0518', '0003964354', NULL, '$2y$10$eUSF/QamIRAztjqkQcL8COdI2kr5t9laS7PmfnKyQidL7eYDrSde2', 'SISWA', NULL, 'YL8UAaNh4DU9QT0pTQLEx6o0WQxH117xWs0RuMbE', 'isActive', 1, 'siswa', '0', '2680.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(474, '11.11.11.11', NULL, 'SISWA_CHfC', '3007', '0003962220', NULL, '$2y$10$n5GCRjxJUphHO6GQc8o1NuFzTqYZwYuuNRVgIbhXtrNszqxSKYIWi', 'SISWA', NULL, 'NGnBMUGMAegAnln0KYgBpQ3sl2uHqO6pxsIAv9Qv', 'isActive', 1, 'siswa', '21000', '2755.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(475, '11.11.11.11', NULL, 'SISWA_Ob73', '1234', '0003964650', NULL, '$2y$10$WreniUkpEYTGtH61xfDHr./EsIEO4Bpj7jwLpQNGne74KeWtn.IC6', 'SISWA', NULL, 'xDyz60n7KeWesQ91zkYU0pP7kKnMkg04ablzCsfL', 'isActive', 1, 'siswa', '0', '2682.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(476, '11.11.11.11', NULL, 'SISWA_qTuD', '1234', '0003965241', NULL, '$2y$10$gvYBjk6M7TBIrCcxz1XkHOY.JqSYRBrNGhjlm4LFSRe/PN/W0wNdu', 'SISWA', NULL, 'PurpMsR8M05lITSbsnoPQNe1t5gsJsu3FW71fLgr', 'isActive', 1, 'siswa', '0', '2685.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(477, '11.11.11.11', NULL, 'SISWA_uABD', '1234', '0003964946', NULL, '$2y$10$F3EY./AP.RiEp9zWXjZchOxsICdIMNpAynLNO7fuCgH8Rb199Ga26', 'SISWA', NULL, 'yGqbzBfHOyUbluOhpqqp6B22rR8GVax76f8auNig', 'isActive', 1, 'siswa', '100000', '2683.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(478, '11.11.11.11', NULL, 'SISWA_XgMj', '2606', '0003976395', NULL, '$2y$10$oSqqN8RDNlVGeOmWJD1QmOZCirnucj.AMooMtY8idghCLC.46eh/i', 'SISWA', NULL, '9IJPIlzlHqbnQYHjehGrH1ukbsowET27H3pLtOaD', 'isActive', 1, 'siswa', '19000', '2760.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(479, '11.11.11.11', NULL, 'SISWA_8Gd4', '1234', '0003974647', NULL, '$2y$10$FZqbfrv/bZmotXJR0CSEvOYEv0oOi9/q6OyPHWeb5JXEJnFn/FKyy', 'SISWA', NULL, 'lgLDfq9FyE1nKtb1A8sDn3EC2Ye6Qxs32YOUVzqC', 'isActive', 1, 'siswa', '0', '0351.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(480, '11.11.11.11', NULL, 'SISWA_2cOI', '2004', '0003973305', NULL, '$2y$10$H7p/p1RvwOCZ2d/O7pnoRuBETGxGReMXdExWaic1zueUMXR9/Npue', 'SISWA', NULL, 'KIm2CLyKGSZ21Ds6OtIZZsdUWUSsI882Sq9Z4ioy', 'isActive', 1, 'siswa', '0', '0344.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(481, '11.11.11.11', NULL, 'SISWA_Dza6', '1234', '0003962519', NULL, '$2y$10$jFK36v.JqkFW01yT6JXWQuT9RFbp6EV992wfNLz5hxvTb13wV2K8G', 'SISWA', NULL, 'FhoJ5aTcV0Se5Z2tTgdRoBV4mVSZWoP9RBBJAs7l', 'isActive', 1, 'siswa', '3000', '2756.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(482, '11.11.11.11', NULL, 'SISWA_y5aZ', '1234', '0003974374', NULL, '$2y$10$nP1zyOhgGaqHGtkMIcvXjONqsuLvxWd.kEKiNuyMXQrCHT.iyz836', 'SISWA', NULL, 'OxMsr4QNsNZR16b1Lh5LMYXiEJfyOjjYSQQGitIU', 'isActive', 1, 'siswa', '0', '0347.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(483, '11.11.11.11', NULL, 'SISWA_9R7m', '1234', '0003973044', NULL, '$2y$10$8fDc/mNmYnRDFjZ76VcXle57dprK59lzex08.EHd9.xd1A/Pu9AuK', 'SISWA', NULL, 'nEwJlKEuBDHR7qrZufoFNvE34dCkIhld4Vz8nFwM', 'isActive', 1, 'siswa', '0', '0342.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(484, '11.11.11.11', NULL, 'SISWA_PPpb', '0104', '0003974100', NULL, '$2y$10$sOsKABd0MHf9ivQqoyIeMuYydyVwGE01B2hITCM40LrEcNndgJ.06', 'SISWA', NULL, 'NtNxxixldxVcoClwp1MvEKFUrRXU9ZstJc7bE3wW', 'isActive', 1, 'siswa', '0', '0346.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(485, '11.11.11.11', NULL, 'SISWA_ibwC', '2609', '0003976128', NULL, '$2y$10$tO.MAW2i8Z58bve4H.O9TOzyrvUaauASfgK6KOb9CBUz0We/I8hdS', 'SISWA', NULL, 'oR1CBiTJCRc67A1RtIwaOyo2yA3dhpYxHsqm0p2X', 'isActive', 1, 'siswa', '3000', '2761.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(486, '11.11.11.11', NULL, 'SISWA_YvOQ', '1234', '0003973825', NULL, '$2y$10$Qq1YTHn3z5haDWgSGYNBbewpgVgUTdi6s5qxIyecBwE5.cwYCtB2G', 'SISWA', NULL, 'IhfGdJ5m64zmdI7Dev2KRyfFyKa4l09tuwOpmZCm', 'isActive', 1, 'siswa', '0', '0350.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(487, '11.11.11.11', NULL, 'SISWA_oiZz', '1283', '0003962818', NULL, '$2y$10$F6n1de6U5B.0qdsgN8ulauvQM4rAPXd0BRW0yfcj6/66UU2VncYNu', 'SISWA', NULL, 'IwSjY4pVJycDuAvMGdGn32GPZv9aWpOVi5HsBc5K', 'isActive', 1, 'siswa', '5000', '2757.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(488, '11.11.11.11', NULL, 'SISWA_VBdI', '1234', '0003973565', NULL, '$2y$10$NSN7bNBsJJNYbexdAnlia.Hd0zYgVZMJBwUniKMmrvSpOWSXTz1DK', 'SISWA', NULL, 'na7FyzAHUrJmRBSV3oXD8wDxyViSdmRII1ahV0GP', 'isActive', 1, 'siswa', '0', '0348.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(489, '11.11.11.11', NULL, 'SISWA_rdUO', '1234', '0003972521', NULL, '$2y$10$vlA5iJOXG88HGbHU4CN3wOtWC4vEVow1naodGyC3Mr9RUT3FkmAum', 'SISWA', NULL, 'AK6T6aoh4yuNBKJoZbYzU50N6n3LZOKLHoIpBI2a', 'isActive', 1, 'siswa', '0', '0339.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(490, '11.11.11.11', NULL, 'SISWA_O5DV', '1234', '0003985078', NULL, '$2y$10$VxXyJ1eMj4lFIRCiCVwl8ugGomTjweexgy11Bz/AC2KWzyFPU46cW', 'SISWA', NULL, 'ySGi00y9k0YGNV2kaPXCkSjgZF5ErNlIetbNcJkE', 'isActive', 1, 'siswa', '0', '2784.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(491, '11.11.11.11', NULL, 'SISWA_nRzg', '1234', '0003972259', NULL, '$2y$10$s.Twq60LAm9vkDwn6bXvD.3TX1yuXSVz0GMlDD.HecFzrjptnj5SK', 'SISWA', NULL, 'AnwbG7b3r4aP5qn2lp8PCnDZwvRV6reYOpqljLCL', 'isActive', 1, 'siswa', '0', '0343.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(492, '11.11.11.11', NULL, 'SISWA_xIxF', '1008', '0003968953', NULL, '$2y$10$GKK0K20/yIw4OX6Q6kcwfeGIZW7M.Ki/NWLh9fqx3kRAJL9WsQa26', 'SISWA', NULL, 're02L0FFkOWu5aCpT5wUwOjz0hjaBIk9AGCi2cgF', 'isActive', 1, 'siswa', '0', '2981.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(493, '11.11.11.11', NULL, 'SISWA_6RPv', '1703', '0003968663', NULL, '$2y$10$c6SM1m2xY2C7QYi.5EjkVu2v9AZKIRNOx98Ngx6R2S80ItXHuqKEK', 'SISWA', NULL, 'xC9Pcgb9fLhrR7BCIsfGOEEmhgCoQmeuAqjYsrxt', 'isActive', 1, 'siswa', '2000', '2978.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(494, '11.11.11.11', NULL, 'SISWA_FKBK', '2205', '0003975860', NULL, '$2y$10$iXsrQrAH/5aKCZcfSaUpo.wChnJx18ylxsT1oz8EwQOWihibNp7LK', 'SISWA', NULL, 'eik0pVGQ1qYKNUniP1SJnIS3FXlq1JYg76MfYs3G', 'isActive', 1, 'siswa', '0', '2762.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(495, '11.11.11.11', NULL, 'SISWA_1WX6', '0304', '0003968372', NULL, '$2y$10$i.O7elTHdeDOn2mLAgX.Oerh47FL6AaX.Se4nia3PjjiUI8F6IW/u', 'SISWA', NULL, 'g3vkTVLnJFAW7C4MLR9LIFdtEJbGLl4iAxBIyPiR', 'isActive', 1, 'siswa', '0', '2973.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(496, '11.11.11.11', NULL, 'SISWA_dLIu', '2098', '0003969242', NULL, '$2y$10$n/6SpIAhhHd4b5An87Cld.3K4lLr4aSauu.NXFN./PV2GyeZZt33G', 'SISWA', NULL, 'HdWM01DaIkfHQ1L1nkPCZo1PHi267wMOUPJUHYYI', 'isActive', 1, 'siswa', '2000', '2979.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(497, '11.11.11.11', NULL, 'SISWA_RO5G', '0620', '0003966022', NULL, '$2y$10$NdNbXoB3oh8k4Y3DUGG17uDZQWgcE.QQ7j2smFWgaXn6NsS/K2Xd2', 'SISWA', NULL, 'PBbSi5ZqG6LKDrThotpoMwVuH3whYWcHmtQclbVb', 'isActive', 1, 'siswa', '3000', '2980.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(498, '11.11.11.11', NULL, 'SISWA_858w', '1101', '0003984230', NULL, '$2y$10$wYUdgeq97gzxmETOpZsKZePfs5O9bHxkXWAgLcFHz67u5O8xUaoXi', 'SISWA', NULL, 'MBE1GQJu3TfFNkM9NtNdCMhM4R0SG2ywbiufnwmT', 'isActive', 1, 'siswa', '0', '2778.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(499, '11.11.11.11', NULL, 'SISWA_RwfP', '4242', '0003968080', NULL, '$2y$10$2VtPAnyykVk.TgH3dmvjXuc3Fenx3IZJp.Wooq0YmpXTJrFkbiiP.', 'SISWA', NULL, 'txgN9JtdrBoBMCqx7af0XOOlLahWuhFwRkCe4OmB', 'isActive', 1, 'siswa', '1000', '2974.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(500, '11.11.11.11', NULL, 'SISWA_NrBA', '1234', '0003984026', NULL, '$2y$10$aQm7HPK1q2V4BT1iNnZ3XO2QZ2SNG27Vg.yc4U44LF7Ozl39843eO', 'SISWA', NULL, 'xCL5rDKH3iCBxzUrKCMwTY0mFkqpNif4wQUb7pCz', 'isActive', 1, 'siswa', '0', '2779.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(501, '11.11.11.11', NULL, 'SISWA_1sU0', '1330', '0003965727', NULL, '$2y$10$rJ58NLfWD55s/d8vJcpA1.oVDcL7OE91CvuMHbQVAzqJ58Grrhmz2', 'SISWA', NULL, 'rzTmBtn8oPbtd0AotvoO8yI9UhMEnyuzfQQskfrd', 'isActive', 1, 'siswa', '0', '2982.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(502, '11.11.11.11', NULL, 'SISWA_YiQl', '1298', '0003967788', NULL, '$2y$10$0Cf3tEmLhUpNvYGcKji9CuCU/7nH8kkCBKDg1IYQXdx7vPeH57iuy', 'SISWA', NULL, '9lYxjif13Y7SLdjlet56zSRb0RURNx3Lu2BVHeaf', 'isActive', 1, 'siswa', '7000', '2975.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(503, '11.11.11.11', NULL, 'SISWA_JE70', '1234', '0003965432', NULL, '$2y$10$Dr3thL0kmohXByN0XBkIPO1jjqk6RrV9jfdWF6Ba.hMDBtOcMQbU2', 'SISWA', NULL, 'yoe1cJMiXTiuV5OVrdBGNlEzidtvYZYa45IvF2CW', 'isActive', 1, 'siswa', '0', '2983.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(504, '11.11.11.11', NULL, 'SISWA_oFAU', '2211', '0003967495', NULL, '$2y$10$Io2K5/dpsa40ymyT0qlQSO9eQFpt.gTgR4GrBXQN7hJzx81g1aDWK', 'SISWA', NULL, 'VfVvtE7vyLxEy14BfzN2C23dkhe8WZKAL8JhsySk', 'isActive', 1, 'siswa', '0', '2977.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(505, '11.11.11.11', NULL, 'SISWA_J5w3', '1234', '0003925688', NULL, '$2y$10$G3iMPRg1h4ZzajElEtkThuL1nYPKIBAyPo4DfMrjCR8nBwgvbbfkq', 'SISWA', NULL, 'rNOMGaDaIaSTSPFZSx23hL0XrNSrH54aHbw44w9v', 'isActive', 1, 'siswa', '0', '2989.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(506, '11.11.11.11', NULL, 'SISWA_ilyw', '0801', '0003923045', NULL, '$2y$10$jq422SZXmzM12eTuvwJNju0g.8eGdxax22S.ygjdPhsIDNrmFrqvO', 'SISWA', NULL, '2lD2v1eN8hSZwA9wjfAYR75Enxp3TOvs7HrG2He5', 'isActive', 1, 'siswa', '0', '2988.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(507, '11.11.11.11', NULL, 'SISWA_7C3J', '5060', '0003925393', NULL, '$2y$10$rG1IkK4Bvse0O9RdLRum3.hebCs2VkpaHJ2GJJMB9AZYzZnn8zl0W', 'SISWA', NULL, 'PVrwgjo0MhS0Yhvgc4oKQBervGhQRgoTsqQJPmxk', 'isActive', 1, 'siswa', '0', '2990.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(508, '11.11.11.11', NULL, 'SISWA_KZQj', '9462', '0003923336', NULL, '$2y$10$mntPW8D6dX8mimU3enz23u3OlHO1ECndEqOhrdGe6yZN0CNAGLkVa', 'SISWA', NULL, 'BkBIzFlTB9zH6fIcS5YKpV8R9Z62xjq2ucSy1r6D', 'isActive', 1, 'siswa', '0', '2984.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(509, '11.11.11.11', NULL, 'SISWA_IdKN', 'abcd', '0003982773', NULL, '$2y$10$zjpsPrd3mBLLIBuZ0Md7uO9cMtQww7FKhCPLkqQTbn9oJuxAtMJg2', 'SISWA', NULL, 'm5QdqWazUDSXmycMprqyWXc7336wBDTf9sm12X40', 'isActive', 1, 'siswa', '5000', '2782.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(510, '11.11.11.11', NULL, 'SISWA_JCUB', '0705', '0003925098', NULL, '$2y$10$k2YXmCwO1dmDchcKGbtY2eNRl7NY2vUsXLaHj/h6c7E8V2zArCyuC', 'SISWA', NULL, 'Bx3LXqKL2fcmkR5tmQrs0AbbU0jdyKxkA95tr13s', 'isActive', 1, 'siswa', '2000', '2991.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(511, '11.11.11.11', NULL, 'SISWA_S1z0', '0603', '0003923628', NULL, '$2y$10$DhC3yRRp2veFOpLwLpjJ7emTaNmp5cYGDF2mmoUV1rKro9vIZco4a', 'SISWA', NULL, 'cIMmq40Q2Vf4G2zaYr4yKrrQ7nAS4sARZecyqgot', 'isActive', 1, 'siswa', '0', '2985.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(512, '11.11.11.11', NULL, 'SISWA_vlwa', '8888', '0003924803', NULL, '$2y$10$qjIyZa.RiazUqfIJpilkM.ZD47wf72mhTsrK/PUR0iXxSDAhWkPzq', 'SISWA', NULL, 'at1reqAcrTLiiRl6O5ctzfISzB3MW7TjuvoC98dB', 'isActive', 1, 'siswa', '3000', '2992.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(513, '11.11.11.11', NULL, 'SISWA_JeeB', '0606', '0003924509', NULL, '$2y$10$mCm.i0Eql9FriwXMjzwRs.i3uSC7f.jCEd8WGnp4YXKSprNkdmCri', 'SISWA', NULL, 'Lt8TcyKjdiSmXxxLpKIEgjHCsHOnQOJxCJo06hrI', 'isActive', 1, 'siswa', '0', '2993.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(514, '11.11.11.11', NULL, 'SISWA_jORv', '3152', '0003984436', NULL, '$2y$10$BDWgkB4heaTdDZbjufryYuGjiCwjooVawDI6fsxuS/WHxF1PzmpfW', 'SISWA', NULL, 'eUMcmpOL8eE0Am0r54z0iUy0uYeME0ZbjuqCjgHv', 'isActive', 1, 'siswa', '3000', '2776.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(515, '11.11.11.11', NULL, 'SISWA_3MmT', '0881', '0003923921', NULL, '$2y$10$Goqsc.oJNV7RMroV1GABt.eLK.KpbWKcaBev4bYVRzIs8yDe/OYrm', 'SISWA', NULL, 'VTutBgRUnud21sZpKskhFwF5QmK16TDTMXh8pLXe', 'isActive', 1, 'siswa', '4000', '2986.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(516, '11.11.11.11', NULL, 'SISWA_aZIq', '5454', '0003924215', NULL, '$2y$10$ib2b6R9aAgfnCZHfCJQq/..tfZjiv76OjhthttiofKzTy5pCoTcMW', 'SISWA', NULL, 'fd3z5gYi0msLctJqBEAgNveCpCSbALI0gERwIpVm', 'isActive', 1, 'siswa', '0', '2987.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(517, '11.11.11.11', NULL, 'SISWA_nTUs', '1234', '0003930917', NULL, '$2y$10$JRq9nSY1BjHnBr9is35Y5ueBpk.M5Fow1XULUA6rsShqmGVj94NY.', 'SISWA', NULL, '6QligFHTeQmAwOf4JHIR7bq4m5SSHe5eZ4KITWPr', 'isActive', 1, 'siswa', '0', '0449.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(518, '11.11.11.11', NULL, 'SISWA_NNLw', '0205', '0003982548', NULL, '$2y$10$0S39Fk3wAEoFNv2xFQZLQuMLxUXjvdLWh872NQ2N.QZBW7J5KyIQi', 'SISWA', NULL, 'gfx6H5okIb17nEvWXxkhNuMKs3xxnj7WKp7ARUP6', 'isActive', 1, 'siswa', '0', '2781.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(519, '11.11.11.11', NULL, 'SISWA_e6Ze', '1708', '0003932125', NULL, '$2y$10$HnKhIetix6fdz3S/jEZJJ.SO5P1bAVGw7HgkM2grTVsPUKgABdm02', 'SISWA', NULL, 'dQPOqxAfKbyEBaiXX0yb5C445IVJ1VOdNKZcdBEu', 'isActive', 1, 'siswa', '0', '0443.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(520, '11.11.11.11', NULL, 'SISWA_szu8', '1801', '0003931219', NULL, '$2y$10$uIDIn1j5MryDFyixxxBzq.yDSoVG4qcnnnWp.2bpKHBvXfISZacwa', 'SISWA', NULL, '015c4ayiI6eRF6o9GvIcQJqI3eHLieQnLnhIXitC', 'isActive', 1, 'siswa', '0', '0448.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(521, '11.11.11.11', NULL, 'SISWA_32kO', '1234', '0003932428', NULL, '$2y$10$kaZ4W/Rlro1AtAXdOgDjUOgexTwEk1q1GEZ4turMK5PfHGWOMW3gu', 'SISWA', NULL, 'HfOXbi40hbY4aBsE5QQlOcrE3GvsuzYfLf8vAc5m', 'isActive', 1, 'siswa', '0', '0442.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(522, '11.11.11.11', NULL, 'SISWA_F739', '0817', '0003984651', NULL, '$2y$10$G.u66eXWCh97biEhPLP5/.9r.Q8p42Xgi1B.u9AGBOEAZdPW3tyqK', 'SISWA', NULL, 'jIv1H8HfCsaOH3ltmwLqyxUcZ6bpWqiPIYqEeMvz', 'isActive', 1, 'siswa', '0', '2775.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(523, '11.11.11.11', NULL, 'SISWA_Wfu8', '1216', '0003931521', NULL, '$2y$10$RFIjC.CvBUPRYkX/xqiOjel1f3/CKCf/GZcMnpZ1LTWVdLhSck21C', 'SISWA', NULL, 'dZ2pU7Ie7ikYECFRFEllKSAWHanLsYb3lL1i0fxk', 'isActive', 1, 'siswa', '5000', '0447.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(524, '11.11.11.11', NULL, 'SISWA_0EBj', '0114', '0003932731', NULL, '$2y$10$ro3ra873/5IM87uS3zFW.Oevc6Tg36LIxlObnMgBybhFeoqXRzV7u', 'SISWA', NULL, 'a0mxD1BZ8PFuAgG1xOjeTQBpmrfwPmMt2nQkpFT3', 'isActive', 1, 'siswa', '0', '0441.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(525, '11.11.11.11', NULL, 'SISWA_P6jx', '0617', '0003931823', NULL, '$2y$10$Wfmf.Euy60MsOGmV/DEc5eB3C0gEQh7Cnh3PZg1fUCrMxMrfnVHOK', 'SISWA', NULL, 'Us985DrnYhg7Jpxma5joM9sGQ6jsIA2eq7WQk9iL', 'isActive', 1, 'siswa', '10000', '0445.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(526, '11.11.11.11', NULL, 'SISWA_TXRb', '1234', '0003933019', NULL, '$2y$10$F5I9Y/6rG.vm5noqevpL0OuNiywF1vH70YC5bIK9Jwvts.Q.TXcYC', 'SISWA', NULL, '1qaO8xnvUKcz4xbYymEM8ycxMuJxnu67cjtAvkOG', 'isActive', 1, 'siswa', '0', '0440.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(527, '11.11.11.11', NULL, 'SISWA_bp8z', '2938', '0003982318', NULL, '$2y$10$TDhdHBEr01fKW/RAcuYUN.jRq1peB7B5uknwBtBEZpd6BLj8oaTAS', 'SISWA', NULL, 'z3mjnHQtK8IBqDLlRvEngotKco8CJZfyMzhZq1Dx', 'isActive', 1, 'siswa', '0', '2780.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(528, '11.11.11.11', NULL, 'SISWA_7HtY', '1323', '0003933306', NULL, '$2y$10$1gns.LKz4vaEQWLkGxc0/OZYUS23Kmkxp5DyRFNjE8rRb/U3kPqZG', 'SISWA', NULL, 'DYSLy2zdJYIcJstrCfBs1keoWOn6igkQWr1W7vRa', 'isActive', 1, 'siswa', '2000', '0444.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(529, '11.11.11.11', NULL, 'SISWA_Z6NU', '1234', '0003923797', NULL, '$2y$10$aqs3R.VoNUH2Rn/yMBoXx.uq5ySOp1OUGSNpVLTbbqM45T68zzTH.', 'SISWA', NULL, 'UO9AggZnnXhd30kkeuCv4DL2iLoUigdtlxD0P8L6', 'isActive', 1, 'siswa', '0', '0446.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(530, '11.11.11.11', NULL, 'SISWA_0vDc', '1234', '0003984865', NULL, '$2y$10$xSpM0RJOMXcD8g451vk47.hLIX5gHcHZCn4umDUT8TNHuYOVGIn22', 'SISWA', NULL, 'jUu9D1eISdl2mvfmgKYYSjzi0df9fOrXvMnbOGHM', 'isActive', 1, 'siswa', '0', '2777.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(531, '11.11.11.11', NULL, 'SISWA_RX3C', '1234', '0003960993', NULL, '$2y$10$2jwTtGam6EhCeNLfa4Q.8.6sFTA.GjX5jkX738Wvlol44Y655PuZ6', 'SISWA', NULL, 'VCJ9W5yEifqfum7sWLu1QYVYk2Zcu2iXV6QNcS28', 'isActive', 1, 'siswa', '0', '0433.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(532, '11.11.11.11', NULL, 'SISWA_6zPU', '2202', '0003961276', NULL, '$2y$10$1RJC052tjugwRWM4SeEGou7Yf.5.3SlGutLu0jiFeTs4mJ35uw8KC', 'SISWA', NULL, 'Fyj7KLZa0H1hKFYbQP1Ww9vRerQCaIB2onW8QxBg', 'isActive', 1, 'siswa', '0', '0439.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(533, '11.11.11.11', NULL, 'SISWA_EXhM', '1234', '0003960710', NULL, '$2y$10$B3U8ypi/IXCxA63xJFeiTuqEJ95F8.kkv5I0phdVmOs7PHt3rxoFy', 'SISWA', NULL, 'bm4vjueDAtIy0gseTI8l6qcQimyyvLlCwLHwrihy', 'isActive', 1, 'siswa', '0', '0432.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(534, '11.11.11.11', NULL, 'SISWA_wKre', '2992', '0003982087', NULL, '$2y$10$MGH4FpCo761YlKqH2xRWHujKQ.HZLOQxndtRvrkgJj8cUtUEO7hLe', 'SISWA', NULL, 'MgsWrfsNIVW65zMtRqFJiMvkSwyNGiBa1UpcyZjZ', 'isActive', 1, 'siswa', '0', '2783.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(535, '11.11.11.11', NULL, 'SISWA_zruP', '3142', '0003961566', NULL, '$2y$10$eMjO4SyH7suddZonzxk07.kM7WU2WQCSJslOPD8bWmftm4ARCzIh6', 'SISWA', NULL, '7MdMLsezGu2dnqm1Ais47P2qcTm82n2hXsTZx94I', 'isActive', 1, 'siswa', '0', '0437.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(536, '11.11.11.11', NULL, 'SISWA_wukl', '0125', '0003960426', NULL, '$2y$10$8apRCv/xiUR/KS7WYkkT8.XMVXVP2B8uDlWaw8XylPCfTrX8TABnC', 'SISWA', NULL, 'RUzWMO6fGLbFsNvSWGXtrD18KFKQNK0KuVrdLCrm', 'isActive', 1, 'siswa', '0', '0429.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(537, '11.11.11.11', NULL, 'SISWA_4Fj0', '3175', '0003961866', NULL, '$2y$10$WA.Yvm/DTwZz.iAf7eBW6OCUGfBIedtgPyouSmuC.Veg28AIvFWlW', 'SISWA', NULL, 'BlSocw6fNleq5XLXcJZ1jkfWtkcTOThK03aunoS4', 'isActive', 1, 'siswa', '4000', '0436.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(538, '11.11.11.11', NULL, 'SISWA_VhG3', '1212', '0003943052', NULL, '$2y$10$gqXVpyMshWGZji3wirnujO0pddLr4ly0HsMYh7QFMfTpuTPpablkq', 'SISWA', NULL, 'XfrEvDnZyjnX1B6Tn5hdrJ1217X514RixyNwWNZW', 'isActive', 1, 'siswa', '2000', '2766.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(539, '11.11.11.11', NULL, 'SISWA_0fpg', '1346', '0003962166', NULL, '$2y$10$VdaFzW0cVTpXlNYmlLWZDeDqEDxpJMZc2xLdAp65amC/flaBzsIDm', 'SISWA', NULL, 'aKPvGzP6Zm7vKiwusZXbRrIldTdQeBAwm1Blog2P', 'isActive', 1, 'siswa', '0', '0435.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(540, '11.11.11.11', NULL, 'SISWA_mIIH', '1492', '0003943988', NULL, '$2y$10$oZgWHJu3UIWNGFg4V.AQAujCjx7BbUljQPy0tmKbAoVKEY6R6LfvW', 'SISWA', NULL, 'OAWgSlmqpkxjkQhh6Jatn1RmZh7aJ2f3Ltz7to65', 'isActive', 1, 'siswa', '0', '2774.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(541, '11.11.11.11', NULL, 'SISWA_qqWg', '1234', '0003960142', NULL, '$2y$10$7OxuEVc8.SyYtXXbYOfrg.QRYjPf7js7Qc3HZWm7OlNN1uzfU7btS', 'SISWA', NULL, 'RnZe68dEp7zH1ClRAKkZOMZQNcPcGe3byLVhcwXM', 'isActive', 1, 'siswa', '6000', '0428.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(542, '11.11.11.11', NULL, 'SISWA_ZAZ5', '0812', '0003959857', NULL, '$2y$10$.Ak1MIClf6qmr9ZNjikHA.paCGCyoizfiltTzEatlPtVYSw/TpW/.', 'SISWA', NULL, 'YRk9gFOSf9eZfEI31D0VSnjt62IUUiRKPB35ldDO', 'isActive', 1, 'siswa', '0', '0430.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(543, '11.11.11.11', NULL, 'SISWA_5JG2', '1234', '0003962465', NULL, '$2y$10$yn3Fnnn8nZDtFWEJyjGCteEhGwneK0bSfK2.wWJoFDp/BEXw7urF6', 'SISWA', NULL, 'Skzp7VBPehcdjn5C3NzFfhDbXoAHXFc87Xulb0FS', 'isActive', 1, 'siswa', '0', '0438.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(544, '11.11.11.11', NULL, 'SISWA_gpVR', '1906', '0003971301', NULL, '$2y$10$F12n/EHedO7B3LK.ls7N6eL8z8CuyrQNlgytjxCuzlh55SoH2Rz2C', 'SISWA', NULL, 'zflTg03IWp1nQXthJ3lDFhoc06wQtSRJl5NNln02', 'isActive', 1, 'siswa', '0', '2769.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(545, '11.11.11.11', NULL, 'SISWA_ZiQA', '1916', '0003980504', NULL, '$2y$10$ZFYsYpdatFV6Z4Zg7WEBTuOv1lyzVxFdEDBKBaOow0Jc5rIw3KkXq', 'SISWA', NULL, 'VCV5jya8gw6TtwMNuWaXyhEoqABbllfLsY0rAqnl', 'isActive', 1, 'siswa', '0', '0426.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(546, '11.11.11.11', NULL, 'SISWA_NDDG', '7274', '0003940157', NULL, '$2y$10$jtybI1JzJQVurFYclLpNo.W4vYDZjUe7ACDgots3nXiCUG006j2.y', 'SISWA', NULL, '3qKeBhq7c88IPVzttAF3By1GQ5sTXHYIw0uiWjla', 'isActive', 1, 'siswa', '9000', '0419.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(547, '11.11.11.11', NULL, 'SISWA_Tiv8', '1234', '0003944300', NULL, '$2y$10$VbSL2fOA4flpDT0mhrMm2ubBXO3Jgn.PvlpfdfnkeCp0N8QXyuZmm', 'SISWA', NULL, 'toXT8DCnL9GLt7xUFtUv9utExPZpO7noYVGCVhB6', 'isActive', 1, 'siswa', '0', '2773.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(548, '11.11.11.11', NULL, 'SISWA_lVYJ', '2107', '0003980751', NULL, '$2y$10$xUG90f4b8VfAG77VKt/7dupcYS6GWLgTIZWGixoEeCRkaMiKuulVu', 'SISWA', NULL, 'doiADsTm9T5qxSbMDjtjAFG5R5vupFDwFhfCRLr0', 'isActive', 1, 'siswa', '1000', '0425.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(549, '11.11.11.11', NULL, 'SISWA_sqvq', '2825', '0003939535', NULL, '$2y$10$ACZmsL/UsayvKzTIw4h2nurCm4GvBnCpJlgmSgPQ0L/1r8jSP2SIa', 'SISWA', NULL, 'ytuWVEgna2taCuEFNno0Oqq7ZQl35wErXzI4B6yN', 'isActive', 1, 'siswa', '185000', '0417.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(550, '11.11.11.11', NULL, 'SISWA_jPRO', '1985', '0003980995', NULL, '$2y$10$EtIRkG1ZzS.iaB0sjjpy1eS.FMV3Shk7LySj5EDLpD9O0rGOHlKUK', 'SISWA', NULL, 'MYXqVwbqpslUNP36zqZ2PGRo9qq94aGB5YaeMdkB', 'isActive', 1, 'siswa', '0', '0424.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(551, '11.11.11.11', NULL, 'SISWA_CEbz', '1234', '0003981235', NULL, '$2y$10$FOdc8sSIYBJU7PrRNMgVNOK6koVoiDJRbviVcfsklXtaPN6iDShhW', 'SISWA', NULL, 'QYOsw2dIECFqIooMSutV2nVIzXLt6V6G6xW2gO35', 'isActive', 1, 'siswa', '0', '0423.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(552, '11.11.11.11', NULL, 'SISWA_OnIv', '2767', '0003942740', NULL, '$2y$10$8SvBjOKUckx7Cc9rWZSH3.HwZ.O3KDC3A2uXQVVpReDPkf2UudnYm', 'SISWA', NULL, '2XcfSRA2GnmkvPQcaf4N1WrSwuQGGZdK0ejGd2wz', 'isActive', 1, 'siswa', '0', '2767.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(553, '11.11.11.11', NULL, 'SISWA_j4z9', '2124', '0003981943', NULL, '$2y$10$2eTUy4JOThCv7q7fEO6uUOxrcg8rhOoEDWieaHmk5fE8auGfn1HOC', 'SISWA', NULL, 'sGtBwLzGgAwq6lb2U7dj917Mt5K2jygyF1CcZwm7', 'isActive', 1, 'siswa', '0', '0421.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(554, '11.11.11.11', NULL, 'SISWA_AOI3', '0314', '0003939846', NULL, '$2y$10$8Du5nr//t7UCt27dTkUyKe0FBjFT/L3uCie4kIQ/VMqU0vU7pOYHy', 'SISWA', NULL, 'wytTHqGEAOuYWf0O53oYCaLXuziHOxYE9tk1oB1i', 'isActive', 1, 'siswa', '0', '0418.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(555, '11.11.11.11', NULL, 'SISWA_eHeU', '2528', '0003981709', NULL, '$2y$10$BS5AbTFovughP78kYki7w.4YkNA5qyQcpsnZoQmM9qXy1PGu0eHLi', 'SISWA', NULL, 'IFJhKQyZp6CzxithJYg7hDHAqHGWHRhIXJRe5a81', 'isActive', 1, 'siswa', '0', '0422.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(556, '11.11.11.11', NULL, 'SISWA_hlfA', '1234', '0003981473', NULL, '$2y$10$X9pES6kTf8SLTiyiE8hxd.zsUh8BSOu0W8p6S8a82DJP4GaqF/2AS', 'SISWA', NULL, 'KiEVPcEjy7YSXn9dzipah4HSm45a70ym2k6Q2b13', 'isActive', 1, 'siswa', '0', '0427.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(557, '11.11.11.11', NULL, 'SISWA_fYcV', '1234', '0392652100', NULL, '$2y$10$xZlLoTAGSQimjKmV2/UiluajT6JCdfGUsLyATUU0v.CXalYa4EqFu', 'SISWA', NULL, '1hWjIV0QjSM9t1nYF1nnTzmJhjuthZR7Y2rLzykj', 'isActive', 1, 'siswa', '0', '0493.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(558, '11.11.11.11', NULL, 'SISWA_I2p0', '2120', '0009713726', NULL, '$2y$10$qXzBp3Gp1MSTPEeUtYUciOqw59JaT1Nkpo1ZLoA2aT.PSIeWjlw7e', 'SISWA', NULL, 'dc82Ry6wUCrac93ZJWS1SacVvHYJpNaU0uzok4lj', 'isActive', 1, 'siswa', '5000', '0491.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(559, '11.11.11.11', NULL, 'SISWA_OTIx', '1234', '0003924162', NULL, '$2y$10$PGSB/gfVJ98jGGO056KMxOyhEuEPIFbkiXPIazdc0qkj7iRdeGxLq', 'SISWA', NULL, 'fHCx0XuImV8WmEMeWTKJHrwU4WiwTT0HVXiLANGm', 'isActive', 1, 'siswa', '0', '0484.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(560, '11.11.11.11', NULL, 'SISWA_xAhH', '1234', '0003923868', NULL, '$2y$10$bH9.un5b3L8j0E53oZ5KPuML/5DZ1qgZ1HWqyVYBZ./0c7fE5ojr.', 'SISWA', NULL, 'S0UJEi6cY6MycjptPi3alpZha525fTHFYBUz6eDv', 'isActive', 1, 'siswa', '0', '0485.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(561, '11.11.11.11', NULL, 'SISWA_xMjL', '3012', '0009713727', NULL, '$2y$10$VMQfZjd.4T56VdlbajCtcOVCGsZaMs8Wfo8IF/S6JRvns33qW79ti', 'SISWA', NULL, 'WzDXIubztGWai4k2vC1cRwuIqguBSc8hIOE4ntO3', 'isActive', 1, 'siswa', '2000', '0489.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(562, '11.11.11.11', NULL, 'SISWA_oRy1', '1234', '0003924456', NULL, '$2y$10$pnkQ8bpZLyjkhqB5npAkkOBzAW3YJAxUQD286DFhc3l1DjxH98aBe', 'SISWA', NULL, 'deo6cWlY9DkVI3cSNfidjbEHuuZNyyjx7fXkhcPb', 'isActive', 1, 'siswa', '0', '0483.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(563, '11.11.11.11', NULL, 'SISWA_u5Df', '1234', '0003972783', NULL, '$2y$10$dIR4Md6UvxvEd4MVkdTNAOJvdWSFUNCYveXtvgQcUt4b9nyRBNQ16', 'SISWA', NULL, '0CknHIu0LY4sZZwZmGBfCjm4ST0l13d1TROi5oOQ', 'isActive', 1, 'siswa', '0', '0490.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(564, '11.11.11.11', NULL, 'SISWA_6yKZ', '1234', '0003925340', NULL, '$2y$10$qC.K4kekwXTE8JCpL3tYV.qOFGcrco260pZBiYfkwy6gExGmWc3EC', 'SISWA', NULL, 'SMTnHKqX6rLQ6Z2JsJh4HEnGR8AhwFF0qkADQxam', 'isActive', 1, 'siswa', '0', '0492.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(565, '11.11.11.11', NULL, 'SISWA_Fgx4', '1234', '0003925045', NULL, '$2y$10$5UeZ5eZM6PxUC/uot4CPnuxVMrGJAAFiTvyVqOpoZGFcbUIwdI6Sa', 'SISWA', NULL, 'AF6uaO8Xf32uIeaMTHFHtp4PkIsI00eA1KiV3n6Q', 'isActive', 1, 'siswa', '0', '0487.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(566, '11.11.11.11', NULL, 'SISWA_fF85', '1215', '0003943364', NULL, '$2y$10$IRbjF9MG98EILziUwEx1XO4cXpfCvTqc.q4/u36ZtQdK47Uz3C25e', 'SISWA', NULL, 'SL6VpG79Hd51ESbYhu48i1iy7UywWaAeAu1r8Mha', 'isActive', 1, 'siswa', '0', '2768.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(567, '11.11.11.11', NULL, 'SISWA_c8m8', '2021', '0003924750', NULL, '$2y$10$q1um62Qta4GIE11ncvzZPuc6K0JtmpdYihxABnDemXuduvUfTmZ0C', 'SISWA', NULL, 'MrTYbmvKLGD1gmUVgiGwmkJbtCjOkFTWT2pOmZTh', 'isActive', 1, 'siswa', '5000', '0488.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(568, '11.11.11.11', NULL, 'SISWA_m7Ul', '1401', '0003929541', NULL, '$2y$10$KvtDVPJnRkX3dusfjZZZCe/EKPIG.cVTb0Lh1fFQk0m3kDHDxu33a', 'SISWA', NULL, 'f0kQGWjCtShu4ZMj6TZoWuKrZyfYAM954jRZXi2B', 'isActive', 1, 'siswa', '23000', '2721.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(569, '11.11.11.11', NULL, 'SISWA_3YmE', '1234', '0003961042', NULL, '$2y$10$OKaLXbToJ1v/pRUd0ltR4.cY9rPOL26ddZ7RXZcxf.Txo6DBLKVoi', 'SISWA', NULL, 'ePJ77p7eDAn3EqdA7knMLd9aOusADh5461UpwrrT', 'isActive', 1, 'siswa', '28000', '2734.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(570, '11.11.11.11', NULL, 'SISWA_KzWY', '2704', '0003963113', NULL, '$2y$10$wX/JdoQoQ8nZ5x3.v1X2yuKw.EjVMHjisqK.3mnBhoroR/AsnhmPS', 'SISWA', NULL, 'BPkraNHkOyD0a1rFsQ4zgI985EwWEebcx6LHmEXC', 'isActive', 1, 'siswa', '7000', '2728.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(571, '11.11.11.11', NULL, 'SISWA_iyNB', '0512', '0003943676', NULL, '$2y$10$oXFoH5Hm6yMrSsuaPH0Sau3dgJJ3FiuSM3EPujKkeAICgu2iUNgaC', 'SISWA', NULL, '18Lzyd8zGVPLKRj1nqiycmWjmLDqdw0UgTr6Atlo', 'isActive', 1, 'siswa', '10000', '2770.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(572, '11.11.11.11', NULL, 'SISWA_L0Op', '1234', '0003963411', NULL, '$2y$10$k9z9licaCH6mUxkvtn7PDe4grlp8U7xY5QuU2HCiRDMjF5w3iijPS', 'SISWA', NULL, 'tk6Qybjk9fmFZ1TCIvFAj4OkJf2CMymXeusS0ccP', 'isActive', 1, 'siswa', '0', '2727.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(573, '11.11.11.11', NULL, 'SISWA_h78t', '0000', '0003929242', NULL, '$2y$10$kYH60aAkLPz4YrMsSwA9vuf/J0FnNyWEQh68H.aN4wVymp5ba9ngO', 'SISWA', NULL, 'N19tZMBqmYvMkiDQ1YNOmYeqqf70eNp62D4HSNez', 'isActive', 1, 'siswa', '9000', '2772.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(574, '11.11.11.11', NULL, 'SISWA_ftpE', '0516', '0003961325', NULL, '$2y$10$N7hfKyY9t7XCD6W4nd.zau3CBkk1CvvY6qp2ctBwdrKcn4rqebd3K', 'SISWA', NULL, '0Cmsmo000FxVYnMoZhpOrrTI9jomQhASRx8yIgBg', 'isActive', 1, 'siswa', '0', '2732.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(575, '11.11.11.11', NULL, 'SISWA_oLHr', '2288', '0003961617', NULL, '$2y$10$7BwYXLRSG.xJ2K4NEREtLO0oQ7erj/PIIr7R97.Y7hCxEMMWikteG', 'SISWA', NULL, 'uar83ZGBflaBDOibufKebOd03nGaag60zRjjPcdK', 'isActive', 1, 'siswa', '0', '2731.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(576, '11.11.11.11', NULL, 'SISWA_zPbO', '4576', '0003932324', NULL, '$2y$10$8rzUHlcNDoMGX5IwwrMMaeAbdpe48/IxH1fn1JIx0M.USwT5Eh4bm', 'SISWA', NULL, 'CnFCGgUyugL9bD0mBJoWj6BqVb7GtX6ytoavMact', 'isActive', 1, 'siswa', '5000', '2799.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(577, '11.11.11.11', NULL, 'SISWA_ESiw', '1234', '0003930813', NULL, '$2y$10$LDvzVTdbHcimHvq1hWnudOlxWFjA9nw2/AxjFwVjJgkdZZKv/sX5C', 'SISWA', NULL, 'kOHFHE6Eahq9qyn53nf2uriuaJmJesGOY33TUao7', 'isActive', 1, 'siswa', '0', '2806.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(578, '11.11.11.11', NULL, 'SISWA_z05x', '2012', '0003963708', NULL, '$2y$10$ezNGLl6qzhM0tXz2DoJXQu9s65gppTeX7Q6FMYLzzuNuo7m0CjNOi', 'SISWA', NULL, 'rrBaca109JSkRiXTTrLoE5hEadKxNjYIIgsDHqko', 'isActive', 1, 'siswa', '0', '2726.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(579, '11.11.11.11', NULL, 'SISWA_Tb1S', '4224', '0003964893', NULL, '$2y$10$Mk19infclvEU6qZjO5GdtOVQwIPjzdHziBdZSScnNyTnXVLHJAhCG', 'SISWA', NULL, 'wLelYYsjOJDbBc28b7xTIoYsTjDzr4rP43eBR1XI', 'isActive', 1, 'siswa', '2000', '2730.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(580, '11.11.11.11', NULL, 'SISWA_ZROo', '0571', '0003964005', NULL, '$2y$10$XdA.Il9lPAMCbn5LhobrzuF9WrFMaO9sSSQjvx7yMXmnMk45AllsW', 'SISWA', NULL, 'GND8a7yIEBXSqLFfLX4fs0sTXMSa2aERekNgUB4l', 'isActive', 1, 'siswa', '152000', '2723.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(581, '11.11.11.11', NULL, 'SISWA_ghDj', '1234', '0003932021', NULL, '$2y$10$BqQIXgo.fxWVAOEfg31oHelyzyO1vL5gF74Zk2rHbMVpymZVjEWFS', 'SISWA', NULL, '7IMOkbUvUxf359IPcOgfIqFbRpoRfaVmJm0jo9rn', 'isActive', 1, 'siswa', '0', '2798.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(582, '11.11.11.11', NULL, 'SISWA_IwPQ', '2810', '0003964597', NULL, '$2y$10$q.xfKJnNDtUi9RXuzSL84edtzCD5P5pr8I5koDVnwxnlsPx3qoLRm', 'SISWA', NULL, 'u1EWYsKMG0DExUT1veck1BAJ8zd5rmtkVWMy1Zn8', 'isActive', 1, 'siswa', '5000', '2729.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(583, '11.11.11.11', NULL, 'SISWA_mgpg', '0103', '0003964301', NULL, '$2y$10$sk4dSj9zPQZILfGfp1N7a.ITE1ZKc1Bv/KIqZ7QPogRBxvvZbDDUK', 'SISWA', NULL, 'XxGENGoA2qnO96trRGETO1isoFvKvXkGoiEIn8o7', 'isActive', 1, 'siswa', '0', '2722.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(584, '11.11.11.11', NULL, 'SISWA_aoQe', '1234', '0003930512', NULL, '$2y$10$8Hl2VHtz.zTchusuYM5u9.QKgKI75yMZ4ykZw0.Ar.WaeeK35EW4W', 'SISWA', NULL, '77gs19oUvmTkDy03Uaw9HMuVVqwEsoKVMmXz0TRq', 'isActive', 1, 'siswa', '0', '2805.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(585, '11.11.11.11', NULL, 'SISWA_LorX', '1067', '0003930211', NULL, '$2y$10$AY3dCKq/nzn9IrdEcpaAiOJeGpE.p1Gflt3wBBqZcxFp8YpptbqvS', 'SISWA', NULL, '1yyhi4OEbhQLcEVgvSSBM7YpuvYz19QeMztsWagE', 'isActive', 1, 'siswa', '0', '2807.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(586, '11.11.11.11', NULL, 'SISWA_oRn1', '2356', '0004022148', NULL, '$2y$10$2bkuOz8VdE2asu4SQgS00uoKjacjWQAhl65wfK4g6xXpmN4fvhAj6', 'SISWA', NULL, 'H8QEQ1UWWwOZDaF66j5gnmBY3NnplckH61he5Xiy', 'isActive', 1, 'siswa', '1000', '2845.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(587, '11.11.11.11', NULL, 'SISWA_rToG', '1234', '0004021849', NULL, '$2y$10$m2gH72LHoUfxIRzdIck1uuK.tyDCvaXI79jbQ6y2cjpdi6.iLiVCy', 'SISWA', NULL, '8csksLDICRVM9Rtkj3KXIXcYkVTrImddwnokiiJS', 'isActive', 1, 'siswa', '0', '2835.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(588, '11.11.11.11', NULL, 'SISWA_1oKN', '1234', '0003931417', NULL, '$2y$10$p3Kh1dt9R8Z4eqWET4UtCuqw/dyPni.Y9zJX3HBSscG2LUZTIG2mW', 'SISWA', NULL, 'Nz1IfpuuRzNEXNLUBSHGO9Y3DmIJvk1Xrl56H6nh', 'isActive', 1, 'siswa', '0', '2803.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(589, '11.11.11.11', NULL, 'SISWA_pK3H', '0914', '0004021551', NULL, '$2y$10$9BDX1M.D6BF2Ul8p6jZboOxTwOfkJFBlm1PHjMT3vQsHXFCwiJ3Jm', 'SISWA', NULL, 'JdfvxTXC4LUui6h7lqEkxu0qOZUyf6kTnMoKsYpi', 'isActive', 1, 'siswa', '3000', '2836.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(590, '11.11.11.11', NULL, 'SISWA_iRid', '1234', '0003911880', NULL, '$2y$10$HKjVNCKi8nMhwnzEQEk9LeDDeMRGKy8b.mq.2vCUZYj1mxOW3ylQa', 'SISWA', NULL, 'XMQob5EMlGZL7AMReViDGVwEByfnar6mNuCyDuv8', 'isActive', 1, 'siswa', '0', '0363.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(591, '11.11.11.11', NULL, 'SISWA_T4v4', '1220', '0004021253', NULL, '$2y$10$SxzT6AMjCm5Xzr1yN8FL9.ouT4ciobQnVaxDUv0CohbXSjrB1KVEq', 'SISWA', NULL, 'K4pI0Kcr2VpetIGT4o6GPQuFcv3iDwoleLxJIBjX', 'isActive', 1, 'siswa', '5000', '2837.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(592, '11.11.11.11', NULL, 'SISWA_zTzg', '1503', '0003931719', NULL, '$2y$10$LpICWWQf3KlSClSrySYd9eNmwmkffPIv.ARiVcwoGWUNOsnzFNSD.', 'SISWA', NULL, 'NV373aV4ND0eshWuiCLPVJBpqFVZkYPlsyjcoldB', 'isActive', 1, 'siswa', '10000', '2800.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(593, '11.11.11.11', NULL, 'SISWA_P2f0', '1505', '0004022447', NULL, '$2y$10$/7We0qFqcZdnf00e/zb5/e.0NFBD5i1AHAmwZqMznF9LhgRjI41BK', 'SISWA', NULL, '9eQGZ98KZnganFjzO8YYEb8FMGEvxmcvNRpYYppV', 'isActive', 1, 'siswa', '2000', '2842.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(594, '11.11.11.11', NULL, 'SISWA_yBei', '1127', '0004022747', NULL, '$2y$10$PIX7lZ2raFNXGjKuZc.fhud16mPSEBiunGV2roOPytWQsAAhU9Zva', 'SISWA', NULL, 'jdz664R9nyBHpwM6RS7kYdDr4f0pf47Yr8u3swrb', 'isActive', 1, 'siswa', '2000', '2843.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(595, '11.11.11.11', NULL, 'SISWA_EVyf', '1234', '0003933084', NULL, '$2y$10$e/FdRwr7pLaWEF9XZiq/JO9Oi3ywBxMjApXQcraUVHp3vMRBDIYCu', 'SISWA', NULL, 'PRsu41HnJZ06hRM1QtbyczH5BeCAEtzETnP6enJV', 'isActive', 1, 'siswa', '0', '0358.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(596, '11.11.11.11', NULL, 'SISWA_9bf1', '1927', '0003929911', NULL, '$2y$10$3IBqKFA4XNnjosqmfuzD5uqX6bBmYkvI3PYkuMgJlmSp8.Vb7Qi.K', 'SISWA', NULL, '31S1ANB1t1YbSzc5wGsmLtJVmCRJk50KXaDxuV22', 'isActive', 1, 'siswa', '0', '2808.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(597, '11.11.11.11', NULL, 'SISWA_BsZy', '1809', '0004024555', NULL, '$2y$10$90M7dVz.VGEW5x5ZvYACMud/r5zNrN2cnPfpXKkNeVh158hQgM96S', 'SISWA', NULL, 'ZJLtwIiQfwS2udlzLdM13WKphcFPhhqndKtGQzlz', 'isActive', 1, 'siswa', '2000', '2839.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(598, '11.11.11.11', NULL, 'SISWA_qDTd', '1234', '0003912130', NULL, '$2y$10$Ea5Cocn6D7fGe2sZr0gzheeaFMWnIv4ENeMu2D3KP.8zuz7LoAV.q', 'SISWA', NULL, '2TlhGdsd4AVSvglDPMo4rPT9cEFxoRGmoK9Lgrgd', 'isActive', 1, 'siswa', '0', '0362.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(599, '11.11.11.11', NULL, 'SISWA_al8F', '1708', '0003931115', NULL, '$2y$10$7mRmHwH85A/XwbrVj3uXEu/FJI09dX4//.xmScSoGCHtRITJQIOEG', 'SISWA', NULL, 'Ei5G7BqSSRLyyIFYrJ2E7M3m7vkduFSywK8rXoVB', 'isActive', 1, 'siswa', '2000', '2804.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(600, '11.11.11.11', NULL, 'SISWA_n71Y', '2828', '0004023047', NULL, '$2y$10$TpLr22p1PY1D5NKqWnq.y.dSJoxVSV1uDQ6AOjauebEk43.GXFa0i', 'SISWA', NULL, 'bIQ80kyzeVzAf3r68w3EGTZrROxyVuSZLxxtFpbs', 'isActive', 1, 'siswa', '0', '2844.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(601, '11.11.11.11', NULL, 'SISWA_fSfv', '1912', '0004024857', NULL, '$2y$10$j1VFWrcj4AE16DrHt7g9cOUYRmDx6/oEOvlcuSxdPbHBP4m6UVCb6', 'SISWA', NULL, 'GOR4gMBas49T7mdmdDZKZMhIc9y7WsWjqi4PM8as', 'isActive', 1, 'siswa', '0', '2841.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21');
INSERT INTO `users` (`id`, `kode_instansi`, `email`, `username`, `pin`, `qr_code`, `email_verified_at`, `password`, `role`, `route`, `remember_token`, `status_user`, `user_join`, `name_table_join`, `saldo`, `foto`, `created_at`, `updated_at`) VALUES
(602, '11.11.11.11', NULL, 'SISWA_kcIW', '1234', '0003980695', NULL, '$2y$10$BhEX30zbMhmJdWQy4WUzG.kMhZFMkGxToCqMcCM/g1DBJPhQolqNi', 'SISWA', NULL, '4VH6CnliHObo3YE4HwWL2MgM9X4CRxmiRWVNc19c', 'isActive', 1, 'siswa', '0', '0500.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(603, '11.11.11.11', NULL, 'SISWA_a808', '0818', '0003929611', NULL, '$2y$10$g/Qp9uv7zuc.eskFkGjZbehLmEYiib/VDIqNlotib2kcetgqwUjk2', 'SISWA', NULL, 'RdbNHOD5jm62pd09DVMEGgcmims3AkcXY6XGkbyS', 'isActive', 1, 'siswa', '93000', '2809.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(604, '11.11.11.11', NULL, 'SISWA_vk2t', '1024', '0004023348', NULL, '$2y$10$61VT/qFMvlPJVbtXiG/f9.Q6YL7pPBZggz2VQx6VB87Y8aL.Nght6', 'SISWA', NULL, 'wL8bT4ctZws9APanq6PkPwCEOebVErCy3HdFIbdc', 'isActive', 1, 'siswa', '0', '2846.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(605, '11.11.11.11', NULL, 'SISWA_BJMI', '1234', '0003905708', NULL, '$2y$10$bg0lDeIHP4BGb3k3PBKx8ukpZtio67uYX94anluifyEX3l0ZQ93lm', 'SISWA', NULL, 'yysv5WcMOGXnetkKkfVimrBe2q1hZ5nmRir3GdQp', 'isActive', 1, 'siswa', '0', '0495.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(606, '11.11.11.11', NULL, 'SISWA_7gLX', '1234', '0003969870', NULL, '$2y$10$zXiCn.1SRLYk./HcaKLYMuI.cJTsmQviPHn46Kx.kdm6F.XtVZxFe', 'SISWA', NULL, 'vZ2HmprvckJlPcL1NwWf9SeXU8zi4qLtAt8uySu8', 'isActive', 1, 'siswa', '0', '0475.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(607, '11.11.11.11', NULL, 'SISWA_Y36G', '2109', '0003975047', NULL, '$2y$10$0dG.w8yaAVn96jka7Jic1OVZP67d4zZiF347kau0P8fQ9Hc1YpT0q', 'SISWA', NULL, 'pysHhPcIrTqtJfdixs7Jl89Ba5HBH1tJiVMLVAFV', 'isActive', 1, 'siswa', '3000', '2947.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(608, '11.11.11.11', NULL, 'SISWA_ihuC', '2310', '0003907181', NULL, '$2y$10$O7aOe6V2qmpe9QL3peXm8e0dhCEtyoVevH1Qp620DksHbX1Vfawkm', 'SISWA', NULL, '58JFy5sLGC7VdXdZBFINvJ42f25IqdR0XAiEKVRX', 'isActive', 1, 'siswa', '1000', '2963.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(609, '11.11.11.11', NULL, 'SISWA_ljEU', '1234', '0003980448', NULL, '$2y$10$ghlzGLtL3Ob20FyNAiq3U.MBLcFJflArMkzXdAwk.L8PK6ZrEpF7O', 'SISWA', NULL, 'fowpPiFqTn3aWpOrUuEiVo1aYhjngWov4Dpu5jBL', 'isActive', 1, 'siswa', '0', '0502.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(610, '11.11.11.11', NULL, 'SISWA_8uA9', '5657', '0003975318', NULL, '$2y$10$QK2szY0Tvd2IrgZpytOJ3u.7fCKGnG/HgCQtE1IiDVLdYK5GoXlay', 'SISWA', NULL, '6ZpIydTsR84NAJqONc7g3hb9WUXvJAJo1Z2TdCd1', 'isActive', 1, 'siswa', '8000', '2950.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(611, '11.11.11.11', NULL, 'SISWA_84on', '1234', '0003979952', NULL, '$2y$10$ttGceSZAIo/yKOnD.pJLIeZz3n0nXdQSKjJu0WWgpe0B9q.73gceS', 'SISWA', NULL, 'YiSRypwbqGiCW0Gp5MgknvIj7gXfKJaxFfwfblsF', 'isActive', 1, 'siswa', '0', '0496.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(612, '11.11.11.11', NULL, 'SISWA_HvZw', '2701', '0003946380', NULL, '$2y$10$AHcSOV8B9lXzMoGQDxleAutrgQEOvX18dphWaqoe7eE2tPUwsATD.', 'SISWA', NULL, 'dEP9RMc3GoqyIFynrEagt0eNLTn6C7mafTuKngWq', 'isActive', 1, 'siswa', '0', '2972.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(613, '11.11.11.11', NULL, 'SISWA_7Nmb', '3668', '0003974775', NULL, '$2y$10$qh5.CjycXTZF7xClhm8R9OhF.PncWGvUjOYvIeJCVcyaKvS0XeAy6', 'SISWA', NULL, 'S61mrYK9kByKnP2qVO7AFkps65JkzoSf4jtWUDAd', 'isActive', 1, 'siswa', '3000', '2944.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(614, '11.11.11.11', NULL, 'SISWA_6xUe', '1389', '0003907398', NULL, '$2y$10$amVLFnk/jWWiSd3Oa5kdWeV252uIRu.mJppSvDyqRVUmuZzW1S6ky', 'SISWA', NULL, 'Uqy83kZxExFkqCP2wWvtUdF2y0sEdMEcMUybjsh0', 'isActive', 1, 'siswa', '0', '2964.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(615, '11.11.11.11', NULL, 'SISWA_1AFD', '2312', '0003975588', NULL, '$2y$10$1s09EqcBFXaqseorKcQCmuAIwQ0qkOM/ehqrgjAWWZJj4bJbyJR.m', 'SISWA', NULL, 'SoVpz2H288mGUn3z3x2ghlz6YveLOuvx6oyhEwGb', 'isActive', 1, 'siswa', '18000', '2948.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(616, '11.11.11.11', NULL, 'SISWA_OVzn', '4456', '0003963766', NULL, '$2y$10$uU/mBL3uK9wasgVF9oNw6e/bNZlhcIXddCKOSL3KF7OxVkDMwGBnq', 'SISWA', NULL, '1fr68jfGiA4t1y55MHWCxYVMCvkreCw1EpzxWnMt', 'isActive', 1, 'siswa', '1000', '2945.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(617, '11.11.11.11', NULL, 'SISWA_cQW9', '0066', '0003908954', NULL, '$2y$10$kAazDoNGAdzAfUcO8wWQQei0ambe4cdwnnqVlWc7AXVfYt68uB5mu', 'SISWA', NULL, 'MVH5TnRBNXffUatR01jnSST60Zrokoq1ce7tavQf', 'isActive', 1, 'siswa', '2000', '2970.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(618, '11.11.11.11', NULL, 'SISWA_tPGy', '1009', '0003907616', NULL, '$2y$10$oYcR6dag/.M.qg1opzYWCeL.vacnYLglw0F6yj3He6Rdcjk2XVBWe', 'SISWA', NULL, 'mjg3ieLCgSVVmw5dKh2bsHKK2CLpLqKEtPwCvY1N', 'isActive', 1, 'siswa', '3000', '2965.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(619, '11.11.11.11', NULL, 'SISWA_EGb8', '8708', '0003975857', NULL, '$2y$10$las58VbL1r3rqCT/JuCQkOMrNP696cXWJNMwU4fro13NbdfnAv0SO', 'SISWA', NULL, 'VZpyyPiGJmdHLXk4vnjmG67RsA7XBncMFsrnHyat', 'isActive', 1, 'siswa', '2000', '2949.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(620, '11.11.11.11', NULL, 'SISWA_qi23', '8075', '0003908727', NULL, '$2y$10$vHk9FBA7e6tcpE4InqbASe7ur7il.nOl/XBBLqBJd/X82XdCvXMM2', 'SISWA', NULL, '7AcsF05Ic2MkaPiyNLgwrk2yraVc8UDkon5i2w41', 'isActive', 1, 'siswa', '0', '2968.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(621, '11.11.11.11', NULL, 'SISWA_KuLR', '1324', '0003974502', NULL, '$2y$10$EtbGRjT4DBHlALZpqDpiDORHAfxN2Jc4r6DiuyGKR4Bqm/J1826uy', 'SISWA', NULL, 'pZe3FYaOQlgWQJVKc1qLjmJ5NqN8DaxblLF9GXxd', 'isActive', 1, 'siswa', '40000', '2943.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(622, '11.11.11.11', NULL, 'SISWA_Casi', '4623', '0003976125', NULL, '$2y$10$4eJfTNSEPzGcwv8cWzcIVO637iVRgwJFV1JzUNjsp8Za9QivQja56', 'SISWA', NULL, '6nk3GuDzE3cx5CElquy7EemJegvKaQf6dMktEa9m', 'isActive', 1, 'siswa', '0', '2951.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(623, '11.11.11.11', NULL, 'SISWA_OCX8', '9409', '0003907835', NULL, '$2y$10$j10EQ0lihoIMcDEiJETs9elVBvfDXq/uRJPPU1BVCBFu05foBTe9q', 'SISWA', NULL, 'r3zJMR4pUtdMwV9r2K0BKR0agFTPlilzh3TQwAkO', 'isActive', 1, 'siswa', '51000', '2966.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(624, '11.11.11.11', NULL, 'SISWA_gYyv', '1234', '0003949491', NULL, '$2y$10$NjDUmYVxe5agHnLzxCW.0elRVUZ.5wl5ebufPePT9EJxxsiXEsfOW', 'SISWA', NULL, 'QlSLQNr30LTbrg8aqt97mT9qUdpspnLA1zhiptb3', 'isActive', 1, 'siswa', '0', '0468.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(625, '11.11.11.11', NULL, 'SISWA_azE9', '1103', '0003964063', NULL, '$2y$10$RbtTvmAwv14G2vP9CD00oO9TOdrMYqJKP7hrR4kQ1d1Hez.5GaViS', 'SISWA', NULL, 'sj6CFhSeEVdDRL6mnLh1FVnmqjJT0ByyfVcPloFM', 'isActive', 1, 'siswa', '2000', '2946.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(626, '11.11.11.11', NULL, 'SISWA_634Y', '2954', '0003908502', NULL, '$2y$10$2tjmsa2Fwbt56b7UDorB9.j1x3yXPqgB3bvTL7fym9GxULn2V5qTO', 'SISWA', NULL, 'trw1pV2EndwoCbM8QG03MoC7uGiCPfkeB46C4wmd', 'isActive', 1, 'siswa', '0', '2969.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(627, '11.11.11.11', NULL, 'SISWA_zvYQ', '1234', '0003986405', NULL, '$2y$10$u0u00FWfr5QYBAc.X.vA7Olj39XZc9YhAxazYjHySc3STVB7zwWdy', 'SISWA', NULL, 'xvVojSBTJqpepXrFBuuwdnoJ2HEzNRESgzmfOKIP', 'isActive', 1, 'siswa', '0', '0471.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(628, '11.11.11.11', NULL, 'SISWA_8uJJ', '9999', '0003976392', NULL, '$2y$10$FjJ9i0445vAIwW/UVzYdTuUWjD9zhHModz/Xe00EkQlhhy0D0NdQa', 'SISWA', NULL, 'et1O2ikYe4BZCXoDtk8JRN9UMFu3pRdEezPidphv', 'isActive', 1, 'siswa', '0', '2952.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(629, '11.11.11.11', NULL, 'SISWA_ix6L', '1234', '0003908056', NULL, '$2y$10$gi/YmGJ.fekTXWpveSLONelLbMI11R3YcmL9qtzCZAwihYLcLQKmS', 'SISWA', NULL, 'EQwqVzC3zjHq72iPj0SW3wRBk5WZdNuF2U6wSR4R', 'isActive', 1, 'siswa', '0', '2967.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(630, '11.11.11.11', NULL, 'SISWA_QNf1', '3136', '0003949803', NULL, '$2y$10$Cbq42fYaBMVkXUwbRJZpcOVdAhERdWC7hGbzqr1J4tS6bsF5xeJWK', 'SISWA', NULL, 'cXpzqn7oF6W3ofklhHMsjyWYtJff1m2GmrJN9Dk0', 'isActive', 1, 'siswa', '0', '0466.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(631, '11.11.11.11', NULL, 'SISWA_BD4y', '1234', '0004067298', NULL, '$2y$10$h5HEiTgx.XrLmZpvAa6QjeZ8bN3h1uvZ9Uo9GcRPahf8MvgQEYYg.', 'SISWA', NULL, 'HrMWY9reteIOUA4p4cciiV7lrgPjfxEotF3VkEHU', 'isActive', 1, 'siswa', '0', '2933.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(632, '11.11.11.11', NULL, 'SISWA_OXFC', '0101', '0004067571', NULL, '$2y$10$HJe3.dcdCONj1IYAi.fS7ujBg4RU/E7m0FssdhtyW4wNaYO9MAygW', 'SISWA', NULL, 'eRMzN0lgx0yATUaGHzVDLtSSlUJe7fg5t2PZ3ud2', 'isActive', 1, 'siswa', '1000', '2938.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(633, '11.11.11.11', NULL, 'SISWA_Mala', '1305', '0003908278', NULL, '$2y$10$f5gspP1O235SmYjtMCt1ceT1YBi.zI6pHGEOPkmYT/d9Atoxi1Xa2', 'SISWA', NULL, 'hLHrHBNG4zQ5Yz86yeeWy0iC5hZuAagORQnqmPUT', 'isActive', 1, 'siswa', '0', '2971.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(634, '11.11.11.11', NULL, 'SISWA_lgy9', '2322', '0004067024', NULL, '$2y$10$Z24FmD6UFQKLD95F6GGUb.wFmIlPmsUxNsFw.5LVguUaFBkihnd02', 'SISWA', NULL, 'pJuhBvQtNBykhWCnQd9RZ6z4cKhkRDxu6aRDPNEx', 'isActive', 1, 'siswa', '3000', '2932.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(635, '11.11.11.11', NULL, 'SISWA_xVGx', '2004', '0003979146', NULL, '$2y$10$eHI3JC.W9GiNZJBHHA14DeX8ueXf.SCCsVvANVuuwRD0VwBPCAkOS', 'SISWA', NULL, 'eHprmQdZxaPL3neExBhgY0VCvSbUMAgxJtuEd0sr', 'isActive', 1, 'siswa', '8000', '2953.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(636, '11.11.11.11', NULL, 'SISWA_UDCC', '4915', '0004067843', NULL, '$2y$10$2Ojh9OpWTXg.a7i3JLGVJ.SPZLVZ/.FF/fkmsH.twIHc2giBws3sm', 'SISWA', NULL, 'OUCMrHHwFIq6yjTIq3xxWpZDlktT3KnYYCn4tydR', 'isActive', 1, 'siswa', '0', '2936.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(637, '11.11.11.11', NULL, 'SISWA_1vK2', '4444', '0003977863', NULL, '$2y$10$HCKWA.wEBm1AatFb5s4jIOwo94LdBWtfAHxe4S4i76jy/.ZFetQbC', 'SISWA', NULL, 'rPFGQJ8tMm3xHGXxMpRxFfLxKZHYuS4so5jwULqM', 'isActive', 1, 'siswa', '0', '2960.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(638, '11.11.11.11', NULL, 'SISWA_CKDZ', '2410', '0004066749', NULL, '$2y$10$2F7Oi5jvLJ5Ky.0.31/j1.X41/bt1y7ok9yXSNkJUoufud5j1b4iy', 'SISWA', NULL, 'ylBpHJImzQUY3tcZDDsfP0gud1pPTpAReY6vUGGZ', 'isActive', 1, 'siswa', '10000', '2931.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(639, '11.11.11.11', NULL, 'SISWA_NO34', '1322', '0003950115', NULL, '$2y$10$d/SLPRh1x3F8Gi88LWybses3Gcgihfde7kKJr9zHZ1.zM15v.7Stu', 'SISWA', NULL, 'eS9tMBWWuM4QLBVhuAjI7Cdlr3ErET6aNZN5e86V', 'isActive', 1, 'siswa', '5000', '0469.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(640, '11.11.11.11', NULL, 'SISWA_Se4r', '2818', '0003978892', NULL, '$2y$10$JkL0HuZEqGvZPAnuWg18ZeWrR2V8uxULRE8SXFfsvzc.MSf5UNOTK', 'SISWA', NULL, 'Sd5rZRNF7UyHpEfkHqEKsNhMsTMsaGTOXuCNBCoQ', 'isActive', 1, 'siswa', '43000', '2954.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(641, '11.11.11.11', NULL, 'SISWA_cw2G', '1005', '0004068114', NULL, '$2y$10$dY.y94H9smSDSc5o3jVlM.8gGcoGMAREn4tnPV3KM8Ki76uW1J3x.', 'SISWA', NULL, 'ckY0Q2wbL6a5xyXESZpx4GJERb2BAhiGk51D0g3d', 'isActive', 1, 'siswa', '1000', '2937.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(642, '11.11.11.11', NULL, 'SISWA_cdyJ', '1749', '0003977603', NULL, '$2y$10$CF9rWMDVeqrUFQEwFeokpuGYu8/bIvkRUWUJ0qTsXy78J8/cemjgW', 'SISWA', NULL, 'LhDyhb6eSnW2FLZ6NxNgrMGa3TdGUwdliCoTMlzx', 'isActive', 1, 'siswa', '0', '2959.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(643, '11.11.11.11', NULL, 'SISWA_7QhU', '0409', '0004066483', NULL, '$2y$10$XFJVSBZGGX2ixB1TpQ7CIuMLB5QD5M69rd8ceCR5OUxmiEKMY.c4e', 'SISWA', NULL, 'ijazqN5gSdP9urqr8md91WUW1gxSOb48CgcjZMMS', 'isActive', 1, 'siswa', '0', '2934.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(644, '11.11.11.11', NULL, 'SISWA_xnxO', '2398', '0003978637', NULL, '$2y$10$5dtPVC/m98eqFhYCkWrZ0uzoa6ErcrI.gBgdLpiN28nklHd/6/QRS', 'SISWA', NULL, 'pwnB1ADHhkwvfTzgEQbzOo04J2Q11gN078N13sv8', 'isActive', 1, 'siswa', '9000', '2955.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(645, '11.11.11.11', NULL, 'SISWA_hDjD', '8075', '0004068384', NULL, '$2y$10$SEAp3YXzPTFTTh0YyVPdyOxRcV8aiX5ScmmwBB3.o.3R2GQCVDSDi', 'SISWA', NULL, 'TI1lYoL3yeu7cmlPvZRMbkBokut3dJvVPAr2iVKa', 'isActive', 1, 'siswa', '1000', '2939.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(646, '11.11.11.11', NULL, 'SISWA_FxMi', '2080', '0003977342', NULL, '$2y$10$NS/Fy1t6rplAd/5ymOiS9.i44CH60LQiRFXtcEwugwdpbzNwdXhvK', 'SISWA', NULL, 'ShoNbeWpZgbj3GCLqRz9czaLnToMDmIFjb5iVLKm', 'isActive', 1, 'siswa', '20000', '2958.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(647, '11.11.11.11', NULL, 'SISWA_Rkxf', '0814', '0004066223', NULL, '$2y$10$lLVVqXf0A1FaWXJRSrUL6Oa98ynXKf95v0RGHpQ5qFK1xo5T2tnei', 'SISWA', NULL, 'pQKiVsBFdd1b7Qy2ualfJDHQOyv0XU1CCc4P8RaS', 'isActive', 1, 'siswa', '27000', '2935.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(648, '11.11.11.11', NULL, 'SISWA_q7z9', '1923', '0003978380', NULL, '$2y$10$UmntwXfxHtJvUKt9MekWjOHnHJBP1BNVCuee983s1n3arwCd5A5qi', 'SISWA', NULL, 'VGnOv6Qg1dN0ONVyCc9OUT2wgCIs6vxUFK43fp9K', 'isActive', 1, 'siswa', '5000', '2956.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(649, '11.11.11.11', NULL, 'SISWA_DB8b', '3322', '0003952335', NULL, '$2y$10$uDGXNt1dBHdEM4Z0IoxDzeQ/xrmv4VrGB2Y/HssuFF3ktyWKT6ytW', 'SISWA', NULL, 'ofE0do7Fmjh5tGzNq8jUBghlT3Hk8hM1c7q0uOJu', 'isActive', 1, 'siswa', '0', '2961.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(650, '11.11.11.11', NULL, 'SISWA_mSEo', '0484', '0004068653', NULL, '$2y$10$xLdUUYuhCF8YaLGgto8t../lVe8P9xMgFoOtYF7pJ4PWHn4QmSo2C', 'SISWA', NULL, 'jUYM6bQ3FZN2BWAewVPfNsWD8WqKNA9ErrjVtxK9', 'isActive', 1, 'siswa', '3000', '2941.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(651, '11.11.11.11', NULL, 'SISWA_v99i', '8082', '0003978122', NULL, '$2y$10$Nv.mZBkdrnR0IicQYJTI7.DjsETL.mmUgenci4IgoqTaP4Yvz5aeu', 'SISWA', NULL, '4q5KeJSKMjBfr7qrmzAMmogIXqAyHFfzYlutLEOp', 'isActive', 1, 'siswa', '0', '2957.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(652, '11.11.11.11', NULL, 'SISWA_oY6o', '1234', '0003945886', NULL, '$2y$10$lvi1oM.6bJg0zJz13EI7mOCydq/VfFqVZmg9MANeLhzyifzFL1fmO', 'SISWA', NULL, 'dJUORl9ecwD6HAyLzxXyG5wcEyA4KYDrPjfYEfM0', 'isActive', 1, 'siswa', '0', '0516.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(653, '11.11.11.11', NULL, 'SISWA_QIKq', '2231', '0003952024', NULL, '$2y$10$biXtWCBe6wrHT/K0d3sCUOlgjGyQNHHKlJiKYQJZU97XQehw4RBeW', 'SISWA', NULL, 'pdJGjMBgdlPkUqxV6xZ05r2wQ7NMkZmxyxkHQovx', 'isActive', 1, 'siswa', '9000', '2962.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(654, '11.11.11.11', NULL, 'SISWA_g5y6', '1234', '0003981470', NULL, '$2y$10$c7H1uisvDMKaUp5OvuNnAenMgMeL8ssvir7N6ExQt/q0UlIYs6i72', 'SISWA', NULL, 'e53KtvmnvM82JkCVTtevCRuW5VJlrrKl2jl8tfyk', 'isActive', 1, 'siswa', '6000', '0523.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(655, '11.11.11.11', NULL, 'SISWA_siN4', '2211', '0003946184', NULL, '$2y$10$1jqkZ0Qt8Jst2tynfBM2TOAEuowXBWEDu1l8J/RaWpWw/GUqfeajm', 'SISWA', NULL, '8wCb2PH40YANZJMVLMJFyFcQEXSkW28IlWRiao7h', 'isActive', 1, 'siswa', '18000', '0517.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(656, '11.11.11.11', NULL, 'SISWA_aVD0', '1106', '0003920809', NULL, '$2y$10$FEVNmnSydV5q4n3C4zBp8OEzICEqOvCDvb9QGDnm96UMxe5vrGMny', 'SISWA', NULL, 'U24BIDXym8SNWxp8eHmCdlFzDyJLR7yVFe21CCHr', 'isActive', 1, 'siswa', '3000', '2710.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(657, '11.11.11.11', NULL, 'SISWA_vuBo', '1234', '0003910161', NULL, '$2y$10$EynBY9VDJ3y4M1vT2Jlz6u8LmTUBUgtEF8fWEMzl9c9wVXq1WaLZW', 'SISWA', NULL, 'B7QeQKG7MXWJXHrXzWyzdcgEsVCgeA4O0Gmi7Xev', 'isActive', 1, 'siswa', '0', '0366.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(658, '11.11.11.11', NULL, 'SISWA_2zBG', '5555', '0003921076', NULL, '$2y$10$RqwnJpFJaoV6K67mo51FveETmhG2yneI5ahT3HfgI1uhL5Azu/BcG', 'SISWA', NULL, 'tNdTLrQzS4aLAWLo4DJOggAJ9HiEtwwKI52atlHc', 'isActive', 1, 'siswa', '0', '2720.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(659, '11.11.11.11', NULL, 'SISWA_TMSA', '1234', '0003909287', NULL, '$2y$10$cmbuWV9oq0g8tZEuxRPjp.VlewHW4/zv51hxVTMr2aWj0oTW8bfwy', 'SISWA', NULL, 'uWeJVDeorvqt1xzUQrVdwqXR7UzmQas44GD2eIr5', 'isActive', 1, 'siswa', '0', '0373.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(660, '11.11.11.11', NULL, 'SISWA_ZhE0', '1203', '0003981232', NULL, '$2y$10$BLlA.mU7LYhLG6P8Pha53uWJf2CjbIyo8dzDXu02LlhjezElPuXC6', 'SISWA', NULL, 'tfYnM87jzeB8QNVKkTEqfazFMQhC3Cdf0hDhhuuB', 'isActive', 1, 'siswa', '20000', '0521.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(661, '11.11.11.11', NULL, 'SISWA_ZMcy', '1234', '0003946478', NULL, '$2y$10$uWnY8PKccjgtHto2RIWnoeZ9zGJ/7l4KVGUDfc2RmOP9bRh4OkfVa', 'SISWA', NULL, 'Z6ELBC5vBPKHoDt7grKapmneyNYpDfZLFJ9tz8PF', 'isActive', 1, 'siswa', '0', '0518.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(662, '11.11.11.11', NULL, 'SISWA_yZzl', '1234', '0003906018', NULL, '$2y$10$fNoLGKbRpC996Y62wmWBNOA2efj/P6ymCMBVSmGswOoQCurNg.mY2', 'SISWA', NULL, '1vL3zCdqRrgCHE7j2YpV0PwgtBuXNNB54mwA0q2p', 'isActive', 1, 'siswa', '0', '0368.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(663, '11.11.11.11', NULL, 'SISWA_LNPI', '1505', '0003920542', NULL, '$2y$10$rLgdqboFowrIE/wSm44vJ.z8M6ddczcotwjxICjeD66MVjkh.NDP6', 'SISWA', NULL, 'FBI7oTXvtvWoKjkIOzalhqnPqRO0iFNU9muz4sUP', 'isActive', 1, 'siswa', '0', '2708.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(664, '11.11.11.11', NULL, 'SISWA_K62A', '1716', '0003980992', NULL, '$2y$10$ZPR6QYl5vPYx07tmtcvyee6/YlYlUfPKbBIPFjcxCwzcFCITKq1Bi', 'SISWA', NULL, 'E9bfXxSAIlHwvygJp1S811kfpItYv3HrloHUwsG5', 'isActive', 1, 'siswa', '2000', '0522.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(665, '11.11.11.11', NULL, 'SISWA_OAzo', '1702', '0003921344', NULL, '$2y$10$qB3Hr9eBCZ/ECRuF/Sj9R.k/K5yP3j8zGNlMTZrbW.yRq5DpcqBu6', 'SISWA', NULL, 'YApCzW8sGiBKDjzeiM42AZKZdRqIoWVzZ5IDK6M2', 'isActive', 1, 'siswa', '0', '2712.JPG', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(666, '11.11.11.11', NULL, 'SISWA_AuhL', '1234', '0003909066', NULL, '$2y$10$yqEFxF2OVoAiHIKHHYYA.OtqIQ7mEQZWFWcPZn1VOSNwJikgd/iju', 'SISWA', NULL, 'fMz0j5j8yNQe3ZzEnG1jFXSlaG46hq7Huc7mzkXV', 'isActive', 1, 'siswa', '0', '0374.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(667, '11.11.11.11', NULL, 'SISWA_IhUB', '1212', '0003946772', NULL, '$2y$10$U506OJww/VtY9XiyHndXZ.Cbm1agawnH36XcRcUBUYNvjpQfgkjBi', 'SISWA', NULL, '215bpnQ0C1T6UxmE70j1ahh9IynQcINznBdYy906', 'isActive', 1, 'siswa', '0', '0519.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(668, '11.11.11.11', NULL, 'SISWA_M4sj', '2477', '0003920276', NULL, '$2y$10$VFgzk3z4iO0SdaAMUkDBg.twxiUtpIofcunsoJwu3lsb/R85gBGPi', 'SISWA', NULL, 'hH3KVQMfItEDmBliEYrJ9DQfxdhDMEfNgzGthfId', 'isActive', 1, 'siswa', '0', '2705.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(669, '11.11.11.11', NULL, 'SISWA_t3J6', '1234', '0003980748', NULL, '$2y$10$IfZm46I2fhdWipLfNMZmCuKitJxs9XI7aEHcH8WudkK2SEsSuTnsS', 'SISWA', NULL, 'iorLQCrI2WMzxe3dC3BQ1X7QTLilPQg1cE90ShYv', 'isActive', 1, 'siswa', '0', '0349.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(670, '11.11.11.11', NULL, 'SISWA_z0IH', '2703', '0003934244', NULL, '$2y$10$Np7.eiQUo1MdwmawYVSlVOjl2Or6Lsnj4U.2oW2/iE1vlMHof/g46', 'SISWA', NULL, 'iY1Kz2uDb0j5YhNsI0JpqQesSpSgHJO0af5XIXeO', 'isActive', 1, 'siswa', '1000', '0352.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(671, '11.11.11.11', NULL, 'SISWA_MwEu', '6322', '0003921613', NULL, '$2y$10$3gwW9UeuAzc.uE2tFbyos.tYk7aI7Rgrss69puAGM2qO4NCl3N5u6', 'SISWA', NULL, 'Gvwq5TGnNrvZM444n5ncO0JpTJUvfGwzBhRaZ0eY', 'isActive', 1, 'siswa', '1000', '2718.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(672, '11.11.11.11', NULL, 'SISWA_EBAc', '1010', '0003980254', NULL, '$2y$10$XZAfE0FAxEcbNlaQ1GblOOgxVMiAbr8FJOdVFoBPx3sA5V.7S2MoW', 'SISWA', NULL, 'pzSx8lgGEKdGNCVfKhfIXxlQjEMb6NZVeTq7zobN', 'isActive', 1, 'siswa', '0', '0520.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(673, '11.11.11.11', NULL, 'SISWA_hcIr', '1234', '0003932797', NULL, '$2y$10$UwIYdA2xOqM/lcoO./5KC.cxmunPoJYM79QF.bUsCYYZDh/Ukv2WK', 'SISWA', NULL, 'rFJ64LTvfBn3hcL7q1EeDDXDvA28liv6Ks291CHl', 'isActive', 1, 'siswa', '0', '0360.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(674, '11.11.11.11', NULL, 'SISWA_PwEq', '2602', '0003919997', NULL, '$2y$10$pU2MXZpadwoOizZ/aNNnduDNyhcfqeojEfpJOKPQS1h5d14NgMErW', 'SISWA', NULL, '3JAuLNHakzIz6u036qWekk2I2Cqo1vcdFOmsgARd', 'isActive', 1, 'siswa', '6000', '2706.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(675, '11.11.11.11', NULL, 'SISWA_HbMv', '0622', '0003980501', NULL, '$2y$10$HtZnkKl5OwXuoa0cS43BEOZwOfrpllYViyPeRVVBgHo5eqPlw5aLS', 'SISWA', NULL, 'MLKYpGChLYSbFwG4Qdxn2RjXEs3DXmnmeZYExktL', 'isActive', 1, 'siswa', '0', '2724.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(676, '11.11.11.11', NULL, 'SISWA_sguw', '1808', '0003933953', NULL, '$2y$10$rr96rfNbuLX7Wirlq9rm4u0j8kXqdJUqqaZP4Yt3llPYnbC8U3G5q', 'SISWA', NULL, '79195m56AyGjtE9qGFaklhOp8025eKaLmlE4wfRw', 'isActive', 1, 'siswa', '0', '0354.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(677, '11.11.11.11', NULL, 'SISWA_8CyO', '1006', '0003921883', NULL, '$2y$10$lME5265yEciae5ys09EdC.CfpK5xxIZC27nLOrNq2V/ljW9AZ79XG', 'SISWA', NULL, '6hP17gtfxFRj0H9e7b2XV3f0E4NHwq5m9GZqgcsU', 'isActive', 1, 'siswa', '2000', '2716.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(678, '11.11.11.11', NULL, 'SISWA_8btn', '1234', '0003932495', NULL, '$2y$10$6R48jHdZl7Q0nzpQBbSCfuZ5NoCbhkBHpXSgCzZ1VqdbKUEwa1VqK', 'SISWA', NULL, 'X4QWmeBg3z2pRLfairDLy4S4bzkYv1qwOWMbmhNu', 'isActive', 1, 'siswa', '0', '0361.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(679, '11.11.11.11', NULL, 'SISWA_7yfS', '1234', '0003908831', NULL, '$2y$10$g1LdfGhZ9DhyL2K9Cb.QbeztPvc26OVpTEDefk7FvlHs7ObuIKW8a', 'SISWA', NULL, 'SqmQU7DNRoO7Y124eBP2580GKOrdd3EwVJ8wsCEg', 'isActive', 1, 'siswa', '0', '0507.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(680, '11.11.11.11', NULL, 'SISWA_drYE', '1006', '0003919716', NULL, '$2y$10$sc5UuG8P37BnS8/mdA9bXesqFUzgRqO9CRCiuarb6kM7NRnAVKnVC', 'SISWA', NULL, 'RVN8Q7dpnTmoypxrPxVeSZvJ6dZkbPkXl0UxKVBD', 'isActive', 1, 'siswa', '0', '2711.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(681, '11.11.11.11', NULL, 'SISWA_gxlm', '1234', '0003933662', NULL, '$2y$10$labFhNbES1hFa3wluNUjTe7M8ijPGZsQgMJn8Mt7Lq07ZwS9Fyf4y', 'SISWA', NULL, 'WwMQg8lpppFF2vhqp3698PG4rTbUFybAUUWRtYQv', 'isActive', 1, 'siswa', '0', '0356.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(682, '11.11.11.11', NULL, 'SISWA_lDIv', '0812', '0003922154', NULL, '$2y$10$aBbviImTYThGMZn2Hvdl4egMs.aIxN.jdq8J4uR81iQnTlgczrcqa', 'SISWA', NULL, 'fgiLw8ickGcrMJWC1tjG4SXO7mlH3FD0d1U8oCRD', 'isActive', 1, 'siswa', '1000', '2717.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(683, '11.11.11.11', NULL, 'SISWA_7Ofn', '1234', '0003955396', NULL, '$2y$10$lviAKOL3FMKjv0vf83qKC.YgL4wsobkF2ozRzpkzhlmhOjc59Q32.', 'SISWA', NULL, 'XKNXEN6rOpKcZ997CsidI6UrQJYKSeoIoEY0XKju', 'isActive', 1, 'siswa', '0', '0513.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(684, '11.11.11.11', NULL, 'SISWA_G7xF', '1234', '0003932192', NULL, '$2y$10$sIx1QnEcpx/6qGmMup2W3.4RKSkIHlsAWbwbFhoKTnlvi2WoAVoFy', 'SISWA', NULL, 'LKv4Kj3J48CFWgKGsahqErV7W8E3iPh0ImGn2KiA', 'isActive', 1, 'siswa', '0', '0359.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(685, '11.11.11.11', NULL, 'SISWA_nUrC', '1111', '0003909058', NULL, '$2y$10$aZ8pddlVXsJT01c3gvom/eIaD08Ib69DaDCbyOlqMmKGeGq/gTny6', 'SISWA', NULL, '99C3b5Lz8FI55cI4pl3NIrCym3uze3gHdHITJgJT', 'isActive', 1, 'siswa', '0', '0506.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(686, '11.11.11.11', NULL, 'SISWA_6uAB', '2425', '0003955706', NULL, '$2y$10$yNwLowG1OTEzvZLBjrZfde0LIpTuVoDBMfmHI51c3JTAUJmWGWey6', 'SISWA', NULL, 'bBgLlDze7XdMlSFQ9Oy5vHs6QN5h1agINQcRqt1t', 'isActive', 1, 'siswa', '0', '0510.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(687, '11.11.11.11', NULL, 'SISWA_wd7q', '1234', '0003933372', NULL, '$2y$10$uDFV1wT5mMm2vQb40KyR.OXNqq.KwTwDKN8RE.Vrnp.3WQqZg4mlO', 'SISWA', NULL, 'gy03FRnqxlxn6xy7zqFlriZ7PAVu1XDW1aBWcCnd', 'isActive', 1, 'siswa', '0', '0357.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(688, '11.11.11.11', NULL, 'SISWA_NXd9', '1234', '0003909279', NULL, '$2y$10$W1ZfHaQieUZlsfQTdnUP3eo/MO4/k9hcn5Q3LT8vrLey9zZCUei8.', 'SISWA', NULL, 'J58wipLa4dN5ZkiQ4EZzwJx7JVKv7GkzDwDKzOgm', 'isActive', 1, 'siswa', '0', '0505.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(689, '11.11.11.11', NULL, 'SISWA_0Lht', '1234', '0003956015', NULL, '$2y$10$4iG5GoqkseEBlDsNF.ZDmu.9TyCWnIhUHWrcMAJCeJvu28WhLMaIa', 'SISWA', NULL, 'WSMue3qCvJ0ftwpbL4VszH9QFKbm2snxydeTvSTN', 'isActive', 1, 'siswa', '0', '0511.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(690, '11.11.11.11', NULL, 'SISWA_K7uX', '2006', '0003909496', NULL, '$2y$10$u1Iv67uAcIistgW74HBftOePAchwUC9h4aTg8VNyw4G8M4rkmFq.C', 'SISWA', NULL, '6aU5w28c7ClmINrac40c0cfPCR4SKCEkgmHuEjpb', 'isActive', 1, 'siswa', '0', '0508.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(691, '11.11.11.11', NULL, 'SISWA_qKCe', '1231', '0003985376', NULL, '$2y$10$w6RfgnD54/SADNfOVv2ub.He9Ab1ZexlawgnLyw/8tKf4z/IGGFei', 'SISWA', NULL, 'Y9pdM5pYYWxodhqoJ3MGiLJmNK98NSXbYtPUcMx9', 'isActive', 1, 'siswa', '4000', '0472.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(692, '11.11.11.11', NULL, 'SISWA_p9cK', '1234', '0003956324', NULL, '$2y$10$vRrnKbzu04qU28UJAwdjgeMH9BjbBj3vNY1ak/hsJg.PiMQr8mqAC', 'SISWA', NULL, 'djSgpeyZOQZY7z2NSxyfbsGLS18YKtb6dd8iEoQQ', 'isActive', 1, 'siswa', '0', '0512.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(693, '11.11.11.11', NULL, 'SISWA_XMmD', '1234', '0003956942', NULL, '$2y$10$1ErOSA4d3P3TAfl111FNcuDFDJjJGNNaVk2juKg.BotvGxP7cLRTG', 'SISWA', NULL, 'aYinSxZHE5Or04pqaAYO8bHkaid1d58hPafRaJ83', 'isActive', 1, 'siswa', '0', '0509.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(694, '11.11.11.11', NULL, 'SISWA_SQtJ', '1234', '0003914529', NULL, '$2y$10$D13.BXLNsQeS6LaUPih.1umabcnH5aGy9RdaEsLydxQGOOi87odWC', 'SISWA', NULL, '2RSLoiOaXIsE8ilLpi2pLRzqIm6ywLEtK2rrZyaU', 'isActive', 1, 'siswa', '0', '0452.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(695, '11.11.11.11', NULL, 'SISWA_a8Qp', '1234', '0003956633', NULL, '$2y$10$pC5biOJXcmd4xnf16slPFefVzz6n0jke66jubA6ogmUkKHFBgi8NC', 'SISWA', NULL, 'eHAyovO3U3DDGqPVgxLcn4DtGWyXPBq9irkFuaZl', 'isActive', 1, 'siswa', '3000', '0515.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(696, '11.11.11.11', NULL, 'SISWA_w4Xt', '2599', '0003915323', NULL, '$2y$10$9Ow5DHCxjMA3WgKktEgZ6uOpnE2ilObLSZPPiHVM0XcqROUQR2Fyi', 'SISWA', NULL, 'zC6fyCL8MOqwvsLqGwjuhosDO70VAwUESiRO516o', 'isActive', 1, 'siswa', '12000', '0457.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(697, '11.11.11.11', NULL, 'SISWA_gMLw', '1234', '0003981179', NULL, '$2y$10$NFGWirmLIN.yvrHF8jgwUeV7SltrU0bqaiHk60r1hoOR.SIpzOnZy', 'SISWA', NULL, '0eFw1kEImPaQEHzLr7u5BjlUdduC6JwUSae8d9b5', 'isActive', 1, 'siswa', '0', '0503.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(698, '11.11.11.11', NULL, 'SISWA_xNwe', '6115', '0003917483', NULL, '$2y$10$dF7zARp.4lrl36FQ38rQ1Oz9yZpvf/8pBkZEtN4/Y5/eBlAiG3vYu', 'SISWA', NULL, 'S4jMdqGbAapuVZ0nQ0zQULkrnskRg0RolH4apkQU', 'isActive', 1, 'siswa', '215000', '0450.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(699, '11.11.11.11', NULL, 'SISWA_FVq3', '1234', '0003905114', NULL, '$2y$10$y5x9uU6LEWETmTbhDcpZhuSnHJkKuLZf/xeHi55CHxicPvN8GYIsu', 'SISWA', NULL, 'IzOL5dVmlfyfOaj2hm4L2peqoBsOH92SZabxebCc', 'isActive', 1, 'siswa', '0', '0497.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(700, '11.11.11.11', NULL, 'SISWA_znvp', '2748', '0003915589', NULL, '$2y$10$8jQPHvWk8OMepLeQknLc2Ok0UNtpDG9Suz8KW1EgCJsfJl1RMaUz6', 'SISWA', NULL, 'nxtj8RwahPyVUg0RTrEUzU0JnG941iyCXsEwU40b', 'isActive', 1, 'siswa', '2000', '0455.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(701, '11.11.11.11', NULL, 'SISWA_m9HU', '1234', '0003905309', NULL, '$2y$10$s/cybAb6OxYawKo4mLXtleBp4oP2J5pJec8Ihku3yNMqhr1XXpQvq', 'SISWA', NULL, 'elhhcrV0ocBjJiybjS4adji55NP9tKs3bGcIcIys', 'isActive', 1, 'siswa', '0', '0499.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(702, '11.11.11.11', NULL, 'SISWA_1nBd', '0410', '0003917209', NULL, '$2y$10$BedWwAafqK4mNlI/DL1EbO4Wb7WKKZxgEqV99RBvMbUzd068OigiS', 'SISWA', NULL, 'zjMJPajtF7BaZM7NkQXVynxNLrSVZACR1GSDxcVX', 'isActive', 1, 'siswa', '0', '0451.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(703, '11.11.11.11', NULL, 'SISWA_eApL', '1419', '0003980939', NULL, '$2y$10$KI1qnWjXgbBwhbV1agLEqey3kIblsmfPyloNroV9NaOvY9kf6TL4W', 'SISWA', NULL, '7BZf5XHHa8HiExJVwK2EZjR8fyZaY8uePZPkK5Vy', 'isActive', 1, 'siswa', '0', '0498.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(704, '11.11.11.11', NULL, 'SISWA_V28m', '1509', '0003915857', NULL, '$2y$10$7IbnadY5nafF0m5xbIeuqe/J2bOJ2cnck1tMWNJwRXzESUStYfAKu', 'SISWA', NULL, '8ZEdFyytnBeO8MY0s5yD6O0cOYtiDW2FoxzPJRpU', 'isActive', 1, 'siswa', '8000', '0456.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(705, '11.11.11.11', NULL, 'SISWA_Wbve', '1234', '0003916937', NULL, '$2y$10$f9hwJt7MIk8DFpis.xATkuLbQ0qqw/JPP2a8eGGtu.UPII../ObOu', 'SISWA', NULL, 'MtgC4UEaQ0UgPFijB8yeoADobkDItwujwzRjBfmv', 'isActive', 1, 'siswa', '0', '0453.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(706, '11.11.11.11', NULL, 'SISWA_kH8m', '1234', '0003916125', NULL, '$2y$10$kLO5n.E33AaNonwgoYK6W.Xn8Hvea9zeQgIlgvjG79UXOzfpSWdHm', 'SISWA', NULL, 'qbuF8zyr8D0BN1apIssIsA7FnKFRsoF7yBtK0clj', 'isActive', 1, 'siswa', '0', '0458.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(707, '11.11.11.11', NULL, 'SISWA_A53o', '0212', '0003916665', NULL, '$2y$10$W/rIHlPvLm2z22OflsPbquY/s9ihl5Bz6NKwNpXRB40Fl9LTiTd/.', 'SISWA', NULL, 'm5ha2eWCQyiCUgYLsDTJbQ8DiCu1esVnPtbvj5Sw', 'isActive', 1, 'siswa', '0', '0454.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(708, '11.11.11.11', NULL, 'SISWA_mkq2', '0712', '0003916395', NULL, '$2y$10$3fOvnLL51Iz2enho1Y.1Du7MQpHLulK3OooInv3CuymrhM5FT05D.', 'SISWA', NULL, 'VUGJx3vraOdrS0FQ8UR4GSJHWESKuL8YPtfHqsdY', 'isActive', 1, 'siswa', '0', '0459.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(709, '11.11.11.11', NULL, 'SISWA_wiEw', '1234', '0003910834', NULL, '$2y$10$lNnoRdn6t2UoZBC8Qu2EAu5m7Pe2hxNctHarJzTSrmRUZUJFyMAWy', 'SISWA', NULL, 'ihJixV6XTQmOzboLngMc0PhuLVNt0vLjVGB563yW', 'isActive', 1, 'siswa', '0', '0367.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(710, '11.11.11.11', NULL, 'SISWA_nCgP', '2308', '0003923114', NULL, '$2y$10$BDbdzAU0NhuEmRAfgozT/OsYuwjcUjNmAy.do817L/Ub/qf18ymq.', 'SISWA', NULL, 'nipvmNgVyuBLpM2OjZYbpF9K2s1ROB3sBj46ndx8', 'isActive', 1, 'siswa', '0', '0394.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(711, '11.11.11.11', NULL, 'SISWA_52GC', '1234', '0003909940', NULL, '$2y$10$.PwiyzSOLwDFUS3MTo3.su77rMD08XmdnHUoJoJTLvRW8vVj3yUL6', 'SISWA', NULL, 'oZzoiRMIEOzkyM9s64t33ZU6BYECpOE9Domf8KBq', 'isActive', 1, 'siswa', '0', '0375.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(712, '11.11.11.11', NULL, 'SISWA_UzXy', '1234', '0003924929', NULL, '$2y$10$NTYmu3kA2INO9qZtMYfY7us.CiTCW9lvfasBTWBUrmk.zVjmiKsM.', 'SISWA', NULL, 'hKThI1qdw0xm5fkfxwsACKfZJWnovrWIH3b9oZZs', 'isActive', 1, 'siswa', '0', '0380.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(713, '11.11.11.11', NULL, 'SISWA_veYq', '1234', '0003910608', NULL, '$2y$10$lxc.2jo.htkAvgBiY.Ighuj/hUzLIqhzeZ4sGo5P4A02ygedpg3qS', 'SISWA', NULL, 'VNAmn2uqKaTa3DTVTUIERoYsxvKGDgqKaSfMFBCs', 'isActive', 1, 'siswa', '0', '0364.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(714, '11.11.11.11', NULL, 'SISWA_60kO', '1234', '0003909721', NULL, '$2y$10$/Mkr22hkeIrspnBb1oeGnuXCnaaCLYBzRWyZvJ2.3sP9F8X7D2Jm.', 'SISWA', NULL, 'bwUgGE9V8fBDOmhAI0qb4VKbNammp0hlvvlpPIn3', 'isActive', 1, 'siswa', '0', '0371.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(715, '11.11.11.11', NULL, 'SISWA_Qes6', '1111', '0003923462', NULL, '$2y$10$TkFYjqKIRTGdDN42UjTiHOWndo.G/pQfJ9z1U764refNo4aRAnNoy', 'SISWA', NULL, 'ckAAwSJEUj19I1IFOGJpMYhkynNN6A3LYUO0gApl', 'isActive', 1, 'siswa', '11000', '0431.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(716, '11.11.11.11', NULL, 'SISWA_xi3n', '1234', '0003923754', NULL, '$2y$10$XXEMc9Muf4TDquCP.zGcs.UfOxWyuWIHrhXPSpuHPkrdGpha9HfWC', 'SISWA', NULL, '1u4PEsGcJZqiafqQgSh7LQdpeJNF5e7aioLNTMsA', 'isActive', 1, 'siswa', '0', '0376.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(717, '11.11.11.11', NULL, 'SISWA_z2ZJ', '1234', '0003910384', NULL, '$2y$10$HtBqEur2u/hQrgO/Zif03O30zN2NHly0GmWYhxwVyrVFyAD1r7UrS', 'SISWA', NULL, 'Qp5ZMwjl3tLfHyLZ4MlXqhnIOy99lDqfJjj9AhE6', 'isActive', 1, 'siswa', '0', '0365.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(718, '11.11.11.11', NULL, 'SISWA_Dt93', '1234', '0003925224', NULL, '$2y$10$BBGQpLHNT/SpVXeGBwGvlej8T42RsmRJmYsUcVfU2YAC8V9AuRabq', 'SISWA', NULL, '8lwdLhY81v6I8IRtmLx33rVW3kF1T58wv6xG6YhH', 'isActive', 1, 'siswa', '0', '0381.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(719, '11.11.11.11', NULL, 'SISWA_pOFo', '1234', '0003909504', NULL, '$2y$10$r/NYuNWoIcCUHVT95Vt4u.mWT1zHclY3hnY0uRkF1Pvdm6vW4lvIO', 'SISWA', NULL, 'gaAJvz04tvVudFPxdKym9aBZtj8MngSd8vXHNpsb', 'isActive', 1, 'siswa', '0', '0372.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(720, '11.11.11.11', NULL, 'SISWA_H1qZ', '1506', '0003920908', NULL, '$2y$10$YYdloC1a5TSyWsCcFPxpP.g28c4dT7Sg2ZPjaGuUJ0fTNs1yOfg7u', 'SISWA', NULL, 'GrCk2rHL2hNMMztSPayPT8QwlDhzOMINn8sftjQv', 'isActive', 1, 'siswa', '3000', '0384.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(721, '11.11.11.11', NULL, 'SISWA_NkED', '1612', '0003922253', NULL, '$2y$10$.y.lU9uqwQCPua5qGkGjGuBSNM7TqIix.cFoj0Fj03tCDUpvmQlnm', 'SISWA', NULL, 'MDChyC1Wx7kWCArEb6rd7fRWl4grCaUf3Sbx35xt', 'isActive', 1, 'siswa', '0', '0389.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(722, '11.11.11.11', NULL, 'SISWA_Qtb7', '1826', '0004077148', NULL, '$2y$10$6POcAtfaenHAieB/X8yKMen5zNwYFkzvFEN7jh4XQt6ro.Ua2SYbu', 'SISWA', NULL, '82okvX5MekTFKR59CVNlFYz7qu6MkHX38ZES517s', 'isActive', 1, 'siswa', '0', '2854.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(723, '11.11.11.11', NULL, 'SISWA_Qumc', '1118', '0003921175', NULL, '$2y$10$cstwH.vFsGlY8w6lkDEGF.ayHe.G.WA4Qa3x5rS41i3hizP1o5bPi', 'SISWA', NULL, 'ynUGa5a8dyPlZbvqXoEsvyCCx0ahm2JCnNqLOmo4', 'isActive', 1, 'siswa', '11000', '0385.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(724, '11.11.11.11', NULL, 'SISWA_GBwU', '1234', '0003922534', NULL, '$2y$10$FDaNuEvSuAeN9zbQSymi0ewD7DwOhHw1iNQhrX23PrKTsKaxjHyUq', 'SISWA', NULL, 'PKSEnSxjrgBMUgH0DpePxF8H9NaRaxph0G9H0SKX', 'isActive', 1, 'siswa', '0', '0390.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(725, '11.11.11.11', NULL, 'SISWA_B0RU', '0613', '0003947485', NULL, '$2y$10$o7NK9SMkR9HcyRW4TepxFu6O9HwbDbmRK1TBwy7tNu8zikPtLeI7q', 'SISWA', NULL, 'AXboixnz2ifujm0O0siSDqM2e5HyVT9gXHTazlUS', 'isActive', 1, 'siswa', '29000', '0398.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(726, '11.11.11.11', NULL, 'SISWA_BY1K', '1234', '0003924047', NULL, '$2y$10$liaLoI2UyCFHkWtCf/HveeOQHcGqw4H/LCKM.XbNGt4k3ct1slSq2', 'SISWA', NULL, 'APLAqiLKtHvEz6o6bpJvU1higjPEly5auwJpk27f', 'isActive', 1, 'siswa', '0', '0377.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(727, '11.11.11.11', NULL, 'SISWA_TZWx', '1234', '0003921443', NULL, '$2y$10$yBYjZ1aoA.9eRdespFwsjukLQMt20QqKr8g1iS1QFGba54K4rwosa', 'SISWA', NULL, 'ntsIDE61SzoZAmUOFpIxGeQj9QwtdaGsFBQRirxm', 'isActive', 1, 'siswa', '0', '0387.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(728, '11.11.11.11', NULL, 'SISWA_Mz9m', '1234', '0003925519', NULL, '$2y$10$hq1xGnThQQw/iYi3VYDnK.n.HV4Cin1BmZB.CPBcI6DKxxics6RXy', 'SISWA', NULL, 'Ir7nEPVrB5eLWTkm7X1n7kAW28hGB4uJV5R74HuM', 'isActive', 1, 'siswa', '0', '0382.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(729, '11.11.11.11', NULL, 'SISWA_S8t7', '1234', '0003922824', NULL, '$2y$10$fx3Lg02XUa1kjhUFl4Cqa.e6IGWKbJQj1Zlm3X2.Tnia4uxWSCicm', 'SISWA', NULL, 'ZFcZPoSot4lvz9rJCyjKn2g5PRfM02TQ7T7LBnly', 'isActive', 1, 'siswa', '0', '0391.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(730, '11.11.11.11', NULL, 'SISWA_smS2', '2421', '0003924341', NULL, '$2y$10$ANkS6ALWA5iG4ixwF/DqeO9mQYhBsehC0D0KNywNIHcYBxIPWzrTK', 'SISWA', NULL, 'zZlg9NWFauUHx9LrDWqj9d3AMgASIowgFtUPKqN6', 'isActive', 1, 'siswa', '0', '0378.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(731, '11.11.11.11', NULL, 'SISWA_iDuH', '1001', '0003921712', NULL, '$2y$10$zC/3uKyIniDBqsy67qZAyOCXareaOcVua5iB.2/Xj6thGnvIDdFKS', 'SISWA', NULL, 'WhBwJf1jlPu5lbYGE7pZ1E5ld1jl9G8dB0ItH4LV', 'isActive', 1, 'siswa', '3000', '0388.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(732, '11.11.11.11', NULL, 'SISWA_NmeR', '1234', '0003976684', NULL, '$2y$10$f/fCCd6L2.4/KwqyiFITUOJu4acmm3ot2elDIXeoTCi7acVTCwvIK', 'SISWA', NULL, 'MhStTA40yqDfgNMdmB3noTYh5Rwwi0XrS5AB5XmZ', 'isActive', 1, 'siswa', '0', '0420.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(733, '11.11.11.11', NULL, 'SISWA_08DU', '1908', '0003946309', NULL, '$2y$10$qpKHcBJIUahdSeILFp8X1O2UyergOBG611jYHwfftHEihLhfRAf62', 'SISWA', NULL, '1FxPew25dkdVXWekC1kbhwOZwmsnSxpM3PXF39cq', 'isActive', 1, 'siswa', '0', '0400.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(734, '11.11.11.11', NULL, 'SISWA_VcHx', '2409', '0003947797', NULL, '$2y$10$ZaZYPNhYO/nAY9zokW5AmuhidGksdco7.vgLdOQn74jx4TH92/dMC', 'SISWA', NULL, 'RfdGRs58J3KixifyW4cARdbdSyZCycjn0GH9g9qD', 'isActive', 1, 'siswa', '3000', '0404.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(735, '11.11.11.11', NULL, 'SISWA_BdTJ', '1234', '0003921982', NULL, '$2y$10$6slEv/JsLTm8QyhudneDveBz/0WpSZgt7oo9d/wAfMZtC5fAiyytG', 'SISWA', NULL, 'ql6elVa4U6O1BaQ0dlPyNIpoIjkrI2rNS4OEG2Zm', 'isActive', 1, 'siswa', '3000', '0395.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(736, '11.11.11.11', NULL, 'SISWA_8nHd', '0708', '0003976419', NULL, '$2y$10$kakSGnIKt40T5uv.sqvz2etPjB.Lngnopu13WUZFmMLGStQv3KcHG', 'SISWA', NULL, 'fbuPaIyXRYAGHeb45nX28AF1txYkFUESYy1aHwsJ', 'isActive', 1, 'siswa', '8000', '0383.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(737, '11.11.11.11', NULL, 'SISWA_1ywF', '1234', '0003920641', NULL, '$2y$10$UHtVQ7Awk0U6vllOn6wzDu93jfqpu99nZrfjZwJllamESEzrvPKLa', 'SISWA', NULL, 'EmH8Hsmq7zsGp3Q7xSnXMzRaYnhnAZgC3B78S5eN', 'isActive', 1, 'siswa', '0', '0386.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(738, '11.11.11.11', NULL, 'SISWA_U5UC', '1234', '0003981118', NULL, '$2y$10$UxIk.cMDw3QTa1ckz7eul.zLAw11aPq6VU4qM6YaJSYgE/c6FTlYm', 'SISWA', NULL, '0gfgK9x49vnuOVeb5UZ9PGiRwnNwb3ieIZL73CF8', 'isActive', 1, 'siswa', '0', '0409.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(739, '11.11.11.11', NULL, 'SISWA_8jcI', '2823', '0003946015', NULL, '$2y$10$RiRRdzIKwF/1BZFXR880NOAbKlEMbV4WN3Wt2zywsIgHjMwpD7M/K', 'SISWA', NULL, 'euJFqtj1Ovf0EiqCW88mNT0hdfF2AaR4HUrHIge8', 'isActive', 1, 'siswa', '10000', '0405.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(740, '11.11.11.11', NULL, 'SISWA_yqWb', '2703', '0003979891', NULL, '$2y$10$BbMSZAVKAU/AYwGfCMBTp.Veg0xs4zkRiBY8sMro1KAEjk2vOi53O', 'SISWA', NULL, '5VYlcxHVXNI7k1EoHwrMRVOkp0nUF7lNFf0KCDBJ', 'isActive', 1, 'siswa', '8000', '0416.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(741, '11.11.11.11', NULL, 'SISWA_o1sB', '1234', '0003947191', NULL, '$2y$10$VNka7PgMknV3u0ikW3J82ucvBcg/K09c78.wi9kKmUhJeLNwLls/i', 'SISWA', NULL, 'u5yGtnOs819N0CKTjxtz0fEFh1Gh1sGlFxwhJe5Z', 'isActive', 1, 'siswa', '6000', '0396.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(742, '11.11.11.11', NULL, 'SISWA_iY1r', '2022', '0003945705', NULL, '$2y$10$0.qK.6bewCWSAXNY4yPp6OsPmxQ4WtOe3F8b51wShxDp4s5UKagz2', 'SISWA', NULL, 'kxE1YPMiPtUBXK4dWxjk4ynE1WWwJMKCk6zA8p2Q', 'isActive', 1, 'siswa', '25000', '0403.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(743, '11.11.11.11', NULL, 'SISWA_zl2u', '1234', '0003946897', NULL, '$2y$10$WMfJTD/1rZCFWprk6lWxEe3IqF3oyV84aHcEEERI7D7QplcWTf.9i', 'SISWA', NULL, 'dy31mvKbwykSHkZ73YQVxjEqlO4XVShg4ZXztaZt', 'isActive', 1, 'siswa', '0', '0397.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(744, '11.11.11.11', NULL, 'SISWA_o9zT', '2711', '0003979641', NULL, '$2y$10$5yjeN7jWVoJfnJEXN/o.AuNDAnJDnWCrP67i/ih8lm.LaFaO0YfKS', 'SISWA', NULL, 'PZIwxWTbehflYLLJdpiIVu4GKx2cgXMT2zQvhuvp', 'isActive', 1, 'siswa', '1000', '0414.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(745, '11.11.11.11', NULL, 'SISWA_Vxbr', '2107', '0003947209', NULL, '$2y$10$oxQCVUYiHywPys5zmHcvpOarJte85ISwOjuHN8WMPTvK4Igt6Nqs2', 'SISWA', NULL, 'VeBuANMIsRqj7iA15j64bDJOskGBGeTkcpVThgx9', 'isActive', 1, 'siswa', '0', '0401.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(746, '11.11.11.11', NULL, 'SISWA_oP78', '1234', '0003980634', NULL, '$2y$10$qcYi4dOfiXxMR3.QSNPU3eNXZvlAyeHcEYA9WkkIm8dLk68waMZOm', 'SISWA', NULL, '7EpWDm73B3jzFhJwpk9JThhSE6NccsVAkPSdVsvp', 'isActive', 1, 'siswa', '5000', '0407.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(747, '11.11.11.11', NULL, 'SISWA_hAgY', '6626', '0003946603', NULL, '$2y$10$H.8kzaZWasuVPzApwQEO3.EoIwUUbPVvP8Q4q1XPbbmiU5jUJKTkW', 'SISWA', NULL, '9dxIncgyEqr5YRaCKCG82xArZGdoJDGbD4xDfvTJ', 'isActive', 1, 'siswa', '9000', '0399.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(748, '11.11.11.11', NULL, 'SISWA_URyy', '0204', '0003947503', NULL, '$2y$10$L5X5L8xHR8CjwuMoWrV98.Aar3Z8P.pE1SoxA0EunnErgDMHDQoQO', 'SISWA', NULL, 'b6ggZjiZV5KreS6ShpzMaseVWe9aLxFq0MKPmbaU', 'isActive', 1, 'siswa', '7000', '0402.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(749, '11.11.11.11', NULL, 'SISWA_Rark', '1234', '0003980387', NULL, '$2y$10$EAD2WjxecY47FwsH6DQ.y.V1wPtFzjKrlxKKcs69V.43vWEyYfUX2', 'SISWA', NULL, 'x8eSREumvhPR1QzdpWc83SvgzudOvNRvNIsokCQG', 'isActive', 1, 'siswa', '0', '0408.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(750, '11.11.11.11', NULL, 'SISWA_y6LM', '1234', '0003933350', NULL, '$2y$10$BjhM9RsZG3XaKtgcCdUV..wlQJV2u4bZdTHvBGLinPgjdD1i.EZum', 'SISWA', NULL, 'FNFPem20HjVDnCJV4fIIz0J6Gsm9jjjQCRJPplYS', 'isActive', 1, 'siswa', '0', '2737.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(751, '11.11.11.11', NULL, 'SISWA_OGZg', '2111', '0003935098', NULL, '$2y$10$/QhGjmYDpNmizCjDndoiD.IfARvYYYRVSb0PhZkR9qcyV7Wx6jEAK', 'SISWA', NULL, 'fNZ4j7WkWLulDsDiaRmtjrI5JblMVlXH4hUSimKU', 'isActive', 1, 'siswa', '1000', '2741.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(752, '11.11.11.11', NULL, 'SISWA_lZyo', '1234', '0003979137', NULL, '$2y$10$cpjClOkyfODyOH/dcXOS4.tNoXSkognwVc2awQkau9sK63.Z5zASe', 'SISWA', NULL, '6uJBpIZF6DoZBrLep3jfiG1E2DWgf9wg8YNLANI1', 'isActive', 1, 'siswa', '0', '0412.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(753, '11.11.11.11', NULL, 'SISWA_a0go', '0607', '0003980140', NULL, '$2y$10$/Pl9yhJzN2yfU7iWnr7N4eRBI4tPab3z4FZamt2LVOagz0hYNg/UC', 'SISWA', NULL, 'aUr1WTIQXnK0oBgvypru71LRu0NqJg3hG1ZyTgdK', 'isActive', 1, 'siswa', '9000', '0410.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(754, '11.11.11.11', NULL, 'SISWA_tSmu', '1234', '0003933640', NULL, '$2y$10$tgygZRUyYQA28FFDbMiBQeWAIsID0TDVls2I4X9ClMEgMZBTZVMjC', 'SISWA', NULL, 'UXr4SnVeATepLUHsdG95KFcVtxfm9itNfBoT4hp6', 'isActive', 1, 'siswa', '6000', '2735.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(755, '11.11.11.11', NULL, 'SISWA_6gqt', '0812', '0003986494', NULL, '$2y$10$oYuILeG12dgw5SggTDlH3O1.bCKSuiUNBgoqklH5IknDPJSCiChnG', 'SISWA', NULL, 'gX3D7UJRItj4XeOsUHMm7U2ducLrxAfcCvBR0iD7', 'isActive', 1, 'siswa', '0', '0415.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(756, '11.11.11.11', NULL, 'SISWA_FyfI', '3507', '0003934513', NULL, '$2y$10$jjulHzz1v98/BpVkUkcq5uC8R9/rs2asESPvY0T1RdDbYlNuGHsgq', 'SISWA', NULL, 'ZWyTc3ymoEgodB9wr0oJNV4WhXPyujarRGqIFFdA', 'isActive', 1, 'siswa', '18000', '2740.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(757, '11.11.11.11', NULL, 'SISWA_Xhi8', '1234', '0003934804', NULL, '$2y$10$4khXk7ovIB.quttIi7a7auOrxvvcJpTzrG8StoW.Yn/WXHZHyGnru', 'SISWA', NULL, 'jdfepKlA6KOZEfxfCAqe28nEFXYJMVWEtInSiBIm', 'isActive', 1, 'siswa', '5000', '2742.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(758, '11.11.11.11', NULL, 'SISWA_DJLo', '2727', '0003933062', NULL, '$2y$10$1Fn3DAdVXrm0y8WHowUOiOmfq0lCrco3nV7MkdloGXCEDhgx4CyUK', 'SISWA', NULL, 'sCknQe77ii6Pjy1bIlBkXhlrkKd5FAWjsW5tkb33', 'isActive', 1, 'siswa', '0', '2738.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(759, '11.11.11.11', NULL, 'SISWA_0b9J', '1857', '0003932775', NULL, '$2y$10$zOHqki7ENvnfa6evOy2pieHFrLkuMqZ/qeXffu/L1GSEfZY3R0Wvi', 'SISWA', NULL, 'LsSKsiM2jxy6mPRjbnKmzA9dsoEXabvLAam96v5G', 'isActive', 1, 'siswa', '0', '2739.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(760, '11.11.11.11', NULL, 'SISWA_Te8Q', '2807', '0003938923', NULL, '$2y$10$6m5gy2bQMKSzKbl.Y6hzQO5MN5SyPe2E8aXhJGt9iCuKi5eqWmUiO', 'SISWA', NULL, 'zudWpjPvH36yatdPYplH0EPOvlcXAsZA9BZsY6YZ', 'isActive', 1, 'siswa', '1000', '2744.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(761, '11.11.11.11', NULL, 'SISWA_xq9p', '0509', '0003934222', NULL, '$2y$10$zbus4Bi1DMy7ejtH7FHd.u7eipmYsPvvDACblQ7D/iVv./F4dLxGm', 'SISWA', NULL, 'FIivkeK5eyAUaFBwgXsJKn8emqAaCjnxQdvXvytq', 'isActive', 1, 'siswa', '2000', '2743.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(762, '11.11.11.11', NULL, 'SISWA_wqT5', '1104', '0003923582', NULL, '$2y$10$i6NTlm.N2PXiU5cEkP1Yze9mFs7Gqpn0kPOmuYxEigdNsymXmYwIS', 'SISWA', NULL, 'kE4dMSIJBnC0eFY03BeRgQdYFoYugmGggVRINTtg', 'isActive', 1, 'siswa', '9000', '2628.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(763, '11.11.11.11', NULL, 'SISWA_10AX', '1234', '0003923290', NULL, '$2y$10$nf8ssebnqthJTUVrdmFfouVtYjYJbdRf3amFXBMaD3zbPad1SQCu.', 'SISWA', NULL, 'npFgkqi5wLrBPbvolbLneNBHmWT5JsODlyadZikr', 'isActive', 1, 'siswa', '0', '2629.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(764, '11.11.11.11', NULL, 'SISWA_YH9A', '1234', '0003920532', NULL, '$2y$10$HSps2vcALdhWbqlx9de.OufYyvPS7Gh7nT66QxaJYpb4CFbGWvHJK', 'SISWA', NULL, 'lq6o0jfu4EVpju9Plm1CN0r3xJqTF6HUpKIa1mfM', 'isActive', 1, 'siswa', '0', '2627.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(765, '11.11.11.11', NULL, 'SISWA_aUXk', '1234', '0003922999', NULL, '$2y$10$F/bOU6ONBL8gvgVTu9Ni1eXz9MOeQY.xRwN/0w9eObyXv.nC.D0aW', 'SISWA', NULL, 'CdoAgC41qWj9SZcDKfivsZzz5Yx8kREWpjQQ52Y8', 'isActive', 1, 'siswa', '0', '2630.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(766, '11.11.11.11', NULL, 'SISWA_5Xhv', '0829', '0003920266', NULL, '$2y$10$ViM7sVpA9NBTnJn5OrQOd.cB9dDOgJX4Gm0qks3e4tkVhoJ7q1j6i', 'SISWA', NULL, 'sn6RnxS2flRV06lvEyBrSz1Q5WvwxOKba9DmldDW', 'isActive', 1, 'siswa', '0', '2625.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(767, '11.11.11.11', NULL, 'SISWA_xEYO', '2579', '0003922709', NULL, '$2y$10$sVAeVZij2XSCyJV91f4Lj.xCtQYGQNvpS5h2z0JAc6U49plyg.pb6', 'SISWA', NULL, 'KFdzO0DUDkNCqtEc4egjOJMdtiZ7KWwpecebre6W', 'isActive', 1, 'siswa', '0', '2631.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(768, '11.11.11.11', NULL, 'SISWA_Iiyy', '1234', '0003919987', NULL, '$2y$10$y60bkDu9/Vzx3gdfj7LrAeByeXtWxVJDpBOMqiCdY86qMJlgzT3UW', 'SISWA', NULL, 'D6cLxYbidLVHYWebzgML7aQegJdnzgeoi2o3xozP', 'isActive', 1, 'siswa', '0', '2624.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(769, '11.11.11.11', NULL, 'SISWA_s0QY', '1234', '0003954662', NULL, '$2y$10$0kFe/cc4xm8ccIJ8p1Y/MeRRNvKmYzypU303Mc7aUt0/CNK7r07Ty', 'SISWA', NULL, 'uXwn3clnk6l8vgnzf3OYrU1CUxY1MquOrzZFbC1j', 'isActive', 1, 'siswa', '0', '2647.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(770, '11.11.11.11', NULL, 'SISWA_qBFt', '1933', '0003922419', NULL, '$2y$10$zcxex0JNY8sTVF/NG5aXWeEGv1tj/68bc68eMhB8X1hK68LzJXMp6', 'SISWA', NULL, 'gEMlPCeQ9kAb7bZ33zf64jdhGps74GLVtqdBoIBI', 'isActive', 1, 'siswa', '7000', '2632.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(771, '11.11.11.11', NULL, 'SISWA_fEEa', '1234', '0003991512', NULL, '$2y$10$bMqsba/dQ3Sbuu3mYNyYnOPd0/Gl2bm2FmHcON/WU4gvu7J7xQ5ae', 'SISWA', NULL, 'INewawssqPck9zsXjMEcNqVXjxlQhHqFIqQMIITL', 'isActive', 1, 'siswa', '10000', '2648.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(772, '11.11.11.11', NULL, 'SISWA_zlKO', '1906', '0003919706', NULL, '$2y$10$phBcWUmpER3t4lqegzA5Ue7oG.yWnmW.3o2Lp/U1zAT.B6RLY.0eC', 'SISWA', NULL, 'ATozgTA9QOB8mrKf3r5HZVhJ142FrZ3GXHBQdodu', 'isActive', 1, 'siswa', '0', '2623.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(773, '11.11.11.11', NULL, 'SISWA_ZwlO', '0306', '0003991404', NULL, '$2y$10$hqEHQI6/HvDF30vAhU2H6OliKBoXSNPRGvARMSi7ZThrth/PIdQ7m', 'SISWA', NULL, 'XuXnoj7rIQoY1S6fM48cKi8XXscBus1OcdPQc8Iy', 'isActive', 1, 'siswa', '0', '2658.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(774, '11.11.11.11', NULL, 'SISWA_Ezbp', '1234', '0003922144', NULL, '$2y$10$xqsQyqmHYhLROaqcBc9TmezYaPBnrSf.5Dan/5leQws4ivbjf6A/e', 'SISWA', NULL, '9g1KakxJsepG8PoMtHfgN8jllDBaH6WXkg5C6ULp', 'isActive', 1, 'siswa', '0', '2633.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(775, '11.11.11.11', NULL, 'SISWA_4yxc', '1234', '0003991614', NULL, '$2y$10$MUCauNvtQnjwF9l6.7NyDOMeB576VwRDDGefMVbOXqgV1hC.XLIbq', 'SISWA', NULL, 'HYVNfZhDe3TM7mBJqTJOjxwV4kl3cH2gBdjPfViR', 'isActive', 1, 'siswa', '0', '2649.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(776, '11.11.11.11', NULL, 'SISWA_XlWv', '7745', '0003956210', NULL, '$2y$10$Pts6I1ceSFudIs6UE2Kl6.RxFBzY.ckCTxAjDSJeEGdVMyliN/DEe', 'SISWA', NULL, 'ybA18sH8G2drFOEcHsLy3PdsH8dnYEXEJ8wGLP7X', 'isActive', 1, 'siswa', '0', '2641.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(777, '11.11.11.11', NULL, 'SISWA_UHOO', '1234', '0003991292', NULL, '$2y$10$ijoaisMAr9FR8VE1jkAGYeryOF57o8ECmdCJZgHWmp3O2yAsCoa7m', 'SISWA', NULL, 'dlpDqwZpE7iL97iMBsTqeqFoUZqgVgWsS28c6IgN', 'isActive', 1, 'siswa', '0', '2660.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(778, '11.11.11.11', NULL, 'SISWA_pZ1E', '1234', '0003955901', NULL, '$2y$10$vkmZY1XkI2CsVwxTxqgETel4eKKZKBx/oo9CrvbbgJDf7b7E3fKyi', 'SISWA', NULL, 'kvRPbqub0AJLgXfPuKiJgesflz4jYVDxEj5KaQgn', 'isActive', 1, 'siswa', '0', '2643.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(779, '11.11.11.11', NULL, 'SISWA_Ik1U', '1234', '0003928263', NULL, '$2y$10$JPGr78GFj6ojvvr0MtqcquvyJCQAAFtqX42ETdDY4mBAvNmjHRpfS', 'SISWA', NULL, 'aQPpLO9L6lULwhVq9DROD5rkcIgbVWzCQXTiphNw', 'isActive', 1, 'siswa', '0', '2640.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20');
INSERT INTO `users` (`id`, `kode_instansi`, `email`, `username`, `pin`, `qr_code`, `email_verified_at`, `password`, `role`, `route`, `remember_token`, `status_user`, `user_join`, `name_table_join`, `saldo`, `foto`, `created_at`, `updated_at`) VALUES
(780, '11.11.11.11', NULL, 'SISWA_V7Pk', '1234', '0003991710', NULL, '$2y$10$TujORoFIRXJedKdlOwWxxuNrDpvEvKMws99oBulJNiCAzFcjRTtcG', 'SISWA', NULL, 'M9jkBIAM6qkgjoUgAGaEFB5UcVt1GVpx36AyDZ5v', 'isActive', 1, 'siswa', '0', '2650.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(781, '11.11.11.11', NULL, 'SISWA_Eqxw', '1234', '0003955592', NULL, '$2y$10$gIfw5ExBeQ8Ii8ADMLeyFOSLoQNC9G0RyzAPFmVg1zpk9eKB4z7Xy', 'SISWA', NULL, 'k0XQ4Q8eHoL2CRWMERI7s3zJ3xouDvs1CZNLZ1LJ', 'isActive', 1, 'siswa', '0', '2644.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(782, '11.11.11.11', NULL, 'SISWA_vQvO', '6108', '0003959193', NULL, '$2y$10$JwNV5/.h6kdtDZUx4WaKV.DnyoDr3bihzLkKfcToOzsxA4ZNm8btC', 'SISWA', NULL, 'fCnT9orzH4E6ZUl82G3C9x766H6KtZ8Y8zRslZup', 'isActive', 1, 'siswa', '0', '2656.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(783, '11.11.11.11', NULL, 'SISWA_xCYY', '1234', '0003991796', NULL, '$2y$10$SH7WSTu9JcmHDiYR46a9Pue.DYc0sqwm3EwT98tZMiYXHIaMo5QhW', 'SISWA', NULL, 'JldfrZeImk6c1NAb3Tlxyp7x1zfCn6Qx1kUENb9n', 'isActive', 1, 'siswa', '0', '2652.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(784, '11.11.11.11', NULL, 'SISWA_zEVN', '2312', '0003958891', NULL, '$2y$10$YTtaYw8PZ.V.3jHW8GZSquGToMBXAk8UFbN8x6vqaaNL3uD.XT6lG', 'SISWA', NULL, 'AJjBrGpH3Z6vuyk68huIjCTJzfeMwSyFgN1N8CN0', 'isActive', 1, 'siswa', '0', '2657.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(785, '11.11.11.11', NULL, 'SISWA_EHbj', '1234', '0003927966', NULL, '$2y$10$ndaVZlq9pHLeW4ROqMUqw.RhNQfX0sWocH3DC2blTwBYSsvAb/K1K', 'SISWA', NULL, 'zjOek5WQfDfmhJxWVTYS7SEkJQFaOIK9xWAsvb8H', 'isActive', 1, 'siswa', '0', '2638.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(786, '11.11.11.11', NULL, 'SISWA_G0v9', '1234', '0003955282', NULL, '$2y$10$TTkJ03J5MoVDBKOV/gcgpONekp41ISs3kwwlcgeB/JnVbEbF.cBHi', 'SISWA', NULL, 'OHSPlMbH4rGhmKVuXkMGAGH3Lt9t7Yx9WkTkSp39', 'isActive', 1, 'siswa', '0', '2645.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(787, '11.11.11.11', NULL, 'SISWA_xcnA', '1234', '0003927669', NULL, '$2y$10$zvsNaStYBfJbs71BYV5wGOyyfG4mgUMpth13089EuzW.yyOXMtGom', 'SISWA', NULL, '6uNw4HrTCBCFAdp8ZDBHL8zUcPRyM2PwKlhIQm6q', 'isActive', 1, 'siswa', '0', '2637.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(788, '11.11.11.11', NULL, 'SISWA_d13W', '1234', '0003954972', NULL, '$2y$10$JYccFBDj2Gpp7e4q/9JjJeL3irgLaIxMt2cyd2Xup/wV.5S4cldcO', 'SISWA', NULL, 'waSbcejL6GTAMhQvBYUroVEyo7RQNjMv0ih8iORF', 'isActive', 1, 'siswa', '0', '2646.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(789, '11.11.11.11', NULL, 'SISWA_crcf', '1221', '0003927373', NULL, '$2y$10$Lur8uT/esuJRAFA5N0w5XOhKxBcWQgqa6swbXaN5o2JFJUX2P.AE6', 'SISWA', NULL, 'l65RxkTsFD3A9kwSKxxDrfxvzy9T8BRvxpSCcxe6', 'isActive', 1, 'siswa', '33000', '2636.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(790, '11.11.11.11', NULL, 'SISWA_k9DX', '1234', '0003991876', NULL, '$2y$10$MmW8yW9jhChUhZiGuZLL4ett3ZdMD0T3MstES/XAqR.8/msPXhhC.', 'SISWA', NULL, 'GH4QoaGCfWwrePHXdj1Y14aU5ShFJuEN4DUloTIP', 'isActive', 1, 'siswa', '0', '2653.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(791, '11.11.11.11', NULL, 'SISWA_f1Wa', '0857', '0003958586', NULL, '$2y$10$pJbcZIWcsZoNFN34110WROyqBLNx/U53zb.iWLCs0tmQ491KzxhDG', 'SISWA', NULL, 'ZxVCAbGY5gK5gNmMfvFQxynVDLAJLStzRheIqC78', 'isActive', 1, 'siswa', '0', '2661.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(792, '11.11.11.11', NULL, 'SISWA_euAm', '1753', '0003981591', NULL, '$2y$10$MwJu3uQ5nw06hmNNGQ3lDOYR5C2nqaX9lGrDaiGFsmY67w1mjPyIC', 'SISWA', NULL, 'HHcvtay8Sx71uSrnz11s8F55Nm7JMsHyTKkFchOg', 'isActive', 1, 'siswa', '1000', '2858.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(793, '11.11.11.11', NULL, 'SISWA_yPw4', '1905', '0003984204', NULL, '$2y$10$Pk19Gzt5UCXqUVbT1DqlYumdc8T29jcLyoFMN/ccjFZyIx2oKJlAq', 'SISWA', NULL, 'VjLKofqfjOJ1RPRKsEPbjuues8ynYtteRtC2QN1J', 'isActive', 1, 'siswa', '1000', '2863.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(795, '11.11.11.11', NULL, 'SISWA_jA7v', '4796', '0003980201', NULL, '$2y$10$aqpweN.wFdmmKFpP82J0UOJ7ESnZdTfULOiigLp4JD3rZuEx7VODW', 'SISWA', NULL, '767fmXL5tiEBM2avXhPLqxNxHVIZCkbeVXSeB9Lu', 'isActive', 1, 'siswa', '0', '0504.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(796, '11.11.11.11', NULL, 'SISWA_2por', '3755', '0003981825', NULL, '$2y$10$1s9faJ15f6mPE5qVtmUWNuBuApq.TwuHlHQD8nvFPTtOwVH7fexdK', 'SISWA', NULL, '0aujdOnBxnvky3VGnt6eWKKd9onoFxdmvTYZA5fp', 'isActive', 1, 'siswa', '5000', '2857.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(797, '11.11.11.11', NULL, 'SISWA_HtnL', '0102', '0003984408', NULL, '$2y$10$U3C0kqhBpPEK5TsUcLRlZeLHZ.4an8.M3pNF/uVhzZ7Fs3Wh.962G', 'SISWA', NULL, 'xW1GA2se1jDTO0skSz3KfjLHT6nRajh3waoOodMG', 'isActive', 1, 'siswa', '1000', '2862.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(798, '11.11.11.11', NULL, 'SISWA_prxN', '2514', '0003982058', NULL, '$2y$10$4Mmxx/CFXNLza7sWb6f9A.kAtHC69zW.nkhtwCswaVup6zK.cNW8y', 'SISWA', NULL, '9Ut2wzBTBDtMRkwzfqwXtS0xgZppKdtGchakS3oa', 'isActive', 1, 'siswa', '12000', '2859.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(799, '11.11.11.11', NULL, 'SISWA_nLc4', '1720', '0003984623', NULL, '$2y$10$36NjGoIMiq1DwDbinsfaduPx30b7ysO3Y5WyDGhc5dosbku1sxjla', 'SISWA', NULL, '3tIpGdFsnfodHXoHHEdiyHP9Foc2IZYjq6sNKa3w', 'isActive', 1, 'siswa', '0', '2864.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(800, '11.11.11.11', NULL, 'SISWA_ZCki', '0331', '0003982289', NULL, '$2y$10$iWbB5eUpohFFAGwyl2ITlOWxISaBxtwHcPPx8oib/QUWpbLS1OGaK', 'SISWA', NULL, '6VoYV3AtSHcAma0faiMlC4GGRdl1ARdOCofuqG9r', 'isActive', 1, 'siswa', '0', '2860.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(801, '11.11.11.11', NULL, 'SISWA_aS2b', '2701', '0003984837', NULL, '$2y$10$pYnFGP1x8qNmeT.MM0SdxubDEazQyxm8GpPIsnCiYuWCtWuCIUvw2', 'SISWA', NULL, '9ZaP4RRy7AWgUquAkMbiswnUM0BabYqEGOuXjX49', 'isActive', 1, 'siswa', '23000', '2865.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(802, '11.11.11.11', NULL, 'SISWA_ybJr', '5728', '0003982519', NULL, '$2y$10$OLwVof4CTLuyO5yntApbOOYlldrJAw/LBhrMxdKKnANE0AP7W1qTy', 'SISWA', NULL, 'AFa493JSGxHwucWoyWUEbrA1Q4VZam8C9h7o2vyL', 'isActive', 1, 'siswa', '3000', '2861.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(803, '11.11.11.11', NULL, 'SISWA_2msj', '9935', '0003985050', NULL, '$2y$10$wp9B749r.9xUaGlO9TpoE.qkcn3IMqyIHpUmAMCdkt25dTWh87fiy', 'SISWA', NULL, 'VopWkYe96BkHJPabj6SKst0nDd5EcmHem0HIElR4', 'isActive', 1, 'siswa', '19000', '2866.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(804, '11.11.11.11', NULL, 'SISWA_ou8J', '1234', '0004055535', NULL, '$2y$10$ZEW8dXM/YvwwPLOyCN4ubehSUwranOTrZ1zCKq8ciXviwU.uRHdMm', 'SISWA', NULL, 'csNOEyv4Wv5qdqu1qvRDiND5h0PK3dTAWBZLgD0u', 'isActive', 1, 'siswa', '0', '2851.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(805, '11.11.11.11', NULL, 'SISWA_S1CZ', '1273', '0004055833', NULL, '$2y$10$jBkxRCiNMj7uSQyZ2rfbqe7BCTmWIZcyiunPx6hmxEKlm/d2MhZIO', 'SISWA', NULL, 'xgLar37vDmou2MxcDN27Pe8RoZqFHe2rPb0mrVna', 'isActive', 1, 'siswa', '3000', '2856.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(806, '11.11.11.11', NULL, 'SISWA_sAKK', '1717', '0004055236', NULL, '$2y$10$X/fVBiRvryxGsf0s8/0Q4e6mXdbJ.TcvR0bUoMFtOW.PY1UmK6PUK', 'SISWA', NULL, '03OpYVwSrdOtcLwxSsrJmCNMCu5ueXwkHh64iuf0', 'isActive', 1, 'siswa', '4000', '2850.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(807, '11.11.11.11', NULL, 'SISWA_Kv8A', '2328', '0004056131', NULL, '$2y$10$37JB05WgJsu1ViF89/LpBe/xtZUn6gxdKwFnRuc6IfZjuaIb/4Fzi', 'SISWA', NULL, 'bXhF6W16gD62HBZLd7SmT6UXAE4fyT7Mu2JyUuxH', 'isActive', 1, 'siswa', '0', '2855.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(808, '11.11.11.11', NULL, 'SISWA_j8G9', '1234', '0004054937', NULL, '$2y$10$k.CRrgV8mcG2hxlnDK56aeFPfUdkPrZZvPlocUHg4/KNB4jMXsxW6', 'SISWA', NULL, 'jf0J6lfnHsV7HKLwhkoiRTmWsd9W1AL920EVJVo3', 'isActive', 1, 'siswa', '0', '2847.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(809, '11.11.11.11', NULL, 'SISWA_JQWo', '6266', '0004056428', NULL, '$2y$10$9ZeHFHNy.ivpZvAjyWQiv.8PZeZ3siPIUDtPksVQmxDe51za2wTGG', 'SISWA', NULL, '9LNPCpVkuPJoPs0VvwQ6BQX6m5lygf8PjxQk1nOe', 'isActive', 1, 'siswa', '1000', '2852.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(810, '11.11.11.11', NULL, 'SISWA_OqWF', '3004', '0004054637', NULL, '$2y$10$2Q5h4s0QJTLnWwlWDaqmXuyxc4x2x4/4U3ytIwYzqTCwlG8FeCjyS', 'SISWA', NULL, 'wlFqjRmcsih0u0IFgMRa77OjTg740CUrTjqtPOs5', 'isActive', 1, 'siswa', '1000', '2848.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(811, '11.11.11.11', NULL, 'SISWA_j9D8', '2453', '0004077358', NULL, '$2y$10$0m6tAN4zU2LHOIQj36ggeudbdhaafuOOJiqdaQBU/pESDu8fS34JG', 'SISWA', NULL, '9p7s6jIkkOt3KadUiyoJONmT8qrP3A0RNPFUcoHw', 'isActive', 1, 'siswa', '7000', '2853.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(812, '11.11.11.11', NULL, 'SISWA_nbal', '1945', '0004054337', NULL, '$2y$10$cJ6o4dK7zEUdMSnNq60/Ze500Hbjiixxe/ISaClEuZbQhxdVtwWw6', 'SISWA', NULL, '5T7F7xXn3t3CBoGMTu3GMj14rsptVlOPlkumk0I7', 'isActive', 1, 'siswa', '2000', '2849.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(813, '11.11.11.11', NULL, 'SISWA_zlrm', '5229', '0003913086', NULL, '$2y$10$A8GuWSojlnsd1SO1IanPlOBkCJ4w47vjd0CZbc7hYRouYFZYblDre', 'SISWA', NULL, 'PCJ4G2xxClAaRzq0HK0cEZcZnmCmFkzSStsMWsSa', 'isActive', 1, 'siswa', '1000', '2921.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(814, '11.11.11.11', NULL, 'SISWA_lMH7', '2708', '0003934024', NULL, '$2y$10$ftuD3LXHzyF79MDQvlyf4uPJKicW7u.RMUdvbYvZWGf0xAkjAR2Vq', 'SISWA', NULL, 'tlDtn2siS1IsQspoRSDiZLcruI89drQRUhe51N9p', 'isActive', 1, 'siswa', '3000', '2748.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(815, '11.11.11.11', NULL, 'SISWA_53RG', '0808', '0003943033', NULL, '$2y$10$lqBxM.JIJgiPjCXx917WyOyHFRrayfXIloxcjZnodZm3/F6ThSKS.', 'SISWA', NULL, 'XxUwoqGSaz4Y6yaOZffMnbb0bNUt1pqc05Bt5JdX', 'isActive', 1, 'siswa', '0', '2928.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(816, '11.11.11.11', NULL, 'SISWA_XdVl', '2021', '0003913343', NULL, '$2y$10$yL5q54pA9f4YKtj7a7BAteU6aSDG72PzVYqoSrDi4KIKZMvi/M9Gy', 'SISWA', NULL, 'GY7TuYGlM7Bs2btTtEwxg1JaIfvgBQajIjISkiM4', 'isActive', 1, 'siswa', '0', '2920.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(817, '11.11.11.11', NULL, 'SISWA_1Ib2', '2410', '0003921059', NULL, '$2y$10$WsapQTKVWzL39C.ByS7skuqbb9d1PXImUapuvLg0eVFXHPZX1e3B.', 'SISWA', NULL, '3OrkB6nkACcx07DBcTFAFMFcAjrxfuJBhXdCQfc8', 'isActive', 1, 'siswa', '0', '2672.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(818, '11.11.11.11', NULL, 'SISWA_Y88K', '1979', '0003942721', NULL, '$2y$10$XVYaMeCaZ.51Mady.rVtC.0zMiqw42YbdAjQ8fjk1T7F/tNgZLmMq', 'SISWA', NULL, '1O0LJIHi2Wlh36TEqMwD32qjCTazcya9XHT87oAe', 'isActive', 1, 'siswa', '0', '2926.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(819, '11.11.11.11', NULL, 'SISWA_tapH', '1234', '0003927711', NULL, '$2y$10$PydEj7dxK.ZBIGjhj2Woguf8Kn36ZzFYbnK8U7i3UXrkN00Jc62KG', 'SISWA', NULL, 'TyqPcwOZFFJHSOMKFIbloik40mOUhgZ5zeZpHDEG', 'isActive', 1, 'siswa', '0', '2889.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(820, '11.11.11.11', NULL, 'SISWA_8Xaj', '2705', '0003944538', NULL, '$2y$10$1jmwTybonUyYpFpVy45Jb.Gc8Vkmso8dmGhP2o0CWvmWbLC5S/ZMu', 'SISWA', NULL, 'kIa0fr6tph6im7t2GSOh3EJtEiZlwNiHusmPwkXc', 'isActive', 1, 'siswa', '0', '2896.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(821, '11.11.11.11', NULL, 'SISWA_CgLw', '1234', '0003913601', NULL, '$2y$10$BO6NaKici9COcLGgCKQTh.WdQWDYSOfeldbrDfvjrf1xRZUZc8tPK', 'SISWA', NULL, 'AvhKhVxjmWIdcRMwSuOCp3aGihGfVxGOPIe7VpEr', 'isActive', 1, 'siswa', '0', '2922.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(822, '11.11.11.11', NULL, 'SISWA_Rz7o', '0456', '0003927415', NULL, '$2y$10$dClzSJX9EtPwv/ye0xdzJehAozUdKIWgZaqQZ3TtPWhdTfyh4gOuy', 'SISWA', NULL, '8vEGxEJdLWoPEfVQJjH8Q2UQ6FpIp97TvGbS9fJT', 'isActive', 1, 'siswa', '0', '2890.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(823, '11.11.11.11', NULL, 'SISWA_pMXW', '2329', '0003942409', NULL, '$2y$10$BeGiTxI7XC9k33KUqU4CouEB3OR2gfCMU4XC.OnT6ZhKmadn.Rqnu', 'SISWA', NULL, 'yfeR3KhbpfJzTD8mRC30SdBq5PJYM2GTGxvANz2G', 'isActive', 1, 'siswa', '0', '2927.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(824, '11.11.11.11', NULL, 'SISWA_oN0V', '9359', '0003944226', NULL, '$2y$10$zltbHYqPK4efZQfWxPmrLeZEzVuCEYxaDA6qerUO347TIO3NouwXm', 'SISWA', NULL, '0LVRuKPcmabGOFOsb211L1rA7LW304108tWtTII5', 'isActive', 1, 'siswa', '88000', '2898.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(825, '11.11.11.11', NULL, 'SISWA_rAGD', '1221', '0003913860', NULL, '$2y$10$GJuJst66Zjj0z96oCpBpReNxuwRMlORwg.inLWSHkfIoLE/ascabW', 'SISWA', NULL, 'Ay87QzqgQWk5FjQXtJGHVf7MJuZU3eEm8chfKDmO', 'isActive', 1, 'siswa', '0', '2923.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(826, '11.11.11.11', NULL, 'SISWA_KoFQ', '4556', '0003952190', NULL, '$2y$10$v544gZ7o9csR9dn4mP2Oju0LAr5Nwm/QUXmxXYHJ64KOPXjYTKPey', 'SISWA', NULL, 'DOlHxQfaKrgI7Hbxu53cxB3wk0VOVKQejHSxVuJ9', 'isActive', 1, 'siswa', '0', '2885.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(827, '11.11.11.11', NULL, 'SISWA_VrZF', '6767', '0003942097', NULL, '$2y$10$qES3CeNdRTmz8lX9fZp55usC0UO9ICSiWRi/lD6EWG3f5qQqQrHi6', 'SISWA', NULL, 'mHS6brlnItu7a24dqqyYpq1Hag0ISPj3bm0zLNdW', 'isActive', 1, 'siswa', '1000', '2930.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(828, '11.11.11.11', NULL, 'SISWA_uM9M', '1212', '0003969823', NULL, '$2y$10$MZVl0ov0tySsWk0oCdF3N.PozGFOglz9MUcKBqidpmbyiZqTC3..i', 'SISWA', NULL, '4hkVBb6kWZHJrSzBj1NIWBReysGatumHxmOPYkwN', 'isActive', 1, 'siswa', '5000', '2881.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(829, '11.11.11.11', NULL, 'SISWA_JRGn', '1323', '0003977099', NULL, '$2y$10$DCuE..8HHgwPX7EGPWvJkutrHxWTSNX0XSdT59gbJxL3AEIbg/A12', 'SISWA', NULL, 'OsYnftNVPC1f7wngYR3NpZV0MttLrtfo1BHvwR5w', 'isActive', 1, 'siswa', '0', '2914.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(830, '11.11.11.11', NULL, 'SISWA_V6nW', '2009', '0003976836', NULL, '$2y$10$Xdfl67BThWkQtEdo4Bds5OrdZxEPyT1pEX5FQ.apH.euByZC2VYg2', 'SISWA', NULL, 'sFEIdmpYEwF04Q7pbaBS5kbeFiGdKqRWXJwuXk0n', 'isActive', 1, 'siswa', '1000', '2919.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(831, '11.11.11.11', NULL, 'SISWA_lLax', '1104', '0003977361', NULL, '$2y$10$mkmvBl9MIYEbd6S4FzJaWeC7UlLlyD2n2KZcT3hcfFvoziL/47LZC', 'SISWA', NULL, 'VJcIKwqZr0FX5IhJjLFdfbP7dkXUlQRDMisDvOmD', 'isActive', 1, 'siswa', '1000', '2913.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(832, '11.11.11.11', NULL, 'SISWA_EPn1', '7685', '0003976571', NULL, '$2y$10$d2wilQC4HzwkQ1dQhqHBLOGhMuUiVwSVgpAa/B.jjF7suSPfPxPcS', 'SISWA', NULL, 'FYmjwSy6gIyFtSZwQRfK7q0LwJ4EcXgHgon4nB7u', 'isActive', 1, 'siswa', '0', '2918.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(833, '11.11.11.11', NULL, 'SISWA_w755', '1030', '0003952812', NULL, '$2y$10$kerz2Xf0Fu1SToy3uzQx8uZJ1MeNEeAZLPtPLzwBtEEfcUYwCJPFe', 'SISWA', NULL, 'CRWYeCpnBPNXTy47D5yWG6itsT4P2VKunegi4FCP', 'isActive', 1, 'siswa', '0', '2883.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(834, '11.11.11.11', NULL, 'SISWA_KR7M', '1234', '0003959559', NULL, '$2y$10$G95ouHFVPQ6oRW4vIS.qte8Xvv.3duB9IzbPk.6n28CMzsm44bIEK', 'SISWA', NULL, 'e7n5XlalINwncFpbxh4H5Iw2iMNQC0h2W7JSwtYq', 'isActive', 1, 'siswa', '0', '2910.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(835, '11.11.11.11', NULL, 'SISWA_mvTn', '1234', '0003969246', NULL, '$2y$10$fvVLEspfRfvdPU3qIxik9eUCQU84pB0lblGmiOAZmEqV6uhJcfhHC', 'SISWA', NULL, 'bCJOyVN7eD3XOFeS1LiC2zwDKs580kllfAU2VZrO', 'isActive', 1, 'siswa', '0', '2879.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(836, '11.11.11.11', NULL, 'SISWA_Rmuj', '1489', '0003976306', NULL, '$2y$10$vj5ckGdQI6J4MDIZuC5RBOx.2OKPxTnS8Lyg/f6yNvkkI4yAjWbm6', 'SISWA', NULL, 'akNxakYGCoKMdJE5FOPpfYyDFlew8YI8rcOBR4IN', 'isActive', 1, 'siswa', '29000', '2916.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(837, '11.11.11.11', NULL, 'SISWA_DtUS', '3108', '0003952501', NULL, '$2y$10$swtln09ys1heHOvUkE4mgelC1Ty2NLaKEoWAZl92QhVW46w1yddFe', 'SISWA', NULL, 'cJdTEudmmbtsiL4iu5weyIDifZwMxpNVwDfNEaMh', 'isActive', 1, 'siswa', '0', '2884.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(838, '11.11.11.11', NULL, 'SISWA_2gjg', '1234', '0003959844', NULL, '$2y$10$Asv7PBlWX1t99TPW3JHLheAHEIit4PyiER8vF1Tx1nnXBIOJWJbGC', 'SISWA', NULL, 'sqQMAx8SaK3PQOaHwDLLbrsrqQg9ugxGQDxESE0n', 'isActive', 1, 'siswa', '0', '2911.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(839, '11.11.11.11', NULL, 'SISWA_8EZU', '1529', '0003969535', NULL, '$2y$10$kB955kj1MAO19jxtcruRUuID2SYuOqoSu20budrPUcXxL6cXQkPKG', 'SISWA', NULL, 'tLjcJdVA0c7uDumcA8KjhpFfIlyKHzUK3T5dZgM7', 'isActive', 1, 'siswa', '0', '2878.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(840, '11.11.11.11', NULL, 'SISWA_KFFi', '2008', '0003976039', NULL, '$2y$10$KUL7c73jG5iikLiIcHDbue6UuD7f9A1v/QqDdVMFOMEoXnAd5dvbe', 'SISWA', NULL, '6iRr3OTPPVcpaGzY4ciTTnTOb4pU8zIEoICrrW3U', 'isActive', 1, 'siswa', '0', '2915.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(841, '11.11.11.11', NULL, 'SISWA_v6kT', '7298', '0003968957', NULL, '$2y$10$PDdxUNwaeqJLgGi3hVArfudH.HxeL5a5GgIFnZk6j2Boal.XHihf.', 'SISWA', NULL, '6xCBEafTOWOKJsJccAGThntXcQiRlFMVtRUkA35t', 'isActive', 1, 'siswa', '0', '2880.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(842, '11.11.11.11', NULL, 'SISWA_w6QG', '2132', '0003960129', NULL, '$2y$10$JfVfAjEPQfLma1iZ3qW3vOVpA3ebaNLvdmzi12f42ZDJKpPcq16wy', 'SISWA', NULL, '2rj1EHdffUaZsAkqmczIgGXoSCvlpTCmEV8cJf66', 'isActive', 1, 'siswa', '5000', '2912.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(843, '11.11.11.11', NULL, 'SISWA_pG7X', '1310', '0003953123', NULL, '$2y$10$dgoimM.Rx8brLeSCgISIReRSZ/5FIgiN1lQBwPB9M6OmpNM9Qg8FO', 'SISWA', NULL, 'vVHAThQlpiE2cAgSLMpdTqihaplbj2Zfsi5WmK9A', 'isActive', 1, 'siswa', '1000', '2886.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(844, '11.11.11.11', NULL, 'SISWA_1JiE', '1234', '0003975771', NULL, '$2y$10$UqcgOnqw7fRnXoqCkpLkUu8uLWnWFRIEltIWkixPq3/2Ptg/gKQiy', 'SISWA', NULL, 'DdWiqH9ylDJdqnjBDu4bDtyu6MKGG70qQVWFON0L', 'isActive', 1, 'siswa', '0', '2917.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(845, '11.11.11.11', NULL, 'SISWA_m3bN', '1234', '0003968667', NULL, '$2y$10$/2slEfn5jMMJmTxC.7sSte2wLAFnjqsxGEEHb66ygbI2u9j8TNt9C', 'SISWA', NULL, 'nvheT49hENedZP59UYJzMYLs0P8agBodcN6Lipgr', 'isActive', 1, 'siswa', '0', '2882.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(846, '11.11.11.11', NULL, 'SISWA_yha6', 'yona', '0003978627', NULL, '$2y$10$NBzdpShvEVqkuzyiqc1rdO8cnD00R.1DZkeo7jKkTV.LQSVsAQLry', 'SISWA', NULL, 'NJ2NA7tRoEsSSpGa100JbPCWKe45jn6F4MBroiU4', 'isActive', 1, 'siswa', '6000', '2902.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(847, '11.11.11.11', NULL, 'SISWA_rzli', '1234', '0003977332', NULL, '$2y$10$WbyVpgj7cIeXj8COlHOAtuoGh6rXbCsVf6lrKuLETynZJdFT/geOi', 'SISWA', NULL, 'YWSp06D57O2QXvc53hILciTM2LVaFdZwoDKe5gfg', 'isActive', 1, 'siswa', '0', '2907.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(848, '11.11.11.11', NULL, 'SISWA_RvYr', '0411', '0003953434', NULL, '$2y$10$UKga2XaNrxOpVEGQhaOqGOkbCg8G0BZ.LGigeUR7mD5ea6bxHRfJu', 'SISWA', NULL, '5AlbX3wvS0Fc753G3Eajs8PoKVdqlkefRbWQLUs8', 'isActive', 1, 'siswa', '0', '2887.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(849, '11.11.11.11', NULL, 'SISWA_td9s', '0427', '0003921872', NULL, '$2y$10$wjK3726v0MEcx10zt.nDC.E3idwHQMtdHjcwkyadjY55yVbyZWi7S', 'SISWA', NULL, 'fun8llhRuM7hlbcCp8nRWV6FtYpH2rBhHh6jHxWm', 'isActive', 1, 'siswa', '10000', '2834.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(850, '11.11.11.11', NULL, 'SISWA_jmev', '0208', '0003923289', NULL, '$2y$10$X52B8sNHksg09RCAj4ALueK2itCS0z2GeuKoAAT9LBEGgOgQaNikS', 'SISWA', NULL, 'NPwihACJAFdwwZUg85cZO42b5hOW4s6a989Xx3Nx', 'isActive', 1, 'siswa', '5000', '2827.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(851, '11.11.11.11', NULL, 'SISWA_yVYq', '0000', '0003978370', NULL, '$2y$10$NzZSH97H4rmPiOxoEYeZMexTBk.2CroVX66dmSSbTnuqrDBgc5pRy', 'SISWA', NULL, 'j1276PRL05NKUPReU9HjdKY7ktlQVFvhWRoquTTa', 'isActive', 1, 'siswa', '0', '2901.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(852, '11.11.11.11', NULL, 'SISWA_qgtK', '1234', '0003921602', NULL, '$2y$10$Pil0RYkUUV6TiH5kLC08a.GiXB1fbvZcyPlgT59463aNWgmiWTmJC', 'SISWA', NULL, 'kcYNSFJrQXv5IbZuoHAdOWzKIWJoRcabhR6uApOx', 'isActive', 1, 'siswa', '0', '2830.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(853, '11.11.11.11', NULL, 'SISWA_s69L', '7755', '0003952302', NULL, '$2y$10$gK8g9To.DhKFFd8.5YHPtuhqid4jSDYQhx6ceTfnL2L/TL7xM0Y8i', 'SISWA', NULL, 'w0FVKeUCvaKOOpDYrRk9cWOZJvAP6VT7cG3caVL0', 'isActive', 1, 'siswa', '0', '2905.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(854, '11.11.11.11', NULL, 'SISWA_YKeV', '1234', '0003922998', NULL, '$2y$10$mbF5pTmQFGreCJ/0hR7bKule3eEorccqDkcVLBQFwc/ooEfQOAmBa', 'SISWA', NULL, '9IYfM91aKsIMmNiHUg92du50DEwgYd7SNsDRmwH8', 'isActive', 1, 'siswa', '0', '2824.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(855, '11.11.11.11', NULL, 'SISWA_GVuy', '2727', '0003978112', NULL, '$2y$10$kamJBZ0FJ5Jn7g4O0SyF1OjcAflLVEIIygD4s/3IdbsJ7AufazjC2', 'SISWA', NULL, '3tCQLzg017ch882HF1Sp15kOYscyPEB4yxlT09fw', 'isActive', 1, 'siswa', '28000', '2900.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(856, '11.11.11.11', NULL, 'SISWA_5oVV', '1128', '0003922708', NULL, '$2y$10$sm1EOJJ9c8SdMjDbpOVHYuWQZHiSKtOTGbPJevxL/vD8GCFk.axo6', 'SISWA', NULL, 'ITpkmBHHWn76O50p5Wx8kvk2l1TyvEW44hz1kaIR', 'isActive', 1, 'siswa', '0', '2825.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(857, '11.11.11.11', NULL, 'SISWA_Mo4r', '2610', '0003921333', NULL, '$2y$10$.uc.TycZo/HqvtyaHflNJOvEk9wZIAjcfwWGCmggWJ7V6oWkKLVqu', 'SISWA', NULL, 'efEcS4oF2pdusWe3UQyzOj8uBxDFnjFZciQWFrjx', 'isActive', 1, 'siswa', '10000', '2831.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(858, '11.11.11.11', NULL, 'SISWA_RMy4', '9632', '0003951991', NULL, '$2y$10$Olv57ooU2a7QiQll7J9YE.Vhdk9JONd2jika6dxD0xSqamTMr5jX.', 'SISWA', NULL, '6z45XZLXMN3yv0x6p16fY0HtZXjAnGuqZSbVcCRo', 'isActive', 1, 'siswa', '0', '2906.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(859, '11.11.11.11', NULL, 'SISWA_pHG9', '1207', '0003922418', NULL, '$2y$10$vevHZnpDKMAtgxJNVqmP7eur3Xk6vOSGXL5EhZ4jqZBkYH/ujlf.m', 'SISWA', NULL, 'pHiJmWZncKlaRCyMLjKjzICtvjMvQYAYcFzKbZVu', 'isActive', 1, 'siswa', '1000', '2828.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(860, '11.11.11.11', NULL, 'SISWA_BpU9', '7559', '0003977853', NULL, '$2y$10$Zum0R2cK.u65OodQr0Gj8.cWPbFwndW8dgOwhW8CvGetXZ0z8hlQ6', 'SISWA', NULL, '3POngG6DRljrumaCZqa5WGjQbukUMy1UCBYFzalo', 'isActive', 1, 'siswa', '0', '2903.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(861, '11.11.11.11', NULL, 'SISWA_LY9a', '2714', '0003921065', NULL, '$2y$10$KBc9GqDd6JKHcusIFFOO2er9fyNYnyzsnbuBSiNCw4FCuUDTuqqGe', 'SISWA', NULL, 'gXHgKDYE2gd7r4FNt8dJqSHKr9zL46yylFCxw7h5', 'isActive', 1, 'siswa', '10000', '2832.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(862, '11.11.11.11', NULL, 'SISWA_oZqP', '1314', '0003922143', NULL, '$2y$10$xx2jKLCUnJ/BWzAvRJZzeumcr8A7B365MMNj6j6Nc4hzIOtKX7uuS', 'SISWA', NULL, '7nIwpYwJi5Jeg0qVSGCHw4UFSWnALIiG7A9MzQWF', 'isActive', 1, 'siswa', '0', '2829.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(863, '11.11.11.11', NULL, 'SISWA_OZ8D', '4629', '0003951680', NULL, '$2y$10$.av7V3LSegTxCKI0ObnUVObR44B2pkSMZhBXCR0KBz/SuDObFiMES', 'SISWA', NULL, 'xpccw7Twp3zvD2GBXC3lnuNLDHvIjmeY3rI1EWo4', 'isActive', 1, 'siswa', '0', '2908.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(864, '11.11.11.11', NULL, 'SISWA_joog', '1234', '0003920798', NULL, '$2y$10$5Og4gWsJGXrUyEuXvoaq9.wUrVfMCdRx3T43CivVADgnKpj8mtdCC', 'SISWA', NULL, '3iZgWkkwUBK37BbWSdB1o7C3Wirw3RnQyYb1yxlm', 'isActive', 1, 'siswa', '76000', '2833.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(865, '11.11.11.11', NULL, 'SISWA_zbaX', '1125', '0003977593', NULL, '$2y$10$0chcxi11AOtfI/WejNQ3Eu.gBOntWCgKxeNQ3YOGDZz8VP9ZCI5ue', 'SISWA', NULL, '66yvyoEtYsLOwYiO5W7zBXFq6YhD5vhuaxcXr9jx', 'isActive', 1, 'siswa', '64000', '2904.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(866, '11.11.11.11', NULL, 'SISWA_75eT', '2429', '0003953664', NULL, '$2y$10$XgDlhiZS1VrrsAcje0OoRO92X1xf641vy6yF12diaFhEQheRH7.cK', 'SISWA', NULL, 'Z73xdRw9ZBF4qArSKo83RvYrOFrQg9SJ8i2Z7ukZ', 'isActive', 1, 'siswa', '0', '2813.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(867, '11.11.11.11', NULL, 'SISWA_43Wo', 'tqpa', '0003955215', NULL, '$2y$10$4KOBxQswGMef/LHcS8HkXezxs9iA.ZDFADaByI83FmBbxMB25NyFK', 'SISWA', NULL, 'A4btku8FoYDC5BHlFDucuKvtaZ5hn2InrhOFA98f', 'isActive', 1, 'siswa', '0', '2823.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(868, '11.11.11.11', NULL, 'SISWA_qDrz', 'rbak', '0003951369', NULL, '$2y$10$LdCU5YGYUI0XxQUmU.bL3ugoR55WtFltFegoUbvFgNSfx4IbIoCnG', 'SISWA', NULL, 'Y6XlkpzSJZlLTUqJRYt5MszKQ2aCn6m3Y34Sq6zG', 'isActive', 1, 'siswa', '0', '2909.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(869, '11.11.11.11', NULL, 'SISWA_D5QD', '1234', '0003953975', NULL, '$2y$10$0dDl2aSwpv9cyVD0vHQCHesrx21k9rNGVmaf6eYp6RXVnniXBc5EW', 'SISWA', NULL, 'UcC9k0KtS3Q0uoY9c9Jt45IM6icmnORcdM4dM5a7', 'isActive', 1, 'siswa', '0', '2812.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(870, '11.11.11.11', NULL, 'SISWA_woIL', '1234', '0003955525', NULL, '$2y$10$sMxeWhF.LiQWiPhXicUEqO3FSmKNvkNJFqKXMypA2GfATGa0Rbcaq', 'SISWA', NULL, 'JAo5KrsXyihvhcI7zH2msEEr61G6rIg4BPeNIa0P', 'isActive', 1, 'siswa', '0', '2819.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(871, '11.11.11.11', NULL, 'SISWA_rESl', '0711', '0003923575', NULL, '$2y$10$aJ6dZcTLZFZSMYLnyj53mu6pKYyuGha55zdU8HXmnM9Sqnr/HqTa2', 'SISWA', NULL, '4f4I8vBDMG68cfVwfXREj66cgBrLlSuJ5yHIGKAs', 'isActive', 1, 'siswa', '0', '2668.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(872, '11.11.11.11', NULL, 'SISWA_t4Xr', '1234', '0003954285', NULL, '$2y$10$ceau4sM2pHqSgAC6CjX7CuqjcUoRRami4KW1uix2teH9JRWz95DvW', 'SISWA', NULL, '70QYXa9kcGMNsN2XxKUly1kQ789sUMmrwU0LC3WZ', 'isActive', 1, 'siswa', '0', '2811.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(873, '11.11.11.11', NULL, 'SISWA_XaV3', '1324', '0003921866', NULL, '$2y$10$DNVIYOgPwerbG2nPkWd.QuScMC8pGN28yaETOp8/CJGuzYK9DHqW.', 'SISWA', NULL, 'aYIiiMOYiOqCW1sMFgiWQqL5r1v27gGwUfgruLjL', 'isActive', 1, 'siswa', '6000', '2675.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(874, '11.11.11.11', NULL, 'SISWA_NZEr', '1234', '0003958913', NULL, '$2y$10$K2WI0LzQUoWaAi/msGlABOlhSrfd532XvxEcbNIoTT35pvbRslqz2', 'SISWA', NULL, '1rgN1VDkRC11kfQBhdsfR3oYoQLieSrtU1I0qMyh', 'isActive', 1, 'siswa', '0', '2817.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(875, '11.11.11.11', NULL, 'SISWA_tYAY', '0813', '0003954595', NULL, '$2y$10$MIeycj.yxlf0GwQ7kxOhBOuvFq6zOOD9NnMIqyx3LMb3JcZHWe2IC', 'SISWA', NULL, 'BD7X6O3Ot7yaufkHoHfVObRB4799EAMy1Xvu9eb9', 'isActive', 1, 'siswa', '5000', '2810.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(876, '11.11.11.11', NULL, 'SISWA_OJAA', '1307', '0003923283', NULL, '$2y$10$SNQkzfQMdYAFLfo.Dlf9TuEsyY/W9HxkvnlY7jb7E7/8FJuN6jqUi', 'SISWA', NULL, 'trvm3mjcaeD8MArFCfsWuxtRRByvVGJDTThfgwJI', 'isActive', 1, 'siswa', '10000', '2666.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(877, '11.11.11.11', NULL, 'SISWA_jMnJ', '1234', '0003958608', NULL, '$2y$10$3dGp9Hv0N2BghtNSX16qqeqRfTwbVy5YnOsOp3IhdoCUvLuzNSy12', 'SISWA', NULL, 'McJY8cgZMBDxy2E0p0K6WflGlfyypA2212a3Wwbq', 'isActive', 1, 'siswa', '0', '2818.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(878, '11.11.11.11', NULL, 'SISWA_stTl', '9114', '0003954905', NULL, '$2y$10$Xf6ZkuoUJa/Vq500LO.Rp.e4M/Hx0gMzqv8N7TSNlMtkanRyUkl8G', 'SISWA', NULL, '75aj8LWjkZ2343XrDlODA9zTEXLHPMgaoAXtotcw', 'isActive', 1, 'siswa', '0', '2815.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(879, '11.11.11.11', NULL, 'SISWA_qtua', 'saye', '0003958302', NULL, '$2y$10$6OWxyXBSfmblBvp2.SduHO1wZmnp3BuZivs7r.1AZJ/Htl2OEdgku', 'SISWA', NULL, 'LyaCJXVgVunUKCgDvxNE5sJjGzZgwc7khlPDGgaR', 'isActive', 1, 'siswa', '1000', '2821.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(880, '11.11.11.11', NULL, 'SISWA_EISC', '1234', '0003925635', NULL, '$2y$10$S611OHN/c6cI/9s93CtXKuE6eCWwCYMkE3LPfrr0tPhwe5hwafpLC', 'SISWA', NULL, 'Q97YAWSRqjRQMd0ENinFA4yudvKuxfJiyeZKkHms', 'isActive', 1, 'siswa', '0', '2674.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(881, '11.11.11.11', NULL, 'SISWA_mK1f', '3938', '0003914120', NULL, '$2y$10$VNHDjxRwFhscKgi/otFlGe0adwbxwop275DJNynuseJMg19tCwwTu', 'SISWA', NULL, 'ZpcGa0FUZ3JcH3z2kfzQQkwMgV9pQxKxcrTGHPbB', 'isActive', 1, 'siswa', '7000', '2929.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(882, '11.11.11.11', NULL, 'SISWA_RLbq', '1011', '0003922992', NULL, '$2y$10$8q52wy3GjoOvTqBzg58ahus/FpA9fU96nv9FG88WH3FZ3R8/C6hGS', 'SISWA', NULL, 'w5w7arJRTa4ZlUvqzpCAsbipv3e6wooOHydNJnBY', 'isActive', 1, 'siswa', '0', '2665.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(883, '11.11.11.11', NULL, 'SISWA_vuhb', '2110', '0003912830', NULL, '$2y$10$2eSm0.BOfzGTwuykzvBd6.OMeri7CzSvSnYxSjezU.pHUTtr6xH1K', 'SISWA', NULL, 'gdyxW8GrWRi8XAiH5qLY5ZVvbMnh73F7rvv2pQ4m', 'isActive', 1, 'siswa', '0', '2924.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(884, '11.11.11.11', NULL, 'SISWA_0bGo', '1234', '0003920429', NULL, '$2y$10$gAhDyQJdKvGlojEN/vVsSOZNB7f4xxoB8bR0zD49yyjKx.BDRoxfS', 'SISWA', NULL, '6Ny0V7obzwqtcLxlCMPzLVByQnLhLG469BE9ki27', 'isActive', 1, 'siswa', '0', '2789.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(885, '11.11.11.11', NULL, 'SISWA_jObU', '1234', '0003921327', NULL, '$2y$10$DjdBvonqYQ3IyW2jZHl.z.eVo2xagMSQfG2e2lcqt6VnvqfJ7YglK', 'SISWA', NULL, 'gKrkQGEmLwQNNj7MfedXI1zNJ5KQrY8zoVgkC05q', 'isActive', 1, 'siswa', '0', '2670.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(886, '11.11.11.11', NULL, 'SISWA_6BcQ', '2308', '0003920963', NULL, '$2y$10$4C9CKJ86eCkbyhw5x4lgje4Gmj7AnAuUHGZpm2EgkUAgIxyawoUmC', 'SISWA', NULL, 'DoTnp51xvFJVKYF15hJZjxkjFKIVnESCPkPZNViF', 'isActive', 1, 'siswa', '0', '2797.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(887, '11.11.11.11', NULL, 'SISWA_vpaT', '1234', '0003922702', NULL, '$2y$10$taXktRfLcvIWg6zlgSQc2OYcV/nMqtOBj/uhfVqKZmKXrJd6CNOSW', 'SISWA', NULL, 'gmV94hUR4VvzioSoCnFTSFf7PiIPuPGDfMUvT5NU', 'isActive', 1, 'siswa', '0', '2663.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(888, '11.11.11.11', NULL, 'SISWA_5lhv', '1234', '0003920695', NULL, '$2y$10$ll0qi0wmvRhQ/8vOTdgmRu1Z36aokHuYg52SKP8QZpEHj3x/4Yyry', 'SISWA', NULL, 'BsejPwdyM3QlKDRn06JLsMrT0oW303BAnBq6YscQ', 'isActive', 1, 'siswa', '0', '2788.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(889, '11.11.11.11', NULL, 'SISWA_bHmP', '1234', '0003920696', NULL, '$2y$10$eo73WXIjysc/fZMEdMtNVOoyqlfvEwA9ZmCunY0IOmjJiiZNklrwW', 'SISWA', NULL, '9YqhoOpYxJrpiHCdoamlIiY3EA24MqpnjPxdzA3Y', 'isActive', 1, 'siswa', '0', '2792.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(890, '11.11.11.11', NULL, 'SISWA_k0P1', '1234', '0003922412', NULL, '$2y$10$Xhxv0vkRiIWhpRuffWDGUuzn8CZhSTEK2KEcBIVeeGNZIriyUXlAS', 'SISWA', NULL, 'ihaP9P4menoleJtxJR7MMxQ5WDowbeUk2p9A1b8I', 'isActive', 1, 'siswa', '0', '2662.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(891, '11.11.11.11', NULL, 'SISWA_kk5i', '1230', '0003920430', NULL, '$2y$10$2s7ffnrRqNOS0U.0qtgvou2ZdbhkwAX9FuAb7vsKs2dgRf5W61nie', 'SISWA', NULL, 'tQGNVF5DuD1qSXFhYpc0hzK0ZR6gC8mCvZqXj8kD', 'isActive', 1, 'siswa', '4000', '2790.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(892, '11.11.11.11', NULL, 'SISWA_emP9', '0407', '0003922137', NULL, '$2y$10$W8tslOa9JwAjcEr1IXS5.OEYB0V6rKWavRvYu0cypznlyUtooGSle', 'SISWA', NULL, 'mXjlPdIQ94rLC6IVdOlftuu5Pp8Pipw5YeWIEELj', 'isActive', 1, 'siswa', '0', '2688.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(893, '11.11.11.11', NULL, 'SISWA_rP42', '1227', '0003920962', NULL, '$2y$10$LBa1sQURXtbMJJDcwBXwSu7.WVj6xROVC9QHXLS.Ue6ENlyeC3UFq', 'SISWA', NULL, '5MmmUR9mrgoOv1oRtNmXAIBJekj8G0r7kfu8WPsA', 'isActive', 1, 'siswa', '0', '2787.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(894, '11.11.11.11', NULL, 'SISWA_6QOC', '2908', '0003935197', NULL, '$2y$10$BB925Q3fLaVPXrPUTI61VOFr8n0AMfZcPoOCk5Isy9Ww6JFqAry3e', 'SISWA', NULL, 'fjR8tWmEEJG1tKYX41nbbWmKeJEuKdpNva4d4tQ1', 'isActive', 1, 'siswa', '0', '2749.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(895, '11.11.11.11', NULL, 'SISWA_OnEn', '1234', '0003921229', NULL, '$2y$10$AWBwua6i037Kmng5I8JP.OxzXoNZEcQLHR04yag078WQzawYu0p/m', 'SISWA', NULL, 'KtBEO8ebtnlXBs2thHyOhSusa2wPzzPX17INdb28', 'isActive', 1, 'siswa', '0', '2785.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(896, '11.11.11.11', NULL, 'SISWA_awQt', '0519', '0003935507', NULL, '$2y$10$T5C1mG/ge21t9q1hIlcaj.JpaHViGrjISMLlBY0D447BlW3Us6F6e', 'SISWA', NULL, '8AOSTnRX6fbNBVdw3lP0wYl6Z54uFrgkX1hfu66W', 'isActive', 1, 'siswa', '0', '2750.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(897, '11.11.11.11', NULL, 'SISWA_Htzq', '2008', '0003920161', NULL, '$2y$10$41kYpcsCESkeHWntPfAwBO8vIbaAHNcbY9wBACt2ZaUoNCUVH/cVS', 'SISWA', NULL, 'kC3xl2RH7hTGDoV0UeSyfEAP1WY4YjZ18g2sKXyG', 'isActive', 1, 'siswa', '0', '2793.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(898, '11.11.11.11', NULL, 'SISWA_Fk2m', '2314', '0003921497', NULL, '$2y$10$k4ZgeflzC8uF0s773cvHBu0nFwCDGo4HoEsC.d9HwX42PF9N5x4jG', 'SISWA', NULL, 'hDQGTPZlvUGY0oDbXSlb8FemclJfhkxPJ1kShbwx', 'isActive', 1, 'siswa', '0', '2786.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(899, '11.11.11.11', NULL, 'SISWA_ABO1', '2204', '0003934897', NULL, '$2y$10$3TrmIZqNFrFUhcoiP.HK0u.x8t22ocmjhQFJZQ60zAXdWT1KZt99a', 'SISWA', NULL, 'Att0vQBhSsTJEhwam5oWjYrk5y7PrVIJzrtmJl3z', 'isActive', 1, 'siswa', '16000', '2746.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(900, '11.11.11.11', NULL, 'SISWA_8hXm', '4181', '0003919880', NULL, '$2y$10$yWEVqUwBwYcZ1DK/4bLlwetH8r87RmN2PdXnNR002b1FsLIo.Cr1S', 'SISWA', NULL, 'iKWBlIJGrpNXqVUuD6g8qeb23Ma8bqytiObkMsnf', 'isActive', 1, 'siswa', '0', '2795.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(901, '11.11.11.11', NULL, 'SISWA_ezt6', '1312', '0003935817', NULL, '$2y$10$yh1pg5/s7n3jYO.hgxbg0OPUpiziibhbCf/CUQXF00t/eqZA7dBdy', 'SISWA', NULL, 'Qh0gJOaDkrwdinP0a1xf58hCHu1DKhPpxebAlrNT', 'isActive', 1, 'siswa', '10000', '2751.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(902, '11.11.11.11', NULL, 'SISWA_952L', '1210', '0003927119', NULL, '$2y$10$eua24WRHzYOi775yciEBq.nYBtzXcS8NTqYu/wK71xcuNhkgu9AtS', 'SISWA', NULL, 'fCAEt6odvVFnAuyTFVAeE9qPNwNaStEtmqNEDfqi', 'isActive', 1, 'siswa', '13000', '2899.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(903, '11.11.11.11', NULL, 'SISWA_Vh0e', '8522', '0003928603', NULL, '$2y$10$41av5h4A2mvvR./llGDLBuZNAMzmhEX8AYXhCYz2rOwFtV.kX7RsG', 'SISWA', NULL, 'AuWGS7kkcW0WDB4lefdsqq5KQNWs20xAU2TtDrwh', 'isActive', 1, 'siswa', '0', '2892.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(904, '11.11.11.11', NULL, 'SISWA_AiLL', '1512', '0003934606', NULL, '$2y$10$24Ynbhzbpf1g4CL68W5g/uGm2WQKJv7XE8xEVKC38qQjMLbKypVX6', 'SISWA', NULL, 'iuDLxIdeEiMjyM9TGmekPIgkJtzRd3sJw6SyXKOH', 'isActive', 1, 'siswa', '6000', '2745.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(905, '11.11.11.11', NULL, 'SISWA_vr3t', '2517', '0003945162', NULL, '$2y$10$Y3lYe2Vybb0oTkIzOXB2KOp80moYJx9S6K./UCkp9fi4M0kjVR5eS', 'SISWA', NULL, 'PpmKPeb1T3IVbsXgEBPA8Z0LSO5ald1L6s8KsYWr', 'isActive', 1, 'siswa', '0', '2893.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(906, '11.11.11.11', NULL, 'SISWA_q6yN', '1234', '0003909176', NULL, '$2y$10$IadnEI/W8zHLebfBLBksleBWhDWRbPFsOtvdya.bWErnshShVrchq', 'SISWA', NULL, 'EFcylNjlWnjqxDPflxOCEZSRASrF2d96aqdMh12q', 'isActive', 1, 'siswa', '4000', '2752.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(907, '11.11.11.11', NULL, 'SISWA_PN51', '2229', '0003928305', NULL, '$2y$10$g9qMMRxSQpJHKxxqzSZn5eE8wd1mmJQJsshWnQ5br9YQkTpHFZk6K', 'SISWA', NULL, 'S56PNUkbx1DdKVziWTxoEuloYEKOAOsTATwqT3E8', 'isActive', 1, 'siswa', '0', '2891.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(908, '11.11.11.11', NULL, 'SISWA_0279', '1011', '0003934315', NULL, '$2y$10$uzoEQZ1zt06tDqAqlyD4se6S9ydEU7LNYjzReHdZjFafowZ4SkEP2', 'SISWA', NULL, 'uGsl6uHNxNJ3IK8ApmpYMSZrlWoW7MooSEV2zWh4', 'isActive', 1, 'siswa', '0', '2747.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(909, '11.11.11.11', NULL, 'SISWA_dkzY', '2610', '0003909393', NULL, '$2y$10$lkd4y3A2UwunkHEWZS6Cl.yOQ8Wzia.cT87ytwDXDScugKNStBp02', 'SISWA', NULL, 'Nf1LyyaK7Np7xC3Ea0nQPOAI9Wab8Xh46NYu3MuE', 'isActive', 1, 'siswa', '4000', '2753.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(910, '11.11.11.11', NULL, 'SISWA_HwoH', '9215', '0003909610', NULL, '$2y$10$AX933JUJ0hzhCSVkePc0yOmQaPSt8X5gmh2mzREs/sv6bqZNbGF1m', 'SISWA', NULL, 'cloEaSFSFDLpuoRzMxEvg9mQuDKJFJoQOBr8qR8b', 'isActive', 1, 'siswa', '0', '2754.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(911, '11.11.11.11', NULL, 'SISWA_ZDsz', '2121', '0003928008', NULL, '$2y$10$LmimCUsBKvq6zknzZ6yPyuGBJAJYxRtE64OBPCltOu3vRnU5KGXPi', 'SISWA', NULL, 'NwRlB5efEPxoygJ8rh1J40ge3C0cGU9IAnnoRyA0', 'isActive', 1, 'siswa', '0', '2888.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(912, '11.11.11.11', NULL, 'SISWA_RI1o', '7852', '0003944850', NULL, '$2y$10$mqzGrx1OIaMZror.1Ih8nOPV1mJC14yhIdl1Q.PLOl3dEk89nshrm', 'SISWA', NULL, '3Pjvc7T7nrqGTbf0hs51jhiNFeTJIz4JSD4bL49z', 'isActive', 1, 'siswa', '0', '2894.jpg', '2022-07-15 09:35:22', '2022-07-15 09:35:22'),
(920, '11.11.11.11', NULL, 'SISWA_Jxul', '2620', '0003933931', NULL, '$2y$10$LSRT5tM/MKfflxdly3Sd3.PBuqjOMaPkTahi1NuQgib13VGW67Sci', 'SISWA', NULL, 'dKaowlPlHhuqMfIhaaClNF8hLNuzCvqd9cAFoJBd', 'isActive', 1, 'siswa', '0', '2736.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(921, '11.11.11.11', NULL, 'SISWA_f8L5', '2317', '0003905507', NULL, '$2y$10$l6Guj3Pvx27zWK5SkuUkzevuI8dFckT5XeEDqnNGqxpjlmOsBw26G', 'SISWA', NULL, 'jZIr1VX7VOOdHChfY59WZPhHx44NLVTUNTP8aenE', 'isActive', 1, 'siswa', '11000', '0494.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(922, '11.11.11.11', NULL, 'SISWA_ZzgD', '1234', '0003972906', NULL, '$2y$10$h4CJs0FH2Pk9FUMoMlPMDO3CKwmSkYYsdf/9zasBUkgyU55VCURFG', 'SISWA', NULL, '6XlfePvcCFAsjb4JDmdPaKi3drsSyrxsisP6HgEc', 'isActive', 1, 'siswa', '0', '0335.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(923, '11.11.11.11', NULL, 'SISWA_EwmU', '2004', '0003979390', NULL, '$2y$10$HrOeAQ.ZMEzpZdsOhJVmjexDjv/HAKwd08UJRwrcokwL1gVsr3BsK', 'SISWA', NULL, 'UYrA51ct2qOj62pPinSjfGGjuHHItTfb9IYnoFoe', 'isActive', 1, 'siswa', '1000', '0411.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(924, '11.11.11.11', NULL, 'SISWA_0mRI', '1234', '0003924635', NULL, '$2y$10$FVb7XC0.YIlUweXgDXV96OuVC8jkkB7i9JyW0XvOgfOiUBr8xlWii', 'SISWA', NULL, 'KBdIqdIIcFTwremlwGj5lYCFXanjm3ZcKNtZlhIf', 'isActive', 1, 'siswa', '0', '0379.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(925, '11.11.11.11', NULL, 'SISWA_oa3g', '0000', '0003980878', NULL, '$2y$10$BOpEIfy1zDgDG9n3DcNITORr.d3Qc5Q2TkZzOTglsudRwxEe5qeEC', 'SISWA', NULL, 'Bn2Tbgd4tobVb6MWoeuoNXL3HCK83tcIX4Aa6rp1', 'isActive', 1, 'siswa', '1000', '0406.jpg', '2022-07-15 09:35:20', '2022-07-15 09:35:20'),
(926, '11.11.11.11', NULL, 'SISWA_2axD', '2009', '0003906220', NULL, '$2y$10$3J1kmPoUbokvkrbe1.S5M.95WfxZbDC1XXgYFkeWzGSGUPfNMmMFi', 'SISWA', NULL, '2ROi0ZVfcGpS8paNHl6MTwnP0lR1QoyJjGTVOrbZ', 'isActive', 1, 'siswa', '0', '2733.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(927, '11.11.11.11', NULL, 'SISWA_uZdt', '1700', '0004017099', NULL, '$2y$10$RS2r5XKx1OHpo9zsfTXBXeTSKiL2mTuXBYmq3XRbOn8PxRPzYHJdO', 'SISWA', NULL, 'YEY3LTK0OWLQFPQG8px27wTTOlPmQQ8b4hdBmgY1', 'isActive', 1, 'siswa', '0', '2714.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(928, '11.11.11.11', NULL, 'SISWA_vPot', '9571', '0003906431', NULL, '$2y$10$X3gV.dXuevV7f3cARaOE7OrtSF52YQFVAGFwl0SDFLn8it51xQziG', 'SISWA', NULL, 'Pja6pzs7WrOyI5acUeKyl6VmssamlnBL88J0A551', 'isActive', 1, 'siswa', '0', '2873.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(929, '11.11.11.11', NULL, 'SISWA_fE1R', '1234', '0003905801', NULL, '$2y$10$AsucK5i5Px9LciWctv9tiOxIZSXa11hZIx2eBZqtfI0vVCB6cYowm', 'SISWA', NULL, 'uPGENd3kBFP6pqbNmHNppP6JFmtw3OBnl3Ig0spZ', 'isActive', 1, 'siswa', '6000', '2764.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21'),
(930, '11.11.11.11', NULL, 'SISWA_oBGf', '0212', '0003906010', NULL, '$2y$10$8hAACaR8wEHlWjwwxfHWRuYdCxuJD4aHgcG8a4G3RQ8ggJaABWzsO', 'SISWA', NULL, 'KJDzmEkJa6P3fQKpZ2u7tMYAm75euBzpNOHj2ntD', 'isActive', 1, 'siswa', '5000', '2713.jpg', '2022-07-15 09:35:21', '2022-07-15 09:35:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
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
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

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
-- Indeks untuk tabel `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
