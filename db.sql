-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for odds_converter
CREATE DATABASE IF NOT EXISTS `odds_converter` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `odds_converter`;

-- Dumping structure for tábla odds_converter.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'log ID',
  `log_json` text NOT NULL COMMENT 'log',
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Datetime for logs',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for tábla odds_converter.odds_storage
CREATE TABLE IF NOT EXISTS `odds_storage` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'odds id',
  `odds_json` text NOT NULL COMMENT 'odds json',
  `odds_convert_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'convert time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
