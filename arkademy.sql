-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for arkademi
CREATE DATABASE IF NOT EXISTS `arkademi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `arkademi`;

-- Dumping structure for table arkademi.hobi
CREATE TABLE IF NOT EXISTS `hobi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `hobi_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table arkademi.hobi: ~2 rows (approximately)
/*!40000 ALTER TABLE `hobi` DISABLE KEYS */;
INSERT INTO `hobi` (`id`, `name`, `id_category`) VALUES
	(1, 'Mobile Legend', 1),
	(2, 'Futsal', 2);
/*!40000 ALTER TABLE `hobi` ENABLE KEYS */;

-- Dumping structure for table arkademi.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table arkademi.kategori: ~2 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `name`) VALUES
	(1, 'Game'),
	(2, 'Olahraga');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table arkademi.nama
CREATE TABLE IF NOT EXISTS `nama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `id_hobby` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hobby` (`id_hobby`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `nama_ibfk_1` FOREIGN KEY (`id_hobby`) REFERENCES `hobi` (`id`),
  CONSTRAINT `nama_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table arkademi.nama: ~2 rows (approximately)
/*!40000 ALTER TABLE `nama` DISABLE KEYS */;
INSERT INTO `nama` (`id`, `name`, `id_hobby`, `id_category`) VALUES
	(1, 'Sonie', 1, 1),
	(2, 'Isgie', 2, 2);
/*!40000 ALTER TABLE `nama` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
