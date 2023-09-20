-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for skepsi
CREATE DATABASE IF NOT EXISTS `skepsi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `skepsi`;

-- Dumping structure for table skepsi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table skepsi.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table skepsi.lifetime_points
CREATE TABLE IF NOT EXISTS `lifetime_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` int(11) NOT NULL DEFAULT 0,
  `points` double NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table skepsi.lifetime_points: ~3 rows (approximately)
DELETE FROM `lifetime_points`;
INSERT INTO `lifetime_points` (`id`, `clientid`, `points`, `created`) VALUES
	(1, 1, 574, '2023-03-20 08:06:04'),
	(2, 2, 50, '2023-03-15 13:15:06'),
	(3, 3, 2170, '2023-03-20 06:05:41');

-- Dumping structure for table skepsi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table skepsi.migrations: ~4 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Dumping structure for table skepsi.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table skepsi.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;

-- Dumping structure for table skepsi.patients
CREATE TABLE IF NOT EXISTS `patients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT 0,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `identification` varchar(191) NOT NULL,
  `sex` varchar(191) NOT NULL,
  `dateofbirth` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone_1` varchar(191) NOT NULL DEFAULT '000',
  `phone_2` varchar(191) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `town` varchar(500) DEFAULT NULL,
  `postal` varchar(500) DEFAULT NULL,
  `relative_name` varchar(500) DEFAULT NULL,
  `relativity` varchar(500) DEFAULT NULL,
  `relative_phone` varchar(500) DEFAULT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16586 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table skepsi.patients: 6 rows
DELETE FROM `patients`;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` (`id`, `userid`, `fname`, `lname`, `identification`, `sex`, `dateofbirth`, `email`, `phone_1`, `phone_2`, `notes`, `address`, `town`, `postal`, `relative_name`, `relativity`, `relative_phone`, `updated_by`, `updated_at`) VALUES
	(1, 12, 'Test', 'Petros', '100100', 'Male', '08/03/1978', 'peterpapagiannis@yahoo.com', '99226024', '+35733290744', 'Test', 'Dimokratias 12', 'Ypsonas', '4182', 'Penny MArkopoulou', 'Wife', '99226024', 1, '2023-05-02 06:59:51'),
	(2, 12, 'Test', 'Patient 2', '100100', 'Male', '04/26/1987', 'john@mail.com', '+35733290744', '123213', NULL, 'DIMOKRATIAS', 'Limassol', '4182', 'Someting Someting', 'Relative close', '+35733290744', 1, '2023-05-02 06:59:59'),
	(3, 1, 'Petros', 'Papagiannis', '', '', '', NULL, '+35733290744', 'ipoiup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-03-20 04:05:20'),
	(16583, 12, 'ΠΕΤΡΟΣ', 'ΠΑΠΑΓΙΑΝΝΗΣ', '100100', 'Male', '04/26/2023', 'peterpapagiannis@yahoo.com', '99226024', '+35799260744', NULL, 'Dimokratias 12', 'Ypsonas', '4182', 'Penny MArkopoulou', 'Wife', '99260744', 1, '2023-05-02 07:00:10'),
	(16584, 1, 'ΠΕΤΡΟΣ', 'ΠΑΠΑΓΙΑΝΝΗΣ', '100100', 'Male', '04/26/2023', 'peterpapagiannis@yahoo.com', '99226024', '+35799260744', NULL, 'Dimokratias 12', 'Ypsonas', '4182', 'Penny Markopoulou', 'Wife', '99260744', 1, '2023-04-27 06:04:42'),
	(16585, 12, 'Patient 3', 'Patient 3', '8587456', 'Male', '12/10/1985', 'patient3@mail.com', '99696961', '9968574', 'TEst Patient 3\r\nNotes', 'Danais', 'Paphos', '5875', 'Relative patient3', 'Brother', '123123213', 1, '2023-05-02 07:00:18');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;

-- Dumping structure for table skepsi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table skepsi.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table skepsi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table skepsi.users: ~4 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Petros Papagiannis-ADMIN', 'peterpapagiannis@yahoo.com', NULL, '$2y$10$NnG0bS4Kruvx2ni/IrsiOezVZfZi9hjywEW4QSsUQKQ04e4LmenIK', 1, 'zVdoiywfdSB0ZRQI1QAgGNtHkJDoc5oBW3kc28RC0bbvnk8d5uM0Z0vOuMHq', '2023-02-17 06:44:39', '2023-02-17 06:44:39'),
	(12, 'Intern 4', 'inter4@nup.ac.cy', NULL, '$2y$10$iz8iP./lGSsiaOlcgOMveOJdu3wvXYFhrk2YuX2BvrGgE8Xmrgyr2', 0, NULL, '2023-05-02 06:59:25', '2023-05-02 08:49:24'),
	(13, 'Intern 1', 'intern1@nup.ac.cy', NULL, '$2y$10$ZUDTG1vTPqmHXiUdf0oXuuIdtXsCEdUED8VFi4ccwl1K41Q85GLKC', 0, NULL, '2023-05-02 08:45:25', '2023-05-02 08:45:25'),
	(15, 'Skepsi - Admin', 'skepsi@nup.ac.cy', NULL, '$2y$10$iz8iP./lGSsiaOlcgOMveOJdu3wvXYFhrk2YuX2BvrGgE8Xmrgyr2', 1, 'nMjFZUZHGiE0owfQVEvDK8oykzYgLC5TiPiVHLmmQyXk429cRvpfYk86JPGx', '2023-02-17 06:44:39', '2023-02-17 06:44:39');

-- Dumping structure for table skepsi.visits
CREATE TABLE IF NOT EXISTS `visits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL DEFAULT 0,
  `visit` varchar(10) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `comment` longtext DEFAULT NULL,
  `date` varchar(150) DEFAULT NULL,
  `study_year` varchar(150) DEFAULT NULL,
  `job` varchar(150) DEFAULT NULL,
  `job_feel` longtext DEFAULT NULL,
  `psyc` varchar(150) DEFAULT NULL,
  `psyc_when` varchar(150) DEFAULT NULL,
  `psyc_where` varchar(150) DEFAULT NULL,
  `psyc_exp` longtext DEFAULT NULL,
  `psyc_reference` varchar(150) DEFAULT NULL,
  `reference_who` varchar(150) DEFAULT NULL,
  `psyc_visit_why` longtext DEFAULT NULL,
  `psyc_travma` longtext DEFAULT NULL,
  `doctor_reference` varchar(150) DEFAULT NULL,
  `doctor_who` varchar(150) DEFAULT NULL,
  `medical_prob` longtext DEFAULT NULL,
  `meds_reference` varchar(150) DEFAULT NULL,
  `meds_what` varchar(150) DEFAULT NULL,
  `alcohol` longtext DEFAULT NULL,
  `psyc_history_prob` longtext DEFAULT NULL,
  `hospital` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table skepsi.visits: ~7 rows (approximately)
DELETE FROM `visits`;
INSERT INTO `visits` (`id`, `patientid`, `visit`, `created`, `updated_by`, `comment`, `date`, `study_year`, `job`, `job_feel`, `psyc`, `psyc_when`, `psyc_where`, `psyc_exp`, `psyc_reference`, `reference_who`, `psyc_visit_why`, `psyc_travma`, `doctor_reference`, `doctor_who`, `medical_prob`, `meds_reference`, `meds_what`, `alcohol`, `psyc_history_prob`, `hospital`) VALUES
	(39, 1, '1', '2023-04-25 12:10:15', 1, '[{"id":"input_3_0_1"},{"id":"input_3_1_1"},{"id":"input_3_2_0"},{"id":"input_3_3_0"},{"id":"input_3_4_0"},{"id":"input_3_5_1"},{"id":"input_3_6_0"},{"id":"input_3_7_0"},{"id":"input_3_8_0"},{"id":"input_3_9_0"},{"id":"input_3_10_0"},{"id":"input_3_11_0"},{"id":"input_3_12_0"},{"id":"input_3_13_0"},{"id":"input_3_14_0"},{"id":"input_3_15_0"},{"id":"input_3_16_0"},{"id":"input_3_17_0"},{"id":"input_3_18_0"},{"id":"input_3_19_0"},{"id":"input_3_20_0"},{"id":"input_3_21_0"},{"id":"input_3_22_0"},{"id":"input_3_23_0"},{"id":"input_3_24_0"},{"id":"input_3_25_0"},{"id":"input_3_26_0"},{"id":"input_3_27_0"},{"id":"input_3_28_0"},{"id":"input_3_29_0"},{"id":"input_3_30_0"},{"id":"input_3_31_0"},{"id":"input_3_32_0"},{"id":"input_3_33_0"},{"id":"input_3_34_0"},{"id":"input_3_35_0"},{"id":"input_3_36_0"},{"id":"input_3_37_0"},{"id":"input_3_38_0"},{"id":"input_3_39_0"},{"id":"input_3_40_0"},{"id":"input_3_41_0"},{"id":"input_3_42_0"},{"id":"input_3_43_0"},{"id":"input_3_44_0"},{"id":"input_3_45_0"},{"id":"input_3_46_0"},{"id":"input_3_47_0"},{"id":"input_3_48_0"},{"id":"input_3_49_0"},{"id":"input_3_50_0"},{"id":"input_3_51_0"},{"id":"input_3_52_0"},{"id":"input_3_53_0"},{"id":"input_3_54_0"},{"id":"input_3_55_0"},{"id":"input_3_56_0"},{"id":"input_3_57_0"},{"id":"input_3_58_0"},{"id":"input_3_59_0"},{"id":"input_3_60_0"},{"id":"input_3_61_0"},{"id":"input_3_62_0"},{"id":"input_3_63_0"},{"id":"input_3_64_0"},{"id":"input_3_65_0"},{"id":"input_3_66_0"},{"id":"input_3_67_0"},{"id":"input_3_68_0"},{"id":"input_3_69_0"},{"id":"input_3_70_0"},{"id":"input_3_71_0"},{"id":"input_3_72_0"},{"id":"input_3_73_0"},{"id":"input_3_74_0"},{"id":"input_3_75_0"},{"id":"input_3_76_0"},{"id":"input_3_77_0"},{"id":"input_3_78_0"},{"id":"input_3_79_0"},{"id":"input_3_80_0"},{"id":"input_3_81_0"},{"id":"input_3_82_0"},{"id":"input_3_83_0"},{"id":"input_3_84_0"},{"id":"input_3_85_0"},{"id":"input_3_86_0"},{"id":"input_3_87_0"},{"id":"input_3_88_0"},{"id":"input_3_89_0"},{"id":"input_3_90_0"}]\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(41, 1, '2', '2023-04-25 12:56:20', 1, '[{"id":"input_3_0_4"},{"id":"input_3_1_4"},{"id":"input_3_2_4"},{"id":"input_3_3_4"},{"id":"input_3_4_4"},{"id":"input_3_5_4"},{"id":"input_3_6_4"},{"id":"input_3_7_4"},{"id":"input_3_8_4"},{"id":"input_3_9_4"},{"id":"input_3_10_4"},{"id":"input_3_11_4"},{"id":"input_3_12_4"},{"id":"input_3_13_4"},{"id":"input_3_14_4"},{"id":"input_3_15_4"},{"id":"input_3_16_4"},{"id":"input_3_17_4"},{"id":"input_3_18_4"},{"id":"input_3_19_4"},{"id":"input_3_20_4"},{"id":"input_3_21_4"},{"id":"input_3_22_4"},{"id":"input_3_23_4"},{"id":"input_3_24_4"},{"id":"input_3_25_4"},{"id":"input_3_26_4"},{"id":"input_3_27_4"},{"id":"input_3_28_4"},{"id":"input_3_29_4"},{"id":"input_3_30_4"},{"id":"input_3_31_4"},{"id":"input_3_32_4"},{"id":"input_3_33_4"},{"id":"input_3_34_4"},{"id":"input_3_35_4"},{"id":"input_3_36_4"},{"id":"input_3_37_4"},{"id":"input_3_38_4"},{"id":"input_3_39_4"},{"id":"input_3_40_4"},{"id":"input_3_41_4"},{"id":"input_3_42_4"},{"id":"input_3_43_4"},{"id":"input_3_44_4"},{"id":"input_3_45_4"},{"id":"input_3_46_4"},{"id":"input_3_47_4"},{"id":"input_3_48_4"},{"id":"input_3_49_4"},{"id":"input_3_50_4"},{"id":"input_3_51_4"},{"id":"input_3_52_4"},{"id":"input_3_53_4"},{"id":"input_3_54_4"},{"id":"input_3_55_4"},{"id":"input_3_56_4"},{"id":"input_3_57_4"},{"id":"input_3_58_4"},{"id":"input_3_59_4"},{"id":"input_3_60_4"},{"id":"input_3_61_4"},{"id":"input_3_62_4"},{"id":"input_3_63_4"},{"id":"input_3_64_4"},{"id":"input_3_65_4"},{"id":"input_3_66_4"},{"id":"input_3_67_4"},{"id":"input_3_68_4"},{"id":"input_3_69_4"},{"id":"input_3_70_4"},{"id":"input_3_71_4"},{"id":"input_3_72_4"},{"id":"input_3_73_4"},{"id":"input_3_74_4"},{"id":"input_3_75_4"},{"id":"input_3_76_4"},{"id":"input_3_77_4"},{"id":"input_3_78_4"},{"id":"input_3_79_4"},{"id":"input_3_80_4"},{"id":"input_3_81_4"},{"id":"input_3_82_4"},{"id":"input_3_83_4"},{"id":"input_3_84_4"},{"id":"input_3_85_4"},{"id":"input_3_86_4"},{"id":"input_3_87_4"},{"id":"input_3_88_4"},{"id":"input_3_89_4"},{"id":"input_3_90_4"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(42, 1, '3', '2023-04-25 13:04:24', 1, '[{"id":"input_3_0_4"},{"id":"input_3_1_4"},{"id":"input_3_2_4"},{"id":"input_3_3_4"},{"id":"input_3_4_4"},{"id":"input_3_5_4"},{"id":"input_3_6_4"},{"id":"input_3_7_4"},{"id":"input_3_8_4"},{"id":"input_3_9_4"},{"id":"input_3_10_4"},{"id":"input_3_11_4"},{"id":"input_3_12_4"},{"id":"input_3_13_4"},{"id":"input_3_14_4"},{"id":"input_3_15_4"},{"id":"input_3_16_4"},{"id":"input_3_17_4"},{"id":"input_3_18_4"},{"id":"input_3_19_4"},{"id":"input_3_20_4"},{"id":"input_3_21_4"},{"id":"input_3_22_4"},{"id":"input_3_23_4"},{"id":"input_3_24_4"},{"id":"input_3_25_4"},{"id":"input_3_26_4"},{"id":"input_3_27_4"},{"id":"input_3_28_4"},{"id":"input_3_29_4"},{"id":"input_3_30_4"},{"id":"input_3_31_4"},{"id":"input_3_32_4"},{"id":"input_3_33_4"},{"id":"input_3_34_4"},{"id":"input_3_35_4"},{"id":"input_3_36_4"},{"id":"input_3_37_4"},{"id":"input_3_38_4"},{"id":"input_3_39_4"},{"id":"input_3_40_4"},{"id":"input_3_41_4"},{"id":"input_3_42_4"},{"id":"input_3_43_4"},{"id":"input_3_44_4"},{"id":"input_3_45_4"},{"id":"input_3_46_4"},{"id":"input_3_47_4"},{"id":"input_3_48_4"},{"id":"input_3_49_4"},{"id":"input_3_50_4"},{"id":"input_3_51_4"},{"id":"input_3_52_4"},{"id":"input_3_53_4"},{"id":"input_3_54_4"},{"id":"input_3_55_4"},{"id":"input_3_56_4"},{"id":"input_3_57_4"},{"id":"input_3_58_4"},{"id":"input_3_59_4"},{"id":"input_3_60_4"},{"id":"input_3_61_4"},{"id":"input_3_62_4"},{"id":"input_3_63_4"},{"id":"input_3_64_4"},{"id":"input_3_65_4"},{"id":"input_3_66_4"},{"id":"input_3_67_4"},{"id":"input_3_68_4"},{"id":"input_3_69_4"},{"id":"input_3_70_4"},{"id":"input_3_71_4"},{"id":"input_3_72_4"},{"id":"input_3_73_4"},{"id":"input_3_74_4"},{"id":"input_3_75_4"},{"id":"input_3_76_4"},{"id":"input_3_77_4"},{"id":"input_3_78_4"},{"id":"input_3_79_4"},{"id":"input_3_80_4"},{"id":"input_3_81_4"},{"id":"input_3_82_4"},{"id":"input_3_83_4"},{"id":"input_3_84_4"},{"id":"input_3_85_4"},{"id":"input_3_86_4"},{"id":"input_3_87_4"},{"id":"input_3_88_4"},{"id":"input_3_89_4"},{"id":"input_3_90_4"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(43, 1, '4', '2023-04-25 12:57:32', 1, '[{"id":"input_3_0_4"},{"id":"input_3_1_4"},{"id":"input_3_2_4"},{"id":"input_3_3_4"},{"id":"input_3_4_4"},{"id":"input_3_5_4"},{"id":"input_3_6_4"},{"id":"input_3_7_4"},{"id":"input_3_8_4"},{"id":"input_3_9_4"},{"id":"input_3_10_4"},{"id":"input_3_11_4"},{"id":"input_3_12_4"},{"id":"input_3_13_4"},{"id":"input_3_14_4"},{"id":"input_3_15_4"},{"id":"input_3_16_4"},{"id":"input_3_17_4"},{"id":"input_3_18_4"},{"id":"input_3_19_4"},{"id":"input_3_20_4"},{"id":"input_3_21_4"},{"id":"input_3_22_4"},{"id":"input_3_23_4"},{"id":"input_3_24_4"},{"id":"input_3_25_4"},{"id":"input_3_26_4"},{"id":"input_3_27_4"},{"id":"input_3_28_4"},{"id":"input_3_29_4"},{"id":"input_3_30_4"},{"id":"input_3_31_4"},{"id":"input_3_32_4"},{"id":"input_3_33_4"},{"id":"input_3_34_4"},{"id":"input_3_35_4"},{"id":"input_3_36_4"},{"id":"input_3_37_4"},{"id":"input_3_38_4"},{"id":"input_3_39_4"},{"id":"input_3_40_4"},{"id":"input_3_41_4"},{"id":"input_3_42_4"},{"id":"input_3_43_4"},{"id":"input_3_44_4"},{"id":"input_3_45_4"},{"id":"input_3_46_4"},{"id":"input_3_47_4"},{"id":"input_3_48_4"},{"id":"input_3_49_4"},{"id":"input_3_50_4"},{"id":"input_3_51_4"},{"id":"input_3_52_4"},{"id":"input_3_53_4"},{"id":"input_3_54_4"},{"id":"input_3_55_4"},{"id":"input_3_56_4"},{"id":"input_3_57_4"},{"id":"input_3_58_4"},{"id":"input_3_59_4"},{"id":"input_3_60_4"},{"id":"input_3_61_4"},{"id":"input_3_62_4"},{"id":"input_3_63_4"},{"id":"input_3_64_4"},{"id":"input_3_65_4"},{"id":"input_3_66_4"},{"id":"input_3_67_4"},{"id":"input_3_68_4"},{"id":"input_3_69_4"},{"id":"input_3_70_4"},{"id":"input_3_71_4"},{"id":"input_3_72_4"},{"id":"input_3_73_4"},{"id":"input_3_74_4"},{"id":"input_3_75_4"},{"id":"input_3_76_4"},{"id":"input_3_77_4"},{"id":"input_3_78_4"},{"id":"input_3_79_4"},{"id":"input_3_80_4"},{"id":"input_3_81_4"},{"id":"input_3_82_4"},{"id":"input_3_83_4"},{"id":"input_3_84_4"},{"id":"input_3_85_4"},{"id":"input_3_86_4"},{"id":"input_3_87_4"},{"id":"input_3_88_4"},{"id":"input_3_89_4"},{"id":"input_3_90_4"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(47, 2, '1', '2023-05-02 05:44:48', 1, '[{"id":"input_3_0_0"},{"id":"input_3_1_0"},{"id":"input_3_2_0"},{"id":"input_3_3_0"},{"id":"input_3_4_0"},{"id":"input_3_5_0"},{"id":"input_3_6_0"},{"id":"input_3_7_0"},{"id":"input_3_8_0"},{"id":"input_3_9_0"},{"id":"input_3_10_0"},{"id":"input_3_11_0"},{"id":"input_3_12_0"},{"id":"input_3_13_0"},{"id":"input_3_14_0"},{"id":"input_3_15_0"},{"id":"input_3_16_0"},{"id":"input_3_17_0"},{"id":"input_3_18_0"},{"id":"input_3_19_0"},{"id":"input_3_20_0"},{"id":"input_3_21_0"},{"id":"input_3_22_0"},{"id":"input_3_23_0"},{"id":"input_3_24_0"},{"id":"input_3_25_0"},{"id":"input_3_26_0"},{"id":"input_3_27_0"},{"id":"input_3_28_0"},{"id":"input_3_29_0"},{"id":"input_3_30_0"},{"id":"input_3_31_0"},{"id":"input_3_32_0"},{"id":"input_3_33_0"},{"id":"input_3_34_0"},{"id":"input_3_35_0"},{"id":"input_3_36_0"},{"id":"input_3_37_0"},{"id":"input_3_38_0"},{"id":"input_3_39_0"},{"id":"input_3_40_0"},{"id":"input_3_41_0"},{"id":"input_3_42_0"},{"id":"input_3_43_0"},{"id":"input_3_44_0"},{"id":"input_3_45_0"}]', '28/04/2023', '123', '222', '123123', 'Yes', '2023-03-28', '323', '2323', 'Yes', '123123', '123123', '123123', 'Yes', NULL, '123123', 'Yes', '123123', '123123', '123123', '123123'),
	(48, 16584, '1', '2023-04-28 11:30:10', 1, '[{"id":"input_3_0_0"},{"id":"input_3_1_0"},{"id":"input_3_2_0"},{"id":"input_3_3_0"},{"id":"input_3_4_0"},{"id":"input_3_5_0"},{"id":"input_3_6_0"},{"id":"input_3_7_0"},{"id":"input_3_8_0"},{"id":"input_3_9_0"},{"id":"input_3_10_0"},{"id":"input_3_11_0"},{"id":"input_3_12_0"},{"id":"input_3_13_0"},{"id":"input_3_14_0"},{"id":"input_3_15_0"},{"id":"input_3_16_0"},{"id":"input_3_17_0"},{"id":"input_3_18_0"},{"id":"input_3_19_0"},{"id":"input_3_20_0"},{"id":"input_3_21_0"},{"id":"input_3_22_0"},{"id":"input_3_23_0"},{"id":"input_3_24_0"},{"id":"input_3_25_0"},{"id":"input_3_26_0"},{"id":"input_3_27_0"},{"id":"input_3_28_0"},{"id":"input_3_29_0"},{"id":"input_3_30_0"},{"id":"input_3_31_0"},{"id":"input_3_32_0"},{"id":"input_3_33_0"},{"id":"input_3_34_0"},{"id":"input_3_35_0"},{"id":"input_3_36_0"},{"id":"input_3_37_0"},{"id":"input_3_38_0"},{"id":"input_3_39_0"},{"id":"input_3_40_0"},{"id":"input_3_41_0"},{"id":"input_3_42_0"},{"id":"input_3_43_0"},{"id":"input_3_44_0"},{"id":"input_3_45_0"}]', '28/04/2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(49, 1, '5', '2023-04-28 11:36:50', 1, '[{"id":"input_3_0_0"},{"id":"input_3_1_0"},{"id":"input_3_2_0"},{"id":"input_3_3_0"},{"id":"input_3_4_0"},{"id":"input_3_5_0"},{"id":"input_3_6_0"},{"id":"input_3_7_0"},{"id":"input_3_8_0"},{"id":"input_3_9_0"},{"id":"input_3_10_0"},{"id":"input_3_11_0"},{"id":"input_3_12_0"},{"id":"input_3_13_0"},{"id":"input_3_14_0"},{"id":"input_3_15_0"},{"id":"input_3_16_0"},{"id":"input_3_17_0"},{"id":"input_3_18_0"},{"id":"input_3_19_0"},{"id":"input_3_20_0"},{"id":"input_3_21_0"},{"id":"input_3_22_0"},{"id":"input_3_23_0"},{"id":"input_3_24_0"},{"id":"input_3_25_0"},{"id":"input_3_26_0"},{"id":"input_3_27_0"},{"id":"input_3_28_0"},{"id":"input_3_29_0"},{"id":"input_3_30_0"},{"id":"input_3_31_0"},{"id":"input_3_32_0"},{"id":"input_3_33_0"},{"id":"input_3_34_0"},{"id":"input_3_35_0"},{"id":"input_3_36_0"},{"id":"input_3_37_0"},{"id":"input_3_38_0"},{"id":"input_3_39_0"},{"id":"input_3_40_0"},{"id":"input_3_41_0"},{"id":"input_3_42_0"},{"id":"input_3_43_0"},{"id":"input_3_44_0"},{"id":"input_3_45_0"},{"id":"input_3_46_0"},{"id":"input_3_47_0"},{"id":"input_3_48_0"},{"id":"input_3_49_0"},{"id":"input_3_50_0"},{"id":"input_3_51_0"},{"id":"input_3_52_0"},{"id":"input_3_53_0"},{"id":"input_3_54_0"},{"id":"input_3_55_0"},{"id":"input_3_56_0"},{"id":"input_3_57_0"},{"id":"input_3_58_0"},{"id":"input_3_59_0"},{"id":"input_3_60_0"},{"id":"input_3_61_0"},{"id":"input_3_62_0"},{"id":"input_3_63_0"},{"id":"input_3_64_0"},{"id":"input_3_65_0"},{"id":"input_3_66_0"},{"id":"input_3_67_0"},{"id":"input_3_68_0"},{"id":"input_3_69_0"},{"id":"input_3_70_0"},{"id":"input_3_71_0"},{"id":"input_3_72_0"},{"id":"input_3_73_0"},{"id":"input_3_74_0"},{"id":"input_3_75_0"},{"id":"input_3_76_0"},{"id":"input_3_77_0"},{"id":"input_3_78_0"},{"id":"input_3_79_0"},{"id":"input_3_80_0"},{"id":"input_3_81_0"},{"id":"input_3_82_0"},{"id":"input_3_83_0"},{"id":"input_3_84_0"},{"id":"input_3_85_0"},{"id":"input_3_86_0"},{"id":"input_3_87_0"},{"id":"input_3_88_0"},{"id":"input_3_89_0"},{"id":"input_3_90_0"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(50, 16585, '1', '2023-05-02 07:26:40', 11, '[{"id":"input_3_0_0"},{"id":"input_3_1_1"},{"id":"input_3_2_2"},{"id":"input_3_3_3"},{"id":"input_3_4_4"},{"id":"input_3_5_4"},{"id":"input_3_6_3"},{"id":"input_3_7_2"},{"id":"input_3_8_1"},{"id":"input_3_9_0"},{"id":"input_3_10_0"},{"id":"input_3_11_0"},{"id":"input_3_12_0"},{"id":"input_3_13_1"},{"id":"input_3_14_0"},{"id":"input_3_15_2"},{"id":"input_3_16_0"},{"id":"input_3_17_2"},{"id":"input_3_18_3"},{"id":"input_3_19_0"},{"id":"input_3_20_4"},{"id":"input_3_21_0"},{"id":"input_3_22_4"},{"id":"input_3_23_2"},{"id":"input_3_24_4"},{"id":"input_3_25_2"},{"id":"input_3_26_0"},{"id":"input_3_27_0"},{"id":"input_3_28_0"},{"id":"input_3_29_0"},{"id":"input_3_30_0"},{"id":"input_3_31_0"},{"id":"input_3_32_1"},{"id":"input_3_33_0"},{"id":"input_3_34_2"},{"id":"input_3_35_0"},{"id":"input_3_36_2"},{"id":"input_3_37_0"},{"id":"input_3_38_3"},{"id":"input_3_39_0"},{"id":"input_3_40_2"},{"id":"input_3_41_0"},{"id":"input_3_42_2"},{"id":"input_3_43_2"},{"id":"input_3_44_3"},{"id":"input_3_45_1"}]', '02/05/2023', NULL, NULL, NULL, 'No', NULL, NULL, NULL, 'No', NULL, '234234234', '2333333333333', 'No', NULL, 'Άσθμα', 'Yes', 'Εισπνεόμενο', 'ασδασδ', 'ασδσαδ', 'αδσφσδφ'),
	(51, 16585, '2', '2023-05-02 07:34:45', 11, '[{"id":"input_3_0_0"},{"id":"input_3_1_1"},{"id":"input_3_2_2"},{"id":"input_3_3_3"},{"id":"input_3_4_4"},{"id":"input_3_5_3"},{"id":"input_3_6_2"},{"id":"input_3_7_1"},{"id":"input_3_8_0"},{"id":"input_3_9_1"},{"id":"input_3_10_2"},{"id":"input_3_11_3"},{"id":"input_3_12_4"},{"id":"input_3_13_3"},{"id":"input_3_14_2"},{"id":"input_3_15_1"},{"id":"input_3_16_0"},{"id":"input_3_17_1"},{"id":"input_3_18_2"},{"id":"input_3_19_3"},{"id":"input_3_20_4"},{"id":"input_3_21_3"},{"id":"input_3_22_2"},{"id":"input_3_23_1"},{"id":"input_3_24_0"},{"id":"input_3_25_1"},{"id":"input_3_26_2"},{"id":"input_3_27_3"},{"id":"input_3_28_4"},{"id":"input_3_29_3"},{"id":"input_3_30_2"},{"id":"input_3_31_1"},{"id":"input_3_32_0"},{"id":"input_3_33_1"},{"id":"input_3_34_2"},{"id":"input_3_35_3"},{"id":"input_3_36_4"},{"id":"input_3_37_3"},{"id":"input_3_38_2"},{"id":"input_3_39_1"},{"id":"input_3_40_0"},{"id":"input_3_41_1"},{"id":"input_3_42_2"},{"id":"input_3_43_3"},{"id":"input_3_44_4"},{"id":"input_3_45_3"},{"id":"input_3_46_2"},{"id":"input_3_47_1"},{"id":"input_3_48_0"},{"id":"input_3_49_0"},{"id":"input_3_50_0"},{"id":"input_3_51_0"},{"id":"input_3_52_0"},{"id":"input_3_53_0"},{"id":"input_3_54_0"},{"id":"input_3_55_0"},{"id":"input_3_56_0"},{"id":"input_3_57_0"},{"id":"input_3_58_0"},{"id":"input_3_59_0"},{"id":"input_3_60_0"},{"id":"input_3_61_0"},{"id":"input_3_62_0"},{"id":"input_3_63_0"},{"id":"input_3_64_0"},{"id":"input_3_65_0"},{"id":"input_3_66_0"},{"id":"input_3_67_0"},{"id":"input_3_68_0"},{"id":"input_3_69_0"},{"id":"input_3_70_0"},{"id":"input_3_71_0"},{"id":"input_3_72_0"},{"id":"input_3_73_0"},{"id":"input_3_74_0"},{"id":"input_3_75_1"},{"id":"input_3_76_2"},{"id":"input_3_77_3"},{"id":"input_3_78_4"},{"id":"input_3_79_3"},{"id":"input_3_80_2"},{"id":"input_3_81_1"},{"id":"input_3_82_0"},{"id":"input_3_83_1"},{"id":"input_3_84_2"},{"id":"input_3_85_3"},{"id":"input_3_86_4"},{"id":"input_3_87_3"},{"id":"input_3_88_2"},{"id":"input_3_89_1"},{"id":"input_3_90_0"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
