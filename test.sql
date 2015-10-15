-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.26 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;


-- Дамп структуры для таблица test.tetststat
CREATE TABLE IF NOT EXISTS `tetststat` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Дамп данных таблицы test.tetststat: ~4 rows (приблизительно)
DELETE FROM `tetststat`;
/*!40000 ALTER TABLE `tetststat` DISABLE KEYS */;
INSERT INTO `tetststat` (`id`, `name`, `pass`) VALUES
	(1, 'Ivan', 'Hasla'),
	(2, 'Ihor', 'Hasle'),
	(3, 'TYsk', 'Blkbsv'),
	(4, 'Seveeryn', 'Krs');
/*!40000 ALTER TABLE `tetststat` ENABLE KEYS */;


-- Дамп структуры для таблица test.trest
CREATE TABLE IF NOT EXISTS `trest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Count` int(11) DEFAULT NULL,
  `List` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Дамп данных таблицы test.trest: ~4 rows (приблизительно)
DELETE FROM `trest`;
/*!40000 ALTER TABLE `trest` DISABLE KEYS */;
INSERT INTO `trest` (`id`, `Count`, `List`) VALUES
	(1, 234, NULL),
	(2, 422, NULL),
	(3, 234, 'vergre'),
	(4, 234, 'ewrfewrwewe');
/*!40000 ALTER TABLE `trest` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
