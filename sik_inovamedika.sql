-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sik_inovamedika
CREATE DATABASE IF NOT EXISTS `sik_inovamedika` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `sik_inovamedika`;

-- Dumping structure for table sik_inovamedika.tbl_obat
CREATE TABLE IF NOT EXISTS `tbl_obat` (
  `id_obat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_obat: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_obat` DISABLE KEYS */;
INSERT INTO `tbl_obat` (`id_obat`, `name`, `harga`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Desoxametasone', 33500, 'Obat Eksim', '2023-02-27 01:53:53', '2023-02-27 11:53:55'),
	(2, 'Siladex Syrup', 14900, 'Obat Batuk', '2023-02-27 11:54:56', '2023-02-27 11:55:06');
/*!40000 ALTER TABLE `tbl_obat` ENABLE KEYS */;

-- Dumping structure for table sik_inovamedika.tbl_pasien
CREATE TABLE IF NOT EXISTS `tbl_pasien` (
  `id_pasien` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(17) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` enum('P','W') DEFAULT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `kontak_lain` varchar(13) NOT NULL,
  `poliklinik` varchar(50) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_pasien: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_pasien` DISABLE KEYS */;
INSERT INTO `tbl_pasien` (`id_pasien`, `nik`, `nama_pasien`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `alamat`, `kontak_lain`, `poliklinik`, `jenis_layanan`, `created_at`, `updated_at`) VALUES
	(3, '327376856567', 'fifi', 'W', 'Bandung', '2000-03-01', '0882116876', 'jl mekarsari', '086636721', 'umum', 'umum', '2023-03-02 00:34:46', '2023-03-02 00:34:47');
/*!40000 ALTER TABLE `tbl_pasien` ENABLE KEYS */;

-- Dumping structure for table sik_inovamedika.tbl_pegawai
CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `id_card` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `wilayah_id` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_pegawai: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_pegawai` DISABLE KEYS */;
INSERT INTO `tbl_pegawai` (`id_pegawai`, `id_card`, `nama_pegawai`, `alamat`, `wilayah_id`, `jenis_kelamin`, `pendidikan_terakhir`, `photo`, `jabatan`, `created_at`, `updated_at`) VALUES
	(1, '152018', 'Nafia', 'Arcamanik Bandung', 1, 'Wanita', 'S1', '', 'Dokter', '2023-03-02 12:38:22', '2023-03-02 12:38:23'),
	(2, '152017', 'Himny', 'Manglayang', 2, 'Pria', 'S1', '', 'FrontOffice', '2023-03-02 12:39:22', '2023-03-02 12:39:23');
/*!40000 ALTER TABLE `tbl_pegawai` ENABLE KEYS */;

-- Dumping structure for table sik_inovamedika.tbl_resep
CREATE TABLE IF NOT EXISTS `tbl_resep` (
  `id_resep` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_obat` int(10) unsigned NOT NULL,
  `id_pasien` int(10) unsigned NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_resep`),
  KEY `FK_tbl_resep_tbl_obat` (`id_obat`),
  CONSTRAINT `FK_tbl_resep_tbl_obat` FOREIGN KEY (`id_obat`) REFERENCES `tbl_obat` (`id_obat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_resep: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_resep` DISABLE KEYS */;
INSERT INTO `tbl_resep` (`id_resep`, `id_obat`, `id_pasien`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2x1 sehari', '2023-03-02 13:21:22', '2023-03-02 13:21:23'),
	(2, 2, 1, '3x1', '2023-03-02 13:21:38', '2023-03-02 13:21:40');
/*!40000 ALTER TABLE `tbl_resep` ENABLE KEYS */;

-- Dumping structure for table sik_inovamedika.tbl_riwayat
CREATE TABLE IF NOT EXISTS `tbl_riwayat` (
  `id_riwayat` int(10) unsigned NOT NULL,
  `id_pasien` int(10) unsigned NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `id_tindakan` bigint(20) unsigned NOT NULL,
  `keterangan` text NOT NULL,
  `bb` float NOT NULL,
  `tb` float NOT NULL,
  `tensi` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_riwayat`),
  KEY `FK_tbl_riwayat_tbl_pasien` (`id_pasien`),
  KEY `FK_tbl_riwayat_tbl_pegawai` (`id_pegawai`),
  CONSTRAINT `FK_tbl_riwayat_tbl_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`),
  CONSTRAINT `FK_tbl_riwayat_tbl_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_riwayat: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_riwayat` DISABLE KEYS */;
INSERT INTO `tbl_riwayat` (`id_riwayat`, `id_pasien`, `id_pegawai`, `diagnosa`, `keluhan`, `id_tindakan`, `keterangan`, `bb`, `tb`, `tensi`, `created_at`, `updated_at`) VALUES
	(1, 3, 1, 'Usus Buntu', 'Sering Sakit Perut, Demam, Mual, Pusing', 1, 'Lakukan pemeriksaan lebih lanjut untuk rontgen', 55, 165, 98, NULL, NULL);
/*!40000 ALTER TABLE `tbl_riwayat` ENABLE KEYS */;

-- Dumping structure for table sik_inovamedika.tbl_tindakan
CREATE TABLE IF NOT EXISTS `tbl_tindakan` (
  `id_tindakan` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pasien` int(10) unsigned NOT NULL,
  `harga` bigint(20) NOT NULL,
  `layanan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tindakan`),
  KEY `FK_tbl_tindakan_tbl_pasien` (`id_pasien`),
  CONSTRAINT `FK_tbl_tindakan_tbl_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_tindakan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_tindakan` DISABLE KEYS */;
INSERT INTO `tbl_tindakan` (`id_tindakan`, `id_pasien`, `harga`, `layanan`, `created_at`, `updated_at`) VALUES
	(1, 3, 150000, 'Pemeriksaan Biasa', NULL, NULL),
	(2, 3, 100000, 'Pemeriksaan konsultasi', NULL, NULL);
/*!40000 ALTER TABLE `tbl_tindakan` ENABLE KEYS */;

-- Dumping structure for table sik_inovamedika.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `authKey` varchar(50) DEFAULT NULL,
  `accessToken` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `id_pegawai` int(10) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `users_email_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `authKey`, `accessToken`, `status`, `role`, `profile_photo_path`, `id_pegawai`, `created_at`, `updated_at`) VALUES
	(5, 'nafi@gmail.com', 'fifi', '', '', NULL, 'dokter', '', 152018, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 'himny@gmail.com', 'all', NULL, NULL, 10, 'Pegawai', NULL, 152017, '0000-00-00 00:00:00', '2023-03-02 12:17:18');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

-- Dumping structure for table sik_inovamedika.tbl_wilayah
CREATE TABLE IF NOT EXISTS `tbl_wilayah` (
  `id_wilayah` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kantor` varchar(100) NOT NULL,
  `wilayah` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sik_inovamedika.tbl_wilayah: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_wilayah` DISABLE KEYS */;
INSERT INTO `tbl_wilayah` (`id_wilayah`, `kantor`, `wilayah`, `created_at`, `updated_at`) VALUES
	(1, 'IVS Cabang 1', 'Malang', '2023-03-02 10:00:00', '2023-03-02 00:00:00'),
	(2, 'Inonva Cabang 2', 'Bandung', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tbl_wilayah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
