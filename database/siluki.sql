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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.indikator_kinerjas: ~4 rows (approximately)
/*!40000 ALTER TABLE `indikator_kinerjas` DISABLE KEYS */;
INSERT INTO `indikator_kinerjas` (`id`, `kinerja_utama_id`, `indikator_kinerja`, `target`, `realisasi`, `created_at`, `updated_at`) VALUES
	(6, 1, 'Indeks Profesionalisme ASN (IP-ASN) Perangkat Daerah', '41', '36', '2024-04-24 09:51:39', '2024-04-24 09:51:39'),
	(7, 1, 'Nilai SAKIP Perangkat Daerah', '55', '51', '2024-04-24 09:51:56', '2024-04-24 09:51:56'),
	(9, 2, 'Indeks Profesionalisme ASN (IP-ASN) Perangkat Daerah', '99.9', '89.1', '2024-04-27 12:17:21', '2024-04-27 12:17:21');
/*!40000 ALTER TABLE `indikator_kinerjas` ENABLE KEYS */;

-- Dumping structure for table lbreeze.kinerja_utamas
CREATE TABLE IF NOT EXISTS `kinerja_utamas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kinerja_utama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.kinerja_utamas: ~3 rows (approximately)
/*!40000 ALTER TABLE `kinerja_utamas` DISABLE KEYS */;
INSERT INTO `kinerja_utamas` (`id`, `kinerja_utama`, `created_at`, `updated_at`) VALUES
	(1, 'Meningkatnya Profesionalisme ASN Perangkat Daerah', '2024-04-24 08:55:39', '2024-04-24 08:55:39'),
	(2, 'Meningkatnya Pemenuhan Dokumen Pencatatan Sipil', '2024-04-24 16:56:51', '2024-04-24 16:56:52');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.laporans: ~8 rows (approximately)
/*!40000 ALTER TABLE `laporans` DISABLE KEYS */;
INSERT INTO `laporans` (`id`, `image`, `sasaran`, `indikator`, `target`, `satuan`, `target_t1`, `realisasi_t1`, `persentasi_t1`, `target_t2`, `realisasi_t2`, `persentasi_t2`, `target_t3`, `realisasi_t3`, `persentasi_t3`, `target_t4`, `realisasi_t4`, `persentasi_t4`, `sasaran2`, `indikator2`, `target2`, `satuan2`, `realisasi_ctt_t1`, `faktor_pendorong_t1`, `faktor_penghambat_t1`, `realisasi_ctt_t2`, `faktor_pendorong_t2`, `faktor_penghambat_t2`, `realisasi_ctt_t3`, `faktor_pendorong_t3`, `faktor_penghambat_t3`, `realisasi_ctt_t4`, `faktor_pendorong_t4`, `faktor_penghambat_t4`, `created_at`, `updated_at`, `user_id`, `catatan_kadis_t1`, `catatan_kadis_t2`, `catatan_kadis_t3`, `catatan_kadis_t4`) VALUES
	(3, 'image1.jpg', 'Sasaran 1', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum', 'Target 1', 'Satuan 1', '100', '90', '90%', '110', '105', '95%', '120', '115', '96%', '130', '125', '97%', 'Sasaran 2', 'Indikator 2', 'Target 2', 'Satuan 2', 'Realisasi CTT T1', 'Faktor Pendorong T1', 'Faktor Penghambat T1', 'Realisasi CTT T2', 'Faktor Pendorong T2', 'Faktor Penghambat T2', 'Realisasi CTT T3', 'Faktor Pendorong T3', 'Faktor Penghambat T3', 'Realisasi CTT T4', 'Faktor Pendorong T4', 'Faktor Penghambat T4', '2024-04-27 17:47:42', '2024-04-27 17:47:42', 1, 'Catatan Kadis T1', 'Catatan Kadis T2', 'Catatan Kadis T3', 'Catatan Kadis T4'),
	(4, 'image1.jpg', 'Sasaran 1', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum', 'Target 1', 'Satuan 1', '100', '90', '90%', '110', '105', '95%', '120', '115', '96%', '130', '125', '97%', 'Sasaran 2', 'Indikator 2', 'Target 2', 'Satuan 2', 'Realisasi CTT T1', 'Faktor Pendorong T1', 'Faktor Penghambat T1', 'Realisasi CTT T2', 'Faktor Pendorong T2', 'Faktor Penghambat T2', 'Realisasi CTT T3', 'Faktor Pendorong T3', 'Faktor Penghambat T3', 'Realisasi CTT T4', 'Faktor Pendorong T4', 'Faktor Penghambat T4', '2024-04-27 17:51:38', '2024-04-27 17:51:38', 1, 'Catatan Kadis T1', 'Catatan Kadis T2', 'Catatan Kadis T3', 'Catatan Kadis T4'),
	(5, 'image2.jpg', 'Sasaran 1', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum', 'Target 1', 'Satuan 1', '90', '80', '88%', '100', '95', '95%', '110', '105', '95%', '120', '115', '96%', 'Sasaran 2', 'Indikator 2', 'Target 2', 'Satuan 2', 'Realisasi CTT T1', 'Faktor Pendorong T1', 'Faktor Penghambat T1', 'Realisasi CTT T2', 'Faktor Pendorong T2', 'Faktor Penghambat T2', 'Realisasi CTT T3', 'Faktor Pendorong T3', 'Faktor Penghambat T3', 'Realisasi CTT T4', 'Faktor Pendorong T4', 'Faktor Penghambat T4', '2024-04-27 17:51:38', '2024-04-27 17:51:38', 1, 'Catatan Kadis T1', 'Catatan Kadis T2', 'Catatan Kadis T3', 'Catatan Kadis T4'),
	(6, 'image3.jpg', 'Sasaran 1', 'Indikator 1', 'Target 1', 'Satuan 1', '95', '85', '89%', '105', '100', '95%', '115', '110', '96%', '125', '120', '96%', 'Sasaran 2', 'Indikator 2', 'Target 2', 'Satuan 2', 'Realisasi CTT T1', 'Faktor Pendorong T1', 'Faktor Penghambat T1', 'Realisasi CTT T2', 'Faktor Pendorong T2', 'Faktor Penghambat T2', 'Realisasi CTT T3', 'Faktor Pendorong T3', 'Faktor Penghambat T3', 'Realisasi CTT T4', 'Faktor Pendorong T4', 'Faktor Penghambat T4', '2024-04-27 17:51:38', '2024-04-27 17:51:38', 1, 'Catatan Kadis T1', 'Catatan Kadis T2', 'Catatan Kadis T3', 'Catatan Kadis T4'),
	(7, 'image4.jpg', 'Sasaran 1', 'Indikator 1', 'Target 1', 'Satuan 1', '110', '100', '91%', '120', '115', '96%', '130', '125', '96%', '140', '135', '96%', 'Sasaran 2', 'Indikator 2', 'Target 2', 'Satuan 2', 'Realisasi CTT T1', 'Faktor Pendorong T1', 'Faktor Penghambat T1', 'Realisasi CTT T2', 'Faktor Pendorong T2', 'Faktor Penghambat T2', 'Realisasi CTT T3', 'Faktor Pendorong T3', 'Faktor Penghambat T3', 'Realisasi CTT T4', 'Faktor Pendorong T4', 'Faktor Penghambat T4', '2024-04-27 17:51:38', '2024-04-27 17:51:38', 1, 'Catatan Kadis T1', 'Catatan Kadis T2', 'Catatan Kadis T3', 'Catatan Kadis T4'),
	(8, 'image5.jpg', 'Sasaran 1', 'Indikator 1', 'Target 1', 'Satuan 1', '105', '95', '90%', '115', '110', '95%', '125', '120', '96%', '135', '130', '96%', 'Sasaran 2', 'Indikator 2', 'Target 2', 'Satuan 2', 'Realisasi CTT T1', 'Faktor Pendorong T1', 'Faktor Penghambat T1', 'Realisasi CTT T2', 'Faktor Pendorong T2', 'Faktor Penghambat T2', 'Realisasi CTT T3', 'Faktor Pendorong T3', 'Faktor Penghambat T3', 'Realisasi CTT T4', 'Faktor Pendorong T4', 'Faktor Penghambat T4', '2024-04-27 17:51:38', '2024-04-27 17:51:38', 1, 'Catatan Kadis T1', 'Catatan Kadis T2', 'Catatan Kadis T3', 'Catatan Kadis T4'),
	(9, 'image1.jpg', 'Sasaran 1', 'Indikator 1', 'Target 1', 'Satuan 1', '100', '90', '90%', '110', '105', '95%', '120', '115', '96%', '130', '125', '97%', 'Sasaran 2', 'Indikator 2', 'Target 2', 'Satuan 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-27 17:53:51', '2024-04-27 15:21:02', 1, NULL, NULL, NULL, 'Test Catatan'),
	(10, 'image2.jpg', 'Sasaran 2', 'Indikator 3', 'Target 3', 'Satuan 3', '200', '180', '90%', '220', '210', '95%', '240', '230', '96%', '260', '250', '97%', 'Sasaran 3', 'Indikator 4', 'Target 4', 'Satuan 4', 'Realisasi CTT T1', 'Faktor Pendorong T1', 'Faktor Penghambat T1', 'Realisasi CTT T2', 'Faktor Pendorong T2', 'Faktor Penghambat T2', 'Realisasi CTT T3', 'Faktor Pendorong T3', 'Faktor Penghambat T3', 'Realisasi CTT T4', 'Faktor Pendorong T4', 'Faktor Penghambat T4', '2024-04-27 17:53:51', '2024-04-27 17:53:51', 2, 'Catatan Kadis T1', 'Catatan Kadis T2', 'Catatan Kadis T3', 'Catatan Kadis T4');
/*!40000 ALTER TABLE `laporans` ENABLE KEYS */;

-- Dumping structure for table lbreeze.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.migrations: ~16 rows (approximately)
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
	(15, '2024_04_23_024106_add_catatan_kadis_columns_to_laporans_table', 11),
	(16, '2024_04_27_152419_create_pegawais_table', 12),
	(18, '2024_04_27_153832_create_pegawais_table', 13);
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

-- Dumping structure for table lbreeze.pegawais
CREATE TABLE IF NOT EXISTS `pegawais` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `triwulan` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('ASN','Non-ASN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lbreeze.pegawais: ~1 rows (approximately)
/*!40000 ALTER TABLE `pegawais` DISABLE KEYS */;
INSERT INTO `pegawais` (`id`, `photo`, `triwulan`, `nama`, `jenis`, `nip`, `nilai`, `created_at`, `updated_at`) VALUES
	(1, '1714234230.jpg', 4, 'Ryan Prabowo Triwulan 4', 'ASN', '19960702 202421 1 003', 99.00, '2024-04-27 16:10:30', '2024-04-28 04:06:42'),
	(6, '1714277159.jpg', 1, 'Ryan Prabowo Triwulan 1', 'Non-ASN', NULL, 85.99, '2024-04-28 04:05:59', '2024-04-28 04:06:57');
/*!40000 ALTER TABLE `pegawais` ENABLE KEYS */;

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
