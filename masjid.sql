-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 02:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donaturs`
--

CREATE TABLE `donaturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jamaah` bigint(20) UNSIGNED NOT NULL,
  `nama_donatur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nominal_donasi` varchar(15) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donaturs`
--

INSERT INTO `donaturs` (`id`, `id_jamaah`, `nama_donatur`, `alamat`, `nominal_donasi`, `metode_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Naufal', 'Malang', '200000', 'Cash', '2024-05-25 04:18:23', '2024-05-25 04:18:23'),
(2, 2, 'Naufal', 'banyuwangi', '30000', 'Qris', '2024-05-25 05:03:51', '2024-05-25 05:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imams`
--

CREATE TABLE `imams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_imam` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `íd` bigint(20) UNSIGNED NOT NULL,
  `id_imam` bigint(20) UNSIGNED NOT NULL,
  `macam_sholat` varchar(255) NOT NULL,
  `waktu_masuk_sholat` time NOT NULL,
  `waktu_habis_sholat` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jamaahs`
--

CREATE TABLE `jamaahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jamaah` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jamaahs`
--

INSERT INTO `jamaahs` (`id`, `nama_jamaah`, `alamat`, `jk`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Agus', 'Malang', 'Laki-Laki', '0916382623', '2024-05-25 03:19:11', '2024-05-25 03:21:12'),
(2, 'apip', 'banyuwangi', 'Pria', '081111111', '2024-05-25 04:54:10', '2024-05-25 04:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_25_094027_create_jamaahs_table', 2),
(5, '2024_05_25_094159_create_pernikahans_table', 3),
(6, '2024_05_25_094614_create_pernikahans_table', 4),
(7, '2024_05_25_094702_create_donaturs_table', 5),
(8, '2024_05_25_094853_create_takmirs_table', 6),
(9, '2024_05_25_094943_create_ziswafs_table', 7),
(10, '2024_05_25_095124_create_imams_table', 8),
(11, '2024_05_25_095212_create_jadwals_table', 9),
(12, '2024_05_25_095252_create_penggunas_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_imam` bigint(20) UNSIGNED NOT NULL,
  `id_jamaah` bigint(20) UNSIGNED NOT NULL,
  `id_donatur` bigint(20) UNSIGNED NOT NULL,
  `id_takmir` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pernikahans`
--

CREATE TABLE `pernikahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jamaah` bigint(20) UNSIGNED NOT NULL,
  `nik_ktp_pria` varchar(16) NOT NULL,
  `nik_ktp_wanita` varchar(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pernikahans`
--

INSERT INTO `pernikahans` (`id`, `id_jamaah`, `nik_ktp_pria`, `nik_ktp_wanita`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, '286521', '754357', 'Malang', '2024-05-25 03:53:15', '2024-05-25 03:53:15'),
(2, 2, '35109793740293', '35109090243846', 'banyuwangi', '2024-05-25 04:38:07', '2024-05-25 05:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PGyQJeiSBnioETZBiglc9OPOIRKgw1Xwmf7MSc8U', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWhCbDJoZ1JBQVdZWXJwQ2tMMXMyY3dia3RCdFVjWnFtMGhkNWJ0YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZGYtRG9uYXR1ciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716639067);

-- --------------------------------------------------------

--
-- Table structure for table `takmirs`
--

CREATE TABLE `takmirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_takmir` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ziswafs`
--

CREATE TABLE `ziswafs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_donatur` bigint(20) UNSIGNED NOT NULL,
  `id_takmir` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nominal_donasi` int(11) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `kas_masuk` int(11) NOT NULL,
  `kas_keluar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `donaturs`
--
ALTER TABLE `donaturs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donaturs_id_jamaah_foreign` (`id_jamaah`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `imams`
--
ALTER TABLE `imams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`íd`),
  ADD KEY `jadwals_id_imam_foreign` (`id_imam`);

--
-- Indexes for table `jamaahs`
--
ALTER TABLE `jamaahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggunas_id_imam_foreign` (`id_imam`),
  ADD KEY `penggunas_id_jamaah_foreign` (`id_jamaah`),
  ADD KEY `penggunas_id_donatur_foreign` (`id_donatur`),
  ADD KEY `penggunas_id_takmir_foreign` (`id_takmir`);

--
-- Indexes for table `pernikahans`
--
ALTER TABLE `pernikahans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pernikahans_id_jamaah_foreign` (`id_jamaah`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `takmirs`
--
ALTER TABLE `takmirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ziswafs`
--
ALTER TABLE `ziswafs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ziswafs_id_donatur_foreign` (`id_donatur`),
  ADD KEY `ziswafs_id_takmir_foreign` (`id_takmir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donaturs`
--
ALTER TABLE `donaturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imams`
--
ALTER TABLE `imams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `íd` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jamaahs`
--
ALTER TABLE `jamaahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pernikahans`
--
ALTER TABLE `pernikahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `takmirs`
--
ALTER TABLE `takmirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ziswafs`
--
ALTER TABLE `ziswafs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donaturs`
--
ALTER TABLE `donaturs`
  ADD CONSTRAINT `donaturs_id_jamaah_foreign` FOREIGN KEY (`id_jamaah`) REFERENCES `jamaahs` (`id`);

--
-- Constraints for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_id_imam_foreign` FOREIGN KEY (`id_imam`) REFERENCES `imams` (`id`);

--
-- Constraints for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD CONSTRAINT `penggunas_id_donatur_foreign` FOREIGN KEY (`id_donatur`) REFERENCES `donaturs` (`id`),
  ADD CONSTRAINT `penggunas_id_imam_foreign` FOREIGN KEY (`id_imam`) REFERENCES `imams` (`id`),
  ADD CONSTRAINT `penggunas_id_jamaah_foreign` FOREIGN KEY (`id_jamaah`) REFERENCES `jamaahs` (`id`),
  ADD CONSTRAINT `penggunas_id_takmir_foreign` FOREIGN KEY (`id_takmir`) REFERENCES `takmirs` (`id`);

--
-- Constraints for table `pernikahans`
--
ALTER TABLE `pernikahans`
  ADD CONSTRAINT `pernikahans_id_jamaah_foreign` FOREIGN KEY (`id_jamaah`) REFERENCES `jamaahs` (`id`);

--
-- Constraints for table `ziswafs`
--
ALTER TABLE `ziswafs`
  ADD CONSTRAINT `ziswafs_id_donatur_foreign` FOREIGN KEY (`id_donatur`) REFERENCES `donaturs` (`id`),
  ADD CONSTRAINT `ziswafs_id_takmir_foreign` FOREIGN KEY (`id_takmir`) REFERENCES `takmirs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
