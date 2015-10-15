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

-- Дамп структуры базы данных asg_dev
CREATE DATABASE IF NOT EXISTS `asg_dev` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `asg_dev`;


-- Дамп структуры для таблица asg_dev.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `file_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `layout` varchar(50) COLLATE utf8_bin NOT NULL,
  `create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Дамп данных таблицы asg_dev.pages: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT IGNORE INTO `pages` (`id`, `file_name`, `layout`, `create`, `modified`) VALUES
	(1, 'home.php', 'main', '2015-10-15 21:52:17', '2015-10-15 21:52:17');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


-- Дамп структуры для таблица asg_dev.pages_details
CREATE TABLE IF NOT EXISTS `pages_details` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `alias` varchar(50) COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK__pages` (`page_id`),
  CONSTRAINT `FK__pages` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Дамп данных таблицы asg_dev.pages_details: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `pages_details` DISABLE KEYS */;
INSERT IGNORE INTO `pages_details` (`id`, `page_id`, `language_id`, `alias`, `created`, `modified`) VALUES
	(0, 1, 1, 'home', '2015-10-15 22:18:24', '2015-10-15 22:18:24');
/*!40000 ALTER TABLE `pages_details` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
