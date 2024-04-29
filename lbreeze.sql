-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.7.1-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table lbreeze.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table lbreeze.indikator_kinerjas
CREATE TABLE IF NOT EXISTS `indikator_kinerjas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kinerja_utama_id` bigint(20) unsigned NOT NULL,
  `indikator_kinerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indikator_kinerjas_kinerja_utama_id_foreign` (`kinerja_utama_id`),
  CONSTRAINT `indikator_kinerjas_kinerja_utama_id_foreign` FOREIGN KEY (`kinerja_utama_id`) REFERENCES `kinerja_utamas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.indikator_kinerjas: ~9 rows (approximately)
/*!40000 ALTER TABLE `indikator_kinerjas` DISABLE KEYS */;
INSERT INTO `indikator_kinerjas` (`id`, `kinerja_utama_id`, `indikator_kinerja`, `target`, `realisasi`, `created_at`, `updated_at`) VALUES
	(4, 44, 'Persentase Kepemilikan KTP-EL', '99', '50', '2024-04-19 09:08:35', '2024-04-19 09:08:35'),
	(5, 44, 'Persentase Kepemilikan Kartu Identitas Anak (KIA)', '79.34', '45', '2024-04-19 09:10:23', '2024-04-19 09:10:23'),
	(6, 45, 'Persentase Kepemilikan Akta Kelahiran', '60', '40', '2024-04-19 09:10:54', '2024-04-19 09:10:54'),
	(7, 45, 'Persentase Kepemilikan Akta Kematian', '100', '35', '2024-04-19 09:11:21', '2024-04-19 09:11:21'),
	(8, 45, 'Persentase Kepemilikan Akta Perkawinan', '54', '30', '2024-04-19 09:11:37', '2024-04-19 09:11:37'),
	(9, 46, 'Persentase Data Kependudukan yang Dimanfaatkan OPD dan Kecamatan', '9', '25', '2024-04-19 09:12:12', '2024-04-19 09:12:12'),
	(16, 44, 'Nilai SAKIP Perangkat Daerah', '78 ', '61', '2024-04-24 07:14:18', '2024-04-24 07:14:18'),
	(17, 50, 'Nilai SAKIP Perangkat Daerah', '78', '61', '2024-04-24 07:14:56', '2024-04-24 07:14:56'),
	(18, 51, 'Indeks Profesionalisme ASN (IP-ASN) Perangkat Daerah', '41', '39', '2024-04-24 07:16:31', '2024-04-24 07:16:31');
/*!40000 ALTER TABLE `indikator_kinerjas` ENABLE KEYS */;

-- Dumping structure for table lbreeze.kinerja_utamas
CREATE TABLE IF NOT EXISTS `kinerja_utamas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kinerja_utama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.kinerja_utamas: ~5 rows (approximately)
/*!40000 ALTER TABLE `kinerja_utamas` DISABLE KEYS */;
INSERT INTO `kinerja_utamas` (`id`, `kinerja_utama`, `created_at`, `updated_at`) VALUES
	(44, 'Meningkatnya Pemenuhan Dokumen Pendaftaran Penduduk', '2024-04-19 09:05:43', '2024-04-19 09:05:43'),
	(45, 'Meningkatnya Pemenuhan Dokumen Pencatatan Sipil', '2024-04-19 09:05:59', '2024-04-19 09:05:59'),
	(46, 'Meningkatnya Pemanfaatan Data Kependudukan', '2024-04-19 09:06:49', '2024-04-19 09:06:49'),
	(50, 'Meningkatnya Akuntabilitas Kinerja Perangkat Daerah', '2024-04-24 07:13:54', '2024-04-24 07:13:54'),
	(51, 'Meningkatnya Profesionalisme ASN Perangkat Daerah', '2024-04-24 07:16:14', '2024-04-24 07:16:14');
/*!40000 ALTER TABLE `kinerja_utamas` ENABLE KEYS */;

-- Dumping structure for table lbreeze.laporans
CREATE TABLE IF NOT EXISTS `laporans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sasaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_t1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_t1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentasi_t1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_t2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_t2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentasi_t2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_t3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_t3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentasi_t3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_t4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_t4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentasi_t4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sasaran2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indikator2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_ctt_t1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_pendorong_t1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_penghambat_t1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_ctt_t2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_pendorong_t2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_penghambat_t2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_ctt_t3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_pendorong_t3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_penghambat_t3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi_ctt_t4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_pendorong_t4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faktor_penghambat_t4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `catatan_kadis_t1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_kadis_t2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_kadis_t3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_kadis_t4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.laporans: ~8 rows (approximately)
/*!40000 ALTER TABLE `laporans` DISABLE KEYS */;
INSERT INTO `laporans` (`id`, `image`, `sasaran`, `indikator`, `target`, `satuan`, `target_t1`, `realisasi_t1`, `persentasi_t1`, `target_t2`, `realisasi_t2`, `persentasi_t2`, `target_t3`, `realisasi_t3`, `persentasi_t3`, `target_t4`, `realisasi_t4`, `persentasi_t4`, `sasaran2`, `indikator2`, `target2`, `satuan2`, `realisasi_ctt_t1`, `faktor_pendorong_t1`, `faktor_penghambat_t1`, `realisasi_ctt_t2`, `faktor_pendorong_t2`, `faktor_penghambat_t2`, `realisasi_ctt_t3`, `faktor_pendorong_t3`, `faktor_penghambat_t3`, `realisasi_ctt_t4`, `faktor_pendorong_t4`, `faktor_penghambat_t4`, `created_at`, `updated_at`, `user_id`, `catatan_kadis_t1`, `catatan_kadis_t2`, `catatan_kadis_t3`, `catatan_kadis_t4`) VALUES
	(7, NULL, 'Meningkatnya Tertib Kepemilikan administrasi kependudukann Masyarakat', 'Indeks tertib kepemilikan administrasi kependudukan', '96.18', 'Poin', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', NULL, NULL, NULL, NULL, 'Realisasi catatan', 'faktor pendorong', 'faktor penghambat', 'realisasi ctt', 'fp_t2', 'fp_t2', 'r_ctt_t3', '2', '3', '1', '2', '3', '2024-04-17 07:06:30', '2024-04-24 00:55:17', 1, 'Catatan 1 2', NULL, NULL, NULL),
	(10, NULL, 'Meningkatnya Tertib Kepemilikan administrasi kependudukann Masyarakat', 'Indeks tertib kepemilikan administrasi kependudukan', '96.18', 'Poin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Realisasi catatan', NULL, NULL, NULL, NULL, NULL, '1', '2', '3', '1', '2', '3', '2024-04-17 07:09:45', '2024-04-17 07:09:45', 2, 'Catatan 1 33', NULL, NULL, NULL),
	(11, NULL, 'Meningkatnya Tertib Kepemilikan administrasi kependudukann Masyarakat', 'Indeks tertib kepemilikan administrasi kependudukan', '96.18', 'Poin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 07:12:08', '2024-04-17 07:12:08', 1, 'Catatan 1 4', NULL, NULL, NULL),
	(12, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 07:12:25', '2024-04-17 07:17:45', 2, 'Catatan 1 5', NULL, NULL, NULL),
	(13, NULL, 'Meningkatnya Tertib Kepemilikan administrasi kependudukann Masyarakat', 'Indeks tertib kepemilikan administrasi kependudukan', '96.18', 'Poin', '75 Poin', 'poin', '100', '75 poin', 'poin', '117.77', '75 poin', 'poin', '117.77', 'A poin', 'poin', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-17 07:26:29', '2024-04-17 08:01:31', 1, 'Catatan 1 6', NULL, NULL, NULL),
	(14, NULL, 'Meningkatnya Tertib Kepemilikan administrasi kependudukann Masyarakat', 'Indeks tertib kepemilikan administrasi kependudukan', '96.18', 'Poin', '98.18 Skala 100', 'Skala 1-100', '101.58', '96.35% Skala 1-100', 'Skala 1-100', '101.24', '96.50 Skala 1-100', 'Skala 1-100', '101.26', '92.37% Skala 1-100', 'Skala 1-100', '103.76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', '2024-04-17 07:26:39', '2024-04-17 07:35:27', 2, 'Catatan 1 7', NULL, NULL, NULL),
	(15, NULL, 'Meningkatnya Tertib Kepemilikan administrasi kependudukann Masyarakat', 'Indeks tertib kepemilikan administrasi kependudukan', '96.28', 'Poin', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', 'Target Dummy Lorem Ipsum', '2024-04-18 08:21:22', '2024-04-24 02:06:11', 1, 'Catatan 1 Tambah', 'Catatan 1 Tambah', '-', '-'),
	(20, NULL, 'Meningkatnya Tertib Kepemilikan administrasi kependudukann Masyarakat', 'Indeks tertib kepemilikan administrasi kependudukan', '96.18', 'poin', '75 Poin', 'Skala 1-100', '76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 02:30:07', '2024-04-24 07:50:16', 2, 'Catatan 1 Tambah Edit', 'Catatan 1 Tambah', 'Catatan 1 Tambah', 'Catatan 1 Tambah');
/*!40000 ALTER TABLE `laporans` ENABLE KEYS */;

-- Dumping structure for table lbreeze.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.migrations: ~15 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_04_01_061742_add_role_to_users_table', 2),
	(6, '2024_04_04_012617_create_laporans_table', 3),
	(7, '2024_04_04_014224_create_laporans_table', 4),
	(8, '2024_04_18_073310_add_user_id_to_laporans_table', 5),
	(9, '2024_04_18_080934_add_user_id_to_laporans_table', 6),
	(10, '2024_04_18_081314_add_default_value_to_user_id_in_laporans_table', 7),
	(11, '2024_04_19_023557_create_kinerja_utamas_table', 8),
	(12, '2024_04_19_023803_create_indikator_kinerjas_table', 8),
	(13, '2024_04_22_003547_add_realisasi_to_indikator_kinerjas_table', 9),
	(14, '2024_04_22_010612_add_realisasi_to_indikator_kinerjas_table', 10),
	(15, '2024_04_23_024106_add_catatan_kadis_columns_to_laporans_table', 11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table lbreeze.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table lbreeze.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table lbreeze.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
	(1, 'Dira', 'sekretariat@gmail.com', NULL, '$2y$10$KG8AENaAKIcJbD90gN7cFuSGMnrGr9b/9qkAzKZzeu6bLZW2xHmse', NULL, '2024-04-01 05:58:28', '2024-04-01 05:58:28', 'admin'),
	(2, 'Ryan', 'sekretariat2@gmail.com', NULL, '$2y$10$0DGwUnTDbnRSeQ6vthgP5.lfK5RlYbKKOJCIFOxL4mKAI5axin1l2', NULL, '2024-04-18 08:23:18', '2024-04-18 08:23:18', 'user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
