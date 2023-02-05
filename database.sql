-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for projek1
CREATE DATABASE IF NOT EXISTS `projek1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projek1`;

-- Dumping structure for table projek1.guru
CREATE TABLE IF NOT EXISTS `guru` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_guru` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `mapel` varchar(50) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table projek1.guru: ~6 rows (approximately)
INSERT INTO `guru` (`id`, `kode_guru`, `nama`, `mapel`) VALUES
	(7, 123, 'nn', 'Matematika'),
	(14, 33, 'asas', 'Matematika'),
	(15, 7868, 'nn', 'Matematika'),
	(16, 233, 'qweqw', 'Matematika'),
	(17, 123, 'udin', 'Matematika'),
	(18, 312, 'udin', 'Matematika'),
	(19, 897, 'reno', 'BHS Inggis'),
	(20, 13421, 'udin', 'Matematika'),
	(21, 2131, 'reno', 'Matematika');

-- Dumping structure for table projek1.jadwal
CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kelas` int DEFAULT NULL,
  `pelajaran` varchar(50) DEFAULT NULL,
  `jamke` int DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table projek1.jadwal: ~2 rows (approximately)
INSERT INTO `jadwal` (`id`, `kelas`, `pelajaran`, `jamke`, `jam`) VALUES
	(3, 12, 'MATEMATIKA', 2, '12.00-12.00'),
	(6, 10, 'PAI', 909, '16.00-17.00'),
	(7, 12, 'PAI', 9, '12.00-14.00');

-- Dumping structure for table projek1.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `pekerjaan` varchar(50) NOT NULL DEFAULT '0',
  `gaji` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table projek1.karyawan: ~1 rows (approximately)
INSERT INTO `karyawan` (`id`, `nama`, `pekerjaan`, `gaji`) VALUES
	(2, 'galih', 'menyapu', 200000),
	(4, 'reno', 'menyapu', 200000);

-- Dumping structure for table projek1.login
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table projek1.login: ~0 rows (approximately)
INSERT INTO `login` (`username`, `password`) VALUES
	('admin', 'admin');

-- Dumping structure for table projek1.pikettatib
CREATE TABLE IF NOT EXISTS `pikettatib` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hari` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `jam` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table projek1.pikettatib: ~3 rows (approximately)
INSERT INTO `pikettatib` (`id`, `hari`, `nama`, `jam`) VALUES
	(3, 'rabu', 'qweqw', '16.00-19.00'),
	(5, 'selasa', 'qweqw', '16.00-17.00'),
	(6, 'rabu', 'reno', '16.00-17.00'),
	(7, 'rabu', 'asdaasd', 'sad');

-- Dumping structure for table projek1.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gambar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table projek1.siswa: ~5 rows (approximately)
INSERT INTO `siswa` (`id`, `nama`, `kelas`, `jurusan`, `kelamin`, `gambar`, `jumlah`) VALUES
	(71, 'asd', '10', 'RPL', 'perempuan', 'Screenshot (29).png', NULL),
	(72, 'reno', '11', 'cybersecurity', 'perempuan', 'Screenshot (2).png', NULL),
	(73, 'asd', '11', 'TKJ', 'perempuan', '20221129_082815.jpg', NULL),
	(74, '', '10', 'RPL', '', 'Screenshot (2).png', NULL),
	(75, '', '10', 'RPL', '', '', NULL),
	(76, 'dafa', '12', 'cybersecurity', 'perempuan', 'Screenshot (35).png', NULL);

-- Dumping structure for table projek1.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table projek1.users: ~8 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
	(1, 'admin', 'admin', NULL),
	(2, 'reno', '123', 'reno'),
	(3, 'qwert', 'zzz', 'ttt'),
	(4, '123', '123', 'iman'),
	(5, '123', '321', 'reno'),
	(6, 'reno', '123', 'reno'),
	(7, 'udin', 'udin', 'qwerty'),
	(8, 'zzzz', 'zzzz', 'reno'),
	(9, 'admin', 'admin', 'anjay'),
	(10, 'reno', '456', 'udin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
