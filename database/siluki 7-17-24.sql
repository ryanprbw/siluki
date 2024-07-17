-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.7.1-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for lbreeze
CREATE DATABASE IF NOT EXISTS `lbreeze` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lbreeze`;

-- Dumping structure for table lbreeze.carousels
CREATE TABLE IF NOT EXISTS `carousels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

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

-- Data exporting was unselected.

-- Dumping structure for table lbreeze.indikator_kinerjas
CREATE TABLE IF NOT EXISTS `indikator_kinerjas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kinerja_utama_id` bigint(20) unsigned DEFAULT NULL,
  `indikator_kinerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indikator_kinerjas_kinerja_utama_id_foreign` (`kinerja_utama_id`),
  CONSTRAINT `indikator_kinerjas_kinerja_utama_id_foreign` FOREIGN KEY (`kinerja_utama_id`) REFERENCES `kinerja_utamas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table lbreeze.kinerja_utamas
CREATE TABLE IF NOT EXISTS `kinerja_utamas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kinerja_utama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

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
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table lbreeze.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table lbreeze.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

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

-- Data exporting was unselected.

-- Dumping structure for table lbreeze.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang` enum('Sekretariat','Pelayanan Pendaftaran Penduduk','Pengelolaan Informasi Administrasi Kependudukan','Pelayanan Pencatatan Sipil','Pemanfaatan Data dan Inovasi Pelayanan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` enum('Kepala Bidang','Kepala Dinas Kependudukan dan Pencatatan Sipil','Sekretaris Dinas Kependudukan dan Pencatatan Sipil','Kepala Bidang Pelayanan Pendaftaran Penduduk','Kepala Bidang Pengelolaan Informasi Administrasi Kependudukan','Kepala Bidang Pelayanan Pencatatan Sipil','Kepala Bidang Pemanfaatan Data dan Inovasi Pelayanan','Kasubbag Umum dan Kepegawaian','Kasubbag Keuangan','Kasubbag Perencanaan dan Pelaporan','JFT Analis Kebijakan','Pengadministrasi Kependudukan','Pranata Komputer Pelaksana','Bendahara (Pengeluaran)','Analis Perencanaan, Evaluasi, dan Pelaporan','Analis Kependudukan dan Pencatatan Sipil','Ahli Pertama - Pranata Komputer','Pengawas Kependudukan','JF Pranata Komputer Terampil','Analis Kebijakan Pertama') COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_jabatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
